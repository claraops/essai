<?php
require('fpdf186/fpdf.php');

class PDF extends FPDF
{
    // En-tête
    function Header()
    {
        // Logo
       // $this->Image('logo.png',10,6,30);
        // Titre
        $this->SetFont('Arial','B',15);
        $this->Cell(0,10,'Facture',0,1,'C');
        $this->Ln(5);
    }

    // Pied de page
    function Footer()
    {
        // Positionnement à 1,5 cm du bas
        $this->SetY(-15);
        // Police Arial italique 8
        $this->SetFont('Arial','I',8);
        // Numéro de page
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
}

// Instanciation de la classe dérivée
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);

// Coordonnées de l'entreprise et du client
$pdf->Cell(100,10,'Entreprise XYZ',0,0);
$pdf->Cell(0,10,'Client: John Doe',0,1);
$pdf->Cell(100,10,'Adresse de l\'entreprise',0,0);
$pdf->Cell(0,10,'Adresse du client',0,1);
$pdf->Cell(100,10,'Ville, Pays',0,0);
$pdf->Cell(0,10,'Ville, Pays',0,1);
$pdf->Cell(100,10,'Telephone: 123456789',0,0);
$pdf->Cell(0,10,'',0,1);
$pdf->Cell(100,10,'Email: info@example.com',0,0);
$pdf->Cell(0,10,'',0,1);
$pdf->Ln(10);

// Tableau des produits
$pdf->SetFont('Arial','B',12);
$pdf->SetFillColor(230,230,230); // Couleur de fond
$pdf->Cell(40,10,'Produit',1,0,'C',true);
$pdf->Cell(30,10,'Quantite',1,0,'C',true);
$pdf->Cell(40,10,'Prix Unitaire',1,0,'C',true);
$pdf->Cell(40,10,'Total',1,1,'C',true);

$pdf->SetFont('Arial','',12);
// Contenu du tableau
for($i=1;$i<=10;$i++) {
    $pdf->Cell(40,10,'Produit '.$i,1,0,'C');
    $pdf->Cell(30,10,'1',1,0,'C');
    $pdf->Cell(40,10,'$10.00',1,0,'C');
    $pdf->Cell(40,10,'$10.00',1,1,'C');
}

// Total
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,10,'Total: $100.00',10,100,'R');

// Afficher le PDF
$pdf->Output();
?>
