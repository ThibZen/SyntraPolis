@extends('layouts.default')

@section('content')
    <h1> Want to contact us? </h1>
    <div class="contact">
        <div class="contactleft">
            <article>
                <p>
                    We value customer satisfaction very highly here at SyntraPolis. Day and night we strive to give you, our beloved customer, the best possible viewing experience. If you have any suggestions on what we could improve or you have any questions feel free to use the form located below to relay them to us and we will do our best to respond to you as soon as possible.
                </p>
                <p>
                    Have a more pressing matter you need to discuss? You'll find our phone number along with our email adress on this page aswell. We hope to hear from you soon!
                </p>
            </article>
            <div class="contactform">
                @include('includes.contactform')
            </div>
        </div>
        <div class="contactright">
            @include('includes.maps')
            @include('includes.contactinfo')
        </div>
    </div>
@endsection
