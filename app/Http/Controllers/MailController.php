<?php

namespace App\Http\Controllers;

use App\Models\lain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function basic_email()
    {
        $data = array('name' => $_GET['name'], 'sendMessage' => $_GET['message']);

        Mail::send(['text' => 'mail'], $data, function ($message) {
            $message->to($_GET['email'], $_GET['name'])->subject($_GET['subject']);
            $message->from('ruchikon.mueanphet@gmail.com', 'ruchikon');
        });
        $email = $_GET['email'];
        echo "<script type='text/javascript'>alert('Send to $email successfully.');</script>";
    }
}
