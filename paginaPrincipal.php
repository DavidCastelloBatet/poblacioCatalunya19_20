<div class="taula">

  <table class="table table-striped table-hover ">
    <tr class="table-info">
      <th>ID</th>
      <th>ANY</th>
      <th>NOM DE LA POBLACIO</th>
      <th>CODI</th>
      <th>+ Info</th>
    </tr>
    <?php foreach($poblacions as $poblacio) { ?>
        <tr>

          <td> <?= html_escape($poblacio['id']) ?> </td>
          <td> <?= html_escape($poblacio['any']) ?> </td>
          <td> <?= html_escape($poblacio['nom_poblacio']) ?> </td>
          <td> <?= html_escape($poblacio['codi_poblacio']) ?> </td>
          <td> <button disabled="disabled">+ Info</button> </td>

        </tr>
      <?php }  ?>

  </table>

</div>


