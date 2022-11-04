<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
  public function index()
  {
    return view('auth.sign_in', [
      'title' => 'Sign In',
    ]);
  }

  public function sign_up()
  {
    return view('auth.sign_up', [
      'title' => 'Sign Up'
    ]);
  }

  public function registration(Request $request)
  {
    // return response()->json($request);
    $user_data = $request->validate([
      'username' => ['required', 'max:255', 'unique:users,username'],
      'email' => ['required', 'max:255', 'email', 'unique:users,email'],
      'password' => ['required', 'min:5', 'same:repeat_password']
    ]);

    $user_data['role'] = 'user';
    $user_data['password'] = bcrypt($request->password);

    User::create($user_data);

    return redirect('/')->with('success', 'Create account successful');
  }

  public function authenticate(Request $request)
  {
    $user = $request->validate([
      'email' => ['required', 'email'],
      'password' => ['required'],
    ]);
    
    // nnti bikinjuga buat yg laen

    // mirip mirip kan ya?
    // iya samain aja isi nya, beda nama doang

    // yg laen tu kek gallery sama article news ny kan?
    // article news kyk nya beda
    // maksud gua bikin buat ngelola gambar dlu aja
    // buat header, gallery sama apapun yg ngelola gambar

    // brarti pokus bikin buat dasbord ny dlo ye yg buat ngelola gambar
    // iya bikin dashboard dlu, mao bikin buat gambar ato artikel dlu sabeb lu

    // tapi yang gallery tu kan ada ni sek


    // berrti tambahin field nya
    // kalo ada text nya biin gitu ae
    // text yg atas field nya title, bawah nya descriptio

    // w tinggal bikin apanya brarti ni?
    // bikin tampilan dashboard nya dlu
    // sama pisahin klo dia user abis login kmna admin kmna
    if (Auth::attempt($user)) {
      $user = User::where('email', $request->email)->first();

      session([
        'role' => $user->role
      ]);
      
      $request->session()->regenerate();
      
      if ($user->role == "admin") {
        return redirect('dashboard/index');
      } else {
        return redirect('/');

      }
    }

    return back()->with('error', 'Login error');
  }

  public function logout(Request $request)
  {
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
  }
}
