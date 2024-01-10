<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\LatestNews;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class LatestNewsController extends Controller
{
  public function store(Request $request)
   {
    $validatedData = $request->validate([
        'user_name' => 'required|string|max:255',
        'title' => 'required|string|max:255',
        'img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'content' => 'required|string|max:2000',
    ]);

    LatestNews::create([
        'user_name' => $request->user_name,
        'title' => $request->title,
        'img' => $request->img,
        'content' => $request->content,
    ]);


    return redirect('/dashboard')->with('success', 'Your News has been added.');
   }

   public function update(Request $request, LatestNews $latest_news)
{
    $validatedData = $request->validate([
        'content' => 'required|string|max:2000',
    ]);

    $latest_news->update($validatedData);
    return redirect('/dashboard')->with('success', 'News content updated successfully.');
}

public function updateTitle(Request $request, LatestNews $latest_news)
{
    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
    ]);

    $latest_news->update($validatedData);
    return redirect('/dashboard')->with('success', 'News title updated successfully.');
}


   public function destroy(LatestNews $latest_news)
{
    $latest_news->delete();
    return redirect('/dashboard')->with('success', 'News deleted successfully.');
}
}
