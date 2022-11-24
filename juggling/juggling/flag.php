<?php

$flag = "DFCTF{gRe4T_W0rk_JugGl3R_sAext}";
if (isset($_GET['pass'])) {

        if (hash("md5", $_GET['pass']) == '0e517848986502300547890001549971'){
            echo "<h1>FL4G :</h1>".$flag;
        } else {
            echo "Wr0ng p4ssw0rd, Try H4RD3R!!";
    }
}
?>
