<!-- Main Footer -->
    <footer class="main-footer">
        	<!--Widgets Section-->
            <div class="widgets-section">
            	<div class="clearfix">
					
					<!--Footer Column-->
					<div class="footer-column">
						<div class="footer-widget logo-widget">
							<div class="logo">
								<a href="/"><img src="images/logo.png" alt="" /></a>
							</div>
						</div>
					</div>
					
					<!--Footer Column-->
					<div class="footer-column">
						<div class="footer-widget links-widget">
							<div class="row cearfix">
								
								<div class="column col-lg-12 col-md-12 col-sm-12">
									<ul class="footer-list">
										<!-- <li><a href="#">Лучшие создатели</a></li>
										<li><a href="#">Партнеры</a></li> -->
										<?php if($isLogged){?>
										<li><a href="/exit">Выход</a></li>
										<?php } else {?>
										<li><a href="/login">Вход</a></li>
										<li><a href="/register">Регистрация</a></li>
										<?php }?>
										<li><a href="/about">О нас</a></li>
										<!-- <li><a href="#">Пользовательское соглашение</a></li> -->
									</ul>
								</div>								
							</div>
						</div>
					</div>
					
					<!--Footer Column-->
					<div class="footer-column">
						<div class="footer-widget social-widget">
							<ul class="social-icon-one">
								<li><a href="#"><i class="fab fa-vk"></i></a></li>
								<li><a href="#"><i class="fab fa-instagram"></i></a></li>
								
								
							</ul>
						</div>
					</div>
					
				</div>
			</div>		
		<!-- Footer Bottom -->
		<div class="footer-bottom">
			<div class="outer-container">
				<div class="clearfix">
					
					<div class="pull-left">
						<div class="copyright">&copy; 2019 All rights resetrved.</div>
					</div>
					
					<div class="pull-right">
						<!--Scroll to top-->
						<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-angle-double-up"></span></div>
					</div>
					
				</div>
			</div>
		</div>
		
	</footer>
	<!-- End Main Footer -->
	
</div>
<!--End pagewrapper-->

<!--Search Popup-->
<div id="search-popup" class="search-popup">
	<span class="color"></span>
	<div class="close-search theme-btn"><span class="flaticon-cancel-1"></span></div>
	<div class="popup-inner">
    
    	<div class="search-form">
        	<form method="post" action="index.html">
            	<div class="form-group">
                	<fieldset>
                        <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                        <input type="submit" value="Search" class="theme-btn">
                    </fieldset>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/appear.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/main.js"></script>

</body>
</html>
