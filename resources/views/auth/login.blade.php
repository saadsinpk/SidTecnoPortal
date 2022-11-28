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
              <p class="text-center">Welcome to the sid Techno</p>
    <form id="login-form" action="{{ route('login') }}" class="ajax-form" method="POST">
        {{ csrf_field() }}

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <script>
                                const facebook = "{{ route('social_login', 'facebook') }}";
                                const google = "{{ route('social_login', 'google') }}";
                                const twitter = "{{ route('social_login', 'twitter') }}";
                                const linkedin = "{{ route('social_login', 'linkedin') }}";
                            </script>

                            @if ($socialAuthSettings->google_status == 'enable')
                                <a class="mb-3 height_50 rounded f-w-500" onclick="window.location.href = google;">
                                    <span>
                                        <img src="{{ asset('images/google.png') }}" alt="Google"/>
                                    </span>
                                    @lang('auth.signInGoogle')</a>
                            @endif
                            @if ($socialAuthSettings->facebook_status == 'enable')
                                <a class="mb-3 height_50 rounded f-w-500" onclick="window.location.href = facebook;">
                                    <span>
                                        <img src="{{ asset('images/fb.png') }}" alt="Google"/>
                                    </span>
                                    @lang('auth.signInFacebook')
                                </a>
                            @endif
                            @if ($socialAuthSettings->twitter_status == 'enable')
                                <a class="mb-3 height_50 rounded f-w-500" onclick="window.location.href = twitter;">
                                    <span>
                                        <img src="{{ asset('images/twitter.png') }}" alt="Google"/>
                                    </span>
                                    @lang('auth.signInTwitter')
                                </a>
                            @endif
                            @if ($socialAuthSettings->linkedin_status == 'enable')
                                <a class="mb-3 height_50 rounded f-w-500" onclick="window.location.href = linkedin;">
                                    <span>
                                        <img src="{{ asset('images/linkedin.png') }}" alt="Google"/>
                                    </span>
                                    @lang('auth.signInLinkedin')
                                </a>
                            @endif

                            @if ($socialAuthSettings->social_auth_enable)
                                <p class="position-relative my-4">@lang('auth.useEmail')</p>
                            @endif
                            <div class="inputBox">
                                <i class="fa fa-user"></i>
                                <input  tabindex="1" type="email" name="email"
                                class="form-control" autofocus
                                placeholder="@lang('auth.email')" id="email">
                                <input type="hidden" id="g_recaptcha" name="g_recaptcha">
                            </div>
                        
                            @if ($socialAuthSettings->social_auth_enable)
                                <button type="submit" id="submit-next"
                                        class="btn-primary f-w-500 rounded w-100 height-50 f-18 ">@lang('auth.next') <i
                                        class="fa fa-arrow-right pl-1"></i></button>
                            @endif

                            <div id="password-section"
                                 @if ($socialAuthSettings->social_auth_enable) class="d-none" @endif>
                                 <div class="inputBox">
                                    <i class="fa fa-lock"></i>
                                    <x-forms.input-group>
                                        <input type="password" name="password" id="password"
                                            placeholder="@lang('placeholders.password')" tabindex="3"
                                            class="form-control">
                                        {{-- <x-slot name="append">
                                            <button type="button" data-toggle="tooltip"
                                                data-original-title="@lang('app.viewPassword')"
                                                class="btn btn-outline-secondary border-grey height-50 toggle-password"><i
                                                    class="fa fa-eye"></i></button>
                                        </x-slot> --}}
                                    </x-forms.input-group>
                                </div>
                            </div>
                            <ul class="list d-flex justify-content-between">
                                <li>
                                    <label for="checkbox-signup" class="remember">  <input id="checkbox-signup" type="checkbox" name="remember"><span>@lang('app.rememberMe')</span></label>
                                </li>
                                <li>
                                    <label class="forget"> <a href="{{ url('forgot-password') }}">@lang('app.forgotPassword')</a></label>
                                </li>
                            </ul>
                              

                                @if ($setting->google_recaptcha_status == 'active' && $setting->google_recaptcha_v2_status == 'active')
                                    <div class="form-group" id="captcha_container"></div>
                                @endif

                                @if ($errors->has('g-recaptcha-response'))
                                    <div class="help-block with-errors">{{ $errors->first('g-recaptcha-response') }}
                                    </div>
                                @endif

                                <button type="submit" id="submit-login"
                                        class="sidformbtn btn">
                                    @lang('app.login') 
                                </button>

                                @if ($setting->allow_client_signup)
                                    <a href="{{ route('register') }}"
                                       class="sidformbtn2   my-2 text-center">
                                        @lang('app.signUpAsClient')
                                    </a>
                                @endif
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

        @if ($setting->google_recaptcha_status == 'active' && $setting->google_recaptcha_v2_status == 'active')
            <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async
                    defer></script>
            <script>
                var gcv3;
                var onloadCallback = function () {
                    // Renders the HTML element with id 'captcha_container' as a reCAPTCHA widget.
                    // The id of the reCAPTCHA widget is assigned to 'gcv3'.
                    gcv3 = grecaptcha.render('captcha_container', {
                        'sitekey': '{{ $setting->google_recaptcha_v2_site_key }}',
                        'theme': 'light',
                        'callback': function (response) {
                            if (response) {
                                $('#g_recaptcha').val(response);
                            }
                        },
                    });
                };
            </script>
        @endif
        @if ($setting->google_recaptcha_status == 'active' && $setting->google_recaptcha_v3_status == 'active')
            <script
                src="https://www.google.com/recaptcha/api.js?render={{ $setting->google_recaptcha_v3_site_key }}"></script>
            <script>
                grecaptcha.ready(function () {
                    grecaptcha.execute('{{ $setting->google_recaptcha_v3_site_key }}').then(function (token) {
                        // Add your logic to submit to your backend server here.
                        $('#g_recaptcha').val(token);
                    });
                });
            </script>
        @endif

        <script>
            $(document).ready(function () {
                $('#submit-next').click(function () {
                    const url = "{{ route('check_email') }}";
                    $.easyAjax({
                        url: url,
                        container: '#login-form',
                        disableButton: true,
                        buttonSelector: "#submit-next",
                        type: "POST",
                        data: $('#login-form').serialize(),
                        success: function (response) {
                            if (response.status === 'success') {
                                $('#submit-next').remove();
                                $('#password-section').removeClass('d-none');
                                $("#password").focus();
                            }
                        }
                    })
                });

                $('#submit-login').click(function () {

                    const url = "{{ route('login') }}";
                    $.easyAjax({
                        url: url,
                        container: '.login_box',
                        disableButton: true,
                        buttonSelector: "#submit-login",
                        type: "POST",
                        blockUI: true,
                        data: $('#login-form').serialize(),
                        success: function (response) {
                            if (response.two_factor == false) {
                                window.location.href = "{{ session()->has('url.intended') ? session()->get('url.intended') : route('dashboard') }}";
                            } else if (response.two_factor == true) {
                                window.location.href = "{{ url('two-factor-challenge') }}";
                            }
                        }
                    })
                });

                @if (session('message'))
                Swal.fire({
                    icon: 'error',
                    text: '{{ session('message') }}',
                    showConfirmButton: true,
                    customClass: {
                        confirmButton: 'btn btn-primary',
                    },
                    showClass: {
                        popup: 'swal2-noanimation',
                        backdrop: 'swal2-noanimation'
                    },
                })
                @endif

            });
        </script>
    </x-slot>

</x-auth>
