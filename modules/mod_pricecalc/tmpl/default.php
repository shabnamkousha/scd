<?php
// No direct access
defined('_JEXEC') or die; ?>
<?php //echo $hello; ?>
    <script src="http://seiyria.com/bootstrap-slider/js/bootstrap-slider.js"></script>
    <script src="/templates/shaper_helixultimate/js/jquery.bootstrap-touchspin.js"></script>
    <link href="/templates/shaper_helixultimate/css/jquery.bootstrap-touchspin.css" rel="stylesheet">
    <link href="/templates/shaper_helixultimate/js/test.css" rel="stylesheet">
    <link href="http://seiyria.com/bootstrap-slider/css/bootstrap-slider.css" rel="stylesheet">

        <div class="priceCalcTitle">
          Smart Home Price Calculator
          <div class="priceSubTitle">
            Monitor and control your appliances by voice or using one mobile application!
          </div>
        </div>
        <div class="price-calc-wrapper">
          <div class="calcFormInput bulbclass numberSpinner">
            <input readonly id="bulbs" type="text" value="0" name="bulbs">
          </div>
          <div class="calcFormInput blindclass float-left float-sm-right float-md-right float-lg-right numberSpinner">
            <input readonly id="blinds" type="text" value="0" name="blind">
          </div>
      </div>
      <div class="price-calc-wrapper">
        <div class="calcFormInput thermostatclass numberSpinner">
          <input readonly id="thermostat" type="text" value="0" name="thermostat">
        </div>
        <div class="calcFormInput soundsysclass float-left float-sm-right float-md-right float-lg-right numberSpinner">
          <input readonly id="soundsys" type="text" value="0" name="soundsys">
        </div>
      </div>
      <div class="price-calc-wrapper">
        <div class="calcFormInput switchclass numberSpinner">
          <input readonly id="switch" type="text" value="0" name="switch">
        </div>
        <div class="calcFormInput pluginclass float-left float-sm-right float-md-right float-lg-right numberSpinner">
          <input readonly id="plugin" type="text" value="0" name="plugin">
        </div>
      </div>
      <div class="price-calc-wrapper">
        <div class="calcFormInput doorbellclass numberSpinner">
          <input readonly id="doorbell" type="text" value="0" name="doorbell">
        </div>
        <div class="calcFormInput seccameraclass float-left float-sm-right float-md-right float-lg-right numberSpinner">
          <input readonly id="seccamera" type="text" value="0" name="seccamera">
        </div>
      </div>
      <div class="price-calc-wrapper">
        <div class="calcFormInput packageLvl">
          <div class="priceCalcLbl">How techy is your home?
          <a href="/smart-home-techy-level-description" target="_blank" class="readon jcepopup" data-mediabox-width="610" data-mediabox-height="500" type="text/html" rel=""> (?)</a></div>
          <input id="ex1" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="6" data-slider-step="3" data-slider-value="0"/>
        </div>
      </div>
      <div class="price-calc-wrapper">
        <div class="priceBox">
          <div style="width:100%">
            <div class="float-left priceBoxLbl"><b>Price starting from</b></div> <div class="float-left priceBoxVal" id="exactPriceVal">...</div>
          </div>
          <div class="float-left priceBoxTxt">*Installation and Google home or Alexa device price is included.</div>
        </div>
      </div>


        <script>
            jQuery("input[name='bulbs']").TouchSpin({
                min: 0,
                max: 25,
                step: 1,
                decimals: 0,
                boostat: 5,
                maxboostedstep: 10,
                prefix: 'Light Bulbs'
            });
        </script>
        <script>
            jQuery("input[name='blind']").TouchSpin({
                min: 0,
                max: 25,
                step: 1,
                decimals: 0,
                boostat: 5,
                maxboostedstep: 10,
                prefix: 'Shade / Blind'
            });
        </script>
        <script>
            jQuery("input[name='thermostat']").TouchSpin({
                min: 0,
                max: 5,
                step: 1,
                decimals: 0,
                boostat: 5,
                maxboostedstep: 10,
                prefix: 'Thermostat'
            });
        </script>
        <script>
            jQuery("input[name='switch']").TouchSpin({
                min: 0,
                max: 50,
                step: 1,
                decimals: 0,
                boostat: 5,
                maxboostedstep: 10,
                prefix: 'Switch'
            });
        </script>
        <script>
            jQuery("input[name='plugin']").TouchSpin({
                min: 0,
                max: 50,
                step: 1,
                decimals: 0,
                boostat: 5,
                maxboostedstep: 10,
                prefix: 'Plugin Outlet'
            });
        </script>
        <script>
            jQuery("input[name='soundsys']").TouchSpin({
                min: 0,
                max: 5,
                step: 1,
                decimals: 0,
                boostat: 5,
                maxboostedstep: 10,
                prefix: 'Entertainment'
            });
        </script>
        <script>
            jQuery("input[name='seccamera']").TouchSpin({
                min: 0,
                max: 5,
                step: 1,
                decimals: 0,
                boostat: 5,
                maxboostedstep: 10,
                prefix: 'Security Camera'
            });
        </script>
        <script>
            jQuery("input[name='doorbell']").TouchSpin({
                min: 0,
                max: 5,
                step: 1,
                decimals: 0,
                boostat: 5,
                maxboostedstep: 10,
                prefix: 'Door Bell'
            });
        </script>

<br>

<br>

<script>
packageLVL=0;
roomNum=0;
doorBellNum=0;
diningNum=0
balconyNum=0;
enteranceNum=0;
blindNum=0;
pluginNum=0;
secCameraNum=0
calculatedPrice=0;
pricePerRoom=1000;
pricePerDining=2000;
pricePerEntrance=500;
pricePerBlind=700;
pricePerBalcony=200;
pricePerPlugin=100;
pricePerDoorBell=100;
pricePerSecCamera=90;
// With JQuery
jQuery('#ex1').slider({
	formatter: function(value) {
    //console.log(value);
    packageLVL=value;
    if(value<3){
      //jQuery(slider-selection).css("background-color":"#000");
      jQuery('.slider-handle').css({"background":"#6699FF"});
      jQuery('.slider-selection').css({"background":"#6699FF"});
      packagename="Not at All";
    }
    if(3==value){
      //jQuery(slider-selection).css("background-color":"#000");
      jQuery('.slider-handle').css({"background":"#F18B53"});
      jQuery('.slider-selection').css({"background":"#F18B53"});
      packagename="Somewhat";
    }

    if(6==value){
      //jQuery(slider-selection).css("background-color":"#000");
      jQuery('.slider-handle').css({"background":"#D4AF37"});
      jQuery('.slider-selection').css({"background":"#D4AF37"});
      packagename="To a Great Extent";
    }
    calculatedPrice=calcFinalPrice();
		return '' + packagename;
	}
});

jQuery('input').keydown(function(e) {
   e.preventDefault();
   return false;
});



jQuery(".bulbclass").on("click", function () {
    roomNum = jQuery('#bulbs').val();
    calculatedPrice=calcFinalPrice();
});
jQuery(".blindclass").on("click", function () {
    blindNum = jQuery('#blinds').val();
    calculatedPrice=calcFinalPrice();
});
jQuery(".pluginclass").on("click", function () {
    pluginNum = jQuery('#plugin').val();
    calculatedPrice=calcFinalPrice();
});
jQuery(".soundsysclass").on("click", function () {
    balconyNum = jQuery('#soundsys').val();
    calculatedPrice=calcFinalPrice();
});
jQuery(".thermostatclass").on("click", function () {
    diningNum = jQuery('#thermostat').val();
    calculatedPrice=calcFinalPrice();
});
jQuery(".switchclass").on("click", function () {
    enteranceNum = jQuery('#switch').val();
    calculatedPrice=calcFinalPrice();
});
jQuery(".seccameraclass").on("click", function () {
    secCameraNum = jQuery('#seccamera').val();
    calculatedPrice=calcFinalPrice();
});
jQuery(".doorbellclass").on("click", function () {
    doorBellNum = jQuery('#doorbell').val();
    calculatedPrice=calcFinalPrice();
});
function calcFinalPrice(){
  finalVal=(pricePerDoorBell*doorBellNum+pricePerSecCamera*secCameraNum+pricePerPlugin*pluginNum+roomNum*pricePerRoom+diningNum*pricePerDining+balconyNum*pricePerBalcony+enteranceNum*pricePerEntrance+blindNum*pricePerBlind)*(packageLVL+1);
  if (finalVal==0){
    jQuery("#exactPriceVal").text('...');
  } else {
  jQuery("#exactPriceVal").text('$'.concat(finalVal));
  }
  return finalVal;
}
</script>
