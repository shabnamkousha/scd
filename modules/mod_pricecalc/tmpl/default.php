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
.tooltip.in{
  opacity: .9;
}
.tooltip-arrow{position:absolute;width:0;height:0;border-color:transparent;border-style:solid}
.tooltip.top .tooltip-arrow{bottom:0;left:50%;margin-left:-5px;border-width:5px 5px 0;border-top-color:#000}

.roomclass{
  width:220px;
}
.washroomclass{
  width:220px;
  margin-left: 10px;
}
.diningroomclass{
  width:220px;
}
.entrancedoorclass{
  width:220px;
}
.balconiesclass{
  width:220px;
  margin-left: 10px;
}
.calcFormInput .input-group-text{
  font-size:13px!important;
}
.calcFormInput{
  float:left;
}
.price-calc-wrapper{
  width:90%;
  margin-bottom: 14px;
  height:40px;
  margin-left:5%;
}
.priceCalcLbl{
  font-size:14px;
}
.packageLvl{
  margin-top:-1px;
  width:223px;
  padding-left:3px;
}
.slider.slider-horizontal{
  width:223px;
}
.price-calc-wrapper .input-group-text{
  width:115px;
  display:block;
  text-align: center;
  padding:9px;
}
.priceBox{
    border: 1px solid #ccc;
    width: 220px;
    padding-left: 10px;
    margin-top: 25px;
    border-radius: .25rem;
    min-height:100%;
    font-size:14px;
    display: flex;
}
#rooms:focus, #diningroom:focus, #washrooms:focus, #balconies:focus,#entrancedoor:focus{
    border-color: #cccccc!important;
    -webkit-box-shadow: none!important;
    box-shadow: none!important;
}
input[readonly] {
    background-color: #fff!important;
}
.priceBoxLbl, .priceBoxVal{
  display:block;
  margin-top:10px;
  margin-bottom:10px;
}
.priceBoxVal{
  margin-left:5px;
}
.priceCalcTitle{
  width:90%;
  font-weight: bold;
  margin-bottom:12px;
  margin-left: 5%;
  font-size: 17px;
}
</style>
        <div class="priceCalcTitle">
          Smart Home Price Calculator
        </div>
        <div class="price-calc-wrapper">
          <div class="calcFormInput roomclass numberSpinner">
            <input readonly id="rooms" type="text" value="0" name="rooms">
          </div>
          <div class="calcFormInput washroomclass float-right numberSpinner">
            <input readonly id="washrooms" type="text" value="0" name="washrooms">
          </div>
      </div>
      <div class="price-calc-wrapper">
        <div class="calcFormInput diningroomclass numberSpinner">
          <input readonly id="diningroom" type="text" value="0" name="diningroom">
        </div>
        <div class="calcFormInput balconiesclass float-right numberSpinner">
          <input readonly id="balconies" type="text" value="0" name="balconies">
        </div>
      </div>
      <div class="price-calc-wrapper">
        <div class="calcFormInput entrancedoorclass numberSpinner">
          <input readonly id="entrancedoor" type="text" value="0" name="entrancedoor">
        </div>

        <div class="calcFormInput packageLvl float-right">
          <div class="priceCalcLbl">Type of package
          <a href="/smart-home-packages-description" target="_blank" class="readon jcepopup" data-mediabox-width="610" data-mediabox-height="500" type="text/html" rel=""> (?)</a></div>
          <input id="ex1" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="11" data-slider-step="1" data-slider-value="0"/>
        </div>
      </div>
      <div class="price-calc-wrapper">
        <div class="priceBox">
          <div class="float-left priceBoxLbl"><b>Price starting from</b></div> <div class="float-left priceBoxVal" id="exactPriceVal">...</div>
        </div>
      </div>


        <script>
            jQuery("input[name='rooms']").TouchSpin({
                min: 0,
                max: 9,
                step: 1,
                decimals: 0,
                boostat: 5,
                maxboostedstep: 10,
                prefix: 'Bedrooms'
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
                prefix: 'Bathrooms'
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
                prefix: 'Dining Rooms'
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
                prefix: 'Entrance Doors'
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
                prefix: 'Balconies'
            });
        </script>

<br>

<br>

<script>
packageLVL=0;
roomNum=0;
diningNum=0
balconyNum=0;
enteranceNum=0;
bathroomNum=0;
calculatedPrice=0;
pricePerRoom=1000;
pricePerDining=2000;
pricePerEntrance=500;
pricePerBathroom=700;
pricePerBalcony=200;
// With JQuery
jQuery('#ex1').slider({
	formatter: function(value) {
    //console.log(value);
    packageLVL=value;
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
    calculatedPrice=calcFinalPrice();
		return 'Package level: ' + packagename;
	}
});

jQuery('input').keydown(function(e) {
   e.preventDefault();
   return false;
});



jQuery(".roomclass").on("click", function () {
    roomNum = jQuery('#rooms').val();
    calculatedPrice=calcFinalPrice();
});
jQuery(".washroomclass").on("click", function () {
    bathroomNum = jQuery('#washrooms').val();
    calculatedPrice=calcFinalPrice();
});
jQuery(".balconiesclass").on("click", function () {
    balconyNum = jQuery('#balconies').val();
    calculatedPrice=calcFinalPrice();
});
jQuery(".diningroomclass").on("click", function () {
    diningNum = jQuery('#diningroom').val();
    calculatedPrice=calcFinalPrice();
});
jQuery(".entrancedoorclass").on("click", function () {
    enteranceNum = jQuery('#entrancedoor').val();
    calculatedPrice=calcFinalPrice();
});

function calcFinalPrice(){
  finalVal=(roomNum*pricePerRoom+diningNum*pricePerDining+balconyNum*pricePerBalcony+enteranceNum*pricePerEntrance+bathroomNum*pricePerBathroom)*(packageLVL+1);
  if (finalVal==0){
    jQuery("#exactPriceVal").text('...');
  } else {
  jQuery("#exactPriceVal").text('$'.concat(finalVal));
  }
  return finalVal;
}
</script>
