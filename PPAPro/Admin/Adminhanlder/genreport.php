<?php
        require_once '../connection.php';
        require('../fpdf/fpdf.php');


$sql = "SELECT * FROM feedback";
$result = mysqli_query($db, $sql);


$pdf = new FPDF();


$pdf->AddPage();


$pdf->SetFont('Arial', '', 9);


$pdf->SetFont('Arial', 'B', 15); 
$pdf->Cell(0, 1, 'Dilshan Enterprises', 0, 1, 'L');
$pdf->Cell(0, 10, 'Feedback Report', 0, 1, 'C'); 
$pdf->Ln(10); 


$pdf->SetFillColor(246,190,0); 
$pdf->SetTextColor(0); 
$pdf->SetFont('Arial', 'B', 12); 
$header = array('Feedback ID', 'Name', 'Contact', 'Reason', 'Message');
$numColumns = count($header);
$cellWidth = 195 / $numColumns; 
$cellHeight = 15; 


foreach ($header as $col) {
    $pdf->Cell($cellWidth, $cellHeight, $col, 1, 0, 'C', true);
}
$pdf->Ln();
$pdf->Ln();


$pdf->SetFont('Arial', '', 10); 
$pdf->SetFillColor(255); 


while ($row = mysqli_fetch_assoc($result)) {
    $rowData = array(
        $row['feedbackid'],
        $row['First Name']." ".$row['Last Name'],
        $row['Phone Number'],
        $row['Reason'],
        $row['Message']
    );
    
    foreach ($rowData as $colData) {
        $pdf->Cell($cellWidth, $cellHeight, $colData, 1, 0, 'C', true);
    }
    $pdf->Ln();
}

$pdf->Output('feedback_report.pdf', 'I');

$pdf->Output();

mysqli_close($db);
?>