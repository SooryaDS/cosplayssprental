<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
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

        .btn-primary, .add-product {
            background-color: #007bff; /* Bright blue for buttons */
            border-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            padding: 10px 20px;
        }

        .btn-primary:hover, .add-product:hover {
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

        .success-message {
            color: #28a745;
            font-size: 1.1rem;
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Product List</h1>

        <!-- Show 'Add New Product' only if the user is an admin -->
        @if (Auth::guard('admin')->check())
            <a class="add-product mb-3" href="{{ route('admin.products.create') }}">Add New Product</a>
        @endif

        <!-- Display success message if product was updated/created successfully -->
        @if (session('success'))
            <div class="success-message">{{ session('success') }}</div>
        @endif

        <!-- Product List Table -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Supplier ID</th>
                    <th>Supplier Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Category</th>
                    @if (Auth::guard('supplier')->check() || Auth::guard('admin')->check())
                        <th>Actions</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->supplier_id }}</td>
                        <td>{{ $product->supplier->Sname ?? 'N/A' }}</td>
                        <td>Rs.{{ number_format($product->price, 2) }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>{{ $product->category }}</td>
                        @if (Auth::guard('admin')->check())
                            <td>
                                <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-info">Edit</a>
                                <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        @elseif (Auth::guard('supplier')->check())
                            <td>
                                <a href="{{ route('supplier.products.edit', $product->id) }}" class="btn btn-info">Edit</a>
                            </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
