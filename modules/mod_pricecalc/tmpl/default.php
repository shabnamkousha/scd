<?php
// No direct access
defined('_JEXEC') or die; ?>
<?php //echo $hello; ?>
    <script src="http://seiyria.com/bootstrap-slider/js/bootstrap-slider.js"></script>
    <script src="/templates/shaper_helixultimate/js/jquery.bootstrap-touchspin.js"></script>
    <link href="/templates/shaper_helixultimate/css/jquery.bootstrap-touchspin.css" rel="stylesheet">
    <link href="/templates/shaper_helixultimate/js/test.css" rel="stylesheet">
    <link href="http://seiyria.com/bootstrap-slider/css/bootstrap-slider.css" rel="stylesheet">

<style>
#ex1Slider .slider-selection {
	background: #ccc;
}
.slider-handle{
  background:#6699FF;
}
.calcFormInput .btn-primary,.calcFormInput .sppb-btn-primary{
  background-color: #ced4da;
  border-color:#ced4da;
}
.calcFormInput .btn-primary:hover{
  background: #808080;
  border-color:#ced4da;

}
.tooltip.top{
  padding: 5px 0;
}
.tooltip{
  position: absolute;
z-index: 1070;
display: block;
font-size: 12px;
line-height: 1.4;
visibility: visible;
filter: alpha(opacity=0);
opacity: 0;
}
.tooltip {
    position: absolute;
    z-index: 1070;
    display: block;
    margin: 0;
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
    font-style: normal;
    font-weight: 400;
    line-height: 1.5;
    text-align: left;
    text-align: start;
    text-decoration: none;
    text-shadow: none;
    text-transform: none;
    letter-spacing: normal;
    word-break: normal;
    word-spacing: normal;
    white-space: normal;
    line-break: auto;
    font-size: 11px;
    word-wrap: break-word;
    opacity: 0;
  }
.slider.slider-horizontal{
  margin-top:33px;
}
.tooltip.in{
  opacity: .9;
}
.tooltip-arrow{position:absolute;width:0;height:0;border-color:transparent;border-style:solid}
.tooltip.top .tooltip-arrow{bottom:0;left:50%;margin-left:-5px;border-width:5px 5px 0;border-top-color:#000}

.roomclass{
  width:107px;
}
.washroomclass{
  width:107px;
  margin-left: 10px;
}
.diningroomclass{
  width:107px;
}
.entrancedoorclass{
  width:107px;
  margin-left: 10px;
}
.balconiesclass{
  width:107px;
  margin-left: 10px;
}
.calcFormInput .input-group-text{
  font-size:13px!important;
}
.calcFormInput{
  float:left;
}
.price-calc-wrapper{
  width:100%;
  margin-bottom: 5px;
}
.priceCalcLbl{
  font-size:14px;
  font-weight:bold;
}
</style>
        <div class="price-calc-wrapper">
          <div class="calcFormInput roomclass">
            <div class="float-left priceCalcLbl">Rooms</div>
            <input id="rooms" type="text" value="0" name="rooms">
          </div>
          <div class="calcFormInput washroomclass">
            <div class="float-left priceCalcLbl">Bathrooms</div>
            <input id="washrooms" type="text" value="0" name="washrooms">
          </div>
      </div>
      <div class="price-calc-wrapper">
        <div class="calcFormInput diningroomclass">
          <div class="float-left priceCalcLbl">Dining Rooms</div>
          <input id="diningroom" type="text" value="0" name="diningroom">
        </div>
        <div class="calcFormInput entrancedoorclass">
          <div class="float-left priceCalcLbl">Enternaces</div>
          <input id="entrancedoor" type="text" value="0" name="entrancedoor">
        </div>
      </div>
        <div class="calcFormInput balconiesclass">
          <div class="float-left priceCalcLbl">Balconies</div>
          <input id="balconies" type="text" value="0" name="balconies">
        </div>
        <script>
            jQuery("input[name='rooms']").TouchSpin({
                min: 0,
                max: 9,
                step: 1,
                decimals: 0,
                boostat: 5,
                maxboostedstep: 10,
                //prefix: '# of Rooms'
            });
        </script>
        <script>
            jQuery("input[name='washrooms']").TouchSpin({
                min: 0,
                max: 5,
                step: 1,
                decimals: 0,
                boostat: 5,
                maxboostedstep: 10,
                //prefix: '# of Toilets'
            });
        </script>
        <script>
            jQuery("input[name='diningroom']").TouchSpin({
                min: 0,
                max: 5,
                step: 1,
                decimals: 0,
                boostat: 5,
                maxboostedstep: 10,
                //prefix: '# of Dining Rooms'
            });
        </script>
        <script>
            jQuery("input[name='entrancedoor']").TouchSpin({
                min: 0,
                max: 5,
                step: 1,
                decimals: 0,
                boostat: 5,
                maxboostedstep: 10,
                //prefix: '# of Entrance Doors'
            });
        </script>
        <script>
            jQuery("input[name='balconies']").TouchSpin({
                min: 0,
                max: 5,
                step: 1,
                decimals: 0,
                boostat: 5,
                maxboostedstep: 10,
                //prefix: '# of Balconies'
            });
        </script>

<br>

<br>
<input id="ex1" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="11" data-slider-step="1" data-slider-value="1"/>

<script>

// With JQuery
jQuery('#ex1').slider({
	formatter: function(value) {
    //console.log(value);
    if(value<3){
      //jQuery(slider-selection).css("background-color":"#000");
      jQuery('.slider-handle').css({"background":"#6699FF"});
      jQuery('.slider-selection').css({"background":"#6699FF"});
      packagename="cool";
    }
    if(3<=value && value<6){
      //jQuery(slider-selection).css("background-color":"#000");
      jQuery('.slider-handle').css({"background":"#F18B53"});
      jQuery('.slider-selection').css({"background":"#F18B53"});
      packagename="comfort";
    }
    if(6<=value && value<9){
      //jQuery(slider-selection).css("background-color":"#000");
      jQuery('.slider-handle').css({"background":"#7851a9"});
      jQuery('.slider-selection').css({"background":"#7851a9"});
      packagename="Plus";
    }
    if(9<=value && value<=11){
      //jQuery(slider-selection).css("background-color":"#000");
      jQuery('.slider-handle').css({"background":"#D4AF37"});
      jQuery('.slider-selection').css({"background":"#D4AF37"});
      packagename="Premium";
    }
		return 'Package level: ' + packagename;
	}
});


</script>
