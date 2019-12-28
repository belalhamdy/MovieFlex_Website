
	  $.get("LeftNavBar.php", {'category' : '<?php echo $_GET['category']?>'}, function(data){
		  $("#leftnav-placeholder").replaceWith(data)
	  });