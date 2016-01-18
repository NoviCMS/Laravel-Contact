<html>
    <body>
        <p>Hello {{ config('contact.mail.to.name') }}</p>
        <p>We've received a new enquiry through the website, here are the details:</p>

        @foreach (config('contact.fields') as $fieldName => $options)
            <p><strong>{{ trans('contact::form.labels.'.$fieldName) }}</strong> {{ nl2br($$fieldName) }}</p>
        @endforeach
    </body>
</html>
