@php
    $id = session('id');
    $role = session('role');
@endphp
@if (!empty($id))
    @include('layouts.app')

    @include('layouts.appStyles')

    <head>


    </head>

    <style>
        .dev-list .widget h3 {
            display: inline-block;
            font-size: 20px;
            line-height: 1 !important;
            margin: 0 !important;
            padding: 15px 20px;
            position: relative;
            top: -25px;
        }

        .dev-list .widget small {
            display: block;
            margin: -15px 0 -5px;
            font-size: 16px;
        }

        .dev-list .widget img {
            width: 50%;
        }

        .dev-list .widget {
            background-color: #ffffff;
            padding: 15px;
        }

        .dev-list .widget h3 {
            display: inline-block;
            font-size: 18px;
            line-height: 1 !important;
            margin: 0 !important;
            padding: 4px 10px;
            position: relative;
            top: -12px;
            background-color: #20262E;
            color: white
        }

        .dev-list .widget small {
            display: block;
            margin: -10px 0 5px;
        }
    </style>

    <body>
        <div class="wrapper ">
            <div class="main-panel">
                @include('layouts.header')
                <div class="content">
                    <div class="container">

                        <center>
                            <div class="heading">
                                <span class="icon-logo mt-2"><img src="assets/images/layouts/medical6.jpg" alt="#"
                                        style="width: 150px; height:120px;"></span>
                                <h2 style="color: black">A QUICK DEFINITION FOR HORROR FILMS
                                </h2>
                            </div>
                        </center>



                        <div class="row dev-list text-center">

                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn"data-wow-duration="1s"
                                data-wow-delay="0.2s"
                                style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeIn;">
                                <div class="widget clearfix mt-2">
                                    <a href="https://search.library.dartmouth.edu/discovery/fulldisplay?context=L&vid=01DCL_INST:01DCL&docid=alma991011959439705706"
                                        target="_blank"><img src="assets/images/layouts/h1.jpg" alt=""
                                            class="img-responsive img-rounded">
                                        <div class="widget-title">
                                            <h3>The A-Z of horror films by Howard Maxford</h3>
                                            <small><b> Call Number: Baker-Berry PN 1995.9 .H6 M3245 1997
                                                    ISBN: 9780253211071</b></small>
                                        </div>
                                    </a>

                                    <!-- end title -->
                                    <p>The complete inside guide to the horror movie, from its beginnings in the
                                        early...

                                    </p>

                                    <div class="footer-social">
                                        <a href="#" class="btn grd1"><i class="fa fa-facebook"></i></a>

                                    </div>
                                </div>
                                <!--widget -->
                            </div><!-- end col -->

                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn"data-wow-duration="1s"
                                data-wow-delay="0.2s"
                                style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeIn;">
                                <div class="widget clearfix mt-2">
                                    <a href="https://search.library.dartmouth.edu/discovery/fulldisplay?context=L&vid=01DCL_INST:01DCL&docid=alma991000535479705706"
                                        target="_blank"><img src="assets/images/layouts/h2.jpg" alt=""
                                            class="img-responsive img-rounded">
                                        <div class="widget-title">
                                            <h3>American silent horror by John T. Soister and Henry Nicolella </h3>
                                            <small><b> Call Number: Baker-Berry PN 1995.9 .H6 S6195 2012 v. 1-2
                                                    ISBN: 9780786435814</b></small>
                                        </div>
                                    </a>

                                    <!-- end title -->
                                    <p>During the Silent Era, when most films dealt with dramatic or comedic takes on
                                        the boy...
                                    </p>

                                    <div class="footer-social">
                                        <a href="#" class="btn grd1" style="margin-top: 20px"><i
                                                class="fa fa-facebook"></i></a>

                                    </div>
                                </div>
                                <!--widget -->
                            </div><!-- end col -->


                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn"data-wow-duration="1s"
                                data-wow-delay="0.2s"
                                style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeIn;">
                                <div class="widget clearfix mt-2">
                                    <a href="https://search.library.dartmouth.edu/discovery/fulldisplay?context=L&vid=01DCL_INST:01DCL&docid=alma991012293619705706"
                                        target="_blank"><img src="assets/images/layouts/h3.jpg" alt=""
                                            class="img-responsive img-rounded">
                                        <div class="widget-title">
                                            <h3>The BFI companion to horror by Kim Newman, ed.</h3>
                                            <small><b> Call Number: Baker-Berry PN 1995.9 .H6 B5 1996
                                                    ISBN: 9780304332168</b></small>
                                        </div>
                                    </a>

                                    <!-- end title -->
                                    <p>Focusing primarily on the cinema, but encompassing literature, television,
                                        radio..

                                    </p>

                                    <div class="footer-social">
                                        <a href="#" class="btn grd1" style="margin-top: 20px"><i
                                                class="fa fa-facebook"></i></a>

                                    </div>
                                </div>
                                <!--widget -->
                            </div><!-- end col -->


                        </div><!-- end row -->

                    </div>
                    @include('layouts.footer')
                </div>
            </div>
    </body>

    </html>
@else
    @include('layouts.noUser')
@endif
