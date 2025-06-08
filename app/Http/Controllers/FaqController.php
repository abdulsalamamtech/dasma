<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFaqRequest;
use App\Http\Requests\UpdateFaqRequest;
use App\Models\Faq;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all FAQs from the database
        // Search for faqs
        if(request()->filled('search')){
            $search = request('search');
            $faqs = $this->search($search);
        }else{
            $faqs = Faq::latest()->paginate();
        }
        // return $faqs;
        return view('dashboard.pages.faqs.index', [
            'faqs' => $faqs
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFaqRequest $request)
    {
        $data = $request->validated();
        $faq = faq::create($data);
        return redirect()->route('admin.faqs.index')->with('success', 'FAQ created successfully.');
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
    public function update(UpdateFaqRequest $request, faq $faq)
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

    /**
     * Search for faqs
     */
    private function search(string  $search){
        $faqs = Faq::where('question', 'LIKE', '%'.$search.'%')
            ->latest()
            ->paginate();

        return $faqs;
    }    
}
