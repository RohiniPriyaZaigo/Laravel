<h1>EDIT FORM</h1>
<html>
<body>
<form action ="{{route('update',$data['id'])}}" method = "POST">
    @csrf 
    @method('put')
    <label>FIRST NAME</label>
    <input type = "text" value = "{{$data['FirstName']}}" name = "fname"/><br>
    <label>LAST NAME</label>
    <input class = "" type = "text" value = "{{$data['LastName']}}" name = "lname"><br>
    <label>GENDER</label>
    <label class ="col-4"><input class = "" type = "radio" value = " male"{{$data['Gender'] == 'female' ? 'checked': ''}} name = "gender">Male</label>
    <label class ="col-4"><input class = "" type = "radio" value = "female"{{$data['Gender'] == 'female' ? 'checked': ''}} name = "gender">Female</label><br>
    <label>CITY</label>
    <input class = "" type = "text" value = "{{$data['City']}}" name = "city"><br>
    <label>AGE</label>
        <select value = "{{$data['age']}}" name = "age" id = "age" class = "form">
            <option name = "age" value = "{{$data['age']}}" >select</option>
            @foreach($age as $key => $value)
            <option value = "{{$key}}" {{$data['age'] == $key ? 'selected': '' }}>{{$value}}</option>
            @endforeach
        </select><br>
    <label>ID PROOF</label>
    <input type = "checkbox" name = "idProof" id = "idProof" value = "{{$data['IdProof']}}">{{$value}}</input>
    <br>
    <label>FILE UPLOAD</label>
    <input type = "file" class = "" value = "{{$data['File']}}" name = "file"><br>
    <label>EMAIL</label>
    <input class = "" type = "email" value = "{{$data['Email']}}" name = "email"> <br>
    <label>PASSWORD</label>
    <input class = "" type = "password" value = "{{$data['Password']}}" name = "password"> <br> 
    <label>STATE</label>
        <select value = "{{$data['state']}}" name = "state" id = "state" class = "form">
            <option name = "state" value = "{{$data['state']}}" >select</option>
            @foreach($state as $key => $value)
            <option value = "{{$key}}" {{$data['state'] == $key ? 'selected': '' }}>{{$value}}</option>
            @endforeach
        </select><br>
    <label>COUNTRY</label>
        <select value = "{{$data['country']}}" name = "country" id = "country" class = "form">
            <option name = "country" value = "{{$data['country']}}">select</option>
            @foreach($country as $key => $value)
            <option value = "{{$key}}" {{$data['country'] == $key ? 'selected': '' }}>{{$value}}</option>
            @endforeach
        </select><br>
    <label>PHONE NUMBER</label>
    <input type = "number" value = "{{$data['PhoneNumber']}}" name = "phoneNumber"/><br>
    <label>PINCODE</label>
    <input type = "number" value = "{{$data['Pincode']}}" name = "pincode"/><br>
    <label>DATEOFBIRTH</label>
    <input class = "" type = "date" value = "{{$data['DOB']}}" name = "dob"><br>
    <input type = "submit" value = "update" name = "submit"/>
</form>
</body>
</html>