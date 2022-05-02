<?php

    $total_players = 0;

    $conn = new mysqli($mysql['host'], $mysql['username'], $mysql['password'], $mysql['realmd']);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM realmlist";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {

            $char_db_name = "";
            $realm_players = 0;

            $web_conn = new mysqli($mysql['host'], $mysql['username'], $mysql['password'], $mysql['web_db']);
            if ($web_conn->connect_error) {
                die("Connection failed: " . $web_conn->connect_error);
            }
            $web_sql = "SELECT * FROM characters_relation WHERE realm_id = '".$row['id']."'";
            $web_result = $web_conn->query($web_sql);
            if ($web_result->num_rows > 0) {
                while($web_row = $web_result->fetch_assoc()) {
                    $char_db_name = $web_row['char_db'];
                };
            };
            $web_conn->close();

            $char_conn = new mysqli($mysql['host'], $mysql['username'], $mysql['password'], $char_db_name);
            if ($char_conn->connect_error) {
                die("Connection failed: " . $char_conn->connect_error);
            }
            $char_sql = "SELECT * FROM characters WHERE online = 1";
            if ($char_result=mysqli_query($char_conn,$char_sql)) {
                $rowcount=mysqli_num_rows($char_result); 
                $realm_players = $rowcount;
            }
            $char_conn->close();

            //Basic configuration
            $sip = $row['address'];    //server IP
            $sport = $row['port'];         //server PORT

            $total_players += $realm_players;
            $icon_path = ""; //PATH TO THE EXPANSION ICON
            $tr_header = ""; //
            $pop = ""; //POPULATION SPAN
            if ($row['gamebuild'] == 12340) {
                $icon_path = "/images/wotlk.png";
            } elseif ($row['gamebuild'] == 18291) {
                $icon_path = "/images/mop.png";
            }; 

            if ($site['realm_info'] == 'ping') {
                if(realm_status($sip, $sport) === false)
                {
                    //echo '<img title="OFFLINE" alt="OFFLINE" src="offline.gif">';
                    $tr_header = '<tr style="color:gray;">';
                    $pop = '<span ></span> Offline';
                } elseif (realm_status($sip, $sport) === true) {
                    if ($row['flag'] == 0) {
                        $tr_header = '<tr >';
                        $pop = '<span >'.$row['population'].'</span> players';
                    } elseif ($row['flag'] == 128) {
                        $tr_header = '<tr class="queue" data-tooltip="Queue 999"';
                        $pop = '<span class="active" >'.$realm_players.'</span> players';
                    };
                } else {
                    $tr_header = '<tr style="color:gray;">';
                    $pop = '<span ></span> Offline';
                };
            } elseif ($site['realm_info'] == 'flag') {
                if ($row['flag'] == 0) {
                    $tr_header = '<tr >';
                    $pop = '<span >'.$realm_players.'</span> players';
                } elseif ($row['flag'] == 2) {
                    $tr_header = '<tr style="color:gray;">';
                    $pop = '<span ></span> Offline';
                } elseif ($row['flag'] == 128) {
                    $tr_header = '<tr class="queue" data-tooltip="Queue 999"';
                    $pop = '<span class="active" >'.$realm_players.'</span> players';
                };
            };
            
            echo '
                '.$tr_header.'
                    <td><img src="'.$icon_path.'"></td>
                    <td>'.$row['name'].'</td>
                    <td class="statistics">
                        '.$pop.'
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="spacer"></div>
                    </td>
                </tr>'  ;
        }
    } else {
        echo "0 results";
    };
    $conn->close();


    echo '
    <tr>
    <td colspan="3">
        <div class="seperator"></div>
    </td>
</tr>
<tr>
    <td>
        <div class="spacer"></div>
    </td>
</tr>
<tr>
    <td colspan="3">
        Total players online: <span>'.$total_players.'</span>
    </td>
 </tr>
    ';
  
    
    function realm_status($host, $port)
    {
        error_reporting(0);
        $etat = fsockopen($host,$port,$errno,$errstr,3);
                    
        if(!$etat)
        {
            return false;
        }
        else
        {
            return true;
        }
    }

?>

