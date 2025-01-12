<div class="zubuz-breadcrumb">
    <div class="container">
      <h1 class="post__title">Our Pricing Plan</h1>
      <nav class="breadcrumbs">
        <ul>
          <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
          <li aria-current="page"> Our Pricing Plan</li>
        </ul>
      </nav>

    </div>
  </div>
  <!-- End breadcrumb -->

  <div class="section zubuz-section-padding3">
    <div class="container">
      <!-- <div class="zubuz-section-title center">
        <h2>Pricing Plan</h2>
      </div> -->
      <div class="pricing-btn">
        <div class="toggle-btn">
          <label>Monthly </label>
          <input class="form-check-input btn-toggle price-deck-trigger" type="checkbox" id="flexSwitchCheckDefault" data-pricing-trigger data-target="#table-price-value" checked>
          <label>Annually</label>
        </div>
      </div>
      <div class="row zubuz-pricing-four-column" id="table-price-value" data-pricing-dynamic data-value-active="monthly">
        <div class="col-xl-4 col-md-6">
          <div class="zubuz-pricing-wrap">
            <div class="zubuz-pricing-header">
              <h5>Free</h5>
            </div>
            <div class="zubuz-pricing-price">
              <h2>₦</h2>
              <div class="zubuz-price dynamic-value" data-active="0" data-monthly="0" data-yearly="0"></div>
              <p class="dynamic-value" data-active="/Monthly" data-monthly="/monthly" data-yearly="/Yearly"></p>
            </div>
            <div class="zubuz-pricing-description">
              <p>This plan is typically limited in features and usage</p>
            </div>
            <div class="zubuz-pricing-body">
              <p>Free plan includes:</p>
              <ul>
                <li><img src="<?php echo e(asset('frontend/assets/images/v3/check.png')); ?>" alt="">Basic features</li>
                <li><img src="<?php echo e(asset('frontend/assets/images/v3/check.png')); ?>" alt="">Limited users & usage</li>
                <li><img src="<?php echo e(asset('frontend/assets/images/v3/check.png')); ?>" alt="">No customer support</li>
                <li><img src="<?php echo e(asset('frontend/assets/images/v3/check.png')); ?>" alt="">30 day chat history</li>
                <li><img src="<?php echo e(asset('frontend/assets/images/v3/check.png')); ?>" alt="">10 Integrations</li>
              </ul>
            </div>
            <a class="zubuz-pricing-btn" href="">Try it for free</a>
          </div>
        </div>
        <div class="col-xl-4 col-md-6">
          <div class="zubuz-pricing-wrap active">
            <div class="zubuz-pricing-header">
              <h5>Standard</h5>
            </div>
            <div class="zubuz-pricing-price">
              <h2>₦</h2>
              <div class="zubuz-price dynamic-value" data-active="29000" data-monthly="29000" data-yearly="59000"></div>
              <p class="dynamic-value" data-active="/Monthly" data-monthly="/monthly" data-yearly="/Yearly"></p>
            </div>
            <div class="zubuz-pricing-description">
              <p>This plan is geared toward growing businesses</p>
            </div>
            <div class="zubuz-pricing-body">
              <p>Standard plan includes:</p>
              <ul>
                <li><img src="<?php echo e(asset('frontend/assets/images/v3/check.png')); ?>" alt="">Expanded features</li>
                <li><img src="<?php echo e(asset('frontend/assets/images/v3/check.png')); ?>" alt="">Increased users</li>
                <li><img src="<?php echo e(asset('frontend/assets/images/v3/check.png')); ?>" alt="">Priority email support</li>
                <li><img src="<?php echo e(asset('frontend/assets/images/v3/check.png')); ?>" alt="">Unlimited chat history</li>
                <li><img src="<?php echo e(asset('frontend/assets/images/v3/check.png')); ?>" alt="">30 Integrations</li>
              </ul>
            </div>
            <a class="zubuz-pricing-btn active" href="">Try it for free</a>
          </div>
        </div>
        <div class="col-xl-4 col-md-6">
          <div class="zubuz-pricing-wrap">
            <div class="zubuz-pricing-header">
              <h5>Basic</h5>
            </div>
            <div class="zubuz-pricing-price">
              <h2>₦</h2>
              <div class="zubuz-price dynamic-value" data-active="19000" data-monthly="19000" data-yearly="39000"></div>
              <p class="dynamic-value" data-active="/Monthly" data-monthly="/monthly" data-yearly="/Yearly"></p>
            </div>
            <div class="zubuz-pricing-description">
              <p>A simple and affordable plan only for small businesses</p>
            </div>
            <div class="zubuz-pricing-body">
              <p>Basic plan includes:</p>
              <ul>
                <li><img src="<?php echo e(asset('frontend/assets/images/v3/check.png')); ?>" alt="">Core features</li>
                <li><img src="<?php echo e(asset('frontend/assets/images/v3/check.png')); ?>" alt="">Increased limits</li>
                <li><img src="<?php echo e(asset('frontend/assets/images/v3/check.png')); ?>" alt="">Priority support</li>
                <li><img src="<?php echo e(asset('frontend/assets/images/v3/check.png')); ?>" alt="">Unlimited chat history</li>
                <li><img src="<?php echo e(asset('frontend/assets/images/v3/check.png')); ?>" alt="">20 Integrations</li>
              </ul>
            </div>
            <a class="zubuz-pricing-btn" href="">Try it for free</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Section -->

  <div class="zubuz-divider"></div>
<?php /**PATH C:\laragon\www\Kadava app\resources\views/frontend/layouts/pricing-contents.blade.php ENDPATH**/ ?>