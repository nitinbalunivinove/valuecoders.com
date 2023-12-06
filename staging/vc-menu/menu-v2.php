<?php require_once 'common/inc/config.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Outsourcing Software Development Company - @ValueCoders</title>
	<meta name="description" content="ValueCoders offers software development outsourcing services and help business with software engineering, smart teams & smart automation. 17+ years of experience. 2500+ clients globally." />
	<meta name="keywords" content="software outsourcing company, software development outsourcing, software engineering company in india, software outsourcing company India, offshore software development, software outsourcing services" />
	<meta property="og:title" content="Outsourcing Software Development Company - @ValueCoders" />

	<?php require_once 'include/header-files.php'; ?>
	<link rel="preload stylesheet" type="text/css" href="css/index.min.css" defer/>
	<link rel="preload stylesheet" type="text/css" href="css/menu-v2.min.css" defer/>
</head>
<body id="themeAdd">

<!-- for menu -->
<?php if( !isMobile() ) : ?>
	<?php 
function vc_is_mobile() {
    if ( empty( $_SERVER['HTTP_USER_AGENT'] ) ) {
        $is_mobile = false;
    } elseif ( strpos( $_SERVER['HTTP_USER_AGENT'], 'Mobile' ) !== false // Many mobile devices (all iPhone, iPad, etc.)
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Android' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Silk/' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Kindle' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'BlackBerry' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mini' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mobi' ) !== false ) {
            $is_mobile = true;
    } else {
        $is_mobile = false;
    }
    return $is_mobile;
}
$is_staging = ( isset( $_SERVER['PHP_SELF'] ) && (strpos( $_SERVER['PHP_SELF'], 'v2wp' ) !== false) )  ?  true : false;
if( $is_staging ){
$site_url   = 'https://www.valuecoders.com/v2wp/';
}else{
$site_url   = 'https://www.valuecoders.com/';
}

$tpl_url    = 'https://www.valuecoders.com/wp-content/themes/valuecoders';
?>
<?php //if( !vc_is_mobile() ) : ?>
<header class="header-two" data-nosnippet>
    <div class="container">
        <div class="wrapper">
            <div class="header-item-left">
                <a href="<?php echo $site_url; ?>new_page" class="brand">
                    <img loading="lazy" src="<?php echo $tpl_url; ?>/images/logo.png" alt="Logo" class="dark-theme-logo" width="301" height="52">
                    <img loading="lazy" src="<?php echo $tpl_url; ?>/images/logo-blue.png" alt="Logo" 
                    class="day-theme-logo" width="301" height="52">
               </a>
            </div>
            <!-- Navbar Section -->
            <?php if( !isset( $_GET['l'] ) ) : ?>
            <div class="header-item-center">
                <nav class="menu" id="menu">
                    <ul>
                        <li class="menu-item-has-children"><a href="<?php echo $site_url; ?>custom-software-development-services-company">Services</a>
                            <div class="menu-mega">
                                <div class="container">
                                    <div class="dis-flex for-padding" id="active_Current_Tabs1">
                                        <div class="width-25 left-list">
                                            <a href="<?php echo $site_url; ?>new_page" class="text-column active" id="a1" data-section="active_Current_Tabs1" data-mrow="1">Software Development</a>
                                            <a href="<?php echo $site_url; ?>application-development" class="text-column" id="a2" data-section="active_Current_Tabs1" data-mrow="2">Application Development</a>
                                            <a href="<?php echo $site_url; ?>ecommerce-development-services-company" class="text-column" id="a3" data-section="active_Current_Tabs1" data-mrow="3">eCommerce</a>
                                            <a href="<?php echo $site_url; ?>new_page" class="text-column" id="a4" data-section="active_Current_Tabs1" data-mrow="4">Others</a>
                                            <!-- <a href="</?php echo $site_url; ?>" class="text-column" id="a5" data-section="active_Current_Tabs1" 
                                            data-mrow="5">Industries</a> -->
                                        </div>

                                        <!-- 1 -->
                                        <div class="width-75 header-menu active" id="b1">
                                            <div class="dis-flex" id="active_Current_Tabs2">
                                                <div class="width-33 middle-list">
                                                    <a href="<?php echo $site_url; ?>custom-software-development-services-company" class="title">Custom Software Development</a>
													<div class="sub-child">
														<a href="<?php echo $site_url; ?>new_page">Enterprise Software Development</a> 
														<a href="<?php echo $site_url; ?>new_page">NearShore Software Development</a>
														<!-- <a href="</?php echo $site_url; ?>new_page">API Development</a> -->
													</div>
													<a href="<?php echo $site_url; ?>it-strategy-consulting-firms" class="title">Software Consulting</a>
													<div class="sub-child">
														<!-- <a href="</?php echo $site_url; ?>new_page">IT Consulting</a> -->
														<!-- <a href="</?php echo $site_url; ?>new_page">Agile Consulting</a> -->
														<!-- <a href="</?php echo $site_url; ?>new_page">CRM Consulting</a> -->
														<!-- <a href="</?php echo $site_url; ?>new_page">Data Analytics Consulting</a> -->
													</div>
												</div>

                                                <div class="width-33 middle-list">
													<a href="<?php echo $site_url; ?>new_page" class="title">Software Outsourcing services</a>
													<div class="sub-child">
														<a href="<?php echo $site_url; ?>dedicated-development-teams">Dedicated Development Teams</a>
														<a href="<?php echo $site_url; ?>it-staff-augmentation-services">Staff Augmentation Services</a>
														<a href="<?php echo $site_url; ?>offshore-software-development-services-company">Offshore Software Development</a>
														<a href="<?php echo $site_url; ?>offshore-software-development-center-india">Offshore Development Center (ODC)</a>
														<a href="<?php echo $site_url; ?>why-india">Software Development in India</a>
														<a href="<?php echo $site_url; ?>benefits-of-hiring-remote-developers">Hiring Remote Developers</a>
														<a href="<?php echo $site_url; ?>faq">FAQs</a>
														<a href="<?php echo $site_url; ?>hire-developers">Hire Indian Developers</a>
														<!-- <a href="</?php echo $site_url; ?>new_page">How to Hire Software Developers</a> -->
														<!-- <a href="</?php echo $site_url; ?>new_page">IT Outsourcing</a> -->
														<a href="<?php echo $site_url; ?>how-it-works">How It Works</a>
													</div>
												</div>
                                                <div class="width-33 middle-list">
                                                    <a href="<?php echo $site_url; ?>outsource-software-product-development-services" class="title">Software Product Development</a>
													<div class="sub-child">
														<a href="<?php echo $site_url; ?>mvp-app-development-company">MVP Development & Consulting</a>
														<a href="<?php echo $site_url; ?>new_page">SAAS Consulting & Development</a>
														<!-- <a href="</?php echo $site_url; ?>">Startup Consulting</a> -->
														<!-- <a href="</?php echo $site_url; ?>">Product Development for Startups</a> -->
														<!-- <a href="</?php echo $site_url; ?>">Product UI/UX Design</a> -->
													</div>
													<a href="<?php echo $site_url; ?>digital-transformation-development-services" class="title">Digital Transformation</a>
													<div class="sub-child">
														<!-- <a href="</?php echo $site_url; ?>">Consulting</a> -->
													</div>
												</div>

                                            </div>
                                        </div>

                                        <!-- 2 -->
                                        <div class="width-75 header-menu" id="b2">
                                            <div class="dis-flex" id="active_Current_Tabs3">
												<div class="width-33 middle-list">
                                                    <a href="<?php echo $site_url; ?>mobile-application-development" class="title">Mobile App Development</a>
													<div class="sub-child">
														<a href="<?php echo $site_url; ?>cross-platform-app-development-services">Cross Platform App Development</a>
														<a href="<?php echo $site_url; ?>flutter-app-development-company">Flutter App Development</a>
														<a href="<?php echo $site_url; ?>ios-application-development-company-india">iOS / iPhone App Development</a>
														<a href="<?php echo $site_url; ?>android-app-development-company-india">Andoid App Development</a>
														<a href="<?php echo $site_url; ?>best-react-native-development-services-company-india">React Native App Development</a>
														<a href="<?php echo $site_url; ?>best-xamarin-development-services-company-india">Xamarin App Development</a>
													</div>
													<a href="<?php echo $site_url; ?>new_page" class="title">Frontend Development Services</a>
													<div class="sub-child">
														<a href="<?php echo $site_url; ?>angular-js-development-company-india">Angular Development Services</a>
														<a href="<?php echo $site_url; ?>react-js-development-services-company">React Development Services</a>
														<a href="<?php echo $site_url; ?>microsoft-power-bi-development-services-company">Power BI Development Services</a>
													</div>
													<a href="<?php echo $site_url; ?>new_page" class="title">Full Stack Development</a>
													<div class="sub-child">
														<a href="<?php echo $site_url; ?>top-mean-stack-development-services-company-india">MEAN Stack Development Services</a>
														<a href="<?php echo $site_url; ?>top-mern-stack-development-services-company-india">MERN Stack Development Services</a>
													</div>
												</div>

                                                <div class="width-33 middle-list">
													<a href="<?php echo $site_url; ?>new_page" class="title">Backend Development Services</a>
													<div class="sub-child">
														<a href="<?php echo $site_url; ?>technologies/net-development-services">.NET Development Services</a>
														<a href="<?php echo $site_url; ?>top-laravel-development-services-company-india">Laravel Development Services</a>
														<a href="<?php echo $site_url; ?>php-development-services-company">PHP Development Services</a>
														<a href="<?php echo $site_url; ?>node-js-development-company-india">Node Development Services</a>
														<a href="<?php echo $site_url; ?>java-web-application-development-company">Java Development Services</a>
														<a href="<?php echo $site_url; ?>python-web-development-services-company">Python Development Services</a>
														<a href="<?php echo $site_url; ?>sharepoint-application-development-services-company">SharePoint Development Services</a>
														<a href="<?php echo $site_url; ?>top-wordpress-development-services-company-india">Wordpress Development Services</a>
														<a href="<?php echo $site_url; ?>top-drupal-development-services-company-india">Drupal Development Services</a>
													</div>

													<a href="<?php echo $site_url; ?>web-application-development" class="title">Web App Development</a>
													<div class="sub-child">
														<a href="<?php echo $site_url; ?>top-website-development-company">Website & Portal Development</a>
													</div>

													<a href="<?php echo $site_url; ?>new_page" class="title">Cloud Application Development</a>
													<div class="sub-child">
														<a href="<?php echo $site_url; ?>serverless-development">Serverless</a>
													</div>

												</div>

												<div class="width-33 middle-list title-list">
                                                    <a href="<?php echo $site_url; ?>outsource-software-product-development-services" class="title">Software Product Development</a>
													<a href="<?php echo $site_url; ?>ott-development" class="title">OTT App Development Services</a>
													<a href="<?php echo $site_url; ?>application-maintenance" class="title">Application Maintainance & Support</a>
													<a href="<?php echo $site_url; ?>application-modernization" class="title">Application Modernization</a>
												</div>

                                            </div>
                                        </div>

                                        <!-- 3 -->
                                        <div class="width-75 header-menu" id="b3">
                                            <div class="dis-flex" id="active_Current_Tabs4">
												<div class="width-33 middle-list">
													<a href="<?php echo $site_url; ?>new_page" class="title">Technology</a>
													<div class="sub-child">
														<a href="<?php echo $site_url; ?>best-magento-ecommerce-development-services-company-india">Magento</a>
														<a href="<?php echo $site_url; ?>new_page">Shopify</a>
													</div>
												</div>

												<div class="width-33 middle-list">
                                                    <!-- <a href="</?php echo $site_url; ?>" class="title">Solutions</a> -->
													<div class="sub-child">
														<!-- <a href="</?php echo $site_url; ?>">B2C eCommerce</a> -->
														<!-- <a href="</?php echo $site_url; ?>">B2B eCommerce</a> -->
														<!-- <a href="</?php echo $site_url; ?>">Web Portal</a> -->
														<!-- <a href="</?php echo $site_url; ?>">Supply Chain Automation</a> -->
													</div>
												</div>
												<div class="width-33 middle-list">
                                                    <!-- <a href="</?php echo $site_url; ?>" class="title">Services</a> -->
													<div class="sub-child">
														<!-- <a href="</?php echo $site_url; ?>">eCommerce Consulting</a> -->
														<!-- <a href="</?php echo $site_url; ?>">eCommerce Implementation</a> -->
														<!-- <a href="</?php echo $site_url; ?>">Digital Consulting</a> -->
														<!-- <a href="</?php echo $site_url; ?>">eCommerce Web Design</a> -->
													</div>
												</div>

                                            </div>
                                        </div>

                                        <!-- 4 -->
                                        <div class="width-75 header-menu" id="b4">
                                            <div class="dis-flex" id="active_Current_Tabs5">

												<div class="width-33 middle-list">
													<a href="<?php echo $site_url; ?>new_page" class="title">QA & Testing</a>
													<div class="sub-child">
														<a href="<?php echo $site_url; ?>new_page">Hire Software QA</a>
														<a href="<?php echo $site_url; ?>new_page">Application Testing</a>
														<a href="<?php echo $site_url; ?>new_page">Software Product Testing</a>
														<a href="<?php echo $site_url; ?>new_page">Mobile App testing</a>
														<a href="<?php echo $site_url; ?>new_page">Web App testing</a>
														<a href="<?php echo $site_url; ?>new_page">Automated Testing</a>
													</div>
												</div>

												<div class="width-33 middle-list">
													<a href="<?php echo $site_url; ?>new_page" class="title">DevOps</a>
													<div class="sub-child">
														<a href="<?php echo $site_url; ?>devops-consulting-engineering-services-company">DevOps Consulting</a>
														<a href="<?php echo $site_url; ?>amazon-aws-partner-company-india">Amazon Aws</a>
														<!-- <a href="</?php echo $site_url; ?>">Azure</a> -->
													</div>
												</div>

												<div class="width-33 middle-list">
													<a href="<?php echo $site_url; ?>business-intelligence-consulting-services" class="title">Dashboards & Analytics</a>
													<div class="sub-child">
														<a href="<?php echo $site_url; ?>big-data-application-development-services-company">Data Analytics Consulting & Management</a>
														<!-- <a href="</?php echo $site_url; ?>">Big Data Consulting & Management</a> -->
														<!-- <a href="</?php echo $site_url; ?>">Microsoft Power BI</a> -->
													</div>
												</div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- Hire Developers -->
                        <li class="menu-item-has-children">
                            <a href="<?php echo $site_url; ?>hire-developers">Hire Developers</a>
                            <div class="menu-mega">
                                <div class="container">
                                    <div class="dis-flex" id="active_Current_Tabs1">

                                        <!-- hire tech -->
                                        <div class="width-100 for-padding header-menu active" id="b0">
                                            <div class="dis-flex last-list" id="active_Current_Tabs0">
                                                <div class="width-20 last-list">
                                                    <a href="<?php echo $site_url; ?>hire-developers/hire-backend-developers" class="title">Backend</a>
                                                    <a href="<?php echo $site_url; ?>hire-developers/hire-dotnet-developers" title=".NET">.NET</a>
                                                    <a href="<?php echo $site_url; ?>hire-developers/hire-c-developers" title="C/C++">C/C++</a>
                                                    <a href="<?php echo $site_url; ?>hire-developers/hire-django-developers" title="Django">Django</a>
                                                    <a href="<?php echo $site_url; ?>hire-developers/hire-firebase-developers" title="Firebase">Firebase</a>
                                                    <a href="<?php echo $site_url; ?>hire-developers/hire-golang-web-developers" title="Golang">Golang</a>
                                                    <a href="<?php echo $site_url; ?>hire-developers/hire-graphql-developers" title="GraphQL">GraphQL</a>
                                                    <a href="<?php echo $site_url; ?>hire-developers/hire-java-developers" title="Java">Java</a>
                                                    <a href="<?php echo $site_url; ?>hire-developers/hire-laravel-developers" title="Laravel">Laravel</a>
                                                    <a href="<?php echo $site_url; ?>hire-developers/hire-nodejs-developers" title="Node.Js">Node</a>
                                                    <a href="<?php echo $site_url; ?>hire-developers/hire-php-developers" title="PHP">PHP</a>
                                                    <a href="<?php echo $site_url; ?>hire-developers/hire-python-developers" title="Python">Python</a>
                                                    <a href="<?php echo $site_url; ?>hire-developers/hire-ror-developers" title="Ruby on Rails">Ruby on Rails</a>
                                                    <a href="<?php echo $site_url; ?>hire-developers/hire-symfony-developers" title="Symfony">Symfony</a>
                                                </div>
                                                <div class="width-20 last-list">
                                                    <a href="<?php echo $site_url; ?>hire-developers/hire-front-end-developers" class="title">Frontend</a>
                                                    <a href="<?php echo $site_url; ?>hire-developers/hire-angularjs-developers" title="Angular">Angular</a>
                                                    <a href="<?php echo $site_url; ?>hire-developers/hire-html-developers" title="HTML/CSS">HTML/CSS</a>
                                                    <a href="<?php echo $site_url; ?>hire-developers/hire-power-bi-developer-consultants" title="PowerBI">PowerBI</a>
                                                    <a href="<?php echo $site_url; ?>hire-developers/hire-reactjs-developers" title="React">React</a>
                                                    <a href="<?php echo $site_url; ?>hire-developers/hire-vuejs-developers" title="Vue.JS">Vue.JS</a>
                                                    <a href="<?php echo $site_url; ?>hire-developers/hire-cms-developers" class="margin-t-40 title">CMS</a>
                                                    <a href="<?php echo $site_url; ?>hire-developers/hire-drupal-developers" title="Drupal">Drupal</a>
                                                    <a href="<?php echo $site_url; ?>hire-developers/hire-kentico-developers" title="kentico">Kentico</a>
                                                    <a href="<?php echo $site_url; ?>hire-developers/hire-sitecore-developers" title="Sitecore">Sitecore</a>
                                                    <a href="<?php echo $site_url; ?>hire-developers/hire-sitefinity-developers" title="Sitefinity">Sitefinity</a>
                                                    <a href="<?php echo $site_url; ?>hire-developers/hire-umbraco-developers" title="Umbraco">Umbraco</a>
                                                    <a href="<?php echo $site_url; ?>hire-developers/hire-wordpress-developers" title="Wordpress">Wordpress</a>
                                                </div>
                                                <div class="width-20 last-list">
                                                    <a href="<?php echo $site_url; ?>hire-developers/hire-mobile-app-developers" class="title">Mobile</a>
                                                    <a href="<?php echo $site_url; ?>hire-developers/hire-android-developers" title="Android">Android</a>
                                                    <a href="<?php echo $site_url; ?>hire-developers/hire-flutter-developers" title="Flutter">Flutter</a>
                                                    <a href="<?php echo $site_url; ?>hire-developers/hire-ionic-developers" title="Ionic">Ionic</a>
                                                    <a href="<?php echo $site_url; ?>hire-developers/hire-ios-developers" title="IOS">iOS</a>
                                                    <a href="<?php echo $site_url; ?>hire-developers/hire-kotlin-developers" title="Kotlin">Kotlin</a>
                                                    <a href="<?php echo $site_url; ?>hire-developers/hire-react-native-developers" title="React Native">React Native</a>
                                                    <a href="<?php echo $site_url; ?>hire-developers/hire-swift-developers" title="Swift">Swift</a>
                                                    <a href="<?php echo $site_url; ?>hire-developers/hire-xamarin-developers" title="Xamarin">Xamarin</a>

                                                    <a href="<?php echo $site_url; ?>hire-developers/hire-ecommerce-developers" class="margin-t-40 title">E-commerce</a>
                                                    <a href="<?php echo $site_url; ?>hire-developers/hire-magento-developers" title="Magento">Magento</a>
                                                    <a href="<?php echo $site_url; ?>hire-developers/hire-shopify-developers" title="Shopify">Shopify</a>

                                                </div>
                                                <div class="width-20 last-list">
                                                    <a href="<?php echo $site_url; ?>hire-developers/hire-full-stack-developers" class="title">Full Stack</a>
                                                    <a href="<?php echo $site_url; ?>hire-developers/hire-mean-stack-developers" title="MEAN">MEAN</a>
                                                    <a href="<?php echo $site_url; ?>hire-developers/hire-mern-stack-developers" title="MERN">MERN</a>
                                                    <a href="<?php echo $site_url; ?>hire-developers/hire-blockchain-developers" class="margin-t-40 title">Blockchain</a>
                                                    <a href="<?php echo $site_url; ?>hire-developers/hire-cryptocurrency-app-developers" title="Cryptocurrency">Cryptocurrency</a>
                                                    <a href="<?php echo $site_url; ?>hire-developers/hire-ethereum-developer" title="Ethereum">Ethereum</a>
                                                    <a href="<?php echo $site_url; ?>hire-developers/hire-ico-developers" title="ICO">ICO</a>
                                                    <a href="<?php echo $site_url; ?>hire-developers/hire-smartcontract-developers" title="Smart Contract">Smart Contract</a>
                                                    <a href="<?php echo $site_url; ?>hire-developers/hire-solidity-developers" title="Solidity">Solidity</a>
                                                    <a href="<?php echo $site_url; ?>hire-developers/hire-devops-developers" class="margin-t-40 title">DevOps</a>
                                                    <a href="<?php echo $site_url; ?>hire-developers/hire-azure-developers" title="Azure">Azure</a>
                                                    <a href="<?php echo $site_url; ?>hire-developers/hire-aws-developers" title="AWS">AWS</a>

                                                </div>

                                                <div class="width-20 last-list">
                                                    <a href="<?php echo $site_url; ?>hire-developers/hire-machine-learning-experts" class="title">ML</a>
                                                    <a href="<?php echo $site_url; ?>hire-developers/hire-chatbot-developers" title="Chatbot">Chatbot</a>
                                                    <a href="<?php echo $site_url; ?>hire-developers/dialog-flow-development-services-company" title="Dialogflow"> Dialogflow</a>
                                                    <a href="<?php echo $site_url; ?>hire-developers/hire-rpa-developers" title="RPA">RPA</a>
                                                    <a href="<?php echo $site_url; ?>hire-developers/hire-tensorflow-developers" title="Tensorflow">Tensorflow</a>
                                                    <a href="<?php echo $site_url; ?>low-code-no-code-services" class="margin-t-40 title">Low-Code</a>
                                                    <a href="<?php echo $site_url; ?>hire-developers/hire-appian-developers" title="Appian">Appian</a>
                                                    <a href="<?php echo $site_url; ?>hire-developers/hire-outsystems-developers" title="Outsystems">Outsystems</a>
                                                    <a href="<?php echo $site_url; ?>hire-developers/hire-mendix-developers" title="Mendix">Mendix</a>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- Technology -->
                        <li class="menu-item-has-children">
                            <a href="<?php echo $site_url; ?>new_page">Technologies</a>
                            <div class="menu-mega">
                                <div class="container">
                                    <div class="dis-flex" id="active_Current_Tabs1">

                                        <div class="width-75 header-menu active for-padding">
                                            <div class="dis-flex" id="active_Current_Tabs6">

												<div class="width-33 last-list">
                                                    <a href="<?php echo $site_url; ?>new_page" class="title">Trending</a>
													<a href="<?php echo $site_url; ?>new_page">Serverless</a>
													<a href="<?php echo $site_url; ?>new_page">Internet of Things</a>
													<a href="<?php echo $site_url; ?>new_page">Big Data</a>
													<a href="<?php echo $site_url; ?>ai-ml-development-services-company">Machine Learning</a>
													<a href="<?php echo $site_url; ?>blockchain-development-company">Blockchain</a>
													<a href="<?php echo $site_url; ?>ar-vr-development-company">AR/ VR</a>
													<a href="<?php echo $site_url; ?>new_page">OTT</a>
													<a href="<?php echo $site_url; ?>rpa-development-services-company">RPA</a>
												</div>

												<div class="width-33 last-list">
                                                    <a href="<?php echo $site_url; ?>new_page" class="title">Platforms</a>
													<a href="<?php echo $site_url; ?>new_page">SharePoint</a>
													<a href="<?php echo $site_url; ?>new_page">Microsoft Power BI</a>
													<a href="<?php echo $site_url; ?>new_page">Microsoft Azure</a>
													<a href="<?php echo $site_url; ?>new_page">Amazon Web Services</a>
													<a href="<?php echo $site_url; ?>new_page">Magento</a>
													<a href="<?php echo $site_url; ?>new_page">Shopify</a>
													<a href="<?php echo $site_url; ?>new_page">Wordpress</a>
												</div>

												<div class="width-33 last-list">
                                                    <a href="<?php echo $site_url; ?>new_page" class="title">Programming</a>

													<div class="dis-flex two-col">
														<div class="width-50">
															<a href="<?php echo $site_url; ?>new_page">iOS / iPhone</a>
															<a href="<?php echo $site_url; ?>new_page">Andoid</a>
															<a href="<?php echo $site_url; ?>new_page">React Native</a>
															<a href="<?php echo $site_url; ?>new_page">Xamarin</a>
															<a href="<?php echo $site_url; ?>new_page">.NET</a>
															<a href="<?php echo $site_url; ?>new_page">Laravel</a>
															<a href="<?php echo $site_url; ?>new_page">PHP</a>
														</div>
														<div class="width-50 padding-l-40">
															<a href="<?php echo $site_url; ?>new_page">Node</a>
															<a href="<?php echo $site_url; ?>new_page">Java</a>
															<a href="<?php echo $site_url; ?>new_page">Python</a>
															<a href="<?php echo $site_url; ?>new_page">Drupal</a>
															<a href="<?php echo $site_url; ?>new_page">Angular</a>
															<a href="<?php echo $site_url; ?>new_page">React</a>
															<a href="<?php echo $site_url; ?>new_page">Flutter</a>
														</div>

													</div>
												</div>

                                            </div>
                                        </div>

										<div class="width-25 last-list for-padding bg-gray">
											<span class="title with-border">Technologies</span>
											<p>We have expertise in all major technologies and platforms, crafting innovative software solutions for you.</p>
											<span class="title margin-t-60">Don't know how to start?</span>
											<a href="<?php echo $site_url; ?>contact" class="menu-btn">Talk to Us</a>
										</div>

                                    </div>
                                </div>
                            </div>
                        </li>

						<!-- Industries -->
                        <li class="menu-item-has-children">
                            <a href="<?php echo $site_url; ?>new_page">Solutions</a>
                            <div class="menu-mega">
                                <div class="container">
                                    <div class="dis-flex" id="active_Current_Tabs1">

                                        <div class="width-75 header-menu active for-padding">
                                            <div class="dis-flex" id="active_Current_Tabs6">

												<div class="width-33 last-list">
													<a href="<?php echo $site_url; ?>new_page" class="title">Industries</a>
													<a href="<?php echo $site_url; ?>industries/healthcare-software-development-services">Healtcare</a>
													<a href="<?php echo $site_url; ?>industries/isv-software-development-services">ISV</a>
													<a href="<?php echo $site_url; ?>industries/automotive-companies-software-development-services">Automative</a>
													<a href="<?php echo $site_url; ?>fintech-software-development-company">Fintech</a>
													<a href="<?php echo $site_url; ?>industries/retail-ecommerce-software-development">Retail & eCommerce</a>
													<a href="<?php echo $site_url; ?>industries/education-elearning-software-development">Education & Elearning</a>
													<a href="<?php echo $site_url; ?>industries/travel-tourism-software-development-services">Travel & Tourism</a>
													<a href="<?php echo $site_url; ?>industries/banking-financial-services">Banking & Financial Services</a>
													<a href="<?php echo $site_url; ?>industries/logistics-transportation-software-development">Logistic & Transportation</a>
													<a href="<?php echo $site_url; ?>industries/media-software-development-services">Media & Entertaintainment</a>
												</div>

												<div class="width-66 dis-flex">
													<div class="width-50 last-list">
														<!-- <a href="</?php echo $site_url; ?>" class="title">Solutions</a> -->
														<!-- <a href="</?php echo $site_url; ?>">CRM</a> -->
														<!-- <a href="</?php echo $site_url; ?>">Marketing & Advertising</a> -->
														<!-- <a href="</?php echo $site_url; ?>">Human Resources</a> -->
														<!-- <a href="</?php echo $site_url; ?>">eLearning</a> -->
														<!-- <a href="</?php echo $site_url; ?>">Document Management</a> -->
														<!-- <a href="</?php echo $site_url; ?>">Supply Chain Management</a> -->
														<!-- <a href="</?php echo $site_url; ?>">Fleet Management</a> -->
														<!-- <a href="</?php echo $site_url; ?>">Kiosk Software</a> -->
														<!-- <a href="</?php echo $site_url; ?>">ERP</a> -->
														<!-- <a href="</?php echo $site_url; ?>">Operations Management</a> -->
													</div>

													<div class="width-50 last-list">
														<a href="<?php echo $site_url; ?>new_page" class="title"></a>
														<!-- <a href="</?php echo $site_url; ?>">Financial Management</a> -->
														<!-- <a href="</?php echo $site_url; ?>">Asset Management</a> -->
														<!-- <a href="</?php echo $site_url; ?>">Project Management</a> -->
														<!-- <a href="</?php echo $site_url; ?>">Data Analytics</a> -->
														<!-- <a href="</?php echo $site_url; ?>ecommerce-development-services-company">Ecommerce</a> -->
														<!-- <a href="</?php echo $site_url; ?>">Web Portals</a> -->
														<!-- <a href="</?php echo $site_url; ?>">CMS</a> -->
														<!-- <a href="</?php echo $site_url; ?>">Workforce Management</a> -->
													</div>

												</div>

											</div>
                                        </div>

										<div class="width-25 last-list for-padding bg-gray">
											<span class="title with-border">Solutions</span>
											<p>We design and build innovative technology solutions using our expertise & deep understanding in IT domain.</p>
											<span class="title margin-t-60">Don't know how to start?</span>
											<a href="<?php echo $site_url; ?>contact" class="menu-btn">Talk to Us</a>
										</div>

                                    </div>
                                </div>
                            </div>
                        </li>


                        <!-- <li class="menu-item-has-children small-menu"><a href="<?php echo $site_url; ?>new_page">Pricing</a>
                            <div class="small-menu-inner">
                                <a href="<?php echo $site_url; ?>new_page">Smart Teams</a>
                                <a href="<?php echo $site_url; ?>new_page">Per Project</a>
                            </div>
                        </li> -->
                        <li class="menu-item-has-children small-menu"><a href="<?php echo $site_url; ?>about">Company</a>
                            <div class="small-menu-inner">
                                <a href="<?php echo $site_url; ?>about">Overview</a>
                                <a href="https://www.valuecoders.com/case-studies/" target="_blank">Case Studies</a>
                                <a href="<?php echo $site_url; ?>in-media">In Media</a>
                                <a href="<?php echo $site_url; ?>testimonials">Clients & Testimonials</a>
                                <a href="<?php echo $site_url; ?>careers">Careers</a>
                                <a href="https://www.valuecoders.com/blog/" target="_blank">Blog</a>
                            </div>                  
                        </li>
                        <li class="contact-nav"><a href="<?php echo $site_url; ?>contact">Contact Us <i class="arrow-icon"></i></a></li>
                    </ul>
                </nav>
            </div>
            <?php endif; ?>
        </div>
    </div>
</header>
<?php //endif; ?>


<?php //if( vc_is_mobile() ) : ?>

<?php endif; ?>



<section class="hero-section text-center">
	<div class="container">
		<h1>Indian Software <span class="clr-yellow">Outsourcing Company</span></h1>
		<span class="sub-head clr-white">For outsourced software development services & teams. Since 2004.</span>
		<p>We are an award winning Indian software engineering company focussed on providing outsourced software development and software engineering teams to our clients globally. With <span>97%+ customer satisfaction rate</span>,  we are consistently recognised as one of the top software outsourcing companies in India. We have been in business for <span>17+ years</span>, employ <span>650+ full time software</span> developers and have worked with <span>2500+ clients globally</span> ranging from startups to fortune <span>500 companies</span>.</p>
		<p>Are you looking to outsource software development? Or hire a dedicated software development team?</p>
		<p class="margin-t-30">Connect with us and we would be happy to help!</p>
		<div class="margin-t-70">
			<a class="green-btn" href="https://www.valuecoders.com/contact">Book an Appointment <i class="arrow-icon"></i></a>
			<span class="form-link-outer">
				Or, <button onclick="focusFunction()" class="form-link clr-white">Use this form to share your requirements.</button> <span class="block">Get guaranteed response within 8 Hrs.</span>
			</span>
		</div>
	</div>
</section>

<section class="contact-us-section padding-t-150 padding-b-150">
	<?php require_once 'include/contact-form.php'; ?>
</section>
<?php require_once 'include/footer.php'; ?>

<script>
	
// header-two
window.addEventListener('scroll', function() {
    window.pageYOffset>10?document.querySelector(".header-two").classList.add("header-bg"):document.querySelector(".header-two").classList.remove("header-bg");
});

// menu
var tabs = document.getElementsByClassName('text-column');
for (j = 0; j < tabs.length; j++) {
	tabs[j].addEventListener('mouseover', clickTab)
}

function clickTab(e) {
	var tabID 		= e.currentTarget.id
	var inSection 	= e.currentTarget.getAttribute('data-section');
	
	var pageID 		= tabID.replace('a', 'b')
	var pages 		= document.getElementById(inSection).getElementsByClassName('header-menu');
	var intabs 		= document.getElementById(inSection).getElementsByClassName('text-column');
	for (i = 0; i < pages.length; i++) {
		intabs[i].classList.remove('active')
		pages[i].classList.remove('active')
	}
	e.currentTarget.classList.add('active');
	let pActive = "mrow mrow-"+e.currentTarget.getAttribute('data-mrow');
	let masCol = document.getElementsByClassName(pActive).item(0);
	if( masCol ){
		masCol.classList.add('active');
	}
	var currentPage = document.querySelector('#' + pageID)
	currentPage.classList.add('active')
}


// menu mobile
document.addEventListener("DOMContentLoaded", function() {
  var faqContainers = document.getElementsByClassName('hamberger-menu');
  var faqToggle = document.getElementsByClassName('mob-nav')[0];
  for (var i = 0; i < faqContainers.length; i++) {

    faqContainers[i].addEventListener('click', function() {

	  faqToggle.classList.toggle('active');

    });
  }

});

function submenu() {
	var x = document.getElementById("dropdownmwrap");
	var y = document.getElementById("dropdownmwrap1");
	if (x.style.display === "block") {
		x.style.display = "none";
		y.style.display = "block";
	} else {
		x.style.display = "block";
		y.style.display = "none";
	}
}

function submenuback() {
	var x = document.getElementById("dropdownmwrap");
	var y = document.getElementById("dropdownmwrap1");
	x.style.display = "none";
	y.style.display = "block";
}

function innermenu(id){
   var sm = document.getElementById(id);
  if (sm.style.display === "block") {
    sm.style.display = "none";
  } else {
    sm.style.display = "block";
}
}

</script>
</body>
</html>

