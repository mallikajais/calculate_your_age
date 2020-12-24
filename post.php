<?php
    $userdob=$_POST['dob'];
    $time=$_POST['time'];
    $dob=new DateTime($userdob.''.$time);
    $currentdate=new DateTime();
    $interval=date_diff($dob,$currentdate);
    echo $interval->y." year  ".$interval->m." month  ".$interval->d." day  ".$interval->h." hour  ".$interval->i." minute  ".$interval->s." second";
?>