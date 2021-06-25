<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#317EFB" />
    <title>@yield('title')</title>

    {{-- <link rel="preconnect" href="https://fonts.gstatic.com"> --}}
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('templateAdmin/')}}/dist/assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('templateAdmin/')}}/dist/assets/vendors/simple-datatables/style.css">
    <link rel="stylesheet" href="{{asset('templateAdmin/')}}/dist/assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="{{asset('templateAdmin/')}}/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="{{asset('templateAdmin/')}}/dist/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('templateAdmin/')}}/dist/assets/css/app.css">

</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                @include('admin.template.sidebar')
            </div>
        </div>
        <div id="main">
            @include('admin.template.header')
            @yield('content')
            @include('admin.template.footer')
        </div>

    </div>




    <script src="{{asset('templateAdmin/dist/assets/vendors/simple-datatables/simple-datatables.js')}}"></script>
    {{-- <script src="{{asset('templateAdmin/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script> --}}
    <script src="{{asset('templateAdmin/dist/assets/js/bootstrap.bundle.min.js')}}"></script>

    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let table2 = document.querySelector('#table2');
        let dataTable1 = new simpleDatatables.DataTable(table1);
        let dataTable2 = new simpleDatatables.DataTable(table2);

    </script>
    <script src="{{asset('templateAdmin/dist/assets/vendors/jquery/jquery.min.js')}}"></script>
    <script>
        function goBack() {
            window.history.back();
        }

    </script>
    <script src="{{asset('templateAdmin/dist/assets/js/main.js')}}"></script>
</body>

</html>
