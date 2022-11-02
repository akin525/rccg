@extends('admin.layout.sidebar')
@section('content')
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card gradient-dark-grey">
                <div class="card-header">
                    <div class="card-title">Add New Admin</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="product-block">
                                <div class="product-title">Admin Details</div>
                                <div class="product-body">
                                    <div class="row gutters">
                                        <x-jet-validation-errors class="alert alert-danger" />
                                        <form action="{{route('creat-admin')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="mb-3 control-dark"><label class="form-label">
                                                    Name<span class="text-red">*</span></label><input
                                                    type="text" class="form-control" name="name"
                                                    placeholder="Enter user name"></div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="mb-3 control-dark"><label class="form-label">
                                                    Email<span class="text-red">*</span></label><input
                                                    type="email" class="form-control" name="email"
                                                    placeholder="Enter user email address"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="product-block">
                                <div class="product-title">Others</div>
                                <div class="product-body">
                                    <div class="row gutters">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="mb-3 control-dark"><label class="form-label">
                                                    password<span class="text-red">*</span></label><input
                                                    type="password" class="form-control" name="password"
                                                    placeholder="Enter Sermon Topic"></div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="mb-3 control-dark"><label class="form-label">
                                                    Number<span class="text-red">*</span></label><input
                                                    type="number" class="form-control" name="number"
                                                    placeholder="Enter phone number"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="custom-btn-group flex-end">
                                <button type="submit" class="btn btn-success">Add User</button></div>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('vendor/dropzone/dropzone.min.js')}}"></script>

@endsection
