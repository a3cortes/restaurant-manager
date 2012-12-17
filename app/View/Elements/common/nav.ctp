<ul class="nav-bar">

                                        <?php 
                                        $nav_array = $this->viewVars['nav_itmes'];
                                        $last = count($nav_array);
                                        $i= 1;
                                        foreach($nav_array as $k => $v) 
                                        {
                                      
                                        ($i == 1) ? $class = '' : $class = 'item';
                                       if($v[0] == "/" && $this->request->action=='home')
                                       {
                                       		$current = 'active';
                                       }else
                                       {
                                      	 if( (strstr($this->here, $v[0]) && ($v[0] != "/")) )
                                      	 		{
                                      	 			$current = 'active';
                                      	 		}else
                                      	 		{
                                      	 			$current = '';
                                     			  }
                                       }
                                          	
                                        	//debug($v);
                                        ?>
                                        	<?php if( count($v[2]) > 0) { ?>
                                        	 <li class="<?php echo $class ?> has-flyout">
                                        	 	<a class="<?php echo $current ?>" href="#"><?php echo $k?></a>
                                        	 	<a href="#" class="flyout-toggle"><span> </span></a>
                                        	 
                                        	 	<ul class="flyout">
                                        	 	<?php foreach($v[2] as $h => $i){?>
                                        	 		<li><a class="<?php // echo $current ?>" href="<?php echo $i?>"><?php echo $h?></a>
                                        	 	<?php } ?>
                                        	 	</ul>
                                        	 
                                        	 
                                        	 </li>
                                        	 <?php }else{?>
                                        	 <li class="<?php echo $class ?>"><a class="<?php echo $current ?>" href="<?php echo $v[0]?>"><?php echo $k?></a>
                                        	 <?php }?>
                                        	 
                                        <?php $i++; }
                                       
                                        ?>
       
</ul>
