<!-- header ================================================== -->
<!-- header-start -->
<div class='header-area '>
	<div class='header-top_area'>
		<div class='container-fluid'>
			<div class='row'>
			<!-- email en telefoonnummer -->
			<?php email_telefoonnummer();?> 
				<!-- Sociaal media button -->

				<div class='col-xl-6 col-md-6 col-lg-4'>
					<div class='social_media_links d-none d-lg-block'>

					<?php sociaal_media ();?>
						<!-- Inlogen button -->

						<button  class="logingbutton" onclick="document.getElementById('id01').style.display='block'"  style='width:25%;border-radius: 5px; background-color :#fdb813ff;'>
						<img src="img/login ico/IMGBIN.png" style="width: 15%;"> Login</button>
							
						<div id='id01' class='modal'> 
							<!-- inlogen form -->
							<form class='modal-content animate' action='process.php' method="POST"> 
								<div class='imgcontainer'> 
									<span onclick="document.getElementById('id01').style.display='none'" class='close' title='Close Modal'>×</span> 
									<img src='https://i.ya-webdesign.com/images/log-png-images.png' alt='Avatar' class='avatar'> 
								</div> 
								<?php if(@$_GET['Empty']==true){?>
								<div class="alert-light text-danger text-center py-3"><?php echo $_GET['Empty'] ?></div>                                
								<?php } ?>
								<?php if(@$_GET['Invalid']==true){ ?>
								<div class="alert-light text-danger text-center py-3"><?php echo $_GET['Invalid'] ?></div>                                
								<?php } ?>
								<div class='container'> 
									<label class="formtext"><b>Username</b></label> 
									<input type='text' placeholder='Enter Username' name='UName' required> 

									<label class="formtext" ><b>Password</b></label> 
									<input type='password' placeholder='Enter Password' name='Password' required> 

									<button type='submit' name="Login" >Login</button> 
									<input type='checkbox' checked='checked'> Remember me 
								</div> 

								<div class='container' style='background-color:#f1f1f1'> 
									<button type='button' onclick="document.getElementById('id01').style.display='none'" class='cancelbtn'>Cancel</button> 
									<span class='psw'>Forgot <a href='#'>password?</a></span> 
								</div> 
							</form> 
						</div> 
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Nav bar van de index pagina -->

		<div id='sticky-header' class='main-header-area'>
		<div class='container-fluid'>
			<div class='row align-items-center'>
				<div class='col-xl-3 col-lg-3'>
					<div class='logo'>
						<a href='index.php'>
							<img  class='logoimg' src='img/port of troy logo.png' alt=''>
						</a>
					</div>
				</div>
				<div class='col-xl-9 col-lg-9'>
					<div class='main-menu'>
						<nav>
							<ul id='navigation'>
								<li><a href='index.php'>home</a></li>
								<li><a href='About.php'>About</a></li>
								<li><a href='#'>blog <i class='ti-angle-down'></i></a>
									<ul class='submenu'>
										<li><a href='blog.php'>blog</a></li>
										<li><a href='single-blog.php'>single-blog</a></li>
									</ul>
								</li>
								<li><a href='#'>pages <i class='ti-angle-down'></i></a>
									<ul class='submenu'>
										<li><a href='elements.php'>elements</a></li>
										<li><a href='Cause.php'>Cause</a></li>
									</ul>
								</li>
								<li><a href='contact.php'>Contact</a></li>
							</ul>
						</nav>
						<div class='Appointment'>
							<div class='book_btn d-none d-lg-block'>
								<a data-scroll-nav='1' href='#'>Make A Booking</a>
							</div>
						</div>
					</div>
				</div>
				<div class='col-12'>
					<div class='mobile_menu d-block d-lg-none'></div>
				</div>
			</div>
		</div>
		
	</div>
</div>

