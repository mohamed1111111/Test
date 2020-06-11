<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<h1>edit category</h1>

<form action="/categories/{{$Categories->id}}" method="POST" enctype="multipart/form-data" >

    {{method_field('PATCH')}}
    @csrf
    <div>
        <input type="text" name="title" placeholder="category title" value="{{$Categories->title}}">

    </div>

        <label > choose image </label>

        <input type="file" class="custom-file-input" name="image" value="{{$Categories->image}}">
{{--        <a> <img src="{{ asset('uploads/categories/' . $Categories->image)}} " height="100" width="100"  alt=""  ></a>--}}
    
    <div>
        <select name="status" class="uk-form-controls">
        <option value="0"  selected="Enable">Enable</option>
        <option value="1" selected="Disable">Disable</option>
        </select>

       
    </div>
    <div>
        <button type="submit"> Edit Category</button>
    </div>
</form>
<form action="/categories/{{$Categories->id}}" method="POST">
        {{method_field('DELETE')}}
        @csrf

    <div class="field">
        <div class="control">
            <button tybe="submit" class="button"> Delete Category </button>
        </div>
    </div>
</form>

</body>
</html>
