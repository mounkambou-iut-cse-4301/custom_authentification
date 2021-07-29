<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <title>Register</title>
  </head>
  <body>
    <div class="container">
      <div class="row mt-5 d-flex justify-content-center">
        <div class="col-md-4 ">
          <h4 class="text-center">Register | Custom Auth</h4><hr>
          <form action="" methode="post">
          <div class="mb-3">
              <label for="name" class="form-label fw-bold">Name</label>
              <input type="name" class="form-control" id="name" placeholder="name">
           </div>
           <div class="mb-3">
              <label for="email" class="form-label fw-bold">Email address</label>
              <input type="email" class="form-control" id="email" placeholder="name@example.com">
           </div>
           <div class="mb-3">
              <label for="password" class="form-label fw-bold">Password</label>
              <input type="password" class="form-control" id="password" placeholder="password">
           </div>
           <div class="mb-3">
            <button type="submit" class="btn btn-primary w-100 ">Sign Up</button>
           </div>
          </form>
          <a href=""> I already have an account, sign in</a>
        </div>
      </div>
    </div>



    <!-- Bootstrap Bundle with Popper -->
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

  </body>
</html>