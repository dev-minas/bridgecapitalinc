/**
 * A Simple jQuery based mortgage calculator.
 *
 */


var MortgageCalc = {
    _create: function() {
        var self = this;
        var html = self._element_factory();
        $(self.element).html(html);
        $(self.element + ':button').click($.proxy(self._event_calculate,self))
    },
    // Hook to create form elements
    _element_factory: function() {
        var output = '';
        var self = this;

        //Add Form Elements
        output += '<h2>Calculate  mortgage  Payments</h2>';
        output += '<div class="form_element">';
        output += '<label for="price">Total Amount:</label>';
        output += '<input type="text" name="price" value="' + self.options.price + '">';
        output += '</div>';
        output += '<div class="form_element">';
        output += '<label for="down_payment">Down Payment:</label>';
        output += '<input type="text" name="down_payment" value="' + self.options.down_payment + '">';
        output += '</div>';
        output += '<div class="form_element">';
        output += '<label for="interest_rate">Interest Rate:</label>';
        output += '<input type="text" name="interest_rate" value="' + self.options.interest_rate + '">';
        output += '</div>';
        output += '<div class="form_element">';
        output += '<label for="loan_term">Term (monts):</label>';
        output += '<input type="text" name="loan_term" value="' + self.options.loan_term+ '">';
        output += '</div>';
        output += '<div class="form_element">';
        output += '<label for="monthly_payment">Monthly Payment:</label>';
        output += '<span id="monthly_payment">' + self._get_monthly_payment() + '</span>';
        // output += '<span id="dpmt_wrapper">(<span id="down_payment_rate">' + self._get_down_payment_rate() + '</span>%)</span>';
        output += '</div>';
        output += '<div class="form_element">';
        output += '<label> &nbsp; </label>';
        output += '<input type="button" name="calculate" value="Calculate" />';
        output += '</div>';

        return output;
    },
    _get_monthly_payment: function() {
        var PR = this._get_val('price') - this._get_val('down_payment');
        var IN = (this._get_val('interest_rate') * 0.01) / 12;
        var PE = this._get_val('loan_term') * 12;
        var payment = (PR * IN) / (1 - Math.pow(1 + IN, -PE))
        payment = this._round_number(payment,2);
        return '$' + payment;
    },
    _get_val: function(val) {
        var _v = parseFloat($(this.element).find('input[name=' + val + ']').val());
        if(!isNaN(_v)) {
            return _v;
        }
        if(!isNaN(parseFloat(this.options[val]))) {
            return parseFloat(this.options[val]);
        }
        return 0;
    },
    _get_down_payment_rate: function() {
        var price = this._get_val('price');
        var dpmt = this._get_val('down_payment');
        return this._round_number((dpmt/price) * 100,2);
    },
    _round_number: function(value,decimal_len) {
        return Math.round(value * Math.pow(10,decimal_len))/Math.pow(10,decimal_len);
    },
    _event_calculate: function() {
        $(this.element).find('#down_payment_rate').html(this._get_down_payment_rate());
        $(this.element).find('#monthly_payment').html(this._get_monthly_payment());
    },
    options: {
        price: 0,
        down_payment: 0,
        loan_term: 30,
        interest_rate: 4.25,
        add_css: true
    }
};
$.widget ('ui.mortgagecalc', MortgageCalc);