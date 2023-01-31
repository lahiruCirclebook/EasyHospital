<!doctype html>
<html lang="en">
@include('home.home_layout.appHome')

<head>

</head>
<style>
    body {
        height: 100vh;
    }

    label {
        color: white;
    }
</style>

<body style="background-image: url('assets/images/layouts/bitti.jpg');background-size: cover;height: 100vh;">

    <div class="container-fluid">
        <div class="account-pages my-3 pt-sm-5">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-xs-12 col-sm-6 col-lg-6 col-xl-5 col-xxl-5">
                        <div class="card overflow-hidden ">

                            <div class="card-body pt-0"
                                style="background-image: url('assets/images/layouts/leli.jpg');background-size: cover;height:fit-content;">

                                <div class="p-3">
                                    <div class="p-2">
                                        @if ($errors->any())
                                            <div class="container">
                                                <div class="alert alert-danger" name="alert">
                                                    {{ $errors->first() }}
                                                </div>
                                            </div>
                                        @endif
                                        <form action="{{ url('registered') }}" method="post"
                                            enctype="multipart/form-data">
                                            {{ csrf_field() }}

                                            <div class="mb-3">
                                                <label for="name" class="form-label">Name</label>
                                                <input type="text" class="form-control" id="name"
                                                    placeholder="Enter Name" name="name" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="email"
                                                    placeholder="Enter Email" name="email" required>
                                            </div>

                                            <div class="mb-3">
                                                <label for="email" class="form-label">Role</label>
                                                <input type="text" class="form-control" id="role"
                                                    placeholder="Enter Role" name="role">
                                            </div>

                                            <div class="mb-3">
                                                <label for="email" class="form-label">Contact Number</label>
                                                <input type="number" class="form-control" id="contact"
                                                    placeholder="Enter Contact Number" name="contact"
                                                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                    maxlength="10" required>
                                            </div>


                                            <div class="mb-3">
                                                <label class="form-label">Password</label>
                                                <div class="input-group auth-pass-inputgroup">
                                                    <input type="password" class="form-control"
                                                        placeholder="Enter password" aria-label="Password"
                                                        aria-describedby="password-addon" name="password"
                                                        id="password">
                                                    <button class="btn btn-light" onclick="toggle()" type="button"
                                                        id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                                </div>
                                            </div>



                                            <div class="modal-footer">
                                                <button class="btn btn-primary waves-effect waves-light"
                                                    type="submit">Register
                                                </button>

                                                <a href="{{ url('/') }}"
                                                    class="btn btn-danger waves-effect waves-light">
                                                    To
                                                    Login
                                                </a>
                                            </div>

                                        </form>
                                    </div>

                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- end account-pages -->



</body>

<script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');

    togglePassword.addEventListener('click', function(e) {
        // toggle the type attribute
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        // toggle the eye slash icon

    });
</script>
<script>
    var state = false;

    function toggle() {
        if (state) {
            document.getElementById("password").setAttribute("type", "password");
            state = false;
        } else {
            document.getElementById("password").setAttribute("type", "text");
            state = true;
        }
    }
</script>

</html>
