<?php include "header.php"; ?>

	<div class="content">	
		<div class="page-header">
			<h1><?php echo $pgtitle ?></h1>
		</div>
	<div class="row">
		<div class="span-14">
			<table class="entry zebra-striped">
				<thead>
					<th>Category</th>
					<th>Title</th>					
					<th>Sub-title</th>		
					<th class="text-center">Unlock</th>								
					<th class="text-center">Edit</th>													
					<th class="text-center">Delete</th>							
				</thead>
				<tbody>
					<?php foreach ($records as $record){?>
					  <tr>
						<td><?php echo escape_for_html($record["cat"])?></td>
						<td><?php echo escape_for_html($record["t1"])?></td>
						<td><?php echo escape_for_html($record["t2"]) ?></td>
						<td class="text-center"><a href="?dec=1&amp;cat=<?php echo urlencode($record["cat"]); ?>&amp;t1=<?php echo urlencode($record["t1"]); ?>&amp;t2=<?php echo urlencode($record["t2"]); ?>"><img src="<?php echo $template; ?>/images/decrypt.png"  title="decrypt" alt="decrypt"/></a></td>
						<td class="text-center"><a href="?edt=1&amp;cat=<?php echo urlencode($record["cat"]); ?>&amp;t1=<?php echo urlencode($record["t1"]); ?>&amp;t2=<?php echo urlencode($record["t2"]); ?>"><img src="<?php echo $template; ?>/images/edit.png"  title="edit" alt="edit"/></a></td>
						<td class="text-center"><a href="?del=1&amp;cat=<?php echo urlencode($record["cat"]); ?>&amp;t1=<?php echo urlencode($record["t1"]); ?>&amp;t2=<?php echo urlencode($record["t2"]); ?>"><img src="<?php echo $template; ?>/images/delete.png"  title="delete" alt="delete"/></a></td>
					  </tr>
					<?php }?>
				</tbody>
			</table>
		</div>
	</div>
	
<?php include "footer.php"; ?>
