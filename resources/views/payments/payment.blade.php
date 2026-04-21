<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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

  <h1>Payment</h1>






  <hr>



  <table class="product-table">

    <thead>

      <tr>

        <th>ID</th>

        <th>Rice Name</th>

        <th>Price</th>

        <th>Quantity</th>

        <th>Total Amount</th>

        <th>Payment Status</th>

        <th>Action</th>

      </tr>

    </thead>

    <tbody>

@foreach($orders as $order)
<tr>
    <td>{{ $order->id }}</td>
    <td>{{ $order->rice_name }}</td>
    <td>{{ $order->price }}</td>
    <td>{{ $order->quantity}}</td>
    <td>{{ $order->total_amount }}</td>
</tr>
@endforeach

      

    </tbody>

  </table>

</div>

</body>
</html>
