<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Insert</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <form action="/insert_login" method="post">
        @csrf
        <div class="mb-3">
          <label class="form-label">Email address</label>
          <input type="email" name="mail" class="form-control" placeholder="name@example.com">
        </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" name="pw" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</body>
</html>
