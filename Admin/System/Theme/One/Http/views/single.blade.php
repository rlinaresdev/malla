@extends("one::master")

   @section("body")

      <article role="one" class="one-single">

         <header class="one-header">
            <nav class="one-navbar d-flex flex-wrap justify-content-center justify-content-lg-start mb-1">

               <a href="{{__url('/admin')}}" class="brand d-flex align-items-center px-3">
                  <span class="fs-5">One</span>
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
         </header>

         <section class="one-body">

            <article class="container-fluid">
               <section class="col-xxl-8 offset-xxl-2 col-lg-10 offset-lg-1 col-md-12 col-sm-12">
                  @for( $i=0; $i<=15; $i++)
                     <article class="paragrap">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                     </article>
                  @endfor
               </section>
            </article>

         </section>

      </article>
   @endsection

   @section("js")
      @parent <script type="text/javascript">
         var oneBody = jQuery("[role=one]");

         jQuery(window).scroll(function(){
            if( jQuery(this).scrollTop() >= 120 ) {
               if( !oneBody.hasClass("loopnavi") ) {
                  oneBody.addClass("loopnavi")
               }
            }
            else{
               if( oneBody.hasClass("loopnavi") ) {
                  oneBody.removeClass("loopnavi")
               }
            }
         });
      </script>
   @endsection
