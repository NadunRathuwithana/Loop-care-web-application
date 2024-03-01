<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Models\AdminUser;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function index()
    {
        try {
            $allAdminUsers = AdminUser::get();
            return view('admin.users.index', compact('allAdminUsers'));
        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }

    public function Create(Request $request)
    {

        try {

            $admin_user = new AdminUser();

            $admin_user->first_name = $request->first_name;
            $admin_user->last_name = $request->last_name;
            $admin_user->email = $request->email;
            $admin_user->role = $request->role;

            $admin_user->save();
            return redirect()->back()->with('message', 'User Added successfully');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['Failed to retrieve Data']);

        }
    }
    public function Delete($id)
    {
        try {
            DB::table('admin_users')
                ->where(['id' => $id])
                ->delete();


            return redirect()->back()->with('message', 'Product deleted successfully');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['Failed to retrieve Data']);

        }
    }

    public function ChangeStatus($id)
    {
        try {
            // Retrieve the current value of is_active
            $currentStatus = DB::table('admin_users')
                ->where('id', $id)
                ->value('is_active');

            // Toggle the value of is_active
            $newStatus = $currentStatus == 0 ? 1 : 0;

            // Update the database with the new status
            DB::table('admin_users')
                ->where('id', $id)
                ->update(['is_active' => $newStatus]);

            return redirect()->back()->with('message', 'Status changed successfully');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['Failed to change status']);
        }
    }



    public function Edit(Request $request, $id)
{
    try {
        $admin_user = AdminUser::findOrFail($id);

        $admin_user->first_name = $request->input('first_name');
        $admin_user->last_name = $request->input('last_name');
        $admin_user->email = $request->input('email');
        $admin_user->role = $request->input('role');

        $admin_user->save();

        return redirect()->back()->with('message', 'User updated successfully');
    } catch (Exception $e) {
        return redirect()->back()->withErrors(['Failed to update user']);
    }
}

}
