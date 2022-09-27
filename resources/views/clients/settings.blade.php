@extends('clients.layouts.clients')
@section('title','الاعدادات')
@section('content')
<section class="">
    <div class="container-fluid ">
        <div class="row app">
            <div class="col-lg-2 px-0">
                <div class="slide-user">
                    <div class="card-slide">
                        <img class="img-user"
                            src="{{ display_file($user->photo) }}"
                            alt="" />
                        <h6 class="">
                            {{ $user->name }}
                        </h6>
                        <div class="badge-info">وظيفة 1</div>
                    </div>
                    <div class="card-slide">
                        <div class="fs-6 main-color">
                            بريد الالكتروني:
                        </div>
                        <div>{{ $user->email }}
                            <div class="icon-done mx-auto">
                                <i class="fas fa-check"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-slide">
                        <div class="fs-6 main-color">
                            الهاتف:
                        </div>
                        <div>
                            {{ $user->phone }}
                            <div class="icon-done mx-auto">
                                <i class="fas fa-check"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-10 px-0">
                <div class="app-content">
                    <div class="header-content-box">
                        <div class="container ">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="title"> الملف الشخصي</div>
                                @userCompany
                                <a href="{{ route('client.documents') }}" class="main-btn">اكمال رفع المستندات</a>
                                @enduserCompany
                            </div>
                        </div>
                    </div>
                </div>
                <form action="{{ route('client.settings.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" value="{{ $user->id }}" id="">
                <div class="container pb-5">
                    <div class="row row-gap-24">
                        <div class="col-xl-3">
                            <div class="mb-1">الأسم الأول<span class="text-danger">*</span></div>
                            <input type="text" name="first_name" class="main-inp" value="{{ $user->first_name }}">
                        </div>
                        <div class="col-xl-3">
                            <div class="mb-1">أسم الأب<span class="text-danger">*</span></div>
                            <input type="text" name="second_name" class="main-inp" value="{{ $user->second_name }}">
                        </div>
                        <div class="col-xl-3">
                            <div class="mb-1">أسم الجد<span class="text-danger">*</span></div>
                            <input type="text" name="third_name" class="main-inp" value="{{ $user->third_name }}">
                        </div>
                        <div class="col-xl-3">
                            <div class="mb-1"> الأسم الأخير<span class="text-danger">*</span></div>
                            <input type="text" name="last_name" class="main-inp" value="{{ $user->last_name }}">
                        </div>
                        <div class="col-xl-3">
                            <div class="mb-1"> الأسم بالكامل<span class="text-danger">*</span></div>
                            <input type="text" value="{{ $user->name }}" class="main-inp" id="">
                        </div>
                        <div class="col-xl-3">
                            <div class="mb-1"> البريد الالكتروني <span class="text-danger">*</span></div>
                            <input type="text" name="email" class="main-inp" value="{{ $user->email }}">
                        </div>
                        <div class="col-xl-3">
                            <div class="mb-1"> الجنس <span class="text-danger">*</span></div>
                            <select name="gender" class="form-control">
                                <option value="">أختر الجنس</option>
                                <option value="male" {{ $user->gender=='male'?'selected':'' }}>ذكر</option>
                                <option value="female" {{ $user->gender=='female'?'selected':'' }}>انثى</option>
                            </select>
                        </div>
                        <div class="col-xl-3">
                            <div class="mb-1"> رقم الجوال <span class="text-danger">*</span></div>
                            <input type="text" name="phone" class="main-inp" value="{{ $user->phone }}">
                        </div>
                        <div class="col-xl-3">
                            <div class="mb-1"> رقم الهوية <span class="text-danger">*</span></div>
                            <input type="text" name="id_number" class="main-inp" value="{{ $user->id_number }}">
                        </div>
                        <div class="col-xl-3">
                            <div class="mb-1"> تاريخ الميلاد <span class="text-danger">*</span></div>
                            <input type="date" name="birthdate" class="main-inp" value="{{ $user->birthdate }}">
                        </div>
                        <div class="col-xl-3">
                            <div class="mb-1"> الدولة <span class="text-danger">*</span></div>
                            <div class="box-inp">
                                <select name="country_id" class="inp">
                                    <option value="">أختر الدولة</option>
                                    @foreach ($countries as $country)
                                    <option value="{{ $country->id }}" {{ $country->id==$user->country_id?'selected':''
                                        }}>{{ $country->name }}</option>
                                    @endforeach
                                </select>
                                <div class="icon">
                                    <i class="fas fa-angle-down"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="mb-1"> المدينة الحالية <span class="text-danger">*</span></div>
                            <div class="box-inp">
                                <select name="city_id" class="inp">
                                    <option value="">أختر المدينة</option>
                                    @foreach ($cities as $city)
                                    <option value="{{ $city->id }}" {{ $city->id==$user->city_id?'selected':'' }}>{{
                                        $city->name }}</option>
                                    @endforeach
                                </select>
                                <div class="icon">
                                    <i class="fas fa-angle-down"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="mb-1"> العنوان <span class="text-danger">*</span></div>
                            <input type="text" placeholder="قم بكتابة العنوان الخاص بك..." name="address"
                                class="main-inp" value="{{ $user->address }}">
                        </div>
                        
                        <div class="col-xl-3">
                            <div class="mb-1"> الصورة الشخصية <span class="text-danger">*</span></div>
                            <div class="box-inp">
                                رفع الصورة
                                <input type="file" name="image" id="" class="inp">
                                <div class="icon">
                                    <i class="fa-solid fa-upload"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-3 d-flex justify-content-end">
                            <button class="inp-sub ms-0" type="submit">
                                حفظ التغيرات
                                <i class="fas fa-angle-left"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </form>

            </div>
        </div>
    </div>
</section>
@endsection