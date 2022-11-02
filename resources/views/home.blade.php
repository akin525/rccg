@extends("layouts.header")

@section('content')

    <!-- ***** Main Banner Area Start ***** -->
    <section class="section main-banner" id="top" data-section="section1">
        <video autoplay muted loop id="bg-video">
            <source src="images/back.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="caption">
                            <br>
                            <br>
                            <h6>HELLO PEOPLE OF PRAISE</h6>
                            <h2>Welcome to Rccg Christ Chapel</h2>
                            <h6>ABOUT GOD: Ps. 33:6-9</h6>
                            <p>As revealed unto us by the Bible, we believe that there is only one God, Who is the Creator of both visible and invisible creatures -Gen. 1:1; Ps. 86:9-10; Is. 43:10-11; John 1:1-3. Only God will be in existence forever. Ez. 3:14; in God every creature receives life -John 5:26.</p>
                            <div class="main-button-red">
                                <div class="scroll-to-section"><a href="#contact">Join Us Now!</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Main Banner Area End ***** -->
    <br>
    <br>
    <br>
    <br>
    <section class="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-service-item owl-carousel">
                        @foreach($slide as $s)
                        <div class="item">
                            <div class="icon">
                                <img src="images/service-icon-01.png" alt="">
                            </div>
                            <div class="down-content">
                                <h4>{{$s['head']}}</h4>
                                <p>{{$s['body']}}</p>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="upcoming-meetings" id="meetings">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Messages</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories">
                        <h4>Programs</h4>
                        <ul style="list-style-type:square">
                            <li><a href="#">Sunday School</a></li>
                            <li><a href="#">Sunday Service </a></li>
                            <li><a href="#">Bible Study</a></li>
                            <li><a href="#">Faith Clinic</a></li>
                            <li><a href="#">Holy Ghost Party With Christ</a></li>
                        </ul>
                        <div class="main-button-red">
                            <a href="#">All Gallary</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        @foreach($pe as $sa)
                        <div class="col-lg-6">
                            <div class="meeting-item">
                                <div class="thumb">
                                    <div class="price">
                                        <span>   </span>
                                    </div>
                                    <a href="#"><img src="{{url('/', $sa->picture)}}" alt="New Lecturer Meeting"></a>
                                </div>
                                <div class="down-content">
                                    <div class="date">
                                        <h6>{{$sa->date}}</h6>
                                    </div>
                                    <a href="#"><h4>{{$sa->topic}}</h4></a>
                                    <a href="#"><h4>By:{{$sa->preacher}}</h4></a>
                                   <button type="button" class="btn btn-outline-success">Read more</button>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
    </section>

    <section class="apply-now" id="apply">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="item">
                                <h3>PAYMENT OF FIRST FRUIT: <h3>Secret of Overwhelming blessing</h3> </h3>
                                <p>The Bible is replete with virtually inexhaustible provisions for Man’s comfort here on earth and in eternity. The oldest singular limitation is Man’s refusal to simply obey the WORD of GOD. 3 John 2 for instance reaffirmed God’s persistent intention and plan for man: Beloved, I wish above all things that thou mayest prosper and be in health, even as thy soul prosperity. However, God not wanting to appear to man as a Dictator, grants man the freewill to enjoy virtually endless benefits ONLY on the condition of total obedience, to the giver of these benefits -The Almighty GOD.</p>
                                <div class="main-button-red">
                                    <div class="scroll-to-section"><a href="#contact">Join Us Now!</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="item">
                                <h3>ABOUT GOD: <p>Ps. 33:6-9</p> </h3>
                                <p>As revealed unto us by the Bible, we believe that there is only one God, Who is the Creator of both visible and invisible creatures -Gen. 1:1; Ps. 86:9-10; Is. 43:10-11; John 1:1-3. Only God will be in existence forever. Ez. 3:14; in God every creature receives life -John 5:26.</p>
                                <div class="main-button-yellow">
                                    <div class="scroll-to-section"><a href="#contact">Join Us Now!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="accordions is-first-expanded">
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>REPENTANCE UNTO GOD</span>
                                <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>Repentance is the sorrow of a godly man for his sins with decision to abstain from them – Acts 3:19; 20:21; II Cor. 7:10; Mark 1:15; Is. 55:7; II Chron. 7:14; Ezek. 18:21. </p>
                                </div>
                            </div>
                        </article>
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>About RCF ILA-ORANGUN</span>
                                <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>The fellowship, The Redeemed Christian Fellowship (RCF) people of praise started in the year 1988 on 21st of May and registered in the school that is the Osun State College of Education, Ila Orangun ( formerly Oyo State College of Education) on 20th June, 1990.
                                        Then at comprised of 9 executives of the students in the institution. As at that time fellowship is still in main church of The Redeemed Christian Church of God, Victory Parish.
                                        Bro. Tanimonu Kunle then became the president in the year 1994/95 session with total number of 28 people, later 6 of them were sent forth same year. They came up with the vision of moving the fellowship to have their personal Sunday service, however the main church then stood against it and also place a pastor on them then in RCCG, Victory Parish Opadina. After that they still move on to Igbonnibi Town Hall and then to cooperative and so on. With all these the population got increased to 85 and he (Bro.Tanimonu) left the leadership position with over 100people.
                                        After that another set come up with getting a land for the fellowship in the year getting a land for the fellowship in the year 2003, within January and February, that time they were in unique Nursery and Primary School in which they only held Sunday Service and the weekly service somewhere else. That Very Sunday they were sent out from the place, they move to the new land bought, pray on it and start working on it by making Bamboo for the construction at that time the person that led the team was Bro. Gabriel (Drama Coordinator) and sis. Kemi Adeyoye (Sister Coordinator) without any instrument.
                                        The Bamboo house begin to transformed to this great house in the year 2005 with the foundation by house in the year 2005 with zonal pastor. And the work is going gradually until what we see today.</p>
                                </div>
                            </div>
                        </article>
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>THE CHURCH OF GOD</span>
                                <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>The born-again souls are called the Church of God – Eph. 1:22; Col. 1:1-18; Eph 3:10; 5:24-29. The assembly of the believers, the sanctified souls in Christ Jesus, Those who we call the Holy people of God – I Cor. 1:2; Acts 14:23; Phil. 4:15; Acts 13:28. Therefore all that God has called to gather together in a place and fed with the Word of God – Acts 2:41-47; They accept Christ as the head of the Church. They gather from time to time to worship God in truth and Spirit to share the bread and eat. Their major assignment is to spread the Gospel of Christ to all Nations – Matt. 28:19.</p>
                                </div>
                            </div>
                        </article>
                        <article class="accordion last-accordion">
                            <div class="accordion-head">
                                <span>THE SECOND COMING OF CHRIST</span>
                                <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>The Second coming of Jesus Christ will be in physical form and will be visible to all in like manner as He was seen ascending up to heavens – Acts 1:9-11; John 14:3. His return will be in two stages: A. Christ’s return in the sky – The Saints or Bride of Christ will be raptured to meet Christ in the sky – I Thess. 4:15-17; I Cor. 15:51-52; Matt. 24:40-44; Matt 25:10 B. His return to the earth – He will return to the earth to judge the sinners and the ungodly – Rev. 19:19-21; II Thess. 1:7-10; Jude 1:14-15; Zech. 14:3-4.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-courses" id="courses">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>DEPARTMENT IN RCF</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="owl-courses-item owl-carousel">
                        <div class="item">
                            <img src="images/course-01.jpg" alt="Course One">
                            <div class="down-content">
                                <h4>Prayer unit member</h4>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-8">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="col-4">
                                            <span>   </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/course-02.jpg" alt="Course Two">
                            <div class="down-content">
                                <h4>Bible study unit member </h4>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-8">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="col-4">
                                            <span>   </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/course-03.jpg" alt="">
                            <div class="down-content">
                                <h4>Ushering unit member</h4>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-8">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="col-4">
                                            <span>   </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/course-04.jpg" alt="">
                            <div class="down-content">
                                <h4>Media unit member</h4>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-8">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="col-4">
                                            <span>   </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/course-01.jpg" alt="">
                            <div class="down-content">
                                <h4>organzing unit member</h4>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-8">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="col-4">
                                            <span>   </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/course-02.jpg" alt="">
                            <div class="down-content">
                                <h4>Protocol Unit member</h4>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-8">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="col-4">
                                            <span>   </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/course-03.jpg" alt="">
                            <div class="down-content">
                                <h4>Evangelism unit member</h4>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-8">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="col-4">
                                            <span>   </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/course-04.jpg" alt="">
                            <div class="down-content">
                                <h4>Choir unit Member </h4>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-8">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="col-4">
                                            <span>   </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/course-01.jpg" alt="">
                            <div class="down-content">
                                <h4>Drama unit member </h4>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-8">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="col-4">
                                            <span>   </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/course-02.jpg" alt="">
                            <div class="down-content">
                                <h4>Welfare unit member</h4>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-8">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="col-4">
                                            <span>   </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/course-03.jpg" alt="">
                            <div class="down-content">
                                <h4>Publicity unit member</h4>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-8">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="col-4">
                                            <span>   </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/course-04.jpg" alt="">
                            <div class="down-content">
                                <h4>Fellow-up unit member</h4>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-8">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="col-4">
                                            <span>   </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-facts">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2>A Few Facts About RCF ILA-ORANGUN</h2>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-12">
                                    <div class="count-area-content percentage">
                                        <div class="count-digit">90</div>
                                        <div class="count-title">Succesed Programs</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="count-area-content">
                                        <div class="count-digit">43</div>
                                        <div class="count-title">Current workers</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-12">
                                    <div class="count-area-content new-students">
                                        <div class="count-digit">150</div>
                                        <div class="count-title">Members</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="count-area-content">
                                        <div class="count-digit">10</div>
                                        <div class="count-title">Awards</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="video">
                        <a href="https://www.facebook.com/rcf.ilaorangun/videos/2764936793801027" target="_blank"><img src="images/play-icon.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-us" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 align-self-center">
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="contact" action="" method="post">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2>Let's get in touch</h2>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <input name="name" type="text" id="name" placeholder="YOURNAME...*" required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="YOUR EMAIL..." required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <input name="subject" type="text" id="subject" placeholder="SUBJECT...*" required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <textarea name="message" type="text" class="form-control" id="message" placeholder="YOUR MESSAGE..." required=""></textarea>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <button type="submit" id="form-submit" class="button">SEND MESSAGE NOW</button>
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="right-info">
                        <ul>
                            <li>
                                <h6>Phone Number</h6>
                                <span>08143054462</span>
                            </li>
                            <li>
                                <h6>Email Address</h6>
                                <span>rcfila@gmail.com</span>
                            </li>
                            <li>
                                <h6>Street Address</h6>
                                <span>No1,Counselor Abiodun Area, ila-orangun </span>
                            </li>
                            <li>
                                <h6>Website URL</h6>
                                <span>www.rcfila.com.ng</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>





@include('layouts.footer')
@endsection
