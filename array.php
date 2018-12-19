<?php

require 'function.php';
home();
$month = "veebruar";
$test = array('kolmapäev', 3.14, $month,8, "Klass nr A210");
//masiivi sisu trükk

print_r($test);
echo "<br>";
    //muutuja sisu näitamine
var_dump($test); 
echo "<br>";
//masiiv üksiku näitamine
echo $test[0];
echo "<br>";
//masiiivi liikme lisamine
$test[] = "uus masiivi liige";
print_r($test);
//sidusmassiiiv all
echo "<br>";
$test_a = array('esimene' => 'Aimar',
                'teine' => 'Tauno',
                'kolmas' => 'Kevin');
print_r($test_a);
//for on määratletud tsükkel
//esimene masiiivvi välja trükk kultuursel kombel
for($i=0; $i < count($test); $i++ ) {
echo "<li>".$test[$i]."</li><br>";
}
//sidusmasiiv (assosiative array)
foreach($test_a as $jrk => $name) {
echo"<li>" .$name. " on järjekorras ".$jrk."</li>" ; 
}
$esta = "Eesti keel";
$mata = "Matemaatika";
$fyss = "Füüsika";

$hinded = array(
    //"Jaanus" =>array($esta=>array(3,4,5,6,)),
    //näide kuidas teha hibbete jada, vist kodu tööks ! 
                   "Peeter" =>array($esta=> 4,
                                 $mata=>4,
                                 $fyss=>3),
                   "Mari"=>array($esta=> 5,
                                 $mata=>3,
                                 $fyss=>4),
                     "Jüri"=>array($esta=> 3,
                                 $mata=>2,
                                 $fyss=>2),
                      "Pille"=>array($esta=>5,
                                     $mata=>3,
                                     $fyss=>4)
                         );

echo $hinded['Peeter'][$esta]."<br>";
//õpetajal oli eemaldatud var_dump nt
//var_dump($hinded);
//masiivi kõige kõrgem võtmed
print_r(array_keys($hinded));
echo "<br>";
//masiivi kõrgemad väärtusd
print_r(array_values($hinded));
//kahemõõtmelise masiivi kultuurne väljatükk
$hinded_id = array_keys($hinded);
echo "<br>";

for($i=0; $i < count($hinded_id); $i++) {
    echo $hinded_id[$i].":<br>";
    foreach($hinded[$hinded_id[$i]] as $aine => $hinne ) {
    echo $aine." : ".$hinne."<br>";
    }
}

?>