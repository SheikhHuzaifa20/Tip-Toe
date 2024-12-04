      <!-- FOOTER START-->
      <section class="footer">
          <footer class="MainFooter">
              <div class="container-fluid">
              <div class="row pre-footer">
                  <div class="col-lg-4 col-md-4" data-aos="fade-right" data-aos-duration="1500">
                      <div class="footer-link">
                          <a href="index.php" class="LOgoFooter"><img src="{{ url('assets/image/logomain.png') }}"
                                  alt=""></a>
                                  <!--  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> -->
                          <ul class="footer-social">
                              <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                              <li><a href="#" class="youtube"><i class="fab fa-youtube"></i></a></li>
                              <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                              <li><a href="#" class="linkedin"><i class="fab fa-linkedin"></i></a></li>
                              <li><a href="#" class="instagram"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4" data-aos="fade-up" data-aos-duration="1500">
                      <div class="footer-link">
                          <h6>Get in Touch With Us</h6>
                          <ul class="footer-info">
                              <li>
                                  <a href="#">
                                      <img src="{{ url('assets/image/location.png') }}" class="img-fluid overall">
                                      <span>PO Box address PO Box 111, Clearwater, SC 29822</span>
                                    </a>
                                </li>
                              <li>
                                  <a href="#">
                                      <img src="{{ url('assets/image/phone.png') }}" class="img-fluid overall">
                                      <span>803-474-4145</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ url('assets/image/message.png') }}" class="img-fluid overall">
                                        <span>support@domian.com</span>
                                    </a>
                                </li>
                            </ul>
                      </div>
                    </div>
                  <div class="col-lg-4 col-md-4" data-aos="fade-left" data-aos-duration="1500">
                      <div class="footer-link">
                          <div class="map">
                              <a href="#"><img src="{{ url('assets/image/map.png') }}" class="img-fluid"></a>
                          </div>
                        </div>
                    </div>
              </div>
          </div>
          <div class="container-fluid copyright">
              <div class="row">
                  <div class="offset-lg-4 col-lg-4 text-center">
                      <p>Tiptoe Boutique © 2021 All Rights Reserved</p>
                  </div>
                  <div class="col-lg-4">
                      <div class="FooterPrivacy text-center">
                          <a href="#">Privacy Policy</a>
                          <a href="#">| Terms & Conditions</a>
                          <a href="#">| Refund Policy</a>
                      </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- FOOTER END -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
      </script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
          integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
      </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
      integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
      crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.1.1/gsap.min.js"></script>
      <script src="{{url("assets/js/butter.js")}}"></script>
      <script src="{{url("assets/js/script.js")}}"></script>
      <script>
          butter.init({
              cancelOnTouch: true
            });
            </script>
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
      <script>
          AOS.init({
              startEvent: 'DOMContentLoaded',
              mirror: false,
            });
            </script>
</body>
</html>
</section>


<div class="offcanvas offcanvas-end right-modal-side cart-side-modal" tabindex="-1" id="offcanvasRight"
    aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 id="offcanvasRightLabel">SHOPPING CART</h5>
        <button type="button" class="text-reset" data-bs-dismiss="offcanvas" aria-label="Close">
            <span class="btn-close"></span> Close
        </button>
    </div>
    <div class="offcanvas-body">
        <div class="main-mid-canvas">
            <div class="modal-body" style="color: ;">
                @php
                    $cart = Session::get('cart', []);
                    $total = 0;
                @endphp

                @if (!empty($cart))
                    @foreach ($cart as $key => $item)
                        @php
                            $productId = $item['id'] ?? null;
                            $product = $productId ? App\Models\Product::find($productId) : null;
                        @endphp

                        <div class="row cart-items">
                            <div class="col-md-12 delete-cart">
                                <a href="{{route('remove_cart', $item['id'])}}" class="remove">
                                    <i class="fas fa-times">
                                    </i>
                                </a>
                            </div>
                            <div class="col-md-6 image">
                                <img height="100px" src="{{ asset($item['image']) }}"
                                    alt="">
                            </div>
                            <div class="col-md-6 text">
                                <h3>{{ $item['product_title'] ?? "" }}</h3>
                                <div class="product" data-product-id="{{ $productId }}">
                                    <p class="days">
                                        $<span class="cart-price">{{ $item['price'] * $item['quantity'] }}</span>
                                    </p>

                                    <p class="days">
                                        Quantity:
                                        <input type="number" value="{{ $item['quantity'] }}" name="quantity"
                                            class="input_qty form-control"
                                            style="width: 41% !important; margin-top: 10px;" min="1"
                                            data-product-price="{{ $item['price'] }}">
                                    </p>
                                </div>
                            </div>
                        </div>
                        @php
                            $total += $item['price'] * $item['quantity'];
                        @endphp
                    @endforeach
                    <p>Total: $<span id="total-price">{{ $total }}</span></p>
                @else
                    <div class="col-lg-12">
                        <div class="gallery-img">
                            <div class="col-lg-12">
                                <div class="madal-logo">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </div>
                            </div>
                            <h5>NO PRODUCTS IN THE CART</h5>
                        </div>
                    </div>
                @endif
                @if (!empty($cart))
                <button type="button" class="btn btn-success" id="checkout"
                    onclick="window.location.href = '{{ route('checkout') }}'">Checkout</button>
            @else
                <button type="button" class="btn btn-success" id="checkout"
                    onclick="window.location.href = '{{ route('checkout') }}'" disabled>Checkout</button>
            @endif
            </div>
        </div>
    </div>
</div>


