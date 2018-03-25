<!--<script>
var i = 0, howManyTimes = 1;
function f() {
    alert( "hi" );
    i++;
    if( i < howManyTimes ){
        setTimeout( f, 3000 );
    }
}
f();
</script>-->
<!--<script src="plugins/jQuery/jquery-2.2.3.min.js" type="text/javascript"></script>-->
<script>

    function runlightSystem() {

        var state = 0;

        function lightOne() {
            state = 1;
        }
        function lightTwo() {
            state = 2;
        }
        function lightThree() {
            state = 3;
        }
        function lightFour() {
            state = 4;
        }
        function lightFive() {
            state = 5;
        }
        function lightSix() {
            state = 6;
        }
        function lightSeven() {
            state = 7;
        }
        function lightEight() {
            state = 8;
        }

        setTimeout(lightOne, 2000);
        setTimeout(lightTwo, 4000);
        setTimeout(lightThree, 6000);
        setTimeout(lightFour, 9000);
        setTimeout(lightFive, 10000);
        setTimeout(lightSix, 12000);
        setTimeout(lightSeven, 14000);
        setTimeout(lightEight, 18000);

    }

    setInterval(function () {
        runlightSystem()
    }, 18000);

</script>