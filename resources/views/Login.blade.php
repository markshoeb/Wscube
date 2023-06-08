<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style>
    .required label::after{
      content:" *";
      color: red;
    }

  </style>
  </head>
  <body class="bg-dark">
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
    <form action="{{url('/')}}/customer" method="post">
     @csrf
    <div class="container mt-4 card p-3 bg-white">
     <h1 class="text-center text-primary">Login</h1>
     <div class="row">
      <div class="form-group col-md-6 required">
        <label>Name:</label>
        <input type="text" name="name" id="" class="form-control" value="{{old('name')}}">
        <span class='text-danger'>
          @error('name')
           {{$message}}
          @enderror
        </span>
      </div>
      <div class="form-group col-md-6 required">
        <label>Email:</label>
        <input type="email" name="email" id="" class="form-control" value="{{old('email')}}">
        <span class='text-danger'>
          @error('email')
          {{$message}}
          @enderror
        </span>
    
      </div>
     </div>
     <div class="row">
     <div class="form-group col-md-6 required">
        <label>Password:</label>
        <input type="password" name="password" id="" class="form-control">
        <span class='text-danger'>
          @error('password')
          {{$message}}
          @enderror
        </span>
      </div>
      <div class="form-group col-md-6 required">
        <label>Confirm Password:</label>
        <input type="password" name="password_confirmation" id="" class="form-control">
        <span class='text-danger'>
          @error('password_confirmation')
          {{$message}}
          @enderror
        </span>
       </div>
      <!-- </div>   
       <div class="row">
           <div class="form-group col-md-6">
        <label>Country:</label>
        <input type="text" name="country" id="" class="form-control"/>
        <span class='text-danger'>
         
        </span>
      </div>
       <div class="form-group col-md-6">
        <label>State:</label>
        <input type="text" name="state" id="" class="form-control" />
        <span class='text-danger'>
          
        </span>
      </div>
       </div>  
       <div class="row">
      <div class="form-group col-md-12">
        <label>Address:</label>
        <input type="text" name="address" id="" class="form-control">
        <span class='text-danger'>
         
        </span>
      </div>
      
     </div>  
     <div class="row">
       <div class="form-group col-md-6">
        <label>Gender:</label><br>
        
        <input type="radio" name="gender" id="" value="M" class="">  <span>Male</span>

        <input type="radio" name="gender" id="" value="F" class="">  <span>Female</span>
        
        <input type="radio" name="gender" id="" value="O" class="">  <span>Other</span>
        <span class='text-danger'>
          
        </span> 
      </div>
      <div class="form-group col-md-6">
        <label>Date:</label>
        <input type="date" name="dob" id="" class="form-control"/>
        <span class='text-danger'>
          @error('dob')
          {{$message}}
          @enderror
        </span>
      </div>
      </div> -->
          <button class="btn btn-primary">Submit</button>
    </div>
</form>
</body>
</html>