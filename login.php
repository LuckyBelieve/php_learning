<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <form action="" method="POST">
        <div>
           <label for="username">username</label>
           <input type="text" name="username" id="username"> 
        </div>
        <div>
           <label for="email">email</label>
           <input type="email" name="email" id="email">
        </div>
        <div>
           <label for="password">password</label>
           <input type="password" name="password" id="password"> 
        </div>
        <input type="submit" name="submit" value="submit">
    </form>
    <?php
     if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        //user validation

        if($username == 'lucky' && $password == 'lucky123'){
            session_start();
            $_SESSION['username'] = $username;
            header('location: homepage.php');
        }else{
            echo "invalid email or password";
        }
     }
    ?>
</body>
</html>