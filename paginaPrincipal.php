
<div class="taula">
  <!-- ESPAI PELS FILTRES -->
  <div class="filtres">
    <p>
      <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
        FILTRES
      </button>
    </p>
    <div class="collapse" id="collapseExample">
      <div class="card card-body bg-light">
        Espai pels formularis dels filtres - NO TOCAR DE MOMENT !!!!!
        <!-- https://getbootstrap.com/docs/5.0/forms/floating-labels/ -->
        <div class="form-floating">
          <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
            <option selected>Tots</option>
            <option value="1">2019</option>
            <option value="2">2020</option>
          </select>
          <label for="floatingSelectGrid">Seleccionar Any</label>
        </div>
      </div>
    </div>
  </div>


    <!-- PAGINACIO-->
  <!-- Estructura i css paginacio creada amb bootstrap 5-->

  <nav>
    <ul class="pagination">
      <!-- Aplico la clase de bootstrap disabled quan la pagina es igual o inferior a 1
      Repassar enllaços i GET !!!-->
      <li class="page-item <?= $_GET['pagina'] <= 1 ? 'disabled' : ''  ?> ">
        <a class="page-link" 
        href="index.php?pagina=<?=  $_GET['pagina'] - 1  ?>" >
        Anterior
        </a>
      </li>

      <!-- Amb aquest for creo l'estructura de links a partir de la
      variable $pagines -->
      <?php for($i = 0; $i < $pagines; $i++) { ?>
      <li class="page-item <?= $_GET['pagina'] == $i + 1 ? 'active' : ''  ?> " >
        <a class="page-link" 
        href="index.php?pagina=<?= $i + 1  ?>"> 
        <?= $i + 1  ?>  
        </a>
      </li>
      <?php  }  ?>

      <!-- Aplico la clase de bootstrap disabled quan la pagina es igual o superior al total de pagines-->
      <li class="page-item <?= $_GET['pagina'] >= $pagines ? 'disabled' : ''  ?> ">
        <a class="page-link" 
        href="index.php?pagina=<?=  $_GET['pagina']+1  ?>" >
        Següent
        </a>
      </li>
    </ul>
  </nav>

  <!-- TAULA PER MOSTRAR POBLACIONS -->
  <table class="table table-striped table-hover ">
    <tr class="table-info">
      <th><input type="checkbox" name="seleccionarTot"></th>
      <th>ID</th>
      <th>ANY</th>
      <th>NOM DE LA POBLACIO</th>
      <th>CODI</th>
      <th>+ Info</th>
    </tr>
    <?php foreach($resultat_poblacions as $poblacio) { ?>
        <tr>

          <td> <input type="checkbox" name="seleccionar"> </td>
          <td> <?= html_escape($poblacio['id']) ?> </td>
          <td> <?= html_escape($poblacio['any']) ?> </td>
          <td> <?= html_escape($poblacio['nom_poblacio']) ?> </td>
          <td> <?= html_escape($poblacio['codi_poblacio']) ?> </td>
          <td> <a href="detallPoble.php?id=<?= $poblacio['id'] ?> & poblacio=<?= $poblacio['nom_poblacio'] ?>" target="_link"><button type="button">+INFO</button></a> </td>

        </tr>
      <?php }  ?>

  </table>



</div>


