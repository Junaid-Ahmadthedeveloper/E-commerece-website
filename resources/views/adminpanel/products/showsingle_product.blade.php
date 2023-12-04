@extends('websitenav')
@section('content_section')
<!------ Include the above in your HEAD tag ---------->

{{-- <!DOCTYPE html> --}}
{{-- <html> --}}
    {{-- <head> --}}
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
<title>Main</title>
<style>

@import url('https://fonts.googleapis.com/css?family=Muli');

/*reset*/
* {
  margin: 0;
  padding: 0;
}
body {
      background-image: linear-gradient(
        to right bottom,
        #b91eda,
        #a02ae0,
        #8234e5,
        #5d3be8,
        #1241eb
      );
}
/*product info */

h1 {
  color: #ff6d39;
  font-family: "muli";
  font-weight: bold;
  font-size: 22px;
  margin-top: 21px;
  display: inline-block;
}

i.fa.fa-search {
  margin-left: 90px;
}

.product-name i {
  color: #ffffff;
  transition: 0.3s all ease;
  margin: 0px 12px;
}

.product-name i:hover {
  color: #ff6d39;
  cursor: pointer;
}

h3 {
  color: #ffffff;
  font-family: "muli";
  margin-top: 84px;
  font-size: 20px;
  font-weight: 500;
}

h2 {
  color: #ffffff;
  font-family: "muli";
  margin-top: 10px;
  font-weight: 800;
  font-size: 29px;
}

h4 {
  display: inline-block;
  color: #ffffff;
  font-family: "muli";
  margin-top: 10px;
  font-weight: bold;
  font-size: 20px;
}

h4.dis {
  display: inline-block;
  color: #ffffff;
  font-family: "muli";
  font-weight: 400;
  font-size: 17px;
  margin-left: 30px;
  text-decoration: line-through #ea3201;
}

h4.dis span {
  text-decoration: line-through #ea3201;
}

.discount {
  display: inline-block;
}

ul {
  list-style-type: none;
}

li {
  display: inline-block;
  margin-right: 25px;
}

ul li {
  color: #ffffff;
  font-family: "muli";
  margin-top: 20px;
  font-weight: 500;
  font-size: 11px;
}

.bg {
  width: 15px;
  height: 15px;
  text-align: center;
  padding: 2px;
  margin-right: 20px;
  transition: 0.3s all ease;
  border-radius: 50%;
}

.bg:hover {
  background-color: #ff6d39;
  border-radius: 50%;
  width: 15px;
  height: 15px;
  cursor: pointer;
}

.yellow {
  content: "";
  width: 13px;
  height: 13px;
  background-color: #fec60f;
  border-radius: 50%;
  border: 2px solid rgba(0, 0, 0, 0);
  transition: 0.3s all ease;
}

.black {
  content: "";
  width: 13px;
  height: 13px;
  background-color: #000000;
  border-radius: 50%;
  border: 2px solid rgba(0, 0, 0, 0);
  transition: 0.3s all ease;
}

.blue {
  content: "";
  width: 13px;
  height: 13px;
  background-color: #02a2ca;
  border-radius: 50%;
  border: 2px solid rgba(0, 0, 0, 0);
  transition: 0.3s all ease;
}

.yellow:hover,
.black:hover,
.blue:hover {
  border: 2px solid #f76b39;
  width: 13px;
  height: 13px;
  border-radius: 50%;
  cursor: pointer;
}

.foot {
  color: #ffffff;
  font-family: "muli";
  margin-top: 20px;
  margin-right: 50px;
  font-weight: 500;
  font-size: 11px;
  float: left;
  transition: 0.3s all ease;
}

.foot i:nth-child(1) {
  margin-left: 0;
  margin-right: 15px;
}

.foot:hover {
  color: #f76b39;
  cursor: pointer;
}

/*shoe slider indicator*/

.left i {
  color: #ffd5c6;
  margin-top: 260px;
  transition: 0.3s all ease;
}

.fa-long-arrow-left {
  margin-left: -275px;
}

.fa-long-arrow-right {
  margin-left: 15px;
}

.left i:hover {
  cursor: pointer;
  color: #2a2f40;
}

/*main card*/

.card {
  display: flex;
  align-items: center;
  background: #252831 url(https://www.dropbox.com/s/fuadz3vmw2nsylm/bg.png?raw=1)
    no-repeat;
  height: 600px;
  width: 800px;
  margin: 0 auto;
  box-shadow: 0px 15px 50px 10px rgba(0, 0, 0, 0.4);
  margin-top: 2%;
}

.left {
  content: "";
  height: 395px;
  width: 330px;
  display: flex;
  align-items: center;
  background-color: #ff6d39;
  margin-left: 93px;
  border-radius: 0% 50% 50% 0%;
  position: absolute;
  z-index: 5;
}

.left img {
  margin-left: -88px;
  margin-top: 60px;
}

.right {
  content: "";
  height: 395px;
  width: 550px;
  background-color: #2a2f40;
  z-index: 3;
  margin-left: 200px;
}

.product-info {
  position: absolute;
  margin-left: 245px;
  height: 394px;
  width: 305px;
  z-index: 10;
}

</style>
    {{-- </head> --}}
    {{-- <body style="background-color:"> --}}
     <a href="{{ route('welcome')}}" style="margin-left:200px;margin-top:20px;" class="btn btn-danger">Back</a>

  <div class="card" style="border-radius:20px;">
    <div class="left"    style="margin-right:400px;margin-top:15vh;"  >
      <img src="{{ asset('product/images/'.$data->image)}}" width="60%"  style="margin-left:50px;margin-bottom:40px;border-radius:20px;height:70%;" alt="shoe">
      {{-- <i class="fa fa-long-arrow-left"></i> --}}
      {{-- <i class="fa fa-long-arrow-right"></i> --}}
    </div>

    <div class="right">
      <div class="product-info">
        <div class="product-name">
          <h1>{{ '#'.$data->product_no}}</h1>
          <i class="fa fa-search"></i>
          <i class="fa fa-user"></i>
          {{-- <i class="fa fa-shopping-cart"></i> --}}
        </div>
        <div class="details">
          <h3>{{ $data->type }}</h3>
          <h2>{{ $data->name }}</h2>
          <h4><span class="fa fa-dollar"></span>{{ $data->price }}</h4>
          <h4 class="dis"><span class="fa fa-dollar"></span>60,000</h4>
        </div>
        <ul>
          <li style="text-weight:5px;">Specs</li>
          <li class="bg" style="width:170px;">{{ $data->description}}</li>
          {{-- <li class="bg">8</li>
          <li class="bg">9</li>
          <li class="bg">10</li>
          <li class="bg">11</li> --}}
        </ul>
        <ul>
            <form id="myForm" action="{{ route('sold_products_submit') }}" method="post">
                @csrf <!-- Add CSRF token for security -->
                <input type="hidden" name="id_sender" value="{{ $data->id }}"> <!-- Add a hidden input for the ID -->
                <li>No. of items</li>
                <input type="number" id="quantity" name="quantity" value="1" min="1" style="width:80px; margin-top: 10px;">
            </form>
        </ul>
        <span class="foot"><i class="fa fa-shopping-bag "></i><a class="btn btn-danger"  id="buyNowBtn" href="{{ route('showform', ['price' => $data->price , 'id' => $data->id ]) }}">Buy Now</a></span>
        <span class="foot" style="margin-left:10vw;margin-bottom:30px;"><i class="fa fa-shopping-cart"></i><a class="btn btn-danger" href="{{ route('add_cart',['id' => $data->id])}}">Add Cart</a></span>
       <!-- Add this input field within the product-info div -->


    </div>

    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script>
    document.getElementById("buyNowBtn").addEventListener("click", function(event) {
        event.preventDefault();

        // Optional: You can customize the form data before submission
        // e.g., document.getElementById("quantity").value = someNewValue;

        document.getElementById("myForm").submit(); // Submit the form
    });
</script>


  <script>
    document.addEventListener("DOMContentLoaded", function () {
      // Get the price and quantity elements
      var priceElement = document.querySelector('.details h4');
      var quantityInput = document.getElementById('quantity');

      // Get the totalPrice input element
      var totalPriceInput = document.getElementById('totalPriceInput');

      // Initial price and quantity
      var basePrice = parseFloat(priceElement.innerText.replace('$', '').replace(',', ''));
      var quantity = parseInt(quantityInput.value);

      // Update the price when the quantity changes
      quantityInput.addEventListener('input', function () {
        quantity = parseInt(this.value);
        updatePrice();
        updateTotalPriceInput(); // Updated to set the value of the input field
      });

      // Function to update the price based on quantity
      function updatePrice() {
        var totalPrice = basePrice * quantity;
        priceElement.innerHTML = '<span class="fa fa-dollar"></span>' + totalPrice.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
      }

      // Function to update the totalPrice input value
      function updateTotalPriceInput() {
        var totalPrice = basePrice * quantity;
        totalPriceInput.value = totalPrice.toFixed(2); // Set the value of the input field
      }

      // Get the "Buy Now" button
      var buyNowBtn = document.getElementById('buyNowBtn');

      // Add a click event listener to the "Buy Now" button
      buyNowBtn.addEventListener('click', function (event) {
        // Prevent the default action of the anchor tag
        event.preventDefault();

        // Get the updated price
        var updatedPrice = basePrice * quantity;

        // Assuming you want to navigate to the 'showform' route with the updated price
        var showformRoute = "{{ route('showform', ['id' => $data->id, 'price' => ':price']) }}";

        // Replace the ':price' placeholder in the route with the updated price
        var finalShowformRoute = showformRoute.replace(':price', updatedPrice);

        // Navigate to the final route
        window.location.href = finalShowformRoute;
      });
    });
  </script><br><br><br>
{{-- </body>
</html> --}}
@endsection
