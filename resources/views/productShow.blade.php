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
 <center> <h2>Product Table</h2></center>   
  <table class="table bg-primary text-white">
    <thead class="text-light bg-dark">
      <tr>
        <th>ID</th>
        <th>IMAGE</th>
        <th>NAME</th>
        <th>PRICE</th>
        <th>DESCRIPTIONS</th>>
        <th>UPDATE</th>
        <th>DELETE</th>
      </tr>
    </thead>
    <tbody>
    @foreach($results as $data)
      <tr>
        <td>{{ $data['id'] }}</td>
        <td><img src='<?php echo "/storage/".str_replace('public/','',$data['image']); ?>' width="80" /></td>
        <td>{{ $data['name'] }}</td>
        <td>{{ $data['price'] }}</td>
        <td>{{ $data['description'] }}</td>
        <td>
        <form  action="">
        @csrf
        <button class="btn btn-dark btn-sm">Edit</button>
        </form>
        </td>
        <td>
        <a href="">
        <button class="btn btn-dark btn-sm ">Delete</button>
        </a>
        </td>

      </tr>
    @endforeach
    </tbody>
  </table>
        <a href="/product"><button class="btn btn-dark btn-md btn pull-right">Add New product</button></a>
</div>
</body>
</html>
