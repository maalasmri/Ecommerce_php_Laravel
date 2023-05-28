<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="Shttps://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Amiri+Quran&family=Aref+Ruqaa+Ink&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<style>

#fontF {

font-family: 'Amiri Quran', serif;

}

body{

min-width: 67%;
font-family: 'Cairo', sans-serif;

}
#login-link {
    text-decoration: none;
    color: inherit;
    font-family: 'Amiri Quran', serif;

}

#login-link:hover {
    color: rgb(221, 156, 16); 
}
</style>
<body    class="w-20 h-20">
    <header id="fontF">
      
        <nav id="fontF" class="navbar rounded" style="background-color: #4d3664;">
          <div class="container">
            <div class="d-flex display-4 text-white" href="{{ route('HomePage') }}">
               <a href="{{ route('HomePage') }}" id="login-link"> عالم الهواتف</a>
                </div>


            <div class="d-flex display-4 rounded-circle border border-white">
<img src="/img/smartphone.png" height="100" width="100">


            </div>
            <div class="d-flex" >
<div style="font-size: 20px">

        
<div>


@guest
@if (Route::has('login'))
<p class="">

<p style="font-size: 25px" class="text-white"><i class="fas fa-right-to-bracket me-2 text-black"></i>
  <a class="" id="login-link" href="{{ route('login') }}">{{ __('تسجيل دخول') }}</a>
</p>
@endif

@if (Route::has('register'))
<li class="">
<p class="text-white" style="font-size: 25px"><i class="fas fa-user-plus me-2 text-black" ></i>
  <a id="login-link" href="{{ route('register') }}">{{ __('انشاء حساب جديد') }}</a>
</li>
@endif
@else
<li class="nav-item dropdown">
<a id="login-link" style="color: #ffffff;" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
<i class="fa-solid fa-right-from-bracket me-2" style="color: #000000;"></i>{{ Auth::user()->name }}</a>
</a>

<div id="login-link" class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
<a class="dropdown-item" id="login-link" href="{{ route('logout') }}"
onclick="event.preventDefault();
document.getElementById('logout-form').submit();">
{{ __('خروج') }}
</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
@csrf
</form>
</div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>


                    
          </div>
                
                
</div>

    </nav>

    </header>
        <main class="py-4">
            @yield('content')
        </main>




<footer class="text-center text-lg-start bg-light text-muted">
    <section class=" text-center d-flex p-4 border-bottom">
   
         <div  width="50" height="50" style="font-size: 15px" class="container">
        <section class="mb-4 mt-5">
         

        <a
          class="btn text-white btn-floating m-1"
          style="background-color: #0082ca;"
          href="https://www.linkedin.com/in/mohammed-alasmari-523a68268/"
          role="button"
          ><i class="fab fa-linkedin-in"></i
        ></a>


        <a
          class="btn text-white btn-floating m-1"
          style="background-color: #faedcd;"
          href = "mailto:maalasmrii@gmail.com"
          role="button"
          ><img width="20" height="20" src="https://img.icons8.com/color/48/gmail-new.png"/></i
        ></a>
     
        <a
          class="btn text-white btn-floating m-1"
          style="background-color: #333333;"
          href="https://github.com/maalasmri"
          role="button"
          ><i class="fab fa-github"></i
        ></a>
        </section>
        
      </div>
    </div>

    </section>
  </div>

  
    <section id="fontF"class="">
      <div class="container text-center text-md-start mt-5">
        <div class="row mt-3">
          <div class="col-md-3 col-lg-4 col-xl-3  mb-4">
            <h6 class="text-uppercase fw-bold mb-4">

              <p id="fontF" class="display-6 text-center"><i style='color: rgb(0, 0, 0)' class="fas fa-building me-2"></i> عالم الهواتف</p>

              <p class="text-center" id = "fontF" style="font-size: 22px">
                Discover the best in smartphones at our store. We offer top-quality devices, expert advice, and a seamless shopping experience. Find your perfect phone today!
              </p>
          </div>
  
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <h6 id="fontF" class="text-uppercase fw-bold mb-4 display-6">
              المنتجات
            </h6>
<div style="font-size: 20px">
            <p>
            <img class ="me-2"width="27" height="27" src="https://img.icons8.com/fluency-systems-filled/48/000000/mac-os.png" alt="mac-os"/><span>Apple</a>
            </p>
            <p>
              <img class ="me-1" width="60" height="60" src="https://img.icons8.com/dotty/80/000000/samsung.png" alt="samsung"/><span>samsung</a>
            </p>
            <p>
              <img class ="me-2" width="32" height="32" src="https://img.icons8.com/windows/32/000000/huawei-logo.png" alt="huawei-logo"/><span>huawei</a>
            </p>
            <p>
              
<svg xmlns="http://www.w3.org/2000/svg" height="50" width="50" viewBox="-134.2305 -53.18475 1163.331 319.1085"><path d="M227.526 110.094V7.451h32.011v6.784c0 3.732.057 6.785.126 6.785.07 0 2.09-1.23 4.49-2.733C292.464.555 333.62-4.785 370.531 4.485c33.255 8.352 57.363 28.177 65.933 54.222 5.008 15.22 4.732 32.145-.765 46.864-6.837 18.31-20.893 33.031-41.167 43.116-17.742 8.825-37.999 13.244-60.71 13.244-18.827 0-36.386-3.14-51.843-9.269-6.133-2.432-13.995-6.424-18.764-9.529l-3.678-2.394v72h-32.011zm121.78 24.549c18.006-2.554 31.976-8.267 42.45-17.359 7.929-6.882 13.45-16.44 15.542-26.904.856-4.28.858-14.386.005-18.653-2.463-12.315-9.52-23.072-20.083-30.615-4.258-3.04-12.907-7.373-18.428-9.23-15.59-5.244-34.493-6.797-51.806-4.256-30.059 4.411-50.375 19.32-55.826 40.964-2.405 9.55-1.975 19.86 1.203 28.87 7.218 20.467 28.505 34.087 58.586 37.486 6.048.684 22.653.506 28.358-.303zm106.124-24.549V7.451h32.01v6.784c0 3.732.07 6.785.154 6.785.085 0 1.846-1.103 3.914-2.45 4.786-3.12 14.231-7.786 20.288-10.021 26.145-9.65 58.068-11.207 86.004-4.193 45.54 11.433 72.357 42.756 69.825 81.556-1.933 29.617-21.64 53.945-54.055 66.73-10.574 4.17-21.41 6.8-34.972 8.487-7.158.89-26.449.89-33.921-.002-21.149-2.523-39.716-8.803-54.193-18.33l-3.044-2.003v71.945h-32.01V110.094zm122.555 24.398c24.937-3.724 42.51-13.77 51.744-29.58 5.364-9.184 7.372-21.401 5.383-32.744-4.135-23.576-24.855-39.89-56.578-44.547-20.938-3.073-44.578-.012-60.648 7.853-16.405 8.029-26.278 20.016-29.648 35.998-.884 4.196-.882 14.982.005 19.094 2.387 11.07 7.782 20.229 15.97 27.112 11.274 9.478 25.948 15.122 44.988 17.304 6.298.721 22.521.445 28.784-.49zM95.306 161.719c-16.98-1.5-31.473-4.845-43.797-10.109C23.477 139.637 5.772 119.429.967 93.923.049 89.052-.301 78.077.294 72.833c3.47-30.579 25.996-54.8 61.61-66.245 18.952-6.09 42.28-8.08 63.22-5.392 38.363 4.926 67.382 22.715 80.137 49.126 10.386 21.504 9.068 47.625-3.416 67.707-5.624 9.046-14.882 18.382-24.423 24.626-14.844 9.714-32.573 15.757-54.106 18.442-4.313.538-24.009.975-28.01.622zm22.708-26.74c16.698-1.772 30.745-6.54 41.314-14.02 8.64-6.116 15.478-15.13 18.546-24.449 1.796-5.454 2.152-8.015 2.152-15.469 0-7.432-.351-9.972-2.133-15.43-5.857-17.941-22.987-31.287-46.922-36.555-20.986-4.62-45.46-3.014-63.592 4.171-13.082 5.184-23.407 13.576-29.463 23.944-6.438 11.025-7.9 26.041-3.792 38.982 4.426 13.944 16.085 25.613 32.129 32.158 8.739 3.565 19.559 6.05 30.271 6.95 4.11.345 17.197.173 21.49-.282zm660.309 26.752c-.67-.076-3.019-.31-5.22-.518-17.67-1.675-36.246-7.255-49.865-14.979-18.411-10.442-31.235-25.284-37.09-42.925-3.961-11.938-4.637-25.355-1.9-37.699 4.14-18.665 15.501-34.514 33.145-46.236 23.268-15.458 57.48-22.324 90.505-18.162 27.438 3.457 50.044 13.492 65.773 29.198 11.98 11.961 18.866 25.977 20.857 42.445.517 4.28.437 12.935-.163 17.476-4.316 32.701-30.24 57.695-69.94 67.432-12.036 2.952-19.592 3.846-33.75 3.992-6.124.063-11.682.052-12.352-.024zm21.05-26.59c21.137-1.944 38.364-8.91 49.423-19.983 7.488-7.497 11.834-15.75 13.547-25.725.706-4.11.696-12.679-.02-16.942-3.853-22.952-24.09-39.59-54.077-44.457-7.2-1.169-11.988-1.55-19.485-1.55-33.62 0-59.706 12.677-69.739 33.89-2.99 6.323-4.37 12.848-4.37 20.667 0 10.317 2.404 18.5 7.832 26.653 9.965 14.968 28.862 24.53 53.874 27.262 5.159.563 17.805.665 23.016.186z" fill="#000000"/></svg><span>oppo</a>
            </p>
          </div>

          </div>
          
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

            <h6 id="fontF" class="text-uppercase fw-bold mb-4 display-6">معلومات التواصل</h6>
              <div class= "" style="font-size: 21px">
            <p><i style='color: rgb(0, 0, 0)' class="fas fa-home me-3"></i>Riyadh, Saudi Arabia , SA</p>
            <p>
              <i style='color: rgb(0, 0, 0)' class="fas fa-envelope me-3"></i>
              maalasmrii@gmail.com
            </p>
            <p><i style='color: rgb(0, 0, 0)' class="fas fa-phone me-3"></i> + 01 234 567 88</p>
            <p><i style='color: rgb(0, 0, 0)' class="fas fa-print me-3"></i> + 01 234 567 89</p>
          </div>
        </div>

        </div>
      </div>
    </section>
  
    <div class="text-center p-4 text-white" style="background-color: #4d3664; font-size: 22px">
      © 2023 Copyright:
      <a class="text-reset fw-bold">Mohammed Alasamri</a>
    </div>
  </footer>
 

        </footer>


    </div>
</body>
</html>
