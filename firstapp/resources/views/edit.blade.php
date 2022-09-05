<!DOCTYPE html>


<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Edit an data</title>

        <!-- Fonts -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/create_pro.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Styles -->
        

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .button_subdel {
                display: flex;
                flex-wrap: wrap;
                margin-left: 2%;
            }
        </style>
    </head>
    <body>

<form action="/updateData" method = "post">
@csrf
@foreach($read as $r)
<div id="story" class="card story"> 
<h2 class="judul" style="margin-bottom: 20px;" id="history">Edit Your Profile</h2>
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="Name">ID</label>
      <input type="number" class="form-control" placeholder="ID" name="id" value="{{ $r->id }}" readonly>
    </div>
    <div class="form-group col-md-6">
      <label for="Email">Encrypted Password</label>
      <input type="password" class="form-control" name="password" placeholder="password" value="{{ $r->password }}" readonly>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Name">Name</label>
      <input type="text" class="form-control" placeholder="Name" name="name" value="{{ $r->name }}">
    </div>
    <div class="form-group col-md-6">
      <label for="Email">Email</label>
      <input type="email" class="form-control" placeholder="Email" name="email" value="{{ $r->email }}">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Age">Age</label>
      <input type="number" class="form-control" placeholder="Age" name="age" value="{{ $r->age }}">
    </div>
    <div class="form-group col-md-6">
      <label for="Phone">Phone</label>
      <input type="text" class="form-control" placeholder="Phone" name="phone" value="{{ $r->phone }}">
    </div>
  </div>
  <button class="site-btn btn-primary">Update</button>
  @endforeach
</form>
          </div>

</body>
</html>
