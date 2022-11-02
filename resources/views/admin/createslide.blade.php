@extends('admin.layout.sidebar')
@section('content')
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card gradient-dark-grey">
                <div class="card-header">
                    <div class="card-title">Create Slide</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="product-block">
                                <div class="product-title">Slide</div>
                                <div class="product-body">
                                    <div class="row gutters">
                                        <form action="{{route('postslide')}}" method="post">
                                            <x-jet-validation-errors class="alert alert-danger" />
                                            @csrf
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="mb-3 control-dark"><label class="form-label">
                                                    Header<span class="text-red">*</span></label><input
                                                    type="text" class="form-control" name="header"
                                                    placeholder="Enter user name"></div>
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
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="mb-3 control-dark"><label class="form-label">Body<span class="text-red">*</span></label><textarea
                                                    rows="4" class="form-control"
                                                    placeholder="Enter Content" name="body"></textarea></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="custom-btn-group flex-end">
                                <button type="submit" class="btn btn-success">Create</button></div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('admin/vendor/dropzone/dropzone.min.js')}}"></script>

@endsection
