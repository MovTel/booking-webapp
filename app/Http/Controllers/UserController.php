<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
  public function registrationAttempt(Request $request)
  {
    $validated = $request->validate([
      "first_name" => ['required'],
      "last_name" => ['required'],
      "middle_name" => ['required'],
      "contact_no" => ['required'],
      'email' => ['required', 'email', Rule::unique('users', 'email')],
      'password' => ['required', 'confirmed', 'min:6'],
    ]);

    $validated['password'] = bcrypt($validated['password']);

    User::create(array_merge($validated, ['user_type' => '4']))->id;
    return redirect('/dashboard');
  }

  public function loginAttempt(Request $request)
  {
    $validated = $request->validate([
      'email' => ['required'],
      'password' => 'required',
    ]);

    if (auth()->attempt($validated)) {
      $request->session()->regenerate();
      $user = auth()->user();

      // $token = $user->createToken('sanctum-token')->plainTextToken;

      return redirect('/dashboard')->with('message', 'Login Successful.');
    }

    return back()->withErrors(['username' => 'Login Failed.'])->onlyInput('email');
  }

  public function logout(Request $request)
  {
    auth()->logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect("/");
  }

  public function profile() {
    $user_id = auth()->user()->id;
    $user = User::findOrFail($user_id);

    return view('webapp.users.profile', ['data' => $user]);
  }

  public function registrationAttemptOwner(Request $request)
  {
    $validated = $request->validate([
      "first_name" => ['required'],
      "last_name" => ['required'],
      "middle_name" => ['required'],
      "contact_no" => ['required'],
      'email' => ['required', 'email', Rule::unique('users', 'email')],
      'password' => ['required', 'confirmed', 'min:6'],
    ]);

    $validated['password'] = bcrypt($validated['password']);

    User::create(array_merge($validated, ['user_type' => '5']))->id;
    return redirect('/dashboard');
  }
}
