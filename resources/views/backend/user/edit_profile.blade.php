@extends('admin.admin_master')
@section('content-index')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <div class="content-wrapper">
        <div class="container-full">
            <section class="content">

                <div class="row">

                    <div class="col-12">
                        <div class="box">

                            <div class="box-header">
                                <h4 class="box-title">Edit User</h4>
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col">

                                        <form method="post" action="{{ route('profile.store') }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-12">


                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <h5>User Name <span class="text-danger">*</span></h5>
                                                                <div class="controls">
                                                                    <input type="text" name="name" class="form-control"
                                                                        required="" value={{ $user->name }}>
                                                                </div>                                                        
                                                            </div>
                                                        </div><!-- End Col Md-6 -->
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <h5>User Email <span class="text-danger">*</span></h5>
                                                                <div class="controls">
                                                                    <input type="email" name="email" class="form-control"
                                                                        required="" value={{ $user->email }}>
                                                                </div>
                                                            </div>
                                                        </div> <!-- End Col Md-6 -->
                                                    </div> <!-- End Row -->
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <h5>User Mobile <span class="text-danger">*</span></h5>
                                                                <div class="controls">
                                                                    <input type="text" name="mobile" class="form-control"
                                                                        required="" value={{ $user->mobile }}>
                                                                </div>                                                        
                                                            </div>
                                                        </div><!-- End Col Md-6 -->
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <h5>User Address<span class="text-danger">*</span></h5>
                                                                <div class="controls">
                                                                    <input type="address" name="address" class="form-control"
                                                                        required="" value={{ $user->address }}>
                                                                </div>
                                                            </div>
                                                        </div> <!-- End Col Md-6 -->
                                                    </div> <!-- End Row -->
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <h5>User Role <span class="text-danger">*</span></h5>
                                                                <div class="controls">
                                                                    <select name="gender" id="gender" required=""
                                                                        class="form-control">
                                                                        <option value="" selected="" disabled="">User Gender
                                                                        </option>
                                                                        <option value="Male" {{ $user->gender == "Male" ? "selected": ""}}>Male</option>
                                                                        <option value="Female" {{ $user->gender == "Female" ? "selected": ""}}>Female</option>
                                                                        <option value="Other" {{$user->gender == "Other" ? "selected": ""}}>Other </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div> <!-- End Col Md-6 -->

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <h5>Profile Image <span class="text-danger">*</span></h5>
                                                                <div class="controls">
                                                                <input type="file" name="image" class="form-control" id="image" >  </div>
                                                             </div>

                                                             <div class="form-group">
                                                                <h5>Profile Image <span class="text-danger">*</span></h5>
                                                                <div class="controls">
                                                                    <img id="showImage" src="{{ (!empty($user->image))? url('upload/user_images/'.$user->image):url('upload/no_image.jpg') }}" style="width: 100px; width: 100px; border: 1px solid #000000;">         
                                                                </div>
                                                             </div>

                                                        </div><!-- End Col Md-6 -->


                                                    </div> <!-- End Row -->

                                                    <div class="text-xs-right">
                                                        <input type="submit" class="btn btn-rounded btn-info mb-5"
                                                            value="Update">
                                                    </div>
                                        </form>

                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
            </section>

        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#image').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
