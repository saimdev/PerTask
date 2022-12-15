<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>PerTask - Student Signup</title>
        <!-- <link rel="stylesheet" href="styles.css" /> -->
        <link
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
          crossorigin="anonymous"
        />
        <link rel="stylesheet" href="{{asset('/cutie.css')}}">
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
          href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
          rel="stylesheet"
        />
      </head>

    <style>
    * {
        margin: 0;
        padding: 0;
        font-family: "Poppins", sans-serif;
    }

    body {
        background-repeat: no-repeat;
        background-size: cover;
        height: 100vh;
        background:black;
    }

    input:focus {
        border: 1px solid #f9efaa !important;
        box-shadow: none !important;
    }

    input[type="checkbox"]:focus {
        border: 1px solid #294b61 !important;
    }
</style>
      <body class="container-fluid">
        <!-- <div class="bg-image bgimg"  style="background-image: url('loginbg.jpg');
        height: 100vh; width: 80%;"> 
        </div> -->
        <div class="navbar">
          <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand text-white" href="/">
              <strong style="color:#3e28ac;">PER-</strong>TASK
            </a>
            <a href="tsignup" class="text-decoration-none" style="color:#3e28ac;">Teacher Signup</a>
          </div>
        </div>
        <div class="row mt-3">
          <div class="row">
            <h1 class="display-5 fw-normal text-center text-white">
              STUDENT SIGNUP
            </h1>
          </div>
          <div class="row justify-content-center text-white">
            <div
              class="col col-6 pt-5 pb-5 rounded-4"
              style="
                backdrop-filter: blur(15px) saturate(100%);
                background: #1b1b1b;
                padding-left: 6%;
                padding-right: 6%;
              "
            >
              <form action="stuSignup" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <h4 class="fw-normal">Sign up</h4>
                  <div
                    id="emailHelp"
                    class="form-text fs-7 mt-3"
                    style="color: F8F8F8"
                  >
                    Signup to create your account
                  </div>
                  <div class="row">
                      <div class="col-4">
                        <input
                        name="fname"
                        type="text"
                        class="form-control bg-transparent mt-4 p-2 rounded-2"
                        id="exampleInputEmail1"
                        aria-describedby="emailHelp"
                        placeholder="First Name"
                        style="color: #f9efaa;"
                        required
                      />
                      </div>
                      <div class="col">
                        <input
                        name="lname"
                        type="text"
                        class="form-control bg-transparent mt-4 p-2 rounded-2"
                        id="exampleInputEmail1"
                        aria-describedby="emailHelp"
                        placeholder="Last Name"
                        style="color: #f9efaa;"
                        required
                      />
                      </div>
                  </div>
                </div>
                <div class="mb-3">
                  <input
                    name="email"
                    type="email"
                    class="form-control bg-transparent p-2  rounded-2"
                    id="exampleInputPassword1"
                    placeholder="Email Address"
                    style="color: #f9efaa;"
                    required
                  />
                </div>
                <div class="mb-3">
                  <input
                    name="registeration"
                    type="text"
                    class="form-control bg-transparent p-2  rounded-2"
                    id="exampleInputPassword1"
                    placeholder="Enter Registration Number"
                    style="color: #f9efaa;"
                    required
                  />
                </div>
                <div class="mb-3">
                  <input
                    name="section"
                    type="text"
                    class="form-control bg-transparent p-2  rounded-2"
                    id="exampleInputPassword1"
                    placeholder="Enter Section With Semester e.g 5B"
                    style="color: #f9efaa;"
                    required
                  />
                </div>
                <div class="mb-3">
                  <input
                    name="image"
                    type="file"
                    class="form-control bg-transparent p-2  rounded-2"
                    id="exampleInputPassword1"
                    style="color: #f9efaa;"
                    required
                  />
                </div>
                <div class="mb-3">
                    <input
                      name="password"
                      type="password"
                      class="form-control bg-transparent p-2  rounded-2"
                      id="exampleInputPassword1"
                      placeholder="Password"
                      style="color: #f9efaa;"
                      required
                    />
                  </div>
                <button
                  type="submit"
                  class="btn btn-primary w-100 border-0 p-2"
                  style="background:#3e28ac; color: #f9efaa;"
                >
                  Sign up
                </button>
                @if (session('name_email'))
                              <div class="alert alert-danger error-message text-center" style="padding:0;background: transparent; font-size:0.8rem; margin-bottom:0.5rem; margin-top:0.7rem; border:none; color:rgb(237, 73, 86)">{{ session('name_email') }}</div>
                @endif
                <div class="d-flex justify-content-center mt-3">
                    <label class="mx-1" for="" style="font-size: small;">Already have Account?</label>
                    <a href="stuLogin" class="text-decoration-none" style="font-size: small;"> Signin here</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </body>
</html>