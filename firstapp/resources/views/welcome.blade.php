<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>home</title>
        <link href="css/video.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/add_profile.css" rel="stylesheet">
        <!-- <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>  -->
        <title>profile data</title>
        <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
   

        <style>
            /* body {
                font-family: 'Nunito', sans-serif;
            }
            table, thead, tbody, th, td {
                border:1px solid black;    
            }
            table {
                width: 100%;
            }
            button {
                margin-left=50%;
            } */
        </style>
<header>
    <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand">		
				<img src="video/LogoVN.png" alt="IF Comic Logo" href="#";>
			</a>
    <form class="d-flex">
    <button class="btn btn-outline-success" type="submit">
    <a id="logoutnav" class="nav-link text-uppercase black" href="{{url('/newData')}}">
      <b>Add Data</b></a></button>
      <div class="col-sm-4">
    </form>
  </div>
</nav>
</header> 
    <div class="video_wrap" >
        <div class="overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
          <source src="Video/bg1.mp4" type="video/mp4">
        </video>
        <div class="container h-100">
          <div class="d-flex h-100 text-center align-items-center">
            <div class="w-100 text-white">
              <h1 class="display-3">Add Profiles</h1>
              <p class="lead mb-0">Add, Update and delete your Profiles here</p>
            </div>
          </div>
        </div>
    </div> 
    </head>
    <body >
    <div class="table-responsive" style="background-color: #E5E5E5;">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Profil<b> Data</b></h2></div>
                    <div class="col-sm-4">
                        <button type="button" class="btn btn-info add-new"><a style="text-decoration: none; color: white;" href="{{ url('/newData') }}" >Add New data</a></button>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#ID</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($read as $r)
                    <tr>
                        <td>{{$r->id}}</td>
                        <td>{{$r->name}}</td>
                        <td>{{$r->age}}</td>
                        <td>{{$r->phone}}</td>
                        <td>{{$r->email}}</td>
                        <td>
                            <a class="edit" title="Edit" data-toggle="tooltip" href="{{url('/')}}/update/{{$r->id}}"><i class="material-icons">&#xE254;</i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip" href="{{url('/')}}/delete/{{$r->id}}"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>     

        <!-- @foreach($read as $r)
        <center>
            <h1> {{$r->name}} Profile</h1>
            <p>my name is  {{$r->name}} </P></br>
            <p>my email is {{$r->email}} </p></br>
            <p> my number phone is {{$r->phone}}</p></br>
            <p> my age is {{$r->age}}</p></br>
            <button> update </button>&nbsp<button> delete </button>&nbsp<button> create </button>
        </center>
        @endforeach -->
        <!-- <h1>Profile</h1>
            <table>
            <thead>
            <tr>
                <th>Name</th>
                <th>phone</th>
                <th>age</th>
                <th>button</th>
            @foreach($read as $r)
            </tr>
            <tbody>
                <tr>
                <td>{{$r->name}}</td>
                  <td>{{$r->phone}}</td>
                  <td>{{$r->age}}</td>
                  <td><center><button> update </button>&nbsp<button> delete </button>&nbsp<center></td>
                </tr>
            @endforeach
            </tbody> -->
    </body>
    <footer>
        </br>
		<center><p>VN &#169; 2022 All Rights Reserved </p></center>
	 </footer>
<script href="/public/js/bootstrap.bundle.min.js"></script>
</html>
