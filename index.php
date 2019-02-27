<?php
if($_POST["message"]) {
    mail("googol.msg@gmail.com", "Form to email message", $_POST["message"], "From: an@email.address");
    $thankYou="<p>Thank you! Your message has been sent.</p>";
}
?>

<!DOCTYPE html>
<html lang="en">

<html>

<head>
    <link rel="stylesheet" type="text/css" href="reset.css">
    <!-- <meta charset="utf-8" /> -->
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->

    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
     

        <header>
            <div id="bg_top"></div>
        </header>
        <main id="main" class="content">
            <div id="img-div">
                <figure>
                    <a href="https://www.youtube.com/watch?v=pCELqGO_SZY" target="_blank">
                        <img id="image" src="https://raw.githubusercontent.com/CSanctuary/sanctuary/master/img%7Cvid%7Cdoc/snwphdr.png" alt="The Sanctuary Network"/></a> 

                       <nav>
                        <ul>
                            <li><a href="https://www.facebook.com/groups/1595507344070963">GROUP</a></li>
                            <li><a href="http://www.ivlog.tv/user/Sanctuary">SHOW</a></li>
                            <li><a href="https://www.websiteunavailable.com">DONATE</a></li>
                            <li><a href="https://www.websiteunavailable.com">OTHER</a></li>

                            <li style="float:right"><a href="https://www.tveca.com">TVECA</a></li>

                            <li style="float:right"><a href="https://vaping.org">AVA</a></li>

                            <li style="float:right"><a href="https://sfata.org">SFATA</a></li>

                            <li style="float:right"><a href="https://www.casaa.org">CASSA</a></li>
                        </ul>
                    </nav>
                    <center><div class="text"><br>
                        
                            <h2>Bio:</h2>The Sanctuary is a group of dedicated vapers. We are here to help Advocate, 
                            Educate, fellow vapers. We also dedicate our time. In getting sponsored products in vapers hands.
                            <br><br>We believe in the values of vaping. We know vaping is, in fact, a safer alternative to traditional cigarettes.<br><br>We appreciate you 
                            checking us out and feel free to ask us questions. If we can't help or don't have the correct response 
                            you're looking for we will do our best to find someone who can.</p><br>

                        <div class="text">
                            <h1 id="title">Winners Form</h1><br>

                            <p class="note">Items indicated by <span class="required">*</span> are required.</p><br>
                            

                            <label id="name-label" class="field" for="name">What is your first and last name? <span class="required">*</span></label>
                            <input id="name" name="name" type="text" placeholder="The Sanctuary Network" required />
                            <label id="shipping-label" class="field" for="shipping">What is your shipping address? <span class="required">*</span></label>
                            <input id="shipping" name="shipping" type="text" placeholder="300 River Bend Rd
                            Great Falls, VA 22066" required />
                            <label id="birthdate-label" class="field" for="birthdate">What is your date of birth? <span class="required">*</span></label>
                            <input id="birthdate" name="birthdate" type="text" placeholder="01/06/1975" required />
                            <label id="email" class="field" for="email">What is your email address? <span class="required">*</span></label>
                            <input id="email" name="email" type="email" placeholder="thesanctuarynetwork@gmail.com" required />
                            <label id="phone-number" class="field" for="phone-number">What is your phone number? <span class="required">*</span></label>
                            <input id="username" name="phone-number" type="text" placeholder="1-001-000-1111" required />

                            <label id="username" class="field" for="username">What is your iVlog username? <span class="required">*</span></label>
                            <input id="username" name="username" type="text" placeholder="TheSanctuaryNetwork" required />

                            <label id="dropdown-label" class="field" id="icon" for="dropdown">What show did you win from? <span class="required">*</span>

                            <div class="dropdown">
                              <div class="dropdown-options">
                                   <select id="dropdown" name="show-host" class="select-box" required>
              <option value="showhost">Select Option</option>
              <option value="show-host">Bad Company</option>
              <option value="show-host">Vapin Your Java with Lisa</option>
              <option value="show-host">Halloween Show</option>
              <option value="show-host">Christmas Show</option>
              <option value="show-host">Other</option>
            </select>
                                </div>
                            </div>

               <label id="show-host" class="field" for="showhost">If you chose "Other" specify what show?</label>
                            <input id="show-host" name="show-host" type="text" placeholder="The Sanctuary Network" required /> 

                            <label id="dropdown-label" class="field" for="sponsor">What sponsor and prize did you win? <span class="required">*</span></label>
                            <div class="dropdown">
                                <div class="dropdown-options">
                                    <select id="dropdown" name="sponsor" class="select-box" required>
               <option value="sponsorprize">Select Option</option>
              <option value="sponsorprize">Alice in Vapeland</option>
              <option value="sponsorprize">Alloy Blends</option>
              <option value="sponsorprize">Coils by Chopper (Coils 4 Pack)</option>
              <option value="sponsorprize">Fog Dog (30 ML $4.49 Shipping)</option>
              <option value="sponsorprize">Lazarus Vintage E-liquid (2 60 ML's)</option>
              <option value="sponsorprize">Leo D Designs Texas Tuff</option>
               <option value="sponsorprize">Nitro's Cold Brew (Bundle Pack)</option>
                <option value="sponsorprize">The Philosophers Stone (35 ML $4.00 Shipping. Please PayPal Ike at ike@tpsvapor.com)</option>
              <option value="sponsorprize">Smoke & Barrel (100 ML)</option>
                  <option value="sponsorprize">Vaping Delights (50% Off Code Good For Up To 3 Bottles)</option>
              < value="sponsorprize">Victory Liquids (4-5 30 ML's Plus A 60 ML)</option>
              <option value="sponsorprize">Victory Liquids Max Line</option>
              <option value="sponsorprize">Other</select>
                                    </select>
                                </div>
                            </div>

                            <label id="other-prize" class="field" for="other-prize">If you chose "Other", please speciefy?
        <input id="other-prize" name="other-prize" type="text" placeholder="Other Prize" />

             <label id="eliquid-options" class="field" for="eliquid-options">Specify e-liquid win options.
        <input id="eliquid-options" name="eliquid-options" type="text" placeholder="Sponsor | Flavor | 120 ML | 3 MG | Max VG" />

         <label id="shirt-size" class="field" for="shirt-size">Specify shirt size if applicable.
        <input id="shirt-size" name="shirt-size" type="text" placeholder="Shirt Size" />



           <label id="dropdown-label" class="field" for="dropdown">How long has it been since you won from sponsor? <span class="required">*</span></label>
                            <div class="dropdown">
                                <div class="dropdown-options">
                                    <select id="dropdown" name="last-win" class="select-box" required>
               <option value="last-win">Select Option</option>
              <option value="last-win">30 Days</option>
              <option value="last-win">60 Days</option>
              <option value="last-win">3 Months</option>
              <option value="last-win">6 Months</option>
            </select>
                                </div>
                            </div>

                            <label id="dropdown-label" class="field" for="dropdown">Are you of age in your state or country to vape? <span class="required">*</span></label>
                            <div class="dropdown">
                                <div class="dropdown-options">
                                    <select id="dropdown" name="legal-illegal" class="select-box" required>
               <option value="">Select Option</option>
               <option value="legal">Yes</option>
               <option value="illegal">No</option>
            </select>
                                </div>
                            </div>
                            <label id="dropdown-label" class="field" for="dropdown">Can you post pics of prize in group? <span class="required">*</span></label>
                            <div class="dropdown">
                                <div class="dropdown-options">
                                    <select id="dropdown" name="prize-pics" class="select-box" required>
               <option value="">Select Option</option>
               <option value="prize-pics">Yes</option>
               <option value="prize-pics">No</option>
               <option value="prize-pics">Other</option>
            </select>

                                    <label id="prize-pics" class="field" for="prize-pics">If you chose "Other" where will you be posting your win? </label>
                                    <input id="prize-pics" name="prize-pics" type="text" placeholder="Socialmedia" required />
                                </div>
                            </div>
                            <label id="dropdown-label" class="field" for="dropdown">You understand by not selecting "Yes" your win will be voided?<span class="required">*</span></label>
                            <div class="dropdown">
                                <div class="dropdown-options">
                                    <select id="dropdown" name="agreement" class="select-box" required>
              <option value="agreement">Select Option</option>
              <option value="agreement">Yes</option>
              <option value="agreement">No</option>
            </select>
                                </div>
                            </div>
                            <label id="comments-label" class="field" for="comments">Do you have any other comments?
        <textarea id="comments" name="comments" rows="6" placeholder="Thank you to sponsor and host for the amazing job and everything you do for the vape community!"></textarea>
             <button type="button" onclick="sendData({test:'ok'})">Submit Form!</button>
      
    </div>
  </div>

 <div class="text">
     All Rights Reserved 2019 &copy; The Sanctuary Network<br>Designed By https://queuedhub.com </div>

               </main></center>
    </body>
</html>
