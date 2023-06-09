<h1>Product Details</h1>

<p><strong>Code:</strong> {{ $product->productCode }}</p>
<p><strong>Name:</strong> {{ $product->name }}</p>
<p><strong>Quantity:</strong> {{ $product->qty }}</p>
<p><strong>Price:</strong> {{ $product->price }}</p>

<a href="{{ route('products.index') }}">Back to Product List</a>
