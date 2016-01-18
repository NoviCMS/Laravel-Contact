Hello {{ config('contact.mail.to.name') }}

We've received a new enquiry through the website, here are the details:

@foreach (config('contact.fields') as $fieldName => $options)
    {{ trans('contact::form.labels.'.$fieldName) }}    {{ $$fieldName }}
@endforeach
