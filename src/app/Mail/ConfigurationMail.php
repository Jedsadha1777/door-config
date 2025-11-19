<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ConfigurationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $product;
    public $config;
    public $session;

    public function __construct($product, $config, $session)
    {
        $this->product = $product;
        $this->config = $config;
        $this->session = $session;
    }

    public function build()
    {
        return $this->subject('Door Configuration - ' . $this->product->name)
                    ->view('emails.configuration');
    }
}