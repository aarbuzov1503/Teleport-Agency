<?

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    $dbname = '#';
    $dbuser = '#';
    $dbpass = '#';

   $pdo = new PDO("mysql:host=localhost;dbname=$dbname", $dbuser, $dbpass);
    $stmt = $pdo->prepare('INSERT INTO orders (name, phone, email) VALUES(:name, :phone, :email )');

    
    $stmt->bindValue(':name', $_POST['name']);
    $stmt->bindValue(':phone', $_POST['phone']);
    $stmt->bindValue(':email', $_POST['email']);
    

    if ($stmt->execute()) {
        echo '1';
    }
    ?>
