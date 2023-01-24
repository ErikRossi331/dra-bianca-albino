@extends('templates.master')
@section('title')
{{$post->meta_title}} | Kaique Gonçalves
@endsection
@section('seo')
<meta name="author" content="Kaique Gonçalves">
<meta name="description" content="{{$post->meta_description}}">
<meta name="keywords" content="{{$post->meta_keywords}}">
<meta name="title" content="{{$post->meta_title}}">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="http://devkaique.com.br/blog/{{$post->url}}">
<meta property="og:title" content="{{$post->meta_title}}">
<meta property="og:description" content="{{$post->meta_description}}">
<meta property="og:image" content="http://devkaique.com.br/images/uploads/blog/{{$post->main_image}}">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="http://devkaique.com.br/images/uploads/blog/{{$post->main_image}}">
<meta property="twitter:title" content="{{$post->meta_title}}">
<meta property="twitter:description" content="{{$post->meta_description}}">
{{-- <meta property="twitter:image" content="http://lp.devkaique.com.br/hospedagem/img/logo/dark.png"> --}}

<meta name="robots" content="index, follow">
@endsection
@section('content')
    <!-- ===== Start Blog ===== -->
    <section class="blog" id="blog">
      <div class="container">
          <h2 class="text-center">{{$post->title}}</h2>
          <div class="row">
              <!-- Post-1 -->
              <div class="col-12">
                <div class="box">
                    <div class="image">
                        <img src="{{asset('images/uploads/blog')}}/{{$post->main_image}}" alt="">
                    </div>
                    <div class="text">
                        
                        <p>{!!$post->content!!}</p>
                        <h4>Postado em: {{ Carbon\Carbon::parse($post->created_at)->format('d/m/Y | H:m')}}</h4>
                    </div>
                </div>
            </div>



          </div>
      </div>
  </section>
  <!-- ===== End Blog ===== -->
@endsection