@extends('main')
@section('content')
<section class="InnerBanners">
    <div class="diamondstag">
        <img src="{{url("assets/image/diamonds1.png")}}" class="img-fluid" alt="">
    </div>
   <div class="wrapper">
      <div class="row align-items-center">
         <div class="col-md-12">
            <div class="InnerBannerText">
               <h1>Contact Us</h1>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- INNER BANNER END-->
<!-- CONTACT PAGE HTML START -->
<section class="ContactPage">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-md-7">
            <div class="contactHeading" data-aos="fade-up" data-aos-duration="2500">
               <h3>PLEASE fill-up FEW details</h3>
            </div>
            <form class=" text" method="POST" action="{{ route('contact-us') }}" >
                @csrf
               <div class="row">
                  <div class="col-md-6">
                     <div class="contactform" data-aos="fade-down" data-aos-duration="2500">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" required>
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="contactform" data-aos="fade-up" data-aos-duration="2500">
                        <label>Address</label>
                        <input type="text" name="address" class="form-control" required>
                        <label>phone</label>
                        <input type="number" name="phone" class="form-control" required>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="contactform" data-aos="fade-down" data-aos-duration="2500">
                        <label>Comments</label>
                        <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="5"></textarea>
                          <button class="btn btnCustom">SEND MAIL</button>
                     </div>
                  </div>
               </div>
            </form>
         </div>
         <div class="col-md-5">
            <div class="addressMain" data-aos="fade-up" data-aos-duration="2500">
                <div class="addressMainContent">
                    <h4>OUR ADDRESS</h4>
                    <ul>
                        <li><a href="#"><i class="fas fa-map-marker-alt"></i> Street No. 12, Newyork 12, MD - 123, USA.</a></li>
                        <li><a href="#"><i class="fas fa-phone-alt"></i> 1.800.123.456789</a></li>
                        <li><a href="#"><i class="far fa-envelope"></i> info@domain.com</a></li>
                    </ul>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam erat turpis, pellentesque non leo eget, pulvinar pretium arcu. Mauris porta elit non.
                    </p>
                </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section>
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193560.36157007064!2d-74.08131159102486!3d40.70963619179355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2s!4v1640810306304!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</section>
<!-- CONTACT PAGE HTML END -->

@endsection
