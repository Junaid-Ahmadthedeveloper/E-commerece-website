<!DOCTYPE html>
<html lang="en">


@include('adminpanel.partials.header')

<body>
    <div class="wrapper">

        @include('adminpanel.partials.sidebar')
        <div class="main">


            @include('adminpanel.partials.navbar')

            <main class="content">
                <div class="container-fluid p-0">

                    {{-- <h1 class="h3 mb-3">
                        @yield('heading')
                    </h1> --}}
                       {{-- <div class="card"> --}}
                        <br><br>
                    <div class="row">

                        @yield('chef')

                    </div>
                    <br><br><br>

                    {{-- </div> --}}
                </div>
            </main>

            @include('adminpanel.partials.footer')

        </div>
    </div>

    <script src="{{asset("adminpanelfiles/js/app.js")}}"></script>
    <script>
        function toggleSubMenu(subMenuId) {
            var subMenu = document.getElementById(subMenuId);
            if (subMenu.style.display === 'none' || subMenu.style.display === '') {
                subMenu.style.display = 'block';
            } else {
                subMenu.style.display = 'none';
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
