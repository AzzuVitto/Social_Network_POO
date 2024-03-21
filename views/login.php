<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1> Welcome </h1>
    <h2>LOGIN</h2>
    <form action="/login" method="POST">
        <div>
            <input type="text" placeholder="Your Username" name="userName">

            <?php if (isset(LoginController::getErrors()['username'])) echo "<p>" . LoginController::getErrors()['username'] . "</p>" ?>
        </div>
        <br>
        <div>

            <input type="text" placeholder="Your Password" name="password">
            <?php if (isset(LoginController::getErrors()['password'])) echo "<p>" . LoginController::getErrors()['password'] . "</p>" ?>
            <button type="submit" name="log"> Valider </button>
    </form>

</body>

</html>