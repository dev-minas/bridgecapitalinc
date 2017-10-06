<?php

// send mail

get_header(); ?>

    <div class="bg_home_2 bg_form">

        <form method="post" class="main_form">

            <div id="tab1" class="tab ">
                <img src="<?php bloginfo('template_url'); ?>/img/form1.png" />
                <h1>Personal Information</h1>

                <div class="form_left">

                    <div class="form_element">
                        <label>First Name</label>
                        <input name="My First Name" id="my_name" class="req" />
                    </div>
                    <div class="form_element">
                        <label>Email</label>
                        <input name="My Email" class="req" />
                    </div>
                    <div class="form_element">
                        <label>Middle Name</label>
                        <input name="My Middle Name" />
                    </div>
                    <div class="form_element">
                        <label>Phone</label>
                        <input name="My Phone" />
                    </div>
                    <div class="form_element">
                        <label>Last Name</label>
                        <input name="My Last Name" class="req" />
                    </div>
                    <div class="form_element">
                        <label>Marital Status</label>
                        <select name="My Marital Status">
                            <option value="">Select One<option>
                            <option>Married</option>
                            <option>Separated</option>
                            <option>Unmarried</option>
                        </select>
                    </div>
                    <div class="form_element full_width">
                        <label>Add a Co-Borrower? </label>
                        <input type="checkbox" name="Co-Borrower" id="co_borrower" value="Yes" />
                    </div>

                    <h3 class="hidden co-borrower">Co-Borrower Information</h3>

                    <div class="form_element hidden co-borrower">
                        <label>First Name</label>
                        <input name="CB First Name" id="cb_name" class="req" />
                    </div>
                    <div class="form_element hidden co-borrower">
                        <label>Email</label>
                        <input name="CB Email" class="req" />
                    </div>
                    <div class="form_element hidden co-borrower">
                        <label>Middle Name</label>
                        <input name="CB Middle Name" />
                    </div>
                    <div class="form_element hidden co-borrower">
                        <label>Phone</label>
                        <input name="CB Phone hidden co-borrower" />
                    </div>
                    <div class="form_element hidden co-borrower">
                        <label>Last Name</label>
                        <input name="CB Last Name" />
                    </div>
                    <div class="form_element hidden co-borrower">
                    </div>

                    <div class="form_element full_width">
                        <label> &nbsp; </label>
                        <input data-index="2" class="continue" type="submit" name="submit" value="SAVE & CONTINUE" />
                    </div>
                </div>

            </div>

            <div id="tab2" class="tab hidden">
                <img src="<?php bloginfo('template_url'); ?>/img/form2.png" />
                <h1>Property Information</h1>
                <div class="form_left">
                    <div class="form_element">
                        <label>Street</label>
                        <input name="Street" class="req" />
                    </div>
                    <div class="form_element">
                        <label>Estimated Value</label>
                        <span class="sign">$</span><input name="Estimated Value" class="mask_dollar" />
                    </div>

                    <div class="form_element">
                        <label>City</label>
                        <input name="City" />
                    </div>
                    <div class="form_element">
                        <label>Loan Amount</label>
                        <span class="sign">$</span><input name="Loan Amount" class="mask_dollar" />
                    </div>
                    <div class="form_element">
                        <label><span class="label_zip">Zip</span><span class="label_state">State</span></label>
                        <input class="half_width half_width_margin" name="Zip" />
                        <select class="half_width" name="State">
                            <option value="" selected="selected" disabled="">State</option>
                            <option>AL</option><option>AK</option><option>AZ</option><option>AR</option><option label="CA" value="string:CA">CA</option><option label="CO" value="string:CO">CO</option><option label="CT" value="string:CT">CT</option><option label="DC" value="string:DC">DC</option><option label="DE" value="string:DE">DE</option><option label="FL" value="string:FL">FL</option><option label="GA" value="string:GA">GA</option><option label="HI" value="string:HI">HI</option><option label="ID" value="string:ID">ID</option><option label="IL" value="string:IL">IL</option><option label="IN" value="string:IN">IN</option><option label="IA" value="string:IA">IA</option><option label="KS" value="string:KS">KS</option><option label="KY" value="string:KY">KY</option><option label="LA" value="string:LA">LA</option><option label="ME" value="string:ME">ME</option><option label="MD" value="string:MD">MD</option><option label="MA" value="string:MA">MA</option><option label="MI" value="string:MI">MI</option><option label="MN" value="string:MN">MN</option><option label="MS" value="string:MS">MS</option><option label="MO" value="string:MO">MO</option><option label="MT" value="string:MT">MT</option><option label="NE" value="string:NE">NE</option><option label="NV" value="string:NV">NV</option><option label="NH" value="string:NH">NH</option><option label="NJ" value="string:NJ">NJ</option><option label="NM" value="string:NM">NM</option><option label="NY" value="string:NY">NY</option><option label="NC" value="string:NC">NC</option><option label="ND" value="string:ND">ND</option><option label="OH" value="string:OH">OH</option><option label="OK" value="string:OK">OK</option><option label="OR" value="string:OR">OR</option><option label="PA" value="string:PA">PA</option><option label="RI" value="string:RI">RI</option><option label="SC" value="string:SC">SC</option><option label="SD" value="string:SD">SD</option><option label="TN" value="string:TN">TN</option><option label="TX" value="string:TX">TX</option><option label="UT" value="string:UT">UT</option><option label="VT" value="string:VT">VT</option><option label="VA" value="string:VA">VA</option><option label="WA" value="string:WA">WA</option><option label="WV" value="string:WV">WV</option><option label="WI" value="string:WI">WI</option><option label="WY" value="string:WY">WY</option>
                        </select>

                    </div>
                    <div class="form_element">
                        <label>Orig Purchase Price</label>
                        <span class="sign">$</span><input name="Orig Purchase Price" class="mask_dollar" />
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
                        <select name="Property Type" class="property_type">
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

                    <div class="form_element number_of_units">
                        <label>Number of Units</label>
                        <select name="Number of Units">
                            <option value="" disabled="">Select One</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5+</option>
                        </select>
                    </div>

                    <div class="form_element hidden number_of_stories">
                        <label>Number of Stories</label>
                        <input name="Number of Stories" />
                    </div>

                    <div class="form_element">
                    </div>

                    <div class="form_element full_width">
                        <label> &nbsp; </label>
                        <input data-index="1" class="continue" type="submit" value="BACK" />
                        <input data-index="3" class="continue" type="submit" name="submit" value="SAVE & CONTINUE" />
                    </div>
                </div>
            </div>

            <div id="tab3" class="tab hidden">
                <img src="<?php bloginfo('template_url'); ?>/img/form2.png" />
                <h1>Current Address Information</h1>

                <div class="form_left">

                    <div class="form_element full_width">
                        <label for="message">Time at Current Address</label>
                        <input class="half_width half_width_margin req" name="Years at Current Address" placeholder="Years" />
                        <input class="half_width" name="Months at Current Address" placeholder="Months" />
                    </div>

                    <div class="form_element full_width">
                        <label>Is Mailing Address Different?</label>
                        <input type="radio" name="Different Mailing Address" value="Yes" class="diff_maddress" />
                        <span>Yes</span>
                        <input type="radio" name="Different Mailing Address" value="No" class="diff_maddress" />
                        <span>No</span>
                    </div>

                    <h3 class="my_mailing_address hidden">My Mailing Address</h3>

                    <div class="form_element full_width hidden my_mailing_address">
                        <label for="name">Street</label>
                        <input name="Mailing Street" class="req" />
                    </div>

                    <div class="form_element full_width hidden my_mailing_address">
                        <label for="message">City</label>
                        <input name="Mailing City" />
                    </div>

                    <div class="form_element full_width hidden my_mailing_address">
                        <label>Zip / State</label>
                        <input class="half_width half_width_margin" name="Zip" />
                        <select class="half_width" name="Mailing State">
                            <option value="" selected="selected" disabled="">State</option>
                            <option>AL</option><option>AK</option><option>AZ</option><option>AR</option><option label="CA" value="string:CA">CA</option><option label="CO" value="string:CO">CO</option><option label="CT" value="string:CT">CT</option><option label="DC" value="string:DC">DC</option><option label="DE" value="string:DE">DE</option><option label="FL" value="string:FL">FL</option><option label="GA" value="string:GA">GA</option><option label="HI" value="string:HI">HI</option><option label="ID" value="string:ID">ID</option><option label="IL" value="string:IL">IL</option><option label="IN" value="string:IN">IN</option><option label="IA" value="string:IA">IA</option><option label="KS" value="string:KS">KS</option><option label="KY" value="string:KY">KY</option><option label="LA" value="string:LA">LA</option><option label="ME" value="string:ME">ME</option><option label="MD" value="string:MD">MD</option><option label="MA" value="string:MA">MA</option><option label="MI" value="string:MI">MI</option><option label="MN" value="string:MN">MN</option><option label="MS" value="string:MS">MS</option><option label="MO" value="string:MO">MO</option><option label="MT" value="string:MT">MT</option><option label="NE" value="string:NE">NE</option><option label="NV" value="string:NV">NV</option><option label="NH" value="string:NH">NH</option><option label="NJ" value="string:NJ">NJ</option><option label="NM" value="string:NM">NM</option><option label="NY" value="string:NY">NY</option><option label="NC" value="string:NC">NC</option><option label="ND" value="string:ND">ND</option><option label="OH" value="string:OH">OH</option><option label="OK" value="string:OK">OK</option><option label="OR" value="string:OR">OR</option><option label="PA" value="string:PA">PA</option><option label="RI" value="string:RI">RI</option><option label="SC" value="string:SC">SC</option><option label="SD" value="string:SD">SD</option><option label="TN" value="string:TN">TN</option><option label="TX" value="string:TX">TX</option><option label="UT" value="string:UT">UT</option><option label="VT" value="string:VT">VT</option><option label="VA" value="string:VA">VA</option><option label="WA" value="string:WA">WA</option><option label="WV" value="string:WV">WV</option><option label="WI" value="string:WI">WI</option><option label="WY" value="string:WY">WY</option></select>
                    </div>

                    <div class="form_element full_width">
                        <label>Does <b class="cb_name"></b> have a different current address? </label>
                        <input type="radio" name="CB Mailing Address Different" class="cb_diff_caddrecc" value="Yes" />
                        <span>Yes</span>
                        <input type="radio" name="CB Mailing Address Different" class="cb_diff_caddrecc" value="No" />
                        <span>No</span>
                    </div>

                    <h3 class="hidden cb_current_address"><b class="cb_name"></b> Current Address Information</h3>

                    <div class="form_element hidden cb_current_address">
                        <label for="name">Street</label>
                        <input name="CB Street" class="req" />
                    </div>

                    <div class="form_element hidden cb_current_address">
                        <label for="email">Do you own or rent?</label>
                        <select name="CB Own_or_Rent" class="cb_own_or_rent">
                            <option value="" selected="selected" disabled="">Select One</option>
                            <option>Own</option>
                            <option>Rent</option>
                            <option>Rent Free</option>
                        </select>
                    </div>

                    <div class="form_element hidden cb_current_address">
                        <label for="message">City</label>
                        <input name="CB City" />
                    </div>


                    <div class="form_element">
                        <div class="cb_monthly_rent hidden cb_current_address">
                            <label>What is your monthly rent?</label>
                            <input name="CB Monthly Rent" value="" />
                        </div>
                    </div>

                    <div class="form_element hidden cb_current_address">
                        <label><span class="label_zip">Zip</span><span class="label_state">State</span></label>
                        <input class="half_width half_width_margin" name="CB Zip" />
                        <select class="half_width" name="CB State">
                            <option value="" selected="selected" disabled="">State</option>
                            <option>AL</option><option>AK</option><option>AZ</option><option>AR</option><option label="CA" value="string:CA">CA</option><option label="CO" value="string:CO">CO</option><option label="CT" value="string:CT">CT</option><option label="DC" value="string:DC">DC</option><option label="DE" value="string:DE">DE</option><option label="FL" value="string:FL">FL</option><option label="GA" value="string:GA">GA</option><option label="HI" value="string:HI">HI</option><option label="ID" value="string:ID">ID</option><option label="IL" value="string:IL">IL</option><option label="IN" value="string:IN">IN</option><option label="IA" value="string:IA">IA</option><option label="KS" value="string:KS">KS</option><option label="KY" value="string:KY">KY</option><option label="LA" value="string:LA">LA</option><option label="ME" value="string:ME">ME</option><option label="MD" value="string:MD">MD</option><option label="MA" value="string:MA">MA</option><option label="MI" value="string:MI">MI</option><option label="MN" value="string:MN">MN</option><option label="MS" value="string:MS">MS</option><option label="MO" value="string:MO">MO</option><option label="MT" value="string:MT">MT</option><option label="NE" value="string:NE">NE</option><option label="NV" value="string:NV">NV</option><option label="NH" value="string:NH">NH</option><option label="NJ" value="string:NJ">NJ</option><option label="NM" value="string:NM">NM</option><option label="NY" value="string:NY">NY</option><option label="NC" value="string:NC">NC</option><option label="ND" value="string:ND">ND</option><option label="OH" value="string:OH">OH</option><option label="OK" value="string:OK">OK</option><option label="OR" value="string:OR">OR</option><option label="PA" value="string:PA">PA</option><option label="RI" value="string:RI">RI</option><option label="SC" value="string:SC">SC</option><option label="SD" value="string:SD">SD</option><option label="TN" value="string:TN">TN</option><option label="TX" value="string:TX">TX</option><option label="UT" value="string:UT">UT</option><option label="VT" value="string:VT">VT</option><option label="VA" value="string:VA">VA</option><option label="WA" value="string:WA">WA</option><option label="WV" value="string:WV">WV</option><option label="WI" value="string:WI">WI</option><option label="WY" value="string:WY">WY</option></select>
                    </div>

                    <div class="form_element hidden cb_current_address">
                        <label for="message">Time at Current Address</label>
                        <input class="half_width half_width_margin" name="CB Years" />
                        <input class="half_width" name="CB Months" />
                    </div>

                    <div class="form_element full_width hidden cb_current_address">
                        <label>Is Mailing Address Different?</label>
                        <input type="radio" name="Different Mailing Address" value="Yes" class="cb_diff_maddress" />
                        <span>Yes</span>
                        <input type="radio" name="Different Mailing Address" value="No" class="cb_diff_maddress" />
                        <span>No</span>
                    </div>

                    <div class="cb_current_address">
                        <h3 class="cb_mailing_address hidden"><b class="cb_name"></b> Mailing Address</h3>

                        <div class="form_element full_width hidden cb_mailing_address">
                            <label for="name">Street</label>
                            <input name="CB Mailing Street" value="" />
                        </div>

                        <div class="form_element full_width hidden cb_mailing_address">
                            <label for="message">City</label>
                            <input name="Mailing City" />
                        </div>

                        <div class="form_element full_width hidden cb_mailing_address">
                            <label>Zip / State</label>
                            <input class="half_width half_width_margin" name="CB Zip" />
                            <select class="half_width" name="CB Mailing State">
                                <option value="" selected="selected" disabled="">State</option>
                                <option>AL</option><option>AK</option><option>AZ</option><option>AR</option><option label="CA" value="string:CA">CA</option><option label="CO" value="string:CO">CO</option><option label="CT" value="string:CT">CT</option><option label="DC" value="string:DC">DC</option><option label="DE" value="string:DE">DE</option><option label="FL" value="string:FL">FL</option><option label="GA" value="string:GA">GA</option><option label="HI" value="string:HI">HI</option><option label="ID" value="string:ID">ID</option><option label="IL" value="string:IL">IL</option><option label="IN" value="string:IN">IN</option><option label="IA" value="string:IA">IA</option><option label="KS" value="string:KS">KS</option><option label="KY" value="string:KY">KY</option><option label="LA" value="string:LA">LA</option><option label="ME" value="string:ME">ME</option><option label="MD" value="string:MD">MD</option><option label="MA" value="string:MA">MA</option><option label="MI" value="string:MI">MI</option><option label="MN" value="string:MN">MN</option><option label="MS" value="string:MS">MS</option><option label="MO" value="string:MO">MO</option><option label="MT" value="string:MT">MT</option><option label="NE" value="string:NE">NE</option><option label="NV" value="string:NV">NV</option><option label="NH" value="string:NH">NH</option><option label="NJ" value="string:NJ">NJ</option><option label="NM" value="string:NM">NM</option><option label="NY" value="string:NY">NY</option><option label="NC" value="string:NC">NC</option><option label="ND" value="string:ND">ND</option><option label="OH" value="string:OH">OH</option><option label="OK" value="string:OK">OK</option><option label="OR" value="string:OR">OR</option><option label="PA" value="string:PA">PA</option><option label="RI" value="string:RI">RI</option><option label="SC" value="string:SC">SC</option><option label="SD" value="string:SD">SD</option><option label="TN" value="string:TN">TN</option><option label="TX" value="string:TX">TX</option><option label="UT" value="string:UT">UT</option><option label="VT" value="string:VT">VT</option><option label="VA" value="string:VA">VA</option><option label="WA" value="string:WA">WA</option><option label="WV" value="string:WV">WV</option><option label="WI" value="string:WI">WI</option><option label="WY" value="string:WY">WY</option>
                            </select>
                        </div>

                    </div>

                    <div class="form_element full_width">
                        <label> &nbsp; </label>
                        <input data-index="2" class="continue" type="submit" value="BACK" />
                        <input data-index="4" class="continue" type="submit" name="submit" value="SAVE & CONTINUE" />
                    </div>
                </div>
            </div>

            <div id="tab4" class="tab hidden">
                <img src="<?php bloginfo('template_url'); ?>/img/form3.png" />
                <h1>Current Employer Information</h1>

                <h3><b class="my_name"></b> Employers</h3>

                <div class="repeat">
                    <table>
                        <tbody class="cei_rows_conteiner">
                        <tr>
                            <td><span class="emp_name">Company Name</span></td>
                            <td>$<span class="income_numb">0</span></td>
                            <td class="rem_emp"></td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div id="tab4_form">
                    <div class="form_left">
                        <div class="form_element">
                            <label for="email">Employment Type</label>
                            <select class="employment_type" name="Employment Type[]">
                                <option selected="selected" disabled="">Select One</option>
                                <option>Active Military Duty</option>
                                <option>Employed</option>
                                <option>Self Employed</option>
                                <option>Retired</option>
                                <option>Other/Unemployed</option>
                            </select>
                        </div>
                        <div class="form_element retirement-date hidden">
                            <label for="name">Retirement Date</label>
                            <input name="Em Retirement Date[]" />
                        </div>
                        <div class="form_element branch hidden">
                            <label for="email">Branch</label>
                            <select name="Em Branch[]" class="branch_select">
                                <option>Air Force</option>
                                <option>Army</option>
                                <option>Marines</option>
                                <option>Navy</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div class="form_element company-name">
                            <label for="name">Company Name</label>
                            <input name="Em Company Name[]" class="company_name_input" />
                        </div>
                        <div class="form_element rank hidden">
                            <label for="name">Rank</label>
                            <input name="Em Rank[]" />
                        </div>
                        <div class="form_element position">
                            <label for="name">Position</label>
                            <input name="Em Position[]" />
                        </div>
                        <div class="form_element business-phone">
                            <label for="name">Business Phone</label>
                            <input name="Em Business Phone[]" />
                        </div>
                        <div class="form_element type-of-business">
                            <label for="name">Type of business</label>
                            <input name="Em Type of business[]" />
                        </div>
                        <div class="form_element company-street">
                            <label for="name">Company Street</label>
                            <input name="Em Company Street[]" />
                        </div>
                        <div class="form_element time-period">
                            <label for="name">Time Period</label>
                            <input name="Em Time Period[]" placeholder="__/__/____   to  Current" />
                        </div>
                        <div class="form_element company-zip-state">
                            <label><span class="label_zip">Zip</span><span class="label_state">State</span></label>
                            <input class="half_width half_width_margin mr5" name="Em Zip[]" />
                            <select class="half_width" name="Em State[]">
                                <option value="" selected="selected" disabled="">State</option>
                                <option>AL</option><option>AK</option><option>AZ</option><option>AR</option><option label="CA" value="string:CA">CA</option><option label="CO" value="string:CO">CO</option><option label="CT" value="string:CT">CT</option><option label="DC" value="string:DC">DC</option><option label="DE" value="string:DE">DE</option><option label="FL" value="string:FL">FL</option><option label="GA" value="string:GA">GA</option><option label="HI" value="string:HI">HI</option><option label="ID" value="string:ID">ID</option><option label="IL" value="string:IL">IL</option><option label="IN" value="string:IN">IN</option><option label="IA" value="string:IA">IA</option><option label="KS" value="string:KS">KS</option><option label="KY" value="string:KY">KY</option><option label="LA" value="string:LA">LA</option><option label="ME" value="string:ME">ME</option><option label="MD" value="string:MD">MD</option><option label="MA" value="string:MA">MA</option><option label="MI" value="string:MI">MI</option><option label="MN" value="string:MN">MN</option><option label="MS" value="string:MS">MS</option><option label="MO" value="string:MO">MO</option><option label="MT" value="string:MT">MT</option><option label="NE" value="string:NE">NE</option><option label="NV" value="string:NV">NV</option><option label="NH" value="string:NH">NH</option><option label="NJ" value="string:NJ">NJ</option><option label="NM" value="string:NM">NM</option><option label="NY" value="string:NY">NY</option><option label="NC" value="string:NC">NC</option><option label="ND" value="string:ND">ND</option><option label="OH" value="string:OH">OH</option><option label="OK" value="string:OK">OK</option><option label="OR" value="string:OR">OR</option><option label="PA" value="string:PA">PA</option><option label="RI" value="string:RI">RI</option><option label="SC" value="string:SC">SC</option><option label="SD" value="string:SD">SD</option><option label="TN" value="string:TN">TN</option><option label="TX" value="string:TX">TX</option><option label="UT" value="string:UT">UT</option><option label="VT" value="string:VT">VT</option><option label="VA" value="string:VA">VA</option><option label="WA" value="string:WA">WA</option><option label="WV" value="string:WV">WV</option><option label="WI" value="string:WI">WI</option><option label="WY" value="string:WY">WY</option>
                            </select>
                        </div>
                        <div class="form_element years-in-same-field">
                            <label for="name">Years in same field</label>
                            <input placeholder="optional" name="Em Years in same field[]" value="" />
                        </div>
                        <div class="form_element company-city">
                            <label for="name">Company City</label>
                            <input name="Em Company City[]" />
                        </div>
                        <div class="form_element total-income">
                            <label>Total Income</label>
                            <input name="Em Total Income[]" class="half_width half_width_margin mr5 total_income_input" />
                            <select class="half_width total_income_period" name="Total Income Type[]">
                                <option value="mo" selected="selected">Monthly</option>
                                <option value="yr">Annual</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form_left">
                    <div class="form_element full_width" id="add_btn">
                        <label> &nbsp; </label>
                        <input type="text" id="btnadd" value="+ Add a Current Employer" style="text-align: center; cursor: pointer;" />
                    </div>
                    <div class="form_element full_width">
                        <label> &nbsp; </label>
                        <input data-index="3" class="continue" type="submit" value="BACK" />
                        <input data-index="5" class="continue" type="submit" name="submit" value="SAVE & CONTINUE" />
                    </div>
                </div>
            </div>

            <div id="tab5" class="tab hidden">
                <img src="<?php bloginfo('template_url'); ?>/img/form3.png" />
                <h1>Current Employer Information</h1>

                <h3><b class="cb_name"></b> Employers</h3>

                <div class="repeat">
                    <table>
                        <tbody class="cei_rows_conteiner_cb">
                        <tr>
                            <td><span class="emp_name">Company Name</span></td>
                            <td>$<span class="income_numb">0</span></td>
                            <td class="rem_emp_cb"></td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div id="tab5_form">
                    <div class="form_left">
                        <div class="form_element">
                            <label for="email">Employment Type</label>
                            <select class="employment_type" name="Employment Type[]">
                                <option selected="selected" disabled="">Select One</option>
                                <option>Active Military Duty</option>
                                <option>Employed</option>
                                <option>Self Employed</option>
                                <option>Retired</option>
                                <option>Other/Unemployed</option>
                            </select>
                        </div>
                        <div class="form_element retirement-date hidden">
                            <label for="name">Retirement Date</label>
                            <input name="Em Retirement Date[]" />
                        </div>
                        <div class="form_element branch hidden">
                            <label for="email">Branch</label>
                            <select name="Em Branch[]" class="branch_select">
                                <option>Air Force</option>
                                <option>Army</option>
                                <option>Marines</option>
                                <option>Navy</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div class="form_element company-name">
                            <label for="name">Company Name</label>
                            <input name="Em Company Name[]" class="company_name_input" />
                        </div>
                        <div class="form_element rank hidden">
                            <label for="name">Rank</label>
                            <input name="Em Rank[]" />
                        </div>
                        <div class="form_element position">
                            <label for="name">Position</label>
                            <input name="Em Position[]" />
                        </div>
                        <div class="form_element business-phone">
                            <label for="name">Business Phone</label>
                            <input name="Em Business Phone[]" />
                        </div>
                        <div class="form_element type-of-business">
                            <label for="name">Type of business</label>
                            <input name="Em Type of business[]" />
                        </div>
                        <div class="form_element company-street">
                            <label for="name">Company Street</label>
                            <input name="Em Company Street[]" />
                        </div>
                        <div class="form_element time-period">
                            <label for="name">Time Period</label>
                            <input name="Em Time Period[]" placeholder="__/__/____   to  Current" />
                        </div>
                        <div class="form_element company-zip-state">
                            <label><span class="label_zip">Zip</span><span class="label_state">State</span></label>
                            <input class="half_width half_width_margin mr5" name="Em Zip[]" />
                            <select class="half_width" name="Em State[]">
                                <option value="" selected="selected" disabled="">State</option>
                                <option>AL</option><option>AK</option><option>AZ</option><option>AR</option><option label="CA" value="string:CA">CA</option><option label="CO" value="string:CO">CO</option><option label="CT" value="string:CT">CT</option><option label="DC" value="string:DC">DC</option><option label="DE" value="string:DE">DE</option><option label="FL" value="string:FL">FL</option><option label="GA" value="string:GA">GA</option><option label="HI" value="string:HI">HI</option><option label="ID" value="string:ID">ID</option><option label="IL" value="string:IL">IL</option><option label="IN" value="string:IN">IN</option><option label="IA" value="string:IA">IA</option><option label="KS" value="string:KS">KS</option><option label="KY" value="string:KY">KY</option><option label="LA" value="string:LA">LA</option><option label="ME" value="string:ME">ME</option><option label="MD" value="string:MD">MD</option><option label="MA" value="string:MA">MA</option><option label="MI" value="string:MI">MI</option><option label="MN" value="string:MN">MN</option><option label="MS" value="string:MS">MS</option><option label="MO" value="string:MO">MO</option><option label="MT" value="string:MT">MT</option><option label="NE" value="string:NE">NE</option><option label="NV" value="string:NV">NV</option><option label="NH" value="string:NH">NH</option><option label="NJ" value="string:NJ">NJ</option><option label="NM" value="string:NM">NM</option><option label="NY" value="string:NY">NY</option><option label="NC" value="string:NC">NC</option><option label="ND" value="string:ND">ND</option><option label="OH" value="string:OH">OH</option><option label="OK" value="string:OK">OK</option><option label="OR" value="string:OR">OR</option><option label="PA" value="string:PA">PA</option><option label="RI" value="string:RI">RI</option><option label="SC" value="string:SC">SC</option><option label="SD" value="string:SD">SD</option><option label="TN" value="string:TN">TN</option><option label="TX" value="string:TX">TX</option><option label="UT" value="string:UT">UT</option><option label="VT" value="string:VT">VT</option><option label="VA" value="string:VA">VA</option><option label="WA" value="string:WA">WA</option><option label="WV" value="string:WV">WV</option><option label="WI" value="string:WI">WI</option><option label="WY" value="string:WY">WY</option>
                            </select>
                        </div>
                        <div class="form_element years-in-same-field">
                            <label for="name">Years in same field</label>
                            <input placeholder="optional" name="Em Years in same field[]" value="" />
                        </div>
                        <div class="form_element company-city">
                            <label for="name">Company City</label>
                            <input name="Em Company City[]" />
                        </div>
                        <div class="form_element total-income">
                            <label>Total Income</label>
                            <input name="Em Total Income[]" class="half_width half_width_margin mr5 total_income_input" />
                            <select class="half_width total_income_period" name="Total Income Type[]">
                                <option value="mo" selected="selected">Monthly</option>
                                <option value="yr">Annual</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form_left">
                    <div class="form_element full_width" id="add_btn">
                        <label> &nbsp; </label>
                        <input type="text" id="btnadd_cb" value="+ Add a Current Employer" style="text-align: center; cursor: pointer;" />
                    </div>
                    <div class="form_element full_width">
                        <label> &nbsp; </label>
                        <input data-index="4" class="continue" type="submit" value="BACK" />
                        <input data-index="6" class="continue" type="submit" name="submit" value="SAVE & CONTINUE" />
                    </div>
                </div>
            </div>

            <div id="tab6" class="tab hidden">
                <img src="<?php bloginfo('template_url'); ?>/img/form4.png" />
                <h1>Do you receive any other type of income?</h1>

                <div class="repeat">
                    <table>
                        <tbody class="oei_rows_conteiner">
                        </tbody>
                    </table>
                </div>

                <div id="tab6_form"></div>

                <div class="form_left">

                    <div class="form_element full_width" id="add_btn">
                        <label> &nbsp; </label>
                        <input type="text" id="btnadd_oi" value="+ Add more Other Income" style="text-align: center;cursor: pointer;" />
                    </div>

                    <div class="form_element full_width">
                        <label> &nbsp; </label>
                        <input data-index="5" class="continue" type="submit" value="BACK" />
                        <input data-index="7" class="continue" type="submit" name="submit" value="SAVE & CONTINUE" />
                    </div>
                </div>

            </div>

            <div id="tab7" class="tab hidden">
                <img src="<?php bloginfo('template_url'); ?>/img/form4.png" />
                <h1>You're nearly to the finish line.</h1>
                <div class=" full_width gray">
                    We just have a few questions the government requires us to ask.
                </div>

                <div class="form_left">

                    <h3><b class="my_name"></b></h3>

                    <div class="info-block">
                        <input class="do_not_want_all_chkb" type="checkbox" name="Borrower" />
                        <label class="form_element_label"> I do not wish to furnish this information </label>
                    </div>

                    <div class="info-block-inner do_not_want_all">
                        <div class="info-block-inner-left">
                            <div class="info-block-inner-title">
                                <p>What is your race? asd</p>
                            </div>
                            <div class="info-block-inner-left">
                                <div class="info-checkbox">
                                    <input type="checkbox" class="do_not_want_left_chkb" id="furnish">
                                    <label for="furnish">I do not wish to furnish this information</label>
                                </div>
                                <div class="do_not_want_left">
                                    <div class="info-checkbox">
                                        <input type="radio" id="aian" name="What is your race" value="American Indian or Alaska Native">
                                        <label for="aian">American Indian or Alaska Native</label>
                                    </div>
                                    <div class="info-checkbox">
                                        <input type="radio" id="asianrace" name="What is your race" value="Asian">
                                        <label for="asianrace">Asian</label>
                                    </div>
                                    <div class="info-checkbox">
                                        <input type="radio" id="americanrace" name="What is your race" value="Black or African American">
                                        <label for="americanrace">Black or African American</label>
                                    </div>
                                    <div class="info-checkbox">
                                        <input type="radio" id="nativerace" name="What is your race" value="Native Hawaiian or Other Pacific Islander">
                                        <label for="nativerace" >Native Hawaiian or Other Pacific Islander</label>
                                    </div>
                                    <div class="info-checkbox">
                                        <input type="radio" id="whiterace" name="What is your race" value="White">
                                        <label for="whiterace">White</label>
                                    </div>
                                    <div class="info-checkbox">
                                        <input type="radio" id="notapplicable" name="What is your race" value="Not Applicable">
                                        <label for="notapplicable">Not Applicable</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="info-block-inner-right">
                            <div class="info-block-inner-right-top">
                                <div class="info-block-inner-title">
                                    <p>What is your ethnicity?</p>
                                </div>
                                <div class="info-checkbox">
                                    <input type="checkbox" class="do_not_want_right_chkb">
                                    <label for="">I do not wish to furnish this information</label>
                                </div>
                                <div class="do_not_want_right">
                                    <div class="info-radio">
                                        <input type="radio" id="hl" name="What is your ethnicity" value="Hispanic or Latino">
                                        <label for="hl">Hispanic or Latino</label>
                                    </div>
                                    <div class="info-radio">
                                        <input type="radio" id="nhl"  name="What is your ethnicity" value="Not Hispanic or Latino">
                                        <label for="nhl">Not Hispanic or Latino</label>
                                    </div>
                                    <div class="info-radio">
                                        <input type="radio" id="noprovideinfo"  name="What is your ethnicity" value="I do not wish to provide this information">
                                        <label for="noprovideinfo">I do not wish to provide this information</label>
                                    </div>
                                </div>

                                <div class="info-block-inner-title">
                                    <p>What is your gender?</p>
                                </div>
                                <div class="info-checkbox">
                                    <input type="checkbox" class="do_not_want_right2_chkb">
                                    <label for="">I do not wish to furnish this information</label>
                                </div>

                                <div class="do_not_want_right2">
                                    <div class="info-radio">
                                        <input type="radio" id="gendermale" name="What is your gender" value="Male">
                                        <label for="gendermale">Male</label>
                                    </div>
                                    <div class="info-radio">
                                        <input type="radio" id="genderfemale" name="What is your gender" value="Female">
                                        <label for="genderfemale">Female</label>
                                    </div>
                                    <div class="info-radio">
                                        <input type="radio" id="infonotprovide" name="What is your gender" value="I do not wish to provide this information">
                                        <label for="infonotprovide">I do not wish to provide this information</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clear-both"></div>
                    </div>

                    <div class="form_element full_width">
                        <label> &nbsp; </label>
                        <input data-index="6" class="continue" type="submit" value="BACK" />
                        <input data-index="8" class="continue" type="submit" name="submit" value="SAVE & CONTINUE" />
                    </div>
                </div>
            </div>

            <div id="tab8" class="tab hidden">
                <img src="<?php bloginfo('template_url'); ?>/img/form4.png" />
                <h1>You're nearly to the finish line.</h1>
                <div class=" full_width gray">
                    We just have a few questions the government requires us to ask.
                </div>

                <div class="form_left">

                    <h3><b class="cb_name"></b></h3>

                    <div class="info-block">
                        <input class="do_not_want_all_chkb" type="checkbox" name="Borrower" />
                        <label class="form_element_label"> I do not wish to furnish this information </label>
                    </div>

                    <div class="info-block-inner do_not_want_all">
                        <div class="info-block-inner-left">
                            <div class="info-block-inner-title">
                                <p>What is your race? asd</p>
                            </div>
                            <div class="info-block-inner-left">
                                <div class="info-checkbox">
                                    <input type="checkbox" class="do_not_want_left_chkb" id="furnish">
                                    <label for="furnish">I do not wish to furnish this information</label>
                                </div>
                                <div class="do_not_want_left">
                                    <div class="info-checkbox">
                                        <input type="radio" id="aian" name="What is your race" value="American Indian or Alaska Native">
                                        <label for="aian">American Indian or Alaska Native</label>
                                    </div>
                                    <div class="info-checkbox">
                                        <input type="radio" id="asianrace" name="What is your race" value="Asian">
                                        <label for="asianrace">Asian</label>
                                    </div>
                                    <div class="info-checkbox">
                                        <input type="radio" id="americanrace" name="What is your race" value="Black or African American">
                                        <label for="americanrace">Black or African American</label>
                                    </div>
                                    <div class="info-checkbox">
                                        <input type="radio" id="nativerace" name="What is your race" value="Native Hawaiian or Other Pacific Islander">
                                        <label for="nativerace" >Native Hawaiian or Other Pacific Islander</label>
                                    </div>
                                    <div class="info-checkbox">
                                        <input type="radio" id="whiterace" name="What is your race" value="White">
                                        <label for="whiterace">White</label>
                                    </div>
                                    <div class="info-checkbox">
                                        <input type="radio" id="notapplicable" name="What is your race" value="Not Applicable">
                                        <label for="notapplicable">Not Applicable</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="info-block-inner-right">
                            <div class="info-block-inner-right-top">
                                <div class="info-block-inner-title">
                                    <p>What is your ethnicity?</p>
                                </div>
                                <div class="info-checkbox">
                                    <input type="checkbox" class="do_not_want_right_chkb">
                                    <label for="">I do not wish to furnish this information</label>
                                </div>
                                <div class="do_not_want_right">
                                    <div class="info-radio">
                                        <input type="radio" id="hl" name="What is your ethnicity" value="Hispanic or Latino">
                                        <label for="hl">Hispanic or Latino</label>
                                    </div>
                                    <div class="info-radio">
                                        <input type="radio" id="nhl"  name="What is your ethnicity" value="Not Hispanic or Latino">
                                        <label for="nhl">Not Hispanic or Latino</label>
                                    </div>
                                    <div class="info-radio">
                                        <input type="radio" id="noprovideinfo"  name="What is your ethnicity" value="I do not wish to provide this information">
                                        <label for="noprovideinfo">I do not wish to provide this information</label>
                                    </div>
                                </div>

                                <div class="info-block-inner-title">
                                    <p>What is your gender?</p>
                                </div>
                                <div class="info-checkbox">
                                    <input type="checkbox" class="do_not_want_right2_chkb">
                                    <label for="">I do not wish to furnish this information</label>
                                </div>

                                <div class="do_not_want_right2">
                                    <div class="info-radio">
                                        <input type="radio" id="gendermale" name="What is your gender" value="Male">
                                        <label for="gendermale">Male</label>
                                    </div>
                                    <div class="info-radio">
                                        <input type="radio" id="genderfemale" name="What is your gender" value="Female">
                                        <label for="genderfemale">Female</label>
                                    </div>
                                    <div class="info-radio">
                                        <input type="radio" id="infonotprovide" name="What is your gender" value="I do not wish to provide this information">
                                        <label for="infonotprovide">I do not wish to provide this information</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clear-both"></div>
                    </div>

                    <div class="form_element full_width">
                        <label> &nbsp; </label>
                        <input data-index="7" class="continue" type="submit" value="BACK" />
                        <input data-index="9" class="continue" type="submit" name="submit" value="SAVE & CONTINUE" />
                    </div>
                </div>
            </div>

            <div id="tab9" class="tab hidden">
                <img src="<?php bloginfo('template_url'); ?>/img/form5.png" />
                <h1>Declarations</h1>
                <div class="full_width gray">
                    We just have a few questions the government requires us to ask.
                </div>

                <div class="form_left">

                    <div class="form_element full_width" id="declarations_list">
                        <label>a. Are there any outstanding judgments against you?</label>
                        <div>
                            <span class="declarations"><b class="my_name"></b></span>
                            <input type="radio" name="Are there any outstanding judgments against you" value="Yes" />
                            <span>Yes</span>
                            <input type="radio" name="Are there any outstanding judgments against you" value="No" />
                            <span>No</span>
                        </div>
                        <div class="cb_tab9 hidden">
                            <span class="declarations"><b class="cb_name"></b></span>
                            <input type="radio" name="CB Are there any outstanding judgments against you" value="Yes" />
                            <span>Yes</span>
                            <input type="radio" name="CB Are there any outstanding judgments against you" value="No" />
                            <span>No</span>
                        </div>
                    </div>
                    <div class="form_element full_width" id="declarations_list">
                        <label>b. Have you been declared bankrupt within the past 7 years?</label>
                        <div>
                            <span class="declarations"><b class="my_name"></b></span>
                            <input type="radio" name="Have you been declared bankrupt within the past 7 years" value="Yes" />
                            <span>Yes</span>
                            <input type="radio" name="Have you been declared bankrupt within the past 7 years" value="No" />
                            <span>No</span>
                        </div>
                        <div class="cb_tab9 hidden">
                            <span class="declarations"><b class="cb_name"></b></span>
                            <input type="radio" name="CB Have you been declared bankrupt within the past 7 years" value="Yes" />
                            <span>Yes</span>
                            <input type="radio" name="CB Have you been declared bankrupt within the past 7 years" value="No" />
                            <span>No</span>
                        </div>
                    </div>
                    <div class="form_element full_width" id="declarations_list">
                        <label>c. Have you had property foreclosed upon or given title or deed in lieu thereof in the last 7 years?</label>
                        <div>
                            <span class="declarations"><b class="my_name"></b></span>
                            <input type="radio" name="Have you had property foreclosed upon or given title or deed in lieu thereof in the last 7 years" value="Yes" />
                            <span>Yes</span>
                            <input type="radio" name="Have you had property foreclosed upon or given title or deed in lieu thereof in the last 7 years" value="No" />
                            <span>No</span>
                        </div>
                        <div class="cb_tab9 hidden">
                            <span class="declarations"><b class="cb_name"></b></span>
                            <input type="radio" name="CB Have you had property foreclosed upon or given title or deed in lieu thereof in the last 7 years" value="Yes" />
                            <span>Yes</span>
                            <input type="radio" name="CB Have you had property foreclosed upon or given title or deed in lieu thereof in the last 7 years" value="No" />
                            <span>No</span>
                        </div>
                    </div>
                    <div class="form_element full_width" id="declarations_list">
                        <label>d. Are you a party to a lawsuit?</label>
                        <div>
                            <span class="declarations"><b class="my_name"></b></span>
                            <input type="radio" name="Are you a party to a lawsuit" value="Yes" />
                            <span>Yes</span>
                            <input type="radio" name="Are you a party to a lawsuit" value="No" />
                            <span>No</span>
                        </div>
                        <div class="cb_tab9 hidden">
                            <span class="declarations"><b class="cb_name"></b></span>
                            <input type="radio" name="CB Are you a party to a lawsuit" value="Yes" />
                            <span>Yes</span>
                            <input type="radio" name="CB Are you a party to a lawsuit" value="No" />
                            <span>No</span>
                        </div>
                    </div>
                    <div class="form_element full_width" id="declarations_list">
                        <label>e. Have you directly or indirectly been obligated on any loan which resulted in foreclosure, transfer in title in lieu of foreclosure, or judgment?</label>
                        <div>
                            <span class="declarations"><b class="my_name"></b></span>
                            <input type="radio" name="Have you directly or indirectly been obligated on any loan which resulted in foreclosure, transfer in title in lieu of foreclosure, or judgment" value="Yes" />
                            <span>Yes</span>
                            <input type="radio" name="Have you directly or indirectly been obligated on any loan which resulted in foreclosure, transfer in title in lieu of foreclosure, or judgment" value="No" />
                            <span>No</span>
                        </div>
                        <div class="cb_tab9 hidden">
                            <span class="declarations"><b class="cb_name"></b></span>
                            <input type="radio" name="CB Have you directly or indirectly been obligated on any loan which resulted in foreclosure, transfer in title in lieu of foreclosure, or judgment" value="Yes" />
                            <span>Yes</span>
                            <input type="radio" name="CB Have you directly or indirectly been obligated on any loan which resulted in foreclosure, transfer in title in lieu of foreclosure, or judgment" value="No" />
                            <span>No</span>
                        </div>
                    </div>
                    <div class="form_element full_width" id="declarations_list">
                        <label>f. Are you presently delinquent or in default on any Federal debt or any other loan, mortgage, financial obligation, bond, or loan guarantee?</label>
                        <div>
                            <span class="declarations"><b class="my_name"></b></span>
                            <input type="radio" name="Are you presently delinquent or in default on any Federal debt or any other loan, mortgage, financial obligation, bond, or loan guarantee" value="Yes" />
                            <span>Yes</span>
                            <input type="radio" name="Are you presently delinquent or in default on any Federal debt or any other loan, mortgage, financial obligation, bond, or loan guarantee" value="No" />
                            <span>No</span>
                        </div>
                        <div class="cb_tab9 hidden">
                            <span class="declarations"><b class="cb_name"></b></span>
                            <input type="radio" name="CB Are you presently delinquent or in default on any Federal debt or any other loan, mortgage, financial obligation, bond, or loan guarantee" value="Yes" />
                            <span>Yes</span>
                            <input type="radio" name="CB Are you presently delinquent or in default on any Federal debt or any other loan, mortgage, financial obligation, bond, or loan guarantee" value="No" />
                            <span>No</span>
                        </div>
                    </div>
                    <div class="form_element full_width" id="declarations_list">
                        <label>g. Are you obligated to pay alimony, child support, or separate maintenance?</label>
                        <div>
                            <span class="declarations"><b class="my_name"></b></span>
                            <input type="radio" name="Are you obligated to pay alimony, child support, or separate maintenance" value="Yes" />
                            <span>Yes</span>
                            <input type="radio" name="Are you obligated to pay alimony, child support, or separate maintenance" value="No" />
                            <span>No</span>
                        </div>
                        <div class="cb_tab9 hidden">
                            <span class="declarations"><b class="cb_name"></b></span>
                            <input type="radio" name="CB Are you obligated to pay alimony, child support, or separate maintenance" value="Yes" />
                            <span>Yes</span>
                            <input type="radio" name="CB Are you obligated to pay alimony, child support, or separate maintenance" value="No" />
                            <span>No</span>
                        </div>
                    </div>
                    <div class="form_element full_width" id="declarations_list">
                        <label>h. Is any part of the down payment borrowed?</label>
                        <div>
                            <span class="declarations"><b class="my_name"></b></span>
                            <input type="radio" name="Is any part of the down payment borrowed" value="Yes" />
                            <span>Yes</span>
                            <input type="radio" name="Is any part of the down payment borrowed" value="No" />
                            <span>No</span>
                        </div>
                        <div class="cb_tab9 hidden">
                            <span class="declarations"><b class="cb_name"></b></span>
                            <input type="radio" name="CB Is any part of the down payment borrowed" value="Yes" />
                            <span>Yes</span>
                            <input type="radio" name="CB Is any part of the down payment borrowed" value="No" />
                            <span>No</span>
                        </div>
                    </div>
                    <div class="form_element full_width" id="declarations_list">
                        <label>i. Are you a co-maker or endorser on a note?</label>
                        <div>
                            <span class="declarations"><b class="my_name"></b></span>
                            <input type="radio" name="Are you a co-maker or endorser on a note" value="Yes" />
                            <span>Yes</span>
                            <input type="radio" name="Are you a co-maker or endorser on a note" value="No" />
                            <span>No</span>
                        </div>
                        <div class="cb_tab9 hidden">
                            <span class="declarations"><b class="cb_name"></b></span>
                            <input type="radio" name="CB Are you a co-maker or endorser on a note" value="Yes" />
                            <span>Yes</span>
                            <input type="radio" name="CB Are you a co-maker or endorser on a note" value="No" />
                            <span>No</span>
                        </div>
                    </div>
                    <div class="form_element full_width"  id="declarations_list">
                        <label>j. Are you a U.S. Citizen?</label>
                        <div>
                            <span class="declarations"><b class="my_name"></b></span>
                            <input type="radio" name="Are you a U.S. Citizen" value="Yes" />
                            <span>Yes</span>
                            <input type="radio" name="Are you a U.S. Citizen" value="No" />
                            <span>No</span>
                        </div>
                        <div class="cb_tab9 hidden">
                            <span class="declarations"><b class="cb_name"></b></span>
                            <input type="radio" name="CB Are you a U.S. Citizen" value="Yes" />
                            <span>Yes</span>
                            <input type="radio" name="CB Are you a U.S. Citizen" value="No" />
                            <span>No</span>
                        </div>
                    </div>
                    <div class="form_element full_width"  id="declarations_list">
                        <label>k. Are you a permanent Resident Alien?</label>
                        <div>
                            <span class="declarations"><b class="my_name"></b></span>
                            <input type="radio" name="Are you a permanent Resident Alien" value="Yes" />
                            <span>Yes</span>
                            <input type="radio" name="Are you a permanent Resident Alien" value="No" />
                            <span>No</span>
                        </div>
                        <div class="cb_tab9 hidden">
                            <span class="declarations"><b class="cb_name"></b></span>
                            <input type="radio" name="CB Are you a permanent Resident Alien" value="Yes" />
                            <span>Yes</span>
                            <input type="radio" name="CB Are you a permanent Resident Alien" value="No" />
                            <span>No</span>
                        </div>
                    </div>
                    <div class="form_element full_width"  id="declarations_list">
                        <label>l. Do you intend to occupy the property as your Primary Residence?</label>
                        <div>
                            <span class="declarations"><b class="my_name"></b></span>
                            <input type="radio" name="Do you intend to occupy the property as your Primary Residence" value="Yes" />
                            <span>Yes</span>
                            <input type="radio" name="Do you intend to occupy the property as your Primary Residence" value="No" />
                            <span>No</span>
                        </div>
                        <div class="cb_tab9 hidden">
                            <span class="declarations"><b class="cb_name"></b></span>
                            <input type="radio" name="CB Do you intend to occupy the property as your Primary Residence" value="Yes" />
                            <span>Yes</span>
                            <input type="radio" name="CB Do you intend to occupy the property as your Primary Residence" value="No" />
                            <span>No</span>
                        </div>
                    </div>
                    <div class="form_element full_width"  id="declarations_list">
                        <label>m. Have you had an ownership interest in a property in the last three years?</label>
                        <div>
                            <span class="declarations"><b class="my_name"></b></span>
                            <input type="radio" name="Have you had an ownership interest in a property in the last three years" value="Yes" />
                            <span>Yes</span>
                            <input type="radio" name="Have you had an ownership interest in a property in the last three years" value="No" />
                            <span>No</span>
                        </div>
                        <div class="cb_tab9 hidden">
                            <span class="declarations"><b class="cb_name"></b></span>
                            <input type="radio" name="CB Have you had an ownership interest in a property in the last three years" value="Yes" />
                            <span>Yes</span>
                            <input type="radio" name="CB Have you had an ownership interest in a property in the last three years" value="No" />
                            <span>No</span>
                        </div>
                    </div>
                    <div class="form_element full_width"  id="declarations_list">
                        <label>n. What type of property did you own?</label>
                        <div>
                            <span class="declarations" id="declarations-txt"><b class="my_name"></b></span>
                            <select name="Own_or_Rent" id="declarations-select">
                                <option value="" selected="selected" disabled="">Select One</option>
                                <option>Primary Residence</option>
                                <option>Second Home</option>
                                <option>Investment Property</option>
                            </select>
                        </div>
                        <div class="cb_tab9 hidden">
                            <span class="declarations" id="declarations-txt"><b class="cb_name"></b></span>
                            <select name="Own_or_Rent" id="declarations-select">
                                <option value="" selected="selected" disabled="">Select One</option>
                                <option>Primary Residence</option>
                                <option>Second Home</option>
                                <option>Investment Property</option>
                            </select>
                        </div>
                    </div>
                    <div class="form_element full_width"  id="declarations_list">
                        <label>o. How did you hold title to the home?</label>
                        <div>
                            <span class="declarations" id="declarations-txt"><b class="my_name"></b></span>
                            <select name="Own_or_Rent" id="declarations-select">
                                <option value="" selected="selected" disabled="">Select One</option>
                                <option>Solely by yourself</option>
                                <option>Jointly with your spouse</option>
                                <option>Jointly with another person</option>
                            </select>
                        </div>
                        <div class="cb_tab9 hidden">
                            <span class="declarations" id="declarations-txt"><b class="cb_name"></b></span>
                            <select name="Own_or_Rent" id="declarations-select">
                                <option value="" selected="selected" disabled="">Select One</option>
                                <option>Solely by yourself</option>
                                <option>Jointly with your spouse</option>
                                <option>Jointly with another person</option>
                            </select>
                        </div>
                    </div>

                    <div class="form_element full_width">
                        <label> &nbsp; </label>
                        <input data-index="8" class="continue" type="submit" value="BACK" />
                        <input data-index="10" class="continue" type="submit" name="submit" value="SAVE & CONTINUE" />
                    </div>
                </div>
            </div>

            <div id="tab10" class="tab hidden">

                <h1>Summary</h1>

                <img src="<?php bloginfo('template_url'); ?>/img/form5.png" />


                <div class="form_left">

                    <div class="form_element full_width" id="declarations_list">
                    </div>


                    <div class="form_element full_width" id="declarations_list">
                        Personal Information
                        <a href="javascript: void(0);" class="goto" data-tab="1">Check / Edit</a>
                    </div>

                    <div class="form_element full_width" id="declarations_list">
                        Property Information
                        <a href="javascript: void(0);" class="goto" data-tab="2">Check / Edit</a>
                    </div>

                    <div class="form_element full_width" id="declarations_list">
                        Address Information
                        <a href="javascript: void(0);" class="goto" data-tab="3">Check / Edit</a>
                    </div>

                    <div class="form_element full_width" id="declarations_list">
                        Employers Information
                        <a href="javascript: void(0);" class="goto" data-tab="4">Check / Edit</a>
                    </div>

                    <div class="form_element full_width" id="declarations_list">
                        Other Income Information
                        <a href="javascript: void(0);" class="goto" data-tab="6">Check / Edit</a>
                    </div>

                    <div class="form_element full_width" id="declarations_list">
                        Questions the Government Requires Us to Ask
                        <a href="javascript: void(0);" class="goto" data-tab="7">Check / Edit</a>
                    </div>

                    <div class="form_element full_width" id="declarations_list">
                        Declarations
                        <a href="javascript: void(0);" class="goto" data-tab="9">Check / Edit</a>
                    </div>

                    <div class="form_element full_width">
                        <label> &nbsp; </label>
                        <input data-index="9" class="continue" type="submit" value="BACK" />
                        <input data-index="11" class="continue" type="submit" name="submit" value="SAVE & CONTINUE" />
                    </div>
                </div>
            </div>

            <div id="tab11" class="tab hidden">

                <img src="<?php bloginfo('template_url'); ?>/img/form5.png" />
                <!--<h1>You're minutes away from your 3 FREE Credit Scores.</h1>-->
                <div class=" full_width gray">
                    eConsent Terms
                </div>
                <div class=" full_width gray">
                    Providing eConsent will allow us to send you documents electronically.
                </div>

                <div class="form_left">
                    <div class="form_element full_width gray">
                        <strong>eConsent Terms</strong>
                    </div>
                    <div class="econsent-terms-txt">
                        E-SIGN CONSENT TO USE ELECTRONIC RECORDS AND SIGNATURES We prefer to do business with you electronically. If you would prefer, we can still assist you with your home loan in person, through the mail, or over the phone. Before we continue with this transaction electronically, it is important to us that you understand your rights and responsibilities. Please read the following and, if you wish, affirm your consent to conduct business with us electronically. For purposes of this Disclosure, “you” and “your” mean the borrower(s) in this home loan transaction and “we”, “our” and “us” mean Bridge Capital Home Loans, a Division of Bridge Capital Inc.  Scope of Communications to Be Provided in Electronic Form We may provide you with many communications and disclosures about your home loan transaction (“Communications”) electronically, instead of in writing (i.e., rather than paper which we mail or give you face-to-face). Your consent to receive electronic Communications includes, but is not limited to: Your Uniform Residential Loan Application (Form 1003); All legal and regulatory disclosures, such as your Loan Estimate, Privacy policies and notices; and, Communications associated with your home loan transaction. Your consent will only apply to delivery of Communications during the processing of this home loan transaction. Your consent does not apply to monthly statements or other disclosures related to the servicing of your home after it closes. Your consent also does not apply to other home loans or financial services that you may obtain from us in the future. Methods of Electronic Delivery of Communications to You We will deliver all Communications by e-mail, on this web site, on another web site that we designate after notifying you of the web site’s URL by e-mail, or by fax to a fax number that you designate. Hardware and Software Requirements In order to access, view, and retain your Communications, you must have: An e-mail account with an Internet service provider capable of sending and receiving e-mail with hyperlinks to web sites; A personal computer (for PCs: Pentium 120 Hhz or higher; for Macintosh, Power Mac 9500, Power PC 604 processor 120-MHz Base or higher), operating system and telecommunications connections to the Internet capable of receiving, accessing, displaying, and either printing or storing Communications; Adobe Reader version 8.0 or higher; Windows 2000 or later version running either Internet Explorer version 6.0 or higher or Firefox version 3.0 or higher, or Macintosh OSX 10.2 or higher running Safari web browser; and, Sufficient electronic storage capacity on your computer’s hard drive or other data storage unit or a printer to print a copy of your disclosures. Documents may be provided in Hypertext Markup Language (HTML) or Portable Document Format (PDF) or other compatible formats. If you do not have the ability to access and retain both PDF and HTML documents, do not consent to electronic delivery. By consenting, you confirm that your personal computer is equipped with the Adobe Acrobat Reader. If software or hardware requirements change and you are no longer able to access Communications electronically as a result, you must notify us. Once you do so, we will then send you paper copies of future Communications by mail. We will use commercially reasonable efforts to notify you before such requirements change. Updating Us on Your Contact Information You must promptly notify us if your email address or other contact information changes. We will not assume any liability for non-receipt of Communications resulting from you failing to notify us of such changes, providing us an invalid email address, failing to set your email or Internet service provider filters so that our emails are not treated as “spam” or “junk mail,” or malfunctioning of your computer, browser, Internet service and/or software, or other reasons beyond our control. Withdrawing Your Consent We will continue to deliver Communications about your home loan transaction electronically unless and until you withdraw your consent as described below. You have the right to withdraw your consent at any time. If you decide to withdraw your consent, you can do so by clicking on “I Decline” on the “My Profile” page or by contacting us at (818)616-7900. After you withdraw your consent in this manner, we will provide you all future Communications in writing (i.e., on paper which we mail or give you face-to-face). There is no cost for withdrawing your consent. Requesting Paper Copies We will not send you a paper copy of any Communication unless you request it. You can get a paper copy of any electronic Communication by asking us to mail it to you. You must make such a request within a reasonable time after we first provide the electronic Communication to you. To request a paper copy, call us at (818)616-7900 or write to us at: Bridge Capital Home Loans 221 E Glenoaks Blvd. Ste 225A. Glendale CA 91207. We will not charge you for requesting paper copies of any electronic Communications. Change to Paper We reserve the right to provide paper instead of electronic Communications in the future. We will notify you of our decision to do so if required by law.
                    </div>

                    <div class="form_element full_width gray">
                        <strong>eConsent for</strong>
                    </div>

                    <div class="form_element full_width gray">
                        <span>name last name</span>
                    </div>

                    <div class="info-checkbox econsent-terms-checkbox">
                        <input type="checkbox">
                        <label for="">I agree to the terms above and to continue my home loan application online</label>
                    </div>
                    <div class="info-checkbox econsent-terms-checkbox">
                        <input type="checkbox">
                        <label for="">I decline the terms above and would like to complete my home loan application offline (a loan officer will contact you)</label>
                    </div>

                    <div class="form_element full_width">
                        <label> &nbsp; </label>
                        <input type="hidden" name="Subject" value="Refinance From Submited" />
                        <input data-index="9" class="continue" type="submit" value="BACK" />
                        <input type="submit" name="submit" value="SUBMIT" />
                    </div>
                </div>
            </div>

        </form>

    </div>

    <div id="cei_toclone" class="hidden">
        <div class="form_left">
            <div class="form_element">
                <label for="email">Employment Type</label>
                <select class="employment_type" name="Employment Type[]">
                    <option selected="selected" disabled="">Select One</option>
                    <option>Active Military Duty</option>
                    <option>Employed</option>
                    <option>Self Employed</option>
                    <option>Retired</option>
                    <option>Other/Unemployed</option>
                </select>
            </div>
            <div class="form_element retirement-date hidden">
                <label for="name">Retirement Date</label>
                <input name="Em Retirement Date[]" />
            </div>
            <div class="form_element branch hidden">
                <label for="email">Branch</label>
                <select name="Em Branch[]" class="branch_select">
                    <option>Air Force</option>
                    <option>Army</option>
                    <option>Marines</option>
                    <option>Navy</option>
                    <option>Other</option>
                </select>
            </div>
            <div class="form_element company-name">
                <label for="name">Company Name</label>
                <input name="Em Company Name[]" class="company_name_input" />
            </div>
            <div class="form_element rank hidden">
                <label for="name">Rank</label>
                <input name="Em Rank[]" />
            </div>
            <div class="form_element position">
                <label for="name">Position</label>
                <input name="Em Position[]" />
            </div>
            <div class="form_element business-phone">
                <label for="name">Business Phone</label>
                <input name="Em Business Phone[]" />
            </div>
            <div class="form_element type-of-business">
                <label for="name">Type of business</label>
                <input name="Em Type of business[]" />
            </div>
            <div class="form_element company-street">
                <label for="name">Company Street</label>
                <input name="Em Company Street[]" />
            </div>
            <div class="form_element time-period">
                <label for="name">Time Period</label>
                <input name="Em Time Period[]" placeholder="__/__/____   to  Current" />
            </div>
            <div class="form_element company-zip-state">
                <label><span class="label_zip">Zip</span><span class="label_state">State</span></label>
                <input class="half_width half_width_margin mr5" name="Em Zip[]" />
                <select class="half_width" name="Em State[]">
                    <option value="" selected="selected" disabled="">State</option>
                    <option>AL</option><option>AK</option><option>AZ</option><option>AR</option><option label="CA" value="string:CA">CA</option><option label="CO" value="string:CO">CO</option><option label="CT" value="string:CT">CT</option><option label="DC" value="string:DC">DC</option><option label="DE" value="string:DE">DE</option><option label="FL" value="string:FL">FL</option><option label="GA" value="string:GA">GA</option><option label="HI" value="string:HI">HI</option><option label="ID" value="string:ID">ID</option><option label="IL" value="string:IL">IL</option><option label="IN" value="string:IN">IN</option><option label="IA" value="string:IA">IA</option><option label="KS" value="string:KS">KS</option><option label="KY" value="string:KY">KY</option><option label="LA" value="string:LA">LA</option><option label="ME" value="string:ME">ME</option><option label="MD" value="string:MD">MD</option><option label="MA" value="string:MA">MA</option><option label="MI" value="string:MI">MI</option><option label="MN" value="string:MN">MN</option><option label="MS" value="string:MS">MS</option><option label="MO" value="string:MO">MO</option><option label="MT" value="string:MT">MT</option><option label="NE" value="string:NE">NE</option><option label="NV" value="string:NV">NV</option><option label="NH" value="string:NH">NH</option><option label="NJ" value="string:NJ">NJ</option><option label="NM" value="string:NM">NM</option><option label="NY" value="string:NY">NY</option><option label="NC" value="string:NC">NC</option><option label="ND" value="string:ND">ND</option><option label="OH" value="string:OH">OH</option><option label="OK" value="string:OK">OK</option><option label="OR" value="string:OR">OR</option><option label="PA" value="string:PA">PA</option><option label="RI" value="string:RI">RI</option><option label="SC" value="string:SC">SC</option><option label="SD" value="string:SD">SD</option><option label="TN" value="string:TN">TN</option><option label="TX" value="string:TX">TX</option><option label="UT" value="string:UT">UT</option><option label="VT" value="string:VT">VT</option><option label="VA" value="string:VA">VA</option><option label="WA" value="string:WA">WA</option><option label="WV" value="string:WV">WV</option><option label="WI" value="string:WI">WI</option><option label="WY" value="string:WY">WY</option>
                </select>
            </div>
            <div class="form_element years-in-same-field">
                <label for="name">Years in same field</label>
                <input placeholder="optional" name="Em Years in same field[]" value="" />
            </div>
            <div class="form_element company-city">
                <label for="name">Company City</label>
                <input name="Em Company City[]" />
            </div>
            <div class="form_element total-income">
                <label>Total Income</label>
                <input name="Em Total Income[]" class="half_width half_width_margin mr5 total_income_input" />
                <select class="half_width total_income_period" name="Total Income Type[]">
                    <option value="mo" selected="selected">Monthly</option>
                    <option value="yr">Annual</option>
                </select>
            </div>
        </div>
    </div>

    <div id="oti_toclone" class="hidden">

        <div class="form_left">

            <div class="form_element full_width">
                <label for="message">Belongs To</label>
                <select class="other_income_bt" name="Other Income Belongs To[]">
                    <option value="" selected disabled>select</option>
                    <option class="ny_name">Armen</option>
                    <option class="ny_name">Armen</option>
                </select>
            </div>
            <div class="form_element full_width">
                <label for="message">Income Type</label>
                <select class="other_income_type" name="Other Income Type[]">
                    <option>Dividends/Interest</option><option>Other</option><option>Trust Income</option><option>Alimony/Child Support Income</option><option>Automobile/Expense Account Income</option><option>Foster Care</option><option>Notes Receivable/Installment</option><option>Social Security</option><option>Disability Income</option><option>Retirement/Pension Income</option><option>Unemployment</option><option>VABenefitsNonEducational</option><option>Boarder Income</option><option>Capital Gains</option><option>Mortgage Credit Certificate (MCC)</option><option>Real Estate/Mortgage Differential</option><option>Royalty Payment</option><option>Tip Income</option><option>Misc Business Income</option>
                </select>
            </div>
            <div class="form_element full_width">
                <label for="message">Amount</label>
                <input class="other_income_amount half_width half_width_margin" name="Amount[]">
                <select class="half_width" name="Amount period[]">
                    <option>Annual</option>
                    <option>Monthly</option>
                </select>
            </div>

        </div>

    </div>

<?php get_footer(); ?>