<h1> FILE UPLOAD </h1>
<html>
<body>
<form action = "{{route('image')}}" method = "POST" enctype = "multipart/form-data">
@csrf
<label>FILE</label>
<input type = "file" value = "file" name = "file"/><br>
<span style = "color:red">@error('file'){{$message}}@enderror</span>
<input type = "submit" value = "submit"  name = "submit"/>
</form>
</body>
<html>