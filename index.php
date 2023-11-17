<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DateWave</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    table {
        border-collapse: collapse;
        width: 80%;
        margin: auto;
        background-color: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }

    th,
    td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #3498db;
        color: #fff;
    }

    tr:hover {
        background-color: #f5f5f5;
    }
</style>

<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // SQL query to retrieve data from your table
    $query = "SELECT p.IDPersonnel, p.Nom, p.Prenom, p.Email, p.Telephone, p.Role, p.IDEquipe, p.statut,  e.NomEquipe, e.DateCreation
    FROM personnel p
    INNER JOIN equipes e ON p.IDEquipe = e.IDEquipe";
    $result = mysqli_query($conn, $query);

    // Check if the query was successful
    if ($result) {
        // Display data in a table
        echo "<table border='1'>
                <tr>
                    <th>IDPersonnel</th>
                    <th>LastName</th>
                    <th>FirstName</th>
                    <th>Email</th>
                    <th>TEL</th>
                    <th>Role</th>
                    <th>Statut</th>
                    <th>EquipeName</th>
                    <th>IDEquipe</th>
                    <th>DATECreation</th>
                </tr>";

        // Fetch and display each row
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>

                    <td>" . $row['IDPersonnel'] . "</td>
                    <td>" . $row['Nom'] . "</td>
                    <td>" . $row['Prenom'] . "</td>
                    <td>" . $row['Email'] . "</td>
                    <td>" . $row['Telephone'] . "</td>
                    <td>" . $row['Role'] . "</td>
                    <td>" . $row['statut'] . "</td>
                    <td>" . $row['NomEquipe'] . "</td>
                    <td>" . $row['IDEquipe'] . "</td>
                    <td>" . $row['DateCreation'] . "</td>
                    </tr>";
        }

        echo "</table>";

        // Free the result set
        mysqli_free_result($result);
    } else {
        // Handle error if the query fails
        echo "Error executing the query: " . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);
    ?>

</body>

</html>