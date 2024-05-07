@extends('lp.layout')

@section('head')
<!-- Event snippet for Submit lead form conversion page -->
<script>
    gtag('event', 'conversion', {
      'send_to': 'AW-16462150229/-bU2CNqx8ZIZENX04ak9',
      'value': 1.0,
      'currency': 'INR'
  });
</script>
@livewireStyles
<style>
    .cta-sec {
        display: flex;
        align-items: center; /* Aligns items vertically in the center */
        justify-content: center; /* Aligns items horizontally in the center (optional, if you need horizontal centering) */
        height: calc(100vh - 250px);
        background-size: cover;
        background-position: center center;
        padding: 80px 0;
        text-align: center;
        color: #fff;
    }

    .cta-sec .container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        height: 100%;
    }
</style>
@endsection

@section('section')

<!-- ===================== Header Area ===================== -->
<header>
    <div class="top-header">
        <div class="container">
            <div class="header">
                <div class="social-links">
                    {{-- <ul>
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
                <div class="contact-detail">
                    <ul>
                        <li>
                            <a href="tel:+918920680615"><i
                                    class="fas fa-phone-alt"></i><span>+91-892-068-0615</span></a>
                        </li>
                        <li>
                            <a href="mailto:info@dreamladderconsultancy.com"><i
                                    class="fas fa-envelope"></i><span>info@dreamladderconsultancy.com</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="main-header">
        <div class="container">
            <div class="header">
                <div class="logo">
                    <a href="#">
                        <img src="/assets/img/logo/logo.png" alt="logo">
                    </a>
                </div>
                <div class="nav d-none d-lg-flex">
                    <ul>
                        <li>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#request_callback"
                                class="request-callback-btn">Request Callback</button>
                        </li>
                    </ul>
                </div>
                <button type="button" class="side-menu-btn d-lg-none">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </div>
</header>
<!-- ===================== End Header Area ===================== -->
<main>
    <!-- ===================== CTA-Sec Area ===================== -->
    <div class="cta-sec">
        <div class="container">
            <div class="title">
                Thank You for reaching us!
            </div>
            <div class="content">
                We will be in touch.
            </div>
            <div class="order-btn">
                <a href="{{ route('lp.sop') }}">Go Back</a>
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
                                    <input type="number" name="mobile" placeholder="Contact Number *" required>
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
    }, 35000);
    function popup() {
        if (i === 1) {
            $('#request_callback').modal('show');
        }
        i++;
    }
</script>
@livewireScripts

@endsection
