<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="pngwing.com.ico">
    <title>response-sheet</title>
    <style>
        body{
            display: flex;
            justify-content: center;

        }
        .div{
            height: 150px;
            width: 600px;
            background-color: #FDFEFE;
            margin: 15px;
            border-radius: 8px;
            border-top: 8px solid #6703c4;
            padding: 25px;
            border-bottom: 2px solid black;
            border-left: 2px solid black;
            border-right: 2px solid black;
        }

        .button{
            height: 25px;
            width: 60px;
            background-color: #6703c4;
            border-radius: 5px;
            font-size: 14px;
            letter-spacing: .5px;
            font-weight: 540;
            border: none;
            padding: 10px;
            position: absolute;
            font-size: 18px;
            margin: 15px;
            color: #ede7f6;
            text-decoration-line: none;
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="div">
        <?php

            $con = new mysqli('localhost','myadmin','Ajay@1441','project');

            if(isset($_POST['submit']))
            {
                $fn = $_POST['first_name'];
                $ln = $_POST['last_name'];
                $roll = $_POST['roll_number'];
                $phn = $_POST['phn_number'];
                $mail = $_POST['email'];
                $stream = $_POST['stream'];
                $gender = $_POST['gender'];
                $pass = $_POST['passout'];


                $query = "INSERT INTO `response`(`First_Name`,`Last_Name`,`Roll_Number`,`Phn_Number`,`E-Mail`,`Stream`,`Gender`,`Passout_Year`) 
                values('$fn','$ln','$roll','$phn','$mail','$stream','$gender','$pass')";

                if(mysqli_query($con,$query)){
                    echo "<script>alert('Sucessfully done')</script>";
                }
                else{
                    echo "<script>alert('Failed! plz try again')</script>";
                }
            }
        ?>
        <p>Thanks For Response</p>
        <p>
            Refill
        </p>
        <a class="button" href="response.php">Back</a>
    </div>
</body>