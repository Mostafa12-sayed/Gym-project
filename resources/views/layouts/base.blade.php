

@section('footer')

<footer>
    <!--        LOGO          -->
    <div class="logoCol">
        <img src="{{URL::asset('./images/logo.png')}}" alt="Dumbbell">
    </div>
    <!--        SOCIAL MEDIA           -->
    <div class="followCol">
        <h2>Follow us</h2>
        <a href="#"><img src="./images/Social/facebook.png" alt="Facebook"></a>
        <a href="#"><img src="./images/Social/instagram.png" alt="Instagram"></a>
        <a href="#"><img src="./images/Social/whatsapp.png" alt="Whatsapp"></a>
        <a href="#"><img src="./images/Social/twitter.png" alt="twitter"></a>
    </div>
    <!--        ABOUT US           -->
    <div class="aboutCol">
        <h2>About us</h2>
        <p>Phone Number: <span>01063985385</span> </p>
        <p>Contact us:<span>ehom@hotmail.com</span></p>
    </div>
</footer>
@endsection
