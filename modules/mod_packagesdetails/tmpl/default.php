<?php
// No direct access
defined('_JEXEC') or die; ?>

<style>
/* CSS used here will be applied after bootstrap.css */

.prodTblBorderRight{
  border-right:1px solid #dee2e6;
  }
  .prodTblBorderBottom{
    border-bottom:1px solid #dee2e6!important;
  }
  .prodTblFirstCol{
      border-bottom:1px solid #fff;
	    border-right:1px solid #dee2e6;
      border-left:1px solid #dee2e6;
    }
    .prodTblLastRowofCategory{
      border-bottom:1px solid #dee2e6;
    }
  .packagesDetail{
    width:800px;
    margin: 0px auto;
    float: none;
  }
  .table.packagesDetail td, .table.packagesDetail th {
        padding:3px;
        padding-left:5px;
        font-size:15px;
      }
  .makeYellow{
    background-color: yellow;
  }
  .makeGreen{
    background-color: #23A14E;
  }


  th.rotate {
    /* Something you can count on */
    height: 150px;
    white-space: nowrap;
  }

  th.rotate > div {
    transform:
      /* Magic Numbers */
      translate(0px, 10px)
      /* 45 is really 360 - 45 */
      rotate(270deg);
      width: 30px;
      margin-bottom:5px;
  }
  th.rotate > div > span {
    padding: 5px 10px;
  }
</style>
<table class="table packagesDetail">
  <thead>
    <tr>
      <th scope="col" class="prodTblBorderRight prodTblFirstCol" style="vertical-align:middle;">Area of Home</th>
      <th scope="col" class="prodTblBorderRight" style="vertical-align:middle;">Product</th>
      <th scope="col" class="prodTblBorderRight rotate"><div><span>Cool Package</div></span></th>
      <th scope="col" class="prodTblBorderRight rotate"><div><span>Comfort Package</div></span></th>
      <th scope="col" class="prodTblBorderRight rotate"><div><span>Plus Package</div></span></th>
      <th scope="col" class="prodTblBorderRight rotate"><div><span>Premium Package</div></span></th>
      <th scope="col" class="prodTblBorderRight rotate"><div><span>Customize*</div></span></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row" class="prodTblFirstCol">Entrance</th>
      <td class="prodTblBorderRight">Smart Lock</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeGreen">&nbsp;</td>
    </tr>
    <tr>
      <th scope="row" class="prodTblFirstCol">&nbsp;</th>
      <td class="prodTblBorderRight">Smart Doorbell</td>
      <td class="prodTblBorderRight">&nbsp;</td>
      <td class="prodTblBorderRight">&nbsp;</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeGreen">&nbsp;</td>
    </tr>
    <tr>
      <th scope="row" class="prodTblFirstCol">&nbsp;</th>
      <td class="prodTblBorderRight">Smart Camera</td>
      <td class="prodTblBorderRight">&nbsp;</td>
      <td class="prodTblBorderRight">&nbsp;</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeGreen">&nbsp;</td>
    </tr>
    <tr>
     <th scope="row" class="prodTblFirstCol">&nbsp;</th>
     <td class="prodTblBorderRight">Smart Identity Identification</td>
     <td class="prodTblBorderRight">&nbsp;</td>
     <td class="prodTblBorderRight">&nbsp;</td>
     <td class="prodTblBorderRight">&nbsp;</td>
     <td class="prodTblBorderRight makeYellow">&nbsp;</td>
     <td class="prodTblBorderRight makeGreen">&nbsp;</td>
    </tr>
    <tr>
      <th scope="row" class="prodTblFirstCol prodTblLastRowofCategory">&nbsp;</th>
      <td class="prodTblBorderRight">Smart Alarm System</td>
      <td class="prodTblBorderRight">&nbsp;</td>
      <td class="prodTblBorderRight">&nbsp;</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeGreen">&nbsp;</td>
    </tr>
    <tr>
      <th scope="row" class="prodTblFirstCol">Living Room</th>
      <td class="prodTblBorderRight">Smart TV - Entertainment System</td>
      <td class="prodTblBorderRight">&nbsp;</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeGreen">&nbsp;</td>
    </tr>
    <tr>
      <th scope="row" class="prodTblFirstCol">&nbsp;</th>
      <td class="prodTblBorderRight">Google Home or Alexa</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeGreen">&nbsp;</td>
    </tr>
    <tr>
      <th scope="row" class="prodTblFirstCol">&nbsp;</th>
      <td class="prodTblBorderRight">Apple TV - Google Chromecast</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeGreen">&nbsp;</td>
    </tr>
    <tr>
     <th scope="row" class="prodTblFirstCol">&nbsp;</th>
     <td class="prodTblBorderRight">Smart Colored Lighting</td>
     <td class="prodTblBorderRight makeYellow">&nbsp;</td>
     <td class="prodTblBorderRight makeYellow">&nbsp;</td>
     <td class="prodTblBorderRight makeYellow">&nbsp;</td>
     <td class="prodTblBorderRight makeYellow">&nbsp;</td>
     <td class="prodTblBorderRight makeGreen">&nbsp;</td>
    </tr>
    <tr>
      <th scope="row" class="prodTblFirstCol">&nbsp;</th>
      <td class="prodTblBorderRight">Smart Coffee Table</td>
      <td class="prodTblBorderRight">&nbsp;</td>
      <td class="prodTblBorderRight">&nbsp;</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeGreen">&nbsp;</td>
    </tr>
     <tr>
      <th scope="row" class="prodTblFirstCol">&nbsp;</th>
      <td class="prodTblBorderRight">Smart Sofa</td>
      <td class="prodTblBorderRight">&nbsp;</td>
      <td class="prodTblBorderRight">&nbsp;</td>
      <td class="prodTblBorderRight">&nbsp;</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeGreen">&nbsp;</td>
    </tr>
     <tr>
     <th scope="row" class="prodTblFirstCol">&nbsp;</th>
      <td class="prodTblBorderRight">Smart Massage Chair</td>
      <td class="prodTblBorderRight">&nbsp;</td>
      <td class="prodTblBorderRight">&nbsp;</td>
      <td class="prodTblBorderRight">&nbsp;</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeGreen">&nbsp;</td>
     </tr>
     <tr>
     <th scope="row" class="prodTblFirstCol">&nbsp;</th>
      <td class="prodTblBorderRight">Smart Curtains</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeGreen">&nbsp;</td>
     </tr>
     <tr>
       <th scope="row" class="prodTblFirstCol">&nbsp;</th>
        <td class="prodTblBorderRight">Smart Thermostat</td>
        <td class="prodTblBorderRight makeYellow">&nbsp;</td>
        <td class="prodTblBorderRight makeYellow">&nbsp;</td>
        <td class="prodTblBorderRight makeYellow">&nbsp;</td>
        <td class="prodTblBorderRight makeYellow">&nbsp;</td>
        <td class="prodTblBorderRight makeGreen">&nbsp;</td>
     </tr>
     <tr>
      <th scope="row" class="prodTblFirstCol">&nbsp;</th>
      <td class="prodTblBorderRight">Smart Safety Sensors</td>
      <td class="prodTblBorderRight">&nbsp;</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeGreen">&nbsp;</td>
     </tr>
     <tr>
      <th scope="row" class="prodTblFirstCol">&nbsp;</th>
      <td class="prodTblBorderRight">Smart Decorations</td>
      <td class="prodTblBorderRight">&nbsp;</td>
      <td class="prodTblBorderRight">&nbsp;</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeGreen">&nbsp;</td>
     </tr>
     <tr>
      <th scope="row" class="prodTblFirstCol">&nbsp;</th>
      <td class="prodTblBorderRight">Smart Weather Station</td>
      <td class="prodTblBorderRight">&nbsp;</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeGreen">&nbsp;</td>
     </tr>
     <tr>
      <th scope="row" class="prodTblFirstCol">&nbsp;</th>
      <td class="prodTblBorderRight">Smart Virtual windows</td>
      <td class="prodTblBorderRight">&nbsp;</td>
      <td class="prodTblBorderRight">&nbsp;</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeGreen">&nbsp;</td>
     </tr>
     <tr>
      <th scope="row" class="prodTblFirstCol prodTblLastRowofCategory">&nbsp;</th>
      <td class="prodTblBorderRight">Smart Mini Garden</td>
      <td class="prodTblBorderRight">&nbsp;</td>
      <td class="prodTblBorderRight">&nbsp;</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeGreen">&nbsp;</td>
     </tr>
    <tr>
      <th scope="row" class="prodTblFirstCol">Kitchen</th>
      <td class="prodTblBorderRight">Smart Fridge</td>
      <td class="prodTblBorderRight">&nbsp;</td>
      <td class="prodTblBorderRight">&nbsp;</td>
      <td class="prodTblBorderRight">&nbsp;</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeGreen">&nbsp;</td>
    </tr>
    <tr>
      <th scope="row" class="prodTblFirstCol">&nbsp;</th>
      <td class="prodTblBorderRight">Smart Stove</td>
      <td class="prodTblBorderRight">&nbsp;</td>
      <td class="prodTblBorderRight">&nbsp;</td>
      <td class="prodTblBorderRight">&nbsp;</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeGreen">&nbsp;</td>
    </tr>
    <tr>
      <th scope="row" class="prodTblFirstCol">&nbsp;</th>
      <td class="prodTblBorderRight">Smart Microwave</td>
      <td class="prodTblBorderRight">&nbsp;</td>
      <td class="prodTblBorderRight">&nbsp;</td>
      <td class="prodTblBorderRight">&nbsp;</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeGreen">&nbsp;</td>
    </tr>
     <tr>
      <th scope="row" class="prodTblFirstCol">&nbsp;</th>
      <td class="prodTblBorderRight">Smart Dishwasher</td>
      <td class="prodTblBorderRight">&nbsp;</td>
      <td class="prodTblBorderRight">&nbsp;</td>
      <td class="prodTblBorderRight">&nbsp;</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeGreen">&nbsp;</td>
    </tr>
     <tr>
     <th scope="row" class="prodTblFirstCol">&nbsp;</th>
      <td class="prodTblBorderRight">Smart Ventilation System</td>
      <td class="prodTblBorderRight">&nbsp;</td>
      <td class="prodTblBorderRight">&nbsp;</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeGreen">&nbsp;</td>
     </tr>
     <tr>
     <th scope="row" class="prodTblFirstCol">&nbsp;</th>
      <td class="prodTblBorderRight">Smart Coffee Machine</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeGreen">&nbsp;</td>
     </tr>
     <tr>
       <th scope="row" class="prodTblFirstCol">&nbsp;</th>
        <td class="prodTblBorderRight">Smart Cabinet</td>
        <td class="prodTblBorderRight">&nbsp;</td>
        <td class="prodTblBorderRight">&nbsp;</td>
        <td class="prodTblBorderRight">&nbsp;</td>
        <td class="prodTblBorderRight makeYellow">&nbsp;</td>
        <td class="prodTblBorderRight makeGreen">&nbsp;</td>
     </tr>
     <tr>
      <th scope="row" class="prodTblFirstCol">&nbsp;</th>
      <td class="prodTblBorderRight">Smart Tap</td>
      <td class="prodTblBorderRight">&nbsp;</td>
      <td class="prodTblBorderRight">&nbsp;</td>
      <td class="prodTblBorderRight">&nbsp;</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeGreen">&nbsp;</td>
     </tr>
     <tr>
      <th scope="row" class="prodTblFirstCol">&nbsp;</th>
      <td class="prodTblBorderRight">Smart Colored Lighting</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeGreen">&nbsp;</td>
     </tr>
     <tr>
      <th scope="row" class="prodTblFirstCol">&nbsp;</th>
      <td class="prodTblBorderRight">Smart Trash Can</td>
      <td class="prodTblBorderRight">&nbsp;</td>
      <td class="prodTblBorderRight">&nbsp;</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeGreen">&nbsp;</td>
     </tr>
     <tr>
      <th scope="row" class="prodTblFirstCol prodTblLastRowofCategory">&nbsp;</th>
      <td class="prodTblBorderRight">Smart Safety Sensors</td>
      <td class="prodTblBorderRight">&nbsp;</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeGreen">&nbsp;</td>
     </tr>
     <tr>
       <th scope="row" class="prodTblFirstCol">Bedroom</th>
       <td class="prodTblBorderRight">Smart TV - Entertainment System</td>
       <td class="prodTblBorderRight">&nbsp;</td>
       <td class="prodTblBorderRight makeYellow">&nbsp;</td>
       <td class="prodTblBorderRight makeYellow">&nbsp;</td>
       <td class="prodTblBorderRight makeYellow">&nbsp;</td>
       <td class="prodTblBorderRight makeGreen">&nbsp;</td>
     </tr>
     <tr>
       <th scope="row" class="prodTblFirstCol">&nbsp;</th>
       <td class="prodTblBorderRight">Google Home or Alexa</td>
       <td class="prodTblBorderRight makeYellow">&nbsp;</td>
       <td class="prodTblBorderRight makeYellow">&nbsp;</td>
       <td class="prodTblBorderRight makeYellow">&nbsp;</td>
       <td class="prodTblBorderRight makeYellow">&nbsp;</td>
       <td class="prodTblBorderRight makeGreen">&nbsp;</td>
     </tr>
     <tr>
       <th scope="row" class="prodTblFirstCol">&nbsp;</th>
       <td class="prodTblBorderRight">Apple TV - Google Chromecast</td>
       <td class="prodTblBorderRight makeYellow">&nbsp;</td>
       <td class="prodTblBorderRight makeYellow">&nbsp;</td>
       <td class="prodTblBorderRight makeYellow">&nbsp;</td>
       <td class="prodTblBorderRight makeYellow">&nbsp;</td>
       <td class="prodTblBorderRight makeGreen">&nbsp;</td>
     </tr>
     <tr>
      <th scope="row" class="prodTblFirstCol">&nbsp;</th>
      <td class="prodTblBorderRight">Smart Colored Lighting</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeGreen">&nbsp;</td>
     </tr>
     <tr>
       <th scope="row" class="prodTblFirstCol">&nbsp;</th>
       <td class="prodTblBorderRight">Smart Mattress and Duvet</td>
       <td class="prodTblBorderRight">&nbsp;</td>
       <td class="prodTblBorderRight">&nbsp;</td>
       <td class="prodTblBorderRight makeYellow">&nbsp;</td>
       <td class="prodTblBorderRight makeYellow">&nbsp;</td>
       <td class="prodTblBorderRight makeGreen">&nbsp;</td>
     </tr>
      <tr>
       <th scope="row" class="prodTblFirstCol">&nbsp;</th>
       <td class="prodTblBorderRight">Smart Curtains</td>
       <td class="prodTblBorderRight makeYellow">&nbsp;</td>
       <td class="prodTblBorderRight makeYellow">&nbsp;</td>
       <td class="prodTblBorderRight makeYellow">&nbsp;</td>
       <td class="prodTblBorderRight makeYellow">&nbsp;</td>
       <td class="prodTblBorderRight makeGreen">&nbsp;</td>
     </tr>
     <tr>
      <th scope="row" class="prodTblFirstCol">&nbsp;</th>
      <td class="prodTblBorderRight">Smart Door</td>
      <td class="prodTblBorderRight">&nbsp;</td>
      <td class="prodTblBorderRight">&nbsp;</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeYellow">&nbsp;</td>
      <td class="prodTblBorderRight makeGreen">&nbsp;</td>
    </tr>
    <tr>
     <th scope="row" class="prodTblFirstCol">&nbsp;</th>
     <td class="prodTblBorderRight">Smart Humidifier</td>
     <td class="prodTblBorderRight">&nbsp;</td>
     <td class="prodTblBorderRight">&nbsp;</td>
     <td class="prodTblBorderRight makeYellow">&nbsp;</td>
     <td class="prodTblBorderRight makeYellow">&nbsp;</td>
     <td class="prodTblBorderRight makeGreen">&nbsp;</td>
   </tr>
   <tr>
    <th scope="row" class="prodTblFirstCol">&nbsp;</th>
    <td class="prodTblBorderRight">Smart Work Desk</td>
    <td class="prodTblBorderRight">&nbsp;</td>
    <td class="prodTblBorderRight">&nbsp;</td>
    <td class="prodTblBorderRight makeYellow">&nbsp;</td>
    <td class="prodTblBorderRight makeYellow">&nbsp;</td>
    <td class="prodTblBorderRight makeGreen">&nbsp;</td>
  </tr>
  <tr>
    <th scope="row" class="prodTblFirstCol prodTblLastRowofCategory">&nbsp;</th>
    <td class="prodTblBorderRight">Smart Safety Sensors</td>
    <td class="prodTblBorderRight">&nbsp;</td>
    <td class="prodTblBorderRight makeYellow">&nbsp;</td>
    <td class="prodTblBorderRight makeYellow">&nbsp;</td>
    <td class="prodTblBorderRight makeYellow">&nbsp;</td>
    <td class="prodTblBorderRight makeGreen">&nbsp;</td>
   </tr>
   <tr>
     <th scope="row" class="prodTblFirstCol">Bathroom</th>
     <td class="prodTblBorderRight">Smart Mirror</td>
     <td class="prodTblBorderRight">&nbsp;</td>
     <td class="prodTblBorderRight">&nbsp;</td>
     <td class="prodTblBorderRight makeYellow">&nbsp;</td>
     <td class="prodTblBorderRight makeYellow">&nbsp;</td>
     <td class="prodTblBorderRight makeGreen">&nbsp;</td>
   </tr>
   <tr>
     <th scope="row" class="prodTblFirstCol">&nbsp;</th>
     <td class="prodTblBorderRight">Smart Toilet Sit</td>
     <td class="prodTblBorderRight">&nbsp;</td>
     <td class="prodTblBorderRight makeYellow">&nbsp;</td>
     <td class="prodTblBorderRight makeYellow">&nbsp;</td>
     <td class="prodTblBorderRight makeYellow">&nbsp;</td>
     <td class="prodTblBorderRight makeGreen">&nbsp;</td>
   </tr>
   <tr>
     <th scope="row" class="prodTblFirstCol">&nbsp;</th>
     <td class="prodTblBorderRight">Smart Shower</td>
     <td class="prodTblBorderRight">&nbsp;</td>
     <td class="prodTblBorderRight">&nbsp;</td>
     <td class="prodTblBorderRight makeYellow">&nbsp;</td>
     <td class="prodTblBorderRight makeYellow">&nbsp;</td>
     <td class="prodTblBorderRight makeGreen">&nbsp;</td>
   </tr>
   <tr>
    <th scope="row" class="prodTblFirstCol">&nbsp;</th>
    <td class="prodTblBorderRight">Smart Colored Lighting</td>
    <td class="prodTblBorderRight makeYellow">&nbsp;</td>
    <td class="prodTblBorderRight makeYellow">&nbsp;</td>
    <td class="prodTblBorderRight makeYellow">&nbsp;</td>
    <td class="prodTblBorderRight makeYellow">&nbsp;</td>
    <td class="prodTblBorderRight makeGreen">&nbsp;</td>
   </tr>
   <tr>
     <th scope="row" class="prodTblFirstCol">&nbsp;</th>
     <td class="prodTblBorderRight">Smart Waterproof Sound System</td>
     <td class="prodTblBorderRight">&nbsp;</td>
     <td class="prodTblBorderRight makeYellow">&nbsp;</td>
     <td class="prodTblBorderRight makeYellow">&nbsp;</td>
     <td class="prodTblBorderRight makeYellow">&nbsp;</td>
     <td class="prodTblBorderRight makeGreen">&nbsp;</td>
   </tr>
    <tr>
     <th scope="row" class="prodTblFirstCol">&nbsp;</th>
     <td class="prodTblBorderRight">Smart Soap Dispenser</td>
     <td class="prodTblBorderRight makeYellow">&nbsp;</td>
     <td class="prodTblBorderRight makeYellow">&nbsp;</td>
     <td class="prodTblBorderRight makeYellow">&nbsp;</td>
     <td class="prodTblBorderRight makeYellow">&nbsp;</td>
     <td class="prodTblBorderRight makeGreen">&nbsp;</td>
   </tr>
   <tr>
    <th scope="row" class="prodTblFirstCol">&nbsp;</th>
    <td class="prodTblBorderRight">Smart Ventilation System</td>
    <td class="prodTblBorderRight">&nbsp;</td>
    <td class="prodTblBorderRight">&nbsp;</td>
    <td class="prodTblBorderRight">&nbsp;</td>
    <td class="prodTblBorderRight makeYellow">&nbsp;</td>
    <td class="prodTblBorderRight makeGreen">&nbsp;</td>
   </tr>
   <tr>
     <th scope="row" class="prodTblFirstCol prodTblLastRowofCategory">&nbsp;</th>
     <td class="prodTblBorderRight">Smart Water Leakage Detector</td>
     <td class="prodTblBorderRight">&nbsp;</td>
     <td class="prodTblBorderRight makeYellow">&nbsp;</td>
     <td class="prodTblBorderRight makeYellow">&nbsp;</td>
     <td class="prodTblBorderRight makeYellow">&nbsp;</td>
     <td class="prodTblBorderRight makeGreen">&nbsp;</td>
   </tr>
   <tr>
     <th scope="row" class="prodTblFirstCol">Balcony / Backyard</th>
     <td class="prodTblBorderRight">Smart Sound System</td>
     <td class="prodTblBorderRight">&nbsp;</td>
     <td class="prodTblBorderRight">&nbsp;</td>
     <td class="prodTblBorderRight makeYellow">&nbsp;</td>
     <td class="prodTblBorderRight makeYellow">&nbsp;</td>
     <td class="prodTblBorderRight makeGreen">&nbsp;</td>
   </tr>
   <tr>
     <th scope="row" class="prodTblFirstCol">&nbsp;</th>
     <td class="prodTblBorderRight">Smart Outdoor Furniture</td>
     <td class="prodTblBorderRight">&nbsp;</td>
     <td class="prodTblBorderRight">&nbsp;</td>
     <td class="prodTblBorderRight makeYellow">&nbsp;</td>
     <td class="prodTblBorderRight makeYellow">&nbsp;</td>
     <td class="prodTblBorderRight makeGreen">&nbsp;</td>
   </tr>
   <tr>
     <th scope="row" class="prodTblFirstCol">&nbsp;</th>
     <td class="prodTblBorderRight">Smart Shades</td>
     <td class="prodTblBorderRight">&nbsp;</td>
     <td class="prodTblBorderRight">&nbsp;</td>
     <td class="prodTblBorderRight">&nbsp;</td>
     <td class="prodTblBorderRight makeYellow">&nbsp;</td>
     <td class="prodTblBorderRight makeGreen">&nbsp;</td>
   </tr>
   <tr>
    <th scope="row" class="prodTblFirstCol">&nbsp;</th>
    <td class="prodTblBorderRight">Smart Colored Lighting</td>
    <td class="prodTblBorderRight">&nbsp;</td>
    <td class="prodTblBorderRight makeYellow">&nbsp;</td>
    <td class="prodTblBorderRight makeYellow">&nbsp;</td>
    <td class="prodTblBorderRight makeYellow">&nbsp;</td>
    <td class="prodTblBorderRight makeGreen">&nbsp;</td>
   </tr>
   <tr>
     <th scope="row" class="prodTblFirstCol">&nbsp;</th>
     <td class="prodTblBorderRight">Smart Cooling / Heating System</td>
     <td class="prodTblBorderRight">&nbsp;</td>
     <td class="prodTblBorderRight">&nbsp;</td>
     <td class="prodTblBorderRight">&nbsp;</td>
     <td class="prodTblBorderRight makeYellow">&nbsp;</td>
     <td class="prodTblBorderRight makeGreen">&nbsp;</td>
   </tr>
    <tr>
     <th scope="row" class="prodTblFirstCol prodTblBorderBottom">&nbsp;</th>
     <td class="prodTblBorderRight prodTblBorderBottom">Smart Sprinklers</td>
     <td class="prodTblBorderRight prodTblBorderBottom">&nbsp;</td>
     <td class="prodTblBorderRight prodTblBorderBottom">&nbsp;</td>
     <td class="prodTblBorderRight prodTblBorderBottom">&nbsp;</td>
     <td class="prodTblBorderRight makeYellow prodTblBorderBottom">&nbsp;</td>
     <td class="prodTblBorderRight makeGreen prodTblBorderBottom">&nbsp;</td>
   </tr>

  </tbody>
</table>
