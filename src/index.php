<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>A-Heaven</title>
  <base href="/">

<meta name="viewport" content="width=device-width,initial-scale=1.0>
<link rel="icon" type="image/x-icon" href="./icons/favicon.ico">
<link rel="stylesheet" href="./assets/css/material.css">
<link rel="stylesheet" href="./assets/css/animate.css">
<link rel="stylesheet" href="./assets/css/mobilebone.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<style>
body { background-color: #cd0000; }
</style>
</head>
<body>
<app-root></app-root>
<script src="./assets/js/mobilebone.js"></script>


<!-- Plugin -->
<!-- 
<script src="./assets/js/underscore-min.js"></script>
<script src="./assets/js/fastclick.js"></script>
<script src="./assets/js/iscroll-lite.js"></script>
<script src="./assets/js/jquery.tap.js"></script>
-->

<!-- frozen UI -->
<!-- 
<script src="./assets/js/zepto.js"></script>
<script src="./assets/js/frozen.js"></script>
-->

  <script>
/*console.log = function(content) {
	document.getElementById("result").innerHTML += '<p>'+ content +'</p>';
};*/
$("#back").on("tap", function() {
	location.href = this.href;
});
</script>
<script>mdc.autoInit()</script> 
</body>
</html>
