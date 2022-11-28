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
            <p class="text-center">@lang('app.signUpAsClient')</p>
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

                                <div class="inputBox">
                                    <i class="fa fa-user"></i>
                                <input type="text" tabindex="1" name="name"
                                    class="form-control"
                                    placeholder="@lang('placeholders.name')" id="name" autofocus>
                            </div>

                            <div class="inputBox">
                                <i class="fa fa-envelope"></i>
                                <input tabindex="2" type="email" name="email"
                                    class="form-control"
                                    placeholder="e.g. admin@example.com" id="email">
                                <input type="hidden" id="g_recaptcha" name="g_recaptcha">
                            </div>

                            <div class="inputBox">
                                <i class="fa fa-lock"></i>
                                {{-- <label for="password">@lang('app.password') <sup class="f-14 mr-1">*</sup></label> --}}
                                <x-forms.input-group>
                                    <input type="password" name="password" id="password"
                                        placeholder="@lang('placeholders.password')" tabindex="3"
                                        class="form-control height-50 f-15 light_text">
                                    {{-- <x-slot name="append">
                                        <button type="button" tabindex="4" data-toggle="tooltip"
                                            data-original-title="@lang('app.viewPassword')"
                                            class="btn btn-outline-secondary border-grey height-50 toggle-password"><i
                                                class="fa fa-eye"></i></button>
                                    </x-slot> --}}
                                </x-forms.input-group>
                            </div>

                            <div class="inputBox">
                                <i class="fa fa-building"></i>
                                {{-- <label for="company_name">@lang('modules.client.companyName')</label> --}}
                                <input type="text" tabindex="5" name="company_name"
                                    class="form-control"
                                    placeholder="@lang('placeholders.company')" id="company_name">
                            </div>

                            @if ($setting->google_recaptcha_status == 'active' && $setting->google_recaptcha_v2_status == 'active')
                                <div class="form-group" id="captcha_container"></div>
                            @endif

                            @if ($errors->has('g-recaptcha-response'))
                                <div class="help-block with-errors">{{ $errors->first('g-recaptcha-response') }}
                                </div>
                            @endif

                            <button type="button" id="submit-register"
                                class="sidformbtn btn">
                                @lang('app.signUp')
                            </button>

                            <a href="{{ route('login') }}"
                                class="sidformbtn2   my-2 text-center">
                                @lang('app.login')
                            </a>
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
            $(document).ready(function() {

                $('#submit-register').click(function() {

                    const url = "{{ route('register') }}";

                    $.easyAjax({
                        url: url,
                        container: '.login_box',
                        disableButton: true,
                        buttonSelector: "#submit-register",
                        type: "POST",
                        blockUI: true,
                        data: $('#login-form').serialize(),
                        success: function(response) {
                            window.location.href = "{{ route('dashboard') }}";
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
