<?php require_once 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
    <!-- Hero Section-->
    <section class="hero hero-page gray-bg padding-small">
      <div class="container">
        <div class="row d-flex">
          <div class="col-lg-9 order-2 order-lg-1">
            <h1>Your addresses</h1>
          </div>
          <div class="col-lg-3 text-right order-1 order-lg-2">
            <ul class="breadcrumb justify-content-lg-end">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Your addresses</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section class="padding-small">
      <div class="container">
        <div class="row">
          <!-- Customer Sidebar-->
          <div class="customer-sidebar col-xl-3 col-lg-4 mb-md-5">
            <div class="customer-profile"><a href="customer-account.php" class="d-inline-block"><img src="img/nezrin.jpg" class="img-fluid rounded-circle customer-image"></a>
              <h5>Nazrin Abbasova</h5>
              <p class="text-muted text-small">Baku, Azerbaijan</p>
            </div>
            <nav class="list-group customer-nav"><a href="customer-orders.php" class="list-group-item d-flex justify-content-between align-items-center"><span><span class="icon icon-bag"></span>Orders</span><small class="badge badge-pill badge-primary">5</small></a><a href="customer-account.php" class="list-group-item d-flex justify-content-between align-items-center"><span><span class="icon icon-profile"></span>Profile</span></a><a href="customer-addresses.php" class="active list-group-item d-flex justify-content-between align-items-center"><span><span class="icon icon-map"></span>Addresses</span></a><a href="customer-login.php" class="list-group-item d-flex justify-content-between align-items-center"><span><span class="fa fa-sign-out"></span>Log out</span></a>
            </nav>
          </div>
          <div class="col-lg-8 col-xl-9 pl-lg-3">
            <form action="#">
              <!-- Invoice Address-->
              <div class="block-header mb-5">
                <h5>Invoice address                    </h5>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="firstname" class="form-label">First Name</label>
                  <input id="firstname" type="text" name="first-name" placeholder="Enter you first name" class="form-control">
                </div>
                <div class="form-group col-md-6">
                  <label for="lastname" class="form-label">Last Name</label>
                  <input id="lastname" type="text" name="last-name" placeholder="Enter your last name" class="form-control">
                </div>
                <div class="form-group col-md-6">
                  <label for="email" class="form-label">Email Address</label>
                  <input id="email" type="email" name="email" placeholder="enter your email address" class="form-control">
                </div>
                <div class="form-group col-md-6">
                  <label for="street" class="form-label">Street</label>
                  <input id="street" type="text" name="address" placeholder="Your street name" class="form-control">
                </div>
                <div class="form-group col-md-3">
                  <label for="city" class="form-label">City</label>
                  <input id="city" type="text" name="city" placeholder="Your city" class="form-control">
                </div>
                <div class="form-group col-md-3">
                  <label for="zip" class="form-label">ZIP</label>
                  <input id="zip" type="text" name="zip" placeholder="ZIP code" class="form-control">
                </div>
                <div class="form-group col-md-3">
                  <label for="state" class="form-label">State</label>
                  <input id="state" type="text" name="state" placeholder="Your state" class="form-control">
                </div>
                <div class="form-group col-md-3">
                  <label for="country" class="form-label">Country</label>
                  <input id="country" type="text" name="country" placeholder="Your country" class="form-control">
                </div>
                <div class="form-group col-md-6">
                  <label for="phone-number" class="form-label">Phone Number</label>
                  <input id="phone-number" type="tel" name="phone-number" placeholder="Your phone number" class="form-control">
                </div>
                <div class="form-group col-md-6">
                  <label for="company" class="form-label">Company</label>
                  <input id="company" type="text" name="company" placeholder="Your company name" class="form-control">
                </div>
                <div class="form-group col-12 mt-3 ml-3">
                  <input id="another-address" type="checkbox" class="checkbox-template">
                  <label for="another-address" data-toggle="collapse" data-target="#shippingAddress" aria-expanded="false" aria-controls="shippingAddress">Use different shipping address</label>
                </div>
              </div>
              <!-- /Invoice Address-->
              <!-- Shippping Address-->
              <div id="shippingAddress" aria-expanded="false" class="collapse">
                <div class="block-header mb-5 mt-3">
                  <h5>Shipping address</h5>
                </div>
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="shipping_firstname" class="form-label">First Name</label>
                    <input id="shipping_firstname" type="text" name="shipping_first-name" placeholder="Enter you first name" class="form-control">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="shipping_lastname" class="form-label">Last Name</label>
                    <input id="lshipping_astname" type="text" name="shipping_last-name" placeholder="Enter your last name" class="form-control">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="shipping_email" class="form-label">Email Address</label>
                    <input id="shipping_email" type="email" name="shipping_email" placeholder="enter your email address" class="form-control">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="shipping_street" class="form-label">Street</label>
                    <input id="shipping_street" type="text" name="shipping_address" placeholder="Your street name" class="form-control">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="shipping_city" class="form-label">City</label>
                    <input id="shipping_city" type="text" name="shipping_city" placeholder="Your city" class="form-control">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="shipping_zip" class="form-label">ZIP</label>
                    <input id="shipping_zip" type="text" name="shipping_zip" placeholder="ZIP code" class="form-control">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="shipping_state" class="form-label">State</label>
                    <input id="shipping_state" type="text" name="shipping_state" placeholder="Your state" class="form-control">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="shipping_country" class="form-label">Country</label>
                    <input id="shipping_country" type="text" name="shipping_country" placeholder="Your country" class="form-control">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="shipping_phone-number" class="form-label">Phone Number</label>
                    <input id="shipping_phone-number" type="tel" name="shipping_phone-number" placeholder="Your phone number" class="form-control">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="shipping_company" class="form-label">Company</label>
                    <input id="shipping_company" type="text" name="shipping_company" placeholder="Your company name" class="form-control">
                  </div>
                </div>
              </div>
              <!-- /Shipping Address-->
              <div class="row">
                <div class="form-group col-12 mt-3">
                  <button type="submit" class="btn btn-template wide"><i class="fa fa-save"></i>Save changes</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
<?php require_once 'footer.php'; ?>