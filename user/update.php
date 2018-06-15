<?php
    include "header.php";
?>
 
<div class="site-wrapper">
    <div class="site-wrapper-inner">
        <div class="cover-container">
            <div class="masthead clearfix">
                <div class="inner">
                    <h2 class="masthead-brand"><a style="text-decoration:none" href="https://www.niwder.me/tvdb">Niweera TVDB</a></h2>
                    <nav>
                      <ul class="nav masthead-nav">
                        <li><a href="./index.php">Insert</a></li>  
                        <li class="active"><a href="./update.php">Update</a></li>
                        <li><a href="../login/logout.php">Log Out</a></li>
                      </ul>
                    </nav>
                </div>
            </div>    
            <div class="inner cover">
                <div class="divclass">
                    <h2 class="cover-heading">Update Data</h2>
                    <h4 class="cover-heading" style="text-align:left">Update Storedin</h4>
                    <div class="divclass">
                        <form name="fstoredin" action="update.php" method="POST" onsubmit="return(validate1());">
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label class="sr-only" for="inlineFormInput">TVID</label>
                                    <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" name="tvid" placeholder="TVID">
                                </div>
                                <div class="form-group col-md-3">
                                    <select class="form-control" name="place">
                                        <option value="l">l</option>
                                        <option value="p">p</option>
                                        <option value="b1">b1</option>
                                        <option value="b2">b2</option>
                                        <option value="b3">b3</option>
                                        <option value="b4">b4</option>
                                        <option value="b5">b5</option>
                                    </select>
                                </div>
                            
                                <div class="form-group col-md-3">
                                    <label class="sr-only" for="inlineFormInput">TVFrom</label>
                                    <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" name="tvfrom" placeholder="TVFrom">
                                </div>
                                <div class="form-group col-md-3">
                                    <label class="sr-only" for="inlineFormInput">TVTo</label>
                                    <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" name="tvto" placeholder="TVTo">
                                </div>
                            </div>
                            <button type="submit" name="submit" id="submit" class="btn btn-primary">Update Place</button>
                            <button type="submit" name="submit2" id="submit2" class="btn btn-primary">Update Length</button>
                            <button type="submit" name="submitn" id="submitn" class="btn btn-primary">Insert Length</button>
                        </form>
                    </div>

                    <h4 class="cover-heading" style="text-align:left">Update Showtype</h4>
                    <div class="divclass">
                        <form name="fshowtype" action="update.php" method="POST" onsubmit="return(validate2());">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label class="sr-only" for="inlineFormInput">TVID</label>
                                    <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" name="tvid" placeholder="TVID">
                                </div>
                                <div class="form-group col-md-4">    
                                <select class="form-control" name="showtype">
                                    <option value="Airing">Airing</option>
                                    <option value="Break">Break</option>
                                    <option value="Completed">Completed</option>
                                </select>
                                </div>
                                <div class="form-group col-md-4"> 
                                    <button type="submit" name="submitb" id="submitb" class="btn btn-primary">Update Showtype</button> 
                                </div>
                            </div>
                        </form>
                    </div>
                    <h4 class="cover-heading" style="text-align:left">Insert Link</h4>
                    <div class="divclass" style="height:70px">
                        <form name="flink" action="update.php" method="POST" onsubmit="return(validate3());">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label class="sr-only" for="inlineFormInput">TVID</label>
                                    <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" name="tvid" placeholder="TVID">
                                </div>    
                                <div class="form-group col-md-4">
                                    <label class="sr-only" for="inlineFormInput">Link</label>
                                    <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" name="link" placeholder="Link">
                                </div>    
                                <div class="form-group col-md-4"> 
                                    <button type="submit" name="submitc" id="submitc" class="btn btn-primary">Insert Link</button> 
                                </div>    
                            </div>
                        </form>
                    </div>
                </div>    
            </div>
            
            <br> 
            <div class="mastfoot">
                <div class="inner">
                  <div class="center">
                      <ul class="social-network social-circle">
                          <li><a href="https://www.facebook.com/Niweera" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                          <li><a href="https://www.twitter.com/Niweera" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                          <li><a href="https://plus.google.com/+NipunaWeerasekara" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>                       
                      </ul>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="./assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="./dist/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="./assets/js/ie10-viewport-bug-workaround.js"></script>


<?php
    if (null !==(filter_input(INPUT_POST, 'submit'))){
        $tvid = filter_input(INPUT_POST, 'tvid');
        $place = filter_input(INPUT_POST,'place');
        $tvfrom = filter_input(INPUT_POST,'tvfrom');
        $tvto = filter_input(INPUT_POST,'tvto');
        //$sql = "UPDATE storedin SET tvfrom = '$tvfrom', tvto = '$tvto' WHERE tvid = '$tvid' and pid = '$place';";
        $sql = "UPDATE storedin SET pid = '$place' WHERE tvid = '$tvid' and tvfrom = '$tvfrom' and tvto = '$tvto';";
        //$sql = "INSERT INTO storedin (tvid,pid,tvfrom,tvto) VALUES ('$tvid','$place','$tvfrom','$tvto');";
        $mysqli_query = mysqli_query($conn, $sql);
        if (!$mysqli_query){
                    echo "<script>alert(\"Error Occured!\");</script>";
                }else {
                    echo "<script>alert(\"Successfully updated Storedin Place!\");</script>";  
                }
    }
    
    if (null !==(filter_input(INPUT_POST, 'submit2'))){
        $tvid = filter_input(INPUT_POST, 'tvid');
        $place = filter_input(INPUT_POST,'place');
        $tvfrom = filter_input(INPUT_POST,'tvfrom');
        $tvto = filter_input(INPUT_POST,'tvto');
        //$sql = "UPDATE storedin SET tvfrom = '$tvfrom', tvto = '$tvto' WHERE tvid = '$tvid' and pid = '$place';";
        //$sql = "UPDATE storedin SET pid = '$place' WHERE tvid = '$tvid' and tvfrom = '$tvfrom' and tvto = '$tvto';";
        //$sql = "INSERT INTO storedin (tvid,pid,tvfrom,tvto) VALUES ('$tvid','$place','$tvfrom','$tvto');";
        $sql= "UPDATE storedin SET tvto = '$tvto' WHERE tvid = '$tvid' and pid = '$place';";
        $mysqli_query = mysqli_query($conn, $sql);
        if (!$mysqli_query){
                    echo "<script>alert(\"Error Occured!\");</script>";
                }else {
                    echo "<script>alert(\"Successfully updated Storedin Length!\");</script>";  
                }
    }
    
    if (null !==(filter_input(INPUT_POST, 'submitn'))){
        $tvid = filter_input(INPUT_POST, 'tvid');
        $place = filter_input(INPUT_POST,'place');
        $tvfrom = filter_input(INPUT_POST,'tvfrom');
        $tvto = filter_input(INPUT_POST,'tvto');
        //$sql = "UPDATE storedin SET tvfrom = '$tvfrom', tvto = '$tvto' WHERE tvid = '$tvid' and pid = '$place';";
        //$sql = "UPDATE storedin SET pid = '$place' WHERE tvid = '$tvid' and tvfrom = '$tvfrom' and tvto = '$tvto';";
        $sql = "INSERT INTO storedin (tvid,pid,tvfrom,tvto) VALUES ('$tvid','$place','$tvfrom','$tvto');";
        $mysqli_query = mysqli_query($conn, $sql);
        if (!$mysqli_query){
                    echo "<script>alert(\"Error Occured!\");</script>";
                }else {
                    echo "<script>alert(\"Successfully inserted Storedin Length!\");</script>";  
                }
    }
    
    if (null !==(filter_input(INPUT_POST, 'submitb'))){
        $tvid = filter_input(INPUT_POST, 'tvid');
        $showtype = filter_input(INPUT_POST,'showtype');
        $sql2 = "UPDATE tvseries SET showtype = '$showtype' WHERE tvid = '$tvid';";
        $mysqli_query = mysqli_query($conn, $sql2);
        if (!$mysqli_query){
                    echo "<script>alert(\"Error Occured!\");</script>";
                }else {
                    echo "<script>alert(\"Successfully updated Showtype!\");</script>";  
                }
    }
    if (null !==(filter_input(INPUT_POST, 'submitc'))){
        $tvid = filter_input(INPUT_POST, 'tvid');
        $link = filter_input(INPUT_POST,'link');
        $sql3 = "INSERT INTO tvdict (tvid,link) VALUES ('$tvid','$link');";
        //$sql3 = "UPDATE tvdict SET link = '$link' WHERE tvid = '$tvid';";
        $mysqli_query = mysqli_query($conn, $sql3);
        if (!$mysqli_query){
                    echo "<script>alert(\"Error Occured!\");</script>";
                }else {
                    echo "<script>alert(\"Successfully updated Link!\");</script>";  
                }
    }
    $mysqli_close = mysqli_close($conn);
    ?>