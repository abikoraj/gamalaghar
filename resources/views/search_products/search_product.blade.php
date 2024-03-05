@include('layout.header')
@include('layout.nav')
<!-- Ec Shop page -->
<section class="ec-page-content ">
    <div class="container">
        <div class="row">
            <!-- Sidebar Area Start -->
            <div class="ec-shop-leftside col-lg-3 order-lg-first col-md-12 order-md-last">
                <div class="ec-sidebar-wrap">
                    <div class="ec-sidebar-heading">
                        <h1>Filter Products By</h1>
                    </div>
                    <!-- Sidebar Price Block -->
                    <div class="ec-sidebar-block">
                        <div class="ec-sb-title">
                            <h3 class="ec-sidebar-title">Price</h3>
                        </div>
                        <div class="ec-sb-block-content es-price-slider">
                            <div class="ec-price-filter">
                                <div id="ec-sliderPrice" class="filter__slider-price" data-min="0" data-max="250"
                                    data-step="10"></div>
                                <div class="ec-price-input">
                                    <label class="filter__label"><input type="text" class="filter__input"></label>
                                    <span class="ec-price-divider"></span>
                                    <label class="filter__label"><input type="text" class="filter__input"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ec-shop-rightside col-lg-9 order-lg-last col-md-12 order-md-first margin-b-30">
                <!-- Shop Top Start -->
                <div class="ec-pro-list-top d-flex">
                    <div class="col-md-6 ec-grid-list">
                        <div class="ec-gl-btn">
                            <button class="btn btn-grid active"><i class="fi-rr-apps"></i></button>

                        </div>
                    </div>
                    <div class="col-md-6 ec-sort-select">
                        <span class="sort-by">Sort by</span>
                        <div>
                            <form class="ec-btn-group-form" id="myForm" action="{{ url('products/search/view') }}"
                                method="get">
                                <select name="position" id="position">
                                    <option selected disabled>Position</option>
                                    <option value="4">Price, low to high</option>
                                    <option value="5">Price, high to low</option>
                                </select>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Shop Top End -->
                <!-- Shop content Start -->
                <div class="shop-pro-content">
                    <div class="shop-pro-inner">
                        <div class="row">
                            <div id="search-results">
                                @include('search_products.search_content')
                            </div>
                        </div>
                        <div>
                            <!-- Ec Pagination Start -->
                            <div class="ec-pro-pagination">
                                <span>Showing 1-12 of 21 item(s)</span>
                                <ul class="ec-pro-pagination-inner">
                                    <li><a class="active" href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a class="next" href="#">Next <i class="ecicon eci-angle-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Ec Pagination End -->
                        </div>
                        <!--Shop content End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Shop page -->




@include('layout.footer')

<script>
    $(document).ready(function() {
        $('#ec-select').change(function() {
            var searchKeyword = $('#search_keyword')
        .val(); // assuming you have an input field with id 'search_keyword'
            var position = $(this).val();

            $.ajax({
                url: '/products/search/view', // URL to your search endpoint
                method: 'GET',
                data: {
                    search_keyword: searchKeyword,
                    position: position
                },
                success: function(response) {
                    // $('#search-results').html(response);
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var form = document.getElementById('myForm');
        var select = document.getElementById('position');

        select.addEventListener('change', function() {
            // Execute any code you want here before the form submission
            // For example, you can log the selected value to the console
            console.log("Selected value:", select.value);

            // Then submit the form
            form.submit();
        });
    });
</script>
