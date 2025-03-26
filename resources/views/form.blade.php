<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRATION FORM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h5 class="text-center">Registration Form</h5>

        <!-- ✅ Display Submitted Data -->
        @if(!empty($location) || !empty($mail) || !empty($key))
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


        <!-- ✅ Form -->
        <form action="/submit" method="post">
            @csrf
            <div class="mb-3">
                <label for="username" class="form-label">Name</label>
                <input type="text" name="location" class="form-control" id="username">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="mail" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Address</label>
                <input type="text" name="key" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">MobileNumber</label>
                <input type="text" name="num" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Date of Donation</label>
                <input type="date" name="date" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Donation Value</label>
                <input type="text" name="amount" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>    
        </form>
    </div>
</body>
</html>
