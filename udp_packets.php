<html>
        <head><h1>UDP Top Source IP for Number Of Packets</h1>

<style>

    body
    {
        background-color: #6abadeba ;
        font-family: 'Arial';
    }

    .cont {
            width: 500px;
            overflow: hidden;
            margin: auto;
            margin: 50px 0 0 0;
            padding: 30px;
            background: #6abadeba;
            border-radius: 15px ;
            display: flex;
          }

    .box
    {
            width: 200px;
            height: 200px;
            overflow: hidden;
            margin: 20px;
            padding: 20px;
            background: #23463f;
            border-radius: 15px ;
    }

    h1 {
       text-align: center;
       padding: 30px;
       }

    h2 {
        color: #277582;
        text-align: center;
        text-decoration: underline;
       }

 label {
        color: #08ffd1;
        font-size: 20px;
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


        </head>

        <body>

                <h2>RESULT</h2>
                <center>
                <div class="cont">

                 <?php
                $con = mysqli_connect('localhost','root','');
                if (!$con)
                {
                        die('Connection failed'.mysql_error());
                }
                mysqli_select_db($con,'packets');
                $sql = "SELECT UDP_Source_ip, COUNT(UDP_Source_ip) FROM udp_sip1 GROUP BY UDP_Source_ip ORDER BY COUNT(UDP_Source_ip) DESC LIMIT 5";

                $result = mysqli_query($con,$sql);
                echo"<div class='box'><center><label><u><b>Source IP Address</b></u><br>";
                while ($row = mysqli_fetch_array($result))
                {
                        echo"<br>";
                        echo $row['UDP_Source_ip'];
                }
                echo "</label></center></div>";

                $result = mysqli_query($con,$sql);
                echo"<div class='box'><center><label><u><b>COUNT(Source IP Address)</b></u><br>";
                while ($row = mysqli_fetch_array($result))
                {
                        echo"<br>";
                        echo $row['COUNT(UDP_Source_ip)'];
                }
                echo "</label></center></div>";

                mysqli_close($con);
                ?>

		</div>

                <br><br><br>
                <form action="top_talker.html">
                <input type="submit" name="log1" id="log1"  value="Back">
                </form>

                </center>

        </body>

</html>
