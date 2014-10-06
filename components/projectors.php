<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>"Product Category" from The Retrofit Source | Innovative Headlight Upgrades</title>
	
    <!-- CAN YOU DO AN AUTO FILL HERE(below) FOR THE META 'DESCRIPTION CONTENT' DEPENDING ON WHICH **PRODUCT CATEGORY** IT IS? FOR SEO SAKE, NOT THE SAME AS THE BODY CONTENT. -->
    
    <meta name="description" content="Welcome to headlight overhaul heaven! Our complete projector retrofit packages are bundled with the best combination of parts we offer.">
	<meta name="author" content="THROTTLE, LTD. is a Columbus Ohio based boutique graphic design firm. We consult, strategize, design, build and manage web site, brand identity and print collateral projects for SME businesses. www.throttlestudios.com">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="format-detection" content="telephone=no" />

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="../css/base.css">
	<link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/layout-products.css">


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



	<!-- Product Category Page Template Layout
	================================================== -->

 
    <?php require('../include/header.html');?>
    <div class="navMain hide460"><?php require('../include/navMain.html');?></div>
    <div class="navMobile mobile-only"><?php require('../include/navMobile.html');?></div>
    	
        <div class="productCategoryBanner">
            <?php require('../buyersGuide/buyersGuide-projectors.html');?> 
        </div>

        
        <div class="container" id="productGrid">
        	<div class="full column">
        	<div class="productGridContainer">
                
                <div class="productGrid-filter active">            		
                	<div class="filter">
                    	<form id="filter-options">
                            <div class="formFieldContainer">
                                <select name="function" size="1">
                                    <option value="" title="">All Function Types</option>
                                    <option value="selected">Low &amp; High Beam (Bi-xenon) (10)</option>
                                    <option value="selected">Dedicated Low Beam (4)</option>
                                    <option value="selected">Fog Light Specific (1)</option>
                                </select>
                            </div>
                            <div class="formFieldContainer">
                                <select name="installation" size="1">
                                    <option value="" title="">All Installation Types</option>
                                    <option value="selected">Advanced (cutting required) (10)</option>
                                    <option value="selected">Basic (little/no cutting) (3)</option>
                                </select>
                            </div>
                            <div class="formFieldContainer">
                                <select name="origin" size="1">
                                    <option value="" title="">All Origin Types</option>
                                    <option value="selected">Aftermarket (6)</option>
                                    <option value="selected">OEM Part (8)</option>
                                </select>
                            </div>
                            <div class="formFieldContainer">
                                <select name="size" size="1">
                                    <option value="" title="">All Sizes</option>
                                    <option value="selected">Smallest (2)</option>
                                    <option value="selected">Medium (6)</option>
                                    <option value="selected">Large (5)</option>
                                    <option value="selected">Huge (3)</option>
                                </select>
                            </div>
                            <div class="formFieldContainer last">
                                <select name="dev" size="1">
                                    <option value="" title="">Extra for Dev Use</option>
                                    <option value="selected">NA</option>
                                </select>
                            </div>

                    	</form>
                	</div>
                </div>

                <!-- Apply id="productGrid-productsWholesale" to "productGrid-products" if user is logged in as Wholesaler -->
                <div class="productGrid-products"> 
                    <ul class="image-grid products">
                    	
                        <li class="product" id="projector-1" data-id="id-1" data-type="application functionality size priceRange installationDifficulty">
                        	<a href="/client/trs/productdetail.php">
                            <div class="product-image"><img src="/client/trs/images/products/productTempB.jpg" alt="temp" id="temp" border="0" /></div>
                            <div class="product-info info-main">
                            	<span class="product-title">FX-R 3.0 Projectors</span>
                                <div class="product-specs">
                                	<span class="product-spec">By far our most popular full size bi-xenon projector ever. The 3.0 is a retrofitters delight with its high precision castings, advanced optics, available 2.5 and 3 inch clear lens. It all adds up to put our FX-R near the top of the totem poll.</span>
                                </div>
                            </div>    
                            <div class="product-info">    
                                <div class="productPriceContainer">
                                     <div class="productPrice productPrice-retail">
                                        <span class="product-price">$140</span>
                                        <span class="productPrice-type">Retail</span>
                                     </div>
                                     <div class="productPrice productPrice-wholesale">
                                        <span class="product-price">$140</span>
                                        <span class="productPrice-type">Wholesale</span>
                                     </div>
                                     <div class="productPrice productPrice-20orMore">
                                        <span class="product-price">$140</span>
                                        <span class="productPrice-type">20 or More</span>
                                     </div>    
                                </div>   
                            </div>
                            <div class="product-banner"><img src="/client/trs/images/products/bannerTop_featureProduct-topSeller2x.png" alt="Top Selling Product!" border="0" /></div>
                            </a>
                    	</li>
                        <li class="product" id="projector-2" data-id="id-2" data-type="application functionality size priceRange installationDifficulty">
                        	<a href="#">
                            <div class="product-image"><img src="/client/trs/images/products/productTempC.jpg" alt="temp" id="temp" border="0" /></div>
                            <div class="product-info info-main">
                            	<span class="product-title">VIP Projectors</span>
                                <div class="product-specs">
                                	<span class="product-spec">Well renowned for being THE best dedicated low beam projector ever made. 'Nuff said.</span>
                                </div>
                            </div>    
                            <div class="product-info">    
                                <div class="productPriceContainer">
                                     <div class="productPrice productPrice-retail">
                                        <span class="product-priceStart">starting at</span> 
                                        <span class="product-price">$100</span>  
                                        <span class="productPrice-type">Retail</span>
                                     </div>
                                     <div class="productPrice productPrice-wholesale">
                                        <span class="product-price">$140</span>
                                        <span class="productPrice-type">Wholesale</span>
                                     </div>
                                     <div class="productPrice productPrice-20orMore">
                                        <span class="product-price">$140</span>
                                        <span class="productPrice-type">20 or More</span>
                                     </div>    
                                </div>   
                            </div>
                            <div class="product-banner"></div>
                            </a>
                    	</li>
                        <li class="product" id="projector-3" data-id="id-3" data-type="application functionality size priceRange installationDifficulty">
                        	<a href="#">
                            <div class="product-image"><img src="/client/trs/images/products/productTempA.jpg" alt="temp" id="temp" border="0" /></div>
                            <div class="product-info info-main">
                            	<span class="product-title">Bi-xenon Morimoto Mini Stage III Kit (D2S)</span>
                                <div class="product-specs">
                                	<span class="product-spec">Morimoto's Mini D2S Three point O has finally arrived! All new from the solenoid up, the reinvented Morimoto Mini D2S 3.0 will make every retrofitter re-think their next choice in projectors.</span>
                                </div>
                            </div>    
                            <div class="product-info">    
                                <div class="productPriceContainer">
                                     <div class="productPrice productPrice-retail">
                                        <span class="product-price">$190</span>
                                        <span class="productPrice-type">Retail</span>
                                     </div>
                                     <div class="productPrice productPrice-wholesale">
                                        <span class="product-price">$140</span>
                                        <span class="productPrice-type">Wholesale</span>
                                     </div>
                                     <div class="productPrice productPrice-20orMore">
                                        <span class="product-price">$130</span>
                                        <span class="productPrice-type">20 or More</span>
                                     </div>    
                                </div>    
                            </div>
                            <div class="product-banner"><img src="/client/trs/images/products/bannerTop_featureProduct-onSale2x.png" alt="Product On Sale!" border="0" /></div>
                            </a>
                    	</li>
                        <li class="product" id="projector-4" data-id="id-4" data-type="application functionality size priceRange installationDifficulty">
                        	<a href="#">
                            <div class="product-image"><img src="/client/trs/images/products/productTempA.jpg" alt="temp" id="temp" border="0" /></div>
                            <div class="product-info info-main">
                            	<span class="product-title">Morimoto Mini D2S 2.0</span>
                                <div class="product-specs">
                                	<span class="product-spec">Morimoto's Mini D2S Three point O has finally arrived! All new from the solenoid up, the reinvented Morimoto Mini D2S 3.0 will make every retrofitter re-think their next choice in projectors.</span>
                                </div>
                            </div>    
                            <div class="product-info">    
                                <div class="productPriceContainer">
                                     <div class="productPrice productPrice-retail">
                                        <span class="product-price">$100</span>
                                        <span class="productPrice-type">Retail</span>
                                     </div>
                                     <div class="productPrice productPrice-wholesale">
                                        <span class="product-price">$90</span>
                                        <span class="productPrice-type">Wholesale</span>
                                     </div>
                                     <div class="productPrice productPrice-20orMore">
                                        <span class="product-price">$85</span>
                                        <span class="productPrice-type">20 or More</span>
                                     </div>    
                                </div>    
                            </div>
                            <div class="product-banner"></div>
                            </a>
                    	</li>
                        <li class="product" id="projector-5" data-id="id-5" data-type="application functionality size priceRange installationDifficulty">
                        	<a href="#">
                            <div class="product-image"><img src="/client/trs/images/products/productTempB.jpg" alt="temp" id="temp" border="0" /></div>
                            <div class="product-info info-main">
                            	<span class="product-title">FX-R 3.0 Projectors</span>
                                <div class="product-specs">
                                	<span class="product-spec">By far our most popular full size bi-xenon projector ever. The 3.0 is a retrofitters delight with its high precision castings, advanced optics, available 2.5 and 3 inch clear lens. It all adds up to put our FX-R near the top of the totem poll.</span>
                                </div>
                            </div>    
                            <div class="product-info">    
                                <div class="productPriceContainer">
                                     <div class="productPrice productPrice-retail">
                                        <span class="product-price">$140</span>
                                        <span class="productPrice-type">Retail</span>
                                     </div>
                                     <div class="productPrice productPrice-wholesale">
                                        <span class="product-price">$135</span>
                                        <span class="productPrice-type">Wholesale</span>
                                     </div>
                                     <div class="productPrice productPrice-20orMore">
                                        <span class="product-price">$132</span>
                                        <span class="productPrice-type">20 or More</span>
                                     </div>    
                                </div>    
                            </div>
                            <div class="product-banner"></div>
                            </a>
                    	</li>
                        <li class="product" id="projector-6" data-id="id-6" data-type="application functionality size priceRange installationDifficulty">
                        	<a href="#">
                            <div class="product-image"><img src="/client/trs/images/products/productTempC.jpg" alt="temp" id="temp" border="0" /></div>
                            <div class="product-info info-main">
                            	<span class="product-title">VIP Projectors</span>
                                <div class="product-specs">
                                	<span class="product-spec">Well renowned for being THE best dedicated low beam projector ever made. 'Nuff said.</span>
                                </div>
                            </div>    
                            <div class="product-info">    
                                <div class="productPriceContainer">
                                     <div class="productPrice productPrice-retail">
                                        <span class="product-price">$100</span>
                                        <span class="productPrice-type">Retail</span>
                                     </div>
                                     <div class="productPrice productPrice-wholesale">
                                        <span class="product-price">$100</span>
                                        <span class="productPrice-type">Wholesale</span>
                                     </div>
                                     <div class="productPrice productPrice-20orMore">
                                        <span class="product-price">$100</span>
                                        <span class="productPrice-type">20 or More</span>
                                     </div>    
                                </div>    
                            </div>
                            <div class="product-banner"><img src="/client/trs/images/products/bannerTop_featureProduct-new2x.png" alt="New Product!" border="0" /></div>
                            </a>
                    	</li>
                        <li class="product" id="projector-7" data-id="id-7" data-type="application functionality size priceRange installationDifficulty">
                        	<a href="#">
                            <div class="product-image"><img src="/client/trs/images/products/productTempC.jpg" alt="temp" id="temp" border="0" /></div>
                            <div class="product-info info-main">
                            	<span class="product-title">Lexus RX-AFS Projectors</span>
                                <div class="product-specs">
                                	<span class="product-spec">Morimoto's Mini D2S Three point O has finally arrived! All new from the solenoid up, the reinvented Morimoto Mini D2S 3.0 will make every retrofitter re-think their next choice in projectors.</span>
                                </div>
                            </div>    
                            <div class="product-info">    
                                <div class="productPriceContainer">
                                     <div class="productPrice productPrice-retail">
                                        <span class="product-price">$190</span>
                                        <span class="productPrice-type">Retail</span>
                                     </div>
                                     <div class="productPrice productPrice-wholesale">
                                        <span class="product-price">$180</span>
                                        <span class="productPrice-type">Wholesale</span>
                                     </div>
                                     <div class="productPrice productPrice-20orMore">
                                        <span class="product-price">$170</span>
                                        <span class="productPrice-type">20 or More</span>
                                     </div>    
                                </div>    
                            </div>
                            <div class="product-banner"></div>
                            </a>
                    	</li>
                        <li class="product" id="projector-8" data-id="id-8" data-type="application functionality size priceRange installationDifficulty">
                        	<a href="#">
                            <div class="product-image"><img src="/client/trs/images/products/productTempA.jpg" alt="temp" id="temp" border="0" /></div>
                            <div class="product-info info-main">
                            	<span class="product-title">Morimoto Mini D2S 2.0</span>
                                <div class="product-specs">
                                	<span class="product-spec">Morimoto's Mini D2S Three point O has finally arrived! All new from the solenoid up, the reinvented Morimoto Mini D2S 3.0 will make every retrofitter re-think their next choice in projectors.</span>
                                </div>
                            </div>    
                            <div class="product-info">    
                                <div class="productPriceContainer">
                                     <div class="productPrice productPrice-retail">
                                        <span class="product-price">$140</span>
                                        <span class="productPrice-type">Retail</span>
                                     </div>
                                     <div class="productPrice productPrice-wholesale">
                                        <span class="product-price">$140</span>
                                        <span class="productPrice-type">Wholesale</span>
                                     </div>
                                     <div class="productPrice productPrice-20orMore">
                                        <span class="product-price">$140</span>
                                        <span class="productPrice-type">20 or More</span>
                                     </div>    
                                </div>     
                            </div>
                            <div class="product-banner"><img src="/client/trs/images/products/bannerTop_featureProduct-topSeller2x.png" alt="Top Selling Product!" border="0" /></div>
                            </a>
                    	</li>
                        <li class="product" id="projector-9" data-id="id-9" data-type="application functionality size priceRange installationDifficulty">
                        	<a href="#">
                            <div class="product-image"><img src="/client/trs/images/products/productTempB.jpg" alt="temp" id="temp" border="0" /></div>
                            <div class="product-info info-main">
                            	<span class="product-title">FX-R 3.0 Projectors</span>
                                <div class="product-specs">
                                	<span class="product-spec">By far our most popular full size bi-xenon projector ever. The 3.0 is a retrofitters delight with its high precision castings, advanced optics, available 2.5 and 3 inch clear lens. It all adds up to put our FX-R near the top of the totem poll.</span>
                                </div>
                            </div>    
                            <div class="product-info">    
                                <div class="productPriceContainer">
                                     <div class="productPrice productPrice-retail">
                                        <span class="product-price">$140</span>
                                        <span class="productPrice-type">Retail</span>
                                     </div>
                                     <div class="productPrice productPrice-wholesale">
                                        <span class="product-price">$140</span>
                                        <span class="productPrice-type">Wholesale</span>
                                     </div>
                                     <div class="productPrice productPrice-20orMore">
                                        <span class="product-price">$140</span>
                                        <span class="productPrice-type">20 or More</span>
                                     </div>    
                                </div>     
                            </div>
                            <div class="product-banner"></div>
                            </a>
                    	</li>
                        
                    </ul>
        		</div>
				<div class="showMore">
                	<div class="generalBtn-blue"><a href="#"><span class="generalBtn-title">Show More</span></a></div> 
                </div>                
            </div> 
            </div>       
        </div>
        
        




              
    
	<?php require('../include/footer.html');?>
        
    
    

	<!-- Javascript [secondary]
    ================================================== -->
    <!-- INPUT SELECT STYLE CHANGE SCRIPT -->
    <script type="text/javascript">
        $('select').on('change', function(ev) {
            $(this).attr('class', '').addClass($(this).children(':selected').val());
        });
    </script>
  
    <!-- BUYERS GUIDE SCRIPT -->
    <script type='text/javascript'>
        function toggleText(id) {
            var showMore = document.getElementById(id);
            (showMore.style.display=='block') ? showMore.style.display='none' : showMore.style.display='block' ;  
        }

         // For mobile, displays Buyer's Guide options
        $( ".buyersGuide-mobileStart" ).click(function() {
            $(".buyersGuide").toggleClass( "mobile-active" );
            $(".buyersGuide-mobileStart").toggleClass( "mobile-active" );
        });

        // Applies class of 'active' to 'buyersGuide' upon selecting 'go,' then removes 'active' from 'productGrid-filter'
        $( ".buyersGuide-filter .buyersGuideCTA" ).click(function() {
            $(".buyersGuide").toggleClass( "active",true );
            $(".productGrid-filter").toggleClass( "active",false );
        });

        // Removes all classes, then applies 'active' back to 'productGrid-filter'
        $( ".buyersGuide-filter .clearAll" ).click(function() {
            $(".buyersGuide").toggleClass( "active",false );
            $(".buyersGuide-questionWrap").toggleClass( "toggle-q2",false );
            $(".buyersGuide-questionWrap").toggleClass( "toggle-q3",false );
            $(".buyersGuide-questionWrap").toggleClass( "toggle-q4",false );
            $(".productGrid-filter").toggleClass( "active",true );
        });
        
        // Applies classes to toggle from question 1 to 2 to 3 to 4.. etc.
        $( ".buyersGuide-select .select-a1" ).click(function() {
            $(".buyersGuide-questionWrap").toggleClass( "toggle-q2" );
        });
        $( ".buyersGuide-select .select-a2" ).click(function() {
            $(".buyersGuide-questionWrap").toggleClass( "toggle-q3" );
        });
        $( ".buyersGuide-select .select-a3" ).click(function() {
            $(".buyersGuide-questionWrap").toggleClass( "toggle-q4" );
        });

        // Removes classes to toggle back to question 3, 2, 1.. etc.
        $( ".buyersGuide-selections .select-back2-a1" ).click(function() {
            $(".buyersGuide-questionWrap").toggleClass( "toggle-q2",false );
            $(".buyersGuide-questionWrap").toggleClass( "toggle-q3",false );
            $(".buyersGuide-questionWrap").toggleClass( "toggle-q4",false );
        });
        $( ".buyersGuide-selections .select-back2-a2" ).click(function() {
            $(".buyersGuide-questionWrap").toggleClass( "toggle-q3",false );
            $(".buyersGuide-questionWrap").toggleClass( "toggle-q4",false );
        });
        $( ".buyersGuide-selections .select-back2-a3" ).click(function() {
            $(".buyersGuide-questionWrap").toggleClass( "toggle-q4",false );
        });
        
    </script>
    
  
<!-- End Document
================================================== -->
</body>

</html>