<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>
		<title>Home page</title>
		<meta charset="utf-8" />
		<!-- <link rel="shortcut icon" href="assets/media/logos/favicon.ico" /> -->
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="styles/uikit/plugins/global/plugins.bundle.css?v=<?php echo filemtime('styles/uikit/plugins/global/plugins.bundle.css') ?>" rel="stylesheet" type="text/css" />
		<link href="styles/uikit/css/style.bundle.css?v=<?php echo filemtime('styles/uikit/css/style.bundle.css') ?>" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<!-- our custom styles -->
		<link href="styles/main.css?v=<?php echo filemtime("styles/main.css"); ?>" rel="stylesheet" type="text/css" />
		<link href="styles/raw-main.css?v=<?php echo filemtime("styles/raw-main.css"); ?>" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
         integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
		<!-- our custom styles end-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-sidebar-stacked="true" data-kt-app-toolbar-enabled="true" class="app-default">

		<div id="app_container">
		<div id="app_container">
    <nav class="navbar">
       
        <ul>
            <h1>Zantia</h1>
            <hr>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Content Library </a>
            <ul><li><a href="#">- Overview</a></li>
                <li><a href="#">- Posts</a></li>
                <li><a href="#">- Campaigns</a></li>
                <li><a href="#">- Content Calenders</a></li>
                <li><a href="#">- Ideas</a></li>
            </ul></li>
         <li><a href="#">Drafts</a></li>
         <li><a href="#">File Manager</a></li>
         <li><a href="#">Team Manager</a></li>
         <li><a href="#">Reporting</a></li>
        </ul>
    </nav>

    <header class="header">
        <form class="d-flex" role="seasrch" >
            <div class="input-icons">
                <i class="fa fa-search" aria-hidden="true"></i>
            <input  type="search" > </div> </form>
            <div id="btngp" class="d-flex">
            <button type="button" id="MybtnModal" class="btn btn-primary col-md-8">open modal</button>
            <button id="btn" class="btn btn-info" type="submit">@</button>
            <button id="btn" class="btn btn-info" type="submit">@</button>
        </div>
            
            <div class="morning">
                <div><img src="media/elon.jpg" style="height:50px; width:50px ; border-radius:20px"></div>
            </div>
            
    </header>
<main class="main">
    <article>
        <h5> Where does it come from?</h5>
       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
         Ipsum has been the industry's standard dummy text ever since the 1500s, when an 
         unknown printer took a galley of type and scrambled it to make a type specimen book.
        It has survived not only five centuries, but also the leap into electronic typesetting,
         remaining essentially unchanged. It was popularised in the 1960s with the release of
          Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
           software like Aldus PageMaker including versions of Lorem Ipsum.</p>
         <h5> Where does it come from?</h5>
        <p> It is a long established fact that a reader will be distracted by the readable
         content of a page when looking at its layout. The point of using Lorem Ipsum is 
         that it has a more-or-less normal distribution of letters, as opposed to using 
         'Content here, content here', making it look like readable English. Many desktop
          publishing packages and web page editors now use Lorem Ipsum as their default model
           text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy
           . Various versions have evolved over the years, sometimes by accident, sometimes on
            purpose (injected humour and the like).</p>
       </article>
<aside class="aside">
    <h1>aside here</h1>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
      Ipsum has been the industry's standard dummy text ever since the 1500s, when an 
      unknown printer took a galley of type and scrambled it to make a type specimen book.
     It has survived not only five centuries, but also the leap into electronic typesetting,
      remaining essentially unchanged. It was popularised in the 1960s with the release of
       Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
        software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    </aside>
</main>
<div class="container col-md-8">
	<!-- .modal -->
	<div class="modal fade" id="Mymodal">
		<div class="modal-dialog">
			<div class="modal-content" >
				<div class="modal-header">
					<div class="row d-flex">
                        <div class="col d-flex">
                            <h5>PREVIEW</h5>
                            <button type="button" class="btn btn-success col-md-5 mx-auto">Approved</button></div>
                        </div>
                        <div class="col">
                            <h5>ACTIVITY</h5>
                        </div>

                    </div>
					                                                         
				</div> 
				<div class="modal-body">
					<div class="row d-flex">
                        <div class="col d-flex">
						<div class="card">
                    <img src="media/donuts-pink-background-donuts-pink-background-tasty-dessert-heart-made-sweets-169972029.jpg"
					class="card-img-top" style="height: 270px ;"> 
                  
                <div class="card-body">
                <h5 >Milkey Dounts </h5>
               <p class="card-text"> Our Delicious caster Dounts with some sprinkles on it.With regards to funding, the main sources of funding 
				  business.</p></div>
				  <hr>
				<div class="card-footer">
				<div class="accordion" id="acc1">
      <div class="accordion-item">
        <h1 class="accordion-header" id="head1">
          <button  class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#open1">
            Select Client</button>
          </h1>
        <div id="open1" class="accordion-collapse collapse" data-bs-parent="#acc1">
          <div class="accordion-body">Hello world 1</div>
        </div>
      </div>
				<div class="alert alert-warning text-dark alert-dismissible fade show">Select Client<button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>
				
				</div>
				</div>
                        </div>
                        <div class="col d-flex">
							<img src="media/temmy.jpg" style="width:50px;height:50px;border-radius:15px">
                            <div style="width:200px;height:120px; background-color:white">
							<form class="d-flex" role="seasrch" style="margin-left: auto;" >
                          <input class="form-control margin-left:2" type="search" placeholder="Replying ...." aria-label="Search"></form>

							<hr>
							
							<button  class="btn btn-warning"  type="submit">ADD Comment</button>
						</div>
                        </div>
				</div>   
				<div class="modal-footer">
                    <div class="btngp1">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Delete</button>
                    <button type="button" class="btn btn-light" >Show</button></div>
                <div class="btngp2">
                    <button type="button" class="btn btn-warning" >UNDO APPROVE</button>
                    <button type="button" class="btn btn-primary" >Edit</button></div>
				</div>
			</div>                                                                       
		</div>                                          
	</div>
</div>

		<!--begin::Javascript-->
		<script>var hostUrl = "scripts/lib/uikit/";</script>
		<script src="scripts/lib/uikit/plugins/global/plugins.bundle.js?v=<?php echo filemtime('scripts/lib/uikit/plugins/global/plugins.bundle.js') ?>"></script>
		<script src="scripts/lib/uikit/js/scripts.bundle.js?v=<?php echo filemtime('scripts/lib/uikit/js/scripts.bundle.js') ?>"></script>
		<script src="scripts/lib/uikit/js/widgets.bundle.js?v=<?php echo filemtime('scripts/lib/uikit/js/widgets.bundle.js') ?>"></script>

		<script src="scripts/lib/custom.js?v=<?php echo filemtime('scripts/lib/custom.js') ?>"></script>
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
