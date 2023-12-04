@extends('adminpanel.main')
@section('chef')
 <main class="d-flex w-100">
    <div class="container d-flex flex-column">
        <div class="row vh-100">
            <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                <div class="d-table-cell align-middle">

                    <div class="text-center mt-4">
                        <h1 class="h2">Add Products</h1>
                        <p class="lead">
                            Start creating the best possible user experience for your customers.
                        </p>
                    </div>
                    <br>

                    <div class="card">
                        <div class="card-body">
                            <div class="m-sm-4">


                                <form method="POST" action="{{ url('/product/store')}}" enctype="multipart/form-data" class="forms-sample">
                                    @csrf
                                  <div class="form-group">
                                    {{-- <label for=""> Name</label> --}}
                                    <input type="text" class="form-control" name="name" id="" placeholder="Enter product name...">
                                  </div><br>

                                  <div class="form-group">
                                    {{-- <label for="">Type</label> --}}
                                    <input type="text" class="form-control" id="" name="type" placeholder="Enter company...">
                                  </div><br>


                                  <div class="form-group">
                                    {{-- <label for="">Image</label> --}}
                                    <input type="file" class="form-control" id="" name="file" >
                                  </div><br>
                                  <div class="form-group">
                                    {{-- <label for="">Price</label> --}}
                                    <input type="text" class="form-control" id="" name="price" placeholder="Enter price...">
                                  </div><br>
                                  <div class="form-group">
                                    {{-- <label for="">Category</label> --}}

                                     <select class="form-control"  name="category[]" id="">
                                        <option value="">Select Category</option>
                                        <option value="Electronics">Electronics</option>
                                        <option value="Clothes">Clothes</option>
                                        <option value="Toys">Toys</option>
                                        <option value="Jewlery">Jewlery</option>
                                     </select>
                                  </div><br>
                                  <div class="form-group">
                                    {{-- <label for="">Details</label> --}}
                                    <input type="text" class="form-control" id="" name="description" placeholder="Enter  details...">
                                  </div>
                                  <br>
                                  <button type="submit" class="btn btn-primary me-2">Submit</button>
                                  <button class="btn btn-dark">Cancel</button>
                                </form>

                           </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>




@endsection
