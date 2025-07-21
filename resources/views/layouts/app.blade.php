<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Autentikasi</title>

    <!-- Custom fonts for this template-->
    <link href="/dashboardAssets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/googleFont.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/dashboardAssets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
    <link href="/assets/css/select2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">
        @yield('auth')
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="/dashboardAssets/vendor/jquery/jquery.min.js"></script>
    <script src="/dashboardAssets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/dashboardAssets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/dashboardAssets/js/sb-admin-2.min.js"></script>
    <script src="/assets/js/auth.js"></script>
    <script src="/assets/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            // Select2 init
            $('.select2').select2();
        });
    </script>

</body>

</html>
