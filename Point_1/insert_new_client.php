<html>
    <body>

        <form action="client_created.php" method="post">
        <h3>New Client</h3>
        <p>VAT: <input type="text" name="VAT"/></p>
        <p>Name: <input type="text" name="name_"/></p>
        <p>Birth Date: <input type="date" name="birth_date"/></p>
        <p>Street: <input type="text" name="street"/></p>
        <p>City: <input type="text" name="city"/></p>
        <p>Zip: <input type="text" name="zip"/></p>
        <p>Gender: <input type="text" name="gender"/></p>
        <p>Age: <input type="number" name="age"/></p>
        
<?php
    include 'connect_db.php';
?>
        <p><input type="submit" value="Submit"/></p>
        </form>
    </body>
</html>