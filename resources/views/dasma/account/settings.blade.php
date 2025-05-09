@extends('dasma.layouts.app')

@section('content')
    <!-- Start: Main Page Content -->
    <div>
        <div class="container pt-10 lg:w-100">

            <div class="bg-grey-light py-8 px-5 md:px-8">
                <div class="bg-grey-light py-8 px-5 md:px-8">

                    {{-- Account Details --}}
                    <h1 class="font-hkbold mb-12 text-2xl text-secondary sm:text-left">
                        Account Details
                    </h1>
                    {{-- <div class="mb-12">
                        <img src="/assets/img/unlicensed/blog-author.jpg" alt="user image"
                            class="h-40 w-40 overflow-hidden rounded-full object-cover">
                    </div> --}}

                    <form>
                        <div class="mt-5 grid grid-cols-1 gap-5 md:mt-8 md:grid-cols-2">
                            <div class="">
                                <label for="name_displayed" class="mb-2 block font-hk text-secondary">Name</label>
                                <input type="text" class="form-input" id="name_displayed"
                                    value="{{ request()->user()->name }}" disabled>
                            </div>
                            <div class="">
                                <label for="email" class="mb-2 block font-hk text-secondary">Email Address</label>
                                <input type="email" class="form-input" id="email"
                                    value="{{ request()->user()->email }}" disabled>
                            </div>
                        </div>
                        <div class="mt-5 grid grid-cols-1 gap-5 md:mt-8 md:grid-cols-2">
                            <div class="">
                                <label for="name_displayed" class="mb-2 block font-hk text-secondary">Email Verification</label>
                                <input type="text" class="form-input" id="name_displayed"
                                    value="{{ request()->user()->email_verified_at ?? 'Not Verified' }}" disabled>
                            </div>
                            <div class="">
                                <label for="email" class="mb-2 block font-hk text-secondary">Registered On</label>
                                <input type="email" class="form-input" id="email"
                                    value="{{ request()->user()->created_at }}" disabled>
                            </div>
                        </div>

                        {{-- <div class="my-8">
                            <div>
                                <h4 class="font-hkbold mb-2 text-xl text-secondary sm:text-left">
                                    Shipping Address
                                </h4>
                                <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
                                    <div class="w-full">
                                        <label for="street" class="mb-2 block font-hk text-secondary">Street</label>
                                        <input type="text" class="form-input" id="street">
                                    </div>
                                    <div class="w-full">
                                        <label for="street2" class="mb-2 block font-hk text-secondary">Street 2</label>
                                        <input type="email" class="form-input" id="street2">
                                    </div>
                                </div>
                                <div class="mt-5 grid grid-cols-1 gap-5 md:grid-cols-3">
                                    <div class="">
                                        <label for="city" class="mb-2 block font-hk text-secondary">City</label>
                                        <input type="text" class="form-input" id="city">
                                    </div>
                                    <div class="">
                                        <label for="state" class="mb-2 block font-hk text-secondary">State</label>
                                        <input type="email" class="form-input" id="state">
                                    </div>
                                    <div class="">
                                        <label for="zip" class="mb-2 block font-hk text-secondary">Zip Code</label>
                                        <input type="email" class="form-input" id="zip">
                                    </div>
                                </div>
                                <div class="mt-5">
                                    <label for="country" class="mb-2 block font-hk text-secondary">Country</label>
                                    <select class="form-select" id="country">
                                        <option></option>
                                        <option value="nigeria">Nigeria</option>
                                    </select>
                                </div>
                            </div>
                        </div> --}}

                        {{-- <div>
                            <button class="btn btn-primary" aria-label="Save button">
                                Save
                            </button>
                        </div> --}}
                    </form>

                    {{-- Address --}}
                    <hr class="my-12">


                    {{-- Shipping address --}}
                    <div class="pt-4 pb-10">
                        <h4 class="text-center font-hk text-xl font-medium text-secondary sm:text-left md:text-2xl">
                            Shipping address
                        </h4>

                        {{-- new-address and Review --}}
                        <div class="pt-6 pb-0 pb-4" x-data="{ activeTab: @if (isset($addresses) && !empty($addresses)) 'previous-address' @else 'new-address' @endif }">
                            <div class="tabs flex flex-col sm:flex-row" role="tablist">

                                <span @click="activeTab = 'new-address'"
                                    class="tab-item cursor-pointer border-t-2 border-transparent bg-white px-10 py-5 text-center font-hk font-bold text-secondary transition-colors hover:bg-grey-light sm:text-left"
                                    :class="{ 'active': activeTab=== 'new-address' }">
                                    Add new address
                                </span>

                                <span @click="activeTab = 'previous-address'"
                                    class="tab-item cursor-pointer border-t-2 border-transparent bg-white px-10 py-5 text-center font-hk font-bold text-secondary transition-colors hover:bg-grey-light sm:text-left active"
                                    :class="{ 'active': activeTab=== 'previous-address' }">
                                    Previous address
                                </span>

                            </div>
                            <div class="tab-content relative">
                                {{-- New Address --}}
                                <div :class="{ 'active': activeTab=== 'new-address' }"
                                    class="tab-pane bg-grey-light pt-6 transition-opacity" role="tabpanel">
                                    <form action="{{ route('account.addresses.store') }}" method="post">
                                        @csrf
                                        {{-- <input type="hidden" name="order_id" value="{{ $order->id }}"> --}}
                                        <div class="mx-auto w-100 px-2 text-center sm:text-left">
                                            {{-- Start: Add New Shipping Address --}}

                                            {{-- Fist and last name --}}
                                            <div class="mt-5 grid grid-cols-1 gap-5 md:mt-8 md:grid-cols-2">
                                                <div class="">
                                                    <label for="name_displayed" class="mb-2 block font-hk text-secondary">
                                                        First Name
                                                    </label>
                                                    <input type="text" class="form-input" id="name_displayed"
                                                        name="first_name" value="" required>
                                                </div>
                                                <div class="">
                                                    <label for="last_name" class="mb-2 block font-hk text-secondary">
                                                        Last Name
                                                    </label>
                                                    <input type="text" class="form-input" id="last_name" name="last_name"
                                                        value="" required>
                                                </div>
                                            </div>

                                            {{-- Phone number and street --}}
                                            <div class="pt-4 md:pt-5">
                                                <label for="phone-number"> Phone Number:
                                                    <input type="tel" name="phone_number"
                                                        placeholder="09012345678 or 2349012345678"
                                                        class="form-input mb-4 sm:mb-5" id="phone-number" minlength="11"
                                                        maxlength="13" required>
                                                </label>

                                                <label for="street"> Street:
                                                    <input type="text" name="street" placeholder="Apartment, Suite, etc"
                                                        class="form-input mb-4 sm:mb-5" id="street" required>
                                                </label>
                                            </div>

                                            {{-- City and postal code --}}
                                            <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
                                                <div class="">
                                                    <label for="city"
                                                        class="mb-2 block font-hk text-secondary">City/LGA</label>
                                                    <input type="text" class="form-input" id="city" name="city"
                                                        value="">
                                                </div>
                                                <div class="">
                                                    <label for="post_code" class="mb-2 block font-hk text-secondary">Post
                                                        Code</label>
                                                    <input type="number" class="form-input" id="post_code"
                                                        name="post_code" value="" required>
                                                </div>
                                            </div>

                                            {{-- State --}}
                                            <div class="pt-4 md:pt-5">
                                                @php
                                                    $nigeriaStates = App\Helpers\Setup::nigeriaStates();
                                                @endphp
                                                <label for="state">State:</label>
                                                <select name="state" id="state" placeholder="Country/Region"
                                                    class="form-input mb-4 sm:mb-5" required>
                                                    @forelse ($nigeriaStates as $state)
                                                        <option value="{{ $state }}">{{ $state }}
                                                        </option>
                                                    @empty
                                                        <option value="lagos">lagos</option>
                                                        <option value="kano">kano</option>
                                                        <option value="abuja">abuja</option>
                                                        <option value="osun">osun</option>
                                                        <option value="jos">oyo</option>
                                                    @endforelse
                                                </select>
                                            </div>

                                            {{-- Action link and button --}}
                                            <div class="w-full text-center">
                                                <button type="submit"
                                                    class="w-full btn bg-[#F33300] text-white transition-all hover:bg-primary">
                                                    Add new address
                                                </button>
                                            </div>
                                        </div>
                                        {{-- End: Add New Shipping Address --}}
                                    </form>
                                </div>

                                {{-- Old Address --}}
                                <div :class="{ 'active': activeTab=== 'previous-address' }"
                                    class="tab-pane bg-grey-light pt-6 transition-opacity active" role="tabpanel">
                                    <div class="bg-grey-light py-8 px-0 md:px-8">
                                        <h1 class="font-hkbold pb-6 text-center text-2xl text-secondary sm:text-left">
                                            Previous Addresses
                                        </h1>
                                        <div class="hidden sm:block">
                                            <div class="flex justify-between pb-3">
                                                <div class="w-1/3 pl-4 md:w-2/5">
                                                    <span class="font-hkbold text-sm uppercase text-secondary">
                                                        Full Name
                                                    </span>
                                                </div>
                                                <div class="mr-3 w-1/6 text-center md:w-1/5">
                                                    <span class="font-hkbold text-sm uppercase text-secondary">Phone No.</span>
                                                </div>
                                                <div class="mr-3 w-1/6 text-center md:w-1/5">
                                                    <span class="font-hkbold text-sm uppercase text-secondary">Street</span>
                                                </div>
                                                 <div class="mr-3 w-1/6 text-center md:w-1/5">
                                                    <span class="font-hkbold text-sm uppercase text-secondary">City</span>
                                                </div>
                                                 <div class="mr-3 w-1/6 text-center md:w-1/5">
                                                    <span class="font-hkbold text-sm uppercase text-secondary">Post Code</span>
                                                </div>
                                                 <div class="mr-3 w-1/6 text-center md:w-1/5">
                                                    <span class="font-hkbold text-sm uppercase text-secondary">State</span>
                                                </div>
                                                <div class="w-3/10 text-center md:w-1/5">
                                                    <span class="font-hkbold pr-8 text-sm uppercase text-secondary md:pr-16 xl:pr-8">Action</span>
                                                </div>
                                            </div>
                                        </div>

                                        @forelse ($addresses as $address)
                                            <div
                                                class="mb-3 flex flex-col items-center justify-between rounded bg-white px-4 py-5 shadow sm:flex-row sm:py-4">
                                                <div
                                                    class="w-full border-b border-grey-dark pb-4 text-center sm:w-1/5 sm:border-b-0 sm:pb-0">
                                                    <span
                                                        class="font-hkbold block pt-3 pb-2 text-center text-sm uppercase text-secondary sm:hidden">Name</span>
                                                    <span class="font-hk text-secondary">{{ $address->first_name . " " . $address->last_name }}</span>
                                                </div>
                                                <div
                                                    class="w-full border-b border-grey-dark pb-4 text-center sm:w-1/5 sm:border-b-0 sm:pb-0">
                                                    <span
                                                        class="font-hkbold block pt-3 pb-2 text-center text-sm uppercase text-secondary sm:hidden">Phone No</span>
                                                    <span class="font-hk text-secondary">{{ $address->phone_number }}</span>
                                                </div>  
                                                <div
                                                    class="w-full border-b border-grey-dark pb-4 text-center sm:w-1/5 sm:border-b-0 sm:pb-0">
                                                    <span
                                                        class="font-hkbold block pt-3 pb-2 text-center text-sm uppercase text-secondary sm:hidden">Street</span>
                                                    <span class="font-hk text-secondary">{{ $address->street }}</span>
                                                </div>             
                                                <div
                                                    class="w-full border-b border-grey-dark pb-4 text-center sm:w-1/5 sm:border-b-0 sm:pb-0">
                                                    <span
                                                        class="font-hkbold block pt-3 pb-2 text-center text-sm uppercase text-secondary sm:hidden">City</span>
                                                    <span class="font-hk text-secondary">{{ $address->city }}</span>
                                                </div>
                                                <div
                                                    class="w-full border-b border-grey-dark pb-4 text-center sm:w-1/5 sm:border-b-0 sm:pb-0">
                                                    <span
                                                        class="font-hkbold block pt-3 pb-2 text-center text-sm uppercase text-secondary sm:hidden">Post code</span>
                                                    <span class="font-hk text-secondary">{{ $address->post_code }}</span>
                                                </div>
                                                <div
                                                    class="w-full border-b border-grey-dark pb-4 text-center sm:w-1/5 sm:border-b-0 sm:pb-0">
                                                    <span
                                                        class="font-hkbold block pt-3 pb-2 text-center text-sm uppercase text-secondary sm:hidden">State</span>
                                                    <span class="font-hk text-secondary">{{ $address->state }}</span>
                                                </div>                                                                                                                                                                                
                                                <div class="w-full text-center sm:w-3/10 sm:text-right md:w-1/4 xl:w-1/5">
                                                    <div class="pt-3 sm:pt-0">
                                                        <p
                                                            class="font-hkbold block pb-2 text-center text-sm uppercase text-secondary sm:hidden">
                                                            Action
                                                        </p>
                                                        <span
                                                            class="bg-blue-100 border border-blue-400 px-4 py-3 inline-block rounded font-hk text-blue-400">
                                                            {{-- In Progress --}}
                                                            Edit
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        @empty
                                            <div class="p-4 text-center font-bold">
                                                <p>Not Found!</p>
                                            </div>
                                        @endforelse

                                        {{-- Pagination --}}
                                        <div class="mx-auto py-8">
                                            @if (isset($addresses) && !empty($addresses) && $addresses->links())
                                                {{ $addresses->links() }}
                                            @endif
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End: Main Page Content -->
@endsection
