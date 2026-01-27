<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Yönetim Paneli')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    @yield('css')
</head>

<body id="page-top">

    <div id="wrapper" class="d-flex">
        <div id="content-wrapper" class="d-flex flex-column w-100">
            <div id="content">
                <div class="container-fluid pt-4">
                    @yield('content')
                </div>
            </div>

            <footer class="sticky-footer bg-white py-3 mt-5">
                <div class="container my-auto text-center">
                    <span>Copyright &copy; Pelin {{ date('Y') }}</span>
                </div>
            </footer>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    @yield('js')
</body>

</html>
