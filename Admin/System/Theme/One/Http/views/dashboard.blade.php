@extends("one::master")

   @section("body")

      <article role="one" class="dashboard">

         <nav class="one-nav">
            <div class="one-nav-header d-flex">
               <a href="#" class="fs-5">
                  <i class="mdi mdi-numeric-1-circle-outline"></i> One
               </a>
            </div>

            <div class="one-nav-body">

               <div class="row row-title">
                  <div class="col-auto">Title menu</div>
                  <div class="col"><hr class="navbar-vertical-divider" /></div>
               </div>

               <ul class="nav flex-column">
                  <li class="nav-item">
                     <a href="#" class="nav-link">Link</a>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link">Link</a>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link">Link</a>
                  </li>
               </ul>

               <div class="row row-title">
                  <div class="col-auto">Title menu</div>
                  <div class="col"><hr class="navbar-vertical-divider" /></div>
               </div>

               <ul class="nav flex-column">
                  <li class="nav-item">
                     <a href="#" class="nav-link">Link</a>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link">Link</a>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link">Link</a>
                  </li>
               </ul>
            </div>
         </nav>

         <section class="one-body">

            <nav class="one-navbar d-flex flex-wrap justify-content-center justify-content-lg-start">

               <a href="{{__url('/admin')}}" class="brand d-flex align-items-center px-3">

               </a>
               <ul class="nav ms-auto">
                  <li class="nav-item">
                     <a href="#" class="nav-link px-2 py-1">
                        <i class="mdi mdi-bell-outline mdi-24px"></i>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link px-2 py-1">
                        <i class="mdi mdi-message-outline mdi-24px"></i>
                     </a>
                  </li>
                  <li class="nav-item dropdown">
                     <a href="#"
                        class="nav-link dropdown-toggle px-2 py-1"
                        data-toggle="dropdown"
                        data-bs-toggle="dropdown">
                        <i class="mdi mdi-shield-account mdi-24px"></i>
                     </a>
                     <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">
                           <i class="mdi mdi-account-circle"></i> Mi Perfil
                        </a>
                        <a href="#" class="dropdown-item">
                           <i class="mdi mdi-logout"></i> Salir
                        </a>
                     </div>
                  </li>
               </ul>
            </nav>

            <article class="container pt-3">

               {{__("words.mam")}}
               @for($i=0; $i<=15; $i++)
               <section class="col-12 p-3 bg-light mb-2">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta officia explicabo dignissimos est iure provident nisi blanditiis architecto! Atque facere, itaque dolore impedit asperiores expedita, voluptatem corporis id laudantium molestias!
               </section>
               @endfor
            </article>

         </section>

         <aside class="one-aside">
            <div class="toggle">
               <button type="button"
                        name="button"
                        class="bt bt-light bt-toggle">
                  <i class="mdi mdi-cog mdi-spin"></i> Sleeping
               </button>
            </div>

            <div class="one-aside-header">
               <button type="button" name="button" class="bt bt-close">
                  <i class="mdi mdi-close"></i>
               </button>
               <h4 class="title">One Title</h4>
            </div>

            <div class="one-aside-body">
               <div class="block">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
               </div>

               <div class="block">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
               </div>
            </div>
         </aside>

      </article>

   @endsection

   @section("js")
      @parent <script type="text/javascript">

      </script>
   @endsection
