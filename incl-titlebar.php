    <div class="topbar">
      <div class="fill">
        <div class="container">
          <a class="brand" href="/">Site Vault</a>
  		  <form action="index.php" method="get">
		  <div id="nav-main">
		  	<ul class="menu">
		  		<li><a href="index.php">Home</a></li>
		  		<li><a href="?tools">Tools</a></li>
		  		<li>
		  			<a href="#">Categories</a>
		  			<ul>
					    <?php foreach ($cats as $currcat){ ?>
					      <li><a href="?cat=<?php echo urlencode($currcat); ?>"><?php echo escape_for_html($currcat); ?> <?php echo " (".svcountcatentries($currcat).")"; ?></a></li>
					    <?php } ?>		  				
		  			</ul>
		  		</li>
		  		<li><a href="?new=1&amp;cat=<?php echo urlencode($defcat) ?>">Add New Entry</a></li>
		  	</ul>
		  </div>
<!--
		  <div id="searchbox" class="pull-right">
			<input type="text" name="s" value="<?= htmlspecialchars ($filter) ?>" size ="7" id="inpfield" />
			<input type="submit" class="button" name="image" value="Filter" title="run filter" />
		  </div>
-->
		  </form>
        </div>
      </div>
    </div>
    <div class="container">
    	<div class="row">
    		<div class="span-14">
				<?php foreach($errormsg as $msg){ ?>
				<div class="alert-message error"><?php echo escape_for_html($msg) ?></div>
				<?php } ?>
				
				<?php foreach($infomsg as $msg){ ?>
				<div class="alert-message info"><?php echo escape_for_html($msg) ?></div>
				<?php } ?>    
			</div>
		</div>
    </div>
    
    <div class="container">

