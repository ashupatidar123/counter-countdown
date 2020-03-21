<!DOCTYPE HTML>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    p {
        text-align: center;
        font-size: 60px;
        margin-top: 0px;
        background: #a048342e;
    }
    </style>
</head>

<?php
date_default_timezone_set('Asia/Kolkata');
//echo $current_data = date('Y-m-d H:i:s',strtotime('+10 minutes'));
$extend_data = date('2020-09-07 14:35:00');
?>

<body>
    <p id="setTime"></p>
    <script>
    var countDownDate = <?php echo strtotime($extend_data) ?>*1000;
    var now = <?php echo time() ?>*1000;

    var x = setInterval(function()
    {
        now = now + 1000;
		var distance = countDownDate - now;
		var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);        

        if(days>0){
            var dSet = days + "d ";
        }else{
            var dSet = '';
        }

        if(hours>0){
            var hSet = hours + "h ";
        }else{
            var hSet = '';
        }

        if(minutes>0){
            var mSet = minutes + "m ";
        }else{
            var mSet = '';
        }

        if(seconds>=0){
            var sSet = seconds + "s ";
        }else{
            var sSet = '';
        }

        document.getElementById("setTime").innerHTML = dSet + hSet + mSet + sSet;

        if (distance<0)
        {
            clearInterval(x);
            document.getElementById("setTime").innerHTML = "Offer Expired";
        }
    }, 1000);
    
    </script>
</body>

</html>