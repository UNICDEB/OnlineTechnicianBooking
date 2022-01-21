<!DOCTYPE html>
<html>
<head>
    <title>Admin LogIn</title>
    <link rel="icon" href="../image/a-29.png" type="image/png">
    <link rel="stylesheet" href="W3.css"/>

    <style>
        .center {
            margin: auto;
            width: 39%;
            border: 3px;
            padding: 10px;
        }
	body {
		//background-color: #DF8081;
		background-image: url(image/winter.jpg);
	}
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
        $(function(){
            $('#form').on('submit', function(e){
                e.preventDefault();

                $.ajax({
                    url: "login-sql.php",
                    method: "POST",
                    data: {
                        username: $('#username').val(),
                        password: $('#password').val()
                    }
                }).done(function(response) {
                    alert(response);
                    if(response == 'success')
                    {
                        window.location.href="admin.php";
                    }
                    else
                    {
                        window.location.href="index.php";
                    }
                });
            });
        });
    </script>
</head>
<body class="center">

<div>
    <p style="height:90px"></p>

        <form method="post" id="form" action="">
            <table width="500" class="w3-table w3-striped w3-bordered w3-card-4 w3-container w3-center w3-animate-opacity">
                <tr> <td colspan="3" style="text-align:center; vertical-align: middle; font-family: Vijaya, bold;font-size: xx-large">Admin Log IN</td></tr>
                <tr> <td colspan="3" style="text-align:center;"><img src="../image/quiz1.png" alt="Not Found"></td> </tr>
                <tr>
                    <td style="vertical-align:middle;"><b>User Name</b></td>
                    <td style="vertical-align:middle;"><b>:</b></td>
                    <td><input type="text" class="w3-input w3-border w3-round-large" placeholder="User Name" name="username" id="username" /></td>
                </tr>
                <tr>
                    <td style="vertical-align:middle;"><b>password</b></td>
                    <td style="vertical-align:middle;"><b>:</b></td>
                    <td><input type="password" class="w3-input w3-border w3-round-large" placeholder="password" name="password" id="password" /></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" class="w3-btn w3-round-large w3-teal" name="login" id="login" value="Log In" /></td>
                </tr>
            </table>
        </form>

</div>


</body>
</html>
