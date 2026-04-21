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

  <h1>Orders</h1>



  <form action="/o_orders" method="POST" class="product-form d-flex flex-row justify-content-center ">

    @csrf

    

   <div class="form-group m-3">
      <label for="menu_id">Rice Name:</label>
      <select id="category123" name="menu_id">
        <option value="">Select a Rice Name</option>

        @foreach($sets as $menu)
          <option value="{{ $menu->id }}">{{ $menu->rice_name}}
          </option>
        @endforeach

      </select>
</div> 

    

    <div class="form-group m-3">

      <label for="price123">Quantity:</label>

      <input type="text" id="price" name="quantity">

    </div>




    <button type="submit" class="btn btn-primary">Save</button>

  </form>



  <hr>



  <table class="product-table">

    <thead>

      <tr>

        <th>ID</th>

        <th>Rice Name</th>

        <th>Quantity</th>

        <th>Price</th>

        <th>Total Amount</th>

        <th>Action</th>

      </tr>

    </thead>
@foreach($lists as $list)

      <tr>

        <td>{{ $list->id }}</td>

          <td>{{ $list->menu->rice_name }}</td>

          <td>{{ $list->quantity }}</td>

        <td>{{ $list->menu->price }}</td>

            <td>{{ $list->total_amount }}</td>

         


        <td>
          <a class="edit" href="/orders/{{ $list->id }}/edit">Edit</a>
          <form action="/orders/{{ $list->id }}" method="POST"
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
