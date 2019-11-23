<html>
    <body>
<?php
    include 'connect_db.php';

    $VAT = $_REQUEST['VAT'];
    $name_ = $_REQUEST['name_'];
    $birth_date =$_REQUEST['birth_date'];
    $street = $_REQUEST['street'];
    $city = $_REQUEST['city'];
    $zip = $_REQUEST['zip'];
    $gender = $_REQUEST['gender'];
    $age = $_REQUEST['age'];


    $sql = "INSERT INTO client VALUES($VAT, '$name_', '$birth_date', '$street', '$city', '$zip', '$gender', $age)";

    $result = $connection->query($sql);
    
    if ($result == FALSE)
    {
        $info = $connection->errorInfo();
        echo("<p>Error: {$info[2]}</p>");
        exit();
    }

    //Display the new client

    echo("<table border=\"1\">");
    echo("<tr><td>VAT</td><td>Name</td><td>Birth Date</td><td>Street</td><td>City</td><td>Zip</td><td>Gender</td><td>Age</td></tr>");

    echo("<tr><td>");
    echo($VAT);
    echo("</td><td>");
    echo($name_);
    echo("</td><td>");
    echo($birth_date);
    echo("</td><td>");
    echo($street);
    echo("</td><td>");
    echo($city);
    echo("</td><td>");
    echo($zip);
    echo("</td><td>");
    echo($gender);
    echo("</td><td>");
    echo($age);
    echo("</td><td>");
    echo("<a href=\"select_date_appointment.php?VAT_client=");
    echo($VAT);
    echo("\">Create Appointment</a>\n");
    echo("</td></tr>");

?>
        <form action="search_clients.php" method="post">
        <p><input type="submit" value="Search Clients"/></p>
        </form>
    </body>
</html>