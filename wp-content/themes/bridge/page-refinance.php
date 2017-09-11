<?php

// send mail

get_header(); ?>

    <div class="bg_home_2 bg_form">

        <form method="post" class="main_form">

            <div id="tab1" class="tab hidden">
                <img src="<?php bloginfo('template_url'); ?>/img/form1.png" />
                <h1>Personal Information</h1>

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

            </div>

            <div id="tab2" class="tab hidden">
                <img src="<?php bloginfo('template_url'); ?>/img/form2.png" />
                <h1>Property Information</h1>
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
            </div>

            <div id="tab3" class="tab hidden">
                <img src="<?php bloginfo('template_url'); ?>/img/form2.png" />
                <h1>Current Address Information</h1>

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
            </div>

            <div id="tab4" class="tab hidden">
                <img src="<?php bloginfo('template_url'); ?>/img/form2.png" />
                <h1>Current Employer Information</h1>
                <div id="repeat">
                    <table>
                        <tbody>
                        <tr>
                            <td>Company Name</td>
                            <td>$0</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div id="tab4_form">
                    <div>
                        <div class="form_left">
                            <div class="form_element">
                                <label for="email">Employment Type</label>
                                <select class="employment_type" name="Employment Type">
                                    <option value="" selected="selected" disabled="">Select One</option>
                                    <option>Active Military Duty</option>
                                    <option>Employed</option>
                                    <option>Self Employed</option>
                                    <option>Retired</option>
                                    <option>Other/Unemployed</option>
                                </select>
                            </div>
                            <div class="form_element retirement-date hidden">
                                <label for="name">Retirement Date</label>
                                <input name="Street" value="" />
                            </div>
                            <div class="form_element branch hidden">
                                <label for="email">Branch</label>
                                <select name="Own_or_Rent">
                                    <!-- <option value="" selected="selected" disabled="">Select One</option>-->
                                    <option>Air Force</option>
                                    <option>Army</option>
                                    <option>Marines</option>
                                    <option>Navy</option>
                                    <option>Other</option>
                                </select>
                            </div>
                            <div class="form_element company-name">
                                <label for="name">Company Name</label>
                                <input placeholder="name" name="Street" value="" />
                            </div>
                            <div class="form_element rank hidden">
                                <label for="name">Rank</label>
                                <input name="Street" value="" />
                            </div>
                            <div class="form_element position">
                                <label for="name">Position</label>
                                <input name="Street" value="" />
                            </div>
                            <div class="form_element business-phone">
                                <label for="name">Business Phone</label>
                                <input name="Street" value="" />
                            </div>
                            <div class="form_element type-of-business">
                                <label for="name">Type of business</label>
                                <input name="Street" value="" />
                            </div>
                            <div class="form_element company-street">
                                <label for="name">Company Street</label>
                                <input placeholder="optional" name="Street" value="" />
                            </div>
                            <div class="form_element time-period">
                                <label for="name">Time Period</label>
                                <input name="Street" value="" />
                            </div>
                            <div class="form_element company-zip-state">
                                <label for="price">Company Zip / State</label>
                                <input placeholder="optional" class="half_width half_width_margin mr5" name="Zip" />
                                <select class="half_width" name="State">
                                    <option value="" selected="selected" disabled="">State</option>
                                    <option>AL</option><option>AK</option><option>AZ</option><option>AR</option><option label="CA" value="string:CA">CA</option><option label="CO" value="string:CO">CO</option><option label="CT" value="string:CT">CT</option><option label="DC" value="string:DC">DC</option><option label="DE" value="string:DE">DE</option><option label="FL" value="string:FL">FL</option><option label="GA" value="string:GA">GA</option><option label="HI" value="string:HI">HI</option><option label="ID" value="string:ID">ID</option><option label="IL" value="string:IL">IL</option><option label="IN" value="string:IN">IN</option><option label="IA" value="string:IA">IA</option><option label="KS" value="string:KS">KS</option><option label="KY" value="string:KY">KY</option><option label="LA" value="string:LA">LA</option><option label="ME" value="string:ME">ME</option><option label="MD" value="string:MD">MD</option><option label="MA" value="string:MA">MA</option><option label="MI" value="string:MI">MI</option><option label="MN" value="string:MN">MN</option><option label="MS" value="string:MS">MS</option><option label="MO" value="string:MO">MO</option><option label="MT" value="string:MT">MT</option><option label="NE" value="string:NE">NE</option><option label="NV" value="string:NV">NV</option><option label="NH" value="string:NH">NH</option><option label="NJ" value="string:NJ">NJ</option><option label="NM" value="string:NM">NM</option><option label="NY" value="string:NY">NY</option><option label="NC" value="string:NC">NC</option><option label="ND" value="string:ND">ND</option><option label="OH" value="string:OH">OH</option><option label="OK" value="string:OK">OK</option><option label="OR" value="string:OR">OR</option><option label="PA" value="string:PA">PA</option><option label="RI" value="string:RI">RI</option><option label="SC" value="string:SC">SC</option><option label="SD" value="string:SD">SD</option><option label="TN" value="string:TN">TN</option><option label="TX" value="string:TX">TX</option><option label="UT" value="string:UT">UT</option><option label="VT" value="string:VT">VT</option><option label="VA" value="string:VA">VA</option><option label="WA" value="string:WA">WA</option><option label="WV" value="string:WV">WV</option><option label="WI" value="string:WI">WI</option><option label="WY" value="string:WY">WY</option></select>
                            </div>
                            <div class="form_element years-in-same-field">
                                <label for="name">Years in same field</label>
                                <input placeholder="optional" name="Street" value="" />
                            </div>
                            <div class="form_element company-city">
                                <label for="name">Company City</label>
                                <input placeholder="optional" name="Street" value="" />
                            </div>
                            <div class="form_element total-income">
                                <label for="price">Total Income</label>
                                <input placeholder="$Pretax" class="half_width half_width_margin mr5" name="Zip" />
                                <select class="half_width" name="State">
                                    <option selected="selected">Monthly</option>
                                    <option>Annual</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form_element full_width" id="add_btn">
                    <label> &nbsp; </label>
                    <input type="text" id="btnadd" value="Add a Current Employer" style="text-align: center; cursor: pointer;" />
                </div>
                <div class="form_element full_width" id="tab4_save_btn">
                    <label> &nbsp; </label>
                    <input data-index="5" class="continue" type="submit" name="submit" value="SAVE & CONTINUE" />
                </div>

            </div>

            <div id="tab5" class="tab hidden">
                <img src="<?php bloginfo('template_url'); ?>/img/form2.png" />
                <h1>You're halfway to the finish line.</h1>
                <p>What does your other income look like?</p>

                <div>
                    <h3>Do you receive any other type of income?</h3>
                    <p>such as dividends, alimony, social security or retirement</p>
                </div>

                <div class="form_left">

                    <div class="form_element full_width" id="add_btn">
                        <label> &nbsp; </label>
                        <input type="text" #id="btn_add" value="Add a Current Employer" style="text-align: center;cursor: pointer;" />
                    </div>

                    <div class="form_element full_width">
                        <label> &nbsp; </label>
                        <input data-index="6" class="continue" type="submit" name="submit" value="SAVE & CONTINUE" />
                    </div>
                </div>

            </div>

            <div id="tab6" class="tab hidden">
                <img src="<?php bloginfo('template_url'); ?>/img/form2.png" />
                <h1>You're nearly to the finish line.</h1>
                <div class=" full_width gray">
                    We just have a few questions the government requires us to ask.
                </div>

                <div class="form_left">
                    <p>Lorem ipsum dolor sit amet.</p>
                    <div class="info-block">
                        <input class="form_element_checkbox" type="checkbox" name="Borrower" />
                        <label class="form_element_label"> I do not wish to furnish this information </label>
                    </div>


                    <div class="info-block-inner">
                        <div class="info-block-inner-left">
                            <div class="info-block-inner-title">
                                <p>What is your race?</p>
                            </div>
                            <div class="info-block-inner-left">
                                <div class="info-checkbox">
                                    <input type="checkbox">
                                    <label for="">I do not wish to furnish this information</label>
                                </div>
                                <div class="info-checkbox">
                                    <input type="checkbox">
                                    <label for="">American Indian or Alaska Native</label>
                                </div>
                                <div class="info-checkbox">
                                    <input type="checkbox">
                                    <label for="">Asian</label>
                                </div>
                                <div class="info-checkbox">
                                    <input type="checkbox">
                                    <label for="">Black or African American</label>
                                </div>
                                <div class="info-checkbox">
                                    <input type="checkbox">
                                    <label for="">Native Hawaiian or Other Pacific Islander</label>
                                </div>
                                <div class="info-checkbox">
                                    <input type="checkbox">
                                    <label for="">White</label>
                                </div>
                                <div class="info-checkbox">
                                    <input type="checkbox">
                                    <label for="">Not Applicable</label>
                                </div>
                            </div>
                        </div>

                        <div class="info-block-inner-right">
                            <div class="info-block-inner-right-top">
                                <div class="info-block-inner-title">
                                    <p>What is your ethnicity?</p>
                                </div>
                                <div class="info-checkbox">
                                    <input type="checkbox">
                                    <label for="">I do not wish to furnish this information</label>
                                </div>
                                <div class="info-radio">
                                    <input type="radio" name="ethnicity">
                                    <label for="">I do not wish to furnish this information</label>
                                </div>
                                <div class="info-radio">
                                    <input type="radio" name="ethnicity">
                                    <label for="">I do not wish to furnish this information</label>
                                </div>
                                <div class="info-radio">
                                    <input type="radio" name="ethnicity">
                                    <label for="">I do not wish to furnish this information</label>
                                </div>
                            </div>
                            <div class="info-block-inner-right-bottom">
                                <div class="info-block-inner-title">
                                    <p>What is your gender?</p>
                                </div>
                                <div class="info-checkbox">
                                    <input type="checkbox">
                                    <label for="">I do not wish to furnish this information</label>
                                </div>
                                <div class="info-radio">
                                    <input type="radio" name="gender">
                                    <label for="">I do not wish to furnish this information</label>
                                </div>
                                <div class="info-radio">
                                    <input type="radio" name="gender">
                                    <label for="">I do not wish to furnish this information</label>
                                </div>
                                <div class="info-radio">
                                    <input type="radio" name="gender">
                                    <label for="">I do not wish to furnish this information</label>
                                </div>
                            </div>
                        </div>
                        <div class="clear-both"></div>
                    </div>

                    <div class="form_element full_width">
                        <label> &nbsp; </label>
                        <input data-index="7" class="continue" type="submit" name="submit" value="SAVE & CONTINUE" />
                    </div>

                </div>

            </div>

            <div id="tab7" class="tab hidden">
                <img src="<?php bloginfo('template_url'); ?>/img/form2.png" />
                <h1>You're nearly to the finish line.</h1>
                <div class=" full_width gray">
                    We just have a few questions the government requires us to ask.
                </div>

                <div class="form_left">

                    <h3>Declarations</h3>

                    <div class="form_element full_width" id="declarations_list">
                        <label>a. Are there any outstanding judgments against you?</label>
                        <span class="declarations">dxdxdx ffgcfcfc</span>
                        <input type="radio" name="Declarations" value="Yes" />
                        <span>Yes</span>
                        <input type="radio" name="Declarations" value="No" />
                        <span>No</span>
                    </div>
                    <div class="form_element full_width" id="declarations_list">
                        <label>b. Have you been declared bankrupt within the past 7 years?</label>
                        <span class="declarations">dxdxdx ffgcfcfc</span>
                        <input type="radio" name="Declarations" value="Yes" />
                        <span>Yes</span>
                        <input type="radio" name="Declarations" value="No" />
                        <span>No</span>
                    </div>
                    <div class="form_element full_width" id="declarations_list">
                        <label>c. Have you had property foreclosed upon or given title or deed in lieu thereof in the last 7 years?</label>
                        <span class="declarations">dxdxdx ffgcfcfc</span>
                        <input type="radio" name="Declarations" value="Yes" />
                        <span>Yes</span>
                        <input type="radio" name="Declarations" value="No" />
                        <span>No</span>
                    </div>
                    <div class="form_element full_width" id="declarations_list">
                        <label>d. Are you a party to a lawsuit?</label>
                        <span class="declarations">dxdxdx ffgcfcfc</span>
                        <input type="radio" name="Declarations" value="Yes" />
                        <span>Yes</span>
                        <input type="radio" name="Declarations" value="No" />
                        <span>No</span>
                    </div>
                    <div class="form_element full_width" id="declarations_list">
                        <label>e. Have you directly or indirectly been obligated on any loan which resulted in foreclosure, transfer in title in lieu of foreclosure, or judgment?</label>
                        <span class="declarations">dxdxdx ffgcfcfc</span>
                        <input type="radio" name="Declarations" value="Yes" />
                        <span>Yes</span>
                        <input type="radio" name="Declarations" value="No" />
                        <span>No</span>
                    </div>
                    <div class="form_element full_width" id="declarations_list">
                        <label>f. Are you presently delinquent or in default on any Federal debt or any other loan, mortgage, financial obligation, bond, or loan guarantee?</label>
                        <span class="declarations">dxdxdx ffgcfcfc</span>
                        <input type="radio" name="Declarations" value="Yes" />
                        <span>Yes</span>
                        <input type="radio" name="Declarations" value="No" />
                        <span>No</span>
                    </div>
                    <div class="form_element full_width" id="declarations_list">
                        <label>g. Are you obligated to pay alimony, child support, or separate maintenance?</label>
                        <span class="declarations">dxdxdx ffgcfcfc</span>
                        <input type="radio" name="Declarations" value="Yes" />
                        <span>Yes</span>
                        <input type="radio" name="Declarations" value="No" />
                        <span>No</span>
                    </div>
                    <div class="form_element full_width" id="declarations_list">
                        <label>h. Is any part of the down payment borrowed?</label>
                        <span class="declarations">dxdxdx ffgcfcfc</span>
                        <input type="radio" name="Declarations" value="Yes" />
                        <span>Yes</span>
                        <input type="radio" name="Declarations" value="No" />
                        <span>No</span>
                    </div>
                    <div class="form_element full_width" id="declarations_list">
                        <label>i. Are you a co-maker or endorser on a note?</label>
                        <span class="declarations">dxdxdx ffgcfcfc</span>
                        <input type="radio" name="Declarations" value="Yes" />
                        <span>Yes</span>
                        <input type="radio" name="Declarations" value="No" />
                        <span>No</span>
                    </div>
                    <div class="form_element full_width"  id="declarations_list">
                        <label>j. Are you a U.S. Citizen?</label>
                        <span class="declarations">dxdxdx ffgcfcfc</span>
                        <input type="radio" name="Declarations" value="Yes" />
                        <span>Yes</span>
                        <input type="radio" name="Declarations" value="No" />
                        <span>No</span>
                    </div>
                    <div class="form_element full_width"  id="declarations_list">
                        <label>k. Are you a permanent Resident Alien?</label>
                        <span class="declarations">dxdxdx ffgcfcfc</span>
                        <input type="radio" name="Declarations" value="Yes" />
                        <span>Yes</span>
                        <input type="radio" name="Declarations" value="No" />
                        <span>No</span>
                    </div>
                    <div class="form_element full_width"  id="declarations_list">
                        <label>l. Do you intend to occupy the property as your Primary Residence?</label>
                        <span class="declarations">dxdxdx ffgcfcfc</span>
                        <input type="radio" name="Declarations" value="Yes" />
                        <span>Yes</span>
                        <input type="radio" name="Declarations" value="No" />
                        <span>No</span>
                    </div>
                    <div class="form_element full_width"  id="declarations_list">
                        <label>m. Have you had an ownership interest in a property in the last three years?</label>
                        <span class="declarations">dxdxdx ffgcfcfc</span>
                        <input type="radio" name="Declarations" value="Yes" />
                        <span>Yes</span>
                        <input type="radio" name="Declarations" value="No" />
                        <span>No</span>
                    </div>
                    <div class="form_element full_width"  id="declarations_list">
                        <label>n. What type of property did you own?</label>
                        <span class="declarations" id="declarations-txt">dxdxdx ffgcfcfc</span>
                        <select name="Own_or_Rent" id="declarations-select">
                            <option value="" selected="selected" disabled="">Select One</option>
                            <option>Primary Residence</option>
                            <option>Second Home</option>
                            <option>Investment Property</option>
                        </select>
                    </div>
                    <div class="form_element full_width"  id="declarations_list">
                        <label>o. How did you hold title to the home?</label>
                        <span class="declarations" id="declarations-txt">dxdxdx ffgcfcfc</span>
                        <select name="Own_or_Rent" id="declarations-select">
                            <option value="" selected="selected" disabled="">Select One</option>
                            <option>Solely by yourself</option>
                            <option>Jointly with your spouse</option>
                            <option>Jointly with another person</option>
                        </select>
                    </div>

                    <div class="form_element full_width">
                        <label> &nbsp; </label>
                        <input data-index="8" class="continue" type="submit" name="submit" value="SAVE & CONTINUE" />
                    </div>

                </div>

            </div>

            <div id="tab8" class="tab hidden">
                <img src="<?php bloginfo('template_url'); ?>/img/form2.png" />
                <h1>You're minutes away from your 3 FREE Credit Scores.</h1>
                <div class=" full_width gray">
                    With these last tidbits of info we'll give you your FREE credit scores.
                </div>

                <div class="form_left">
                    <div class="full_width gray">
                        <strong>My Credit Information</strong>
                    </div>

                    <div class="fill-form-list">
                        <span class="gray information-txt">dxdxdx ffgcfcfc</span>
                        <div class="fill-form-inner">
                            <label for="">Social Security #</label>
                            <input type="text">
                        </div>
                        <div class="fill-form-inner">
                            <label for="">Confirm Social Security #</label>
                            <input type="password">
                        </div>
                        <div class="fill-form-inner">
                            <label for="">Birthday</label>
                            <input type="text">
                        </div>

                    </div>

                    <div class="info-checkbox fill-form-checkbox">
                        <input type="checkbox">
                        <label for="">
                            I / We (dxdxdx ffgcfcfc) authorize lender or its designated representatives to obtain a credit report from the national credit reporting agencies in connection with my/our home loan application.
                        </label>
                    </div>

                    <div class="form_element full_width">
                        <label> &nbsp; </label>
                        <input data-index="9" class="continue" type="submit" name="submit" value="SAVE & CONTINUE" />
                    </div>

                </div>

            </div>

            <div id="tab9" class="tab hidden">
                <img src="<?php bloginfo('template_url'); ?>/img/form2.png" />
                <h1>You're minutes away from your 3 FREE Credit Scores.</h1>
                <div class=" full_width gray">
                    You can do this by either creating a new account or signing in.
                </div>
                <div class="form_left">

                    <div class="fill-form-list">
                        <div class="fill-form-inner">
                            <label for="">Email</label>
                            <input type="text">
                        </div>
                        <div class="fill-form-inner">
                            <label for="">New Password</label>
                            <input type="password">
                        </div>
                        <div class="fill-form-inner">
                            <label for="">Confirm Password</label>
                            <input type="text">
                        </div>
                        <div class="fill-form-inner">
                            <label for="">Confirm Password</label>
                            <select name="">
                                <option value="" selected="selected" disabled="">Select One</option>
                                <option>What is your favorite hobby?</option>
                                <option>What was your favorite teacher</option>
                                <option>what is the name of your favorite pet?</option>
                                <option>In what year was your mother born?</option>
                                <option>What is the name of the model of your first car?</option>
                            </select>
                        </div>

                        <div class="fill-form-inner">
                            <label for="">Security Answer</label>
                            <input type="text">
                        </div>

                    </div>

                    <div class="form_element full_width">
                        <label> &nbsp; </label>
                        <input data-index="10" class="continue" type="submit" name="submit" value="SAVE & CONTINUE" />
                    </div>
                    <div class="fill-form-inner">
                        <a href="#">Already have an account? Sign In</a>
                    </div>

                </div>


            </div>

            <div id="tab10" class="tab ">

                <img src="<?php bloginfo('template_url'); ?>/img/form2.png" />
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
                        E-SIGN CONSENT TO USE ELECTRONIC RECORDS AND SIGNATURES
                        We prefer to do business with you electronically. If you would prefer, we can still assist you with your home loan in person, through the mail, or over the phone. Before we continue with this transaction electronically, it is important to us that you understand your rights and responsibilities.

                        Please read the following and, if you wish, affirm your consent to conduct business with us electronically. For purposes of this Disclosure, “you” and “your” mean the borrower(s) in this home loan transaction and “we”, “our” and “us” mean  Skyline Home Loans, a Division of Skyline Financial Corp

                        Scope of Communications to Be Provided in Electronic Form
                        We may provide you with many communications and disclosures about your home loan transaction (“Communications”) electronically, instead of in writing (i.e., rather than paper which we mail or give you face-to-face). Your consent to receive electronic Communications includes, but is not limited to:

                        Your Uniform Residential Loan Application (Form 1003);
                        All legal and regulatory disclosures, such as your Loan Estimate, Privacy policies and notices; and,
                        Communications associated with your home loan transaction.

                        Your consent will only apply to delivery of Communications during the processing of this home loan transaction. Your consent does not apply to monthly statements or other disclosures related to the servicing of your home after it closes. Your consent also does not apply to other home loans or financial services that you may obtain from us in the future.

                        Methods of Electronic Delivery of Communications to You
                        We will deliver all Communications by e-mail, on this web site, on another web site that we designate after notifying you of the web site’s URL by e-mail, or by fax to a fax number that you designate.

                        Hardware and Software Requirements
                        In order to access, view, and retain your Communications, you must have:

                        An e-mail account with an Internet service provider capable of sending and receiving e-mail with hyperlinks to web sites;
                        A personal computer (for PCs: Pentium 120 Hhz or higher; for Macintosh, Power Mac 9500, Power PC 604 processor 120-MHz Base or higher), operating system and telecommunications connections to the Internet capable of receiving, accessing, displaying, and either printing or storing Communications;
                        Adobe Reader version 8.0 or higher; Windows 2000 or later version running either Internet Explorer version 6.0 or higher or Firefox version 3.0 or higher, or Macintosh OSX 10.2 or higher running Safari web browser; and,
                        Sufficient electronic storage capacity on your computer’s hard drive or other data storage unit or a printer to print a copy of your disclosures.


                        Documents may be provided in Hypertext Markup Language (HTML) or Portable Document Format (PDF) or other compatible formats. If you do not have the ability to access and retain both PDF and HTML documents, do not consent to electronic delivery. By consenting, you confirm that your personal computer is equipped with the Adobe Acrobat Reader.

                        If software or hardware requirements change and you are no longer able to access Communications electronically as a result, you must notify us. Once you do so, we will then send you paper copies of future Communications by mail. We will use commercially reasonable efforts to notify you before such requirements change.

                        Updating Us on Your Contact Information
                        You must promptly notify us if your email address or other contact information changes. We will not assume any liability for non-receipt of Communications resulting from you failing to notify us of such changes, providing us an invalid email address, failing to set your email or Internet service provider filters so that our emails are not treated as “spam” or “junk mail,” or malfunctioning of your computer, browser, Internet service and/or software, or other reasons beyond our control.

                        Withdrawing Your Consent
                        We will continue to deliver Communications about your home loan transaction electronically unless and until you withdraw your consent as described below. You have the right to withdraw your consent at any time. If you decide to withdraw your consent, you can do so by clicking on “I Decline” on the “My Profile” page or by contacting us at (877) 995-1700. After you withdraw your consent in this manner, we will provide you all future Communications in writing (i.e., on paper which we mail or give you face-to-face). There is no cost for withdrawing your consent.

                        Requesting Paper Copies
                        We will not send you a paper copy of any Communication unless you request it. You can get a paper copy of any electronic Communication by asking us to mail it to you. You must make such a request within a reasonable time after we first provide the electronic Communication to you. To request a paper copy, call us at (877) 995-1700 or write to us at:
                        Skyline Home Loans
                        27001 Agoura Road, Suite 350
                        Calabasas, CA 91301

                        We will not charge you for requesting paper copies of any electronic Communications.

                        Change to Paper
                        We reserve the right to provide paper instead of electronic Communications in the future. We will notify you of our decision to do so if required by law.
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
                        <input type="submit" name="submit" value="CONTINUE" />
                    </div>

                </div>

            </div>

        </form>

    </div>

    <div id="cei_toclone" class="hidden">
        <div>
            <div class="form_left">
                <div class="form_element">
                    <label for="email">Employment Type</label>
                    <select class="employment_type" name="Employment Type">
                        <option value="" selected="selected" disabled="">Select One</option>
                        <option>Active Military Duty</option>
                        <option>Employed</option>
                        <option>Self Employed</option>
                        <option>Retired</option>
                        <option>Other/Unemployed</option>
                    </select>
                </div>
                <div class="form_element retirement-date hidden">
                    <label for="name">Retirement Date</label>
                    <input name="Street" value="" />
                </div>
                <div class="form_element branch hidden">
                    <label for="email">Branch</label>
                    <select name="Own_or_Rent">
                        <!-- <option value="" selected="selected" disabled="">Select One</option>-->
                        <option>Air Force</option>
                        <option>Army</option>
                        <option>Marines</option>
                        <option>Navy</option>
                        <option>Other</option>
                    </select>
                </div>
                <div class="form_element company-name">
                    <label for="name">Company Name</label>
                    <input placeholder="name" name="Street" value="" />
                </div>
                <div class="form_element rank hidden">
                    <label for="name">Rank</label>
                    <input name="Street" value="" />
                </div>
                <div class="form_element position">
                    <label for="name">Position</label>
                    <input name="Street" value="" />
                </div>
                <div class="form_element business-phone">
                    <label for="name">Business Phone</label>
                    <input name="Street" value="" />
                </div>
                <div class="form_element type-of-business">
                    <label for="name">Type of business</label>
                    <input name="Street" value="" />
                </div>
                <div class="form_element company-street">
                    <label for="name">Company Street</label>
                    <input placeholder="optional" name="Street" value="" />
                </div>
                <div class="form_element time-period">
                    <label for="name">Time Period</label>
                    <input name="Street" value="" />
                </div>
                <div class="form_element company-zip-state">
                    <label for="price">Company Zip / State</label>
                    <input placeholder="optional" class="half_width half_width_margin mr5" name="Zip" />
                    <select class="half_width" name="State">
                        <option value="" selected="selected" disabled="">State</option>
                        <option>AL</option><option>AK</option><option>AZ</option><option>AR</option><option label="CA" value="string:CA">CA</option><option label="CO" value="string:CO">CO</option><option label="CT" value="string:CT">CT</option><option label="DC" value="string:DC">DC</option><option label="DE" value="string:DE">DE</option><option label="FL" value="string:FL">FL</option><option label="GA" value="string:GA">GA</option><option label="HI" value="string:HI">HI</option><option label="ID" value="string:ID">ID</option><option label="IL" value="string:IL">IL</option><option label="IN" value="string:IN">IN</option><option label="IA" value="string:IA">IA</option><option label="KS" value="string:KS">KS</option><option label="KY" value="string:KY">KY</option><option label="LA" value="string:LA">LA</option><option label="ME" value="string:ME">ME</option><option label="MD" value="string:MD">MD</option><option label="MA" value="string:MA">MA</option><option label="MI" value="string:MI">MI</option><option label="MN" value="string:MN">MN</option><option label="MS" value="string:MS">MS</option><option label="MO" value="string:MO">MO</option><option label="MT" value="string:MT">MT</option><option label="NE" value="string:NE">NE</option><option label="NV" value="string:NV">NV</option><option label="NH" value="string:NH">NH</option><option label="NJ" value="string:NJ">NJ</option><option label="NM" value="string:NM">NM</option><option label="NY" value="string:NY">NY</option><option label="NC" value="string:NC">NC</option><option label="ND" value="string:ND">ND</option><option label="OH" value="string:OH">OH</option><option label="OK" value="string:OK">OK</option><option label="OR" value="string:OR">OR</option><option label="PA" value="string:PA">PA</option><option label="RI" value="string:RI">RI</option><option label="SC" value="string:SC">SC</option><option label="SD" value="string:SD">SD</option><option label="TN" value="string:TN">TN</option><option label="TX" value="string:TX">TX</option><option label="UT" value="string:UT">UT</option><option label="VT" value="string:VT">VT</option><option label="VA" value="string:VA">VA</option><option label="WA" value="string:WA">WA</option><option label="WV" value="string:WV">WV</option><option label="WI" value="string:WI">WI</option><option label="WY" value="string:WY">WY</option></select>
                </div>
                <div class="form_element years-in-same-field">
                    <label for="name">Years in same field</label>
                    <input placeholder="optional" name="Street" value="" />
                </div>
                <div class="form_element company-city">
                    <label for="name">Company City</label>
                    <input placeholder="optional" name="Street" value="" />
                </div>
                <div class="form_element total-income">
                    <label for="price">Total Income</label>
                    <input placeholder="$Pretax" class="half_width half_width_margin mr5" name="Zip" />
                    <select class="half_width" name="State">
                        <option selected="selected">Monthly</option>
                        <option>Annual</option>
                    </select>
                </div>

            </div>

        </div>
    </div>

<?php get_footer(); ?>