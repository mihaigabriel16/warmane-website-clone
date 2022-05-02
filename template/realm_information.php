<?php

    $realm_data = return_data("SELECT * FROM realmlist");
    

    foreach($realm_data as $realm){
        $uptime_data = return_data('SELECT uptime FROM uptime WHERE realmid = '.$realm['id'].' ORDER BY starttime DESC LIMIT 1');
        $uptime = $uptime_data[0];
        echo '
        <div class="wm-ui-statistics">
            <span class="expansion-2">'.$realm['name'].'</span><br>
            <div class="stats">
                <div>Uptime: '.$uptime.'</div>
                <div>Latency: 167 ms</div>
            </div>
        </div>
    ';
    };


    function return_data($query) {
        require("./config.php");
        $data = array();
        $conn = new mysqli($mysql['host'], $mysql['username'], $mysql['password'], $mysql['realmd']);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = $query;
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                array_push($data, $row);
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        return $data;
    };


?>