<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	
	  <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <title>POC</title>


 

</head>

<body>

<div class="row">

<div style="margin-left:auto;margin-top:10%;margin-right:auto;text-align:center;" >
<img src="img/logo_calque.png" alt="logo" height="250" width="375"></div>
  
<div style="margin-left:auto;margin-right:auto;width:20%;text-align:center;" >
      <form class="form-signin" name="form_login" method="post" action="Controleur/login.php" role="form">
            
        <input name="user_id" type="mail" id="user_id" placeholder="Name" class="form-control" autofocus> 
        <input type="password" name="password" id="password" placeholder="Password" class="form-control" >       
		<input class="btn btn-lg btn-primary btn-block" type="submit" name="Submit" value="Connect">
		<input class="btn btn-lg btn-primary btn-block" type="submit" name="Register" value="Create account">
      </form>
	
	</div>
 </div>

</body>
</html>