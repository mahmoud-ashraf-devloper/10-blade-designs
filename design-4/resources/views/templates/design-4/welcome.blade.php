<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $domain_name }}</title>


    <!-- Vendor CSS Files -->
    <link href="{{ asset('design-4/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('design-4/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('design-4/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('design-4/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('design-4/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('design-4/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('design-4/assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Delicious
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

    <style>
        .custom-placeholder::-webkit-input-placeholder {
            color: rgb(138, 138, 138);
        }

        .dropbtn {
            background-color: transparent;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
            color: black
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: transparent;
        }
    </style>
</head>

<body>


    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">@lang('welcome.Welcome')</a></li>
                    <li><a class="nav-link scrollto active" href="#specials">FAQ</a></li>

                    <a class="nav-link scrollto text-white"  href="#contact">@lang('welcome.Contact')</a>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <li class="dropdown">
                <button class="dropbtn">
                    <img style="width: 15px"
                        src="{{ asset('design-4/assets/flags/' . app()->getLocale() . '.png') }}"
                        alt="flags">
                    {{ strtoupper(app()->getLocale()) }}
                </button>
                <ul class="dropdown-content">
                    @foreach ($descriptions as $description => $value)
                        {{-- {{ dd(Config::get('app.languages') ) }} --}}
                        @foreach (Config::get('app.languages') as $language => $locale)
                            @if ($description == $locale)
                                <li style="list-style: none">
                                    <a href="{{ url("lang/$locale") }}">
                                        <img alt="{{ strtoupper(app()->getLocale()) }}"
                                            src="{{ asset("design-4/assets/flags/$locale.png") }}"
                                            width="20" height="15"> @php echo __('welcome.'.$language) @endphp</a>
                                </li>
                            @endif
                        @endforeach
                    @endforeach
                </ul>
            </li>


        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <!-- Slide 1 -->
                    <div class="carousel-item active"
                        style="background-image: url({{ asset('design-4/assets/img/slide/slide-1.jpg') }});">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">@lang('welcome.Welcome')</h2>
                                <p class="animate__animated animate__fadeInUp">@lang('welcome.If you see') <a
                                        href="{{ $domain }}" target="_blank">{{ $domain_name }}</a>
                                    @lang('welcome.on your bank statement, it is because you have purchased a membership with') <a href="https://{{ $responseData->concept_website_name }}"
                                        target="_blank">{{ $responseData->concept_website_name }}</a>.
                                    @lang('welcome.You have received a welcome e-mail with login credentials to') <a href="https://{{ $responseData->concept_website_name }}"
                                        target="_blank">{{ $responseData->concept_website_name }}</a> @lang('welcome.after the initial membership purchase. Please check your inbox for that email.')
                                </p>
                                <div class="row justify-content-center">
                                    <div class="col-lg-10 bg-transparent">
                                        <form class="bg-transparent d-flex flex-column justify-content-center"
                                            action="{{ route('send-email') }}" method="post" role="form"
                                            class="php-email-form">
                                            <div class="row justify-content-center">
                                                <div style="width: 50%" class="form-group w-1/2">
                                                    <input type="text" name="name"
                                                        class="form-control custom-placeholder bg-transparent border-1 rounded py-10 mb-4 text-white"
                                                        value="" id="name" placeholder="@lang('welcome.Name')"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center">

                                                <div style="width: 50%" class="form-group w-1/2 mt-3 mt-md-0">
                                                    <input type="email"
                                                        class="form-control custom-placeholder bg-transparent border-1 rounded py-10 mb-4 text-white"
                                                        name="email" value="" id="email"
                                                        placeholder="@lang('welcome.Email')" required>
                                                </div>
                                            </div>


                                            <div>
                                                <a href="#menu"
                                                    class="btn-menu animate__animated animate__fadeInUp scrollto">@lang('welcome.SEARCH')</a>

                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>



                </div>

            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">



        <!-- ======= Specials Section ======= -->
        <section id="specials" class="specials">
            <div class="container">

                <div class="section-title">
                    <h2>@lang('welcome.Find answers to frequently asked questions here') (<span>FQA</span>)</h2>

                </div>

                <div class="row">
                    <div class="col-lg-3">
                        <ul class="nav nav-tabs flex-column">
                            <li class="nav-item">
                                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
                                    @lang('welcome.What is'){{ $responseData->concept_website_name }}?</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-2" target="_blank"
                                    href="{{ $domain }}">
                                    @lang('welcome.Why do I see') {{ $domain_name }} &nbsp; @lang('welcome.on my bank statement?')</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
                                    @lang('welcome.How do I cancel my membership?')</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-4"> @lang('welcome.Where do I find my invoices?')</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-5"> @lang('welcome.Can I get refunded?')</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-9 mt-4 mt-lg-0">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tab-1">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>{{ $responseData->concept_website_name }}?</h3>
                                        <p><?php echo isset($descriptions[app()->getLocale()]) ? $descriptions[app()->getLocale()] : $descriptions['en']; ?>
                                        </p>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane" id="tab-2">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>@lang('welcome.Why do I see') {{ $domain_name }} &nbsp; @lang('welcome.on my bank statement?')</h3>
                                        <p>@lang('welcome.If you see') <a href="{{ $domain }}"
                                                target="_blank">{{ $domain_name }}
                                            </a> @lang('welcome.on your bank statement, it is because you have purchased a membership with') <a
                                                href="https://{{ $responseData->concept_website_name }}"
                                                target="_blank">{{ $responseData->concept_website_name }}</a>.</p>
                                        <p>@lang('welcome.You have received a welcome e-mail with login credentials to') <a
                                                href="https://{{ $responseData->concept_website_name }}"
                                                target="_blank">{{ $responseData->concept_website_name }}</a>
                                            @lang('welcome.after the initial membership purchase. Please check your inbox for that email.')
                                        </p>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane" id="tab-3">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>@lang('welcome.How do I cancel my membership?')</h3>
                                        <p>@lang('welcome.There are several ways'):</p>
                                        <ul>
                                            <li>@lang('welcome.Log in to your account')</li>
                                            <li>@lang('welcome.Go to')</li>
                                            <li>@lang('welcome.Cancel it directly')</li>
                                            <li>@lang('welcome.Simply contact')</li>
                                        </ul>
                                        <p>@lang('welcome.If you have issues finding your login credentials, please contact customer support.')</p>
                                        <p>@lang('welcome.Email'): <a
                                                href="mailto:{{ $responseData->support_email }}">{{ $responseData->support_email }}</a>
                                        </p>
                                        <p>@lang('welcome.Phone'): <a
                                                href="tel:{{ $responseData->support_phone }}">{{ $responseData->support_phone }}</a>
                                        </p>
                                        <p>@lang('welcome.Customer support is open Monday to Friday from 08.00 AM - 16.00 PM (Time zone: +2 GMT) and will do our best to guide you and answer your questions within 48 hours on weekdays and we are closed in the weekends.')</p>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane" id="tab-4">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>@lang('welcome.Where do I find my invoices?')</h3>
                                        <p>@lang('welcome.An invoice is created whenever we bill your credit card, and you can look for it under \'My Account > Orders\'.')</p>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane" id="tab-5">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3> @lang('welcome.Can I get refunded?')</h3>
                                        <p>
                                        <p>@lang('welcome.Yes, we offer a 100% refund guarantee on all orders where you request a refund within 14 days of the purchase.')</p>
                                        <p>@lang('welcome.We hope you will love everything that you order from us but if something isn’t quite right, you have 14 days to request a refund under the refund guarantee. All other cases have to be reviewed by the customer support team, and a decision is made on a case by case basis.')</p>
                                        <p>@lang('welcome.To request a refund, please contact the customer support team.')</p>
                                        <p>@lang('welcome.Email'): <a
                                                href="mailto:{{ $responseData->support_email }}">{{ $responseData->support_email }}</a>
                                        </p>
                                        <p>@lang('welcome.Phone'): <a
                                                href="tel:{{ $responseData->support_phone }}">{{ $responseData->support_phone }}</a>
                                        </p>
                                        <p>@lang('welcome.Customer support is open Monday to Friday from 08.00 AM - 16.00 PM (Time zone: +2 GMT) and will do our best to guide you and answer your questions within 48 hours on weekdays and we are closed in the weekends.')</p>
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Specials Section -->



        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2><span>@lang('welcome.Contact')</span> Us</h2>
                </div>
            </div>



            <div class="container mt-5">

                <div class="info-wrap">
                    <div class="row">



                        <div class="col-lg-6 col-md-6 info mt-4 mt-lg-0">
                            <i class="bi bi-envelope"></i>
                            <h4>@lang('welcome.Email'):</h4>
                            <p><a
                                    href="mailto:{{ $responseData->support_email }}">{{ $responseData->support_email }}</a>
                            </p>
                        </div>

                        <div class="col-lg-6 col-md-6 info mt-4 mt-lg-0">
                            <i class="bi bi-phone"></i>
                            <h4>@lang('welcome.Phone'):</h4>
                            <p>tel:{{ $responseData->support_phone }}</p>
                        </div>
                    </div>
                </div>

                <form action="{{ route('send-email') }}" method="post" role="form" class="php-email-form">
                    <div class="col-md-12 form-group">
                        <input type="text" name="name" class="form-control" id="name"
                            placeholder="@lang('welcome.Name')" required>
                    </div>
                    <div class="col-md-12 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email"
                            placeholder="@lang('welcome.Email')" required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="@lang('welcome.Message')" required></textarea>
                    </div>
                   
                    <div class="text-center"><button type="submit">@lang('welcome.SEND')</button></div>
                </form>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <footer class="d-flex justify-content-center p-4">
        <p class="text-center px-6">&copy; @if (env('SERVICE_NAME'))
                {{ env('SERVICE_NAME') }}
            @else
                {{ $responseData->concept_name }}
            @endif {{ date('Y') }}. {{ $responseData->company_name }} - CR:
            {{ $responseData->company_business_number }} - {{ $responseData->company_address }},
            {{ $responseData->company_city }} {{ $responseData->company_postcode }},
            {{ $responseData->company_country }} | @lang('welcome.All rights reserved.')</p>
    </footer>




    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('design-4/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('design-4/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('design-4/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('design-4/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('design-4/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('design-4/assets/js/main.js') }}"></script>

</body>

</html>
