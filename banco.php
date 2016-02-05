<?php
$host = "localhostt";
$user = "root";
$pass = "p@assw0rd";

for($i = 1; $i <= 3; $i++ ){
        echo "Tentativa ".$i;
        if($i == 3){
                echo "Levantando tunel";

        }
        sleep(10);


}

$con = mysqli_connect($host,$user,$pass);

if (mysqli_connect_errno()) {
        shell_exec ("screen -X -S test2 quit");
        shell_exec ("screen -dmS test2 bash -c 'tail -f /dev/null'");


        