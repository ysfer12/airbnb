<?php
// App/Services/ContractService.php
namespace App\Services;

use TCPDF;

class ContractService
{
    public function generateContract($booking)
    {
        // Create new PDF document
        $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

        // Set document information
        $pdf->SetCreator('Your Company');
        $pdf->SetAuthor('Your Company');
        $pdf->SetTitle('Booking Contract #' . $booking['id']);

        // Remove default header/footer
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

        // Add a page
        $pdf->AddPage();

        // Set font
        $pdf->SetFont('helvetica', '', 12);

        // Add content
        $html = $this->getContractTemplate($booking);
        $pdf->writeHTML($html, true, false, true, false, '');

        // Add signature blocks
        $pdf->Ln(10);
        $pdf->Cell(0, 10, 'Guest Signature: _____________________', 0, 1);
        $pdf->Cell(0, 10, 'Date: _____________________', 0, 1);

        return $pdf->Output('contract.pdf', 'S');
    }

    private function getContractTemplate($booking)
    {
        $formattedStartDate = date('F j, Y', strtotime($booking['start_date']));
        $formattedEndDate = date('F j, Y', strtotime($booking['end_date']));

        return "
            <h1>RENTAL AGREEMENT</h1>
            <p>This agreement is made on " . date('F j, Y') . "</p>
            
            <h2>1. PROPERTY DETAILS</h2>
            <p>Beautiful apartment in the heart of the city</p>
            
            <h2>2. BOOKING DETAILS</h2>
            <p><strong>Booking Reference:</strong> #{$booking['id']}</p>
            <p><strong>Check-in Date:</strong> {$formattedStartDate}</p>
            <p><strong>Check-out Date:</strong> {$formattedEndDate}</p>
            <p><strong>Number of Guests:</strong> {$booking['guest_count']}</p>
            <p><strong>Total Amount:</strong> €{$booking['total_price']}</p>
            
            <h2>3. HOUSE RULES</h2>
            <ul>
                <li>Check-in time is after 3:00 PM</li>
                <li>Check-out time is before 11:00 AM</li>
                <li>No smoking inside the property</li>
                <li>No parties or events</li>
                <li>Pets are not allowed</li>
            </ul>
            
            <h2>4. PAYMENT TERMS</h2>
            <p>Full payment is required to confirm the booking.</p>
            
            <h2>5. CANCELLATION POLICY</h2>
            <p>Free cancellation up to 48 hours before check-in. 
               After that, the first night is non-refundable.</p>
            
            <h2>6. GUEST RESPONSIBILITIES</h2>
            <p>The guest agrees to:</p>
            <ul>
                <li>Use the property for residential purposes only</li>
                <li>Maintain the property in good condition</li>
                <li>Report any damages immediately</li>
                <li>Not disturb neighbors</li>
            </ul>
            
            <h2>7. LIABILITY</h2>
            <p>The guest is responsible for any damage to the property during their stay.</p>
        ";
    }
}