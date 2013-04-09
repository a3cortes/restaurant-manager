				<!-- header -->
				<header>
					<div class="topheader">
						<a href="/">Paradie Road</a>
						
					</div>
					<div id="banner-right">
						<a href="/newbooking"><img src="<?php echo $wwwroot?>images/online_res.png" /></a>
					</div>
					<div class="slider">
						<ul class="items">
							<li><img src="<?php echo($this->viewVars['wwwroot'])?>images/slide7.jpg" alt=""></li>
							<li><img src="<?php echo($this->viewVars['wwwroot'])?>images/slide3.jpg" alt=""></li>
							<li><img src="<?php echo($this->viewVars['wwwroot'])?>images/slide1.jpg" alt=""></li>
							<li><img src="<?php echo($this->viewVars['wwwroot'])?>images/slide2.jpg" alt=""></li>
							<li><img src="<?php echo($this->viewVars['wwwroot'])?>images/slide4.jpg" alt=""></li>
							<li><img src="<?php echo($this->viewVars['wwwroot'])?>images/slide5.jpg" alt=""></li>
							<li><img src="<?php echo($this->viewVars['wwwroot'])?>images/slide6.jpg" alt=""></li>
						</ul>
					</div>
					<div class="nav-left-bg">
						<div class="nav-right-bg">
							<nav>
								<ul>
								<?php 
								$c = $this->here;
								$i= 1;
							
								foreach($nav_itmes as $k=>$v) {
									$current = "";
									$pos = "";
									if($c == $v[0]){ $current = "active";}
									if($i == 1){ $pos = " first ";}
								?>
										
										<li class="<?php echo $pos?>"><a href="<?php echo $v[0] ?>" target="<?php echo $v[1] ?>" class="<?php echo $current?>"><?php echo $k ?></a></li>
									
								<?php $i++; }?>
								</ul>
							</nav>
						</div>
					</div>
				</header>