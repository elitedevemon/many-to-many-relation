<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Create Employee</title>
</head>

<body>
  <form action="{{ route('employee.store') }}" method="post">
    @csrf
    <input type="text" name="name" id="name" aria-describedby="name" placeholder="enter name"> <br>
    <input type="email" name="email" id="email" aria-describedby="email" placeholder="enter email"> <br>

    @foreach ($roles as $role)
      <div>
        <input type="checkbox" name="role[]" value="{{ $role->id }}" id="role{{ $role->id }}">
        <label for="role{{ $role->id }}">{{ $role->role_name }}</label>
      </div>
    @endforeach

    <input type="submit" value="submit">
  </form>
</body>

</html>
