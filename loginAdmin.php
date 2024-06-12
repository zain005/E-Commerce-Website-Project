<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>Login as Admin</title>
    <link rel="stylesheet" type="text/css" href="assets/link/css/admin.css">
</head>
<body style="background-color:black">
    <form name="loginForm" method="post" action="loginAdminSql.php">
        <table align="center" width="30%">
            <tr>
	            <td><h2 style="color:white">Welcome back Admin!</h2></td>
            </tr>
            <tr>	
	            <td><input type="text" name="username" id="user" placeholder="Email" required></td>	
            </tr>
            <br>
            <tr>	
                <td><input type="password" name="password" id="pass" placeholder="Password" required></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
            	<td><input type="submit" name="login" value="Log In" class="click" id="logoutButton"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
            	<td><a href="index.php" id="logoutButton" style="float: right;">Back</a></td>
            </tr>
        </table>
    </form>
</body>