<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\LatestNews;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class LatestNewsController extends Controller
{
  public function store(Request $request)
   {
    $latest_news = LatestNews::create($request->all());

    return redirect('/news')->with('success', 'Your News has been added.');
   }

   public function update(Request $request, LatestNews $latest_news)
{
    $validatedData = $request->validate([
        'content' => 'required|string|max:2000',
    ]);

    $latest_news->update($validatedData);
    return redirect('/news')->with('success', 'News content updated successfully.');
}

public function updateTitle(Request $request, LatestNews $latest_news)
{
    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
    ]);

    $latest_news->update($validatedData);
    return redirect('/news')->with('success', 'News title updated successfully.');
}


   public function destroy(LatestNews $latest_news)
{
    $latest_news->delete();
    return redirect('/news')->with('success', 'News deleted successfully.');
}
}
