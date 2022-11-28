<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
     <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@lang('app.invoice') - {{ $invoice->invoice_number }}</title>
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ global_setting()->favicon_url }}">
    <meta name="theme-color" content="#ffffff">

    @if (invoice_setting()->locale == 'ru')
        <style>
            body {
                margin: 0;
                font-family: dejavu sans;
                font-size: 13px;
            }

        </style>
    @else
        <style>
            body {
                margin: 0;
                font-family: Verdana, Arial, Helvetica, sans-serif;
                font-size: 13px;
            }

        </style>
    @endif

    <style>

html {
  line-height: 1.15;
  -webkit-text-size-adjust: 100%;
}
body {
  margin: 0;
}
main {
  display: block;
}
h1 {
  font-size: 2em;
  margin: 0.67em 0;
}
hr {
  box-sizing: content-box;
  height: 0;
  overflow: visible;
}
pre {
  font-family: monospace, monospace;
  font-size: 1em;
}
a {
  background-color: transparent;
}
abbr[title] {
  border-bottom: none;
  text-decoration: underline;
  text-decoration: underline dotted;
}
b,
strong {
  font-weight: bolder;
}
code,
kbd,
samp {
  font-family: monospace, monospace;
  font-size: 1em;
}
small {
  font-size: 80%;
}
sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}
sub {
  bottom: -0.25em;
}
sup {
  top: -0.5em;
}
img {
  border-style: none;
}
button,
input,
optgroup,
select,
textarea {
  font-family: inherit;
  font-size: 100%;
  line-height: 1.15;
  margin: 0;
}
button,
input {
  overflow: visible;
}
button,
select {
  text-transform: none;
}
[type="button"],
[type="reset"],
[type="submit"],
button {
  -webkit-appearance: button;
}
[type="button"]::-moz-focus-inner,
[type="reset"]::-moz-focus-inner,
[type="submit"]::-moz-focus-inner,
button::-moz-focus-inner {
  border-style: none;
  padding: 0;
}
[type="button"]:-moz-focusring,
[type="reset"]:-moz-focusring,
[type="submit"]:-moz-focusring,
button:-moz-focusring {
  outline: 1px dotted ButtonText;
}
fieldset {
  padding: 0.35em 0.75em 0.625em;
}
legend {
  box-sizing: border-box;
  color: inherit;
  display: table;
  max-width: 100%;
  padding: 0;
  white-space: normal;
}
progress {
  vertical-align: baseline;
}
textarea {
  overflow: auto;
}
[type="checkbox"],
[type="radio"] {
  box-sizing: border-box;
  padding: 0;
}
[type="number"]::-webkit-inner-spin-button,
[type="number"]::-webkit-outer-spin-button {
  height: auto;
}
[type="search"] {
  -webkit-appearance: textfield;
  outline-offset: -2px;
}
[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none;
}
::-webkit-file-upload-button {
  -webkit-appearance: button;
  font: inherit;
}
details {
  display: block;
}
summary {
  display: list-item;
}
template {
  display: none;
}
[hidden] {
  display: none;
}
@import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap");
*,
*::after,
*::before {
  box-sizing: border-box;
}

main {
  overflow: hidden;
  width: 100%;
}

/* ------------------Typography------------------ */
html {
  font-size: 62.5%;
  scroll-behavior: smooth;
}

body {
  font-family: "Montserrat", sans-serif;
  color: #000000;
  font-size: 1.2rem;
  overflow-x: hidden;
  margin: 0;
  padding: 0;
}

.invoices {
  position: relative;
  margin: 0 auto;
  border: 1px solid #a7472e;
  width: 99%;
}

body::-webkit-scrollbar-thumb {
  background: #a7472e;
  border-radius: 1rem 0px 1rem 0px;
}

body::-webkit-scrollbar {
  width: 0.6rem;
  background-color: #333133;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  font-family: "Montserrat", sans-serif;
  line-height: 1.2;
  margin: 1rem 0;
}

h1 {
  font-family: "Montserrat", sans-serif;
  font-size: 6rem;
}

h2 {
  font-size: 2.6rem;
}

h3 {
  font-size: 2.4rem;
}

h4 {
  font-size: 3.2rem;
}

h5 {
  font-size: 1.8rem;
  font-weight: 500;
}

h6 {
  font-size: 1.8rem;
}

p {
  font-size: 1.8rem;
  line-height: 1.3;
}

a {
  text-decoration: none;
  font-family: "Montserrat", sans-serif;
  color: #000000;
}
a:hover {
  text-decoration: none;
}

img {
  vertical-align: middle;
}

.watermark {
  position: absolute;
  z-index: -1;
  top: 30%;
  left: 10%;
  right: 0;
  margin: 0 auto;
  transform: translateY(-50%);
}
.watermark img {
  max-width: 80%;
  margin: 0 auto;
  display: block;
}

.grid {
  display: grid;
}
.grid-col90 {
  grid-template: auto/5fr 90fr 5fr;
}
.grid-col90 .block__inner {
  grid-column: 3/2;
}
.grid-col80 {
  grid-template: auto/10fr 80fr 10fr;
}
.grid-col80 .block__inner {
  grid-column: 3/2;
}
.grid-col70 {
  grid-template: auto/15fr 70fr 15fr;
}
.grid-col70 .block__inner {
  grid-column: 3/2;
}
.grid-col60 {
  grid-template: auto/20fr 60fr 20fr;
}
.grid-col60 .block__inner {
  grid-column: 3/2;
}
.grid-col50 {
  grid-template: auto/25fr 50fr 25fr;
}
.grid-col50 .block__inner {
  grid-column: 3/2;
}
.grid-col40 {
  grid-template: auto/30fr 40fr 30fr;
}
.grid-col40 .block__inner {
  grid-column: 3/2;
}

.block__1x2 {
  grid-template: auto/repeat(2, 1fr);
}
.block__1x3 {
  grid-template: auto/repeat(3, 1fr);
}

.padding-vertical {
  padding: 4rem 0;
}

.list {
  margin: 0;
  padding: 0;
  list-style: none;
}
.list__item {
  line-height: 1.8;
}
.list-inline {
  display: flex;
}
.list-inline .list__item {
  font-weight: 500;
  text-transform: uppercase;
}

.media {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: row;
}
.media__img {
  width: 30%;
}
.media__img img {
  width: 100%;
}
.media__body {
  width: 70%;
}

input, select {
  border: none;
  outline: none;
}

.effect-8 {
  border: 0.1rem solid #ccc;
  padding: 0.7rem 1.4rem 0.9rem;
  transition: 0.4s;
}

.effect-8 ~ .focus-border:before,
.effect-8 ~ .focus-border:after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 0;
  height: 0.2rem;
  background-color: #333133;
  transition: 0.3s;
}

.effect-8 ~ .focus-border:after {
  top: auto;
  bottom: 0;
  left: auto;
  right: 0;
}

.effect-8 ~ .focus-border i:before,
.effect-8 ~ .focus-border i:after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 2px;
  height: 0;
  background-color: #333133;
  transition: 0.4s;
}

.effect-8 ~ .focus-border i:after {
  left: auto;
  right: 0;
  top: auto;
  bottom: 0;
}

.effect-8:focus ~ .focus-border:before,
.effect-8:focus ~ .focus-border:after {
  width: 100%;
  transition: 0.3s;
}

.effect-8:focus ~ .focus-border i:before,
.effect-8:focus ~ .focus-border i:after {
  height: 100%;
  transition: 0.4s;
}

.header__left {
  width: 75%;
  display: inline-block;
  vertical-align: top;
}
.header__left--top {
  position: relative;
  padding: 0.4rem 3rem;
  width: 100%;
  background: #8d4a34;
  background: linear-gradient(45deg, #8d4a34, #c72d2a);
  justify-content: flex-end;
  padding-right: 9rem;
  text-align: right;
  vertical-align: top;
}
.header__left--top h1 {
  font-size: 3rem;
  color: #fff;
  text-transform: uppercase;
}
.header__left .logo {
  margin: 2rem;
}
.header__left .logo img {
  width: 20rem;
}
.header__left-box {
  width: 100%;
  padding: 2rem;

  border-radius: 2rem;
  margin: 2rem;
  border: 1px solid #a7472e;
}
.header__left-box ul li {
  font-weight: 600;
  margin: 0.5rem 0;
}
.header__left-box ul li * {
  display: inline-block;
}
.header__left-box ul li dd {
  width: 10rem;
  margin: 0;
}
.header__right {
  position: relative;
  z-index: 1;
  width: 24%;
  display: inline-block;
  vertical-align: top;
}
.header__right img {
  width: 100%;
}

.footer {
  margin-top: 3rem;
}
.footer__left {
  position: relative;
  z-index: 1;
  display: inline-block;
  width: 20%;}
.footer__left img {
  width: 100%;
}
.footer__right {
  position: relative;
  display: inline-block;
  padding: 0.4rem 3rem;

  padding-left: 9rem;
}
.footer__right .contactus {
  gap: 2rem;
  text-align: center;
}
.footer__right .contactus__img {
  width: 3.5rem;
  height: 3.5rem;
  background: #c72d2a;
  display: grid;
  place-items: center;
  border-radius: 50%;
}
.footer__right .contactus__img img {
  padding: .6rem;
  filter: invert(1);


}
.footer__right .contactus li {
  gap: 1rem;
  display: inline-block;
  vertical-align: middle;
margin:.5rem 0;
}
.footer__right .contactus li * {
  display: inline-block;
  vertical-align: middle;
  text-decoration: none;
}
.footer__right .contactus p {
  width: 150px;
margin:0;
}
.footer__right .contactus li,
.footer__right .contactus li a,
.footer__right .contactus li p {
  font-size: 1.1rem;
  color: #fff;
}

.indexPage .recipt {
  margin: 0 0 1rem;
  justify-content: space-around;
}
.indexPage .recipt li {
  font-weight: 600;
  display: inline-block;
  width: 30%;
  text-align: center;
  margin: 0 auto;
}
.indexPage .recipt li * {
  display: inline-block;
  vertical-align: middle;
}
.indexPage .tableScroll {
  overflow: auto;
}
.indexPage table {
  border-collapse: collapse;
  width: 100%;
}
.indexPage table thead tr th {
  background: #a7472e;
  color: #fff;
  padding: 1rem;
}
.indexPage table tbody tr td {
  padding: 1rem 2rem;
  text-align: center;
}
.indexPage table tbody tr:nth-child(2n) td {
  background: #dedede;
}
.indexPage .tablebox {
  width: 60%;
  margin-left: auto;
}
.indexPage .tablebox li {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  padding: 1rem 2rem;
}
.indexPage .tablebox li dd {
  font-weight: 600;
  margin: 0;
}
.indexPage .tablebox li span {
  padding-left: 4rem;
}
.indexPage .tablebox li:nth-child(2n) {
  background: #dedede;
}
.indexPage .tablebox li.tableboxend {
  background: #a7472e;
  color: #fff;
}

.indexPage .tablebox li dd{
    width: 46%;
 display: inline-block;
   vertical-align: middle;

}
.indexPage .tablebox li span {
    width: 26%;
 	display: inline-block;
    vertical-align: middle;

}

/*# sourceMappingURL=main.css.map */

        </style> 
</head>

<body class="">
    <div class="invoices">
    <div class="watermark">
      <img src="{{asset('images/invoice/watermark.png')}}" class="" alt="">
    </div>
    <header class="header">
      <div class="header_img" style="position: absolute; top:0;">
        <img src="{{asset('images/invoice/5.png')}}" style="width: 100%;" alt="">
      </div>
      
      <div class="header__left" style="padding-top: 5rem;">
        <div class="logo">
          <a href="#"><img src="{{asset('images/invoice/logo.png')}}" alt=""></a>
        </div>
        <div class="header__left-box">
          <ul class="list">
            <li class="flex_">
              <dd>Name </dd><span>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;</span>
              <span>{{ ucwords(global_setting()->company_name) }}</span>
            </li>
            <li class="flex_">
              <dd>Address </dd><span>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;</span>
              @if (!is_null($settings) && $invoice->address)
              <span style=" display: initial;">
                {!! nl2br($invoice->address->address) !!}</span>
                @endif
            </li>
            
            <li class="flex_">
              <dd>Phone No </dd><span>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;</span>
              <span>{{ global_setting()->company_phone }}<br>
                @if ($invoiceSetting->show_gst == 'yes' && $invoice->address)
                    <br>{{ $invoice->address->tax_name }}: {{ $invoice->address->tax_number }}
                    @endif
                  </span>
             
            </li>
          </ul>
        </div>
      </div>
      <!-- close header__left -->
      <div class="header__right">
      </div>
    </header>
    <main class="indexPage">
      <ul class="list recipt flex_ ">
        <li class="flex_"><dd>@lang('modules.invoices.invoiceNumber')</dd> <b>{{ $invoice->invoice_number }}</b></li>
              @if ($creditNote)
              <li class="flex_"><dd>@lang('app.credit-note')</dd> <b> {{ $creditNote->cn_number }}<</b></li>
              @endif
              <li class="flex_">
		<dd>@lang('modules.invoices.invoiceDate')</dd>
		 <b>  {{ $invoice->issue_date->format(global_setting()->date_format) }}</b>
		</li>
              @if (empty($invoice->order_id) && $invoice->status === 'unpaid' && $invoice->due_date->year > 1)
              <li class="flex_">
		<dd>@lang('app.dueDate')</dd> 
		<b>  {{ $invoice->due_date->format(global_setting()->date_format) }}</b>
		</li>
              @endif
              @if (!is_null($invoice->project) && !is_null($invoice->project->client) && !is_null($invoice->project->client->clientDetails))
              @php
                  $client = $invoice->project->client;
              @endphp
          @elseif(!is_null($invoice->client_id) && !is_null($invoice->clientDetails))
              @php
                  $client = $invoice->client;
              @endphp
          @endif
          @if (($invoiceSetting->show_client_name == 'yes' || $invoiceSetting->show_client_email == 'yes' || $invoiceSetting->show_client_phone == 'yes' || $invoiceSetting->show_client_company_name == 'yes' || $invoiceSetting->show_client_company_address == 'yes') && $client)
          <li class="flex_">
            <dd> @lang('modules.invoices.billedTo')</dd>
             <b> </b>
            </li>
          <li class="flex_">
            @if ($client->name && $invoiceSetting->show_client_name == 'yes')
                                            {{ ucwords($client->name) }}<br>
                                        @endif

                                        @if ($client->email && $invoiceSetting->show_client_email == 'yes')
                                            {{ $client->email }}<br>
                                        @endif

                                        @if ($client->mobile && $invoiceSetting->show_client_phone == 'yes')
                                            {{ $client->mobile }}<br>
                                        @endif

                                        @if ($client->clientDetails->company_name && $invoiceSetting->show_client_company_name == 'yes')
                                            {{ ucwords($client->clientDetails->company_name) }}<br>
                                        @endif

                                        @if ($client->clientDetails->address && $invoiceSetting->show_client_company_address == 'yes')
                                            {!! nl2br($client->clientDetails->address) !!}
                                        @endif
            </li>
            @endif
            <li class="flex_">
                @if ($invoiceSetting->show_project == 1 && isset($invoice->project->project_name))
                <dd>@lang('modules.invoices.projectName')</dd> 
                <span> {{ $invoice->project->project_name }}
                   </span>
                   @endif
            </li>
            <li class="flex_">
                @if ($invoiceSetting->show_gst == 'yes' && !is_null($client->clientDetails->gst_number))
                <dd>@lang('app.gstIn'):</dd> 
                <span> {{ $client->clientDetails->gst_number }}
                   </span>
                   @endif
            </li>
            <li class="flex_">
                @if ($invoice->show_shipping_address == 'yes')
                <dd>@lang('app.shippingAddress'):</dd> 
                <span> {!! nl2br($client->clientDetails->shipping_address) !!}
                   </span>
                   @endif
            </li>
            <li class="flex_">
                @if ($invoice->credit_note)
                @lang('app.credit-note')
            @else
                @lang('modules.invoices.' . $invoice->status)
            @endif
            </li>
            </ul>
     <div class="tableScroll">
      <table class="table">
        <thead>
          <tr>
            <th>@lang('app.description')</th>
            @if ($invoiceSetting->hsn_sac_code_show)
            <th>@lang('app.hsnSac')</th>
        @endif
        <th>@lang('modules.invoices.qty')</th>
        <th>@lang('modules.invoices.unitPrice')</th>
        <th>@lang('modules.invoices.tax')</th>
        <th>
          @lang('modules.invoices.amount')
            ({{ $invoice->currency->currency_code }})
          </th>
          </tr>
        </thead>
       <tbody>
    @foreach ($invoice->items as $item)
            @if ($item->type == 'item')
                <!-- Table Row Start -->
                <tr >
                    <td >
                        {{ ucfirst($item->item_name) }}
                    </td>
                    @if ($invoiceSetting->hsn_sac_code_show)
                        <td>
                            {{ $item->hsn_sac_code ? $item->hsn_sac_code : '--' }}</td>
                    @endif
                    <td>{{ $item->quantity }}</td>
                    <td>{{ currency_formatter($item->unit_price, '') }}</td>
                    <td >{{ $item->tax_list }}</td>
                    <td>
                        {{ currency_formatter($item->amount, '') }}</td>
                </tr>
                <!-- Table Row End -->
                @if ($item->item_summary != '' || $item->invoiceItemImage)
                    </table>
                    <div>
                        {!! nl2br(strip_tags($item->item_summary, ['p', 'b', 'strong', 'a'])) !!}
                        @if ($item->invoiceItemImage)
                            <p class="mt-2">
                                <img src="{{ $item->invoiceItemImage->file_url }}" width="60" height="60" class="img-thumbnail">
                            </p>
                        @endif
                    </div>
                    <table >
                @endif
            @endif
        @endforeach
    </table>


    @if (count($payments) > 0)
        <div class="page_break"></div>
        <h3>@lang('app.menu.payments') ({{ $invoice->invoice_number }})</h3>
        <table class="f-14 b-collapse" width="100%">
            <tr class="main-table-heading text-grey">
                <td class="text-center">#</td>
                <td class="text-center">@lang('modules.invoices.price')</td>
                <td class="text-center">@lang('modules.invoices.paymentMethod')</td>
                <td class="text-center">@lang('modules.invoices.paidOn')</td>
            </tr>

            @forelse($payments as $key => $payment)
                <tr class="main-table-items">
                    <td class="text-center">{{ $key + 1 }}</td>
                    <td class="text-center">{{ currency_formatter($payment->amount, '') }}
                        {{ $invoice->currency->currency_code }}</td>
                    <td class="text-center">
                        @php
                            $method = '--';

                            if (!is_null($payment->offline_method_id)) {
                                $method = $payment->offlineMethod->name;
                            } elseif (isset($payment->gateway)) {
                                $method = $payment->gateway;
                            }
                        @endphp

                        {{ $method }}
                    </td>
                    <td class="text-center"> {{ $payment->paid_on->format(global_setting()->date_format) }} </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">@lang('messages.noRecordFound') </td>
                </tr>
            @endforelse
        </table>
    @endif
     </div> 
     <div class="tablebox">
      <ul class="list">
        <li>
          <dd>@lang('modules.invoices.subTotal')</dd>
           <span> {{ currency_formatter($invoice->sub_total, '') }}</span>
          </li>
        @if ($discount != 0 && $discount != '')
            <li>
              <dd>@lang('modules.invoices.discount')</dd>
               <span>{{ currency_formatter($discount, '') }}</span>
            </li>
    @endif
    @foreach ($taxes as $key => $tax)
    <li>
      <dd>{{ strtoupper($key) }}</dd> 
      <span>{{ currency_formatter($tax, '') }}</span>
  </li>
@endforeach
        <li>
          <dd>@lang('modules.invoices.total')</dd>
           <span> {{ currency_formatter($invoice->total, '') }}</span>
          </li>
        <li>
          <dd> @lang('modules.invoices.due')</dd> 
          <span>  {{ currency_formatter($invoice->amountDue(), '') }}
          {{ $invoice->currency->currency_code }}</span>
      </li>
    </ul>
     </div>
    </main>
    <footer class="footer flex_" style="
    position: relative;
">
      <div class="footer_img">
        <div class="header_img">
          <img src="{{asset('images/invoice/6.png')}}" style="width: 100%;" alt="">
        </div>
      </div>
      <!-- <div class="footer__left">
        <img src="{{asset('images/invoice/4.png')}}" alt="">
      </div>
      <div class="footer__right">
        <div class="footer__right_"></div>
        <ul class="list contactus flex_ align_center">
          <li class="flex_ align_center"><div class="contactus__img"><img src="{{asset('images/invoice/telephone.png')}}" alt=""></div> <a href="#">+92-213-2311354</a></li>
          <li class="flex_ align_center"><div class="contactus__img"><img src="{{asset('images/invoice/envelope.png')}}" alt=""></div> <a href="#">info@sidtechno.com</a></li>
         
        </ul>
        <ul class="list contactus">
          <li class="flex_ align_center"><div class="contactus__img"><img src="{{asset('images/invoice/home.png')}}" alt=""></div> <p href="#">Office#405 Custom Trade Tower KPT, Kharadar, Karachi.</p></li>
          <li class="flex_ align_center"><div class="contactus__img"><img src="{{asset('images/invoice/globe.png')}}" alt=""></div> <a href="#">www.sidetechno.com</a></li>
        </ul>
      </div> -->
      <div class="footer__right" style="
    position: absolute;
    right: 0;
    transform: translateY(-50%);
    bottom: -9px;">
        <div class="footer__right_"></div>
        <ul class="list contactus flex_ align_center">
          <li class="flex_ align_center"><div class="contactus__img"><img src="{{asset('images/invoice/telephone.png')}}" alt=""></div> <a href="#">+92-213-2311354</a></li>
          <li class="flex_ align_center"><div class="contactus__img"><img src="{{asset('images/invoice/envelope.png')}}" alt=""></div> <a href="#">info@sidtechno.com</a></li>
         
          <li class="flex_ align_center"><div class="contactus__img"><img src="{{asset('images/invoice/home.png')}}" alt=""></div> <p href="#">Office#405 Custom Trade Tower KPT, Kharadar, Karachi.</p></li>
          <li class="flex_ align_center"><div class="contactus__img"><img src="{{asset('images/invoice/globe.png')}}" alt=""></div> <a href="#">www.sidetechno.com</a></li>
        </ul>
      </div> 
    </footer>
  </div>
</body>
</html>
