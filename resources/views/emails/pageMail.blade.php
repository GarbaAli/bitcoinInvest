<link rel="stylesheet" href="https://www.bitcoin-investissement.com/public/css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
@component('mail::message')
Hello, <strong>{{$client['username']}}</strong>

Welcome to  <strong style="color:#000">BITCOIN</strong><strong style="color:#07551c">-INVESTISSEMENT</strong>

<p style="font-align:justify">
Please transfert the amount to be invested to one of the following payment methods:
</p>

<div class="col-md-4 ftco-animate d-flex">
	<div class="block-7 w-100">
		<div class="text-center">
		
			<ul class="pricing-text mb-5">
				<li class="d-flex justify-content-between">
					<p><i style="color:  #07551c" class="fa fa-check mr-2"></i> Min-Invest</p>
					<p style="color:  #07551c">$50.00</p>
				</li>
				<li class="d-flex justify-content-between">
					<p><i style="color:  #07551c" class="fa fa-check mr-2"></i> Max-Invest</p>
					<p style="color:  #07551c">$299.00</p>
				</li>
				<li class="d-flex justify-content-between">
					<p><i style="color:  #07551c" class="fa fa-check mr-2"></i>Ref Commissions</p>
					<p style="color:  #07551c">10 %</p>
				</li>
				<li class="d-flex justify-content-between">
					<p><i style="color:  #07551c" class="fa fa-check mr-2"></i>Instant Payment</p>
					<p style="color:  #07551c">Yes</p>
				</li><hr>
				<p>
					You will receive 200% daily profit and after48 hours you can withdraw, re-invest or top up
				</p>
			</ul>
		
		</div>
	</div>
</div>

<p>
    Then please send us the screenshot of the amount invested
</p>


<hr>
<h4>your informations;</h4>
<p>
<!--Wallet Address : {{$client->wallet}} <br>-->
<!--Amount : {{$client->amount}} <br>-->
<!--your mail  : {{$client->email}}-->
</p>

<br><br><br><br>


Sincerely <strong style="color:#000">BITCOIN</strong><strong style="color:#07551c">-INVESTISSEMENT</strong>
@endcomponent