<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
{
    $faqs = Faq::all();
    return view('faqs.index', compact('faqs'));
}

public function create()
{
    $faqCategories = FaqCategory::all();
    return view('faqs.create', compact('faqCategories'));
}

public function store(Request $request)
{
    $faq = Faq::create($request->all());
    return redirect()->route('faqs.index');
}

public function show(Faq $faq)
{
    return view('faqs.show', compact('faq'));
}

public function edit(Faq $faq)
{
    $faqCategories = FaqCategory::all();
    return view('faqs.edit', compact('faq', 'faqCategories'));
}

public function update(Request $request, Faq $faq)
{
    $faq->update($request->all());
    return redirect()->route('faqs.index');
}

public function destroy(Faq $faq)
{
    $faq->delete();
    return redirect()->route('faqs.index');
}
}
