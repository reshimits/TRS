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
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/layout-products.css">

	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

	<!-- Javascript [primary]
  ================================================== -->
  	<script type="text/javascript" src="javascript/jquery-1.10.2.min.js"></script>
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
	<link rel="shortcut icon" href="images/favicon.ico">
    <link rel="icon" sizes="32x32" href="images/favicon-32.png">
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="images/favicon-152.png">


</head>
<body onLoad="MM_preloadImages('images/btn_bg-orangeDark.png','images/btn_bg-blueDark.png','images/btn_bg-grayDark.png')">



	<!-- Product Category Page Template Layout
	================================================== -->

 
    <?php require('include/header.html');?>
    <div class="navMain hide460"><?php require('include/navMain.html');?></div>
    <div class="navMobile mobile-only"><?php require('include/navMobile.html');?></div>
    
        <div class="productCategoryBanner"><?php require('include/productCategoryBanner-projectors.html');?></div>
        
        <div class="container" id="productGrid">
        	<div class="full column">
        	<div class="productGridContainer">
                
                <div class="productGrid-filter">            		
                	<span class="productGrid-filter-title">Filter Options:</span>
                	<div class="filter">
                    	<form id="filter-options">
                    		<div class="formFieldContainer">
                    			<label for>Application:</label>
                    			<div class="formField-dropdown">
                    				<select name="application" size="1">
                    					<option value="ALL" title="All">Display All</option>
                    					<option value="UC">Universal (cars)</option>
                                        <option value="UC">Universal (motorcycles)</option>
                                        <option value="VS">Vehicle Specific</option>
                    				</select>
                    			</div>
                    		</div>
                            <div class="formFieldContainer">
                    			<label for>Functionality:</label>
                    			<div class="formField-dropdown">
                    				<select name="functionality" size="1">
                    					<option value="ALL" title="All">Display All</option>
                    					<option value="LB">Dedicated Low Beam</option>
                                        <option value="BX">Low &amp; High Beam (Bi-xenon)</option>
                                        <option value="FL">Fog Light Specific</option>
                    				</select>
                    			</div>
                    		</div>
                            <div class="formFieldContainer">
                    			<label for>Size:</label>
                    			<div class="formField-dropdown">
                    				<select name="size" size="1">
                    					<option value="ALL" title="All">Display All</option>
                    					<option value="S">Smallest</option>
                                        <option value="M">Medium</option>
                                        <option value="L">Large</option>
                                        <option value="XL">Huge</option>
                    				</select>
                    			</div>
                    		</div>
                            <div class="formFieldContainer">
                    			<label for>Installation:</label>
                    			<div class="formField-dropdown">
                    				<select name="installation" size="1">
                    					<option value="ALL" title="All">Display All</option>
                    					<option value="B">Basic</option>
                                        <option value="A">Advanced</option>
                    				</select>
                    			</div>
                    		</div>
                    	</form>
                	</div>
                </div>
                <div class="productGrid-products"> 
                    <ul class="image-grid products">
                    	
                        <li class="product" id="projector-1" data-id="id-1" data-type="application functionality size priceRange installationDifficulty">
                        	<a href="/client/trs/productdetail.php">
                            <div class="product-image"><img src="/client/trs/images/products/productTemp3.jpg" alt="temp" id="temp" border="0" /></div>
                            <div class="product-info">
                            	<span class="product-title">FX-R 3.0 Projectors</span>
                                <div class="product-specs">
                                	<span class="product-spec"><span class="weightBold-styleNormal">Application:</span> Universal (Cars)</span>
                                    <span class="product-spec"><span class="weightBold-styleNormal">Functionality:</span> Bi-xenon</span>
                                    <span class="product-spec"><span class="weightBold-styleNormal">Size:</span> Medium</span>
                                    <span class="product-spec"><span class="weightBold-styleNormal">Installation:</span> Advanced</span>
                                </div>
                                <span class="product-price">$140</span>    
                            </div>
                            <div class="product-banner"><img src="/client/trs/images/products/banner_featureProduct-topSeller2x.png" alt="Top Selling Product!" border="0" /></div>
                            </a>
                    	</li>
                        <li class="product" id="projector-2" data-id="id-2" data-type="application functionality size priceRange installationDifficulty">
                        	<a href="#">
                            <div class="product-image"><img src="/client/trs/images/products/productTemp5.jpg" alt="temp" id="temp" border="0" /></div>
                            <div class="product-info">
                            	<span class="product-title">VIP Projectors</span>
                                <div class="product-specs">
                                	<span class="product-spec"><span class="weightBold-styleNormal">Application:</span> Universal (Cars)</span>
                                    <span class="product-spec"><span class="weightBold-styleNormal">Functionality:</span> Bi-xenon</span>
                                    <span class="product-spec"><span class="weightBold-styleNormal">Size:</span> Medium</span>
                                    <span class="product-spec"><span class="weightBold-styleNormal">Installation:</span> Advanced</span>
                                </div>
                                <span class="product-priceStart">starting at</span> 
                                <span class="product-price">$100</span>    
                            </div>
                            <div class="product-banner"></div>
                            </a>
                    	</li>
                        <li class="product" id="projector-3" data-id="id-3" data-type="application functionality size priceRange installationDifficulty">
                        	<a href="#">
                            <div class="product-image"><img src="/client/trs/images/products/productTemp6.jpg" alt="temp" id="temp" border="0" /></div>
                            <div class="product-info">
                            	<span class="product-title">Lexus RX-AFS Projectors</span>
                                <div class="product-specs">
                                	<span class="product-spec"><span class="weightBold-styleNormal">Application:</span> Universal (Cars)</span>
                                    <span class="product-spec"><span class="weightBold-styleNormal">Functionality:</span> Bi-xenon</span>
                                    <span class="product-spec"><span class="weightBold-styleNormal">Size:</span> Medium</span>
                                    <span class="product-spec"><span class="weightBold-styleNormal">Installation:</span> Advanced</span>
                                </div>
                                <span class="product-price">$190</span>    
                            </div>
                            <div class="product-banner"><img src="/client/trs/images/products/banner_featureProduct-onSale2x.png" alt="Product On Sale!" border="0" /></div>
                            </a>
                    	</li>
                        <li class="product" id="projector-4" data-id="id-4" data-type="application functionality size priceRange installationDifficulty">
                        	<a href="#">
                            <div class="product-image"><img src="/client/trs/images/products/productTemp7.jpg" alt="temp" id="temp" border="0" /></div>
                            <div class="product-info">
                            	<span class="product-title">Morimoto Mini D2S 2.0</span>
                                <div class="product-specs">
                                	<span class="product-spec"><span class="weightBold-styleNormal">Application:</span> Universal (Cars)</span>
                                    <span class="product-spec"><span class="weightBold-styleNormal">Functionality:</span> Bi-xenon</span>
                                    <span class="product-spec"><span class="weightBold-styleNormal">Size:</span> Medium</span>
                                    <span class="product-spec"><span class="weightBold-styleNormal">Installation:</span> Advanced</span>
                                </div>
                                <span class="product-price">$100</span>    
                            </div>
                            <div class="product-banner"></div>
                            </a>
                    	</li>
                        <li class="product" id="projector-5" data-id="id-5" data-type="application functionality size priceRange installationDifficulty">
                        	<a href="#">
                            <div class="product-image"><img src="/client/trs/images/products/productTemp3.jpg" alt="temp" id="temp" border="0" /></div>
                            <div class="product-info">
                            	<span class="product-title">FX-R 3.0 Projectors</span>
                                <div class="product-specs">
                                	<span class="product-spec"><span class="weightBold-styleNormal">Application:</span> Universal (Cars)</span>
                                    <span class="product-spec"><span class="weightBold-styleNormal">Functionality:</span> Bi-xenon</span>
                                    <span class="product-spec"><span class="weightBold-styleNormal">Size:</span> Medium</span>
                                    <span class="product-spec"><span class="weightBold-styleNormal">Installation:</span> Advanced</span>
                                </div>
                                <span class="product-price">$140</span>    
                            </div>
                            <div class="product-banner"></div>
                            </a>
                    	</li>
                        <li class="product" id="projector-6" data-id="id-6" data-type="application functionality size priceRange installationDifficulty">
                        	<a href="#">
                            <div class="product-image"><img src="/client/trs/images/products/productTemp5.jpg" alt="temp" id="temp" border="0" /></div>
                            <div class="product-info">
                            	<span class="product-title">VIP Projectors</span>
                                <div class="product-specs">
                                	<span class="product-spec"><span class="weightBold-styleNormal">Application:</span> Universal (Cars)</span>
                                    <span class="product-spec"><span class="weightBold-styleNormal">Functionality:</span> Bi-xenon</span>
                                    <span class="product-spec"><span class="weightBold-styleNormal">Size:</span> Medium</span>
                                    <span class="product-spec"><span class="weightBold-styleNormal">Installation:</span> Advanced</span>
                                </div>
                                <span class="product-price">$100</span>    
                            </div>
                            <div class="product-banner"><img src="/client/trs/images/products/banner_featureProduct-topSeller2x.png" alt="Top Selling Product!" border="0" /></div>
                            </a>
                    	</li>
                        <li class="product" id="projector-7" data-id="id-7" data-type="application functionality size priceRange installationDifficulty">
                        	<a href="#">
                            <div class="product-image"><img src="/client/trs/images/products/productTemp6.jpg" alt="temp" id="temp" border="0" /></div>
                            <div class="product-info">
                            	<span class="product-title">Lexus RX-AFS Projectors</span>
                                <div class="product-specs">
                                	<span class="product-spec"><span class="weightBold-styleNormal">Application:</span> Universal (Cars)</span>
                                    <span class="product-spec"><span class="weightBold-styleNormal">Functionality:</span> Bi-xenon</span>
                                    <span class="product-spec"><span class="weightBold-styleNormal">Size:</span> Medium</span>
                                    <span class="product-spec"><span class="weightBold-styleNormal">Installation:</span> Advanced</span>
                                </div>
                                <span class="product-price">$190</span>    
                            </div>
                            <div class="product-banner"></div>
                            </a>
                    	</li>
                        <li class="product" id="projector-8" data-id="id-8" data-type="application functionality size priceRange installationDifficulty">
                        	<a href="#">
                            <div class="product-image"><img src="/client/trs/images/products/productTemp7.jpg" alt="temp" id="temp" border="0" /></div>
                            <div class="product-info">
                            	<span class="product-title">Morimoto Mini D2S 2.0</span>
                                <div class="product-specs">
                                	<span class="product-spec"><span class="weightBold-styleNormal">Application:</span> Universal (Cars)</span>
                                    <span class="product-spec"><span class="weightBold-styleNormal">Functionality:</span> Bi-xenon</span>
                                    <span class="product-spec"><span class="weightBold-styleNormal">Size:</span> Medium</span>
                                    <span class="product-spec"><span class="weightBold-styleNormal">Installation:</span> Advanced</span>
                                </div>
                                <span class="product-price">$100</span>    
                            </div>
                            <div class="product-banner"><img src="/client/trs/images/products/banner_featureProduct-new2x.png" alt="New Product!" border="0" /></div>
                            </a>
                    	</li>
                        <li class="product" id="projector-9" data-id="id-9" data-type="application functionality size priceRange installationDifficulty">
                        	<a href="#">
                            <div class="product-image"><img src="/client/trs/images/products/productTemp3.jpg" alt="temp" id="temp" border="0" /></div>
                            <div class="product-info">
                            	<span class="product-title">FX-R 3.0 Projectors</span>
                                <div class="product-specs">
                                	<span class="product-spec"><span class="weightBold-styleNormal">Application:</span> Universal (Cars)</span>
                                    <span class="product-spec"><span class="weightBold-styleNormal">Functionality:</span> Bi-xenon</span>
                                    <span class="product-spec"><span class="weightBold-styleNormal">Size:</span> Medium</span>
                                    <span class="product-spec"><span class="weightBold-styleNormal">Installation:</span> Advanced</span>
                                </div>
                                <span class="product-price">$140</span>    
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
        
        




              
    
	<?php require('include/footer.html');?>
        
    
    

	<!-- Javascript [secondary]
  ================================================== -->
  
  
<!-- End Document
================================================== -->
</body>

</html>