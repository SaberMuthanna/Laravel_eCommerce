@extends('layouts.blog')

@section('title')
    saber Blog
@endsection

@section('header')
    <!-- Header -->
    <header class="header header-inverse bg-fixed" style="background-image: url(img/bg-gift.jpg)" data-overlay="8">
      <div class="container text-center">
        <div class="row">
          <div class="col-12 col-lg-8 offset-lg-2">
            <h1>The Store</h1>
            <p class="fs-20 opacity-70">You can find a list of our product in this page. We'll deliver your order in less than two days. Try it yourself!</p>
          </div>
        </div>
      </div>
    </header>
    <!-- END Header -->
  @section('content')
    <main class="main-content">
      <!--Product list!-->
      <section class="section">
        <div class="container">
          <div class="row gap-y">
            <div class="col-12 col-md-6 col-xl-4">
              <a class="shop-item" href="shop-single.html">
                <div class="item-details">
                  <div>
                    <h5>Apple Watch 2</h5>
                    <p>Superior Sports Watch</p>
                  </div>
                  <div class="item-price"><span class="unit">$</span>399</div>
                </div>
              <img src=" {{asset('img/product-1.png')}}" alt="product">
              </a>
            </div>
 


            <div class="col-12 col-md-6 col-xl-4">
              <a class="shop-item" href="shop-single.html">
                <div class="item-details">
                  <div>
                    <h5>Mac Book Pro</h5>
                    <p>A touch of genius</p>
                  </div>

                  <div class="item-price"><span class="unit">$</span>2,799</div>
                </div>
              <img src="{{asset('img/product-7.png')}}" alt="product">
              </a>
            </div>


            <div class="col-12 col-md-6 col-xl-4">
              <a class="shop-item" href="shop-single.html">
                <div class="item-details">
                  <div>
                    <h5>Nokia 220</h5>
                    <p>Dual SIM mobile</p>
                  </div>

                  <div class="item-price">  148</div>
                </div>
              <img src="{{asset('img/product-8.png')}}" alt="product">
              </a>
            </div>


            <div class="col-12 col-md-6 col-xl-4">
              <a class="shop-item" href="shop-single.html">
                <div class="item-details">
                  <div>
                    <h5>iPhone 7 Plus</h5>
                    <p>Now with all-new Portrait mode</p>
                  </div>

                  <div class="item-price"><span class="unit">$</span>769</div>
                </div>
              <img src="{{asset('img/product-9.png')}}" alt="product">
              </a>
            </div>
          </div>

        </div>
      </section>
    </main>
  @endsection
  <!--End  Main Content -->
@endsection
