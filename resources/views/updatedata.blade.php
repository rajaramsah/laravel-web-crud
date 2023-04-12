<!DOCTYPE html>
<html>
<head>
<title>Add Data</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>


<div class="container mt-5">
    
    <div class="row">
       <div class="col-sm-4"></div>
       <div class="col-sm-4">
        
        <form action="/edit" method="post" class="form-control">
           
                <h3 align="center">Update Form</h3>
                @csrf
                <div class="form-floating mb-3">
                    <input type="hidden" class="form-control" id="floatingInput" placeholder="id" name="id" value="{{$data['id']}}">
                    <label for="floatingInput">Id</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Name" name="name" value="{{$data['name']}}">
                    <label for="floatingInput">Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingPassword" placeholder="Email" name="email" value="{{$data['email']}}">
                    <label for="floatingPassword">Email</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingPassword" placeholder="Address" name="address" value="{{$data['address']}}">
                    <label for="floatingPassword">Address</label>
                </div>

                <div class="form-floating  mb-3">
                    <input type="file" class="form-control" id="floatingPassword" placeholder="image" name="image">
                    
                </div>
                
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="php" id="flexCheckChecked" name="dep[]" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Php
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="laravel" id="flexCheckDefault" name="dep[]">
                    <label class="form-check-label" for="flexCheckDefault">
                        Laravel
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="angular" id="flexCheckDefault" name="dep[]">
                    <label class="form-check-label" for="flexCheckDefault">
                        Angular
                    </label>
                </div>

                <select class="form-select" aria-label="Default select example" name="status">
                    <option value="">Select</option>
                    <option value="active">Active</option>
                    <option value="deactive">Deactive</option>
                
                </select>
                
                <button class="btn btn-primary mt-3" name="save" type="submit">Update</button>
        </form>
       </div>
       <div class="col-sm-4"></div>
        
    </div>
    
</div>


</body>
</html>