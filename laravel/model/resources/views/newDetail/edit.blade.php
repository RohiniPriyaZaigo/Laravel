<h1>EDIT</h1>
<html>
<body>
<form action ="{{route('update',$data['id'])}}" method = "POST">
@csrf 
@method('put');
<label>Name</label>
<input type = "text" value = "{{$data['name']}}" name = "name"/><br>
<label>AGE</label>
<input type = "text" value = "{{$data['age']}}" name = "age"/><br>
<label>Address</label>
<input type = "text" value = "{{$data['address']}}" name = "address"/><br>
<label>PHONE NUMBER</label>
<input type = "number" value = "{{$data['phoneNumber']}}" name = "phoneNumber"/><br>
<label>PINCODE</label>
<input type = "number" value = "{{$data['pincode']}}" name = "pincode"/><br>
<input type = "submit" value = "edit" name = "submit"/>
</form>
</body>
</html>
