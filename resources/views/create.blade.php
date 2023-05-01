<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
     <title>Document</title>
     <style>
         span{
            color:red;
         }
        </style>
</head>
<body>
<div class="container">
 
    <form class="mt-5" method="post" action="{{ route('store') }}" enctype="multipart/form-data">
    @csrf
        <div class="row">
    <div class="col-md-4 mb-3">
     <label for="">Firstname</label>
     <input type="text" name="firstname" class="form-control" placeholder="firstname">
     <span>
        @error('firstname')
          {{$message}}
        @enderror
     </span>
    </div>
    
    
    <div class="col-md-4 mb-3">
        <label for="">Last name</label>
        <input type="text" name="lastname" class="form-control" placeholder="lastname">
        <span>
            @error('lastname')
              {{$message}}
            @enderror
         </span>
       </div>
    
    <div class="col-md-4 mb-3">
        <label for="">Username</label>
        <input type="text" name="username" class="form-control" placeholder="username">
        <span>
            @error('username')
              {{$message}}
            @enderror
         </span>
    </div>
    </div>

    <div class="row">
        <div class="col-md-5 mb-3">
         <label for="">Image</label>
         <input type="file" name="image" class="form-control" value="">
         <span>
            @error('image')
              {{$message}}
            @enderror
         </span>
        </div>
        
        <div class="col-md-7 mb-3">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control" placeholder="email">
            <span>
                @error('email')
                  {{$message}}
                @enderror
             </span>
           </div>
        
        
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
         <label for="">Password</label>
         <input type="password" name="password" class="form-control" placeholder="password">
         <span>
            @error('password')
              {{$message}}
            @enderror
         </span>
        </div>
        
        <div class="col-md-6 mb-3">
            <label for="">Confirm password</label>
            <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password">
            <span>
                @error('')
                  {{$message}}
                @enderror
             </span>
           </div>
    </div>

    <div class="row">
        <div class="col-md-12 mb-3">
         <label for="">Address</label>
         <input type="text" name="address" class="form-control" placeholder="address">
         <span>
            @error('address')
              {{$message}}
            @enderror
         </span>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 mb-3">
         <label for="">City</label>
         <input type="text" name="city" class="form-control" placeholder="city">
         <span>
            @error('city')
              {{$message}}
            @enderror
         </span>
        </div>
        <div class="col-md-4 mb-3">
            <label for="">State</label>
            <input type="text" name="state" class="form-control" placeholder="state">
            <span>
                @error('state')
                  {{$message}}
                @enderror
             </span>
           </div>
        <div class="col-md-4 mb-3">
            <label for="">Zip</label>
            <input type="text" name="zip" class="form-control" placeholder="zip">
            <span>
                @error('zip')
                  {{$message}}
                @enderror
             </span>
        </div>
    </div>
    <div class="form-group">
      <div class="form-check">
        <input class="form-check-input" name="checkbox" type="checkbox">
        <label class="form-check-label">
         Agree to terms and conditions
        </label>
        <div class="invalid-feedback">
          you must agree before submitting
        </div>
    </div>
</div>
<button class="btn btn-primary mt-3" type="submit">Submit form</button>

    </form>
</div>
</body>
</html>