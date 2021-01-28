<?php
if($_POST){
    require('fpdf/fpdf.php');
    //$name = $_POST['usname'];
    //$dob = $_POST['dob'];
    //$job = $_POST['job'];
    $title = 'Social Protection Certificate       g';

    $group_name=$_POST['group_name'];
    $Sublocation=$_POST['Sublocation'];
    $location=$_POST['location'];
    $division=$_POST['division'];
    $subcounty=$_POST['subcounty'];
    $constituency=$_POST['constituency'];
    $county=$_POST['county'];




    /*$group_name='Group Names';
    $Sublocation='Sublocation';
    $location='Location';
    $division='Division';
    $subcounty='Sub County';
    $constituency='Constituency';
    $county='County';*/



    $pdf = new FPDF();
    $pdf -> AddPage('L');
    $pdf->SetTitle($title);
    // Arial bold 15
    $pdf->SetFont('Arial','B',18);
    // Calculate width of title and position
    $w = $pdf->GetStringWidth($title)+6;
    //$w ='50';
    $pdf->SetX((210-$w)/3);
    // Colors of frame, background and text
    $pdf->SetDrawColor(221,221,221,1);
    $pdf->SetFillColor(10,158,0,1);
    $pdf->SetTextColor(255,255,255,1);
    // Thickness of frame (1 mm)
    $pdf->SetLineWidth(1);
    // Title
    // Cell(width, height, content, border, nextline parametters, alignement[c - center], fill)
    //$pdf->Cell($w, 9, $title, 1, 1, 'C', true);
    // Line break
    $pdf->Ln(10);

    $pdf->SetTextColor(0,0,0,1);
    //$w = $pdf->GetStringWidth($job)+6;
    $pdf->SetX((170-$w)/3);
    //$pdf->Cell(50, 20, 'Name:', 1, 0, 'C');
    $pdf->Cell(250, 40, '', 1, 1, 'C');
    
    $pdf->SetX((170-$w)/3);
    //$pdf->Cell(50, 20, 'Name:', 1, 0, 'C');
    $pdf->Cell(250, 25, $group_name, 1, 1, 'C');
    
    // 3 collumns
    $pdf->SetX((170-$w)/3);
    $pdf->Cell(85, 25, $Sublocation, 1, 0, 'C');
    $pdf->Cell(83, 25, $location, 1, 0, 'C');
    $pdf->Cell(82, 25, $division, 1, 1, 'C');


    // 3 collumns
    $pdf->SetX((170-$w)/3);
    $pdf->Cell(85, 25, $subcounty, 1, 0, 'C');
    $pdf->Cell(83, 25, $constituency, 1, 0, 'C');
    $pdf->Cell(82, 25, $county, 1, 1, 'C');

    $pdf->SetX((170-$w)/2);
    $pdf->Cell(100, 30, 'Field:', 1, 0, 'L');
    $pdf->Cell(100, 30, 'Field:', 1, 1, 'R');
    $pdf->Output();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Social Protection Certificate</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="main-block">
        <div class="header">
            Generate Certificate
        </div>
        <div class="body">
            <form action='' method="POST">
                <input type="text" name="group_name" placeholder="Group Name" required>
                <input type="text" name="Sublocation" placeholder="Sub location" required>
                <input type="text" name="location" placeholder="Location" required>
                <input type="text" name="division" placeholder="Division" required>
                <input type="text" name="subcounty" placeholder="Sub County" required>
                <input type="text" name="constituency" placeholder="Constituency" required>
                <input type="text" name="county" placeholder="County" required>
                <input type="submit" value="Print Certificate">
            </form>
        </div>
        <div class="footer">
            <p>Developed by <a href="https://briananikayi.io.ke" target="_blank">Brian Anikayi</a></p>
        </div>
    </div>
</body>
</html>