@extends('dashboard.layouts.master')

@section('content')
    <!-- Container -->
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">

            <div class="py-12">
                <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">

                        {{-- Return back --}}
                         <div class="flex justify-end py-2 mb-4">
                            <a href="{{ route('admin.users.index') }}" class="flex gap-2 items-center text-xl text-green-500 dark:text-green-400 hover:text-green-700 dark:hover:text-green-300">
                            <i class="fa fa-arrow-left"></i>
                            <span>Back</span>
                            </a>
                        </div>

                        <div class="px-6 pt-6 text-xl text-gray-900 tex dark:text-gray-100">
                            {{-- {{ __("You're logged in!") }} --}}
                            User Profile Information
                        </div>

                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            
                            <div class="mt-3">Name: <span class="text-gray-500">{{ $user->name }}</span></div>
                            <div class="mt-3">Role: <span class="text-gray-500">{{ "customer" ?? 'active user'}}</span></div>
                            <div class="mt-3">Email: <span class="text-gray-500">{{ $user->email }}</span></div>

                            <hr class="my-3" />

                            <div class="mt-3">Phone number: <span class="text-gray-500">{{ $user?->addresses?->first()?->phone_number ?? '' }}</span></div>
                            <div class="mt-3">Address: <span class="text-gray-500">{{ $user?->addresses?->first()?->street ?? '' }}</span></div>
                            <div class="mt-3">LGA: <span class="text-gray-500">{{ $user?->addresses?->first()?->city ?? '' }}</span></div>
                            <div class="mt-3">State: <span class="text-gray-500">{{ $user?->addresses?->first()?->state ?? '' }}</span></div>
                            <div class="mt-3">Country: <span class="text-gray-500">{{ $user?->addresses?->first()?->country ?? 'Nigeria'}}</span></div>

                            <hr class="my-3" />

                            <div class="mt-3">Registered on: <span class="text-gray-500">{{ $user?->created_at->format('D. d M Y. h:i:s a') ?? '' }}</span></div>
                            <div class="mt-3">Account Created: <span class="text-gray-500">{{ $user?->created_at->diffForHumans() ?? '' }}</span></div>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
