<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>create an data</title>

        <!-- Fonts -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/create_pro.css" rel="stylesheet">
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
      
<form action = "/create" method = "post">
  @csrf
<article id="story" class="card story">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
<h2 class="judul" style="margin-bottom: 20px;" id="history">Input Your Profile</h2>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Name">Name</label>
      <input type="text" class="form-control" placeholder="name_user" name="name">
    </div>
    <div class="form-group col-md-6">
      <label for="Email">Email</label>
      <input type="email" class="form-control" placeholder="email_user" name="email">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Age">Age</label>
      <input type="number" class="form-control" placeholder="age_user" name="age">
    </div>
    <div class="form-group col-md-6">
      <label for="Phone">Phone</label>
      <input type="text" class="form-control" placeholder="phone_user" name="phone">
    </div>
  </div>

  <button type="submit" class="site-btn btn-primary" value="Add profile">Submit</button>
  <a class="site-btn" href="{{ url('/') }}">Cancel</a>
</form>
        </article>

</body>
</html>