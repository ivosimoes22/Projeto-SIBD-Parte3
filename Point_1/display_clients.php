<html>
    <body>

<?php
    include 'connect_db.php';

    $VAT = $_REQUEST['VAT'];
    $name_ = $_REQUEST['name_'];
    $street = $_REQUEST['street'];
    $city = $_REQUEST['city'];
    $zip = $_REQUEST['zip'];


    if(empty($VAT)) 
    {
        $sql = "SELECT * FROM client WHERE name_ LIKE '$name_%'
        AND street LIKE '$street%' AND city LIKE '$city%' AND zip LIKE '$zip%'";
    }
    else
    {
        $sql = "SELECT * FROM client WHERE VAT = '$VAT'";
    }

    $result = $connection->query($sql);
    
    if ($result == FALSE)
    {
        $info = $connection->errorInfo();
        echo("<p>Error: {$info[2]}</p>");
        exit();
    }
    echo("<table border=\"1\">");
    echo("<tr><td>VAT</td><td>Name</td><td>Birth Date</td><td>Street</td><td>City</td><td>Zip</td><td>Gender</td><td>Age</td></tr>");
    
    foreach($result as $row)
    {
        echo("<tr><td>");
        echo($row['VAT']);
        echo("</td><td>");
        echo($row['name_']);
        echo("</td><td>");
        echo($row['birth_date']);
        echo("</td><td>");
        echo($row['street']);
        echo("</td><td>");
        echo($row['city']);
        echo("</td><td>");
        echo($row['zip']);
        echo("</td><td>");
        echo($row['gender']);
        echo("</td><td>");
        echo($row['age']);
        echo("</td><td>");
        echo("<a href=\"select_date_appointment.php?VAT_client=");
        echo($row['VAT']);
        echo("\">Create Appointment</a>\n");
        echo("</td></tr>");
    }

    echo("</table>");
    $connection = null;
?>

        <form action="insert_new_client.php" method="post">
        <p><input type="submit" value="New Client"/></p>
        </form> 

    </body>
</html>