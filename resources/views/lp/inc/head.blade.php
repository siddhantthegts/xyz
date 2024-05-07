<meta name="title" content="{{ $title ?? config('app.name') }}" />
<meta name="description" content="{{ $description ?? config('app.name') }}" />
{{-- <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" /> --}}
<meta name="robots" content="noindex" />
<meta name="keywords" content="{{ $keywords ?? config('app.name') }}">
<link rel="canonical" href="{{ $canonical ?? Request::url() }}" />

<meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
<meta name="author" content="{{ config('app.name') }}">
<meta name="dc.description" content="{{ $description ?? config('app.name') }}" />
<meta name="dc.language" content="en_US" />
<meta property="og:site_name" content="{{ config('app.name') }}" />
<meta property="og:locale" content="en_US" />
<meta property="og:url" content="{{ $canonical ?? Request::url() }}" />
<meta property="og:type" content="article" />
<meta property="og:title" content="{{ $title ?? config('app.name') }}" />
<meta property="og:description" content="{{ $description ?? config('app.name') }}" />
<meta property="og:image" content="{{ $image ?? config('app.url').'/assets/img/logo/logo.png'}}" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="627" />
<meta property="og:image:alt" content="{{ config('app.name') }} logo" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="{{ $title ?? '' }}" />
<meta name="twitter:image" content="{{ $image ?? config('app.url').'/assets/img/logo/logo.png'}}">
<meta name="twitter:description" content="{{ $description ?? config('app.name') }}" />

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-YPL0J3WPG0"></script>
<script>
    window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-YPL0J3WPG0');
</script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-16462150229">
</script>
<script>
    window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-16462150229');
</script>

<script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "l2v6qpxnqv");
</script>
