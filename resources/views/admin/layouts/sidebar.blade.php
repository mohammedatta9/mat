<div class="sidebar">
  <div class="close tog-nav">
    <i class="fas fa-xmark"></i>
  </div>
  <img src="{{ asset('admin-assets/img/home-logo.png') }}" alt="" class="logo" />
  <ul class="list">
    <li class="list-item active">
      <a href="">
        <i class="fa-solid fa-desktop icon"></i>
        الواجهة
      </a>
    </li>
    <li class="list-item">
      <a data-bs-toggle="collapse" href="#notices" aria-expanded="false">
        <i class="fa-solid fa-bell icon"></i>
        الإشعارات الإدارية
        <div class="badge-count">0</div>
        <i class="fa-solid fa-angle-down"></i>
      </a>
    </li>
    <div class="collapse item-collapse" id="notices">
      <li class="list-item">
        <a href="">
          <i class="fa-solid fa-bell icon"></i>

          الكل
          <div class="badge-count">0</div>
        </a>
      </li>
      <li class="list-item">
        <a href="">
          <i class="fa-solid fa-bell icon"></i>

          عميل جديد
          <div class="badge-count">0</div>
        </a>
      </li>
      <li class="list-item">
        <a href="">
          <i class="fa-solid fa-bell icon"></i>

          مقمد خدمه جديد
          <div class="badge-count">0</div>
        </a>
      </li>
      <li class="list-item">
        <a href="">
          <i class="fa-solid fa-bell icon"></i>

          طلب جديد
          <div class="badge-count">0</div>
        </a>
      </li>
      <li class="list-item">
        <a href="">
          <i class="fa-solid fa-bell icon"></i>

          تذكرة دعم فني
          <div class="badge-count">0</div>
        </a>
      </li>
      <li class="list-item">
        <a href="">
          <i class="fa-solid fa-bell icon"></i>

          اعتراض جديد
          <div class="badge-count">0</div>
        </a>
      </li>
      <li class="list-item">
        <a href="">
          <i class="fa-solid fa-bell icon"></i>

          طلب تسليم
          <div class="badge-count">0</div>
        </a>
      </li>
      <li class="list-item">
        <a href="">
          <i class="fa-solid fa-bell icon"></i>

          طلب شحن رصيد
          <div class="badge-count">0</div>
        </a>
      </li>
      <li class="list-item">
        <a href="">
          <i class="fa-solid fa-bell icon"></i>

          طلب سحب رصيد
          <div class="badge-count">0</div>
        </a>
      </li>
    </div>
    <li class="list-item">
      <a data-bs-toggle="collapse" href="#user-notices" aria-expanded="false">
        <i class="fa-solid fa-bell icon"></i>
        إشعارات الاعضاء
        <i class="fa-solid fa-angle-down"></i>
      </a>
    </li>
    <div class="collapse item-collapse" id="user-notices">
      <li class="list-item">
        <a href="{{ route('admin.notifications.index') }}">
          <i class="fa-solid fa-bell icon"></i>

          الكل
        </a>
      </li>
    </div>
    <li class="list-item">
      <a data-bs-toggle="collapse" href="#settings" aria-expanded="false">
        <i class="fa-solid fa-gear icon"></i>
        الاعدادات
        <i class="fa-solid fa-angle-down"></i>
      </a>
    </li>

    <div class="collapse item-collapse" id="settings">
      <li class="list-item">
        <a href="{{route('admin.settings.index')}}">
          <i class="fa-solid fa-gears icon"></i>
          الاعدادات العامة
        </a>
      </li>
      <li class="list-item">
        <a href="">
          <i class="fa-solid fa-gears icon"></i>
          اعدادات المنصة
        </a>
      </li>
      <li class="list-item">
        <a href="">
          <i class="fa-solid fa-list icon"></i>
          الاقسام
        </a>
      </li>
      <li class="list-item">
        <a href="">
          <i class="fa-solid fa-box icon"></i>
          الطلبات
        </a>
      </li>
      <li class="list-item">
        <a href="">
          <i class="fa-solid fa-sliders icon"></i>
          اعدادت العضويات
        </a>
      </li>
      <li class="list-item">
        <a href="">
          <i class="fa-solid fa-comment-sms icon"></i>
          اعدادت الرسائل sms
        </a>
      </li>
      <li class="list-item">
        <a href="">
          <i class="fa-solid fa-money-check-dollar icon"></i>
          اعدادت بوابة الدفع
        </a>
      </li>
      <li class="list-item">
        <a href="">
          <i class="fa-regular fa-comment-dots icon"></i>
          حسابات التواصل
        </a>
      </li>
    </div>
    <li class="list-item">
      <a data-bs-toggle="collapse" href="#admins" aria-expanded="false">
        <i class="fa-solid fa-users-gear icon"></i>
        المشرفين
        <i class="fa-solid fa-angle-down"></i>
      </a>
    </li>
    <div class="collapse item-collapse" id="admins">
      <li class="list-item">
        <a href="">
          <i class="fa-solid fa-users-gear icon"></i>
          كل المشرفين
        </a>
      </li>
      <li class="list-item">
        <a href="">
          <i class="fa-solid fa-user-pen icon"></i>
          صلاحيات المشرفين
        </a>
      </li>
    </div>
    <li class="list-item">
      <a data-bs-toggle="collapse" href="#users" aria-expanded="false">
        <i class="fa-solid fa-users icon"></i>
        المستخدمين
        <i class="fa-solid fa-angle-down"></i>
      </a>
    </li>
    <div class="collapse item-collapse" id="users">
      <li class="list-item">
        <a href="{{ route('admin.users.index') }}">
          <i class="fa-solid fa-user icon"></i>
          الاعضاء
          <div class="badge-count">{{ App\Models\User::count() }}</div>
        </a>
      </li>
      <li class="list-item">
        <a href="">
          <i class="fa-solid fa-building-user icon"></i>
          اعضاء الشركات
          <div class="badge-count">0</div>
        </a>
      </li>
      <li class="list-item">
        <a href="">
          <i class="fa-solid fa-user-tie icon"></i>
          المحامي
          <div class="badge-count">0</div>
        </a>
      </li>
      <li class="list-item">
        <a href="">
          <i class="fa-solid fa-landmark icon"></i>
          محامي الشركات
          <div class="badge-count">0</div>
        </a>
      </li>
      <li class="list-item">
        <a href="">
          <i class="fa-solid fa-user-shield icon"></i>

          المحكم
          <div class="badge-count">0</div>
        </a>
      </li>
    </div>
    <li class="list-item">
      <a data-bs-toggle="collapse" href="#orders" aria-expanded="false">
        <i class="fa-solid fa-cart-flatbed-suitcase icon"></i>
        الطلبات
        <i class="fa-solid fa-angle-down"></i>
      </a>
    </li>
    <div class="collapse item-collapse" id="orders">
      <li class="list-item">
        <a href="">
          <i class="fa-solid fa-cart-flatbed-suitcase icon"></i>
          كل الطلبات
        </a>
      </li>
    </div>
    <li class="list-item">
      <a data-bs-toggle="collapse" href="#contracts" aria-expanded="false">
        <i class="fa-solid fa-file-contract icon"></i>
        عقود التوثيق
        <i class="fa-solid fa-angle-down"></i>
      </a>
    </li>
    <div class="collapse item-collapse" id="contracts">
      <li class="list-item">
        <a href="">
          <i class="fa-solid fa-file-contract icon"></i>
          عقود التوثيق
        </a>
      </li>
    </div>
    <li class="list-item">
      <a data-bs-toggle="collapse" href="#services" aria-expanded="false">
        <i class="fa-solid fa-network-wired icon"></i>
        خدمات الموقع
        <i class="fa-solid fa-angle-down"></i>
      </a>
    </li>
    <div class="collapse item-collapse" id="services">
      <li class="list-item">
        <a href="{{ route('admin.countries.index') }}">
          <i class="fa-solid fa-window-maximize icon"></i>
          الدول
        </a>
      </li>
      <li class="list-item">
        <a href="{{ route('admin.cities.index') }}">
          <i class="fa-solid fa-window-maximize icon"></i>
          المدن
        </a>
      </li>
      <li class="list-item">
        <a href="{{ route('admin.departments.index') }}">
          <i class="fa-solid fa-window-maximize icon"></i>
          الأقسام
        </a>
      </li>
       <li class="list-item">
        <a href="{{ route('admin.questions') }}">
          <i class="fa-solid fa-file-contract icon"></i>
          الاسئله الشائعة  
        </a>
      </li>
       <li class="list-item">
        <a href="">
          <i class="fa-solid fa-window-maximize icon"></i>
          صفحات الموقع
        </a>
      </li>
    </div>
    <li class="list-item">
      <a data-bs-toggle="collapse" href="#support" aria-expanded="false">
        <i class="fa-solid fa-headset icon"></i>
        الدعم الفني
        <i class="fa-solid fa-angle-down"></i>
      </a>
    </li>
    <div class="collapse item-collapse" id="support">
      <li class="list-item">
        <a href="">
          <i class="fa-solid fa-ticket icon"></i>
          التذاكر
        </a>
      </li>
      <li class="list-item">
        <a href="">
          <i class="fa-solid fa-message icon"></i>
          رسائل الدعم
        </a>
      </li>
    </div>
    <li class="list-item">
      <a data-bs-toggle="collapse" href="#contact" aria-expanded="false">
        <i class="fa-solid fa-phone-flip icon"></i>
        اتصل بنا
        <i class="fa-solid fa-angle-down"></i>
      </a>
    </li>
    <div class="collapse item-collapse" id="contact">
      <li class="list-item">
        <a href="">
          <i class="fa-solid fa-download icon"></i>
          صادر
        </a>
      </li>
      <li class="list-item">
        <a href="">
          <i class="fa-solid fa-upload icon"></i>
          وارد
        </a>
      </li>
    </div>
  </ul>
</div>