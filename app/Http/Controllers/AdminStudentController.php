<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminStudentController extends Controller
{
    public function index()
    {
        $users = User::all()->where('role', 'student')->each(function($user){
            // dump($user->bookUser->count());
            $booksBorrowed = $user->bookUser->count();
            $user->booksBorrowed = $booksBorrowed;
        });
        return view('admin.index-student', ['users' => $users]);
    }

    public function approveStudent($id)
    {
        User::where('id', $id)->update([
            'is_verified' => true
        ]);
        return redirect()->route('student.index')->with('Success', 'User has been approved!');
    }
}
