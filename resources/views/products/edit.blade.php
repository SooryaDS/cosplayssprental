<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #343a40; /* Dark gray background */
            color: #fff; /* White text for better contrast */
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
            max-width: 500px;
            margin: 0 auto;
            background-color: #7f638a; /* Dark purple background */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #f8f9fa; /* Light text for labels */
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 2px solid #007bff;
            border-radius: 4px;
            background-color: #ffffff; /* White input fields */
            color: #343a40; /* Dark text for inputs */
            transition: border 0.3s;
        }

        input[type="text"]:focus,
        input[type="number"]:focus {
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
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }

        a {
            display: block;
            text-align: center;
            margin-top: 20px;
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
    <h1>Edit Product</h1>
    <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT') <!-- This is to specify that we are updating the resource -->

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name', $product->name) }}" required>

        <label for="price">Price:</label>
        <input type="number" id="price" name="price" step="0.01" value="{{ old('price', $product->price) }}" required>

        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" value="{{ old('quantity', $product->quantity) }}" required>

        <label for="category">Category:</label>
        <input type="text" id="category" name="category" value="{{ old('category', $product->category) }}" required>

        <button type="submit">Update Product</button>
    </form>

    <a href="{{ route('admin.products.index') }}">Back to Product List</a>
</body>
</html>
