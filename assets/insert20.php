<?php
    include "header.php";
?>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script>
$( document ).ready(function() {
    $("#submita").click(function() {
        $("#tvname").removeAttr("required");
        $("#link").removeAttr("required");
    });
});
</script>
<script>
$( document ).ready(function() {
    $("#submit").click(function() {
        $("#tvid").removeAttr("required");
    });
});
</script>
<link rel="stylesheet" type="text/css" href="style.css">
<h1 style="text-align:left;color:rgb(226, 20, 20);font-size: 40px">Insert Data</h1>
<div>
<form style="text-align:left" action="insert.php" method="POST">
    
    <input type="text" id="tvid" name="tvid" placeholder="TVID (Leave Empty)" required>
    <br>
    <input type="text" id="tvname" name="tvname" placeholder="TVName" required>
    <br>
    <select name="showtype">
        <option value="Airing">Airing</option>
        <option value="Break">Break</option>
        <option value="Completed">Completed</option>
    </select>
    <br>
    <input type="text" id="remarks" name="remarks" placeholder="Remarks">
    <br>
    <input type="text" id="link" name="link" placeholder="Link" required>
    <br>
    <select name="place">
        <option value="p">p</option>
        <option value="b1">b1</option>
        <option value="b2">b2</option>
        <option value="b3">b3</option>
        <option value="b4">b4</option>
    </select>
    <br>
    <input type="text" id="tvfrom" name="tvfrom" placeholder="TVFrom" required>
    <br>
    <input type="text" id="tvto" name="tvto" placeholder="TVTo" required>
    <input type="submit" id="submita" name="submita" value="Add StoredIn details only" style="height:45px; width:200px">
    <br>
    <input type="submit" id="submit" name="submit" value="Go">
</form>
</div>	

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
                    echo("Error occured!");
                }else {
                    echo ("Successfully added to the TVDB!<br>");    
                    $tvidr = mysqli_insert_id($conn);
                    echo ("TVID = " . $tvidr."<br>");
                }
    }
    if (null !==(filter_input(INPUT_POST, 'submita'))){
        $tvid = filter_input(INPUT_POST, 'tvid');
        $place = filter_input(INPUT_POST,'place');
        $tvfrom = filter_input(INPUT_POST,'tvfrom');
        $tvto = filter_input(INPUT_POST,'tvto');
        $sql2 = "INSERT INTO storedin (tvid,pid,tvfrom,tvto) VALUES ('$tvid','$place','$tvfrom','$tvto');";
        $mysqli_query = mysqli_query($conn, $sql2);
        if (!$mysqli_query){
                    echo("Error occured, " . mysqli_error($conn));
                }else {
                    echo ("Successfully added to the Storedin!");   
                }
    }
    $mysqli_close = mysqli_close($conn);
    