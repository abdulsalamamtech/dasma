<div class="container">
    <!-- Start: Our Brand Logos -->
    <div class="border-b border-grey-dark pt-16 pb-5 sm:pt-20 sm:pb-12">
        <h4 class="text-center font-hk text-xl uppercase text-secondary">
            Our Brands
        </h4>
        <div class="grid grid-cols-2 gap-5 pt-8 sm:grid-cols-3 lg:grid-cols-6 place-items-center">
            {{-- Loop through the brands --}}
            {{-- If no brands are available, show default images --}}
            @forelse ($brands as $brand)
                <img src="{{ $brand->banner->url ?? '/assets/img/brand-01.png' }}" alt="brand logo"
                    class="mb-8 h-24 w-24 rounded-full object-cover sm:mb-10 lg:mb-0" />
            @empty
                <img src="/assets/img/brand-01.png" alt="brand logo"
                    class="mb-8 h-24 w-full object-cover sm:mb-10 lg:mb-0" />
                <img src="/assets/img/brand-02.png" alt="brand logo"
                    class="mb-8 h-24 w-full object-cover sm:mb-10 lg:mb-0" />
                <img src="/assets/img/brand-03.png" alt="brand logo"
                    class="mb-8 h-24 w-full object-cover sm:mb-10 lg:mb-0" />
                <img src="/assets/img/brand-04.png" alt="brand logo"
                    class="mb-8 h-24 w-full object-cover sm:mb-10 lg:mb-0" />
                <img src="/assets/img/brand-05.png" alt="brand logo"
                    class="mb-8 h-24 w-full object-cover sm:mb-10 lg:mb-0" />
                <img src="/assets/img/brand-06.png" alt="brand logo"
                    class="mb-8 h-24 w-full object-cover sm:mb-10 lg:mb-0" />
            @endforelse
        </div>
    </div>
    {{-- End: Our Brand Logos --}}
</div>
