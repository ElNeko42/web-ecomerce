<?
//print_r($_POST);
$fecha=date('d-m-Y');
$long=count($_POST);
$importe=0;
for($i=0;$i<$long/4;$i++){
	$productos[$i]=$_POST["NS$i"];
	$precios[$i]=$_POST["CS$i"];
	$cantidades[$i]=$_POST["PS$i"];
	$importe=$importe+$precios[$i]*$cantidades[$i];
}
require('fpdf.php');
$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',14);
$pdf->Ln();
//Los numeros son x, y, ancho de la imagen y si no se le mete alto mantiene la proporción
//$pdf->SetFillColor(10,178,212);
//$pdf->SetLineWidth(2);
//60,10: da el tamaño en mm de la celda
//'Num. Factura' : es literatura o podemos poner una variable
//el cuarto campo si es 0 es que no hay borde, 1 sí borde
//el quinto campo si es 1 hace un salto de línea
//el sexto campo es la alineación 'C' es centrado, 'R' derecha...
//el séptimo campo si está como true rellena la celda
$pdf->Ln();
$pdf->Cell(80,10,'Fecha:',0,0,'L',false);
$pdf->Cell(10,10,$fecha,0,0,'R',false);
//dos saltos de línea
$pdf->Ln();
$pdf->Ln();
$pdf->SetFillColor(252, 161, 2);
$pdf->Cell(80,10,'PRODUCTO',1,0,'C',true);
$pdf->SetFillColor(252, 161, 2);
$pdf->Cell(40,10,'CANTIDAD',1,0,'C',true);
$pdf->SetFillColor(252, 161, 2);
$pdf->Cell(40,10,'IMPORTE',1,1,'C',true);
for($i=0;$i<count($productos);$i++){
	if($i%2==0){
		$pdf->SetFillColor(255, 226, 171);
	}
	else{
		$pdf->SetFillColor(251, 199, 107);
	}
	//Para que ponga bien los acentos -> utf8_decode($servicios)
	$pdf->Cell(80,10,utf8_decode($productos[$i]),1,0,'C',true);
	$pdf->Cell(40,10,$cantidades[$i],1,0,'C',true);
	$pdf->Cell(40,10,$precios[$i],1,1,'C',true);
}
$pdf->Ln();
$pdf->SetFillColor(252, 161, 2);
$pdf->Cell(40,10,'BASE',1,0,'C',true);
$pdf->SetFillColor(252, 161, 2);
$pdf->Cell(40,10,'IVA',1,0,'C',true);
$pdf->SetFillColor(252, 161, 2);
$pdf->Cell(40,10,'TOTAL',1,1,'C',true);
$pdf->Cell(40,10,$importe,1,0,'C');
$pdf->Cell(40,10,$importe*0.21,1,0,'C');
$pdf->Cell(40,10,$importe*(1.21),1,1,'C');
$pdf->Output();
?>
