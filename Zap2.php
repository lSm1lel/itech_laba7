 <?php 
 try
{
	$pdo= new PDO('mysql:host=localhost;dbname=laba5_itech;charset=utf8','root','');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	if(empty($_POST['name2']))exit("Поле не заполнено");
	$ID_Projects=$_POST['name2'];
	$sql = "SELECT (time_end-time_start) FROM work w JOIN projects p On (w.FID_Projects=p.ID_Projects) WHERE p.name=:ID_Projects";
	$result=$pdo->prepare($sql);
	$result->execute(['ID_Projects'=>$ID_Projects]);
	
	while ($row=$result->fetch(PDO::FETCH_BOTH)) 
	{
		echo json_encode($row[0]);
	}
}
catch(PDOException $e)
{
	echo $e->getMessage();
}
?>	