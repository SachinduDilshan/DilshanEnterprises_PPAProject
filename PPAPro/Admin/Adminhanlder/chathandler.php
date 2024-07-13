<?php
require_once '..\connection.php';

if(isset($_POST["query"])){
    $search = $_POST["query"];
    

    $result = mysqli_query($db, "SELECT * FROM feedback 
    WHERE `First Name` LIKE '%$search%' OR `feedbackid` LIKE '%$search%'
       OR `Last Name` LIKE '%$search%' OR `Shop Name` LIKE '%$search%' OR `Reason` LIKE '%$search%' OR `Phone Number` LIKE '%$search%' 
       OR `Address` LIKE '%$search%' OR `Message` LIKE '%$search%'  OR `Email` LIKE '%$search%'");
    
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            
            $rowData = "";
            foreach($row as $key => $value) {
                $rowData .= "<strong>$key:</strong> $value <br>";
               
            }
            echo "<div class='search-result-item'>$rowData</div>";
        }
    }
    else {
        echo "<p>No Feedbacks Found</p>";
    }
}
?>
