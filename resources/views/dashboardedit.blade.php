<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Edit project</title>

  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>



<div class="container">

  <h1>Edit Products</h1>



  <form action="/dashboard/{{ $menu->id }}" method="POST" class="product-form">

    @csrf
    @method('PUT')

    

   
    <div class="form-group m-3">

      <label for="name123">Rice Name:</label>

      <input type="text" id="name" name="rice_name" value="{{$menu->rice_name}}">

    </div>

    

   <div class="form-group m-3">

      <label for="price123">Price:</label>

      <input type="text" id="price" name="price"value="{{$menu->price}}">

    </div>

           <div class="form-group m-3">

      <label for="price123">Stock Quantity:</label>

      <input type="text" id="price" name="stock_quantity" value="{{$menu->stock_quantity}}">

    </div>

      <div class="form-group m-3">

      <label for="price123">Description:</label>

      <input type="text" id="price" name="description" value="{{$menu->description}}">

    </div>
    

    <button type="submit" class="btn-submit">update</button>

</form>

<hr>

</div>

</body>
</html>