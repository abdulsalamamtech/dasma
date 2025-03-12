<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTransactionRequest;
use App\Http\Requests\UpdateTransactionRequest;
use App\Models\Transaction;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Search for transaction
        if(request()->filled('search')){
            $search = request('search');
            $transactions = $this->search($search);
        }else{
            $transactions = Transaction::with(['user'])
                ->latest()
                ->paginate();
        }
        // return $brands;
        return view('dashboard.pages.transactions.index', [
            'transactions' => $transactions
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTransactionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        //
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTransactionRequest $request, Transaction $transaction)
    {
        //
    }




    /**
     * Search a specified resource from storage.
     */
    private function search($search){
        return Transaction::where('id', 'LIKE', "%{$search}%")
            ->orWhere('payment_method', 'LIKE', "%{$search}%")
            ->orWhere('amount', 'LIKE', "%{$search}%")
            ->orWhere('reference', 'LIKE', "%{$search}%")
            ->orWhere('created_at', 'LIKE', "%{$search}%")
            ->orWhere('status', 'LIKE', "%{$search}%")
            ->latest()
            ->paginate();
    }
}
