<?php
ini_set('memory_limit', '1024M');$db_addr = 'localhost';		
// address of MySQL server.$db_user = 'root';		// Username to access server.$db_pass = '';		// Password access server.$db_name = 'emotiongift_com';	// Name of database to connect to.
$con=mysqli_connect("localhost","root","","emotiongift_com");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
} 
/*
$result = mysqli_query($con,"SELECT c.city_name, s.city_name as cn, s.latitude, s.longitude, s.state FROM `emotiongift_com` as c left join statelist as s on c.city_name = s.city_name ORDER by c.city_name ASC"); 
*/
 //$result = mysqli_query($con,"select * from statelist");
 $result = mysqli_query($con,"select * from cities");
 
 
$filename = "cake-bharatpur.php";
$handle = fopen($filename, "r");
$contents = fread($handle, filesize($filename));
 
fclose($handle);
while($row = mysqli_fetch_array($result)) {
  echo $row['city_name'] . " " . $row['state'];
  echo "<br>";
  $pagename = "cake-".strtolower(str_replace(" ",'-',trim($row['city_name']))).".html";

/*

 $text_to_add = '<div class="category-info">'."<h2>www.emotiongift.com home delivers the cakes in <b>".$row['city_name']."</b> "."Call/whatsapp "."<b><a href='tel:8533976452' onclick='sendmsg();'>8533976452</a></b>". " For lowest price of fresh  and delicious cake and flowers in <b>".$row['city_name']."</b>"."</h2><br><h1> Cake Shop in ".$row['city_name']."</h1>
    </h2><!-- <h2>  Make your special occasions with beautiful and sweeter with fresh  and delicious 
cakes delivered to you.Send a sweet sentiment to your special person with a beautiful flowers bouquet with cake.</h2>--></div>" ;

$re_description = str_replace('replace_need',$text_to_add ,$contents);
$meta_description_to_add = '<meta name="description" content="Cake home Delivery in '.$row['city_name'].',flowers with cake in '.$row['city_name'].',cake shops in '.$row['city_name'].'" />';
 
$meta_meta_to_add = '<meta name="keywords" content="Deliver cakes  '.$row['city_name'].',Flowers, Cake in '.$row['city_name'].',Cake Delivery   '.$row['city_name'].',Low Price Combo Gifts in '.$row['city_name'].'" />';
 
$re_meta_description = str_replace('metadescription',$meta_meta_to_add ,$re_description);

$re_meta_keyword = str_replace('metakeyword',$meta_description_to_add ,$re_meta_description);

$title_to_add = "<title>Cake Shop ".$row['city_name']." , Cake Delivery  ".$row['city_name']."</title>";
$re_with_title = str_replace('emotiontitle',$title_to_add ,$re_meta_keyword);
*/
echo $sqlpincode = "select * from pincode where City like '".str_replace('"','',$row['city_name'])."' limit 0,1";
$resultPinCodeCon = mysqli_query($con,$sqlpincode);
$resultPinCode = mysqli_fetch_array($resultPinCodeCon);
$jsonlitstring = "";
if(($row['latitude'] != "") && ( 1==2) ){
$jsonlitstring = '<script type=\'application/ld+json\'> 
{
  "@context": "https://www.schema.org",
  "@type": "LocalBusiness",
  "name": " '.$row['city_name'].' cake shop | EmotionGift",
  "image" : "https://www.emotiongift.com/logo.png",
  "telephone" : "8533976452",
  "url": "https://www.emotiongift.com",
  "sameAs": [
    "https://www.emotiongift.com/emotiongift_com/cake/cake-mumbai.html"
  ],
  "logo": "https://www.emotiongift.com/logo.png",
  "description": "cake shop , cake home delivery , designer cake, photo cake, Anniversary cake ,midnight delivery",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "'.$resultPinCode['PostOfficeName'].'",
    "addressLocality": "'.$row['city_name'].'",
    "addressRegion": "'.$resultPinCode['PostOfficeName'].'",
    "addressCountry": "india"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": "'.$row['latitude'].'",
    "longitude": "'.$row['longitude'].'"
  },
  "review" : {
    "@type" : "Review",
    "reviewRating" : {
      "@type" : "Rating",
      "ratingValue" : "4.5"
    },
	"author" : "Cake shop"
  },
  "priceRange" : "₹349 - ₹5540",
  "hasMap": "https://www.google.co.in/maps/@'.$row['latitude'].'.'.$row['longitude'].'",
  "openingHours": "Mo 08:00-21:30 Tu, We, Th, Fr, Sa, Su -"
 
}
 </script>
';
 
}
$row_pin_code = mysqli_fetch_array($result_pin_code);
$schema_tag = "";

if(($row['latitude'] != "") && ($resultPinCode['Pincode'] != "") ){
$schema_tag = '	<div itemscope itemtype="http://schema.org/Bakery">
                            <meta itemprop="name" content="EmotionGift">
                            <meta itemprop="email" content="support@emotiongift.com">
                            <meta itemprop="logo" content="https://www.emotiongift.com/logo.png">
                            <meta itemprop="image" content="https://www.emotiongift.com/logo.png"> 


                            <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                                <meta itemprop="addressLocality" content="'.$row['city_name'].'">
                                <meta itemprop="addressRegion" content="'.$resultPinCode['PostOfficeName'].'"> 
                                <meta itemprop="postalCode" content="'.$resultPinCode['Pincode'].'">
                                <meta itemprop="streetAddress" content="Gandhi Chowk">
                                <meta itemprop="addressCountry" content="India"> 
                            </span>



                            <meta itemprop="priceRange" content="349 INR to 5499 INR">
                            <meta itemprop="legalName" content="Emotiongift.com">
                            <span itemprop="founder" itemscope itemtype="http://schema.org/Person">
                                <meta itemprop="familyName" content="Udapure">
                                <meta itemprop="givenName" content="Anshul">
                                <meta itemprop="email" content="support@emotiongift.com"> 
                            </span>
                            <meta itemprop="telephone" content="+91-8533976452">
                            <meta itemprop="openingHours" content="Mo,Tu,We,Th,Fr,Sa,Su 08:00-23:59">


                            <meta itemprop="hasMap" content=""> 
                            <span itemprop="geo" itemscope itemtype="http://schema.org/GeoCoordinates"> 
                                <meta itemprop="latitude" content="'.$row['latitude'].'"> 
                                <meta itemprop="longitude" content="'.$row['longitude'].'"> 
                            </span>


                            <meta itemprop="url" content="https://www.emotiongift.com/emotiongift_com/cake/cake-'.strtolower(str_replace(" ",'-',$row['city_name'])).'.html">
                            <meta itemprop="servesCuisine" content="Bakery"> 
                            <span itemprop="potentialAction" itemscope itemtype="http://schema.org/OrderAction"> 
                                <span itemprop="target" itemscope itemtype="http://schema.org/EntryPoint"> 
                                    <meta itemprop="urlTemplate" content="https://www.emotiongift.com/emotiongift_com/cake/cake-'.strtolower(str_replace(" ",'-',$row['city_name'])).'.html"> 
                                    <meta itemprop="inLanguage" content="en-US"> 
                                    <meta itemprop="actionPlatform" content="http://schema.org/DesktopWebPlatform"> 
                                    <meta itemprop="url" content=""https://www.emotiongift.com/emotiongift_com/cake/cake-'.strtolower(str_replace(" ",'-',$row['city_name'])).'.html"> 
                                </span>
                                <meta itemprop="deliveryMethod" content="http://purl.org/goodrelations/v1#DeliveryModePickUp">
                                <meta itemprop="deliveryMethod" content="http://purl.org/goodrelations/v1#DeliveryModeOwnFleet"> 
                                <span itemprop="priceSpecification" itemscope itemtype="http://schema.org/DeliveryChargeSpecification"> 
                                    <meta itemprop="appliesToDeliveryMethod" content="http://purl.org/goodrelations/v1#DeliveryModeOwnFleet"> 
                                    <meta itemprop="priceCurrency" content="INR"> 
                                    <meta itemprop="price" content="0"> 
                                    <span itemprop="eligibleTransactionVolume" itemscope itemtype="http://schema.org/PriceSpecification"> 
                                        <meta itemprop="priceCurrency" content="INR"> 
                                        <meta itemprop="price" content="349"> 
                                    </span>
                                </span>
                            </span>
                            <meta itemprop="sameAs" content="https://www.facebook.com/flowersandcakesonline">
                            <meta itemprop="sameAs" content="http://twitter.com/GiftEmotion">
                            <meta itemprop="sameAs" content="http://plus.google.com/+EmotionGift">
                            <meta itemprop="sameAs" content="https://www.pinterest.com/emotiongift/">
                            <meta itemprop="sameAs" content="https://www.instagram.com/emotion.gift/">
							<meta itemprop="sameAs" content="https://search.google.com/local/writereview?placeid=ChIJSaSXYwKXyzsR8g90CNyf83w">';
}
$withjsonlt = str_replace('jsonlt', $jsonlitstring ,$contents);

$withschematag = str_replace('schema_tag', $schema_tag ,$withjsonlt);

$citybasedpage = str_ireplace('bharatpur',strtolower($row['city_name']),$withschematag);
 $citybasedpage1 = str_ireplace('replace_city',strtolower($row['city_name']),$citybasedpage);
 
$citybasedpage2 = str_ireplace('replace_canonical',$pagename,$citybasedpage1);


$file = fopen($pagename,"w");
echo fwrite($file,$citybasedpage2);
fclose($file);
 
}

mysqli_close($con);
?>
 