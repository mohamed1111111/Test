<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<h1>edit Product</h1>

<form action="/produts/{{$produt->id}}" method="POST" enctype="multipart/form-data" >

    {{method_field('PATCH')}}
    @csrf
    <div>
        <input type="text" name="title" placeholder="Product title" value="{{$produt->title}}">

    </div>
    <div>
        <input type="text" name="description" placeholder="Product description" value="{{$produt->description}}">

    </div>

        <label > choose image </label>

        <input type="file" class="custom-file-input" name="image" value="{{$produt->image}}">
{{--       <a> <img src="{{ asset('uploads/Products/' . $Produt->image)}} " height="100" width="100"  alt=""  ></a>--}}

    <div>
        <button type="submit"> Edit Product</button>
    </div>
</form>
<form action="/produts/{{$produt->id}}" method="POST">
        {{method_field('DELETE')}}
        @csrf

    <div class="field">
        <div class="control">
            <button tybe="submit" class="button"> Delete Product </button>
        </div>
    </div>

</body>
</html>
