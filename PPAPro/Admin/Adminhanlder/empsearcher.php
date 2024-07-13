<?php
require_once '..\connection.php';

if(isset($_POST["query"])){
    $search = $_POST["query"];
    

    $result = mysqli_query($db, "SELECT * FROM employee 
    WHERE `ename` LIKE '%$search%' OR `empid` LIKE '%$search%'
       OR `age` LIKE '%$search%' OR `gender` LIKE '%$search%' OR `address` LIKE '%$search%' OR `salary` LIKE '%$search%' 
       OR `division` LIKE '%$search%'");
    
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
        echo "<p>No Employees Found</p>";
    }
}
?>
