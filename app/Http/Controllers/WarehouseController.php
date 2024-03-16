<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Warehouse;

class WarehouseController extends Controller
{
    //
    public function addWarehouse(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'address' => 'required',
                'street' => 'string',
                'city' => 'required',
                'pincode' => 'required',
                'state' => 'required',
                'country' => 'required',
                'capacity' => 'required|integer',
                'area' => 'required',
                'landmark'  =>'required',
            ]);

            $warehouse = Warehouse::create($validatedData);

            return response()->json(['message' => 'Warehouse created successfully', 'data' => $warehouse], 201);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error creating warehouse', 'message' => $e->getMessage()], 500);
        }
    }
}
