@extends('backend.template.layout')
@section('main_card_content')

<!-- container start -->
<div class="container-fluid">

    <!-- title row start -->
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Edit Gallery</h4>
        </div>
    </div>
    <!-- title row end -->

    <!-- main card start -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    <!-- edit row start -->
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <form action="{{ route('gallery.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group">
                                    <label>Caption</label>
                                    <input type="text" class="form-control" name="caption" required value="{{ $gallery->caption }}">
                                </div>
                                <div class="form-group">
                                    <label>Add Gallery Image</label> <br>
                                    <img src="{{ asset('images/gallery/' . $gallery->image ) }}" width="150px" alt=""> <br> <br>
                                    <input type="file" class="form-control-file" name="image" >
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- edit row end -->

                </div>
            </div>
        </div>
    </div>
    <!-- main card end -->

</div>
<!-- container end-->

@endsection  