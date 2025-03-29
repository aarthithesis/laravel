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

      
        @if(!empty($location) || !empty($mail) || !empty($key) || !empty($num) || !empty($date) || !empty($amount))
            <table class="table table-bordered mt-3">
                <thead class="table-success">
                    <tr>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Mobile Number</th>
                        <th>Date of Donation</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $location }}</td>
                        <td>{{ $mail }}</td>
                        <td>{{ $key }}</td>
                        <td>{{ $num }}</td>
                        <td>{{ $date }}</td>
                        <td>{{ $amount }}</td>
                    </tr>
                </tbody>
            </table>
        @endif

        
        <div class="text-center">
            <a href="{{route('user')}}" class="btn btn-primary">Back to Form</a>
        </div>
    </div>
</body>
</html>
