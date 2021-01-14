<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family:Lexend Deca;
        }
        
        .form-wrapper {
            display: flex;
            flex-direction: column;
        }
        
        .form-wrapper label {
            font-weight: bold;
        }
        
        .form-wrapper input,
        button,
        textarea {
            margin: 5px 0;
        }

        .error{
            color:red;
        }
    </style>
</head>

<body>
    <?php
    $username_error = "";
    $mobile_error ="";
    if(isset($_POST['register']))
    {
        
        if($_POST['username']=="")
        {
            $username_error = "Please Fill Username!";
        }

        if(!preg_match('/^[A-Z]{1,}[a-z]{4,}_[0-9]{1,}$/',$_POST['username']))
        {
            $username_error = "Please Fill Username as per following Testuser_45!";
        }

        if(!preg_match('/^\d{10}$/',$_POST['mobile']))
        {
            $mobile_error = "Please Enter Valid Mobile Number!";
        }
        echo htmlspecialchars($_POST['address'],ENT_QUOTES);
    }

?>
        <div class="container">
            <form action="" method="post">
                <div class="form-wrapper">
                    <label for="username">Username</label>
                    <input type="text" name="username">
                    <span class="error"><?=$username_error ?></span>
                    <label for="email">Email</label>
                    <input type="email" name="email">
                    <label for="mobile">mobile</label>
                    <input type="text" name="mobile">
                    <small class="error"><?=$mobile_error ?></small>
                    <label for="password">Password</label>
                    <input type="password" name="pass">

                    <label for="Gender">Gender</label>
                    <div><input type="radio" name="gender" value="male"> Male &nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="female"> Female</div>


                    <label for="course">Course</label>
                    <div>
                        <input type="checkbox" name="courses[]" value="html"> HTML &nbsp;&nbsp;&nbsp;
                        <input type="checkbox" name="courses[]" value="css"> CSS &nbsp;&nbsp;&nbsp;
                        <input type="checkbox" name="courses[]" value="js"> JavaScript &nbsp;&nbsp;&nbsp;
                        <input type="checkbox" name="courses[]" value="php"> PHP &nbsp;&nbsp;&nbsp;
                        <input type="checkbox" name="courses[]" value="mysql"> MySql &nbsp;&nbsp;&nbsp;
                    </div>

                    <label for="Qualification">Qualification</label>
                    <select name="qualification">
                <option value="matric">10th - Matric</option>
                <option value="inter">12th - Inter</option>
                <option value="ug">Under Graduation</option>
            </select>

                    <label for="address">Address</label>
                    <textarea name="address" id=""></textarea>

                    <label for="photo">Photo</label>
                    <input type="file" name="pic">

                    <button type="submit" name="register">Register</button>
                </div>
            </form>
        </div>
</body>

</html>