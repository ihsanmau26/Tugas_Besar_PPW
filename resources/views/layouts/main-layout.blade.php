<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Telkom Medika</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand ms-3" href="/home">
                <img src="images/telkomedika-logo.png" alt="Logo" width="75" height="auto" class="d-inline-block">
            </a>
    
            <div class="mx-auto">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item btn btn-primary ms-2">
                        <a class="nav-link text-white" href="#">
                            <i class="fas fa-calendar-check"></i> Booking
                        </a>
                    </li>
                    <li class="nav-item btn btn-success ms-2">
                        <a class="nav-link text-white" href="#">
                            <i class="fas fa-clock"></i> Jadwal
                        </a>
                    </li>
                    <li class="nav-item btn btn-warning ms-2">
                        <a class="nav-link text-white" href="#">
                            <i class="fas fa-history"></i> Riwayat
                        </a>
                    </li>
                    <li class="nav-item btn btn-danger ms-2">
                        <a class="nav-link text-white" href="#">
                            <i class="fa-solid fa-phone-volume"></i> Darurat
                        </a>
                    </li>
                </ul>
            </div>
    
            <div class="dropdown">
                <a class="d-flex align-items-center text-decoration-none me-3" href="#" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false" style="outline: none; boxshadow-none;">
                    <img src="images/profile-default.jpg" alt="Profile Picture" class="rounded-circle" width="50" height="50" style="outline: none; boxshadow-none;">
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                    <li>
                        <a class="dropdown-item" href="/profile">
                            <i class="fa-solid fa-user"></i> Profil
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-key"></i> Ubah Kata Sandi
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-bell"></i> Pengaturan Notifikasi
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-question-circle"></i> Bantuan
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <a class="dropdown-item text-danger" href="/login">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="m-5">
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $('.dropdown').on('mouseenter', function () {
                let dropdownMenu = new bootstrap.Dropdown($('#profileDropdown')[0]);
                dropdownMenu.show();
            });

            $('.dropdown').on('mouseleave', function () {
                let dropdownMenu = new bootstrap.Dropdown($('#profileDropdown')[0]);
                dropdownMenu.hide();
            });
        });
    </script>
</body>
</html>