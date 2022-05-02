<?php
            $conn = new mysqli($mysql['host'], $mysql['username'], $mysql['password'], $mysql['web_db']);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM devlog ORDER BY id DESC";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '
                        <div class="wm-ui-article-title">
                            <p>'.$row['name'].'</p>
                            <p>'.$row['date'].'</p>
                        </div>
                        <div class="wm-ui-article-content">
                            '.$row['text'].'
                        </div>
                    ';
                }
            } else {
                echo "0 results";
            }
            $conn->close();
        ?>