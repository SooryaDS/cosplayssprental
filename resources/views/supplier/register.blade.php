<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supplier Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Styling for better UX */
        body {
            background-color: #343a40; /* Dark background */
            color: #fff; /* White text for contrast */
            font-family: Arial, sans-serif;
            padding: 50px 0; /* Top and bottom padding */
        }

        .outer-container {
            background-color: #1b1f3a; /* Dark blue-gray */
            padding: 40px; /* Padding for the outer container */
            border-radius: 10px; /* Rounded corners */
            max-width: 450px; /* Adjusted outer container width */
            margin: auto; /* Center alignment */
        }

        .inner-container {
            background-color: #4f3575; /* Dark purple */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
            color: #fff; /* White color for labels */
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px; /* Increased padding */
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 20px; /* More rounded fields */
            font-size: 14px;
        }

        button[type="submit"] {
            background-color: #007bff; /* Bootstrap primary color */
            color: #fff;
            border: none;
            border-radius: 20px; /* More rounded button */
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button[type="submit"]:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }

        .error {
            color: red;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="outer-container">
        <div class="inner-container">
            <h2 class="text-center">Supplier Registration</h2>
            <form action="{{ route('supplier.register.submit') }}" method="POST">
                @csrf
                <div class="form-card">
                    <div class="form-group">
                        <label for="Sname">Supplier Name</label>
                        <input type="text" name="Sname" id="Sname" value="{{ old('Sname') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="Saddress">Address</label>
                        <input type="text" name="Saddress" id="Saddress" value="{{ old('Saddress') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="Sphone">Phone</label>
                        <input type="text" name="Sphone" id="Sphone" value="{{ old('Sphone') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="Semail">Email</label>
                        <input type="email" name="Semail" id="Semail" value="{{ old('Semail') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="Product">Product</label>
                        <input type="text" name="Product" id="Product" value="{{ old('Product') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" required>
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" required>
                    </div>

                    <button type="submit">Register</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
