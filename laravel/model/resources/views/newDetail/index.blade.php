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
                <h1 style = "margin-left:450px" class = "text-black">ELOQUENT ORM</h1>
            </a>
        </nav>        
    </header>
    <form action = "{{route('detail')}}" method = "POST" enctype = "multipart/form-data">
    @csrf
    <div class = "row col-6" style = "margin-left:300px";>
    
        <div class = "col-6">
            <label>NAME</label>
        </div>
        <div class = "col-6">
            <input class = "" type = "text" value = "" name = "name">
        </div>
        <div class = "col-6">
            <label>AGE</label>
        </div>
        <div class = "col-6">
            <input class = "" type = "text" value = "" name = "age">
        </div>
        <div class = "col-6">
            <label>ADDRESS</label>
        </div>
        <div class="col-6">
        <input class = "" type = "text" value = "" name = "address">
        </div>
        <div class = "col-6">
            <label>PHONE NUMBER</label>
        </div>
        <div class = "col-6">
        <input class = "" type = "number" value = "" name = "phoneNumber">
        </div>
        <div class = "col-6">
            <label>PINCODE</label>
        </div>
        <div class = "col-6">
        <input class = "" type = "number" value = "" name = "pincode">
        </div>
        <div class = "col-6 ">
        <input class="" type = "submit" value = "submit" name = "submit"/>
        </div>
    </form>
    </body>
</html>
@if(Session("Success"))
<p>{{Session("Success")}}</p>
@endif