<?php

namespace App\Http\Controllers\Backend\User;

use App\Http\Controllers\Controller;
use App\Models\PromptUsage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
  public function redirect()
  {
    if (Auth::user()->type == 'admin') {
      return redirect()->route('dashboard.admin.index');
    } else {
      return redirect()->route('dashboard.user.index');
    }
  }

  public function index()
  {
    $total_docs = PromptUsage::where('user_id', Auth::id())->get();
    $total_words = PromptUsage::where('user_id', Auth::id())->sum('credits');
    $total_documents = count($total_docs);

    return view('backend.user.dashboard', compact('total_words', 'total_documents'));
  }

  public function settings()
  {
    $user = Auth::user();
    return view('backend.user.settings.index', compact('user'));
  }

  public function store(Request $request)
  {
    $user = Auth::user();
    $user->name = $request->name;
    $user->surname = $request->surname;
    $user->phone = $request->phone;
    $user->country = $request->country;

    if ($request->old_password != null) {
      $validated = $request->validateWithBag('updatePassword', [
        'old_password' => ['required', 'current_password'],
        'new_password' => ['required', Password::defaults(), 'confirmed'],
      ]);

      $user->password = Hash::make($request->new_password);
    }

    if ($request->hasFile('avatar')) {
      $path = 'upload/images/avatar/';
      $image = $request->file('avatar');
      $image_name = Str::random(4) . '-' . Str::slug($user->fullName()) . '-avatar.' . $image->getClientOriginalExtension();

      $image->move($path, $image_name);

      $user->avatar = $path . $image_name;
    }

    createActivity($user->id, 'Updated', 'Profile Information', null);
    $user->save();
  }
}
