@yield('extra-js')
<div class="footer">
    <p> Sign up for our newsletter </p>
    <form method="POST">
        <input type="text" placeholder="john.doe@example.com">
        <input type="submit" value="Sign up">
    </form>
    <div class="policies">
        <a href="https://www.freeprivacypolicy.com/privacy/view/bc234eae80e861d12d2e7cd13c2c2832" target="_blank"> Privacy Policy </a>
        <a href="https://www.cookiepolicygenerator.com/live.php?token=OB3HoLTzKx34Sx7CbiGIFkzZELDXzZxt"> Cookie Disclaimer </a>
    </div>
    <div class="socialmedia">
        <a href="https://www.instagram.com">
            <i class="fab fa-instagram"></i>
        </a>
        <a href="http://www.twitter.com">
            <i class="fab fa-twitter-square"></i>
        </a>
        <a href="www.facebook.com">
            <i class="fab fa-facebook-square"></i>
        </a>
    </div>
</div>
<script src= " {{ URL::asset('/js/functions.js')}} "></script>