<?php

namespace DraperStudio\Contact\Controllers;

use DraperStudio\Contact\Requests\ContactRequest;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Routing\Controller as BaseController;

class ContactController extends BaseController
{
    public function form()
    {
        return view(config('contact.view'));
    }

    public function send(Mailer $mailer, ContactRequest $request)
    {
        $mailer->send(config('contact.mail.views'), $request->all(), function ($message) {
            $message->to(
                config('contact.mail.to.email'),
                config('contact.mail.to.name')
            );

            $message->subject(config('contact.mail.subject'));
        });

        return redirect($request->get('from'))->with('contact_form_message', trans('contact::form.sent_message'));
    }
}
