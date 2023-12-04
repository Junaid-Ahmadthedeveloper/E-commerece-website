@extends('websitenav')
@section('content_section')
<br><br>
<h1>Kid Toys</h1>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <div class="container mt-5">
        <div class="row">
            @foreach ($data as $cdata)
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4" >
                    <div class="card text-center" style="background-color:cream;height:47vh;border-color:rgb(196, 159, 112);">
                        <div class="card-header">
                            <h5 class="card-title">{{ $cdata->name  }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ 'Rs.'.$cdata->price }}</h6>
                        </div>
                        <div class="card-body">
                            <img src="{{ asset('product/images/'. $cdata->image ) }}" class="img-fluid" style="height:30vh;padding-bottom:15vh;" alt="Card Image">
                        </div>
                        <div class="card-footer">
                            <a   class="btn btn-info" href="{{ route('showsingle_product' , [ 'id' => $cdata->id]) }}">Buy Now</a>
                            <a   class="btn btn-danger" href="{{ route('showsingle_product' , [ 'id' => $cdata->id]) }}">See More</a>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js (required for some Bootstrap components) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
