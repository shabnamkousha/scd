<?php
// No direct access
defined('_JEXEC') or die; ?>
<?php //echo $hello; ?>

    <script src="/templates/shaper_helixultimate/js/jquery.bootstrap-touchspin.js"></script>
    <link href="/templates/shaper_helixultimate/css/jquery.bootstrap-touchspin.css" rel="stylesheet">
    <link href="/templates/shaper_helixultimate/js/test.css" rel="stylesheet">
  <div class="comPriceCalc">
        <div class="priceCalcTitle">
          Smart Home Price Calculator
          <div class="priceSubTitle">
            Estimated prices include a consultation, installation and a Google Home or Alexa.
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
      <div id="showMoreBoxId" class="showMoreBox">
        <div class="price-calc-wrapper">
          <div class="calcFormInput doorbellclass numberSpinner">
            <input readonly id="doorbell" type="text" value="0" name="doorbell">
          </div>
          <div class="calcFormInput seccameraclass float-left float-sm-right float-md-right float-lg-right numberSpinner">
            <input readonly id="seccamera" type="text" value="0" name="seccamera">
          </div>
        </div>
        <div class="price-calc-wrapper">
          <div class="calcFormInput smartmirrorclass numberSpinner">
            <input readonly id="smartmirror" type="text" value="0" name="smartmirror">
          </div>
          <div class="calcFormInput smartbedclass float-left float-sm-right float-md-right float-lg-right numberSpinner">
            <input readonly id="smartbed" type="text" value="0" name="smartbed">
          </div>
        </div>
        <div class="price-calc-wrapper">
          <div class="calcFormInput smartkitchenclass numberSpinner">
            <input readonly id="smartkitchen" type="text" value="0" name="smartkitchen">
          </div>
          <div class="calcFormInput smartbathroomclass float-left float-sm-right float-md-right float-lg-right numberSpinner">
            <input readonly id="smartbathroom" type="text" value="0" name="smartbathroom">
          </div>
        </div>
      </div>
      <div class="price-calc-wrapper showMoreWrapper">
        <div id='showMoreBtn'>Show More appliances</div>
      </div>
      <div class="price-calc-wrapper">
        <div class="calcFormInput techyLVL">
          <div class="priceCalcLbl">How techy is your home?
          <a href="/smart-home-techy-level-description" target="_blank" class="readon jcepopup" data-mediabox-width="610" data-mediabox-height="500" type="text/html" rel=""> (i)</a></div>
        <div class="slidecontainer">
        <div class="float-left sliderWrapper">  <input type="range" min="1" max="3" value="2" class="slider" id="myRange"></div>
          <div class="float-left" id="techLVLDisplay"></div>
        </div>
        </div>
      </div>
      <div class="price-calc-wrapper">
        <div class="priceBox float-left">
          <div style="width:100%">
            <div class="float-left priceBoxLbl"><b>Price starting from</b></div> <div class="float-left priceBoxVal" id="exactPriceVal">...</div>
          </div>
        </div>

        <form action="">
          <input type="hidden" name="firstname" value="Mickey"><br>
          <input type="hidden" name="lastname" value="Mouse"><br><br>
         <div class="float-left clear">
          <div class="float-left"><input type="submit" name="claim" id="claimDiscuntBtn" class="claimDiscountActionBtn" value="Claim 10% Discount"></div>
          <div class="float-left claimEmailWrapper"><input type="text" placeholder="Email Address" name="email" id="claimEmail"></div>
        </div>
      </form>
      </div>
    </div>

    <style>

    #techLVLDisplay{
      font-size: 14px;
      margin-left:10px;
    }
    .sliderWrapper{
      width: 50%;
    }
    .slider {
      -webkit-appearance: none;
      width: 100%;
      height: 13px;
      border-radius: 5px;
      background: #ced4da;
      outline: none;
      opacity: 0.7;
      -webkit-transition: .2s;
      transition: opacity .2s;
    }

    .slider:hover {
      opacity: 1;
    }

    .slider::-webkit-slider-thumb {
      -webkit-appearance: none;
      appearance: none;
      width: 23px;
      height: 23px;
      border-radius: 50%;
      background: #4CAF50;
      cursor: pointer;
    }

    .slider::-moz-range-thumb {
      width: 23px;
      height: 23px;
      border-radius: 50%;
      background: #4CAF50;
      cursor: pointer;
    }
    </style>

    <script>
    var slider = document.getElementById("myRange");
    var output = document.getElementById("techLVLDisplay");
    output.innerHTML = "Somewhat"; //slider.value;

    slider.oninput = function() {
      techyLVL=this.value;
      packagename="Not at All";
      if(techyLVL<2){
        packagename="Not at All";
      } else if(techyLVL<3){
        packagename="Somewhat";
      } else if(techyLVL<4){
        packagename="To a Great Extent";
      }
      output.innerHTML = packagename;
      calculatedPrice=calcFinalPrice();
    }
    </script>

        <script>
            jQuery("input[name='bulbs']").TouchSpin({
                min: 0,
                max: 35,
                step: 1,
                decimals: 0,
                boostat: 5,
                maxboostedstep: 10,
                prefix: 'Light Bulb'
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
                prefix: 'Door Lock'
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
                prefix: 'Washer / Dryer'
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
        <script>
            jQuery("input[name='smartbed']").TouchSpin({
                min: 0,
                max: 5,
                step: 1,
                decimals: 0,
                boostat: 5,
                maxboostedstep: 10,
                prefix: 'Smart Bed'
            });
        </script>
        <script>
            jQuery("input[name='smartmirror']").TouchSpin({
                min: 0,
                max: 5,
                step: 1,
                decimals: 0,
                boostat: 5,
                maxboostedstep: 10,
                prefix: 'Smart Mirror'
            });
        </script>
        <script>
            jQuery("input[name='smartkitchen']").TouchSpin({
                min: 0,
                max: 5,
                step: 1,
                decimals: 0,
                boostat: 5,
                maxboostedstep: 10,
                prefix: 'Smart Kitchen'
            });
        </script>
        <script>
            jQuery("input[name='smartbathroom']").TouchSpin({
                min: 0,
                max: 5,
                step: 1,
                decimals: 0,
                boostat: 5,
                maxboostedstep: 10,
                prefix: 'Smart Bathroom'
            });
        </script>

<script>
techyLVL=0;
bulbNum=0;
mirrorNum=0;
bedNum=0;
doorBellNum=0;
thermostatNum=0
soundsysNum=0;
switchNum=0;
blindNum=0;
pluginNum=0;
bathNum=0
kitchenNum=0;
secCameraNum=0
calculatedPrice=0;
pricePerBulb=45;
pricePerThermostat=200;
pricePerSwitch=45;
pricePerBlind=1000;
pricePerSoundSys=500;
pricePerPlugin=45;
pricePerDoorBell=100;
pricePerSecCamera=90;
pricePerMirror=400;
pricePerBed=800;
pricePerKitchen=2000;
pricePerBath=1000;


jQuery(".bulbclass").on("click", function () {
    bulbNum = jQuery('#bulbs').val();
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
    soundsysNum = jQuery('#soundsys').val();
    calculatedPrice=calcFinalPrice();
});
jQuery(".thermostatclass").on("click", function () {
    thermostatNum = jQuery('#thermostat').val();
    calculatedPrice=calcFinalPrice();
});
jQuery(".switchclass").on("click", function () {
    switchNum = jQuery('#switch').val();
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
jQuery(".smartbedclass").on("click", function () {
    bedNum = jQuery('#smartbed').val();
    calculatedPrice=calcFinalPrice();
});
jQuery(".smartmirrorclass").on("click", function () {
    mirrorNum = jQuery('#smartmirror').val();
    calculatedPrice=calcFinalPrice();
});
jQuery(".smartkitchenclass").on("click", function () {
    kitchenNum = jQuery('#smartkitchen').val();
    calculatedPrice=calcFinalPrice();
});
jQuery(".smartbathroomclass").on("click", function () {
    bathNum = jQuery('#smartbathroom').val();
    calculatedPrice=calcFinalPrice();
});
jQuery("#showMoreBtn").on("click", function () {
    //jQuery('#showMoreBox').show();
    if(document.getElementById("showMoreBoxId").style.display=="block"){
      jQuery("#showMoreBtn").text("Show More Appliances");
    } else {
      jQuery("#showMoreBtn").text("Show Less Appliances");
    }
    jQuery("#showMoreBoxId").slideToggle("slow");


});

function calcFinalPrice(){
  finalVal=(pricePerBath*bathNum+pricePerKitchen*kitchenNum+pricePerBed*bedNum+mirrorNum*pricePerMirror+pricePerDoorBell*doorBellNum+pricePerSecCamera*secCameraNum+pricePerPlugin*pluginNum+bulbNum*pricePerBulb+thermostatNum*pricePerThermostat+soundsysNum*pricePerSoundSys+pricePerSwitch*switchNum+blindNum*pricePerBlind);
  if(techyLVL==2){
    finalVal=finalVal*.5;
  } else if (techyLVL==3){
    finalVal=finalVal*.3;
  }

  if (finalVal==0){
    jQuery("#exactPriceVal").text('...');
  } else {
  jQuery("#exactPriceVal").text('$'.concat(Math.round(finalVal)));
  }
  return finalVal;
}


</script>
