@extends('layouts.auth')

@section('auth_content')
    <form class="form w-100" action="{{route('login.auth')}}" method="post">
        @csrf
        <h5 class="text-center mb-10 company_h5"><span class="company_text">Компания </span>Solar LTD</h5>
        <!--begin::Heading-->
        <div class="text-center mb-8">
            <!--begin::Title-->
            <h1 class="text-white mb-2" style="font-size: 1.3rem;">Войти в систему </h1>
            <!--end::Title-->
        </div>
        <!--begin::Heading-->
        <!--begin::Input group-->
        <div class="fv-row mb-10">
            <!--begin::Label-->
            <label class="form-label fs-6 fw-bolder text-dark">Email</label>
            <!--end::Label-->
            <!--begin::Input-->
            <input class="form-control form-control-lg form-control-solid" type="text" name="email" placeholder="Введите email" autocomplete="off" />
            <!--end::Input-->
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="fv-row mb-10">
            <!--begin::Wrapper-->
            <div class="d-flex flex-stack mb-2">
                <!--begin::Label-->
                <label class="form-label fw-bolder text-dark fs-6 mb-0">Пароль</label>
                <!--end::Label-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Input-->
            <input class="form-control form-control-lg form-control-solid" type="password" placeholder="Введите пароль" name="password" autocomplete="off" />
            <!--end::Input-->
        </div>
        <!--end::Input group-->
        <!--begin::Actions-->
        <div class="text-center">
            <!--begin::Submit button-->
            <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
                <span class="indicator-label">Авторизация</span>
                <span class="indicator-progress">Пожалуйста подождите...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
            <!--end::Submit button-->

        </div>
        <!--end::Actions-->
    </form>
@endsection
