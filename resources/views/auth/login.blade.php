<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
      <div class="row mt-5 d-flex justify-content-center">
        <div class="col-md-4 ">
          <h4 class="text-center">Login | Custom Auth</h4><hr>
          <form action="{{route('auth.check')}}" method="post">
          @if(Session::get('fail'))
               <div class="alert alert-danger">
                 {{Session::get('fail')}} 
               </div>
              @endif
            @csrf
           <div class="mb-3">
              <label for="email" class="form-label fw-bold">Email address</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" value="{{old('email')}}">
              <span class="text-danger">@error('email'){{$message}} @enderror</span>
           </div>
           <div class="mb-3">
              <label for="password" class="form-label fw-bold">Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="password">
              <span class="text-danger">@error('password'){{$message}} @enderror</span>
           </div>
           <div class="mb-3">
            <button type="submit" class="btn btn-primary w-100 ">Sign in</button>
           </div>
          </form>
          <a href="{{route('auth.register')}}"> I don't have an account, ceate new</a>
        </div>
      </div>
    </div>



    <!-- Bootstrap Bundle with Popper -->
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

  </body>
</html>