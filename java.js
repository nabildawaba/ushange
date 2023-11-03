
















window.onbeforeunload = function () {
  window.scrollTo(0, 0);
}


$('.btc').click(function() {
	



	$('input.directionin').val('BTC');
		var inclass = 'btc';
		$('input.directioninclass').val(inclass);
	 
		setTimeout(function(){
$('.exc').removeClass('active');
$('.btc1').removeClass('active');
$('.btc').removeClass('active');
 

$('.btc').addClass('active');


	$('.exc').css('text-shadow', '0 0 1px #fff');
$('.btc').css('text-shadow', '0 0 2px rgba(0,0,0,.5), 0 1px 1px rgba(0,0,0,.1)');
}, 200);
	if(($('input.directionto').val() !== '') && ($('input.directionto').val() !== 'BTC')){
 $('.directionsubmit').click();
	
}



 });
 
 $('.btc1').click(function() {

	 $('input.directionto').val('BTC');
	 var toclass = 'btc1';
		 $('input.directiontoclass').val(toclass);
		 
$('.exc1').removeClass('active');
$('.btc').removeClass('active');
$('.btc1').removeClass('active');
$(this).addClass('active');

$('.exc').css('text-shadow', '0 0 1px #fff');
$('.btc1').css('text-shadow', '0 0 2px rgba(0,0,0,.5), 0 1px 1px rgba(0,0,0,.1)');


	if(($('input.directionin').val() !== '') && ($('input.directionin').val() !== 'BTC')){
		 $('.directionsubmit').click();
			
		}
 




 });
 
 
/*
 $('.bitcoin2').click(function() {
$('.exc1').removeClass('active');
$('.bitcoin1').removeClass('active');
$('.bitcoin2').removeClass('active');
$(this).addClass('active');

$('.exc a').each(function(i){
   
var statsValue =  $(this).attr("data-fullname");
if(statsValue == "BTC"){
	
}else{
	  $(this).attr("href", "./exchange_" + statsValue +"_to_BTC");
}
   
});


 });
*/
	$('.bitcoincash1').click(function() {
$('.exc').removeClass('active');		
$('.bitcoincash2').removeClass('active');
$('.bitcoincash1').removeClass('active');
$(this).addClass('active');



 });
$('.bitcoincash2').click(function() {
	
	
		
	$('.exc1').removeClass('active');
$('.bitcoincash1').removeClass('active');
$('.bitcoincash2').removeClass('active');
$(this).addClass('active');






 });
 
 /* =====================================*/
 $('.bitcoinsv').click(function() {
$('.exc').removeClass('active');
$('.bitcoinsv1').removeClass('active');
$('.bitcoinsv').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.bitcoinsv1').click(function() {
$('.exc1').removeClass('active');
$('.bitcoinsv').removeClass('active');
$('.bitcoinsv1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
 
 
 /* =====================================*/
 $('.bitcoingold').click(function() {
$('.exc').removeClass('active');
$('.bitcoingold1').removeClass('active');
$('.bitcoingold').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.bitcoingold1').click(function() {
$('.exc1').removeClass('active');
$('.bitcoingold').removeClass('active');
$('.bitcoingold1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
 
 
 /* =====================================*/
 $('.eth').click(function() {
$('.exc').removeClass('active');
$('.eth1').removeClass('active');
$('.eth').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.eth1').click(function() {
$('.exc1').removeClass('active');
$('.eth').removeClass('active');
$('.eth1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
 
 /* =====================================*/
 $('.etc').click(function() {
$('.exc').removeClass('active');
$('.etc1').removeClass('active');
$('.etc').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.etc1').click(function() {
$('.exc1').removeClass('active');
$('.etc').removeClass('active');
$('.etc1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
  /* =====================================*/
 $('.ltc').click(function() {
$('.exc').removeClass('active');
$('.ltc1').removeClass('active');
$('.ltc').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.ltc1').click(function() {
$('.exc1').removeClass('active');
$('.ltc').removeClass('active');
$('.ltc1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
 /* =====================================*/
 $('.xrp').click(function() {
$('.exc').removeClass('active');
$('.xrp1').removeClass('active');
$('.xrp').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.xrp1').click(function() {
$('.exc1').removeClass('active');
$('.xrp').removeClass('active');
$('.xrp1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
 
  /* =====================================*/
 $('.xmr').click(function() {
$('.exc').removeClass('active');
$('.xmr1').removeClass('active');
$('.xmr').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.xmr1').click(function() {
$('.exc1').removeClass('active');
$('.xmr').removeClass('active');
$('.xmr1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
   /* =====================================*/
 $('.doge').click(function() {
$('.exc').removeClass('active');
$('.doge1').removeClass('active');
$('.doge').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.doge1').click(function() {
$('.exc1').removeClass('active');
$('.doge').removeClass('active');
$('.doge1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
   /* =====================================*/
 $('.ppc').click(function() {
$('.exc').removeClass('active');
$('.ppc1').removeClass('active');
$('.ppc').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.ppc1').click(function() {
$('.exc1').removeClass('active');
$('.ppc').removeClass('active');
$('.ppc1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
   /* =====================================*/
 $('.dash').click(function() {
$('.exc').removeClass('active');
$('.dash1').removeClass('active');
$('.dash').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.dash1').click(function() {
$('.exc1').removeClass('active');
$('.dash').removeClass('active');
$('.dash1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
    /* =====================================*/
 $('.zec').click(function() {
$('.exc').removeClass('active');
$('.zec1').removeClass('active');
$('.zec').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.zec1').click(function() {
$('.exc1').removeClass('active');
$('.zec').removeClass('active');
$('.zec1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
     /* =====================================*/
 $('.usdt').click(function() {
$('.exc').removeClass('active');
$('.usdt1').removeClass('active');
$('.usdt').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.usdt1').click(function() {
$('.exc1').removeClass('active');
$('.usdt').removeClass('active');
$('.usdt1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
   /* =====================================*/
 $('.usdtt').click(function() {
$('.exc').removeClass('active');
$('.usdtt1').removeClass('active');
$('.usdtt').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.usdtt1').click(function() {
$('.exc1').removeClass('active');
$('.usdtt').removeClass('active');
$('.usdtt1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
   /* =====================================*/
 $('.usdtt').click(function() {
$('.exc').removeClass('active');
$('.usdtt1').removeClass('active');
$('.usdtt').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.usdtt1').click(function() {
$('.exc1').removeClass('active');
$('.usdtt').removeClass('active');
$('.usdtt1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
  /* =====================================*/
 $('.usdttt').click(function() {
$('.exc').removeClass('active');
$('.usdttt1').removeClass('active');
$('.usdttt').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.usdttt1').click(function() {
$('.exc1').removeClass('active');
$('.usdttt').removeClass('active');
$('.usdttt1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
   /* =====================================*/
 $('.usdc').click(function() {
$('.exc').removeClass('active');
$('.usdc1').removeClass('active');
$('.usdc').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.usdc1').click(function() {
$('.exc1').removeClass('active');
$('.usdc').removeClass('active');
$('.usdc1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
  /* =====================================*/
 $('.tusd').click(function() {
$('.exc').removeClass('active');
$('.tusd1').removeClass('active');
$('.tusd').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.tusd1').click(function() {
$('.exc1').removeClass('active');
$('.tusd').removeClass('active');
$('.tusd1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
 /* =====================================*/
 $('.pax').click(function() {
$('.exc').removeClass('active');
$('.pax1').removeClass('active');
$('.pax').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.pax1').click(function() {
$('.exc1').removeClass('active');
$('.pax').removeClass('active');
$('.pax1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
  /* =====================================*/
 $('.xem').click(function() {
$('.exc').removeClass('active');
$('.xem1').removeClass('active');
$('.xem').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.xem1').click(function() {
$('.exc1').removeClass('active');
$('.xem').removeClass('active');
$('.xem1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
   /* =====================================*/
 $('.rep').click(function() {
$('.exc').removeClass('active');
$('.rep1').removeClass('active');
$('.rep').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.rep1').click(function() {
$('.exc1').removeClass('active');
$('.rep').removeClass('active');
$('.rep1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
 /* =====================================*/
 $('.neo').click(function() {
$('.exc').removeClass('active');
$('.neo1').removeClass('active');
$('.neo').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.neo1').click(function() {
$('.exc1').removeClass('active');
$('.neo').removeClass('active');
$('.neo1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
 /* =====================================*/
 $('.eos').click(function() {
$('.exc').removeClass('active');
$('.eos1').removeClass('active');
$('.eos').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.eos1').click(function() {
$('.exc1').removeClass('active');
$('.eos').removeClass('active');
$('.eos1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
 /* =====================================*/
 $('.miota').click(function() {
$('.exc').removeClass('active');
$('.miota1').removeClass('active');
$('.miota').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.miota1').click(function() {
$('.exc1').removeClass('active');
$('.miota').removeClass('active');
$('.miota1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
  /* =====================================*/
 $('.lsk').click(function() {
$('.exc').removeClass('active');
$('.lsk1').removeClass('active');
$('.lsk').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.lsk1').click(function() {
$('.exc1').removeClass('active');
$('.lsk').removeClass('active');
$('.lsk1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
   /* =====================================*/
 $('.ada').click(function() {
$('.exc').removeClass('active');
$('.ada1').removeClass('active');
$('.ada').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.ada1').click(function() {
$('.exc1').removeClass('active');
$('.ada').removeClass('active');
$('.ada1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
   /* =====================================*/
 $('.xlm').click(function() {
$('.exc').removeClass('active');
$('.xlm1').removeClass('active');
$('.xlm').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.xlm1').click(function() {
$('.exc1').removeClass('active');
$('.xlm').removeClass('active');
$('.xlm1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
    /* =====================================*/
 $('.bcn').click(function() {
$('.exc').removeClass('active');
$('.bcn1').removeClass('active');
$('.bcn').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.bcn1').click(function() {
$('.exc1').removeClass('active');
$('.bcn').removeClass('active');
$('.bcn1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
  /* =====================================*/
 $('.trx').click(function() {
$('.exc').removeClass('active');
$('.trx1').removeClass('active');
$('.trx').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.trx1').click(function() {
$('.exc1').removeClass('active');
$('.trx').removeClass('active');
$('.trx1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
   /* =====================================*/
 $('.waves').click(function() {
$('.exc').removeClass('active');
$('.waves1').removeClass('active');
$('.waves').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.waves1').click(function() {
$('.exc1').removeClass('active');
$('.waves').removeClass('active');
$('.waves1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
 /* =====================================*/
 $('.omg').click(function() {
$('.exc').removeClass('active');
$('.omg1').removeClass('active');
$('.omg').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.omg1').click(function() {
$('.exc1').removeClass('active');
$('.omg').removeClass('active');
$('.omg1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
 /* =====================================*/
 $('.xvg').click(function() {
$('.exc').removeClass('active');
$('.xvg1').removeClass('active');
$('.xvg').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.xvg1').click(function() {
$('.exc1').removeClass('active');
$('.xvg').removeClass('active');
$('.xvg1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
  
 /* =====================================*/
 $('.zrx').click(function() {
$('.exc').removeClass('active');
$('.zrx1').removeClass('active');
$('.zrx').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.zrx1').click(function() {
$('.exc1').removeClass('active');
$('.zrx').removeClass('active');
$('.zrx1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
  
 /* =====================================*/
 $('.bnb').click(function() {
$('.exc').removeClass('active');
$('.bnb1').removeClass('active');
$('.bnb').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.bnb1').click(function() {
$('.exc1').removeClass('active');
$('.bnb').removeClass('active');
$('.bnb1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
  /* =====================================*/
 $('.icx').click(function() {
$('.exc').removeClass('active');
$('.icx1').removeClass('active');
$('.icx').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.icx1').click(function() {
$('.exc1').removeClass('active');
$('.icx').removeClass('active');
$('.icx1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
   /* =====================================*/
 $('.xmd').click(function() {
$('.exc').removeClass('active');
$('.xmd1').removeClass('active');
$('.xmd').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.xmd1').click(function() {
$('.exc1').removeClass('active');
$('.xmd').removeClass('active');
$('.xmd1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
    /* =====================================*/
 $('.btt').click(function() {
$('.exc').removeClass('active');
$('.btt1').removeClass('active');
$('.btt').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.btt1').click(function() {
$('.exc1').removeClass('active');
$('.btt').removeClass('active');
$('.btt1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
    /* =====================================*/
 $('.bat').click(function() {
$('.exc').removeClass('active');
$('.bat1').removeClass('active');
$('.bat').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.bat1').click(function() {
$('.exc1').removeClass('active');
$('.bat').removeClass('active');
$('.bat1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
  /* =====================================*/
 $('.ont').click(function() {
$('.exc').removeClass('active');
$('.ont1').removeClass('active');
$('.ont').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.ont1').click(function() {
$('.exc1').removeClass('active');
$('.ont').removeClass('active');
$('.ont1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
  /* =====================================*/
 $('.qtum').click(function() {
$('.exc').removeClass('active');
$('.qtum1').removeClass('active');
$('.qtum').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.qtum1').click(function() {
$('.exc1').removeClass('active');
$('.qtum').removeClass('active');
$('.qtum1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
 /* =====================================*/
 $('.link').click(function() {
$('.exc').removeClass('active');
$('.link1').removeClass('active');
$('.link').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.link1').click(function() {
$('.exc1').removeClass('active');
$('.link').removeClass('active');
$('.link1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
  /* =====================================*/
 $('.atom').click(function() {
$('.exc').removeClass('active');
$('.atom1').removeClass('active');
$('.atom').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.atom1').click(function() {
$('.exc1').removeClass('active');
$('.atom').removeClass('active');
$('.atom1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
  /* =====================================*/
 $('.xtz').click(function() {
$('.exc').removeClass('active');
$('.xtz1').removeClass('active');
$('.xtz').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.xtz1').click(function() {
$('.exc1').removeClass('active');
$('.xtz').removeClass('active');
$('.xtz1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
  /* =====================================*/
 $('.pmusd').click(function() {
	 
	 	$('input.directionin').val('PMUSD');
		var inclass = 'pmusd';
		$('input.directioninclass').val(inclass);
	 
		
$('.exc').removeClass('active');
$('.pmusd1').removeClass('active');
$('.pmusd').removeClass('active');
$(this).addClass('active');
	$('.exc').css('text-shadow', '0 0 1px #fff');
$('.pmusd').css('text-shadow', '0 0 2px rgba(0,0,0,.5), 0 1px 1px rgba(0,0,0,.1)');

	if(($('input.directionto').val() !== '') && ($('input.directionto').val() !== 'PMUSD')){
 $('.directionsubmit').click();
	
}

 });
 
 
 $('.pmusd1').click(function() {
	 
	 $('input.directionto').val('PMUSD');
	 var toclass = 'pmusd1';
		 $('input.directiontoclass').val(toclass);
		 
$('.exc1').removeClass('active');
$('.pmusd').removeClass('active');
$('.pmusd1').removeClass('active');
$(this).addClass('active');

$('.exc').css('text-shadow', '0 0 1px #fff');
$('.pmusd1').css('text-shadow', '0 0 2px rgba(0,0,0,.5), 0 1px 1px rgba(0,0,0,.1)');


	if(($('input.directionin').val() !== '') && ($('input.directionin').val() !== 'PMUSD')){
		 $('.directionsubmit').click();
			
		}
 


 });
 
 /* =====================================*/
 
 
  $('.pyr').click(function() {
$('.exc').removeClass('active');
$('.pyr1').removeClass('active');
$('.pyr').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.pyr1').click(function() {
	 
	 $('input.directionto').val('PRUSD');
	 var toclass = $('.pyr1').attr('class');
	
	 
	var pretoclass = toclass.split(' ')[2];
		if(pretoclass == 'active'){
			 var toclass = toclass.split(' ')[1];
		}else{
			 var toclass = toclass.split(' ')[2];
		}
		 $('input.directiontoclass').val(toclass);
	 
		
	
	$('.exc').css('text-shadow', '0 0 1px #fff');
$('.pyr1').css('text-shadow', '0 0 2px rgba(0,0,0,.5), 0 1px 1px rgba(0,0,0,.1)');

			
		$('.exc1').removeClass('active');
		$('.pyr').removeClass('active');
		$('.pyr1').removeClass('active');
		$(this).addClass('active');
			if($('input.directionin').val() !== ''){
		 $('.directionsubmit').click();
			
		}


 });
 
 
   /* =====================================*/
 $('.pmeur').click(function() {
	 
		$('input.directionin').val('PMEUR');
		var inclass = 'pmeur';
		$('input.directioninclass').val(inclass);
	 
		
$('.exc').removeClass('active');
$('.pmeur1').removeClass('active');
$('.pmeur').removeClass('active');
$(this).addClass('active');
	$('.exc').css('text-shadow', '0 0 1px #fff');
$('.pmeur').css('text-shadow', '0 0 2px rgba(0,0,0,.5), 0 1px 1px rgba(0,0,0,.1)');

	if(($('input.directionto').val() !== '') && ($('input.directionto').val() !== 'PMEUR')){
 $('.directionsubmit').click();
	
}








 });
 
 
 $('.pmeur1').click(function() {

	 $('input.directionto').val('PMEUR');
	 var toclass = 'pmeur1';
		 $('input.directiontoclass').val(toclass);
		 
$('.exc1').removeClass('active');
$('.pmeur').removeClass('active');
$('.pmeur1').removeClass('active');
$(this).addClass('active');

$('.exc').css('text-shadow', '0 0 1px #fff');
$('.pmeur1').css('text-shadow', '0 0 2px rgba(0,0,0,.5), 0 1px 1px rgba(0,0,0,.1)');


	if(($('input.directionin').val() !== '') && ($('input.directionin').val() !== 'PMEUR')){
		 $('.directionsubmit').click();
			
		}
 
		
 });
 
 /* =====================================*/
   /* =====================================*/
 $('.pmbtc').click(function() {
$('.exc').removeClass('active');
$('.pmbtc1').removeClass('active');
$('.pmbtc').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.pmbtc1').click(function() {
$('.exc1').removeClass('active');
$('.pmbtc').removeClass('active');
$('.pmbtc1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
 /* =====================================*/
 $('.pmv').click(function() {
$('.exc').removeClass('active');
$('.pmv1').removeClass('active');
$('.pmv').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.pmv1').click(function() {
$('.exc1').removeClass('active');
$('.pmv').removeClass('active');
$('.pmv1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
  /* =====================================*/
 $('.pp').click(function() {
$('.exc').removeClass('active');
$('.pp1').removeClass('active');
$('.pp').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.pp1').click(function() {
$('.exc1').removeClass('active');
$('.pp').removeClass('active');
$('.pp1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
  /* =====================================*/
 $('.pprub').click(function() {
$('.exc').removeClass('active');
$('.pprub1').removeClass('active');
$('.pprub').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.pprub1').click(function() {
$('.exc1').removeClass('active');
$('.pprub').removeClass('active');
$('.pprub1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
  /* =====================================*/
 $('.ppeur').click(function() {
$('.exc').removeClass('active');
$('.ppeur1').removeClass('active');
$('.ppeur').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.ppeur1').click(function() {
$('.exc1').removeClass('active');
$('.ppeur').removeClass('active');
$('.ppeur1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
   /* =====================================*/
 $('.ppgbp').click(function() {
$('.exc').removeClass('active');
$('.ppgbp1').removeClass('active');
$('.ppgbp').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.ppgbp1').click(function() {
$('.exc1').removeClass('active');
$('.ppgbp').removeClass('active');
$('.ppgbp1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
    /* =====================================*/
 $('.adv').click(function() {
$('.exc').removeClass('active');
$('.adv1').removeClass('active');
$('.adv').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.adv1').click(function() {
$('.exc1').removeClass('active');
$('.adv').removeClass('active');
$('.adv1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
   /* =====================================*/
 $('.adveur').click(function() {
$('.exc').removeClass('active');
$('.adveur1').removeClass('active');
$('.adveur').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.adveur1').click(function() {
$('.exc1').removeClass('active');
$('.adveur').removeClass('active');
$('.adveur1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
  /* =====================================*/
 $('.advrub').click(function() {
$('.exc').removeClass('active');
$('.advrub1').removeClass('active');
$('.advrub').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.advrub1').click(function() {
$('.exc1').removeClass('active');
$('.advrub').removeClass('active');
$('.advrub1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
  /* =====================================*/
 $('.advuah').click(function() {
$('.exc').removeClass('active');
$('.advuah1').removeClass('active');
$('.advuah').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.advuah1').click(function() {
$('.exc1').removeClass('active');
$('.advuah').removeClass('active');
$('.advuah1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
  /* =====================================*/
 $('.advkzt').click(function() {
$('.exc').removeClass('active');
$('.advkzt1').removeClass('active');
$('.advkzt').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.advkzt1').click(function() {
$('.exc1').removeClass('active');
$('.advkzt').removeClass('active');
$('.advkzt1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
  /* =====================================*/
 $('.sk').click(function() {
$('.exc').removeClass('active');
$('.sk1').removeClass('active');
$('.sk').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.sk1').click(function() {
$('.exc1').removeClass('active');
$('.sk').removeClass('active');
$('.sk1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
  /* =====================================*/
 $('.skeur').click(function() {
$('.exc').removeClass('active');
$('.skeur1').removeClass('active');
$('.skeur').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.skeur1').click(function() {
$('.exc1').removeClass('active');
$('.skeur').removeClass('active');
$('.skeur1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
  /* =====================================*/
 $('.skgb').click(function() {
$('.exc').removeClass('active');
$('.skgb1').removeClass('active');
$('.skgb').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.skgb1').click(function() {
$('.exc1').removeClass('active');
$('.skgb').removeClass('active');
$('.skgb1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
  /* =====================================*/
 $('.wmz').click(function() {
$('.exc').removeClass('active');
$('.wmz1').removeClass('active');
$('.wmz').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.wmz1').click(function() {
$('.exc1').removeClass('active');
$('.wmz').removeClass('active');
$('.wmz1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
 /* =====================================*/
 $('.wme').click(function() {
$('.exc').removeClass('active');
$('.wme1').removeClass('active');
$('.wme').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.wme1').click(function() {
$('.exc1').removeClass('active');
$('.wme').removeClass('active');
$('.wme1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
  /* =====================================*/
 $('.wmg').click(function() {
$('.exc').removeClass('active');
$('.wmg1').removeClass('active');
$('.wmg').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.wmg1').click(function() {
$('.exc1').removeClass('active');
$('.wmg').removeClass('active');
$('.wmg1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
   /* =====================================*/
 $('.wmx').click(function() {
$('.exc').removeClass('active');
$('.wmx1').removeClass('active');
$('.wmx').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.wmx1').click(function() {
$('.exc1').removeClass('active');
$('.wmx').removeClass('active');
$('.wmx1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
  /* =====================================*/
 $('.wmr').click(function() {
$('.exc').removeClass('active');
$('.wmr1').removeClass('active');
$('.wmr').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.wmr1').click(function() {
$('.exc1').removeClass('active');
$('.wmr').removeClass('active');
$('.wmr1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
 /* =====================================*/
 $('.wmu').click(function() {
$('.exc').removeClass('active');
$('.wmu1').removeClass('active');
$('.wmu').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.wmu1').click(function() {
$('.exc1').removeClass('active');
$('.wmu').removeClass('active');
$('.wmu1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
 /* =====================================*/
 $('.wmb').click(function() {
$('.exc').removeClass('active');
$('.wmb1').removeClass('active');
$('.wmb').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.wmb1').click(function() {
$('.exc1').removeClass('active');
$('.wmb').removeClass('active');
$('.wmb1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
  /* =====================================*/
 $('.wmk').click(function() {
$('.exc').removeClass('active');
$('.wmk1').removeClass('active');
$('.wmk').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.wmk1').click(function() {
$('.exc1').removeClass('active');
$('.wmk').removeClass('active');
$('.wmk1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
   /* =====================================*/
 $('.paymer').click(function() {
$('.exc').removeClass('active');
$('.paymer1').removeClass('active');
$('.paymer').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.paymer1').click(function() {
$('.exc1').removeClass('active');
$('.paymer').removeClass('active');
$('.paymer1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
  /* =====================================*/
 $('.paymerrb').click(function() {
$('.exc').removeClass('active');
$('.paymerrb1').removeClass('active');
$('.paymerrb').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.paymerrb1').click(function() {
$('.exc1').removeClass('active');
$('.paymerrb').removeClass('active');
$('.paymerrb1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
  /* =====================================*/

 
 /* =====================================*/
   /* =====================================*/
 $('.pyrer').click(function() {
$('.exc').removeClass('active');
$('.pyrer1').removeClass('active');
$('.pyrer').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.pyrer1').click(function() {
$('.exc1').removeClass('active');
$('.pyrer').removeClass('active');
$('.pyrer1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
   /* =====================================*/
 $('.pyrrb').click(function() {
$('.exc').removeClass('active');
$('.pyrrb1').removeClass('active');
$('.pyrrb').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.pyrrb1').click(function() {
$('.exc1').removeClass('active');
$('.pyrrb').removeClass('active');
$('.pyrrb1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
  /* =====================================*/
 $('.nt').click(function() {
$('.exc').removeClass('active');
$('.nt1').removeClass('active');
$('.nt').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.nt1').click(function() {
$('.exc1').removeClass('active');
$('.nt').removeClass('active');
$('.nt1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
  /* =====================================*/
 $('.nter').click(function() {
$('.exc').removeClass('active');
$('.nter1').removeClass('active');
$('.nter').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.nter1').click(function() {
$('.exc1').removeClass('active');
$('.nter').removeClass('active');
$('.nter1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
 /* =====================================*/
 $('.paxum').click(function() {
$('.exc').removeClass('active');
$('.paxum1').removeClass('active');
$('.paxum').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.paxum1').click(function() {
$('.exc1').removeClass('active');
$('.paxum').removeClass('active');
$('.paxum1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
  /* =====================================*/
 $('.idram').click(function() {
$('.exc').removeClass('active');
$('.idram1').removeClass('active');
$('.idram').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.idram1').click(function() {
$('.exc1').removeClass('active');
$('.idram').removeClass('active');
$('.idram1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
   /* =====================================*/
 $('.pysera').click(function() {
$('.exc').removeClass('active');
$('.pysera1').removeClass('active');
$('.pysera').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.pysera1').click(function() {
$('.exc1').removeClass('active');
$('.pysera').removeClass('active');
$('.pysera1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
   /* =====================================*/
 $('.pyseraer').click(function() {
$('.exc').removeClass('active');
$('.pyseraer1').removeClass('active');
$('.pyseraer').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.pyseraer1').click(function() {
$('.exc1').removeClass('active');
$('.pyseraer').removeClass('active');
$('.pyseraer1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
   /* =====================================*/
 $('.Epay').click(function() {
$('.exc').removeClass('active');
$('.Epay1').removeClass('active');
$('.Epay').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.Epay1').click(function() {
$('.exc1').removeClass('active');
$('.Epay').removeClass('active');
$('.Epay1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
   /* =====================================*/
 $('.Epayer').click(function() {
$('.exc').removeClass('active');
$('.Epayer1').removeClass('active');
$('.Epayer').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.Epayer1').click(function() {
$('.exc1').removeClass('active');
$('.Epayer').removeClass('active');
$('.Epayer1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
  /* =====================================*/
 $('.apay').click(function() {
$('.exc').removeClass('active');
$('.apay1').removeClass('active');
$('.apay').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.apay1').click(function() {
$('.exc1').removeClass('active');
$('.apay').removeClass('active');
$('.apay1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
  /* =====================================*/
 $('.cap').click(function() {
$('.exc').removeClass('active');
$('.cap1').removeClass('active');
$('.cap').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.cap1').click(function() {
$('.exc1').removeClass('active');
$('.cap').removeClass('active');
$('.cap1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
 /* =====================================*/
 $('.caprb').click(function() {
$('.exc').removeClass('active');
$('.caprb1').removeClass('active');
$('.caprb').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.caprb1').click(function() {
$('.exc1').removeClass('active');
$('.caprb').removeClass('active');
$('.caprb1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
  /* =====================================*/
 $('.psc').click(function() {
$('.exc').removeClass('active');
$('.psc1').removeClass('active');
$('.psc').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.psc1').click(function() {
$('.exc1').removeClass('active');
$('.psc').removeClass('active');
$('.psc1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
  /* =====================================*/
 $('.nx').click(function() {
$('.exc').removeClass('active');
$('.nx1').removeClass('active');
$('.nx').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.nx1').click(function() {
$('.exc1').removeClass('active');
$('.nx').removeClass('active');
$('.nx1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
   /* =====================================*/
 $('.nxer').click(function() {
$('.exc').removeClass('active');
$('.nxer1').removeClass('active');
$('.nxer').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.nxer1').click(function() {
$('.exc1').removeClass('active');
$('.nxer').removeClass('active');
$('.nxer1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
   /* =====================================*/
 $('.gmm').click(function() {
$('.exc').removeClass('active');
$('.gmm1').removeClass('active');
$('.gmm').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.gmm1').click(function() {
$('.exc1').removeClass('active');
$('.gmm').removeClass('active');
$('.gmm1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
  /* =====================================*/
 $('.vepa').click(function() {
$('.exc').removeClass('active');
$('.vepa1').removeClass('active');
$('.vepa').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.vepa1').click(function() {
$('.exc1').removeClass('active');
$('.vepa').removeClass('active');
$('.vepa1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
 /* =====================================*/
 $('.yoo').click(function() {
$('.exc').removeClass('active');
$('.yoo1').removeClass('active');
$('.yoo').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.yoo1').click(function() {
$('.exc1').removeClass('active');
$('.yoo').removeClass('active');
$('.yoo1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
  /* =====================================*/
 $('.qww').click(function() {
$('.exc').removeClass('active');
$('.qww1').removeClass('active');
$('.qww').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.qww1').click(function() {
$('.exc1').removeClass('active');
$('.qww').removeClass('active');
$('.qww1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
  /* =====================================*/
 $('.qwwer').click(function() {
$('.exc').removeClass('active');
$('.qwwer1').removeClass('active');
$('.qwwer').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.qwwer1').click(function() {
$('.exc1').removeClass('active');
$('.qwwer').removeClass('active');
$('.qwwer1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
  /* =====================================*/
 $('.qwwerrb').click(function() {
$('.exc').removeClass('active');
$('.qwwerrb1').removeClass('active');
$('.qwwerrb').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.qwwerrb1').click(function() {
$('.exc1').removeClass('active');
$('.qwwerrb').removeClass('active');
$('.qwwerrb1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
  /* =====================================*/
 $('.qwwkz').click(function() {
$('.exc').removeClass('active');
$('.qwwkz1').removeClass('active');
$('.qwwkz').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.qwwkz1').click(function() {
$('.exc1').removeClass('active');
$('.qwwkz').removeClass('active');
$('.qwwkz1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
  /* =====================================*/
 $('.mbw').click(function() {
$('.exc').removeClass('active');
$('.mbw1').removeClass('active');
$('.mbw').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.mbw1').click(function() {
$('.exc1').removeClass('active');
$('.mbw').removeClass('active');
$('.mbw1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
   /* =====================================*/
 $('.mbwuah').click(function() {
$('.exc').removeClass('active');
$('.mbwuah1').removeClass('active');
$('.mbwuah').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.mbwuah1').click(function() {
$('.exc1').removeClass('active');
$('.mbwuah').removeClass('active');
$('.mbwuah1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
  /* =====================================*/
 $('.exmo').click(function() {
$('.exc').removeClass('active');
$('.exmo1').removeClass('active');
$('.exmo').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.exmo1').click(function() {
$('.exc1').removeClass('active');
$('.exmo').removeClass('active');
$('.exmo1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
  /* =====================================*/
 $('.exmoer').click(function() {
$('.exc').removeClass('active');
$('.exmoer1').removeClass('active');
$('.exmoer').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.exmoer1').click(function() {
$('.exc1').removeClass('active');
$('.exmoer').removeClass('active');
$('.exmoer1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
  /* =====================================*/
 $('.exmobtc').click(function() {
$('.exc').removeClass('active');
$('.exmobtc1').removeClass('active');
$('.exmobtc').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.exmobtc1').click(function() {
$('.exc1').removeClass('active');
$('.exmobtc').removeClass('active');
$('.exmobtc1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
   /* =====================================*/
 $('.exmorb').click(function() {
$('.exc').removeClass('active');
$('.exmorb1').removeClass('active');
$('.exmorb').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.exmorb1').click(function() {
$('.exc1').removeClass('active');
$('.exmorb').removeClass('active');
$('.exmorb1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
  /* =====================================*/
 $('.exmouah').click(function() {
$('.exc').removeClass('active');
$('.exmouah1').removeClass('active');
$('.exmouah').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.exmouah1').click(function() {
$('.exc1').removeClass('active');
$('.exmouah').removeClass('active');
$('.exmouah1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
 /* =====================================*/
 $('.livecoin').click(function() {
$('.exc').removeClass('active');
$('.livecoin1').removeClass('active');
$('.livecoin').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.livecoin1').click(function() {
$('.exc1').removeClass('active');
$('.livecoin').removeClass('active');
$('.livecoin1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
 /* =====================================*/
 $('.livecoinrb').click(function() {
$('.exc').removeClass('active');
$('.livecoinrb1').removeClass('active');
$('.livecoinrb').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.livecoinrb1').click(function() {
$('.exc1').removeClass('active');
$('.livecoinrb').removeClass('active');
$('.livecoinrb1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
  /* =====================================*/
 $('.crx').click(function() {
$('.exc').removeClass('active');
$('.crx1').removeClass('active');
$('.crx').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.crx1').click(function() {
$('.exc1').removeClass('active');
$('.crx').removeClass('active');
$('.crx1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
  /* =====================================*/
 $('.Kuna').click(function() {
$('.exc').removeClass('active');
$('.Kuna1').removeClass('active');
$('.Kuna').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.Kuna1').click(function() {
$('.exc1').removeClass('active');
$('.Kuna').removeClass('active');
$('.Kuna1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
 /* =====================================*/
 $('.vmcard').click(function() {
$('.exc').removeClass('active');
$('.vmcard1').removeClass('active');
$('.vmcard').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.vmcard1').click(function() {
$('.exc1').removeClass('active');
$('.vmcard').removeClass('active');
$('.vmcard1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
  /* =====================================*/
 $('.vmcarder').click(function() {
$('.exc').removeClass('active');
$('.vmcarder1').removeClass('active');
$('.vmcarder').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.vmcarder1').click(function() {
$('.exc1').removeClass('active');
$('.vmcarder').removeClass('active');
$('.vmcarder1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
  /* =====================================*/
 $('.vmcardgb').click(function() {
$('.exc').removeClass('active');
$('.vmcardgb1').removeClass('active');
$('.vmcardgb').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.vmcardgb1').click(function() {
$('.exc1').removeClass('active');
$('.vmcardgb').removeClass('active');
$('.vmcardgb1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
  /* =====================================*/
 $('.vmcardrb').click(function() {
$('.exc').removeClass('active');
$('.vmcardrb1').removeClass('active');
$('.vmcardrb').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.vmcardrb1').click(function() {
$('.exc1').removeClass('active');
$('.vmcardrb').removeClass('active');
$('.vmcardrb1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
 /* =====================================*/
 $('.vmcarduah').click(function() {
$('.exc').removeClass('active');
$('.vmcarduah1').removeClass('active');
$('.vmcarduah').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.vmcarduah1').click(function() {
$('.exc1').removeClass('active');
$('.vmcarduah').removeClass('active');
$('.vmcarduah1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
  /* =====================================*/
 $('.vmcardkzt').click(function() {
$('.exc').removeClass('active');
$('.vmcardkzt1').removeClass('active');
$('.vmcardkzt').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.vmcardkzt1').click(function() {
$('.exc1').removeClass('active');
$('.vmcardkzt').removeClass('active');
$('.vmcardkzt1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
  /* =====================================*/
 $('.vmcardcny').click(function() {
$('.exc').removeClass('active');
$('.vmcardcny1').removeClass('active');
$('.vmcardcny').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.vmcardcny1').click(function() {
$('.exc1').removeClass('active');
$('.vmcardcny').removeClass('active');
$('.vmcardcny1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
   /* =====================================*/
 $('.vmcardbyn').click(function() {
$('.exc').removeClass('active');
$('.vmcardbyn1').removeClass('active');
$('.vmcardbyn').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.vmcardbyn1').click(function() {
$('.exc1').removeClass('active');
$('.vmcardbyn').removeClass('active');
$('.vmcardbyn1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
  /* =====================================*/
 $('.vmcardsek').click(function() {
$('.exc').removeClass('active');
$('.vmcardsek1').removeClass('active');
$('.vmcardsek').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.vmcardsek1').click(function() {
$('.exc1').removeClass('active');
$('.vmcardsek').removeClass('active');
$('.vmcardsek1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
  /* =====================================*/
 $('.vmcardpln').click(function() {
$('.exc').removeClass('active');
$('.vmcardpln1').removeClass('active');
$('.vmcardpln').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.vmcardpln1').click(function() {
$('.exc1').removeClass('active');
$('.vmcardpln').removeClass('active');
$('.vmcardpln1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
   /* =====================================*/
 $('.vmcardmd').click(function() {
$('.exc').removeClass('active');
$('.vmcardmd1').removeClass('active');
$('.vmcardmd').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.vmcardmd1').click(function() {
$('.exc1').removeClass('active');
$('.vmcardmd').removeClass('active');
$('.vmcardmd1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
  /* =====================================*/
 $('.vmcardamd').click(function() {
$('.exc').removeClass('active');
$('.vmcardamd1').removeClass('active');
$('.vmcardamd').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.vmcardamd1').click(function() {
$('.exc1').removeClass('active');
$('.vmcardamd').removeClass('active');
$('.vmcardamd1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
  /* =====================================*/
 $('.vmcardtry').click(function() {
$('.exc').removeClass('active');
$('.vmcardtry1').removeClass('active');
$('.vmcardtry').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.vmcardtry1').click(function() {
$('.exc1').removeClass('active');
$('.vmcardtry').removeClass('active');
$('.vmcardtry1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
   /* =====================================*/
 $('.wu').click(function() {
$('.exc').removeClass('active');
$('.wu1').removeClass('active');
$('.wu').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.wu1').click(function() {
$('.exc1').removeClass('active');
$('.wu').removeClass('active');
$('.wu1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
  /* =====================================*/
 $('.wuer').click(function() {
$('.exc').removeClass('active');
$('.wuer1').removeClass('active');
$('.wuer').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.wuer1').click(function() {
$('.exc1').removeClass('active');
$('.wuer').removeClass('active');
$('.wuer1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
  /* =====================================*/
 $('.wurub').click(function() {
$('.exc').removeClass('active');
$('.wurub1').removeClass('active');
$('.wurub').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.wurub1').click(function() {
$('.exc1').removeClass('active');
$('.wurub').removeClass('active');
$('.wurub1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
   /* =====================================*/
 $('.mmg').click(function() {
$('.exc').removeClass('active');
$('.mmg1').removeClass('active');
$('.mmg').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.mmg1').click(function() {
$('.exc1').removeClass('active');
$('.mmg').removeClass('active');
$('.mmg1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
 /* =====================================*/
 $('.mmger').click(function() {
$('.exc').removeClass('active');
$('.mmger1').removeClass('active');
$('.mmger').removeClass('active');
$(this).addClass('active');


 });
 
 
 $('.mmger1').click(function() {
$('.exc1').removeClass('active');
$('.mmger').removeClass('active');
$('.mmger1').removeClass('active');
$(this).addClass('active');
 });
 
 /* =====================================*/
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 /* **********************************
 
 $('.bitcoin2').click(function() {
$('.exc1').removeClass('active');
$('.bitcoin1').removeClass('active');
$('.bitcoin2').removeClass('active');
$(this).addClass('active');

$('.exc a').each(function(i){
   
var statsValue =  $(this).attr("data-fullname");
if(statsValue == "BTC"){
	
}else{
	  $(this).attr("href", "./exchange_" + statsValue +"_to_BTC");
}
   
});

 });
 ****************************************************
 
 */