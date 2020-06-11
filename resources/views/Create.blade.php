<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<h1>create category</h1>
<form action="/categories" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <input type="text" name="title" placeholder="category title" >

    </div>
    <div class="custom-file">
        <label > choose image </label>

        <input type="file" class="custom-file-input" name="image" >
    </div>
    <div>
        <button type="submit"> Create Category</button>
    </div>
</form>

</body>
</html>
