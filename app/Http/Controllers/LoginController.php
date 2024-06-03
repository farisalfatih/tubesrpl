<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('login.index', [
            'title' => 'Login',
            'active' => 'login',
            'user' => $user, // Menyertakan informasi user ke dalam view
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Dapatkan user yang sedang login
            $user = Auth::user();

            // Periksa peran user dan arahkan ke halaman yang sesuai
            if ($user->role == 'dosen') {
                return redirect()->intended('/dosen-dashboard');
            } elseif ($user->role == 'mahasiswa') {
                return redirect()->intended('/');
            }

            // Default redirect jika peran tidak dikenali
            // return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', 'Login failed!');
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
}
