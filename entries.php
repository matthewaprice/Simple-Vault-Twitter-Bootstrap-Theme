<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" 
	"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include "$template/incl-head.php"; ?>
</head>

<body  onload="document.forms.enterpf.pf.focus()">

<?php include "$template/incl-titlebar.php"; ?>

<h1>Decrypted Entries</h1>
<table class='entrylist'>
<?php foreach($entries as $entry){ 
        $cat = $entry['recfields'][0];
        $t1  = $entry['recfields'][1];
        $t2  = $entry['recfields'][2];
        $decfields = $entry['decfields'];
?>
  <tr><td class='tl'>
  <?php include "$template/incl-entry-title.php"; ?>
  </td><td class='tl'>
  <?php include "$template/incl-entry-body.php"; ?>
  </td></tr>
  <tr><td colspan='2'><hr /></td></tr>
<?php } ?>
</table>

<h1>Not Decrypted Entries</h1>
<table class='entrylist'>
<?php foreach($notdecrypted as $entry){ 
        $cat = $entry['recfields'][0];
        $t1  = $entry['recfields'][1];
        $t2  = $entry['recfields'][2];
?>
  <tr><td class='tl'>
  <?php include "$template/incl-entry-title.php"; ?>
  </td></tr>
  <tr><td><hr /></td></tr>
<?php } ?>
</table>

</body>
</html>
