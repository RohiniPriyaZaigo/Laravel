<html>
    <head>
        <h1> FORM </h1>
    </head>
    <body>
        <form method="post" action="{{ route('student_details') }}" enctype="multipart/form-data">
        @csrf
            <label>NAME</label>
            <input type = "text" value = "" name = "name"/>
            <br>
            <label>ADDRESS</label>
            <input type = "text" value = "" name = "address"/>
            <br>
            <label>PIN CODE</label>
            <input type = "number"  name = "number"/>
            <input type = "number1" name = "number1"/>
            <br>
            <input type = "submit" value = "submit"/>
        </form>
    </body>
</html>