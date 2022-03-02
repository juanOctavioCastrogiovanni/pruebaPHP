<?php
include("../includes/functions.php");
    if(isset($_GET['id'])){
        $con = conectar();
        $sql = "SELECT id FROM archivos WHERE id_blogs=".$_GET['id'].";";
        $query = mysqli_query($con,$sql);
        $flag=TRUE;
		
		if($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){
            echo $row['id'];
            if(!delete($row['id'],'archivos')){
                $flag = FALSE;
            }
        }

        if($flag){
           if(delete($_GET['id'],'blogs')){
            header("location: ./panel.php?id=".$_SESSION['id']."&rta=0x007");
        } else {
            header("location: ./panel.php?id=".$_SESSION['id']."&rta=0x008");
        }
    } else {
        header("location: ./panel.php?id=".$_SESSION['id']."&rta=0x008");
        }
    }
?>