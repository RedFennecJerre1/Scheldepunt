<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\GBook;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class BookController extends Controller
{
  public function store(Request $request)
   {
    $validatedData = $request->validate([
        'gbookuser_name' => 'required|string|max:255',
        'gbookcontent' => 'required|string|max:4000',
    ]);

    GBook::create([
        'gbookuser_name' => $request->gbookuser_name,
        'gbookcontent' => $request->gbookcontent,
    ]);


    return redirect('/dashboard')->with('success', 'Your review has been added.');
   }

   public function update(Request $request, GBook $g_book)
{
    $validatedData = $request->validate([
        'gbookcontent' => 'required|string|max:4000',
    ]);

    $g_book>update($validatedData);
    return redirect('/dashboard')->with('success', 'Review updated successfully.');
}

   public function destroy(GBook $g_book)
{
    $g_book->delete();
    return redirect('/dashboard')->with('success', 'Review deleted successfully.');
}
}
