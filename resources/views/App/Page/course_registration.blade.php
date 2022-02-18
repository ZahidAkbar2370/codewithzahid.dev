@extends('App.layout')
@section('content')

<!-- start revolution slider -->
        <section class="p-5 example home-startup bg-dark-slate-blue">
            <article class="content">
                <div id="rev_slider_26_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="mask-showcase" data-source="gallery">
                    
                </div>
            </article>
        </section>
<!-- end revolution slider -->

 <!-- start section -->
        <section class="wow animate__fadeIn">
            <div class="container">
                <div class="row justify-content-center">
                    
                    <div class="col-12 col-xl-5 offset-xl-1 col-md-6 lg-padding-30px-lr md-padding-15px-lr">
                        <h6 class="alt-font font-weight-500 text-extra-dark-gray">Register</h6>
                        <form class="border-all border-color-medium-gray padding-4-rem-all lg-margin-35px-top md-padding-2-half-rem-all">
                            <label class="margin-15px-bottom">Username <span class="required-error text-radical-red">*</span></label>
                            <input class="small-input bg-white margin-20px-bottom required" type="text" name="text" placeholder="Enter your username">
                            <label class="margin-15px-bottom">Email address <span class="required-error text-radical-red">*</span></label>
                            <input class="small-input bg-white margin-20px-bottom required" type="email" name="email" placeholder="Enter your email">
                            <label class="margin-15px-bottom">Password <span class="required-error text-radical-red">*</span></label>
                            <input class="small-input bg-white margin-20px-bottom required" type="password" name="password" placeholder="Enter your password">
                            <p class="text-small">Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <a href="#" class="text-decoration-underline">privacy policy</a>.</p>
                            <button class="btn btn-medium btn-fancy btn-dark-gray w-100 submit" type="submit">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->


<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
           
        </x-slot>
<h1 class="alt-font font-weight-600 text-extra-dark-gray">Online Course Registration</h1>
        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ URL::to('registration') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="mobile_no" value="{{ __('Mobile No') }}" />
                <x-jet-input id="mobile_no" class="block mt-1 w-full" type="tel" name="mobile_no" required autocomplete="mobile_no" />
            </div>

            <div class="mt-4">
                <x-jet-label for="address" value="{{ __('Address') }}" />
                <x-jet-input id="address" class="block mt-1 w-full" type="text" name="address" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="course_name" value="{{ __('Course Name') }}" />
                <select id="course_name" class="block mt-1 w-full" name="course_name" required autocomplete="course_name">
                    <option value="">Select Course</option>
                    <option value="wordpress">Wordpress</option>
                </select>
                <!-- <x-jet-input id="course_name" class="block mt-1 w-full" type="text" name="course_name" required autocomplete="course_name" /> -->
            </div>

            <div class="mt-4">
                <x-jet-label for="degree_name" value="{{ __('Current Degree Name') }}" />
                <x-jet-input id="degree_name" class="block mt-1 w-full" type="text" name="degree_name" required autocomplete="degree_name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="degree_status" value="{{ __('Degree Status') }}" />
                <select id="degree_status" class="block mt-1 w-full" name="degree_status" required autocomplete="degree_status">
                    <option value="">Select Status</option>
                    <option value="present">Present</option>
                    <option value="completed">Completed</option>
                </select>
                <!-- <x-jet-input id="course_name" class="block mt-1 w-full" type="text" name="course_name" required autocomplete="course_name" /> -->
            </div>

            
            <div class="flex items-center justify-end mt-4">
                <x-jet-button class="ml-4">
                    {{ __('Apply') }}
                </x-jet-button>
                <!--<a class="btn btn-small btn-small btn-round-edge btn-fast-blue popup-with-zoom-anim" href="#modal-popup2">Apply</a> -->
            </div>
              
        </form>
    </x-jet-authentication-card>
</x-guest-layout>


 <!-- start section -->
        <section class="bg-light-gray wow animate__fadeIn" style="padding: 0px !important;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-6 col-lg-8 col-md-10 text-center">
                       
                        <!-- start modal pop-up -->
                        <div id="modal-popup2" class="zoom-anim-dialog col-11 col-xl-3 col-lg-6 col-md-8 col-sm-9 mx-auto bg-white text-center modal-popup-main padding-4-half-rem-all mfp-hide border-radius-6px sm-padding-2-half-rem-lr">
                            <span class="text-extra-dark-gray text-uppercase alt-font text-extra-large font-weight-600 margin-15px-bottom d-block">Sorry! Registration Closed.</span>
                            <p>Please Contact With Admin. Now You Can't Apply For Online COurse.</p><p>Whatsapp: +92 308 1312527</p>
                            <a class="btn btn-fancy btn-small btn-transparent-light-gray popup-modal-dismiss mt-5" href="#">Dismiss</a>
                        </div>
                        <!-- end modal pop-up -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

@endsection