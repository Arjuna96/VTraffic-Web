<?php

class DAL_tbl_trafficdata {
    
    
    public function run_traffic_lights($locationId,$stateNo){
        $state = $stateNo;
        include '../Events.Vtraffic/Event_algorithm.php';
        include '../Events.Vtraffic/Event_show_traffic_lights.php';
    }
    
    public function read_tbl_trafficdata($locationId) {

        require '../dbconnect.php';

        date_default_timezone_set("Asia/Colombo");
        $timeNow = date("d-m-Y h:i:s a");
        $timePast = date("d-m-Y h:i:s a", time() - 120);
        //echo $timeNow;
        //echo $timePast;

        $sql = mysqli_query($con, "SELECT SUM(TL1),"
                . "SUM(TL2),"
                . "SUM(TL3),"
                . "SUM(TL4),"
                . "SUM(TL5),"
                . "SUM(TL6),"
                . "SUM(TL7),"
                . "SUM(TL8)"
                . "  FROM tbl_trafficdata");

        $data = mysqli_fetch_array($sql);

        $Light1 = $data[0];
        echo $Light1 . '<br>';
        $Light2 = $data[1];
        echo $Light2 . '<br>';
        $Light3 = $data[2];
        echo $Light3 . '<br>';
        $Light4 = $data[3];
        echo $Light4 . '<br>';
        $Light5 = $data[4];
        echo $Light5 . '<br>';
        $Light6 = $data[5];
        echo $Light6 . '<br>';
        $Light7 = $data[6];
        echo $Light7 . '<br>';
        $Light8 = $data[7];
        echo $Light8 . '<br>';

        if ($Light1  < 5 and $Light2 < 5 and $Light3 < 5 and $Light4 < 5 and $Light5 < 5 and $Light6 < 5 and $Light7 < 5 and $Light8 < 5) {
            $state = 1;
        }
        else if($Light1 > 5 and $Light2 < 5 and $Light3 < 5 and $Light4 < 5 and $Light5 < 5 and $Light6 < 5 and $Light7 < 5 and $Light8 < 5){
            $state = 2;
        }
        else if($Light1 < 5 and $Light2 > 5 and $Light3 < 5 and $Light4 < 5 and $Light5 < 5 and $Light6 < 5 and $Light7 < 5 and $Light8 < 5){
            $state = 3;
        }
        else if($Light1 < 5 and $Light2 < 5 and $Light3 > 5 and $Light4 < 5 and $Light5 < 5 and $Light6 < 5 and $Light7 < 5 and $Light8 < 5){
            $state = 4;
        }
        else if($Light1 < 5 and $Light2 < 5 and $Light3 < 5 and $Light4 > 5 and $Light5 < 5 and $Light6 < 5 and $Light7 < 5 and $Light8 < 5){
            $state = 5;
        }
        else if($Light1 < 5 and $Light2 < 5 and $Light3 < 5 and $Light4 < 5 and $Light5 > 5 and $Light6 < 5 and $Light7 < 5 and $Light8 < 5){
            $state = 6;
        }
        else if($Light1 < 5 and $Light2 < 5 and $Light3 < 5 and $Light4 < 5 and $Light5 < 5 and $Light6 > 5 and $Light7 < 5 and $Light8 < 5){
            $state = 7;
        }
        else if($Light1 < 5 and $Light2 < 5 and $Light3 < 5 and $Light4 < 5 and $Light5 < 5 and $Light6 < 5 and $Light7 > 5 and $Light8 < 5){
            $state = 8;
        }
        else if($Light1 < 5 and $Light2 < 5 and $Light3 < 5 and $Light4 < 5 and $Light5 < 5 and $Light6 < 5 and $Light7 < 5 and $Light8 > 5){
            $state = 9;
        }
    }
}
