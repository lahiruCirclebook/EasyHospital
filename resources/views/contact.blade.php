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
        .no-outline:focus {
            outline: none;
        }
    </style>

    <body>
        <div class="wrapper ">
            <div class="main-panel">
                @include('layouts.header')
                <div class="content">
                    <div class="container">
                        <br>
                        <center>
                            <div class="heading">
                                <span class="icon-logo"><img src="assets/images/layouts/medical6.jpg" style="width: 10%"
                                        alt="#"></span>
                                <h2>Get in Touch</h2>
                            </div><br>
                        </center>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="card overflow-hidden" style="border: none">
                                    <div class="card-body pt-0">
                                        <div class="p-2">
                                            <div class="p-2">
                                                @if ($errors->any())
                                                    <div class="container">
                                                        <div class="alert alert-danger" name="alert">
                                                            {{ $errors->first() }}
                                                        </div>
                                                    </div>
                                                @endif
                                                <form action="" method="post" enctype="multipart/form-data">
                                                    {{ csrf_field() }}

                                                    <div class="mb-3">

                                                        <input type="text" class="form-control no-outline"
                                                            id="name" placeholder="Name" name="name"
                                                            style="border-top-style: none; border-right-style:none; border-left-style:none"
                                                            required>
                                                    </div>


                                                    <div class="mb-3">

                                                        <input type="email" class="form-control no-outline"
                                                            id="email" placeholder="Email" name="email"
                                                            style="border-top-style: none; border-right-style:none; border-left-style:none"
                                                            required>
                                                    </div>

                                                    <div class="mb-3">
                                                        <input type="number" class="form-control no-outline"
                                                            id="phone" placeholder="Contact Number" name="phone"
                                                            style="border-top-style: none; border-right-style:none; border-left-style:none"
                                                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                            maxlength="10" required>
                                                    </div>

                                                    <div class="mb-3">
                                                        <input type="text" class="form-control no-outline"
                                                            id="subject" placeholder="Subject" name="subject"
                                                            style="border-top-style: none; border-right-style:none; border-left-style:none"
                                                            required>
                                                    </div>

                                                    <div class="mb-3">
                                                        <textarea name="massage" class="form-control no-outline" id="massage" cols="30" rows="3"
                                                            placeholder="Massage" style="border-top-style: none; border-right-style:none; border-left-style:none" required></textarea>
                                                    </div>





                                                    <div class="mt-3 d-grid">
                                                        <button class="btn btn-primary waves-effect waves-light"
                                                            type="submit">Submit
                                                        </button>
                                                    </div>


                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-6" style="background-color: #404258">

                            </div>

                        </div>

                    </div> <br>
                    @include('layouts.footer')
                </div>
            </div>
    </body>

    </html>
@else
    @include('layouts.noUser')
@endif
