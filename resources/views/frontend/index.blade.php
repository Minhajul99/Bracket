<!--Head-->
@include('frontend.includes.head')
<body>
    <!--Modal-->
    @include('frontend.includes.modal')
    <!-- Quick view -->
    @include('frontend.includes.quickview')
    <!-- Header -->
    @include('frontend.includes.header')
    <!-- Sub Header -->
    @include('frontend.includes.subheader')

    <main class="main">
        <!-- Home Slider -->
        @include('frontend.includes.homeslider')
        <!-- Category slider-->
        @include('frontend.includes.categoryslider')
        <!-- Banners-->    
        @include('frontend.includes.banner')
        <!-- Products Tabs-->  
        @include('frontend.includes.productstabs')
        <!-- Best Sales-->
        @include('frontend.includes.bestsales')
        <!-- Deals-->
        @include('frontend.includes.deals')
        <!--End 4 columns-->
    </main>

    <!-- Footer-->
    @include('frontend.includes.footer')
    <!-- Preloader -->
    @include('frontend.includes.preloader')
    <!-- Scripts Vendor JS-->
    @include('frontend.includes.scripts')
</body>

</html>