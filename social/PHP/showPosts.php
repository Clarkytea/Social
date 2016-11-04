<?php
include('db.php');

    $query = mysqli_query($con,"SELECT * FROM posts")
        or die(mysqli_error($con));

    $total = mysqli_num_rows($query);

    if(mysqli_num_rows($query))
        {
            $output = array();
            while($row = mysqli_fetch_assoc($query))
            {
                $output[] = $row;
            }
            echo json_encode($output);
        }
?>
