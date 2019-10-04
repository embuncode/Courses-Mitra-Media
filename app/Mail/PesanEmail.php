<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PesanEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('hi.wasissubekti02@gmail.com')
                   ->view('admin/pesan-email')
                   ->with(
                    [
                        'nama' => 'Sigit wasis subekti',
                        'website' => 'embuncode.com',
                    ]);
    }
}
