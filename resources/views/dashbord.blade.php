<!DOCTYPE html>
<html>
<head>
<title>Show Data</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">images</th>
      <th scope="col">Department</th>
      <th scope="col">Status</th>
      <th colspan="3">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($members as $member)
    <tr>
      <td>{{$member['id']}}</td>
      <td>{{$member['name']}}</td>
      <td>{{$member['email']}}</td>
      <td>{{$member['address']}}</td>
      <td><img src="{{ asset($member->image) }}" width= '50' height='50' style="border-radius:30px;" class="img img-responsive"  /></td>
      <td>{{$member['dep']}}</td>
      <td>{{$member['status']}}</td>
      <td>
      <a href="add-data"><i class="fa fa-user-plus" style="font-size:25px;color:green"></i></a>
        <a onclick="return confirm('Are you sure to update?')" href={{"edit/".$member['id']}}><i class="fa fa-edit" style="font-size:25px;color:blue"></i></a>
        <a onclick="return confirm('Are you sure to delete?')" href={{"delete/".$member['id']}}><i class="fa fa-trash-o" style="font-size:25px;color:red"></i></a>
     
      </td>
    </tr>
    @endforeach
 
   
  </tbody>
 
</table>
<div>
    {{$members->links()}}
    <style>
        .w-5{
            display: none;
        }
    </style>
  </div>
</div>
</body>
</html> 
