<?php 
include  'dbconnection.php';
if(isset($_REQUEST['del']))
{

$uid=intval($_GET['del']);

$sql = "delete from carro WHERE  id=:id";

$query = $dbconnection->prepare($sql);

$query-> bindParam(':id',$uid, PDO::PARAM_STR);

$query -> execute();

echo "<script>alert('Dado apagado com sucesso');</script>";

echo "<script>window.location.href='seleccao.php'</script>";
}
?>