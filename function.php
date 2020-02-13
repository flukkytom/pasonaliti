<?php
## MySQL function connect : To connect Application to a Database
## $host = hostname or IP of database
## $port = database port default 3306 IP of database
## $user = Database User e.g root
## $pass = Database user Password
## $db = Database Name to be connected to

function connect($host, $port, $user, $pass, $db) {
	//merge hostname and port e.g localhost:3306
	$host=$host.":".$port;
	## Using the mysql_connect function to connect to DB..could also use mysql_pconnect 
	$cnx = mysql_connect($host,$user,$pass);
	## selecting the required database for the application
	$dbx =mysql_select_db($db);
	##Check if db is connected
	/*if ($cnx)
		echo 'Database Connection  Possible';
	if (!$cnx)
		echo 'Database Connection Not Possible';
	if ($dbx)
		echo 'Application Database selected';
	if (!$dbx)
		echo 'Application Database not selected';*/
	return $cnx;	
}
?>
<?php
## MySQL Connection Parameters
$db_server='localhost';
$db_port = '3306';
$db_name = 'olutola1_db';
$db_user = 'olutola1_olutola';
$db_password = 'QYBT69pKh4';

## Connect using the connect db function
$conn = connect($db_server,$db_port,$db_user,$db_password,$db_name);
?>
<?php
	function know_disc($i)	{
		if ($i=="D")	{
			$k="Dominance";
		}
		elseif ($i=="I")	{
			$k="Influence";
		}
		elseif($i=="S")	{
			$k="Steady";
		}
		elseif($i=="C")	{
			$k="Compliant";
		}
		return $k;
	}
## calculate score
function calculate_disc()	{
$d=0;$i=0;$s=0;$c=0;

	for ($n=1; $n<=25; $n++)	{
	
	$style=$_POST["i".$n];
	
	$query=@mysql_query("SELECT disc from score_sheet where style='".$style."' and num='".$n."'");
	$rdisc=@mysql_fetch_assoc($query);
	##echo $n ."-" .$style."-".$rdisc['disc']."<br />";
	##calculate
		if ($rdisc['disc']=="D")	{
			$d=$d+1;
		}
		elseif ($rdisc['disc']=="I")	{
			$i=$i+1;
		}
		elseif($rdisc['disc']=="S")	{
			$s=$s+1;
		}
		elseif($rdisc['disc']=="C")	{
			$c=$c+1;
		}
	}
	##display final
	

	#Display Result
	#echo know_disc("D"). "=".$d."<br />";
	#echo "Influence=". $i."<br />";
	#echo "Steady=". $s."<br />";
	#echo "Compliant=". $c."<br />";
	
	return array($d,$i,$s,$c);


} ##end of loop	

function displayresult($array)	{
	$max = max($array[0],$array[1],$array[2],$array[3]);

	###Get major trait
		if ($max==$array[0])	{
			$trait=know_disc("D");
			$disc_letter="D";
		}
		elseif ($max==$array[1])	{
			$trait=know_disc("I");
			$disc_letter="I";
		}
		elseif ($max==$array[2])	{
			$trait=know_disc("S");
			$disc_letter="S";
		}
		elseif($max==$array[3])	{
			$trait=know_disc("C");
			$disc_letter="C";
		}
		
	return array($trait,$disc_letter);
} ## display function

?>
