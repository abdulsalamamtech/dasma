<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;
use Opcodes\LogViewer\Facades\LogViewer;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        // For debugging purpose on the log files
        LogViewer::auth(function ($request) {
            // if(!auth()->user()){
            //     return redirect()->back()->with('error', 'please login');
            // }
            // return true to allow viewing the Log Viewer.
            return ($request?->user()?->role == 'admin') ?? $request->user()
            || in_array($request?->user()?->email, [
                'abdulsalamamtech@gmail.com',
            ]);
        });


        // Display categories to the views for navigation purpose
        view()->composer('dasma.*', function ($view) {
            // $categories = \App\Models\Category::latest()->get();
            // $view->with('categories', $categories);
            // pass brands, categories and promotions to the view
            $categories = \App\Models\Category::latest()->get();
            $brands = \App\Models\Brand::latest()->get();
            $promotions = \App\Models\Promotion::latest()->get();

            $view->with('categories', $categories);

        });


        // Admin dashboard
        view()->composer('dashboard.*', function ($view) {
            // $categories = \App\Models\Category::latest()->get();
            // $view->with('categories', $categories);
            // pass brands, categories and promotions to the view
            // $brands = \App\Models\Brand::latest()->get();
            // $promotions = \App\Models\Promotion::latest()->get();

            // Start of this current month
            $startOfMonth = Carbon::now()->startOfMonth();
            // End of this current month
            $endOfMonth = Carbon::now()->endOfMonth();

            // Count messages where status is unread
            $allMessages = \App\Models\Message::count();
            $unreadMessages = \App\Models\Message::where('status', 'unread')->count();
            $readMessages = \App\Models\Message::whereNot('status', 'unread')->count();
            $thisMonthMessages = \App\Models\Message::whereBetween('created_at', [$startOfMonth, $endOfMonth])->count();

            info([
                "user" => request()->user()->email,
                "data" => ["all_msg" => $allMessages, "unread_msg" => $unreadMessages, "read_msg" => $readMessages, "this_month_msg" => $thisMonthMessages]
            ]);


            // Check if user is admin and pass total pending and confirmed orders
            $totalPendingOrders = \App\Models\Order::where('status', 'pending')->count();
            $totalConfirmedOrders = \App\Models\Order::where('status', 'confirmed')->count();
            $view->with('totalPendingOrders', $totalPendingOrders)
                ->with('allMessages', $allMessages)
                ->with('unreadMessages', $unreadMessages)
                ->with('readMessages', $readMessages)
                ->with('thisMonthMessages', $thisMonthMessages)
                ->with('totalConfirmedOrders', $totalConfirmedOrders);

        });

    
    }
}
