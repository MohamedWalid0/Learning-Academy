<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DashBoard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>



    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <a class="navbar-brand" href="{{route('admin.homepage')}}">Navbar</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">


                <li class="nav-item">
                    <a class="nav-link" href="{{route('cats')}}">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('trainers')}}">Trainers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('courses')}}">Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('students')}}">Students</a>
                </li>


            </ul>
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">

                <li class="nav-item active">
                    <a class="nav-link" href="{{route('admin.logout')}}">Logout</a>
                </li>


            </ul>

        </div>
    </nav>


