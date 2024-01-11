<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FaqCategoryController extends Controller
{
    public function index()
{
    $faqCategories = FaqCategory::all();
    return view('faq_categories.index', compact('faqCategories'));
}

public function create()
{
    return view('faq_categories.create');
}

public function store(Request $request)
{
    $faqCategory = FaqCategory::create($request->all());
    return redirect()->route('faq_categories.index');
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
    return redirect()->route('faq_categories.index');
}

public function destroy(FaqCategory $faqCategory)
{
    $faqCategory->delete();
    return redirect()->route('faq_categories.index');
}
}
