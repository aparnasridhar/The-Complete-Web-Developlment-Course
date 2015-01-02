
<!DOCTYPE html>
<html>

<head>
    <title>Learning PHP</title>

    <meta charset="utf-8">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script type="text/javascript" src="jquery.min.js"></script>
    <style>
        
        #wrapper {
            width: 600px;
            margin: 0 auto;
            font-family: Helvetica;
            font-size: 1.2em;
        }
        input {
         	width: 300px;
            height: 30px;
            border-radius: 5px;
            
            padding: 5px;
            border: 1px solid grey;    
            margin-bottom: 10px;
            
            font-size: 1.2em;
        }
        label {
            float: left;
            width: 200px;
            padding-top: 7px;
        }
        #submitButton {
            height: 50px;
            margin-left: 214px;
            width: 100px;
        }
        
        #error
        {
        	color:red;
        	margin:20px;
        }

    </style>
</head>

<body>

    <div id="wrapper">

		 <div id="error"></div>
		 
                <form  method="post">
                

                    <label for="email">Email:</label>
                    <input name="email" id="email" />

                    <label for="phone">Telephone:</label>
                    <input name="phone" id="phone"/>

                    <label for="pass">Password:</label>
                    <input name="pass1" type="password" id="pass1" />

                    <label for="pass">Confirm Password:</label>
                    <input name="pass2" type="password" id="pass2"/>

                    <input type="submit" name="submit" id="submitButton" />

                </form>
                
               

            </div>
            
            <?php
        
             	print_r($_POST);
            	
            	if($_POST["submit"])
            	{
            		echo "hello";
            		$emailTo="apar.sridhar@gmail.com";
             		$subject="contant form";
             		$body="you're doing great";
             		$headers="From: aparsridhar@gmail.com";
            		mail($emailTo,$subject,$body,$headers);
            	}
            	
            
            ?>


</div>
</div>
</body>

</html>
