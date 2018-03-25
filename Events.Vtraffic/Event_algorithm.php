<?php

        if ($state === 1) {
            $TL1 = 1; // Traffic Light bottom to top | left lane
            $TL2 = 0; // Traffic Light bottom to top | right lane

            $TL5 = 0; // Traffic Light top to bottom | left lane
            $TL6 = 1; // Traffic Light top to bottom | right lane

            $TL4 = 0; // Traffic Light left to right | left lane
            $TL3 = 0; // Traffic Light left to right | right lane

            $TL8 = 0; // Traffic Light right to left | left lane
            $TL7 = 0; // Traffic Light right to left | right lane
        } else if ($state === 2) {
            $TL1 = 1; // Traffic Light bottom to top | left lane
            $TL2 = 1; // Traffic Light bottom to top | right lane

            $TL5 = 0; // Traffic Light top to bottom | left lane
            $TL6 = 0; // Traffic Light top to bottom | right lane

            $TL4 = 0; // Traffic Light left to right | left lane
            $TL3 = 0; // Traffic Light left to right | right lane

            $TL8 = 0; // Traffic Light right to left | left lane
            $TL7 = 0; // Traffic Light right to left | right lane   
        } else if ($state === 3) {
            $TL1 = 0; // Traffic Light bottom to top | left lane
            $TL2 = 0; // Traffic Light bottom to top | right lane

            $TL5 = 1; // Traffic Light top to bottom | left lane
            $TL6 = 1; // Traffic Light top to bottom | right lane

            $TL4 = 0; // Traffic Light left to right | left lane
            $TL3 = 0; // Traffic Light left to right | right lane

            $TL8 = 0; // Traffic Light right to left | left lane
            $TL7 = 0; // Traffic Light right to left | right lane   
        } else if ($state === 4) {
            $TL1 = 0; // Traffic Light bottom to top | left lane
            $TL2 = 0; // Traffic Light bottom to top | right lane

            $TL5 = 0; // Traffic Light top to bottom | left lane
            $TL6 = 0; // Traffic Light top to bottom | right lane

            $TL4 = 1; // Traffic Light left to right | left lane
            $TL3 = 0; // Traffic Light left to right | right lane

            $TL8 = 1; // Traffic Light right to left | left lane
            $TL7 = 0; // Traffic Light right to left | right lane   
        } else if ($state === 5) {
            $TL1 = 0; // Traffic Light bottom to top | left lane
            $TL2 = 0; // Traffic Light bottom to top | right lane

            $TL5 = 0; // Traffic Light top to bottom | left lane
            $TL6 = 0; // Traffic Light top to bottom | right lane

            $TL4 = 1; // Traffic Light left to right | left lane
            $TL3 = 1; // Traffic Light left to right | right lane

            $TL8 = 0; // Traffic Light right to left | left lane
            $TL7 = 0; // Traffic Light right to left | right lane   
        } else if ($state === 6) {
            $TL1 = 0; // Traffic Light bottom to top | left lane
            $TL2 = 0; // Traffic Light bottom to top | right lane

            $TL5 = 0; // Traffic Light top to bottom | left lane
            $TL6 = 0; // Traffic Light top to bottom | right lane

            $TL4 = 0; // Traffic Light left to right | left lane
            $TL3 = 0; // Traffic Light left to right | right lane

            $TL8 = 1; // Traffic Light right to left | left lane
            $TL7 = 1; // Traffic Light right to left | right lane   
        }
?>

