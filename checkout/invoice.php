<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Your Order Invoice for The Retrofit Source | Innovative Headlight Upgrades</title>
	<meta name="description" content="Your Order Invoice for The Retrofit Source.">
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
    
        <div class="container" id="invoice">
        	<div class="full column">
        	
<!-- =========== Bread Crumb ================================================== -->

                <div class="breadCrumb-utilityContainer mobile-hide">            		
                	<ul class="breadCrumb">
                		<li><a href="/client/trs/index.php">Home</a></li>
                		<li> > </li>
                		<li><a href="#">Continue Shopping</a></li>
                	</ul>
                    <div class="productUtility">
                    	<div class="print mobile-hide"><a href="javascript:if(window.print)window.print()"><img src="/client/trs/images/icon_print2x.png" alt="Print Page" border="0" /></a></div> 
                	</div>
                </div>
                
<!-- =========== Body Content ================================================== -->
			
            <div class="bodyContainer utilityBodyContainer">
                <div class="utility-header"><h1>Invoice</h1></div>
                
                <div class="utility-sectionSpecial">
                    <span class="summary-infoSpecial">Thank you for your order!</span>
                    <h2>Order #<span class="order-number">123456789</span></h2>
                	<span class="summary-info"><span class="weightBold-styleNormal">Completed <span class="invoice-completion-date">10/10/2013</span> &nbsp; - &nbsp; - &nbsp; - &nbsp; <span class="invoice-completion-time">15:07:35 EST</span></span></span>
                    
                    <span class="summary-info">Please keep this invoice for your records.
											  <br>An email containing this invoice has been sent to <span class="invoice-email"><span class="weightBold-styleNormal">jason@throtlestudios.com.</span></span></span>
                                
                </div>
                <div class="checkoutStep checkoutStep-first checkoutStep-invoiceCol1 completed">
                    <div class="checkoutSectionHeader">                 
                        <span class="checkoutSectionHeader-title">Billing Address</span>
                	</div>
                    <div class="checkoutSectionContent-results">
                        <div class="utility-sectionContent">
                        	<span class="summary-info">
                            	<span class="weightBold-styleNormal">Matt Kossoff</span><br>
								2135 Defoor Hills Rd Suite F<br>
								Atlanta, GA 30318<br>
                                United States<br>
                                404.220.7940
                            </span>
                        </div>
                    </div>    
                </div>
                
                <div class="checkoutStep checkoutStep-invoiceCol2 completed">
                    <div class="checkoutSectionHeader">                 
                        <span class="checkoutSectionHeader-title">Shipping Address</span>
                	</div>
                    <div class="checkoutSectionContent-results">
                        <div class="utility-sectionContent">
                        	<span class="summary-info">
                            	<span class="weightBold-styleNormal">Josh Kossoff</span><br>
								32775 Aspen Glen Dr<br>
								Solon, OH 44139<br>
                                United States<br>
                                216.906.8324
                            </span>
                        </div>
                    </div>    
                </div>
                
                <div class="checkoutStep checkoutStep-invoiceCol1 completed">
                    <div class="checkoutSectionHeader">                 
                        <span class="checkoutSectionHeader-title">Shipping Method</span>
                	</div>
                    <div class="checkoutSectionContent-results">
                        <div class="utility-sectionContent">
                        	<span class="summary-info">
                            	<span class="weightBold-styleNormal">USPS ... First Class Mail - Package ... $24.63</span>
                            </span>
                            <span class="summary-info"><span class="weightBold-styleNormal">Special Order Instructions:</span> <span class="weightRegular-styleItalic">Apartment is located around the bend. Please knock.</span></span>
                        </div>
                    </div>    
                </div>
                
                <div class="checkoutStep checkoutStep-invoiceCol2 completed">
                    <div class="checkoutSectionHeader">                 
                        <span class="checkoutSectionHeader-title">Payment Information</span>
                	</div>
                    <div class="checkoutSectionContent-results">
                        <div class="utility-sectionContent">
                        	<span class="summary-info">
								<span class="weightBold-styleNormal">Matt Kossoff</span><br>
								Visa<br>
								XXXX-XXXX-XXXX-1234
                            </span>
                        </div>
                    </div>    
                </div>
                
                <div class="checkoutStep completed">
                    <div class="checkoutSectionHeader">                 
                        <span class="checkoutSectionHeader-title">TRS Audit</span>
                	</div>
                    <div class="checkoutSectionContent-results">
                        <div class="utility-sectionContent">
                        	<span class="summary-info">
								<span class="weightBold-styleNormal">Yes, please include the complimentary audit of my order.</span><br><br>
								2008 Jeep Wrangler Unlimited X
                            </span>
                        </div>
                    </div>    
                </div>
                        
                <div class="checkoutStep reviewConfirm completed">
                    <div class="checkoutSectionHeader">                 
                        <span class="checkoutSectionHeader-title">Review Order &amp; Confirm</span>
                	</div>
                    
                    <div class="checkoutSectionContent-results">
                        <div class="cartProduct-section">            		
                            <div class="cartProduct-image"><img src="/client/trs/images/products/productDetailTemp/1.jpg" alt="temp" border="0" ></div>   
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
                                    <span class="cartProduct-subPrice">2</span>
                                </div>
                                <div class="cartProduct-total">
                                     <span class="cartProduct-infoTitle">Total</span>
                                     <span class="cartProduct-totalPrice">$280</span>
                                </div>
                            </div>
                        </div>
                        <div class="cartProduct-section">            		
                            <div class="cartProduct-image"><img src="/client/trs/images/products/productDetailTemp/2.jpg" alt="temp" border="0" ></div>   
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
                                    <span class="cartProduct-subPrice">4</span>
                                </div>
                                <div class="cartProduct-total">
                                     <span class="cartProduct-infoTitle">Total</span>
                                     <span class="cartProduct-totalPrice">$560</span>
                                </div>
                            </div>
                        </div>
                        <div class="summary-sectionFull">
                            <div class="summary-section">            		
                                <h2>Order Summary</h2>
                                <div class="subtotal">
                                    <div class="subtotal-titles">
                                        <span class="subtotal-title">SubTotal:</span>
                                        <span class="subtotal-title">Shipping &amp; Handling:</span>
                                            <span class="shippingType-title mobile-hide">&bull; First Class Mail - Package – Add Insurance, Require Signature</span>
                                        <span class="subtotal-title">Promotion Discount:</span>
                                        <span class="subtotal-title">Sales Tax:</span>
                                    </div>
                                    <div class="subtotal-sums">
                                        <span class="subtotal-sum">$840.00</span>
                                        <span class="subtotal-sum">$24.63</span>
                                            <span class="shippingType-sum mobile-hide">&bull;</span>
                                        <span class="subtotal-sum">-$50.00</span>
                                        <span class="subtotal-sum">$16.38</span>
                                    </div>
                                </div>
                                <div class="total">
                                    <div class="total-titles">
                                        <span class="total-title">Total:</span>
                                    </div>
                                    <div class="total-sums">
                                        <span class="total-sum">$831.01</span>
                                    </div>    
                                </div>
                            </div>    
                        </div>
                        <div class="summary-sectionCTA"></div>
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