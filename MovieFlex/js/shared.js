$.get("includes/NavBar.php", function(data){
  $("#nav-placeholder").replaceWith(data);
});