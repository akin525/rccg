@extends('admin.layout.sidebar')
@section('content')
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="row gutters">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card gradient-violet3 card-390">
                        <div class="card-body">
                            <div class="get-latest-updates-lg">
                                <div class="update-details"><h5>RCCG CHRIST CHAPEL<br>Administrator<br>
                                    </h5>
                                    <button type="button" class="download-btn lg" onclick="window.location='{{route('add-admin')}}'"><span class="icon"><img
                                                src="img/download-white.svg" alt="Download"></span>Add New Admin
                                    </button>
                                </div>
                                <img src="img/blocks2.svg"
                                     class="blocks-img animate__animated animate__pulse animate__infinite infinite"
                                     alt="Blocks"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card gradient-dark-grey">
                <div class="card-header">
                    <div class="card-title">Customers</div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table v-middle m-0">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{$user['name']}}</td>
                                <td>{{$user['email']}}</td>
                                <td>{{$user['created_at']}}</td>
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

@endsection
