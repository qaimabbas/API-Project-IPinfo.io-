<?php

echo 'NOTE :"If No IP Is Provided It Will Show Your IP Details" '.PHP_EOL;
echo 'type 1 and press entre for Showing Data'.PHP_EOL;
echo 'type 2 and press entre for Storing Data'.PHP_EOL;

$a=trim(fgets(STDIN,1024));
if($a== 1){

    echo ' Entre the IP ADDRESS'.PHP_EOL;
$myip=trim(fgets(STDIN,1024));

$url= 'https://ipinfo.io/'.$myip.'?token=1728afe5a1f9f0';

$ch = curl_init($url);

curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
$data=curl_exec($ch);
curl_close($ch);

$array = json_decode($data,TRUE);
//123.55.225.130


echo "IP ADDRESS:".$array['ip'].PHP_EOL;  

echo "City:".$array['city'].PHP_EOL;

echo "Region:".$array['region'].PHP_EOL; 
 
echo "Country:".$array['country'].PHP_EOL;

echo "Organization:".$array['org'].PHP_EOL; 

echo "Location:".$array['loc'].PHP_EOL; 
 
echo "Postal Code:".$array['postal'].PHP_EOL; 
    
echo "TIMEZONE:".$array['timezone'].PHP_EOL;  


}else{

    echo ' Entre the IP ADDRESS'.PHP_EOL;
$myip=trim(fgets(STDIN,1024));

$url= 'https://ipinfo.io/'.$myip.'?token=1728afe5a1f9f0';

$ch = curl_init($url);

curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
$data=curl_exec($ch);
curl_close($ch);


//$data[] = $_GET['data'];
$array = json_decode($data,TRUE);





       echo 'Entre the file name'.PHP_EOL;
       $filePath=trim(fgets(STDIN,1024));

      $resultData = $tempArray = array();
       array_push($tempArray, $array);
        $resultData[] = $tempArray;
        $jsonData = json_encode($tempArray);
        
         if (file_put_contents(strval($filePath), $jsonData))
            echo "JSON file stored successfully in file ".$filePath.PHP_EOL;
        else 
            echo "Oops! Error storing json data...".PHP_EOL;
    
       














    
    
}






?>
