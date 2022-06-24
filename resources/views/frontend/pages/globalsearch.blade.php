<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body style="background: gray">

    <div class="container p-5">
        <div class="row p-5">
            <div class="col-md-12 p-5 text-center m-auto">
                <h1 class="text-bold">Dream, world!</h1>
                <div class="mycontent w-50 m-auto">
                    <input class="form-control search" type="text" placeholder="Search Here" aria-label="default input example">
                    <div class="item bg-white rounded">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script>
        jQuery(document).ready(function(){
            jQuery(".search").keyup(function(){
                var search = jQuery(".search").val();
                if(search!=""){
                    $.ajax({
                    url:'search/'+search,
                    type:'get',
                    dataType:'json',
                    success:function(result) {
                        if(result.status=='success'){
                           jQuery(".item").show();
                           jQuery(".item").html("");
                           $.each(result.data,function(key,item){

                              jQuery(".item").append('<li class="list-unstyled text-start ms-2 me-2 p-1 txt" > '+item.name+'</li>');
                           });
                        }
                    }
                });
                }
                else{
                    jQuery(".item").hide("");
                }
            });
            $(document).on('click','.txt',function(){
                var value=$(".txt").text();
                $(".search").val(value);
                jQuery(".item").hide("");
            });
        });
    </script>
    <style>
        .item li:hover{
            background: gray;
            cursor: pointer;
        }
    </style>
  </body>
</html>
