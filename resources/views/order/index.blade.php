@extends('layouts.app')

@section('app.content')
    <div class="content d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        @include('includes.header_toolbar', ['title'=>'Завки'])
        <!--end::Toolbar-->
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_order">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row gy-5 g-xl-10">
                    <!--begin::Col-->
                    <div class="col-xl-12">
                        <!--begin::Engage widget 1-->
                        <div class="card h-md-100">
                            <!--begin::Body-->
                            <div class="card-body d-flex flex-column">
                                <div class="table-responsive">
                                    <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
                                        <thead>
                                        <tr>
                                            <th>№ Заявки</th>
                                            <th>№ Накладной</th>
                                            <th>г. Отправителя</th>
                                            <th>г. Получателя</th>
                                            <th>Отправитель</th>
                                            <th>Получатель</th>
                                            <th>Контрагент</th>
                                            <th>Хар-ка груза</th>
                                            <th>Упаковка</th>
                                            <th>Необходимы грузчики</th>
                                            <th>Комментарии</th>
                                            <th>Действие</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Engage widget 1-->
                    </div>
                    <!--end::Col-->
                </div>
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
@endsection
