<meta name="robots" content="index, follow" />
<meta name="googlebot" content="all" />
<meta name="title" content="@yield('meta_title')" />
<meta name="description" content="@yield('meta_description')" />
<meta name="keywords" content="@yield('meta_keywords')" />
{{-- Tags das postagens --}}
<meta property="fb:app_id" content="384173955821849"/>
@if (trim($__env->yieldContent('meta_author')))
<meta name="author" content="@yield('meta_author')" />
@endif
@if (trim($__env->yieldContent('og_title')))
<meta property="og:title" content="@yield('og_title')">
@endif
@if (trim($__env->yieldContent('og_type')))
<meta property="og:type" content="@yield('og_type')">
@endif
@if (trim($__env->yieldContent('og_description')))
<meta property="og:description" content="@yield('og_description')">
@endif
@if (trim($__env->yieldContent('og_url')))
<meta property="og:url" content="@yield('og_url')">
@endif
@if (trim($__env->yieldContent('og_site_name')))
<meta property="og:site_name" content="@yield('og_site_name')">
@endif
@if (trim($__env->yieldContent('og_image')))
<meta property="og:image" content="@yield('og_image')">
<meta property="og:image:type" content="image/png">
<meta property="og:image:width" content="640">
@endif
