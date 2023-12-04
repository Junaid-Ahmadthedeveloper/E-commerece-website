@extends('adminpanel.main')
@section('chef')
@if(session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
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


    {{-- <a href="" class="btn btn-primary">Add Products</a> --}}
    <div class="col-md-12">
        <div class="card">

            <div class="card-body">
                <h5 class="card-title">Add To Cart Table</h5>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Product Name</th>
                                <th>Product No</th>
                                <th>User Email</th>
                                <th>Price</th>
                                <th>Time</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $userdata )


                            <tr>
                                <td>{{ $userdata->id}}</td>
                                <td>{{ $userdata->prduct_name}}</td>
                                <td>{{ $userdata->prduct_no}}</td>
                                <td>{{ $userdata->user_email}}</td>
                                <td>{{ $userdata->price}}</td>
                                <td>{{ $userdata->created_at}}</td>
                                <td>
                                    {{-- <button class="btn btn-success">Edit</button> --}}
                                    <a href="{{ route('deletecart',['id' => $userdata->id]) }}" class="btn btn-danger">Delete</a>
                                    {{-- <a href="{{ route('deleteuser',['id' => $userdata->id]) }}" class="btn btn-info">Edit</a> --}}
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





@endsection
