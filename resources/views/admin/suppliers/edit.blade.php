<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Supplier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #343a40; /* Dark gray background */
            color: #fff; /* White text for better contrast */
        }

        .container {
            margin-top: 50px;
            max-width: 600px; /* Reduced width for the container */
            background-color: #7f638a; /* Dark purple for container */
            border-radius: 15px; /* Increased border-radius */
            padding: 30px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        h1 {
            text-align: center;
            font-weight: bold;
            margin-bottom: 30px;
            color: #f8f9fa; /* Light color for the header */
        }

        .form-label {
            color: #f8f9fa; /* Light color for labels */
        }

        .form-control {
            background-color: #cce5ff; /* Light blue background for input fields */
            color: #343a40; /* Dark text for input fields */
            border: 1px solid #dee2e6; /* Border color for input fields */
            border-radius: 10px; /* Rounder corners for input fields */
        }

        .form-control:focus {
            border-color: #007bff; /* Blue border on focus */
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25); /* Focus shadow */
        }

        .btn-primary {
            background-color: #5a6268; /* Dull blue for cancel button */
            border-color: #5a6268;
        }

        .btn-primary:hover {
            background-color: #4e555b; /* Darker dull blue on hover */
        }

        .btn-success {
            background-color: #28a745; /* Green button for update */
            border-color: #28a745;
        }

        .btn-success:hover {
            background-color: #218838; /* Darker green on hover */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1>Edit Supplier</h1>
        <form action="{{ route('admin.suppliers.update', $supplier->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="Sname" class="form-label">Name</label>
                <input type="text" class="form-control" id="Sname" name="Sname" value="{{ old('Sname', $supplier->Sname) }}" required>
            </div>
            <div class="mb-3">
                <label for="Saddress" class="form-label">Address</label>
                <input type="text" class="form-control" id="Saddress" name="Saddress" value="{{ old('Saddress', $supplier->Saddress) }}" required>
            </div>
            <div class="mb-3">
                <label for="Sphone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="Sphone" name="Sphone" value="{{ old('Sphone', $supplier->Sphone) }}" required>
            </div>
            <div class="mb-3">
                <label for="Semail" class="form-label">Email</label>
                <input type="email" class="form-control" id="Semail" name="Semail" value="{{ old('Semail', $supplier->Semail) }}" required>
            </div>
            <div class="mb-3">
                <label for="Product" class="form-label">Product</label>
                <input type="text" class="form-control" id="Product" name="Product" value="{{ old('Product', $supplier->Product) }}" required>
            </div>
            <div class="text-center"> <!-- Centering the buttons -->
                <button type="submit" class="btn btn-success">Update Supplier</button>
                <a href="{{ route('admin.suppliers.index') }}" class="btn btn-primary">Cancel</a>
            </div>
        </form>
    </div>
</body>
</html>
