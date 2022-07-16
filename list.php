<?php
$radioVal=$_POST["radio"];
$dropmenu=$_POST["list"];
if ($radioVal=="tcp")
{
    if($dropmenu=="timestamp")
    {
        $file = fopen("tcptime","r");
	echo "<table>";
        //Output lines until EOF is reached
        while(! feof($file)) 
        {
	echo "<tr><td width='350'>";
        $line = fgets($file);
        echo $line. "<br>";
	echo "</td></tr>";
        }
	echo "</table>";
	fclose($file);
    }
    elseif($dropmenu=="IPsrc")
    {
        $file = fopen("tcpipsrc","r");
	echo "<table>";
        //Output lines until EOF is reached
        while(! feof($file)) 
        {
	echo "<tr><td width='200' >";
        $line = fgets($file);
        echo $line. "<br>";
	echo "</td></tr>";
        }
	echo "</table>";
     	fclose($file);
    }
    elseif($dropmenu=="IPdesti")
    {
        $file = fopen("tcpipdst","r");
	echo "<table>";
        //Output lines until EOF is reached
        while(! feof($file)) 
        {
	echo "<tr><td width='200' >";
        $line = fgets($file);
        echo $line. "<br>";
	echo "</td></tr>";
        }
	echo "</table>";
    	fclose($file);
    }
    elseif($dropmenu=="MACsrc")
    {
        $file = fopen("tcpmacsrc","r");
	echo "<table>";
        //Output lines until EOF is reached
        while(! feof($file)) 
        {
	echo "<tr><td width='200' >";
        $line = fgets($file);
        echo $line. "<br>";
	echo "</td></tr>";
        }
	echo "</table>";
    	fclose($file);
    }
    elseif($dropmenu=="MACdesti")
    {
        $file = fopen("tcpmacdst","r");
	echo "<table>";
        //Output lines until EOF is reached
        while(! feof($file)) 
        {
	echo "<tr><td width='200' >";
        $line = fgets($file);
        echo $line. "<br>";
	echo "</td></tr>";
        }
	echo "</table>";
    	fclose($file);
    }
    elseif($dropmenu=="SrcPort")
    {
        $file = fopen("tcpsrcport","r");
	echo "<table>";
        //Output lines until EOF is reached
        while(! feof($file)) 
        {
	echo "<tr><td width='100' >";
        $line = fgets($file);
        echo $line. "<br>";
	echo "</td></tr>";
        }
	echo "</table>";
    	fclose($file);
    }
    elseif($dropmenu=="DstPort")
    {
        $file = fopen("tcpdstport","r");
	echo "<table>";
        //Output lines until EOF is reached
        while(! feof($file)) 
        {
	echo "<tr><td width='100' >";
        $line = fgets($file);
        echo $line. "<br>";
	echo "</td></tr>";
        }
	echo "</table>";
    	fclose($file);
    }
    elseif($dropmenu=="packetlength")
    {
        $file = fopen("tcpframelen","r");
	echo "<table>";
        //Output lines until EOF is reached
        while(! feof($file)) 
        {
	echo "<tr><td width='100' >";
        $line = fgets($file);
        echo $line. "<br>";
	echo "</td></tr>";
        }
	echo "</table>";
    	fclose($file);
    }
    elseif($dropmenu=="All")
    {
        $file = fopen("tcpall","r");
	echo "<table>";
        //Output lines until EOF is reached
        while(! feof($file)) 
        {
	echo "<tr><td width='1200' >";
        $line = fgets($file);
        echo $line. "<br>";
	echo "</td></tr>";
        }
	echo "</table>";
    	fclose($file);
    }
}
elseif ($radioVal=="udp")
{
    if($dropmenu=="timestamp")
    {
        $file = fopen("udptime","r");
	echo "<table>";
        //Output lines until EOF is reached
        while(! feof($file)) 
        {
	echo "<tr><td width='350' >";
        $line = fgets($file);
        echo $line. "<br>";
	echo "</td></tr>";
        }
	echo "</table>";
    	fclose($file);
    }
    elseif($dropmenu=="MACsrc")
    {
        $file = fopen("udpmacsrc","r");
	echo "<table>";
        //Output lines until EOF is reached
        while(! feof($file)) 
        {
	echo "<tr><td width='200' >";
        $line = fgets($file);
        echo $line. "<br>";
	echo "</td></tr>";
        }
	echo "</table>";
    	fclose($file);
    }
    elseif($dropmenu=="MACdesti")
    {
        $file = fopen("udpmacdst","r");
	echo "<table>";
        //Output lines until EOF is reached
        while(! feof($file)) 
        {
	echo "<tr><td width='200' >";
        $line = fgets($file);
        echo $line. "<br>";
	echo "</td></tr>";
        }
	echo "</table>";
    	fclose($file);
    }
    elseif($dropmenu=="SrcPort")
    {
        $file = fopen("udpsrcport","r");
	echo "<table>";
        //Output lines until EOF is reached
        while(! feof($file)) 
        {
	echo "<tr><td width='100' >";
        $line = fgets($file);
        echo $line. "<br>";
	echo "</td></tr>";
        }
	echo "</table>";
    	fclose($file);
    }
    elseif($dropmenu=="DstPort")
    {
        $file = fopen("udpdstport","r");
	echo "<table>";
        //Output lines until EOF is reached
        while(! feof($file)) 
        {
	echo "<tr><td width='100' >";
        $line = fgets($file);
        echo $line. "<br>";
	echo "</td></tr>";
        }
	echo "</table>";
    	fclose($file);
    }
    elseif($dropmenu=="packetlength")
    {
        $file = fopen("udpframelen","r");
	echo "<table>";
        //Output lines until EOF is reached
        while(! feof($file)) 
        {
	echo "<tr><td width='100' >";
        $line = fgets($file);
        echo $line. "<br>";
	echo "</td></tr>";
        }
	echo "</table>";
    	fclose($file);
    }
    elseif($dropmenu=="All")
    {
        $file = fopen("udpall","r");
	echo "<table>";
        //Output lines until EOF is reached
        while(! feof($file)) 
        {
	echo "<tr><td width='900' >";
        $line = fgets($file);
        echo $line. "<br>";
	echo "</td></tr>";
        }
	echo "</table>";
    	fclose($file);
    }
}
elseif ($radioVal=="arp")
{
    if($dropmenu=="timestamp")
    {
        $file = fopen("arptime","r");
	echo "<table>";
        //Output lines until EOF is reached
        while(! feof($file)) 
        {
	echo "<tr><td width='350' >";
        $line = fgets($file);
        echo $line. "<br>";
	echo "</td></tr>";
        }
	echo "</table>";
    	fclose($file);
    }
    elseif($dropmenu=="MACsrc")
    {
        $file = fopen("arpmacsrc","r");
	echo "<table>";
        //Output lines until EOF is reached
        while(! feof($file)) 
        {
	echo "<tr><td width='200' >";
        $line = fgets($file);
        echo $line. "<br>";
	echo "</td></tr>";
        }
	echo "</table>";
    	fclose($file);
    }
    elseif($dropmenu=="MACdesti")
    {
        $file = fopen("arpmacdst","r");
	echo "<table>";
        //Output lines until EOF is reached
        while(! feof($file)) 
        {
	echo "<tr><td width='200' >";
        $line = fgets($file);
        echo $line. "<br>";
	echo "</td></tr>";
        }
	echo "</table>";
    	fclose($file);
    }
    elseif($dropmenu=="packetlength")
    {
        $file = fopen("arplength","r");
	echo "<table>";
        //Output lines until EOF is reached
        while(! feof($file)) 
        {
	echo "<tr><td width='100' >";
        $line = fgets($file);
        echo $line. "<br>";
	echo "</td></tr>";
        }
	echo "</table>";
    	fclose($file);
    }
    elseif($dropmenu=="All")
    {
        $file = fopen("arpall","r");
	echo "<table>";
        //Output lines until EOF is reached
        while(! feof($file)) 
        {
	echo "<tr><td width='800' >";
        $line = fgets($file);
        echo $line. "<br>";
	echo "</td></tr>";
        }
	echo "</table>";
    	fclose($file);
    }
}
?>
<html>
<head>
    <title>LIST</title>
    <link rel="stylesheet" href="style7.css">
</head>
<body>
</body>
</html>
