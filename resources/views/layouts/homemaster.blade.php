<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
     <!--styles -->
     <link href="{{asset('assets/home/css/bootstrap.min.css')}}" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />     <link href="{{asset('assets/home/js/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
     <link href="{{asset('assets/home/js/owl-carousel/owl.theme.css')}}" rel="stylesheet">
     <link href="{{asset('assets/home/js/owl-carousel/owl.transitions.css')}}" rel="stylesheet">
     <link href="{{asset('assets/home/css/magnific-popup.css')}}" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="{{asset('assets/home/css/animate.css')}}" />
     <link rel="stylesheet" href="{{asset('assets/home/css/etlinefont.css')}}">
     <link href="{{asset('assets/home/css/style.css')}}" type="text/css"  rel="stylesheet"/>
     <link rel = "stylesheet" href = "{{asset('assets/home/font/fonts.css')}}">
     <!-- normalize css -->
     <!-- custom css -->

     <style>
             
.toggle>input[type="radio"] {
    position: absolute;
    opacity: 0;       
}


.toggle>label {
    min-width: 170px;
    padding: 30px;
    text-align: center;
    cursor: pointer;
    font-weight: bold;
    text-transform:uppercase;
}

.toggle>label:hover {
color:#5995fd;
}

     </style>
    <title>  ATRST - @yield('title')</title>
 </title>
</head>
<body>
<div id="pageloader">   
        <div class="loader">
          <img src="{{asset('assets/home/images/progress.gif')}}" alt='loader' />
        </div>
</div>
@include('layouts.homeinc.header-home')
@include('layouts.homeinc.home-navbar')

<main class="py-4">
@yield('content')
</main>
@include('layouts.homeinc.home-footer')


<script type="text/javascript" src="{{asset('assets/home/js/jquery-1.11.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/home/js/bootstrap.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('assets/home/js/owl-carousel/owl.carousel.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/home/js/jquery.flexslider-min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/home/js/jquery.magnific-popup.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/home/js/easing.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/home/js/jquery.easypiechart.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/home/js/jquery.appear.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/home/js/jquery.parallax-1.1.3.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/home/js/jquery.mixitup.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/home/js/custom.js')}}"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

<script src=" {{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>


<script>
        jQuery(document).ready(function($) {
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });
        });
    </script>
<script>
    var x = document.getElementById("entreprise");
    x.style.display = "none";
    function fentreprise() {
    x.style.display = "block";
    y.style.display = "none";
            } 
    var y = document.getElementById("chercheur");
    y.style.display = "none";
    function fchercheur() {
    y.style.display = "block";
    x.style.display = "none";
             } 
</script>
        <script src = "js/script.js"></script>
        <script>
                var x = document.getElementById("entreprise");
                x.style.display = "none";
                function fentreprise() {
                x.style.display = "block";
                y.style.display = "none";
                        } 
                var y = document.getElementById("chercheur");
                y.style.display = "none";
                function fchercheur() {
                y.style.display = "block";
                x.style.display = "none";
                         } 
</script>
        

<script>
$(document).ready(function(){

fetch_customer_data();

function fetch_customer_data(wilaya = '')
{
 $.ajax({
  url:"{{ route('live_search.action') }}",
  method:'GET',
  data:{wilaya:query},
  dataType:'json',
  success:function(data)
  {
   $('tbody').html(data.table_data);
   $('#total_records').text(data.total_data);
  }
 })
}

$(document).on('keyup', '#search', function(){
 var query = $(this).val();
 fetch_customer_data(query);
});
});

</script>

</body>
</html>