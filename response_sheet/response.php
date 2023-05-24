<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="pngwing.com.ico">
    <link rel="stylesheet" type="text/css" href="response.css">
    <title>response-sheet</title>
</head>
<body>
    <form action="form.php" method="post">
        <div class="google_form">
            <div class="title-div">
                <h1>Google Form</h1>
                <p>This Foogle Form is created for testing.</p>
                <p class="required">*required</p>
            </div>

            <div class="name-div">
                <div class="name">First Name
                    <span class="required">*</span> 
                </div>
                <div class="input-div"><input type="text" placeholder="Your Answer" name="first_name" required></div>
            </div>

            <div class="name-div">
                <div class="name">Last Name
                    <span class="required">*</span> 
                </div>
                <div class="input-div"><input type="text" placeholder="Your Answer" name="last_name" required></div>
            </div>

            <div class="name-div">
                <div class="name">Roll Number
                    <span class="required">*</span> 
                </div>
                <div class="input-div"><input type="text" placeholder="Your Answer" name="roll_number" required></div>
                <p style="color:red">
                    <?php 
                        if(isset($arr['r'])) echo $arr['r'];
                    ?>
                </p>
            </div>

            <div class="name-div">
                <div class="name">Phone Number
                    <span class="required">*</span> 
                </div>
                <div class="input-div"><input type="text" placeholder="Your Answer" name="phn_number" required></div>
            </div>

            <div class="name-div">
                <div class="name">E-Mail 
                    <span class="required">*</span> 
                </div>
                <div class="input-div"><input type="text" placeholder="Your Answer" name="email" required></div>
            </div>

            <div class="name-div">
                <div class="name">Stream 
                    <span class="required">*</span> 
                </div>
                <div class="input-div"><input type="text" placeholder="Your Answer" name="stream" required></div>
            </div>

            <div class="name-div">
                <div class="name">Gender
                    <span class="required">*</span> 
                </div>
                <div class="input-div"><input type="text" placeholder="Your Answer" name="gender" required></div>
            </div>

            <div class="name-div">
                <div class="name">Passout Year 
                    <span class="required">*</span>
                 </div>
                <div class="input-div"><input type="number" placeholder="Your Answer" name="passout" required></div>
            </div>

            <div>
                <input class="btn" type="submit" value="submit" name="submit">
            </div>

            <center>
                &copy; CopyRights By Ajay.
            </center>

        </div>
    </form>
</body>
</html>