<? 

function pdo(){
    $host = "localhost";
    $dbname = "registr";
    $dbuser= "root";
    $pass = "";

    return new PDO("mysql:host=$host; dbname=$dbname", $dbuser, $pass);
}

function userReg($name,$lastN,$course){
    $pdo = pdo();

    $query="INSERT INTO `users`( name,lastN,course ) VALUES (?,?,?)";
    $driver = $pdo->prepare($query);
    $driver->execute([$name, $lastN, $course]);
    
}




