    <!-- Home Page Slide Show -->
    <div class="hero-slider relative" x-data
      x-init="new Splide('.hero-slider', { type: 'loop', arrows: false, pagination: true, autoplay: true, interval: 3000, perMove: 1}).mount()">
      <div class="splide__track">
        <ul class="splide__list">
          {{-- Test Slider Images --}}
          <li class="splide__slide">
            <div class="bg-cover bg-left bg-no-repeat sm:bg-center"
              style="background-image:url({{ asset('/dasma-banners/20250523_092711.jpg') }})">
              <div
                class="py-48 px-5 text-center sm:w-5/6 sm:px-10 sm:text-left md:px-12 lg:w-3/4 xl:w-2/3 xl:px-24">
                <h3 class="font-butler text-3xl font-medium text-secondary sm:text-4xl md:text-5xl lg:text-6xl">
                  Dasma New Men’s <br> Outdoor Collection
                </h3>
                <a href="collection-grid.html" class="btn btn-primary btn-lg mt-8">Know more</a>
              </div>
            </div>
          </li>
          <li class="splide__slide">
            <div class="bg-cover bg-left bg-no-repeat sm:bg-center"
              {{-- style="background-image:url({{ asset('/assets/img/unlicensed/hero-slide-01.jpg') }})" --}}
              style="background-image:url({{ asset('/dasma-banners/20250523_093359.jpg') }})"
              >
              <div
                class="py-48 px-5 text-center sm:w-5/6 sm:px-10 sm:text-left md:px-12 lg:w-3/4 xl:w-2/3 xl:px-24">
                <h3 class="font-butler text-3xl font-medium text-secondary sm:text-4xl md:text-5xl lg:text-6xl">
                  Dasma New Men’s <br> Outdoor Collection
                </h3>
                <a href="collection-grid.html" class="btn btn-primary btn-lg mt-8">Know more</a>
              </div>
            </div>
          </li>
          <li class="splide__slide">
            <div class="bg-cover bg-left bg-no-repeat sm:bg-center"
              {{-- style="background-image:url({{ asset('/assets/img/unlicensed/hero-slide-02.jpg') }})" --}}
              style="background-image:url({{ asset('/dasma-banners/20250523_093747.jpg') }})"
              >
              <div
                class="py-48 px-5 text-center sm:w-5/6 sm:px-10 sm:text-left md:px-12 lg:w-3/4 xl:w-2/3 xl:px-24">
                <h3 class="font-butler text-3xl font-medium text-secondary sm:text-4xl md:text-5xl lg:text-6xl">
                  Blake by Dasma <br /> 30% off
                </h3>
                <a href="collection-grid.html" class="btn btn-primary btn-lg mt-8">Know more</a>
              </div>
            </div>
          </li>
          <li class="splide__slide">
            <div class="bg-cover bg-left bg-no-repeat sm:bg-center"
              {{-- style="background-image:url({{ asset('/assets/img/unlicensed/hero-slide-03.jpg') }})" --}}
              style="background-image:url({{ asset('/dasma-banners/20250523_093910.jpg') }})"
              >
              <div
                class="py-48 px-5 text-center sm:w-5/6 sm:px-10 sm:text-left md:px-12 lg:w-3/4 xl:w-2/3 xl:px-24">
                <h3 class="font-butler text-3xl font-medium text-secondary sm:text-4xl md:text-5xl lg:text-6xl">
                  Hoodie your way! <br /> For Men
                </h3>
                <a href="collection-grid.html" class="btn btn-primary btn-lg mt-8">Know more</a>
              </div>
            </div>
          </li>
          <li class="splide__slide">
            <div class="bg-cover bg-left bg-no-repeat sm:bg-center"
              {{-- style="background-image:url({{ asset('/assets/img/unlicensed/hero-slide-04.jpg') }})" --}}
              style="background-image:url({{ asset('/dasma-banners/20250523_102747.jpg') }})"
              >
              <div
                class="py-48 px-5 text-center sm:w-5/6 sm:px-10 sm:text-left md:px-12 lg:w-3/4 xl:w-2/3 xl:px-24">
                <h3 class="font-butler text-3xl font-medium text-secondary sm:text-4xl md:text-5xl lg:text-6xl">
                  Match and play <br> Women’s Dresses
                </h3>
                <a href="collection-grid.html" class="btn btn-primary btn-lg mt-8">Know more</a>
              </div>
            </div>
          </li>
          <li class="splide__slide">
            <div class="bg-cover bg-left bg-no-repeat sm:bg-center"
              {{-- style="background-image:url({{ asset('/assets/img/unlicensed/hero-slide-05.jpg') }})" --}}
              style="background-image:url({{ asset('/dasma-banners/20250523_102942.jpg') }})">
              <div
                class="py-48 px-5 text-center sm:w-5/6 sm:px-10 sm:text-left md:px-12 lg:w-3/4 xl:w-2/3 xl:px-24">
                <h3 class="font-butler text-3xl font-medium text-secondary sm:text-4xl md:text-5xl lg:text-6xl">
                  Back to school, <br /> the stylish way
                </h3>
                <a href="collection-grid.html" class="btn btn-primary btn-lg mt-8">Know more</a>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>