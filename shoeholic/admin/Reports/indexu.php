<?php
include('config.php');
$database = new Database();

$sql="SELECT u.User_name , p.P_name , p.P_Size , p.P_Price , item.Quantity , item.Amount FROM `order details` item join `order` o join user u join product p where item.Order_id = o.Order_id and o.User_id = u.User_id and item.P_id = p.P_id ";	
	
if(isset($_GET['uid']))
	{
		$uid=$_GET['uid'];
							
		$sql="SELECT u.User_name , p.P_name , p.P_Size , p.P_Price , item.Quantity , item.Amount FROM `order details` item join `order` o join user u join product p where item.Order_id = o.Order_id and o.User_id = u.User_id and item.P_id = p.P_id";
	}	
	
$result = $database->runQuery($sql);
$header = $database->runQuery("SELECT UCASE(`COLUMN_NAME`) 
FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='shoe_holic' 
AND `TABLE_NAME`='user'
and `COLUMN_NAME` in ('User_name','P_name','P_Size','P_Price','Quantity','Amount')");
require('fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage("L","A4");
$pdf->SetFont('Arial','B',12);

// Set header
 $pdf->Image('shoeholic.jpg',7,7 ,60);
    // Move to the right
    $pdf->Cell(80);			
    // Title
    $pdf->Cell(80,10,'User Wise list',1,0,'C');
    // Line break
    $pdf->Ln(20);

		$pdf->Cell(45,12,"User Name",1);
				//$pdf->Cell(45,12,"Order ID",1);
		$pdf->Cell(45,12,"Product Name",1);
		$pdf->Cell(45,12,"Product Size",1);
		$pdf->Cell(45,12,"Product Price",1);
		$pdf->Cell(45,12,"Quantity",1);
		$pdf->Cell(45,12,"Total Amount",1);

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