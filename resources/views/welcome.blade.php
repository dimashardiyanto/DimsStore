<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Welcome</title>
    <link rel="stylesheet" href="{{ asset('Responsive-Landing-Page-main') }}/style.css" />
</head>

<body>
    <main>
        <div class="big-wrapper light">
            <img src="{{ asset('Responsive-Landing-Page-main') }}/img/shape.png" alt="" class="shape" />

            <header>
                <div class="container">
                    <div class="logo">
                        <img src="{{ asset('Responsive-Landing-Page-main') }}/img/logoA-removebg-preview.png"
                            alt="Logo" />
                        <h3>DIMS STORE</h3>
                    </div>

                    <div class="links">
                        <ul>
                            {{-- <li><a href="#">Features</a></li>
                <li><a href="#">Pricing</a></li>
                <li><a href="#">Testimonials</a></li> --}}
                            <li><a href="{{ route('register') }}" class="btn">Sign up</a></li>
                        </ul>
                    </div>

                    <div class="overlay"></div>

                    <div class="hamburger-menu">
                        <div class="bar"></div>
                    </div>
                </div>
            </header>

            <div class="showcase-area">
                <div class="container">
                    <div class="left">
                        <div class="big-title">
                            <h1>Toko Terpecaya</h1>
                            <h1>Hanya Disini</h1>
                        </div>
                        <p class="text">
                            Selamat Datang di Dims Store
                        </p>
                        <div class="cta">
                            <a href="{{ route('login') }}" class="btn">Get started</a>
                        </div>
                    </div>

                    <div class="right">
                        <img src="{{ asset('Responsive-Landing-Page-main') }}/img/anime-removebg-preview.png"
                            alt="Person Image" class="person" />
                    </div>
                </div>
            </div>

            <div class="bottom-area">
                <div class="container">
                    <button class="toggle-btn">
                        <i class="far fa-moon"></i>
                        <i class="far fa-sun"></i>
                    </button>
                </div>
            </div>
        </div>
    </main>

    <!-- JavaScript Files -->

    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <script src="{{ asset('Responsive-Landing-Page-main') }}/app.js"></script>
</body>

</html>
