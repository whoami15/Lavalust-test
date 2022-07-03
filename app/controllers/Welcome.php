<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Welcome extends Controller {
	public function index() {
        $this->call->library('pdf');
        $filename = "Test_PDF";
        $data['name'] = 'Juan Sipag';
        // var_dump($data);
        $output = '<table width="100%" cellspacing="5" cellpadding="5">';
            $output .= '
            <tr>
                <td width="75%">
                    <p><b>Name : </b>Test</p>
                    <p><b>Address : </b>Address</p>
                    <p><b>City : </b>Test</p>
                    <p><b>Postal Code : </b>000000</p>
                    <p><b>Country : </b> USA </p>
                </td>
            </tr>
            ';
        $output .= '</table>';
        // $html = $this->call->view('test_pdf', $data, TRUE);
        $this->pdf->create($output, $filename);
	}
}
?>
