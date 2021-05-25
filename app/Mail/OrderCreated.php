<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderCreated extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;

    /**
     * OrderCreated constructor.
     * @param $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.order-created', [
            'clientName'           => $this->data['name'],
            'clientAddress'        => $this->data['address'],
            'deliveryMethod'       => $this->data['delivery-method'],
            'clientCardName'       => $this->data['cc-name'],
            'clientCardNumber'     => $this->data['cc-number'],
            'clientCardExpiration' => $this->data['cc-expiration'],
        ]);
    }
}
