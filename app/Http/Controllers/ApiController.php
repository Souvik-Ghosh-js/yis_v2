<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Passport\Facades\Passport;

use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\OtpMail;
use App\Mail\VerifyEmail;
use App\Models\Coupon;
use App\Models\Referral;


use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ApiController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        try {
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                $user = Auth::user();

                if    (!$user->verified) {
                    auth()->logout(); // Log out the user
                    return response()->json(['error' => 'Account not verified.'], 401);
                }

                $token = $user->createToken('AppName')->accessToken;
                // Redirect based on user type
                if ($user->type === 0) {
                    // return response()->json(['success' => 'Account verified.'], 200);

                    return redirect('/user-dashboard');
                } elseif ($user->type === 1) {
                    return redirect('/admin-page');
                } elseif ($user->type === 2) {
                    return redirect('/warehouse-dashboard');
                }
            } else {
                return response()->json(['error' => 'Unauthorized'], 401);
            }
        } catch (\Exception $e) {
            \Log::error('Error during login: ' . $e->getMessage());
            return response()->json(['error' => 'Something went wrong'], 500);
        }
    }


    public function signup(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'fname' => 'required|string',
                'lname' => 'required|string',
                'email' => 'required|email|unique:users',
                'contact' => 'required|numeric',
                'password' => 'required|string|min:8',
                'address' => 'string',
                'type' => 'required|in:0,1,2',
                'rcode'=> 'max:6',
            ]);

            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()], 422);
            }

            $verificationToken = Str::random(60);

            // Create a user without saving to get the user ID
            $user = new User([
                'fname' => $request->input('fname'),
                'lname' => $request->input('lname'),
                'name' => $request->input('fname') . ' ' . $request->input('lname'),
                'email' => $request->input('email'),
                'contact' => $request->input('contact'),
                'rcode' => $request->input('rcode') ?: null, // Generate a random 6-character alphanumeric code
                'type' => $request->input('type'),
                'password' => Hash::make($request->input('password')),
                'address' => $request->input('address'),
                'plan' => 1,
                'verified' => false,
                'verification_token' => $verificationToken,
            ]);

            $user->save(); // Save the user to get the user ID
            $referralcode = Str::random(6);
            // Store the referral code in the referrals table
            DB::table('referrals')->insert([
                'user_id' => $user->id,
                'referral_user_id' => null,
                'referral_code' => $referralcode,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            if ($request->has('rcode')) {
                $referral = Referral::where('referral_code', $request->input('rcode'))->first();

                if ($referral) {
                    // If a matching referral code is found, update the referral_user_id
                    $referral->update(['referral_user_id' => $user->id]);
                }
            }


            Mail::to($request->input('email'))->send(new VerifyEmail($user));
            return redirect('/login-page')->with('success', 'Check Your email for verification');
        } catch (\Exception $e) {
            dd($e->getMessage());
            \Log::error('Error during signup: ' . $e->getMessage());
            return response()->json(['error' => 'Something went wrong'], 500);
        }
    }

    public function verifyEmail(Request $request, $token)
    {
        try {
            $user = User::where('verification_token', $token)->first();

            if (!$user) {
                return response()->json(['error' => 'Invalid verification token'], 400);
            }

            // Check if the user is already verified
            if ($user->verified) {
                return response()->json(['error' => 'Email already verified'], 400);
            }

            $user->update([
                'verified' => true,
                'verification_token' => null, // Remove the token after verification
            ]);

            return redirect('/login-page')->with('success1', 'Your email has been verified. You can now log in.');

        } catch (\Exception $e) {
            \Log::error('Error during email verification: ' . $e->getMessage());
            return response()->json(['error' => 'Something went wrong'], 500);
        }
    }


    // public function sendOtp(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         // 'name' => 'required|string',
    //         'email' => 'required|email|unique:users',
    //     ]);

    //     if ($validator->fails()) {
    //         return response()->json(['error' => $validator->errors()], 422);
    //     }
    //     $request->session()->put('signup_data', [
    //         // 'name' => $request->input('name'),
    //         'email' => $request->input('email'),
    //         // Other relevant data
    //     ]);

    //     // Generate OTP
    //     $otp = rand(100000, 999999);

    //     // Save OTP in user session
    //     $request->session()->put('otp', $otp);

    //     try{
    //     Mail::to($request->email)->send(new OtpMail($otp));
    //     return redirect("/api/otp-check");
    //     // return response()->json(['redirecting to OTP check' => 'success'], 200);

    //     }
    //     catch (\Exception $e) {
    //         //
    //         Log::error('Error creating user: ' . $e->getMessage());
    //         dd($e->getMessage());
    //         return response()->json(['error' => 'Something went wrong'], 500);
    //     }

    // }

    // public function verifyOtp(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'otp' => 'required|numeric',
    //     ]);

    //     if ($validator->fails()) {
    //         return response()->json(['error' => $validator->errors()], 422);
    //     }

    //     $savedOtp = $request->session()->get('otp');

    //     if ($request->otp == $savedOtp) {
    //         return redirect('/api/set-password');

    //     } else {
    //         return response()->json(['error' => 'Invalid OTP'], 422);
    //     }
    // }

    // public function setPassword(Request $request)
    // {
    // $validator = Validator::make($request->all(), [
    //     'password' => 'required|string|min:6|confirmed',
    // ]);

    // if ($validator->fails()) {
    //     return response()->json(['error' => $validator->errors()], 422);
    // }

    // try {
    //     // Retrieve user details from the session
    //     $userData = $request->session()->get('signup_data');

    //     // Check if $userData is not null
    //     if (!$userData) {
    //         return response()->json(['error' => 'User data not found in session'], 500);
    //     }

    //     // Create a new user in the database
    //     $user = User::create([
    //         // 'name' => $userData['name'],
    //         'email' => $userData['email'],
    //         'password' => Hash::make($request->password),
    //     ]);

    //     // Clear user details from the session
    //     $request->session()->forget('signup_data');

    //     return redirect('/');
    //     return response()->json(['success' => 'redirect to loginpage'], 200);

    // } catch (\Exception $e) {
    //     Log::error('Error creating user: ' . $e->getMessage());
    //     // dd($e->getMessage());
    //     return response()->json(['error' => 'Something went wrong'], 500);
    // }
    // }

    public function logout(Request $request)
    {
        try {


            $user = Auth::user();

            $user->tokens->each(function ($token) {
                $token->delete();
            });


            auth()->logout();

            $request->session()->forget('key');

            return redirect("/");
            // return response()->json(['loggged out' => 'Succesfully'], 200);

        } catch (\Exception $e) {
            \Log::error('Error during logout: ' . $e->getMessage());
            dd($e->getMessage());
            return response()->json(['error' => 'Something went wrong'], 500);
        }
    }
    public function calculate(Request $request)
    {
        try {
            // Validate the form data
            $validator = Validator::make($request->all(), [
                'country' => 'required|string',
                'Weight' => 'required|numeric',
                'length' => 'required|numeric',
                'Width' => 'required|numeric',
                'Height' => 'required|numeric',
            ]);

            // Check for validation errors
            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }

            // Define shipping rates based on country (you can add more countries and rates)
            $shippingRates = [
                'India' => 30,
                // Add more countries here
            ];

            // Get the shipping rate for the selected country
            $country = $request->input('country');
            $shippingRate = $shippingRates[$country] ?? 0;

            // Calculate volume (length * width * height) and compare with weight
            $volume = $request->input('length') * $request->input('Width') * $request->input('Height');
            $actualWeight = $request->input('Weight');

            // Determine the chargeable weight (whichever is greater between volume and actual weight)
            $chargeableWeight = max($volume, $actualWeight);

            // Calculate the shipping cost
            $shippingCost = $chargeableWeight * $shippingRate;

            // You can now use $shippingCost for further processing or response

            return response()->json(['shipping_cost' => $shippingCost]);
        } catch (\Exception $e) {
            // Handle exceptions
            \Log::error('Error during shipping cost calculation: ' . $e->getMessage());

            return response()->json(['error' => 'Something went wrong'], 500);
        }
    }

    public function addcoupons(Request $request)
    {
        try {
            // Validate the incoming request data
            $request->validate([
                'name' => 'required|string',
                'discount' => 'required|numeric',
                'amount' => 'required|numeric',
                'code' => 'required|string|unique:coupons',
            ]);

            // Create a new coupon directly in the database
            $coupon = Coupon::create([
                'coupon_name' => $request->name,
                'discount' => $request->discount ,
                'min_amount' => $request->amount,
                'code' => $request->code,
                'status' => 'Activated', // Assuming the default status is active
            ]);

            // Return a JSON response indicating the success of the operation
            return redirect('/coupon');
        } catch (\Exception $e) {
            // Return a JSON response with an error message if an exception occurs
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

}

