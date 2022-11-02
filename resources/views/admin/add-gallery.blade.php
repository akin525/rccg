@extends('admin.layout.sidebar')
@section('content')
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card gradient-dark-grey">
                <div class="card-header">
                    <div class="card-title">Gallery</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="product-block">
                                <div class="product-title">Add Gallery</div>
                                <x-jet-validation-errors class="alert alert-danger" />
                                <form action="{{route('postgallery')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                <div class="product-body">
                                    <div class="row gutters">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="mb-3 control-dark"><label class="form-label">
                                                    Image A<span class=text-red">*</span></label><input
                                                    type="file" class="form-control" name="image"
                                                    placeholder="Enter Minister Name"></div>
                                        </div>
                                        <div class="row gutters">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="mb-3 control-dark"><label class="form-label">About  <span class="text-red">*</span></label><textarea
                                                        rows="4" class="form-control"
                                                        placeholder="Enter Meta Description" name="name"></textarea></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="product-block">
{{--                                <div class="product-title">Add Minister 2</div>--}}
                                <div class="product-body">
                                    <div class="row gutters">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="mb-3 control-dark"><label class="form-label">
                                                    Image B<span class=text-red">*</span></label><input
                                                    type="file" class="form-control" name="image1"
                                                    placeholder="Enter Minister Name"></div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="mb-3 control-dark"><label class="form-label">About  <span class="text-red">*</span></label><textarea
                                                    rows="4" class="form-control"
                                                    placeholder="Enter Meta Description" name="name1"></textarea></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="custom-btn-group flex-end">
                                <button type="submit" class="btn btn-success">Upload</button></div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('admin/vendor/dropzone/dropzone.min.js')}}"></script>

@endsection
