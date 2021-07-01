<!DOCTYPE html>
<html>
<body>

<h2>Forms validation</h2>
<form action="/form-controller" method="post">
            {{@csrf_field()}}
            <label for="name"> name:</label><br>
            <input type="text" name="name"><br>
            @error('name')
            <span style="color:red">{{$message}}</span>
            @enderror
            <br>
            <br>
            <label for="name">email:</label><br>
            <input type="text" name="email"><br><br>
            @error('email')
            <span style="color:red">{{$message}}</span>
            @enderror
            <br>
            <br>
            <input type="submit" value="Submit">
</form> 

</body>
</html>
