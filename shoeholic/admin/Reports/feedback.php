<?php
include('config.php');
$database = new Database();
$result = $database->runQuery("select f.feedback,f.F_date, u.User_name from feedback f join user u where f.User_id=u.User_id");
$header = $database->runQuery("SELECT UCASE(`COLUMN_NAME`) 
FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='shoe_holic' 
AND `TABLE_NAME`='feedback'
and `COLUMN_NAME` in ('feedback','F_date','User_id')");
require('fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage("L","A4");
$pdf->SetFont('Arial','B',10);

// Set header
 $pdf->Image('shoeholic.jpg',7,7,50);
    // Move to the right
    $pdf->Cell(60);			
    // Title
    $pdf->Cell(60,10,'Feedback List',1,0,'C');
    // Line break
    $pdf->Ln(20);

/*
foreach($header as $heading) {
	foreach($heading as $column_heading)
		$pdf->Cell(70,12,$column_heading,1);
}
*/
		
		$pdf->Cell(70,20,"Feedback",1);
		//$pdf->Cell(20,20,"Last Name",1);
		$pdf->Cell(70,20,"Feedback date",1);
		$pdf->Cell(70,20,"User name",1);
		//$pdf->Cell(70,20,"email",1);
		//$pdf->Cell(20,20,"Number",1);
		//$pdf->Cell(60,20,"registered date",1);
		//$pdf->Cell(60,20,"Contact No",1);
foreach($result as $row) {
	$pdf->Ln();
	foreach($row as $column)
		$pdf->Cell(70,10,$column,1);
}
$pdf->Output();

// Set footer
   $pdf->SetY(-15);
    // Arial italic 8
    $pdf->SetFont('Arial','I',8);
    // Page number
    $pdf->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
?>