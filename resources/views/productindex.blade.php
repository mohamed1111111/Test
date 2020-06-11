<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<h1>Products</h1>

@foreach($Products as $product )

    <li> {{$product->title}}</li>
    <a> <img src="{{ asset('uploads/Products/' . $product->image)}} " height="100" width="100"  alt="" ></a>
	 <li> {{$product->description}}</li>


@endforeach
</body>
</html>
