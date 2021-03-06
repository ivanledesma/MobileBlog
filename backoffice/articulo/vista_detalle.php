<?php
  // Detalle para un Articulo ?>

<?php require '../../html/backoffice/head.php'; ?>
<?php require_once  '../../core/utilidades.php'; ?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
           <h1 class="page-header">
           		Articulo (Crear / Editar)           		
           	</h1>
         </div>
        <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">

  
				  
				  
				  <form action="<?php echo(CONTROLLER_ARTICULO);?>" method="post" enctype='multipart/form-data'>
				  
					 <div class="form-group">				  
				  		<input type="text" name="titulo" required placeholder="Titulo minimo 5 letras" pattern=".{5,}" value="<?php echo $articulo['titulo'];?>">
				  	</div>
				  	
				  	<?php if ( isset($usuarios)) { 
						echo ' <div class="form-group">	';	
				  		$html = '<select name="id_usuario">';		
						foreach ( $usuarios as $user ) {								 			
							$html .='<option selected value="'.$user['id'].'">';								
							$html .= $user['nombre'];
							$html .='</option>';
						}
						$html .='</select>';
						echo $html;
						echo ' </div>';
				  		
				  	} //if ?> 
				  	 
				  	 				  	
				  	<input type="hidden" name="id" value="<?php echo $articulo['id'];?>">
				  	
				  	
				  	<textarea name="contenido" rows="" cols="">
				  		<?php echo $articulo['contenido'];?>
				  	</textarea>
				  	
				  	<?php if ($articulo['foto'] == ""){ ?>
				  	<div class="form-group">
				  		<input type='file' name='foto' id='foto' />
				  	</div>
				  	<?php }else{?>
				  	<div class="form-group">
				  		<img src="<?php echo $articulo['foto']?>" alt='foto' height="200px" width="200px" />
				  	</div>
				  	<?php }?>
				  	
				  	<?php if ( $articulo['id'] != -1 ){ ?>
					  	 <div class="form-group">
						  	<input type="hidden" name="op" value="4">
						  	<input type="submit" value="modificar" class="btn btn-outline btn-primary btn-lg">
						  </div>	
					 <?php } else { ?>
						  <div class="form-group">
						  	<input type="hidden" name="op" value="0">
						  	<input type="submit" value="Crear" class="btn btn-outline btn-success btn-lg">
						  </div>	
				  	 <?php } ?>
				  	
				  </form>
				  
				  
		</div><!-- /.row -->    
</div><!-- <div id="page-wrapper"> -->

<?php require '../../html/backoffice/footer.php'; ?>				  