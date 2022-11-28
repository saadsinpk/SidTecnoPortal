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
              <p class="text-center">@lang('app.recoverPassword')</p>
    <form id="forgot-password-form" action="{{ route('password.email') }}" class="ajax-form" method="POST">
        {{ csrf_field() }}

        <div class="inputBox">
            <i class="fa fa-envelope"></i>
                                <input type="email" name="email" class="form-control"
                                    autofocus placeholder="e.g. admin@example.com" id="email">
                            </div>

                            <button
                                type="submit"
                                id="submit-login"
                                class="sidformbtn btn">
                                @lang('app.sendPasswordLink')
                            </button>
                            <div class="">
                                <a href="{{ route('login') }}" class="sidformbtn2   my-2 text-center">@lang('app.login')</a>
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

                        </div>
                    </div>
               
        </section>
    </form>

    <x-slot name="scripts">
        <script>

            $('#submit-login').click(function() {

                var url = "{{ route('password.email') }}";
                $.easyAjax({
                    url: url,
                    container: '#forgot-password-form',
                    disableButton: true,
                    buttonSelector: "#submit-login",
                    type: "POST",
                    data: $('#forgot-password-form').serialize(),
                    success: function(response) {
                        $('#success-msg').removeClass('d-none');
                        $('#success-msg').html(response.message);
                    }
                })
            });

        </script>
    </x-slot>

</x-auth>
