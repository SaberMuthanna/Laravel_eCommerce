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
            <p class="fs-20 opacity-70">You can find a list of our product in this page. Well deliver your order in less than two days. Try it yourself!</p>
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
            @foreach ($posts as $post)
              <div class="col-12 col-md-6 col-xl-4">
                <a class="shop-item" href="{{route('blog.show',$post->id)}}">
                  <img  src="{{$post->image}}" alt="product">
                    <div class="item-details">
                      <div>
                      <h5>{{$post->title}}</h5>
                      <p>{{$post->description}}</p>
                      </div>
                    <div class="item-price">السعر :<span class="unit">$</span>{{$post->price}}</div>
                    </div>
                </a>
              </div>
              @endforeach
                {{$posts->appends(['search'=>request()->query('search')])->links()}}
          </div>
        </div>
      </section>
    </main>
  @endsection
  <!--End  Main Content -->
@endsection
