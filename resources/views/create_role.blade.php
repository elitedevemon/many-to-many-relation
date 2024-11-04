<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Create Role</title>
</head>

<body>
  <a href="{{ route('employee') }}">
    << Go Back </a>
      <form action="{{ route('role.store') }}" method="post">
        @csrf
        <input type="text" name="role_name" id="role_name" aria-describedby="role_name" placeholder="enter role name">
        <br>
        @error('role_name')
          <h2>{{ $message }}</h2>
        @enderror
        <input type="submit" value="add">
      </form>

      @foreach ($roles as $role)
        <div>
          <input type="checkbox" name="role{{ $role->id }}" id="role{{ $role->id }}">
          <label for="role{{ $role->id }}">{{ $role->role_name }}</label>
        </div>
      @endforeach
</body>

</html>
