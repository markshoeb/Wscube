<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid bg-dark">
        <div class="container">
            <nav class="navbar navbar-expand-sm">
            <a class="navbar-brand" href="{{url('/')}}" style="color:white">WsCube Tech</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
            data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="flase" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav  mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/')}}" style="color:white">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/register')}}" style="color:white">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/customer/create')}}" style="color:white">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/customer/view')}}" style="color:white">Customer</a>
                    </li>
                </ul>
            </div>
            </nav>
        </div>
       </div>     
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>DOB</th>
                    <th>State</th>
                    <th>Country</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($customers as $value)
                <tr>
                    <td>{{$value->name}}</td>
                    <td>{{$value->email}}</td>
                    <td>
                        @if($value->gender == "M")
                        Male
                        @elseif($value->gender == "F")
                        Female
                        @else
                        Other
                        @endif
                    </td>
                    <td>{{$value->dob}}</td>
                    <td>{{$value->state}}</td>
                    <td>{{$value->country}}</td>
                    <td>
                        @if($value->status == "1")
                        Active
                        @else
                        Inactive
                        @endif
                    </td>
                </tr>
                @endforeach 
                
            </tbody>
        </table>  
    
  </body>
</html>