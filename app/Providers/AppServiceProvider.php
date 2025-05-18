<?php

namespace App\Providers;

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

            // Count messages where status is unread
            $unreadMessages = \App\Models\Message::where('status', 'unread')->count();

            // Check if user is admin and pass total pending and confirmed orders
            $totalPendingOrders = \App\Models\Order::where('status', 'pending')->count();
            $totalConfirmedOrders = \App\Models\Order::where('status', 'confirmed')->count();
            $view->with('totalPendingOrders', $totalPendingOrders)
                ->with('unreadMessages', $unreadMessages)
                ->with('totalConfirmedOrders', $totalConfirmedOrders);
        });

    
    }
}
