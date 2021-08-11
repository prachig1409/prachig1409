<html>
<style>
body {
       color: white;
       background-color: #6abadeba ;
       font-family: 'Arial';
     }

.cont {
	width: 15%;
        height: 8500px;
        overflow: hidden;
        margin: auto;
        margin-top: 50px;
        padding: 20px;
        background: #23463f;
        border-radius: 15px ;
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
<center>

 <br><br><br>
 <form action="selection.html">
 <input type="submit" name="log1" id="log1"  value="Back">
 </form>

<div class="cont">

<?php

$button=$_POST['Packets'];
$dropdown=$_POST['info'];


if($button == 'ARP' && $dropdown == 'all')	
   {	     
	header("location: arp.php"); 
   }


  elseif($button == 'ARP' && $dropdown == 'timestamp')  
{  
    $myfile = fopen("arp_tsp","r") or die("Unable to open file!");
    echo "<h3><u><b>TIMESTAMP</b></u></h3><br><br>";
    while(!feof($myfile)){
        echo fgets($myfile). "<br>";
        }
    fclose($myfile);
}

  elseif($button == 'ARP' && $dropdown == 'sip')
{
    $myfile = fopen("arp_sip","r") or die("Unable to open file!");
    echo "<h3><u><b>SOURCE IP</b></u></h3><br><br>";
    while(!feof($myfile)){
        echo fgets($myfile) . "<br>";
        }
    fclose($myfile);
}

  elseif($button == 'ARP' && $dropdown == 'dip')
{
    $myfile = fopen("arp_smac","r") or die("Unable to open file!");
    echo "<h3><u><b>SOURCE MAC ADDRESS</b></u></h3><br><br>";
    while(!feof($myfile)){
        echo fgets($myfile) . "<br>";
        }
    fclose($myfile);
}


  elseif($button == 'ARP' && $dropdown == 'smac')
{
    $myfile = fopen("arp_smac","r") or die("Unable to open file!");
    echo "<h3><u><b>DESTINATION MAC ADDRESS</b></u></h3><br><br>";
    while(!feof($myfile)){
        echo fgets($myfile) . "<br>";
        }
    fclose($myfile);
}


  elseif($button == 'ARP' && $dropdown == 'dmac')
{
    $myfile = fopen("arp_dmac","r") or die("Unable to open file!");
    echo "<h3><u><b>LENGTH</b></u></h3><br><br>";
    while(!feof($myfile)){
        echo fgets($myfile) . "<br>";
        }
    fclose($myfile);
}


  elseif($button == 'ARP' && $dropdown == 'paclen')
{
    $myfile = fopen("arp_len","r") or die("Unable to open file!");
    echo "<h3><u><b>IP</b></u></h3><br><br>";
    while(!feof($myfile)){
        echo fgets($myfile) . "<br>";
        }
    fclose($myfile);
}


  elseif($button == 'UDP' && $dropdown == 'all')
{
    header("location: udp.php");
}

  elseif($button == 'UDP' && $dropdown == 'timestamp')
{
    $myfile = fopen("udp_tsp","r") or die("Unable to open file!");
    echo "<h3><u><b>TIMESTAMP</b></u></h3><br><br>";
    while(!feof($myfile)){
        echo fgets($myfile) . "<br>";
        }
    fclose($myfile);
}

  elseif($button == 'UDP' && $dropdown == 'sip')
{
    $myfile = fopen("udp_sip","r") or die("Unable to open file!");
    echo "<h3><u><b>SOURCE IP</b></u></h3><br><br>";
    while(!feof($myfile)){
        echo fgets($myfile) . "<br>";
        }
    fclose($myfile);
}


  elseif($button == 'UDP' && $dropdown == 'dip')
{
    $myfile = fopen("udp_dip","r") or die("Unable to open file!");
    echo "<h3><u><b>DESTINATION IP</b></u></h3><br><br>";
    while(!feof($myfile)){
        echo fgets($myfile) . "<br>";
        }
    fclose($myfile);
}


  elseif($button == 'UDP' && $dropdown == 'smac')
{
    $myfile = fopen("udp_smac","r") or die("Unable to open file!");
    echo "<h3><u><b>SOURCE MAC ADDRESS</b></u></h3><br><br>";
    while(!feof($myfile)){
        echo fgets($myfile) . "<br>";
        }
    fclose($myfile);
}


  elseif($button == 'UDP' && $dropdown == 'dmac')
{
    $myfile = fopen("udp_dmac","r") or die("Unable to open file!");
    echo "<h3><u><b>DESTINATION MAC ADDRESS</b></u></h3><br><br>";
    while(!feof($myfile)){
        echo fgets($myfile) . "<br>";
        }
    fclose($myfile);
}


  elseif($button == 'UDP' && $dropdown == 'paclen')
{
    $myfile = fopen("udp_pac","r") or die("Unable to open file!");
    echo "<h3><u><b>PACKET LENGTH</b></u></h3><br><br>";
    while(!feof($myfile)){
        echo fgets($myfile) . "<br>";
        }
    fclose($myfile);
} 


elseif($button == 'TCP' && $dropdown == 'all')
{
   header("location: tcp.php");
}

  elseif($button == 'TCP' && $dropdown == 'timestamp')
{
    $myfile = fopen("tcp_tsp","r") or die("Unable to open file!");
    echo "<h3><u><b>TIMESTAMP</b></u></h3><br><br>";
    while(!feof($myfile)){
        echo fgets($myfile) . "<br>";
        }
    fclose($myfile);
}

  elseif($button == 'TCP' && $dropdown == 'sip')
{
    $myfile = fopen("tcp_sip","r") or die("Unable to open file!");
    echo "<h3><u><b>SOURCE IP</b></u></h3><br><br>";
    while(!feof($myfile)){
        echo fgets($myfile) . "<br>";
        }
    fclose($myfile);
}

  elseif($button == 'TCP' && $dropdown == 'dip')
{
    $myfile = fopen("tcp_dip","r") or die("Unable to open file!");
    echo "<h3><u><b>DESTINATION IP</b></u></h3><br><br>";
    while(!feof($myfile)){
        echo fgets($myfile) . "<br>";
        }
    fclose($myfile);
}


  elseif($button == 'TCP' && $dropdown == 'port')
{
    $myfile = fopen("tcp_port","r") or die("Unable to open file!");
    echo "<h3><u><b>PORT</b></u></h3><br><br>";
    while(!feof($myfile)){
        echo fgets($myfile) . "<br>";
        }
    fclose($myfile);
}


  elseif($button == 'TCP' && $dropdown == 'smac')
{
    $myfile = fopen("tcp_smac","r") or die("Unable to open file!");
    echo "<h3><u><b>SOURCE MAC ADDRESS</b></u></h3><br><br>";
    while(!feof($myfile)){
        echo fgets($myfile) . "<br>";
        }
    fclose($myfile);
}


  elseif($button == 'TCP' && $dropdown == 'dmac')
{
    $myfile = fopen("tcp_dmac","r") or die("Unable to open file!");
    echo "<h3><u><b>DESTINATION MAC ADDRESS</b></u></h3><br><br>";
    while(!feof($myfile)){
        echo fgets($myfile) . "<br>";
        }
    fclose($myfile);
}


  elseif($button == 'TCP' && $dropdown == 'paclen')
{
    $myfile = fopen("tcp_len","r") or die("Unable to open file!");
    echo "<h3><u><b>PACKET LENGTH</b></u></h3><br><br>";
    while(!feof($myfile)){
        echo fgets($myfile) . "<br>";
        }
    fclose($myfile);
}

  else 
{	
	echo "<h3><u><b>Data Not Available</b></u></h3><br>";
}    

?>

</div>
</center>
</body>
</html>



