<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="/form.css">
</head>

<body>
    <form action="" method="POST">
        @csrf
        <h1>Sign Up Form</h1>
        <div class="icon">
            <i class="fas fa-user-circle"></i>
        </div>
        <div class="formcontainer">
            <div class="container">
                <label for="uname"><strong>Name</strong></label>
                <input type="text" placeholder="Enter Username" name="name" required>
                <label for="mail"><strong>E-mail</strong></label>
                <input type="text" placeholder="Enter E-mail" name="email" required>
                <label for="psw"><strong>Password</strong></label>
                <input type="password" placeholder="Enter Password" name="password" required>

            </div>
            <button type="submit"><strong>SIGN UP</strong></button>

        </div>
    </form>
</body>

</html>