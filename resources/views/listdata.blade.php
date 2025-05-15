<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>ListData</title>
</head>
<body>
  
<table class="table">
    {{-- <h1>
      <center> Resule Data </center>
    </h1> --}}
  <thead>
    <tr class="btn-primary">
      <th scope="col">User Name</th>
      <th scope="col">Password</th>
      <th scope="col">Email Address</th>
      <th scope="col">Phone</th>
      <th scope="col" class="d-grid gap-2 d-md-flex justify-content-md-end">
        <div class="btn-group" role="group" aria-label="">
          <a type="button" class="btn btn-outline-light" href="/register">Back</a>
          <a style="width: 3rem" type="button" class="btn btn-outline-light" href="/register">...</a>
        </div>
        
        {{-- <button type="button" class="btn btn-info">...</button>
        <button type="button" class="btn btn-info">...</button> --}}

        {{-- <input class="btn btn-danger" style="width: 3rem " type="delete" value="...">
        <input class="btn btn-danger" style="width: 3rem " type="delete" value="..."> --}}
      </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{ $username }}</th>
      <td>{{ $password }}</td>
      <td>{{ $email }}</td>
      <td>{{ $mobile }}</td>
      <td class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-info" style="width: 7rem" type="edit" value="Edit">Edit</a>
        <a class="btn btn-danger" style="width: 5rem " type="delete" value="Delete">Delete</a>
        {{-- <div>
          <input class="btn btn-primary" type="submit" value="Register">
          <input class="btn btn-primary" type="reset" value="Reset">
      </div> --}}
      </td>
    </tr>
  </tbody>
</table>
</body>
</html>
{{-- 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <title>
    <h1>
    <center>Resule</center>
    </h1>
  </title>
  <center>
  <ul>
    <li>Username: {{ $username }} </li>
    <li>Password: {{ $password }}</li>
    <li>Email: {{ $email }}</li>
    <li>Phone Numebr: {{ $mobile }}</li>
  </ul>
  </br><a href="/register">Back To Register</a>

  </center>
</body>
</html> --}}