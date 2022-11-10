<?php
require("../student/fpdf/fpdf.php");
include("../studentconnection/connection.php");

$email=$_POST['email'];

$res=mysqli_query($conn,"select * from application where status='3' && email='$email'");

    
class PDF extends FPDF
{
	// Page header
	function Header()
	{
		// GFG logo image
		$this->Image('../image/ksrtc.png', 30, 8, 20);
		
		// GFG logo image
		$this->Image('../image/ksrtc.png', 160, 8, 20);
		
		// Set font-family and font-size
		$this->SetFont('Times','B',20);
		
		// Move to the right
		$this->Cell(80);
		
		// Set the title of pages.
		$this->Cell(30, 20, 'K S R T C Concession', 0, 2, 'C');
		
		// Break line with given space
		$this->Ln(5);
	}
	
	// Page footer
	function Footer()
	{
		// Position at 1.5 cm from bottom
		$this->SetY(-15);
		
		// Set font-family and font-size of footer.
		$this->SetFont('Arial', 'I', 8);
		
		// set page number
		$this->Cell(0, 10, 'Page ' . $this->PageNo() .
			'/{nb}', 0, 0, 'C');
	}
}

// Create new object.
$pdf = new PDF();
$pdf->AliasNbPages();

// Add new pages
$pdf->AddPage();

// Set font-family and font-size.
$pdf->SetFont('Times','',12);

// Loop to display line number content


if($res)
{
while($rs=mysqli_fetch_array($res))
{

    $pdf->Cell(80, 10, 'Student Name : ' .$rs["name"]);
    $pdf->Ln(10);
	$pdf->Cell(80, 10, 'Institute Name : ' . $rs["institutename"]);
    $pdf->Ln(10);
    $pdf->Cell(80, 10, 'Where to Where : ' . $rs["wheretowhere"]);
    $pdf->Ln(10);
    $pdf->Cell(80, 10, 'January : '  );
    $pdf->Ln(10);
    $pdf->Cell(80, 10, 'February : '  );
    $pdf->Ln(10);
    $pdf->Cell(80, 10, 'March : '  );
    $pdf->Ln(10);
    $pdf->Cell(80, 10, 'April : '  );
    $pdf->Ln(10);
    $pdf->Cell(80, 10, 'May : '  );
    $pdf->Ln(10);
    $pdf->Cell(80, 10, 'June : '  );
    $pdf->Ln(10);
    $pdf->Cell(80, 10, 'July : '  );
    $pdf->Ln(10);
    $pdf->Cell(80, 10, 'August : '  );
    $pdf->Ln(10);
    $pdf->Cell(80, 10, 'September : '  );
    $pdf->Ln(10);
    $pdf->Cell(80, 10, 'October : '  );
    $pdf->Ln(10);
    $pdf->Cell(80, 10, 'November : '  );
    $pdf->Ln(10);
    $pdf->Cell(80, 10, 'December : '  );
    $pdf->Ln(10);
    
}
}
else{
    $pdf->Cell(80, 10, 'Your Card is not approved');
}

$pdf->Output();


?>
