<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>WEB SERVER SCHOOL</title>
        <link rel="stylesheet" href="css\style1.css">
    </head>
    <body>

        <div class="block">
            <h3>SIGNING PAGE</h3>
            <form action="admin.php" method="POST">
                <label for="uname">Username</label>
                <input type="text" id="uname" name="username" placeholder="Your username.." required>

                <label for="passwrd">Password</label>
                <input type="password" id="passwrd" name="pwd" placeholder="Your Password.." required>
            
                <input type="submit" value="Connecter">
            </form>
        </div>

    </body>
</html>


