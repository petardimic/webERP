<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
{{ HTML::script('assets2/js/morris/morris-0.4.3.min.css'); }}

{{ HTML::style('assets2/css/bootstrap.css'); }}
{{ HTML::style('assets2/css/custom.css'); }}
{{ HTML::style('assets2/css/font-awesome.css'); }}
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

    <body>
        @section('sidebar')
              <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"> @if(Auth::check())
                    {{ Auth::user()->username }}
                    <h6>{{ Auth::user()->name }}</h6>
                    @endif
                </a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Hey {{ Auth::user()->name }} &nbsp;, <a href="http://localhost:8000/account/signout" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav> 

      <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets2/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
                    <li>
                        <a class="active-menu"  href="http://localhost:8000/dashboard"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                   
                    @if(Auth::check())
                    @if( Auth::user()->name == 'admin'  )
                   
                    <li>
                        <a  href="http://localhost:8000/user_permission"><i class="fa fa-edit fa-3x"></i>Grant Permissions </a>
                    </li>
                     <li>
                        <a  href="http://localhost:8000/system"><i class="fa fa-desktop fa-3x"></i> System Parameters</a>
                    </li>
                    @endif
                    @endif
                    

                    @if(Auth::check())
                    @if( Auth::user()->name == 'admin' || Auth::user()->name == 'inventory_manager' || Auth::user()->name == 'salesman'  )
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i>Inventory<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="http://localhost:8000/add_categories">Add Category</a>
                            </li>
                            <li>
                                <a href="http://localhost:8000/add_item">Add Item</a>
                            </li>
                            <li>
                                <a href="http://localhost:8000/add_location">Add Location</a>
                            </li>
							<li>
                                <a href="http://localhost:8000/add_supplier">Add Supplier</a>
                            </li>
                            
                        </ul>
                      </li>
                         @endif
                    @endif

                      <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i>Item<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="http://localhost:8000/all_items">All Items</a>
                            </li>
                             @if(Auth::check())
                    @if( Auth::user()->name == 'admin' || Auth::user()->name == 'salesman' || Auth::user()->name == 'inventory_manager' )
                            <li>
                                <a href="http://localhost:8000/item_prices">Update Prices</a>
                            </li>
                            @endif
                            @endif
                            
                        </ul>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i>Purchase Orders<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="http://localhost:8000/add_purchase_order">Add Purchase Order</a>
                            </li>
                            <li>
                                <a href="http://localhost:8000/purchase_orders">All Orders</a>
                            </li>
                            <li>
                            
                        </ul>
                      </li>
                                 @if(Auth::check())
                    @if( Auth::user()->name == 'admin')  
                	<li>
			<a href="http://localhost:8000/update_stocks"><i class="fa fa-table fa-3x"></i>Update Stocks</a>
			</li>
                        <li>
            <a href="http://localhost:8000/sales"><i class="fa fa-floppy-o fa-3x"></i>Sales</a>
            </li>
            @endif
            @endif

                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  --> 
        @show


<div class="container">
            @yield('content')
        </div>
{{ HTML::script('assets2/js/jquery-1.10.2.js'); }}
{{ HTML::script('assets2/js/bootstrap.min.js'); }}
{{ HTML::script('assets2/js/jquery.metisMenu.js'); }}
{{ HTML::script('assets2/js/morris/raphael-2.1.0.min.js'); }}
{{ HTML::script('assets2/js/morris/morris.js'); }}
{{ HTML::script('assets2/js/custom.js'); }}
    </body>
</html>
