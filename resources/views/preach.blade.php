@include('layouts.sidebar')
<div class="row">
    <div class="col-xl-12 col-xxl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Word of GOD</h4>
            </div>
            <div class="card-body">
                <form action="{{route('pre')}}" method="post"  class="step-form-horizontal" enctype="multipart/form-data">
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
{{--                        <h4></h4>--}}
                        <section>
                            <div class="row">

                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">Tittle</label>
                                        <input type="text" name="topic" class="form-control" placeholder="Parsley"  required>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">Minister Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Parsley"  required/>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">Audio File</label>
                                        <input type="file" name="audio" class="form-control" placeholder="Parsley"  required/>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">Minister Picture</label>
                                        <input type="file" name="picture" class="form-control" placeholder="Parsley"  required/>
                                    </div>
                                </div>
                                    <div class="form-group">
                                        <label class="text-label">Content</label>
                                        <textarea type="text" name="contents" class="summernote" placeholder="Parsley"  required>

                                            </textarea>
                                    </div>

                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </section>
                    </div>
                </form>
            </div>


            <script src="{{asset('user/vendor/summernote/js/summernote.min.js')}}"></script>

            <script src="{{asset('user/js/plugins-init/summernote-init.js')}}"></script>
