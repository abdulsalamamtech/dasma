
@extends('dashboard.layouts.master')

@section('content')
    <!-- Container -->
    <div class="p-4 sm:ml-64">

        <div class="rounded-lg dark:border-gray-700 mt-20">

            {{-- images card --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                @foreach($assets as $image)
                    <!-- Image Card -->
                    <div class="dark:border-gray-700 dark:text-gray-300 relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 border border-blue-gray-100 shadow-sm">
                        {{-- <img class="object-cover w-full h-64" src="{{ asset('storage/'. $image->path) }}" alt="{{ $image->title }}"> --}}
                        <img class="object-cover w-full h-64" src="{{$image->url}}" alt="dasma official store {{ $image->name }}">
                        <div class="p-4 flex-grow">
                            <h3 class="text-sm font-medium">{{ $image->name }}</h3>
                            <p class="text-xs text-gray-500">{{ $image->size }} KB</p>
                            <p class="text-xs text-gray-500">{{ $image->created_at->format('D, d M Y') }}</p>
                        </div>
                    </div>
                @endforeach
            </div>


            {{-- Paginate --}}
            <div class="text-center pt-4 dark:text-gray-100">
                <div class="px-8">
                    @if (isset($assets) && !empty($assets))
                        {{ $assets->links() }}
                    @endif
                </div>
            </div>
        </div>         

        </div>

    </div>
@endsection
