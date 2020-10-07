<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PostDelete extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $action;
    public $post;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $action, $post)
    {
        $this -> user = $user;
        $this -> action = $action;
        $this -> post = $post;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this -> from('user@bool.it')
                     -> view('mail.post-delete');
    }
}
