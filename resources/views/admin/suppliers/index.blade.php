<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supplier List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #343a40; /* Dark gray background */
            color: #fff; /* White text for better contrast */
        }

        .container {
            margin-top: 50px;
            background-color: #7f638a; 
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            font-weight: bold;
            color: #f8f9fa; /* Light color for the header */
        }

        .btn-primary {
            background-color: #007bff; /* Bright blue for buttons */
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }

        table {
            border-radius: 10px;
            overflow: hidden;
            margin-top: 20px;
            width: 100%; /* Make the table take full width */
            font-size: 1.1rem; /* Increase font size for readability */
        }

        th, td {
            padding: 15px; /* Increase padding for larger cells */
            border: 2px solid #dee2e6; /* Thicker border lines */
        }

        th {
            background-color: #007bff; /* Blue header */
            color: white; /* White text in header */
        }

        td {
            background-color: #ffffff; /* White background for cells */
            color: #343a40; /* Dark text for cells */
        }

        tr:hover td {
            background-color: #e9ecef; /* Light gray on row hover */
        }

        .btn-info {
            background-color: #17a2b8; /* Teal for edit button */
            border-color: #17a2b8;
        }

        .btn-danger {
            background-color: #dc3545; /* Red for delete button */
            border-color: #dc3545;
        }

        .btn-danger:hover, .btn-info:hover {
            opacity: 0.9; /* Slightly fade buttons on hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Registered Suppliers</h1>
        <a href="{{ route('admin.suppliers.create') }}" class="btn btn-primary mb-3">Add Supplier</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Product</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($suppliers as $supplier)
                    <tr>
                        <td>{{ $supplier->Sname }}</td>
                        <td>{{ $supplier->Saddress }}</td>
                        <td>{{ $supplier->Sphone }}</td>
                        <td>{{ $supplier->Semail }}</td>
                        <td>{{ $supplier->product }}</td>
                        <td>
                            <a href="{{ route('admin.suppliers.edit', $supplier->id) }}" class="btn btn-info">Edit</a>
                            <form action="{{ route('admin.suppliers.destroy', $supplier->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
