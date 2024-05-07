@extends('lp.layout')

@section('head')
    @livewireStyles
    <style>
        .iti--allow-dropdown .iti__flag-container{
        left: 0!important;
        right: auto;
        top: -40px;
        
        }
        .iti{
            display: block!important;
        }
        .iti__country-list--dropup {
             top:10%;
        }
        </style>
@endsection

@section('section')
@include('lp.inc.header')
    <!-- ===================== Side-Mennu Area ===================== -->
    <div class="side-menu-area">
        <div class="side-menu-box">
            <div class="side-menu">
                <div class="header">
                    <div class="logo">
                        <a href="#">
                            <img src="{{ config('app.url') }}/assets/img/logo/logo.png" alt="logo">
                        </a>
                    </div>
                    <div class="close-btn">
                        <button type="button"><i class="far fa-times"></i></button>
                    </div>
                </div>
                <div class="nav">
                    <ul>
                        <li>
                            <a href="#order-sop">Order Your SOP</a>
                        </li>
                        <li>
                            <a href="#sop-samples">Samples</a>
                        </li>
                        <li>
                            <a href="#sop-review">SOP Review</a>
                        </li>
                        <li>
                            <a href="#sop-guide">SOP Guide</a>
                        </li>
                        <li>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#request_callback"
                                class="request-callback-btn">Request Callback</button>
                        </li>
                    </ul>
                </div>
                <div class="social-links">
                    {{-- <ul>
                        <li>
                            <p>Social Media :</p>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.facebook.com/Sop-Writing-Help-106552748560434"><i
                                    class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.instagram.com/dreamladderconsultancy/"><i
                                    class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a target="_blank" href="https://twitter.com/dreamladderconsultancy"><i
                                    class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.linkedin.com/company/dreamladderconsultancy"><i
                                    class="fab fa-linkedin-in"></i></a>
                        </li>
                    </ul> --}}
                </div>
            </div>
        </div>
        <div class="overlay"></div>
    </div>
    <!-- ===================== End Side-Mennu Area ===================== -->


    <main>

        <!-- ===================== Hero-Sec Area ===================== -->
        <div class="hero-sec">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 mb-5 mb-xl-0">
                        <div class="content-box">
                            <h2 class="title">Statement Of Purpose Writing Services </h2>
                            <p class="tag-line"><span>By Professional Writers</span></p>
                            <h3 class="title-2">Without Beating around THE BUSH...</h3>
                            <ul>
                                <li>
                                    Verified Writers Providing SOP & LOR.
                                </li>
                                <li>
                                    Improved Probability of getting selected in your dream university.
                                </li>
                                <li>
                                    Wide Range of Services(Under Graduate, Post Graduate, Doctorate)
                                </li>
                                <li>
                                    Successful Admission in Top Universities.
                                </li>
                            </ul>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#request_callback"
                                class="request-callback-btn">Request Callback</button>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="form-1" id="order-sop" style="scroll-margin-top: 180px;">
                            @livewire('academic-form')
                            {{-- <form>
                                <div class="title">
                                    Kick Start Your Academic Journey!
                                </div>
                                <div class="form-steps step-1">
                                    <div class="steps-box">
                                        <div class="steps-bar">
                                            <div class="steps-done" style="width: 50%;"></div>
                                        </div>
                                        <div class="steps">
                                            <span class="current-step">1</span>
                                            <span class="text">of</span>
                                            <span class="total-steps">2</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-xl-12">
                                            <div class="input-field">
                                                <input type="text" placeholder="Name *" class="error-msg">
                                                <span class="error-msg">Error Message</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xl-12">
                                            <div class="input-field">
                                                <input type="email" placeholder="Email *">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xl-12">
                                            <div class="input-field">
                                                <input type="number" placeholder="Contact Number *">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-xl-12">
                                            <div class="input-submit">
                                                <input type="submit" value="SUBMIT NOW">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-steps step-2">
                                    <div class="steps-box">
                                        <div class="steps-bar">
                                            <div class="steps-done" style="width: 100%;"></div>
                                        </div>
                                        <div class="steps">
                                            <span class="current-step">2</span>
                                            <span class="text">of</span>
                                            <span class="total-steps">2</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-xl-12">
                                            <div class="input-field">
                                                <input type="text" placeholder="Country you're applying for *">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xl-12">
                                            <div class="input-field">
                                                <input type="text" placeholder="University you're applying for *">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xl-12">
                                            <div class="input-field">
                                                <input type="text" placeholder="Course you're applying for *">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xl-12">
                                            <div class="input-field">
                                                <input type="text" placeholder="Experience Level *">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-xl-12">
                                            <div class="input-field file">
                                                <input class="d-none" type="file" id="attachment" name="file">
                                                <label for="attachment">
                                                    <p></p>
                                                    <span>Upload Details</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-xl-12">
                                            <div class="input-field">
                                                <textarea rows="2"
                                                    placeholder="Kindly mention your SOP requirement"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-xl-12">
                                            <div class="input-field terms">
                                                <label>
                                                    <input name="checkbox" type="checkbox">
                                                    <div class="checkbox-btn">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <p>
                                                        I agree with Privacy Policy and <a href="#term"
                                                            target="_blank">Terms &amp; Conditions</a>
                                                    </p>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-xl-12">
                                            <div class="input-submit">
                                                <input type="submit" value="SUBMIT NOW" class="disabled">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ===================== End Hero-Sec Area ===================== -->

        <!-- ===================== About-Sec Area ===================== -->
        <div class="about-sec">
            <div class="container">
                <div class="sec-heading">
                    <h2>Students Got Admission In:</h2>
                    <p>We have been helping students to secure admission in following countries.</p>
                </div>
                <div class="map-sec d-none d-lg-block">
                    <img src="{{ config('app.url') }}/assets/img/map.png" alt="map-img">
                    <div class="country-sec">
                        <div class="united-state">
                            <div class="map-points">
                                <span></span>
                            </div>
                            <div class="map-line-1">
                                <div class="map-line-2">

                                </div>
                            </div>
                            <div class="university">
                                <div class="country-name">
                                    <span>United State</span>
                                </div>
                                <div class="university-list">
                                    <ul>
                                        <li>
                                            Stanford University
                                        </li>
                                        <li>
                                            Harvard University
                                        </li>
                                        <li>
                                            Princeton University
                                        </li>
                                        <li>
                                            Massachusetts Institute of Technology
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="united-kingdom">
                            <div class="map-points">
                                <span></span>
                            </div>
                            <div class="map-line-1">
                                <div class="map-line-2">

                                </div>
                            </div>
                            <div class="university">
                                <div class="country-name">
                                    <span>United Kingdom</span>
                                </div>
                                <div class="university-list">
                                    <ul>
                                        <li>
                                            University of Oxford
                                        </li>
                                        <li>
                                            University of Cambridge
                                        </li>
                                        <li>
                                            Imperial College London
                                        </li>
                                        <li>
                                            UCL (University College London)
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="germany">
                            <div class="map-points">
                                <span></span>
                            </div>
                            <div class="map-line-1">
                                <div class="map-line-2">

                                </div>
                            </div>
                            <div class="university">
                                <div class="country-name">
                                    <span>Germany</span>
                                </div>
                                <div class="university-list">
                                    <ul>
                                        <li>
                                            Technische Universität München
                                        </li>
                                        <li>
                                            Ludwig-Maximilians-Universität München
                                        </li>
                                        <li>
                                            Ruprecht-Karls-Universität Heidelberg
                                        </li>
                                        <li>
                                            Humboldt-Universität zu Berlin
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="italy">
                            <div class="map-points">
                                <span></span>
                            </div>
                            <div class="map-line-1">
                                <div class="map-line-2">

                                </div>
                            </div>
                            <div class="university">
                                <div class="country-name">
                                    <span>Italy</span>
                                </div>
                                <div class="university-list">
                                    <ul>
                                        <li>
                                            University of Bologna
                                        </li>
                                        <li>
                                            University of Padua
                                        </li>
                                        <li>
                                            Sapienza University of Rome
                                        </li>
                                        <li>
                                            University of Milan
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="south-korea">
                            <div class="map-points">
                                <span></span>
                            </div>
                            <div class="map-line-1">
                                <div class="map-line-2">

                                </div>
                            </div>
                            <div class="university">
                                <div class="country-name">
                                    <span>South Korea</span>
                                </div>
                                <div class="university-list">
                                    <ul>
                                        <li>
                                            Korea University
                                        </li>
                                        <li>
                                            Ewha Womans University
                                        </li>
                                        <li>
                                            Kyung Hee University
                                        </li>
                                        <li>
                                            Seoul National University
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="australia">
                            <div class="map-points">
                                <span></span>
                            </div>
                            <div class="map-line-1">
                                <div class="map-line-2">

                                </div>
                            </div>
                            <div class="university">
                                <div class="country-name">
                                    <span>Australia</span>
                                </div>
                                <div class="university-list">
                                    <ul>
                                        <li>
                                            Australian National University (ANU)
                                        </li>
                                        <li>
                                            University of Sydney
                                        </li>
                                        <li>
                                            University of Melbourne
                                        </li>
                                        <li>
                                            University of Queensland (UQ)
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="newzealand">
                            <div class="map-points">
                                <span></span>
                            </div>
                            <div class="map-line-1">
                                <div class="map-line-2">

                                </div>
                            </div>
                            <div class="university">
                                <div class="country-name">
                                    <span>New Zealand</span>
                                </div>
                                <div class="university-list">
                                    <ul>
                                        <li>
                                            The University of Auckland
                                        </li>
                                        <li>
                                            University of Otago
                                        </li>
                                        <li>
                                            University of Canterbury
                                        </li>
                                        <li>
                                            Massey University
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="canada">
                            <div class="map-points">
                                <span></span>
                            </div>
                            <div class="map-line-1">
                                <div class="map-line-2">

                                </div>
                            </div>
                            <div class="university">
                                <div class="country-name">
                                    <span>Canada</span>
                                </div>
                                <div class="university-list">
                                    <ul>
                                        <li>
                                            University of Toronto
                                        </li>
                                        <li>
                                            McGill University
                                        </li>
                                        <li>
                                            University of British Columbia
                                        </li>
                                        <li>
                                            Université de Montréal
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="m-university-sec d-lg-none">
                    <ul>
                        <li>
                            <div class="country-name">
                                <span>
                                    <img src="{{ config('app.url') }}/assets/img/flags/usa.png" alt="usa">
                                    United State
                                </span>
                            </div>
                            <div class="university-list">
                                <ul>
                                    <li>
                                        Stanford University
                                    </li>
                                    <li>
                                        Harvard University
                                    </li>
                                    <li>
                                        Princeton University
                                    </li>
                                    <li>
                                        Massachusetts Institute of Technology
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="country-name">
                                <span>
                                    <img src="{{ config('app.url') }}/assets/img/flags/uk.png" alt="uk">
                                    United Kingdom
                                </span>
                            </div>
                            <div class="university-list">
                                <ul>
                                    <li>
                                        University of Oxford
                                    </li>
                                    <li>
                                        University of Cambridge
                                    </li>
                                    <li>
                                        Imperial College London
                                    </li>
                                    <li>
                                        UCL (University College London)
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="country-name">
                                <span>
                                    <img src="{{ config('app.url') }}/assets/img/flags/germany.png" alt="germany">
                                    Germany
                                </span>
                            </div>
                            <div class="university-list">
                                <ul>
                                    <li>
                                        Technische Universität München
                                    </li>
                                    <li>
                                        Ludwig-Maximilians-Universität München
                                    </li>
                                    <li>
                                        Ruprecht-Karls-Universität Heidelberg
                                    </li>
                                    <li>
                                        Humboldt-Universität zu Berlin
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="country-name">
                                <span>
                                    <img src="{{ config('app.url') }}/assets/img/flags/italy.png" alt="italy">
                                    Italy
                                </span>
                            </div>
                            <div class="university-list">
                                <ul>
                                    <li>
                                        University of Bologna
                                    </li>
                                    <li>
                                        University of Padua
                                    </li>
                                    <li>
                                        Sapienza University of Rome
                                    </li>
                                    <li>
                                        University of Milan
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="country-name">
                                <span>
                                    <img src="{{ config('app.url') }}/assets/img/flags/south-korea.jpg" alt="south-korea">
                                    South Korea
                                </span>
                            </div>
                            <div class="university-list">
                                <ul>
                                    <li>
                                        Korea University
                                    </li>
                                    <li>
                                        Ewha Womans University
                                    </li>
                                    <li>
                                        Kyung Hee University
                                    </li>
                                    <li>
                                        Seoul National University
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="country-name">
                                <span>
                                    <img src="{{ config('app.url') }}/assets/img/flags/australia.jpg" alt="australia">
                                    Australia
                                </span>
                            </div>
                            <div class="university-list">
                                <ul>
                                    <li>
                                        Australian National University (ANU)
                                    </li>
                                    <li>
                                        University of Sydney
                                    </li>
                                    <li>
                                        University of Melbourne
                                    </li>
                                    <li>
                                        University of Queensland (UQ)
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="country-name">
                                <span>
                                    <img src="{{ config('app.url') }}/assets/img/flags/newzealand.png" alt="newzealand">
                                    New Zealand
                                </span>
                            </div>
                            <div class="university-list">
                                <ul>
                                    <li>
                                        The University of Auckland
                                    </li>
                                    <li>
                                        University of Otago
                                    </li>
                                    <li>
                                        University of Canterbury
                                    </li>
                                    <li>
                                        Massey University
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="country-name">
                                <span>
                                    <img src="{{ config('app.url') }}/assets/img/flags/canada.png" alt="canada">
                                    Canada
                                </span>
                            </div>
                            <div class="university-list">
                                <ul>
                                    <li>
                                        University of Toronto
                                    </li>
                                    <li>
                                        McGill University
                                    </li>
                                    <li>
                                        University of British Columbia
                                    </li>
                                    <li>
                                        Université de Montréal
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- ===================== End About-Sec Area ===================== -->

        <!-- ===================== Selected-SOP Area ===================== -->
        <div class="selected-sop colored">
            <div class="container">
                <div class="sec-heading">
                    <h2>Our Selected SOP's</h2>
                </div>
                <div class="selected-sop-slider">
                    <div class="owl-carousel">
                        <div class="slide">
                            <div class="sop-img">
                                <img src="{{ config('app.url') }}/assets/img/sop/01.png" alt="sop-image">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="sop-img">
                                <img src="{{ config('app.url') }}/assets/img/sop/02.png" alt="sop-image">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="sop-img">
                                <img src="{{ config('app.url') }}/assets/img/sop/03.png" alt="sop-image">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="sop-img">
                                <img src="{{ config('app.url') }}/assets/img/sop/04.png" alt="sop-image">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="sop-img">
                                <img src="{{ config('app.url') }}/assets/img/sop/05.png" alt="sop-image">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="sop-img">
                                <img src="{{ config('app.url') }}/assets/img/sop/06.png" alt="sop-image">
                            </div>
                        </div>
                        {{-- <div class="slide">
                            <div class="sop-img">
                                <img src="{{ config('app.url') }}/assets/img/sop/07.png" alt="sop-image">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="sop-img">
                                <img src="{{ config('app.url') }}/assets/img/sop/08.png" alt="sop-image">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="sop-img">
                                <img src="{{ config('app.url') }}/assets/img/sop/09.png" alt="sop-image">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="sop-img">
                                <img src="{{ config('app.url') }}/assets/img/sop/10.png" alt="sop-image">
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- ===================== End Selected-SOP Area ===================== -->

        <!-- ===================== SOP-Samples Area ===================== -->
        <div class="sop-samples" id="sop-samples" style="scroll-margin-top: 140px;">
            <div class="container">
                <div class="sec-heading">
                    <h2>Our SOP Samples</h2>
                </div>
                <div class="sop-samples-slider">
                    <div class="owl-carousel">
                        <div class="slide">
                            <div class="sop-img">
                                <a href="{{ config('app.url') }}/assets/img/samples/1.png">
                                    <img src="{{ config('app.url') }}/assets/img/samples/1.png" alt="sop-image">
                                </a>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="sop-img">
                                <a href="{{ config('app.url') }}/assets/img/samples/2.png">
                                    <img src="{{ config('app.url') }}/assets/img/samples/2.png" alt="sop-image">
                                </a>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="sop-img">
                                <a href="{{ config('app.url') }}/assets/img/samples/3.png">
                                    <img src="{{ config('app.url') }}/assets/img/samples/3.png" alt="sop-image">
                                </a>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="sop-img">
                                <a href="{{ config('app.url') }}/assets/img/samples/4.png">
                                    <img src="{{ config('app.url') }}/assets/img/samples/4.png" alt="sop-image">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ===================== End SOP-Samples Area ===================== -->

        <!-- ===================== SOP-Reviewed Area ===================== -->
        <div class="sop-reviewed" id="sop-review" style="scroll-margin-top: 80px;">
            <div class="container">
                <!-- <div class="sec-heading">
                    <h2>Want to get your SOP Reviewed?</h2>
                    <p>Get Expert Reviews by just uploading your written document!</p>
                </div> -->
                <div class="form-1">

                    <form action="{{ route('enquiry-submit') }}" method="GET" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="url" value="{{ Request::url() }}">
                        <input type="hidden" name="source" value="get your SOP Reviewed">
                        <div class="sec-heading">
                            <h2>Want to get your SOP Reviewed?</h2>
                            <p>Get Expert Reviews by just uploading your written document!</p>
                        </div>
                        <!-- <div class="title">
                            Get your SOP Proofread and Edit
                        </div>
                        <div class="tag-line">
                            Just Fill the form and get the SOP reviewed by our professionals.
                        </div> -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-field">
                                    <input type="text" name="name" placeholder="Name *" required>
                                    {{-- <span class="error-msg">Error Message</span> --}}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-field">
                                    <input type="email" name="email" placeholder="Email *" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-field">
                                    <input type="text" name="mobile" placeholder="Contact Number *" required style="padding-left: 50px">
                                    <input type="hidden" name="country_phone" class="d-none" id="phone" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-field file">
                                    <input type="file" name="file" id="attachment">
                                    {{-- <input class="d-none" name="file" type="file" id="attachment" name="file"> --}}
                                    {{-- <label for="attachment">
                                        <p></p>
                                        <span>Upload Details</span>
                                    </label> --}}
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="input-submit">
                                    <input type="submit" value="SUBMIT NOW">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- ===================== End SOP-Reviewed Area ===================== -->

        <!-- ===================== SOP-Guidebook Area ===================== -->
        <div class="sop-guide-sec" id="sop-guide" style="scroll-margin-top: 120px;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="content-box">
                            <h2 class="title">How to Write a perfect SOP</h2>
                            <p class="tag-line">Step by Step SOP Writing Guide</p>
                            <ul>
                                <li>
                                    Simplest SOP writing format
                                </li>
                                <li>
                                    Know the SOP structure and layout
                                </li>
                                <li>
                                    With FREE SOP templates and samples inside
                                </li>
                                <li>
                                    Tips for an effective SOP
                                </li>
                                <li>
                                    Do's and Don'ts of SOP writing
                                </li>
                                <li>
                                    SOP guidebook for the USA, Australia and the UK
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-1">
                            <form action="{{ route('enquiry-submit') }}" method="POST">
                                @csrf
                                <input type="hidden" name="url" value="{{ Request::url() }}">
                                <input type="hidden" name="source" value="Download SOP Writing Guidebook">
                                <div class="title">
                                    Download SOP Writing Guide
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="input-field">
                                            <input type="text" name="name" placeholder="Name *" required>
                                            {{-- <span class="error-msg">Error Message</span> --}}
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-field">
                                            <input type="text"  name="mobile" placeholder="Contact Number *" required style="padding-left: 50px">
                                            <input type="hidden" name="country_phone" class="d-none" id="phone" >
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-submit">
                                            <input type="submit" value="DOWNLOAD">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ===================== End SOP-Guidebook Area ===================== -->

        <!-- ===================== Services-Sec Area ===================== -->
        <div class="services-sec colored">
            <div class="container">
                <div class="sec-heading">
                    <h2>Our Services</h2>
                </div>
                <div class="service-slider">
                    <div class="owl-carousel equal-height">
                        <div class="slide">
                            <div class="h-100">
                                <div class="service-card">
                                    <!-- <div class="icon">
                                        <img src="{{ config('app.url') }}/assets/img/services/icon.svg" alt="icon">
                                    </div> -->
                                    <h4>Professional Statement of Purpose Writing Services</h4>
                                    <p>Give yourself a leading edge over other aspirants with our assistance in drafting
                                        the perfect SOP. Concisely express
                                        your life’s journey, academic accomplishments, key motivations, and other
                                        factors to stay ahead in the race.</p>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="h-100">
                                <div class="service-card">
                                    <!-- <div class="icon">
                                        <img src="{{ config('app.url') }}/assets/img/services/icon.svg" alt="icon">
                                    </div> -->
                                    <h4>Letter of Recommendation Writing Services</h4>
                                    <p>Get the words of your professor or superior recrafted in a professional and
                                        convincing tone with our LOR service. We
                                        help highlight your accomplishments incredible and emphatic manner.</p>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="h-100">
                                <div class="service-card">
                                    <!-- <div class="icon">
                                        <img src="{{ config('app.url') }}/assets/img/services/icon.svg" alt="icon">
                                    </div> -->
                                    <h4>Personal Statement Writing Services</h4>
                                    <p>Spell out the prime motivations, key events, major factors, and future
                                        aspirations that inspired you to embrace a
                                        particular academic or professional course with our personal statement writing
                                        service.</p>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="h-100">
                                <div class="service-card">
                                    <!-- <div class="icon">
                                        <img src="{{ config('app.url') }}/assets/img/services/icon.svg" alt="icon">
                                    </div> -->
                                    <h4>Admission Letter and Essay Writing Services</h4>
                                    <p>Add emotional depth and intellectual vigour to your admission letter with our
                                        qualified essay writing support service.
                                        Admission in institute of your choice is guaranteed by our literary intervention
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="h-100">
                                <div class="service-card">
                                    <!-- <div class="icon">
                                        <img src="{{ config('app.url') }}/assets/img/services/icon.svg" alt="icon">
                                    </div> -->
                                    <h4>Student Resume Writing Services</h4>
                                    <p>Resumes offer a quick peek into your academic and professional accomplishments.
                                        We help in crafting concise resumes for
                                        students that highlight their key achievements in an uncluttered and
                                        professional manner.</p>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="h-100">
                                <div class="service-card">
                                    <!-- <div class="icon">
                                        <img src="{{ config('app.url') }}/assets/img/services/icon.svg" alt="icon">
                                    </div> -->
                                    <h4>Professional College Admission Essay Writing Services</h4>
                                    <p>Secure your seat in the best college with our admission essay writing support.
                                        Despite tough competition, you can tame
                                        the challenge with a logically written essay that would adequately demonstrate
                                        your passion.</p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <!-- ===================== End Services-Sec Area ===================== -->

        <!-- ===================== Testimonials-Sec Area ===================== -->
        <div class="testimonials-sec">
            <div class="container">
                <div class="sec-heading">
                    <h2>Testimonials</h2>
                </div>
                <div class="testimonial-slider">
                    <div class="owl-carousel equal-height">
                        <div class="slide">
                            <div class="h-100">
                                <div class="testimonial-card">
                                    <div class="info-box">
                                        <div class="info">
                                            <div class="qoute">
                                                <img src="{{ config('app.url') }}/assets/img/qoute.svg" alt="qoute">
                                            </div>
                                            <div class="detail">
                                                <div class="name">
                                                    Mayank Chaturvedi
                                                </div>
                                                {{-- <div class="country">
                                                    Robina
                                                </div> --}}
                                            </div>
                                        </div>
                                        <div class="rating">
                                            <ul>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="content-box">
                                        <p>
                                            I am not very expressive and this habit of mine became a problem for me at
                                            the time of admission. Thanks to Dream Ladder Consultancy and their team for
                                            creating a wonderful SOP for me. They need the necessary information and
                                            create wonderful SOP. They wrote a generic SOP for me.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="h-100">
                                <div class="testimonial-card">
                                    <div class="info-box">
                                        <div class="info">
                                            <div class="qoute">
                                                <img src="{{ config('app.url') }}/assets/img/qoute.svg" alt="qoute">
                                            </div>
                                            <div class="detail">
                                                <div class="name">
                                                    Sagar Bhardwaj
                                                </div>
                                                {{-- <div class="country">
                                                    Robina
                                                </div> --}}
                                            </div>
                                        </div>
                                        <div class="rating">
                                            <ul>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="content-box">
                                        <p>
                                            A well prepared SOP gets you the admission. I would like to express the
                                            genuine feedback that to get admission SOP is crucial and on time delivery
                                            of the SOP is even more crucial. Thanks to Dream Ladder Consultancy they really
                                            helped me a lot to get me in the line of selected students.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="h-100">
                                <div class="testimonial-card">
                                    <div class="info-box">
                                        <div class="info">
                                            <div class="qoute">
                                                <img src="{{ config('app.url') }}/assets/img/qoute.svg" alt="qoute">
                                            </div>
                                            <div class="detail">
                                                <div class="name">
                                                    Bhuvisa Shrinivasan
                                                </div>
                                                {{-- <div class="country">
                                                    Robina
                                                </div> --}}
                                            </div>
                                        </div>
                                        <div class="rating">
                                            <ul>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="content-box">
                                        <p>
                                            I was worried about my admission but I am thankful for Dream Ladder Consultancy as I
                                            got my SOP for a Swiss University which was my dream. As a student of
                                            medical science I do not have good writing skills. Thanks to SOP Writing
                                            Help for helping me at the crucial time of admission for writing my SOP.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="h-100">
                                <div class="testimonial-card">
                                    <div class="info-box">
                                        <div class="info">
                                            <div class="qoute">
                                                <img src="{{ config('app.url') }}/assets/img/qoute.svg" alt="qoute">
                                            </div>
                                            <div class="detail">
                                                <div class="name">
                                                    Mohmmad Riyaz Saifi
                                                </div>
                                                {{-- <div class="country">
                                                    Robina
                                                </div> --}}
                                            </div>
                                        </div>
                                        <div class="rating">
                                            <ul>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="content-box">
                                        <p>
                                            Thank you so much the team of Dream Ladder Consultancy to cater my needs. It was
                                            wonderfully written and well expressed. It created a favourable impression
                                            on the interview room and got a comment on my SOP from the interviewer too.
                                            Thanks a lot once again.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="h-100">
                                <div class="testimonial-card">
                                    <div class="info-box">
                                        <div class="info">
                                            <div class="qoute">
                                                <img src="{{ config('app.url') }}/assets/img/qoute.svg" alt="qoute">
                                            </div>
                                            <div class="detail">
                                                <div class="name">
                                                    Dhiriti singh
                                                </div>
                                                {{-- <div class="country">
                                                    Robina
                                                </div> --}}
                                            </div>
                                        </div>
                                        <div class="rating">
                                            <ul>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="content-box">
                                        <p>
                                            Thank You Dream Ladder Consultancy for writing a stellar SOP for my study visa. I
                                            really appreciate your promptness to meet my requirements and willingness to
                                            edit it till the time I'm satisfied. Good work. Keep it up. All the best.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="h-100">
                                <div class="testimonial-card">
                                    <div class="info-box">
                                        <div class="info">
                                            <div class="qoute">
                                                <img src="{{ config('app.url') }}/assets/img/qoute.svg" alt="qoute">
                                            </div>
                                            <div class="detail">
                                                <div class="name">
                                                    Madhu Sharma
                                                </div>
                                                {{-- <div class="country">
                                                    Robina
                                                </div> --}}
                                            </div>
                                        </div>
                                        <div class="rating">
                                            <ul>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="content-box">
                                        <p>
                                            Excellent work provided by Dream Ladder Consultancy for my sop. They did go beyond
                                            her promises and helped me when it was most needed. They completed there
                                            work before time. very polite throughout our conversation. thank you so much
                                            for helping me out and going beyond the limit to help me out.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ===================== End Testimonials-Sec Area ===================== -->

        <!-- ===================== CTA-Sec Area ===================== -->
        <div class="cta-sec">
            <div class="container">
                <div class="title">
                    Our Academic Writing Experts at Your Service!
                </div>
                <div class="content">
                    It takes just a minute to fill up the contact form and we will reach out to you in the shortest
                    amount of time. With just three simple steps, you can confirm, pay, and get the delivery of your
                    assignment at your doorstep.
                </div>
                <div class="order-btn">
                    <a href="#order-sop">Order Now</a>
                </div>
            </div>
        </div>
        <!-- ===================== End CTA-Sec Area ===================== -->

    </main>


    <!-- ===================== Request-Callback Modal Area ===================== -->
    <div class="modal fade" id="request_callback" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-1">
                        <form action="{{ route('enquiry-submit') }}" method="POST">
                            @csrf
                            <input type="hidden" name="source" value="Request Callback Popup">
                            <input type="hidden" name="url" value="{{ Request::url() }}">
                            <div class="close-btn">
                                <button type="button" data-bs-dismiss="modal" aria-label="Close">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <div class="title">
                                Request Callback
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-field">
                                        <input type="text" name="name" placeholder="Name *" required>
                                        {{-- <span class="error-msg">Error Message</span> --}}
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-field">
                                        <input type="email" name="email" placeholder="Email *" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-field">
                                        <input type="text"  name="mobile" placeholder="Contact Number *" required style="padding-left: 50px">
                                        <input type="hidden" name="country_phone" class="d-none" id="phone" >
                                        
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-submit">
                                        <input type="submit" value="SUBMIT NOW">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ===================== End Request-Callback Modal Area ===================== -->
@endsection

@section('js')
    <script>
        $('.selected-sop-slider .owl-carousel').owlCarousel({
            loop: true,
            autoplay: true,
            autoplaySpeed: 1000,
            autoplayTimeout: 2000,
            dots: false,
            dotsEach: true,
            nav: true,
            navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
            stagePadding: 10,
            responsive: {
                0: {
                    items: 2,
                    dots: true,
                    margin: 10,
                },
                576: {
                    items: 3,
                    dots: false,
                    margin: 20,
                },
                768: {
                    items: 4,
                    margin: 20,
                },
                992: {
                    items: 5,
                    margin: 30,
                },
            },
        });

        $('.sop-samples-slider .owl-carousel').owlCarousel({
            dots: true,
            dotsEach: true,
            nav: true,
            navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
            margin: 30,
            stagePadding: 10,
            responsive: {
                0: {
                    items: 2,
                    dots: true,
                    margin: 10,
                },
                576: {
                    items: 2,
                    margin: 20,
                },
                768: {
                    items: 3,
                },
                992: {
                    items: 4,
                },
            },
        });

        $('.sop-samples-slider').each(function () {
            $(this).find('.owl-item').not('.cloned').find('.sop-img a').magnificPopup({
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        });

        $('.service-slider .owl-carousel').owlCarousel({
            loop: true,
            autoplay: true,
            autoplaySpeed: 1000,
            dots: true,
            dotsEach: true,
            nav: true,
            navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
            stagePadding: 10,
            responsive: {
                0: {
                    items: 1,
                    margin: 30,
                },
                768: {
                    items: 2,
                    margin: 30,
                },
                992: {
                    items: 2,
                    margin: 30,
                },
                1200: {
                    items: 3,
                    margin: 40,
                },
            },
        });

        $('.testimonial-slider .owl-carousel').owlCarousel({
            loop: true,
            autoplay: true,
            autoplaySpeed: 1000,
            dots: true,
            dotsEach: true,
            nav: true,
            navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
            margin: 40,
            stagePadding: 10,
            responsive: {
                0: {
                    items: 1,
                },
                992: {
                    items: 2,
                },
            },
        });

        $('.map-sec .country-sec').each(function(){
            var e = $(this);

            $(e).find('.university').hover(function(){

                $(e).find('.university .country-name').removeClass('active');
                $(e).find('.university .university-list').not($(this).find('.university-list')).slideUp();

                if($(this).find('.university-list').is(':visible')){
                    $(this).find('.university-list').slideUp();
                }else{
                    $(this).find('.country-name').addClass('active');
                    $(this).find('.university-list').slideDown();
                }

            });

        });

        $('.m-university-sec').each(function(){
            var e = $(this);

            $(e).find('> ul > li:eq(0) .country-name').addClass('active');
            $(e).find('> ul > li:eq(0) .university-list').slideDown();

            $(e).find('> ul > li .country-name').click(function(){

                $(e).find('> ul > li .country-name').removeClass('active');
                $(e).find('> ul > li .university-list').not($(this).parent().find('.university-list')).slideUp();

                if($(this).parent().find('.university-list').is(':visible')){
                    $(this).parent().find('.university-list').slideUp();
                }else{
                    $(this).addClass('active');
                    $(this).parent().find('.university-list').slideDown();
                }

            });
        });

        setTimeout(function() {
            $(".whatsAppCTAWrp a").animate({
                width: "190px"
            }, 100);
        }, 4000);
        setTimeout(function() {
            $(".whatsAppCTAWrp a").animate({
                width: "45px"
            }, 100);
        }, 10000);

        var i = 1;
        setTimeout(function() {
            if (i === 1) {
                $('#request_callback').modal('show');
            }
        }, 40000);
        function popup() {
            if (i === 1) {
                $('#request_callback').modal('show');
            }
            i++;
        }
        // window.onload = function(){
        //     $('#request_callback').modal('show');
        // };
    </script>
   
@livewireScripts

@endsection



