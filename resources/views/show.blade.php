<!DOCTYPE html>
<html>
<head>
	<title>Show Category</title>
</head>
<body>
	<h1 class="title">{{$Categories->title}}</h1>
		@if($Categories->produt->count())
	<div>
		@foreach($Categories->produt as $produt)
		<li>{{$produt->title}}</li>
	<a> <img src="{{ asset('uploads/Products/' . $produt->image)}} " height="100" width="100"  alt="" ></a>
		<li>{{$produt->description}}</li>

		@endforeach

	</div>
	@endif
	<form action="/categories/{{$Categories->id}}/produts" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <input type="text" name="title" placeholder="product title">

    </div>
    <div class="custom-file">
        <label > choose image </label>

        <input type="file" class="custom-file-input" name="image" >
    </div>
     <div>
        <textarea name="descreption" placeholder="product descreption"></textarea>  

    </div>
    <div>
        <button type="submit"> Create product</button>
    </div>
</form>


</body>
</html>