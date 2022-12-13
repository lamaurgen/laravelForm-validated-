<!doctype html>
<html lang="en">

<head>
  <title>Form</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <div class="container">

        <form action="{{url('/')}}/register " method="post">
            @csrf
             
            <h1>Registration</h1>
            <div class="mb-3">
              <label for="">Name</label>
              <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div class="form-text"></div> <span class="text-danger">
                @error('name')
                {{$message}}
                    
                @enderror
              </span>
            </div>
            <div class="mb-3">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div class="form-text"></div> <span class="text-danger">
                  @error('email')
                  {{$message}}
                      
                  @enderror
                </span>
              </div>
              <div class="mb-3">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div  class="form-text"></div> <span class="text-danger">
                  @error('password')
                  {{$message}}
                      
                  @enderror
                </span>
              </div>
              <div class="mb-3">
                <label for="">Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div  class="form-text"></div> <span class="text-danger">
                  @error('confirm_password')
                  {{$message}}
                      
                  @enderror
                </span>
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>

</body>

</html>