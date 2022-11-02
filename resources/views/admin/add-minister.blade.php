@extends('admin.layout.sidebar')
@section('content')
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card gradient-dark-grey">
                <div class="card-header">
                    <div class="card-title">Add Minister</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="product-block">
                                <div class="product-title">Add Minister 1</div>
                                <x-jet-validation-errors class="alert alert-danger" />
                                <form action="{{route('post-minister')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                <div class="product-body">
                                    <div class="row gutters">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="mb-3 control-dark"><label class="form-label">
                                                    Name <span class=text-red">*</span></label><input
                                                    type="text" class="form-control" name="name"
                                                    placeholder="Enter Minister Name"></div>
                                        </div>
                                        <div class="mb-3 control-dark"><label class="form-label">Minister Image <span class="text-red">*</span></label>
                                                <input type="file" name="picture" >
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
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="mb-3 control-dark"><label class="form-label">About  <span class="text-red">*</span></label><textarea
                                                    rows="4" class="form-control"
                                                    placeholder="Enter Meta Description" name="body"></textarea></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="custom-btn-group flex-end">
                                <button type="submit" class="btn btn-success">Add Minister</button>></div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row gutters">
        <div class="colxxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card gradient-dark-grey">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table m-0">
                            <thead>
                            <tr>
                                <th>Minister Name</th>
                                <th>Minister Picture</th>
                                <th>Body</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($min as $mis)
                            <tr>
                                <td>{{$mis['name']}}</td>
                                <td><img width="50" src="{{url('/', $mis['picture'])}}"></td>
                                    <td>{{$mis['body']}}</td>
                                <td>
                                    <div class="actions"><a href="#" class="viewRow" data-bs-toggle="modal"
                                                            data-bs-target="#viewRow"><i
                                                class="icon-notes text-muted"></i></a><a href="#"
                                                                                         class="deleteRow"><i
                                                class="icon-delete_outline text-red"></i></a></div>
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
    <script src="{{asset('vendor/dropzone/dropzone.min.js')}}"></script>

@endsection
