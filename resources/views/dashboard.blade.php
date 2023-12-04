<x-app-layout>
    <br><br><br>
 {{-- <h1 style="color:red;font-size:40px;margin-left:50px;">Orders:</h1> --}}
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User/data</title>
 </head>
 <body>

<style>
    /* Update the existing CSS with the following styles */

    .table {
        width: 100%;
        margin-bottom: 1rem;
        color: #212529;
        background-color: #ffffff;
        border-radius: 10px; /* Rounded corners */
        overflow: hidden; /* Hide overflowing content */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Subtle shadow */
    }

    .table th,
    .table td {
        padding: 1rem;
        vertical-align: top;
        border-top: 1px solid #dee2e6;
    }

    .table thead th {
        vertical-align: middle;
        background-color: #f1f5f8; /* Light background color for header */
        border-bottom: 2px solid #dee2e6;
    }

    .table tbody + tbody {
        border-top: 2px solid #dee2e6;
    }

    .table-sm th,
    .table-sm td {
        padding: 0.5rem;
    }

    .btn {
        display: inline-block;
        font-weight: 500;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        user-select: none;
        border: none;
        padding: 0.75rem 1.5rem;
        font-size: 1rem;
        line-height: 1.5;
        border-radius: 5px;
        transition: background-color 0.15s ease-in-out, color 0.15s ease-in-out;
    }

    .btn-success {
        color: #ffffff;
        background-color: #6db860; /* Updated green color */
    }

    .btn-danger {
        color: #ffffff;
        background-color: #dc3545; /* Updated red color */
    }

    /* Add hover styles for buttons */
    .btn:hover {
        opacity: 0.9;
        cursor: pointer;
    }

    /* Responsive styles */
    @media (max-width: 768px) {
        .table thead {
            display: none; /* Hide thead on small screens */
        }

        .table tbody,
        .table tr,
        .table td {
            display: block;
            width: 100%;
        }

        .table td {
            text-align: left;
            padding: 0.75rem;
        }
    }



    </style>
@php
$user = Auth::user();

// Retrieve all data from buynows table for the user's email
$data = DB::table('buynows')->where('loginemail', $user->email)->get();
@endphp
@if(session('message'))
    <div class="alert alert-success col-10 mx-auto">
        {{ session('message') }}
    </div>
@endif

<div class="col-md-10 mx-auto col-8">
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Order Status</h5>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone#</th>
                        <th>Address</th>
                        <th>Payement Method</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Order_at</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $row)
                        <tr>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->email }}</td>
                            <td>{{ $row->phone }}</td>
                            <td>{{ $row->Adress }}</td>
                            <td>{{ $row->payement }}</td>
                            <td>{{ '$'.$row->price }}</td>
                           @if( $row->Order_tracking  == 'Processing')
                            <td class="text-danger">{{ $row->Order_tracking }}</td>
                            @else
                                <td class="text-success">{{ $row->Order_tracking }}</td>
                            @endif
                            <td>{{ $row->created_at }}</td>
                            <td>
                                <a href="{{ route('delete_order',['id' => $row->id]) }}" class="btn btn-danger">Cancel</a><br><br>
                                @if($row->Order_tracking == 'Delivered')
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#feedbackModal">
                                   Give Feedback
                                </button>
                                @endif

                            </td>
                        </tr>
                    @endforeach

                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @php
$user = Auth::user();
// Retrieve all data from buynows table for the user's email
$data = DB::table('add_cart')->where('user_email', $user->email)->get();
@endphp
<div class="col-md-10 mx-auto col-8">
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Saved Products</h5>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Product No#</th>
                        <th>Price</th>
                        <th>Order_at</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $row)
                        <tr>
                            <td>{{ $row->prduct_name }}</td>
                            <td>{{'#'. $row->prduct_no }}</td>
                            <td>{{'$'. $row->price }}</td>
                            <td>{{ $row->created_at }}</td>
                            <td>
                                <a href="{{ route('deletecart',['id' => $row->id]) }}" class="btn btn-danger">Cancel</a>
                                <a  class="btn btn-info"href="{{ route('showsingle_product' , [ 'id' => $row->produc_id]) }}">Buy Now</a>
                            </td>
                        </tr>
                    @endforeach

                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
<div class="modal fade" id="feedbackModal" tabindex="-1" role="dialog" aria-labelledby="feedbackModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="feedbackModalLabel">Feedback Form</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('feedback')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="experience_1">How was your overall experience?</label>
                        <input type="text" name="" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="experience_2">Would you recommend us to others?</label>
                        <input type="text" name="" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="comments">Any additional comments?</label>
                        <textarea name="message" class="form-control" rows="4" required></textarea>
                    </div>
                    <div class="form-group">
                  <label for="" style="color:">
                    "Share your thoughts and shape the experience! Your feedback matters – make your voice heard by filling out our form. Together, let's create something exceptional."</label>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit Feedback</button>
                </form>
            </div>
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
 </html>
</x-app-layout>
