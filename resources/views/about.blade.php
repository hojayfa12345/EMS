@extends('welcome')

@section('content')
    <!-- /.wrapper -->
    <div class="wrapper light-wrapper">
      <div class="container inner">
        <div class="row align-items-center">
          <div class="col-lg-6 order-lg-2 text-center">
            <div class="img-blob blob4"><img src="{{ asset('frontend/style/images/art/about2.jpg')}}" style="width: 30rem" alt="" /></div>
          </div>
          <!--/column -->
          <div class="space30 d-none d-md-block d-lg-none"></div>
          <div class="col-lg-6 pr-60 pr-md-15">
            <h2 class="section-title">About Us</h2>
            <p>Cras mattis consectetur purus sit amet fermentum. Etiam porta sem malesuada magna mollis euismod. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras justo odio, dapibus ac facilisis in.</p>
            <div class="space20"></div>
            <ul class="progress-list">
              <li>
                <p>Marketing</p>
                <div class="progressbar line blue" data-value="100"></div>
              </li>
              <li>
                <p>Strategy</p>
                <div class="progressbar line green" data-value="80"></div>
              </li>
              <li>
                <p>Develepment</p>
                <div class="progressbar line pink" data-value="85"></div>
              </li>
              <li>
                <p>Data Analysis</p>
                <div class="progressbar line purple" data-value="90"></div>
              </li>
            </ul>
            <!-- /.progress-list -->
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.wrapper -->
    <div class="wrapper image-wrapper bg-image inverse-text" data-image-src="{{ asset('frontend/style/images/art/bg10.jpg')}}">
      <div class="container inner pt-140 pb-170 text-center">
        <div class="light-gallery-wrapper"><a href="https://www.youtube.com/watch?v=26TbMXXOe0I" class="btn-play lightbox"></a></div>
        <div class="space20"></div>
        <h3 class="display-2 mb-0">Find out everything you need to know <br class="d-none d-lg-block" />about creating a business process model.</h3>
      </div>
      <!-- /.container -->
    </div>
    <!-- /.wrapper -->
    <div class="wrapper gray-wrapper">
      <div class="container inner">
        <div class="carousel owl-carousel clients mb-0" data-margin="30" data-loop="true" data-dots="false" data-autoplay="true" data-autoplay-timeout="3000" data-responsive='{"0":{"items": "3"}, "768":{"items": "4"}, "992":{"items": "5"}, "1140":{"items": "6"}}'>
          <div class="item pl-15 pr-15"><img src="{{ asset('frontend/style/images/art/z1.svg')}}" alt="" /></div>
          <div class="item pl-15 pr-15"><img src="{{ asset('frontend/style/images/art/z2.svg')}}" alt="" /></div>
          <div class="item pl-15 pr-15"><img src="{{ asset('frontend/style/images/art/z3.svg')}}" alt="" /></div>
          <div class="item pl-15 pr-15"><img src="{{ asset('frontend/style/images/art/z4.svg')}}" alt="" /></div>
          <div class="item pl-15 pr-15"><img src="{{ asset('frontend/style/images/art/z5.svg')}}" alt="" /></div>
          <div class="item pl-15 pr-15"><img src="{{ asset('frontend/style/images/art/z6.svg')}}" alt="" /></div>
          <div class="item pl-15 pr-15"><img src="{{ asset('frontend/style/images/art/z7.svg')}}" alt="" /></div>
          <div class="item pl-15 pr-15"><img src="{{ asset('frontend/style/images/art/z8.svg')}}" alt="" /></div>
        </div>
        <!-- /.owl-carousel -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.wrapper -->
    <div class="wrapper light-wrapper">
      <div class="container inner">
        <h2 class="section-title text-center">Meet the Team</h2>
        <p class="lead larger text-center">Save your time and money by choosing our professional team.</p>
        <div class="grid-view">
          <div class="carousel owl-carousel gap-small text-center" data-margin="0" data-dots="true" data-autoplay="false" data-autoplay-timeout="5000" data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "1024":{"items": "3"}, "1440":{"items": "4"}}'>
            <div class="item">
              <div class="item-inner">
                <div class="box bg-white shadow">
                  <div class="img-blob blob1 mb-20"><img src="{{ asset('frontend/style/images/art/te1.jpg')}}" style="width: 7rem" alt="" /></div>
                  <h5 class="mb-15">Connor Gibson</h5>
                  <div class="meta mb-10">Financial Analyst</div>
                  <p class="mb-10">Pellentesque ornare sem lacinia quam venenatis.</p>
                  <ul class="social social-s ml-auto mb-10">
                    <li><a href="#"><i class="jam jam-twitter"></i></a></li>
                    <li><a href="#"><i class="jam jam-facebook"></i></a></li>
                    <li><a href="#"><i class="jam jam-instagram"></i></a></li>
                  </ul>
                </div>
                <!--/.box -->
              </div>
              <!--/.item-inner -->
            </div>
            <!--/.item -->
            <div class="item">
              <div class="item-inner">
                <div class="box bg-white shadow">
                  <div class="img-blob blob1 mb-20"><img src="{{ asset('frontend/style/images/art/te2.jpg')}}" style="width: 7rem" alt="" /></div>
                  <h5 class="mb-15">Coriss Ambady</h5>
                  <div class="meta mb-10">Marketing Specialist</div>
                  <p class="mb-10">Pellentesque ornare sem lacinia quam venenatis.</p>
                  <ul class="social social-s ml-auto mb-10">
                    <li><a href="#"><i class="jam jam-twitter"></i></a></li>
                    <li><a href="#"><i class="jam jam-facebook"></i></a></li>
                    <li><a href="#"><i class="jam jam-instagram"></i></a></li>
                  </ul>
                </div>
                <!--/.box -->
              </div>
              <!--/.item-inner -->
            </div>
            <!--/.item -->
            <div class="item">
              <div class="item-inner">
                <div class="box bg-white shadow">
                  <div class="img-blob blob1 mb-20"><img src="{{ asset('frontend/style/images/art/te3.jpg')}}" style="width: 7rem" alt="" /></div>
                  <h5 class="mb-15">Barclay Widerski</h5>
                  <div class="meta mb-10">Sales Manager</div>
                  <p class="mb-10">Pellentesque ornare sem lacinia quam venenatis.</p>
                  <ul class="social social-s ml-auto mb-10">
                    <li><a href="#"><i class="jam jam-twitter"></i></a></li>
                    <li><a href="#"><i class="jam jam-facebook"></i></a></li>
                    <li><a href="#"><i class="jam jam-instagram"></i></a></li>
                  </ul>
                </div>
                <!--/.box -->
              </div>
              <!--/.item-inner -->
            </div>
            <!--/.item -->
            <div class="item">
              <div class="item-inner">
                <div class="box bg-white shadow">
                  <div class="img-blob blob1 mb-20"><img src="{{ asset('frontend/style/images/art/te4.jpg')}}" style="width: 7rem" alt="" /></div>
                  <h5 class="mb-15">Nicolas Brooten</h5>
                  <div class="meta mb-10">Investment Planner</div>
                  <p class="mb-10">Pellentesque ornare sem lacinia quam venenatis.</p>
                  <ul class="social social-s ml-auto mb-10">
                    <li><a href="#"><i class="jam jam-twitter"></i></a></li>
                    <li><a href="#"><i class="jam jam-facebook"></i></a></li>
                    <li><a href="#"><i class="jam jam-instagram"></i></a></li>
                  </ul>
                </div>
                <!--/.box -->
              </div>
              <!--/.item-inner -->
            </div>
            <!--/.item -->
            <div class="item">
              <div class="item-inner">
                <div class="box bg-white shadow">
                  <div class="img-blob blob1 mb-20"><img src="{{ asset('frontend/style/images/art/te5.jpg')}}" style="width: 7rem" alt="" /></div>
                  <h5 class="mb-15">Jackie Sanders</h5>
                  <div class="meta mb-10">Sales Specialist</div>
                  <p class="mb-10">Pellentesque ornare sem lacinia quam venenatis.</p>
                  <ul class="social social-s ml-auto mb-10">
                    <li><a href="#"><i class="jam jam-twitter"></i></a></li>
                    <li><a href="#"><i class="jam jam-facebook"></i></a></li>
                    <li><a href="#"><i class="jam jam-instagram"></i></a></li>
                  </ul>
                </div>
                <!--/.box -->
              </div>
              <!--/.item-inner -->
            </div>
            <!--/.item -->
            <div class="item">
              <div class="item-inner">
                <div class="box bg-white shadow">
                  <div class="img-blob blob1 mb-20"><img src="{{ asset('frontend/style/images/art/te6.jpg')}}" style="width: 7rem" alt="" /></div>
                  <h5 class="mb-15">Tina Geller</h5>
                  <div class="meta mb-10">Financial Analyst</div>
                  <p class="mb-10">Pellentesque ornare sem lacinia quam venenatis.</p>
                  <ul class="social social-s ml-auto mb-10">
                    <li><a href="#"><i class="jam jam-twitter"></i></a></li>
                    <li><a href="#"><i class="jam jam-facebook"></i></a></li>
                    <li><a href="#"><i class="jam jam-instagram"></i></a></li>
                  </ul>
                </div>
                <!--/.box -->
              </div>
              <!--/.item-inner -->
            </div>
            <!--/.item -->
          </div>
          <!-- /.owl-carousel -->
        </div>
        <!-- /.grid-view -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.wrapper -->
    <div class="wrapper image-wrapper bg-auto no-overlay bg-image text-center" data-image-src="{{ asset('frontend/style/images/art/map.png')}}">
      <div class="container inner">
        <div class="row">
          <div class="col-lg-10 offset-lg-1">
            <h3 class="display-3">Convinced yet? Let's make something great together. <br class="d-none d-lg-block" />If you got any questions, don't hesitate to get in touch with us.</h3>
            <div class="space50"></div>
            <div class="row text-center gutter-60">
              <div class="col-md-4">
                <div class="icon icon-svg mb-20"><img src="{{ asset('frontend/style/images/icons/ui-gps.png')}}" alt="" /></div>
                <p class="mb-0">Moon Street Light Avenue<br> 14/05 Jupiter, JP 80630</p>
              </div>
              <!--/column -->
              <div class="col-md-4">
                <div class="icon icon-svg mb-20"><img src="{{ asset('frontend/style/images/icons/co-telephone.png')}}" alt="" /></div>
                <p class="mb-0">00 (123) 456 78 90<br> 00 (987) 654 32 10 </p>
              </div>
              <!--/column -->
              <div class="col-md-4">
                <div class="icon icon-svg mb-20"><img src="{{ asset('frontend/style/images/icons/co-email-5.png')}}" alt="" /></div>
                <p class="mb-0"><a class="nocolor" href="mailto:#">manager@email.com</a><br>
                  <a class="nocolor" href="mailto:#">asistant@email.com</a></p>
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.wrapper -->
@endsection