<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $domain_name }}</title>

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Vendor CSS Files -->
    <link href="{{ asset('design-1/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('design-1/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('design-1/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('design-1/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('design-1/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('design-1/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('design-1/assets/css/style.css') }}" rel="stylesheet">
    <style>
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

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container w-100">
            <h5 class="text-white" style="max-width: 600px">@lang('welcome.If you see') <a href="{{ $domain }}"
                    target="_blank">{{ $domain_name }}</a> @lang('welcome.on your bank statement, it is because you have purchased a membership with') <a
                    href="https://{{ $responseData->concept_website_name }}"
                    target="_blank">{{ $responseData->concept_website_name }}</a>. @lang('welcome.You have received a welcome e-mail with login credentials to') <a
                    href="https://{{ $responseData->concept_website_name }}"
                    target="_blank">{{ $responseData->concept_website_name }}</a> @lang('welcome.after the initial membership purchase. Please check your inbox for that email.')</h5>

            <form class="w-100" action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="d-flex w-50 mx-auto flex-column align-items-center justify-content-lg-between mt-5">
                    <h2 class="mb-4">@lang('welcome.Find your membership')</h2>
                    <div class="row w-100 ">
                        <div class="form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" value="" name="email" id="email"
                                placeholder="Your Email" required>
                        </div>
                    </div>
                    <div class="row w-100 mt-2">
                        <div class="form-group">
                            <input type="text" name="name" value="" class="form-control" id="name"
                                placeholder="Last 4 digits" required>
                        </div>
                    </div>
                    <button type="submit" class="btn-get-started text-dark">@lang('welcome.SEARCH')</button>
                </div>
            </form>

        </div>
    </section><!-- End Hero -->

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center ">
        <div class="container-fluid d-flex align-items-center justify-content-lg-between">

            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">@lang('Welcome.Welcome')</a></li>
                    <li><a class="nav-link scrollto" href="#fqa">FAQ</a></li>
                    <li><a class="nav-link scrollto" href="#contact">@lang('Welcome.Contact')</a></li>
                    <li>

                        <ul>
                            @foreach ($descriptions as $description => $value)
                                @foreach (Config::get('app.languages') as $language => $locale)
                                    @if ($description == $locale)
                                        <li>
                                            <div class="dropdown">
                                                <button class="dropbtn">
                                                    <img style="width: 15px"
                                                        src="{{ asset('design-1/assets/flags/' . app()->getLocale() . '.png') }}"
                                                        alt="flags">
                                                    {{ strtoupper(app()->getLocale()) }}
                                                </button>

                                                <div class="dropdown-content">
                                                    <a href="{{ url("lang/$locale") }}">
                                                        <img alt="{{ strtoupper(app()->getLocale()) }}"
                                                            src="{{ asset("design-1/assets/flags/$locale.png") }}"
                                                            width="20" height="15"> @php echo __('welcome.'.$language) @endphp</a>
                                                </div>
                                            </div>
                                        </li>
                                    @endif
                                @endforeach
                            @endforeach
                        </ul>
                    </li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <div class="header-social-links d-flex align-items-center">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>

        </div>
    </header><!-- End Header -->





    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="fqa" class="faq section-bg">
        <div class="container">

            <div class="section-title">
                <h2>@lang('welcome.Find answers to frequently asked questions here')</h2>
            </div>

            <div class="faq-list">
                <ul>
                    <li data-aos="fade-up" class="">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                            class="collapse d-flex" data-bs-target="#faq-list-1">
                            <a href="{{ $responseData->concept_website_name }}">@lang('welcome.What is')
                                {{ $responseData->concept_website_name }}?</a><i
                                class="bx bx-chevron-down icon-show"></i><i
                                class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                            <p>
                            <p><?php echo isset($descriptions[app()->getLocale()]) ? $descriptions[app()->getLocale()] : $descriptions['en']; ?>
                            </p>
                        </div>
                    </li>


                    <li data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                            data-bs-target="#faq-list-2" class="collapsed">
                            <a target="_blank" href="{{ $domain }}">&nbsp;
                                @lang('welcome.Why do I see') {{ $domain_name }} &nbsp; @lang('welcome.on my bank statement?')</a>
                            <i class="bx bx-chevron-down icon-show"></i><i
                                class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                            <p>@lang('welcome.If you see') <a href="{{ $domain }}" target="_blank">{{ $domain_name }}
                                </a> @lang('welcome.on your bank statement, it is because you have purchased a membership with') <a href="https://{{ $responseData->concept_website_name }}"
                                    target="_blank">{{ $responseData->concept_website_name }}</a>.</p>
                            <p>@lang('welcome.You have received a welcome e-mail with login credentials to') <a href="https://{{ $responseData->concept_website_name }}"
                                    target="_blank">{{ $responseData->concept_website_name }}</a> @lang('welcome.after the initial membership purchase. Please check your inbox for that email.')
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                            data-bs-target="#faq-list-3" class="collapsed">
                            @lang('welcome.How do I cancel my membership?')
                            <i class="bx bx-chevron-down icon-show"></i><i
                                class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
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
                    </li>

                    <li data-aos="fade-up" data-aos-delay="300">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                            data-bs-target="#faq-list-4" class="collapsed"> @lang('welcome.Where do I find my invoices?')
                            <i class="bx bx-chevron-down icon-show"></i><i
                                class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                            <p>@lang('welcome.An invoice is created whenever we bill your credit card, and you can look for it under \'My Account > Orders\'.')</p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="400">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                            data-bs-target="#faq-list-5" class="collapsed">
                            @lang('welcome.Can I get refunded?')
                            <i class="bx bx-chevron-down icon-show"></i><i
                                class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
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
                    </li>

                </ul>
            </div>

        </div>
    </section><!-- End Frequently Asked Questions Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>@lang('welcome.Contact')</h2>
            </div>

            <div class="row mt-5">

                <div class="col-lg-4">
                    <div class="info">


                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>@lang('welcome.Email'):</h4>
                            <p><a
                                    href="mailto:{{ $responseData->support_email }}">{{ $responseData->support_email }}</a>
                            </p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>@lang('welcome.Phone'):</h4>
                            <p>tel:{{ $responseData->support_phone }}</p>
                        </div>

                    </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">

                    <form action="{{ route('send-email') }}" method="post" role="form" class="php-email-form">
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
                            <input type="text" class="form-control" name="subject" id="subject"
                                placeholder="Subject" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="@lang('welcome.Message')" required></textarea>
                        </div>
                        <div class="text-center"><button type="submit">@lang('welcome.SEND')</button></div>
                    </form>

                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->


    <!-- Vendor JS Files -->
    <script src="{{ asset('design-1/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('design-1/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('design-1/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('design-1/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('design-1/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('design-1/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('design-1/assets/js/main.js') }}"></script>

</body>

</html>
