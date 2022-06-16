@include('layouts.sided')
<button type="button" onclick="window.location='{{route('sermon')}}'"  class="btn btn-success text-center">Back to Post</button>
<br>
<br>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-3 ">

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade show active" id="first">
                                <img class="img-fluid" width="500" src="{{asset('storage/preach').'/'.$mo->picture}}" alt="">
                            </div>

                        </div>

                    </div>

                    <div class="col-xl-9 col-sm-12">
                        <div class="product-detail-content">

                            <div class="new-arrival-content pr">
                                <h4>Topic: {{$mo->topic}}</h4>
                                <div class="star-rating mb-2">
                                    <span class="review-text">Date: {{$mo->date}}</span><a class="product-review" href="#"></a>
                                </div>
                                <p class="price">By: {{$mo->preacher}}</p>
                                <p>Contents:<span class="item"><i class="fa fa-book"></i></span>
                                </p>
                                <div class="card">
                                    <div class="card-body">
                                <p class="text-content">{!! $mo->content !!}</p>
                                    </div>
                                </div>

{{--                                <div class="col-2 px-0">--}}
{{--                                    <input type="number" name="num" class="form-control input-btn input-number" value="1">--}}
{{--                                </div>--}}

{{--                                <div class="shopping-cart mt-3">--}}
{{--                                    <a class="btn btn-primary btn-lg" href="#"><i class="fa fa-shopping-basket mr-2"></i>Add--}}
{{--                                        to cart</a>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


