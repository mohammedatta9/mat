@extends('admin.layouts.admin')
@section('title','إضافة عضو')
@section('content')
<section class="py-5" id="app">
    <nav aria-label="breadcrumb ">
        <ol class="breadcrumb bg-light p-3">
            <li href="" class="breadcrumb-item" aria-current="page">
                اضافة عضو
            </li>
        </ol>
    </nav>
    <div class="content_view">
        <form action="{{ route('admin.users.store') }}" method="POST" enctype="multipart/form-data">
            <div class="row row-gap-24">
                @csrf
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <label for="" class="small-label"> نوع الحساب </label>
                    <select name="type" class="form-control"  v-model="type">
                        <option value="">أختر نوع العضوية</option>
                        <option value="user">عميل</option>
                        <option value="vendor">محامي</option>
                        <option value="judger">محكم</option>
                    </select>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <label for="" class="small-label"> نوع العضوية </label>
                    <select name="membership" class="form-control"  v-model="membership">
                        <option value="">أختر نوع العضوية</option>
                        <option value="individual">فردي</option>
                        <option value="company">شركة</option>
                    </select>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <label for="" class="small-label">الاسم الاول</label>
                    <input type="text" name="first_name" class="form-control"  value="{{ old('first_name') }}">
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <label for="" class="small-label">الاسم الثاني </label>
                    <input type="text" name="second_name" class="form-control"  value="{{ old('second_name') }}">
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <label for="" class="small-label">الاسم الثالث </label>
                    <input type="text" name="third_name" class="form-control"  value="{{ old('third_name') }}">
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <label for="" class="small-label">الاسم الرابع </label>
                    <input type="text" name="last_name" class="form-control"  value="{{ old('last_name') }}">
                </div>
                {{-- <div class="col-sm-6 col-md-4 col-lg-3">
                    <label for="" class="small-label">الاسم بالكامل </label>
                    <input type="text" name="" class="form-control" >
                </div> --}}
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <label for="" class="small-label"> الجنس </label>
                    <select name="gender" class="form-control" >
                        <option value="">أختر الجنس</option>
                        <option value="male">ذكر</option>
                        <option value="female">انثى</option>
                    </select>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <label for="" class="small-label">تاريخ الميلاد </label>
                    <input type="date" name="birthdate" class="form-control"  value="{{ old('birthdate') }}">
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <label for="" class="small-label">البريد الالكتروني </label>
                    <input type="email" name="email" class="form-control"  value="{{ old('email') }}">
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <label for="" class="small-label"> رقم الجوال </label>
                    <input type="number" name="phone" class="form-control rmv-arw-inp"  value="{{ old('phone') }}">
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <label for="" class="small-label"> رقم الهوية </label>
                    <input type="number" name="id_number" class="form-control rmv-arw-inp"  value="{{ old('id_number') }}">
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <label for="" class="small-label"> الباسورد </label>
                    <input type="password" name="password" class="form-control"  >
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <label for="" class="small-label"> الصورة الشخصية </label>
                    <input type="file" name="image" class="form-control" >
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <label for="" class="small-label"> الدولة </label>
                    <select name="country_id" class="form-control"  >
                        <option value="">أختر الدولة</option>
                        @foreach (App\Models\Country::all() as $country)
                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <label for="" class="small-label"> المدينة </label>
                    <select name="city_id" class="form-control" >
                        <option value="">أختر المدينة</option>
                        @foreach (App\Models\City::all() as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3" v-if="membership=='company' && type=='user'">
                    <label for="" class="small-label"> اسم المسؤول </label>
                    <input type="text" name="company_name" class="form-control"  value="{{ old('company_name') }}">
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3" v-if="membership=='company' && type=='user'">
                    <label for="" class="small-label"> رقم المسؤول </label>
                    <input type="number" name="company_number" class="form-control"  value="{{ old('company_number') }}">
                </div>
                <div class="col-12 d-flex align-items-center justify-content-center mt-3">
                    <button type="submit" class="btn btn-success">حفظ</button>
                </div>
            </div>
        </form>
    </div>
</section>
@push('js')
<script>
    let app = new Vue({
    el: "#app",
    data: {
        type:'',
        membership:''
    },
    methods: {
        
    },

});
</script>
@endpush
@endsection