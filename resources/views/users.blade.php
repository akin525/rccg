@include('layouts.sidebar')
        <div class="row">
            <div class="col-xl-12 col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Form step</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('up')}}" method="post"  class="step-form-horizontal" enctype="multipart/form-data">
                            @csrf
                            <div>
                                @if (session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                @if (session('error'))
                                    <div class="alert alert-danger">
                                        {{ session('error') }}
                                    </div>
                                @endif
                                <h4>Personal Info</h4>
                                <section>
                                    <div class="row">

                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Image 1*</label>
                                                <input type="file" name="logo" class="form-control" placeholder="Parsley" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*"  required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Title</label>
                                                <textarea type="text" name="name" class="form-control"  placeholder="Rccg Title" required >
                                                </textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Image 2*</label>
                                                <input type="file" name="logo1" class="form-control" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*"  placeholder="Montana" >
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Title</label>
                                                <textarea type="text" name="name1" class="form-control"  placeholder="Rccg Title" required >
                                                </textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Image 3*</label>
                                                <input type="file" name="logo2" class="form-control" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*"  placeholder="Montana" >
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Title</label>
                                                <textarea type="text" name="name2" class="form-control"  placeholder="Rccg Title" required >
                                                </textarea>
                                            </div>
                                        </div>

                                    </div>
                                    <button type="submit" class="btn btn-success ">Submit</button>
                                </section>
                        </form>
                    </div>
                </div>
            </div>
        </div>
{{--<div class="col-12">--}}
{{--    <div class="card">--}}
{{--        <div class="card-header">--}}
{{--            <h4 class="card-title">Gallery Images</h4>--}}
{{--        </div>--}}
{{--        <div class="card-body">--}}
{{--            <div class="table-responsive">--}}
{{--                <table id="example3" class="display" style="min-width: 845px">--}}
{{--                    <thead>--}}
{{--                    <tr>--}}
{{--                        <th>Name</th>--}}
{{--                        <th>Title</th>--}}
{{--                        <th>Action</th>--}}
{{--                    </tr>--}}
{{--                    </thead>--}}
{{--                    <tbody>--}}
{{--                    @foreach($pam as $mv)--}}
{{--                    <tr>--}}
{{--                        <td><img class="rounded-circle" width="35" src="{{asset('storage/img').'/'.$mv->path}}" alt=""></td>--}}
{{--                        <td>{{$mv->name}}</td>--}}
{{--                        <td>--}}
{{--                                <div class="d-flex">--}}
{{--                                    <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>--}}
{{--                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>--}}
{{--                                </div>--}}
{{--                            </td>--}}
{{--                    </tr>--}}
{{--                    @endforeach--}}
{{--                    </tbody>--}}
{{--                </table>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}



                        <script src="{{asset('user/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
                        <script src="{{asset('user/js/plugins-init/datatables.init.js')}}"></script>













