<span class="navbar-text actions"> 
                        <p>
                        	<ul class="nav navbar-nav mr-auto">
	                        	<li class="dropdown">
	                        		<a href="" class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
	                        			<?php 
	                        				
                                            if (!isset($_SESSION['name']) && empty($_SESSION['name'])) {
                                                if (!isset($_SESSION['sess_user_id']) && empty($_SESSION['sess_user_id'])) {
                                                    echo "Hola ".$_SESSION['displayUser']."!";
                                                }else{
                                            echo "Hola ".$_SESSION['sess_user_id']."!";
                                            }
                                        }
                                            /*}elseif (!isset($_SESSION['sess_user_id']) && empty($_SESSION['sess_user_id'])) {
                                                    echo "Hola ".$_SESSION['displayUser']."!";
                                            }*/else{
                                               echo "Hola ".$_SESSION['name']."!"; 
                                            }

	                        			?>
	                        		</a>
	                        		<div class="dropdown-menu" role="menu">
                                        <?php 
                                        if ($_SESSION['admin'] == 1) {
                                             echo '<a href="consultas.php" class="dropdown-item">Consultas</a>';
                                         } ?>
                                        <a href="signUp.php" class="dropdown-item">Actualizar datos</a>
	                        			<a href="php/logout.php" class="dropdown-item">Cerrar sesion</a>
	                        		</div>
	                        	</li>
                        	</ul>
                        </p>
                    </span>