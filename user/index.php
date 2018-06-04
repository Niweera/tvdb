<?php
    include "header.php";
?>
 
<div class="site-wrapper">
    <div class="site-wrapper-inner">
        <div class="cover-container">
            <div class="masthead clearfix">
                <div class="inner">
                    <h2 class="masthead-brand"><a style="text-decoration:none" href="https://www.niwder.me">Niweera TVDB</a></h2>
                    <nav>
                      <ul class="nav masthead-nav">
                        <li class="active"><a href="./index.php">Insert</a></li>  
                        <li><a href="./update.php">Update</a></li>
                      </ul>
                    </nav>
                </div>
            </div>    
            <div class="inner cover">
                <div class="divclass">
                    <h2 class="cover-heading">Insert Data</h2>
                    <br>
                    <form name="insert" class="form-inline" action="index.php" method="POST" onsubmit="return(validate());">
                        <div class="form-group" style="width:100%;margin:auto">
                        <label class="sr-only" for="inlineFormInput" style="width:40%">TVName</label>
                        <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" name="tvname" placeholder="TVName" style="width:40%;margin:auto;margin-bottom:5px">
                        </div>
                        <br>
                        <div class="form-group" style="width:100%;margin:auto">
                        <select class="form-control" name="showtype" style="width:40%;margin:auto;margin-bottom:5px">
                            <option value="Airing">Airing</option>
                            <option value="Break">Break</option>
                            <option value="Completed">Completed</option>
                        </select>
                        </div>
                        <br>
                        <div class="form-group" style="width:100%;margin:auto">
                        <label class="sr-only" for="inlineFormInput">Remarks</label>
                        <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" name="remarks" placeholder="Remarks" style="width:40%;margin:auto;margin-bottom:5px">
                        </div>
                        <br>
                        <div class="form-group" style="width:100%;margin:auto">
                        <label class="sr-only" for="inlineFormInput">Link</label>
                        <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" name="link" placeholder="Link" style="width:40%;margin:auto;margin-bottom:5px">
                        </div>
                        <br>
                        <div class="form-group" style="width:100%;margin:auto">
                        <select class="form-control" name="place" style="width:40%;margin:auto;margin-bottom:5px">
                            <option value="l">l</option>
                            <option value="p">p</option>
                            <option value="b1">b1</option>
                            <option value="b2">b2</option>
                            <option value="b3">b3</option>
                            <option value="b4">b4</option>
                            <option value="b5">b5</option>
                        </select>
                        </div>
                        <br>
                        <div class="form-group" style="width:100%;margin:auto">
                        <label class="sr-only" for="inlineFormInput">TVFrom</label>
                        <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" name="tvfrom" placeholder="TVFrom" style="width:40%;margin:auto;margin-bottom:5px">
                        </div>
                        <br>
                        <div class="form-group" style="width:100%;margin:auto">
                        <label class="sr-only" for="inlineFormInput">TVTo</label>
                        <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" name="tvto" placeholder="TVTo" style="width:40%;margin:auto;margin-bottom:5px">
                        </div>
                        <br>
                        <button type="submit" name="submit" id="submit" class="btn btn-primary">Go</button>           
                    </form>
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