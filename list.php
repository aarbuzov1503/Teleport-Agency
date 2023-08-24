<?

    $dbname = 'cl92747_travel';
    $dbuser = 'cl92747_travel';
    $dbpass = 'cl92747_travelPass';

    $pdo = new PDO("mysql:host=localhost;dbname=$dbname", $dbuser, $dbpass);
    $stmt = $pdo->query('SELECT * FROM orders ORDER BY id DESC');

?>
<!DOCTYPE html>
<html>
    <head>
    	 <link rel="shortcut icon" href="img/logo-w.svg" type="image/x-icon" />
        <title>Список заявок</title>
        <style>
            table {
                border: 1px solid darkgray;
                border-collapse: collapse;
            }

            th {
                background-color: lightblue;
            }

            th, td {
                border: 1px solid darkgray;
                padding: 5px;
            }
        </style>
    </head>
    <body>
        <table>
        <tr>
            <th>ID</th>
            <th>Имя</th>
            <th>Телефон</th>
            <th>E-mail</th>
        </tr>
            <?
                foreach ($stmt as $row) {
                    echo '<tr>';
                    echo '<td>' . $row['id'] . '</td>';
                    echo '<td>' . $row['name'] . '</td>';
                    echo '<td>' . $row['phone'] . '</td>';
                    echo '<td>' . $row['email'] . '</td>';
                    echo '</tr>';
                }
            ?>
        </table>
    </body>
</html>