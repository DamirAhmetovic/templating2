<!DOCTYPE html>
<html>
<head>
<title>Mad Lips</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="templating.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
</head>
<body>

<?php include 'header.php';?>


    <div class="container2">

     

    <?php
     function test_input($data) {
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
     }


    $huisdierErr = $persoonErr = $verveeltErr = $speelgoedErr = $spijbelErr =   "";
    $huisdier = $persoon = $verveelt = $speelgoed = $spijbel =  "";
    

   
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["huisdier"])) {
            $huisdierErr = "huisdier is required";
        }
        else {
            $huisdier = test_input($_POST["huisdier"]);
                if (!preg_match("/^[a-zA-Z ]*$/",$huisdier)) {
                    $huisdierErr = "Only letters and white space allowed"; 
                }
        }



        if (empty($_POST["persoon"])) {
            $persoonErr = "persoon is required";
    }
    else {
        $persoon = test_input($_POST["persoon"]);
            if (!preg_match("/^[a-zA-Z ]*$/",$persoon)) {
                $persoonErr = "Only letters and white space allowed"; 
            }
    }



        if (empty($_POST["verveelt"])) {
            $verveeltErr = "verveelt is required";
    }
    else {
        $verveelt = test_input($_POST["verveelt"]);
            if (!preg_match("/^[a-zA-Z ]*$/",$verveelt)) {
                $verveeltErr = "Only letters and white space allowed"; 
            }
    }



        if (empty($_POST["speelgoed"])) {
            $speelgoedErr = "speelgoed is required";
    }
    else {
        $speelgoed = test_input($_POST["speelgoed"]);
            if (!preg_match("/^[a-zA-Z ]*$/",$speelgoed)) {
                $speelgoedErr = "Only letters and white space allowed"; 
            }
    }



        if (empty($_POST["spijbel"])) {
            $spijbelErr = "spijbel is required";
    }
    else {
        $spijbel = test_input($_POST["spijbel"]);
            if (!preg_match("/^[a-zA-Z ]*$/",$spijbel)) {
                $spijbelErr = "Only letters and white space allowed"; 
            }
    }
}

    if(empty($huisdier) or empty($persoon) or  empty($verveelt) or empty($speelgoed) or empty($spijbel)){
             
    ?>

    <form class="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            naam <input type="text" name="huisdier">
            <span class="error">* <?php echo $huisdierErr;?></span>
            <br><br>
    
            achternaam <input type="text" name="persoon">
            <span class="error">* <?php echo $persoonErr;?></span>
            <br><br>
    
    
            leeftijd <input type="text" name="verveelt">
            <span class="error">* <?php echo $verveeltErr;?></span>
            <br><br>
    
            email <input type="text" name="speelgoed">
            <span class="error">* <?php echo $speelgoedErr;?></span>
            <br><br>
    
            vraag <input type="text" name="spijbel">
            <span class="error">* <?php echo $spijbelErr;?></span>
            <br><br>
    
           

            <div class="button"><input type="submit" value="Versturen"></div>
        </form>
    </div>
<?php
    }
?>


    <div>
        <?php 
            
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "naam: ";
            echo $huisdier;
            echo "<br><br>";
            echo "achternaam: ";
            echo $persoon;
            echo "<br><br>";
            echo "leeftijd: ";
            echo $verveelt;
            echo "<br><br>";
            echo "email: ";
            echo $speelgoed;
            echo "<br><br>";
            echo "vraag: ";
            echo $spijbel;
        }
            ?>
    </div>

    <?php include 'clock.php';?>
    <?php include 'footer.php';?>


    </body>
</html>