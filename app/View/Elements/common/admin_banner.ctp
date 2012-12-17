				<!-- header -->
				<header style="height:220px">
					<h1>
						<a href="/">Paradie Road</a>
						
					</h1>

					<div class="nav-left-bg">
						<div class="nav-right-bg">
							<nav>
								<ul>
								<?php 
								$c = $this->here;
								$i= 1;
							
								foreach($admin_nav_itmes as $k=>$v) {
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