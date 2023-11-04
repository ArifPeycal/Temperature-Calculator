<?php  
       if ($_POST) {
              $fahrenheit = $_POST["fahrenheit"] ;  
              $country = $_POST["country"] ;  

              $celsius = (($fahrenheit-32)*5)/9 ;  
       }
?>  

<html>
       <body>
       <h1>Fahrenheit to Celsius Calculator</h1>
       <form action="" method="post">
       Country: <input type="text" name="country"><br>
       Fahrenheit: <input type="number" name="fahrenheit"><br><br>
<input type="submit"><br><br>
<?php 
if (isset($celsius)) {
       echo "A country of <b>" , ucwords($country), "</b> is currently <b>" , round($celsius,2), "</b> degree Celsius";
}
?>
       </body>
</html>