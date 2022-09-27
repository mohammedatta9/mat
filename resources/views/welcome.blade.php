<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>الرئيسية</title>
    <!-- Normalize -->
    <link rel="stylesheet" href="{{asset('front-assets')}}/css/normalize.css" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('front-assets')}}/css/bootstrap.min.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('front-assets')}}/css/all.min.css" />
    <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
    <!-- Main Faile Css  -->
    <link rel="stylesheet" href="{{asset('front-assets')}}/css/home.css" />
    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@500;600;700;800&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- Start Header -->
    <header class="main-header-login">
      <div
        class="container py-3 text-start d-flex align-items-center justify-content-center justify-content-md-between"
      >
        <div
          class="group-logo d-flex align-items-center justify-content-between gap-5"
        >
          <div class="tog-home tog-active" data-active=".group-login">
            <img class="icon" src="{{asset('front-assets')}}/img/global/tog.webp" alt="" />
          </div>
          <a href="/">
            <img
              class="head-logo"
              src="{{asset('front-assets')}}/img/global/home-logo.png"
              alt=""
              srcset=""
            />
          </a>
        </div>
        <div class="group-login d-flex align-items-center gap-4">
          <a href="{{ route('login') }}" class="btn-header"> تسجيل الدخول </a>
          <a href="{{ route('register') }}" class="btn-header"> انشاء عميل | محامي </a>
          <button class="lang px-2 py-1 list-item-btn">EN</button>
        </div>
      </div>
    </header>
    <!-- End Header -->
    <!-- Start Slide Home -->
    <section class="landing">
        <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-6 bg-img">
            <img src="{{asset('front-assets')}}/img/global/Asset 6.png" alt="">
          </div>
          <div class="col-xl-6">
            <div class="text">
              <p class="title-section-home">
                منصة موثوق
              </p>
              <p class="content-text-home">
                هي منصة سعودية تعمل في مجال البحث وتوفير المحامين المعتمدين والمرخصين وضمان التعاقد بين الاطراف والحقوق الماليه الخاصة بهم بشكل آمن ومضمون
              </p>
              <div class="d-flex mb-2 align-items-center justify-content-center gap-4 flex-wrap mt-5">
                <div class="btn ">
                  <img src="{{asset('front-assets')}}/img/global/Asset 2.svg" alt="" class="btn-i">
                  طلب جديد

                </div>
                <div class="btn">
                  <img src="{{asset('front-assets')}}/img/global/Asset 3.svg" alt="" class="btn-i">
                  توثيق جديد

                </div>
              </div>
            </div>
          </div>
        </div>
        <a href="#order" class="srl-bottom">
            <i class="fa-solid fa-arrow-down-long">
                <i class="i fa-solid fa-arrow-down-long"></i>
            </i>
        </a>
        </div>
    </section>
    <!-- End Slide Home -->
    <!-- Start Service -->
    <section class="order-page-home" id="order">
      <div class="container">
        <div
          class="boxes-service d-flex flex-column flex-xl-row align-items-center"
        >
          <div class="title-service">
            الخدمات
            <br class="d-none d-xl-block" />
            القانونية
            <br />
            <i
              class="d-none d-xl-block fa-solid fa-arrow-left-long mx-auto"
            ></i>
          </div>
          <div class="items-service">
            <div class="item serv-3">
              <img src="{{asset('front-assets')}}/img/global/item-btn-1.png" alt="" />
              <p>صياغة العقود والمذكرات</p>
              <a href="#" class="btn btn-card-sm">
                أطلب آلان
                <i class="fa-solid fa-arrow-left-long"></i>
              </a>
            </div>

            <div class="item serv-2">
              <img src="{{asset('front-assets')}}/img/global/item-btn-2.png" alt="" />
              <p>التمثيل القانوني والقضائي</p>
              <a href="#" class="btn btn-card-sm">
                أطلب آلان
                <i class="fa-solid fa-arrow-left-long"></i>
              </a>
            </div>

            <div class="item serv-1">
              <img src="{{asset('front-assets')}}/img/global/serv-6.svg" alt="" />
              <p>استشارات ودراسات</p>
              <a href="#" class="btn btn-card-sm">
                أطلب آلان
                <i class="fa-solid fa-arrow-left-long"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="step-order pb-5 mt-5">
          <div class="main-lg-head">رحلة إنشاء الطلب</div>
          <div class="row align-items-center step-1 my-5 py-5">
            <div class="col-lg-6">
              <div class="content-text">
                <div class="title-text">إنشاء الطلب</div>
                <div class="p-text">
                  بعد تسجيل الدخول عبر بوابة النفاذ الوطني الموحد، يقوم العميل
                  بتعبئة البيانات المتعلقة بالخدمة المطلوبة وإختيار طريقة عرض
                  الطلب أمام المحامين.
                </div>
                <button
                  type="button"
                  data-pop-show="pop1"
                  class="btn-more btn-pop-order btn me-auto"
                >
                  <img src="{{asset('front-assets')}}/img/global/Asset 2.svg" alt="" />
                  تفاصيل أكثر
                </button>
              </div>
            </div>
            <div class="col-lg-6 text-center pop1 order-pop p-3">
              <div class="close"><i class="fa-solid fa-xmark"></i></div>
              <div class="child-pop">
                <img
                  src="{{asset('front-assets')}}/img/home/order-step-1.webp"
                  alt=""
                  class="img-stebs"
                />
              </div>
              <div class="child-pop child-pop-text me-auto">
                <div class="title-text">تفاصيل أنشاء طلب</div>
                <b class="mb-1">
                  تكون بداية إنشاء الطلب من قبل العميل عبر إختيار نوع الخدمة
                  المطلوبة مما يلي:</b
                >
                <ol>
                  <li>الاستشارات </li>
                  <li>دراسة والتحليل</li>
                  <li>كتابة والتحرير </li>
                  <li>المرافعة والمدافعة</li>
                  <li>المراجعة والتدقيق</li>
                </ol>
                <b class="m-0">
                  ومن ثم اختيار الأقسام الفرعية لكل مما سبق وعلى سبيل المثال بعد
                  اختيار خدمة الاستشارات (اداري, تجاري, جمركي,...). بعد ذلك
                  ينتقل العميل إلى خطوة التالية لتسجيل الطلب وهي تعبئة  بيانات
                  الطلب التي تشمل:
                </b>
                <ul>
                  <li>عنوان الطلب: وهي الفكرة الرئيسية من الطلب.</li>
                  <li>
                    موضوع الطلب: هو ذكر جميع ما يتعلق بالطلب بشكل مفصل وواضح
                    وإرفاق ما يلزم من مستندات توضح الطلب لدى المحامي. وذلك
                    باختيار طريقة تقديم الطلب عبر الكتابة النصية أو عبر إرفاق
                    المستندات أو عبر التسجيل الصوتي.
                  </li>
                  <li>
                    المدة المقترحة لتنفيذه الخدمة المطلوبة: وهنا يبين العميل
                    المدة التي يحتاج إنهاء الخدمة المطلوبة خلالها ويكون له
                    الخيار في أن يجعلها غير قابلة للتفاوض والتعديل أو متاحة
                    للتفاوض من قبل المحامي. ومن ثم تأتي الخطوة التالية باختيار
                    طريقة العرض على المحامين وذلك بإتاحة اختيار الجميع أو أحدهم
                    أو أكثر من محامي، ويمكن للعميل الاطلاع على الملف الشخصي لكل
                    محامي قبل الاختيار.
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row align-items-center my-5 py-5">
            <div class="col-lg-6 text-center pop2 order-pop p-3">
              <div class="close"><i class="fa-solid fa-xmark"></i></div>
              <div class="child-pop">
                <img
                  src="{{asset('front-assets')}}/img/home/order-step-2.webp"
                  alt=""
                  class="img-stebs"
                />
              </div>
              <div class="child-pop child-pop-text me-auto">
                <div class="title-text blue">تفاصيل الاختياروالتفاوض</div>
                <b class="mb-1">
                  يبدأ الطرفين بالتفاوض بينهم بتقديم العرض من المحامي للعميل،
                  ويقوم العميل بالموافقة عليه أو التفاوض معه حول العرض المقدم،
                  إلى أن يصل الطرفين إلى نتيجة في التفاوض. والمنصة تتيح لهم
                  خيارات متعددة لتسهل عليهم مرحلة  الاختيار والتفاوض وذلك من
                  خلال ما يلي:
                </b>

                <ul>
                  <li>تحديد الأعمال المطلوبة.</li>
                  <li>تحديد المستندات المهمة.</li>
                  <li>تحديد طريقة التنفيذ لها.</li>
                  <li>تحديد المدة الزمنية لتنفيذها.</li>
                  <li>تحديد القيمة لتنفيذ تلك الخدمات المطلوبة.</li>
                </ul>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="content-text ms-xxl-5 ps-xxl-5 mt-xxl-5 pt-3">
                <div class="title-text blue">الاختياروالتفاوض</div>
                <div class="p-text">
                  أهم مرحلة للعميل ومقدم الخدمة من خلالها يقوم كل منهما بأختيار
                  الأنسب له من خلال الاطلاع على محتوى الخدمة المطلوبة لدى
                  العميل  ومن خلال البيانات الشخصية لمقدم الخدمة.

                  <button
                    type="button"
                    data-pop-show="pop2"
                    class="btn-more btn-pop-order btn ms-auto"
                  >
                    <img src="{{asset('front-assets')}}/img/global/Asset 2.svg" alt="" />
                    تفاصيل أكثر
                  </button>
                </div>
              </div>
            </div>
            <div class="row align-items-center mt-5 pt-5">
              <div class="col-lg-6">
                <div class="content-text">
                  <div class="title-text light-blue">الاتفاق</div>
                  <div class="p-text">
                    وصول العميل و المحامي لإتفاق يوثق بعقد يبين فيه الحقوق
                    والالتزامات بين الطرفين وطريقة تنفيذها.
                    <!--Btn Modal create-order-->
                    <button
                      type="button"
                      data-pop-show="pop3"
                      class="btn-more btn-pop-order btn me-auto"
                    >
                      <img src="{{asset('front-assets')}}/img/global/Asset 2.svg" alt="" />
                      تفاصيل أكثر
                    </button>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 text-center pop3 order-pop p-3">
                <div class="close"><i class="fa-solid fa-xmark"></i></div>
                <div class="child-pop">
                  <img
                    src="{{asset('front-assets')}}/img/home/order-step-3.webp"
                    alt=""
                    class="img-stebs"
                  />
                </div>
                <div class="child-pop child-pop-text me-auto">
                  <div class="title-text light-blue">تفاصيل الاتفاق</div>
                  <p class="m-0">
                    يقوم المحامي في هذه المرحلة بإعداد العقد وتعبئة بياناته التي
                    تشتمل على نطاق العمل ببيان حصر الأعمال المطلوب تنفيذها
                    والمستندات التي يحتاجها لتنفيذ تلك الأعمال وطريقة تنفيذها
                    وتسليمها للعميل وبيان مدة التنفيذ وقيمة أتعاب المحاماة ،
                    ولحفظ حقوق الأطراف يتم في هذه المرحلة الاتفاق على محكم يقوم
                    بفض المنازعات التي نشأت بينهما أثناء أو بعد تنفيذ العقد و
                    لأطراف الاتفاقية الحرية في اختيار الشخص المناسب للتحكيم (من
                    المتواجدين على المنصة أو طرف خارجي) و يشترط اتفاق الطرفين
                    على المحكم و من ثم  دفع رسوم التحكيم المستحقة له، وبعد أن
                    يتم توقيع العقد وسداد المستحقات المالية فيه يبدأ الأطراف
                    بتنفيذ التزاماتهم عبر المنصة..
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Service -->
    <!-- Start Section questions -->
    <section class="questions-page py-5">
      <div class="container">
        <div class="d-flex align-items-center flex-column flex-xl-row">
          <div class="box-one">
            <img src="{{asset('front-assets')}}/img/home/q.webp" alt="" />
            <div class="title">
              الأسئلة
              <br />
              الشائعة
            </div>
            <div class="btn btn-more">
              <img src="{{asset('front-assets')}}/img/global/Asset 2.svg" alt="" />
              تصفح جميع الأسئلة
            </div>
          </div>

          <div class="box-two">
            @foreach($questions as $q )
            <div class="box-collapse">
              <button
                class="btn-collapse"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseExample{{$q->id}}"
                aria-expanded="false"
                aria-controls="collapseExample"
              >
                {{$q->name}}
                <i class="fa-solid fa-angle-down"></i>
              </button>

              <div class="collapse" id="collapseExample{{$q->id}}">
               {{$q->result  }}
              </div>
            </div>
            @endforeach
             
          </div>
        </div>
      </div>
    </section>
    <!-- End Section questions -->
    <!-- Start Email -->
    <section class="email-page py-5">
      <div class="container">
        <div
          class="d-flex align-items-center justify-content-between gap-5 flex-column flex-lg-row"
        >
          <div class="text">
            <div class="title">القائمة البريدية</div>
            <div class="content-text">
              احصل على تحديثات مفيدة حول مكان التقاء الحياة والقانون
            </div>
          </div>
          <div class="form flex-fill">
            <form action="" method="post">
              <div class="flex-fill d-flex gap-2 flex-wrap">
                <form
                  class="w-100 d-flex align-items-center gap-3 flex-wrap"
                  action=""
                >
                  <input
                    class="flex-fill"
                    type="email"
                    name="email"
                    id=""
                    placeholder="أدخل بريدك الألكتروني"
                  />
                  <input class="sub" type="submit" value="اشترك الأن" />
                </form>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- End Email -->
    <!-- Start Footer -->
    <footer class="main-footer">
      <div
        class="container d-flex align-items-center justify-content-between gap-5 flex-column flex-md-row"
      >
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
          <div
            class="social d-flex align-items-center gap-2 justify-content-center"
          >
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
      </div>
    </footer>
    <!-- End Footer -->
    <!-- Js Files -->
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/all.min.js')}}"></script>
  </body>
</html>
