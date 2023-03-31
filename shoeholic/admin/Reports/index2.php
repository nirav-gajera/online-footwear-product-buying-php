<?php
include('config.php');
$database = new Database();

$sql="SELECT User_Name , o.Order_ID , Product_Name , Quantity , item.Size , Amount FROM `order` o JOIN orderitem item join product p join user u where item.Product_Id=p.Product_Id and o.Order_ID = item.Order_Id and o.User_Id = u.User_Id ";	
	
if(isset($_GET['uid']))
	{
		$uid=$_GET['uid'];
							
		$sql="SELECT User_Name , o.Order_ID , Product_Name , Quantity , item.Size , Amount FROM `order` o JOIN orderitem item join product p join user u where item.Product_Id=p.Product_Id and o.Order_ID = item.Order_Id and o.User_Id = u.User_Id and u.User_Id = $uid";
	}	
	
$result = $database->runQuery($sql);
$header = $database->runQuery("SELECT UCASE(`COLUMN_NAME`) 
FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='osms' 
AND `TABLE_NAME`='user'
and `COLUMN_NAME` in ('User_Name','Order_ID','Product_Name','Quantity','Size','Amount')");
require('fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage("L","A4");
$pdf->SetFont('Arial','B',12);

// Set header
 $pdf->Image('LOGO4.jpg',7,1,60);
    // Move to the right
    $pdf->Cell(80);			
    // Title
    $pdf->Cell(80,10,'User Wise list',1,0,'C');
    // Line break
    $pdf->Ln(20);

		$pdf->Cell(45,12,"User Name",1);
		$pdf->Cell(45,12,"Order ID",1);
		$pdf->Cell(45,12,"Product Name",1);
		$pdf->Cell(45,12,"Quantity",1);
		$pdf->Cell(45,12,"Size",1);
		$pdf->Cell(45,12,"Amount",1);

foreach($result as $row) {
	$pdf->Ln();
	foreach($row as $column)
		$pdf->Cell(45,12,$column,1);
}
$pdf->Output();

// Set footer
   $pdf->SetY(-15);
    // Arial italic 8
    $pdf->SetFont('Arial','I',8);
    // Page number
    $pdf->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
?>