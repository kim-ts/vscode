<?php
    $pass = $_POST['pass'];
    
    $conn=mysqli_connect("30.30.30.20", "join", "1234"); 
    mysqli_select_db($conn,"joinhost"); 

    $sql = "select * from member where no=4"; 
    $res = mysqli_query($conn,$sql);
    if(empty($res)){
        echo "1";
    }elseif($res == false){
        echo "2";
    }else{
        echo "3";
    }
    //if(!empty($res) || $res == true){
    //    while($row = mysqli_fetch_array($conn$res)){
    //       echo $row."<br>";
    //    }
    //}else{
    //    echo "$res";
    //}
    
    $row = mysqli_fetch_array($conn,$res);
    echo $row['id'];
    
    
    $row = mysql_fetch_assoc($res);
    $data = $row['id'];
    
    
?>