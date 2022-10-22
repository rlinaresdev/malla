@extends("one::master")

@section("body")

   <article class="container">
      <section class="col-lg-6 offset-lg-3 col-md-6 offset-md-3 col-sm-12">

         <article class="auth">
            <header class="auth-header">
               <h4 class="title">
                  <i class="mdi mdi-shield-key-outline"></i>
                  {{__("auth.retrieve")}}
               </h4>
            </header>

            <section class="auth-body">
               <article class="block">
                  <form action="{{__url("current")}}" method="POST">
                     <div class="form-floating">
                        <input type="email"
                                 id="emailLabel"
                                 placeholder="name@example.com"
                                 class="form-control">
                        <label for="emailLabel"> {{__("words.email")}}</label>
                     </div>

                     <div class="mt-3">

                        @csrf
                        <button type="summint"
                                 name="button"
                                 class="btn btn-primary">
                           <i class="mdi mdi-send"></i> {{__("words.send")}}
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
