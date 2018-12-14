@extends('front.front_head')
@section('content')

	  
	 <!-- page-header -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-caption">
                        <h1 class="page-title">CRM Glocify Technology</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.page-header-->
    <!-- news -->
    <div class="card-section">
        <div class="container">
            <div class="bg-white">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <!-- section-title -->
                        <div class="section-title mb-0">
                           <ul class="ullink">
								<li><a href="/admin">Admin</a></li>
								<li><a href="/manager">Manager</a></li>
								<li><a href="bidder">Bidder</a></li>
							</ul>
                        </div>
                        <!-- /.section-title -->
                    </div>
                </div>
            </div>
        </div>
    </div>


<style>
ul.ullink { margin: 0; padding: 0; text-align: center;}
ul.ullink li {list-style: none; display: inline-block; margin: 0 10px 0;}
ul.ullink li a { background: #F15D22; color: #fff; padding: 12px 50px; border-radius: 30px; text-decoration:none; text-transform: uppercase;}
ul.ullink li a:hover{background: #f47521;}
footer#footer {position: fixed;bottom: 0;background: #333;width: 100%;padding: 20px 0;}
.management{color: #fff;}

.page-header { background: url(https://easetemplate.com/free-website-templates/hike/images/pageheader.jpg)no-repeat; position: relative; background-size: cover; }
.page-caption { padding-top: 100px; padding-bottom: 174px; }
.page-title { font-size: 46px; line-height: 1; color: #fff; font-weight: 600; text-align: center;text-transform: uppercase;
    text-shadow: 0px 5px 5px rgba(0,0,0,0.8); }
.card-section { position: relative; bottom: 60px; }
.bg-white{background: #f5f5f5 !important; height: 100%; box-shadow: 0 0 30px rgba(0,0,0,0.2); border: 1px solid #fff;     padding: 80px 0; width: 100%; max-width: 700px; margin: 0 auto;}



</style>
			

 @endsection       