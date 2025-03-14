<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNewsletterRequest;
use App\Http\Requests\UpdateNewsletterRequest;
use App\Models\Newsletter;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $newsletters = Newsletter::latest()->paginate();
        return view('dashboard.pages.newsletters.index', [
            'newsletters' => $newsletters,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNewsletterRequest $request)
    {
        $data = $request->validated();
        $newsletter = Newsletter::create($data);

        return $newsletter;
    }

    /**
     * Display the specified resource.
     */
    public function show(Newsletter $newsletter)
    {
        return $newsletter;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNewsletterRequest $request, Newsletter $newsletter)
    {
        $data = $request->validated();
        $newsletter->update($data);

        return $newsletter;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Newsletter $newsletter)
    {
        $newsletter->delete();
        return $message = "newsletter deleted successfully";
    }
}
