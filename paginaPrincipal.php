<div class="taula">

  <table class="table table-striped table-hover ">
    <tr class="table-info">
      <th>ID</th>
      <th>ANY</th>
      <th>NOM DE LA POBLACIO</th>
      <th>CODI</th>
      <th>+ Info</th>
    </tr>
    <?php foreach($resultat_poblacions as $poblacio) { ?>
        <tr>

          <td> <?= html_escape($poblacio['id']) ?> </td>
          <td> <?= html_escape($poblacio['any']) ?> </td>
          <td> <?= html_escape($poblacio['nom_poblacio']) ?> </td>
          <td> <?= html_escape($poblacio['codi_poblacio']) ?> </td>
          <td> <button disabled="disabled">+ Info</button> </td>

        </tr>
      <?php }  ?>

  </table>
  
  <!-- Estructura i css paginacio creada amb bootstrap 5-->
  <nav>
    <ul class="pagination">

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

      <li class="page-item <?= $_GET['pagina'] >= $pagines ? 'disabled' : ''  ?> ">
        <a class="page-link" 
        href="index.php?pagina=<?=  $_GET['pagina']+1  ?>" >
        Següent
        </a>
      </li>
    </ul>
  </nav>

  
  
</div>


