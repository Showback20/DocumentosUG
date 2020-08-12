<?php



$datos='<form action="../Controller/control_firmante.php"  id="formulario2" method="post" enctype="multipart/form-data">
<div class="form-group">
<label for="nombre" id="modalLab">Nombre</label>
<input class="form-control"  id="nombre" name="nombre" type="text" required> 
</div>
<div class="form-group">
<label for="apll_m" id="modalLab">Apellido Materno</label>
<input class="form-control" id="apll_m" name="apll_m" type="text" required> 
</div>
<div class="form-group">
<label for="apll_p" id="modalLab">Apellido Paterno</label>
<input class="form-control" id="apll_p" name="apll_p" type="text"  required> 
</div>
<div class="form-group">
<label for="titulo" id="modalLab">Titulo</label>
<input class="form-control"  id="titulo" name="titulo" type="text" required> 
</div>

<hr>
<div class="form-row">
<div class="form-group col-sm-3 ">      
    <button type="submit" class="btn btn-primary" id="btn1">Continuar</button>
   
    </div>
<div class="form-group col-sm-3">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
</div>
    
    
    </div>
<br>

</form>';
echo $datos;

?>