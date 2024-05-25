
<!DOCTYPE html>
<html lang="en"> 
<x-frontend.body.head></x-frontend.body.head>

    <body>
         <!-- Page header with logo and tagline-->
        <x-frontend.body.header></x-frontend.body.header>

    <!-- Responsive navbar-->
        <x-frontend.body.navbar></x-frontend.body.navbar>
       
       
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    {{ $slot }}    
                </div>
                <!-- Side widgets-->
                <x-frontend.body.sidenav></x-frontend.body.sidenav>           
            </div>
        </div>
        <!-- Footer-->
       
        <x-frontend.body.footer></x-frontend.body.footer>
        <x-frontend.body.script></x-frontend.body.script>
    </body>
</html>
