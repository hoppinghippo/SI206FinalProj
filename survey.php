<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Harbaugh</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/custom.css" rel="stylesheet">


</head>

<body>
        <?php 
            $filename = basename(__FILE__);
            include("header.php"); 
        ?>
    <form action="" method="post">
        <fieldset>
            <legend>Contact Us</legend>
            <label>Name:<input type="name" name="name" placeholder="Jim Harbaugh" required/></label><br />
            <label>Email:<input type="email" name="email" placeholder="jimharbaugh@umich.edu" required/></label><br />
            
            <legend>Year:</legend>
            <input type="radio" name="year" value="Freshman"/>Freshman<br />
            <input type="radio" name="year" value="Sophomore"/>Sophomore<br />
            <input type="radio" name="year" value="Junior"/>Junior<br />
            <input type="radio" name="year" value="Senior"/>Senior<br />

            <label>Major:<input type="major" name="major" placeholder="Major"></label><br />
            <label>Questions/Comments/Concerns:</label><br />
                <textarea rows="4" cols="50"></textarea><br />

            <button type="submit">SUBMIT</button>
            </fieldset>
        </form>

 

</body>


</html>