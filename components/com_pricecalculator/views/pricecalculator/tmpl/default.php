<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_helloworld
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');
?>
<h1><?php //echo $this->msg; ?></h1>

<?php
// No direct access
defined('_JEXEC') or die; ?>
<?php //echo $hello; ?>

    <script src="/templates/shaper_helixultimate/js/jquery.bootstrap-touchspin.js"></script>
    <link href="/templates/shaper_helixultimate/css/jquery.bootstrap-touchspin.css" rel="stylesheet">
    <link href="/templates/shaper_helixultimate/js/test.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.5.0/css/bootstrap4-toggle.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.5.0/js/bootstrap4-toggle.min.js"></script>



      <div class="comPriceCalc">
        <div class="priceCalcTitle">
          Smart Home Price Calculator
          <div class="priceSubTitle">
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
          <div class="calcFormInput tvclass numberSpinner">
            <input readonly id="tv" type="text" value="0" name="tv">
          </div>
          <div class="calcFormInput soundsysclass float-left float-sm-right float-md-right float-lg-right numberSpinner">
            <input readonly id="soundsys" type="text" value="0" name="soundsys">
          </div>
        </div>
        <div class="price-calc-wrapper">
          <div class="calcFormInput thermostatclass numberSpinner">
            <input readonly id="thermostat" type="text" value="0" name="thermostat">
          </div>
          <div class="calcFormInput seccameraclass float-left float-sm-right float-md-right float-lg-right numberSpinner">
            <input readonly id="seccamera" type="text" value="0" name="seccamera">
          </div>
        </div>
        <div class="price-calc-wrapper">
          <div class="calcFormInput doorbellclass numberSpinner">
            <input readonly id="doorbell" type="text" value="0" name="doorbell">
          </div>
          <div class="calcFormInput doorlockclass float-left float-sm-right float-md-right float-lg-right numberSpinner">
            <input readonly id="doorlock" type="text" value="0" name="doorlock">
          </div>
        </div>
        <div class="price-calc-wrapper">
          <div class="calcFormInput smartkitchenclass numberSpinner">
            <input readonly id="smartkitchen" type="text" value="0" name="smartkitchen">
          </div>
          <div class="calcFormInput smartbedclass float-left float-sm-right float-md-right float-lg-right numberSpinner">
            <input readonly id="smartbed" type="text" value="0" name="smartbed">
          </div>
        </div>
        <div class="price-calc-wrapper">
          <div class="calcFormInput smartmirrorclass numberSpinner">
            <input readonly id="smartmirror" type="text" value="0" name="smartmirror">
          </div>
          <div class="calcFormInput smartbathroomclass float-left float-sm-right float-md-right float-lg-right numberSpinner">
            <input readonly id="smartbathroom" type="text" value="0" name="smartbathroom">
          </div>
        </div>
        <div class="price-calc-wrapper">
          <div class="float-left havedeviceslbl">Already have some of the smart products?</div>
          <div class="float-left havedevicesswitch" onclick="productBtn()"><input  id="toggle-trigger"  type="checkbox" data-size="small" data-toggle="toggle" data-on="Yes" data-off="No" data-onstyle="success" ></div>
        </div>
        <div class="price-calc-wrapper">
          <div class="priceBox float-left">
            <div style="width:100%">
              <div class="float-left priceBoxLbl"><b>Price starting from</b></div> <div class="float-left priceBoxVal" id="exactPriceVal">...</div>
              <div class="float-left disclaimer">*Estimated prices include basic smart products, a free in-person consultation, installation fee, and a Google Home or an Alexa device.</div>
            </div>
          </div>
        </div>

        <form action="/index.php?option=com_pricecalculator&view=pricecalculator&task=send_claim_email" method="post" accept-charset="utf-8">
          <input type="hidden" id="fbulb" name="bulb" value="0">
          <input type="hidden" id="fshade" name="shade" value="0">
          <input type="hidden" id="fsmart_tv" name="smart_tv" value="0">
          <input type="hidden" id="fsousnd_sys" name="sousnd_sys" value="0">
          <input type="hidden" id="fsmart_thermostat" name="smart_thermostat" value="0">
          <input type="hidden" id="fsec_camera" name="sec_camera" value="0">
          <input type="hidden" id="fdoor_bell" name="door_bell" value="0">
          <input type="hidden" id="fdoor_lock" name="door_lock" value="0">
          <input type="hidden" id="fsmart_kitchen" name="smart_kitchen" value="0">
          <input type="hidden" id="fsmart_bed" name="smart_bed" value="0">
          <input type="hidden" id="fsmart_mirror" name="smart_mirror" value="0">
          <input type="hidden" id="fsmart_bathroom" name="smart_bathroom" value="0">
          <input type="hidden" id="fhaveproducts" name="haveprods" value="no">
          <div class="float-left clear">
            <div class="float-left"><input type="submit" name="claim" onclick="return submitclicked()" id="claimDiscuntBtn" class="claimDiscountActionBtn" value="Claim 10% Discount"></div>
            <div class="float-left claimEmailWrapper"><input type="email" placeholder="Email Address" name="emailaddress" id="claimEmail"></div>
          </div>
        </form>
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
            jQuery("input[name='tv']").TouchSpin({
                min: 0,
                max: 5,
                step: 1,
                decimals: 0,
                boostat: 5,
                maxboostedstep: 10,
                prefix: 'TV'
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
                prefix: 'Sound System'
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
            jQuery("input[name='doorlock']").TouchSpin({
                min: 0,
                max: 5,
                step: 1,
                decimals: 0,
                boostat: 5,
                maxboostedstep: 10,
                prefix: 'Door Lock'
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
function submitclicked(){
  if(document.getElementById("claimEmail").value==''){
    alert("Please enter your email address.");
    return false;
  }
}
price_txt='';
function productBtn(){
  if(jQuery('#toggle-trigger').prop('checked')==false){
    document.getElementById("fhaveproducts").value = "yes";
    price_txt="<span style=\"font-size:10px;\"> (Price will be adjusted down depending on your compatible devices)</span>";
  } else {
    document.getElementById("fhaveproducts").value = "no";
    price_txt='';
  }
  calcFinalPrice();
}
techyLVL=0;
bulbNum=0;
mirrorNum=0;
bedNum=0;
doorBellNum=0;
thermostatNum=0
soundsysNum=0;
blindNum=0;
bathNum=0
tvNum=0;
doorlockNum=0;
kitchenNum=0;
secCameraNum=0
calculatedPrice=0;
pricePerBulb=45;
pricePerThermostat=200;
pricePerBlind=1000;
pricePerSoundSys=500;
pricePerTv=500;
pricePerDoorLock=100;
pricePerDoorBell=100;
pricePerSecCamera=90;
pricePerMirror=400;
pricePerBed=800;
pricePerKitchen=2000;
pricePerBath=1000;


jQuery(".bulbclass").on("click", function () {
    bulbNum = jQuery('#bulbs').val();
    calculatedPrice=calcFinalPrice();
    document.getElementById("fbulb").value = bulbNum;
});
jQuery(".doorlockclass").on("click", function () {
    doorlockNum = jQuery('#doorlock').val();
    calculatedPrice=calcFinalPrice();
    document.getElementById("fdoor_lock").value = doorlockNum;
});
jQuery(".tvclass").on("click", function () {
    tvNum = jQuery('#tv').val();
    calculatedPrice=calcFinalPrice();
    document.getElementById("fsmart_tv").value =tvNum;
});
jQuery(".blindclass").on("click", function () {
    blindNum = jQuery('#blinds').val();
    calculatedPrice=calcFinalPrice();
    document.getElementById("fshade").value =blindNum;
});
jQuery(".soundsysclass").on("click", function () {
    soundsysNum = jQuery('#soundsys').val();
    calculatedPrice=calcFinalPrice();
    document.getElementById("fsousnd_sys").value =soundsysNum;
});
jQuery(".thermostatclass").on("click", function () {
    thermostatNum = jQuery('#thermostat').val();
    calculatedPrice=calcFinalPrice();
    document.getElementById("fsmart_thermostat").value =thermostatNum;
});
jQuery(".seccameraclass").on("click", function () {
    secCameraNum = jQuery('#seccamera').val();
    calculatedPrice=calcFinalPrice();
    document.getElementById("fsec_camera").value =secCameraNum;
});
jQuery(".doorbellclass").on("click", function () {
    doorBellNum = jQuery('#doorbell').val();
    calculatedPrice=calcFinalPrice();
    document.getElementById("fdoor_bell").value =doorBellNum;
});
jQuery(".smartbedclass").on("click", function () {
    bedNum = jQuery('#smartbed').val();
    calculatedPrice=calcFinalPrice();
    document.getElementById("fsmart_bed").value =bedNum;
});
jQuery(".smartmirrorclass").on("click", function () {
    mirrorNum = jQuery('#smartmirror').val();
    calculatedPrice=calcFinalPrice();
    document.getElementById("fsmart_mirror").value =mirrorNum;
});
jQuery(".smartkitchenclass").on("click", function () {
    kitchenNum = jQuery('#smartkitchen').val();
    calculatedPrice=calcFinalPrice();
    document.getElementById("fsmart_kitchen").value =kitchenNum;
});
jQuery(".smartbathroomclass").on("click", function () {
    bathNum = jQuery('#smartbathroom').val();
    calculatedPrice=calcFinalPrice();
    document.getElementById("fsmart_bathroom").value =bathNum;
});

function calcFinalPrice(){
  finalVal=(pricePerTv*tvNum+ pricePerDoorLock*doorlockNum+ pricePerBath*bathNum+pricePerKitchen*kitchenNum+pricePerBed*bedNum+mirrorNum*pricePerMirror+pricePerDoorBell*doorBellNum+pricePerSecCamera*secCameraNum+bulbNum*pricePerBulb+thermostatNum*pricePerThermostat+soundsysNum*pricePerSoundSys+blindNum*pricePerBlind);
  if(techyLVL==2){
    finalVal=finalVal*.5;
  } else if (techyLVL==3){
    finalVal=finalVal*.3;
  }

  if (finalVal==0){
    document.getElementById("exactPriceVal").innerHTML='...';
  } else {
    document.getElementById("exactPriceVal").innerHTML='$'.concat(Math.round(finalVal)).concat(price_txt);
  }
  return finalVal;
}


</script>
