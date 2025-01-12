<div class="zubuz-breadcrumb">
    <div class="container">
      <h1 class="post__title">Our Pricing Plan</h1>
      <nav class="breadcrumbs">
        <ul>
          <li><a href="{{ route('home') }}">Home</a></li>
          <li aria-current="page"> Our Pricing Plan</li>
        </ul>
      </nav>

    </div>
  </div>
  <!-- End breadcrumb -->

  <div class="section zubuz-section-padding3">
  <div class="container">
    <div class="pricing-btn">
      <div class="toggle-btn">
        <label>Monthly </label>
        <input class="form-check-input btn-toggle price-deck-trigger" type="checkbox" id="flexSwitchCheckDefault" data-pricing-trigger data-target="#table-price-value" checked>
        <label>Annually</label>
      </div>
    </div>
    <div class="row zubuz-pricing-four-column" id="table-price-value" data-pricing-dynamic data-value-active="monthly">
      <!-- Starter Plan -->
      <div class="col-xl-4 col-md-6">
        <div class="zubuz-pricing-wrap">
          <div class="zubuz-pricing-header">
            <h5>Starter</h5>
          </div>
          <div class="zubuz-pricing-price">
            <h2>₦<span class="zubuz-price dynamic-price" data-monthly="3200" data-yearly="32000">3200</span></h2>
            <p class="dynamic-cycle" data-monthly="/Monthly" data-yearly="/Yearly">/Monthly</p>
          </div>
          <div class="zubuz-pricing-description">
            <!-- <p>This plan is typically limited in features and usage</p> -->
          </div>
          <div class="zubuz-pricing-body">
          <ul>
              <li><img src="{{ asset('frontend/assets/images/v2/check2.png') }}" alt="">Facebook & Instagram & Pinterest & YouTube & TikTok & Google</li>
              <li><img src="{{ asset('frontend/assets/images/v2/check2.png') }}" alt="">Queries: 50 Daily</li>
              <li><img src="{{ asset('frontend/assets/images/v2/check2.png') }}" alt="">Max 200 Ads per query</li>
              <li><img src="{{ asset('frontend/assets/images/v2/check2.png') }}" alt="">Video Ads Download: Up to 100</li>
              <li><img src="{{ asset('frontend/assets/images/v2/check2.png') }}" alt="">Basic Filters</li>
              <li><img src="{{ asset('frontend/assets/images/v2/check2.png') }}" alt="">Advanced Filter</li>
              <li><img src="{{ asset('frontend/assets/images/v2/check2.png') }}" alt="">24/7 Email Support</li>
            </ul>
          </div>
          <form action="{{ route('pay') }}" method="POST">
            @csrf
            <input type="hidden" name="email" value="{{ auth()->check() ? auth()->user()->email : '' }}">
            <input type="hidden" name="plan" value="starter-monthly">
            <button type="submit" class="zubuz-pricing-btn">Choose Plan</button>
          </form>
        </div>
      </div>

      <!-- Pro Plan -->
      <div class="col-xl-4 col-md-6">
        <div class="zubuz-pricing-wrap active">
          <div class="zubuz-pricing-header">
            <h5>Pro</h5>
          </div>
          <div class="zubuz-pricing-price">
            <h2>₦<span class="zubuz-price dynamic-price" data-monthly="6400" data-yearly="57600">6400</span></h2>
            <p class="dynamic-cycle" data-monthly="/Monthly" data-yearly="/Yearly">/Monthly</p>
          </div>
          <div class="zubuz-pricing-description">
            <!-- <p>This plan is geared toward growing businesses</p> -->
          </div>
          <div class="zubuz-pricing-body">
          <ul>
              <li><img src="{{ asset('frontend/assets/images/v2/check2.png') }}" alt="">Facebook & Instagram & Pinterest & YouTube & TikTok & Google</li>
              <li><img src="{{ asset('frontend/assets/images/v2/check2.png') }}" alt="">Queries: Unlimited</li>
              <li><img src="{{ asset('frontend/assets/images/v2/check2.png') }}" alt="">Max 1000 Ads per query</li>
              <li><img src="{{ asset('frontend/assets/images/v2/check2.png') }}" alt="">Download Ads: Unlimited</li>
              <li><img src="{{ asset('frontend/assets/images/v2/check2.png') }}" alt="">Basic Filters</li>
              <li><img src="{{ asset('frontend/assets/images/v2/check2.png') }}" alt="">Advanced Filter</li>
              <li><img src="{{ asset('frontend/assets/images/v2/check2.png') }}" alt="">24/7 Email Support</li>
              <li><img src="{{ asset('frontend/assets/images/v2/check2.png') }}" alt="">Advertiser & Shop Insights</li>
            </ul>
          </div>
          <form action="{{ route('pay') }}" method="POST">
            @csrf
            <input type="hidden" name="email" value="{{ auth()->check() ? auth()->user()->email : '' }}">
            <input type="hidden" name="plan" value="pro-monthly">
            <button type="submit" class="zubuz-pricing-btn active">Choose Plan</button>
          </form>
        </div>
      </div>

      <!-- VIP Plan -->
      <div class="col-xl-4 col-md-6">
        <div class="zubuz-pricing-wrap">
          <div class="zubuz-pricing-header">
            <h5>VIP</h5>
          </div>
          <div class="zubuz-pricing-price">
            <h2>₦<span class="zubuz-price dynamic-price" data-monthly="19200" data-yearly="158400">19200</span></h2>
            <p class="dynamic-cycle" data-monthly="/Monthly" data-yearly="/Yearly">/Monthly</p>
          </div>
          <div class="zubuz-pricing-description">
            <!-- <p>A simple and affordable plan only for small businesses</p> -->
          </div>
          <div class="zubuz-pricing-body">
          <ul>
              <li><img src="{{ asset('frontend/assets/images/v2/check2.png') }}" alt="">All Pro Feautures</li>
              <li><img src="{{ asset('frontend/assets/images/v2/check2.png') }}" alt="">TOP 10 Daily Winners</li>
              <li><img src="{{ asset('frontend/assets/images/v2/check2.png') }}" alt="">Chrome Extension : coming soon</li>
              <li><img src="{{ asset('frontend/assets/images/v2/check2.png') }}" alt="">Details of ads and placements</li>
              <li><img src="{{ asset('frontend/assets/images/v2/check2.png') }}" alt="">Personalized Bookmark</li>
            </ul>
          </div>
          <form action="{{ route('pay') }}" method="POST">
            @csrf
            <input type="hidden" name="email" value="{{ auth()->check() ? auth()->user()->email : '' }}">
            <input type="hidden" name="plan" value="vip-monthly">
            <button type="submit" class="zubuz-pricing-btn">Choose Plan</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

  <!-- End Section -->

  <div class="zubuz-divider"></div>


<script>
  document.getElementById('flexSwitchCheckDefault').addEventListener('change', function() {
    const duration = this.checked ? 'monthly' : 'yearly';
    document.querySelectorAll('input[name="plan"]').forEach(input => {
      const basePlan = input.value.split('-')[0];
      input.value = `${basePlan}-${duration}`;
    });
    document.querySelectorAll('.dynamic-price').forEach(el => {
      const value = el.getAttribute(`data-${duration}`);
      el.textContent = value;
    });
    document.querySelectorAll('.dynamic-cycle').forEach(el => {
      const value = el.getAttribute(`data-${duration}`);
      el.textContent = value;
    });
  });
</script>




