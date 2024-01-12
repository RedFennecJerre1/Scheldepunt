<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\FaqCategory;

class FaqCategoryController extends Controller
{
    public function index()
{
    $faqCategories = FaqCategory::all();
    return view('faq.index', compact('faqCategories'));
}

public function create()
{
    return view('faq_categories.create');
}

public function store(Request $request)
{
    $faqCategory = FaqCategory::create($request->all());
    return redirect()->route('faq.index');
}

public function show(FaqCategory $faqCategory)
{
    return view('faq_categories.show', compact('faqCategory'));
}

public function edit(FaqCategory $faqCategory)
{
    return view('faq_categories.edit', compact('faqCategory'));
}

public function update(Request $request, FaqCategory $faqCategory)
{
    $faqCategory->update($request->all());
    return redirect()->route('faq.index');
}

public function destroy(FaqCategory $faqCategory)
{
    $faqCategory->delete();
    return redirect()->route('faq.index');
}
}
