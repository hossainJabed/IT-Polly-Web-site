@extends('frontend.master')

@section('title')
    Contact page
@endsection
@section('body')
    <!-- MAP start -->
    <!-- MAP start -->
    <section class="map">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="card-body p-0">

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.9659478645713!2d90.38955761469431!3d23.748593684590265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8bd051e281d%3A0x2a076c2c7c306931!2z4KaV4KeHIOCmj-CmuCDgpqjgp4fgpp_gppPgpq_gprzgpr7gprDgp43gppUg4Kay4Ka_4Kau4Ka_4Kaf4KeH4Kah!5e0!3m2!1sbn!2sbd!4v1681032863044!5m2!1sbn!2sbd"
                    style="width: 100%; height: 500px;" allowfullscreen="">
                    </iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- MAP End -->
    <!-- from start -->
    <section class="from">
        <div class="container">
            <div class="container mt-100 mt-60">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0 order-2 order-md-1">
                        <div class="card custom-form rounded border-0 shadow p-4">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Your Name <span class="text-danger">*</span></label>
                                        <div class="form-icon">
                                            <i class="fa-regular fa-user"></i>
                                            <input name="name" id="name" type="text" class="form-control ps-5"
                                                   placeholder="Name :">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Your Email <span class="text-danger">*</span></label>
                                        <div class="form-icon">
                                            <i class="fa-regular fa-envelope"></i>
                                            <input name="email" id="email" type="email" class="form-control ps-5"
                                                   placeholder="Email :">
                                        </div>
                                    </div>
                                </div><!--end col-->

                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label">Phone</label>
                                        <div class="form-icon">
                                            <i class="fa-solid fa-phone"></i>
                                            <input name="phone" id="phone" type="phone" class="form-control ps-5"
                                                   placeholder="phone:">
                                        </div>
                                    </div>
                                </div><!--end col-->
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label">Comments <span class="text-danger">*</span></label>
                                        <div class="form-icon">

                                            <textarea name="content" id="content" rows="4" class="form-control ps-5"
                                                      placeholder="Message :"></textarea>
                                        </div>
                                    </div>

                                    <br>

                                </div>
                                <div class="col-12 mt-4 pt-2 text-center ">
                                    <a href="notice" class="btn btn-primary">See All Notices <i
                                            class="fa-solid fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--end custom-form-->
                    </div>

                    <div class="col-lg-7 col-md-6 order-1 order-md-2">
                        <div class="title-heading ms-lg-4">
                            <h4 class="mb-4">Contact Details</h4>
                            <div class="d-flex contact-detail align-items-center mt-3">
                                <div class="icon">
                                    <i class="fa-regular fa-envelope me-2"></i>
                                </div>
                                <div class="flex-1 content">
                                    <h6 class="title fw-bold mb-0">Email</h6>
                                    <a href="#" class="text-primary">info@itpollybd.org</a><br>

                                </div>
                            </div>

                            <div class="d-flex contact-detail align-items-center mt-3">
                                <div class="icon">
                                    <i class="fa-solid fa-phone me-2"></i>
                                </div>
                                <div class="flex-1 content">
                                    <h6 class="title fw-bold mb-0">Phone</h6>
                                    <a href="#" class="text-primary">+88 01916569000</a>, <a
                                        href="#" class="text-primary">+88 01617916193</a><br>
                                </div>
                            </div>

                            <div class="d-flex contact-detail align-items-center mt-3">
                                <div class="icon">
                                    <i class="fa-solid fa-location-dot me-2"></i>
                                </div>
                                <div class="flex-1 content">
                                    <h6 class="title fw-bold mb-0">Location</h6>
                                    <a href="#"
                                       data-type="iframe" class="video-play-icon text-primary lightbox">11/7/G Free School St, ঢাকা 1205</a><br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div><!--end row-->
            </div>
        </div>
    </section>
    <!-- from End -->



@endsection
