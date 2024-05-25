<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class AdminController extends Controller
{
    public function adminDashboard(){
        
        $user = User::all();
        return view('admin.admin_dashboard', compact('user'));
    }
    public function adminLogin(){
        return view('admin.admin_login');
    }
    public function adminDestroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    
    
}
