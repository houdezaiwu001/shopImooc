<?php
require_once '../include.php';
$act = $_REQUEST['act'];
$id = $_REQUEST['id'];
if($act=="logout"){
    logout();
}elseif ($act=="addAdmin"){
    $mes=addAdmin();
}elseif ($act=="editAdmin"){
    $mes = editAdmin($id);
}elseif ($act==delAdmin){
    $mes = delAdmin($id);
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
// <?php
if($mes){
    echo $mes;
}
?>
 
</body>
</html>