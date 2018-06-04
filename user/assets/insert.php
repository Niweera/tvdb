<?php
    include "header.php";
?>
<?php
    if (null !==(filter_input(INPUT_POST, 'submit'))){
        $tvname = filter_input(INPUT_POST,'tvname');
        $showtype = filter_input(INPUT_POST,'showtype');
        $remarks = filter_input(INPUT_POST,'remarks');
        $link = filter_input(INPUT_POST,'link');
        
        $place = filter_input(INPUT_POST,'place');
        $tvfrom = filter_input(INPUT_POST,'tvfrom');
        $tvto = filter_input(INPUT_POST,'tvto');
        
        $sql = "INSERT INTO tvseries (tvname,showtype,remarks) VALUES ('$tvname','$showtype','$remarks');";
        $sql .= "INSERT INTO storedin (pid,tvfrom,tvto,tvid) SELECT '$place' AS pid, '$tvfrom' AS tvfrom, '$tvto' AS tvto, tvid FROM tvseries WHERE tvname ='$tvname';";
        $sql .= "INSERT INTO tvdict (link, tvid) SELECT '$link' AS link, tvid FROM tvseries WHERE tvname = '$tvname'";
        $mysqli_multi_query = mysqli_multi_query($conn,$sql);
        if (!$mysqli_multi_query){
                    echo "<script>alert(\"Error Occured!\");</script>";
                }else {
                    $tvidr = mysqli_insert_id($conn); 
                    echo "<script>alert(\"Successfully added to the TVDB!\\nTVID = $tvidr\");</script>";
                }
    }
    if (null !==(filter_input(INPUT_POST, 'submitd'))){
        $tvid = filter_input(INPUT_POST, 'tvid');
        $place2 = filter_input(INPUT_POST,'place2');
        $tvfrom2 = filter_input(INPUT_POST,'tvfrom2');
        $tvto2 = filter_input(INPUT_POST,'tvto2');
        $sql2 = "INSERT INTO storedin (tvid,pid,tvfrom,tvto) VALUES ('$tvid','$place2','$tvfrom2','$tvto2');";
        $mysqli_query = mysqli_query($conn, $sql2);
        if (!$mysqli_query){
                    echo "<script>alert(\"Error Occured!\");</script>";
                }else {
                    echo "<script>alert(\"Successfully added to the Storedin!\");</script>";  
                }
    }
    $mysqli_close = mysqli_close($conn);
?>   