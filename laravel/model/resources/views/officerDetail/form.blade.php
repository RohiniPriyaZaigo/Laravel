<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-sm bg-secondary navbar-light">
                <a>
                    <h1 style = "margin-left:450px" class = "text-black">OFFICER DETAILS</h1>
                </a>
            </nav>        
        </header>
    <form action = "{{route('store')}}" method = "POST" enctype = "multipart/form-data" style = "margin-top:50px">
    @csrf
    <div class = "row col-6" style = "margin-left:300px";>
    <div class = "col-6">
        <label>FIRST NAME</label>
    </div>
    <div class = "col-6">
        <input class = "" type = "text" value = "" name = "fname"><br>
        <span style = "color:red">@error('fname'){{$message}}@enderror</span>
            <!--  @if($errors->has('fname'))
            {{ $errors->first('fname') }}
            @endif  --> 
    </div>
    <div class = "col-6">
        <label>LAST NAME</label>
    </div>
    <div class = "col-6">
        <input class = "" type = "text" value = "" name = "lname"><br>
        <span style = "color:red">@error('lname'){{$message}}@enderror</span>
            <!--  @if($errors->has('LastName'))
            {{ $errors->first('LastName') }}
            @endif  -->
    </div>
    <div class = "col-6">
        <label>GENDER</label>
    </div>
    <div class = "col-6">
        <label class ="col-4"><input class = "" type = "radio" value = "male" name = "gender">Male</label>
        <label class ="col-4"><input class = "" type = "radio" value = "female" name = "gender">Female</label><br>
        <span style = "color:red">@error('gender'){{$message}}@enderror</span>
    </div>
    <div class = "col-6">
        <label>CITY</label>
    </div>
    <div class = "col-6">
        <input class = "" type = "text" value = "" name = "city"><br>
        <span style = "color:red">@error('city'){{$message}}@enderror</span>
             <!-- @if($errors->has('City'))
            {{ $errors->first('City') }}
            @endif  -->
    </div>
    <div class = "col-6">
        <label>AGE</label>
    </div>
    <div class = "col-6">
        <select value = "" name = "age" id = "age" class = "form">
            <option name = "age" value = "" >select</option>
            @foreach($age as $key => $value)
            <option value = "{{$key}}">{{$value}}</option>
            @endforeach
        </select><br>
        <span style = "color:red">@error('age'){{$message}}@enderror</span>
    </div>
    <div class = "col-6">
        <label>EMAIL</label>
    </div>
    <div class = "col-6">
        <input class = "" type = "email" value = "" name = "email"> <br>
        <span style = "color:red">@error('email'){{$message}}@enderror</span>
    </div>
    <div class = "col-6">
        <label>PASSWORD</label>
    </div>
    <div class = "col-6">
        <input class = "" type = "password" value = "" name = "password"> <br> 
        <span style = "color:red">@error('password'){{$message}}@enderror</span> 
    </div>
    <div class = "col-6">
        <label>STATE</label>
    </div>
    <div class="col-6">
        <select value = "" name = "state" id = "state" class = "form">
            <option name = "state" value = "" >select</option>
            @foreach($state as $key => $value)
            <option value = "{{$key}}">{{$value}}</option>
            @endforeach
        </select><br>
        <span style = "color:red">@error('state'){{$message}}@enderror</span>
    </div>
    <div class = "col-6">
        <label>COUNTRY</label>
    </div>
    <div class = "col-6">
        <select value = "" name = "country" id = "country" class = "form">
            <option name = "country" value = "">select</option>
            @foreach($country as $key => $value)
            <option value = "{{$key}}">{{$value}}</option>
            @endforeach
        </select><br>
        <span style = "color:red">@error('country'){{$message}}@enderror</span>
    </div>
    <div class = "col-6">
        <label>PHONE NUMBER</label>
    </div>
    <div class = "col-6">
        <input class = "" type = "number" value = "" name = "phoneNumber"><br>
        <span style = "color:red">@error('phoneNumber'){{$message}}@enderror</span>
    </div>
    <div class = "col-6">
        <label>PINCODE</label>
    </div>
    <div class = "col-6">
        <input class = "" type = "number" value = "" name = "pincode"><br>
        <span style = "color:red">@error('pincode'){{$message}}@enderror</span>
    </div>
    <div class = "col-6">
        <label>DATEOFBIRTH</label>
    </div>
    <div class = "col-6">
        <input class = "" type = "date" value = "" name = "dob"><br>
        <span style = "color:red">@error('dob'){{$message}}@enderror</span>
    </div>
    <div class = "col-6 ">
        <input class="" type = "submit" value = "submit" name = "submit"/>
    </div>
    </form>
    </body>
</html>