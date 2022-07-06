<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
<html>
<head>
    <title>HOME</title>
    <link rel="stylesheet" href="style5.css">
</head>

<body>
    <div class="main">
        <div class="logoutbtn">
            <a href="logout.php" class="btn">Logout</a>
        </div>
        <form action="list.php" method="post">
            <div class="box">
                <div class="innerBox">
                    <div class="radioBox">
                        <label for="tcp">
                            <input type="radio" id="tcp" value="tcp" name="radio" checked />
                            <span>TCP</span>
                        </label>
                        <label for="udp">
                            <input type="radio" id="udp" value="udp" name="radio" />
                            <span>UDP</span>
                        </label>
                        <label for="arp">
                            <input type="radio" id="arp" value="arp" name="radio" />
                            <span>ARP</span>
                        </label>
                    </div>
                    <div class="selectBox">
                        <label class="select" for="slct">
                            <select id="slct" required="required" name="list">
                                <option value="" disabled="disabled" selected="selected">Select option</option>
                                <option value="timestamp">Time Stamp</option>
                                <option value="IPsrc">Source IP</option>
                                <option value="IPdesti">Destination IP</option>
                                <option value="MACsrc">Source MAC</option>
                                <option value="MACdesti">Destination Mac</option>
                                <option value="SrcPort">Source Port</option>
                                <option value="DstPort">Destination Port</option>
                                <option value="packetlength">Packet Length</option>
                            </select>
                            <svg>
                                <use xlink:href="#select-arrow-down"></use>
                            </svg>
                        </label>
                        <svg class="sprites">
                            <symbol id="select-arrow-down" viewbox="0 0 10 6">
                                <polyline points="1 1 5 5 9 1"></polyline>
                            </symbol>
                        </svg>
                    </div>

                </div>
                <button class="btn2" type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>

<?php
}else{
     header("Location: index.php");
     exit();
}
 ?>
