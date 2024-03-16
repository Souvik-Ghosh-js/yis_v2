<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;
use Illuminate\Support\Facades\DB;


class NotificationController extends Controller
{
    public function getNotifications(Request $request)
    {
        $request->validate([
            'user_id' => 'required|integer',
            'warehouse_id' => 'required|integer',
            'self' => 'required|boolean',
            'read' => 'required|boolean',
        ]);

        $user_id = $request->input('user_id');
        $warehouse_id = $request->input('warehouse_id');
        $self = $request->input('self');
        $read = $request->input('read');

        // Fetch notifications
        $notifications = Notification::where('user_id', $user_id)
            ->where('warehouse_id', $warehouse_id)
            ->where('self', $self)
            ->where('read', $read)
            ->get();

        // // Update 'read' to 1 for the fetched notifications
        // Notification::where('user_id', $user_id)
        //     ->where('warehouse_id', $warehouse_id)
        //     ->where('self', $self)
        //     ->where('read', $read)
        //     ->update(['read' => 1]);

        return response()->json(['notifications' => $notifications]);
    }
    public function clear_user()
{
    try {
        // Delete notifications with self equal to 1
        DB::table('user_notifications')->where('self', 1)->delete();

        return redirect()->back();
    } catch (\Exception $e) {
        \Log::error('Error clearing notifications: ' . $e->getMessage());
        dd($e->getMessage());
    }
}
public function clear_wm()
{
    try {
        // Delete notifications with self equal to 1
        DB::table('user_notifications')->where('self', 0)->delete();

        return redirect()->back();
    } catch (\Exception $e) {
        \Log::error('Error clearing notifications: ' . $e->getMessage());
        dd($e->getMessage());
    }
}

}
