

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <style>
.red {
    color:red;
}
.green {
    color:green;
}
</style>
    
    <title> DASHBOARD - @yield('title')</title>

    <!-- Custom fonts for this template-->

    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="{{ asset('assets/css/sb-admin-2.css')}}" rel="stylesheet">

        </head>


<body id="page-top">

    @include('layouts.partenaireinc.user-navbar')
<main>
    @yield('content')

</main>



    
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('assets/vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('assets/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{ asset('assets/js/demo/chart-pie-demo.js')}}"></script>

<style>

</style>

<script>
    var x = document.getElementById("formejurDIV");
    x.style.display = "none";
    function formejurF() {
    x.style.display = "block";} 
function formejurF2() {
    x.style.display = "none";} 

    var z1 = document.getElementById("proprietyentDIV");
    z1.style.display = "none";
    function proprietyentF() {
    z1.style.display = "block";} 
function proprietyentF2() {
    z1.style.display = "none";} 

    var t = document.getElementById("typetrDIV");
    t.style.display = "none";
    function typetrF() {
    t.style.display = "block";} 
function typetrF2() {
    t.style.display = "none";} 

    var e = document.getElementById("domaineactentrDIV");
    e.style.display = "none";
    function domaineactentrF() {
    e.style.display = "block";} 
function domaineactentrF2() {
    e.style.display = "none";} 

    var s = document.getElementById("secteuractDIV");
    s.style.display = "none";
    function secteuractF() {
    s.style.display = "block";} 
function secteuractF2() {
    s.style.display = "none";} 

    var d = document.getElementById("myDIV2");
    d.style.display = "none";
    function rnds() {
    d.style.display = "block";} 
function rndh() {
    d.style.display = "none";} 
    var v = document.getElementById("myDIV3");
    v.style.display = "none";
    function myFunction33() {
    v.style.display = "block";} 
function myFunction23() {
    v.style.display = "none";} 



</script>

<script>
var a = document.getElementById("myDIV");
    a.style.display = "none";
    function myFunction() {
    a.style.display = "block";} 
    function myFunction2() {
    a.style.display = "none";}
</script>
</body>
@include('layouts.partenaireinc.user-footer')
</html>


