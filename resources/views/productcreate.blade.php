<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<h1>create product</h1>
<form action="/produts" method="POST" enctype="multipart/form-data">
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
