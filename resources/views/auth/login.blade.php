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
  <div id="login-page">
    <section class="height-section-footer section-login bg-brand py-5">
      <div class="container mb-2">
        <div class="d-flex align-items-center">
          <a href="/" class="btn-icon">
            <div class="icon">
              <img src="{{asset('front-assets')}}/img/global/i-home.png" alt="">
            </div>
            الرئيسية
          </a>
        </div>
      </div>
      <div class="container ">
        <div class="box-login mx-auto">
          <div class="row w-100 mx-0 px-0 align-items-center">

            <div class="col-md-12 px-0 ">
              <div class="p-3">

                <div class=" main-color">
                  <h4 class="mb-4"> تسجيل الدخول </h4>
                </div>
                <div class="alert alert-info" v-if="checkSendCode" role="alert">
                  تم ارسال رمز التحقق بنجاح
                </div>
                <div class=" mb-4 text-center  position-relative">
                  <label class="w-100 d-flex grey-color-dark gap-2 align-items-center mb-2 text-right">
                    <i class="fas fa-phone-alt "></i>
                    <span>رقم الجوال</span>
                  </label>
                  <input type="number" class="form-control remove-arr-num" v-model="mobile">
                </div>
                <small class="text-danger" v-if="mobile_required_error">يرجى إدخال رقم الجوال</small>
                <div v-show="checkSendCode">
                  <div class="w-100 d-flex grey-color-dark fs-6 align-items-center gap-2 mb-2">
                    <i class="fas fa-hashtag"></i>
                    ادخل الكود المرسل
                    <span class="text-dark">
                      @{{ code }}
                    </span>
                  </div>
                  <div dir="ltr" class="set-id-code d-flex align-items-center justify-content-between my-3">
                    <input type="number" class="w-25 mx-3 rounded-3 text-center fw-bold inp-code" v-model="num1" id="">
                    <input type="number" class="w-25 mx-3 rounded-3 text-center fw-bold inp-code" v-model="num2" id="">
                    <input type="number" class="w-25 mx-3 rounded-3 text-center fw-bold inp-code" v-model="num3" id="">
                    <input type="number" class="w-25 mx-3 rounded-3 text-center fw-bold inp-code" v-model="num4" id="">
                    <input type="number" class="w-25 mx-3 rounded-3 text-center fw-bold inp-code" v-model="num5" id="">
                  </div>
                  <small class="text-danger" v-if="code_required_error">يرجى إدخال الكود بشكل صحيح</small>
                  <p class="mb-1">
                    <small class="ms-1"> اعادة الارسال بعد: </small>
                    <span class="timer">0: 0 </span>
                  </p>
                  <button class="btn-resend btn btn-secondary btn-sm ">اعادة ارسال
                  </button>
                </div>


                <div class="mt-2">
                  <button v-if="!checkSendCode" @click="sendMobile()" class="main-btn w-100 ">
                    دخول الأن
                  </button>
                  <button v-else @click="verifyCodeToLogin()" class="main-btn w-100 ">
                    دخول الأن
                  </button>
                </div>
                <div class="d-flex align-items-center fw-bold flex-column gap-1 my-3">
                  <a class="main-color" href="">هل نسيت الرقم السر؟</a>
                  <a class="main-color" href="">ليس لديك عضوية؟</a>
                </div>
              </div>
            </div>

          </div>
        </div>
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
  <script src="{{asset('js/axios.js')}}"></script>
  <script>
    let loginPage = new Vue({
    el: "#login-page",
    data: {
        checkSendCode:false,
        mobile:'',
        mobile_required_error:false,
        code_required_error:false,
        code:'',
        num1:'',
        num2:'',
        num3:'',
        num4:'',
        num5:'',
    },
    computed:{
      otp(){
        return this.num1+this.num2+this.num3+this.num4+this.num5
      }
    },
    methods: {
        moveCode() {
            let inpCode = document.querySelectorAll(".inp-code");
            for (let i = 0; i < inpCode.length; i++) {
                inpCode[i].addEventListener("input", () => {
                    if (i != inpCode.length - 1) {
                        inpCode[i + 1].focus()
                    }
                })
            }
        },
        sendMobile(){
              if(this.mobile){
                this.mobile_required_error=false;
                axios.post('login/sms',{'mobile':this.mobile}).then(r=>{
                this.code=r.data.code
                this.checkSendCode = true;
                 this.moveCode();
                  this.updateTheCounter()
              })
              }else{
                this.mobile_required_error=true;
              }
            },

            verifyCodeToLogin(){
              if(this.otp==this.code){
                this.code_required_error=false;
                axios.post('login/verify/sms',{'mobile':this.mobile,'otp':this.otp}).then(r=>{
                  window.location.replace('{{url('/')}}');
              })
              }else{
                this.code_required_error=true;
              }
            },

        updateTheCounter() {
                let resendBtn = document.querySelector(".btn-resend")
                const timeContainer = document.querySelector(".timer");
                timeContainer.innerHTML = "1:00";
                const startingMinute = 1;
                let totalTimeBySec = startingMinute * 60;

                const handlerTimer = setInterval(() => {
                    let min = Math.floor(totalTimeBySec / 60)
                    let sec = totalTimeBySec % 60;

                    timeContainer.innerHTML = `${sec}:  ${min}  `;
                    totalTimeBySec--;

                    if (sec === 0 && min === 0) {
                        clearInterval(handlerTimer);
                        resendBtn.style.display = 'block';
                    } else {
                        resendBtn.style.display = 'none';
                    }
                }, 1000)
            },


    },
    mounted() {
  },
});

  </script>
  <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('js/main.js')}}"></script>
  <script src="{{asset('js/all.min.js')}}"></script>
</body>

</html>
