<?ph
//creating a table using PDO

$host = 'localhost';
$user = 'root':
$db = 'db';
$pass = '';

try{
    $pdo = new PDO("mysql:host=$host;dbmane=$db", $user, $pass);

    $dql = "CREATE TABLE users(id INT(6) NOT NULL  AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(20) NOT NULL,
    password VARCHAR(20) NOT NULL)";

    $pdo -> exec($sql);

    echo "table created successfully";
}catch(exeption $e){

    echo "Error while creating the table".$e.getMessage();
}

?>