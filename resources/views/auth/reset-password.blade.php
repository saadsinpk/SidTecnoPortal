<x-auth>
    <section class="loginsection">
        <div class="row">
          <div class="col-md-6 loginsection__left p-0">
              <img src="img/bax.png" class="bac" alt="">
              <img src="img/sidrocket.png" class="rocket" alt="">
              <img src="img/side1.png" class="side1" alt="">
              <img src="img/side2.png" class="side2" alt="">
              <img src="img/side3.png" class="side3" alt="">
              <img src="img/f1.png" class="siderain" alt="">
              <img src="img/f2.png" class="siderain2" alt="">
              <img src="img/f3.png" class="siderain3" alt="">
              <img src="img/f4.png" class="siderain4" alt="">
              <img src="img/f5.png" class="siderain5" alt="">
          </div>
          <div class="col-md-6 loginsection__right">
              <div class="loginsection__right-img1">
                  <img src="img/sid1.png" alt="">
              </div>
              <div class="loginsection__right-img2">
                  <img src="img/sidlogo.png" alt="">
              </div>
              <p class="text-center">@lang('app.resetPassword')</p>
    <form id="reset-password-form" action="{{ route('password.update') }}" class="ajax-form" method="POST">
        {{ csrf_field() }}
    

                            <div class="alert alert-success m-t-10 d-none" id="success-msg"></div>

                            <input type="hidden" name="token" value="{{ $request->route('token') }}">
                            <input type="hidden" name="email" value="{{ $request->email }}">

                            <div class="inputBox">
                                <i class="fa fa-lock"></i>

                                <input type="password" name="password"
                                    class="form-control" placeholder="Password"
                                    id="password">
                            </div>

                            <div class="inputBox">
                                <i class="fa fa-lock"></i>
                                <input type="password" name="password_confirmation"
                                    class="form-control" placeholder="Confirm Password"
                                    id="password_confirmation">
                            </div>

                            <button
                                type="submit"
                                id="submit-login"
                                class="sidformbtn btn">
                                @lang('app.resetPassword') 
                            </button>
                            <div class="my-3">
                                <a href="{{ route('login') }}" class="sidformbtn2  text-center">@lang('app.login')</a>
                            </div>
                            <div class="loginsection__right--footer d-flex justify-content-center align-items-center mt-2">
                                <ul class="social__icon list d-flex ">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                </ul>
                                <span>/sidtechnocom</span>
                            </div>
                        </form>
                        </div>
                      
                    </div>
                
        </section>


    <x-slot name="scripts">
        <script>

            $('#submit-login').click(function() {

                var url = "{{ route('password.update') }}";
                $.easyAjax({
                    url: url,
                    container: '#reset-password-form',
                    disableButton: true,
                    buttonSelector: "#submit-login",
                    type: "POST",
                    data: $('#reset-password-form').serialize(),
                    success: function(response) {
                        $('#success-msg').removeClass('d-none');
                        $('#success-msg').html(response.message);
                        setTimeout(() => {
                            window.location.href = "{{ route('login') }}"
                        }, 2000);
                    }
                })
            });

        </script>
    </x-slot>

</x-auth>
