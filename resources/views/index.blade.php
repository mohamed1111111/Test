<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<h1>categories</h1>
@foreach($Categories as $category )
	<a href="/categories/{{$category->id}}"><li> {{$category->title}}</li></a>
    
    <a> <img  src="{{ asset('uploads/categories/' . $category->image)}} " height="100" width="100"  alt="" ></a>
	<h1>{{$category->status}}</h1>

@endforeach
</body>
</html>
