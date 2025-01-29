<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Employees of the limited company</h2>
    <?php
    $host = "localhost";
    $dbname = "employeedata";
    $user = "postgres";
    $password = "#iamAfrica";
    $port = "5432";

    $conn = pg_connect("host=$host dbname=$dbname password=$password port=$port user=$user");

    if (!$conn) {
        echo "Error:Unable to connect to database.";
        exit;
    }
    echo "Successful connection";

    $query = "SELECT * FROM employees";
    $result = pg_query($conn, $query);
    if (!$result) {
        echo "An error occurred while executing query";
        exit;
    }
    ?>
    <table border="1">
        <thead>
            <tr>
                <th>employee_id</th>
                <th>firstname</th>
                <th>lastname</th>
                <th>email</th>
                <th>City</th>
            </tr>
        </thead>

        <tbody>
            <?php
            while ($row = pg_fetch_assoc($result)) {
                echo "
            <tr>
               <td>{$row['employeeid']}</td>
               <td>{$row['firstname']}</td>
               <td>{$row['lastname']}</td>
               <td>{$row['email']}</td>
               <td>{$row['city']}</td>
            </tr>
            ";
            }
            ?>
        </tbody>
    </table>

    <?php
    pg_close($conn);
    ?>
</body>

</html>