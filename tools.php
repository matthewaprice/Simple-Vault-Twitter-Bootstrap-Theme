<?php include "header.php"; ?>
	<div class="content">	
		<div class="page-header">
			<h1>Tools</h1>
		</div>
	<div class="row">
		<div class="span-14">
			<h2>Bulk Decrypt Entries</h2>
			<form action="index.php" method="post"  autocomplete="off">
			  <p>Passphrase: <input name="pf" value="" size="20" maxlength="200" type="password"/> &nbsp; <input name="bulkdecrypt" value="Decrypt all" type="submit"/></p>
			</form>
			<div class="helptext"><span>This function at once decrypts and displays all entries that can be decrypted with the <i>passphrase</i>.</span></div>
			
			<hr/>
			
			<h2>Bulk Change Passphrase</h2>
			<form action="index.php" method="post"  autocomplete="off">
			  <p>Old Passphrase: <input name="oldpf" value="" size="20" maxlength="200" type="password"/> &nbsp; New Passphrase: <input name="newpf" value="" size="20" maxlength="200" type="password"/> 
			  <input name="bulkchangepf" value="Change all" type="submit"/></p>
			</form>
			<div class="helptext"><span>This function scans all entries and sets the <i>new passphrase</i> for those entries that can be decrypted with the <i>old passphrase</i>. Those entries that cannot be decrypted with the <i>old passphrase</i> are not modified.</span></div>
			
			<hr/>
			
			<h2>Import Entries</h2>
			<form action="index.php" method="post" enctype="multipart/form-data"  autocomplete="off">
			<table><tbody>
			<tr><td>Import File: </td><td><input name="MAX_FILE_SIZE" value="30000000" type="hidden"/><input name="importfile" size="50" type="file"/> </td></tr>
			<tr><td>Category: </td><td><select name="importcat" size="1">
			<?php  foreach ($cats as $cat){
			    print "<option>" . escape_for_html($cat) . "</option>";    
			  } ?>
			</select></td></tr>
			<tr><td>Passphrase: </td><td><input name="pf" value="" size="20" maxlength="200" type="password"/> &nbsp; <input name="bulkimportentries" value="Import" type="submit"/></td></tr>
			</tbody></table>
			</form>
			<div class="helptext">This function imports entries from an uploaded file into a category. All imported entries are encrypted with the same <i>passphrase</i>. <br/>
			
			Format of the uploaded file: Whenever a text line starts with the string <tt>Title:</tt> a new entry is created. The respective fields of an entry are set to the values of lines starting with <tt>Subtitle, URL:, Login:, Password: </tt>or<tt> Note: </tt> Note is the only multi-line field. <br/>
			<br/>
			Example (with two entries):<br/>
			<pre>Title: Host Pluto
			Login: johndoe
			Password: mypasswd
			URL: http://my.site.org
			Note:
			Here follows some
			multi-line text
			
			Title: Host Janus
			Subtitle: db account
			Login: janedoe
			Password: janespwd
			URL: 
			Note:
			</pre>
			</div>
		</div>
	</div>

<?php include "footer.php"; ?>