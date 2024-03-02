<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    public function index()
    {
        try {
            $allAdminUsers = User::where('role', 'Admin')->get();
            return view('admin.users.index', compact('allAdminUsers'));
        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }

    public function AllUsers()
    {
        try {
            $allUsers = User::where('role', 'user')->get();
            return view('admin.signup_management.all_users', compact('allUsers'));
        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }

    public function Create(Request $request)
    {

        try {
            
            $admin_user = new User();

            $admin_user->fName = $request->fName;
            $admin_user->lName = $request->lName;
            $admin_user->email = $request->email;
            $admin_user->password = Hash::make($request->password);
            $admin_user->userType = $request->role;
            $admin_user->role = "Admin";

            $admin_user->save();
            
            return redirect()->back()->with('message', 'User Added successfully');
        } catch (Exception $e) {
         
            return redirect()->back()->withErrors(['Failed to retrieve Data']);

        }
    }
    public function Delete($id)
    {
        try {
            DB::table('users')
                ->where(['id' => $id])
                ->delete();


            return redirect()->back()->with('message', 'User deleted successfully');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['Failed to retrieve Data']);

        }
    }

    public function ChangeStatus($id)
    {
        try {
            $currentStatus = DB::table('users')
                ->where('id', $id)
                ->value('isActive');

            $newStatus = $currentStatus == 0 ? 1 : 0;

            DB::table('users')
                ->where('id', $id)
                ->update(['isActive' => $newStatus]);

            return redirect()->back()->with('message', 'Status changed successfully');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['Failed to change status']);
        }
    }



    public function Edit(Request $request, $id)
{
    try {
        $admin_user = User::findOrFail($id);

        $admin_user->fName = $request->input('first_name');
        $admin_user->lName = $request->input('last_name');
        $admin_user->email = $request->input('email');
        $admin_user->userType = $request->input('role');

        $admin_user->save();

        return redirect()->back()->with('message', 'User updated successfully');
    } catch (Exception $e) {
        return redirect()->back()->withErrors(['Failed to update user']);
    }
}

}
