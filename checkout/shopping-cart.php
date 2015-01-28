<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Your Shopping Cart for The Retrofit Source | Innovative Headlight Upgrades</title>
	<meta name="description" content="Your Shopping Cart for The Retrofit Source.">
	<meta name="author" content="THROTTLE, LTD. is a Columbus Ohio based boutique graphic design firm. We consult, strategize, design, build and manage web site, brand identity and print collateral projects for SME businesses. www.throttlestudios.com">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="format-detection" content="telephone=no" />

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="../css/base.css">
	<link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/layout-checkout.css">

	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

	<!-- Javascript [primary]
  ================================================== -->
  	<script type="text/javascript" src="../javascript/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="//use.typekit.net/xib0jgf.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	<script type="text/javascript" charset="utf-8">
		function MM_swapImgRestore() { //v3.0
		  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
		}
		function MM_preloadImages() { //v3.0
		  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
			var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
			if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
		}
		
		function MM_findObj(n, d) { //v4.01
		  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
			d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
		  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
		  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
		  if(!x && d.getElementById) x=d.getElementById(n); return x;
		}
		
		function MM_swapImage() { //v3.0
		  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
		   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
		}
	</script>
    
	<!-- Favicons
  ================================================== -->
	<link rel="shortcut icon" href="../images/favicon.ico">
    <link rel="icon" sizes="32x32" href="../images/favicon-32.png">
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="../images/favicon-152.png">


</head>
<body onLoad="MM_preloadImages('../images/btn_bg-orangeDark.png','../images/btn_bg-blueDark.png','../images/btn_bg-grayDark.png')">



	<!-- Shopping Cart
	================================================== -->

 
    <?php require('../include/header.html');?>
    <div class="navMain hide460"><?php require('../include/navMain.html');?></div>
    <div class="navMobile mobile-only"><?php require('../include/navMobile.html');?></div>
    
        <div class="container" id="shoppingcart">
        	<div class="full column">
        	
<!-- =========== Bread Crumb ================================================== -->

                <div class="breadCrumb-utilityContainer mobile-hide">            		
                	<ul class="breadCrumb">
                		<li><a href="/client/TRS/index.php">Home</a></li>
                		<li> > </li>
                		<li><a href="#">Shopping Cart</a></li>
                	</ul>
                </div>
                
<!-- =========== Body Content ================================================== -->
			
            <div class="bodyContainer utilityBodyContainer">
                <div class="utility-header"><h1>Your Shopping Cart</h1></div>
                
                <div class="utility-contentContainer">
                
                    <div class="cartProduct-section">            		
						<div class="cartProduct-image"><img src="/client/TRS/images/products/productDetailTemp/1.jpg" alt="temp" border="0" ></div>   
						<div class="cartProduct-sectionContent">
                        	<div class="cartProduct-title">
                                 <h2>Morimoto Bi-xenon FX-R Stage III Kit</h2>
                                 <h5>Complete Retrofit Kit</h5>
                            </div>
                            <div class="cartProduct-specs">
                                 <span class="cartProduct-spec first-child"><strong>Ballasts:</strong> Morimoto 3Five (35w) Long Cord Output (+$5.00)</span>
                                 <span class="cartProduct-spec"><strong>Bulbs:</strong> New Osram 66240 D2S SVS 4200K (+$150.00)</span>
                                 <span class="cartProduct-spec"><strong>Projectors:</strong> RHD (3" Lens) (+$10.00)</span>
                                 <span class="cartProduct-spec"><strong>Shrouds:</strong> Do not include (-$30.00)</span>
                                 <span class="cartProduct-spec"><strong>Harnesses:</strong> H13/9008</span>
                                 <span class="cartProduct-spec"><strong>Halos:</strong> Yes, Morimoto XB LED (Amber) (+$50.00)</span>
                                 <span class="cartProduct-spec"><strong>Glue:</strong> Yes (+$10.00)</span>
                            </div>
                            <div class="cartProduct-price">
                                 <span class="cartProduct-infoTitle">Price</span>
                                 <span class="cartProduct-subPrice">$140</span>
                            </div>
                            <div class="cartProduct-qty">
                                <span class="cartProduct-infoTitle">QTY</span>
                                <form id="cartQTY" action="/client/TRS/#.php" method="get">
                                    <input class="quantity" type="text" value="2" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;" />
                                    <div class="cartProduct-qtyCTA"><input class="cartQtySubmit" type="submit" value="Update" /></div>
                                    <div class="cartProduct-qtyCTA"><a href="#">Remove</a></div>
                                </form>
                            </div>
                            <div class="cartProduct-total">
                                 <span class="cartProduct-infoTitle">Total</span>
                                 <span class="cartProduct-totalPrice">$280</span>
                            </div>
                        </div>
                    </div>
                    <div class="cartProduct-section">            		
						<div class="cartProduct-image"><img src="/client/TRS/images/products/productDetailTemp/2.jpg" alt="temp" border="0" ></div>   
						<div class="cartProduct-sectionContent">
                        	<div class="cartProduct-title">
                                 <h2>Morimoto Bi-xenon FX-R 3.0</h2>
                                 <h5>HID Projectors</h5>
                            </div>
                            <div class="cartProduct-specs">
                                 <span class="cartProduct-spec"><strong>Projectors:</strong> LHD (2.5" lens)</span>
                            </div>
                            <div class="cartProduct-price">
                                 <span class="cartProduct-infoTitle">Price</span>
                                 <span class="cartProduct-subPrice">$140</span>
                            </div>
                            <div class="cartProduct-qty">
                                <span class="cartProduct-infoTitle">QTY</span>
                                <form id="cartQTY" action="/client/TRS/#.php" method="get">
                                    <input class="quantity" type="text" value="4" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;" />
                                    <div class="cartProduct-qtyCTA"><input class="cartQtySubmit" type="submit" value="Update" /></div>
                                    <div class="cartProduct-qtyCTA"><a href="#">Remove</a></div>
                                </form>
                            </div>
                            <div class="cartProduct-total">
                                 <span class="cartProduct-infoTitle">Total</span>
                                 <span class="cartProduct-totalPrice">$560</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="utility-sectionSpecial">            		
                        <div class="utility-sectionContent">
                        	<div class="promoCode-container">
                            	<span class="promoCode-infoTitle">Promo<span class="hide300">tion</span> Code</span>
                                <form id="promoCode" action="/client/TRS/#.php" method="get">
                                    <input class="promoCodeEntry" type="text" value="" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;" />
                                    <div class="promoCodeCTA"><input class="promoCodeSubmit" type="submit" value="Redeem" /></div>
                                </form>
                        	</div>    
                        </div>
                    </div>
                    
                    <div class="summary-section">            		
                        <h2>Order Summary</h2>
                        <div class="subtotal">
                        	<div class="subtotal-titles">
                        		<span class="subtotal-title">SubTotal:</span>
                        		<span class="subtotal-title">Discount:</span>
                        	</div>
                        	<div class="subtotal-sums">
                                <span class="subtotal-sum">$840.00</span>
                                <span class="subtotal-sum">-$50.00</span>
                        	</div>
                        </div>
                        <div class="total">
                        	<div class="total-titles">
                        		<span class="total-title">Total:</span>
                        	</div>
                        	<div class="total-sums">
                        		<span class="total-sum">$790.00</span>
                        	</div>    
                        </div>
                    </div>    
                    <div class="summary-sectionCTA">     
                        <div class="summary-CTAs">
                        	<div class="secureCheckoutCTA">
            					<a href="/client/TRS/checkout/checkout.php">
            					<div class="secureCheckoutCTA-icon"><img src="/client/TRS/images/icon_lock2x.png" alt="Secure Checkout" border="0" /></div>
                                <span class="secureCheckoutCTA-title">Secure Checkout</span>
            					</a>
            				</div>
                            <div class="continueShopping"><a href="#">Continue Shopping</a></div>
                    	</div>
                    </div>
                    
                </div>
                    
                
            	    
            </div> 
            </div>       
        </div>
        
        
    
	<?php require('../include/footer.html');?>
        
    
    

<!-- Javascript [secondary]
================================================== -->
 
  
<!-- End Document
================================================== -->
</body>

</html>