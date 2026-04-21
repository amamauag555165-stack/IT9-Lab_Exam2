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



  <form action="/orders/{{ $lists->id }}" method="POST" class="product-form">
    @csrf
    @method('PUT')

    

   
     <div class="form-group m-3">
  <label for="category123">Rice Name:</label>

  <select id="category123" name="menu_id">
    <option value="">Select Rice Name</option>
    @foreach($sets as $menu)
      <option value="{{ $menu->id }}" {{ $menu->menu_id == $menu->id ? 'selected' : ''}}>
        {{ $menu->rice_name}}
      </option>
    @endforeach

  </select>
</div>

    

   <div class="form-group m-3">

      <label for="price123">quantity:</label>

      <input type="text" id="price" name="quantity"value="{{$lists->quantity}}">

    </div>

  
    

    <button type="submit" class="btn-submit">update</button>

</form>

<hr>

</div>

</body>
</html>