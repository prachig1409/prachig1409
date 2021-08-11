<html> 
<head> 
<title > Packet fields </title> 
<style> 
body 
{ 
color: #404040; 
background: #0ca3d2; 
} 
.cont h1 
{ 
border:7px solid #b1b1a1; 
border-radius:20px; 
box-shadow: 10px 10px 10px; 
line_height:20px; 
font-size:40px; 
width: 1250px; 
font_weight: bold; 
color:#555; 
text_shadow: 0 2px white; 
background:#f3f3f3; 
} 
.container h1 
{ 
width:300px; 
background-color:#b8b8c8; 
font-size:16px; 
font-family:Algerian; 
border:2px solid #cfcfe1; 
border-radius:10px; 
box-shadow: 10px 10px 10px; 
} 
table 
{ 
width: 300px; 79 

color:#555; 
background: #CCEEFF; 
border-bottom: 1px solid #cfcfcf; 
} 
</style> 
</head> 
<body> 
<center> 
<div class="cont"> 
<h1> <img src="na.jpg" width="1250" height="70"/> </h1> 
</div> 
<div> <input type="submit" name="back" value="Back" onclick="document.location.href='protocol_details.html'"> 
<input type="submit" name="logout" value="Logout" onclick="document.location.href='login.html'"> 
</div> 
</center> 
<?php 
$conn=mysql_connect("localhost","root",""); 
$db=mysql_select_db("packets",$conn); 
$fields=$_POST['dropdown']; 
$type=$_POST['radio1']; 
if($type=="ARP") 
{ 
echo '<center>'; 
if($fields=="TimeStamp") 
{ 
echo '<div class="container"><h1> ARP - Time Stamp </h1></div>'; 
$query="select Time_Stamp From arp_1"; 
$execute=mysql_query($query); 
$g=mysql_num_rows($execute); 
echo "<table border=2><tr><th>TIME_STAMP</th></tr>"; 
while($new=mysql_fetch_array($execute)) 
{ 
echo "<tr><td>"; 
echo $new['Time_Stamp']; 
echo "</td></tr>"; 
} 
echo "</table>"; 
} 
if($fields=="SourceMacAddress") 
{ 
echo '<div class="container"><h1> ARP - Source Mac Address </h1></div>'; 
$query="select Sourec_Mac_Address From arp_1"; 80 

$execute=mysql_query($query); 
$g=mysql_num_rows($execute); 
echo "<table border=2><tr><th>Sourec_Mac_Address</th></tr>"; 
while($new=mysql_fetch_array($execute)) 
{ 
echo "<tr><td>"; 
echo $new['Sourec_Mac_Address']; 
echo "</td></tr>"; 
} 
echo "</table>"; 
} 
if($fields=="DestinationMacAddress") 
{ 
echo '<div class="container"><h1> ARP - destination Mac Address </h1></div>'; 
$query="select Destination_Mac_Address From arp_1"; 
$execute=mysql_query($query); 
$g=mysql_num_rows($execute); 
echo "<table border=2><tr><th>Destination_Mac_Address</th></tr>"; 
while($new=mysql_fetch_array($execute)) 
{ 
echo "<tr><td>"; 
echo $new['Destination_Mac_Address']; 
echo "</td></tr>"; 
} 
echo "</table>"; 
} 
if($fields=="SourceIp") 
{ 
echo '<div class="container"><h1> ARP - Sourcce Ip </h1></div>'; 
$query="select Source_IpAddress From arp_1"; 
$execute=mysql_query($query); 
$g=mysql_num_rows($execute); 
echo "<table border=2><tr><th>Source_IpAddress</th></tr>"; 
while($new=mysql_fetch_array($execute)) 
{ 
echo "<tr><td>"; 
echo $new['Source_IpAddress']; 
echo "</td></tr>"; 
} 
echo "</table>"; 
} 
if($fields=="DestinationIp") 
{ 
echo '<div class="container"><h1> ARP - Destination Ip </h1></div>'; 
$query="select Destination_IpAddress From arp_1"; 81 

$execute=mysql_query($query); 
$g=mysql_num_rows($execute); 
echo "<table border=2><tr><th>Destination_IpAddress</th></tr>"; 
while($new=mysql_fetch_array($execute)) 
{ 
echo "<tr><td>"; 
echo $new['Destination_IpAddress']; 
echo "</td></tr>"; 
} 
echo "</table>"; 
} 
if($fields=="SourcePort") 
{ 
echo '<div class="container"><h1> ARP - Source Port </h1></div>'; 
echo "<table border=2><tr><th>"; 
echo '<script>document.write("Source Port field is not available in ARP")</script>'; 
echo "</th></tr></table>"; 
} 
if($fields=="DestinationPort") 
{ 
echo '<div class="container"><h1> ARP - Destination Port </h1></div>'; 
echo "<table border=2><tr><th>"; 
echo '<script>document.write("Destination Port field is not available in ARP")</script>'; 
echo "</th></tr></table>"; 
} 
if($fields=="PointerLength") 
{ 
echo '<div class="container"><h1> ARP - Number Of Bytes </h1></div>'; 
$query="select No_Of_Bytes From arp_1"; 
$execute=mysql_query($query); 
$g=mysql_num_rows($execute); 
echo "<table border=2><tr><th>Number_Of_Bytes</th></tr>"; 
while($new=mysql_fetch_array($execute)) 
{ 
echo "<tr><td>"; 
echo $new['No_Of_Bytes']; 
echo "</td></tr>"; 
} 
echo "</table>"; 
} 
if($fields=="PacketLength") 
{ 82 

echo '<div class="container"><h1> ARP - Packet Length </h1></div>'; 
$query="select Length From arp_1"; 
$execute=mysql_query($query); 
$g=mysql_num_rows($execute); 
echo "<table border=2><tr><th>Length</th></tr>"; 
while($new=mysql_fetch_array($execute)) 
{ 
echo "<tr><td>"; 
echo $new['Length']; 
echo "</td></tr>"; 
} 
echo "</table>"; 
} 
if($fields=="All") 
{ 
echo '<div class="container"><h1> ARP - All Fields </h1></div>'; 
$query="select * From arp_1"; 
$execute=mysql_query($query); 
$g=mysql_num_rows($execute); 
echo "<table border=2><tr><th>Time_Stamp</th><th>Source_Mac_Address</th><th>Destination_Mac_Address</th><th>Source_IpAddress</th><th>Destination_IpAddress</th><th>Number_Of_Bytes</th><th>Packet_Length</th></tr>"; 
while($new=mysql_fetch_array($execute)) 
{ 
echo "<tr><td>"; 
echo $new['Time_Stamp']; 
echo "</td><td>"; 
echo $new['Sourec_Mac_Address']; 
echo "</td><td>"; 
echo $new['Destination_Mac_Address']; 
echo "</td><td>"; 
echo $new['Source_IpAddress']; 
echo "</td><td>"; 
echo $new['Destination_IpAddress']; 
echo "</td><td>"; 
echo $new['No_Of_Bytes']; 
echo "</td><td>"; 
echo $new['Length']; 
echo "</td></tr>"; 
} 
echo "</table>"; 
} 
echo '</center>'; 
} 
if($type=="UDP") 83 

{ 
echo '<center>'; 
if($fields=="TimeStamp") 
{ 
echo '<div class="container"><h1> UDP - Time Stamp </h1></div>'; 
$query="select Time_Stamp From udp_1"; 
$execute=mysql_query($query); 
$g=mysql_num_rows($execute); 
echo "<table border=2><tr><th>TIME_STAMP</th></tr>"; 
while($new=mysql_fetch_array($execute)) 
{ 
echo "<tr><td>"; 
echo $new['Time_Stamp']; 
echo "</td></tr>"; 
} 
echo "</table>"; 
} 
if($fields=="SourceMacAddress") 
{ 
echo '<div class="container"><h1> UDP - Source Mac Address </h1></div>'; 
$query="select Sourec_Mac_Address From udp_1"; 
$execute=mysql_query($query); 
$g=mysql_num_rows($execute); 
echo "<table border=2><tr><th>Sourec_Mac_Address</th></tr>"; 
while($new=mysql_fetch_array($execute)) 
{ 
echo "<tr><td>"; 
echo $new['Sourec_Mac_Address']; 
echo "</td></tr>"; 
} 
echo "</table>"; 
} 
if($fields=="DestinationMacAddress") 
{ 
echo '<div class="container"><h1> UDP - Destination Mac Address </h1></div>'; 
$query="select Destination_Mac_Address From udp_1"; 
$execute=mysql_query($query); 
$g=mysql_num_rows($execute); 
echo "<table border=2><tr><th>Destination_Mac_Address</th></tr>"; 
while($new=mysql_fetch_array($execute)) 
{ 
echo "<tr><td>"; 
echo $new['Destination_Mac_Address']; 
echo "</td></tr>"; 84 

} 
echo "</table>"; 
} 
if($fields=="SourceIp") 
{ 
echo '<div class="container"><h1> UDP - Source Ip </h1></div>'; 
$query="select Source_IpAddress From udp_1"; 
$execute=mysql_query($query); 
$g=mysql_num_rows($execute); 
echo "<table border=2><tr><th>Source_IpAddress</th></tr>"; 
while($new=mysql_fetch_array($execute)) 
{ 
echo "<tr><td>"; 
echo $new['Source_IpAddress']; 
echo "</td></tr>"; 
} 
echo "</table>"; 
} 
if($fields=="DestinationIp") 
{ 
echo '<div class="container"><h1> UDP - Destination Ip </h1></div>'; 
$query="select Destination_IpAddress From udp_1"; 
$execute=mysql_query($query); 
$g=mysql_num_rows($execute); 
echo "<table border=2><tr><th>Destination_IpAddress</th></tr>"; 
while($new=mysql_fetch_array($execute)) 
{ 
echo "<tr><td>"; 
echo $new['Destination_IpAddress']; 
echo "</td></tr>"; 
} 
echo "</table>"; 
} 
if($fields=="SourcePort") 
{ 
echo '<div class="container"><h1> UDP - Source Port </h1></div>'; 
$query="select Source_Port From udp_1"; 
$execute=mysql_query($query); 
$g=mysql_num_rows($execute); 
echo "<table border=2><tr><th>Source_Port</th></tr>"; 
while($new=mysql_fetch_array($execute)) 
{ 
echo "<tr><td>"; 
echo $new['Source_Port']; 
echo "</td></tr>"; 
} 85 

echo "</table>"; 
} 
if($fields=="DestinationPort") 
{ 
echo '<div class="container"><h1> UDP - Destination Port </h1></div>'; 
$query="select Destination_Port From udp_1"; 
$execute=mysql_query($query); 
$g=mysql_num_rows($execute); 
echo "<table border=2><tr><th>Destination_Port</th></tr>"; 
while($new=mysql_fetch_array($execute)) 
{ 
echo "<tr><td>"; 
echo $new['Destination_Port']; 
echo "</td></tr>"; 
} 
echo "</table>"; 
} 
if($fields=="PointerLength") 
{ 
echo '<div class="container"><h1> UDP - Number Of Bytes </h1></div>'; 
$query="select No_Of_Bytes From udp_1"; 
$execute=mysql_query($query); 
$g=mysql_num_rows($execute); 
echo "<table border=2><tr><th>Number_Of_Bytes</th></tr>"; 
while($new=mysql_fetch_array($execute)) 
{ 
echo "<tr><td>"; 
echo $new['No_Of_Bytes']; 
echo "</td></tr>"; 
} 
echo "</table>"; 
} 
if($fields=="PacketLength") 
{ 
echo '<div class="container"><h1> UDP - Packet Langth </h1></div>'; 
$query="select Length From udp_1"; 
$execute=mysql_query($query); 
$g=mysql_num_rows($execute); 
echo "<table border=2><tr><th>Length</th></tr>"; 
while($new=mysql_fetch_array($execute)) 
{ 
echo "<tr><td>"; 
echo $new['Length']; 
echo "</td></tr>"; 86 

} 
echo "</table>"; 
} 
if($fields=="All") 
{ 
echo '<div class="container"><h1> UDP - All Fields </h1></div>'; 
echo '<div class="cont1">'; 
$query="select * From udp_1"; 
$execute=mysql_query($query); 
$g=mysql_num_rows($execute); 
echo "<table border=2><tr><th>Time_Stamp</th><th>Source_Mac_Address</th><th>Destination_Mac_Address</th><th>Source_IpAddress</th><th>Destination_IpAddress</th><th>Source_Port</th><th>Destination_Port</th><th>Number_Of_Bytes</th><th>Packet_Length</th></tr>"; 
while($new=mysql_fetch_array($execute)) 
{ 
echo "<tr><td>"; 
echo $new['Time_Stamp']; 
echo "</td><td>"; 
echo $new['Sourec_Mac_Address']; 
echo "</td><td>"; 
echo $new['Destination_Mac_Address']; 
echo "</td><td>"; 
echo $new['Source_IpAddress']; 
echo "</td><td>"; 
echo $new['Destination_IpAddress']; 
echo "</td><td>"; 
echo $new['Source_Port']; 
echo "</td><td>"; 
echo $new['Destination_Port']; 
echo "</td><td>"; 
echo $new['No_Of_Bytes']; 
echo "</td><td>"; 
echo $new['Length']; 
echo "</td></tr>"; 
} 
echo "</table>"; 
} 
echo '</center>'; 
} 
if($type=="TCP") 
{ 
echo '<center>'; 
if($fields=="TimeStamp") 
{ 87 

echo '<div class="container"><h1> TCP - Time Stamp </h1></div>'; 
$query="select Time_Stamp From tcp_1"; 
$execute=mysql_query($query); 
$g=mysql_num_rows($execute); 
echo "<table border=2><tr><th>TIME_STAMP</th></tr>"; 
while($new=mysql_fetch_array($execute)) 
{ 
echo "<tr><td>"; 
echo $new['Time_Stamp']; 
echo "</td></tr>"; 
} 
echo "</table>"; 
} 
if($fields=="SourceMacAddress") 
{ 
echo '<div class="container"><h1> TCP - Source Mac Address </h1></div>'; 
$query="select Sourec_Mac_Address From tcp_1"; 
$execute=mysql_query($query); 
$g=mysql_num_rows($execute); 
echo "<table border=2><tr><th>Sourec_Mac_Address</th></tr>"; 
while($new=mysql_fetch_array($execute)) 
{ 
echo "<tr><td>"; 
echo $new['Sourec_Mac_Address']; 
echo "</td></tr>"; 
} 
echo "</table>"; 
} 
if($fields=="DestinationMacAddress") 
{ 
echo '<div class="container"><h1> TCP - Destination Mac Address </h1></div>'; 
$query="select Destination_Mac_Address From tcp_1"; 
$execute=mysql_query($query); 
$g=mysql_num_rows($execute); 
echo "<table border=2><tr><th>Destination_Mac_Address</th></tr>"; 
while($new=mysql_fetch_array($execute)) 
{ 
echo "<tr><td>"; 
echo $new['Destination_Mac_Address']; 
echo "</td></tr>"; 
} 
echo "</table>"; 
} 
if($fields=="SourceIp") 88 

{ 
echo '<div class="container"><h1> TCP - Source Ip </h1></div>'; 
$query="select Source_IpAddress From tcp_1"; 
$execute=mysql_query($query); 
$g=mysql_num_rows($execute); 
echo "<table border=2><tr><th>Source_IpAddress</th></tr>"; 
while($new=mysql_fetch_array($execute)) 
{ 
echo "<tr><td>"; 
echo $new['Source_IpAddress']; 
echo "</td></tr>"; 
} 
echo "</table>"; 
} 
if($fields=="DestinationIp") 
{ 
echo '<div class="container"><h1> TCP - Destination Ip </h1></div>'; 
$query="select Destination_IpAddress From tcp_1"; 
$execute=mysql_query($query); 
$g=mysql_num_rows($execute); 
echo "<table border=2><tr><th>Destination_IpAddress</th></tr>"; 
while($new=mysql_fetch_array($execute)) 
{ 
echo "<tr><td>"; 
echo $new['Destination_IpAddress']; 
echo "</td></tr>"; 
} 
echo "</table>"; 
} 
if($fields=="SourcePort") 
{ 
echo '<div class="container"><h1> TCP - Source Port </h1></div>'; 
$query="select Source_Port From tcp_1"; 
$execute=mysql_query($query); 
$g=mysql_num_rows($execute); 
echo "<table border=2><tr><th>Source_Port</th></tr>"; 
while($new=mysql_fetch_array($execute)) 
{ 
echo "<tr><td>"; 
echo $new['Source_Port']; 
echo "</td></tr>"; 
} 
echo "</table>"; 
} 
if($fields=="DestinationPort") 
{ 89 

echo '<div class="container"><h1> TCP - Destination Port </h1></div>'; 
$query="select Destination_Port From tcp_1"; 
$execute=mysql_query($query); 
$g=mysql_num_rows($execute); 
echo "<table border=2><tr><th>Destination_Port</th></tr>"; 
while($new=mysql_fetch_array($execute)) 
{ 
echo "<tr><td>"; 
echo $new['Destination_Port']; 
echo "</td></tr>"; 
} 
echo "</table>"; 
} 
if($fields=="PointerLength") 
{ 
echo '<div class="container"><h1> TCP - Number Of Bytes </h1></div>'; 
$query="select No_Of_Bytes From tcp_1"; 
$execute=mysql_query($query); 
$g=mysql_num_rows($execute); 
echo "<table border=2><tr><th>Number_Of_Bytes</th></tr>"; 
while($new=mysql_fetch_array($execute)) 
{ 
echo "<tr><td>"; 
echo $new['No_Of_Bytes']; 
echo "</td></tr>"; 
} 
echo "</table>"; 
} 
if($fields=="PacketLength") 
{ 
echo '<div class="container"><h1> TCP - Packet Langth </h1></div>'; 
$query="select Length From tcp_1"; 
$execute=mysql_query($query); 
$g=mysql_num_rows($execute); 
echo "<table border=2><tr><th>Length</th></tr>"; 
while($new=mysql_fetch_array($execute)) 
{ 
echo "<tr><td>"; 
echo $new['Length']; 
echo "</td></tr>"; 
} 
echo "</table>"; 
} 
if($fields=="All") 90 

{ 
echo '<div class="container"><h1> TCP - All Fields </h1></div>'; 
echo '<div class="cont1">'; 
$query="select * From tcp_1"; 
$execute=mysql_query($query); 
$g=mysql_num_rows($execute); 
echo "<table border=2><tr><th>Time_Stamp</th><th>Source_Mac_Address</th><th>Destination_Mac_Address</th><th>Source_IpAddress</th><th>Destination_IpAddress</th><th>Source_Port</th><th>Destination_Port</th><th>Number_Of_Bytes</th><th>Packet_Length</th></tr>"; 
while($new=mysql_fetch_array($execute)) 
{ 
echo "<tr><td>"; 
echo $new['Time_Stamp']; 
echo "</td><td>"; 
echo $new['Sourec_Mac_Address']; 
echo "</td><td>"; 
echo $new['Destination_Mac_Address']; 
echo "</td><td>"; 
echo $new['Source_IpAddress']; 
echo "</td><td>"; 
echo $new['Destination_IpAddress']; 
echo "</td><td>"; 
echo $new['Source_Port']; 
echo "</td><td>"; 
echo $new['Destination_Port']; 
echo "</td><td>"; 
echo $new['No_Of_Bytes']; 
echo "</td><td>"; 
echo $new['Length']; 
echo "</td></tr>"; 
} 
echo "</table>"; 
} 
echo '</center>'; 
} 
if($type=="IPv4") 
{ 
echo '<center>'; 
if($fields=="TimeStamp") 
{ 
echo '<div class="container"><h1> IPv4 - Time Stamp </h1></div>'; 
$query="select Time_Stamp From ip_1"; 
$execute=mysql_query($query); 
$g=mysql_num_rows($execute); 91 

echo "<table border=2><tr><th>TIME_STAMP</th></tr>"; 
while($new=mysql_fetch_array($execute)) 
{ 
echo "<tr><td>"; 
echo $new['Time_Stamp']; 
echo "</td></tr>"; 
} 
echo "</table>"; 
} 
if($fields=="SourceMacAddress") 
{ 
echo '<div class="container"><h1> IPv4 - Source Mac Address </h1></div>'; 
$query="select Sourec_Mac_Address From ip_1"; 
$execute=mysql_query($query); 
$g=mysql_num_rows($execute); 
echo "<table border=2><tr><th>Sourec_Mac_Address</th></tr>"; 
while($new=mysql_fetch_array($execute)) 
{ 
echo "<tr><td>"; 
echo $new['Sourec_Mac_Address']; 
echo "</td></tr>"; 
} 
echo "</table>"; 
} 
if($fields=="DestinationMacAddress") 
{ 
echo '<div class="container"><h1> Ipv4 - Destibnation Mac Address </h1></div>'; 
$query="select Destination_Mac_Address From ip_1"; 
$execute=mysql_query($query); 
$g=mysql_num_rows($execute); 
echo "<table border=2><tr><th>Destination_Mac_Address</th></tr>"; 
while($new=mysql_fetch_array($execute)) 
{ 
echo "<tr><td>"; 
echo $new['Destination_Mac_Address']; 
echo "</td></tr>"; 
} 
echo "</table>"; 
} 
if($fields=="SourceIp") 
{ 
echo '<div class="container"><h1> IPv4 - Source Ip </h1></div>'; 
$query="select Source_IpAddress From ip_1"; 
$execute=mysql_query($query); 92 

$g=mysql_num_rows($execute); 
echo "<table border=2><tr><th>Source_IpAddress</th></tr>"; 
while($new=mysql_fetch_array($execute)) 
{ 
echo "<tr><td>"; 
echo $new['Source_IpAddress']; 
echo "</td></tr>"; 
} 
echo "</table>"; 
} 
if($fields=="DestinationIp") 
{ 
echo '<div class="container"><h1> IPv4 - Destination Ip </h1></div>'; 
$query="select Destination_IpAddress From ip_1"; 
$execute=mysql_query($query); 
$g=mysql_num_rows($execute); 
echo "<table border=2><tr><th>Destination_IpAddress</th></tr>"; 
while($new=mysql_fetch_array($execute)) 
{ 
echo "<tr><td>"; 
echo $new['Destination_IpAddress']; 
echo "</td></tr>"; 
} 
echo "</table>"; 
} 
if($fields=="SourcePort") 
{ 
echo '<div class="container"><h1> IPv4 - Source Port </h1></div>'; 
$query="select Source_Port From ip_1"; 
$execute=mysql_query($query); 
$g=mysql_num_rows($execute); 
echo "<table border=2><tr><th>Source_Port</th></tr>"; 
while($new=mysql_fetch_array($execute)) 
{ 
echo "<tr><td>"; 
echo $new['Source_Port']; 
echo "</td></tr>"; 
} 
echo "</table>"; 
} 
if($fields=="DestinationPort") 
{ 
echo '<div class="container"><h1> IPv4 - Destination Port </h1></div>'; 
$query="select Destination_Port From ip_1"; 
$execute=mysql_query($query); 93 

$g=mysql_num_rows($execute); 
echo "<table border=2><tr><th>Destination_Port</th></tr>"; 
while($new=mysql_fetch_array($execute)) 
{ 
echo "<tr><td>"; 
echo $new['Destination_Port']; 
echo "</td></tr>"; 
} 
echo "</table>"; 
} 
if($fields=="PointerLength") 
{ 
echo '<div class="container"><h1> IPv4 - Number Of Bytes </h1></div>'; 
$query="select No_Of_Bytes From ip_1"; 
$execute=mysql_query($query); 
$g=mysql_num_rows($execute); 
echo "<table border=2><tr><th>Number_Of_Bytes</th></tr>"; 
while($new=mysql_fetch_array($execute)) 
{ 
echo "<tr><td>"; 
echo $new['No_Of_Bytes']; 
echo "</td></tr>"; 
} 
echo "</table>"; 
} 
if($fields=="PacketLength") 
{ 
echo '<div class="container"><h1> IPv4 - Packet Length </h1></div>'; 
$query="select Length From ip_1"; 
$execute=mysql_query($query); 
$g=mysql_num_rows($execute); 
echo "<table border=2><tr><th>Length</th></tr>"; 
while($new=mysql_fetch_array($execute)) 
{ 
echo "<tr><td>"; 
echo $new['Length']; 
echo "</td></tr>"; 
} 
echo "</table>"; 
} 
if($fields=="All") 
{ 
echo '<div class="container"><h1> IPv4 - All Fields </h1></div>'; 
$query="select * From ip_1"; 
$execute=mysql_query($query); 94 

$g=mysql_num_rows($execute); 
echo "<table border=2><tr><th>Time_Stamp</th><th>Source_Mac_Address</th><th>Destination_Mac_Address</th><th>Source_IpAddress</th><th>Destination_IpAddress</th><th>Source_Port</th><th>Destination_Port</th><th>Number_Of_Bytes</th><th>Packet_Length</th></tr>"; 
while($new=mysql_fetch_array($execute)) 
{ 
echo "<tr><td>"; 
echo $new['Time_Stamp']; 
echo "</td><td>"; 
echo $new['Sourec_Mac_Address']; 
echo "</td><td>"; 
echo $new['Destination_Mac_Address']; 
echo "</td><td>"; 
echo $new['Source_IpAddress']; 
echo "</td><td>"; 
echo $new['Destination_IpAddress']; 
echo "</td><td>"; 
echo $new['Source_Port']; 
echo "</td><td>"; 
echo $new['Destination_Port']; 
echo "</td><td>"; 
echo $new['No_Of_Bytes']; 
echo "</td><td>"; 
echo $new['Length']; 
echo "</td></tr>"; 
} 
echo "</table>"; 
} 
echo '</center>'; 
} 
?> 
</body> 
</html> 
TOP TALKER ANALYSIS FOR IPV4 
Top Talker Page :- 
<html> 
<head> 
<title> Top Tocker </title> 
<script language="javascript"> 
function noBack() 
{ 
window.history.forward() 95 

} 
noBack(); 
window.onload = noBack; 
window.onpageshow=function(evt) 
{ 
if (evt.persisted) noBack() 
} 
window.onunload=function() 
{ void (0) } 
</script> 
<style> 
body 
{ 
color: #404040; 
background: #0ca3d2; 
} 
.container h1 
{ 
border:7px solid #b1b1a1; 
border-radius:20px; 
box-shadow: 10px 10px 10px; 
line_height:20px; 
font-size:40px; 
width: 1250px; 
font_weight: bold; 
color:#555; 
text_shadow: 0 2px white; 
background:#f3f3f3; 
} 
.cont 
{ 
width: 1250px; 
color:#555; 
background: #CCEEFF; 
border-bottom: 1px solid #cfcfcf; 
} 
table 
{ 
width:1230px; 
color:#555; 
background:#f3f3f3; 
border-bottom: 1px solid #cfcfcf; 
} 
</style> 
</head> 
<body> 96 

<center> 
<div class="container"> 
<h1> <img src="na.jpg" width="1250" height="70"/> </h1> 
</div> 
<center style="width:450px; background-color:#b8b8c8; font-size:16px; font-family:Algerian; border:2px solid #cfcfe1; border-radius:10px;box-shadow: 10px 10px 10px;"align="left"> 
TOP TOCKER IPv4 
</center></Br> 
<center> 
<div> 
<input type="submit" value="Back" name="back" onclick="document.location.href='ipv4_analysis.html'"> 
<input type="submit" value="Logout" name="logout" onclick="document.location.href='login.html'"> 
</div> </Br> 
<div class="cont"></Br> 
<table border='4'><tr><th> 
</Br> Select a protocol for Number Of Packets :</Br></Br> 
<input type="submit" name="arp" value="ARP" onclick="document.location.href='arp_top_packet.php'"/> </Br></Br> 
<input type="submit" name="udp" value="UDP" onclick="document.location.href='udp_top_packet.php'"/> </Br></Br> 
<input type="submit" name="tcp" value="TCP" onclick="document.location.href='tcp_top_packet.php'"/></Br></Br> 
<input type="submit" name="ipv4" value="IPv4" onclick="document.location.href='ipv4_top_packet.php'"/></Br></Br> 
</th><th> 
Select a protocol for Number Of Bytes :</Br></Br> 
<input type="submit" name="arp" value="ARP" onclick="document.location.href='arp_top_bytes.php'"/> </Br></Br> 
<input type="submit" name="udp" value="UDP" onclick="document.location.href='udp_top_bytes.php'"/> </Br></Br> 
<input type="submit" name="tcp" value="TCP" onclick="document.location.href='tcp_top_bytes.php'"/></Br></Br> 
<input type="submit" name="ipv4" value="IPv4" onclick="document.location.href='ipv4_top_bytes.php'"/></Br></Br> 
</th></tr> 
</table> 
</Br> 
</div> 
</center> 
</body> 
</html> 97 

ARP Top Tocker Number Of Packets Result :- 
<html> 
<head> 
<title> ARP top Source Ip </title> 
<script> 
function noBack() 
{ 
window.history.forward() 
} 
noBack(); 
window.onload = noBack; 
window.onpageshow=function(evt) 
{ 
if (evt.persisted) noBack() 
} 
window.onunload=function() 
{ void (0) } 
</script> 
<style> 
body 
{ 
color: #404040; 
background: #0ca3d2; 
} 
.container h1 
{ 
border:7px solid #b1b1a1; 
border-radius:20px; 
box-shadow: 10px 10px 10px; 
line_height:20px; 
font-size:40px; 
width: 1250px; 
font_weight: bold; 
color:#555; 
text_shadow: 0 2px white; 
background:#f3f3f3; 
} 
table 
{ 
width: 350px; 
color:#555; 
background: #CCEEFF; 
border-bottom: 1px solid #cfcfcf; 
} 
</style> 98 

</head> 
<body> 
<center> 
<div class="container"> 
<h1> <img src="na.jpg" width="1250" height="70"/> </h1> 
</div> 
<center style="width:350px; background-color:#b8b8c8; font-size:16px; font-family:Algerian; border:2px solid #cfcfe1; border-radius:10px;box-shadow: 10px 10px 10px;"align="left"> 
ARP Top Source Ip for Number Of Packets 
</center></Br> 
<div> <input type="submit" value="Back" name="back" onclick="document.location.href='top_tocker.html'"> 
<input type="submit" value="Logout" name="logout" onclick="document.location.href='login.html'"> 
</div> </Br> 
<?php 
$con=mysql_connect("localhost","root",""); 
if(!$con) 
{ 
die('connection not established:'.mysql_error()); 
} 
mysql_select_db("packets",$con); 
$result=mysql_query("Select Source_IpAddress,COUNT(Source_IpAddress) From arp_1 GROUP BY Source_IpAddress ORDER BY COUNT(Source_IpAddress) DESC LIMIT 5"); 
echo "<center><table border='1'><tr><th>Source_IpAddress<
