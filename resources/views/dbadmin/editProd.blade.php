<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Form</title>
</head>
<body>
    <form action="{{ route('products.update', $product->id) }}" method="POST" autocomplete="off">
        @csrf
        @method('put')
        <div class="product-form">
            <label for="product">Name</label>
            <input type="text" name="name" id="name" value="{{$product->name}}">
        </div>
        <!-- <div class="product-form">
            <label for="img">Image</label>
            <input type="url" name="img" id="img">
        </div> -->
        <div class="product-form">
            <label for="qty">Quantity</label>
            <input type="number" name="qty" id="qty" value="{{$product->qty}}">
        </div>
        <div class="product-form">
            <label for="perPrice">Price</label>
            <input type="number" name="price" id="price" value="{{$product->price}}">
        </div>

        <div class="form_action--button">
            <input type="submit" class="submit" value="Submit">
            <input type="reset" class="reset" value="Reset">
        </div>
    </form>
</body>
</html>