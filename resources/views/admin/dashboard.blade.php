<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #343a40; /* Dark gray background */
            color: #fff; /* White text for better contrast */
        }

        .dashboard-container {
            padding: 40px;
            position: relative; /* For positioning logout button */
        }

        .dashboard-header {
            margin-bottom: 40px;
            text-align: center;
        }

        .dashboard-header h2 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            font-weight: bold;
            color: #f8f9fa; /* Light color for the header */
        }

        .dashboard-header p {
            font-size: 1.2rem;
            color: #dee2e6; /* Slightly darker text for contrast */
        }

        .dashboard-card {
            background-color: #ffffff; /* White background for cards */
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
            transition: transform 0.2s;
            padding: 20px;
            position: relative; /* For z-index positioning */
        }

        .dashboard-card:hover {
            transform: translateY(-5px);
            z-index: 10; /* Bring hovered card to the front */
        }

        .dashboard-card h4 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            font-weight: bold;
            color: #343a40; /* Dark color for card headings */
        }

        .btn {
            width: 100%;
           
            padding: 10px;
            font-size: 1.1rem;
            border-radius: 5px;
        }

        .btn-primary {
            background-color: #007bff; /* Bright blue for buttons */
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }

        .logout-btn {
            background-color: #dc3545; /* Red for logout */
            color: #fff;
            border: none;
            width: 100px;
            height: 70px;
            padding: 8px 15px; /* Smaller padding for a smaller button */
            border-radius: 20px; /* Rounder corners */
            font-size: 0.9rem; /* Slightly smaller font size */
            position: absolute; /* Positioning it absolutely */
            top: 20px; /* Adjust distance from the top */
            right: 20px; /* Adjust distance from the right */
            transition: background-color 0.3s;
        }

        .logout-btn:hover {
            background-color: #c82333; /* Darker red on hover */
        }

        .card-light-pink {
            background-color: #f8d7da; /* Light pink */
        }

        .card-light-blue {
            background-color: #d1ecf1; /* Light blue */
        }

        .card-light-yellow {
            background-color: #fff3cd; /* Light yellow */
        }

        @media (min-width: 768px) {
            .dashboard-card {
                display: flex;
                flex-direction: column; /* Stack text above button */
                align-items: center; /* Center align the content */
                padding: 20px 30px;
            }

            .dashboard-card a {
                margin-top: auto; /* Push the button to the bottom */
            }
        }
    </style>
</head>
<body>
    <div class="container dashboard-container">
        <button type="submit" class="btn logout-btn" form="logout-form">Logout</button>
        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

        <div class="dashboard-header">
            <h2>Admin Dashboard</h2>
            <p>Welcome, <strong>{{ Auth::guard('admin')->user()->name }}</strong>!</p>
        </div>

        <div class="row">
        <div class="col-lg-4">
                <div class="dashboard-card card-light-blue text-center">
                    <h4>Manage Suppliers</h4>
                    <a href="{{ route('admin.suppliers.index') }}" class="btn btn-primary">View All Suppliers</a>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="dashboard-card card-light-yellow text-center">
                    <h4>Manage Products</h4>
                    <a href="{{ route('admin.products.index') }}" class="btn btn-primary">View All Products</a>
                </div>
            </div>

           
            <div class="col-lg-4">
                <div class="dashboard-card card-light-pink text-center">
                    <h4>Manage Customers</h4>
                    <a href="{{ route('admin.customers.index') }}" class="btn btn-primary">View All Customers</a>
                </div>
            </div>

           
        </div>
    </div>
</body>
</html>
