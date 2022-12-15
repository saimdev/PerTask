<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous"
        />
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"
        ></script>
        <script src="{{asset('/app.js')}}"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="{{asset('/cutie.css')}}">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Satisfy&display=swap" rel="stylesheet">
        <title>PerTask - Teacher Dashboard</title>
    </head>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: "Poppins", sans-serif;
            /* background:#1b1b1b ; */
        }

        body {
            background: #1b1b1b;
            height: 100vh;
        }

        a:hover {
            outline: none;
            border: 1.5px solid #3e28ac;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.4s ease;
            color: white;
            background: #3e28ac;
        }

        input:focus {
            border: none !important;
            box-shadow: none !important;
        }
    </style>

    <script src="{{asset('/cutie.js')}}"></script>

    <body>
        <div class="container-fluid bg-dark vh-100">
            <div class="container-fluid p-3 d-flex flex-column">
                <div class="row w-100 d-flex align-items-center">
                    <div class="col col-4">
                        <h3 class="fw-bold mx-2">
                            <span class="fw-bold h3 text-primary"
                                >PER-</span
                            >TASK
                        </h3>
                    </div>
                    <div class="col col-5"></div>
                </div>
                <div class="row w-100 d-flex">
                    <div class="col col-4 d-flex flex-column align-items-start px-4 py-3">
                        <a href="/analytics" class="d-flex flex-row align-items-center justify-content-center menu-items my-4"><img src="{{asset('/imgs/logos/home.svg')}}" alt=""> Analytics</a>
                        <a href="/teacherstable" class="d-flex flex-row align-items-center justify-content-center menu-items my-3"><img src="{{asset('/imgs/logos/users-alt.svg')}}" alt=""> Students Management</a>
                        <a href="/studentstable" class="d-flex flex-row align-items-center justify-content-center menu-items my-4"><img src="{{asset('/imgs/logos/edit.svg')}}" alt=""> Teachers Management</a>
                        <a href="/projectstable" class="d-flex flex-row align-items-center justify-content-center menu-items my-4"><img src="{{asset('/imgs/users/Saim_Abbas.jpg')}}" alt="" style="border-radius: 100px; width: 30px; height:30px;"> Projects Management</a>
                        <a href="/adminlogout" class="d-flex flex-row align-items-center justify-content-center menu-items my-3"><img src="{{asset('/imgs/logos/sign-out-alt.svg')}}" alt=""> Logout</a>
                    </div>
                    <div class="col col-8 p-4 my-2" style="background: black; border-radius: 3rem 0 3rem 0">
                        <h1 class="h1 fw-bold">Admin Panel</h1>
                        <div class="mt-4 d-flex justify-content-center flex-wrap">
                            <div class="d-flex align-items-center flex-column m-2">
                                <h3 class="text-primary">Total Teachers</h3>
                                <label for="">{{$teacherscount}}</label>
                            </div>
                            <div class="d-flex align-items-center flex-column m-2">
                                <h3 class="text-primary">Total Students</h3>
                                <label for="">{{$studentscount}}</label>
                            </div>
                        </div>
                    </div>

                    </div>
                </div>
            </div>
    </body>
</html>
