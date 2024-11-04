<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Many to many relationship</title>
</head>

<body>
  <a href="{{ route('employee.create') }}">Add Employee</a> <br>
  <a href="{{ route('role.create') }}">Add Role</a>
  <table border="1">
    <thead>
      <th>SI</th>
      <th>Name</th>
      <th>Email</th>
      <th>Roles</th>
    </thead>
    <tbody>
      @forelse ($employees as $emp)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $emp->name }}</td>
          <td>{{ $emp->email }}</td>
          <td>
            @foreach ($emp->roles as $role)
              {{ $role->role_name }} <span style="{{ $loop->last ? 'display: none' : '' }}">|</span>
            @endforeach
          </td>
        </tr>
      @empty
      @endforelse
    </tbody>
  </table>

</body>

</html>
