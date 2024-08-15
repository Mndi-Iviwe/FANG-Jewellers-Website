<?php
    include '../Components/Connection.php';

    if(isset($_POST['submit'])){
        $id = unique_id();
        $fname = $_POST['fname'];
        $fname = filter_var($fname, htmlspecialchars($fname));

        $lname = $_POST['fname'];
        $lname = filter_var($lname, htmlspecialchars($lname));

        $email = $_POST['email'];
        $email = filter_var($email, htmlspecialchars($email));

        $pass = sha1($_POST['password']);
        $pass = filter_var($pass, htmlspecialchars($pass));

        $cpass = sha1($_POST['confirm']);
        $cpass = filter_var($pass, htmlspecialchars($pass));


        $select_cust = $conn -> prepare("SELECT * FROM 'fangusers' WHERE userEMAIL = ?");
        $select_cust -> execute([$email]);

        if($select_cust -> rowCount() > 0){
            $warning_msg[] = 'email already exists';
        }else{
            if($pass != $cpass){
                $warning_msg[] = 'confirm password not matched';
            }else{
                $insert_cust = $conn -> prepare("INSERT INTO 'fangusers'(FANG_ID, userfNAME, userSNAME, userEMAIL, userPASSWORD) VALUES(?,?,?,?,?)");
                $insert_cust -> execute([$id,$fname,$lname,$email,$cpass]);
                $success_msg[] = 'new customer registered! Please Login now';
            }
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
                <h3>Register Now!</h3>
                <div class="form-col">
                    <div class="input-field">
                        <label for="">Your First Name:</label><br>
                        <input type="text" name="fname" required>
                    </div>
                    <div class="input-field">
                        <label for="">Your Last Name:</label><br>
                        <input type="text" name="lname" required class="box">
                    </div>
                    <div class="input-field">
                        <label for="">Your Email:</label><br>
                        <input type="email" name="email" required class="box">
                    </div>
                    <div class="input-field">
                        <label for="">Enter Password:</label><br>
                        <input type="password" name="password" required class="box">
                    </div>
                    <div class="input-field">
                        <label for="">Confirm Password</label><br>
                        <input type="password" name="confirm"  required class="box">
                    </div>
                    <p>Already have an account? Then Log-in <a href="#">here.</a> </p>
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