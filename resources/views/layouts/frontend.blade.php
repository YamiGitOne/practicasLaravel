<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link href="{{asset('css/bootstrap.min.css')}}"  rel="stylesheet">  
    <!-- CSS only -->
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" >  --}}
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png" />
    <link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9" />
    <link rel="icon" href="{{asset('images/naranja.png')}}" />
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900&amp;display=swap" rel="stylesheet" />
    <link href="{{asset('css/blog.css')}} " rel="stylesheet" />
    <title>Curso Laravel</title>
    <style>
        .bd-placeholder-img {
          font-size: 1.125rem;
          text-anchor: middle;
          -webkit-user-select: none;
          -moz-user-select: none;
          user-select: none;
        }
  
        @media (min-width: 768px) {
          .bd-placeholder-img-lg {
            font-size: 3.5rem;
          }
        }
  
        .b-example-divider {
          height: 3rem;
          background-color: rgba(0, 0, 0, .1);
          border: solid rgba(0, 0, 0, .15);
          border-width: 1px 0;
          box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }
  
        .b-example-vr {
          flex-shrink: 0;
          width: 1.5rem;
          height: 100vh;
        }
  
        .bi {
          vertical-align: -.125em;
          fill: currentColor;
        }
  
        .nav-scroller {
          position: relative;
          z-index: 2;
          height: 2.75rem;
          overflow-y: hidden;
        }
  
        .nav-scroller .nav {
          display: flex;
          flex-wrap: nowrap;
          padding-bottom: 1rem;
          margin-top: -1px;
          overflow-x: auto;
          text-align: center;
          white-space: nowrap;
          -webkit-overflow-scrolling: touch;
        }
      </style>
</head>
<body>
    <div class="container">
        <header class="blog-header lh-1 py-3">
          <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
              <a class="link-secondary" href="#">Subscribe</a>
            </div>
            <div class="col-4 text-center">
              <a class="blog-header-logo text-dark" href="{{route('template_inicio')}}">
                <img class="siteLogo" src="{{asset('images/naranja.png')}}" />
              </a>
              
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
              <a class="link-secondary" href="#" aria-label="Search">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"></circle><path d="M21 21l-5.2-5.2"></path></svg>
              </a>
              <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
            </div>
          </div>
        </header>
      
        <div class="nav-scroller py-1 mb-2">
          <nav class="nav d-flex justify-content-between">
            <a class="p-2 link-secondary" href="{{route('template_inicio')}}">Home</a>
            <a class="p-2 link-secondary" href="{{route('formularios_inicio')}}">Formulario</a>
            <a class="p-2 link-secondary" href="{{route('email_inicio')}}">Email</a>
          </nav>
        </div>
      </div>



<main class="container"> 
@yield('content')   
</main>




<footer class="blog-footer">
  <p>Desarrollado por <a href="http://yamiletjerez.260mb.net/" target="_blank">Yami</a></p>
  
</footer>
</body>
</html>