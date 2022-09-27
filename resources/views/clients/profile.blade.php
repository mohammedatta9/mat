@extends('clients.layouts.clients')
@section('title','الرئيسية')
@section('content')
<section class="">
    <div class="container">
        <div class="row app">
            <div class="col-lg-3">
                <div class="slide-user">
                    <div class="card-slide">
                        <img class="img-user"
                            src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cGVyc29ufGVufDB8fDB8fA%3D%3D&w=1000&q=80"
                            alt="" />
                        <h6 class="">
                            {{ auth()->user()->name }}
                        </h6>
                        <div class="badge-info">وظيفة 1</div>
                    </div>
                    <div class="card-slide">
                        <p class="">حسابك مكتمب بنسبة 48%</p>
                        <p>
                        <div class="small-prog progress">
                            <div class="progress-bar " style="width:75%;" role="progressbar" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        </p>
                        <a href="{{ route('client.settings') }}" class="btn-more-lg ">
                            أكمل بيانات حسابي
                            <i class="fas fa-arrow-left-long icon"></i>
                        </a>
                    </div>
                    <div class="card-slide px-0">
                        <p class="">
                            الرصيد الكلي:
                            <span class="main-color d-inline fw-bold fs-5"> 1000.00$ </span>
                        </p>
                        <p class="">
                            يمكن سحبه :
                            <span class="main-color d-inline fw-bold fs-5 "> 100$ </span>
                        </p>

                        <a href="" class="btn-more-lg btn-green">
                            عرض رصيدي
                            <i class="fas fa-arrow-left-long icon"></i>
                        </a>
                    </div>
                    <div class="card-slide ">
                        <a href="" class="btn-icon justify-content-between">
                            طلب جديد
                            <div class="icon">
                                <i class="fas fa-angle-left"></i>
                            </div>
                        </a>
                    </div>
                    <div class="card-slide ">
                        <a href="" class="btn-icon justify-content-between">
                            طلباتي
                            <div class="icon">
                                <i class="fas fa-angle-left"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="app-content">
                    <div class="container">
                        <div class="boxes-service mb-5">
                            <div class="items-service">
                                <div class="item ">
                                    <img src="{{ asset('front-assets/img/global/item-btn-1.png') }}" alt="" />
                                    <p>صياغة العقود والمذكرات</p>
                                    <a href="#" class="btn btn-card-sm">
                                        أطلب آلان
                                        <i class="fa-solid fa-arrow-left-long"></i>
                                    </a>
                                </div>

                                <div class="item">
                                    <img src="{{ asset('front-assets/img/global/item-btn-2.png')}}" alt="" />
                                    <p>التمثيل القانوني والقضائي</p>
                                    <a href="#" class="btn btn-card-sm">
                                        أطلب آلان
                                        <i class="fa-solid fa-arrow-left-long"></i>
                                    </a>
                                </div>

                                <div class="item ">
                                    <img src="{{ asset('front-assets/img/global/serv-6.svg') }}" alt="" />
                                    <p>استشارات ودراسات</p>
                                    <a href="#" class="btn btn-card-sm">
                                        أطلب آلان
                                        <i class="fa-solid fa-arrow-left-long"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap gap-4 align-items-center justify-content-center mb-5">
                            <div class="btn-icon-cr">
                                <div class="icon">
                                    <img src="{{ asset('front-assets/img/global/Asset 2.svg') }}" alt="">
                                </div>
                                إنشاء طلب جديد
                            </div>
                            <div class="btn-icon-cr">
                                <div class="icon">
                                    <i class="fa-solid fa-boxes-stacked"></i>
                                </div>
                                طلباتي
                            </div>
                            <div class="btn-icon-cr">
                                <div class="icon">
                                    <i class="fa-solid fa-boxes-stacked"></i>
                                </div>
                                طلبات تحت التنفيذ
                                <div class="lg-badge">
                                    6
                                </div>
                            </div>
                            <div class="btn-icon-cr">
                                <div class="icon">
                                    <i class="fa-solid fa-money-check-dollar"></i>
                                </div>
                                فواتير غير مسددة
                                <div class="lg-badge">
                                    6
                                </div>
                            </div>
                        </div>
                        <div class="row row-gap-24 boxes-info-order ">
                            <div class="col-xl-6">
                                <div class="box-info">
                                    <div class="title-btm-border">
                                        طلبات جديدة
                                    </div>
                                    <a href="" class="btn-icon ">
                                        <div class="icon">
                                            0
                                        </div>
                                        اضافة عقد
                                    </a>
                                    <a href="" class="btn-icon ">
                                        <div class="icon">
                                            7
                                        </div>
                                        طلب محفوظة
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="box-info">
                                    <div class="title-btm-border">
                                        الطلبات المعروضة
                                    </div>
                                    <a href="" class="btn-icon ">
                                        <div class="icon">
                                            2
                                        </div>
                                        متاح للعرض
                                    </a>
                                    <a href="" class="btn-icon ">
                                        <div class="icon">
                                            2
                                        </div>
                                        متاح للتفاوض
                                    </a>
                                    <a href="" class="btn-icon ">
                                        <div class="icon">
                                            4
                                        </div>
                                        معلق للاتفاق
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="box-info">
                                    <div class="title-btm-border">
                                        تحت التنفيذ
                                    </div>
                                    <a href="" class="btn-icon ">
                                        <div class="icon">
                                            2
                                        </div>
                                        تم التنفيذ
                                    </a>
                                    <a href="" class="btn-icon ">
                                        <div class="icon">
                                            2
                                        </div>
                                        جاري التفيذ
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="box-info">
                                    <div class="title-btm-border">
                                        الطلبات المنتهية
                                    </div>
                                    <a href="" class="btn-icon ">
                                        <div class="icon">
                                            2
                                        </div>
                                        المقفلة
                                    </a>
                                    <a href="" class="btn-icon ">
                                        <div class="icon">
                                            2
                                        </div>
                                        المعترض عليها (التحكيم)
                                    </a>
                                    <a href="" class="btn-icon ">
                                        <div class="icon">
                                            2
                                        </div>
                                        الملغاة
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection