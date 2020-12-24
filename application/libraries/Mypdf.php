<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mypdf
{
    protected $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
    }

    public function generate($view, $data = array(), $filename = 'print_qrcode', $paper = 'A4', $orientation = 'potrait')
    {
        $dompdf = new Dompdf\Dompdf();

        $html = $this->ci->load->view($view, $data, true);
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper($paper, $orientation);

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream($filename . ".pdf", array('Attachment' => 0));
    }
}
