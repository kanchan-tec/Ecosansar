<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.shared/title-meta', ['title' => 'Error 404'])

    @include('layouts.shared/head-css', ['mode' => $mode ?? '', 'demo' => $demo ?? ''])
</head>

    <body class="authentication-bg">
        <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5 position-relative">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-8 col-lg-10">
                        <div class="card overflow-hidden">
                            <div class="row g-0">
                                <div class="col-lg-6 d-none d-lg-block p-2">
                                    <img src="/images/auth-img.jpg" alt="" class="img-fluid rounded h-100">
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex flex-column h-100">
                                        <div class="auth-brand p-4">
                                            <a href="#" class="logo-light">
                                                <img src="/images/logo.png" alt="logo" height="22">
                                            </a>
                                            <a href="#" class="logo-dark">
                                                <img src="/images/logo-dark.png" alt="dark logo" height="22">
                                            </a>
                                        </div>
                                        <div class="p-4 my-auto">
                                            <div class="d-flex justify-content-center mb-5">
                                                <img src="/images/svg/404.svg" alt="" class="img-fluid">
                                            </div>

                                            <div class="text-center">
                                                <h1 class="mb-3">404</h1>
                                                <h4 class="fs-20">Page not found</h4>
                                                <p class="text-muted mb-3"> It's looking like you may have taken a wrong turn. Don't worry... it happens to the best of us.</p>
                                            </div>

                                            <a href="#" class="btn btn-soft-primary w-100"><i class="ri-home-4-line me-1"></i>  Back to Home</a>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <footer class="footer footer-alt fw-medium">
            <span class="text-dark-emphasis"><script>document.write(new Date().getFullYear())</script> © Velonic - Theme by Techzaa</span>
        </footer>

        @include('layouts.shared/footer-scripts')

    </body>
</html>
