@include('layouts.header')
<br>
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Blog</h2>
            <ol>
                <li><a href="index.html">Home</a></li>
                <li>Blog</li>
            </ol>
        </div>

    </div>
</section><!-- End Breadcrumbs -->
<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

        <div class="row">
            <div class="col-lg-8 entries">
                @foreach($pe as $dap)
                <article class="entry">

                    <div class="entry-img">
                        <img src="{{asset('storage/preach').'/'.$dap->picture}}" alt="" class="img-fluid">
                    </div>

                    <h2 class="entry-title">
                        <a href="#">{{$dap->topic}}</a>
                    </h2>

                    <div class="entry-meta">
                        <ul>
                            <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#">{{$dap->preacher}}</a></li>
                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="{{$dap->date}}">{{$dap->date}}</time></a></li>
                            <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="#">12 Comments</a></li>
                        </ul>
                    </div>

                    <div class="entry-content">
                        <p>

                           </p>
                        <div class="read-more">
                            <a href="{{route('read-more',$dap->id)}}">Read More</a>
                        </div>
                    </div>

                </article><!-- End blog entry -->
                    @endforeach
                    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

                    <!-- Scripts -->
                    <script src="{{ mix('js/app.js') }}" defer></script>
                {{$pe->links()}}
                    <div class="blog-pagination">
                        <ul class="justify-content-center">

                        </ul>
                    </div>

            </div>
            <div class="col-lg-4">

                <div class="sidebar">

                    <h3 class="sidebar-title">Search</h3>
                    <div class="sidebar-item search-form">
                        <form action="">
                            <input type="text">
                            <button type="submit"><i class="bi bi-search"></i></button>
                        </form>
                    </div><!-- End sidebar search formn-->

                    <h3 class="sidebar-title">Recent Posts</h3>
                    @foreach($v as $da)

                    <div class="sidebar-item recent-posts">
                        <div class="post-item clearfix">
                            <img src="{{asset('storage/preach').'/'.$da->picture}}" alt="">
                            <h4><a href="{{route('read-more',$da->id)}}">{{$da->topic}}</a></h4>
                            <time datetime="2020-01-01">{{$da->date}}</time>
                        </div>
                        @endforeach


                    </div><!-- End sidebar recent posts-->

                    <h3 class="sidebar-title">Tags</h3>
                    <div class="sidebar-item tags">
                        <ul>
                            <li><a href="#">App</a></li>
                            <li><a href="#">IT</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Mac</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Office</a></li>
                            <li><a href="#">Creative</a></li>
                            <li><a href="#">Studio</a></li>
                            <li><a href="#">Smart</a></li>
                            <li><a href="#">Tips</a></li>
                            <li><a href="#">Marketing</a></li>
                        </ul>
                    </div><!-- End sidebar tags-->

                </div><!-- End sidebar -->

            </div><!-- End blog sidebar -->

        </div>

    </div>
</section>

@include('layouts.footer')

