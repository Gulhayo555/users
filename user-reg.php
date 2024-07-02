<? 
include('./db.php');

$name = $_POST['name'];
$lastN = $_POST['lastN'];
$course = $_POST['course'];
var_dump($_POST['name']);
 userReg($name,$lastN,$course);