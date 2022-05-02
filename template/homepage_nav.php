<?php
                    $conn = new mysqli($mysql['host'], $mysql['username'], $mysql['password'], $mysql['web_db']);
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "SELECT * FROM homepage_nav";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo '<li><a href='.$row['path'].' title='.$row['title'].'>'.$row['title'].'</a></li>';
                        }
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                ?>