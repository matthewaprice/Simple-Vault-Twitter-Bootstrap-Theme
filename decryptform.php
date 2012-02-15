<?php include "header.php"; ?>

	<div class="content">	
		<div class="page-header">
			<h1><?php echo ucfirst($decrmode) ?> Entry</h1>
		</div>
	<div class="row">
		<div class="span-14">
			<?php include "incl-entry-title.php"; ?>
			<?php if($pwdmsg){ ?>
				<p><span class="warning"><?php echo $pwdmsg ?></span></p>
			<?php } ?>
			<?php if($entrydeleted){ ?>
				<p><span class="info">Entry <?php echo escape_for_html($t1)."/".escape_for_html($t2) ?> deleted!</span> &nbsp; <a href="index.php">Ok</a></p>
			<?php }else{ ?>
				<form name="enterpf" action="index.php" method="post"  autocomplete="off">
				<input name="cat" type="hidden" value="<?php echo escape_for_html($cat) ?>"/>
				<input name="t1"  type="hidden" value="<?php echo escape_for_html($t1) ?>"/>
				<input name="t2"  type="hidden" value="<?php echo escape_for_html($t2) ?>"/>
				<p>
				Passphrase: <input id="pf" name="pf" type="password" value="" size="20" maxlength="200"/> 
				<input type="submit" name="entry<?php echo escape_for_html($decrmode) ?>" value="<?php echo escape_for_html($decrmode) ?>" />
				<input type="checkbox" id="display_pf" onchange="toggle_pf('pf')" />
				</p>
				</form>
			<?php } ?>
		</div>
	</div>
<?php include "footer.php"; ?>
