<?php

namespace App\Mail;

use App\Models\Event;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class VerificationEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
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

        // Ambil data dari public json
        $path = Storage::disk('local')->get('public/landing_page_config.json');
        $dataJson = json_decode($path,true);


        $e = UserDetail::where('id',$this->data['id'])->first();
        $event = Event::where('id',$e->id_events)->first();
        // $users = User::where('id',$e->id_users)->first();
        return $this->from('nac@pnb.ac.id', 'Panitia National Account Competition PNB')->markdown('email.verification-email')->with([
            'group_url' => $event['group_url'],
            'url_twibon' => $dataJson['url_twibon'],
            'name' => $e->users['name'],
            'email' => $e->users['email'],
            'event' => $event['event_name'],
            'year' => $event['year'],
            'aliases' => $event['aliases']
        ]);;
    }
}
