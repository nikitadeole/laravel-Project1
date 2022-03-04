@extends('admin.admin_master')
@section('content-index')
    <div class="content-wrapper">
        <div class="container-full">
            <section class="content">

                <div class="row">

                    <div class="col-12">
                        <div class="box">

                            <div class="box-header">
                                <h4 class="box-title">Add User</h4>
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col">

                                        <form method="post" action="{{ route('user.store') }}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-12">


                                                    <div class="row">
                                                        <div class="col-md-6">

                                                            <div class="form-group">
                                                                <h5>User Role <span class="text-danger">*</span></h5>
                                                                <div class="controls">
                                                                    <select name="usertype" id="usertype" required=""
                                                                        class="form-control">
                                                                        <option value="" selected="" disabled="">Select Role
                                                                        </option>
                                                                        <option value="Admin">Admin</option>
                                                                        <option value="Operator">Operator</option>
                                                                        <option value="Operator">Subscriber </option>

                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div> <!-- End Col Md-6 -->

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <h5>User Name <span class="text-danger">*</span></h5>
                                                                <div class="controls">
                                                                    <input type="text" name="name" class="form-control"
                                                                        required="">
                                                                </div>

                                                            </div>

                                                        </div><!-- End Col Md-6 -->


                                                    </div> <!-- End Row -->



                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <h5>User Email <span class="text-danger">*</span></h5>
                                                                <div class="controls">
                                                                    <input type="email" name="email" class="form-control"
                                                                        required="">
                                                                </div>
                                                            </div>
                                                        </div> <!-- End Col Md-6 -->

                                                        <div class="col-md-6">
                                                            <div class="controls">
                                                                <h5>Password<span class="text-danger">*</span></h5>
                                                                <input type="password" name="password" class="form-control" required="" data-validation-required-message="This field is required" aria-invalid="false"> 
                                                                <div class="help-block"></div>
                                                            </div>
                                                        </div><!-- End Col Md-6 -->


                                                    </div> <!-- End Row -->




                                                    <div class="text-xs-right">
                                                        <input type="submit" class="btn btn-rounded btn-info mb-5"
                                                            value="Submit">
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
@endsection
