<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
  public function index()
  {
    $users = User::all();
    return view('backend.admin.users.index', compact('users'));
  }

  public function edit($id)
  {
    $user = User::whereId($id)->firstOrFail();
    return view('backend.admin.users.edit', compact('user'));
  }

  public function store(Request $request)
  {
    $user = User::whereId($request->user_id)->firstOrFail();

    $user->name = $request->name;
    $user->surname = $request->surname;
    $user->phone = $request->phone;
    $user->email = $request->email;
    $user->country = $request->country;
    $user->type = $request->type;
    $user->status = $request->status;
    $user->remaining_words = $request->remaining_words;
    $user->remaining_images = $request->remaining_images;
    $user->save();
  }

  public function delete($id)
  {
    $user = User::whereId($id)->firstOrFail();
    if ($user->id != (1 || 2)) $user->delete();
    return back()->with(['message' => 'Deleted Successfully', 'type' => 'success']);
  }
}
