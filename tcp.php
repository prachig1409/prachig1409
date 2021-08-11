<html>
<style>

body{
     background-color: #6abadeba ; 
     font-family: 'Arial';
    }

h2 {
     text-align:center;
     text-decoration: underline;
     color: #277582;
     padding: 10px;
   }

.cont {
       color: white;
       background-color: #6abadeba ;
       display: flex;
     }

.box {
	width: 15%; 
        height: 6000px;
        overflow: hidden;
	margin: 10px;
        margin-top: 10px;
        padding: 10px;
        background: #23463f;
        border-radius: 15px;
     }

.box1 {
        width: 10%;
        height: 6000px;
        overflow: hidden;
        margin: 10px;
        margin-top: 10px;
        padding: 10px;
        background: #23463f;
        border-radius: 15px;
     }

.box2 {
        width: 20%;
        height: 6000px;
        overflow: hidden;
        margin: 10px;
        margin-top: 10px;
        padding: 10px;
        background: #23463f;
        border-radius: 15px;
     }

   #log1{
          width: 180px;
          height: 50px;
          border: 3px solid #277582 ;
          border-radius: 17px;
          color: darkblue;
          background-color: #6abadeba ;
         }

</style>

<body>

<h2>ALL DATA</h2>

<center>
<form action="selection.html">
<input type="submit" name="log1" id="log1"  value="Back">
</form>
</center>

<div class="cont">

<div class="box">
<center>
<?php
 $myfile = fopen("tcp_tsp","r") or die("Unable to open file!");
    echo "<h3><u><b>TIMESTAMP</b></u></h3><br><br>";
    while(!feof($myfile)){
        echo fgets($myfile). "<br>";
        }
    fclose($myfile);
?>
</center>
</div>


<div class="box2">
<center>
<?php
 $myfile = fopen("tcp_sip","r") or die("Unable to open file!");
    echo "<h3><u><b>SOURCE IP</b></u></h3><br><br>";
    while(!feof($myfile)){
        echo fgets($myfile). "<br>";
        }
    fclose($myfile);
?>
</center>
</div>


<div class="box">
<center>
<?php
 $myfile = fopen("tcp_smac","r") or die("Unable to open file!");
    echo "<h3><u><b>SMAC</b></u></h3><br><br>";
    while(!feof($myfile)){
        echo fgets($myfile). "<br>";
        }
    fclose($myfile);
?>
</center>
</div>


<div class="box">
<center>
<?php
 $myfile = fopen("tcp_dip","r") or die("Unable to open file!");
    echo "<h3><u><b>DESTINATION IP</b></u></h3><br><br>";
    while(!feof($myfile)){
        echo fgets($myfile). "<br>";
        }
    fclose($myfile);
?>
</center>
</div>


<div class="box">
<center>
<?php
 $myfile = fopen("tcp_dmac","r") or die("Unable to open file!");
    echo "<h3><u><b>DMAC</b></u></h3><br><br>";
    while(!feof($myfile)){
        echo fgets($myfile). "<br>";
        }
    fclose($myfile);
?>
</center>
</div>


<div class="box1">
<center>
<?php
 $myfile = fopen("tcp_port","r") or die("Unable to open file!");
    echo "<h3><u><b>PORT</b></u></h3><br><br>";
    while(!feof($myfile)){
        echo fgets($myfile). "<br>";
        }
    fclose($myfile);
?>
</center>
</div>


<div class="box">
<center>
<?php
 $myfile = fopen("tcp_len","r") or die("Unable to open file!");
    echo "<h3><u><b>LENGTH</b></u></h3><br><br>";
    while(!feof($myfile)){
        echo fgets($myfile). "<br>";
        }
    fclose($myfile);
?>
</center>
</div>

</div>

</body>
</html>
