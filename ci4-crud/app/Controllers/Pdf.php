<?php

namespace App\Controllers;

use Dompdf\Dompdf;
use Dompdf\Options;
use CodeIgniter\Controller;

class Pdf extends Controller
{
    public function generatePdf()
    {
        // Load view and fetch data
        $data = [
            'table_data' => $this->fetchTableData(), // Fetch your table data here
        ];

        // Load the HTML view
        $html = view('pdf', $data);

        // Set Dompdf options
        $options = new Options();
        $options->set('defaultFont', 'Arial');
        $options->set('isPhpEnabled', true); // Enable PHP support
     
       
        
        

        // Instantiate Dompdf
        $dompdf = new Dompdf($options);


        
        $dompdf->loadHtml($html);

        $dompdf->set_option('isHtml5ParserEnabled', true);
        $dompdf->set_option('isPhpEnabled', true);
        $dompdf->set_option('isFontSubsettingEnabled', true);


        $dompdf->getCanvas()->page_script('
    if ($PAGE_COUNT > 0 ) {
        $font = $fontMetrics->get_font("Arial, Helvetica, sans-serif", "normal");
        $size = 10;
        $pageText = "Page " . $PAGE_NUM . " of " . $PAGE_COUNT . " || Date: " . date("Y-m-d H:i:s");
        $y = 760;
        $x = 415;
        $pdf->text($x, $y, $pageText, $font, $size);
    }
');
        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to the browser
        $dompdf->stream('table_data.pdf');
    }

    // Example method to fetch table data
    // private function fetchTableData()
    // {
    //     // Your logic to fetch table data goes here
    //     return [
    //         // Sample data, replace with your actual data
    //         ['id' => 1, 'name' => 'John Doe', 'email' => 'john@example.com'],
    //         ['id' => 2, 'name' => 'Jane Smith', 'email' => 'jane@example.com'],
    //         // Add more data as needed
    //     ];
    // }

//using table 

//     private function fetchTableData()
// {
//     // Load the database connection
//     $db = \Config\Database::connect();

//     // Fetch data from the database
//     $query = $db->table('user_table')->get()->getResultArray();

//     return $query;
// }

//using model
private function fetchTableData()
{
    // Load the model
    $session = session();
    $model = new \App\Models\CrudModel();

    // Fetch data using the model method
    $data = $model->findAll(); // Or use any other method to fetch data based on your requirements

    return $data;
}
}
