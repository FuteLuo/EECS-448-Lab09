
<?php
    echo "<link rel='stylesheet' href='style.css'>";
    echo "<h2><b>Welcome</b></h2><br>";
    $name = $_POST["name"];
    $password = $_POST["password"];
    $papertower = $_POST["papertower"];
    $trashbag = $_POST["trashbag"];
    $dishsoap = $_POST["dishsoap"];
    $shipping = $_POST["shipping"];
    $shippingCost = 0;
    $papertowerCost = $papertower * 11.99;
    $trashbagCost = $trashbag * 5.99;
    $dishsoapCost = $dishsoap * 2.29;
    $totalCost = 0;
    

    echo "Name: ".$name. "<br>";
    echo "Password: ".$password. "<br>";
    echo "<h2>Receipt</h2>";
    echo "<table>";
        echo "<tr>";
            echo "<th></th>";
            echo"<th>Quantity</th>";
            echo"<th>Cost Per Item</th>";
            echo"<th>Sub Total</th>";
        echo "</tr>";
        echo "<tr>";
            echo"<th>Paper Tower</th>";
            echo"<th>".$papertower."</th>";
            echo"<th>$11.99</th>";
            echo"<th>$".$papertowerCost."</th>";
        echo "</tr>";
        echo "<tr>";
            echo"<th>Trash bag</th>";
            echo"<th>".$trashbag."</th>";
            echo"<th>$5.99</th>";
            echo"<th>$".$trashbagCost."</th>";
        echo "</tr>";
        echo "<tr>";
            echo"<th>Dish Soap</th>";
            echo"<th>".$dishsoap."</th>";
            echo"<th>$2.29</th>";
            echo"<th>$".$dishsoapCost."</th>";
        echo "</tr>";
        echo "<tr>";
            echo "<th>Shipping</th>";
            echo "<th colspan='2'>".$shipping."</th>";
            echo "<th>";
                if($shipping == "free")
                {
                    echo "$0";
                    $shippingCost = 0;
                }
                else if($shipping == "Overnight")
                {
                    echo "$50";
                    $shippingCost = 50;
                }
                else if($shipping == "three day")
                {
                    echo "$5";
                    $shippingCost = 5;
                }
            echo "</th>";
        echo "</tr>";
        echo "<tr>";
            echo "<th colspan='3'>Total Cost</th>";
            $totalCost = $papertowerCost + $trashbagCost + $dishsoapCost + $shippingCost;
            echo "<th>$".$totalCost."</th>";
        echo "</tr>";
    echo "</table>";
?>