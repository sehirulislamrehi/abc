<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon icon -->
    @foreach( App\Models\Backend\Fav::orderBy('id','asc')->get() as $fav )
    <link type="image/gif" rel="shortcut icon" href="{{ asset('images/fav/' . $fav->image) }}">
    @endforeach

    <title>ABC - Advance Best Cheap</title>
    <!-- Custom CSS -->
    <link href="{{ asset('backend/dist/css/style.css') }}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center ">
            <div class="auth-box  border-top border-secondary">
                <div>

                    <div class="text-center p-t-20 p-b-20">
                        @foreach(  App\Models\Backend\Logo::orderBy('id','asc')->get() as $logo )
                            @if( $logo->image == NULL )
                                <div class="alert alert-warning">
                                No Image uploaded
                                </div>
                            @else
                            <img src="{{ asset('images/logo/' . $logo->image) }}" style="margin: 15px" width="150px" alt="homepage" class="light-logo" />
                            @endif
                        @endforeach

                        <!-- account delete success message -->
                        @if( session()->has('deleteSuccess') )
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Congratulation!</strong> {{ session()->get('deleteSuccess') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif

                         <!-- registration failed message -->
                         @if( session()->has('registerFailed') )
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Sorry!</strong> {{ session()->get('registerFailed') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                    </div>

                    <!-- Form -->
                    <form class="form-horizontal m-t-20" method="POST" action="{{ route('superAdminRegister') }}">
                        @csrf
                        <div class="row p-b-30">
                            <div class="col-12">

                                <!-- username start -->
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="ti-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <!-- username end -->

                                <!-- email start-->
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-danger text-white" id="basic-addon1"><i class="ti-email"></i></span>
                                    </div>
                                    <input type="text" class="form-control form-control-lg @error('email') is-invalid @enderror" placeholder="Please use valid email address" aria-label="Username" aria-describedby="basic-addon1" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <!-- email end-->

                                <!-- password start -->
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-warning text-white" id="basic-addon2"><i class="ti-pencil"></i></span>
                                    </div>
                                    <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" name="password" required autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <!-- password end -->

                                <!-- confirm password start -->
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-info text-white" id="basic-addon2"><i class="ti-pencil"></i></span>
                                    </div>
                                    <input type="password" class="form-control form-control-lg" placeholder=" Confirm Password" aria-label="Password" aria-describedby="basic-addon1" name="password_confirmation" required autocomplete="new-password">
                                </div>
                                <!-- confirm password end -->

                                <!-- role start -->
                                <div class="input-group mb-3" >
                                    <select name="role" style="visibility: hidden;">
                                        <option value="1"> Super Admin </option>
                                    </select>
                                </div>
                                <!-- role end -->

                            </div>
                        </div>
                        <div class="row border-top border-secondary">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="p-t-20">
                                        <button class="btn btn-block btn-lg btn-info" type="submit">Sign Up</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- form end -->

                    <div class="row">
                        <div class="col-md-12 text-center">
                            <a href="{{ route('login') }}" style="color:white">AlreadyRegistered ? Go to login page</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="{{ asset('backend/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('backend/assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
    $('[data-toggle="tooltip"]').tooltip();
    $(".preloader").fadeOut();
    </script>
</body>

</html>