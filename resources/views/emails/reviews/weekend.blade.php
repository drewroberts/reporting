@component('mail::message')
    # Google Reviews This Weekend

    Below are the number of Google Reviews each of our locations received over the weekend.

    @component('mail::table')
        | Location | Reviews |
        | -- | :--: |
        @foreach ($locations as $location)
            | {{ $location->name }} | {{ $location->reviews_count }} |
        @endforeach
    @endcomponent

    To view your reviews and respond to them, visit Google My Business:

    @component('mail::button', ['url' => 'https://business.google.com/reviews'])
        Google My Business
    @endcomponent

    Let me know if you have any questions.

    Thank you,

    -Drew
@endcomponent
