<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <title>Staff</title>
</head>

<body>
    <div class="container">
        <div class="row mt-5 d-flex justify-content-center">
            <div class="col-md-6 ">
            <h4 class="text-center">Staff</h4><hr>
                <table class="table table-success table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$data->name}}</td>
                            <td>{{$data->email}}</td>
                            <td><a href="{{route('auth.logout')}}" class="btn">Logout</a></td>
                        </tr>
                    </tbody>
                </table>

                <ul>
                    <li><a href="/admin/dashboard">Dasboard</a></li>
                    <li><a href="/admin/staff">Staff</a></li>
                    <li><a href="/admin/settings">Settings</a></li>
                    <li><a href="/admin/profile">Profile</a></li>
                </ul>
            </div>
        </div>
    </div>



    <!-- Bootstrap Bundle with Popper -->
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>