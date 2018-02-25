<!DOCTYPE html>

<html lang="en">
    <head>
		<?php include 'Login.php';?>
		<script src="Calendar.js"></script>
		<link rel="stylesheet" type="text/css" href="Rota.css">
        <meta charset="utf-8" />
        <title>Rota Core</title>
    </head>
    <body onload="createDate()">

        <table style="text-align:center; margin-left:auto; margin-right:auto;">
        <tr>
            <td colspan="7">
<div class="dropdown">
<div id="month" onclick="dropMonth()" class="dropbtn"></div>
  <div id="monthDrop" class="dropdown-content">
    <a onclick="monthSet(0)">Jan</a>
    <a onclick="monthSet(1)">Feb</a>
    <a onclick="monthSet(2)">Mar</a>
    <a onclick="monthSet(3)">Apr</a>
    <a onclick="monthSet(4)">May</a>
    <a onclick="monthSet(5)">Jun</a>
    <a onclick="monthSet(6)">Jul</a>
    <a onclick="monthSet(7)">Aug</a>
    <a onclick="monthSet(8)">Sep</a>
    <a onclick="monthSet(9)">Oct</a>
    <a onclick="monthSet(10)">Nov</a>
    <a onclick="monthSet(11)">Dec</a>
  </div>
</div>
<div class="dropdown">
<div id="year" onclick="dropYear()" class="dropbtn"></div>
  <div id="yearDrop" class="dropdown-content">
    <a onclick="yearSet(2018)">2018</a>
    <a onclick="yearSet(2019)">2019</a>
    <a onclick="yearSet(2020)">2020</a>
    <a onclick="yearSet(2021)">2021</a>
  </div>
</div>
            </td>
        </tr>
        <tr>
            <td style="text-align:center; background-color: #4CAF50; color: white;text-align:center">M</td >
            <td style="text-align:center; background-color: #4CAF50; color: white;text-align:center;">T</td >
            <td style="text-align:center; background-color: #4CAF50; color: white;text-align:center;">W</td >
            <td style="text-align:center; background-color: #4CAF50; color: white;text-align:center;">T</td >
            <td style="text-align:center; background-color: #4CAF50; color: white;text-align:center;">F</td >
            <td style="text-align:center; background-color: #4CAF50; color: white;text-align:center;">S</td >
            <td style="text-align:center; background-color: #4CAF50; color: white;text-align:center;">S</td >
        </tr>
        <tr>
            <td style="text-align:center;cursor: pointer;"><div id="Mo1" onclick="a=document.getElementById('Mo1').innerHTML; firstWeek(a)"></div></td >
            <td style="text-align:center;cursor: pointer;"><div id="Tu1" onclick="a=document.getElementById('Tu1').innerHTML; firstWeek(a)"></div></td >
            <td style="text-align:center;cursor: pointer;"><div id="We1" onclick="a=document.getElementById('We1').innerHTML; firstWeek(a)"></div></td >
            <td style="text-align:center;cursor: pointer;"><div id="Th1" onclick="a=document.getElementById('Th1').innerHTML; firstWeek(a)"></div></td >
            <td style="text-align:center;cursor: pointer;"><div id="Fr1" onclick="a=document.getElementById('Fr1').innerHTML; firstWeek(a)"></div></td >
            <td style="text-align:center;cursor: pointer;"><div id="Sa1" onclick="a=document.getElementById('Sa1').innerHTML; firstWeek(a)"></div></td >
            <td style="text-align:center;cursor: pointer;"><div id="Su1" onclick="a=document.getElementById('Su1').innerHTML; firstWeek(a)"></div></td >
        </tr>
        <tr>
            <td style="text-align:center;cursor: pointer;"><div id="Mo2" onclick="a=document.getElementById('Mo2').innerHTML; daySet(a)"></div></td>
            <td style="text-align:center;cursor: pointer;"><div id="Tu2" onclick="a=document.getElementById('Tu2').innerHTML; daySet(a)"></div></td>
            <td style="text-align:center;cursor: pointer;"><div id="We2" onclick="a=document.getElementById('We2').innerHTML; daySet(a)"></div></td>
            <td style="text-align:center;cursor: pointer;"><div id="Th2" onclick="a=document.getElementById('Th2').innerHTML; daySet(a)"></div></td>
            <td style="text-align:center;cursor: pointer;"><div id="Fr2" onclick="a=document.getElementById('Fr2').innerHTML; daySet(a)"></div></td>
            <td style="text-align:center;cursor: pointer;"><div id="Sa2" onclick="a=document.getElementById('Sa2').innerHTML; daySet(a)"></div></td>
            <td style="text-align:center;cursor: pointer;"><div id="Su2" onclick="a=document.getElementById('Su2').innerHTML; daySet(a)"></div></td>
        </tr>
        <tr>
            <td style="text-align:center;cursor: pointer;"><div id="Mo3" onclick="a=document.getElementById('Mo3').innerHTML; daySet(a)"></div></td>
            <td style="text-align:center;cursor: pointer;"><div id="Tu3" onclick="a=document.getElementById('Tu3').innerHTML; daySet(a)"></div></td>
            <td style="text-align:center;cursor: pointer;"><div id="We3" onclick="a=document.getElementById('We3').innerHTML; daySet(a)"></div></td>
            <td style="text-align:center;cursor: pointer;"><div id="Th3" onclick="a=document.getElementById('Th3').innerHTML; daySet(a)"></div></td>
            <td style="text-align:center;cursor: pointer;"><div id="Fr3" onclick="a=document.getElementById('Fr3').innerHTML; daySet(a)"></div></td>
            <td style="text-align:center;cursor: pointer;"><div id="Sa3" onclick="a=document.getElementById('Sa3').innerHTML; daySet(a)"></div></td>
            <td style="text-align:center;cursor: pointer;"><div id="Su3" onclick="a=document.getElementById('Su3').innerHTML; daySet(a)"></div></td>
        </tr>
        <tr>
            <td style="text-align:center;cursor: pointer;"><div id="Mo4" onclick="a=document.getElementById('Mo4').innerHTML; daySet(a)"></div></td>
            <td style="text-align:center;cursor: pointer;"><div id="Tu4" onclick="a=document.getElementById('Tu4').innerHTML; daySet(a)"></div></td>
            <td style="text-align:center;cursor: pointer;"><div id="We4" onclick="a=document.getElementById('We4').innerHTML; daySet(a)"></div></td>
            <td style="text-align:center;cursor: pointer;"><div id="Th4" onclick="a=document.getElementById('Th4').innerHTML; daySet(a)"></div></td>
            <td style="text-align:center;cursor: pointer;"><div id="Fr4" onclick="a=document.getElementById('Fr4').innerHTML; daySet(a)"></div></td>
            <td style="text-align:center;cursor: pointer;"><div id="Sa4" onclick="a=document.getElementById('Sa4').innerHTML; daySet(a)"></div></td>
            <td style="text-align:center;cursor: pointer;"><div id="Su4" onclick="a=document.getElementById('Su4').innerHTML; daySet(a)"></div></td>
        </tr>
        <tr>
            <td style="text-align:center;cursor: pointer;"><div id="Mo5" onclick="a=document.getElementById('Mo5').innerHTML; lastWeeks(a)"></div></td>
            <td style="text-align:center;cursor: pointer;"><div id="Tu5" onclick="a=document.getElementById('Tu5').innerHTML; lastWeeks(a)"></div></td>
            <td style="text-align:center;cursor: pointer;"><div id="We5" onclick="a=document.getElementById('We5').innerHTML; lastWeeks(a)"></div></td>
            <td style="text-align:center;cursor: pointer;"><div id="Th5" onclick="a=document.getElementById('Th5').innerHTML; lastWeeks(a)"></div></td>
            <td style="text-align:center;cursor: pointer;"><div id="Fr5" onclick="a=document.getElementById('Fr5').innerHTML; lastWeeks(a)"></div></td>
            <td style="text-align:center;cursor: pointer;"><div id="Sa5" onclick="a=document.getElementById('Sa5').innerHTML; lastWeeks(a)"></div></td>
            <td style="text-align:center;cursor: pointer;"><div id="Su5" onclick="a=document.getElementById('Su5').innerHTML; lastWeeks(a)"></div></td>
        </tr>
        <tr>
            <td style="text-align:center;cursor: pointer;"><div id="Mo6" onclick="a=document.getElementById('Mo6').innerHTML; lastWeeks(a)"></div></td>
            <td style="text-align:center;cursor: pointer;"><div id="Tu6" onclick="a=document.getElementById('Tu6').innerHTML; lastWeeks(a)"></div></td>
            <td style="text-align:center;cursor: pointer;"><div id="We6" onclick="a=document.getElementById('We6').innerHTML; lastWeeks(a)"></div></td>
            <td style="text-align:center;cursor: pointer;"><div id="Th6" onclick="a=document.getElementById('Th6').innerHTML; lastWeeks(a)"></div></td>
            <td style="text-align:center;cursor: pointer;"><div id="Fr6" onclick="a=document.getElementById('Fr6').innerHTML; lastWeeks(a)"></div></td>
            <td style="text-align:center;cursor: pointer;"><div id="Sa6" onclick="a=document.getElementById('Sa6').innerHTML; lastWeeks(a)"></div></td>
            <td style="text-align:center;cursor: pointer;"><div id="Su6" onclick="a=document.getElementById('Su6').innerHTML; lastWeeks(a)"></div></td>
        </tr>
        </table>
        <div id="date" style="text-align:center;"></div>
    </body>
</html>
