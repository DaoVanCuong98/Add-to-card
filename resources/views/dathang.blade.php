<!DOCTYPE html>
<html>
<head>
    <title>Laravel </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body style="margin: 100px;">
<h1 style="text-align: center">Thông tin khách hàng</h1>
    @if($errors->any())
    <div class="alert alert-danger text-center">
        Vui long nhap lai du lieu
    </div>    
    @endif
    <form action="" method="post">
        @csrf
<div class="dathangg">

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter a name" name="name">
        @error('name')
        <span style="color:red">{{$message}}</span></br>
        @enderror    
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" placeholder="Enter a email" name="email">
        @error('email')
        <span style="color:red">{{$message}}</span></br>
        @enderror
    </div>
    <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" id="address" placeholder="Enter a address" name="address">
        @error('address')
        <span style="color:red">{{$message}}</span></br>
        @enderror
    </div>
    <div class="form-group">
        <label for="phone">Phone</label>
        <input type="text" class="form-control" id="phone" placeholder="Enter a phone" name="phone">
        @error('phone')
        <span style="color:red">{{$message}}</span></br>
        @enderror
    </div>

    <p><label for="note">Note:</label></p>
    <textarea type="text" name="note" class="form-control" rows="4" ></textarea>
</br>
    <div>
        <button type="submit" class="btn btn-warning" >Xác nhận</button>
    </div>
</div>
    </form>
</body>