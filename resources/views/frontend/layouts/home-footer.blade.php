
<footer class="zubuz-footer-section">
    <div class="container">
      <div class="zubuz-footer-top">
        <div class="row">
          <div class="col-xl-4 col-lg-12">
            <div class="zubuz-footer-textarea">
              <a href="{{ route('home') }}">
                <img src="{{ asset('frontend/assets/images/logo/Kadava_logo_black.png') }}" alt="" width="150">
              </a>
              <p>Uncover your competitors' products that are exploding on the web by spying on their best ads.</p>
              <div class="zubuz-social-icon social-box">
                <ul>
                  <li>
                    <a href="https://twitter.com/" target="_blank">
                      <i class="fab fa-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://facebook.com/" target="_blank">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.linkedin.com/" target="_blank">
                      <i class="fab fa-linkedin"></i>
                    </a>
                  </li>

                </ul>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-4">
            <div class="zubuz-footer-menu extar-margin">
              <div class="zubuz-footer-title">
                <p>Navigation</p>
              </div>
              <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('pricing') }}">Pricing</a></li>
                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                <li><a href="{{ route('register') }}">Get Started</a></li>
              </ul>
            </div>
          </div>
          <div class="col-xl-2 col-md-4">
            <div class="zubuz-footer-menu">
              <div class="zubuz-footer-title">
                <p>Product Search</p>
              </div>
              <ul>
                <li><a href="{{ route('user.facebook') }}">Facebook Ads</a></li>
                <li><a href="{{ route('user.tiktok') }}">Tiktok Ads</a></li>
                <li><a href="{{ route('user.pinterest') }}">Pinterest Ads</a></li>
              </ul>
            </div>
          </div>
          <div class="col-xl-3 col-md-4">
            <div class="zubuz-footer-menu extar-margin">
              <div class="zubuz-footer-title">
                <p>Resources</p>
              </div>
              <ul>
                <li><a href="{{ route('privacy') }}">Privacy policy</a></li>
                <li><a href="{{ route('terms-and-conditions') }}">Terms & Conditions</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="zubuz-footer-bottom center">
        <div class="zubuz-copywright">
          <p> &copy;Copyright 2024, All Rights Reserved by Kadava</p>
        </div>
      </div>
    </div>
  </footer>
