<!DOCTYPE html>
<html lang="en">
<head>
  <title>LS Product</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<<div class="container-fluid">
 <center> <h2>Employee Table</h2></center>   
  <table class="table bg-primary text-white">
    <thead class="text-light bg-dark">
      <tr>
        <th>ID</th>
        <th>IMAGE</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>MOBILE</th>
        <th>ADDRESS</th>
        <th>UPDATE</th>
        <th>DELETE</th>
      </tr>
    </thead>
    <tbody>
    @foreach($results as $data)
      <tr>
        <td>{{ $data['id'] }}</td>
        <td> <img src='<?php echo "/storage/".str_replace('public/','',$data['image']); ?>'
         style="border: 1px solid #ddd; border-radius: 6px;
          max-width: 350px; width: 120px; height: 120px; 
          overflow: hidden; border-radius: 100%; 
          margin: -10px auto 0; object-fit: cover;" /></td>
        <td>{{ $data['name'] }}</td>
        <td>{{ $data['email'] }}</td>
        <td>{{ $data['mobile'] }}</td>
        <td>{{ $data['address'] }}</td>
        <td>
        <form  action="">
        @csrf
        <button class="btn btn-dark btn-sm">Edit</button>
        </form>
        </td>
        <td>
        <a href="employee/delete/{{ $data['id'] }}">
        <button class="btn btn-dark btn-sm ">Delete</button>
        </a>
        </td>

      </tr>
    @endforeach
    </tbody>
  </table>
        <a href="/employee"><button class="btn btn-dark btn-md btn pull-right">Add New Employee</button></a>
</div>
</body>
</html>
