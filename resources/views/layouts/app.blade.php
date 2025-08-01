<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Autentikasi</title>

    <link rel="icon" href="dashboardAssets/img/Logo_Jeneponto.png">
    <!-- Custom fonts for this template-->
    <link href="/dashboardAssets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/googleFont.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/dashboardAssets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
    <link href="/assets/css/bootstrap-select.min.css" rel="stylesheet">

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
    <script src="/assets/js/bootstrap-select.min.js"></script>

    <script>
        $(document).ready(function() {
            // Selectpicker init
            $('.selectpicker').selectpicker();

            // get data kec from api
            const selectKec = document.getElementById("kecamatan");

            const getKec = async () => {
                const response = await fetch("https://ibnux.github.io/data-indonesia/kecamatan/7304.json");
                const data = await response.json();
                return data;
            };

            const displayOption = async (getData, selectInput) => {
                const options = await getData();
                for (option of options) {
                    const newOption = document.createElement("option");
                    newOption.value = option.nama;
                    newOption.text = option.nama;
                    newOption.dataset.id = option.id;
                    selectInput.appendChild(newOption);
                    $('.selectpicker').selectpicker('refresh');
                };
            };

            displayOption(getKec, selectKec);

            $('#kecamatan').on('change', function() {
                console.log($(this).find(':selected').data('id'));

                let idKec = $(this).find(':selected').data('id');
                // get data desa from api
                const selectDesa = document.getElementById("desa_kel");

                const getDesa = async () => {
                    const response = await fetch(
                        `https://ibnux.github.io/data-indonesia/kelurahan/${idKec}.json`);
                    const data = await response.json();
                    return data;
                };

                $('#desa_kel').empty();

                displayOption(getDesa, selectDesa);

            });
        });
    </script>

</body>

</html>
