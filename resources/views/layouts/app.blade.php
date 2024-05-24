<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        
        
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        {{-- <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.min.css"> --}}
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/2.0.7/js/dataTables.min.js"></script>
        <!-- Bootstrap CSS -->
        {{-- <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}"> --}}

        <!-- Fonts -->
        {{-- <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}"> --}}
        {{-- <link rel="stylesheet" href="{{ asset('assets/css/fonts.css') }}"> --}}
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">




        <!-- Nucleo Icons -->
        <link rel="stylesheet" href="{{ asset('assets/css/nucleo-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/nucleo-svg.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/css/soft-ui-dashboard.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/soft-ui-dashboard.css.map') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/soft-ui-dashboard.min.css') }}">
       
  
<!-- Font Awesome Icons -->
        {{-- <script src="{{ asset('assets/css/js/fontawesome.js')}}"></script> --}}
        {{-- <script src="{{ asset('assets/css/js/bundle.min.js')}}"></script> --}}

        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

      

    </head>
    <body class="g-sidenav-show  bg-gray-100" style='overflow-x:hidden;'>
        @guest
            <main class="main-content mt-0">
                @yield('content')
            </main>
        @else
            <aside id="sidenav-main" class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 ps ps--active-y">   
                @include('layouts.sidebar')
            </aside>
        
            <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ps ps--active-y">
                @include('layouts.navigation')
                <div class="container-fluid py-4">
                    @yield('content')
                    {{-- @include('layouts.footer') --}}
                </div>
                
              {{-- <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div>

                <div class="ps__rail-y" style="top: 0px; height: 364px; right: 0px;">
                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 119px;"></div>
                </div> --}}
            </main>
            
        @endguest

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <!-- Plugins -->
        <script src="{{ asset('assets/css/js/core/popper.min.js') }}"></script>
        <script src="{{ asset('assets/css/js/core/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/css/js/plugins/bootstrap-notify.js') }}"></script>
        {{-- <script src="{{ asset('assets/css/js/plugins/Chart.extension.js') }}"></script> --}}
        <script src="{{ asset('assets/css/js/plugins/chartjs.min.js') }}"></script>
        <script src="{{ asset('assets/css/js/plugins/choices.min.js') }}"></script>
        <script src="{{ asset('assets/css/js/plugins/fullcalendar.min.js') }}"></script>
        <script src="{{ asset('assets/css/js/plugins/perfect-scrollbar.min.js') }}"></script>
        <script src="{{ asset('assets/css/js/plugins/smooth-scrollbar.min.js') }}"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.5/perfect-scrollbar.common.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scrollbar/8.8.4/smooth-scrollbar.js"></script>
        <script async="" defer="" src="https://buttons.github.io/buttons.js"></script>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <script>
            $(document).ready(function() {
                $('#myTable').DataTable();
            });
        </script> 
</body>
</html>
