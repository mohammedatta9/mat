<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>تسجيل الدخول</title>
  <!-- Normalize -->
  <link rel="stylesheet" href="{{asset('front-assets')}}/css/normalize.css" />
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{asset('front-assets')}}/css/bootstrap.min.css" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('front-assets')}}/css/all.min.css" />
  <!-- Main Faile Css  -->
  <link rel="stylesheet" href="{{asset('front-assets')}}/css/auth.css" />
  <!-- Font Google -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@500;600;700;800&display=swap"
    rel="stylesheet" />
</head>

<body>
  <div id="register-page">
    <section class="height-section-footer section-register bg-brand py-4">
      <div class="container mb-2">
        <div class="d-flex align-items-center mb-3">
          <a href="/" class="btn-icon">
            <div class="icon">
              <img src="{{asset('front-assets')}}/img/global/i-home.png" alt="">
            </div>
            الرئيسية
          </a>
        </div>
      </div>
      <x-messages></x-messages>
      <div class="container">
        <form action="{{ route('register') }}" method="POST">
          @csrf
          <!-- start step one -->
          <div v-show="step == 1">
            <div class="row row-gap-24 text-center">
              <div class=" col-md-6  ">
                <div class="card-user active">
                  <input class="inp-hidd par-inp"   @click="checkUser($event)" type="radio" v-model="user" name="type" value="user" id="">
                  <img src="{{asset('front-assets')}}/img/global/reg-icon1.png" alt="" class="logo-icon">
                  <div class="title">
                    عميل
                  </div>
                  <div class="group-type-user">
                    <div  class="card-type-user">
                      <input class="inp-hidd child-inp" @click="checkMembership($event)" type="radio" v-model="membership" name="membership"
                        value="individual" id="">
                      فرد
                    </div>
                    <div  class="card-type-user">
                      <input class="inp-hidd child-inp" @click="checkMembership($event)" type="radio" v-model="membership" name="membership"
                        value="company" id="">
                      شركات
                    </div>
                  </div>
                </div>
              </div>
              <div class=" col-md-6  ">
                <div  class="card-user">
                  <input class="inp-hidd par-inp" @click="checkUser($event)" type="radio" v-model="user" name="type" value="vendor" id="">
                  <img src="{{asset('front-assets')}}/img/global/reg-icon1.png" alt="" class="logo-icon">
                  <div class="title">
                    مقدم خدمة
                  </div>
                  <div class="group-type-user">
                    <div class="card-type-user">
                      <input class="inp-hidd child-inp"  @click="checkMembership($event)" type="radio" v-model="membership" name="membership"
                        value="individual" id="">
                      فرد
                    </div>
                    <div  class="card-type-user">
                      <input class="inp-hidd child-inp" type="radio" @click="checkMembership($event)" v-model="membership" name="membership"
                        value="company" id="">
                      شركات
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="" v-if="errors.length>0">
              <div class="alert alert-danger" v-for="(error,key) in errors" :key='key'>@{{ error }}</div>
            </div>
            <div class="mt-4 d-flex justify-content-center ">
              <button @click.prevent="increaseStep()" class="button btn next_btn rounded-pill">
                التالي
              </button>
            </div>
            <div class=" d-flex justify-content-center mt-2  ">
              <a href="" class="fw-bold main-color">
                لديك حساب بالفعل؟
              </a>
            </div>
          </div>
          <!-- end step one -->

          <!-- start step two -->
          <div v-show="step == 2" class="content-step-2">
            <div class="  d-flex align-items-center flex-wrap gap-5 justify-content-between">
              <h4 class="main-color fw-bold">
                انشاء حساب
              </h4>
              <div class="bar-type-user d-flex  align-items-center items-title ">
                <div class="title-type-user  " :class="[user == 'user' ? 'active' :'']">عميل</div>
                <div class="mx-2">|</div>
                <div class="title-type-user  " :class="[user == 'vendor' ? 'active' :'']">مقدم خدمة</div>
                <div class="mx-2">|</div>
                <div class="title-type-user "> محكم</div>
              </div>
            </div>
            <div class="box-register">
              <p class=" mb-4 d-block fw-bold text-color-dark text-fs-3">
                نرجو التأكد بإضافة البيانات الصحيحة لكي يتم التفعيل المباشر للعضوية
              </p>
              <form action="">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="mb-4">
                      <label for="">الاسم الأول <span class="text-danger">*</span></label>
                      <input type="text" required class=" form-control" name="first_name" value="{{ old('first_name') }}"
                        v-model="first_name">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mb-4">
                      <label for="">اسم الأب <span class="text-danger">*</span></label>
                      <input type="text" required class=" form-control" name="second_name" value="{{ old('second_name') }}"
                        v-model="second_name">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mb-4">
                      <label for="">اسم الجد <span class="text-danger">*</span></label>
                      <input type="text" required class=" form-control" name="third_name" value="{{ old('third_name') }}"
                        v-model="third_name">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <label for="">الاسم الأخير <span class="text-danger">*</span></label>
                    <div class="mb-4">
                      <input type="text" required class=" form-control" name="last_name" value="{{ old('last_name') }}"
                        v-model="last_name">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mb-4">
                      <label for="">الاسم الكامل <span class="text-danger">*</span></label>
                      <input type="text" required class=" form-control" v-model="fullName">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mb-4">
                      <label for=""> رقم الهوية <span class="text-danger">*</span></label>
                      <input type="number" required class=" form-control" name="id_number" value="{{ old('id_number') }}">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mb-4">
                      <label for="">رقم الجوال <span class="text-danger">*</span></label>
                      <input type="text" required class=" form-control" name="phone" value="{{ old('phone') }}">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mb-4">
                      <label for=""> البريد الالكتروني <span class="text-danger">*</span></label>
                      <input type="email" required class=" form-control" name="email" value="{{ old('email') }}">
                    </div>
                  </div>
                  <div class="col-lg-12">

                    <div class="">
                      <label for=""> كلة المرور <span class="text-danger">*</span></label>
                      <input type="password" required class=" form-control" name="password">
                    </div>
                  </div>

                </div>
                <p for="" class="group-cheack">
                  <input type="checkbox" required id="" name="agree">
                  موافقة علي تعلميات التسجيل
                  <span class="text-danger">*</span>
                </p>
                <input type="submit" class="submit w-100" value="انشاء حساب">
                <button @click="step--" class="submit w-100 bg-secondary mt-2">رجوع</button>
              </form>
            </div>
          </div>
        </form>

        <!-- end step two -->
      </div>

    </section>
    <!-- Start Footer -->
    <footer class="main-footer">
      <div class="container d-flex align-items-center justify-content-between gap-5 flex-column flex-md-row">
        <div class="d-flex align-items-center gap-3">
          <img src="{{asset('front-assets')}}/img/global/home-logo.png" alt="" class="logo" />
          <div class="d-flex align-items-center gap-3 flex-wrap">
            <a href="">سياسة الأستخدام و الخصوصية</a>
            <a href="#">أتصل بنا</a>
            <a href="#">من موثوق؟</a>
          </div>
        </div>
        <div class="d-flex align-items-center gap-3 flex-column">
          <b>جميع الحقوق محفوظة موثوق 2022</b>
          <div class="social d-flex align-items-center gap-2 justify-content-center">
            <a class="item" href="#">
              <i class="fa-brands fa-facebook-f"></i>
            </a>
            <a class="item" href="#">
              <i class="fa-brands fa-twitter"></i>
            </a>
            <a class="item" href="#">
              <i class="fa-brands fa-instagram"></i>
            </a>
            <a class="item" href="#">
              <i class="fa-brands fa-snapchat"></i>
            </a>
            <a class="item" href="#">
              <i class="fa-brands fa-linkedin-in"></i>
            </a>
          </div>
        </div>
        <div class="second-logo-holder">
            <a href="https://maroof.sa/249827">
                <img src="{{asset('front-assets')}}/img/global/Image-cr.webp" alt="marof-logo" width="110">
            </a>
        </div>
      </div>
    </footer>
    <!-- End Footer -->
  </div>
  <!-- Js Files -->
  <script src="{{asset('js/vue.js')}}"></script>
  <script>
    let registerPage = new Vue({
    el: "#register-page",
    data: {
        step:1,
        user:'user',
        membership:'',
        first_name:'',
        second_name:'',
        third_name:'',
        last_name:'',
        errors:[]
    },
    computed:{
      fullName(){
        return this.first_name+' '+this.second_name+' '+this.third_name+' '+this.last_name
      }
    },
    methods: {

        checkUser(evt) {
            var inpUser = evt.target;
                    var cards = document.querySelectorAll(".card-user");
                cards.forEach(card => {
                    card.classList.remove("active")
                });
                inpUser.closest(".card-user").classList.add("active")
        },
        checkMembership(evt) {
            var inp = evt.target;
                var cards = document.querySelectorAll(".card-type-user");
                cards.forEach(card => {
                    card.classList.remove("active")
                });
                inp.closest(".card-type-user").classList.add("active")
        },
        increaseStep(){
          this.errors=[]
          if(!this.user){
            this.errors.push('يجب تحديد نوع حساب المستخدم')
          }
          if(!this.membership){
            this.errors.push('يجب تحديد نوع عضوية المستخدم')
          }
          if(this.errors.length==0){
            this.step++
          }
        }
    },
    mounted() {
      this.first_name="{{ old('first_name') }}"
      this.second_name="{{ old('second_name') }}"
      this.third_name="{{ old('third_name') }}"
      this.last_name="{{ old('last_name') }}"
  },
});

  </script>
  <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('js/main.js')}}"></script>
  <script src="{{asset('js/all.min.js')}}"></script>
</body>

</html>
