<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Eflyer</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{asset("mainfiles/css/bootstrap.min.css")}}">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{asset("mainfiles/css/style.css")}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{asset("mainfiles/css/responsive.css")}}">
      <!-- fevicon -->
      <link rel="icon" href="i{{ asset("mages/fevicon.png") }}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ asset("mainfiles/css/jquery.mCustomScrollbar.min.css")}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
         <!-- Bootstrap CSS I add it from GPT-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
         <!-- jQuery I add it from GPT-->
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

           <!-- Bootstrap JS I add it from GPT-->
           <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
      <!-- font awesome -->
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--  -->
      {{-- new Bootstrap linke i add it --}}
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      <!-- owl stylesheets -->
      <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext" rel="stylesheet">
      <link rel="stylesheet" href="{{asset("mainfiles/css/owl.carousel.min.css")}}">
      <link rel="stylesoeet" href="{{ asset("mainfiles/css/owl.theme.default.min.css")}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <style>
        .transparent-dropdown {
    z-index: 100; /* Adjust this value based on your layout */
}

.dropdown {
    position: relative;
}

.overlay {
            position: absolute;
            width: 100px;
            height: 200px;
            color: white;
            background-color: rgba(0, 0, 0, 0.5); /* Adjust the alpha for transparency */
            z-index: 1; /* Ensure the overlay is above other elements */
        }
    </style>



    </head>
   <body>
      <!-- banner bg main start -->
      <div class="banner_bg_main">
         <!-- header top section start -->
         <div class="container">
            <div class="header_section_top">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="custom_menu">
                        <ul>
                           <li><a href="{{ route('welcome')}}">Home</a></li>
                           {{-- <li><a href="#">Shops</a></li> --}}
                           {{-- <li class="dropdown">
                           <div >
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Category
                            </button>
                            <div class="dropdown-menu dropdown-dropup transparent-dropdown" style="width:100px;height:200px;color:white;" aria-labelledby="dropdownMenuButton">
                               <a class="dropdown-item" href="#">Action</a>
                               <a class="dropdown-item" href="#">Another action</a>
                               <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                        </li> --}}
                           <li><a href="{{ route('latest_products_page')}}">Latest Products</a></li>
                           <li><a href="{{ route('sold_show')}}">Most Sold</a></li>
                           <li><a href="#">Customer Service</a></li>
                           <li><a href="{{ route('about_page')}}">About Us</a></li>
                           <li><a href="{{ route('contact_page')}}">Contact Us</a></li>
                           <li> @if (Route::has('login'))
                            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                                    {{-- &nbsp;&nbsp;&nbsp;&nbsp;<li><form action="{{route('logout')}}" methode="POST" >
                                        @csrf
                                         <a href="{{ route('logout')}}"   onclick="event-preventDefault();this.clossest('form').submit();">Log Out</a>
                                     </form></li> --}}
                                @else
                                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>

                                    @endif
                                @endauth
                            </div>
                        @endif</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- header top section start -->
         <!-- logo section start -->
         <div class="logo_section">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="logo"><a href="index.html"><img src="{{asset("mainfiles/images/logo.png")}}"></a></div>
                  </div>
               </div>
            </div>
         </div>
         <!-- logo section end -->
         <!-- header section start -->
         <div class="header_section">
            <div class="container">
               <div class="containt_main">
                  <div id="mySidenav" class="sidenav">
                     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                     <a href="{{ route('welcome')}}">Home</a>
                     <a href="{{ route('seprate_clothes_page')}}">Clothes</a>
                     <a href="{{ route('seprate_electronics_page')}}">Electronic</a>
                     <a href="{{ route('seprate_jewlery_page')}}">Jewellery</a>
                     <a href="{{ route('seprate_toys_page')}}">Toys</a>
                     <a href="{{ route('latest_products_page')}}">Latest Products</a>

                  </div>
                  <span class="toggle_icon" onclick="openNav()"><img src="{{asset("mainfiles/images/toggle-icon.png")}}"></span>
                  <div class="dropdown">
                     <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Shops
                     </button>
                     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{ route('seprate_clothes_page')}} ">Clothes</a>
                     <a class="dropdown-item" href="{{ route('seprate_electronics_page')}}">Electronic</a>
                     <a class="dropdown-item" href="{{ route('seprate_jewlery_page')}}">Jewellery</a>
                     <a class="dropdown-item" href="{{ route('seprate_toys_page')}}">Toys</a>
                     </div>
                  </div>
                  <div class="main">
                     <!-- Another variation with a button -->
                     <div class="input-group">
                        <form action="{{ route('search') }}" method="POST" class="input-group">
                            @csrf
                            <input type="text" name="query" class="form-control" placeholder="Search items you want....">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-secondary" style="background-color: #f26522; border-color:#f26522 ">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </form>
                        <div class="input-group-append">
                           {{-- <button class="btn btn-secondary" type="button" style="background-color: #f26522; border-color:#f26522 ">
                           <i class="fa fa-search"></i>
                           </button> --}}
                        </div>
                     </div>
                  </div>
                  <div class="header_box ">
                     <div class="lang_box ">
                        <a href="#" title="Language" class="nav-link" data-toggle="dropdown" aria-expanded="true">
                        <img src="{{asset("mainfiles/images/flag-uk.png")}}" alt="flag" class="mr-2 " title="United Kingdom"> English <i class="fa fa-angle-down ml-2" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu ">
                           <a href="#" class="dropdown-item">
                           <img src="{{asset("images/flag-france.png")}}" class="mr-2" alt="flag">
                           French
                           </a>
                        </div>
                     </div>
                     <div class="login_menu">
                        <ul>
                           <li><a href="#">
                              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                              <span class="padding_10">Cart</span></a>
                           </li>
                           <li><a href="#">
                              <i class="fa fa-user" aria-hidden="true"></i>
                              <span class="padding_10">Cart</span></a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- header section end -->
         <!-- banner section start -->
         <div class="banner_section layout_padding ">
            <div class="container">
               <div id="my_slider" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital">Get Start <br>Your favriot shoping</h1>
                              <div class="buynow_bt"><a href="#">Buy Now</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital">Get Start <br>Your favriot shoping</h1>
                              <div class="buynow_bt"><a href="#">Buy Now</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital">Get Start <br>Your favriot shoping</h1>
                              <div class="buynow_bt"><a href="#">Buy Now</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                  <i class="fa fa-angle-left"></i>
                  </a>
                  <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                  <i class="fa fa-angle-right"></i>
                  </a>
               </div>
            </div>
         </div>
         <!-- banner section end -->
      </div>
      <!-- banner bg main end -->

      {{-- Latest Products section start --}}


      {{-- Latest Products section ends --}}
      <!-- fashion section start -->
      @php
      $data = DB::table('products')->where('category' , 'Clothes')->get();
      $chunkedData = $data->chunk(4);
  @endphp
      <div class="fashion_section">
         <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

                @foreach ($chunkedData as $index => $chunk)

                <div class="carousel-item{{ $index === 0 ? ' active' : '' }}">
                  <div class="container">
                     <h1 class="fashion_taital">Man & Woman Fashion</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                            @foreach ($chunk as $cdata )

                           <div class="col-lg-3 col-sm-4" style="height:400px;">
                              <div class="box_main">
                                 <h4 class="shirt_text">{{  $cdata->name }}</h4>
                                 <p class="price_text">Price  <span style="color: #262626;">{{ $cdata->price }}</span></p>
                                 <div class="tshirt_img"><img src="{{asset ("product/images/". $cdata->image )}}"  style="height:150px;">
                                  <br><br><span>  <a  class="btn btn-info"href="{{ route('showsingle_product' , [ 'id' => $cdata->id]) }}">Buy Now</a></span>
                                  <a  class="btn btn-danger" href="{{ route('seprate_clothes_page') }}">See All</a>
                                </div>
                              </div>
                           </div>
                           @endforeach
                        </div>
                     </div>
                  </div>
               </div>
               @endforeach
            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only" style="color:red;">Previous</span>
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
         </div>
      </div>
      <!-- fashion section end -->
      <!-- electronic section start -->


      @php
    $data = DB::table('products')->where('category' , 'Electronics')->get();
    $chunkedData = $data->chunk(4);
@endphp
      <div class="fashion_section">
         <div id="electronic_main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach ($chunkedData as $index => $chunk)
               <div class="carousel-item{{ $index === 0 ? ' active' : '' }}">
                  <div class="container">
                     <h1 class="fashion_taital">Electronic</h1>
                     <div class="fashion_section_2">
                        <div class="row">

                            @foreach ($chunk as $cdata )

                           <div class="col-lg-3 col-sm-4" style="height:400px;">
                              <div class="box_main" >
                                 <h4 class="shirt_text">{{ $cdata->name }}</h4>
                                 <p class="price_text">Start Price  <span style="color: #262626;">{{ '$'.$cdata->price }}</span></p>
                                 <div class="electronic_img"><img src="{{ asset('/product/images/'.$cdata->image )}}" style="height:150px;">
                                <br><br><span>  <a  class="btn btn-info"href="{{ route('showsingle_product' , [ 'id' => $cdata->id]) }}">Buy Now</a></span>
                                <a  class="btn btn-danger" href="{{ route('showsingle_product' , [ 'id' => $cdata->id]) }}">See More</a>
                                </div>

                              </div>
                           </div>
                           @endforeach
                           {{-- <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Computers</h4>
                                 <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
                                 <div class="electronic_img"><img src="images/computer-img.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="#">See More</a></div>
                                 </div>
                              </div>
                           </div> --}}
                        </div>
                     </div>
                  </div>
               </div>
               @endforeach


            </div>
            <a class="carousel-control-prev" href="#electronic_main_slider" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only" style="color:red;">Previous</span>
            </a>
            <a class="carousel-control-next" href="#electronic_main_slider" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
         </div>
      </div>
      <!-- electronic section end -->


      <!-- jewellery  section start -->
      @php
     $data = DB::table('products')->where('category' , 'Jewlery')->get();
      $chunkitems = $data->chunk(4);
      @endphp
      <div class="jewellery_section">
         <div id="jewellery_main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach ($chunkitems as $index => $chunk )

               <div class="carousel-item{{ $index === 0 ? ' active' : '' }}">
                  <div class="container">
                     <h1 class="fashion_taital">Jewellery Accessories</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                            @foreach ($chunk  as  $cdata)

                           <div class="col-lg-3 col-sm-4" style="height:400px;">
                              <div class="box_main">
                                 <h4 class="shirt_text">{{ $cdata->name }}</h4>
                                 <p class="price_text">Start Price  <span style="color: #262626;">{{ $cdata->price }}</span></p>
                                 <div class="jewellery_img"><img src="{{ asset('product/images/'. $cdata->image )}}" style="height:150px;">
                                    <br><br><span>  <a  class="btn btn-info"href="{{ route('showsingle_product' , [ 'id' => $cdata->id]) }}">Buy Now</a></span>
                                    <a  class="btn btn-danger" href="{{ route('showsingle_product' , [ 'id' => $cdata->id]) }}">See More</a></div>

                              </div>
                           </div>
                           @endforeach


                        </div>
                     </div>
                  </div>
               </div>
               @endforeach
            </div>
            <a style="margin-top:110px;" class="carousel-control-prev" href="#jewellery_main_slider" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only" style="color:red;">Previous</span>
            </a>
            <a style="margin-top:110px;" class="carousel-control-next" href="#jewellery_main_slider" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

         </div>
      </div>

      <!-- jewellery  section end -->

      {{-- Toy Section Start --}}
      @php
      $data = DB::table('products')->where('category' , 'Toys')->get();
      $chunkedData = $data->chunk(4);
  @endphp
  <br><br><br><br><br><br><br>
  <div class="fashion_section">
    <div id="toy_main_slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach ($chunkedData as $index => $chunk)
                <div class="carousel-item{{ $index === 0 ? ' active' : '' }}">
                    <div class="container">
                        <!-- Your existing code for carousel items -->

                        <h1 class="fashion_taital">Kid Toys</h1>
                        <div class="fashion_section_2">
                            <div class="row">
                                @foreach ($chunk as $cdata)
                                    <div class="col-lg-3 col-sm-4" style="height:400px;">
                                        <div class="box_main">
                                            <h4 class="shirt_text">{{  $cdata->name }}</h4>
                                            <p class="price_text">Price  <span style="color: #262626;">{{ $cdata->price }}</span></p>
                                            <div class="tshirt_img">
                                                <img src="{{asset ("product/images/". $cdata->image )}}" style="height:150px;">
                                                <br><br>
                                                <span>
                                                    <a class="btn btn-info" href="{{ route('showsingle_product' , [ 'id' => $cdata->id]) }}">Buy Now</a>
                                                </span>
                                                <a class="btn btn-danger" href="{{ route('showsingle_product' , [ 'id' => $cdata->id]) }}">See More</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#toy_main_slider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only" style="color:red;">Previous</span>
        </a>
        <a class="carousel-control-next" href="#toy_main_slider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
      {{-- Toy section End --}}
      {{-- Latest Added products  start--}}
      @php
      $data = DB::table('products')->where('created_at' , '>=' , now()->subDays(3))->get();;
      $chunkedData = $data->chunk(4);
  @endphp
  <br><br><br><br><br><br><br>
  <div class="fashion_section">
    <div id="latest_main_slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach ($chunkedData as $index => $chunk)
                <div class="carousel-item{{ $index === 0 ? ' active' : '' }}">
                    <div class="container">
                        <!-- Your existing code for carousel items -->

                        <h1 class="fashion_taital">Latest Products</h1>
                        <div class="fashion_section_2">
                            <div class="row">
                                @foreach ($chunk as $cdata)
                                    <div class="col-lg-3 col-sm-4" style="height:400px;">
                                        <div class="box_main">
                                            <h4 class="shirt_text">{{  $cdata->name }}</h4>
                                            <p class="price_text">Price  <span style="color: #262626;">{{ $cdata->price }}</span></p>
                                            <div class="tshirt_img">
                                                <img src="{{asset ("product/images/". $cdata->image )}}" style="height:150px;">
                                                <br><br>
                                                <span>
                                                    <a class="btn btn-info" href="{{ route('showsingle_product' , [ 'id' => $cdata->id]) }}">Buy Now</a>
                                                </span>
                                                <a class="btn btn-danger" href="{{ route('showsingle_product' , [ 'id' => $cdata->id]) }}">See More</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#latest_main_slider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only" style="color:red;">Previous</span>
        </a>
        <a class="carousel-control-next" href="#latest_main_slider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
      {{-- Latest Added products end --}}

      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="footer_logo"><a href="index.html"><img src="{{ asset("mainfiles/images/footer-logo.png") }}"></a></div>
            <div class="input_bt">
               <input type="text" class="mail_bt" placeholder="Enter your Email" name="Your Email">
               <span class="subscribe_bt" id="basic-addon2"><a href="#" class="btn btn-danger">Subscribe</a></span>
            </div>
            <div class="footer_menu">
               <ul>
                  <li><a href="#">Best Sellers</a></li>
                  <li><a href="#">Gift Ideas</a></li>
                  <li><a href="#">New Releases</a></li>
                  <li><a href="#">Today's Deals</a></li>
                  <li><a href="#">Customer Service</a></li>
               </ul>
            </div>
            <div class="location_main">Help Line  Number : <a href="#">+1 1800 1200 1200</a></div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">© 2020 All Rights Reserved. Design by <a href="{{ route('welcome')}}">J.developers</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->

      <script src="{{asset("js/jquery.min.js")}}"></script>
      <script src="{{asset("mainfiles/js/popper.min.jsa")}}"></script>
      <script src="{{asset("mainfiles/js/bootstrap.bundle.min.jsa")}}"></script>
      <script src="{{asset("mainfiles/js/jquery-3.0.0.min.jsa")}}"></script>
      <script src="{{asset("mainfiles/js/plugin.jsa")}}"></script>
      <!-- sidebar -->
      <script src="{{asset("mainfiles/js/jquery.mCustomScrollbar.concat.min.jsa")}}"></script>
      <script src="{{asset("mainfiles/js/custom.jsa")}}"></script>
      <script>
         function openNav() {
           document.getElementById("mySidenav").style.width = "250px";
         }

         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
         }
      </script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

   </body>
</html>
