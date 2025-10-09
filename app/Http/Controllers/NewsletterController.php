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

                // All newsletters data
        $newsletter_data = Newsletter::all();
        // total
        $data['total'] = $newsletter_data;
        // this month
        $data['this_month'] = $newsletter_data->where('created_at', '>=', now()->startOfMonth())->count();
        // last month
        $data['last_month'] = $newsletter_data->whereBetween('created_at', [now()->subMonth()->startOfMonth(), now()->subMonth()->endOfMonth()])->count();
        // this year
        $data['this_year'] = $newsletter_data->where('created_at', '>=', now()->startOfYear())->count();    
        // last year
        $data['last_year'] = $newsletter_data->whereBetween('created_at', [now()->subYear()->startOfYear(), now()->subYear()->endOfYear()])->count();       
        // total count
        $data['total_count'] = $newsletter_data->count();
        // return $data;
        return view('dashboard.pages.newsletters.index', [
            'newsletters' => $newsletters,
            'data' => $data,
        ]);
    }

    /**
     * [Public] Store a newly created resource in storage.
     */
    public function store(StoreNewsletterRequest $request)
    {
        $data = $request->validated();
        $newsletter = Newsletter::create($data);
        // return $newsletter;
        return redirect()->back()->with('success', 'You have successfully subscribe to our newsletter');
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
