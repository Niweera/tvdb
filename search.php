<?php
    include 'header.php';
?>
<div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container" style="margin:auto; width:auto">

          <div class="masthead clearfix" style="margin:auto; width:100%">
            <div class="inner" style="margin:0 auto; width:51.3%">
              <h2 class="masthead-brand"><a style="text-decoration:none" href="./">Niweera TVDB</a></h2>
              <nav>
                <ul class="nav masthead-nav">
                  <li class="active"><a href="./">Home</a></li>  
                  <li><a href="./dmca.html">DMCA</a></li>
                  <li><a href="./help.html">Help</a></li>
		  <li><a href="../">Blog</a></li>
          <li><a href="./login/login.php">User</a></li>
                </ul>
              </nav>
            </div>
          </div>

<div class="inner cover"> 
    <div class="divclass table-responsive" style="overflow:auto; height:470px; width:80%; margin:0px auto">
    <?php
    $ini_set = ini_set('max_execution_time', 300);
        if (null !==(filter_input(INPUT_POST, 'submit-search'))){
            $search=mysqli_real_escape_string($conn,filter_input(INPUT_POST, 'search'));
            if ($search!=""){
            $sql = "SELECT tvseries.tvid,tvseries.tvname,tvseries.showtype,tvseries.remarks,storedin.pid,storedin.tvfrom,storedin.tvto\n"

    . "FROM tvseries \n"

    . "INNER JOIN storedin ON tvseries.tvid=storedin.tvid WHERE tvseries.tvname LIKE '%$search%'";
            $result=mysqli_query($conn,$sql);
            $queryResult=mysqli_num_rows($result);
            if ($queryResult > 0){
                echo "<table class='table table-hover'>";
                echo "<thead class='thead-dark'><tr><th style=\"text-align:center\" scope='col'>TVID</th><th style=\"text-align:center\" scope='col'>TVName</th><th style=\"text-align:center\" scope='col'>ShowType</th><th style=\"text-align:center\" scope='col'>Remarks</th><th style=\"text-align:center\" scope='col'>Place</th><th style=\"text-align:center\" scope='col'>TVFrom</th><th style=\"text-align:center\" scope='col'>TVTo</th></tr></thead><tbody style='text-align:-webkit-center'>";
                $a=array();
                $b = [];
                $sqld = "SELECT tvid,link FROM tvdict";
                $resultd = mysqli_query($conn,$sqld);
                $queryResultd = mysqli_num_rows($resultd);
                while($rowa=mysqli_fetch_assoc($resultd)){
                     $b[$rowa['tvid']] = $rowa['link'];
                }
                while ($row=mysqli_fetch_assoc($result)){
                    $tvname = $row['tvname'];
                    $tvid = $row['tvid'];
                    $showtype = $row['showtype'];
                    $remarks = $row['remarks'];
                    $pid = $row['pid'];
                    $tvfrom = $row['tvfrom'];
                    $tvto = $row['tvto'];
                    if (isset($b[$tvid])){
                        $link = $b[$tvid];
                        echo "<tr><td scope='row'>".$tvid."</td><td><a href=\"$link\" target=\"myTVPage\">".$tvname."</a></td><td>".$showtype."</td><td>".$remarks."</td><td>".$pid."</td><td>".$tvfrom."</td><td>".$tvto."</td></tr>";       
                    array_push($a,$remarks);
                    }else{
                        echo "<tr><td scope='row'>".$tvid."</td><td><a href='tvdict.php' target=\"myTVPage\">".$tvname."</a></td><td>".$showtype."</td><td>".$remarks."</td><td>".$pid."</td><td>".$tvfrom."</td><td>".$tvto."</td></tr>";       
                    array_push($a,$remarks);
                    }
                }
                echo "</tbody></table>";
                
                if (in_array("See Notes", $a)){
                    echo "<a href=\"seenotes.html\"><p style=\"text-align:center;font-size: 25px\">See Notes</p></a>";
                }
                
            }else{
                echo "<p style='font-size:20px'>There are no matching results!</p>";
            }
        }else{
        $sql2 = "SELECT tvseries.tvid,tvseries.tvname,tvseries.showtype,tvseries.remarks,storedin.pid,storedin.tvfrom,storedin.tvto\n"
                           . "FROM tvseries \n"

    . "INNER JOIN storedin ON tvseries.tvid=storedin.tvid";
                $result=mysqli_query($conn,$sql2);
                echo "<table class='table table-hover'>";
                echo "<thead class='thead-dark'><tr><th style=\"text-align:center\" scope='col'>TVID</th><th style=\"text-align:center\" scope='col'>TVName</th><th style=\"text-align:center\" scope='col'>ShowType</th><th style=\"text-align:center\" scope='col'>Remarks</th><th style=\"text-align:center\" scope='col'>Place</th><th style=\"text-align:center\" scope='col'>TVFrom</th><th style=\"text-align:center\" scope='col'>TVTo</th></tr></thead><tbody style='text-align:-webkit-center'>";
                $b = [];
                $sqld = "SELECT tvid,link FROM tvdict";
                $resultd = mysqli_query($conn,$sqld);
                $queryResultd = mysqli_num_rows($resultd);
                while($rowa=mysqli_fetch_assoc($resultd)){
                     $b[$rowa['tvid']] = $rowa['link'];
                }
                while ($row=mysqli_fetch_assoc($result)){
                    $tvname = $row['tvname'];
                    $tvid = $row['tvid'];
                    $showtype = $row['showtype'];
                    $remarks = $row['remarks'];
                    $pid = $row['pid'];
                    $tvfrom = $row['tvfrom'];
                    $tvto = $row['tvto'];
                    if (isset($b[$tvid])){
                        $link = $b[$tvid];
                        echo "<tr><td scope='row'>".$tvid."</td><td><a href=\"$link\" target=\"myTVPage\">".$tvname."</a></td><td>".$showtype."</td><td>".$remarks."</td><td>".$pid."</td><td>".$tvfrom."</td><td>".$tvto."</td></tr>";       
                    }else{
                        echo "<tr><td scope='row'>".$tvid."</td><td><a href='tvdict.php' target=\"myTVPage\">".$tvname."</a></td><td>".$showtype."</td><td>".$remarks."</td><td>".$pid."</td><td>".$tvfrom."</td><td>".$tvto."</td></tr>";       
                    }
                }
                echo "</tbody></table>";
            
                echo "<a href=\"seenotes.html\"><p style=\"text-align:center;font-size: 25px\">See Notes</p></a>";
        }
        }
        
        /*if (null !==(filter_input(INPUT_POST, 'submit-all'))){
            $sql2 = "SELECT tvseries.tvid,tvseries.tvname,tvseries.showtype,tvseries.remarks,storedin.pid,storedin.tvfrom,storedin.tvto\n"
                           . "FROM tvseries \n"

    . "INNER JOIN storedin ON tvseries.tvid=storedin.tvid";
                $result=mysqli_query($conn,$sql2);
                echo "<table style=\"width:100%\">";
                echo "<tr><th class=\"thick\">TVID</th><th>TVName</th><th>ShowType</th><th>Remarks</th><th>Place</th><th>TVFrom</th><th>TVTo</th></tr>";
                $b = [];
                $sqld = "SELECT tvid,link FROM tvdict";
                $resultd = mysqli_query($conn,$sqld);
                $queryResultd = mysqli_num_rows($resultd);
                while($rowa=mysqli_fetch_assoc($resultd)){
                     $b[$rowa['tvid']] = $rowa['link'];
                }
                while ($row=mysqli_fetch_assoc($result)){
                    $tvname = $row['tvname'];
                    //if ($tvname === "A?k Laftan Anlamaz")
                    //    $tvname = "Aşk Laftan Anlamaz";
                    $tvid = $row['tvid'];
                    $showtype = $row['showtype'];
                    $remarks = $row['remarks'];
                    $pid = $row['pid'];
                    $tvfrom = $row['tvfrom'];
                    $tvto = $row['tvto'];
                    if (isset($b[$tvid])){
                        $link = $b[$tvid];
                        echo "<tr><td>".$tvid."</td><td><a href=\"$link\" target=\"myTVPage\">".$tvname."</a></td><td>".$showtype."</td><td>".$remarks."</td><td>".$pid."</td><td>".$tvfrom."</td><td>".$tvto."</td></tr>";
                    }else{
                        echo "<tr><td>".$tvid."</td><td><a class=\"aa\" href='tvdict.php' target=\"myTVPage\">".$tvname."</a></td><td>".$showtype."</td><td>".$remarks."</td><td>".$pid."</td><td>".$tvfrom."</td><td>".$tvto."</td></tr>";
                    }
                }
                echo "</table>";
            
                echo "<strong style=\"color: rgb(8, 17, 252)\"><a href=\"seenotes.php\"><p style=\"text-align:center;color: rgb(8, 17, 252);font-size: 25px\">See Notes</p></a>           
</strong>";
        */
        mysqli_close($conn);
    ?>
</div>
        </div>
<div class="mastfoot" style="margin:auto; width:100%">
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

