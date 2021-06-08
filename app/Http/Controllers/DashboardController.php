<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $user_id = auth()->user('id');
        $user = User::find($user_id);
        return view('dashboard')->with('songs', $user->songs);
    }
}
