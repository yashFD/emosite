<?php
ini_set('memory_limit', '-1'); 
$db_addr = 'localhost';		// address of MySQL server.
$db_user = 'root';		// Username to access server.
$db_pass = '';		// Password access server.
$db_name = 'cities';	// Name of database to connect to.
$con=mysqli_connect("localhost","root","","cities");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT c.city_name, s.city_name as cn, s.latitude, s.longitude, s.state FROM `cities` as c left join statelist as s on c.city_name = s.city_name ORDER by c.city_name ASC");

//$result = mysqli_query($con,"select * from statelist");
$filename = "cake-page.html";
$handle = fopen($filename, "r");
$contents = fread($handle, filesize($filename));
fclose($handle);
while($row = mysqli_fetch_array($result)) {
  echo $row['city_name'] . " " . $row['state'];
  echo "<br>";  
  $pagename = "cake-".strtolower(str_replace(" ",'-',$row['city_name'])).".html";



 $text_to_add = '<div class="category-info">'."<h2>www.emotiongift.com home delivers the flowers in <b>".$row['city_name']."</b> "."Call/whatsapp "."<b><a href='tel:8533976452' onclick='sendmsg();'>8533976452</a></b>". " For lowest price of fresh flowers and delicious cake   in <b>".$row['city_name']."</b>"."</h2><br><h1> Flower Shop in ".$row['city_name']."</h1>
    </h2><!-- <h2>  Make your special occasions with beautiful and sweeter with fresh flowers and delicious 
cakes delivered to you.Send a sweet sentiment to your special person with a beautiful flowers bouquet with cake.</h2>--></div>" ;
 

$citybasedpage3 = str_ireplace('bharatpur',strtolower(str_replace(" ",'-',$row['city_name'])),$contents);

// $citybasedpage = str_ireplace('mumbai',strtolower($row['city_name']),$re_with_title);
$file = fopen($pagename,"w");
echo fwrite($file,$citybasedpage3);
fclose($file);
 
}

mysqli_close($con);
?>
 