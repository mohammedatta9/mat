@extends('admin.layouts.admin')
@section('title','عرض عضو')
@section('content')
<section class="py-5 show-user">
  <nav aria-label="breadcrumb ">
    <ol class="breadcrumb bg-light p-3">
      <li href="" class="breadcrumb-item" aria-current="page">
        عرض عضو
      </li>
    </ol>
  </nav>
  <div class="content_view">
    <!-- <div class="status d-flex align-items-center gap-2 mb-3">
      <div class="status_green">اعضاء مفعلين:5</div>
      <div class="status_red">اعضاء غير مفعلين:0</div>
    </div> -->
    <div class="row row-gap-24">
      <div class="col-sm-6 col-md-4 col-lg-3">
        <label for="first_name" class="small-label">الاسم الاول</label>
        <input readonly type="text" name="first_name" value="{{ $user->first_name }}" class="form-control" id="first_name">
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <label for="second_name" class="small-label">الاسم الثاني</label>
        <input readonly type="text" value="{{ $user->second_name }}" name="second_name" class="form-control" id="second_name">
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <label for="third_name" class="small-label">الاسم الثالث</label>
        <input readonly type="text" value="{{ $user->third_name }}" name="third_name" class="form-control" id="third_name">
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <label for="last_name" class="small-label">الاسم الاخير</label>
        <input readonly type="text" value="{{ $user->last_name }}" name="last_name" class="form-control" id="last_name">
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <label for="name" class="small-label">الاسم</label>
        <input readonly type="text" value="{{ $user->name }}" name="name" class="form-control" id="name">
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <label for="email" class="small-label">البريد الالكتروني</label>
        <input type="text" readonly value="{{ $user->email }}" name="email" class="form-control" id="email">
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <label for="phone" class="small-label">رقم الجوال</label>
        <input type="text" readonly value="{{ $user->phone }}" name="phone" class="form-control" id="phone">
      </div>

      <div class="col-sm-6 col-md-4 col-lg-3">
        <label for="" class="small-label"> الصورة الشخصية </label>
        <img src="{{ asset('storage/'.$user->photo) }}" alt="" class="img-fluid">
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <label for="country" class="small-label">الدولة</label>
        <input type="text" readonly value="{{ $user->country?->name }}" name="country" class="form-control" id="country">
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <label for="city" class="small-label"> المدينة </label>
        <input type="text" readonly value="{{ $user->city?->name }}" name="city" class="form-control" id="city">
      </div>
    </div>
    <ul class="nav nav-tabs mt-4">
      <li class="nav-item">
        <a class="nav-link active" href="#">
          <div class="badge-count">0</div>
          الطلبات
          <i class="fa-solid fa-cart-flatbed-suitcase icon"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <div class="badge-count">0</div>
          العروض
          <i class="fa-solid fa-sheet-plastic"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-records" type="button">
          <div class="badge-count">{{ $user->commercials->count() }}</div>
          السجلات التجارية
          <i class="fa-regular fa-file-lines"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <div class="badge-count">0</div>
          الوظائف
          <i class="fa-solid fa-user-tie"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <div class="badge-count">0</div>
          المؤهلات
          <i class="fa-solid fa-certificate"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <div class="badge-count">0</div>
          الخبرات
          <i class="fa-solid fa-chart-simple"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-licenses" type="button">
          <div class="badge-count">{{ $user->licenses->count() }}</div>
          التراخيص
          <i class="fa-solid fa-address-card"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <div class="badge-count">0</div>
          الهوية
          <i class="fa-regular fa-address-card"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <div class="badge-count">0</div>
          الفواتير
          <i class="fa-solid fa-money-check-dollar"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <div class="badge-count">0</div>
          طلبات الشحن
          <i class="fa-solid fa-credit-card"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <div class="badge-count">0</div>
          طلبات السحب
          <i class="fa-regular fa-credit-card"></i>
        </a>
      </li>
    </ul>
    <div class="tab-pane fade" id="nav-records">
      <div class="table-responsive">
        <table class="table table-hover">
          <thead class="table-dark">
            <tr>
              <th>رقم السجل</th>
              <th>السجل</th>
              <th>تاريخ نهاية السجل</th>
              <th>إدارة</th>
            </tr>
          </thead>
          <tbody>
            @foreach($user->commercials as $commercial)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>
                <a href="" class="text-primary fs-6">
                  <i class="fa-solid fa-file-lines"></i>
                </a>
              </td>
              <td>{{$commercial->end_date}}</td>

              <td>
                <div class="d-flex gap-2">

                  <button class="btn btn-purple btn-sm">
                    <i class="fa-solid fa-eye"></i>
                  </button>
                  <button class="btn btn-danger btn-sm">
                    <i class="fa-solid fa-trash"></i>
                  </button>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <div class="tab-pane fade" id="nav-licenses">
      <div class="table-responsive">
        <table class="table table-hover">
          <thead class="table-dark">
            <tr>
              <th>رقم الرخصة</th>
              <th>الترخيص</th>
              <th>تاريخ نهاية الترخيص</th>
              <th>إدارة</th>
            </tr>
          </thead>
          <tbody>
          @foreach($user->commercials as $commercial)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>
                <a href="" class="text-primary fs-6">
                  <i class="fa-solid fa-file-lines"></i>
                </a>
              </td>
              <td>{{$commercial->end_date}}</td>

              <td>
                <div class="d-flex gap-2">

                  <button class="btn btn-purple btn-sm">
                    <i class="fa-solid fa-eye"></i>
                  </button>
                  <button class="btn btn-danger btn-sm">
                    <i class="fa-solid fa-trash"></i>
                  </button>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
@endsection
