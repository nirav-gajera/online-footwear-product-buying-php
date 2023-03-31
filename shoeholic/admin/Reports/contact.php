<?php
include('config.php');
$database = new Database();
$result = $database->runQuery("select u.User_name,u.Email,u.Contact_no,c.C_name from user u join category c where u.C_id=c.C_id");
$header = $database->runQuery("SELECT UCASE(`COLUMN_NAME`) 
FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='shoe_holic' 
AND `TABLE_NAME`='user'
and `COLUMN_NAME` in ('User_name','Email','Contact_no','C_name')");
require('fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage("L","A4");
$pdf->SetFont('Arial','B',10);

// Set header
 $pdf->Image('shoeholic.jpg',7,7,50);
    // Move to the right
    $pdf->Cell(80);			
    // Title
    $pdf->Cell(60,10,'Inquiry List',1,0,'C');
    // Line break
    $pdf->Ln(20);

/*
foreach($header as $heading) {
	foreach($heading as $column_heading)
		$pdf->Cell(70,12,$column_heading,1);
}
*/
		
		$pdf->Cell(60,20,"cutomer Name",1);
		$pdf->Cell(60,20,"email",1);
		//$pdf->Cell(70,20,"Created date",1);
		$pdf->Cell(60,20,"phone no",1);
		$pdf->Cell(60,20,"Category Name",1);
		//$pdf->Cell(40,20,"Start Date",1);
		//$pdf->Cell(40,20,"End Date",1);
		//$pdf->Cell(60,20,"Contact No",1);
foreach($result as $row) {
	$pdf->Ln();
	foreach($row as $column)
		$pdf->Cell(60,10,$column,1);
}
$pdf->Output();

// Set footer
   $pdf->SetY(-15);
    // Arial italic 8
    $pdf->SetFont('Arial','I',8);
    // Page number
    $pdf->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
?>