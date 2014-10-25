

            <div class="rightside">             

             
             <!-- content -->
                
                <?php 
               	
                	if(isset($_GET['p']) && ($_GET['p']) != ''){
                		include_once 'php/'.$_GET['p'].'.php';
                	}else{
                		include_once 'php/home.php';
                	}
                ?>
                
              <!--  /Content -->  
                
            </div>
        </div><!-- /.wrapper -->

