<footer class="main-footer">
    <div class="container d-flex align-items-center justify-content-between gap-5 flex-column flex-md-row">
        <div class="d-flex align-items-center gap-3 flex-wrap">
            <a href="">سياسة الأستخدام و الخصوصية</a>
            <a href="#">أتصل بنا</a>
            <a href="#">من موثوق؟</a>
        </div>
        <div class="d-flex align-items-center gap-3 flex-column">
            <b>جميع الحقوق محفوظة موثوق 2022</b>
        </div>
        <a href="" class="logo-sm">
            <img src="{{ asset('front-assets/img/global/Image-cr.webp') }}" alt="" />
        </a>
    </div>
</footer>
<!-- End Footer -->
<!-- Js Files -->
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/all.min.js') }}"></script>
@stack('js')
</body>

</html>