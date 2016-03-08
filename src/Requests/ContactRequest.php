<?php

/*
 * This file is part of Laravel Contact.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Contact\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class ContactRequest.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class ContactRequest extends FormRequest
{
    /**
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * @return mixed
     */
    public function rules()
    {
        return config('contact.rules');
    }
}
