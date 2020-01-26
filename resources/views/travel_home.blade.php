@extends('layouts.app')

@section('content')

<div class="main">
        <div class="main-inner">
            <div class="container">
                <div class="content">
                <div class="document-title">
                    <h1>Enjoy Your Travel</h1>
                </div><!-- /.document-title -->
                <form class="filter" method="post" action="http://preview.byaviators.com/template/superlist/listing-row.html?">
                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <input type="text" placeholder="Keyword" class="form-control">
                            </div><!-- /.form-group -->
                        </div><!-- /.col-* -->

                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <select class="form-control" title="Select Location">
                                    <option>Bronx</option>
                                    <option>Brooklyn</option>
                                    <option>Manhattan</option>
                                    <option>Staten Island</option>
                                    <option>Queens</option>
                                </select>
                            </div><!-- /.form-group -->
                        </div><!-- /.col-* -->

                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <select class="form-control" title="Select Category">
                                    <option value="">Automotive</option>
                                    <option value="">Jobs</option>
                                    <option value="">Nightlife</option>
                                    <option value="">Services</option>
                                </select>
                            </div><!-- /.form-group -->
                        </div><!-- /.col-* -->
                    </div><!-- /.row -->

                    <hr>

                    <div class="row">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary">Redefine Search Result</button>
                        </div><!-- /.col-* -->
                    </div><!-- /.row -->
                </form>
                    <div class="cards-row">
                        <div class="card-row">
                            <div class="card-row-inner">
                                <div class="card-row-image" data-background-image="{{asset('bdtravellbangladesh/assets/img/tmp/product-1.jpg')}}">
                                    <div class="card-row-label"><a href="listing-detail.html">Vacation</a></div><!-- /.card-row-label -->
                                    
                                        <div class="card-row-price">$100 / night</div><!-- -->
                                    
                                </div><!-- /.card-row-image -->

                                <div class="card-row-body">
                                    <h2 class="card-row-title"><a href="listing-detail.html">Trip To Paris, France</a></h2>
                                    <div class="card-row-content"><p>And why did 'I' have to take a cab? Bender, quit destroying the universe! I've been there. My folks were always on me to groom myself and...</p></div><!-- /.card-row-content -->
                                </div><!-- /.card-row-body -->

                                <div class="card-row-properties">
                                    <dl>
                                        
                                            <dd>Price</dd><dt>$100 / night</dt>
                                        

                                        
                                            <dd>Category</dd><dt>Vacation</dt>
                                        

                                        
                                            <dd>Location</dd><dt>New York / Village</dt>
                                        

                                        <dd>Rating</dd>
                                        <dt>
                                            <div class="card-row-rating">
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            </div><!-- /.card-row-rating -->
                                        </dt>
                                    </dl>
                                </div><!-- /.card-row-properties -->
                            </div><!-- /.card-row-inner -->
                        </div><!-- /.card-row -->
                    
                        <div class="card-row">
                            <div class="card-row-inner">
                                <div class="card-row-image" data-background-image="{{asset('bdtravellbangladesh/assets/img/tmp/product-2.jpg')}}">
                                    <div class="card-row-label"><a href="listing-detail.html">Coffee</a></div><!-- /.card-row-label -->
                                    
                                </div><!-- /.card-row-image -->

                                <div class="card-row-body">
                                    <h2 class="card-row-title"><a href="listing-detail.html">Tasty Brazil Coffee</a></h2>
                                    <div class="card-row-content"><p>What are you hacking off? Is it my torso?! 'It is!' My precious torso! You guys realize you live in a sewer, right? Who am I making this ...</p></div><!-- /.card-row-content -->
                                </div><!-- /.card-row-body -->

                                <div class="card-row-properties">
                                    <dl>
                                        

                                        
                                            <dd>Category</dd><dt>Coffee</dt>
                                        

                                        
                                            <dd>Location</dd><dt>New York / Village</dt>
                                        

                                        <dd>Rating</dd>
                                        <dt>
                                            <div class="card-row-rating">
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            </div><!-- /.card-row-rating -->
                                        </dt>
                                    </dl>
                                </div><!-- /.card-row-properties -->
                            </div><!-- /.card-row-inner -->
                        </div><!-- /.card-row -->
                    
                        <div class="card-row">
                            <div class="card-row-inner">
                                <div class="card-row-image" data-background-image="{{asset('bdtravellbangladesh/assets/img/tmp/product-3.jpg')}}">
                                    <div class="card-row-label"><a href="listing-detail.html">Food</a></div><!-- /.card-row-label -->
                                    
                                        <div class="card-row-price">$12 / person</div><!-- -->
                                    
                                </div><!-- /.card-row-image -->

                                <div class="card-row-body">
                                    <h2 class="card-row-title"><a href="listing-detail.html">Healthy Breakfast</a></h2>
                                    <div class="card-row-content"><p>Well, then good news! It's a suppository. It's toe-tappingly tragic! Moving along… Goodbye, cruel world. Goodbye, cruel lamp. Goodbye, cr...</p></div><!-- /.card-row-content -->
                                </div><!-- /.card-row-body -->

                                <div class="card-row-properties">
                                    <dl>
                                        
                                            <dd>Price</dd><dt>$12 / person</dt>
                                        

                                        
                                            <dd>Category</dd><dt>Food</dt>
                                        

                                        
                                            <dd>Location</dd><dt>New York / Village</dt>
                                        

                                        <dd>Rating</dd>
                                        <dt>
                                            <div class="card-row-rating">
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            </div><!-- /.card-row-rating -->
                                        </dt>
                                    </dl>
                                </div><!-- /.card-row-properties -->
                            </div><!-- /.card-row-inner -->
                        </div><!-- /.card-row -->
                    
                        <div class="card-row">
                            <div class="card-row-inner">
                                <div class="card-row-image" data-background-image="{{asset('bdtravellbangladesh/assets/img/tmp/product-4.jpg')}}">
                                    <div class="card-row-label"><a href="listing-detail.html">Restaurant</a></div><!-- /.card-row-label -->
                                    
                                </div><!-- /.card-row-image -->

                                <div class="card-row-body">
                                    <h2 class="card-row-title"><a href="listing-detail.html">Coffee &amp; Newspaper</a></h2>
                                    <div class="card-row-content"><p>Pansy. No! I want to live! There are still too many things I don't own! And then the battle's not so bad? And I'd do it again! And perhap...</p></div><!-- /.card-row-content -->
                                </div><!-- /.card-row-body -->

                                <div class="card-row-properties">
                                    <dl>
                                        

                                        
                                            <dd>Category</dd><dt>Restaurant</dt>
                                        

                                        
                                            <dd>Location</dd><dt>New York / Village</dt>
                                        

                                        <dd>Rating</dd>
                                        <dt>
                                            <div class="card-row-rating">
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            </div><!-- /.card-row-rating -->
                                        </dt>
                                    </dl>
                                </div><!-- /.card-row-properties -->
                            </div><!-- /.card-row-inner -->
                        </div><!-- /.card-row -->
                    </div><!-- /.cards-row -->
                <div class="pager">
                    <ul>
                        <li><a href="#">Prev</a></li>
                        <li><a href="#">5</a></li>
                        <li class="active"><a>6</a></li>
                        <li><a href="#">7</a></li>
                        <li><a href="#">Next</a></li>
                    </ul>
                </div><!-- /.pagination -->
                </div><!-- /.content -->
            </div><!-- /.container -->
        </div><!-- /.main-inner -->
    </div><!-- /.main -->


@endsection