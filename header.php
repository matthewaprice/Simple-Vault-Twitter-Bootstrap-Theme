<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" 
	"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="robots" content="noarchive,nofollow" />
	<meta http-equiv="cache-control" content="no-cache" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" />
	<title><?= $pgtitle ?> - Simple Vault</title>
	<link href="<?php echo $template; ?>/tpl.css" rel="stylesheet" type="text/css" media="screen" />
	<link rel="shortcut icon" href="img/favicon.ico" />
	<script type="text/javascript" src="/sv.js"></script>  
</head>

<body>

    <div class="topbar">
      <div class="fill">
        <div class="container">
          <a class="brand" href="/">Simple Vault</a>
  		  <form action="index.php" method="get" style="width: 688px;">
		  <div id="nav-main">
		  	<ul>
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
			  <div class="pull-right">
				<input type="text" name="s" value="<?= htmlspecialchars ($filter) ?>" size ="7" id="inpfield" />
				<input type="submit" class="button" name="image" value="Filter" title="run filter" />
			  </div>		  	
		  </div>
		  </form>
        </div>
      </div>
    </div>
    <div class="container" id="messages">
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

