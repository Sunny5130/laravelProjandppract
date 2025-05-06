<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendReportMail;

class MailController extends Controller
{
    public function send()
    {
        $toEmail = 'saini55275527@example.com';
        $subject = 'Custom Named Report';
        $body = 'Please find the custom-named report attached.';
        $filePath = storage_path('app/public/images/blVgWMVTAQw82PDfKUa0em2Aq494CWWcRngANfwl.pdf');
        $fileName = 'Report-April-2025.pdf';

        if (file_exists($filePath)) {
            Mail::to($toEmail)->send(new SendReportMail($subject, $body, $filePath, $fileName));
            return 'Email sent successfully!';
        } else {
            return 'File not found at: ' . $filePath;
        }
    }
}
?>