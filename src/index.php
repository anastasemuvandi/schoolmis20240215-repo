<body>
    <div class="container">
        <h2>Welcome to students MIS</h2>
        <strong>List of Students</strong>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "student_db";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT id, firstname, lastname FROM tbl_student";
            $result = $conn->query($sql);
            echo "<table class=\"table table-bordered\">
            <thead>
              <tr><th>Id</th>
                <th>Firstname</th>
                <th>Lastname</th>
            <tbody>
              ";
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td> ". $row["id"]. "</td><td> ". $row["firstname"]. " </td><td>" . $row["lastname"] . "</td></tr>";
                }
                echo "</tbody></table>";
            } else {
                echo "0 results";
            }

            $conn->close();
            ?>

    </div>
</body>
</html>
