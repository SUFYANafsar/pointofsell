<div class="row mini_print">
  <div class="col-sm-12">
    <table class="table table-condensed">
      <tr>
        <th>@lang('lang_v1.payment_method')</th>
        <th>@lang('sale.sale')</th>
        <th>@lang('lang_v1.expense')</th>
      </tr>
      <tr>
        <td>
          @lang('cash_register.cash_in_hand'):
        </td>
        <td>
          <span class="display_currency" data-currency_symbol="true">{{ $register_details->cash_in_hand }}</span>
        </td>
        <td>--</td>
      </tr>
      @if(array_key_exists('cash', $payment_types))
        <tr>
          <td>
            {{$payment_types['cash']}}:
          </td>
          <td>
            <span class="display_currency" data-currency_symbol="true">{{ $register_details->total_cash }}</span>
          </td>
          <td>
            <span class="display_currency" data-currency_symbol="true">{{ $register_details->total_cash_expense }}</span>
          </td>
        </tr>
      @endif
      @if(array_key_exists('cheque', $payment_types))
        <tr>
          <td>
            {{$payment_types['cheque']}}:
          </td>
          <td>
            <span class="display_currency" data-currency_symbol="true">{{ $register_details->total_cheque }}</span>
          </td>
          <td>
            <span class="display_currency" data-currency_symbol="true">{{ $register_details->total_cheque_expense }}</span>
          </td>
        </tr>
      @endif
      @if(array_key_exists('card', $payment_types))
        <tr>
          <td>
            {{$payment_types['card']}}:
          </td>
          <td>
            <span class="display_currency" data-currency_symbol="true">{{ $register_details->total_card }}</span>
          </td>
          <td>
            <span class="display_currency" data-currency_symbol="true">{{ $register_details->total_card_expense }}</span>
          </td>
        </tr>
      @endif
      @if(array_key_exists('bank_transfer', $payment_types))
        <tr>
          <td>
            {{$payment_types['bank_transfer']}}:
          </td>
          <td>
            <span class="display_currency" data-currency_symbol="true">{{ $register_details->total_bank_transfer }}</span>
          </td>
          <td>
            <span class="display_currency" data-currency_symbol="true">{{ $register_details->total_bank_transfer_expense }}</span>
          </td>
        </tr>
      @endif
      @if(array_key_exists('advance', $payment_types))
        <tr>
          <td>
            {{$payment_types['advance']}}:
          </td>
          <td>
            <span class="display_currency" data-currency_symbol="true">{{ $register_details->total_advance }}</span>
          </td>
          <td>
            <span class="display_currency" data-currency_symbol="true">{{ $register_details->total_advance_expense }}</span>
          </td>
        </tr>
      @endif
      @if(array_key_exists('custom_pay_1', $payment_types))
        <tr>
          <td>
            {{$payment_types['custom_pay_1']}}:
          </td>
          <td>
            <span class="display_currency" data-currency_symbol="true">{{ $register_details->total_custom_pay_1 }}</span>
          </td>
          <td>
            <span class="display_currency" data-currency_symbol="true">{{ $register_details->total_custom_pay_1_expense }}</span>
          </td>
        </tr>
      @endif
      @if(array_key_exists('custom_pay_2', $payment_types))
        <tr>
          <td>
            {{$payment_types['custom_pay_2']}}:
          </td>
          <td>
            <span class="display_currency" data-currency_symbol="true">{{ $register_details->total_custom_pay_2 }}</span>
          </td>
          <td>
            <span class="display_currency" data-currency_symbol="true">{{ $register_details->total_custom_pay_2_expense }}</span>
          </td>
        </tr>
      @endif
      @if(array_key_exists('custom_pay_3', $payment_types))
        <tr>
          <td>
            {{$payment_types['custom_pay_3']}}:
          </td>
          <td>
            <span class="display_currency" data-currency_symbol="true">{{ $register_details->total_custom_pay_3 }}</span>
          </td>
          <td>
            <span class="display_currency" data-currency_symbol="true">{{ $register_details->total_custom_pay_3_expense }}</span>
          </td>
        </tr>
      @endif
      @if(array_key_exists('custom_pay_4', $payment_types))
        <tr>
          <td>
            {{$payment_types['custom_pay_4']}}:
          </td>
          <td>
            <span class="display_currency" data-currency_symbol="true">{{ $register_details->total_custom_pay_4 }}</span>
          </td>
          <td>
            <span class="display_currency" data-currency_symbol="true">{{ $register_details->total_custom_pay_4_expense }}</span>
          </td>
        </tr>
      @endif
      @if(array_key_exists('custom_pay_5', $payment_types))
        <tr>
          <td>
            {{$payment_types['custom_pay_5']}}:
          </td>
          <td>
            <span class="display_currency" data-currency_symbol="true">{{ $register_details->total_custom_pay_5 }}</span>
          </td>
          <td>
            <span class="display_currency" data-currency_symbol="true">{{ $register_details->total_custom_pay_5_expense }}</span>
          </td>
        </tr>
      @endif
      @if(array_key_exists('custom_pay_6', $payment_types))
        <tr>
          <td>
            {{$payment_types['custom_pay_6']}}:
          </td>
          <td>
            <span class="display_currency" data-currency_symbol="true">{{ $register_details->total_custom_pay_6 }}</span>
          </td>
          <td>
            <span class="display_currency" data-currency_symbol="true">{{ $register_details->total_custom_pay_6_expense }}</span>
          </td>
        </tr>
      @endif
      @if(array_key_exists('custom_pay_7', $payment_types))
        <tr>
          <td>
            {{$payment_types['custom_pay_7']}}:
          </td>
          <td>
            <span class="display_currency" data-currency_symbol="true">{{ $register_details->total_custom_pay_7 }}</span>
          </td>
          <td>
            <span class="display_currency" data-currency_symbol="true">{{ $register_details->total_custom_pay_7_expense }}</span>
          </td>
        </tr>
      @endif
      @if(array_key_exists('other', $payment_types))
        <tr>
          <td>
            {{$payment_types['other']}}:
          </td>
          <td>
            <span class="display_currency" data-currency_symbol="true">{{ $register_details->total_other }}</span>
          </td>
          <td>
            <span class="display_currency" data-currency_symbol="true">{{ $register_details->total_other_expense }}</span>
          </td>
        </tr>
      @endif
    </table>
    <hr>
    <table class="table table-condensed">
      <tr>
        <td>
          @lang('cash_register.total_sales'):
        </td>
        <td>
          <span class="display_currency" data-currency_symbol="true">{{ $register_details->total_sale }}</span>
        </td>
      </tr>
      <tr class="danger">
        <th>
          @lang('cash_register.total_refund')
        </th>
        <td>
          <b><span class="display_currency" data-currency_symbol="true">{{ $register_details->total_refund }}</span></b><br>
          <small>
          @if(array_key_exists('cash', $payment_types) && $register_details->total_cash_refund != 0)
            {{$payment_types['cash']}}: <span class="display_currency" data-currency_symbol="true">{{ $register_details->total_cash_refund }}</span><br>
          @endif
          @if(array_key_exists('cheque', $payment_types) && $register_details->total_cheque_refund != 0) 
            {{$payment_types['cheque']}}: <span class="display_currency" data-currency_symbol="true">{{ $register_details->total_cheque_refund }}</span><br>
          @endif
          @if(array_key_exists('card', $payment_types) && $register_details->total_card_refund != 0) 
            {{$payment_types['card']}}: <span class="display_currency" data-currency_symbol="true">{{ $register_details->total_card_refund }}</span><br> 
          @endif
          @if(array_key_exists('bank_transfer', $payment_types) && $register_details->total_bank_transfer_refund != 0)
            {{$payment_types['bank_transfer']}}: <span class="display_currency" data-currency_symbol="true">{{ $register_details->total_bank_transfer_refund }}</span><br>
          @endif
          @if(array_key_exists('custom_pay_1', $payment_types) && $register_details->total_custom_pay_1_refund != 0)
              {{$payment_types['custom_pay_1']}}: <span class="display_currency" data-currency_symbol="true">{{ $register_details->total_custom_pay_1_refund }}</span><br>
          @endif
          @if(array_key_exists('custom_pay_2', $payment_types) && $register_details->total_custom_pay_2_refund != 0)
              {{$payment_types['custom_pay_2']}}: <span class="display_currency" data-currency_symbol="true">{{ $register_details->total_custom_pay_2_refund }}</span><br>
          @endif
          @if(array_key_exists('custom_pay_3', $payment_types) && $register_details->total_custom_pay_3_refund != 0)
              {{$payment_types['custom_pay_3']}}: <span class="display_currency" data-currency_symbol="true">{{ $register_details->total_custom_pay_3_refund }}</span><br>
          @endif
          @if(array_key_exists('custom_pay_4', $payment_types) && $register_details->total_custom_pay_4_refund != 0)
              {{$payment_types['custom_pay_4']}}: <span class="display_currency" data-currency_symbol="true">{{ $register_details->total_custom_pay_4_refund }}</span><br>
          @endif
          @if(array_key_exists('custom_pay_5', $payment_types) && $register_details->total_custom_pay_5_refund != 0)
              {{$payment_types['custom_pay_5']}}: <span class="display_currency" data-currency_symbol="true">{{ $register_details->total_custom_pay_5_refund }}</span><br>
          @endif
          @if(array_key_exists('custom_pay_6', $payment_types) && $register_details->total_custom_pay_6_refund != 0)
              {{$payment_types['custom_pay_6']}}: <span class="display_currency" data-currency_symbol="true">{{ $register_details->total_custom_pay_6_refund }}</span><br>
          @endif
          @if(array_key_exists('custom_pay_7', $payment_types) && $register_details->total_custom_pay_7_refund != 0)
              {{$payment_types['custom_pay_7']}}: <span class="display_currency" data-currency_symbol="true">{{ $register_details->total_custom_pay_7_refund }}</span><br>
          @endif
          @if(array_key_exists('other', $payment_types) && $register_details->total_other_refund != 0)
            {{$payment_types['other']}}: <span class="display_currency" data-currency_symbol="true">{{ $register_details->total_other_refund }}</span>
          @endif
          </small>
        </td>
      </tr>
      <tr class="success">
        <th>
          @lang('lang_v1.total_payment')
        </th>
        <td>
          <b><span class="display_currency" data-currency_symbol="true">{{ $register_details->cash_in_hand + $register_details->total_cash - $register_details->total_cash_refund }}</span></b>
        </td>
      </tr>
      <tr class="success">
        <th>
          @lang('lang_v1.credit_sales'):
        </th>
        <td>
          <b><span class="display_currency" data-currency_symbol="true">{{ $details['transaction_details']->total_sales - $register_details->total_sale }}</span></b>
        </td>
      </tr>
      <tr class="success">
        <th>
          @lang('cash_register.total_sales'):
        </th>
        <td>
          <b><span class="display_currency" data-currency_symbol="true">{{ $details['transaction_details']->total_sales }}</span></b>
        </td>
      </tr>
      <tr class="danger">
        <th>
          @lang('report.total_expense'):
        </th>
        <td>
          <b><span class="display_currency" data-currency_symbol="true">{{ $register_details->total_expense }}</span></b>
        </td>
      </tr>
    </table>
    <hr>
    <span>
        @lang('sale.total') = 
        @format_currency($register_details->cash_in_hand) (@lang('messages.opening')) + 
        @format_currency($register_details->total_sale + $register_details->total_refund) (@lang('business.sale')) - 
        @format_currency($register_details->total_refund) (@lang('lang_v1.refund')) - 
        @format_currency($register_details->total_expense) (@lang('lang_v1.expense')) 
        = @format_currency($register_details->cash_in_hand + $register_details->total_sale - $register_details->total_expense)
    </span>
  </div>
</div>

<div class="product-details-page-break">
  @include('cash_register.register_product_details')
</div>