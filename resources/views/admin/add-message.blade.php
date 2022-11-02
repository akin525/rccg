@extends('admin.layout.sidebar')
@section('content')
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card gradient-dark-grey">
                <div class="card-header">
                    <div class="card-title">Add Message</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="product-block">
                                <div class="product-title">Sermon</div>
                                <div class="product-body">
                                    <div class="row gutters">
                                        <x-jet-validation-errors class="alert alert-danger" />
                                        <form action="{{route('post-sermon')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="mb-3 control-dark"><label class="form-label">
                                                    Sermon Topic <span class="text-red">*</span></label><input
                                                    type="text" class="form-control" name="topic"
                                                    placeholder="Enter Sermon Topic"></div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="mb-3 control-dark"><label class="form-label">Messages<span class="text-red">*</span></label><textarea
                                                    rows="4" class="form-control"
                                                    placeholder="Enter Content" name="content"></textarea>
                                            </div>
                                        </div>
                                        <div class="mb-3 control-dark"><label class="form-label">Preacher Image<span class="text-red">*</span></label>
                                                <input type="file" name="image" >
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
                                            <div class="mb-3 control-dark"><label class="form-label">Bible Reading<span class="text-red">*</span></label><input
                                                    type="text" class="form-control" name="bible"
                                                    placeholder="Enter Bible Reading"></div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="mb-3 control-dark"><label class="form-label">Select Preacher<span class="text-red">*</span></label>
                                             <select name="preacher" class="form-control" >
                                                 @foreach($min as $mi)
                                                 <option value="{{$mi->name}}">{{$mi->name}}</option>
                                                 @endforeach
                                             </select>
                                        </div>
                                        <div class="mb-3 control-dark"><label class="form-label">Other Image <span class="text-red">*</span></label>
                                            <input type="file" name="image2" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="custom-btn-group flex-end">
                                <button type="submit" class="btn btn-success">Post Sermon</button></div>
                        </div>
                        </form>
                    </div>
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
                                <th>Preacher</th>
                                <th>Topic</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($mes as $mis)
                                <tr>
                                    <td><img width="30" src="{{url('/', $mis['picture'])}}">{{$mis['preacher']}}</td>
                                    <td>{{$mis['topic']}}</td>
                                    <td>{{$mis['date']}}</td>
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
