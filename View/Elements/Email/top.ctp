<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Message from <?= $servername; ?></title>
	<style type="text/css">
		/* Based on The MailChimp Reset INLINE: Yes. */  
		/* Client-specific Styles *//Volumes/Macintosh%20HD/Projects/Web/admin.appstorehq.net/app/View/Elements/Email/top.ctp
		#outlook a {padding:0;} /* Force Outlook to provide a "view in browser" menu link. */
		body{width:100% !important; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; margin:0; padding:0;} 
		/* Prevent Webkit and Windows Mobile platforms from changing default font sizes.*/ 
		.ExternalClass {width:100%;} /* Force Hotmail to display emails at full width */  
		.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;}
		/* Forces Hotmail to display normal line spacing.  More on that: http://www.emailonacid.com/forum/viewthread/43/ */ 
		#backgroundTable {margin:0; padding:0; width:100% !important; line-height: 100% !important;}
		/* End reset */

		/* Some sensible defaults for images
		Bring inline: Yes. */
		img {outline:none; text-decoration:none; -ms-interpolation-mode: bicubic;} 
		a img {border:none;} 
		.image_fix {display:block;}

		/* Yahoo paragraph fix
		Bring inline: Yes. */
		p {margin: 1em 0;}

		/* Hotmail header color reset
		Bring inline: Yes. */
		h1, h2, h3, h4, h5, h6 {color: black !important;}

		h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {color: blue !important;}

		h1 a:active, h2 a:active,  h3 a:active, h4 a:active, h5 a:active, h6 a:active {
		color: red !important; /* Preferably not the same color as the normal header link color.  There is limited support for psuedo classes in email clients, this was added just for good measure. */
		}

		h1 a:visited, h2 a:visited,  h3 a:visited, h4 a:visited, h5 a:visited, h6 a:visited {
		color: purple !important; /* Preferably not the same color as the normal header link color. There is limited support for psuedo classes in email clients, this was added just for good measure. */
		}

		/* Outlook 07, 10 Padding issue fix
		Bring inline: No.*/
		table td {border-collapse: collapse;}

		/* Remove spacing around Outlook 07, 10 tables
		Bring inline: Yes */
		table { border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; }

		/* Styling your links has become much simpler with the new Yahoo.  In fact, it falls in line with the main credo of styling in email and make sure to bring your styles inline.  Your link colors will be uniform across clients when brought inline.
		Bring inline: Yes. */
		a {color: orange;}


		/***************************************************
		****************************************************
		MOBILE TARGETING
		****************************************************
		***************************************************/
		@media only screen and (max-width: 480px) {
		    .main-content{ width: 100% !important; }
		    .content-padding{ width: 5% !important; }
		
			/* Part one of controlling phone number linking for mobile. */
			a[href^="tel"], a[href^="sms"] {
						text-decoration: none;
						color: blue; /* or whatever your want */
						pointer-events: none;
						cursor: default;
					}

			.mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
						text-decoration: default;
						color: orange !important;
						pointer-events: auto;
						cursor: default;
					}

		}

		/* More Specific Targeting */

		@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
		/* You guessed it, ipad (tablets, smaller screens, etc) */
			/* repeating for the ipad */
			a[href^="tel"], a[href^="sms"] {
						text-decoration: none;
						color: blue; /* or whatever your want */
						pointer-events: none;
						cursor: default;
					}

			.mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
						text-decoration: default;
						color: orange !important;
						pointer-events: auto;
						cursor: default;
					}
		}

		@media only screen and (-webkit-min-device-pixel-ratio: 2) {
		/* Put your iPhone 4g styles in here */ 
		}

		/* Android targeting */
		@media only screen and (-webkit-device-pixel-ratio:.75){
		/* Put CSS for low density (ldpi) Android layouts in here */
		}
		@media only screen and (-webkit-device-pixel-ratio:1){
		/* Put CSS for medium density (mdpi) Android layouts in here */
		}
		@media only screen and (-webkit-device-pixel-ratio:1.5){
		/* Put CSS for high density (hdpi) Android layouts in here */
		}
		/* end Android targeting */

	</style>

	<!-- Targeting Windows Mobile -->
	<!--[if IEMobile 7]>
	<style type="text/css">
	
	</style>
	<![endif]-->   

	<!-- ***********************************************
	****************************************************
	END MOBILE TARGETING
	****************************************************
	************************************************ -->

	<!--[if gte mso 9]>
		<style>
		/* Target Outlook 2007 and 2010 */
		</style>
	<![endif]-->
</head>
<body style="background-color: #eceff1; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;">
    <table cellpadding="0" cellspacing="0" border="0" id="backgroundTable" bgcolor="#eceff1" width="100%">
    	<tr>
    		<td valign="top" style="text-align: center; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;"> 
    		<!-- Tables are the most common way to format your email consistently. Set your table widths inside cells and in most cases reset cellpadding, cellspacing, and border to zero. Use nested tables as a way to space effectively in your message. -->
    		<table class="main-content" cellpadding="0" cellspacing="0" border="0" align="center" style="width: 650px; text-align: left; color: #424648;">
    		
    		    <!-- HEADER -->
    			<tr>
    				<td valign="top" style="color: #7d8488; text-align: center;">
    				    <!-- <span style="font-size: 12px; line-height: 24px;">Trouble viewing this email? <a href="#" style="font-weight: bold; text-decoration: underline; color: #424648;">View the Online Version.</a></span> -->
    				    
    				    <!-- LOGO -->
    				    <table cellpadding="0" cellspacing="0" border="0" width="100%">
    				        <tr>
    				            <td valign="middle" height="120" style="text-align: center; font-size: 48px; font-weight: 100;">
    				            	<a href="<?= $this->Html->url('/', true); ?>">
	    				            	<!-- <img src="cid:logoImg123" alt="Go to home page" class="logo" style="max-height: 65px;" /> -->
    				            	</a>
    				            </td>
    				        </tr>
    				    </table>
    				</td>
    			</tr>
    			
    			<!-- MAIN CONTENT -->
    			<tr>
    			    <td valign="top" style="background-color: white; border-color: #cfd0d1; border-width: 1px; border-style: solid; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; color: #424648;">
						<!-- ------------------ MESSAGE ------------------ -->