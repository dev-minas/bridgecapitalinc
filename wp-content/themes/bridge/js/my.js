$(document).ready(function () {

    rss_slider();

    $(".mail_form").submit(function (event) {

        event.preventDefault();

        $(".submit").val('Processing');

        $.ajax( {
            type: "POST",
            url: '/form_submit.php',
            data: new FormData($(".mail_form")[0]),
            processData: false,
            contentType: false,
            success: function( response ) {
                if (response == 'success') {
                    alert("Thank you. Your request has been sent. You will redirected to homepage.");
                    window.setTimeout(location.href = '/', 2000);
                }
                else {
                    alert("Something went wrong. Please try later.");
                }
                $(".submit").val('Submit');
            }
        });

    });
    
    $(".careers_block button").click(function () {
        $("#input_position").val($(this).parent().find("span").text());

        $(".bg_contact").show();

        $('html, body').animate({
            scrollTop: $(".bg_contact").offset().top
        }, 300);
    });

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

    $(".goto").click(function () {

        var index = $(this).data('tab');

        $(".tab").addClass("hidden");
        $("#tab" + index).removeClass("hidden");
        $("#tab" + index + " h1")[0].scrollIntoView();
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
        $(".income_numb").eq(index).text( $(this).val() + '/' + $(this).next().val() );
    });

    $(".total_income_period").live('change', function() {

        var index = $(".total_income_period").index(this);
        $(".income_numb").eq(index).text( $(this).prev().val() + '/' + $(this).val() );
    });

    $('.other_income_bt').live('change', function() {

        var index = $(".other_income_bt").index(this);
        $(".b_to_name").eq(index).text( this.value );
    });

    $('.other_income_type').live('change', function() {

        var index = $(".other_income_type").index(this);
        $(".inc_type").eq(index).text( this.value );
    });

    $(".other_income_amount").live('keyup', function() {

        var index = $(".other_income_amount").index(this);
        $(".inc_amount").eq(index).text( this.value );
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
        $("#tab4 .rem_emp").html('<i class="fa fa-minus-circle"></i>');
        $(".cei_rows_conteiner").append('<tr><td><span class="emp_name">Company Name</span></td><td>$<span class="income_numb">0</span></td><td class="rem_emp"></td></tr>');
    });

    $("#btnadd_cb").click(function(){

        $("#tab5_form").children().hide();
        $("#tab5_form").append($("#cei_toclone").html());
        $("#tab5 .rem_emp_cb").html('<i class="fa fa-minus-circle"></i>');
        $(".cei_rows_conteiner_cb").append('<tr><td><span class="emp_name">Company Name</span></td><td>$<span class="income_numb">0</span></td><td class="rem_emp_cb"></td></tr>');
    });

    $("#btnadd_oi").click(function(){

        $("#tab6_form").children().hide();
        $("#tab6_form").append($("#oti_toclone").html());
        $("#tab6 .rem_emp_oi").html('<i class="fa fa-minus-circle"></i>');
        $(".oei_rows_conteiner").append('<tr><td><span class="b_to_name"></span></td><td><span class="inc_type">Income Type</span></td><td>$<span class="inc_amount">0</span></td><td class="rem_emp_oi"></td></tr>');

        $(".oei_rows_conteiner").parent().css("border", "1px solid");
    });

    $(".rem_emp").live('click', function() {

        var index = $(".rem_emp").index(this);
        $(".cei_rows_conteiner tr").eq(index).remove();
        $("#tab4_form .form_left").eq(index).remove();
    });

    $(".rem_emp_cb").live('click', function() {

        var index = $(".rem_emp_cb").index(this);
        $(".cei_rows_conteiner_cb tr").eq(index).remove();
        $("#tab5_form .form_left").eq(index).remove();
    });

    $(".rem_emp_oi").live('click', function() {

        var index = $(".rem_emp_oi").index(this);
        $(".oei_rows_conteiner tr").eq(index).remove();
        $("#tab6_form .form_left").eq(index).remove();
    });

    $("#my_name").change(function() {

        $('.my_name').text($(this).val());
        $('.other_income_bt > option:eq(0)').text($(this).val());
    });

    $("#cb_name").change(function() {

        $('.cb_name').text($(this).val());
        $('.other_income_bt > option:eq(1)').text($(this).val());
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

    var index = obj.index(obj);

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

        // $(".emp_name").eq(index).text('Air Force');
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

        // $(".emp_name").eq(index).text($(".company_name_input").eq(index).val());
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

        // $(".emp_name").eq(index).text($(".company_name_input").eq(index).val());
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

        // $(".emp_name").eq(index).text('Retired');
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

        // $(".emp_name").eq(index).text('Other/Unemployed');
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
    }
    else {
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

function rss_slider() {

    var i = 1;

    setInterval(function(){

        $(".slider_" + i).fadeOut("slow", function() {
            i++; if (i == 6) i = 1;
            $(".slider_" + i).show();
        });

    }, 5000);
}