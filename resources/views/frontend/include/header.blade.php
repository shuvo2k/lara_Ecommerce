
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <title>@yield('page-title')</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="">
  <!--Less styles -->
     <!-- Other Less css file //different less files has different color scheam
    <link rel="stylesheet/less" type="text/css" href="{!! asset('themes/less/simplex.less') !!}">
    <link rel="stylesheet/less" type="text/css" href="{!! asset('themes/less/classified.less') !!}">
    <link rel="stylesheet/less" type="text/css" href="{!! asset('themes/less/amelia.less') !!}">  MOVE DOWN TO activate
    -->
    <!--<link rel="stylesheet/less" type="text/css" href="{!! asset('themes/less/bootshop.less') !!}">
    <script src="{!! asset('themes/js/less.js') !!}" type="text/javascript"></script> -->
    
  <!-- Bootstrap style --> 
      <link id="callCss" rel="stylesheet" href="{!! asset('themes/bootshop/bootstrap.min.css') !!}" media="screen"/>
      <link href="{!! asset('themes/css/base.css') !!}" rel="stylesheet" media="screen"/>
  <!-- Bootstrap style responsive -->	
    <link href="{!! asset('themes/css/bootstrap-responsive.min.css') !!}" rel="stylesheet"/>
    <link href="{!! asset('themes/css/font-awesome.css') !!}" rel="stylesheet" type="text/css">
  <!-- Google-code-prettify -->	
    <link href="{!! asset('themes/js/google-code-prettify/prettify.css') !!}" rel="stylesheet"/>
  <!-- fav and touch icons -->
      <link rel="shortcut icon" href="{!! asset('themes/images/ico/favicon.ico') !!}">
      <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{!! asset('themes/images/ico/apple-touch-icon-144-precomposed.png') !!}">
      <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{!! asset('themes/images/ico/apple-touch-icon-114-precomposed.png') !!}">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{!! asset('themes/images/ico/apple-touch-icon-72-precomposed.png') !!}">
      <link rel="apple-touch-icon-precomposed" href="{!! asset('themes/images/ico/apple-touch-icon-57-precomposed.png') !!}">
    <style type="text/css" id="enject"></style>
    </head>
  <body>
  <div id="header">
  <div class="container">
  <div id="welcomeLine" class="row">
    <div class="span6">Welcome!<strong> User</strong></div>
    <div class="span6">
    <div class="pull-right">
      <a href="product_summary.html"><span class="">Fr</span></a>
      <a href="product_summary.html"><span class="">Es</span></a>
      <span class="btn btn-mini">En</span>
      <a href="product_summary.html"><span>&pound;</span></a>
      <span class="btn btn-mini">$155.00</span>
      <a href="product_summary.html"><span class="">$</span></a>
      <a href="product_summary.html"><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i> [ 3 ] Itemes in your cart </span> </a> 
    </div>
    </div>
  </div>
  <!-- Navbar ================================================== -->
  <div id="logoArea" class="navbar">
  <a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </a>
    <div class="navbar-inner">
      <a class="brand" href="index.html"><img src="{!! asset('themes/images/logo.png') !!}" alt="Bootsshop"/></a>
      <form class="form-inline navbar-search" method="post" action="products.html" >
      <input id="srchFld" class="srchTxt" type="text" />
        <select class="srchTxt">
        <option>All</option>
        <option>CLOTHES </option>
        <option>FOOD AND BEVERAGES </option>
        <option>HEALTH & BEAUTY </option>
        <option>SPORTS & LEISURE </option>
        <option>BOOKS & ENTERTAINMENTS </option>
      </select> 
        <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
      </form>
      <ul id="topMenu" class="nav pull-right">
     <li class=""><a href="special_offer.html">All Products</a></li>
     <li class=""><a href="normal.html">Delivery</a></li>
     <li class=""><a href="contact.html">Contact</a></li>

     @auth
         <li><a href="#">Profile</a></li>
     @endauth

     <li class="">
     <a href="#login" role="button" data-toggle="modal" style="padding-right:0;margin-right:5px;"><span class="btn btn-success">Login</span></a>
    <div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3>Login Block</h3>
        </div>
        <div class="modal-body">
        <form class="form-horizontal loginFrm">
          <div class="control-group">								
          <input type="text" id="inputEmail" placeholder="Email">
          </div>
          <div class="control-group">
          <input type="password" id="inputPassword" placeholder="Password">
          </div>
          <div class="control-group">
          <label class="checkbox">
          <input type="checkbox"> Remember me
          </label>
          </div>
        </form>		
        <button type="submit" class="btn btn-success">Sign in</button>
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        </div>
    </div>
    </li>

    
    @auth
    <a href="" role="button" style="padding-right:0;"> <span style="margin-top:20px;" class="btn btn-success">Logout</span></a>
  
    @endauth
      </ul>
    </div>
  </div>
  </div>
  </div>
   

  @yield('content')

@include('frontend.include.footer')