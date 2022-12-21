<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->

        <!-- Fonts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
  <link href="assets/css/font-awesome.min.css" rel="stylesheet">
  <!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet"> -->
  <link href="assets/css/templatemo-style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />
        
        <div class="min-h-screen bg-gray-100">
            
            @livewire('navigation-menu')
            

            <!-- Page Heading -->
            
            @if (isset($header))
            
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <a style="font-size:30px" href="/home" >Dashboard</a> <br>{{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                
                {{ $slot }}
            </main>
            
        </div>


        <!-- @stack('modals') -->

        @livewireScripts
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="assets/js/jquery-1.11.2.min.js"></script> <!-- jQuery -->
  <script src="assets/js/jquery-migrate-1.2.1.min.js"></script> <!--  jQuery Migrate Plugin -->
        <script type="text/javascript" src="assets/js/templatemo-script.js"></script> <!-- Templatemo Script -->
    </body>
</html>


