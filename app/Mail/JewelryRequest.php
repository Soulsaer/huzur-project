<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class JewelryRequest extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $mobile;
    public $description;

    public function __construct($name, $email, $mobile, $description)
    {
        $this->name = $name;
        $this->email = $email;
        $this->mobile = $mobile;
        $this->description = $description;
    }

    public function build()
    {
        return $this->view('emails.jewelry-request')
            ->subject('Customized Jewellery Request');
    }
}
