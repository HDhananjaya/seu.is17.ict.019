<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> FORM</title>
</head>
<body>
<div style="width:400px; height:500px; background-color:#F3F3F3; margin:250px 750px; padding:50px;border:2px black solid">

<form action="exload " method="post">
@csrf
<input type="text" name="name" id="name" placeholder="Name"><span style="color:red;">@error('username') {{$message}}@enderror</span>   <br><br>

<input type="text" name="username" id="user" placeholder="UserName"><span style="color:red;">@error('username') {{$message}}@enderror</span>   <br><br>
<input type="date" id="dateofbirth" name="dateofbirth"><span style="color:red;"></span><br><br>
<input type="email" name="email" id="email" placeholder="email"><span style="color:red;">@error('email') {{$message}}@enderror</span> <br><br>
<input type="tel" name="telephoneno" id="telephoneno" placeholder="telephone"><span style="color:red;"></span> <br><br>
<input type="text" name="nic" id="nic" placeholder="NIC NO"><span style="color:red;"></span> <br><br>
<input type="text" name="mf" id="gender" placeholder="Type your Gender"><span style="color:red;"></span> <br><br>


  
  <input type="password" name="password" id="password" placeholder="Password"><span style="color:red;">@error('password') {{$message}}@enderror</span> <br><br>
  <input type="password" name="reenterpassword" id="reenterpassword" placeholder="Re enterPassword"><span style="color:red;">


<input type="submit" value="Login">
</form>


</div>



</body>
</html>