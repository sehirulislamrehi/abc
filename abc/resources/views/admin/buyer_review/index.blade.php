@extends('admin.admin_master')
@section('mainContent')
        <div class="page-body">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addNewGalleryModal">Add New Review</button>
                            </div>

                            <!-- Modal -->
                                <div class="modal fade" id="addNewGalleryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                        
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title text-center text-primary">Add New Review</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{route('review_show')}}" method="post" id="addNewForm" enctype="multipart/form-data">
                                                        @csrf
                                                        
                                                                                                               
                                                        
                                                                <div class="form-group">
                                                                    <label for="name">Company Name</label>
                                                                    <input type="text" class="form-control" id="name" placeholder="Ex: SST Tech" name="name">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="description">Description</label>
                                                                    <textarea name="description" id="description" cols="30" rows="4" class="form-control" placeholder="Ex: something about review or something or something that client says"></textarea>
                                                                    
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="star">Review Start</label>
                                                                    <input type="number" name="star" value="0" min='0' max="5" id="star" class="form-control">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="link">Website</label>
                                                                    <input type="text" name="link" id="link" class="form-control">
                                                                </div>

                                                    


                                                    </from>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                    <button type="submit" id="submitButtonForAddNewForm" class="btn btn-success">Save</button>
                                                </div>

                                            </div>
                                        
                                    </div>
                                </div>


                            <!-- Modal end -->
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="{{url('/admin')}}"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Product</li>
                                <li class="breadcrumb-item active">List Product</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
           <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                        
                            <div class="card-body">                               
                                 
                               
                                <div class="table-responsive">
                                    <div id="basicScenario" class="product-physical"></div>
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
								        <thead>
								            <tr>
                                                <th>Sl.</th>
								                <th>Company Name</th>
                                                <th>Review Star</th>
                                                <th>Description</th>
                                                <th>Website</th>
                                                <th>Action</th>
								                
								            </tr>
								        </thead>
								        <tbody>
								        	@foreach($reviews as $key => $review)
								            <tr>
                                                
                                            
								                <td>{{$key+1}}</td>
								                <td>{{$review->company_name}}</td>
                                                <td>{{$review->star}}</td>
                                                <td>{{$review->description}}</td>
                                                <td>{{$review->link}}</td>

								             
								                <td>
                                             
                                                <a  style="line-height: 0.5; border-radius: 1.25rem;" class='btn btn-primary btn-xs updatebtn' href="{{route('review_edit', $review->id)}}" >
                                                <i class='fa fa-edit'></i>
                                                    </a>
                                                
								               <a href="{{route('review_delete', $review->id)}}">	<button type='button' style="line-height: 0.5; border-radius: 1.25rem;" class='btn btn-danger btn-xs' onclick="return confirm('Are You sure')"><i class='fa fa-times'></i></buttpn></a>
                
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
            </div>
            <!-- Container-fluid Ends-->
        </div>
<script type="text/javascript">
    $('document').ready(function(){
        $('#product').addClass('open active');
            $('#productlist').addClass('active');
    })



    const imageUploadInput = document.getElementById('imageUpload');
    const imageUploadShow = document.getElementById('imageUploader');
    let imagePath = `data:image/png;base64,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
`;

    imageUploadShow.onclick = ()=>{
        imageUploadInput.click();
    }


    imageUploadInput.onchange = (e) => {
        if(!e.target.files[0]){
            return imageUploadShow.src = imagePath;
        }else{
            let reader = new FileReader();
                reader.readAsDataURL(e.target.files[0]);
                reader.onload = e => {
                    return imageUploadShow.src =  e.target.result;
                };
        }

      
                
    }



    let submitButtonForAddNewForm = document.getElementById('submitButtonForAddNewForm')


    submitButtonForAddNewForm.onclick = ()=>{
        document.getElementById('addNewForm').submit();
    }




    const updateButtons = document.getElementsByClassName('updatebutton');
    for(let updatebtnIntex in updateButtons){
        updateButtons[updatebtnIntex].onclick = event=>{
            // document.getElementById(event.target.dataset.formId).submit();
            console.log(document.getElementById("'"+ event.target.dataset.formId+"'"));
        }
    }




    
</script>
@endsection