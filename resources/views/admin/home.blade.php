@extends('admin.layouts.admin')
@section('title','الرئيسية')
@section('content')
<section class="py-5">
    <nav aria-label="breadcrumb ">
        <ol class="breadcrumb bg-light p-3">
            <li href="" class="breadcrumb-item" aria-current="page">
                الرئيسية
            </li>
        </ol>
    </nav>
    <div class="section_content">
    <div class="status_section mb-3">
        <div class="row g-2">
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="status_box blue-box">
                    <div class="data">
                        <h3>1000</h3>
                        <p class="mb-3">كل الطلبات</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-chart-column blue-icon"></i>
                    </div>
                    <a href="#" class="more">
                        <i class="fa-solid fa-circle-arrow-right"></i>
                        المزيد من المعلومات
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="status_box success-box">
                    <div class="data">
                        <h3>15222</h3>
                        <p class="mb-3">كل الاعضاء</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-people-roof success-icon"></i>
                    </div>
                    <a href="#" class="more">
                        <i class="fa-solid fa-circle-arrow-right"></i>
                        المزيد من المعلومات
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="status_box danger-box">
                    <div class="data">
                    <h3>2300</h3>
                        <p class="mb-3">كل المحامين</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-user-shield danger-icon"></i>
                    </div>
                    <a href="#" class="more">
                    <i class="fa-solid fa-circle-arrow-right"></i>
                        المزيد من المعلومات
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="status_box warning-box">
                    <div class="data">
                        <h3>
                        16222
                        </h3>
                        <p class="mb-3">كل المحكمين</p>
                    </div>
                    <div class="icon">
                    <i class="fa-solid fa-users-line warning-icon"></i>
                    </div>
                    <a href="#" class="more">
                    <i class="fa-solid fa-circle-arrow-right"></i>
                        المزيد من المعلومات
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">


        <section class="col-lg-7 connectedSortable ui-sortable">
            <div class="card">
                <div class="card-header ui-sortable-handle bg-white d-flex justify-content-between">
                    <div class="card-tools">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Home</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</button>
                            </li>
                        </ul>
                    </div>
                    <h3 class="card-title">
                        <i class="fas fa-chart-pie mr-1"></i>
                        Sales
                    </h3>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                            <canvas id="myChartDate" height="100"></canvas>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                            <canvas id="myChartDot"  height="100"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="col-lg-5 connectedSortable ui-sortable">

        </section>
    </div>
    </div>
</section>
@push('js')
<!-- Chart Js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<script>
var xValues = ["January","February","March","April","may","June","July"];

new Chart("myChartDate", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      data: [860,1140,1060,1060,1070,1070,1070],
      borderWidth: "1px",
      pointRadius: 0,
      borderColor: "#4B94BF",
            backgroundColor: "rgba(75, 148, 191, 0.7)",
      fill: true
    }, {
      data: [1600,1700,1700,1900,2000,2700,4000],
      borderColor: "rgba(210 ,214, 223, 1)",
      borderWidth: "1px",
      backgroundColor: "rgba(210 ,214, 223, 0.7)",
      pointRadius: 0,

      fill: true
    }]
  },
  options: {
    legend: {display: false}
  }
});


new Chart("myChartDot", {
  type: "doughnut",
  data: {
    labels: [
    'Red',
    'Blue',
    'Yellow'
  ],
    datasets: [{
        label: 'My First Dataset',
        data: [30, 20, 12],
        backgroundColor: [
        '#f56954',
        '#f39c12',
        '#00a65a'
        ],
        hoverOffset: 4
    }]
  },
  options: {
    legend: {display: false}
  }
});



</script>

@endpush
@stop
