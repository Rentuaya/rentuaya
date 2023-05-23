<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Sample Login Form</title>
		<link href="css/style.css" rel="stylesheet">
    </head>
    <style>
        .error{
            background: #f2dede;
            color:#a94442;
            padding:10px;
            width: 95%;
            border-radius: 5px;
            margin: 20px auto;
        }
    </style>
    <body>                   
        <div class="center">
            <h1>LOGIN HERE</h1>
            <form method="post" action="login.php">
                <!-- Display for Errors in Inputs -->
                <?php if(isset($_GET['error']) ){ ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php }?>
                <!-- LOGIN INPUTS HERE -->
                <div class="txt_field">
                    <input type="text" name="username">
                    <label for="">Username</label>
                    <span></span>
                </div>
                <div class="txt_field">
                    <input type="password" name="password">
                    <label for="password">Password</label>
                    <span></span>
                </div>
                <input type="submit" value="Login" name="submit">
            </form>
        </div>
    </body>
</html>