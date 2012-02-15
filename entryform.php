<?php include "header.php"; ?>
	<div class="content">	
		<div class="page-header">
			<h1><?php if ( $pgtitle ) { echo $pgtitle; } else { echo 'Create a New Entry'; } ?></h1>
		</div>
	<div class="row">
		<div class="span-14">		
			<form action="<?php echo $myfname ?>" method="post" onsubmit="return check_pf()" autocomplete="off">
			<div>
			<input name="defcat" type="hidden" value="<?php echo escape_for_html($cat) ?>"/>
			<input name="deft1"  type="hidden" value="<?php echo escape_for_html($t1) ?>"/>
			<input name="deft2"  type="hidden" value="<?php echo escape_for_html($t2) ?>"/>
			<input name="mode"   type="hidden" value="<?php echo escape_for_html($mode) ?>"/>
			<table class="entry">
			  <tr><td>Category: *</td><td>
			    <table class="raw"><tr><td>existing:</td><td><select name="catdl" size="1"><option></option>
			    <?php
			      foreach ($cats as $currcat){
			      print "<option".($cat==$currcat ? " selected":"").">" . escape_for_html($currcat) . "</option>";
			      }
			    ?>
			    </select></td></tr>
			    <tr><td>or new:</td><td><input name="cat" type="text" value="<?php echo escape_for_html($newcat) ?>" size="20" maxlength="200"/></td></tr>
			    </table>
			  </td></tr>
			  <tr><td>Title:   *</td><td><input id="t1" name="t1" type="text" value="<?php echo escape_for_html($t1) ?>" size="20" maxlength="200"/></td></tr>
			  <tr><td>Subtitle:</td><td><input name="t2" type="text" value="<?php echo escape_for_html($t2) ?>" size="20" maxlength="200"/></td></tr>
			</table>
			
			<p>encrypted:</p>
			<table class="encrbox">
			  <tr><td>URL:</td><td>
			  <input name="newp2"    type="text" value="<?php echo escape_for_html($encfields[2]) ?>" size="20" maxlength="200"/>
			  </td></tr>
			  <tr><td>Login:</td><td>
			  <input name="newp1"    type="text" value="<?php echo escape_for_html($encfields[1]) ?>" size="20" maxlength="200"/>
			  </td></tr>
			  <tr><td>Password: *</td><td>
			  <input id="newp3" name="newp3"    type="text" value="<?php echo escape_for_html($encfields[3]) ?>" size="20" maxlength="200"/>
			  Generate: 
			  <input type="button" value="cQ3" onclick="generate_password ('newp3', 'c')"/>
			  <input type="button" value="cQ3_!" onclick="generate_password ('newp3', 's')"/>
			  <input type="button" value="cQ3_!<£" onclick="generate_password ('newp3', 'a')"/>
			  </td></tr>
			  <tr><td> 
			  <input name="newp8" type="text" value="<?php echo escape_for_html($encfields[8]) ?>" size="6" maxlength="30"/>
			  :</td><td>
			  <input name="newp9" type="text" value="<?php echo escape_for_html($encfields[9]) ?>" size="20" maxlength="200"/>
			  </td></tr>
			  <tr><td>Note:</td><td>
			  <textarea name="newnote" cols="40" rows="6"><?php echo escape_for_html($encfields[$nbencfields]) ?></textarea>
			  </td></tr>
			</table>
			
			
			<p>
			Passphrase: <input id="pf" name="pf" type="password" value="" size="20" maxlength="200"/>
			<input type="checkbox" id="display_pf" onchange="toggle_pf('pf')" />
			</p>
			<p>
			<input type="submit" name="entrysave" value="save entry" />
			</p>
			</div>
			</form>
		</div>
	</div>
<?php include "footer.php"; ?>
