<br>
<br>
<div class="card">
    <h5 class="card-header bg-info white-text text-center py-4">
        <strong style="color:#FFFFFF">Gramática</strong>
    </h5>
    <div class="card-body px-lg-5">
        <form class="text-left" id="generaGramatica" name="generaGramatica" method="POST" action="<?php echo $action; ?>">
            <label for="Oracion">Oracion:</label>
            <div class="form-group">
                <input type="text" id="oracion" name="oracion" class="form-control" placeholder="Oración">
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" id="lenguaje" name="lenguaje"  value="1" checked>
                <label class="form-check-label" for="español">
                Español
              </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="lenguaje" name="lenguaje"  value="2">
                <label class="form-check-label" for="English">
                English
              </label>
            </div>
            <br>
           <button class="btn btn-info btn-block" type="submit">Generar</button>
        </form>
    </div>
</div>

<br>
<div class="row">
    <div class="col-sm-3 text-center">
        <div class=""  id='articulo'>
          <strong></strong>
        </div>
    </div>
    <div class="col-sm-3 text-center">
        <div class=""  id='sujeto'>
          <strong></strong>
        </div>
    </div>
    <div class="col-sm-3 text-center">
        <div class=""  id='verbo'>
          <strong></strong>
        </div>
    </div>
    <div class="col-sm-3 text-center">
        <div class=""  id='predicado'>
          <strong></strong>
        </div>
    </div>
    
</div>  

<div class="col-sm-12 text-center h3">
    <div class=""  id='gramatica'>
        <strong></strong>
    </div>
</div>
<br>
<div class="row col-sm-12">
    <div class="row col-sm-4">
    </div>
    <div class="card col-sm-4 text-center">
        <h5 class="card-header bg-success white-text text-center py-1">
            <strong style="color:#FFFFFF">Derivación</strong>
        </h5>
        <div class="card-body px-lg-1">
            <label id = 'regla_articulo'></label>
            <label id = 'regla_sujeto'></label>
            <label id = 'regla_verbo'></label>
            <label id = 'regla_predicado'></label>
        </div>
    </div>
    <div class="row col-sm-4">
    </div>
</div>
<br>
<div class="row col-sm-12">
    <div class="card col-sm-6">
        <h5 class="card-header bg-success white-text text-center py-1">
            <strong style="color:#FFFFFF">Español</strong>
        </h5>
        <div class="card-body px-lg-1">
            <?php 
                echo '<b>1</b> &nbsp&nbsp I -> ASVP <br><br>';
                echo '<b>2</b> &nbsp&nbsp A -> el | los | la | las | un | unos | una | unas <br>';
                echo '<b>3</b> &nbsp&nbsp S -> carro | casa | mueble | computadora | elefante | avion | celular | niños <br>';
                echo '<b>4</b> &nbsp&nbsp V -> es | esta <br>';
                echo '<b>5</b> &nbsp&nbsp P -> rojo | hermoso | hermosa | verde <br>';
            ?>
        </div>
    </div>

    <div class="card col-sm-6">
        <h5 class="card-header bg-success white-text text-center py-1">
            <strong style="color:#FFFFFF">English</strong>
        </h5>
        <div class="card-body px-lg-1">
            <?php 
                echo '<b>1</b> &nbsp&nbsp I -> ASVP <br><br>';
                echo '<b>2</b> &nbsp&nbsp A -> the | a | an  <br>';
                echo '<b>3</b> &nbsp&nbsp S -> car | house | table | computer | elefant | airplane | mobile | children <br>';
                echo '<b>4</b> &nbsp&nbsp V -> is | are <br>';
                echo '<b>5</b> &nbsp&nbsp P -> red | beautiful | green <br>';
            ?>
        </div>
    </div>
</div>

