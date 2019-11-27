<?php
//$JAPAN["japan"] = "tokyo";
//$MEXICO["mexico"] = "mexico city";
//$USA["usa"] = "washington";
//$ZUIDKOREA["zuidkorea"] = "seoul";
//$CHINA["china"] = "peking";

$data = array("mexico"=>"mexico city", "china"=>"peking" , "zuidkorea" => "seoul");

foreach ($data as $key => $value) {
echo $key . PHP_EOL;

$input = readline();

if ($input == $value) {
echo "Correct!" . PHP_EOL;


}else {

  echo "fout" . PHP_EOL;
}
}

?>
