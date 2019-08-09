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
$smart_bulb="0";
$smart_shade="0";
$smart_thermostat="0";
$entertainment_sys="0";
$smart_door_bell="0";
$security_camera="0";
if(isset($_GET["smart_bulb"])){
  $smart_bulb=$_GET["smart_bulb"];
}
if(isset($_GET["smart_shade"])){
$smart_shade=$_GET["smart_shade"];
}
if(isset($_GET["smart_thermostat"])){
  $smart_thermostat=$_GET["smart_thermostat"];
}
if(isset($_GET["entertainment_sys"])){
  $entertainment_sys=$_GET["entertainment_sys"];
}
if(isset($_GET["smart_door_bell"])){
  $smart_door_bell=$_GET["smart_door_bell"];
}
if(isset($_GET["security_camera"])){
  $security_camera=$_GET["security_camera"];
}

?>
<h1><?php //echo $this->msg; ?></h1>

<?php
// No direct access
defined('_JEXEC') or die; ?>
<?php //echo $hello; ?>

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
          <div class="calcFormInput bulbclass">
            <input id="bulbs" data-prefix="Bulb" type="number" value="<?php echo $smart_bulb; ?>" min="0" max="200" step="1" name="bulbs"/>
          </div>
          <div class="calcFormInput blindclass float-left float-sm-right float-md-right float-lg-right">
            <input id="blinds" data-prefix="Shade / Blind" type="number" value="<?php echo $smart_shade; ?>" min="0" max="100" step="1" name="blind"/>
          </div>
        </div>
        <div class="price-calc-wrapper">
          <div class="calcFormInput tvclass">
            <input id="tv" data-prefix="TV" type="number" value="<?php echo $entertainment_sys; ?>" min="0" max="20" step="1" name="tv"/>
          </div>
          <div class="calcFormInput soundsysclass float-left float-sm-right float-md-right float-lg-right">
            <input id="soundsys" data-prefix="Sound System" type="number" value="<?php echo $entertainment_sys; ?>" min="0" max="20" step="1" name="soundsys"/>
          </div>
        </div>
        <div class="price-calc-wrapper">
          <div class="calcFormInput thermostatclass">
            <input id="thermostat" data-prefix="Thermostat" type="number" value="<?php echo $smart_thermostat; ?>" min="0" max="20" step="1" name="thermostat"/>
          </div>
          <div class="calcFormInput seccameraclass float-left float-sm-right float-md-right float-lg-right">
            <input id="seccamera" data-prefix="Security Camera" type="number" value="<?php echo $security_camera; ?>" min="0" max="20" step="1" name="seccamera"/>
          </div>
        </div>
        <div class="price-calc-wrapper">
          <div class="calcFormInput doorbellclass">
            <input id="doorbell" data-prefix="Door Bell" type="number" value="<?php echo $smart_door_bell; ?>" min="0" max="20" step="1" name="doorbell"/>
          </div>
          <div class="calcFormInput doorlockclass float-left float-sm-right float-md-right float-lg-right">
            <input id="doorlock" data-prefix="Door Lock" type="number" value="<?php echo $smart_door_bell; ?>" min="0" max="20" step="1" name="doorlock"/>
          </div>
        </div>
        <div class="price-calc-wrapper">
          <div class="calcFormInput smartkitchenclass">
            <input id="smartkitchen" data-prefix="Smart Kitchen" type="number" value="0" min="0" max="20" step="1" name="smartkitchen"/>
          </div>
          <div class="calcFormInput smartbedclass float-left float-sm-right float-md-right float-lg-right">
            <input id="smartbed" data-prefix="Smart Bed" type="number" value="0" min="0" max="20" step="1" name="smartbed"/>
          </div>
        </div>
        <div class="price-calc-wrapper">
          <div class="calcFormInput smartmirrorclass">
            <input id="smartmirror" data-prefix="Smart Mirror" type="number" value="0" min="0" max="20" step="1" name="smartmirror"/>
          </div>
          <div class="calcFormInput smartbathroomclass float-left float-sm-right float-md-right float-lg-right">
            <input id="smartbathroom" data-prefix="Smart Bathroom" type="number" value="0" min="0" max="20" step="1" name="smartbathroom"/>
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


      <script src="/spinner/src/bootstrap-input-spinner.js"></script>
      <script>
      jQuery("input[type='number']").inputSpinner();
      jQuery(".btn-outline-secondary").on("touchstart click", function(){
        //console.log("The paragraph was clicked.");
        bulbNum = document.getElementById('bulbs').value;
        blindNum = document.getElementById('blinds').value;
        doorlockNum =document.getElementById('doorlock').value;
        soundsysNum =document.getElementById('soundsys').value;
        tvNum =document.getElementById('tv').value;
        thermostatNum =document.getElementById('thermostat').value;
        secCameraNum =document.getElementById('seccamera').value;
        doorBellNum =document.getElementById('doorbell').value;
        bedNum =document.getElementById('smartbed').value;
        mirrorNum =document.getElementById('smartmirror').value;
        bathNum =document.getElementById('smartbathroom').value;
        kitchenNum =document.getElementById('smartkitchen').value;

        document.getElementById("fbulb").value = bulbNum;
        document.getElementById("fshade").value = blindNum;
        document.getElementById("fdoor_lock").value = doorlockNum;
        document.getElementById("fsmart_tv").value =tvNum;
        document.getElementById("fsousnd_sys").value =soundsysNum;
        document.getElementById("fsmart_thermostat").value =thermostatNum;
        document.getElementById("fsec_camera").value =secCameraNum;
        document.getElementById("fdoor_bell").value =doorBellNum;
        document.getElementById("fsmart_bed").value =bedNum;
        document.getElementById("fsmart_kitchen").value =kitchenNum;
        document.getElementById("fsmart_bathroom").value =bathNum;
        document.getElementById("fsmart_mirror").value =mirrorNum;
        calculatedPrice=calcFinalPrice();

      });


      </script>
    <style>
    .btn{
      padding: .2rem .4rem;
    }
    </style>
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
    price_txt="<div class=\"float-left priceAdjustment\" > (Price will be adjusted down depending on your compatible devices)</div>";
  } else {
    document.getElementById("fhaveproducts").value = "no";
    price_txt='';
  }
  calcFinalPrice();
}

techyLVL=0;
bulbNum=<?php echo $smart_bulb; ?>;
mirrorNum=0;
bedNum=0;
doorBellNum=<?php echo $smart_door_bell; ?>;
thermostatNum=<?php echo $smart_thermostat; ?>;
soundsysNum=<?php echo $entertainment_sys; ?>;
blindNum=<?php echo $smart_shade; ?>;
bathNum=0
tvNum=<?php echo $entertainment_sys; ?>;
doorlockNum=<?php echo $smart_door_bell; ?>;
kitchenNum=0;
secCameraNum=<?php echo $security_camera; ?>;
calculatedPrice=0;
pricePerBulb=30;
pricePerThermostat=150;
pricePerBlind=700;
pricePerSoundSys=150;
pricePerTv=850;
pricePerDoorLock=100;
pricePerDoorBell=100;
pricePerSecCamera=90;
pricePerMirror=400;
pricePerBed=800;
pricePerKitchen=1500;
pricePerBath=750;
calcFinalPrice();

function calcFinalPrice(){
  finalVal=(pricePerTv*tvNum+ pricePerDoorLock*doorlockNum+ pricePerBath*bathNum+pricePerKitchen*kitchenNum+pricePerBed*bedNum+mirrorNum*pricePerMirror+pricePerDoorBell*doorBellNum+pricePerSecCamera*secCameraNum+bulbNum*pricePerBulb+thermostatNum*pricePerThermostat+soundsysNum*pricePerSoundSys+blindNum*pricePerBlind);
  if(techyLVL==2){
    finalVal=finalVal*.5;
  } else if (techyLVL==3){
    finalVal=finalVal*.3;
  }

  if (finalVal==0){
    document.getElementById("exactPriceVal").innerHTML='<div class="float-left">...</div>';
  } else {
    document.getElementById("exactPriceVal").innerHTML='<div class="float-left finalPrice">$'.concat(Math.round(finalVal)).concat("</div>").concat(price_txt);
  }
  return finalVal;
}


</script>
