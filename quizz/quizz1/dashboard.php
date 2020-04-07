<!doctype html>
<html lang="en">

 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
	<link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
	<link rel="stylesheet" href="css/animation.css">
    <title>QUIZZ DAKAR</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
	    <!-- ============================================================== -->
	    <!-- navbar -->
	    <!-- ============================================================== -->
        <div class="dashboard-header">
	        <nav class="navbar navbar-expand-lg bg-white fixed-top">
	            <a class="navbar-brand" href="index.html"> <img src="images/logogrow.png" alt=""></a>
	            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	                <span class="navbar-toggler-icon"></span>
	            </button>
	            <div class="collapse navbar-collapse " id="navbarSupportedContent">
	               
	            </div>
	        </nav>
	    </div>
	   
	    <!-- ============================================================== -->
	    <!-- end navbar -->
	    <!-- ============================================================== -->
	    <!-- ============================================================== -->
	    <!-- left sidebar -->
	    <!-- ============================================================== -->
	    <div class="nav-left-sidebar sidebar-dark">
	        <div class="menu-list">
	            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
	                
	                <div class="collapse navbar-collapse" id="navbarNav">
	                    <ul class="navbar-nav flex-column">
	                        <li class="nav-divider">
	                            Menu
	                        </li>
	                        <li class="nav-item ">
	                            <a class="nav-link active" href="mbalite.php"  ><i class="fa fa-fw fa-user-circle"></i>Dashboard </a>
	                            
	                        </li>
	                        
	                      
	                        <li class="nav-item ">
	                            <a class="nav-link" href="inscrit.php" ><i class="fab fa-fw fa-wpforms"></i>Inscrits</a>
	                            
	                        </li>
	                   
	                   
	                   
	                    
	                      
	                    </ul>
	                </div>
	            </nav>
	        </div>
	    </div>
	    <!-- ============================================================== -->
	    <!-- end left sidebar -->
	    <!-- ============================================================== -->
	    <!-- ============================================================== -->
	    <!-- wrapper  -->
	    <!-- ============================================================== -->
	    <div class="dashboard-wrapper">
	        <div class="dashboard-influence">
	            <div class="container-fluid dashboard-content">
	               
	             
	                <!-- ============================================================== -->
	                <!-- content  -->
	                <!-- ============================================================== -->
	              
	                    <!-- ============================================================== -->
	                    <!-- widgets   -->
	                    <!-- ============================================================== -->
	                    <div class="row">
	                        <!-- ============================================================== -->
	                        <!-- four widgets   -->
	                        <!-- ============================================================== -->
	                        <!-- ============================================================== -->
	                        <!-- total views   -->
	                        <!-- ============================================================== -->
	                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
	                            <div class="card">
	                                <div class="card-body ">
	                                    <div class="d-inline-block">
	                                        <h5 class="text-muted "> Views</h5>
	                                        <h1 class="mb-0 " id="visiteur"></h1>
	                                    </div>
	                                    <div class="float-right icon-circle-medium  icon-box-lg  registered mt-1">
	                                        <i class="fa fa-eye fa-fw fa-sm text-secondary"></i>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <!-- ============================================================== -->
	                        <!-- end total views   -->
	                        <!-- ============================================================== -->
	                        <!-- ============================================================== -->
	                        <!-- total followers   -->
	                        <!-- ============================================================== -->
	                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
	                            <div class="card">
	                                <div class="card-body">
	                                    <div class="d-inline-block">
	                                        <h5 class="text-muted">Users</h5>
	                                        <h1 class="mb-0" id="joueur"> </h1>
	                                    </div>
                                        <div class="float-right icon-circle-medium  icon-box-lg  halfway mt-1">
	                                        <i class="fa fa-user  fa-fw fa-sm text-dark"></i>
	                                    </div>
	                                </div>
	                            </div>
							</div>
	                        <!-- ============================================================== -->
	                        <!-- end total followers   -->
	                        <!-- ============================================================== -->
	                        <!-- ============================================================== -->
	                        <!-- partnerships   -->
	                        <!-- ============================================================== -->
	                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
	                            <div class="card">
	                                <div class="card-body ">
	                                    <div class="d-inline-block">
	                                        <h5 class="text-muted ">Registered</h5>
	                                        <h1 class="mb-0 " id="inscrit"></h1>
	                                    </div>
	                                    <div class="float-right icon-circle-medium  icon-box-lg  registered mt-1">
	                                        <i class="fa fa-book fa-fw fa-sm text-secondary"></i>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <!-- ============================================================== -->
	                        <!-- end partnerships   -->
	                        <!-- ============================================================== -->
	                        <!-- ============================================================== -->
	                        <!-- total earned   -->
	                        <!-- ============================================================== -->
	                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
	                            <div class="card">
	                                <div class="card-body ">
	                                    <div class="d-inline-block">
	                                        <h5 class="text-muted ">Halfway</h5>
	                                        <h1 class="mb-0 " id="michemin"></h1>
	                                    </div>
	                                    <div class="float-right icon-circle-medium  icon-box-lg  halfway mt-1">
	                                        <i class="fa fa-road  fa-fw fa-sm text-dark"></i>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <!-- ============================================================== -->
	                        <!-- end total earned   -->
	                        <!-- ============================================================== -->
	                    </div>
	                    <!-- ============================================================== -->
	                    <!-- end widgets   -->
	                    <!-- ============================================================== -->
	                    <div class="row">
	                        <!-- ============================================================== -->
	                        <!-- followers by gender   -->
							<!-- ============================================================== -->
							<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 animated bounce">
							<div class="card">
										<h5 class="card-header">Gender</h5>
										<div class="card-body" >
											<!-- <div id="gender_donut" style="height: 230px;"></div> -->
											<div id="diagramme1"></div>
										</div>
										<div class="card-footer p-0 bg-white d-flex">
											<div class="card-footer-item card-footer-item-bordered ">
												<h2 class="mb-0" id="numberFemme"></h2>
												<p>Femme </p>
											</div>
											<div class="card-footer-item card-footer-item-bordered w-10">
												<h2 class="mb-0" id="numberHomme"> </h2>
												<p>Homme </p>
											</div>
										</div>
									</div>
							</div>

	                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
							<div class="card">
	                                <h5 class="card-header">Périphérie</h5>
	                                <div class="card-body">
									<div id="diagramme2"></div>
	                                </div>
	                                <div class="card-footer p-0 bg-white d-flex">
	                                    <div class="card-footer-item card-footer-item-bordered ">
	                                        <h2 class="mb-0"> 60% </h2>
	                                        <p>Web </p>
	                                    </div>
	                                    <div class="card-footer-item card-footer-item-bordered w-10">
	                                        <h2 class="mb-0">40% </h2>
	                                        <p>Mobile </p>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <!-- ============================================================== -->
	                        <!-- end followers by age   -->
	                        <!-- ============================================================== -->
	                        <!-- ============================================================== -->
	                        <!-- followers by locations   -->
	                        <!-- ============================================================== -->
	                        <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12">
	                            <div class="card">
	                                <h5 class="card-header">Localisation </h5>
	                                <div class="card-body">
									<canvas id="chartjs_bar_horizontal"></canvas>
	                                </div>
	                            </div>
	                        </div>
	                        <!-- ============================================================== -->
	                        <!-- end followers by locations  -->
	                        <!-- ============================================================== -->
                        </div>
                        

                          <!-- ============================================================== -->
                <!-- revenue  -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-8 col-lg-12 col-md-8 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Paricipants</h5>
                            <div class="card-body">
                                <canvas id="revenue" width="400" height="150"></canvas>
                            </div>
                            
                        </div>
                        
                    </div>
					<div class="col-xl-4 col-lg-12 col-md-4 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Shares</h5>
                            <div class="card-body">
							<ul class="social-sales list-group list-group-flush">
                                            <li class="list-group-item social-sales-content"><img src="images/fb1.png" alt=""><span class=" like social-sales-count text-dark"> <span style="font-size: 35px;">75</span>  </span>
                                            </li>
                                            <li class="list-group-item social-sales-content"><img src="images/tweet1.png" alt=""><span  class="like social-sales-count text-dark"> <span style="font-size: 35px;">75</span>  </span>
                                            </li>
                                            <li class="list-group-item social-sales-content"><img src="images/whatsapp (2).png" alt=""><span class="like social-sales-count text-dark"><span style="font-size: 35px;">75</span> </span>
                                            </li>
                            	</ul>
                            </div>
                            
                        </div>
                        
                    </div>
                  
                        
                </div>              
                <div class="row">
                            <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12 col-12">
                                <!-- ============================================================== -->
                                <!-- social source  -->
                                <!-- ============================================================== -->
                                <div class="card">
                                    <h5 class="card-header"> Likes</h5>
                                    <div class="card-body p-0">
                                        <ul class="social-sales list-group list-group-flush">
                                            <li class="list-group-item social-sales-content"><img src="images/fb1.png" alt=""><span class="social-sales-name"> Facebook</span><span class="social-sales-count text-dark"><span style="font-size: 35px;">75</span>  </span>
                                            </li>
                                            <li class="list-group-item social-sales-content"><img src="images/tweet1.png" alt=""><span class="social-sales-name"> Twitter</span><span class="social-sales-count text-dark"><span style="font-size: 35px;">75</span>  </span>
                                            </li>
                                            <li class="list-group-item social-sales-content"><img src="images/insta1.png" alt=""><span class="social-sales-name"> Instagram</span><span class="social-sales-count text-dark"><span style="font-size: 35px;">75</span>  </span>
                                            </li>
                                            <li class="list-group-item social-sales-content"><img src="images/ytb1.png" alt=""><span class="social-sales-name"> Youtube</span><span class="social-sales-count text-dark"><span style="font-size: 35px;">75</span>  </span>
                                            </li>
                                            <li class="list-group-item social-sales-content"><img src="images/in1.png" alt=""><span class="social-sales-name"> Likndin</span><span class="social-sales-count text-dark"><span style="font-size: 35px;">75</span>  </span>
                                            </li>
                                            
                                         
                                        </ul>
                                    </div>
                                   
                                </div>
                                <!-- ============================================================== -->
                                <!-- end social source  -->
                                <!-- ============================================================== -->
                            </div>
                            <div class="col-xl-6 col-lg-8 col-md-8 col-sm-12 col-12">
                                <!-- ============================================================== -->
                                <!-- sales traffice source  -->
                                <!-- ============================================================== -->
                                <div class="card">
                                    <h5 class="card-header"> Âges</h5>
                                    <div class="card-body p-0">
                                    <canvas id="myChart2"></canvas>

                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end sales traffice source  -->
                            <!-- ============================================================== -->
                           
                </div>
				<script>
				var visiteur=document.getElementById('visiteur');
				var joueur=document.getElementById('joueur');
				var inscrit=document.getElementById('inscrit');
				var michemin=document.getElementById('michemin');
				var numberHomme=document.getElementById('numberHomme');
				var numberFemme=document.getElementById('numberFemme');
				var diagramme1=document.getElementById('diagramme1');
				setTimeout(function(){
				request1();
				request2();
				request3();
				},3000)

				setInterval(function(){
					request3();
					// 	$.ajax({
					// url:'dunut.html',
					// type:'GET',
					// dataType:'html',
					// success:function(reponse,staus){
					// 	$("#diagramme1").html(reponse);
					// }})
					// $.ajax({
					// url:'htmlchart/pays.html',
					// type:'GET',
					// dataType:'html',
					// success:function(reponse,staus){
					// 	$("#diagramme2").html(reponse);
					// }  
				},60000);
				// $.get("page/donner.php",function(data){
				// 	let da=JSON.parse(data);
				// 	visiteur.innerHTML=da.visiteur;
					// inscrit.innerHTML=da.inscrit;
					// michemin.innerHTML=da.michemin;
				//	joueur.innerHTML=da.joueur;
				// })
		
				setInterval(function(){
					request1();
					request2();
				// 	$.get("page/donner.php",function(data){
				// 	let da=JSON.parse(data);
				// 	visiteur.innerHTML=da.visiteur;
				// 	joueur.innerHTML=da.joueur;
				// 	inscrit.innerHTML=da.inscrit;
				// 	michemin.innerHTML=da.michemin;
				// }
				// )
				// $.get("phpchart/genre.php",function(data){
				// 		let da=JSON.parse(data);
				// 		numberHomme.innerHTML=da.Homme+"%";
				// 		numberFemme.innerHTML=da.Femme+"%";
				// 		console.log(da);
						
				// 	})

				},'60000');
				

				function request1(){
					$.get("page/donner.php",function(data){
					let da=JSON.parse(data);
					visiteur.innerHTML=da.visiteur;
					joueur.innerHTML=da.joueur;
					inscrit.innerHTML=da.inscrit;
					michemin.innerHTML=da.michemin;
				}
				)
				}
				function request2(){
					$.get("phpchart/genre.php",function(data){
						let da=JSON.parse(data);
						numberHomme.innerHTML=da.Homme+"%";
						numberFemme.innerHTML=da.Femme+"%";
						console.log(da);
						
					})	
				}
				function request3(){
					$.ajax({
					url:'dunut.html',
					type:'GET',
					dataType:'html',
					success:function(reponse,staus){
						$("#diagramme1").html(reponse);
					}})
					$.ajax({
					url:'dunuts.html',
					type:'GET',
					dataType:'html',
					success:function(reponse,staus){
						$("#diagramme2").html(reponse);
					}})
				}


				</script>

	                    <!-- Optional JavaScript -->
	                    <!-- jquery 3.3.1 -->
	                    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
	                    <!-- bootstap bundle js -->
	                    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
	                    <!-- slimscroll js -->
	                    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
	                    <!-- main js -->
	                    <script src="assets/libs/js/main-js.js"></script>
	                    <!-- morris-chart js -->
	                    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
	                    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
	                    <script src="assets/vendor/charts/morris-bundle/morrisjs.html"></script>
	                    <!-- chart js -->
	                    <script src="assets/vendor/charts/charts-bundle/Chart.bundle.js"></script>
	                    <script src="assets/vendor/charts/charts-bundle/chartjs.js"></script>
	                    <!-- dashboard js -->
						<script src="assets/libs/js/dashboard-influencer.js"></script>
                        <script src="assets/libs/js/dashboard-sales.js"></script>
						<script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/libs/js/main-js.js"></script>


                        <script>
                         	var ctx2 = document.getElementById('myChart2').getContext('2d');

                                var chart3 = new Chart(ctx2, {
                                type: 'pie',
                                data: {
                                datasets: [{
                                data: [10, 20, 40],
                                backgroundColor: [
                                        'grey',
                                        '#ff4080',
                                        '#EFEFF6'

                                    ]
                                }],

                                // These labels appear in the legend and in the tooltips when hovering different arcs
                                labels: [
                                'Jeune',
                                'Adulte',
                                'Vieux'
                                ]
                                },
                                options: {}
                                });


                                                        
                        </script>

</body>
 
</html>