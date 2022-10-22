@extends("one::master")

@section("body")

   <article class="container">
      <section class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-12">

         <article class="auth auth-auto">
            <header class="auth-header">
               <h4 class="title">
                  <i class="mdi mdi-shield-key-outline"></i>
                  {{__("auth.register")}}
               </h4>
            </header>

            <section class="auth-body">
               <article class="block">
                  <form action="{{__url("current")}}" method="POST">
                     <div class="row g-1 mb-2">
                        <div class="col-md-6">
                           <div class="form-floating">
                              <input type="firstname"
                                       id="firstnameLabel"
                                       placeholder="{{__("words.firstname")}}"
                                       class="form-control">
                              <label for="firstnameLabel"> {{__("words.firstname")}}</label>
                           </div>
                        </div>

                        <div class="col-md-6">
                           <div class="form-floating">
                              <input type="lastname"
                                       id="lastnameLabel"
                                       placeholder="{{__("words.lastname")}}"
                                       class="form-control">
                              <label for="lastnameLabel"> {{__("words.lastname")}}</label>
                           </div>
                        </div>

                     </div>

                     <div class="form-floating mb-2">
                        <input type="email"
                                 id="emailLabel"
                                 placeholder="name@example.com"
                                 class="form-control">
                        <label for="emailLabel"> {{__("words.email")}}</label>
                     </div>

                     <div class="form-floating">
                        <input type="password"
                                 id="passwordLabel"
                                 placeholder="********"
                                 class="form-control">
                        <label for="passwordLabel"> {{__("words.password")}}</label>
                     </div>

                     <div class="mt-3">

                        @csrf
                        <button type="summint"
                                 name="button"
                                 class="btn btn-primary">
                           <i class="mdi mdi-content-save"></i> {{__("words.create")}}
                        </button>

                        <a href="{{__url('login')}}"
                              class="btn btn-danger">
                           {{__("words.close")}}
                        </a>

                     </div>

                  </form>
               </article>
            </section>
         </article>
      </section>
   </article>
@endsection
