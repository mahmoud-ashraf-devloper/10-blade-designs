<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>ComingSoon - Bootstrap Coming Soon Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('design-2/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('design-2/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('design-2/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('design-2/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('design-2/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('design-2/assets/css/custom.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: ComingSoon
  * Updated: Sep 28 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/comingsoon-free-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

</head>

<body>

    <nav id="navbar" class="container navbar order-last order-lg-0 w-50 mx-auto">
        <ul class="d-flex justify-content-between w-100 ">
            <li style="margin-top: 15px"><a class=" nav-link scrollto active" href="#header">@lang('Welcome.Welcome')</a></li>
            <li style="margin-top: 15px"><a class=" nav-link scrollto" href="#about">FAQ</a></li>
            <li style="margin-top: 15px"><a class=" nav-link scrollto" href="#contact">@lang('Welcome.Contact')</a></li>
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
    </nav><!-- .navbar -->
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex flex-column align-items-center">
            <div>
            </div>
            <div class=" w-100">
                <div class="row justify-content-center my-4">
                    <h5 class="text-white text-center" style="max-width: 600px">@lang('welcome.If you see') <a
                            href="{{ $domain }}" target="_blank">{{ $domain_name }}</a> @lang('welcome.on your bank statement, it is because you have purchased a membership with') <a
                            href="https://{{ $responseData->concept_website_name }}"
                            target="_blank">{{ $responseData->concept_website_name }}</a>. @lang('welcome.You have received a welcome e-mail with login credentials to') <a
                            href="https://{{ $responseData->concept_website_name }}"
                            target="_blank">{{ $responseData->concept_website_name }}</a> @lang('welcome.after the initial membership purchase. Please check your inbox for that email.')</h5>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10 bg-transparent">
                        <form class="bg-transparent d-flex flex-column justify-content-center"
                            action="{{ route('send-email') }}" method="post" role="form" class="php-email-form">
                            <div class="row justify-content-center">
                                <div style="width: 50%" class="form-group w-1/2">
                                    <input type="text" name="name"
                                        class="form-control custom-placeholder bg-transparent border-1 border-danger rounded-0 mb-4 text-white"
                                        value="" id="name" placeholder="@lang('welcome.Name')" required>
                                </div>
                            </div>
                            <div class="row justify-content-center">

                                <div style="width: 50%" class="form-group w-1/2 mt-3 mt-md-0">
                                    <input type="email"
                                        class="form-control custom-placeholder bg-transparent border-1 border-danger rounded-0 mb-4 text-white"
                                        name="email" value="" id="email" placeholder="@lang('welcome.Email')"
                                        required>
                                </div>
                            </div>

                            <div class="text-center"><button class="btn btn-danger"
                                    type="submit">@lang('welcome.SEARCH')</button></div>
                        </form>
                    </div>

                </div>

            </div>

        </div>
    </header><!-- End #header -->

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row content">
                    <div class="col-lg-6">
                        <h2>FAQ</h2>
                        <p>@lang('welcome.Find answers to frequently asked questions here')</p>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <a class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne"
                                        href="{{ $responseData->concept_website_name }}">@lang('welcome.What is')
                                        {{ $responseData->concept_website_name }}?</a><i
                                        class="bx bx-chevron-down icon-show"></i><i
                                        class="bx bx-chevron-up icon-close"></i>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <?php echo isset($descriptions[app()->getLocale()]) ? $descriptions[app()->getLocale()] : $descriptions['en']; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <a class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo" target="_blank"
                                        href="{{ $domain }}">&nbsp;
                                        @lang('welcome.Why do I see') {{ $domain_name }} &nbsp; @lang('welcome.on my bank statement?')</a>
                                    <i class="bx bx-chevron-down icon-show"></i><i
                                        class="bx bx-chevron-up icon-close"></i></a>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
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
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">

                                    <a class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        @lang('welcome.How do I cancel my membership?')
                                        <i class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
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
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour"> @lang('welcome.Where do I find my invoices?')
                                        <i class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>

                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>@lang('welcome.An invoice is created whenever we bill your credit card, and you can look for it under \'My Account > Orders\'.')</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingfive">

                                    <a class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsefive" aria-expanded="false"
                                        aria-controls="collapsefive">
                                        @lang('welcome.Can I get refunded?')
                                        <i class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                </h2>
                                <div id="collapsefive" class="accordion-collapse collapse"
                                    aria-labelledby="headingfive" data-bs-parent="#accordionExample">
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

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Contact Us Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>@lang('welcome.Contact')</h2>
                </div>

                <div class="row justify-content-center">

                    <div class="col-lg-10">

                        <div class="info-wrap">
                            <div class="row">


                                <div class="col-lg-4 info mt-4 mt-lg-0">
                                    <i class="bi bi-envelope"></i>
                                    <h4>@lang('welcome.Email'):</h4>
                                    <a style="color: white; margin-left: 1rem"
                                        href="mailto:{{ $responseData->support_email }}">{{ $responseData->support_email }}</a>
                                </div>

                                <div class="col-lg-4 info mt-4 mt-lg-0">
                                    <i class="bi bi-phone"></i>
                                    <h4>@lang('welcome.Phone'):</h4>
                                    <p>tel:{{ $responseData->support_phone }}</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <form action="{{ route('send-email') }}" method="post" role="form"
                            class="php-email-form">
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

                            <div class="text-center"><button type="submit">@lang('welcome.SEND')</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Us Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; @if (env('SERVICE_NAME'))
                    {{ env('SERVICE_NAME') }}
                @else
                    {{ $responseData->concept_name }}
                @endif {{ date('Y') }}. {{ $responseData->company_name }} - CR:
                {{ $responseData->company_business_number }} - {{ $responseData->company_address }},
                {{ $responseData->company_city }} {{ $responseData->company_postcode }},
                {{ $responseData->company_country }} | @lang('welcome.All rights reserved.')
            </div>
        </div>
    </footer><!-- End #footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('design-2/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('design-2/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('design-2/assets/js/main.js') }}"></script>

</body>

</html>
