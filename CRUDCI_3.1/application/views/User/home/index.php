<div class="jumbotron" style="height:100%;">
	<div class="container" >


	<div class="panel panel-primary" style="width:60%; margin:auto;">

	<div class="pnale-heading">
		<center><h4>Listado de usuarios</h4></center>
	</div>

	<div class="panel-body">

    <div class="table-responsive">
    	
    	<table class="table table-striped table-bordered table-hover">

    	<thead>
    		<th>Id</th>
    		<th>Nombre</th>
            <th>Imagen</th>
            <th>Editar</th>
            <th>Eliminar</th>

    	</thead>
    	
           
    		<tbody>

            <?php
             foreach($query->result() as $row) {?> 
            <tr>
            <?php 

            


            ?>

                <td><?php echo $row->Id; ?> </td>
                <td><?php  echo $row->Name;?></td>
                <td> <?php  echo $row->Imagen; ?></td>
                <td>    <a href="<?php echo base_url();?>home/editar/<?php echo $row->Id; ?>" class="btn btn-warning btn-xs">Editar</a></td>
                <td> <a href="javascript:if(confirm('Seguro que desea eliminar a <?php echo $row->Name; ?> ?')){window.location='<?php echo base_url();?>home/eliminar/<?php echo $row->Id;?>'}" class="btn btn-danger btn-xs">Eliminar</a></td>
                

            </tr>
            <?php } ?>
    			
    		

    		</tbody>

    	</table>
         
    </div>

		
	</div>

	<div class="panel-footer">
		<a href="<?php echo base_url(); ?>home/formUser" class="btn btn-primary btn-sm">Nuevo</a>



<button class="btn btn-primary btn-sm" type="button" style="float:right;">
  Total de usuarios: <span class="badge"><?php echo $queryfilas; ?></span>
</button>

	</div>
		
	</div>
	
	

</div>

</div>
