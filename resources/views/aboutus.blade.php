@php
    $id = session('id');
    $role = session('role');
@endphp
@if (empty($id))
@else
    @include('layouts.app')

    @include('layouts.appStyles')

    <head>


    </head>


    <body>
        <div class="wrapper ">
            <div class="main-panel">
                @include('layouts.header')
                <div class="content">
                    <div class="container">
                        <br><br>

                        <div class="heading">
                            <span class="icon-logo"><img src="assets/images/layouts/medical6.jpg" style="width: 10%"
                                    alt="#"></span><br>
                            <h2>The Specialist Clinic</h2><br>
                        </div>
                        <!-- end title -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="message-box">
                                    <h4>What We Do</h4>
                                    <h2>Clinic Service</h2><br>
                                    <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis
                                        vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>
                                    <p style="background-color: #DDDDDD; border-radius: 5px; padding:10px"> Integer
                                        rutrum ligula eu
                                        dignissim laoreet.
                                        Pellentesque venenatis nibh sed
                                        tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis
                                        natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem
                                        ipsum dolor sit amet consectetur adipisicing elit. Est labore sapiente, tempore
                                        ducimus optio provident dolorem minima odio similique autem culpa quos ex neque
                                        ea laborum officia assumenda pariatur ipsam aspernatur suscipit distinctio
                                        quibusdam aliquam blanditiis! Blanditiis quaerat tenetur, corporis consequuntur
                                        temporibus facilis optio explicabo harum beatae fugit quasi nostrum ipsum?

                                    </p>
                                </div>
                                <!-- end messagebox -->
                            </div>
                            <!-- end col -->
                            <div class="col-md-6">
                                <div class="post-media wow fadeIn" style="margin-top: -60px">
                                    <img src="assets/images/layouts/oluwa.jpg" style="width: 100%" alt=""
                                        class="img-responsive">
                                    <a href="" data-rel="prettyPhoto[gal]" class="playbutton"><i
                                            class="flaticon-play-button"></i></a>
                                </div>
                                <!-- end media -->
                            </div>
                            <!-- end col -->
                        </div>


                    </div>
                    @include('layouts.footer')
                </div>
            </div>
    </body>

    </html>
@endif
