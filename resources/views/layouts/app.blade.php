<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="V4UAP5iwMy6NPO3Jcj6edJi19nEP5kxyCm4J92Rq">
    <title>E Commerce</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css"
          integrity="sha512-vebUliqxrVkBy3gucMhClmyQP9On/HAWQdKDXRaAlb/FKuTbxkjPKUyqVOxAcGwFDka79eTF+YXwfke1h3/wfg=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./styles/virtual-select.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('styles/vendor.css')}}">
    <link rel="stylesheet" href="{{asset('styles/aiz-core.css')}}">
    <link rel="stylesheet" href="{{asset('styles/styles.css')}}">
    <link rel="stylesheet" href="{{asset('styles/colors.css')}}">
    <link rel="stylesheet" href="{{asset('styles/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
    <link rel="stylesheet" href="{{asset('css/product-details.css')}}">
    <script src="{{asset('js/image.js')}}"></script>
    <script src="{{asset('js/footer.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/virtual-select.min.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
</head>

<body>
<!--pre loader start-->
<div class="preloader-wrapper">
    <div class="preloader">
    </div>
    <div class="flag">
        <img width="60px" src="./images/icons/srilanka.png" alt="">
    </div>
</div>
@include('layouts.site_includes.header')
<div class="aiz-main-wrapper d-flex flex-column bg-white">
@yield('content')
</div>
@include('layouts.site_includes.footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-qFOQ9YFAeGj1gDOuUD61g3D+tLDv3u1ECYWqT82WQoaWrOhAY+5mRMTTVsQdWutbA5FORCnkEPEgU0OF8IzGvA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"></script>
<script src="https://demo.activeitzone.com/ecommerce/public/assets/js/vendors.js"></script>
<script src="https://demo.activeitzone.com/ecommerce/public/assets/js/aiz-core.js?v=2299"></script>
</body>

</html>



<script>
    function clickToSlide(btn, id) {
        $('#' + id + ' .aiz-carousel').find('.' + btn).trigger('click');
        $('#' + id + ' .slide-arrow').removeClass('link-disable');
        var arrow = btn == 'slick-prev' ? 'arrow-prev' : 'arrow-next';
        if ($('#' + id + ' .aiz-carousel').find('.' + btn).hasClass('slick-disabled')) {
            $('#' + id).find('.' + arrow).addClass('link-disable');
        }
    }
</script>


<script>
    $(document).ready(function () {
        var isModalDisplayed = localStorage.getItem("isModalDisplayed");

        if (!isModalDisplayed) {
            showPopupModal();
            localStorage.setItem("isModalDisplayed", true);
        }
    });

    function showPopupModal() {
        $('.website-popup').removeClass('d-none');
    }
</script>
