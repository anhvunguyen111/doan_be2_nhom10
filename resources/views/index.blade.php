@extends('layout')
@section('content')
    <div class="container">
        <div class="hero__item set-bg" style="margin-bottom: 80px" data-setbg="img/product/collection_banner.jpg">
            <div class="hero__text">
                <span style="color: aliceblue">ROYAL SUSHI</span>
                            {{-- <h2 style="color: #000011">100% Tươi <br />Ngon chuẩn nhật</h2> --}}
                            {{-- <p>Free Pickup and Delivery Available</p> --}}
                            <br><br><br><br><br><br><br><br><br>    
                             {{-- <br><br><br><br><br> --}}
                            <a href="#" class="primary-btn">SHOP NOW</a>
            </div>
        </div>
    </div>
    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    @if(isset($latest_product_of_type1,$latest_product_of_type2,$latest_product_of_type3,$latest_product_of_type4 ))
                    
                    @foreach($latest_product_of_type1 as $item)
                    <div class="col-lg-12">
                        <div class="categories__item set-bg" data-setbg="img/product/{{$item->image}}" >
                            <h5><a href="{{route('shop-grid', ['id'=> $item->type_products->id])}}">{{$item->type_products->type_name}}</a></h5>
                        </div>
                    </div>
                    @endforeach
                    @foreach($latest_product_of_type2 as $item)
                    <div class="col-lg-12">
                        <div class="categories__item set-bg" data-setbg="img/product/{{$item->image}}">
                            <h5><a href="{{route('shop-grid', ['id'=> $item->type_products->id])}}">{{$item->type_products->type_name}}</a></h5>
                        </div>
                    </div>
                    @endforeach
                    @foreach($latest_product_of_type3 as $item)
                    <div class="col-lg-12">
                        <div class="categories__item set-bg" data-setbg="img/product/{{$item->image}}">
                            <h5><a href="{{route('shop-grid', ['id'=> $item->type_products->id])}}">{{$item->type_products->type_name}}</a></h5>
                        </div>
                    </div>
                    @endforeach
                    @foreach($latest_product_of_type4 as $item)
                    <div class="col-lg-12">
                        <div class="categories__item set-bg" data-setbg="img/product/{{$item->image}}">
                            <h5><a href="{{route('shop-grid', ['id'=> $item->type_products->id])}}">{{$item->type_products->type_name}}</a></h5>
                        </div>
                    </div>
                    @endforeach
               
                   
                   @endif
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Featured Product</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*" >All</li>
                            <li data-filter=".sashimi" >SaShimi</li>
                            <li data-filter=".sushi" >Sushi</li>
                            <li data-filter=".salads" >Salads</li>
                            <li data-filter=".monAnKem" >Món ăn kèm</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                @foreach ($featured_product as $item)
                @if($item->type_products->type_name == 'SaShimi')
                    <div class="col-lg-3 col-md-4 col-sm-6 mix sashimi ">
                     <div class="featured__item">
                         <div class="featured__item__pic set-bg" data-setbg="img/product/{{$item->image}}">
                             <ul class="featured__item__pic__hover">
                                 <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                 <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                 <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                             </ul>
                         </div>
                         <div class="featured__item__text">
                             {{-- <h6><a href="shop-details/{{$item->id}}">{{$item->product_name}}</a></h6> --}}
                             <h6><a href="{{route('shop-details', ['id'=> $item->id])}}">{{$item->product_name}}</a></h6>
                             <h5>{{number_format($item->price)." VND"}}</h5>
                         </div>
                     </div>
                 </div> 
                 @endif
             
                @if($item->type_products->type_name == 'Sushi')
 
                    <div class="col-lg-3 col-md-4 col-sm-6 mix sushi ">
                     <div class="featured__item">
                         <div class="featured__item__pic set-bg" data-setbg="img/product/{{$item->image}}">
                             <ul class="featured__item__pic__hover">
                                 <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                 <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                 <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                             </ul>
                         </div>
                         <div class="featured__item__text">
                             <h6><a href="{{route('shop-details', ['id'=> $item->id])}}">{{$item->product_name}}</a></h6>
                             <h5>{{number_format($item->price)." VND"}}</h5>
                         </div>
                     </div>
                 </div> 
                 @endif
 
             
                @if($item->type_products->type_name == 'Salads')
 
                    <div class="col-lg-3 col-md-4 col-sm-6 mix salads ">
                     <div class="featured__item">
                         <div class="featured__item__pic set-bg" data-setbg="img/product/{{$item->image}}">
                             <ul class="featured__item__pic__hover">
                                 <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                 <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                 <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                             </ul>
                         </div>
                         <div class="featured__item__text">
                             <h6><a href="{{route('shop-details', ['id'=> $item->id])}}">{{$item->product_name}}</a></h6>
                             <h5>{{number_format($item->price)." VND"}}</h5>
                         </div>
                     </div>
                 </div> 
                 @endif
 
                @if($item->type_products->type_name == 'Món ăn kèm')
 
                    <div class="col-lg-3 col-md-4 col-sm-6 mix monAnKem ">
                     <div class="featured__item">
                         <div class="featured__item__pic set-bg" data-setbg="img/product/{{$item->image}}">
                             <ul class="featured__item__pic__hover">
                                 <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                 <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                 <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                             </ul>
                         </div>
                         <div class="featured__item__text">
                             <h6><a href="{{route('shop-details', ['id'=> $item->id])}}">{{$item->product_name}}</a></h6>
                             <h5>{{number_format($item->price)." VND"}}</h5>
                         </div>
                     </div>
                 </div> 
                 @endif
                 @endforeach
            </div>
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/banner-1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/banner-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
    <section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Latest Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-1.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-2.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-3.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-1.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-2.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-3.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Top Rated Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-1.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-2.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-3.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-1.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-2.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-3.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Review Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-1.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-2.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-3.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-1.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-2.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-3.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Product Section End -->

    <!-- Blog Section Begin -->
    <section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>From The Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/blog/blog-1.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Cooking tips make cooking simple</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/blog/blog-2.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">6 ways to prepare breakfast for 30</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/blog/blog-3.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Visit the clean farm in the US</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    @endsection