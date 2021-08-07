
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- link google font "poppins" -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- link fontawesome -->
    <link type="text/css" href="{{ URL::asset('frontend/fontawesome-free-5/css/all.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ URL::asset('frontend/themify-icons/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('frontend/css/main.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('frontend/css/base.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('frontend/css/grid.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('frontend/css/responsive.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.12.1/themes/excite-bike/jquery-ui.css">
    <script src="{{ URL::asset('frontend/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ URL::asset('frontend/js/jquery-ui.js') }}"></script>
    <script>

    $(document).ready(function() {
        var minDate=new Date();
        $("#datepicker").datepicker({
            changeMonth: true,
            changeYear: true,
            showButtonPanel: true,
            dateFormat: 'MM yy',
            onClose: function(dateText, inst) {
                $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));
            }
            });
        });

    $( function() {
    $( "#slider-range" ).slider({
    range: true,
    min: 0,
    max: 500,
    values: [ 75, 300 ],
    slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
    }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
    " - $" + $( "#slider-range" ).slider( "values", 1 ) );
} );

</script>
    <title>Setsail Website</title>
</head>
<body>
 
    <div class="slider">
        <h1 class="slider-text translate" data-speed="0.1" >standard_list</h1>
        <img src="{{ URL::asset('frontend/img/img_slider/person.png') }} " class="person translate" data-speed="-0.25" alt="">
        <img src="{{ URL::asset('frontend/img/img_slider/slider2.jpg') }} " class="slider-img translate" data-speed="0.4" alt="">
    </div>
    <div class="body_main">
        <div class="standard-container grid wide">
            <div class="container-product row">
                <div class="container-search-content-holder ">
                    <ul class="search-ordering-list row " style="margin-left:-5px;">
                        <li class="search-ordering-item">
                            <a href="#" class="search-ordering-item-link">
                                <i class="far fa-calendar-alt"></i>
                                <span class="search-ordering-item-title">date</span>
                            </a>
                        </li>
                        <li class="search-ordering-item">
                            <a href="#" class="search-ordering-item-link">
                                <i class="fas fa-upload"></i>
                                <span class="search-ordering-item-title">price low to hight</span>
                            </a>
                        </li>
                        <li class="search-ordering-item">
                            <a href="#" class="search-ordering-item-link">
                                <i class="fas fa-download"></i>
                                <span class="search-ordering-item-title">price hight to now</span>
                            </a>
                        </li>
                        <li class="search-ordering-item">
                            <a href="#" class="search-ordering-item-link">
                                <i class="fas fa-compress-alt"></i>
                                <span class="search-ordering-item-title">name(A-Z)</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="container_list-product l-9 m-12 c-12">
                    <div class="product row">
                        <div class="product-item l-6 c-12 m-12">
                            <div class="product-list-item">
                                <div class="product-show_item">
                                    <div class="product-list_img">
                                        <div class="product-img">
                                            <a href="" class="product-img-link">
                                                <img class="product-show_img" src="{{ URL::asset('frontend/img/img_item_tour/item.jpg') }}" alt="">
                                            </a>

                                        </div>
                                        <ul class="product_show-view ">
                                            <li class="product_item-view">
                                                <i class="far fa-calendar-alt"></i>
                                                <span class="product-note_text">1</span>
                                            </li>
                                            <li class="product_item-view">
                                                <i class="fas fa-user"></i>
                                                <span class="product-note_text">13+</span>
                                            </li>
                                            <li class="product_item-view">
                                                <i class="fas fa-map-marker"></i>
                                                <span class="product-note_text"><a href="">wines</a></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <a href="" class="prouct_title-link">active winter</a>
                                        </div>
                                        <div class="product-text">
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing el. Aenean commodo…</p>
                                        </div>
                                        <div class="product_price">
                                            <span class="product-price_product">$2430</span>
                                            <div class="product-list_evaluate">
                                                <span class="product-average_rating"><i class="fas fa-star"></i> 7.0</span>
                                                <span class="product-rating_description">superb</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-item l-6 c-12 m-12">
                            <div class="product-list-item">
                                <div class="product-show_item">
                                    <div class="product-list_img">
                                        <div class="product-img">
                                            <a href="" class="product-img-link">
                                                <img class="product-show_img" src="{{ URL::asset('frontend/img/img_item_tour/item9.jpg') }}" alt="">
                                            </a>

                                        </div>
                                        <ul class="product_show-view ">
                                            <li class="product_item-view">
                                                <i class="far fa-calendar-alt"></i>
                                                <span class="product-note_text">1</span>
                                            </li>
                                            <li class="product_item-view">
                                                <i class="fas fa-user"></i>
                                                <span class="product-note_text">13+</span>
                                            </li>
                                            <li class="product_item-view">
                                                <i class="fas fa-map-marker"></i>
                                                <span class="product-note_text"><a href="">wines</a></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <a href="" class="prouct_title-link">active winter</a>
                                        </div>
                                        <div class="product-text">
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing el. Aenean commodo…</p>
                                        </div>
                                        <div class="product_price">
                                            <span class="product-price_product">$2430</span>
                                            <div class="product-list_evaluate">
                                                <span class="product-average_rating"><i class="fas fa-star"></i> 7.0</span>
                                                <span class="product-rating_description">superb</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-item l-6 c-12 m-12">
                            <div class="product-list-item">
                                <div class="product-show_item">
                                    <div class="product-list_img">
                                        <div class="product-img">
                                            <a href="" class="product-img-link">
                                                <img class="product-show_img" src="{{ URL::asset('frontend/img/img_item_tour/item7.jpg') }}" alt="">
                                            </a>

                                        </div>
                                        <ul class="product_show-view ">
                                            <li class="product_item-view">
                                                <i class="far fa-calendar-alt"></i>
                                                <span class="product-note_text">1</span>
                                            </li>
                                            <li class="product_item-view">
                                                <i class="fas fa-user"></i>
                                                <span class="product-note_text">13+</span>
                                            </li>
                                            <li class="product_item-view">
                                                <i class="fas fa-map-marker"></i>
                                                <span class="product-note_text"><a href="">wines</a></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <a href="" class="prouct_title-link">active winter</a>
                                        </div>
                                        <div class="product-text">
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing el. Aenean commodo…</p>
                                        </div>
                                        <div class="product_price">
                                            <span class="product-price_product">$2430</span>
                                            <div class="product-list_evaluate">
                                                <span class="product-average_rating"><i class="fas fa-star"></i> 7.0</span>
                                                <span class="product-rating_description">superb</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-item l-6 c-12 m-12">
                            <div class="product-list-item">
                                <div class="product-show_item">
                                    <div class="product-list_img">
                                        <div class="product-img">
                                            <a href="" class="product-img-link">
                                                <img class="product-show_img" src="{{ URL::asset('frontend/img/img_item_tour/item3.jpg') }}" alt="">
                                            </a>

                                        </div>
                                        <ul class="product_show-view ">
                                            <li class="product_item-view">
                                                <i class="far fa-calendar-alt"></i>
                                                <span class="product-note_text">1</span>
                                            </li>
                                            <li class="product_item-view">
                                                <i class="fas fa-user"></i>
                                                <span class="product-note_text">13+</span>
                                            </li>
                                            <li class="product_item-view">
                                                <i class="fas fa-map-marker"></i>
                                                <span class="product-note_text"><a href="">wines</a></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <a href="" class="prouct_title-link">active winter</a>
                                        </div>
                                        <div class="product-text">
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing el. Aenean commodo…</p>
                                        </div>
                                        <div class="product_price">
                                            <span class="product-price_product">$2430</span>
                                            <div class="product-list_evaluate">
                                                <span class="product-average_rating"><i class="fas fa-star"></i> 7.0</span>
                                                <span class="product-rating_description">superb</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-item l-6 c-12 m-12">
                            <div class="product-list-item">
                                <div class="product-show_item">
                                    <div class="product-list_img">
                                        <div class="product-img">
                                            <a href="" class="product-img-link">
                                                <img class="product-show_img" src="{{ URL::asset('frontend/img/img_item_tour/item5.jpg') }}" alt="">
                                            </a>

                                        </div>
                                        <ul class="product_show-view ">
                                            <li class="product_item-view">
                                                <i class="far fa-calendar-alt"></i>
                                                <span class="product-note_text">1</span>
                                            </li>
                                            <li class="product_item-view">
                                                <i class="fas fa-user"></i>
                                                <span class="product-note_text">13+</span>
                                            </li>
                                            <li class="product_item-view">
                                                <i class="fas fa-map-marker"></i>
                                                <span class="product-note_text"><a href="">wines</a></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <a href="" class="prouct_title-link">active winter</a>
                                        </div>
                                        <div class="product-text">
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing el. Aenean commodo…</p>
                                        </div>
                                        <div class="product_price">
                                            <span class="product-price_product">$2430</span>
                                            <div class="product-list_evaluate">
                                                <span class="product-average_rating"><i class="fas fa-star"></i> 7.0</span>
                                                <span class="product-rating_description">superb</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-item l-6 c-12 m-12">
                            <div class="product-list-item">
                                <div class="product-show_item">
                                    <div class="product-list_img">
                                        <div class="product-img">
                                            <a href="" class="product-img-link">
                                                <img class="product-show_img" src="{{ URL::asset('frontend/img/img_item_tour/item4.jpg') }}" alt="">
                                            </a>

                                        </div>
                                        <ul class="product_show-view ">
                                            <li class="product_item-view">
                                                <i class="far fa-calendar-alt"></i>
                                                <span class="product-note_text">1</span>
                                            </li>
                                            <li class="product_item-view">
                                                <i class="fas fa-user"></i>
                                                <span class="product-note_text">13+</span>
                                            </li>
                                            <li class="product_item-view">
                                                <i class="fas fa-map-marker"></i>
                                                <span class="product-note_text"><a href="">wines</a></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <a href="" class="prouct_title-link">active winter</a>
                                        </div>
                                        <div class="product-text">
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing el. Aenean commodo…</p>
                                        </div>
                                        <div class="product_price">
                                            <span class="product-price_product">$2430</span>
                                            <div class="product-list_evaluate">
                                                <span class="product-average_rating"><i class="fas fa-star"></i> 7.0</span>
                                                <span class="product-rating_description">superb</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-search_product l-3 m-12 c-12">
                    <div class="container-feedback ">
                        <div class="feedback_list-items book-card">
                            <div class="feedback-items">
                                <h2 class="contact_us-title " style="text-transform:capitalize">plan your trip</h2>
                            </div>
                            <div class=" feedback_content-information">
                                <div class="feedback_information-email-card ">
                                    <span class="icon_add-card"><i class="fas fa-search"></i></span>
                                    <input class="feedback_input-card add-card"type="text" placeholder="search tour" >
                                <div class="feedback_information-email-card">
                                    <span class="icon_add-card"><i class="far fa-envelope"></i></span>
                                    <input class="feedback_input-card add-card" type="email "  placeholder="email*">
                                </div>
                                <div class="feedback_information-email-card">
                                    <span class="icon_add-card"><i class="far fa-envelope"></i></span>
                                    <input class="feedback_input-card add-card" type="text" min="2021-06-3" max="2025-12-31" id="datepicker" step="3">
                                </div>
                                <div class="feedback_information-email-card range">
                                    <p>
                                        <label for="amount" class="Price-range-card"  >Price range:</label>
                                        <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
                                    </p>
                                    <div id="slider-range"></div>
                                </div>
                            </div>
                            <button class="feedback_content-submit submit-btn">search </button>
                        </div>
                    </div>
                    </div>
                    <div class="img-planes">
                        <div class="cloud-effect-planes"></div>
                        <img src="{{ URL::asset('frontend/img/panle.JPG') }} " class="slider-img translate" >
                    </div>
            </div>
        </div>
    </div>

    

    <script src="{{ URL::asset('frontend/js/main.js') }}"></script>
</body>
</html>
