@extends('websitenav')
@section('content_section')
{{-- <!doctype html>
<html lang="en">
  <head> --}}
    <!-- Required meta tags --><br><br><br>
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>J.</title>
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("orderformfiles/fonts/icomoon/style.css") }}">

    <link rel="stylesheet" href="{{ asset("orderformfiles/css/owl.carousel.min.css") }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset("orderformfiles/css/bootstrap.min.css") }}">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset("orderformfiles/css/style.css") }}">

    <title>Sign Up #2</title>




  <div class="d-lg-flex half" >
    <div class="bg order-1 order-md-2" style="background-image: url('{{ asset('orderformfiles/images/bg_1.jpg') }}');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container" style="height:400px;border-radius:20px;">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 py-5">
            <h3>Order Now</h3>
            <p class="mb-4">Your Choice is our top priority - prepare for a culinary journey tailored just for you.</p>

            <form action="{{ route('place_order')}}" method="post" enctype="multipart/form-data">
             @csrf
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="fname">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter your name" id="fname">
                  </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group first">
                      <label for="email">Email Address</label>
                      <input type="email" class="form-control" name="email" placeholder="Enter your email..." id="email">
                    </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group first">
                    <label for="">Phone Number</label>
                    <input type="text" class="form-control" name="phone" placeholder="Enter your contact number..." id="email">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="lname">Adress</label>
                    <input type="text" name="adress" class="form-control" placeholder="Enter your Adress..." id="lname">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="lname">Payement</label>
                    <select  class="form-control" name="payement[]" id="">
                        <option value="">Select Payement methodes</option>
                        <option value="Easypaisa">Easypaisa</option>
                        <option value="Jazzcash">Jazzcash</option>
                        <option value="BankTransfer">Bank Transfer</option>
                        <option value="Cashondelivery">Cash on delivery</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">


                    <input type="hidden" class="form-control" name="price" id="totalPriceInput" name="totalPrice" value="{{ $price}}">
                    {{-- <input type="hidden" class="form-control" id="totalPriceInput" name="product_id" value="{{ $id }}"> --}}
                    {{-- <input type="hidden" class="form-control" id="totalPriceInput" name="quantity" value="{{ $quantity }}"> --}}

                </div>
                {{-- <div class="col-md-6">

                  <div class="form-group last mb-3">
                    <label for="re-password">Re-type Password</label>
                    <input type="password" class="form-control" placeholder="Your Password" id="re-password">
                  </div>
                </div> --}}
              </div>

              <div class="d-flex mb-5 mt-4 align-items-center">
                <div class="d-flex align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Clicked it means you're okay with our <a href="#">Terms and Conditions</a> and our <a href="#">Privacy Policy</a>.</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
              </div>
              </div>

              <input type="submit" name="submit" value="Order Now" class="btn px-5 btn-primary">

            </form>
          </div>
        </div>
      </div>
    </div>


  </div>



    <script src="{{ asset("orderformfiles/js/jquery-3.3.1.min.js") }}"></script>
    <script src="{{ asset("orderformfiles/js/popper.min.js") }}"></script>
    <script src="{{ asset("orderformfiles/js/bootstrap.min.js") }}"></script>
    <script src="{{ asset("orderformfiles/js/main.js") }}"></script>


@endsection
