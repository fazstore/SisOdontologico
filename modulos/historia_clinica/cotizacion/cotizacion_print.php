<?php include_once('../../../start.php');
$idf=$_GET['idf'];
    // GET HTML
	ob_start();
    include('cotizacion_formato.php');
    $content = ob_get_clean();
    // convert in PDF
    try{
        $html2pdf = new HTML2PDF('P', 'A4', 'fr');
        $html2pdf->writeHTML($content);
        $html2pdf->Output('Factura-'.$idf.'.pdf');
    }catch(HTML2PDF_exception $e) { echo $e; exit; }
	ob_end_flush();
?>