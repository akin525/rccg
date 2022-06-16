@include('layouts.sidebar')
<div class="row">
    <div class="col-xl-12 col-xxl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Minister Uploading</h4>
            </div>
            <div class="card-body">
                <form action="{{route('minis')}}" method="post"  class="step-form-horizontal" enctype="multipart/form-data">
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
                        <h4>Upload Both Picture & Name</h4>
                        <section>
                            <div class="row">

                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">Image 1*</label>
                                        <input type="file" name="picture" class="form-control" placeholder="Parsley" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*"  required>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">Name</label>
                                        <textarea type="text" name="name" class="form-control"  placeholder="Rccg Title" required >
                                                </textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">Image 2*</label>
                                        <input type="file" name="picture1" class="form-control" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*"  placeholder="Montana" >
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">Name</label>
                                        <textarea type="text" name="name1" class="form-control"  placeholder="Rccg Title" required >
                                                </textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">Image 3*</label>
                                        <input type="file" name="picture2" class="form-control" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*"  placeholder="Montana" >
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">Name</label>
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
