<?php
    include '../Components/Connection.php';

    if(isset($_POST['submit'])){

        $email = $_POST['email'];
        $email = filter_var($email, htmlspecialchars($email));

        $pass = sha1($_POST['password']);
        $pass = filter_var($pass, htmlspecialchars($pass));

        $select_cust = $conn -> prepare("SELECT * FROM 'fangusers' WHERE userEMAIL = ? AND userPassword = ?");
        $select_cust -> execute([$email, $pass]);
        $row = $select_cust -> fetch(PDO::FETCH_ASSOC);

        if($select_cust -> rowCount() > 0){
           setcookie('customer_id', $row['id'], time() + 60*60*24*30, '/');
           header('location:index.php'); 
        }else{
            $warning_msg[] = 'incorrecct email or password';
        }
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styling/Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
     integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Registration Page</title>
</head>
<body>
  

    <div class="form-container">
        <form action="" method="post" class="register">

            <div class="form-flex">
                <h3>Log-In </h3>
                <div class="form-col">
                    <div class="input-field">
                        <label for="">Your Email:</label><br>
                        <input type="email" name="email" required class="box">
                    </div>
                    <div class="input-field">
                        <label for="">Enter Password:</label><br>
                        <input type="password" name="password" required class="box">
                    </div>
                    <p>Do not have an account? Then Register <a href="#">here.</a> </p>
                    <input type="submit" value="Register" name="submit">
                </div>
            </div>
        </form>
    </div>


    <?php
         include '../Components/alerts.php';
    ?>
    <script src="JavaScrypt/Scrypt.js"></script>
</body>
</html>