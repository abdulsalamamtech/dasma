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

        // Search for newsletters
        if(request()->filled('search')){
            $search = request('search');
            $newsletters = $this->search($search);
        } else{
            $newsletters = Newsletter::latest()->paginate();
        }
        // return $newsletters;
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

        // return $newsletter;
        return redirect()->route('admin.newsletters.index')->with('success', 'newsletter created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Newsletter $newsletter)
    {
        // return $newsletter;
        return redirect()->route('admin.newsletters.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNewsletterRequest $request, Newsletter $newsletter)
    {
        $data = $request->validated();
        $newsletter->update($data);

        // return $newsletter;
        return redirect()->route('admin.newsletters.index')->with('success', 'newsletter updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Newsletter $newsletter)
    {
        $newsletter->delete();
        $message = "newsletter deleted successfully";
        return redirect()->route('admin.newsletters.index')->with('success', $message);
    }


    /**
     * Remove Search specified resource from storage.
     */
    public function search(string $search){
        return Newsletter::where('email', 'like', '%'.$search.'%')
            ->orWhere('id', 'like', '%'.$search.'%')
            ->latest()
            ->paginate();
    }
}
