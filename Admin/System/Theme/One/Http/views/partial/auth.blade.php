@extends("one::master")

@section("body")

   <article class="container">
      <section class="col-lg-6 offset-lg-6 col-md-6 offset-md-3 col-sm-12">

         <article class="auth">
            <header class="auth-header">
               <h4 class="title">
                  <i class="mdi mdi-shield-account-outline"></i>
                  {{__("auth.title")}}
               </h4>
            </header>

            <section class="auth-body">
               <article class="block">
                  <form action="{{__url("current")}}" method="POST">
                     <div class="form-floating">
                        <input type="text"
                                 id="emailLabel"
                                 placeholder="name@example.com"
                                 class="form-control">
                        <label for="emailLabel"> {{__("words.email")}}</label>
                     </div>
                     <div class="form-floating">
                        <input type="password"
                                 id="pwdLabel"
                                 placeholder="*********"
                                 class="form-control">
                        <label for="pwdLabel"> {{__("auth.password")}} </label>
                     </div>

                     <div class="row mt-3">
                        <div class="col-auto">
                           @csrf
                           <button type="summint"
                                    name="button"
                                    class="btn btn-primary btn-sm">
                              <i class="mdi mdi-login"></i> Acceder
                           </button>
                        </div>

                        <div class="col-auto">
                           <div class="form-check form-switch mt-1">
                              <input type="checkbox"
                                       id="remember"
                                       class="form-check-input"
                                       name="remember"
                                       value="1">
                              <label for="remember" class="form-check-label">
                                 {{__("auth.remember")}}
                              </label>
                           </div>
                        </div>
                     </div>

                  </form>
               </article>
               <article class="block block-link">
                  <a href="{{__url("register")}}">
                     <i class="mdi mdi-link"></i> {{__("auth.register")}}
                  </a>
                  <a href="{{__url("login/retrieve")}}">
                     <i class="mdi mdi-link"></i> {{__("auth.retrieve")}}
                  </a>
               </article>
            </section>
         </article>
      </section>
   </article>
@endsection
