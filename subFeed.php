<?php

    //echo '@================Submit Feed Script================@';


    if(isset($_POST['submit'])){
        $cmContent = $_POST['cmContent'];
        $cmName = $_POST['cmName'];
        
        if(empty($cmName)){
            $cmName = "Unknown User";
        }else{
            $cmName = $_POST['cmName'];
        }
    
        $mysqli = mysqli_connect("localhost", "root", 'root', "resumedb");

        $cmName = $mysqli->real_escape_string($cmName);
        $cmContent = $mysqli->real_escape_string($cmContent);

        if($mysqli -> connect_error){
            die("Connection failed: " . $conn->connect_error);
        }else{
            $sql  = 'INSERT INTO `feedback` (`name`, `date`, `content`) VALUES (\''.$cmName.'\', CURDATE(), \''.$cmContent.'\')';
            $query = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
        }
        header("location: main.php#feedback");
    }else{
        echo "Something went wrong posting your comment!\n Please try again later";
        echo "<a href=\"main.html#feedback\">Go Back</a>";

    }

?>