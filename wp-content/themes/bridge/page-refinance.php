<?php

// send mail

get_header(); ?>

    <div class="bg_home_2 bg_form">

        <div id="tab1" class="tab">
            <img src="<?php bloginfo('template_url'); ?>/img/form1.png" />
            <h1>Personal Information</h1>
            <form method="post">
                <div class="form_left">
                    <div class="form_element">
                        <label>First Name</label>
                        <input name="FirstName" value="" />
                    </div>
                    <div class="form_element">
                        <label>Email</label>
                        <input name="Email" />
                    </div>
                    <div class="form_element">
                        <label>Middle Name</label>
                        <input name="MiddleName" />
                    </div>
                    <div class="form_element">
                        <label>Phone</label>
                        <input name="Phone" />
                    </div>
                    <div class="form_element">
                        <label>Last Name</label>
                        <input name="LastName" />
                    </div>
                    <div class="form_element">
                        <label>Marital Status</label>
                        <select name="Marital Status">
                            <option value="">Select One<option>
                            <option>Married</option>
                            <option>Separated</option>
                            <option>Unmarried</option>
                        </select>
                    </div>
                    <div class="form_element full_width">
                        <label> Add a Co-Borrower? </label>
                        <input type="checkbox" name="Borrower" />
                    </div>

                    <div class="form_element full_width">
                        <label> &nbsp; </label>
                        <input data-index="2" class="continue" type="submit" name="submit" value="SAVE & CONTINUE" />
                    </div>
                </div>
            </form>
        </div>


        <div id="tab2" class="tab hidden">
            <img src="<?php bloginfo('template_url'); ?>/img/form2.png" />
            <h1>Property Information</h1>
            <form method="post">
                <div class="form_left">
                    <div class="form_element">
                        <label>Street</label>
                        <input name="Street" value="" />
                    </div>
                    <div class="form_element">
                        <label>Estimated Value</label>
                        <input name="gray" value="" />
                    </div>
                    <div class="form_element">
                        <label>Zip / State</label>
                        <input class="half_width half_width_margin" name="Zip" />
                        <select class="half_width" name="State">
                            <option value="" selected="selected" disabled="">State</option>
                            <option>AL</option><option>AK</option><option>AZ</option><option>AR</option><option label="CA" value="string:CA">CA</option><option label="CO" value="string:CO">CO</option><option label="CT" value="string:CT">CT</option><option label="DC" value="string:DC">DC</option><option label="DE" value="string:DE">DE</option><option label="FL" value="string:FL">FL</option><option label="GA" value="string:GA">GA</option><option label="HI" value="string:HI">HI</option><option label="ID" value="string:ID">ID</option><option label="IL" value="string:IL">IL</option><option label="IN" value="string:IN">IN</option><option label="IA" value="string:IA">IA</option><option label="KS" value="string:KS">KS</option><option label="KY" value="string:KY">KY</option><option label="LA" value="string:LA">LA</option><option label="ME" value="string:ME">ME</option><option label="MD" value="string:MD">MD</option><option label="MA" value="string:MA">MA</option><option label="MI" value="string:MI">MI</option><option label="MN" value="string:MN">MN</option><option label="MS" value="string:MS">MS</option><option label="MO" value="string:MO">MO</option><option label="MT" value="string:MT">MT</option><option label="NE" value="string:NE">NE</option><option label="NV" value="string:NV">NV</option><option label="NH" value="string:NH">NH</option><option label="NJ" value="string:NJ">NJ</option><option label="NM" value="string:NM">NM</option><option label="NY" value="string:NY">NY</option><option label="NC" value="string:NC">NC</option><option label="ND" value="string:ND">ND</option><option label="OH" value="string:OH">OH</option><option label="OK" value="string:OK">OK</option><option label="OR" value="string:OR">OR</option><option label="PA" value="string:PA">PA</option><option label="RI" value="string:RI">RI</option><option label="SC" value="string:SC">SC</option><option label="SD" value="string:SD">SD</option><option label="TN" value="string:TN">TN</option><option label="TX" value="string:TX">TX</option><option label="UT" value="string:UT">UT</option><option label="VT" value="string:VT">VT</option><option label="VA" value="string:VA">VA</option><option label="WA" value="string:WA">WA</option><option label="WV" value="string:WV">WV</option><option label="WI" value="string:WI">WI</option><option label="WY" value="string:WY">WY</option>
                        </select>
                    </div>
                    <div class="form_element">
                        <label>Loan Amount</label>
                        <input name="Loan Amount" />
                    </div>
                    <div class="form_element">
                        <label>City</label>
                        <input name="City" />
                    </div>
                    <div class="form_element">
                        <label>Orig Purchase Price</label>
                        <input name="Orig Purchase Price" />
                    </div>

                    <div class="form_element">
                        <label>Occupancy Type</label>
                        <select name="Occupancy Type">
                            <option value="" disabled="">Select One</option>
                            <option>Primary Residence</option>
                            <option>Investment Property</option>
                            <option>Second Home</option>
                        </select>
                    </div>
                    <div class="form_element">
                        <label>Orig Purchase Date</label>
                        <input name="Orig Purchase Date" />
                    </div>

                    <div class="form_element">
                        <label>Property Type</label>
                        <select name="Property Type">
                            <option value="" disabled="">Select One</option>
                            <option>Single Family</option>
                            <option>Condo</option>
                            <option>PUD</option>
                            <option>Manufactured/Double-wide</option>
                            <option>Manufactured/Single-wide</option>
                            <option>Coop</option>
                            <option>Modular</option>
                            <option>Townhouse/Rowhouse</option>
                        </select>
                    </div>
                    <div class="form_element">
                    </div>

                    <div class="form_element">
                        <label>Number of Stories</label>
                        <input name="Number of Stories" />
                    </div>
                    <div class="form_element">
                    </div>

                    <div class="form_element full_width">
                        <label> &nbsp; </label>
                        <input data-index="3" class="continue" type="submit" name="submit" value="SAVE & CONTINUE" />
                    </div>
                </div>
            </form>
        </div>


        <div id="tab3" class="tab hidden">
            <img src="<?php bloginfo('template_url'); ?>/img/form2.png" />
            <h1>Current Address Information</h1>
            <form method="post">
                <div class="form_left">
                    <div class="form_element">
                        <label for="name">Street</label>
                        <input name="Street" value="" />
                    </div>
                    <div class="form_element">
                        <label for="email">Do you own or rent?</label>
                        <select name="Own_or_Rent">
                            <option value="" selected="selected" disabled="">Select One</option>
                            <option>Own</option>
                            <option>Rent</option>
                        </select>
                    </div>
                    <div class="form_element">
                        <label for="price">Zip / State</label>
                        <input class="half_width half_width_margin" name="Zip" />
                        <select class="half_width" name="State">
                            <option value="" selected="selected" disabled="">State</option>
                            <option>AL</option><option>AK</option><option>AZ</option><option>AR</option><option label="CA" value="string:CA">CA</option><option label="CO" value="string:CO">CO</option><option label="CT" value="string:CT">CT</option><option label="DC" value="string:DC">DC</option><option label="DE" value="string:DE">DE</option><option label="FL" value="string:FL">FL</option><option label="GA" value="string:GA">GA</option><option label="HI" value="string:HI">HI</option><option label="ID" value="string:ID">ID</option><option label="IL" value="string:IL">IL</option><option label="IN" value="string:IN">IN</option><option label="IA" value="string:IA">IA</option><option label="KS" value="string:KS">KS</option><option label="KY" value="string:KY">KY</option><option label="LA" value="string:LA">LA</option><option label="ME" value="string:ME">ME</option><option label="MD" value="string:MD">MD</option><option label="MA" value="string:MA">MA</option><option label="MI" value="string:MI">MI</option><option label="MN" value="string:MN">MN</option><option label="MS" value="string:MS">MS</option><option label="MO" value="string:MO">MO</option><option label="MT" value="string:MT">MT</option><option label="NE" value="string:NE">NE</option><option label="NV" value="string:NV">NV</option><option label="NH" value="string:NH">NH</option><option label="NJ" value="string:NJ">NJ</option><option label="NM" value="string:NM">NM</option><option label="NY" value="string:NY">NY</option><option label="NC" value="string:NC">NC</option><option label="ND" value="string:ND">ND</option><option label="OH" value="string:OH">OH</option><option label="OK" value="string:OK">OK</option><option label="OR" value="string:OR">OR</option><option label="PA" value="string:PA">PA</option><option label="RI" value="string:RI">RI</option><option label="SC" value="string:SC">SC</option><option label="SD" value="string:SD">SD</option><option label="TN" value="string:TN">TN</option><option label="TX" value="string:TX">TX</option><option label="UT" value="string:UT">UT</option><option label="VT" value="string:VT">VT</option><option label="VA" value="string:VA">VA</option><option label="WA" value="string:WA">WA</option><option label="WV" value="string:WV">WV</option><option label="WI" value="string:WI">WI</option><option label="WY" value="string:WY">WY</option></select>
                    </div>
                    <div class="form_element">
                        <label for="message">What is your monthly rent?</label>
                        <input name="Rent" />
                    </div>
                    <div class="form_element">
                        <label for="message">City</label>
                        <input name="City" />
                    </div>
                    <div class="form_element">
                        <label for="message">Time at Current Address</label>
                        <input class="half_width half_width_margin" name="Years" placeholder="Years" />
                        <input class="half_width" name="Months" placeholder="Months" />
                    </div>

                    <div class="form_element">
                    </div>
                    <div class="form_element">
                        <label>Mailing Address Different</label>
                        <input type="radio" name="Mailing Address Different" value="Yes" />
                        <span>Yes</span>
                        <input type="radio" name="Mailing Address Different" value="No" />
                        <span>No</span>
                    </div>

                    <div class="form_element full_width gray">
                        Does Co-Borrower have a different current address?
                    </div>

                    <div class="form_element full_width">
                        <label>Mailing Address Different</label>
                        <input type="radio" name="Mailing Address Different" value="Yes" />
                        <span>Yes</span>
                        <input type="radio" name="Mailing Address Different" value="No" />
                        <span>No</span>
                    </div>

                    <div class="form_element full_width blue">
                        Changing the Co-Borrower current address will require you to provide the Co-Borrower current address information on the next page.
                    </div>

                    <div class="form_element full_width">
                        <label> &nbsp; </label>
                        <input data-index="4" class="continue" type="submit" name="submit" value="SAVE & CONTINUE" />
                    </div>
                </div>
            </form>
        </div>

        <div id="tab4" class="tab hidden">
            <img src="<?php bloginfo('template_url'); ?>/img/form2.png" />
            <h1>Current Address Information</h1>
            <form method="post">
                <div class="form_left">
                    <div class="form_element">
                        <label for="name">Street</label>
                        <input name="Street" value="" />
                    </div>
                    <div class="form_element">
                        <label for="email">Do you own or rent?</label>
                        <select name="Own_or_Rent">
                            <option value="" selected="selected" disabled="">Select One</option>
                            <option>Own</option>
                            <option>Rent</option>
                        </select>
                    </div>
                    <div class="form_element">
                        <label for="price">Zip / State</label>
                        <input class="half_width half_width_margin" name="Zip" />
                        <select class="half_width" name="State">
                            <option value="" selected="selected" disabled="">State</option>
                            <option>AL</option><option>AK</option><option>AZ</option><option>AR</option><option label="CA" value="string:CA">CA</option><option label="CO" value="string:CO">CO</option><option label="CT" value="string:CT">CT</option><option label="DC" value="string:DC">DC</option><option label="DE" value="string:DE">DE</option><option label="FL" value="string:FL">FL</option><option label="GA" value="string:GA">GA</option><option label="HI" value="string:HI">HI</option><option label="ID" value="string:ID">ID</option><option label="IL" value="string:IL">IL</option><option label="IN" value="string:IN">IN</option><option label="IA" value="string:IA">IA</option><option label="KS" value="string:KS">KS</option><option label="KY" value="string:KY">KY</option><option label="LA" value="string:LA">LA</option><option label="ME" value="string:ME">ME</option><option label="MD" value="string:MD">MD</option><option label="MA" value="string:MA">MA</option><option label="MI" value="string:MI">MI</option><option label="MN" value="string:MN">MN</option><option label="MS" value="string:MS">MS</option><option label="MO" value="string:MO">MO</option><option label="MT" value="string:MT">MT</option><option label="NE" value="string:NE">NE</option><option label="NV" value="string:NV">NV</option><option label="NH" value="string:NH">NH</option><option label="NJ" value="string:NJ">NJ</option><option label="NM" value="string:NM">NM</option><option label="NY" value="string:NY">NY</option><option label="NC" value="string:NC">NC</option><option label="ND" value="string:ND">ND</option><option label="OH" value="string:OH">OH</option><option label="OK" value="string:OK">OK</option><option label="OR" value="string:OR">OR</option><option label="PA" value="string:PA">PA</option><option label="RI" value="string:RI">RI</option><option label="SC" value="string:SC">SC</option><option label="SD" value="string:SD">SD</option><option label="TN" value="string:TN">TN</option><option label="TX" value="string:TX">TX</option><option label="UT" value="string:UT">UT</option><option label="VT" value="string:VT">VT</option><option label="VA" value="string:VA">VA</option><option label="WA" value="string:WA">WA</option><option label="WV" value="string:WV">WV</option><option label="WI" value="string:WI">WI</option><option label="WY" value="string:WY">WY</option></select>
                    </div>
                    <div class="form_element">
                        <label for="message">What is your monthly rent?</label>
                        <input name="Rent" />
                    </div>
                    <div class="form_element">
                        <label for="message">City</label>
                        <input name="City" />
                    </div>
                    <div class="form_element">
                        <label for="message">Time at Current Address</label>
                        <input class="half_width half_width_margin" name="Years" />
                        <input class="half_width" name="Months" />
                    </div>

                    <div class="form_element">
                    </div>
                    <div class="form_element">
                        <label>Mailing Address Different</label>
                        <input type="radio" name="Mailing Address Different" value="Yes" />
                        <span>Yes</span>
                        <input type="radio" name="Mailing Address Different" value="No" />
                        <span>No</span>
                    </div>

                    <div class="form_element full_width gray">
                        Does Co-Borrower have a different current address?
                    </div>

                    <div class="form_element full_width">
                        <label>Mailing Address Different</label>
                        <input type="radio" name="Mailing Address Different" value="Yes" />
                        <span>Yes</span>
                        <input type="radio" name="Mailing Address Different" value="No" />
                        <span>No</span>
                    </div>

                    <div class="form_element full_width blue">
                        Changing the Co-Borrower current address will require you to provide the Co-Borrower current address information on the next page.
                    </div>

                    <div class="form_element full_width">
                        <label> &nbsp; </label>
                        <input data-index="5" class="continue" type="submit" name="submit" value="SAVE & CONTINUE" />
                    </div>
                </div>
            </form>
        </div>

    </div>

<?php get_footer(); ?>