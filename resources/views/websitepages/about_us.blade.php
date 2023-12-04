@extends('websitenav')
@section('content_section')
{{-- <br><br>
<div class="container mx-auto" style="width:72vw;height:100vh; background-color:beige;border-radius:20px">
    <br><br>
<h1 style="font-size:30px;">About US:</h1>
<br>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo ipsum perferendis ex magni reiciendis distinctio quam beatae libero nisi praesentium mollitia doloribus, quis deserunt voluptatum nobis. Neque minima incidunt corporis!</p>

</div> --}}
<style>
    /* body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    } */

    .about-container {
        display: flex;
        max-width: 1200px;
        margin: 50px auto;
        padding: 20px;
        background-color: rgb(255,253,208);
        border-radius: 8px;
    }

    .text-content {
        flex: 1;
        padding-right: 20px;
    }

    .text-content h2 {
        color: #333;
    }

    .text-content p {
        color: #555;
    }

    .image-content {
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: flex-end;
    }

    .image-content img {
        width: 100%;
        height: auto;
        border-radius: 8px;
    }
</style>

<div class="about-container">
    <div class="text-content">
        <h2 style="color:rgb(152, 155, 7);">About Us</h2>
        <p style="font-size:25px;word-spacing:2px;color:black;font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">Welcome to Elefyre, where excellence meets convenience! We take pride in offering a curated selection of the finest products on our e-commerce platform. Committed to delivering exceptional services, our mission is to enhance your online shopping experience.

            At Elefyre, we prioritize quality, ensuring that each product meets stringent standards. From trendy apparel to cutting-edge gadgets, our diverse range caters to every need. Our user-friendly interface and secure checkout make shopping a breeze.

            As a customer-centric company, we value transparency and integrity. Our team is dedicated to providing detailed product information and responsive customer support, ensuring you make informed decisions. Your satisfaction is our priority.

            Recent Achievements:
            🏆 Awarded "Best E-Commerce Platform" by Elefyre
            🌐 Expanded product range to meet evolving customer preferences
            🛒 Achieved 98% customer satisfaction in the past year

            Join our growing community of satisfied customers and experience the Elefyre difference. Elevate your online shopping journey with us – where quality, service, and innovation converge.</p>
    </div>
    <div class="image-content">
        <img src="{{ asset('shoppingmaaal.png')}}" alt="Company Image">
    </div>
</div>















@endsection
