<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\GuestReview;
use Illuminate\Support\Facades\Redirect;
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

   public function update(Request $request, GuestReview $review)
{
    $validatedData = $request->validate([
        'content' => 'required|string|max:2000',
    ]);

    $review->update($validatedData);
    return redirect('/dashboard')->with('success', 'Review updated successfully.');
}

   public function destroy(GuestReview $review)
{
    $review->delete();
    return redirect('/dashboard')->with('success', 'Review deleted successfully.');
}
}
