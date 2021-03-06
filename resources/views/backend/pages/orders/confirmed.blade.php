@extends('backend.template.layout')




@section('per_page_css')
<link href="{{asset('backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet"/>
@endsection


@section('per_page_js')
<script src="{{ asset('backend/assets/extra-libs/DataTables/datatables.min.js')}}"></script>
<script>


    $("#zero_config").DataTable();
</script>
@endsection


@section('main_card_content')
<!-- Container fluid  -->
<!-- ============================================================== -->


<!-- ============================================================== -->

<div class="container-fluid">

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-bordered table-hover text-center align-item-center">
                            <thead>
                                <tr>
                                    <th>Sl.</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Invoice Sl.</th>
                                    <th>Total Price</th>
                                    <th>Order Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($invoices as $key => $invoice)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$invoice->first_name}} {{$invoice->last_name}}</td>
                                        <td>{{$invoice->address}}</td>
                                        <td>{{$invoice->invoice_sl}}</td>
                                        <td>{{$invoice->totalPrice}} TK</td>
                                        <td>{{$invoice->created_at->format('d/m/Y')}}</td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <a href=""  class="btn btn-primary  btn-sm"><i class="mdi mdi-eye"></i> View</a> 
                                                <div class="btn-group">
                                                    <button
                                                        type="button"
                                                        class="btn btn-danger dropdown-toggle btn-sm"
                                                        data-toggle="dropdown"
                                                        aria-haspopup="true"
                                                        aria-expanded="false"
                                                    >
                                                        <i class="mdi mdi-delete-forever"></i> Delete
                                                    </button>
                                                    <div
                                                        class="dropdown-menu text-center position-absolute" 
                                                        x-placement="bottom-start"
                                                    
                                                    >

                                                    <form action="" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="_method" value="delete">
                                                        <button class="dropdown-item bg-danger" type="submit">Confirm Delete?</button>
                                                    </form>

                                                        <a
                                                            class="dropdown-item bg-secondary"
                                                            href="#"
                                                            >Cancel</a
                                                        >
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                                                               
                                        </td>
                                    </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Sales chart -->
    <!-- ============================================================== -->
</div>
@endsection