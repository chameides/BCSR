<?php session_start();
  $_SESSION = array();
  session_regenerate_id(true);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mixed Media</title>

<?php include '_inc/head-js-css.php'; ?>

<style>

</style>

  </head>
  <body>

  
<?php include '_inc/nav.php'; ?>

    <div class="container-fluid page-container"> 

    <!-- Colored columns for testing grid
      <div class="row-full-width">
        <div class="column-left" style="background: grey;">
          left column
        </div>
        <div class="column-center" style="background: green;">
          center column
        </div>
        <div class="column-right" style="background: yellow;">
          right column
        </div>
      </div>
    -->
      <!-- << Section One >> -->
      <div class="row-full-width">
        <!-- LEFT COLUMN -->
        <div class="column-left side-nav" data-spy="affix" data-offset-top="100">
          <div class="reveal-side-nav"></div>
          <!-- Subnav -->
         
          <!-- /Subnav -->
        </div>
        <!-- /LEFT COLUMN-->

        <!-- CENTER COLUMN -->
        <div class="column-center">
          <!-- Video Header -->
          
          <h1 class="header-page text-center">Register for Reunion</h1>
          <div class="row">

  <div class="col-md-6">
    
    <div id="wufoo-zmdt1js1wbyzc4">
Fill out my <a href="https://simonsrockllamas.wufoo.com/forms/zmdt1js1wbyzc4">online form</a>.
</div>
<script type="text/javascript">var zmdt1js1wbyzc4;(function(d, t) {
var s = d.createElement(t), options = {
'userName':'simonsrockllamas',
'formHash':'zmdt1js1wbyzc4',
'autoResize':true,
'height':'3474',
'async':true,
'host':'wufoo.com',
'header':'show',
'ssl':true};
s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'www.wufoo.com/scripts/embed/form.js';
s.onload = s.onreadystatechange = function() {
var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
try { zmdt1js1wbyzc4 = new WufooForm();zmdt1js1wbyzc4.initialize(options);zmdt1js1wbyzc4.display(); } catch (e) {}};
var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
})(document, 'script');</script>


  </div>


  <div class="col-md-6">
    <form class="wufoo" action="#" novalidate>

    <header id="header" class="info">
      <h2>Title</h2>
      <div>Description</div>
    </header>

    <ul>
    <li class="section first">
      <section>
      <h3>Section Title</h3>
      <div>Description of the section.</div>
      </section>
    </li>

    <li class="focused">
      <label class="desc">Field Title<span class="req"> * </span></label>
      <div>
      <textarea rows="10" cols="50" class="field textarea medium">The quick brown fox jumped over the lazy dog.</textarea>
      </div>
      <p class="instruct"><small>
        Instructions for the user. Robots are typically used to do the tasks that are too dirty, dangerous, difficult, repetitive or dull for humans.
        <br /><br />Chris is Wufoo's robot.
      </small></p>
    </li>

    <li>
      <label class="desc">Another Field Title<span class="req"> * </span></label>
      <div>
      <input class="field text medium" type="text" maxlength="255" value="Example text."/>
      </div>
    </li>

    <li class="section">
      <section>
      <h3>Section Title</h3>
      <div>Description of another section.</div>
      </section>
    </li>

    <li>
      <fieldset>
      <legend class="desc">Multiple Choice</legend>
      <div class="col">
        <span>
        <input class="field radio" type="radio" value="Robots" checked="checked" />
        <label class="choice">Robots</label>
        </span>
        <span>
        <input class="field radio" type="radio" value="Monkeys"/>
        <label class="choice">Monkeys</label>
        </span>
        <span>
        <input class="field radio" type="radio" value="Ninjas"/>
        <label class="choice">Ninjas</label>
        </span>
      </div>
      </fieldset>
    </li>

    <li>
      <fieldset>
      <legend class="desc">Checkboxes</legend>
      <div class="col">
        <span>
        <input class="field checkbox" type="checkbox" value="Invisibility" checked="checked" />
        <label class="choice">Invisibility</label>
        </span>
        <span>
        <input class="field checkbox" type="checkbox" value="Super Strength"/>
        <label class="choice">Super Strength</label>
        </span>
        <span>
        <input class="field checkbox" type="checkbox" value="Eye Lasers"/>
        <label class="choice">Eye Lasers</label>
        </span>
      </div>
      </fieldset>
    </li>

    <li class="section">
      <section>
      <h3>Section Title</h3>
      <div>Description of another section.</div>
      </section>
    </li>

    <li>
      <label class="desc">Name Field</label>
      <span>
      <input class="field text" size="2" value=""/>
      <label>Title</label>
      </span>
      <span>
      <input class="field text" size="8" value=""/>
      <label>First</label>
      </span>
      <span>
      <input class="field text" size="14" value=""/>
      <label>Last</label>
      </span>
      <span>
      <input class="field text" size="3" value=""/>
      <label>Suffix</label>
      </span>
    </li>

    <li>
      <label class="desc">Date Field</label>
      <span>
      <input class="field text" size="2" type="text" maxlength="2" value=""/> /
      <label>MM</label>
      </span>
      <span>
      <input class="field text" size="2" type="text" maxlength="2" value=""/> /
      <label>DD</label>
      </span>
      <span>
      <input class="field text" size="4" type="text" maxlength="4" value=""/>
      <label>YYYY</label>
      </span>
      <img src="http://wufoo.com/images/icons/calendar.png" class="icon" alt="Pick date." id="pickdate111" />
    </li>

    <li>
      <label class="desc">Time Field</label>
      <span>
      <input class="field text" size="2" type="text" maxlength="2" value=""/> :
      <label>HH</label>
      </span>
      <span>
      <input class="field text" size="2" type="text" maxlength="2" value=""/> :
      <label>MM</label>
      </span>
      <span>
      <input class="field text" size="2" type="text" maxlength="2" value=""/>
      <label>SS</label>
      </span>
      <span>
      <select class="field select" style="width:4em">
      <option value="AM">AM</option>
      <option value="PM">PM</option>
      </select>
      <label>AM/PM</label>
      </span>
    </li>

    <li>
      <label class="desc">Phone Field</label>
      <span>
      <input class="field text" type="tel" size="3" maxlength="3" value=""/> -
      <label>###</label>
      </span>
      <span>
      <input class="field text" type="tel" size="3" maxlength="3" value=""/> -
      <label>###</label>
      </span>
      <span>
      <input class="field text" type="tel" size="4" maxlength="4" value=""/>
      <label>####</label>
      </span>
    </li>

    <li>
      <label class="desc">Currency Field</label>
      <span>&#36;</span>
      <span>
      <input class="field text currency nospin" type="number" size="10" value=""/> .
      <label>Dollars</label>
      </span>
      <span>
      <input class="field text nospin" size="2" type="number" maxlength="2" value=""/>
      <label>Cents</label>
      </span>
    </li>

    <li class="complex">
      <label class="desc">Address Field</label>
      <div>
      <span class="full">
      <input class="field text addr" type="text" value="" />
      <label>Street Address</label>
      </span>
      <span class="full">
      <input class="field text addr" type="text" value="" />
      <label>Address Line 2</label>
      </span>
      <span class="left">
      <input class="field text addr" type="text" value="" />
      <label>City</label>
      </span>
      <span class="right">
      <input class="field text addr" type="text" value="" />
      <label>State / Province / Region</label>
      </span>
      <span class="left">
      <input class="field text addr" type="text"  maxlength="15" value="" />
      <label>Postal / Zip Code</label>
      </span>
      <span class="right">
      <select class="field select addr">
      <option value="" selected="selected"></option>
      <option value="Afghanistan">Afghanistan</option>
      <option value="Albania">Albania</option>
      <option value="Algeria">Algeria</option>
      <option value="Andorra">Andorra</option>

      <option value="Antigua and Barbuda">Antigua and Barbuda</option>
      <option value="Argentina">Argentina</option>
      <option value="Armenia">Armenia</option>
      <option value="Australia">Australia</option>
      <option value="Austria">Austria</option>
      <option value="Azerbaijan">Azerbaijan</option>
      <option value="Bahamas">Bahamas</option>
      <option value="Bahrain">Bahrain</option>
      <option value="Bangladesh">Bangladesh</option>

      <option value="Barbados">Barbados</option>
      <option value="Belarus">Belarus</option>
      <option value="Belgium">Belgium</option>
      <option value="Belize">Belize</option>
      <option value="Benin">Benin</option>
      <option value="Bhutan">Bhutan</option>
      <option value="Bolivia">Bolivia</option>
      <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
      <option value="Botswana">Botswana</option>

      <option value="Brazil">Brazil</option>
      <option value="Brunei">Brunei</option>
      <option value="Bulgaria">Bulgaria</option>
      <option value="Burkina Faso">Burkina Faso</option>
      <option value="Burundi">Burundi</option>
      <option value="Cambodia">Cambodia</option>
      <option value="Cameroon">Cameroon</option>
      <option value="Canada">Canada</option>
      <option value="Cape Verde">Cape Verde</option>

      <option value="Central African Republic">Central African Republic</option>
      <option value="Chad">Chad</option>
      <option value="Chile">Chile</option>
      <option value="China">China</option>
      <option value="Colombia">Colombia</option>
      <option value="Comoros">Comoros</option>
      <option value="Congo">Congo</option>
      <option value="Costa Rica">Costa Rica</option>
      <option value="C&ocirc;te d'Ivoire">C&ocirc;te d'Ivoire</option>

      <option value="Croatia">Croatia</option>
      <option value="Cuba">Cuba</option>
      <option value="Cyprus">Cyprus</option>
      <option value="Czech Republic">Czech Republic</option>
      <option value="Denmark">Denmark</option>
      <option value="Djibouti">Djibouti</option>
      <option value="Dominica">Dominica</option>
      <option value="Dominican Republic">Dominican Republic</option>
      <option value="East Timor">East Timor</option>

      <option value="Ecuador">Ecuador</option>
      <option value="Egypt">Egypt</option>
      <option value="El Salvador">El Salvador</option>
      <option value="Equatorial Guinea">Equatorial Guinea</option>
      <option value="Eritrea">Eritrea</option>
      <option value="Estonia">Estonia</option>
      <option value="Ethiopia">Ethiopia</option>
      <option value="Fiji">Fiji</option>
      <option value="Finland">Finland</option>

      <option value="France">France</option>
      <option value="Gabon">Gabon</option>
      <option value="Gambia">Gambia</option>
      <option value="Georgia">Georgia</option>
      <option value="Germany">Germany</option>
      <option value="Gibraltar">Gibraltar</option>
      <option value="Ghana">Ghana</option>
      <option value="Greece">Greece</option>
      <option value="Grenada">Grenada</option>
      <option value="Guatemala">Guatemala</option>

      <option value="Guinea">Guinea</option>
      <option value="Guinea-Bissau">Guinea-Bissau</option>
      <option value="Guyana">Guyana</option>
      <option value="Haiti">Haiti</option>
      <option value="Honduras">Honduras</option>
      <option value="Hungary">Hungary</option>
      <option value="Iceland">Iceland</option>
      <option value="India">India</option>
      <option value="Indonesia">Indonesia</option>

      <option value="Iran">Iran</option>
      <option value="Iraq">Iraq</option>
      <option value="Ireland">Ireland</option>
      <option value="Israel">Israel</option>
      <option value="Italy">Italy</option>
      <option value="Jamaica">Jamaica</option>
      <option value="Japan">Japan</option>
      <option value="Jordan">Jordan</option>
      <option value="Kazakhstan">Kazakhstan</option>

      <option value="Kenya">Kenya</option>
      <option value="Kiribati">Kiribati</option>
      <option value="North Korea">North Korea</option>
      <option value="South Korea">South Korea</option>
      <option value="Kuwait">Kuwait</option>
      <option value="Kyrgyzstan">Kyrgyzstan</option>
      <option value="Laos">Laos</option>
      <option value="Latvia">Latvia</option>
      <option value="Lebanon">Lebanon</option>

      <option value="Lesotho">Lesotho</option>
      <option value="Liberia">Liberia</option>
      <option value="Libya">Libya</option>
      <option value="Liechtenstein">Liechtenstein</option>
      <option value="Lithuania">Lithuania</option>
      <option value="Luxembourg">Luxembourg</option>
      <option value="Macedonia">Macedonia</option>
      <option value="Madagascar">Madagascar</option>
      <option value="Malawi">Malawi</option>

      <option value="Malaysia">Malaysia</option>
      <option value="Maldives">Maldives</option>
      <option value="Mali">Mali</option>
      <option value="Malta">Malta</option>
      <option value="Marshall Islands">Marshall Islands</option>
      <option value="Mauritania">Mauritania</option>
      <option value="Mauritius">Mauritius</option>
      <option value="Mexico">Mexico</option>
      <option value="Micronesia">Micronesia</option>

      <option value="Moldova">Moldova</option>
      <option value="Monaco">Monaco</option>
      <option value="Mongolia">Mongolia</option>
      <option value="Montenegro">Montenegro</option>
      <option value="Morocco">Morocco</option>
      <option value="Mozambique">Mozambique</option>
      <option value="Myanmar">Myanmar</option>
      <option value="Namibia">Namibia</option>
      <option value="Nauru">Nauru</option>

      <option value="Nepal">Nepal</option>
      <option value="Netherlands">Netherlands</option>
      <option value="New Zealand">New Zealand</option>
      <option value="Nicaragua">Nicaragua</option>
      <option value="Niger">Niger</option>
      <option value="Nigeria">Nigeria</option>
      <option value="Norway">Norway</option>
      <option value="Oman">Oman</option>
      <option value="Pakistan">Pakistan</option>

      <option value="Palau">Palau</option>
      <option value="Panama">Panama</option>
      <option value="Papua New Guinea">Papua New Guinea</option>
      <option value="Paraguay">Paraguay</option>
      <option value="Peru">Peru</option>
      <option value="Philippines">Philippines</option>
      <option value="Poland">Poland</option>
      <option value="Portugal">Portugal</option>
      <option value="Qatar">Qatar</option>

      <option value="Romania">Romania</option>
      <option value="Russia">Russia</option>
      <option value="Rwanda">Rwanda</option>
      <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
      <option value="Saint Lucia">Saint Lucia</option>
      <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
      <option value="Samoa">Samoa</option>
      <option value="San Marino">San Marino</option>
      <option value="Sao Tome and Principe">Sao Tome and Principe</option>

      <option value="Saudi Arabia">Saudi Arabia</option>
      <option value="Senegal">Senegal</option>
      <option value="Serbia">Serbia</option>
      <option value="Seychelles">Seychelles</option>
      <option value="Sierra Leone">Sierra Leone</option>
      <option value="Singapore">Singapore</option>
      <option value="Slovakia">Slovakia</option>
      <option value="Slovenia">Slovenia</option>
      <option value="Solomon Islands">Solomon Islands</option>

      <option value="Somalia">Somalia</option>
      <option value="South Africa">South Africa</option>
      <option value="Spain">Spain</option>
      <option value="Sri Lanka">Sri Lanka</option>
      <option value="Sudan">Sudan</option>
      <option value="Suriname">Suriname</option>
      <option value="Swaziland">Swaziland</option>
      <option value="Sweden">Sweden</option>
      <option value="Switzerland">Switzerland</option>

      <option value="Syria">Syria</option>
      <option value="Taiwan">Taiwan</option>
      <option value="Tajikistan">Tajikistan</option>
      <option value="Tanzania">Tanzania</option>
      <option value="Thailand">Thailand</option>
      <option value="Togo">Togo</option>
      <option value="Tonga">Tonga</option>
      <option value="Trinidad and Tobago">Trinidad and Tobago</option>
      <option value="Tunisia">Tunisia</option>

      <option value="Turkey">Turkey</option>
      <option value="Turkmenistan">Turkmenistan</option>
      <option value="Tuvalu">Tuvalu</option>
      <option value="Uganda">Uganda</option>
      <option value="Ukraine">Ukraine</option>
      <option value="United Arab Emirates">United Arab Emirates</option>
      <option value="United Kingdom">United Kingdom</option>
      <option value="United States">United States</option>
      <option value="Uruguay">Uruguay</option>

      <option value="Uzbekistan">Uzbekistan</option>
      <option value="Vanuatu">Vanuatu</option>
      <option value="Vatican City">Vatican City</option>
      <option value="Venezuela">Venezuela</option>
      <option value="Vietnam">Vietnam</option>
      <option value="Yemen">Yemen</option>
      <option value="Zambia">Zambia</option>
      <option value="Zimbabwe">Zimbabwe</option>
      </select>
      <label>Country</label>
      </span>
      </div>
    </li>

    <li>
      <label class="desc">Website Field</label>
      <div>
      <input class="field text large" type="url" maxlength="255" value="http://"/>
      </div>
    </li>

    <li>
      <label class="desc">Email Field</label>
      <div>
      <input class="field text medium" type="email" maxlength="255" value=""/>
      </div>
    </li>

    <li class="complex">
      <label class="desc">File Upload Field</label>
      <div>
      <span class="full">
        <input class="field file" type="file" value=""/>
      </span>
      </div>
    </li>

    <li class="buttons">
      <input id="saveForm" class="btTxt submit" type="submit" value="Submit" onclick="return false" />
    </li>
    </ul>
  </form>
  



  </div><!-- col-md-6 -->
</div><!-- row -->

              
         </div>
        <!-- /CENTER COLUMN -->

        <!-- RIGHT COLUMN -->
        <div class="column-right">
          <!-- Right Callout -->
         
          <!-- /Right Callout -->
        </div>
        <!-- RIGHT COLUMN -->
      </div>
      <!-- << /Section One >> -->


      <!-- << Section Two >> -->
      <div class="row-full-width">
        <!-- LEFT COLUMN -->
        <div class="column-left">
        </div>
        <!-- /LEFT COLUMN-->

        <!-- CENTER COLUMN -->
        <div class="column-center">
          
         
        </div>

        <!-- RIGHT COLUMN-->
        <div class="column-right">
        </div>  
        <!-- /RIGHT COLUMN -->
      </div>
      <!-- << /Section Two >> -->

    </div><!-- /container-fluid -->

    <div class="row-full-width">
      <!-- Sidbar Mobile Nav -->
      <div class="side-nav-mobile">
        <!-- Subnav -->
        <ul class="flat-list list-group list-group-mobile">
          <li><div class="list-group-item active section-header">Tuition and Financial Aid</div></li>
            <li><a href="#" class="list-group-item">Tuition and Fees</a></li>
            <li><a href="#" class="list-group-item active">Financial Aid and Scholarships</a>
              <ul class="flat-list list-group">
                <li><a href="#" class="list-group-item">Sub item</a></li>
                <li><a href="#" class="list-group-item">Sub item nav link that runs long</a></li>
                <li><a href="#" class="list-group-item">Sub item</a></li>
              </ul>
            </li>
            <li><a href="#" class="list-group-item">Dates and Deadlines</a></li>
            <li><a href="#" class="list-group-item">Checklists and Application Tips</a></li>
        </ul>
        <!-- /Subnav -->
      </div>
      <!-- /Sidbar Mobile Nav-->
    </div>

<?php include '_inc/footer.php'; ?>
    
<?php include '_inc/bottom-js.php' ?>
<script id="hobson-form-submit" data-name="RFI-Address-Follow-Yes" src="/_resources/js/forms/rfi-combine-min.js"></script>



  <script type="text/javascript" src="/_js/greensock/TweenMax.min.js"></script>
  <script type="text/javascript" src="/_js/scrollmagic/jquery.scrollmagic.js"></script>
  <script type="text/javascript" src="/_js/scrollmagic/jquery.scrollmagic.debug.js"></script>

  <script>

    var controller;
    var scene_callout;
    $(document).ready(function($) {
    
      // init controller
      controller = new ScrollMagic();

      // Callout parallax
      callout_parallax();
      $(window).on('debouncedresize', function( event ) {
        callout_parallax();
      });

    });

function callout_parallax(){
  if ($(window).width() >= 1370){
    var tween_callout = TweenMax.fromTo('.callout-box', 1.5, 
        { 'margin' : '20px 0;'},
        { 'margin' : '-500px 0'}
      );
    // build scene
    scene_callout = new ScrollScene({duration: 700}).setTween(tween_callout).addTo(controller);
  }
  else{
    $('.callout-box').css("margin","20px 0");
    controller.removeScene(scene_callout);
    console.log(scene_callout);
  }
}

  </script>


    
  </body>
</html>