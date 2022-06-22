 <?php 
 try
{
	$pdo= new PDO('mysql:host=localhost;dbname=laba5_itech;charset=utf8','root','');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	if(empty($_POST['name1']))exit("Поле не заполнено");
	$name1=$_POST['name1'];
	$sql = "SELECT count(*) FROM worker as w JOIN department as d ON (d.ID_Department = w.FID_Department) 
	WHERE d.chief=:newName";
	$result=$pdo->prepare($sql);
	$result->execute(['newName'=>$name1]);
	
	while ($row=$result->fetch(PDO::FETCH_BOTH)) 
	{

		echo "Число сотрудников: ".$row[0];
	}
}
catch(PDOException $e)
{
	echo $e->getMessage();
}
?>