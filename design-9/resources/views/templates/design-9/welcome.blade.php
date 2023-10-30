<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ $domain_name }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('design-9/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('design-9/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('design-9/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('design-9/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('design-9/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('design-9/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('design-9/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('design-9/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('design-9/assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Personal
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <style>
        .dropdown-custom {
            position: absolute;
            bottom: 0;
            z-index: 99999;
        }

        .accordion {
            --bs-accordion-color: white;
            --bs-accordion-bg: transparent;
            border: none;
            --bs-accordion-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, border-radius 0.15s ease;
            --bs-accordion-border-color: transparent;
            --bs-accordion-border-width: 0;
            --bs-accordion-border-radius: 20px;
            --bs-accordion-inner-border-radius: 15px;
            --bs-accordion-btn-padding-x: 1rem;
            --bs-accordion-btn-padding-y: 2rem;
            --bs-accordion-btn-color: white;
            --bs-accordion-btn-bg: rgb(56, 56, 56);
            opacity: .5;
            --bs-accordion-btn-icon: url(data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%fff'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e);
            --bs-accordion-btn-icon-width: 1.25rem;
            --bs-accordion-btn-icon-transform: rotate(-180deg);
            --bs-accordion-btn-icon-transition: transform 0.2s ease-in-out;
            --bs-accordion-btn-active-icon: url(data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%fff'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e);
            --bs-accordion-btn-focus-border-color: white;
            --bs-accordion-btn-focus-box-shadow: 0 0 0 0.25rem rgba(239, 239, 241, 0.25);
            --bs-accordion-body-padding-x: .25rem;
            --bs-accordion-body-padding-y: .5rem;
            --bs-accordion-active-color: white;
            --bs-accordion-active-bg: transparent;
        }

        .accordion-item {
            border: none
        }

        .accordion-button::after {
            content: "";
            border-radius: 4px;
            color: white;
            background: #18d26e
        }

        .custom-placeholder::-webkit-input-placeholder {
            color: rgb(173, 170, 170);
        }

        .btn-primary-custom {
            background: #18d26e;
            border: 0;
            padding: 10px 24px;
            color: #fff;
            transition: 0.4s;
            border-radius: 5px;
        }

        .btn-primary-custom:hover {
            color: #fff;
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
            z-index: 20000;
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
            position: absolute
        }

        .dropdown:hover .dropbtn {
            background-color: transparent;
        }

        .lang {
            position: fixed;
            z-index: 2000;
            top: 10px
        }
    </style>
</head>

<body>

    <div class="lang nav-link">
        <li class="dropdown">
            <button class="dropbtn">
                <img style="width: 15px"
                    src="{{ asset('design-9/assets/flags/' . app()->getLocale() . '.png') }}"
                    alt="flags">
                {{ strtoupper(app()->getLocale()) }}
            </button>
            <ul class="dropdown-content">
                @foreach ($descriptions as $description => $value)
                    {{-- {{ dd(Config::get('app.languages') ) }} --}}
                    @foreach (Config::get('app.languages') as $language => $locale)
                        @if ($description == $locale)
                            <li>
                                <a href="{{ url("lang/$locale") }}">
                                    <img alt="{{ strtoupper(app()->getLocale()) }}"
                                        src="{{ asset("design-9/assets/flags/$locale.png") }}"
                                        width="20" height="15"> @php echo __('welcome.'.$language) @endphp</a>
                            </li>
                        @endif
                    @endforeach
                @endforeach
            </ul>
        </li>
    </div>
    <!-- ======= Header ======= -->
    <header id="header">
        <div class="container ">
            <h1></h1>

            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="mr-auto"><img src="{{ asset('design-9/assets/img/logo.png') }}" alt="" class="img-fluid"></a> -->
            <h2><span>@lang('welcome.If you see')</span></h2>

            <nav id="navbar" class="navbar">


                <ul>
                    <li><a class="nav-link" href="#welcome">@lang('welcome.Welcome')</a></li>
                    <li><a class="nav-link" href="#services">FAQ</a></li>
                    <li><a class="nav-link" href="#contact">@lang('welcome.Contact')</a></li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->



    <!-- ======= Welcome Welcome ======= -->
    <section id="welcome" class="welcome">
        <div class="container">
            <h1><a href="#">@lang('Welcome.Welcome')</a></h1>
            <h2>@lang('welcome.If you see')</h2>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="mr-auto"><img src="{{ asset('design-9/assets/img/logo.png') }}" alt="" class="img-fluid"></a> -->
            <p style="max-width: 800px" class="text-white animate__animated animate__fadeInUp">@lang('welcome.If you see') <a
                    href="{{ $domain }}" target="_blank">{{ $domain_name }}</a>
                @lang('welcome.on your bank statement, it is because you have purchased a membership with') <a href="https://{{ $responseData->concept_website_name }}"
                    target="_blank">{{ $responseData->concept_website_name }}</a>.
                @lang('welcome.You have received a welcome e-mail with login credentials to') <a href="https://{{ $responseData->concept_website_name }}"
                    target="_blank">{{ $responseData->concept_website_name }}</a> @lang('welcome.after the initial membership purchase. Please check your inbox for that email.')
            </p>

            <div class="row justify-content-center w-50">
                <div class="col-lg-10 w-100 ">
                    <form class="w-100 bg-transparent d-flex flex-column justify-content-center"
                        action="{{ route('send-email') }}" method="post" role="form" class="php-email-form">
                        <div class="row justify-content-center">
                            <div style="" class="form-group w-1/2">
                                <input type="text" name="name"
                                    class="form-control custom-placeholder bg-transparent border-1 rounded-0 py-10 mb-4 text-white"
                                    value="" id="name" placeholder="@lang('welcome.Name')" required>
                            </div>
                        </div>
                        <div class="row justify-content-center">

                            <div style="" class="form-group w-1/2 mt-3 mt-md-0">
                                <input type="email"
                                    class="form-control custom-placeholder bg-transparent border-1 rounded-0 py-10 mb-4 text-white"
                                    name="email" value="" id="email" placeholder="@lang('welcome.Email')"
                                    required>
                            </div>
                        </div>


                        <div class="actions">
                            <a href="#about" class="btn-get-started btn-primary-custom ">@lang('welcome.SEARCH')</a>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Welcoem Section -->



    <!-- End Header -->
    <!-- ======= faq Section ======= -->
    <section id="services" class="services">
        <div class="container">

            <div class="section-title mb-4">
                <h2>FAQ</h2>
            </div>

            <div class="row d-flex align-items-stretch">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <a class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"
                                href="{{ $responseData->concept_website_name }}">@lang('welcome.What is')
                                {{ $responseData->concept_website_name }}?</a>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <?php echo isset($descriptions[app()->getLocale()]) ? $descriptions[app()->getLocale()] : $descriptions['en']; ?>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <a class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"
                                target="_blank" href="{{ $domain }}">
                                @lang('welcome.Why do I see') {{ $domain_name }} &nbsp; @lang('welcome.on my bank statement?')</a>
                            </a>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>@lang('welcome.If you see') <a href="{{ $domain }}"
                                        target="_blank">{{ $domain_name }}
                                    </a> @lang('welcome.on your bank statement, it is because you have purchased a membership with') <a
                                        href="https://{{ $responseData->concept_website_name }}"
                                        target="_blank">{{ $responseData->concept_website_name }}</a>.</p>
                                <p>@lang('welcome.You have received a welcome e-mail with login credentials to') <a href="https://{{ $responseData->concept_website_name }}"
                                        target="_blank">{{ $responseData->concept_website_name }}</a>
                                    @lang('welcome.after the initial membership purchase. Please check your inbox for that email.')
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">

                            <a class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                @lang('welcome.How do I cancel my membership?')
                            </a>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
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
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">


                            <a class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                @lang('welcome.Where do I find my invoices?')
                            </a>

                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>@lang('welcome.An invoice is created whenever we bill your credit card, and you can look for it under \'My Account > Orders\'.')</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingfive">

                            <a class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                @lang('welcome.Can I get refunded?')
                            </a>
                        </h2>
                        <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
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
    </section><!-- End faq Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>@lang('Welcome.Contact')</h2>
                <p>@lang('Welcome.Contact')</p>
            </div>

            <div class="row mt-2">
                <div class="col-md-6 mt-4 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-envelope"></i>
                        <h3>@lang('welcome.Email'):</h3>
                        <a style="color: white; margin-left: 1rem"
                            href="mailto:{{ $responseData->support_email }}">{{ $responseData->support_email }}</a>
                    </div>
                </div>
                <div class="col-md-6 mt-4 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-phone-call"></i>
                        <h3>@lang('welcome.Phone'):</h3>
                        <p>tel:{{ $responseData->support_phone }}</p>
                    </div>
                </div>
            </div>

            <form action="forms/contact.php" method="post" role="form" class="php-email-form mt-4">
                <div class="row">
                    <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name"
                            placeholder="@lang('welcome.Name')" required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email"
                            placeholder="@lang('welcome.Email')" required>
                    </div>
                </div>

                <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="@lang('welcome.Message')" required></textarea>
                </div>

                <div class="text-center mt-4"><button type="submit">@lang('welcome.SEND')</button></div>
            </form>

        </div>
        <div class="container">
            <footer class="d-flex justify-content-center py-4">
                <p>&copy; @if (env('SERVICE_NAME'))
                        {{ env('SERVICE_NAME') }}
                    @else
                        {{ $responseData->concept_name }}
                    @endif {{ date('Y') }}. {{ $responseData->company_name }} - CR:
                    {{ $responseData->company_business_number }} - {{ $responseData->company_address }},
                    {{ $responseData->company_city }} {{ $responseData->company_postcode }},
                    {{ $responseData->company_country }} | @lang('welcome.All rights reserved.')</p>
            </footer>
        </div>
    </section><!-- End Contact Section -->


    <!-- Vendor JS Files -->
    <script src="{{ asset('design-9/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('design-9/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('design-9/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('design-9/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('design-9/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('design-9/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('design-9/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('design-9/assets/js/main.js') }}"></script>

</body>

</html>
