<!--Head-->
@include('frontend.includes.head')
<body>

    @include('frontend.includes.quickview')
    <!-- Header -->
    @include('frontend.includes.header')

    <main class="main">
        <!-- Home Slider -->
        @include('frontend.includes.homeslider')
        <!-- Category slider-->
        @include('frontend.includes.categoryslider')
        <!-- Banners-->
        @include('frontend.includes.banner')
        <!-- Show Products-->
        @include('frontend.includes.showproduct')
        <!-- Products Tabs-->
        {{-- @include('frontend.includes.productstabs') --}}
        <!-- Best Sales-->
        @include('frontend.includes.bestsales')
        <!-- Deals-->
        @include('frontend.includes.deals')
        <!--End 4 columns-->
    </main>

    <!-- Footer-->
    @include('frontend.includes.footer')
    @include('frontend.includes.scripts')
</body>

</html>

