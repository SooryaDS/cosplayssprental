<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #343a40; /* Dark gray background */
            color: #fff; /* White text */
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #f8f9fa; /* Light color for the header */
            margin-bottom: 30px;
            font-weight: bold;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
            background-color: #7f638a; /* Dark purple background */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #f8f9fa; /* Light text for labels */
        }

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 2px solid #007bff;
            border-radius: 4px;
            background-color: #ffffff; /* White input fields */
            color: #343a40; /* Dark text for inputs */
            transition: border 0.3s;
            font-size: 16px;
        }

        input[type="text"]:focus,
        input[type="number"]:focus,
        select:focus {
            border-color: #0056b3; /* Darker blue on focus */
            outline: none;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff; /* Bright blue button */
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }

        a {
            display: inline-block;
            margin-top: 20px;
            text-align: center;
            color: #f8f9fa; /* Light blue for the link */
            text-decoration: none;
            transition: color 0.3s;
        }

        a:hover {
            color: #adb5bd; /* Slightly lighter on hover */
        }
    </style>
</head>
<body>
    <h1>Add New Product</h1>
    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="price">Price:</label>
        <input type="number" id="price" name="price" step="0.01" required>

        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" required>

        <label for="category">Category:</label>
        <select id="category" name="category" required>
            <option value="">Select a category</option>
            <option value="Full Costume">Full Costume</option>
            <option value="Wigs">Wigs</option>
            <option value="Accessories">Accessories</option>
            <option value="Shoes">Shoes</option>
            <option value="Props">Props</option>
        </select>

        <button type="submit">Add Product</button>
    </form>

    <a href="{{ route('admin.products.index') }}">Back to Product List</a>
</body>
</html>
