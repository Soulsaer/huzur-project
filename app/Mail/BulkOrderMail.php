<?php

namespace App\Mail; // Use backslash instead of forward slash

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\BulkOrder;

class BulkOrderMail extends Mailable
{
    use Queueable, SerializesModels;

    public $bulkOrder;

    public function __construct(BulkOrder $bulkOrder)
    {
        $this->bulkOrder = $bulkOrder;
    }

    public function build()
    {
        return $this->view('emails.bulk-order')
            ->subject('New Bulk Order Submitted');
    }
}
