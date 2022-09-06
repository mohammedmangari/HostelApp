<?php 
        $server="localhost";
        $user="root";
        $mdp="";
        $db="compte" ;
        $conx =mysqli_connect($server,$user,$mdp);
        mysqli_select_db($conx,$db);
        if(!$conx){
            echo 'connection failed ;'.mysqli_connect_error();
        }
    
    ?>