<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Notifications\NewContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site.contact.index');
    }

    public function form(Request $request)
    {
        //salvando no banco de dados 
        $contact = Contact::create($request->all());


        //passando uma collection para o envio de email
        Notification::route('mail', config('mail.from.address'))->notify(new NewContact($contact));

        // Notification::route('mail', 'taylor@example.com')
        //     ->route('nexmo', '5555555555')
        //     ->route('slack', 'https://hooks.slack.com/services/...')
        //     ->notify(new InvoicePaid($invoice));

        ddd($contact);
    }
}