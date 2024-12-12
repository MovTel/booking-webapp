<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rule;

class AgentController extends Controller
{
  public function agent()
  {
    $user_type = auth()->user()->user_type;

    if ($user_type == 1 || $user_type == 2) {
      $agents = User::where('user_type', 3)->get();
      return view('webapp.agents.index', ['agents' => $agents]);
    }

    return redirect('/dashboard');
  }

  public function create()
  {
    $user_type = auth()->user()->user_type;

    if ($user_type == 1 || $user_type == 2) {
      return view('webapp.agents.create');
    }

    return redirect('/dashboard');
  }

  public function store(Request $request)
  {
    $user_type = auth()->user()->user_type;

    if ($user_type == 1 || $user_type == 2) {
      $validated = $request->validate([
        "first_name" => ['required'],
        "last_name" => ['required'],
        "middle_name" => ['required'],
        "contact_no" => ['required'],
        'email' => ['required', 'email', Rule::unique('users', 'email')],
        'password' => ['required', 'confirmed', 'min:6'],
      ]);

      $validated['password'] = bcrypt($validated['password']);

      User::create(array_merge($validated, ['user_type' => 3]))->id;
      return redirect('/agents')->with('message', 'Agent added successfully.');
    }

    return redirect('/dashboard');
  }

  public function edit($id)
  {
    $user_type = auth()->user()->user_type;

    if ($user_type == 1 || $user_type == 2) {
      $agent = User::findOrfail($id);
      return view('webapp.agents.edit', ['agent' => $agent]);
    }

    return redirect('/dashboard');
  }

  public function update(Request $request, $id)
  {
    $user_type = auth()->user()->user_type;

    if ($user_type == 1 || $user_type == 2) {
      $validated = $request->validate([
        "first_name" => ['required'],
        "last_name" => ['required'],
        "middle_name" => ['required'],
        "contact_no" => ['required'],
      ]);

      User::where('id', $id)->update($validated);
      return Redirect::back()->with('message', 'Agent updated successfully.');
    }

    return redirect('/dashboard');
  }

  public function destroy(Request $request, $id)
  {
    $user_type = auth()->user()->user_type;

    if ($user_type == 1 || $user_type == 2) {
      User::where('id', $id)->delete();
      return redirect('/agents');
    }

    return redirect('/dashboard');
  }
}
