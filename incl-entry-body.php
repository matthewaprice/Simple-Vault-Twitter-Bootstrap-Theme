<table class="encrbox">
<tr><td>URL:</td><td>       <?php echo print_url(escape_for_html($decfields[2])) ?></td></tr>
<tr><td>Login:</td><td>     <?php echo escape_for_html($decfields[1])  ?></td></tr>
<tr><td>Password:</td><td>  <?php echo escape_for_html($decfields[3])  ?></td></tr>
<?php  if(strlen($decfields[8]) > 0){ ?>
    <tr><td><?php echo escape_for_html($decfields[8]) ?>:</td><td><?php echo escape_for_html($decfields[9]) ?></td></tr>
<?php  } ?>
<tr><td>Note:</td><td><pre><?php echo escape_for_html($decfields[$nbencfields]) ?></pre></td></tr>
</table>
 