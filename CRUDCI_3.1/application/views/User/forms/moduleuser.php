
<?php

$Id = "";
$Name= "";
$Imagen = "";
if ($op == "editar") {
	foreach($query->result() as $row)
	{

		$op="editar";
		$Id = $row->Id;
		$Name= $row->Name;
    $Imagen = $row->Imagen;

			}
}



?>


<?php echo form_open(base_url(). 'home/guardar'); ?>
<div class="panel panel-primary" style="max-width:40%; margin: auto;">
  <div class="panel-heading">
    <h3 class="panel-title text-center">Registro de usuarios</h3>
  </div>
  <div class="panel-body">
   <div class="container" style="max-width:100%; margin:auto;" >
  <div class="form-group"  >
    <input  type="hidden"  class="form-control" name="op"   value="<?php echo $op; ?>" >
    <input  type="hidden" class="form-control" name="nid" value="<?php  echo $Id ; ?>" >


  </div>
  <div class="form-group" >
    <label >Nombre</label>
    <input type="text" class="form-control" name="nNombre"  placeholder="Nombre" value="<?php echo $Name; ?>" >
  </div>
   <div class="form-group" >
    <label >Imagen</label>


    <input type="file" class="form-control" name="nImagen" id="imgfile"  >
   <center><img src="" id="imgp" class="img img-thumbnail" style="width:80px; height:80px; " >
</center> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript">
    
    function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#imgp').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#imgfile").change(function(){
    readURL(this);
});

 
    </script>
  </div>
 
 
  
  <div class="row">
    <button style="margin-left:25px;" type="submit" class="btn btn-primary col-lg-5"><?php echo $boton;?></button>
    <a href="<?php echo base_url(); ?>home"><button type="button" style="margin-left:15px;" class="btn btn-danger col-lg-5">Cancelar</button></a>
  </div>
  
    <div class="row">
      <div class="container">
        <div class="col-md-12">
        <?php echo validation_errors();?>
          
        </div>        
      </div>
    </div>

</div>

  </div>
</div>


  <?php  echo form_close();?>