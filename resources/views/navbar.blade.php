<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SD SWASTA FILADELFIA TARUTUNG</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="{{ asset('img/logoo.jpeg') }}">

    <style>
        .nav-orange {
            background-color: #960019;
        }

        .nav-link {
            font-size: 26px; /* Set font size to 24px */
            transition: border-bottom 0.3s ease-in-out; /* Add transition effect */
            margin-right: 20px;
            font-family: 'Times New Roman', Times, serif;
        }

        .nav-link:hover {
            border-bottom: 2px solid #fff; /* Add underline effect on hover */
        }

        .nav-link.active {
            border-bottom: 2px solid #fff; /* Garis bawah untuk item aktif */
        }

        .logo img {
            max-width: 100px; /* Adjust logo size */
        }

        .logo .text {
            margin-left: 12px; /* Space between logo and text */
        }

        .navbar-nav .dropdown-menu {
            background-color: white; /* Match dropdown background color */
        }

        span {
            font-family: 'Times New Roman', Times, serif;
            font-size: 26px;
            color: white;
            margin-left: 20px;
        }

        .navbar {
            transition: none; /* Remove transition effect */
        }

        .navbar.fixed-top {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            background-color: #960019; /* Keep the same background color */
            padding: 10px 0; /* Add some padding to maintain the same height */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Add a subtle shadow */
        }

    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg nav-orange">
        <div class="logo clearfix">
            <div class="header">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('img/logoo.jpeg') }}" alt="Logo Sekolah" class="logo" style="width: 80px;">
                    <div class="text float-right" style="margin-top: 20px;">
                        <span class="nav-item text-white">SD SWASTA FILADELFIA TARUTUNG</span>
                    </div>
                </a>
            </div>
        </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars" style="color: white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link text-white" href="{{ route('home') }}">Beranda</a>
                <a class="nav-item nav-link text-white" href="{{ route('artikel') }}">Berita</a>
                <a class="nav-item nav-link text-white"
                    href="{{ route('user.fasilitasuser') }}">Fasilitas</a>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Tentang
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('sekolah') }}">Data Sekolah</a>
                        <a class="dropdown-item" href="{{ route('alumni') }}">Data Alumni</a>
                    </div>
                </div>
            </div>
            <a class="nav-item nav-link text-white" href="{{ route('login') }}"><i class="fa-solid fa-user"
                    style="color:white;"></i></a>
        </div>
    </nav>

    <!-- Ensure you have included the required Bootstrap JS and jQuery libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script>
        $(window).scroll(function() {
            if ($(window).scrollTop() >= 100) {
                $('.navbar').addClass('fixed-top');
            } else {
                $('.navbar').removeClass('fixed-top');
            }
        });
    </script>
</body>

</html>
