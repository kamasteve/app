<?php
include ('database_connection.php');
if (isset($_POST['submit'])) {
$property=$_POST['property'];
$period=$_POST['period'];
$mode=$_POST['mode'];
$fname=$_POST['fname'];      
$lname=$_POST['lname'];
$hnumber=$_POST['hnumber'];
$idnumber=$_POST['idnumber'];
$adress = $_POST['adress'];
$email = $_POST['email'];
$phone=$_POST['phone'];
$ammount = $_POST['ammount'];
$today = date("Y-m-d H:i:s");


$query_insert_user = "INSERT INTO rent_payments(property,rental_period,payment_mode,first_name,last_name,house_number,id_number,adress,email,phone,ammount,date )VALUES('$property','$period','$mode','$fname','$lname','$hnumber','$idnumber','$adress','$email','$phone', '$ammount','$today')";


            $result_insert_user = mysqli_query($dbc, $query_insert_user);
            if (!$result_insert_user) {
             echo "Error: " . $query_insert_user . "<br>" . mysqli_error($dbc);
			}
			else{
			require('u/fpdf.php');

class PDF extends FPDF
{
function Header()
{
if(!empty($_FILES["file"]))
  {
$uploaddir = "logo/";
$nm = $_FILES["file"]["name"];
$random = rand(1,99);
move_uploaded_file($_FILES["file"]["tmp_name"], $uploaddir.$random.$nm);
$this->Image($uploaddir.$random.$nm,10,10,20);
unlink($uploaddir.$random.$nm);
}
$this->SetFont('Arial','B',12);
$this->Ln(1);
}
function Footer()
{
$this->SetY(-15);
$this->SetFont('Arial','I',8);
$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
function ChapterTitle($num, $label)
{
$this->SetFont('Arial','',12);
$this->SetFillColor(200,220,255);
$this->Cell(0,6,"$num $label",0,1,'L',true);
$this->Ln(0);
}
function ChapterTitle2($num, $label)
{
$this->SetFont('Arial','',12);
$this->SetFillColor(249,249,249);
$this->Cell(0,6,"$num $label",0,1,'L',true);
$this->Ln(0);
}
}

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$pdf->SetTextColor(32);
$pdf->Cell(0,5,'techisoft solutions',0,1,'R');
$pdf->Cell(0,5,$adress,0,1,'R');
$pdf->Cell(0,5,$email,0,1,'R');
$pdf->Cell(0,5,'Tel: '.$phone,0,1,'R');
$pdf->Cell(0,30,'',0,1,'R');
$pdf->SetFillColor(200,220,255);
$pdf->ChapterTitle('Invoice Number ',$idnumber);
$pdf->ChapterTitle('Invoice Date ',date('d-m-Y'));
$pdf->Cell(0,20,'',0,1,'R');
$pdf->SetFillColor(224,235,255);
$pdf->SetDrawColor(192,192,192);
$pdf->Cell(170,7,'Item',1,0,'L');
$pdf->Cell(20,7,'Price',1,1,'C');
$pdf->Cell(170,7,'rent',1,0,'L',0);
$pdf->Cell(20,7,$ammount,1,1,'C',0);
$pdf->Cell(0,0,'',0,1,'R');
$pdf->Cell(170,7,'VAT',1,0,'R',0);
$pdf->Cell(20,7,$fname,1,1,'C',0);
$pdf->Cell(170,7,'Total',1,0,'R',0);
$pdf->Cell(20,7,$lname." $",1,0,'C',0);
$pdf->Cell(0,20,'',0,1,'R');
$pdf->Cell(0,5,'pay',0,1,'L');
$pdf->Cell(0,5,$mode,0,1,'L');
$pdf->Cell(0,5,'for fun',0,1,'L');
$pdf->Cell(0,20,'',0,1,'R');
$pdf->Cell(0,5,'PayPal:',0,1,'L');
$pdf->Cell(0,5,$property,0,1,'L');
$pdf->Cell(190,40,$hnumber,0,0,'C');
$extension= '.pdf';
$filename= $period.$id.$extension;
$pdf->Output($filename,'F');
if(file_exists ($filename)) {
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="'.basename($filename).'"');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($filename));
readfile($filename);
exit;
}
header("Location: payments.php");
}
			}


			
			
			
		
			
			
			
?>

