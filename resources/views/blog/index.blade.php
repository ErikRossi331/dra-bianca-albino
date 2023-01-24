@extends('templates.master')
@section('title')
Kaique Gonçalves | Desenvolvedor Web especializado em PHP
@endsection
@section('seo')
<!-- Primary Meta Tags -->
<meta name="description"
    content="Sou parte da revolução tecnológica da sua empresa, modernizar o seu negócio baseado na sua necessidade ideal é a minha especialidade.">
<meta name="keywords"
    content="desenvolvimento,web,agencia,ti,sites,blogs,lojas,virtuais,marketplace,ecommerce,hospedagem,de,sites,design de telas, ui, ux, designer">
<meta name="robots" content="index, follow">
<meta name="author" content="Kaique Gonçalves">
<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://devkaique.com">
<meta property="og:title" content="Kaique Gonçalves | Desenvolvedor Web especializado em PHP">
<meta property="og:description"
    content="Sou parte da revolução tecnológica da sua empresa, modernizar o seu negócio baseado na sua necessidade ideal é a minha especialidade.">
{{-- <meta property="og:image" content=""> --}}

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://devkaique.com">
<meta property="twitter:title" content="Kaique Gonçalves | Desenvolvedor Web especializado em PHP">
<meta property="twitter:description"
    content="Sou parte da revolução tecnológica da sua empresa, modernizar o seu negócio baseado na sua necessidade ideal é a minha especialidade.">
{{-- <meta property="twitter:image" content=""> --}}
@endsection
@section('content')
 <!-- ===== Start Blog ===== -->
 <section class="blog" id="blog">
    <div class="container">
        <h2 class="text-center">Aqui você encontra um pouquinho sobre o mundo da programação!</h2>
        <div class="row">
            <!-- Post-1 -->
            @foreach($posts as $post)
            <div class="co-md-6 col-lg-4">
                <div class="box">
                    <div class="image">
                        <img src="{{asset('images/uploads/blog')}}/{{$post->main_image}}" alt="">
                        <a href="" class="cate"></a>
                    </div>
                    <div class="text">
                        <h3><a href="{{url('blog/')}}/{{$post->url}}"> {{$post->title}}</a></h3>
                        <h4>Postado em: {{ Carbon\Carbon::parse($post->created_at)->format('d/m/Y | H:m')}}</h4>
                        <p>{{$post->description}}</p>
                    </div>
                </div>
            </div>
            @endforeach

            {{ $posts->links() }}

        </div>
    </div>
</section>
<!-- ===== End Blog ===== -->