<?php

include "carte.php";
require_once ('C:/wamp64/www/projetweb/back/views/pdf/mc_table.php');

$e=0;
$i=0;
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont("Times","I",12);
$pdf->SetTextColor(124,112,103);
$pdf->MultiCell(0,10,"\n\n\n\n Liste des cartes  fidélité: \n\n");
$pdf->SetTextColor(0,0,0);
$pdf->SetFont("Times","",12);
$dbConnection = mysqli_connect('localhost', 'root', '', 'projet');

$query  = "SELECT * FROM carte ";
$result = mysqli_query($dbConnection, $query);

if (mysqli_num_rows($result) > 0) {
  $pdf->Cell(24,10,"email",1,0);
  $pdf->Cell(30,10,"nom",1,0);
  $pdf->Cell(25,10,"prenom",1,0);
  $pdf->Cell(40,10,"pointt",1,0);


    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

        $email = $row['email'];
        $nom = $row['nom'];
        $prenom = $row['prenom'];
        $pointt=$row['pointt'];

        if($e==0)
        {

        $pdf->Cell(24,10,"{$email} ",1,0);
        $pdf->Cell(30,10,"{$nom} ",1,0);
        $pdf->Cell(25,10,"{$prenom} ",1,0);
        $pdf->Cell(40,10,"{$pointt} ",1,0);

        }



    } }


$pdf->SetFont("Courier","B",9);

$pdf->output("carte.pdf","");


header("Content-Type: application/pdf");
header("Content-Disposition: attachment;filename=carte.pdf");
readfile("carte.pdf");
unlink("carte.pdf");
