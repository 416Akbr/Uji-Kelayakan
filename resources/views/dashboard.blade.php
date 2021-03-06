<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="csrf-token" content="{{ csrf_token() }}">
<!--Bootsrap 4 CDN-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 
<link rel="stylesheet" type="text/css" href="{{url('style.css')}}">
</head>
<body>
  <div class="col-md-9 col-lg-8 mx-auto" style="padding: 100px;">
    <h3 class="login-heading mb-4">Dashboard!</h3>
    <div class="card">
      <div class="card-body">
        Welcome {{ ucfirst(Auth()->user()->name) }}
       </div>
    </div>
  </div>
</body>
</html>