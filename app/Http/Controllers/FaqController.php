<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorefaqRequest;
use App\Http\Requests\UpdatefaqRequest;
use App\Models\faq;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faqs = faq::all(); // Fetch all FAQs from the database
        return view('faqs.index', compact('faqs')); // Return the view with FAQs
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorefaqRequest $request)
    {
        $faq = faq::create($request->validated());
        return redirect()->route('faqs.index')->with('success', 'FAQ created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(faq $faq)
    {
        return view('faqs.show', compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatefaqRequest $request, faq $faq)
    {
        $faq->update($request->validated());
        return redirect()->route('faqs.index')->with('success', 'FAQ updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(faq $faq)
    {
        $faq->delete();
        return redirect()->route('faqs.index')->with('success', 'FAQ deleted successfully.');
    }
}
