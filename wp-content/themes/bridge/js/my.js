$(document).ready(function () {

    $(".div_mob_menu").click(function () {
        $(".div_mmenu").animate({top: 0}, 400);
    });

    $(".close").click(function () {
        $(".div_mmenu").animate({top: -1000}, 400);
    });

    // Your code here
    var params = {
        price: '300000',
        down_payment: '30000'
    }
    $('.mcalc').mortgagecalc(params);

    $(".team_block").mouseover(function () {
        $(this).find(".team_name").animate({ 'marginTop': '-100px' }, 200);
        $(this).find(".team_position").removeClass("hidden");
    });

    $(".team_block").mouseout(function () {
        $(this).find(".team_name").animate({ 'marginTop': '-55px' }, 200);
        $(this).find(".team_position").addClass("hidden");
    });

    $(".team_block").click(function () {

        $(".bg_team_bio").show();

        var name = $(this).find(".team_name").html();
        var bio = $(this).find(".team_bio").html();
        $(".team_bio_cont").html('<h2>' + name + '</h2><br>' + bio + '<br /><br /><a id="view_all"></a>');

        $(".team_img").css("opacity", "0.6");
        $(this).find(".team_img").css("opacity", "1");

        $('html, body').animate({
            scrollTop: $(".bg_team_bio").offset().top
        }, 400);

        $("#view_all").click(function () {

            $('html, body').animate({
                scrollTop: $(".bg_team").offset().top
            }, 400);
        });
    });

    $('.employment_type').live('change', function() {

        emp_type_change($(this));
    });

    $(".branch_select").live('change', function() {

        var index = $(".branch_select").index(this);
        $(".emp_name").eq(index).text( this.value );
    });

    $(".company_name_input").live('keyup', function() {

        var index = $(".company_name_input").index(this);
        var obj = $(".emp_name").eq(index).text(this.value);
    });

    $(".total_income_input").live('keyup', function() {

        var index = $(".total_income_input").index(this);
        $(".income_numb").eq(index).text( this.value );
    });

    $('.property_type').live('change', function() {

        property_type_change($(this));
    });

    $('.cb_own_or_rent').live('change', function() {

        cb_own_rent_change($(this));
    });

    $('.diff_maddress').click(function() {
        diff_maddress_click($(this));
    });

    $('.cb_diff_caddrecc').click(function() {
        diff_cb_caddress_click($(this));
    });

    $('.cb_diff_maddress').click(function() {
        cb_diff_maddress_click($(this));
    });

    $('#co_borrower').change(function() {
        co_borrower_click();
    });

    $("#btnadd").click(function(){

        $("#tab4_form").children().hide();
        $("#tab4_form").append($("#cei_toclone").html());
        $(".cei_rows_conteiner").append('<tr><td><span class="emp_name">Company Name</span></td><td>$<span class="income_numb">0</span></td></tr>');
    });

    $("#btnadd_cb").click(function(){

        $("#tab5_form").children().hide();
        $("#tab5_form").append($("#cei_toclone").html());
        $(".cei_rows_conteiner_cb").append('<tr><td><span class="emp_name">Company Name</span></td><td>$<span class="income_numb">0</span></td></tr>');
    });

    $("#cb_name").change(function() {

        $('.cb_name').text($(this).val());
    });

    $("#my_name").change(function() {

        $('.my_name').text($(this).val());
    });

    $(".do_not_want_all_chkb").change(function() {
        do_not_want_all_click($(this));
    });

    $(".do_not_want_left_chkb").change(function() {
        do_not_want_left_click($(this));
    });

    $(".do_not_want_right_chkb").change(function() {
        do_not_want_right_click($(this));
    });

    $(".do_not_want_right2_chkb").change(function() {
        do_not_want_right2_click($(this));
    });

    $(".main_form").submit(function (event) {

        event.preventDefault();

        $(".submit").val('Processing');

        $.ajax( {
            type: "POST",
            url: '/form_submit.php',
            data: $(".main_form").serialize(),
            success: function( response ) {
                alert(response);
                $(".submit").val('Submit');
            }
        });

    });

    $(".continue").click(function (event) {

        event.preventDefault();

        if (validate_req($(this))) {

            var index = $(this).data('index');
            var bnt_val = $(this).val();

            if ( index == 5 && !$("#co_borrower").is(':checked')) {
                if (bnt_val == 'BACK') index = 4;
                else index = 6;
            }
            if ( index == 8 && !$("#co_borrower").is(':checked')) {
                if (bnt_val == 'BACK') index = 7;
                else index = 9;
            }

            $(".tab").addClass("hidden");
            $("#tab" + index).removeClass("hidden");
            $("#tab" + index + " h1")[0].scrollIntoView();
        }
    });

    $(".req").focus(function() {
        $(this).css('border-color', '#ccc');
        $(this).css('background-color', '#fff');
    });
});

function validate_req(obj) {
    var ret = true;
    var req_elem = obj.parent().parent().find(".req").not(".hidden .req");
    var form_div;
    req_elem.each(function() {

        var elem = $(this);

        if(elem.val() == '') {

            ret = false;
            blink_input(elem);
            elem.focus();
            form_div = elem.parent().parent();
        }
        if (!ret) {
            form_div[0].scrollIntoView();
        }
    });

    return ret;
}

function blink_input (obj) {
    var cnt = 0;
    var timer = setInterval(function () {

        cnt++;
        if (cnt == 4) {

            clearInterval(timer);
        }
        else {
            if(cnt % 2 == 1) {
                obj.css('border-color', 'red');
                obj.css('background-color', '#fdd');
            }
            else {
                obj.css('border-color', '#ccc');
                obj.css('background-color', '#fff');
            }
        }
    }, 300);
}

function co_borrower_click() {

    if ($("#co_borrower").is(':checked')) {
        $(".co-borrower").removeClass("hidden");
        $(".cb_tab9").removeClass("hidden");
    }
    else {
        $(".co-borrower").addClass("hidden");
        $(".cb_tab9").addClass("hidden");
    }
}

function do_not_want_all_click(obj) {

    if (obj.is(':checked')) {
        obj.parent().parent().find(".do_not_want_all").addClass("hidden");
    }
    else {
        obj.parent().parent().find(".do_not_want_all").removeClass("hidden");
    }
}

function do_not_want_left_click(obj) {

    if (obj.is(':checked')) {
        obj.parent().parent().find(".do_not_want_left").addClass("hidden");
    }
    else {
        obj.parent().parent().find(".do_not_want_left").removeClass("hidden");
    }
}

function do_not_want_right_click(obj) {

    if (obj.is(':checked')) {
        obj.parent().parent().find(".do_not_want_right").addClass("hidden");
    }
    else {
        obj.parent().parent().find(".do_not_want_right").removeClass("hidden");
    }
}

function do_not_want_right2_click(obj) {

    if (obj.is(':checked')) {
        obj.parent().parent().find(".do_not_want_right2").addClass("hidden");
    }
    else {
        obj.parent().parent().find(".do_not_want_right2").removeClass("hidden");
    }
}

function emp_type_change(obj) {

    if (obj.val() == 'Active Military Duty') {

        obj.parents().find(".rank").first().removeClass("hidden");
        obj.parents().find(".time-period").first().removeClass("hidden");
        obj.parents().find(".years-in-same-field").first().removeClass("hidden");
        obj.parents().find(".total-income").first().removeClass("hidden");
        obj.parents().find(".branch").first().removeClass("hidden");
        obj.parents().find(".business-phone").first().removeClass("hidden");
        obj.parents().find(".company-street").first().removeClass("hidden");
        obj.parents().find(".company-zip-state").first().removeClass("hidden");
        obj.parents().find(".company-city").first().removeClass("hidden");

        obj.parents().find(".position").first().addClass("hidden");
        obj.parents().find(".company-name").first().addClass("hidden");
        obj.parents().find(".type-of-business").first().addClass("hidden");
    }
    if (obj.val() == 'Employed') {

        obj.parents().find(".position").first().removeClass("hidden");
        obj.parents().find(".type-of-business").first().removeClass("hidden");
        obj.parents().find(".rank").first().addClass("hidden");
        obj.parents().find(".branch").first().addClass("hidden");
        obj.parents().find(".company-name").first().removeClass("hidden");

        obj.parents().find(".time-period").first().removeClass("hidden");
        obj.parents().find(".years-in-same-field").first().removeClass("hidden");
        obj.parents().find(".total-income").first().removeClass("hidden");
        obj.parents().find(".business-phone").first().removeClass("hidden");
        obj.parents().find(".company-street").first().removeClass("hidden");
        obj.parents().find(".company-zip-state").first().removeClass("hidden");
        obj.parents().find(".company-city").first().removeClass("hidden");
        obj.parents().find(".retirement-date").first().addClass("hidden");
    }
    if (obj.val() == 'Self Employed') {

        obj.parents().find(".position").first().removeClass("hidden");
        obj.parents().find(".type-of-business").first().removeClass("hidden");
        obj.parents().find(".rank").first().addClass("hidden");
        obj.parents().find(".branch").first().addClass("hidden");
        obj.parents().find(".company-name").first().removeClass("hidden");

        obj.parents().find(".time-period").first().removeClass("hidden");
        obj.parents().find(".years-in-same-field").first().removeClass("hidden");
        obj.parents().find(".total-income").first().removeClass("hidden");
        obj.parents().find(".business-phone").first().removeClass("hidden");
        obj.parents().find(".company-street").first().removeClass("hidden");
        obj.parents().find(".company-zip-state").first().removeClass("hidden");
        obj.parents().find(".company-city").first().removeClass("hidden");
        obj.parents().find(".retirement-date").first().addClass("hidden");
    }
    if (obj.val() == 'Retired') {

        obj.parents().find(".retirement-date").first().removeClass("hidden");
        obj.parents().find(".rank").first().addClass("hidden");
        obj.parents().find(".time-period").first().addClass("hidden");
        obj.parents().find(".years-in-same-field").first().addClass("hidden");
        obj.parents().find(".total-income").first().addClass("hidden");
        obj.parents().find(".branch").first().addClass("hidden");
        obj.parents().find(".business-phone").first().addClass("hidden");
        obj.parents().find(".company-street").first().addClass("hidden");
        obj.parents().find(".company-zip-state").first().addClass("hidden");
        obj.parents().find(".company-city").first().addClass("hidden");
        obj.parents().find(".position").first().addClass("hidden");
        obj.parents().find(".type-of-business").first().addClass("hidden");
        obj.parents().find(".company-name").first().addClass("hidden");
    }
    if (obj.val() == 'Other/Unemployed') {

        obj.parents().find(".retirement-date").first().addClass("hidden");
        obj.parents().find(".rank").first().addClass("hidden");
        obj.parents().find(".time-period").first().addClass("hidden");
        obj.parents().find(".years-in-same-field").first().addClass("hidden");
        obj.parents().find(".total-income").first().addClass("hidden");
        obj.parents().find(".branch").first().addClass("hidden");
        obj.parents().find(".business-phone").first().addClass("hidden");
        obj.parents().find(".company-street").first().addClass("hidden");
        obj.parents().find(".company-zip-state").first().addClass("hidden");
        obj.parents().find(".company-city").first().addClass("hidden");
        obj.parents().find(".position").first().addClass("hidden");
        obj.parents().find(".type-of-business").first().addClass("hidden");
        obj.parents().find(".company-name").first().addClass("hidden");
    }
}

function property_type_change(obj) {

    if (obj.val() == 'Single Family' || obj.val() == 'Townhouse/Rowhouse') {

        obj.parent().parent().find(".number_of_units").removeClass("hidden");
        obj.parent().parent().find(".number_of_stories").addClass("hidden");
    }
    if (obj.val() == 'Condo') {

        obj.parent().parent().find(".number_of_stories").removeClass("hidden");
        obj.parent().parent().find(".number_of_units").addClass("hidden");
    }
    if (obj.val() != 'Single Family' && obj.val() != 'Townhouse/Rowhouse' && obj.val() != 'Condo' ) {

        obj.parent().parent().find(".number_of_stories").addClass("hidden");
        obj.parent().parent().find(".number_of_units").addClass("hidden");
    }
}

function cb_own_rent_change(obj) {

    if (obj.val() == 'Rent') {
        obj.parent().parent().find(".cb_monthly_rent").removeClass("hidden");
        obj.parent().parent().find(".cb_monthly_rent_place").addClass("hidden");
    }
    else {
        obj.parent().parent().find(".cb_monthly_rent_place").removeClass("hidden");
        obj.parent().parent().find(".cb_monthly_rent").addClass("hidden");
    }
}

function diff_maddress_click(obj) {

    if (obj.val() == 'Yes') {
        obj.parent().parent().find(".my_mailing_address").removeClass("hidden");
    }
    else {
        obj.parent().parent().find(".my_mailing_address").addClass("hidden");
    }
}

function diff_cb_caddress_click(obj) {

    if (obj.val() == 'Yes') {
        obj.parent().parent().find(".cb_current_address").removeClass("hidden");
    }
    else {
        obj.parent().parent().find(".cb_current_address").addClass("hidden");
    }
}

function cb_diff_maddress_click(obj) {

    if (obj.val() == 'Yes') {
        obj.parent().parent().find(".cb_mailing_address").removeClass("hidden");
    }
    else {
        obj.parent().parent().find(".cb_mailing_address").addClass("hidden");
    }
}