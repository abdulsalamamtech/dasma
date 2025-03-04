@extends('dashboard.layouts.master')

@section('content')
    <!-- Container -->
    <div class="p-4 sm:ml-64">

        <div class="rounded-lg dark:border-gray-700 mt-20">

            {{-- Data Information --}}
            <div class="p-6 my-6 bg-white rounded-lg shadow-lg dark:bg-gray-800">

                <div class="max-w-xlg xlg:mx-auto bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg">


                    {{-- Return back --}}
                    <div class="flex justify-end py-2 mb-4">
                      <a href="{{ route('admin.categories.index') }}" class="flex gap-2 items-center text-xl text-green-500 dark:text-green-400 hover:text-green-700 dark:hover:text-green-300">
                        <i class="fa fa-arrow-left"></i>
                        <span>Back</span>
                      </a>
                    </div>

                    <div class="space-y-3 pt-4">

                      {{-- ID --}}
                      <div class="flex justify-between items-start">
                          <div class="w-1/3 text-gray-700 dark:text-gray-300">ID:</div>
                          <div class="w-7/12 text-gray-500 dark:text-gray-400"> #{{ $brand->id }}</div>
                      </div>

                      {{-- Name --}}
                      <div class="flex justify-between items-start">
                          <div class="w-1/3 text-gray-700 dark:text-gray-300">Name:</div>
                          <div class="w-7/12 text-gray-500 dark:text-gray-400">{{ $brand->name }}</div>
                      </div>

                      <div class="flex justify-between items-start">
                        <div class="w-1/3 text-gray-700 dark:text-gray-300">Products No:</div>
                        <div class="w-7/12 text-gray-500 dark:text-gray-400">{{ $brand->products_count ?? 0 }}</div>
                      </div>


                      <div class="flex justify-between items-start">
                        <div class="w-1/3 text-gray-700 dark:text-gray-300">Status:</div>
                        <div class="w-7/12 text-gray-500 dark:text-gray-400">Active</div>
                      </div>

                      <div class="flex justify-between items-start">
                        <div class="w-1/3 text-gray-700 dark:text-gray-300">Updated at:</div>
                        <div class="w-7/12 text-gray-500 dark:text-gray-400">{{ $brand->updated_at }}</div>
                      </div>

                      <div class="flex justify-between items-start">
                        <div class="w-1/3 text-gray-700 dark:text-gray-300">Created at:</div>
                        <div class="w-7/12 text-gray-500 dark:text-gray-400">{{ $brand->created_at }}</div>
                      </div>

                    </div>

                </div>


            </div>
            {{-- End of Data Information --}}



        </div>

    </div>
@endsection
