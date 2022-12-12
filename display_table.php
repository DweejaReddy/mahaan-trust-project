<?php
   include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
   
   <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <title>Welcome </title>

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

   </head>
   
   <body>

   <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "mahaan";

        $conn = mysqli_connect($servername, $username, $password, $dbname);
        
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT sno, fname,lname,age,address,supervisor,date,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,q11 FROM tb";
        $result = mysqli_query($conn, $sql);
        
    ?>

   <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Index</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Age</th>
                <th scope="col">Address</th>
                <th scope="col">Supervisor</th>
                <th scope="col">Date</th>
                <th scope="col">Q1</th>
                <th scope="col">Q2</th>
                <th scope="col">Q3</th>
                <th scope="col">Q4</th>
                <th scope="col">Q5</th>
                <th scope="col">Q6</th>
                <th scope="col">Q7</th>
                <th scope="col">Q8</th>
                <th scope="col">Q9</th>
                <th scope="col">Q10</th>
                <th scope="col">Q11</th>


            </tr>
        </thead>
        <?php
            while($row = mysqli_fetch_assoc($result)):
        ?>
        <tbody>
            <tr>
                <td><?php echo $row["sno"]; ?></td>
                <td><?php echo $row["fname"]; ?></td>
                <td><?php echo $row["lname"]; ?></td>
                <td><?php echo $row["age"]; ?></td>
                <td><?php echo $row["address"]; ?></td>
                <td><?php echo $row["supervisor"]; ?></td>
                <td><?php echo $row["date"]; ?></td>
                <td><?php echo $row["q1"]; ?></td>
                <td><?php echo $row["q2"]; ?></td>
                <td><?php echo $row["q3"]; ?></td>
                <td><?php echo $row["q4"]; ?></td>
                <td><?php echo $row["q5"]; ?></td>
                <td><?php echo $row["q6"]; ?></td>
                <td><?php echo $row["q7"]; ?></td>
                <td><?php echo $row["q8"]; ?></td>
                <td><?php echo $row["q9"]; ?></td>
                <td><?php echo $row["q10"]; ?></td>
                <td><?php echo $row["q11"]; ?></td>
            </tr>
        </tbody>
        <?php endwhile; ?>
   </table>
   
   <button type="button" class="btn btn-secondary btn-lg btn-block"><a href = "display_logout.php">Sign Out</a></button>
   </body>
   
</html>