<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFaqRequest;
use App\Http\Requests\UpdateFaqRequest;
use App\Models\Faq;
use Illuminate\Support\Facades\Auth;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all FAQs from the database
        // Search for faqs
        if (request()->filled('search')) {
            $search = request('search');
            $faqs = $this->search($search);
        } else {
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
        // created by
        $data['created_by'] = $request->user()->id;

        // Set default status if not provided
        $data['status'] = $data['status'] ?? 'draft'; // Default to 'draft' if not provided
        // Create the FAQ
        if (empty($data['category'])) {
            $data['category'] = 'General'; // Default category if not provided
        }
        $faq = Faq::create($data);
        return redirect()->route('admin.faqs.index')->with('success', 'FAQ created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Faq $faq)
    {
        return view('dashboard.pages.faqs.show', [
            'faq' => $faq
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFaqRequest $request, Faq $faq)
    {
        $faq->update($request->validated());
        return redirect()->route('admin.faqs.index')->with('success', 'FAQ updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Faq $faq)
    {
        $faq->delete();
        return redirect()->route('admin.faqs.index')->with('success', 'FAQ deleted successfully.');
    }

    /**
     * Search for faqs
     */
    private function search(string  $search)
    {
        $faqs = Faq::whereAny(
            ['question', 'answer', 'category'],
            'like',
            "%{$search}%"
        )
            ->orWhereHas('createdBy', function ($query) use ($search) {
                $query->where('name', 'like', "%{$search}%");
            })
            ->latest()
            ->paginate();

        return $faqs;
    }
}
