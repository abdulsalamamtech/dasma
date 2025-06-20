@extends('dasma.layouts.app')

@section('content')
    <!-- Start: Main Page Content -->
    <div>
        <div class="container">
            <div class="relative flex">
                <div class="ml-auto h-56 w-3/4 bg-cover bg-center bg-no-repeat lg:h-68"
                    style="background-image:url(/assets/img/about-hero.png)"></div>

                <div class="c-hero-gradient-bg absolute top-0 left-0 h-56 w-full bg-cover bg-no-repeat lg:h-68">
                    <div class="py-20 px-6 sm:px-12 lg:px-20 text-center">
                        <h1 class="font-butler text-2xl text-white sm:text-3xl md:text-4.5xl lg:text-5xl">
                            Contact Us
                        </h1>
                        <div class="flex pt-2 justify-center">
                            <a href="{{ route('index') }}"
                                class="font-hk text-base text-white transition-colors hover:text-primary">Home</a>
                            <span class="px-2 font-hk text-base text-white">.</span>
                            <span class="font-hk text-base text-white">Contact Us</span>
                        </div>
                    </div>
                </div>

            </div>
            <div class="flex flex-col py-20 md:flex-row md:py-24">
                <div
                    class="mx-auto flex w-4/5 items-start justify-start pb-3 last:border-r-0 sm:w-1/2 md:w-2/5 md:flex-col md:items-center md:justify-center md:border-r-2 md:border-primary-lighter md:pb-0 md:text-center lg:mx-0 lg:w-1/3 lg:flex-row lg:text-left">
                    <div>
                        <img src="/assets/img/icons/icon-shipping.svg" class="h-12 w-12 object-contain object-center"
                            alt="icon" />
                    </div>
                    <div class="ml-6 md:mt-3 lg:mt-0">
                        <h3 class="font-hk text-xl font-semibold tracking-wide text-primary">
                            Free shipping
                        </h3>
                        <p class="font-hk text-base tracking-wide text-secondary-lighter">
                            On all orders over $30
                        </p>
                    </div>
                </div>
                <div
                    class="mx-auto flex w-4/5 items-start justify-start pb-3 last:border-r-0 sm:w-1/2 md:w-2/5 md:flex-col md:items-center md:justify-center md:border-r-2 md:border-primary-lighter md:pb-0 md:text-center lg:mx-0 lg:w-1/3 lg:flex-row lg:text-left">
                    <div>
                        <img src="/assets/img/icons/icon-support.svg" class="h-12 w-12 object-contain object-center"
                            alt="icon" />
                    </div>
                    <div class="ml-6 md:mt-3 lg:mt-0">
                        <h3 class="font-hk text-xl font-semibold tracking-wide text-primary">
                            Always available
                        </h3>
                        <p class="font-hk text-base tracking-wide text-secondary-lighter">
                            24/7 call center available
                        </p>
                    </div>
                </div>
                <div
                    class="mx-auto flex w-4/5 items-start justify-start pb-3 last:border-r-0 sm:w-1/2 md:w-2/5 md:flex-col md:items-center md:justify-center md:border-r-2 md:border-primary-lighter md:pb-0 md:text-center lg:mx-0 lg:w-1/3 lg:flex-row lg:text-left">
                    <div>
                        <img src="/assets/img/icons/icon-return.svg" class="h-12 w-12 object-contain object-center"
                            alt="icon" />
                    </div>
                    <div class="ml-6 md:mt-3 lg:mt-0">
                        <h3 class="font-hk text-xl font-semibold tracking-wide text-primary">
                            Free returns
                        </h3>
                        <p class="font-hk text-base tracking-wide text-secondary-lighter">
                            30 days free return policy
                        </p>
                    </div>
                </div>
            </div>



            {{-- Contact info and form --}}
            <div class="flex flex-col justify-between pb-16 md:pb-20 lg:flex-row lg:pb-24">
                {{-- Contact info --}}
                <div
                    class="mx-auto w-full border border-grey-darker px-6 py-10 text-center shadow lg:mx-0 lg:w-3/8 lg:py-8 lg:text-left xl:w-1/3 xl:px-8">
                    <h2 class="border-b border-grey-dark pb-6 font-butler text-2xl text-secondary sm:text-3xl md:text-4xl">
                        Quick contact
                    </h2>
                    <h4 class="pt-8 font-hk text-lg font-bold uppercase text-secondary sm:text-xl">
                        Email
                    </h4>
                    <p class="font-hk text-secondary">dasmacollection@gmail.com</p>
                    <h4 class="pt-8 font-hk text-lg font-bold uppercase text-secondary sm:text-xl">
                        Phone
                    </h4>
                    <p class="font-hk text-secondary">+234 80 9135 3393</p>
                    <h4 class="pt-8 font-hk text-lg font-bold uppercase text-secondary sm:text-xl">
                        WORKING HOURS
                    </h4>
                    <p class="pt-3 font-hk text-lg font-bold text-secondary">
                        Week-days
                    </p>
                    <p class="font-hk text-secondary">
                        <span class="text-primary">(Online) :</span>Mon - Fri: 8.00 AM to 6.00 PM
                    </p>
                    <p class="pt-3 font-hk text-lg font-bold text-secondary">
                        Weekend
                    </p>
                    <p class="font-hk text-secondary">
                        <span class="text-primary">(Chat) :</span>Sat - Sun: 9.00 AM to 4.00 PM
                    </p>
                    <div class="pt-8">
                        <h4 class="font-hk text-lg font-bold uppercase text-secondary sm:text-xl">
                            Follow Us
                        </h4>
                        <div class="flex justify-center pt-3 lg:justify-start">
                            <a href="index.html"
                                class="mr-2 flex items-center rounded-full bg-secondary-lighter p-3 text-xl transition-colors hover:bg-primary">
                                <i class="bx bxl-facebook text-white"></i>
                            </a>
                            <a href="index.html"
                                class="mr-2 flex items-center rounded-full bg-secondary-lighter p-3 text-xl transition-colors hover:bg-primary"><i
                                    class="bx bxl-twitter text-white"></i></a>
                            <a href="index.html"
                                class="mr-2 flex items-center rounded-full bg-secondary-lighter p-3 text-xl transition-colors hover:bg-primary"><i
                                    class="bx bxl-google text-white"></i></a>
                            <a href="index.html"
                                class="flex items-center rounded-full bg-secondary-lighter p-3 text-xl transition-colors hover:bg-primary"><i
                                    class="bx bxl-linkedin text-white"></i></a>
                        </div>
                    </div>
                </div>
                {{-- Contact form --}}
                <div class="mt-10 border border-grey-darker px-8 py-10 shadow md:mt-12 lg:mt-0 lg:w-3/5 lg:py-8">
                    {{-- Message Sent --}}
                    @if ($message ?? null)
                        <div class="mx-auto w-full text-center lg:text-left">
                            <h2
                                class="border-b border-grey-dark pb-6 font-butler text-2xl text-secondary sm:text-3xl md:text-4xl">
                                Message Sent
                            </h2>
                            <h4 class="pt-8 font-hk text-lg font-bold uppercase text-secondary sm:text-xl">
                                Name
                            </h4>
                            <p class="font-hk text-secondary">{{ $message->name }}</p>
                            <h4 class="pt-8 font-hk text-lg font-bold uppercase text-secondary sm:text-xl">
                                Email
                            </h4>
                            <p class="font-hk text-secondary">{{ $message->email }}</p>
                            <h4 class="pt-8 font-hk text-lg font-bold uppercase text-secondary sm:text-xl">
                                Subject
                            </h4>
                            <p class="font-hk text-secondary">{{ $message->subject }}</p>
                            <div>
                                <h5 class="pt-10 font-hk text-lg font-bold text-secondary">
                                    Thank you very much, we will get back to you as soon as possible!
                                </h5>
                            </div>
                        </div>
                    @else
                        {{-- New Message --}}
                        <form action="{{ route('message.store') }}" method="POST">
                            @csrf
                            <p class="pb-8 font-hk text-lg text-secondary">Any questions? Contact us through Whatsapp or on
                                our
                                contact from below.</p>
                            <div class="mb-5 grid grid-cols-1 justify-between md:grid-cols-2 md:gap-10">
                                <div class="mb-5 sm:mb-0">
                                    <label for="name" class="mb-2 block font-hk text-secondary">Name</label>
                                    <input type="text" placeholder="Enter your name" class="form-input" name="name"
                                        id="name" />
                                </div>
                                <div class="">
                                    <label for="email" class="mb-2 block font-hk text-secondary">Email address</label>
                                    <input type="text" placeholder="Enter your email" class="form-input" name="email"
                                        id="email" />
                                </div>
                            </div>
                            <div class="mb-8 w-full">
                                <label for="subject" class="mb-2 block font-hk text-secondary">Subject</label>
                                <input type="text" placeholder="Enter your subject" class="form-input" name="subject"
                                    id="subject" />
                            </div>
                            <div class="mb-8 w-full">
                                <label for="message" class="mb-2 block font-hk text-secondary">Message</label>
                                <textarea rows="5" placeholder="Enter your message" class="form-textarea" name="message" id="message"></textarea>
                            </div>
                            <button class="btn btn-primary" aria-label="Submit button">
                                SUBMIT
                            </button>
                        </form>
                    @endif

                </div>
            </div>

            {{-- FAQ --}}
            <div>
                <span id="faq"></span>
            </div>

            {{-- Frequently ask questions --}}
            <div class="pb-16 md:pb-20 lg:pb-24">
                <div class="mx-auto text-center sm:w-5/6 md:mx-0 md:w-full">
                    <h2 class="font-butler text-2xl text-secondary sm:text-3xl md:text-4.5xl lg:text-5xl">
                        Frequently Asked Questions
                    </h2>
                    <p class="pt-2 font-hk text-lg text-secondary-lighter md:text-xl">
                        Get the latest news & updates from Elyssi
                    </p>
                    <div class="pt-12" x-data="{ faqIndex: null }">

                        @forelse ($faqs as $faq)
                            <div
                                class="faq-wrapper cursor-pointer border-t border-l border-r border-primary last:border-b">
                                <div class="faq-question flex items-center justify-between border-primary bg-primary-lightest px-5 py-5 transition-all md:px-8"
                                    @click="faqIndex === {{ $faq->id }} ? faqIndex=null : faqIndex={{ $faq->id }}"
                                    :class="{ 'border-b': faqIndex === {{ $faq->id }} }">
                                    <div class="w-5/6 text-left">
                                        <span
                                            class="font-hk font-medium uppercase text-secondary md:text-lg">{{ $faq->question }}</span>
                                    </div>
                                    <div class="w-1/6 text-right">
                                        <i class="bx text-2xl text-primary"
                                            :class="faqIndex === {{ $faq->id }} ? 'bx-minus' : 'bx-plus'"></i>
                                    </div>
                                </div>
                                <div class="cursor-text transition-all"
                                    :class="faqIndex === {{ $faq->id }} ? 'max-h-infinite' : 'max-h-0 overflow-hidden'">
                                    <div class="px-5 py-5 md:px-8">
                                        <p class="text-left font-hk text-sm leading-loose text-secondary">
                                            {{ $faq->answer }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @empty
                            {{-- <div class="px-5 py-5 md:px-8">
                      <p class="text-left font-hk text-sm leading-loose text-secondary">
                        No FAQs found.
                      </p>
                    </div> --}}
                            {{-- Sample FAQ --}}
                            <div
                                class="faq-wrapper cursor-pointer border-t border-l border-r border-primary last:border-b">
                                <div class="faq-question flex items-center justify-between border-primary bg-primary-lightest px-5 py-5 transition-all md:px-8"
                                    @click="faqIndex === 1 ? faqIndex=null : faqIndex=1"
                                    :class="{ 'border-b': faqIndex === 1 }">
                                    <div class="w-5/6 text-left">
                                        <span class="font-hk font-medium uppercase text-secondary md:text-lg">How many days
                                            does the product
                                            takes to arrive?</span>
                                    </div>
                                    <div class="w-1/6 text-right">
                                        <i class="bx text-2xl text-primary"
                                            :class="faqIndex === 1 ? 'bx-minus' : 'bx-plus'"></i>
                                    </div>
                                </div>
                                <div class="cursor-text transition-all"
                                    :class="faqIndex === 1 ? 'max-h-infinite' : 'max-h-0 overflow-hidden'">
                                    <div class="px-5 py-5 md:px-8">
                                        <p class="text-left font-hk text-sm leading-loose text-secondary">
                                            It depends on the product, but it can take 3-5 days max.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforelse

                    </div>

                    {{-- pagination --}}
                    <div class="mt-8">
                        {{ $faqs?->withQueryString()?->links() }}
                    </div>

                </div>
            </div>

        </div>
        <!-- End: Main Page Content -->
    @endsection
