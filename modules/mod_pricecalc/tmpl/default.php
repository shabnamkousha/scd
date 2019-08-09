<?php
// No direct access
defined('_JEXEC') or die; ?>
<?php //echo $hello; ?>
  <div class="modCalc">
        <div class="priceCalcTitle">
          Smart Home Price Calculator
          <div class="priceSubTitle">
            Estimated price includes smart products, installation and a Google Home or Alexa.
          </div>
        </div>
        <div class="price-calc-wrapper">
          <div class="calcFormInput bulbclass">
            <input id="bulbs" data-prefix="Bulb" type="number" value="0" min="0" max="200" step="1" name="bulbs"/>
          </div>
          <div class="calcFormInput blindclass float-left float-sm-right float-md-right float-lg-right">
            <input id="blinds" data-prefix="Shade / Blind" type="number" value="0" min="0" max="100" step="1" name="blind"/>
          </div>
        </div>
        <div class="price-calc-wrapper">
          <div class="calcFormInput thermostatclass">
            <input id="thermostat" data-prefix="Thermostat" type="number" value="0" min="0" max="20" step="1" name="thermostat"/>
          </div>
          <div class="calcFormInput soundsysclass float-left float-sm-right float-md-right float-lg-right">
            <input id="soundsys" data-prefix="TV & Sound Sys" type="number" value="0" min="0" max="20" step="1" name="soundsys"/>
          </div>
        </div>
        <div class="price-calc-wrapper">
          <div class="calcFormInput doorbellclass">
            <input id="doorlock" data-prefix="Door Lock & Bell" type="number" value="0" min="0" max="20" step="1" name="doorlock"/>
          </div>
          <div class="calcFormInput seccameraclass float-left float-sm-right float-md-right float-lg-right">
            <input id="seccamera" data-prefix="Security Camera" type="number" value="0" min="0" max="20" step="1" name="seccamera"/>
          </div>
        </div>




      <div class="price-calc-wrapper">
        <div class="priceBox float-left">
          <div style="width:100%">
            <div class="float-left priceBoxLbl"><b>Price starting from</b></div> <div class="float-left priceBoxVal" id="frontExactPriceVal">...</div>
          </div>
        </div>
        <div class="float-right claimDiscountActionBtnWrapper">
          <a class="claimDiscountActionBtn" id="claimDiscounntBtnId" href="/" onclick="clickedMoreOptionBtn()">More Smart Home Options...</a>
        </div>
      </div>
    </div>

<script src="/spinner/src/bootstrap-input-spinner.js"></script>

<script>
price_txt="";
techyLVL=0;
bulbNum=0;
doorlockNum=0;
thermostatNum=0
soundsysNum=0;
blindNum=0;
secCameraNum=0;
calculatedPrice=0;
pricePerBulb=30;
pricePerThermostat=150;
pricePerBlind=700;
pricePerSoundSys=1000; //with TV
pricePerSecCamera=90;
pricePerDoorLock=200; //lock+bell


// With JQuery

var param=['','','','','','']
param[0]="smart_bulb=".concat(bulbNum);
param[1]="&smart_shade=".concat(blindNum);
param[2]="&smart_thermostat=".concat(thermostatNum);
param[3]="&entertainment_sys=".concat(soundsysNum);
param[4]="&security_camera=".concat(secCameraNum);
param[5]="&smart_door_bell=".concat(doorlockNum);
console.log(param.join(''));

jQuery("input[type='number']").inputSpinner();
jQuery(".btn-outline-secondary").on("touchstart click", function(){
  //console.log("The paragraph was clicked.");
  bulbNum = document.getElementById('bulbs').value;
  blindNum = document.getElementById('blinds').value;
  doorlockNum =document.getElementById('doorlock').value;
  soundsysNum =document.getElementById('soundsys').value;
  thermostatNum =document.getElementById('thermostat').value;
  secCameraNum =document.getElementById('seccamera').value;

  param[0]="&smart_bulb=".concat(bulbNum);
  param[1]="&smart_shade=".concat(blindNum);
  param[2]="&smart_thermostat=".concat(thermostatNum);
  param[3]="&entertainment_sys=".concat(soundsysNum);
  param[4]="&security_camera=".concat(secCameraNum);
  param[5]="&smart_door_bell=".concat(doorlockNum);
  calculatedPrice=calcFinalPrice();
});


function clickedMoreOptionBtn(){
  url_main_part="/index.php?option=com_pricecalculator";
  url=url_main_part.concat(param.join(''));
  document.getElementById("claimDiscounntBtnId").href=url;
}


function calcFinalPrice(){
  finalVal=(pricePerDoorLock*doorlockNum+pricePerSecCamera*secCameraNum+bulbNum*pricePerBulb+thermostatNum*pricePerThermostat+soundsysNum*pricePerSoundSys+blindNum*pricePerBlind);
  if(techyLVL==2){
    finalVal=finalVal*.5;
  } else if (techyLVL==3){
    finalVal=finalVal*.3;
  }

  if (finalVal==0){
    document.getElementById("frontExactPriceVal").innerHTML='<div class="float-left">...</div>';
  } else {
    document.getElementById("frontExactPriceVal").innerHTML='<div class="float-left finalPrice">$'.concat(Math.round(finalVal)).concat("</div>").concat(price_txt);
  }
  return finalVal;
}


</script>
