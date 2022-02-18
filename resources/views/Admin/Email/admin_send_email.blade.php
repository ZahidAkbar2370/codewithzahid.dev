<!DOCTYPE html>
<html>
<head>
    <title>Code With Zahid</title>
</head>
<body>
    <h1>{{ $details['title'] }}</h1>
    <h3>{{ $details['name'] }}</h3>
    <p>{{ $details['body'] }}</p>        
<br><br>
    <center>
        <!-- <a href="{{ $details['action'] }}" target="_blank"><button style="padding:20px;background-color: blue;color: white;border: none;">Visit Website</button></a>
        <br><br> -->
        <a href="{{ $details['youtube'] }}" target="_blank"><button style="padding:20px;background-color: Red;color: white;border: none;">Subscribe Youtube Channel</button></a>
    </center>
<br>
    <p>Whatsapp: +92 308 1312527</p>
    <span>CWZ Website: </span><a href="{{ $details['action'] }}" target="_blank"><b>Visit Website</b></a><br>
    <span>For All Updates Join CWZ WhatsApp Group: https://chat.whatsapp.com/J0GLe3fE3G91Y51aij8bhk</span>
    <br><br>
    <p>Note: All Lectures Available On Website & Youtube. if you have any Question feel free to Text me on Whatsapp +92 308 1312527.</p>
    <h4><b>Thank You!</b></h4>
</body>
</html>