<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rice Menu</title>
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<!-- Header -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-center">
  <a class="navbar-brand" href="{{ route('dashboard') }}">Rice Menu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <a class="navbar-brand" href="{{ route('order') }}">Orders</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <a class="navbar-brand" href="{{ route('payment') }}">Payment</a>
  <button class="navbar-toggler"  type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

 <!-- Logout -->
  <li class="nav-item ms-3">
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-danger btn-sm">
            Logout
        </button>
    </form>
</li>
  
</nav>

<!-- Content -->
<div class="container mt-3">

  <h1>Rice Menu</h1>



  <form action="/d_dashboard" method="POST" class="product-form d-flex flex-row justify-content-center ">

    @csrf

    

    <div class="form-group m-3">

      <label for="name123">Rice Name:</label>

      <input type="text" id="name" name="rice_name">

    </div>

    

    <div class="form-group m-3">

      <label for="price123">Price:</label>

      <input type="text" id="price" name="price">

    </div>

    
    <div class="form-group m-3">

      <label for="price123">Stock Quantity:</label>

      <input type="text" id="price" name="stock_quantity">

    </div>


    
    <div class="form-group m-3">

      <label for="price123">Description:</label>

      <input type="text" id="price" name="description">

    </div>
    <button type="submit" class="btn btn-primary">Save</button>

  </form>



  <hr>



  <table class="product-table">

    <thead>

      <tr>

        <th>ID</th>

        <th>Rice Name</th>

        <th>Price</th>

        <th>Quantity</th>

        <th>Description</th>

        <th>Action</th>

      </tr>

    </thead>

    <tbody>

     @foreach($rices as $rice)

      <tr>

        <td>{{ $rice->id }}</td>

        <td>{{ $rice->rice_name}}</td>

        <td>{{ $rice->price }}</td>

         <td>{{ $rice->stock_quantity }}</td>

          <td>{{ $rice->description}}</td>


        <td>
          <a class="edit" href="/dashboard/{{ $rice->id }}/edit">Edit</a>
          <form action="/dashboard/{{ $rice->id }}" method="POST"
          style="display:inline;">
          @csrf
          @method('DELETE')
          <button class="delete" type="submit">Delete</button>
      </form>
      </tr>

      @endforeach

    </tbody>

  </table>

</div>



</body>

</html>