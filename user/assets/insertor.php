<?php
    include "header.php";
?>
<link rel="stylesheet" type="text/css" href="style.css">
<h1 style="text-align:left;color:rgb(226, 20, 20);font-size: 40px">Insert Data</h1>
<div>
<form style="text-align:left" action="insert.php" method="POST">
    
    <input type="text" id="tvid" name="tvid" placeholder="TVID (Leave Empty)">
    <br>
    <input type="text" id="tvname" name="tvname" placeholder="TVName">
    <br>
    <select name="showtype">
        <option value="Airing">Airing</option>
        <option value="Break">Break</option>
        <option value="Completed">Completed</option>
    </select>
    <br>
    <input type="text" id="remarks" name="remarks" placeholder="Remarks">
    <input type="submit" name="submits" value="Add to TVSeries" style="height:45px; width:150px">
    <br>
    <input type="text" id="link" name="link" placeholder="Link">
    <input type="submit" name="submitd" value="Add to TVDict" style="height:45px; width:150px">
    <br>
    <select name="place">
        <option value="p">p</option>
        <option value="b1">b1</option>
        <option value="b2">b2</option>
        <option value="b3">b3</option>
        <option value="b4">b4</option>
    </select>
    <br>
    <input type="text" id="tvfrom" name="tvfrom" placeholder="TVFrom">
    <br>
    <input type="text" id="tvto" name="tvto" placeholder="TVTo">
    <input type="submit" name="submita" value="Add to StoredIn" style="height:45px; width:150px">
    <br>
</form>
</div>	

<?php
    $tvid = filter_input(INPUT_POST, 'tvid');
    $tvname = filter_input(INPUT_POST,'tvname');
    $showtype = filter_input(INPUT_POST,'showtype');
    $remarks = filter_input(INPUT_POST,'remarks');
    $link = filter_input(INPUT_POST,'link');   
    $place = filter_input(INPUT_POST,'place');
    $tvfrom = filter_input(INPUT_POST,'tvfrom');
    $tvto = filter_input(INPUT_POST,'tvto');
    if (null !==(filter_input(INPUT_POST, 'submits'))){ 
        $sql = "INSERT INTO tvseries (tvname,showtype,remarks) VALUES ('$tvname','$showtype','$remarks');";
        $mysqli_query = mysqli_query($conn,$sql);
        $tvidr = mysqli_insert_id($conn);
        if (!$mysqli_query){
            echo("Error occured, " . mysqli_error($conn));
        }else {
            echo ("Successfully added to the TVSeries! <br>");
            echo ("TVID = " . $tvidr."<br>");
            }         
    }

    if (null !==(filter_input(INPUT_POST, 'submitd'))){ 
        $sql2 = "INSERT INTO tvdict (tvid, link) VALUES ('$tvid','$link');";
        $mysqli_query2 = mysqli_query($conn,$sql2);
        if (!$mysqli_query2){
            echo("Error occured, " . mysqli_error($conn));
        }else {
            echo ("Successfully added to the TVDict!");
            }         
    }
    if (null !==(filter_input(INPUT_POST, 'submita'))){ 
        $sql3 = "INSERT INTO storedin (tvid,pid,tvfrom,tvto) VALUES ('$tvid','$place','$tvfrom','$tvto');";
        $mysqli_query3 = mysqli_query($conn,$sql3);
        if (!$mysqli_query3){
            echo("Error occured, " . mysqli_error($conn));
        }else {
            echo ("Successfully added to the Storedin!");
            }         
    }
    $mysqli_close = mysqli_close($conn);

