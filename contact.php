<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Jim Harbaugh</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/custom.css" rel="stylesheet">

    <script type="text/javascript">
     function checkEmail(){
        if (em.value != em2.value){
            alert("The emails must match!");
            return false;
        }
     }
    </script>


</head>

<body>
        <?php 
            $filename = basename(__FILE__);
            include("header.php"); 
        ?>


        <body>
        <form action="gotIt.php" method = "POST" onsubmit = "return checkEmail()">
            <fieldset>
                <legend>Contact Us</legend>
                <label>Name: <input type = "name" name = "name" value = "Your Name" required/></label>
                <label>Email:<input type = "email" name = "email" id = "em" required/></label>
                <label>Confirm Email:<input type = "email" name = "confirm" id = "em2" required/></label>
                <label>Zip code:<input type = "text" name = "zip" pattern="[0-9]{5}" required placeholder = "48105"/></label>
            <fieldset>
                <legend>Year:</legend>
                <input type="radio" name="year" value="Freshman" />Freshman<br />
                <input type="radio" name="year" value="Sophomore"/>Sophomore<br />
                <input type="radio" name="year" value="Junior"/>Junior<br />
                <input type="radio" name="year" value="Senior"/>Senior<br />
            </fieldset>
            <input type = "submit" value ="Send data"/>
        </fieldset>

        </form> 



        <?php 
            $filename = basename(__FILE__);
            include("footer.php"); 
        ?>

</body>


</html>