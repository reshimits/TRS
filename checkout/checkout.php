<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>The Retrofit Source Checkout | Innovative Headlight Upgrades</title>
	<meta name="description" content="The Retrofit Source Secure Checkout.">
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



	<!-- Checkout
	================================================== -->

 
    <?php require('../include/header.html');?>
    <div class="navMain hide460"><?php require('../include/navMain.html');?></div>
    <div class="navMobile mobile-only"><?php require('../include/navMobile.html');?></div>
    
        <div class="container" id="checkout">
        	<div class="full column">
        	
<!-- =========== Bread Crumb ================================================== -->

                <div class="breadCrumb-utilityContainer mobile-hide">            		
                	<ul class="breadCrumb">
                		<li><a href="/client/trs/index.php">Home</a></li>
                		<li> > </li>
                		<li><a href="/client/trs/checkout/shopping-cart.php">Shopping Cart</a></li>
                        <li> > </li>
                		<li><a href="#">Checkout</a></li>
                	</ul>
                </div>
                
<!-- =========== Body Content ================================================== -->
			
            <div class="bodyContainer utilityBodyContainer">
                <div class="utility-header"><h1>Checkout</h1></div>

				<div class="checkoutStep checkoutStep-first active">
                    <div class="checkoutSectionHeader">                 
                        <span class="checkoutSectionHeader-title">Checkout Method</span>
                	</div>
                    
                    <div class="checkoutSectionContent">
                        <div class="utility-sectionContent">
                            <form id="checkoutLogin" action="/client/trs/#.php" method="get">
                            <div class="utility-form">
                                <div class="checkoutSection-radioSubHead">
                                    <input name="login" type="radio" class="checkoutStep-radio" value="login1">
                                    <h4>Returning Customer</h4>
                                </div>
                            	<div class="formFieldContainer">
                                	<input class="general general-required" type="text" value="Email:" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;" />
                                </div>
                                <div class="formFieldContainer formFieldContainer-col2">
                                	<input class="general general-required" type="text" value="Password:" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;" />
                                </div>
                                <div class="checkoutSection-radioSubHead">
                                    <input name="login" type="radio" class="checkoutStep-radio" value="login2">
                                    <h4>New Customer Registeration</h4>
                                </div>
                                <div class="checkoutSection-radioSubHead">
                                    <input name="login" type="radio" class="checkoutStep-radio" value="login3">
                                    <h4>Continue as Guest</h4>
                                </div>
                            	<span class="summary-info"><br></span>
                            </div>
                            <div class="formCTAContainer">
                                <div class="formCTA"><input class="formSubmit" type="submit" value="Continue" /></div>
                                <div class="formGoBack"><a href="#">Forgot Password</a></div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                    
                <div class="checkoutStep future">
                    <div class="checkoutSectionHeader">                 
                        <span class="checkoutSectionHeader-title">1. Billing Address</span>
                        <span class="checkoutSectionHeader-edit"><a href="#">Edit</a></span>
                	</div>
                    
                    <div class="checkoutSectionContent">
                        <div class="utility-sectionContent">
                            <form id="billingAddress" action="/client/trs/#.php" method="get">
                            <div class="utility-form">
                                <div class="checkoutSection-radioSubHead">
                                    <input name="billing" type="radio" class="checkoutStep-radio" value="billing1">
                                    <h4>Select <span class="hide300">an Entry</span> From Your Address Book</h4>
                                </div>
                            	<div class="formFieldContainer-double">
                                	<div class="formField-dropdown">
                                        <select name="billingAddress" size="1">
                                            <option value="Address1" title="Default">Matt Kossoff: 2135 Defoor Hills Rd Suite F, Atlanta, GA 30318, United States</option>
                                            <option value="Address2">Josh Kossoff: 32775 Aspen Glen Dr, Solon, OH 44139</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="checkoutSection-radioSubHead">
                                    <input name="billing" type="radio" class="checkoutStep-radio" value="billing2">
                                    <h4>Bill to a Different Address</h4>
                                </div>
                                <div class="formContainer">
                                    <div class="formFieldContainer">
                                        <input class="general general-required" type="text" value="First Name:" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;" />
                                    </div>
                                    <div class="formFieldContainer formFieldContainer-col2">
                                        <input class="general general-required" type="text" value="Last Name:" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;" />
                                    </div>
                                    <div class="formFieldContainer">
                                        <input class="general" type="text" value="Company Name:" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;" />
                                    </div>
                                    <div class="formFieldContainer formFieldContainer-col2">
                                        <div class="formField-dropdown">
                                            <select name="country" size="1">
                                                <option value="Default" title="Default">Country:</option>
                                                    <option value="US">United States</option>
                                                    <option value="AF">Afghanistan</option>
                                                    <option value="AX">Åland Islands</option>
                                                    <option value="AL">Albania</option>
                                                    <option value="DZ">Algeria</option>
                                                    <option value="AS">American Samoa</option>
                                                    <option value="AD">Andorra</option>
                                                    <option value="AO">Angola</option>
                                                    <option value="AI">Anguilla</option>
                                                    <option value="AQ">Antarctica</option>
                                                    <option value="AG">Antigua and Barbuda</option>
                                                    <option value="AR">Argentina</option>
                                                    <option value="AM">Armenia</option>
                                                    <option value="AW">Aruba</option>
                                                    <option value="AU">Australia</option>
                                                    <option value="AT">Austria</option>
                                                    <option value="AZ">Azerbaijan</option>
                                                    <option value="BS">Bahamas</option>
                                                    <option value="BH">Bahrain</option>
                                                    <option value="BD">Bangladesh</option>
                                                    <option value="BB">Barbados</option>
                                                    <option value="BY">Belarus</option>
                                                    <option value="BE">Belgium</option>
                                                    <option value="BZ">Belize</option>
                                                    <option value="BJ">Benin</option>
                                                    <option value="BM">Bermuda</option>
                                                    <option value="BT">Bhutan</option>
                                                    <option value="BO">Bolivia</option>
                                                    <option value="BA">Bosnia and Herzegovina</option>
                                                    <option value="BW">Botswana</option>
                                                    <option value="BV">Bouvet Island</option>
                                                    <option value="BR">Brazil</option>
                                                    <option value="IO">British Indian Ocean Territory</option>
                                                    <option value="BN">Brunei Darussalam</option>
                                                    <option value="BG">Bulgaria</option>
                                                    <option value="BF">Burkina Faso</option>
                                                    <option value="BI">Burundi</option>
                                                    <option value="KH">Cambodia</option>
                                                    <option value="CM">Cameroon</option>
                                                    <option value="CA">Canada</option>
                                                    <option value="CV">Cape Verde</option>
                                                    <option value="KY">Cayman Islands</option>
                                                    <option value="CF">Central African Republic</option>
                                                    <option value="TD">Chad</option>
                                                    <option value="CL">Chile</option>
                                                    <option value="CN">China</option>
                                                    <option value="CX">Christmas Island</option>
                                                    <option value="CC">Cocos (Keeling) Islands</option>
                                                    <option value="CO">Colombia</option>
                                                    <option value="KM">Comoros</option>
                                                    <option value="CG">Congo</option>
                                                    <option value="CD">Congo, The Democratic Republic of The</option>
                                                    <option value="CK">Cook Islands</option>
                                                    <option value="CR">Costa Rica</option>
                                                    <option value="CI">Cote D'ivoire</option>
                                                    <option value="HR">Croatia</option>
                                                    <option value="CU">Cuba</option>
                                                    <option value="CY">Cyprus</option>
                                                    <option value="CZ">Czech Republic</option>
                                                    <option value="DK">Denmark</option>
                                                    <option value="DJ">Djibouti</option>
                                                    <option value="DM">Dominica</option>
                                                    <option value="DO">Dominican Republic</option>
                                                    <option value="EC">Ecuador</option>
                                                    <option value="EG">Egypt</option>
                                                    <option value="SV">El Salvador</option>
                                                    <option value="GQ">Equatorial Guinea</option>
                                                    <option value="ER">Eritrea</option>
                                                    <option value="EE">Estonia</option>
                                                    <option value="ET">Ethiopia</option>
                                                    <option value="FK">Falkland Islands (Malvinas)</option>
                                                    <option value="FO">Faroe Islands</option>
                                                    <option value="FJ">Fiji</option>
                                                    <option value="FI">Finland</option>
                                                    <option value="FR">France</option>
                                                    <option value="GF">French Guiana</option>
                                                    <option value="PF">French Polynesia</option>
                                                    <option value="TF">French Southern Territories</option>
                                                    <option value="GA">Gabon</option>
                                                    <option value="GM">Gambia</option>
                                                    <option value="GE">Georgia</option>
                                                    <option value="DE">Germany</option>
                                                    <option value="GH">Ghana</option>
                                                    <option value="GI">Gibraltar</option>
                                                    <option value="GR">Greece</option>
                                                    <option value="GL">Greenland</option>
                                                    <option value="GD">Grenada</option>
                                                    <option value="GP">Guadeloupe</option>
                                                    <option value="GU">Guam</option>
                                                    <option value="GT">Guatemala</option>
                                                    <option value="GG">Guernsey</option>
                                                    <option value="GN">Guinea</option>
                                                    <option value="GW">Guinea-bissau</option>
                                                    <option value="GY">Guyana</option>
                                                    <option value="HT">Haiti</option>
                                                    <option value="HM">Heard Island and Mcdonald Islands</option>
                                                    <option value="VA">Holy See (Vatican City State)</option>
                                                    <option value="HN">Honduras</option>
                                                    <option value="HK">Hong Kong</option>
                                                    <option value="HU">Hungary</option>
                                                    <option value="IS">Iceland</option>
                                                    <option value="IN">India</option>
                                                    <option value="ID">Indonesia</option>
                                                    <option value="IR">Iran, Islamic Republic of</option>
                                                    <option value="IQ">Iraq</option>
                                                    <option value="IE">Ireland</option>
                                                    <option value="IM">Isle of Man</option>
                                                    <option value="IL">Israel</option>
                                                    <option value="IT">Italy</option>
                                                    <option value="JM">Jamaica</option>
                                                    <option value="JP">Japan</option>
                                                    <option value="JE">Jersey</option>
                                                    <option value="JO">Jordan</option>
                                                    <option value="KZ">Kazakhstan</option>
                                                    <option value="KE">Kenya</option>
                                                    <option value="KI">Kiribati</option>
                                                    <option value="KP">Korea, Democratic People's Republic of</option>
                                                    <option value="KR">Korea, Republic of</option>
                                                    <option value="KW">Kuwait</option>
                                                    <option value="KG">Kyrgyzstan</option>
                                                    <option value="LA">Lao People's Democratic Republic</option>
                                                    <option value="LV">Latvia</option>
                                                    <option value="LB">Lebanon</option>
                                                    <option value="LS">Lesotho</option>
                                                    <option value="LR">Liberia</option>
                                                    <option value="LY">Libyan Arab Jamahiriya</option>
                                                    <option value="LI">Liechtenstein</option>
                                                    <option value="LT">Lithuania</option>
                                                    <option value="LU">Luxembourg</option>
                                                    <option value="MO">Macao</option>
                                                    <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
                                                    <option value="MG">Madagascar</option>
                                                    <option value="MW">Malawi</option>
                                                    <option value="MY">Malaysia</option>
                                                    <option value="MV">Maldives</option>
                                                    <option value="ML">Mali</option>
                                                    <option value="MT">Malta</option>
                                                    <option value="MH">Marshall Islands</option>
                                                    <option value="MQ">Martinique</option>
                                                    <option value="MR">Mauritania</option>
                                                    <option value="MU">Mauritius</option>
                                                    <option value="YT">Mayotte</option>
                                                    <option value="MX">Mexico</option>
                                                    <option value="FM">Micronesia, Federated States of</option>
                                                    <option value="MD">Moldova, Republic of</option>
                                                    <option value="MC">Monaco</option>
                                                    <option value="MN">Mongolia</option>
                                                    <option value="ME">Montenegro</option>
                                                    <option value="MS">Montserrat</option>
                                                    <option value="MA">Morocco</option>
                                                    <option value="MZ">Mozambique</option>
                                                    <option value="MM">Myanmar</option>
                                                    <option value="NA">Namibia</option>
                                                    <option value="NR">Nauru</option>
                                                    <option value="NP">Nepal</option>
                                                    <option value="NL">Netherlands</option>
                                                    <option value="AN">Netherlands Antilles</option>
                                                    <option value="NC">New Caledonia</option>
                                                    <option value="NZ">New Zealand</option>
                                                    <option value="NI">Nicaragua</option>
                                                    <option value="NE">Niger</option>
                                                    <option value="NG">Nigeria</option>
                                                    <option value="NU">Niue</option>
                                                    <option value="NF">Norfolk Island</option>
                                                    <option value="MP">Northern Mariana Islands</option>
                                                    <option value="NO">Norway</option>
                                                    <option value="OM">Oman</option>
                                                    <option value="PK">Pakistan</option>
                                                    <option value="PW">Palau</option>
                                                    <option value="PS">Palestinian Territory, Occupied</option>
                                                    <option value="PA">Panama</option>
                                                    <option value="PG">Papua New Guinea</option>
                                                    <option value="PY">Paraguay</option>
                                                    <option value="PE">Peru</option>
                                                    <option value="PH">Philippines</option>
                                                    <option value="PN">Pitcairn</option>
                                                    <option value="PL">Poland</option>
                                                    <option value="PT">Portugal</option>
                                                    <option value="PR">Puerto Rico</option>
                                                    <option value="QA">Qatar</option>
                                                    <option value="RE">Reunion</option>
                                                    <option value="RO">Romania</option>
                                                    <option value="RU">Russian Federation</option>
                                                    <option value="RW">Rwanda</option>
                                                    <option value="SH">Saint Helena</option>
                                                    <option value="KN">Saint Kitts and Nevis</option>
                                                    <option value="LC">Saint Lucia</option>
                                                    <option value="PM">Saint Pierre and Miquelon</option>
                                                    <option value="VC">Saint Vincent and The Grenadines</option>
                                                    <option value="WS">Samoa</option>
                                                    <option value="SM">San Marino</option>
                                                    <option value="ST">Sao Tome and Principe</option>
                                                    <option value="SA">Saudi Arabia</option>
                                                    <option value="SN">Senegal</option>
                                                    <option value="RS">Serbia</option>
                                                    <option value="SC">Seychelles</option>
                                                    <option value="SL">Sierra Leone</option>
                                                    <option value="SG">Singapore</option>
                                                    <option value="SK">Slovakia</option>
                                                    <option value="SI">Slovenia</option>
                                                    <option value="SB">Solomon Islands</option>
                                                    <option value="SO">Somalia</option>
                                                    <option value="ZA">South Africa</option>
                                                    <option value="GS">South Georgia and The South Sandwich Islands</option>
                                                    <option value="ES">Spain</option>
                                                    <option value="LK">Sri Lanka</option>
                                                    <option value="SD">Sudan</option>
                                                    <option value="SR">Suriname</option>
                                                    <option value="SJ">Svalbard and Jan Mayen</option>
                                                    <option value="SZ">Swaziland</option>
                                                    <option value="SE">Sweden</option>
                                                    <option value="CH">Switzerland</option>
                                                    <option value="SY">Syrian Arab Republic</option>
                                                    <option value="TW">Taiwan, Province of China</option>
                                                    <option value="TJ">Tajikistan</option>
                                                    <option value="TZ">Tanzania, United Republic of</option>
                                                    <option value="TH">Thailand</option>
                                                    <option value="TL">Timor-leste</option>
                                                    <option value="TG">Togo</option>
                                                    <option value="TK">Tokelau</option>
                                                    <option value="TO">Tonga</option>
                                                    <option value="TT">Trinidad and Tobago</option>
                                                    <option value="TN">Tunisia</option>
                                                    <option value="TR">Turkey</option>
                                                    <option value="TM">Turkmenistan</option>
                                                    <option value="TC">Turks and Caicos Islands</option>
                                                    <option value="TV">Tuvalu</option>
                                                    <option value="UG">Uganda</option>
                                                    <option value="UA">Ukraine</option>
                                                    <option value="AE">United Arab Emirates</option>
                                                    <option value="GB">United Kingdom</option>
                                                    <option value="UM">United States Minor Outlying Islands</option>
                                                    <option value="UY">Uruguay</option>
                                                    <option value="UZ">Uzbekistan</option>
                                                    <option value="VU">Vanuatu</option>
                                                    <option value="VE">Venezuela</option>
                                                    <option value="VN">Viet Nam</option>
                                                    <option value="VG">Virgin Islands, British</option>
                                                    <option value="VI">Virgin Islands, U.S.</option>
                                                    <option value="WF">Wallis and Futuna</option>
                                                    <option value="EH">Western Sahara</option>
                                                    <option value="YE">Yemen</option>
                                                    <option value="ZM">Zambia</option>
                                                    <option value="ZW">Zimbabwe</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="formFieldContainer">
                                        <input class="general general-required" type="text" value="Address:" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;" />
                                    </div>
                                    <div class="formFieldContainer formFieldContainer-col2">
                                        <input class="general" type="text" value="Address 2:" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;" />
                                    </div>
                                    <div class="formFieldContainer">
                                        <input class="general general-required" type="text" value="City:" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;" />
                                    </div>
                                    <div class="formFieldContainer-half">
                                        <div class="formField-dropdown">
                                            <select name="state" size="1">
                                                <option value="Default" title="Default">State:</option>
                                                    <option value="AL">Alabama</option>
                                                    <option value="AK">Alaska</option>
                                                    <option value="AZ">Arizona</option>
                                                    <option value="AR">Arkansas</option>
                                                    <option value="CA">California</option>
                                                    <option value="CO">Colorado</option>
                                                    <option value="CT">Connecticut</option>
                                                    <option value="DE">Delaware</option>
                                                    <option value="DC">District Of Columbia</option>
                                                    <option value="FL">Florida</option>
                                                    <option value="GA">Georgia</option>
                                                    <option value="HI">Hawaii</option>
                                                    <option value="ID">Idaho</option>
                                                    <option value="IL">Illinois</option>
                                                    <option value="IN">Indiana</option>
                                                    <option value="IA">Iowa</option>
                                                    <option value="KS">Kansas</option>
                                                    <option value="KY">Kentucky</option>
                                                    <option value="LA">Louisiana</option>
                                                    <option value="ME">Maine</option>
                                                    <option value="MD">Maryland</option>
                                                    <option value="MA">Massachusetts</option>
                                                    <option value="MI">Michigan</option>
                                                    <option value="MN">Minnesota</option>
                                                    <option value="MS">Mississippi</option>
                                                    <option value="MO">Missouri</option>
                                                    <option value="MT">Montana</option>
                                                    <option value="NE">Nebraska</option>
                                                    <option value="NV">Nevada</option>
                                                    <option value="NH">New Hampshire</option>
                                                    <option value="NJ">New Jersey</option>
                                                    <option value="NM">New Mexico</option>
                                                    <option value="NY">New York</option>
                                                    <option value="NC">North Carolina</option>
                                                    <option value="ND">North Dakota</option>
                                                    <option value="OH">Ohio</option>
                                                    <option value="OK">Oklahoma</option>
                                                    <option value="OR">Oregon</option>
                                                    <option value="PA">Pennsylvania</option>
                                                    <option value="RI">Rhode Island</option>
                                                    <option value="SC">South Carolina</option>
                                                    <option value="SD">South Dakota</option>
                                                    <option value="TN">Tennessee</option>
                                                    <option value="TX">Texas</option>
                                                    <option value="UT">Utah</option>
                                                    <option value="VT">Vermont</option>
                                                    <option value="VA">Virginia</option>
                                                    <option value="WA">Washington</option>
                                                    <option value="WV">West Virginia</option>
                                                    <option value="WI">Wisconsin</option>
                                                    <option value="WY">Wyoming</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="formFieldContainer-half formFieldContainer-half-col4">
                                        <input class="general general-half general-required" type="text" value="Zip Code:" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;" />
                                    </div>
                                    <div class="formFieldContainer">
                                        <input class="general general-required" type="tel" value="Phone:" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;" />
                                    </div>
                                </div>
                            </div>
                            <div class="formCTAContainer">
                                <div class="formCTA"><input class="formSubmit" type="submit" value="Continue" /></div>
                            </div>
                            </form>
                        </div>
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
                
                <div class="checkoutStep future">
                    <div class="checkoutSectionHeader">                 
                        <span class="checkoutSectionHeader-title">2. Shipping Address</span>
                        <span class="checkoutSectionHeader-edit"><a href="#">Edit</a></span>
                	</div>
                    
                    <div class="checkoutSectionContent">
                        <div class="utility-sectionContent">
                            <form id="shippingAddress" action="/client/trs/#.php" method="get">
                            <div class="utility-form">
                                <div class="checkoutSection-radioSubHead">
                                    <input name="shipping" type="radio" class="checkoutStep-radio" value="shipping1">
                                    <h4>Ship to Billing Address</h4>
                                </div>
                                <div class="checkoutSection-radioSubHead">
                                    <input name="shipping" type="radio" class="checkoutStep-radio" value="shipping2">
                                    <h4>Select <span class="hide300">an Entry</span> From Your Address Book</h4>
                                </div>
                            	<div class="formFieldContainer-double">
                                	<div class="formField-dropdown">
                                        <select name="shippingAddress" size="1">
                                            <option value="Address1" title="Default">Matt Kossoff: 2135 Defoor Hills Rd Suite F, Atlanta, GA 30318, United States</option>
                                            <option value="Address2">Josh Kossoff: 32775 Aspen Glen Dr, Solon, OH 44139</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="checkoutSection-radioSubHead">
                                    <input name="shipping" type="radio" class="checkoutStep-radio" value="Shipping3">
                                    <h4>Ship to a Different Address</h4>
                                </div>
                                <div class="formContainer">
                                    <div class="formFieldContainer">
                                        <input class="general general-required" type="text" value="First Name:" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;" />
                                    </div>
                                    <div class="formFieldContainer formFieldContainer-col2">
                                        <input class="general general-required" type="text" value="Last Name:" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;" />
                                    </div>
                                    <div class="formFieldContainer">
                                        <input class="general" type="text" value="Company Name:" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;" />
                                    </div>
                                    <div class="formFieldContainer formFieldContainer-col2">
                                        <div class="formField-dropdown">
                                            <select name="country" size="1">
                                                <option value="Default" title="Default">Country:</option>
                                                    <option value="US">United States</option>
                                                    <option value="AF">Afghanistan</option>
                                                    <option value="AX">Åland Islands</option>
                                                    <option value="AL">Albania</option>
                                                    <option value="DZ">Algeria</option>
                                                    <option value="AS">American Samoa</option>
                                                    <option value="AD">Andorra</option>
                                                    <option value="AO">Angola</option>
                                                    <option value="AI">Anguilla</option>
                                                    <option value="AQ">Antarctica</option>
                                                    <option value="AG">Antigua and Barbuda</option>
                                                    <option value="AR">Argentina</option>
                                                    <option value="AM">Armenia</option>
                                                    <option value="AW">Aruba</option>
                                                    <option value="AU">Australia</option>
                                                    <option value="AT">Austria</option>
                                                    <option value="AZ">Azerbaijan</option>
                                                    <option value="BS">Bahamas</option>
                                                    <option value="BH">Bahrain</option>
                                                    <option value="BD">Bangladesh</option>
                                                    <option value="BB">Barbados</option>
                                                    <option value="BY">Belarus</option>
                                                    <option value="BE">Belgium</option>
                                                    <option value="BZ">Belize</option>
                                                    <option value="BJ">Benin</option>
                                                    <option value="BM">Bermuda</option>
                                                    <option value="BT">Bhutan</option>
                                                    <option value="BO">Bolivia</option>
                                                    <option value="BA">Bosnia and Herzegovina</option>
                                                    <option value="BW">Botswana</option>
                                                    <option value="BV">Bouvet Island</option>
                                                    <option value="BR">Brazil</option>
                                                    <option value="IO">British Indian Ocean Territory</option>
                                                    <option value="BN">Brunei Darussalam</option>
                                                    <option value="BG">Bulgaria</option>
                                                    <option value="BF">Burkina Faso</option>
                                                    <option value="BI">Burundi</option>
                                                    <option value="KH">Cambodia</option>
                                                    <option value="CM">Cameroon</option>
                                                    <option value="CA">Canada</option>
                                                    <option value="CV">Cape Verde</option>
                                                    <option value="KY">Cayman Islands</option>
                                                    <option value="CF">Central African Republic</option>
                                                    <option value="TD">Chad</option>
                                                    <option value="CL">Chile</option>
                                                    <option value="CN">China</option>
                                                    <option value="CX">Christmas Island</option>
                                                    <option value="CC">Cocos (Keeling) Islands</option>
                                                    <option value="CO">Colombia</option>
                                                    <option value="KM">Comoros</option>
                                                    <option value="CG">Congo</option>
                                                    <option value="CD">Congo, The Democratic Republic of The</option>
                                                    <option value="CK">Cook Islands</option>
                                                    <option value="CR">Costa Rica</option>
                                                    <option value="CI">Cote D'ivoire</option>
                                                    <option value="HR">Croatia</option>
                                                    <option value="CU">Cuba</option>
                                                    <option value="CY">Cyprus</option>
                                                    <option value="CZ">Czech Republic</option>
                                                    <option value="DK">Denmark</option>
                                                    <option value="DJ">Djibouti</option>
                                                    <option value="DM">Dominica</option>
                                                    <option value="DO">Dominican Republic</option>
                                                    <option value="EC">Ecuador</option>
                                                    <option value="EG">Egypt</option>
                                                    <option value="SV">El Salvador</option>
                                                    <option value="GQ">Equatorial Guinea</option>
                                                    <option value="ER">Eritrea</option>
                                                    <option value="EE">Estonia</option>
                                                    <option value="ET">Ethiopia</option>
                                                    <option value="FK">Falkland Islands (Malvinas)</option>
                                                    <option value="FO">Faroe Islands</option>
                                                    <option value="FJ">Fiji</option>
                                                    <option value="FI">Finland</option>
                                                    <option value="FR">France</option>
                                                    <option value="GF">French Guiana</option>
                                                    <option value="PF">French Polynesia</option>
                                                    <option value="TF">French Southern Territories</option>
                                                    <option value="GA">Gabon</option>
                                                    <option value="GM">Gambia</option>
                                                    <option value="GE">Georgia</option>
                                                    <option value="DE">Germany</option>
                                                    <option value="GH">Ghana</option>
                                                    <option value="GI">Gibraltar</option>
                                                    <option value="GR">Greece</option>
                                                    <option value="GL">Greenland</option>
                                                    <option value="GD">Grenada</option>
                                                    <option value="GP">Guadeloupe</option>
                                                    <option value="GU">Guam</option>
                                                    <option value="GT">Guatemala</option>
                                                    <option value="GG">Guernsey</option>
                                                    <option value="GN">Guinea</option>
                                                    <option value="GW">Guinea-bissau</option>
                                                    <option value="GY">Guyana</option>
                                                    <option value="HT">Haiti</option>
                                                    <option value="HM">Heard Island and Mcdonald Islands</option>
                                                    <option value="VA">Holy See (Vatican City State)</option>
                                                    <option value="HN">Honduras</option>
                                                    <option value="HK">Hong Kong</option>
                                                    <option value="HU">Hungary</option>
                                                    <option value="IS">Iceland</option>
                                                    <option value="IN">India</option>
                                                    <option value="ID">Indonesia</option>
                                                    <option value="IR">Iran, Islamic Republic of</option>
                                                    <option value="IQ">Iraq</option>
                                                    <option value="IE">Ireland</option>
                                                    <option value="IM">Isle of Man</option>
                                                    <option value="IL">Israel</option>
                                                    <option value="IT">Italy</option>
                                                    <option value="JM">Jamaica</option>
                                                    <option value="JP">Japan</option>
                                                    <option value="JE">Jersey</option>
                                                    <option value="JO">Jordan</option>
                                                    <option value="KZ">Kazakhstan</option>
                                                    <option value="KE">Kenya</option>
                                                    <option value="KI">Kiribati</option>
                                                    <option value="KP">Korea, Democratic People's Republic of</option>
                                                    <option value="KR">Korea, Republic of</option>
                                                    <option value="KW">Kuwait</option>
                                                    <option value="KG">Kyrgyzstan</option>
                                                    <option value="LA">Lao People's Democratic Republic</option>
                                                    <option value="LV">Latvia</option>
                                                    <option value="LB">Lebanon</option>
                                                    <option value="LS">Lesotho</option>
                                                    <option value="LR">Liberia</option>
                                                    <option value="LY">Libyan Arab Jamahiriya</option>
                                                    <option value="LI">Liechtenstein</option>
                                                    <option value="LT">Lithuania</option>
                                                    <option value="LU">Luxembourg</option>
                                                    <option value="MO">Macao</option>
                                                    <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
                                                    <option value="MG">Madagascar</option>
                                                    <option value="MW">Malawi</option>
                                                    <option value="MY">Malaysia</option>
                                                    <option value="MV">Maldives</option>
                                                    <option value="ML">Mali</option>
                                                    <option value="MT">Malta</option>
                                                    <option value="MH">Marshall Islands</option>
                                                    <option value="MQ">Martinique</option>
                                                    <option value="MR">Mauritania</option>
                                                    <option value="MU">Mauritius</option>
                                                    <option value="YT">Mayotte</option>
                                                    <option value="MX">Mexico</option>
                                                    <option value="FM">Micronesia, Federated States of</option>
                                                    <option value="MD">Moldova, Republic of</option>
                                                    <option value="MC">Monaco</option>
                                                    <option value="MN">Mongolia</option>
                                                    <option value="ME">Montenegro</option>
                                                    <option value="MS">Montserrat</option>
                                                    <option value="MA">Morocco</option>
                                                    <option value="MZ">Mozambique</option>
                                                    <option value="MM">Myanmar</option>
                                                    <option value="NA">Namibia</option>
                                                    <option value="NR">Nauru</option>
                                                    <option value="NP">Nepal</option>
                                                    <option value="NL">Netherlands</option>
                                                    <option value="AN">Netherlands Antilles</option>
                                                    <option value="NC">New Caledonia</option>
                                                    <option value="NZ">New Zealand</option>
                                                    <option value="NI">Nicaragua</option>
                                                    <option value="NE">Niger</option>
                                                    <option value="NG">Nigeria</option>
                                                    <option value="NU">Niue</option>
                                                    <option value="NF">Norfolk Island</option>
                                                    <option value="MP">Northern Mariana Islands</option>
                                                    <option value="NO">Norway</option>
                                                    <option value="OM">Oman</option>
                                                    <option value="PK">Pakistan</option>
                                                    <option value="PW">Palau</option>
                                                    <option value="PS">Palestinian Territory, Occupied</option>
                                                    <option value="PA">Panama</option>
                                                    <option value="PG">Papua New Guinea</option>
                                                    <option value="PY">Paraguay</option>
                                                    <option value="PE">Peru</option>
                                                    <option value="PH">Philippines</option>
                                                    <option value="PN">Pitcairn</option>
                                                    <option value="PL">Poland</option>
                                                    <option value="PT">Portugal</option>
                                                    <option value="PR">Puerto Rico</option>
                                                    <option value="QA">Qatar</option>
                                                    <option value="RE">Reunion</option>
                                                    <option value="RO">Romania</option>
                                                    <option value="RU">Russian Federation</option>
                                                    <option value="RW">Rwanda</option>
                                                    <option value="SH">Saint Helena</option>
                                                    <option value="KN">Saint Kitts and Nevis</option>
                                                    <option value="LC">Saint Lucia</option>
                                                    <option value="PM">Saint Pierre and Miquelon</option>
                                                    <option value="VC">Saint Vincent and The Grenadines</option>
                                                    <option value="WS">Samoa</option>
                                                    <option value="SM">San Marino</option>
                                                    <option value="ST">Sao Tome and Principe</option>
                                                    <option value="SA">Saudi Arabia</option>
                                                    <option value="SN">Senegal</option>
                                                    <option value="RS">Serbia</option>
                                                    <option value="SC">Seychelles</option>
                                                    <option value="SL">Sierra Leone</option>
                                                    <option value="SG">Singapore</option>
                                                    <option value="SK">Slovakia</option>
                                                    <option value="SI">Slovenia</option>
                                                    <option value="SB">Solomon Islands</option>
                                                    <option value="SO">Somalia</option>
                                                    <option value="ZA">South Africa</option>
                                                    <option value="GS">South Georgia and The South Sandwich Islands</option>
                                                    <option value="ES">Spain</option>
                                                    <option value="LK">Sri Lanka</option>
                                                    <option value="SD">Sudan</option>
                                                    <option value="SR">Suriname</option>
                                                    <option value="SJ">Svalbard and Jan Mayen</option>
                                                    <option value="SZ">Swaziland</option>
                                                    <option value="SE">Sweden</option>
                                                    <option value="CH">Switzerland</option>
                                                    <option value="SY">Syrian Arab Republic</option>
                                                    <option value="TW">Taiwan, Province of China</option>
                                                    <option value="TJ">Tajikistan</option>
                                                    <option value="TZ">Tanzania, United Republic of</option>
                                                    <option value="TH">Thailand</option>
                                                    <option value="TL">Timor-leste</option>
                                                    <option value="TG">Togo</option>
                                                    <option value="TK">Tokelau</option>
                                                    <option value="TO">Tonga</option>
                                                    <option value="TT">Trinidad and Tobago</option>
                                                    <option value="TN">Tunisia</option>
                                                    <option value="TR">Turkey</option>
                                                    <option value="TM">Turkmenistan</option>
                                                    <option value="TC">Turks and Caicos Islands</option>
                                                    <option value="TV">Tuvalu</option>
                                                    <option value="UG">Uganda</option>
                                                    <option value="UA">Ukraine</option>
                                                    <option value="AE">United Arab Emirates</option>
                                                    <option value="GB">United Kingdom</option>
                                                    <option value="UM">United States Minor Outlying Islands</option>
                                                    <option value="UY">Uruguay</option>
                                                    <option value="UZ">Uzbekistan</option>
                                                    <option value="VU">Vanuatu</option>
                                                    <option value="VE">Venezuela</option>
                                                    <option value="VN">Viet Nam</option>
                                                    <option value="VG">Virgin Islands, British</option>
                                                    <option value="VI">Virgin Islands, U.S.</option>
                                                    <option value="WF">Wallis and Futuna</option>
                                                    <option value="EH">Western Sahara</option>
                                                    <option value="YE">Yemen</option>
                                                    <option value="ZM">Zambia</option>
                                                    <option value="ZW">Zimbabwe</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="formFieldContainer">
                                        <input class="general general-required" type="text" value="Address:" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;" />
                                    </div>
                                    <div class="formFieldContainer formFieldContainer-col2">
                                        <input class="general" type="text" value="Address 2:" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;" />
                                    </div>
                                    <div class="formFieldContainer">
                                        <input class="general general-required" type="text" value="City:" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;" />
                                    </div>
                                    <div class="formFieldContainer-half">
                                        <div class="formField-dropdown">
                                            <select name="state" size="1">
                                                <option value="Default" title="Default">State:</option>
                                                    <option value="AL">Alabama</option>
                                                    <option value="AK">Alaska</option>
                                                    <option value="AZ">Arizona</option>
                                                    <option value="AR">Arkansas</option>
                                                    <option value="CA">California</option>
                                                    <option value="CO">Colorado</option>
                                                    <option value="CT">Connecticut</option>
                                                    <option value="DE">Delaware</option>
                                                    <option value="DC">District Of Columbia</option>
                                                    <option value="FL">Florida</option>
                                                    <option value="GA">Georgia</option>
                                                    <option value="HI">Hawaii</option>
                                                    <option value="ID">Idaho</option>
                                                    <option value="IL">Illinois</option>
                                                    <option value="IN">Indiana</option>
                                                    <option value="IA">Iowa</option>
                                                    <option value="KS">Kansas</option>
                                                    <option value="KY">Kentucky</option>
                                                    <option value="LA">Louisiana</option>
                                                    <option value="ME">Maine</option>
                                                    <option value="MD">Maryland</option>
                                                    <option value="MA">Massachusetts</option>
                                                    <option value="MI">Michigan</option>
                                                    <option value="MN">Minnesota</option>
                                                    <option value="MS">Mississippi</option>
                                                    <option value="MO">Missouri</option>
                                                    <option value="MT">Montana</option>
                                                    <option value="NE">Nebraska</option>
                                                    <option value="NV">Nevada</option>
                                                    <option value="NH">New Hampshire</option>
                                                    <option value="NJ">New Jersey</option>
                                                    <option value="NM">New Mexico</option>
                                                    <option value="NY">New York</option>
                                                    <option value="NC">North Carolina</option>
                                                    <option value="ND">North Dakota</option>
                                                    <option value="OH">Ohio</option>
                                                    <option value="OK">Oklahoma</option>
                                                    <option value="OR">Oregon</option>
                                                    <option value="PA">Pennsylvania</option>
                                                    <option value="RI">Rhode Island</option>
                                                    <option value="SC">South Carolina</option>
                                                    <option value="SD">South Dakota</option>
                                                    <option value="TN">Tennessee</option>
                                                    <option value="TX">Texas</option>
                                                    <option value="UT">Utah</option>
                                                    <option value="VT">Vermont</option>
                                                    <option value="VA">Virginia</option>
                                                    <option value="WA">Washington</option>
                                                    <option value="WV">West Virginia</option>
                                                    <option value="WI">Wisconsin</option>
                                                    <option value="WY">Wyoming</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="formFieldContainer-half formFieldContainer-half-col4">
                                        <input class="general general-half general-required" type="text" value="Zip Code:" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;" />
                                    </div>
                                    <div class="formFieldContainer">
                                        <input class="general general-required" type="tel" value="Phone:" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;" />
                                    </div>
                                </div>
                            </div>
                            <div class="formCTAContainer">
                                <div class="formCTA"><input class="formSubmit" type="submit" value="Continue" /></div>
                                <div class="formGoBack"><a href="#">Back</a></div>
                            </div>
                            </form>
                        </div>
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
                
                <div class="checkoutStep future">
                    <div class="checkoutSectionHeader">                 
                        <span class="checkoutSectionHeader-title">3. Shipping Method</span>
                        <span class="checkoutSectionHeader-edit"><a href="#">Edit</a></span>
                	</div>
                    
                    <div class="checkoutSectionContent">
                        <div class="utility-sectionContent">
                            <form id="shippingMethod" action="/client/trs/#.php" method="get">
                            <div class="utility-form">
                                <h4>Select Shipping Service</h4>
                            	<div class="formFieldContainer-double">
                                	<div class="formField-dropdown">
                                        <select name="shippingService" size="1">
                                            <option value="Address1" title="Default">Flat Rate ... $5.00</option>
                                            <option value="Address2">USPS ... First Class Mail - Package ... $24.63</option>
                                            <option value="Address2">USPS ... Priority Mail - Package ... $5.35</option>
                                            <option value="Address2">UPS ... Ground ... $6.79</option>
                                            <option value="Address2">UPS ... 3 Day Select ... $10.22</option>
                                            <option value="Address2">UPS ... Next Day Air Saver ... $40.16</option>
                                            <option value="Address2">UPS ... Next Day Air ... $44.02</option>    
                                        </select>
                                    </div>
                                </div>
                                <h4>Special Order Instructions</h4>
                                <div class="formFieldContainer-double">
                                	<div class="formField-dropdown">
                                        <textarea class="comments" name="comments" rows="8" cols="75"></textarea>
                                	</div>
                                </div>
                            </div>
                            <div class="formCTAContainer">
                                <div class="formCTA"><input class="formSubmit" type="submit" value="Continue" /></div>
                                <div class="formGoBack"><a href="#">Back</a></div>
                            </div>
                            </form>
                        </div>
                        <span class="formNote">*Any questions about your shipment? Check out the <a href="/client/trs/utility/store-policies.php" target="_blank">Store Policies</a> for answers to many common shipping questions.</span>
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
                
                <div class="checkoutStep future">
                    <div class="checkoutSectionHeader">                 
                        <span class="checkoutSectionHeader-title">4. Payment Information</span>
                        <span class="checkoutSectionHeader-edit"><a href="#">Edit</a></span>
                	</div>
                    
                    <div class="checkoutSectionContent">
                        <div class="utility-sectionContent">
                            <form id="paymentMethod" action="/client/trs/#.php" method="get">
                            <div class="utility-form">
                                <div class="checkoutSection-radioSubHead">
                                    <input name="payment" type="radio" class="checkoutStep-radio" value="payment1">
                                    <h4>Credit Card</h4>
                                </div>
                                <div class="formFieldContainer-double">
                                	<input class="general general-required" type="text" value="Name on Card:" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;" />
                                </div>
                                <div class="formFieldContainer">    
                                    <div class="formField-dropdown">
                                        <select name="creditCard" size="1">
                                            <option value="Default" title="Default">Credit Card Type:</option>
                                            <option value="credit1">Visa</option>
                                            <option value="credit1">Mastercard</option>
                                            <option value="credit1">American Express</option> 
                                            <option value="credit1">Discover</option>    
                                        </select>
                                    </div>
                                </div>    
                                <div class="formFieldContainer formFieldContainer-col2">
                                	<input class="general general-required" type="text" value="Credit Card Number:" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;" />
                                </div>
                                <div class="formFieldContainer">
                                        <div class="formField-dropdown">
                                            <select name="month" size="1">
                                                <option value="Default" title="Default">Expiration Month:</option>
                                                <option value="jan">January</option>
                                                <option value="feb">February</option>
                                                <option value="mar">March</option> 
                                                <option value="apr">April</option> 
                                                <option value="may">May</option>
                                                <option value="jun">June</option>
                                                <option value="jul">July</option> 
                                                <option value="aug">August</option> 
                                                <option value="sep">September</option>
                                                <option value="oct">October</option>
                                                <option value="nov">November</option> 
                                                <option value="dec">December</option>    
                                            </select>
                                        </div>
                                </div>
                                <div class="formFieldContainer-half">
                                        <div class="formField-dropdown">
                                            <select name="year" size="1">
                                                <option value="Default" title="Default">Expiration Year:</option>
                                                <option value="13">2013</option>
                                                <option value="14">2014</option>
                                                <option value="15">2015</option>
                                                <option value="16">2016</option>
                                                <option value="17">2017</option>
                                                <option value="18">2018</option>
                                                <option value="19">2019</option>
                                                <option value="20">2020</option>
                                                <option value="21">2021</option>
                                                <option value="22">2022</option>
                                                <option value="23">2023</option>
                                                <option value="24">2024</option>
                                                <option value="25">2025</option>
                                                <option value="26">2026</option>
                                                <option value="27">2027</option>
                                                <option value="28">2028</option>   
                                            </select>
                                        </div>
                                </div>
                                <div class="formFieldContainer-half formFieldContainer-half-col4">
                                	<input class="general general-half general-required" type="text" value="CVV2:" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;" />
                                </div>
                                <div class="checkoutSection-radioSubHead">
                                    <input name="payment" type="radio" class="checkoutStep-radio" value="payment2">
                                    <h4>PayPal</h4>
                                </div>
                                <div class="utility-sectionContent">
                                	<div class="payment3rdParty"><img src="/client/trs/images/payment_paypal.png" alt="Checkout with PayPal" border="0" ></div>
                                </div>
                                <div class="checkoutSection-radioSubHead">
                                    <input name="shipping" type="radio" class="checkoutStep-radio" value="Shipping3">
                                    <h4>Google Wallet</h4>
                                </div>
                                <div class="utility-sectionContent">
                                	<div class="payment3rdParty"><img src="/client/trs/images/payment_google.png" alt="Checkout with Google Wallet" border="0" ></div>
                                </div>
                            </div>
                            <div class="formCTAContainer">
                                <div class="formCTA"><input class="formSubmit" type="submit" value="Continue" /></div>
                                <div class="formGoBack"><a href="#">Back</a></div>
                            </div>
                            </form>
                        </div>
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
                
                <div class="checkoutStep future">
                    <div class="checkoutSectionHeader">                 
                        <span class="checkoutSectionHeader-title">5. TRS Audit <span class="weightRegular-styleNormal">(Optional)</span></span>
                        <span class="checkoutSectionHeader-edit"><a href="#">Edit</a></span>
                	</div>
                    
                    <div class="checkoutSectionContent">
                    	<div class="utility-sectionContent">
                        	<span class="summary-info">The Retrofit Source offers a complimentary audit of your order to ensure compatibility. If we see any issues we will notify you prior to shipping.</span>
                    		<form id="trsVehicleAudit" action="/client/trs/#.php" method="get">
                            <div class="utility-form">
                                <div class="checkoutSection-radioSubHead">
                                    <input name="vehicleAudit" type="radio" class="checkoutStep-radio" value="audit1">
                                   <h4>Yes Please! My Vehicle <span class="hide300">Information</span> is Below</h4>
                                </div>
                                <div class="formFieldContainer-half">
                                	<input class="general general-half general-required" type="text" value="Year:" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;" />
                                </div>
                                <div class="formFieldContainer-half  formFieldContainer-half-col2">
                                	<input class="general general-half general-required" type="text" value="Make:" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;" />
                                </div>
                                <div class="formFieldContainer formFieldContainer-col2">
                                	<input class="general general-required" type="text" value="Model:" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;" />
                                </div>
                                <div class="checkoutSection-radioSubHead">
                                    <input name="vehicleAudit" type="radio" class="checkoutStep-radio" value="audit2">
                                    <h4>No Thank You</h4>
                                </div>
                                <span class="summary-info"><br></span>
                        	</div>
                            <div class="formCTAContainer">
                                <div class="formCTA"><input class="formSubmit" type="submit" value="Continue" /></div>
                                <div class="formGoBack"><a href="#">Back</a></div>
                            </div>
                            </form>
                        </div>
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
                        
                <div class="checkoutStep reviewConfirm future">
                    <div class="checkoutSectionHeader">                 
                        <span class="checkoutSectionHeader-title">6. Review Order &amp; Confirm</span>
                	</div>
                    
                    <div class="checkoutSectionContent">
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
                        <div class="summary-sectionCTA">     
                            <div class="summary-CTAs">
                                <div class="secureCheckoutCTA">
                                    <a href="/client/trs/checkout/invoice.php">
                                    <span class="secureCheckoutCTA-title">Confirm Order</span>
                                    </a>
                                </div>
                                <div class="formGoBack">Forgot an item? <a href="#">Edit Your Cart</a></div>
                            </div>
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