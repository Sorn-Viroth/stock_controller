<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>register-list</title>
</head>
<body>

<table class="table table-borderless table-striped">
  <thead>
    <tr class="btn-primary">
      <th scope="col">ID</th>
      <th scope="col">User Name</th>
      <th scope="col">Password</th>
      <th scope="col">Email Address</th>
      <th scope="col">Phone</th>
      <th scope="col" class="gap-2 d-grid d-md-flex justify-content-md-end">
        <div class="btn-group" role="group" aria-label="">
          <a type="button" class="btn btn-outline-light" href="/register">Back</a>
          <a style="width: 5rem" type="button" class="btn btn-outline-light" href="/">Logout</a>
        </div>
      </th>
    </>
  </thead>
  <tbody>
    @foreach ($user as $item)
    <tr>
      <td>{{ $item ->id }}</td>
      <td>{{ $item ->name }}</td>
      <td>{{ $item ->password }}</td>
      <td>{{ $item ->email }}</td>
      <td>{{ $item ->mobile }}</td>
      <td class="gap-2 d-grid d-md-flex justify-content-md-end">
        <a href="#" class="btn btn-info" style="width: 7rem" type="edit" value="Edit">Edit</a>
        <a href="/get-delete?id={{ $item->id }}" class="btn btn-danger" style="width: 5rem " type="delete" value="Delete">Delete</a>
      </td>
    </tr>
      @endforeach
  </tbody>
</table>
</body>
</html>
