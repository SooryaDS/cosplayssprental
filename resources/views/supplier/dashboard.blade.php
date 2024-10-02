<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supplier Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #343a40; /* Dark background */
            color: #fff; /* White text for better contrast */
            padding: 40px;
        }

        .dashboard-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .dashboard-header h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            font-weight: bold;
            color: #f8f9fa; /* Light color for header */
        }

        .dashboard-header p {
            font-size: 1.2rem;
            color: #dee2e6; /* Slightly darker text for contrast */
        }

        .dashboard-card {
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            color: #343a40; /* Dark color for card text */
            transition: transform 0.2s, box-shadow 0.2s;
            cursor: pointer; /* Change cursor to pointer */
        }

        .dashboard-card-light-yellow {
            background-color: #fff3cd; /* Light yellow */
        }

        .dashboard-card-light-pink {
            background-color: #f8d7da; /* Light pink */
        }

        .dashboard-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15); /* More pronounced shadow on hover */
        }

        .dashboard-card h4 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            font-weight: bold;
            color: #343a40; /* Dark color for card headings */
        }

        .logout-btn {
            margin-top: 20px;
            background-color: #dc3545;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .logout-btn:hover {
            background-color: #c82333;
        }

        .btn-link {
            text-decoration: none; /* Remove underline from links */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="dashboard-header">
            <h1>Welcome to the Supplier Dashboard</h1>
            <p>Hello, <strong>{{ Auth::guard('supplier')->user()->Sname }}</strong>! You are logged in as a supplier.</p>
        </div>

        <div class="dashboard-card dashboard-card-light-yellow" onclick="window.location='{{ route('supplier.products.index') }}'">
            <h4>Manage Your Products</h4>
            <p>View and manage all your products here.</p>
        </div>
        
        <div class="dashboard-card dashboard-card-light-pink" onclick="window.location='{{ route('supplier.products.create') }}'">
            <h4>Add New Product</h4>
            <p>Click here to add a new product to your inventory.</p>
        </div>

        <form action="{{ route('supplier.logout') }}" method="POST" style="display: inline;">
            @csrf
            <button type="submit" class="btn logout-btn">Logout</button>
        </form>
    </div>
</body>
</html>
