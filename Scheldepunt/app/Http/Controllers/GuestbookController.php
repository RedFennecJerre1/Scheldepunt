<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\GuestReview;
use Illuminate\Http\Request;

class GuestbookController extends Controller
{
  public function store(Request $request)
   {
    $validatedData = $request->validate([
        'user_name' => 'required|string|max:255',
        'content' => 'required|string|max:2000',
    ]);

    GuestReview::create([
        'user_name' => $request->user_name,
        'content' => $request->content,
    ]);

    return redirect('/dashboard')->with('success', 'Your review has been added.');
   }
}
