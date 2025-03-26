<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submitted Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h5 class="text-center">Submitted Data</h5>

        <!-- Display Data in Table -->
        <table class="table table-bordered mt-3">
            <thead class="table-dark">
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $location }}</td>
                    <td>{{ $mail }}</td>
                    <td>{{ $key }}</td>
                </tr>
            </tbody>
        </table>

        <!-- Button to Go Back to Form -->
        <div class="text-center">
            <a href="/form" class="btn btn-primary">Go Back to Form</a>
        </div>
    </div>
</body>
</html>
