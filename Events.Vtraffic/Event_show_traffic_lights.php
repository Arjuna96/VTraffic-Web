<div class="col-md-6">
    <!-- Horizontal Form -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Location : Wellawatte</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal">
            <div class="box-body">
                <div class="form-group">
                    <label for="input1" class="col-sm-2 control-label">Current_Status</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="input1" value="<?php echo $status ?>" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="input2" class="col-sm-2 control-label">Green_Time</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="input2" value="<?php echo $time. " seconds" ?>" disabled>
                    </div>
                </div>                     
            </div>
        </form>
    </div>
</div>
<div class="col-md-6">
    <?php
    if ($status == 0) {
        echo '<img src="images/Traffic/0.jpg" alt=""/>';
    } elseif ($status == 1) {
        echo '<img src="images/Traffic/1.jpg" alt=""/>';
    } elseif ($status == 2) {
        echo '<img src="images/Traffic/2.jpg" alt=""/>';
    } elseif ($status == 3) {
        echo '<img src="images/Traffic/3.jpg" alt=""/>';
    }
    ?>

</div> 