<?php

namespace App\Http\Controllers;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendWelcomeEmail()
    {
        $recipientEmail = 'kuldeep.kushwaha333@gmail.com'; // Change to the recipient's email address
        $messageContent = "Thank you for joining us! We're excited to have you on board.";
        $subject="Mail testing";

        Mail::to($recipientEmail)->send(new WelcomeEmail($messageContent, $subject));

        return "Email sent successfully!";
    }
}