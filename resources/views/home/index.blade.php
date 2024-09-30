@extends('layouts.master')
@section('content')
    {{-- slider_area_start --}}
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1">
            <div class="container">

                @foreach ($intros as $intro)

                    <div class="row align-items-center position-relative">
                        <div class="col-lg-9">
                            <div class="slider_text">
                                <h3>{{ $intro->intro }}<br>
                                    <span style="font-size: 41px;">{{ $intro->designation }}</span>
                                </h3>
                                <a class="boxed-btn3-line" href="{{  $intro->link }}" target="_blank" >View Works</a>
                            </div>
                        </div>
                        <div class="my_img d-none d-lg-block">
                            <img src="{{ asset($intro->image) }}" alt=""
                                style="width: 100%; height: 520px; border-radius: 185px; border-bottom: 5px solid #d67e35;">
                        </div>
                    </div>

                @endforeach

            </div>
        </div>
    </div>
    {{-- slider_area_end --}}


    {{-- About me start --}}
    <div class="download_area" id="about">
        <div class="container">
            @foreach ($about as $about)

            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title" style="margin-bottom: 12px;">
                        <h5 style="color: #bbb; font-weight: 300;">Who I Am?</h5>
                        <h3>{{$about->title}}</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="download_left">
                        <p>{{ $about->long_para }}</p>
                        <p>{{ $about->short_para }}</p>

                        <a href="{{ $about->cv_link }}"
                            class="boxed-btn3-line" target="_blank">Download CV</a>

                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 col-md-6">
                    <div class="progress_skills">
                        <div class="single_progress">
                            <div class="label d-flex justify-content-between">
                                <span>PHP, Laravel</span>
                                <span>90%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar " role="progressbar" style="width: 90%" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="single_progress">
                            <div class="label d-flex justify-content-between">
                                <span>JavaScript</span>
                                <span>70%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar " role="progressbar" style="width: 70%" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="single_progress">
                            <div class="label d-flex justify-content-between">
                                <span>Bootstrap, Tailwind CSS</span>
                                <span>95%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <!-- <div class="single_progress">
                                <div class="label d-flex justify-content-between">
                                    <span>Interaction design</span>
                                    <span>45%</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 45%" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div> -->
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
    {{-- About me end --}}


    {{-- Service start --}}
    <div class="service_area" id="services">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-50 text-center">
                        <h5 style="color: #bbb; font-weight: 300;">What I Do?</h5>
                        <h3>My Services</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_service text-center">
                        <div class="icon">
                            <img src="{{ asset('img/svg_icon/1.svg') }}" alt="">
                        </div>
                        <h3>
                            Web & Mobile Design
                        </h3>
                        <p>Sed eleifend sed nibh nec fringilla. Donec eu cursus sem vitae tristique ante ibero</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service text-center">
                        <div class="icon">
                            <img src="{{ asset('img/svg_icon/3.svg') }}" alt="">
                        </div>
                        <h3>
                            Frontend Development
                        </h3>
                        <p>Sed eleifend sed nibh nec fringilla. Donec eu cursus sem vitae tristique ante ibero</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service text-center">
                        <div class="icon">
                            <img src="{{ asset('img/svg_icon/2.svg') }}" alt="">
                        </div>
                        <h3>
                            Backend Development
                        </h3>
                        <p>Sed eleifend sed nibh nec fringilla. Donec eu cursus sem vitae tristique ante ibero</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Service end --}}


    {{-- Portfolio gallery start --}}
    <div class="gallery_area" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-50 text-center">
                        <h5 style="color: #bbb; font-weight: 300;">What I Did?</h5>
                        <h3>My Portfolio</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="single_gallery">
                                <div class="thumb">
                                    <img src="img/gallery/1.png" alt="">
                                </div>
                                <div class="gallery_heading">
                                    <span>Mobile App</span>
                                    <a href="works_details.html">
                                        <h4>Colorlib App Project</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="single_gallery">
                                <div class="thumb">
                                    <img src="img/gallery/2.png" alt="">
                                </div>
                                <div class="gallery_heading">
                                    <span>Mobile App</span>
                                    <a href="works_details.html">
                                        <h4>Colorlib App Project</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="single_gallery">
                                <div class="thumb">
                                    <img src="img/gallery/3.png" alt="">
                                </div>
                                <div class="gallery_heading">
                                    <span>Mobile App</span>
                                    <a href="works_details.html">
                                        <h4>Colorlib App Project</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="single_gallery">
                                <div class="thumb">
                                    <img src="img/gallery/4.png" alt="">
                                </div>
                                <div class="gallery_heading">
                                    <span>Mobile App</span>
                                    <a href="works_details.html">
                                        <h4>Colorlib App Project</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="more_works">
                                <a class="boxed-btn3-line" href="#">More Works</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Portfolio gallery end --}}


    {{-- testimonial area start --}}
    <div class="testimonial_area" id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-50 text-center">
                        <h5 style="color: #bbb; font-weight: 300;">What Clients say?</h5>
                        <h3>Clients Testimonial</h3>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_carousel">
                            <div class="row">
                                <div class="col-xl-9 col-md-9">
                                    <div class="single_testmonial">
                                        <p>“I just wanted to share a quick note and let you know that you guys do a really
                                            good job. I'm glad I decided to work with you. It's really great how easy your
                                            websites are to update and manage. I never have any problem at all."
                                        </p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                <img src="{{ asset('img/testimonial/jamal_vai.jpg')}}" alt="" style="width: 70px; border-radius:50%;">
                                            </div>
                                            <div class="author_name">
                                                <h3>Jamal Ahmed</h3>
                                                <span>Business Owner</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="row">
                                <div class="col-xl-9 col-md-9">
                                    <div class="single_testmonial">
                                        <p>“There are many variations of passages of Lorem Ipsum available, but the
                                            majority
                                            have suffered alteration in some form by injected humour or randomised words
                                            which don’t look even slightly believable. If you are going to use a
                                            passage.
                                        </p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                <img src="img/testimonial/client.png" alt="">
                                            </div>
                                            <div class="author_name">
                                                <h3>Kalvin Piterson</h3>
                                                <span>Business Owner</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- testimonial area end --}}
@endsection
