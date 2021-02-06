<h1>EDIT FORM</h1>
<html>
<body>
<form action ="{{route('update',$data['id'])}}" method = "POST">
    @csrf 
    @method('put')
    <label>FIRST NAME</label>
    <input type = "text" value = "{{$data['firstName']}}" name = "fname"/><br>
    <span style = "color:red">@error('fname'){{$message}}@enderror</span>
    <label>LAST NAME</label>
    <input class = "" type = "text" value = "{{$data['lastName']}}" name = "lname"><br>
    <span style = "color:red">@error('lname'){{$message}}@enderror</span>
    <label>GENDER</label>
    <label class ="col-4"><input class = "" type = "radio" value = " male"{{$data['gender'] == 'female' ? 'checked': ''}} name = "gender">Male</label>
    <label class ="col-4"><input class = "" type = "radio" value = "female"{{$data['gender'] == 'female' ? 'checked': ''}} name = "gender">Female</label><br>
    <span style = "color:red">@error('gender'){{$message}}@enderror</span>
    <label>CITY</label>
    <input class = "" type = "text" value = "{{$data['city']}}" name = "city"><br>
    <span style = "color:red">@error('city'){{$message}}@enderror</span>
    <label>AGE</label>
        <select value = "{{$data['age']}}" name = "age" id = "age" class = "form">
            <option name = "age" value = "{{$data['age']}}" >select</option>
            @foreach($age as $key => $value)
            <option value = "{{$key}}" {{$data['age'] == $key ? 'selected': '' }}>{{$value}}</option>
            @endforeach
        </select><br>
        <span style = "color:red">@error('age'){{$message}}@enderror</span>
    <label>ID PROOF</label>
    @php $idProof = explode(',',$data['idProof']); @endphp
            <input type="checkbox" name="idProof[]" value="Pan Card" @if(in_array('PanCard',$idProof)) checked @endif />Pan Card
            <input type="checkbox" name="idProof[]" value="Aadhar Card"  @if(in_array('AadharCard',$idProof)) checked @endif  />Aadhar Card
            <input type="checkbox" name="idProof[]" value="Vote Id"  @if(in_array('VoteId',$idProof)) checked @endif />Vote Id
    <br>
    <span style = "color:red">@error('idProof'){{$message}}@enderror</span>
    <label>FILE UPLOAD</label>
    <input type = "file" class = "" value = "{{$data['file']}}" name = "file"><br>
    @if(strpos($data->image,'.pdf') !== false || strpos($data->image, '.xlsx') !== false || strpos($data->image, '.docx') !== false || strpos($data->image, '.xls')!==false)
        <a target="_blank" href="{{ asset('storage/images/'.$data->image) }}">Download</a> 
        @else  
        <td><img src="{{asset('storage/images/'.$data->image)}}" width="100px;" height="100px;" alt="Image"></td>
        @endif
    <span style = "color:red">@error('file'){{$message}}@enderror</span><br>
    <label>EMAIL</label>
    <input class = "" type = "email" value = "{{$data['email']}}" name = "email"> <br>
    <span style = "color:red">@error('email'){{$message}}@enderror</span>
    <label>PASSWORD</label>
    <input class = "" type = "password" value = "{{$data['password']}}" name = "password"> <br> 
    <span style = "color:red">@error('password'){{$message}}@enderror</span> 
    <label>STATE</label>
        <select value = "{{$data['state']}}" name = "state" id = "state" class = "form">
            <option name = "state" value = "{{$data['state']}}" >select</option>
            @foreach($state as $key => $value)
            <option value = "{{$key}}" {{$data['state'] == $key ? 'selected': '' }}>{{$value}}</option>
            @endforeach
        </select><br>
        <span style = "color:red">@error('state'){{$message}}@enderror</span>
    <label>COUNTRY</label>
        <select value = "{{$data['country']}}" name = "country" id = "country" class = "form">
            <option name = "country" value = "{{$data['country']}}">select</option>
            @foreach($country as $key => $value)
            <option value = "{{$key}}" {{$data['country'] == $key ? 'selected': '' }}>{{$value}}</option>
            @endforeach
        </select><br>
        <span style = "color:red">@error('country'){{$message}}@enderror</span>
    <label>PHONE NUMBER</label>
    <input type = "number" value = "{{$data['phoneNumber']}}" name = "phoneNumber"/><br>
    <span style = "color:red">@error('phoneNumber'){{$message}}@enderror</span>
    <label>PINCODE</label>
    <input type = "number" value = "{{$data['pincode']}}" name = "pincode"/><br>
    <span style = "color:red">@error('pincode'){{$message}}@enderror</span>
    <label>DATEOFBIRTH</label>
    <input class = "" type = "date" value = "{{$data['dob']}}" name = "dob"><br>
    <span style = "color:red">@error('dob'){{$message}}@enderror</span>
    <input type = "submit" value = "update" name = "submit"/>
</form>
</body>
</html>