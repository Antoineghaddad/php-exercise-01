
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>
body{
    margin-left:10%;
}

.form-control{
    width:300px;
}
.yearly{
    float:left;

}
.monthly{
    float:left;
    margin-left:10px;
}

</style>
</head>
<body>
<form action="part2.php" method="post">
    <label for="salary">Salary</label>
<input type ="number" id="salary" name = "salary" class="form-control" required>
<label for="yearly">Yearly</label>
<input id="yearly" type="radio"name = "type"value="yearly" checked>
<label for="monthly">Monthly</label>
<input id="monthly" type="radio"name = "type" value="monthly" >
<br>
<label for="tax-free">Tax Free</label>
<input type ="number" id="tax-free" name = "tax-free" class="form-control" placeholder="optional">
<input type="submit" class="btn btn-primary">
</form>
<?php
$salary = $_POST["salary"];
$free = $_POST["tax-free"];
if($_POST["type"]=="monthly"){
    $salary *=12;
}
if($salary < 10000 && isset($_POST["salary"])){
    $salarywithfree = $salary + $free;
    $salarywithfreemonth = round($salarywithfree*100/12)/100;

    echo "<div class='yearly'>";
    echo "Yearly<br>";
    echo "Salary: $salarywithfree$<br>";
    echo "Tax: 0$<br>";
    echo "Social security fee: 0$<br>";
    echo "Salary after tax: $salarywithfree$<br>";
    echo "</div>";


    echo "<div class='monthly'>";
    echo "Yearly<br>";
    echo "Salary: $salarywithfreemonth$<br>";
    echo "Tax: 0$<br>";
    echo "Social security fee: 0$<br>";
    echo "Salary after tax: $salarywithfreemonth$<br>";
    echo "</div>";
    
}
else if($salary >= 10000 && $salary < 25000 && isset($_POST["salary"])){
    $salarywithfree = $salary + $free;
    $tax = $salary *0.11;
    $social = $salary *0.04;
    $total = $salarywithfree -($tax+$social);



    $salarywithfreemonth =round($salarywithfree*100/12)/100;
    
    $taxmonth = round(($salary *11)/12)/100;
    $socialmonth = round(($salary *4)/12)/100;
    $totalmonth = round(($salarywithfree -($tax+$social))/0.12)/100;




    echo "<div class='yearly'>";
    echo "Yearly<br>";
    echo "Salary: $salarywithfree$<br>";
    echo "Tax: $tax$<br>";
    echo "Social security fee: $social$<br>";
    echo "Salary after tax: $total$<br>";
    echo "</div>";


    echo "<div class='monthly'>";
    echo "Monthly<br>";
    echo "Salary: $salarywithfreemonth$<br>";
    echo "Tax: $taxmonth$<br>";
    echo "Social security fee: $socialmonth$<br>";
    echo "Salary after tax: $totalmonth$<br>";
    echo "</div>";


}
else if($salary >= 25000 && $salary < 50000 && isset($_POST["salary"])){
    $salarywithfree = $salary + $free;
    $tax = $salary *0.30;
    $social = $salary *0.04;
    $total = $salarywithfree -($tax+$social);


    
    $salarywithfreemonth =round($salarywithfree*100/12)/100;
    
    $taxmonth = round(($salary *11)/12)/100;
    $socialmonth = round(($salary *4)/12)/100;
    $totalmonth = round(($salarywithfree -($tax+$social))/0.12)/100;



    echo "<div class='yearly'>";
    echo "Yearly<br>";
    echo "Salary: $salarywithfree$<br>";
    echo "Tax: $tax$<br>";
    echo "Social security fee: $social$<br>";
    echo "Salary after tax: $total$<br>";
    echo "</div>";


    echo "<div class='monthly'>";
    echo "Monthly<br>";
    echo "Salary: $salarywithfreemonth$<br>";
    echo "Tax: $taxmonth$<br>";
    echo "Social security fee: $socialmonth$<br>";
    echo "Salary after tax: $totalmonth$<br>";
    echo "</div>";


}
else if($salary>=50000&& isset($_POST["salary"])){
    $salarywithfree = $salary + $free;
    $tax = $salary *0.45;
    $social = $salary *0.04;
    $total = $salarywithfree -($tax+$social);


    
    $salarywithfreemonth =round($salarywithfree*100/12)/100;
    
    $taxmonth = round(($salary *11)/12)/100;
    $socialmonth = round(($salary *4)/12)/100;
    $totalmonth = round(($salarywithfree -($tax+$social))/0.12)/100;



    echo "<div class='yearly'>";
    echo "Yearly<br>";
    echo "Salary: $salarywithfree$<br>";
    echo "Tax: $tax$<br>";
    echo "Social security fee: $social$<br>";
    echo "Salary after tax: $total$<br>";
    echo "</div>";


    echo "<div class='monthly'>";
    echo "Monthly<br>";
    echo "Salary: $salarywithfreemonth$<br>";
    echo "Tax: $taxmonth$<br>";
    echo "Social security fee: $socialmonth$<br>";
    echo "Salary after tax: $totalmonth$<br>";
    echo "</div>";


}
?>
</body>