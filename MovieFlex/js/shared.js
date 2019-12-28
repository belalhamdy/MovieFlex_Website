$.get("NavBar.php", function(data){
  $("#nav-placeholder").replaceWith(data);
});
$.get("footer.php", function(data){
  $("#footer-placeholder").replaceWith(data);
});