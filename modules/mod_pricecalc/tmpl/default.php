<?php
// No direct access
defined('_JEXEC') or die; ?>
<?php //echo $hello; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
    <script src="http://seiyria.com/bootstrap-slider/js/bootstrap-slider.js"></script>
    <link href="http://seiyria.com/bootstrap-slider/css/bootstrap-slider.css" rel="stylesheet">
    <link href="http://seiyria.com/bootstrap-slider/dependencies/css/bootstrap.min.css" rel="stylesheet">


<style>
#ex1Slider .slider-selection {
	background: #ccc;
}
.slider-handle{
  background:#ff00ff;
}
</style>
<input type="number" value="1" min="0" max="10" step="1"/>

<br>
<input id="ex1" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="11" data-slider-step="1" data-slider-value="1"/>

<script>

// With JQuery
$('#ex1').slider({
	formatter: function(value) {
    //console.log(value);
    if(value<3){
      //$(slider-selection).css("background-color":"#000");
      $('.slider-handle').css({"background":"#6699FF"});
      $('.slider-selection').css({"background":"#6699FF"});
      packagename="cool";
    }
    if(3<=value && value<6){
      //$(slider-selection).css("background-color":"#000");
      $('.slider-handle').css({"background":"#F18B53"});
      $('.slider-selection').css({"background":"#F18B53"});
      packagename="comfort";
    }
    if(6<=value && value<9){
      //$(slider-selection).css("background-color":"#000");
      $('.slider-handle').css({"background":"#7851a9"});
      $('.slider-selection').css({"background":"#7851a9"});
      packagename="Plus";
    }
    if(9<=value && value<=11){
      //$(slider-selection).css("background-color":"#000");
      $('.slider-handle').css({"background":"#D4AF37"});
      $('.slider-selection').css({"background":"#D4AF37"});
      packagename="Premium";
    }
		return 'Package level: ' + packagename;
	}
});


</script>
