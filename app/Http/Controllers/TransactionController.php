<?php

namespace App\Http\Controllers;

use App\Helpers\ActorHelper;
use App\Helpers\Paystack;
// use App\Http\Controllers\AccountController;
use App\Http\Requests\StoreTransactionRequest;
use App\Http\Requests\UpdateTransactionRequest;
use App\Models\Order;
use App\Models\Transaction;
use Illuminate\Http\Request;

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

        // All transactions data
        $transaction_data = Transaction::all();
        // total
        $data['total'] = $transaction_data;
        // total amount
        $data['total_amount'] = $transaction_data->sum('amount');
        // pending
        $data['pending'] = $transaction_data->where('status', 'pending');
        // successful
        $data['successful'] = $transaction_data->where('status', 'successful');
        // failed
        $data['failed'] = $transaction_data->where('status', 'failed');
        // abandoned
        $data['abandoned'] = $transaction_data->where('status', 'abandoned');
        // refunded
        $data['refunded'] = $transaction_data->where('status', 'refunded');
        // this month
        $data['this_month'] = $transaction_data->where('created_at', '>=', now()->startOfMonth());
        // last month
        $data['last_month'] = $transaction_data->whereBetween('created_at', [now()->subMonth()->startOfMonth(), now()->subMonth()->endOfMonth()]);
        // last 3 months
        $data['last_3_months'] = $transaction_data->whereBetween('created_at', [now()->subMonths(3)->startOfMonth(), now()->endOfMonth()]);
        // this year
        $data['this_year'] = $transaction_data->where('created_at', '>=', now()->startOfYear());

        // return $data;
        return view('dashboard.pages.transactions.index', [
            'transactions' => $transactions,
            'data' => $data
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

    /**
     * Display a listing of the resource.
     */
    public function userTransactions(Request $request)
    {

                // http://127.0.0.1:8000/events/8?trxref=soq9s7fxmf&reference=soq9s7fxmf
        // Verify payment transaction
        if ($request?->filled('trxref') || $request?->filled('reference')) {
            $reference = $request->reference;
            $PSP = Paystack::verify($reference);
            $message = $PSP['message'];
            info('verify payment message: ', [$message]);
            if ($PSP['success']) {
                $transaction = Transaction::where('reference', $reference)->first();
                if ($transaction) {
                    $transaction->status = 'successful';
                    $transaction->save();

                    // update order
                    $order = Order::where('id', $transaction->order_id)->first();
                    $order->paid = 'yes';
                    if ($order->status == 'pending') {
                        $order->status = 'confirmed';
                        // Decrement available stock from order items
                        info('START: decrement available stock from order');
                        defer(app('App\Http\Controllers\AccountController')->decrementAvailableStockFromOrder($order), 'decrement available stock');
                        info('PROCESSING: decrement available stock processing');
                    }
                    $order->save();
                }
            }
        }


        // Search for transaction
        if(request()->filled('search')){
            $search = request('search');
            $transactions = $this->search($search);
        }else{
            $transactions = Transaction::with(['order'])
                ->where('user_id', ActorHelper::getUserId())
                ->latest()
                ->paginate();
        }
        // return $brands;
        return view('dasma.account.transactions', [
            'transactions' => $transactions
        ]);
    }
}
