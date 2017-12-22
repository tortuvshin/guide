@extends("main")

@section("content")
<!-- end:punica-page-header -->

<div id="main-content">

    <section class="punica-top-section loading">

        <div class="owl-carousel punica-fullwidth-carousel">
            @if($lastFeaturestop)
                @foreach($lastFeaturestop as $key=>$item)
                <div class="item">
                    <img src="{{ makepreview($item->thumb, 'b', 'posts') }}" alt="{{ $item->title }}">
                    <div class="mask"></div>
                    <div class="item-content">
                        <div class="wrapper">
                            <header class="clearfix">
                            <span class="entry-date pull-left clearfix">
                                <i class="fa fa-clock-o pull-left"></i>
                                <span class="month pull-left">{{ $item->created_at->diffForHumans() }}</span>
                            </span>
                            <!-- end:entry-date -->
                            <span class="entry-meta pull-left">,&nbsp;</span>
                            <span class="entry-author clearfix pull-left">
                                <span class="pull-left">By&nbsp;</span>
                                <a href="#" class="pull-left"> {{ $item->user->username }} </a>
                            </span>
                            <!-- end:entry-author -->
                        </header>
                        <h2 class="item-title"><a href="{{ makeposturl($item) }}">{{ str_limit($item->title, 100) }}</a></h2>
                        </div>
                        <!-- end:wrapper -->
                    </div>
                    <!-- end:item-content -->
                </div>
                @endforeach
        
            @endif
            
            
        </div>
        <!-- end:punica-fullwidth-carousel -->
        
    </section>
    <!-- end:punica-top-section -->

    <div class="wrapper clearfix">

        <section class="widget-area-1">

            <div class="widget punica-hotnews-widget">

                <div class="widget-title widget-title-s1 clearfix">
                    <i class="fa fa-newspaper-o pull-left"></i>
                    <h4 class="pull-left">Шуурхай мэдээ</h4>
                </div>
                <!-- widget-title-s1 -->

                <div class="owl-carousel punica-hotnews-carousel">

                    
                    <!-- end:item -->
                    @if(isset($lastTrending))
                                        
                                        
                        @foreach($lastTrending->slice(0,5) as $item)
                        <div class="item">

                        <article class="entry-item">

                            <div class="entry-content">
                                
                                <header class="clearfix">
                                    <span class="entry-date pull-left clearfix">
                                        <i class="fa fa-clock-o pull-left"></i>
                                        <span class="month pull-left">{{ $item->created_at->diffForHumans() }}</span>
                                    </span>
                                    <!-- end:entry-date -->
                                    <span class="entry-meta pull-left">,&nbsp;</span>
                                    <span class="entry-author clearfix pull-left">
                                        <span class="pull-left">By&nbsp;</span>
                                        <a href="#" class="pull-left">{{ $item->user->username }}</a>
                                    </span>
                                    <!-- end:entry-author -->
                                </header>

                                <h6 class="entry-title"><a href="{{ makeposturl($item) }}">{{ str_limit($item->title, 50) }}</a></h6>

                            </div>
                            <!-- end:entry-content -->

                            <div class="entry-thumb">
                                <a href="{{ makeposturl($item) }}" class="entry-categories">Нийгэм</a>
                                <div class="mask"><a href="{{ makeposturl($item) }}"></a></div>
                                <div class="punica-zoom-effect"><a href="{{ makeposturl($item) }}"><img src="{{ makepreview($item->thumb, 's', 'posts') }}" alt=""></a></div>
                            </div>                            
                            <!-- end:entry-thumb -->
                            
                        </article>
                        <!-- end:entry-item -->
                        
                    </div>
                        @endforeach
                    
                    @endif
                </div>
                <!-- end:punica-hotnews-carousel -->
                
            </div>
            <!-- end:punica-hotnews-widget -->
            
        </section>
        <!-- end:widget-area-1 -->

        <div class="col-a pull-left">
            
            <section class="widget-area-2 pull-right">

                <div class="widget punica-carousel-list-1-widget">

                    <h2 class="widget-title widget-title-s2"><span>Онцлох мэдээ</span></h2>

                    <div class="widget-content">
                        
                        <div class="owl-carousel punica-carousel-1">

                            <div class="item">
                                <article class="entry-item">
                                    <div class="entry-thumb">
                                        <a href="#" class="entry-categories green">Life styles</a>
                                        <div class="punica-zoom-effect"><a href="#"><img src="placeholders/post-image/post-7.jpg" alt=""></a></div>
                                    </div>
                                    <!-- end:entry-thumb -->
                                    <div class="entry-content">
                                        <header class="clearfix">
                                            <span class="entry-date pull-left clearfix">
                                                <i class="fa fa-clock-o pull-left"></i>
                                                <span class="month pull-left">Sep.</span>
                                                <span class="date pull-left">23</span>
                                            </span>
                                            <!-- end:entry-date -->
                                            <span class="entry-meta pull-left">,&nbsp;</span>
                                            <span class="entry-author clearfix pull-left">
                                                <span class="pull-left">By&nbsp;</span>
                                                <a href="#" class="pull-left">Jack grove</a>
                                            </span>
                                            <!-- end:entry-author -->
                                        </header>

                                        <h6 class="entry-title"><a href="#">New York City Ebola Patient's Condition Upgraded from 'Serious' to 'Stable'</a></h6>

                                        <p>Vivamus auctor quam nec mauris commodo laoreet. Nam ut metus elementum, pharetra diam sed, rhoncus tortor. Sed vehicula justo ut sem auctor sagittis. Sed vehicula justo ut sem auctor sagittis. Sed vehicula justo ut sem auctor sagittis. Sed vehicula justo ut sem auctor sagittis.</p>
                                    </div>
                                    <!-- end:entry-content -->
                                </article>
                                <!-- end:entry-item -->
                            </div>
                            <!-- end:item -->

                            <div class="item">
                                <article class="entry-item">
                                    <div class="entry-thumb">
                                        <a href="#" class="entry-categories blue">Culture</a>
                                        <div class="punica-zoom-effect"><a href="#"><img src="placeholders/post-image/post-7.jpg" alt=""></a></div>
                                    </div>
                                    <!-- end:entry-thumb -->
                                    <div class="entry-content">
                                        <header class="clearfix">
                                            <span class="entry-date pull-left clearfix">
                                                <i class="fa fa-clock-o pull-left"></i>
                                                <span class="month pull-left">Sep.</span>
                                                <span class="date pull-left">23</span>
                                            </span>
                                            <!-- end:entry-date -->
                                            <span class="entry-meta pull-left">,&nbsp;</span>
                                            <span class="entry-author clearfix pull-left">
                                                <span class="pull-left">By&nbsp;</span>
                                                <a href="#" class="pull-left">Jack grove</a>
                                            </span>
                                            <!-- end:entry-author -->
                                        </header>

                                        <h6 class="entry-title"><a href="#">New York City Ebola Patient's Condition Upgraded from 'Serious' to 'Stable'</a></h6>

                                        <p>Vivamus auctor quam nec mauris commodo laoreet. Nam ut metus elementum, pharetra diam sed, rhoncus tortor. Sed vehicula justo ut sem auctor sagittis. Sed vehicula justo ut sem auctor sagittis.</p>
                                    </div>
                                    <!-- end:entry-content -->
                                </article>
                                <!-- end:entry-item -->
                            </div>
                            <!-- end:item -->
                            
                        </div>
                        <!-- end:punica-carousel-1 -->

                    </div>
                    <!-- end:widget-content -->

                    <a href="#" class="load-more">Бүгдийг үзэх</a>
                    
                </div>
                <!-- end:punica-carousel-list-1-widget -->

                <div class="widget punica-article-list-1-widget">

                    <h2 class="widget-title widget-title-s2"><span>Best reviews</span></h2>

                    <ul class="clearfix">
                        <li>
                            <article class="entry-item">
                                <div class="entry-thumb">
                                    <a href="#" class="entry-categories orange">News</a>
                                    <div class="punica-zoom-effect"><a href="#"><img src="placeholders/post-image/post-4.jpg" alt=""></a></div>
                                    <div class="mask"></div>
                                </div>
                                <!-- end:entry-thumb -->
                                
                                <div class="entry-content">
                                    <header class="clearfix">
                                        <span class="entry-date pull-left clearfix">
                                            <i class="fa fa-clock-o pull-left"></i>
                                            <span class="month pull-left">Sep.</span>
                                            <span class="date pull-left">23</span>
                                        </span>
                                        <!-- end:entry-date -->
                                        <span class="entry-meta pull-left">,&nbsp;</span>
                                        <span class="entry-author clearfix pull-left">
                                            <span class="pull-left">By&nbsp;</span>
                                            <a href="#" class="pull-left">Jack grove</a>
                                        </span>
                                        <!-- end:entry-author -->
                                    </header>

                                    <h6 class="entry-title"><a href="#">10 Questions To Ask Before Getting Your Next Travel Credit Card</a></h6>
                                </div>
                                <!-- end:entry-content -->
                            </article>
                            <!-- end:entry-item -->
                        </li>
                        <li>
                            <article class="entry-item">
                                <div class="entry-thumb">
                                    <a href="#" class="entry-categories pink">Life style</a>
                                    <div class="punica-zoom-effect"><a href="#"><img src="placeholders/post-image/post-2.jpg" alt=""></a></div>
                                    <div class="mask"></div>
                                </div>
                                <!-- end:entry-thumb -->

                                <div class="entry-content">
                                    <header class="clearfix">
                                        <span class="entry-date pull-left clearfix">
                                            <i class="fa fa-clock-o pull-left"></i>
                                            <span class="month pull-left">Sep.</span>
                                            <span class="date pull-left">23</span>
                                        </span>
                                        <!-- end:entry-date -->
                                        <span class="entry-meta pull-left">,&nbsp;</span>
                                        <span class="entry-author clearfix pull-left">
                                            <span class="pull-left">By&nbsp;</span>
                                            <a href="#" class="pull-left">Jack grove</a>
                                        </span>
                                        <!-- end:entry-author -->
                                    </header>

                                    <h6 class="entry-title"><a href="#">10 Questions To Ask Before Getting Your Next Travel Credit Card</a></h6>
                                </div>
                                <!-- end:entry-content -->
                            </article>
                            <!-- end:entry-item -->
                        </li>
                    </ul>

                    <a href="#" class="load-more">View all</a>
                    
                </div>
                <!-- end:punica-article-list-1-widget -->
                
            </section>
            <!-- widget-area-2 -->

            <section class="widget-area-3 pull-left">

                <div class="widget punica-daily-widget">

                    <div class="widget-title widget-title-s3">
                        <h4 class="text-center">Сүүлд нэмэгдсэн</h4>
                    </div>
                    <!-- end:widget-title-s3 -->

                    <div class="owl-carousel punica-daily-carousel">

                        <div class="item">
                            @if(isset($lastNews))
                                        
                                        
                                @foreach($lastNews->slice(0,1) as $item)
                                <article class="last-item">
                                    <div class="entry-thumb">
                                        <a href="{{ makeposturl($item) }}" class="entry-categories">Нийгэм</a>
                                        <div class="punica-zoom-effect"><a href="{{ makeposturl($item) }}"><img src="{{ makepreview($item->thumb, 's', 'posts') }}" alt="{{ str_limit($item->body, 150) }}"></a></div>
                                    </div>                            
                                    <!-- end:entry-thumb -->

                                    <div class="entry-content">
                                    
                                        <header class="clearfix">
                                            <span class="entry-date pull-left clearfix">
                                                <i class="fa fa-clock-o pull-left"></i>
                                                <span class="month pull-left">{{ $item->created_at->diffForHumans() }}</span>
                                            </span>
                                            <!-- end:entry-date -->
                                            <span class="entry-meta pull-left">,&nbsp;</span>
                                            <span class="entry-author clearfix pull-left">
                                                <span class="pull-left">By&nbsp;</span>
                                                <a href="#" class="pull-left">{{ $item->user->username }}</a>
                                            </span>
                                            <!-- end:entry-author -->
                                        </header>

                                        <h6 class="entry-title"><a href="{{ makeposturl($item) }}">{{ str_limit($item->title, 100) }}</a></h6>

                                    </div>
                                    <!-- end:entry-content -->

                                </article>
                                @endforeach
                            
                            @endif
                            
                            <!-- end:last-item -->
                            
                            <ul class="older-post">
                                @if(isset($lastNews))
                                    @foreach($lastNews->slice(1,5) as $item)
                                    <li>
                                        <article class="entry-item">

                                            <div class="entry-content">
                                        
                                                <header class="clearfix">
                                                    <span class="entry-date pull-left clearfix">
                                                        <i class="fa fa-clock-o pull-left"></i>
                                                        <span class="month pull-left">{{ $item->created_at->diffForHumans() }}</span>
                                                    </span>
                                                    <!-- end:entry-date -->
                                                    <span class="entry-meta pull-left">,&nbsp;</span>
                                                    <span class="entry-author clearfix pull-left">
                                                        <span class="pull-left">By&nbsp;</span>
                                                        <a href="#" class="pull-left">{{ $item->user->username }}</a>
                                                    </span>
                                                    <!-- end:entry-author -->
                                                </header>

                                                <h6 class="entry-title"><a href="{{ makeposturl($item) }}">{{ str_limit($item->title, 100) }}</a></h6>

                                            </div>
                                            <!-- end:entry-content -->

                                        </article>
                                        <!-- end:entry-item -->
                                    </li>
                                    @endforeach
                                
                                @endif
                            </ul>
                            <!-- end:older-post -->

                        </div>
                        <!-- end:item -->

                        <div class="item">
                            
                            <article class="last-item">
                                <div class="entry-thumb">
                                    <a href="#" class="entry-categories">World</a>
                                    <div class="punica-zoom-effect"><a href="#"><img src="placeholders/post-image/post-6.jpg" alt=""></a></div>
                                </div>                            
                                <!-- end:entry-thumb -->

                                <div class="entry-content">
                                
                                    <header class="clearfix">
                                        <span class="entry-date pull-left clearfix">
                                            <i class="fa fa-clock-o pull-left"></i>
                                            <span class="month pull-left">Sep.</span>
                                            <span class="date pull-left">23</span>
                                        </span>
                                        <!-- end:entry-date -->
                                        <span class="entry-meta pull-left">,&nbsp;</span>
                                        <span class="entry-author clearfix pull-left">
                                            <span class="pull-left">By&nbsp;</span>
                                            <a href="#" class="pull-left">Jack grove</a>
                                        </span>
                                        <!-- end:entry-author -->
                                    </header>

                                    <h6 class="entry-title"><a href="#">Suspected Suicide Bomber Kills 45 on Pakistani-Indian Border</a></h6>

                                </div>
                                <!-- end:entry-content -->

                            </article>
                            <!-- end:last-item -->

                            <ul class="older-post">

                                <li>
                                    <article class="entry-item">

                                        <div class="entry-content">
                                
                                            <header class="clearfix">
                                                <span class="entry-date pull-left clearfix">
                                                    <i class="fa fa-clock-o pull-left"></i>
                                                    <span class="month pull-left">Sep.</span>
                                                    <span class="date pull-left">23</span>
                                                </span>
                                                <!-- end:entry-date -->
                                                <span class="entry-meta pull-left">,&nbsp;</span>
                                                <span class="entry-author clearfix pull-left">
                                                    <span class="pull-left">By&nbsp;</span>
                                                    <a href="#" class="pull-left">Jack grove</a>
                                                </span>
                                                <!-- end:entry-author -->
                                            </header>

                                            <h6 class="entry-title"><a href="#">10 Questions To Ask Before Getting Your Next Travel Credit Card</a></h6>

                                        </div>
                                        <!-- end:entry-content -->

                                    </article>
                                    <!-- end:entry-item -->
                                </li>

                            </ul>
                            <!-- end:older-post -->

                        </div>
                        <!-- end:item -->
                        
                    </div>
                    <!-- end:punica-daily-carousel -->

                    <a href="#" class="view-all">Бүгдийг үзэх</a>
                    
                </div>
                <!-- end:punica-daily-widget -->
                
            </section>
            <!-- widget-area-3 -->            

            <div class="clear"></div>

        </div>
        <!-- end:col-a -->

        <aside class="sidebar pull-left">

            <div class="widget punica-social-widget">

                <h2 class="widget-title widget-title-s2"><span>Дагах</span></h2>

                <ul class="clearfix">
                    <li class="mail-icon"><a href="#" class="fa fa-envelope"></a></li>
                    <li class="facebook-icon"><a href="#" class="fa fa-facebook"></a></li>
                    <li class="twitter-icon"><a href="#" class="fa fa-twitter"></a></li>
                    <li class="gplus-icon"><a href="#" class="fa fa-google-plus"></a></li>
                    <li class="linkedin-icon"><a href="#" class="fa fa-linkedin"></a></li>
                    <li class="rss-icon"><a href="#" class="fa fa-rss"></a></li>
                </ul>

                <form class="newsletter-form clearfix" method="post" action="processNewsletterForm.php">
                    <p>Мэйл хаягаа бүртгүүлж шинэ мэдээлэл цаг алдалгүй аваарай.</p>
                    <p class="input-email clearfix">
                        <input type="text" size="40" class="email" value="" name="email" onblur="if(this.value=='')this.value=this.defaultValue;" onfocus="if(this.value==this.defaultValue)this.value='';">
                        <input type="submit" class="submit" value="Subcribe">
                    </p>                    
                </form>
                
            </div>
            <!-- end:punica-social-widget -->

            <div class="widget punica-tab-1-widget">

                <div class="punica-tab-container-1">

                    <ul class="nav nav-tabs punica-tabs-1">
                        <li class="active"><a href="#tab1-1" data-toggle="tab">Их уншсан</a></li>
                        <li class=""><a href="#tab1-2" data-toggle="tab">Их сэтгэгдэлтэй</a></li>  
                    </ul>
                    <!-- nav-tabs -->

                    <div class="tab-content">
                        <div class="tab-pane active" id="tab1-1">

                            <ul class="clearfix">
                                
                                <li>
                                    <article class="entry-item clearfix">
                                        <div class="entry-thumb pull-left">
                                            <a href="#"><img src="placeholders/post-image/post-8.jpg" alt=""></a>
                                        </div>
                                        <!-- end:entry-thumb -->
                                        <div class="entry-content">
                                
                                            <header class="clearfix">
                                                <span class="entry-date pull-left clearfix">
                                                    <i class="fa fa-clock-o pull-left"></i>
                                                    <span class="month pull-left">Sep.</span>
                                                    <span class="date pull-left">23</span>
                                                </span>
                                                <!-- end:entry-date -->
                                                <span class="entry-meta pull-left">,&nbsp;</span>
                                                <span class="entry-author clearfix pull-left">
                                                    <span class="pull-left">By&nbsp;</span>
                                                    <a href="#" class="pull-left">Jack grove</a>
                                                </span>
                                                <!-- end:entry-author -->
                                            </header>

                                            <h6 class="entry-title"><a href="#">New York City Ebola Patient's Condition Upgraded from 'Serious' to 'Stable'</a></h6>

                                        </div>
                                        <!-- end:entry-content -->
                                    </article>
                                    <!-- end:entry-item -->

                                </li>

                                <li>
                                    <article class="entry-item clearfix">
                                        <div class="entry-thumb pull-left">
                                            <a href="#"><img src="placeholders/post-image/post-9.jpg" alt=""></a>
                                        </div>
                                        <!-- end:entry-thumb -->
                                        <div class="entry-content">
                                
                                            <header class="clearfix">
                                                <span class="entry-date pull-left clearfix">
                                                    <i class="fa fa-clock-o pull-left"></i>
                                                    <span class="month pull-left">Sep.</span>
                                                    <span class="date pull-left">23</span>
                                                </span>
                                                <!-- end:entry-date -->
                                                <span class="entry-meta pull-left">,&nbsp;</span>
                                                <span class="entry-author clearfix pull-left">
                                                    <span class="pull-left">By&nbsp;</span>
                                                    <a href="#" class="pull-left">Jack grove</a>
                                                </span>
                                                <!-- end:entry-author -->
                                            </header>

                                            <h6 class="entry-title"><a href="#">Suspected Suicide Bomber Kills 45 on Pakistani-Indian Border</a></h6>

                                        </div>
                                        <!-- end:entry-content -->
                                    </article>
                                    <!-- end:entry-item -->

                                </li>

                                <li>
                                    <article class="entry-item clearfix">
                                        <div class="entry-thumb pull-left">
                                            <a href="#"><img src="placeholders/post-image/post-10.jpg" alt=""></a>
                                        </div>
                                        <!-- end:entry-thumb -->
                                        <div class="entry-content">
                                
                                            <header class="clearfix">
                                                <span class="entry-date pull-left clearfix">
                                                    <i class="fa fa-clock-o pull-left"></i>
                                                    <span class="month pull-left">Sep.</span>
                                                    <span class="date pull-left">23</span>
                                                </span>
                                                <!-- end:entry-date -->
                                                <span class="entry-meta pull-left">,&nbsp;</span>
                                                <span class="entry-author clearfix pull-left">
                                                    <span class="pull-left">By&nbsp;</span>
                                                    <a href="#" class="pull-left">Jack grove</a>
                                                </span>
                                                <!-- end:entry-author -->
                                            </header>

                                            <h6 class="entry-title"><a href="#">Suspension is a feminist issue</a></h6>

                                        </div>
                                        <!-- end:entry-content -->
                                    </article>
                                    <!-- end:entry-item -->

                                </li>

                                <li>
                                    <article class="entry-item clearfix">
                                        <div class="entry-thumb pull-left">
                                            <a href="#"><img src="placeholders/post-image/post-11.jpg" alt=""></a>
                                        </div>
                                        <!-- end:entry-thumb -->
                                        <div class="entry-content">
                                
                                            <header class="clearfix">
                                                <span class="entry-date pull-left clearfix">
                                                    <i class="fa fa-clock-o pull-left"></i>
                                                    <span class="month pull-left">Sep.</span>
                                                    <span class="date pull-left">23</span>
                                                </span>
                                                <!-- end:entry-date -->
                                                <span class="entry-meta pull-left">,&nbsp;</span>
                                                <span class="entry-author clearfix pull-left">
                                                    <span class="pull-left">By&nbsp;</span>
                                                    <a href="#" class="pull-left">Jack grove</a>
                                                </span>
                                                <!-- end:entry-author -->
                                            </header>

                                            <h6 class="entry-title"><a href="#">Privately educated gain £1,500 salary premium</a></h6>

                                        </div>
                                        <!-- end:entry-content -->
                                    </article>
                                    <!-- end:entry-item -->

                                </li>

                                <li>
                                    <article class="entry-item clearfix">
                                        <div class="entry-thumb pull-left">
                                            <a href="#"><img src="placeholders/post-image/post-11.jpg" alt=""></a>
                                        </div>
                                        <!-- end:entry-thumb -->
                                        <div class="entry-content">
                                
                                            <header class="clearfix">
                                                <span class="entry-date pull-left clearfix">
                                                    <i class="fa fa-clock-o pull-left"></i>
                                                    <span class="month pull-left">Sep.</span>
                                                    <span class="date pull-left">23</span>
                                                </span>
                                                <!-- end:entry-date -->
                                                <span class="entry-meta pull-left">,&nbsp;</span>
                                                <span class="entry-author clearfix pull-left">
                                                    <span class="pull-left">By&nbsp;</span>
                                                    <a href="#" class="pull-left">Jack grove</a>
                                                </span>
                                                <!-- end:entry-author -->
                                            </header>

                                            <h6 class="entry-title"><a href="#">Privately educated gain £1,500 salary premium</a></h6>

                                        </div>
                                        <!-- end:entry-content -->
                                    </article>
                                    <!-- end:entry-item -->

                                </li>

                            </ul>

                        </div>
                        <!-- tab-panel -->
                        <div class="tab-pane" id="tab1-2">
                            
                            <ul class="clearfix">
                                
                                <li>
                                    <article class="entry-item clearfix">
                                        <div class="entry-thumb pull-left">
                                            <a href="#"><img src="placeholders/post-image/post-11.jpg" alt=""></a>
                                        </div>
                                        <!-- end:entry-thumb -->
                                        <div class="entry-content">
                                
                                            <header class="clearfix">
                                                <span class="entry-date pull-left clearfix">
                                                    <i class="fa fa-clock-o pull-left"></i>
                                                    <span class="month pull-left">Sep.</span>
                                                    <span class="date pull-left">23</span>
                                                </span>
                                                <!-- end:entry-date -->
                                                <span class="entry-meta pull-left">,&nbsp;</span>
                                                <span class="entry-author clearfix pull-left">
                                                    <span class="pull-left">By&nbsp;</span>
                                                    <a href="#" class="pull-left">Jack grove</a>
                                                </span>
                                                <!-- end:entry-author -->
                                            </header>

                                            <h6 class="entry-title"><a href="#">Privately educated gain £1,500 salary premium</a></h6>

                                        </div>
                                        <!-- end:entry-content -->
                                    </article>
                                    <!-- end:entry-item -->

                                </li>

                                <li>
                                    <article class="entry-item clearfix">
                                        <div class="entry-thumb pull-left">
                                            <a href="#"><img src="placeholders/post-image/post-11.jpg" alt=""></a>
                                        </div>
                                        <!-- end:entry-thumb -->
                                        <div class="entry-content">
                                
                                            <header class="clearfix">
                                                <span class="entry-date pull-left clearfix">
                                                    <i class="fa fa-clock-o pull-left"></i>
                                                    <span class="month pull-left">Sep.</span>
                                                    <span class="date pull-left">23</span>
                                                </span>
                                                <!-- end:entry-date -->
                                                <span class="entry-meta pull-left">,&nbsp;</span>
                                                <span class="entry-author clearfix pull-left">
                                                    <span class="pull-left">By&nbsp;</span>
                                                    <a href="#" class="pull-left">Jack grove</a>
                                                </span>
                                                <!-- end:entry-author -->
                                            </header>

                                            <h6 class="entry-title"><a href="#">Privately educated gain £1,500 salary premium</a></h6>

                                        </div>
                                        <!-- end:entry-content -->
                                    </article>
                                    <!-- end:entry-item -->

                                </li>
                                
                                <li>
                                    <article class="entry-item clearfix">
                                        <div class="entry-thumb pull-left">
                                            <a href="#"><img src="placeholders/post-image/post-8.jpg" alt=""></a>
                                        </div>
                                        <!-- end:entry-thumb -->
                                        <div class="entry-content">
                                
                                            <header class="clearfix">
                                                <span class="entry-date pull-left clearfix">
                                                    <i class="fa fa-clock-o pull-left"></i>
                                                    <span class="month pull-left">Sep.</span>
                                                    <span class="date pull-left">23</span>
                                                </span>
                                                <!-- end:entry-date -->
                                                <span class="entry-meta pull-left">,&nbsp;</span>
                                                <span class="entry-author clearfix pull-left">
                                                    <span class="pull-left">By&nbsp;</span>
                                                    <a href="#" class="pull-left">Jack grove</a>
                                                </span>
                                                <!-- end:entry-author -->
                                            </header>

                                            <h6 class="entry-title"><a href="#">New York City Ebola Patient's Condition Upgraded from 'Serious' to 'Stable'</a></h6>

                                        </div>
                                        <!-- end:entry-content -->
                                    </article>
                                    <!-- end:entry-item -->

                                </li>

                                <li>
                                    <article class="entry-item clearfix">
                                        <div class="entry-thumb pull-left">
                                            <a href="#"><img src="placeholders/post-image/post-9.jpg" alt=""></a>
                                        </div>
                                        <!-- end:entry-thumb -->
                                        <div class="entry-content">
                                
                                            <header class="clearfix">
                                                <span class="entry-date pull-left clearfix">
                                                    <i class="fa fa-clock-o pull-left"></i>
                                                    <span class="month pull-left">Sep.</span>
                                                    <span class="date pull-left">23</span>
                                                </span>
                                                <!-- end:entry-date -->
                                                <span class="entry-meta pull-left">,&nbsp;</span>
                                                <span class="entry-author clearfix pull-left">
                                                    <span class="pull-left">By&nbsp;</span>
                                                    <a href="#" class="pull-left">Jack grove</a>
                                                </span>
                                                <!-- end:entry-author -->
                                            </header>

                                            <h6 class="entry-title"><a href="#">Suspected Suicide Bomber Kills 45 on Pakistani-Indian Border</a></h6>

                                        </div>
                                        <!-- end:entry-content -->
                                    </article>
                                    <!-- end:entry-item -->

                                </li>

                                <li>
                                    <article class="entry-item clearfix">
                                        <div class="entry-thumb pull-left">
                                            <a href="#"><img src="placeholders/post-image/post-10.jpg" alt=""></a>
                                        </div>
                                        <!-- end:entry-thumb -->
                                        <div class="entry-content">
                                
                                            <header class="clearfix">
                                                <span class="entry-date pull-left clearfix">
                                                    <i class="fa fa-clock-o pull-left"></i>
                                                    <span class="month pull-left">Sep.</span>
                                                    <span class="date pull-left">23</span>
                                                </span>
                                                <!-- end:entry-date -->
                                                <span class="entry-meta pull-left">,&nbsp;</span>
                                                <span class="entry-author clearfix pull-left">
                                                    <span class="pull-left">By&nbsp;</span>
                                                    <a href="#" class="pull-left">Jack grove</a>
                                                </span>
                                                <!-- end:entry-author -->
                                            </header>

                                            <h6 class="entry-title"><a href="#">Suspension is a feminist issue</a></h6>

                                        </div>
                                        <!-- end:entry-content -->
                                    </article>
                                    <!-- end:entry-item -->

                                </li>

                            </ul>

                        </div>
                        <!-- tab-panel -->

                    </div>
                    <!-- tab-content -->

                </div>
                <!-- punica-tab-container-1 -->
                
            </div>
            <!-- end:punica-tab-1-widget -->
            
        </aside>
        <!-- sidebar -->

        <div class="clear"></div>
        
    </div>
    <!-- end:wrapper -->

    <div class="widget-area-4 mt-30">

        <div class="widget punica-ads-1-widget">
            <a href="#"><img src="placeholders/banner-2.jpg" alt=""></a>
        </div>
        <!-- end:punica-ads-1-widget -->
        
    </div>

    <div class="wrapper clearfix">
        <div class="widget-area-10">

            <div class="widget punica-article-list-3-widget">

                <h2 class="widget-title widget-title-s2"><span>Video Of The Week</span></h2>

                <div class="widget-content clearfix">

                    <div class="mask"></div>

                    <article class="last-item pull-left">

                        <div class="entry-content">
                            <header class="clearfix">
                                <span class="entry-date pull-left clearfix">
                                    <i class="fa fa-clock-o pull-left"></i>
                                    <span class="month pull-left">Sep.</span>
                                    <span class="date pull-left">23</span>
                                </span>
                                <!-- end:entry-date -->
                                <span class="entry-meta pull-left">,&nbsp;</span>
                                <span class="entry-author clearfix pull-left">
                                    <span class="pull-left">By&nbsp;</span>
                                    <a href="#" class="pull-left">Jack grove</a>
                                </span>
                                <!-- end:entry-author -->
                            </header>

                            <h2 class="entry-title"><a href="#">New York City Ebola Patient's Condition Upgraded from 'Serious' to 'Stable'</a></h2>
                            <p class="entry-excerpt">Vivamus auctor quam nec mauris commodo laoreet. Nam ut metus elementum, pharetra diam sed, rhoncus tortor. Sed vehicula justo ut sem auctor sagittis. Sed vehicula justo ut sem auctor sagittis.</p>
                        </div>
                        
                    </article>
                    <!-- end:last-item -->

                    <ul class="older-post clearfix pull-left">
                        <li>
                            <article class="entry-item">
                                <div class="entry-thumb">
                                    <a href="#" class="entry-categories pink">Life style</a>
                                    <div class="punica-zoom-effect"><a href="#"><img src="placeholders/post-image/post-28.jpg" alt=""></a></div>
                                </div>
                                <!-- end:entry-thumb -->
                                <div class="entry-content">
                                    <h6 class="entry-title"><a href="#">10 Questions To Ask Before Getting Your Next Travel Credit Card</a></h6>
                                </div>
                            </article>
                            <!-- end:entry-item -->
                        </li>
                        <li>
                            <article class="entry-item">
                                <div class="entry-thumb">
                                    <a href="#" class="entry-categories green">World</a>
                                    <div class="punica-zoom-effect"><a href="#"><img src="placeholders/post-image/post-4.jpg" alt=""></a></div>
                                </div>
                                <!-- end:entry-thumb -->
                                <div class="entry-content">
                                    <h6 class="entry-title"><a href="#">10 Questions To Ask Before Getting Your Next Travel Credit Card</a></h6>
                                </div>
                            </article>
                            <!-- end:entry-item -->
                        </li>
                        <li>
                            <article class="entry-item">
                                <div class="entry-thumb">
                                    <a href="#" class="entry-categories orange">Foods</a>
                                    <div class="punica-zoom-effect"><a href="#"><img src="placeholders/post-image/post-29.jpg" alt=""></a></div>
                                </div>
                                <!-- end:entry-thumb -->
                                <div class="entry-content">
                                    <h6 class="entry-title"><a href="#">10 Questions To Ask Before Getting Your Next Travel Credit Card</a></h6>
                                </div>
                            </article>
                            <!-- end:entry-item -->
                        </li>
                        <li>
                            <article class="entry-item">
                                <div class="entry-thumb">
                                    <a href="#" class="entry-categories blue">Culture</a>
                                    <div class="punica-zoom-effect"><a href="#"><img src="placeholders/post-image/post-30.jpg" alt=""></a></div>
                                </div>
                                <!-- end:entry-thumb -->
                                <div class="entry-content">
                                    <h6 class="entry-title"><a href="#">10 Questions To Ask Before Getting Your Next Travel Credit Card</a></h6>
                                </div>
                                <!-- end:entry-content -->
                            </article>
                            <!-- end:entry-item -->
                        </li>
                    </ul>
                    
                </div>
                <!-- end:widget-content -->   

                <a class="load-more" href="#">Бүх бичлэг үзэх</a>             

            </div>
            <!-- end:punica-article-list-3-widget -->
            
        </div>
    <!-- end:widget-area-4 -->
    </div>

    <div class="wrapper clearfix">

        <div class="col-a pull-left">

            <div class="widget-area-5">

                <div class="widget punica-carousel-list-2-widget">

                    <h2 class="widget-title widget-title-s2"><span>Pictures of the week</span></h2>

                    <div class="punica-carousel-wrapper">
                        
                        <div class="owl-carousel punica-carousel-2">

                            <div class="item">
                                <article class="entry-item">
                                    <div class="entry-content">
                                    
                                        <header class="clearfix">
                                            <span class="entry-date pull-left clearfix">
                                                <i class="fa fa-clock-o pull-left"></i>
                                                <span class="month pull-left">Sep.</span>
                                                <span class="date pull-left">23</span>
                                            </span>
                                            <!-- end:entry-date -->
                                            <span class="entry-meta pull-left">,&nbsp;</span>
                                            <span class="entry-author clearfix pull-left">
                                                <span class="pull-left">By&nbsp;</span>
                                                <a href="#" class="pull-left">Jack grove</a>
                                            </span>
                                            <!-- end:entry-author -->
                                        </header>

                                        <h6 class="entry-title"><a href="#">Suspected Suicide Bomber Kills 45 on Pakistani-Indian Border</a></h6>

                                    </div>
                                    <!-- end:entry-content -->
                                    <div class="entry-thumb">
                                        <a class="entry-categories" href="#">World</a>
                                        <div class="punica-zoom-effect"><a href="#"><img src="placeholders/post-image/post-12.jpg" alt=""></a></div>
                                        <div class="mask"><a href="#"></a></div>
                                    </div>
                                    <!-- end:entry-thumb -->
                                </article>
                                <!-- end:entry-item -->
                            </div>
                            <!-- end:item -->

                            <div class="item">
                                <article class="entry-item">
                                    <div class="entry-content">
                                    
                                        <header class="clearfix">
                                            <span class="entry-date pull-left clearfix">
                                                <i class="fa fa-clock-o pull-left"></i>
                                                <span class="month pull-left">Sep.</span>
                                                <span class="date pull-left">23</span>
                                            </span>
                                            <!-- end:entry-date -->
                                            <span class="entry-meta pull-left">,&nbsp;</span>
                                            <span class="entry-author clearfix pull-left">
                                                <span class="pull-left">By&nbsp;</span>
                                                <a href="#" class="pull-left">Jack grove</a>
                                            </span>
                                            <!-- end:entry-author -->
                                        </header>

                                        <h6 class="entry-title"><a href="#">Photos: A near-miss Great White encounter in Esperance</a></h6>

                                    </div>
                                    <!-- end:entry-content -->
                                    <div class="entry-thumb">
                                        <a class="entry-categories green" href="#">Life style</a>
                                        <div class="punica-zoom-effect"><a href="#"><img src="placeholders/post-image/post-13.jpg" alt=""></a></div>
                                        <div class="mask"><a href="#"></a></div>
                                    </div>
                                    <!-- end:entry-thumb -->
                                </article>
                                <!-- end:entry-item -->
                            </div>
                            <!-- end:item -->

                            <div class="item">
                                <article class="entry-item">
                                    <div class="entry-content">
                                    
                                        <header class="clearfix">
                                            <span class="entry-date pull-left clearfix">
                                                <i class="fa fa-clock-o pull-left"></i>
                                                <span class="month pull-left">Sep.</span>
                                                <span class="date pull-left">23</span>
                                            </span>
                                            <!-- end:entry-date -->
                                            <span class="entry-meta pull-left">,&nbsp;</span>
                                            <span class="entry-author clearfix pull-left">
                                                <span class="pull-left">By&nbsp;</span>
                                                <a href="#" class="pull-left">Jack grove</a>
                                            </span>
                                            <!-- end:entry-author -->
                                        </header>

                                        <h6 class="entry-title"><a href="#">Suspected Suicide Bomber Kills 45 on Pakistani-Indian Border</a></h6>

                                    </div>
                                    <!-- end:entry-content -->
                                    <div class="entry-thumb">
                                        <a class="entry-categories blue" href="#">World</a>
                                        <div class="punica-zoom-effect"><a href="#"><img src="placeholders/post-image/post-14.jpg" alt=""></a></div>
                                        <div class="mask"><a href="#"></a></div>
                                    </div>
                                    <!-- end:entry-thumb -->
                                </article>
                                <!-- end:entry-item -->
                            </div>
                            <!-- end:item -->

                            <div class="item">
                                <article class="entry-item">
                                    <div class="entry-content">
                                    
                                        <header class="clearfix">
                                            <span class="entry-date pull-left clearfix">
                                                <i class="fa fa-clock-o pull-left"></i>
                                                <span class="month pull-left">Sep.</span>
                                                <span class="date pull-left">23</span>
                                            </span>
                                            <!-- end:entry-date -->
                                            <span class="entry-meta pull-left">,&nbsp;</span>
                                            <span class="entry-author clearfix pull-left">
                                                <span class="pull-left">By&nbsp;</span>
                                                <a href="#" class="pull-left">Jack grove</a>
                                            </span>
                                            <!-- end:entry-author -->
                                        </header>

                                        <h6 class="entry-title"><a href="#">Photos: A near-miss Great White encounter in Esperance</a></h6>

                                    </div>
                                    <!-- end:entry-content -->
                                    <div class="entry-thumb">
                                        <a class="entry-categories" href="#">Life style</a>
                                        <div class="punica-zoom-effect"><a href="#"><img src="placeholders/post-image/post-13.jpg" alt=""></a></div>
                                        <div class="mask"><a href="#"></a></div>
                                    </div>
                                    <!-- end:entry-thumb -->
                                </article>
                                <!-- end:entry-item -->
                            </div>
                            <!-- end:item -->
                            
                        </div>
                        <!-- end:punica-carousel-2 -->

                        <div class="mask"></div>

                    </div>
                    <!-- end:punica-carousel-wrapper -->

                    <a href="#" class="load-more">View all</a>
                    
                </div>
                <!-- end:punica-carousel-list-2-widget -->

                <div class="widget punica-flex-1-widget">

                    <h2 class="widget-title widget-title-s2"><span>Video news</span></h2>

                    <div class="punica-flex-wrapper">

                        <div class="flexslider punica-flexslider-1">

                            <ul class="slides">

                                <li>
                                    <article class="entry-item clearfix">
                                        <div class="entry-thumb">
                                            <a href="#" class="entry-categories orange">Foods</a>
                                            <div class="punica-zoom-effect"><a href="#"><img src="placeholders/post-image/post-15.jpg" alt=""></a></div>
                                        </div>
                                        <!-- end:entry-thumb -->
                                        <div class="entry-content">
                                            <header class="clearfix">
                                                <span class="entry-date pull-left clearfix">
                                                    <i class="fa fa-clock-o pull-left"></i>
                                                    <span class="month pull-left">Sep.</span>
                                                    <span class="date pull-left">23</span>
                                                </span>
                                                <!-- end:entry-date -->
                                                <span class="entry-meta pull-left">,&nbsp;</span>
                                                <span class="entry-author clearfix pull-left">
                                                    <span class="pull-left">By&nbsp;</span>
                                                    <a href="#" class="pull-left">Jack grove</a>
                                                </span>
                                                <!-- end:entry-author -->
                                            </header>

                                            <h6 class="entry-title"><a href="#">Warning of a ‘winter of discontent’ over university pensions</a></h6>

                                            <p>Proin eu sapien non tortor mattis auctor ac sit amet justo. Aliquam pellentesque odio quis eleifend aliquet. In id sodales dui. Pellentesque ac est risus</p>
                                        </div>
                                        <!-- end:entry-content -->
                                    </article>
                                    <!-- end:entry-item -->
                                </li>

                                <li>
                                    <article class="entry-item clearfix">
                                        <div class="entry-thumb">
                                            <a href="#" class="entry-categories">Foods</a>
                                            <div class="punica-zoom-effect"><a href="#"><img src="placeholders/post-image/post-15.jpg" alt=""></a></div>
                                        </div>
                                        <!-- end:entry-thumb -->
                                        <div class="entry-content">
                                            <header class="clearfix">
                                                <span class="entry-date pull-left clearfix">
                                                    <i class="fa fa-clock-o pull-left"></i>
                                                    <span class="month pull-left">Sep.</span>
                                                    <span class="date pull-left">23</span>
                                                </span>
                                                <!-- end:entry-date -->
                                                <span class="entry-meta pull-left">,&nbsp;</span>
                                                <span class="entry-author clearfix pull-left">
                                                    <span class="pull-left">By&nbsp;</span>
                                                    <a href="#" class="pull-left">Jack grove</a>
                                                </span>
                                                <!-- end:entry-author -->
                                            </header>

                                            <h6 class="entry-title"><a href="#">Warning of a ‘winter of discontent’ over university pensions</a></h6>

                                            <p>Proin eu sapien non tortor mattis auctor ac sit amet justo. Aliquam pellentesque odio quis eleifend aliquet. In id sodales dui.</p>
                                        </div>
                                        <!-- end:entry-content -->
                                    </article>
                                    <!-- end:entry-item -->
                                </li>

                                <li>
                                    <article class="entry-item clearfix">
                                        <div class="entry-thumb">
                                            <a href="#" class="entry-categories">Foods</a>
                                            <div class="punica-zoom-effect"><a href="#"><img src="placeholders/post-image/post-15.jpg" alt=""></a></div>
                                        </div>
                                        <!-- end:entry-thumb -->
                                        <div class="entry-content">
                                            <header class="clearfix">
                                                <span class="entry-date pull-left clearfix">
                                                    <i class="fa fa-clock-o pull-left"></i>
                                                    <span class="month pull-left">Sep.</span>
                                                    <span class="date pull-left">23</span>
                                                </span>
                                                <!-- end:entry-date -->
                                                <span class="entry-meta pull-left">,&nbsp;</span>
                                                <span class="entry-author clearfix pull-left">
                                                    <span class="pull-left">By&nbsp;</span>
                                                    <a href="#" class="pull-left">Jack grove</a>
                                                </span>
                                                <!-- end:entry-author -->
                                            </header>

                                            <h6 class="entry-title"><a href="#">Warning of a ‘winter of discontent’ over university pensions</a></h6>

                                            <p>Proin eu sapien non tortor mattis auctor ac sit amet justo. Aliquam pellentesque odio quis eleifend aliquet. In id sodales dui. Pellentesque ac est risus.</p>
                                        </div>
                                        <!-- end:entry-content -->
                                    </article>
                                    <!-- end:entry-item -->
                                </li>

                                <li>
                                    <article class="entry-item clearfix">
                                        <div class="entry-thumb">
                                            <a href="#" class="entry-categories">Foods</a>
                                            <div class="punica-zoom-effect"><a href="#"><img src="placeholders/post-image/post-15.jpg" alt=""></a></div>
                                        </div>
                                        <!-- end:entry-thumb -->
                                        <div class="entry-content">
                                            <header class="clearfix">
                                                <span class="entry-date pull-left clearfix">
                                                    <i class="fa fa-clock-o pull-left"></i>
                                                    <span class="month pull-left">Sep.</span>
                                                    <span class="date pull-left">23</span>
                                                </span>
                                                <!-- end:entry-date -->
                                                <span class="entry-meta pull-left">,&nbsp;</span>
                                                <span class="entry-author clearfix pull-left">
                                                    <span class="pull-left">By&nbsp;</span>
                                                    <a href="#" class="pull-left">Jack grove</a>
                                                </span>
                                                <!-- end:entry-author -->
                                            </header>

                                            <h6 class="entry-title"><a href="#">Warning of a ‘winter of discontent’ over university pensions</a></h6>

                                            <p>Proin eu sapien non tortor mattis auctor ac sit amet justo. Aliquam pellentesque odio quis eleifend aliquet. In id sodales dui. Pellentesque ac est risus.</p>
                                        </div>
                                        <!-- end:entry-content -->
                                    </article>
                                    <!-- end:entry-item -->
                                </li>
                                
                            </ul>
                            <!-- end:slides -->
                            
                        </div>
                        <!-- end:punica-flexslider-1 -->

                        <div class="flexslider punica-flex-carousel-1">

                            <ul class="slides">
                                
                                <li><img src="placeholders/post-image/post-16.jpg" alt=""><div class="mask"></div></li>
                                <li><img src="placeholders/post-image/post-17.jpg" alt=""><div class="mask"></div></li>
                                <li><img src="placeholders/post-image/post-18.jpg" alt=""><div class="mask"></div></li>
                                <li><img src="placeholders/post-image/post-19.jpg" alt=""><div class="mask"></div></li>

                            </ul>
                            <!-- end:slides -->
                            
                        </div>
                        <!-- end:punica-flex-carousel-1 -->

                        <div class="mask"></div>
                        
                    </div>
                    <!-- end:punica-flex-wrapper -->                    

                    <a href="#" class="load-more">View all</a>
                    
                </div>
                <!-- end:punica-flex-1-widget -->

                <div class="punica-divider-fat-line"></div>
                
            </div>
            <!-- end:widget-area-5 -->

            <div class="row">

                <div class="widget-area-6 col-md-4 col-sm-4">

                    <div class="widget punica-article-list-2-widget">
                        
                        <h2 class="widget-title widget-title-s2"><span>Business</span></h2>

                        <article class="last-item">
                            <div class="entry-thumb">
                                <a href="#" class="entry-categories green">News</a>
                                <div class="punica-zoom-effect"><a href="#"><img src="placeholders/post-image/post-20.jpg" alt=""></a></div>
                            </div>
                            <!-- end:entry-thumb -->
                            <div class="entry-content">
                                <header class="clearfix">
                                    <span class="entry-date pull-left clearfix">
                                        <i class="fa fa-clock-o pull-left"></i>
                                        <span class="month pull-left">Sep.</span>
                                        <span class="date pull-left">23</span>
                                    </span>
                                    <!-- end:entry-date -->
                                    <span class="entry-meta pull-left">,&nbsp;</span>
                                    <span class="entry-author clearfix pull-left">
                                        <span class="pull-left">By&nbsp;</span>
                                        <a href="#" class="pull-left">Jack grove</a>
                                    </span>
                                    <!-- end:entry-author -->
                                </header>

                                <h6 class="entry-title"><a href="#">Warning of a ‘winter of discontent’ over university pensions</a></h6>

                                <p>Proin eu sapien non tortor mattis auctor ac sit amet justo. Aliquam pellentesque odio quis eleifend aliquet. In id sodales dui. Pellentesque ac est risus. Vestibulum</p>
                            </div>
                            <!-- end:entry-content -->
                        </article>
                        <!-- end:last-item -->

                        <ul class="older-post">
                            <li>
                                <article class="entry-item">
                                    <div class="entry-content">
                                        <header class="clearfix">
                                            <span class="entry-date pull-left clearfix">
                                                <i class="fa fa-clock-o pull-left"></i>
                                                <span class="month pull-left">Sep.</span>
                                                <span class="date pull-left">23</span>
                                            </span>
                                            <!-- end:entry-date -->
                                            <span class="entry-meta pull-left">,&nbsp;</span>
                                            <span class="entry-author clearfix pull-left">
                                                <span class="pull-left">By&nbsp;</span>
                                                <a href="#" class="pull-left">Jack grove</a>
                                            </span>
                                            <!-- end:entry-author -->
                                        </header>

                                        <h6 class="entry-title"><a href="#">New York City Ebola Patient's Condition Upgraded from 'Serious' to 'Stable'</a></h6>
                                    </div>
                                    <!-- end:entry-content -->
                                </article>
                                <!-- end:entry-item -->
                            </li>
                            <li>
                                <article class="entry-item">
                                    <div class="entry-content">
                                        <header class="clearfix">
                                            <span class="entry-date pull-left clearfix">
                                                <i class="fa fa-clock-o pull-left"></i>
                                                <span class="month pull-left">Sep.</span>
                                                <span class="date pull-left">23</span>
                                            </span>
                                            <!-- end:entry-date -->
                                            <span class="entry-meta pull-left">,&nbsp;</span>
                                            <span class="entry-author clearfix pull-left">
                                                <span class="pull-left">By&nbsp;</span>
                                                <a href="#" class="pull-left">Jack grove</a>
                                            </span>
                                            <!-- end:entry-author -->
                                        </header>

                                        <h6 class="entry-title"><a href="#">Mystery of Amelia Earhart Solved? Fragment From Missing Plane Identified</a></h6>
                                    </div>
                                    <!-- end:entry-content -->
                                </article>
                                <!-- end:entry-item -->
                            </li>
                        </ul>
                        <!-- end:older-post -->

                        <a href="#" class="load-more">View all</a>

                    </div>
                    <!-- end:punica-article-list-2-widget -->

                    <div class="punica-divider-fat-line"></div>
                    
                </div>
                <!-- end:widget-area-6 -->

                <div class="widget-area-7 col-md-4 col-sm-4">

                    <div class="widget punica-article-list-2-widget">
                        
                        <h2 class="widget-title widget-title-s2"><span>Technology</span></h2>

                        <article class="last-item">
                            <div class="entry-thumb">
                                <a href="#" class="entry-categories blue">News</a>
                                <div class="punica-zoom-effect"><a href="#"><img src="placeholders/post-image/post-21.jpg" alt=""></a></div>
                            </div>
                            <!-- end:entry-thumb -->
                            <div class="entry-content">
                                <header class="clearfix">
                                    <span class="entry-date pull-left clearfix">
                                        <i class="fa fa-clock-o pull-left"></i>
                                        <span class="month pull-left">Sep.</span>
                                        <span class="date pull-left">23</span>
                                    </span>
                                    <!-- end:entry-date -->
                                    <span class="entry-meta pull-left">,&nbsp;</span>
                                    <span class="entry-author clearfix pull-left">
                                        <span class="pull-left">By&nbsp;</span>
                                        <a href="#" class="pull-left">Jack grove</a>
                                    </span>
                                    <!-- end:entry-author -->
                                </header>

                                <h6 class="entry-title"><a href="#">Warning of a ‘winter of discontent’ over university pensions</a></h6>

                                <p>Proin eu sapien non tortor mattis auctor ac sit amet justo. Aliquam pellentesque odio quis eleifend aliquet. In id sodales dui. Pellentesque ac est risus. Vestibulum</p>
                            </div>
                            <!-- end:entry-content -->
                        </article>
                        <!-- end:last-item -->

                        <ul class="older-post">
                            <li>
                                <article class="entry-item">
                                    <div class="entry-content">
                                        <header class="clearfix">
                                            <span class="entry-date pull-left clearfix">
                                                <i class="fa fa-clock-o pull-left"></i>
                                                <span class="month pull-left">Sep.</span>
                                                <span class="date pull-left">23</span>
                                            </span>
                                            <!-- end:entry-date -->
                                            <span class="entry-meta pull-left">,&nbsp;</span>
                                            <span class="entry-author clearfix pull-left">
                                                <span class="pull-left">By&nbsp;</span>
                                                <a href="#" class="pull-left">Jack grove</a>
                                            </span>
                                            <!-- end:entry-author -->
                                        </header>

                                        <h6 class="entry-title"><a href="#">New York City Ebola Patient's Condition Upgraded from 'Serious' to 'Stable'</a></h6>
                                    </div>
                                    <!-- end:entry-content -->
                                </article>
                                <!-- end:entry-item -->
                            </li>
                            <li>
                                <article class="entry-item">
                                    <div class="entry-content">
                                        <header class="clearfix">
                                            <span class="entry-date pull-left clearfix">
                                                <i class="fa fa-clock-o pull-left"></i>
                                                <span class="month pull-left">Sep.</span>
                                                <span class="date pull-left">23</span>
                                            </span>
                                            <!-- end:entry-date -->
                                            <span class="entry-meta pull-left">,&nbsp;</span>
                                            <span class="entry-author clearfix pull-left">
                                                <span class="pull-left">By&nbsp;</span>
                                                <a href="#" class="pull-left">Jack grove</a>
                                            </span>
                                            <!-- end:entry-author -->
                                        </header>

                                        <h6 class="entry-title"><a href="#">Mystery of Amelia Earhart Solved? Fragment From Missing Plane Identified</a></h6>
                                    </div>
                                    <!-- end:entry-content -->
                                </article>
                                <!-- end:entry-item -->
                            </li>
                        </ul>
                        <!-- end:older-post -->

                        <a href="#" class="load-more">View all</a>

                    </div>
                    <!-- end:punica-article-list-2-widget -->

                    <div class="punica-divider-fat-line"></div>
                    
                </div>
                <!-- end:widget-area-7 -->

                <div class="widget-area-8 col-md-4 col-sm-4">

                    <div class="widget punica-article-list-2-widget">
                        
                        <h2 class="widget-title widget-title-s2"><span>Foods</span></h2>

                        <article class="last-item">
                            <div class="entry-thumb">
                                <a href="#" class="entry-categories orange">News</a>
                                <div class="punica-zoom-effect"><a href="#"><img src="placeholders/post-image/post-22.jpg" alt=""></a></div>
                            </div>
                            <!-- end:entry-thumb -->
                            <div class="entry-content">
                                <header class="clearfix">
                                    <span class="entry-date pull-left clearfix">
                                        <i class="fa fa-clock-o pull-left"></i>
                                        <span class="month pull-left">Sep.</span>
                                        <span class="date pull-left">23</span>
                                    </span>
                                    <!-- end:entry-date -->
                                    <span class="entry-meta pull-left">,&nbsp;</span>
                                    <span class="entry-author clearfix pull-left">
                                        <span class="pull-left">By&nbsp;</span>
                                        <a href="#" class="pull-left">Jack grove</a>
                                    </span>
                                    <!-- end:entry-author -->
                                </header>

                                <h6 class="entry-title"><a href="#">Warning of a ‘winter of discontent’ over university pensions</a></h6>

                                <p>Proin eu sapien non tortor mattis auctor ac sit amet justo. Aliquam pellentesque odio quis eleifend aliquet. In id sodales dui. Pellentesque ac est risus. Vestibulum</p>
                            </div>
                            <!-- end:entry-content -->
                        </article>
                        <!-- end:last-item -->

                        <ul class="older-post">
                            <li>
                                <article class="entry-item">
                                    <div class="entry-content">
                                        <header class="clearfix">
                                            <span class="entry-date pull-left clearfix">
                                                <i class="fa fa-clock-o pull-left"></i>
                                                <span class="month pull-left">Sep.</span>
                                                <span class="date pull-left">23</span>
                                            </span>
                                            <!-- end:entry-date -->
                                            <span class="entry-meta pull-left">,&nbsp;</span>
                                            <span class="entry-author clearfix pull-left">
                                                <span class="pull-left">By&nbsp;</span>
                                                <a href="#" class="pull-left">Jack grove</a>
                                            </span>
                                            <!-- end:entry-author -->
                                        </header>

                                        <h6 class="entry-title"><a href="#">New York City Ebola Patient's Condition Upgraded from 'Serious' to 'Stable'</a></h6>
                                    </div>
                                    <!-- end:entry-content -->
                                </article>
                                <!-- end:entry-item -->
                            </li>
                            <li>
                                <article class="entry-item">
                                    <div class="entry-content">
                                        <header class="clearfix">
                                            <span class="entry-date pull-left clearfix">
                                                <i class="fa fa-clock-o pull-left"></i>
                                                <span class="month pull-left">Sep.</span>
                                                <span class="date pull-left">23</span>
                                            </span>
                                            <!-- end:entry-date -->
                                            <span class="entry-meta pull-left">,&nbsp;</span>
                                            <span class="entry-author clearfix pull-left">
                                                <span class="pull-left">By&nbsp;</span>
                                                <a href="#" class="pull-left">Jack grove</a>
                                            </span>
                                            <!-- end:entry-author -->
                                        </header>

                                        <h6 class="entry-title"><a href="#">Mystery of Amelia Earhart Solved? Fragment From Missing Plane Identified</a></h6>
                                    </div>
                                    <!-- end:entry-content -->
                                </article>
                                <!-- end:entry-item -->
                            </li>
                        </ul>
                        <!-- end:older-post -->

                        <a href="#" class="load-more">View all</a>

                    </div>
                    <!-- end:punica-article-list-2-widget -->

                    <div class="punica-divider-fat-line"></div>
                    
                </div>
                <!-- end:widget-area-8 -->
                
            </div>
            <!-- end:row -->
        </div>
        <!-- end:col-a -->

        <aside class="sidebar pull-left">

            <div class="widget punica-watching-list-widget">
                    
                <h2 class="widget-title widget-title-s2"><span>Watching</span></h2>

                <article class="last-item">
                    <div class="entry-thumb">
                        <a href="#" class="entry-categories blue">News</a>
                        <div class="punica-zoom-effect"><a href="#"><img src="placeholders/post-image/post-26.jpg" alt=""></a></div>
                    </div>
                    <!-- end:entry-thumb -->
                    <div class="entry-content">
                        <header class="clearfix">
                            <span class="entry-time-ago pull-left clearfix">
                                <i class="fa fa-clock-o pull-left"></i>
                                <span class="pull-left">18M</span>
                            </span>
                            <!-- end:entry-time-ago -->
                            <span class="entry-meta pull-left">,&nbsp;</span>
                            <span class="entry-author clearfix pull-left">
                                <span class="pull-left">By&nbsp;</span>
                                <a href="#" class="pull-left">Jack grove</a>
                            </span>
                            <!-- end:entry-author -->
                        </header>

                        <h6 class="entry-title"><a href="#">10 Questions To Ask Before Getting Your Next Travel Credit Card</a></h6>
                    </div>
                    <!-- end:entry-content -->
                </article>
                <!-- end:last-item -->

                <ul class="older-post">
                    <li>
                        <article class="entry-item">
                            <div class="entry-content">
                                <header class="clearfix">
                                    <span class="entry-time-ago pull-left clearfix">
                                        <i class="fa fa-clock-o pull-left"></i>
                                        <span class="pull-left">1H</span>
                                    </span>
                                    <!-- end:entry-time-ago -->
                                    <span class="entry-meta pull-left">,&nbsp;</span>
                                    <span class="entry-author clearfix pull-left">
                                        <span class="pull-left">By&nbsp;</span>
                                        <a href="#" class="pull-left">Jack grove</a>
                                    </span>
                                    <!-- end:entry-author -->
                                </header>

                                <h6 class="entry-title"><a href="#">Suspected Suicide Bomber Kills 45 on Pakistani-Indian Border</a></h6>
                            </div>
                            <!-- end:entry-content -->
                        </article>
                        <!-- end:entry-item -->
                    </li>
                    <li>
                        <article class="entry-item">
                            <div class="entry-content">
                                <header class="clearfix">
                                    <span class="entry-time-ago pull-left clearfix">
                                        <i class="fa fa-clock-o pull-left"></i>
                                        <span class="pull-left">3H</span>
                                    </span>
                                    <!-- end:entry-time-ago -->
                                    <span class="entry-meta pull-left">,&nbsp;</span>
                                    <span class="entry-author clearfix pull-left">
                                        <span class="pull-left">By&nbsp;</span>
                                        <a href="#" class="pull-left">Jack grove</a>
                                    </span>
                                    <!-- end:entry-author -->
                                </header>

                                <h6 class="entry-title"><a href="#">Suspected Suicide Bomber Kills 45 on Pakistani-Indian Border</a></h6>
                            </div>
                            <!-- end:entry-content -->
                        </article>
                        <!-- end:entry-item -->
                    </li>
                    <li>
                        <article class="entry-item">
                            <div class="entry-content">
                                <header class="clearfix">
                                    <span class="entry-time-ago pull-left clearfix">
                                        <i class="fa fa-clock-o pull-left"></i>
                                        <span class="pull-left">7H</span>
                                    </span>
                                    <!-- end:entry-time-ago -->
                                    <span class="entry-meta pull-left">,&nbsp;</span>
                                    <span class="entry-author clearfix pull-left">
                                        <span class="pull-left">By&nbsp;</span>
                                        <a href="#" class="pull-left">Jack grove</a>
                                    </span>
                                    <!-- end:entry-author -->
                                </header>

                                <h6 class="entry-title"><a href="#">Suspected Suicide Bomber Kills 45 on Pakistani-Indian Border</a></h6>
                            </div>
                            <!-- end:entry-content -->
                        </article>
                        <!-- end:entry-item -->
                    </li>
                </ul>
                <!-- end:older-post -->

            </div>
            <!-- end:punica-watching-list-widget -->

            <div class="widget punica-article-list-5-widget">

                <div class="widget-content">
                    
                    <h2 class="widget-title widget-title-s4">Celebrity blogs</h2>

                    <ul class="clearfix">
                        <li>
                            <article class="entry-item">
                                <div class="entry-thumb">
                                    <a href="#" class="entry-categories orange">Foods</a>
                                    <div class="punica-zoom-effect"><a href="#"><img src="placeholders/post-image/post-2.jpg" alt=""></a></div>
                                    <div class="mask"></div>
                                </div>
                                <!-- end:entry-thumb -->
                                <div class="entry-content">
                                    <header class="clearfix">
                                        <span class="entry-date pull-left clearfix">
                                            <i class="fa fa-clock-o pull-left"></i>
                                            <span class="month pull-left">Sep.</span>
                                            <span class="date pull-left">23</span>
                                        </span>
                                        <!-- end:entry-date -->
                                        <span class="entry-meta pull-left">,&nbsp;</span>
                                        <span class="entry-author clearfix pull-left">
                                            <span class="pull-left">By&nbsp;</span>
                                            <a href="#" class="pull-left">Jack grove</a>
                                        </span>
                                        <!-- end:entry-author -->
                                    </header>

                                    <h6 class="entry-title"><a href="#">10 Questions To Ask Before Getting Your Next Travel Credit Card</a></h6>
                                </div>
                                <!-- end:entry-content -->
                            </article>
                            <!-- end:entry-item -->
                        </li>
                        <li>
                            <article class="entry-item">
                                <div class="entry-thumb">
                                    <a href="#" class="entry-categories green">World</a>
                                    <div class="punica-zoom-effect"><a href="#"><img src="placeholders/post-image/post-3.jpg" alt=""></a></div>
                                    <div class="mask"></div>
                                </div>
                                <!-- end:entry-thumb -->
                                <div class="entry-content">
                                    <header class="clearfix">
                                        <span class="entry-date pull-left clearfix">
                                            <i class="fa fa-clock-o pull-left"></i>
                                            <span class="month pull-left">Sep.</span>
                                            <span class="date pull-left">23</span>
                                        </span>
                                        <!-- end:entry-date -->
                                        <span class="entry-meta pull-left">,&nbsp;</span>
                                        <span class="entry-author clearfix pull-left">
                                            <span class="pull-left">By&nbsp;</span>
                                            <a href="#" class="pull-left">Jack grove</a>
                                        </span>
                                        <!-- end:entry-author -->
                                    </header>

                                    <h6 class="entry-title"><a href="#">10 Questions To Ask Before Getting Your Next Travel Credit Card</a></h6>
                                </div>
                                <!-- end:entry-content -->
                            </article>
                            <!-- end:entry-item -->
                        </li>
                        <li>
                            <article class="entry-item">
                                <div class="entry-thumb">
                                    <a href="#" class="entry-categories pink">Life style</a>
                                    <div class="punica-zoom-effect"><a href="#"><img src="placeholders/post-image/post-27.jpg" alt=""></a></div>
                                    <div class="mask"></div>
                                </div>
                                <!-- end:entry-thumb -->
                                <div class="entry-content">
                                    <header class="clearfix">
                                        <span class="entry-date pull-left clearfix">
                                            <i class="fa fa-clock-o pull-left"></i>
                                            <span class="month pull-left">Sep.</span>
                                            <span class="date pull-left">23</span>
                                        </span>
                                        <!-- end:entry-date -->
                                        <span class="entry-meta pull-left">,&nbsp;</span>
                                        <span class="entry-author clearfix pull-left">
                                            <span class="pull-left">By&nbsp;</span>
                                            <a href="#" class="pull-left">Jack grove</a>
                                        </span>
                                        <!-- end:entry-author -->
                                    </header>

                                    <h6 class="entry-title"><a href="#">10 Questions To Ask Before Getting Your Next Travel Credit Card</a></h6>
                                </div>
                                <!-- end:entry-content -->
                            </article>
                            <!-- end:entry-item -->
                        </li>
                    </ul>

                </div>
                
            </div>
            <!-- end:punica-article-list-5-widget -->

            <div class="widget punica-ads-3-widget">
                <a href="#"><img src="placeholders/banner-3.jpg" alt=""></a>
            </div>
            <!-- end:punica-ads-3-widget -->
            
        </aside>
        <!-- end:sidebar -->

        <div class="clear"></div>

        <div class="punica-divider-fat-line"></div>

       
        <!-- end:widget-area-10 -->
        
    </div>
    <!-- end:wrapper -->
    
</div>
<!-- end:main-content -->


@endsection