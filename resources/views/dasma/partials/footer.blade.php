   <!-- Start: News letter -->
   <div class="container mb-20">
       <div class="bg-cover bg-center bg-no-repeat" style="background-image: url(/assets/img/bg-cta.png)">
           <div class="py-16 text-center md:py-20">
               <h3 class="font-butler text-3xl tracking-wide text-white sm:text-4xl">
                   Let's keep in touch
               </h3>
               <p class="px-6 pt-3 font-hk text-lg text-white sm:text-xl">
                   Join our list and save 15% off your first order.
               </p>
               <form class="pt-10 sm:pt-12" action="{{ route('newsletters.store') }}" method="POST">
                   @csrf
                   <div
                       class="mx-auto flex w-5/6 flex-col items-center justify-center sm:w-3/4 sm:flex-row lg:w-3/5 xl:w-1/2">
                       <label for="cta_email" class="relative block h-0 w-0 overflow-hidden">Email</label>
                       <input type="email" name="email" id="cta_email" placeholder="ENTER YOUR EMAIL"
                           class="form-input border-white bg-transparent text-sm uppercase text-white placeholder-grey-dark"
                           required />
                       <button type="submit" class="btn btn-primary mt-4 w-full sm:ml-5 sm:mt-0 sm:w-auto"
                           aria-label="Subscribe button">
                           SUBSCRIBE
                       </button>
                   </div>
               </form>
           </div>
       </div>
   </div>
   <!-- End: News letter -->

   <!-- Start: Footer -->
   <div class="bg-cover bg-center bg-no-repeat" style="background-image: url(/assets/img/bg-footer.png)">
       <div class="container py-16 sm:py-20 md:py-24">
           <div class="mx-auto flex w-5/6 flex-col items-center justify-between lg:flex-row">
               <div class="text-center lg:text-left">
                   <h4 class="pb-8 font-hk text-xl font-bold text-white">Contact</h4>
                   <ul class="list-reset">
                       <li class="block pb-2">
                           <a href="mailto:test.email0123@dasma.com"
                               class="font-hk text-base tracking-wide text-white transition-colors hover:text-primary">dasmacollection@gmail.com</a>
                       </li>
                       <li class="block pb-2">
                           <a href="tel:23409091353393"
                               class="font-hk text-base tracking-wide text-white transition-colors hover:text-primary">
                               +234 90 9135 3393
                           </a>
                       </li>
                       <li class="block pb-2">
                           <a href="{{ route('index') }}"
                               class="font-hk text-base tracking-wide text-white transition-colors hover:text-primary">Dasma</a>
                       </li>
                   </ul>
               </div>
               <div class="py-16 text-center lg:py-0">
                   <a href="{{ route('index') }}"
                       class="font-butler text-4xl uppercase tracking-wider text-white">Dasma.</a>
                   <div class="flex items-center justify-center pt-5">
                       <a href="https://www.google.com/" class="group">
                           <div
                               class="mr-5 flex items-center rounded-full bg-white px-2 py-2 transition-colors group-hover:bg-primary">
                               <i class="bx bxl-facebook text-secondary transition-colors group-hover:text-white"></i>
                           </div>
                       </a>
                       <a href="https://www.google.com/" class="group">
                           <div
                               class="mr-5 flex items-center rounded-full bg-white px-2 py-2 transition-colors group-hover:bg-primary">
                               <i class="bx bxl-twitter text-secondary transition-colors group-hover:text-white"></i>
                           </div>
                       </a>
                       <a href="https://www.google.com/" class="group">
                           <div
                               class="mr-5 flex items-center rounded-full bg-white px-2 py-2 transition-colors group-hover:bg-primary">
                               <i class="bx bxl-instagram text-secondary transition-colors group-hover:text-white"></i>
                           </div>
                       </a>
                       <a href="https://www.google.com/" class="group">
                           <div
                               class="mr-5 flex items-center rounded-full bg-white px-2 py-2 transition-colors group-hover:bg-primary">
                               <i class="bx bxl-pinterest text-secondary transition-colors group-hover:text-white"></i>
                           </div>
                       </a>
                   </div>
               </div>
               <div class="text-center lg:text-left">
                   <h4 class="pb-8 font-hk text-xl font-bold text-white">Link</h4>
                   <ul class="list-reset">
                       <li class="block pb-2">
                           <a href="{{ route('stores.list') }}"
                               class="font-hk text-base tracking-wide text-white transition-colors hover:text-primary">Store</a>
                       </li>
                       <li class="block pb-2">
                           <a href="{{ route('contact') }}"
                               class="font-hk text-base tracking-wide text-white transition-colors hover:text-primary">Contact
                               Us</a>
                       </li>
                       <li class="block pb-2">
                           <a href="{{ route('terms-and-conditions') }}"
                               class="font-hk text-base tracking-wide text-white transition-colors hover:text-primary">Terms
                               &
                               Conditions</a>
                       </li>
                   </ul>
               </div>
           </div>
       </div>
   </div>
   <!-- End: Footer -->

   <!-- Copyright -->
   <div class="container py-8">
       <div class="text-center font-hk text-base text-secondary">
           <p>
               All rights reserved © 2025.
           </p>
           <p>
               Made with ❤️ by
               <a href="https://linkedin.com/in/abdulsalamamtech" target="_blank" class="text-primary">Amtech
                   Digital</a>.
           </p>
       </div>
   </div>



   <!-- Javascript Files -->
   <script src="/npm/-splidejs/splide-3.6.12/dist/js/splide.min.js"></script>
   <script src="/assets/js/main.js"></script>
   <script src="/guanaco-sub/script.js" data-site="NUAESTQS" defer></script>


   <!-- Flowbite Javascript -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

   </body>

   </html>
