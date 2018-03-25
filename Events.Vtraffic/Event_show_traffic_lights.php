 <div class="row">            
            <div class="col-md-1">
                <center>
                <div style="padding-top: 20px"></div>
                <h4>TL 03</h4>
               <?php
                if ($TL3 == 0){
                  echo '<img src="images/red_light.png" width="60px" align="middle">';
                }else{
                  echo '<img src="images/red_light.png" width="60px" align="middle">';
                }
                ?>                </center>
                <p>Set time : </p>
                
                <center>
                <div style="padding-top: 40px"></div>
                <h4>TL 01</h4>
               <?php
                if ($TL1 == 0){
                  echo '<img src="images/red_light.png" width="60px" align="middle">';
                }else{
                  echo '<img src="images/green_light.png" width="60px" align="middle">';
                }
                ?>                </center>
                <p>Set time :</p>
                
            </div>
            
            <div class="col-md-1">
                <center>
                <div style="padding-top: 20px"></div>
                <h4>TL 04 </h4>
               <?php
                if ($TL4 == 0){
                  echo '<img src="images/red_light.png" width="60px" align="middle">';
                }else{
                  echo '<img src="images/green_light.png" width="60px" align="middle">';
                }
                ?>                </center>
                <p>Set time :</p>
                
                <center>
                <div style="padding-top: 40px"></div>
                <h4>TL 02 </h4>
               <?php
                if ($TL2 == 0){
                  echo '<img src="images/red_light.png" width="60px" align="middle">';
                }else{
                  echo '<img src="images/green_light.png" width="60px" align="middle">';
                }
                ?>                </center>
                <p>Set time :</p>
                
            </div>
            
            <div class="mapcontainer col-md-8">
                <img src="images/Project_map.png" class="img-responsive" style=" border-style: solid;border-width: 2px;">
                <div class="left-light-bottom">
                    <input type="text" name="$TL01" class="form-control">
                </div>
                <div class="right-light-bottom">
                    <input type="text" name="$TL02" class="form-control">
                </div>
                
                <div class="left-light-top">
                    <input type="text" name="$TL03" class="form-control">
                </div>
                <div class="right-light-top">
                    <input type="text" name="$TL04" class="form-control">
                </div>
                
                <div class="left-light-mid1">
                    <input type="text" name="$TL03" class="form-control">
                </div>
                <div class="left-light-mid2">
                    <input type="text" name="$TL04" class="form-control">
                </div>
                
                <div class="right-light-mid1">
                    <input type="text" name="$TL03" class="form-control">
                </div>
                <div class="right-light-mid2">
                    <input type="text" name="$TL04" class="form-control">
                </div>
                
            </div>
            
            <div class="col-md-1">
                <center>
                <div style="padding-top: 20px"></div>
                <h4>TL 05 </h4>
               <?php
                if ($TL5 == 0){
                 echo '<img src="images/red_light.png" width="60px" align="middle">';
                }else{
                 echo '<img src="images/green_light.png" width="60px" align="middle">';
                }
                ?>                </center>
                <p>Set time :</p>
                
                <center>
                <div style="padding-top: 40px"></div>
                <h4>TL 07</h4>
               <?php
                if ($TL7 == 0){
                  echo '<img src="images/red_light.png" width="60px" align="middle">';
                }else{
                  echo '<img src="images/green_light.png" width="60px" align="middle">';
                }
                ?>                </center>
                <p>Set time :</p>
            </div>
            
            <div class="col-md-1">
                <center>
                <div style="padding-top: 20px"></div>
                <h4>TL 06</h4>
               <?php
                if ($TL6 == 0){
                  echo '<img src="images/red_light.png" width="60px" align="middle">';
                }else{
                  echo '<img src="images/green_light.png" width="60px" align="middle">';
                }
                ?>                </center>
                <p>Set time :</p>
                
                <center>
                <div style="padding-top: 40px"></div>
                <h4>TL 08</h4>
               <?php
                if ($TL8 == 0){
                  echo '<img src="images/red_light.png" width="60px" align="middle">';
                }else{
                  echo '<img src="images/green_light.png" width="60px" align="middle">';
                }
               ?>
                </center>
                <p>Set time :</p>
            </div>
</div>