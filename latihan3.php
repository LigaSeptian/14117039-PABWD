<?php
$nama = array("lanirne", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat");

for ($i=0; $i<6; $i++) {
    for ($j=0; $j<6; $j++) {
        if ($nama[$j] > $nama[$j+1]) {
            $tempe = $nama[$j];
            $nama[$j] = $nama[$j+1];
            $nama[$j+1] = $tempe;
        }
    }
}

foreach ($nama as $urut) {
    echo $urut; echo " ";
}
?>