@extends('layouts.app')

@section('content')

<div class="main">
        <div class="main-inner">
            <div class="content">
                <div class="mt-80">
    <div class="hero-video">
    <video preload="metadata" autoplay="" muted="" loop="">
        <source src="{{asset('bdtravellbangladesh/assets/img/tmp/video.mp4')}}" type="video/mp4">
    </video>

    <div class="video-overlay"></div>

    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
                <h1>Directory Template</h1>
                <p>Create your own directory website by using Superlist HTML template <br> incorporating all features of modern directory website.</p>

                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for event, hotel, restaurant, job ... ">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="button">Search</button>
                    </span>
                </div><!-- /.input-group -->
            </div><!-- /.col-* -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.hero-video -->

</div>

<div class="container">
    <div class="block background-white fullwidth pt0 pb0">
        <div class="partners">
    <a href="#">
        <img src="{{asset('bdtravellbangladesh/assets/img/tmp/partner-1.jpg')}}" alt="">
    </a>

    <a href="#">
        <img src="{{asset('bdtravellbangladesh/assets/img/tmp/partner-2.jpg')}}" alt="">
    </a>

    <a href="#">
        <img src="{{asset('bdtravellbangladesh/assets/img/tmp/partner-3.jpg')}}" alt="">
    </a>

    <a href="#">
        <img src="{{asset('bdtravellbangladesh/assets/img/tmp/partner-4.jpg')}}" alt="">
    </a>

    <a href="#">
        <img src="{{asset('bdtravellbangladesh/assets/img/tmp/partner-5.jpg')}}" alt="">
    </a>
</div><!-- /.partners -->

    </div>

    <div class="page-header">
    <h1>Most Recent Places &amp; Events</h1>
    <p>List of most recent interesting places and events in our directory submitted <br>by our users. Check whats going on in the city now.</p>
</div><!-- /.page-header -->

<div class="cards-simple-wrapper">
    <div class="row">
        

        
            

            <div class="col-sm-6 col-md-3">
                <div class="card-simple" data-background-image="{{asset('bdtravellbangladesh/assets/img/tmp/product-2.jpg')}}">
                    <div class="card-simple-background">
                        <div class="card-simple-content">
                            <h2><a href="listing-detail.html">Tasty Brazil Coffee</a></h2>
                            <div class="card-simple-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.card-rating -->

                            <div class="card-simple-actions">
                                <a href="#" class="fa fa-bookmark-o"></a>
                                <a href="listing-detail.html" class="fa fa-search"></a>
                                <a href="#" class="fa fa-heart-o"></a>
                            </div><!-- /.card-simple-actions -->
                        </div><!-- /.card-simple-content -->

                        <div class="card-simple-label">Coffee</div>
                        
                    </div><!-- /.card-simple-background -->
                </div><!-- /.card-simple -->
            </div><!-- /.col-* -->
        
            

            <div class="col-sm-6 col-md-3">
                <div class="card-simple" data-background-image="{{asset('bdtravellbangladesh/assets/img/tmp/product-3.jpg')}}">
                    <div class="card-simple-background">
                        <div class="card-simple-content">
                            <h2><a href="listing-detail.html">Healthy Breakfast</a></h2>
                            <div class="card-simple-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.card-rating -->

                            <div class="card-simple-actions">
                                <a href="#" class="fa fa-bookmark-o"></a>
                                <a href="listing-detail.html" class="fa fa-search"></a>
                                <a href="#" class="fa fa-heart-o"></a>
                            </div><!-- /.card-simple-actions -->
                        </div><!-- /.card-simple-content -->

                        <div class="card-simple-label">Food</div>
                        
                            <div class="card-simple-price">$12 / person</div>
                        
                    </div><!-- /.card-simple-background -->
                </div><!-- /.card-simple -->
            </div><!-- /.col-* -->
        
            

            <div class="col-sm-6 col-md-3">
                <div class="card-simple" data-background-image="{{asset('bdtravellbangladesh/assets/img/tmp/product-4.jpg')}}">
                    <div class="card-simple-background">
                        <div class="card-simple-content">
                            <h2><a href="listing-detail.html">Coffee &amp; Newspaper</a></h2>
                            <div class="card-simple-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.card-rating -->

                            <div class="card-simple-actions">
                                <a href="#" class="fa fa-bookmark-o"></a>
                                <a href="listing-detail.html" class="fa fa-search"></a>
                                <a href="#" class="fa fa-heart-o"></a>
                            </div><!-- /.card-simple-actions -->
                        </div><!-- /.card-simple-content -->

                        <div class="card-simple-label">Restaurant</div>
                        
                    </div><!-- /.card-simple-background -->
                </div><!-- /.card-simple -->
            </div><!-- /.col-* -->
        
            

            <div class="col-sm-6 col-md-3">
                <div class="card-simple" data-background-image="{{asset('bdtravellbangladesh/assets/img/tmp/product-5.jpg')}}">
                    <div class="card-simple-background">
                        <div class="card-simple-content">
                            <h2><a href="listing-detail.html">Boat Trip</a></h2>
                            <div class="card-simple-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.card-rating -->

                            <div class="card-simple-actions">
                                <a href="#" class="fa fa-bookmark-o"></a>
                                <a href="listing-detail.html" class="fa fa-search"></a>
                                <a href="#" class="fa fa-heart-o"></a>
                            </div><!-- /.card-simple-actions -->
                        </div><!-- /.card-simple-content -->

                        <div class="card-simple-label">Vacation</div>
                        
                    </div><!-- /.card-simple-background -->
                </div><!-- /.card-simple -->
            </div><!-- /.col-* -->
        
            

            <div class="col-sm-6 col-md-3">
                <div class="card-simple" data-background-image="{{asset('bdtravellbangladesh/assets/img/tmp/product-6.jpg')}}">
                    <div class="card-simple-background">
                        <div class="card-simple-content">
                            <h2><a href="listing-detail.html">Italian Restaurant</a></h2>
                            <div class="card-simple-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.card-rating -->

                            <div class="card-simple-actions">
                                <a href="#" class="fa fa-bookmark-o"></a>
                                <a href="listing-detail.html" class="fa fa-search"></a>
                                <a href="#" class="fa fa-heart-o"></a>
                            </div><!-- /.card-simple-actions -->
                        </div><!-- /.card-simple-content -->

                        <div class="card-simple-label">Restaurant</div>
                        
                            <div class="card-simple-price">$28 / person</div>
                        
                    </div><!-- /.card-simple-background -->
                </div><!-- /.card-simple -->
            </div><!-- /.col-* -->
        
            

            <div class="col-sm-6 col-md-3">
                <div class="card-simple" data-background-image="{{asset('bdtravellbangladesh/assets/img/tmp/product-7.jpg')}}">
                    <div class="card-simple-background">
                        <div class="card-simple-content">
                            <h2><a href="listing-detail.html">Best Brazil Coffee</a></h2>
                            <div class="card-simple-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.card-rating -->

                            <div class="card-simple-actions">
                                <a href="#" class="fa fa-bookmark-o"></a>
                                <a href="listing-detail.html" class="fa fa-search"></a>
                                <a href="#" class="fa fa-heart-o"></a>
                            </div><!-- /.card-simple-actions -->
                        </div><!-- /.card-simple-content -->

                        <div class="card-simple-label">Pub</div>
                        
                    </div><!-- /.card-simple-background -->
                </div><!-- /.card-simple -->
            </div><!-- /.col-* -->
        
            

            <div class="col-sm-6 col-md-3">
                <div class="card-simple" data-background-image="{{asset('bdtravellbangladesh/assets/img/tmp/product-8.jpg')}}">
                    <div class="card-simple-background">
                        <div class="card-simple-content">
                            <h2><a href="listing-detail.html">Retro Shop</a></h2>
                            <div class="card-simple-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.card-rating -->

                            <div class="card-simple-actions">
                                <a href="#" class="fa fa-bookmark-o"></a>
                                <a href="listing-detail.html" class="fa fa-search"></a>
                                <a href="#" class="fa fa-heart-o"></a>
                            </div><!-- /.card-simple-actions -->
                        </div><!-- /.card-simple-content -->

                        <div class="card-simple-label">Shop</div>
                        
                            <div class="card-simple-price">$3 / cup</div>
                        
                    </div><!-- /.card-simple-background -->
                </div><!-- /.card-simple -->
            </div><!-- /.col-* -->
        
            

            <div class="col-sm-6 col-md-3">
                <div class="card-simple" data-background-image="{{asset('bdtravellbangladesh/assets/img/tmp/product-9.jpg')}}">
                    <div class="card-simple-background">
                        <div class="card-simple-content">
                            <h2><a href="listing-detail.html">Wine Tasting</a></h2>
                            <div class="card-simple-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.card-rating -->

                            <div class="card-simple-actions">
                                <a href="#" class="fa fa-bookmark-o"></a>
                                <a href="listing-detail.html" class="fa fa-search"></a>
                                <a href="#" class="fa fa-heart-o"></a>
                            </div><!-- /.card-simple-actions -->
                        </div><!-- /.card-simple-content -->

                        <div class="card-simple-label">Event</div>
                        
                            <div class="card-simple-price">$13 / ticket</div>
                        
                    </div><!-- /.card-simple-background -->
                </div><!-- /.card-simple -->
            </div><!-- /.col-* -->
        
    </div><!-- /.row -->
</div><!-- /.cards-simple-wrapper -->


    <div class="block background-white fullwidth mt80">
        <div class="row">
            <div class="col-sm-6">
                <div class="posts">
    

    <div class="post">
        <div class="post-image">
            <img src="{{asset('bdtravellbangladesh/assets/img/tmp/product-6.jpg')}}" alt="">
            <a class="read-more" href="blog-detail-right-sidebar.html">View</a>
        </div><!-- /.post-image -->

        <div class="post-content">
            <div class="post-label">Automotive</div><!-- /.post-label -->
            <div class="post-date">07/12/2015</div><!-- /.post-date -->
            <h2>The Deep South</h2>
            <p>Oh, all right, I am. But if anything happens to me, tell them I died robbing some old man. Calculon is gonna kill us and it's a...</p>
        </div><!-- /.post-content -->
    </div><!-- /.post -->

    

    <div class="post">
        <div class="post-image">
            <img src="{{asset('bdtravellbangladesh/assets/img/tmp/product-8.jpg')}}" alt="">
            <a class="read-more" href="blog-detail-right-sidebar.html">View</a>
        </div><!-- /.post-image -->

        <div class="post-content">
            <div class="post-label">Transport</div><!-- /.post-label -->
            <div class="post-date">06/18/2015</div><!-- /.post-date -->
            <h2>Raging Bender</h2>
            <p>For one beautiful night I knew what it was like to be a grandmother. Subjugated, yet honored. Then throw her in the laundry roo...</p>
        </div><!-- /.post-content -->
    </div><!-- /.post -->

    

    <div class="post">
        <div class="post-image">
            <img src="{{asset('bdtravellbangladesh/assets/img/tmp/product-10.jpg')}}" alt="">
            <a class="read-more" href="blog-detail-right-sidebar.html">View</a>
        </div><!-- /.post-image -->

        <div class="post-content">
            <div class="post-label">Vacation</div><!-- /.post-label -->
            <div class="post-date">05/26/2015</div><!-- /.post-date -->
            <h2>The Prisoner of Benda</h2>
            <p>Check it out, y'all. Everyone who was invited is here. Well, thanks to the Internet, I'm now bored with. Is there a place on th...</p>
        </div><!-- /.post-content -->
    </div><!-- /.post -->
</div><!-- /.posts -->

            </div><!-- /.col-* -->

            <div class="col-sm-6">
                <div class="events">
    <div class="event">
        <div class="event-date">
            <span class="day">28</span>
            <span class="month">APR</span>
        </div><!-- /.event-date -->

        <div class="event-content">
            <h2>Cras cursus augue at porttitor</h2>
            <p>Nulla ac lectus posuere, rhoncus dui sed, finibus tellus. Proin enim mi.</p>
            <div class="event-time"><i class="fa fa-clock-o"></i> 8:00PM - 11:00PM</div><!-- /.event-time -->
        </div><!-- /.event-content -->
    </div><!-- /.event -->

    <div class="event">
        <div class="event-date">
            <span class="day">18</span>
            <span class="month">OCT</span>
        </div><!-- /.event-date -->

        <div class="event-content">
            <h2>Fusce pulvinar quam odio</h2>
            <p>Nulla ac lectus posuere, rhoncus dui sed, finibus tellus. Proin enim mi.</p>
            <div class="event-time"><i class="fa fa-clock-o"></i> 12:00AM - 2:00PM</div><!-- /.event-time -->
        </div><!-- /.event-content -->
    </div><!-- /.event -->

    <div class="event">
        <div class="event-date">
            <span class="day">22</span>
            <span class="month">FEB</span>
        </div><!-- /.event-date -->

        <div class="event-content">
            <h2>Cras libero justo, fringilla in quam</h2>
            <p>Nulla ac lectus posuere, rhoncus dui sed, finibus tellus. Proin enim mi.</p>
            <div class="event-time"><i class="fa fa-clock-o"></i> 10:00AM - 6:00PM</div><!-- /.event-time -->
        </div><!-- /.event-content -->
    </div><!-- /.event -->

    <div class="event">
        <div class="event-date">
            <span class="day">28</span>
            <span class="month">AUG</span>
        </div><!-- /.event-date -->

        <div class="event-content">
            <h2>Phasellus vitae velit sit</h2>
            <p>Nulla ac lectus posuere, rhoncus dui sed, finibus tellus. Proin enim mi.</p>
            <div class="event-time"><i class="fa fa-clock-o"></i> 8:00PM - 10:00PM</div><!-- /.event-time -->
        </div><!-- /.event-content -->
    </div><!-- /.event -->
</div><!-- /.events -->

            </div><!-- /.col-* -->
        </div><!-- /.row -->
    </div><!-- /.block -->

    <div class="block background-black-light fullwidth">
        <div class="row">
    <div class="col-sm-4">
        <div class="box">
            <div class="box-icon">
                <i class="fa fa-life-ring"></i>
            </div><!-- /.box-icon -->

            <div class="box-content">
                <h2>E-mail Support</h2>
                <p>We are always here to answer all your questions. Feel free to contact us.</p>

                <a href="#">Read More <i class="fa fa-chevron-right"></i></a>
            </div><!-- /.box-content -->
        </div>
    </div><!-- /.col-sm-4 -->

    <div class="col-sm-4">
        <div class="box">
            <div class="box-icon">
                <i class="fa fa-flask"></i>
            </div><!-- /.box-icon -->

            <div class="box-content">
                <h2>Always Improving</h2>
                <p>Our dedicated team of developers are implementing awesome features.</p>

                <a href="#">Read More <i class="fa fa-chevron-right"></i></a>
            </div><!-- /.box-content -->
        </div>
    </div><!-- /.col-sm-4 -->

    <div class="col-sm-4">
        <div class="box">
            <div class="box-icon">
                <i class="fa fa-thumbs-o-up"></i>
            </div><!-- /.box-icon -->

            <div class="box-content">
                <h2>Best Quality</h2>
                <p>We list only verifiend places and events to provide best content.</p>

                <a href="#">Read More <i class="fa fa-chevron-right"></i></a>
            </div><!-- /.box-content -->
        </div>
    </div><!-- /.col-sm-4 -->
</div><!-- /.row -->

    </div><!-- /.block -->

    <div class="block background-white background-transparent-image fullwidth">
        <div class="page-header">
    <h1>Hand Picked by Superlist</h1>
    <p>Check out the best places &amp; events in the city. Each one is worth<br> of visiting. Experience which you never forget.</p>
</div><!-- /.page-header -->

<div class="cards-wrapper">
    <div class="row">
        <div class="col-sm-8">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card" data-background-image="{{asset('bdtravellbangladesh/assets/img/tmp/product-7.jpg')}}">
                        <div class="card-label">
                            <a href="listing-detail.html">Coffe</a>
                        </div><!-- /.card-label -->

                        <div class="card-content">
                            <h2><a href="listing-detail.html">Brazilian Coffe Taste</a></h2>

                            <div class="card-meta">
                                <i class="fa fa-map-o"></i> 347/26 22th Avenue, NYC USA
                            </div><!-- /.card-meta -->

                            <div class="card-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.card-rating -->

                            <div class="card-actions">
                                <a href="#" class="fa fa-bookmark-o"></a>
                                <a href="listing-detail.html" class="fa fa-search"></a>
                                <a href="#" class="fa fa-heart-o"></a>
                            </div>

                        </div><!-- /.card-content -->
                    </div><!-- /.card -->
                </div><!-- /.col-* -->
            </div><!-- /.row -->

            <div class="row">
                <div class="col-sm-6">
                    <div class="card" data-background-image="{{asset('bdtravellbangladesh/assets/img/tmp/product-4.jpg')}}">
                        <div class="card-label">
                            <a href="listing-detail.html">Restaurant</a>
                        </div><!-- /.card-label -->

                        <div class="card-content">
                            <h2><a href="listing-detail.html">Coffee &amp; Newspaper</a></h2>

                            <div class="card-meta">
                                <i class="fa fa-map-o"></i> 347/26 22th Avenue, NYC USA
                            </div><!-- /.card-meta -->

                            <div class="card-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.card-rating -->

                            <div class="card-actions">
                                <a href="#" class="fa fa-bookmark-o"></a>
                                <a href="listing-detail.html" class="fa fa-search"></a>
                                <a href="#" class="fa fa-heart-o"></a>
                            </div>
                        </div><!-- /.card-content -->
                    </div><!-- /.card -->
                </div>

                <div class="col-sm-6">
                    <div class="card" data-background-image="{{asset('bdtravellbangladesh/assets/img/tmp/product-2.jpg')}}">
                        <div class="card-label">
                            <a href="listing-detail.html">Vacation</a>
                        </div><!-- /.card-label -->

                        <div class="card-content">
                            <h2><a href="listing-detail.html">Homemade Coffee</a></h2>

                            <div class="card-meta">
                                <i class="fa fa-map-o"></i> 347/26 22th Avenue, NYC USA
                            </div><!-- /.card-meta -->

                            <div class="card-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.card-rating -->

                            <div class="card-actions">
                                <a href="#" class="fa fa-bookmark-o marked"></a>
                                <a href="listing-detail.html" class="fa fa-search"></a>
                                <a href="#" class="fa fa-heart-o"></a>
                            </div>
                        </div><!-- /.card-content -->
                    </div><!-- /.card -->
                </div><!-- /.col-* -->
            </div><!-- /.row -->
        </div><!-- /.col-* -->

        <div class="col-sm-4">
            <div class="card card-tall" data-background-image="{{asset('bdtravellbangladesh/assets/img/tmp/product-1.jpg')}}">
                <div class="card-label">
                    <a href="listing-detail.html">Vacation</a>
                </div><!-- /.card-label -->

                <div class="card-content">
                    <h2><a href="listing-detail.html">Trip to Paris, France</a></h2>

                    <div class="card-meta">
                        <i class="fa fa-map-o"></i> 347/26 22th Avenue, NYC USA
                    </div><!-- /.card-meta -->

                    <div class="card-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div><!-- /.card-rating -->

                    <div class="card-actions">
                        <a href="#" class="fa fa-bookmark-o"></a>
                        <a href="listing-detail.html" class="fa fa-search"></a>
                        <a href="#" class="fa fa-heart-o marked"></a>
                    </div>
                </div><!-- /.card-content -->
            </div><!-- /.card -->
        </div><!-- /.col-* -->
    </div><!-- /.row -->
</div><!-- /.cards-wrapper -->

    </div>

    <div class="block background-white fullwidth">
        <div class="page-header">
    <h1>Testimonials</h1>
    <p>Read what our customers says about our directory services and products. Do you want to<br> read more? Check out another <a href="#">interesting testimonials</a>.</p>
</div><!-- /.page-header -->

<div class="row">
    <div class="col-sm-6">
        <div class="testimonial">
            <div class="testimonial-image">
                <img src="{{asset('bdtravellbangladesh/assets/img/tmp/agent-1.jpg')}}" alt="">
            </div><!-- /.testimonial-image -->

            <div class="testimonial-inner">
                <div class="testimonial-title">
                    <h2>Exactly What I Need</h2>

                    <div class="testimonial-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div><!-- /.testimonial-rating -->
                </div><!-- /.testimonial-title -->

                Quisque aliquet ornare nunc in viverra. Nullam ornare molestie ligula in luctus. Suspendisse ac cursus elit. Donec vel enim sit amet lorem vulputate condimentum.

                <div class="testimonial-sign">- Fiona Wilson</div><!-- /.testimonial-sign -->
            </div><!-- /.testimonial-inner -->
        </div><!-- /.testimonial -->

        <div class="testimonial">
            <div class="testimonial-image">
                <img src="{{asset('bdtravellbangladesh/assets/img/tmp/agent-2.jpg')}}" alt="">
            </div><!-- /.testimonial-image -->

            <div class="testimonial-inner">
                <div class="testimonial-title">
                    <h2>Best Support Ever</h2>

                    <div class="testimonial-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div><!-- /.testimonial-rating -->
                </div><!-- /.testimonial-title -->

                Duis et magna vel est tempus vehicula vitae sit amet enim. Sed vitae ligula congue, luctus mauris eu, scelerisque felis.

                <div class="testimonial-sign">- Natasha Samson</div><!-- /.testimonial-sign -->
            </div><!-- /.testimonial-inner -->
        </div><!-- /.testimonial -->

        <div class="testimonial last">
            <div class="testimonial-image">
                <img src="{{asset('bdtravellbangladesh/assets/img/tmp/agent-3.jpg')}}" alt="">
            </div><!-- /.testimonial-image -->

            <div class="testimonial-inner">
                <div class="testimonial-title">
                    <h2>Best Directory</h2>

                    <div class="testimonial-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div><!-- /.testimonial-rating -->
                </div><!-- /.testimonial-title -->

                Duis et magna vel est tempus vehicula vitae sit amet enim. Sed vitae ligula congue, luctus mauris eu, scelerisque felis.

                <div class="testimonial-sign">- Kim Glove</div><!-- /.testimonial-sign -->
            </div><!-- /.testimonial-inner -->
        </div><!-- /.testimonial -->
    </div><!-- /.col-* -->

    <div class="col-sm-6">
        <div class="testimonial">
            <div class="testimonial-image">
                <img src="{{asset('bdtravellbangladesh/assets/img/tmp/agent-4.jpg')}}" alt="">
            </div><!-- /.testimonial-image -->

            <div class="testimonial-inner">
                <div class="testimonial-title">
                    <h2>Totally Impressed</h2>

                    <div class="testimonial-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div><!-- /.testimonial-rating -->
                </div><!-- /.testimonial-title -->

                Curabitur scelerisque nulla consequat elit semper, vitae lobortis velit tempor. Sed purus eros, pellentesque non maximus scelerisque, aliquam id magna. Integer in metus ante. Integer faucibus mi quis rhoncus cursus.

                <div class="testimonial-sign">- Richard Peterson</div><!-- /.testimonial-sign -->
            </div><!-- /.testimonial-inner -->
        </div><!-- /.testimonial -->

        <div class="testimonial last">
            <div class="testimonial-image">
                <img src="{{asset('bdtravellbangladesh/assets/img/tmp/agent-5.jpg')}}" alt="">
            </div><!-- /.testimonial-image -->

            <div class="testimonial-inner">
                <div class="testimonial-title">
                    <h2>Awesome Directory </h2>

                    <div class="testimonial-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div><!-- /.testimonial-rating -->
                </div><!-- /.testimonial-title -->

                Donec finibus consectetur nunc, quis viverra nisi iaculis a. Donec non eros vel turpis bibendum sodales. Curabitur scelerisque nulla consequat elit semper, vitae lobortis velit tempor. Sed purus eros, pellentesque non maximus scelerisque, aliquam id magna. Integer in metus ante. Integer faucibus mi quis rhoncus cursus. Aliquam malesuada eleifend tellus, sit amet eleifend lacus aliquam in. Etiam a neque ut augue mattis gravida vel vel purus. Nullam bibendum viverra enim, in pretium purus.

                <div class="testimonial-sign">- Rachel Fast</div><!-- /.testimonial-sign -->
            </div><!-- /.testimonial-inner -->
        </div><!-- /.testimonial -->
    </div><!-- /.col-* -->
</div>

    </div>

    <div class="page-header">
    <h1>Fair Pricing</h1>
    <p>Our company offers best pricing options for field agents and companies. If you are interested <br>in special plan don't hesitate and contact our <a href="#">sales support</a>.</p>
</div><!-- /.page-header -->

<div class="pricings">
    <div class="row">
        <div class="col-sm-4">
            <div class="pricing">
                <div class="pricing-title">Personal</div><!-- /.pricing-title -->
                <div class="pricing-subtitle">For Personal Use</div><!-- /.pricing-subtitle -->
                <div class="pricing-price"><span class="pricing-currency">$</span>10.59 <span class="pricing-period">/ month</span></div><!-- /.pricing-price -->
                <a href="#" class="btn-primary">Get Started</a>
                <hr>
                <ul class="pricing-list">
                    <li><span>Max. Submissions</span><strong>Limited number</strong></li>
                    <li><span>Custom Agents</span><strong>One agent for all</strong></li>
                    <li><span>Support</span><strong>Mail communication</strong></li>
                </ul><!-- /.pricing-list -->
                <hr>
                <a href="#" class="pricing-action">Full List of Features</a>
            </div><!-- /.pricing -->
        </div><!-- /.col-* -->

        <div class="col-sm-4">
            <div class="pricing">
                <div class="pricing-title">Business</div><!-- /.pricing-title -->
                <div class="pricing-subtitle">Best for Companies</div><!-- /.pricing-subtitle -->
                <div class="pricing-price"><span class="pricing-currency">$</span>19.59 <span class="pricing-period">/ month</span></div><!-- /.pricing-price -->
                <a href="#" class="btn-primary">Get Started</a>
                <hr>
                <ul class="pricing-list">
                    <li><span>Max. Submissions</span><strong>Unlimited number</strong></li>
                    <li><span>Custom Agents</span><strong>One agent for all</strong></li>
                    <li><span>Support</span><strong>Mail communication</strong></li>
                </ul><!-- /.pricing-list -->
                <hr>
                <a href="#" class="pricing-action">Full List of Features</a>
            </div><!-- /.pricing -->
        </div><!-- /.col-* -->

        <div class="col-sm-4">
            <div class="pricing">
                <div class="pricing-title">Unlimited</div><!-- /.pricing-title -->
                <div class="pricing-subtitle">Entrepreneurs</div><!-- /.pricing-subtitle -->
                <div class="pricing-price"><span class="pricing-currency">$</span>49.59 <span class="pricing-period">/ month</span></div><!-- /.pricing-price -->
                <a href="#" class="btn-primary">Get Started</a>
                <hr>
                <ul class="pricing-list">
                    <li><span>Max. Submissions</span><strong>Unlimited number</strong></li>
                    <li><span>Custom Agents</span><strong>Unlimited number</strong></li>
                    <li><span>Support</span><strong>Personal training</strong></li>
                </ul><!-- /.pricing-list -->
                <hr>
                <a href="#" class="pricing-action">Full List of Features</a>
            </div><!-- /.pricing -->
        </div><!-- /.col-* -->
    </div><!-- /.row -->
</div><!-- /.pricings -->


    <div class="block background-white fullwidth mt80 mb-80">
        <div class="categories">
    <ul>
        <li>
            <a href="#" class="categories-action">Submit</a>
            <a href="#" class="categories-link"><i class="fa fa-bed"></i> Stay</a>
            <ul>
                <li><a href="#">Homestay</a>,</li>
                <li><a href="#">Hotel</a>,</li>
                <li><a href="#">Camping</a>,</li>
                <li><a href="#">Guesthouse,</a></li>
                <li><a href="#">Hostel</a></li>
                <li class="all"><a href="#">View All <i class="fa fa-chevron-right"></i></a></li>
            </ul>
        </li>
        <li>
            <a href="#" class="categories-action">Submit</a>
            <a href="#" class="categories-link"><i class="fa fa-car"></i> Automotive</a>
            <ul>
                <li><a href="#">Mechanics</a>,</li>
                <li><a href="#">Gas Stations</a>,</li>
                <li><a href="#">Parts</a>,</li>
                <li><a href="#">Repair</a>,</li>
                <li><a href="#">Tires</a></li>
                <li class="all"><a href="#">View All <i class="fa fa-chevron-right"></i></a></li>
            </ul>
        </li>

        <li>
            <a href="#" class="categories-action">Submit</a>
            <a href="#" class="categories-link"><i class="fa fa-suitcase"></i> Jobs</a>
            <ul>
                <li><a href="#">Cook</a>,</li>
                <li><a href="#">Hairdrasser</a>,</li>
                <li><a href="#">Management</a>,</li>
                <li><a href="#">Waiter</a>,</li>
                <li><a href="#">Worker</a></li>
                <li class="all"><a href="#">View All <i class="fa fa-chevron-right"></i></a></li>
            </ul>
        </li>

        <li>
            <a href="#" class="categories-action">Submit</a>
            <a href="#" class="categories-link"><i class="fa fa-heart"></i> Medicine</a>
            <ul>
                <li><a href="#">Dental</a>,</li>
                <li><a href="#">Dermatology</a>,</li>
                <li><a href="#">Neurology</a>,</li>
                <li><a href="#">Pediatrics</a></li>
                <li class="all"><a href="#">View All <i class="fa fa-chevron-right"></i></a></li>
            </ul>
        </li>

        <li>
            <a href="#" class="categories-action">Submit</a>
            <a href="#" class="categories-link"><i class="fa fa-glass"></i> Nightlife</a>
            <ul>
                <li><a href="#">Bars &amp; Pubs</a>,</li>
                <li><a href="#">Concert</a>,</li>
                <li><a href="#">Cinemas</a>,</li>
                <li><a href="#">Disco</a>,</li>
                <li><a href="#">Theater</a></li>
                <li class="all"><a href="#">View All <i class="fa fa-chevron-right"></i></a></li>
            </ul>
        </li>

        <li>
            <a href="#" class="categories-action">Submit</a>
            <a href="#" class="categories-link"><i class="fa fa-home"></i> Real Estate</a>
            <ul>
                <li><a href="#">Apartmant</a>,</li>
                <li><a href="#">Building Area</a>,</li>
                <li><a href="#">Condo</a>,</li>
                <li><a href="#">House</a>,</li>
                <li><a href="#">Villa</a></li>
                <li class="all"><a href="#">View All <i class="fa fa-chevron-right"></i></a></li>
            </ul>
        </li>

        <li>
            <a href="#" class="categories-action">Submit</a>
            <a href="#" class="categories-link"><i class="fa fa-cutlery"></i> Restaurant</a>
            <ul>
                <li><a href="#">Bistro</a>,</li>
                <li><a href="#">Brunch</a>,</li>
                <li><a href="#">Caffee</a>,</li>
                <li><a href="#">Dinning</a>,</li>
                <li><a href="#">Fast Food</a></li>
                <li class="all"><a href="#">View All <i class="fa fa-chevron-right"></i></a></li>
            </ul>
        </li>

        <li>
            <a href="#" class="categories-action">Submit</a>
            <a href="#" class="categories-link"><i class="fa fa-futbol-o"></i> Sports</a>
            <ul>
                <li><a href="#">Bistro</a>,</li>
                <li><a href="#">Brunch</a>,</li>
                <li><a href="#">Caffee</a>,</li>
                <li><a href="#">Dinning</a>,</li>
                <li><a href="#">Fast Food</a></li>
                <li class="all"><a href="#">View All <i class="fa fa-chevron-right"></i></a></li>
            </ul>
        </li>

        <li>
            <a href="#" class="categories-action">Submit</a>
            <a href="#" class="categories-link"><i class="fa fa-map-marker"></i> Travel</a>
            <ul>
                <li><a href="#">Cruises</a>,</li>
                <li><a href="#">Destinations</a>,</li>
                <li><a href="#">Holidays</a>,</li>
                <li><a href="#">Transportations</a></li>
                <li class="all"><a href="#">View All <i class="fa fa-chevron-right"></i></a></li>
            </ul>
        </li>
    </ul>
</div><!-- /.categories -->

    </div>

    <div class="block background-secondary fullwidth mt80 mb-80 pt60 pb60">
        <div class="row">
    <div class="col-sm-12">
        <div class="contact-info-wrapper">
            <h2>Do You Have Any Questions?</h2>

            <div class="contact-info">
                <span class="contact-info-item">
                    <i class="fa fa-at"></i>
                    <span>support@sitename.com</span>
                </span><!-- /.contact-info-item -->

                <span class="contact-info-item">
                    <i class="fa fa-phone"></i>
                    <span>+123-456-789</span>
                </span><!-- /.contact-info-item -->
            </div><!-- /.contact-info-->
        </div><!-- /.contact-info-wrapper -->
    </div><!-- /.col-* -->
</div><!-- /.row -->

    </div>
</div><!-- /.container -->

            </div><!-- /.content -->
        </div><!-- /.main-inner -->
    </div><!-- /.main -->

@endsection