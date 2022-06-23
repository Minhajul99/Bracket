<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{ asset('frontend') }}/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="{{ asset('frontend') }}/js/vendor/jquery-3.6.0.min.js"></script>
<script src="{{ asset('frontend') }}/js/vendor/jquery-migrate-3.3.0.min.js"></script>
<script src="{{ asset('frontend') }}/js/vendor/bootstrap.bundle.min.js"></script>
<script src="{{ asset('frontend') }}/js/plugins/slick.js"></script>
<script src="{{ asset('frontend') }}/js/plugins/jquery.syotimer.min.js"></script>
<script src="{{ asset('frontend') }}/js/plugins/waypoints.js"></script>
<script src="{{ asset('frontend') }}/js/plugins/wow.js"></script>
<script src="{{ asset('frontend') }}/js/plugins/perfect-scrollbar.js"></script>
<script src="{{ asset('frontend') }}/js/plugins/magnific-popup.js"></script>
<script src="{{ asset('frontend') }}/js/plugins/select2.min.js"></script>
<script src="{{ asset('frontend') }}/js/plugins/counterup.js"></script>
<script src="{{ asset('frontend') }}/js/plugins/jquery.countdown.min.js"></script>
<script src="{{ asset('frontend') }}/js/plugins/images-loaded.js"></script>
<script src="{{ asset('frontend') }}/js/plugins/isotope.js"></script>
<script src="{{ asset('frontend') }}/js/plugins/scrollup.js"></script>
<script src="{{ asset('frontend') }}/js/plugins/jquery.vticker-min.js"></script>
<script src="{{ asset('frontend') }}/js/plugins/jquery.theia.sticky.js"></script>
<script src="{{ asset('frontend') }}/js/plugins/jquery.elevatezoom.js"></script>
<!-- Template  JS -->
<script src="{{ asset('frontend') }}/js/main.js?v=5.2"></script>
<script src="{{ asset('frontend') }}/js/shop.js?v=5.2"></script>

{{-- ADD TO CART JS --}}
<!-- Manual System To Add,Delete And View Cart -->
<!--
    <script>

    // For View Cart Item

    showitem();
    function showitem(){
        {{-- @if (!Auth::check()){
            var uid= 'sessionid'
        }
        @else{
            var uid ={{Auth::user()->id}};
        }
        @endif --}}

         $.ajax({
            url:'cart/itemtocart/'+ uid,
            type:'get',
            dataType:'json',
            success:function(result){
                if(result.status == 'success'){
                    jQuery(".cartItem").html('');
                    var totalAmount=0;
                    var qnt=0;
                    $.each(result.data, function (key, item) {
                        jQuery(".cartItem").append('<li>\
                                            <div class="shopping-cart-img">\
                                                <a href="shop-product-right.html"><img alt="Nest"\
                                                        {{-- src="{{ asset("backend/items")}}/'+item.pic+'"></a>\ --}}
                                            </div>\
                                            <div class="shopping-cart-title">\
                                                <h4><a href="shop-product-right.html">'+ item.title + '</a></h4>\
                                                <h4><span>'+ item.qnt +' × </span>'+ item.price + '</h4>\
                                            </div>\
                                            <div class="shopping-cart-delete">\
                                                <button type="button" value="'+item.id+'" class="deleteItem"><i class="fi-rs-cross-small"></i></button>\
                                            </div>\
                                        </li>');
                                        totalAmount=totalAmount+item.price;
                                        qnt=qnt+item.qnt;
                    });
                    jQuery(".totalAmount").text('$'+totalAmount);
                    jQuery(".qnt").text(qnt);
                }
                else{
                    jQuery(".cartItem").append('<li> Data Not Found </li>');
                }
            },

        });
}
// For Delete Cart Item
        jQuery(document).on('click','.deleteItem', function(e){

            e.preventDefault();
            var id= jQuery(this).val();
             $.ajax({
                url:'cart/deleteitem/'+id,
                type:'get',
                dataType:'json',
                success:function(result){
                    if(result.status == 'success'){
                    showitem();
                    }

                },
             });
        });

// For Add to Cart js
    {{-- @foreach ($items as $item)
        jQuery(".addcart{{ $item->id }}").click(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            // if (!Auth::check()){var uid= 'sessionid'}
            // else{var uid ={{Auth::user()->id}};}
            var uid = {{ Auth::user()->id }};
            var pid = jQuery(".pid{{ $item->id }}").val();
            var title = jQuery(".title{{ $item->id }}").val();
            var price = jQuery(".price{{ $item->id }}").val();
            var qnt = jQuery(".qnt{{ $item->id }}").val();
            var pic = jQuery(".pic{{ $item->id }}").val();
            $.ajax({
                url: 'cart/add',
                type: 'post',
                dataType: 'json',
                data: {
                    'uid': uid,
                    'pid': pid,
                    'title': title,
                    'price': price,
                    'qnt': qnt,
                    'pic': pic,
                },
                success: function(result) {
                    showitem();
                    alert(result.msg);
                }
            });
        });
    @endforeach --}}
</script>
-->
