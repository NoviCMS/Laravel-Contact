<?php

/*
 * This file is part of Laravel Contact.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Contact\Controllers;

use DraperStudio\Contact\Requests\ContactRequest;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Routing\Controller as BaseController;

/**
 * Class ContactController.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class ContactController extends BaseController
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function form()
    {
        return view(config('contact.view'));
    }

    /**
     * @param Mailer         $mailer
     * @param ContactRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
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
