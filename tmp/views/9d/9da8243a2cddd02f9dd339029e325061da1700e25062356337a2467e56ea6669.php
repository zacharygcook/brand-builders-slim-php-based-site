<?php

/* index.html */
class __TwigTemplate_b231b98d92f44b718adb10a0fdc9bdff46312bdc5f62835af94ff571ee6a9593 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>

\t\t<style>
\t\t\t/* Custom navbar styles
\t\t\t-------------------------------------------------- */

\t\t\t/* Some decent yet simple docs on making your own navbar:
\t\t\t  https://www.w3schools.com/css/css_navbar.asp */

\t\t\t.zach-navbar-wrapper {
\t\t\t  height: 110px;
\t\t\t  width: 100%;
\t\t\t  background-color: white;
\t\t\t}

\t\t\t.zach-navbar-skinny-top {
\t\t\t  height: 30px;
\t\t\t  width: 100%;
\t\t\t  border-bottom: 1px solid #b7b0b0;
\t\t\t  line-height: 25px;
\t\t\t}

\t\t\t.navbar-top-social-links-ul {
\t\t\t  list-style-top: none;
\t\t\t  margin: 0;
\t\t\t  padding: 0;
\t\t\t  height: 30px;
\t\t\t  float: right;
\t\t\t}

\t\t\t.navbar-top-social-links-li {
\t\t\t  display: inline-block;
\t\t\t  float: left;
\t\t\t  line-height: 30px;
\t\t\t  margin-right: 5px;
\t\t\t}

\t\t\t.top-contact-info-span {
\t\t\t  font-size: 14px;
\t\t\t  height: 100%;
\t\t\t  line-height: 30px;
\t\t\t  float: right;
\t\t\t  padding-left: 5px;
\t\t\t  padding-right: 35px;
\t\t\t}

\t\t\t.social-media-navbar-img {
\t\t\t  height: 20px;
\t\t\t  width: auto;
\t\t\t}

\t\t\t.fa-spacer {
\t\t\t  margin-left: 10px;
\t\t\t}


\t\t\t.zach-navbar-fat-bottom {
\t\t\t  height: 80px;
\t\t\t  width: 100%;
\t\t\t  border-bottom: 1px solid #b7b0b0;
\t\t\t  line-height: 85px;
\t\t\t  padding-top: 5px;
\t\t\t  padding-bottom: 5px;
\t\t\t}

\t\t\t.company-logo-wrapper {
\t\t\t  display: inline-block;
\t\t\t  height: 100%;
\t\t\t  width: 340px;
\t\t\t}

\t\t\t.navbar-company-logo {
\t\t\t  /* Interesting information about getting the image to not offset down a few inches like it was doing
\t\t\t      https://stackoverflow.com/questions/21932860/image-moving-down-inside-of-div */
\t\t\t  height: 68px;
\t\t\t  width: auto;
\t\t\t  display: block;
\t\t\t}

\t\t\t.navbar-main-options-wrapper {
\t\t\t  width: 600px;
\t\t\t  display: inline-block;
\t\t\t  height: 100%;
\t\t\t  float: right;
\t\t\t}

\t\t\t.zach-navbar-ul {
\t\t\t  list-style-type: none;
\t\t\t  margin: 0;
\t\t\t  padding: 0;
\t\t\t  height: 69px;
\t\t\t}

\t\t\t.zach-navbar-li {
\t\t\t  display: inline-block;
\t\t\t  float: left; /* key to getting the 'li's to not offset from 'ul' */
\t\t\t  vertical-align: middle;
\t\t\t  line-height: 69px;
\t\t\t}

\t\t\t.zach-navbar-li a {
\t\t\t  display: block;
\t\t\t  min-width: 75px;
\t\t\t  text-align: center;
\t\t\t  margin-right: 7px;
\t\t\t  margin-left: 7px;
\t\t\t  color: black;
\t\t\t  line-height: 69px;
\t\t\t}

\t\t\t.zach-navbar-li a:hover {
\t\t\t  text-decoration: none;
\t\t\t  color: black;
\t\t\t}

\t\t\t.zach-navbar-inner-content-wrapper {
\t\t\t  margin: 0 auto;
\t\t\t  height: 100%;
\t\t\t}

\t\t\t@media (min-width: 1200px) {
\t\t\t  .zach-navbar-inner-content-wrapper {
\t\t\t    width: 1170px;
\t\t\t  }
\t\t\t}

\t\t\t@media (min-width: 992px) and (max-width: 1199px) {
\t\t\t  .zach-navbar-inner-content-wrapper {
\t\t\t    width: 970px;
\t\t\t  }
\t\t\t}

\t\t\t@media (min-width: 769px) and (max-width: 991px) {
\t\t\t  .zach-navbar-inner-content-wrapper {
\t\t\t    width: 750px;
\t\t\t  }
\t\t\t}

\t\t\t@media (max-width: 768px) {
\t\t\t  .zach-navbar-inner-content-wrapper {
\t\t\t    width: 100%;
\t\t\t    padding-left: 15px;
\t\t\t    padding-right: 15px;
\t\t\t  }
\t\t\t}







\t\t\t/* Sticky footer styles
\t\t\t-------------------------------------------------- */
\t\t\thtml {
\t\t\t  position: relative;
\t\t\t  min-height: 100%;
\t\t\t}
\t\t\tbody {
\t\t\t  /* Margin bottom by footer height */
\t\t\t  margin-bottom: 240px;
\t\t\t  background-color: #f5f5f5; /* Very, very light grey */
\t\t\t  color: #272626;
\t\t\t}
\t\t\t.footer {
\t\t\t  position: absolute;
\t\t\t  bottom: 0;
\t\t\t  width: 100%;
\t\t\t  /* Set the fixed height of the footer here */
\t\t\t  height: 270px;
\t\t\t  background-color: #252525;
\t\t\t  color: white;
\t\t\t}

\t\t\t.top-footer-content {
\t\t\t  width: 100%;
\t\t\t  height: 160px;
\t\t\t}

\t\t\t.top-footer-row {
\t\t\t  height: 100%;
\t\t\t}

\t\t\t.footer-top-content-left {
\t\t\t  padding-top: 25px;
\t\t\t  padding-left: 50px;
\t\t\t}

\t\t\t.footer-brand-logo {
\t\t\t  width: 420px;
\t\t\t  height: auto;
\t\t\t}

\t\t\t.footer-top-content-left-sub-header {
\t\t\t  font-size: 18px;
\t\t\t  margin-top: 0;
\t\t\t  margin-bottom: 5px;
\t\t\t  padding: 0;
\t\t\t}

\t\t\t.footer-top-content-left-sub-header a {
\t\t\t  color: white;
\t\t\t}

\t\t\t.footer-top-content-right-section {
\t\t\t  padding-top: 25px;
\t\t\t  padding-left: 30px;
\t\t\t}

\t\t\t.footer-top-right-section-header {
\t\t\t  font-size: 18px;
\t\t\t  margin-top: 0;
\t\t\t  margin-bottom: 3px;
\t\t\t  padding: 0;
\t\t\t}

\t\t\t.custom-top-right-section-hr {
\t\t\t  width: 90px;
\t\t\t  border: 1px solid white;
\t\t\t  margin-bottom: 10px;
\t\t\t}

\t\t\t.footer-top-right-section-sub-header {
\t\t\t  font-size: 14px;
\t\t\t  margin-top: 0;
\t\t\t  margin-bottom: 0;
\t\t\t  padding: 0;
\t\t\t}






\t\t\t.bottom-footer-content {
\t\t\t  width: 100%;
\t\t\t  height: 110px;
\t\t\t  padding-top: 15px;
\t\t\t  text-align: center;
\t\t\t}

\t\t\t.social-media-img-bottom {
\t\t\t  margin-right: 4px;
\t\t\t  margin-left: 4px;
\t\t\t  width: 35px;
\t\t\t  height: auto;
\t\t\t}

\t\t\t.fine-print-bottom-footer-wrapper {
\t\t\t  padding-top: 15px;
\t\t\t}

\t\t\t.fine-print-link-p {
\t\t\t  margin-top: 2px;
\t\t\t  margin-bottom: 0;
\t\t\t  padding-top: 0;
\t\t\t  padding-bottom: 0;
\t\t\t  font-size: 13px;
\t\t\t}

\t\t\t.fine-print-link-p a {
\t\t\t  color: white;
\t\t\t}

\t\t\t.fine-print-link-p a:hover {
\t\t\t  text-decoration: none;
\t\t\t  font-weight: 600;
\t\t\t}

\t\t\t.a-class-no-hover:hover {
\t\t\t  color: none;
\t\t\t  text-decoration: none;
\t\t\t}

\t\t</style>

\t</head>
\t<body>

\t<div class=\"zach-navbar-wrapper\">
\t\t<div class=\"zach-navbar-skinny-top\">
\t\t\t<div class=\"zach-navbar-inner-content-wrapper\">

\t\t\t\t<span class=\"top-contact-info-span\">
\t\t\t\t\t<i class=\"fa-spacer fa fa-clock-o\">
\t\t\t\t\t\tM-F 9-5 PM
\t\t\t\t\t</i>

\t\t\t\t\t<i class=\"fa-spacer fa fa-phone\">
\t\t\t\t\t\t(936) 443-3449
\t\t\t\t\t</i>

\t\t\t\t\t<i class=\"fa-spacer fa fa-envelope\">
\t\t\t\t\t\tcontact@brandbuilderscompany.com
\t\t\t\t\t</i>
\t\t\t\t</span>

\t\t\t\t<ul class=\"navbar-top-social-links-ul\">
\t\t\t\t\t<li class=\"navbar-top-social-links-li\">
\t\t\t\t\t\t<a href=\"http://www.linkedin.com\" target=\"_blank\">
\t\t\t\t\t\t\t<img class=\"social-media-navbar-img\" src=\"./img/icons/linkedin-logo-24.png\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"navbar-top-social-links-li\">
\t\t\t\t\t\t<a href=\"http://www.google.com\" target=\"_blank\">
\t\t\t\t\t\t\t<img class=\"social-media-navbar-img\" src=\"./img/icons/google-plus-logo-24.png\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"navbar-top-social-links-li\">
\t\t\t\t\t\t<a href=\"http://www.facebook.com\" target=\"_blank\">
\t\t\t\t\t\t\t<img class=\"social-media-navbar-img\" src=\"./img/icons/facebook-logo-24.png\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"navbar-top-social-links-li\">
\t\t\t\t\t\t<a href=\"http://www.instagram.com\" target=\"_blank\">
\t\t\t\t\t\t\t<img class=\"social-media-navbar-img\" src=\"./img/icons/instagram-logo-24.png\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"navbar-top-social-links-li\">
\t\t\t\t\t\t<a href=\"http://www.twitter.com\" target=\"_blank\">
\t\t\t\t\t\t\t<img class=\"social-media-navbar-img\" src=\"./img/icons/twitter-logo-24.png\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>

\t\t\t</div>
\t\t</div>
\t\t<div class=\"zach-navbar-fat-bottom\">
\t\t\t<div class=\"zach-navbar-inner-content-wrapper\">

\t\t\t\t<div class=\"company-logo-wrapper\">
\t\t\t\t\t<a href=\"index.html\">
\t\t\t\t\t\t<img class=\"navbar-company-logo\" src=\"./img/brand-builders-logo-large-1246-width-on-light.png\" />
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<div class=\"navbar-main-options-wrapper\">
\t\t\t\t\t<ul class=\"zach-navbar-ul\">
\t\t\t\t\t\t<li class=\"zach-navbar-li\">
\t\t\t\t\t\t\t<a href=\"products.html\">Products</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"zach-navbar-li\">
\t\t\t\t\t\t\t<a href=\"services.html\">Services</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"zach-navbar-li\">
\t\t\t\t\t\t\t<a href=\"designs.html\">Designs</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"zach-navbar-li\">
\t\t\t\t\t\t\t<a href=\"promotional-products.html\">Promotional Products</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"zach-navbar-li\">
\t\t\t\t\t\t\t<a href=\"quote-request.html\">Request A Quote</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>



    <!-- more info on footer here...  http://v4-alpha.getbootstrap.com/examples/sticky-footer-navbar/ -->

    <footer class=\"footer\">
      <div class=\"container\">
      \t<div class=\"top-footer-content\">
      \t\t<div class=\"row top-footer-row\">
      \t\t\t<div class=\"col-md-6 footer-top-content-left\">

      \t\t\t\t<img class=\"footer-brand-logo\" src=\"./img/brand-builders-logo-large-1246-width-on-dark.png\" />

      \t\t\t\t<h4 class=\"footer-top-content-left-sub-header\">
      \t\t\t\t\t(936) 443-3449
      \t\t\t\t</h4>
      \t\t\t\t<h4 class=\"footer-top-content-left-sub-header\">
      \t\t\t\t\t<a href=\"#\">
      \t\t\t\t\t\tContact Us
      \t\t\t\t\t</a>
      \t\t\t\t</h4>
      \t\t\t\t<h4 class=\"footer-top-content-left-sub-header\">
      \t\t\t\t\t<a href=\"#\">
      \t\t\t\t\t\tRequest a Quote
      \t\t\t\t\t</a>
      \t\t\t\t</h4>

      \t\t\t</div>
      \t\t\t<div class=\"col-md-3 footer-top-content-right-section\">
      \t\t\t\t<h3 class=\"footer-top-right-section-header\">Products</h3>

      \t\t\t\t<div class=\"custom-top-right-section-hr\"></div>

      \t\t\t\t<p class=\"footer-top-right-section-sub-header\">Shirts</p>
      \t\t\t\t<p class=\"footer-top-right-section-sub-header\">Jackets</p>
      \t\t\t\t<p class=\"footer-top-right-section-sub-header\">Hats</p>
      \t\t\t\t<p class=\"footer-top-right-section-sub-header\">Promotional Products</p>
      \t\t\t</div>
      \t\t\t<div class=\"col-md-3 footer-top-content-right-section\">
      \t\t\t\t<h3 class=\"footer-top-right-section-header\">Services</h3>

      \t\t\t\t<div class=\"custom-top-right-section-hr\"></div>

      \t\t\t\t<p class=\"footer-top-right-section-sub-header\">Embroidery</p>
      \t\t\t\t<p class=\"footer-top-right-section-sub-header\">Screen Printing</p>
      \t\t\t\t<p class=\"footer-top-right-section-sub-header\">Back Rubs</p>
      \t\t\t</div>
      \t\t</div>
      \t</div>
      \t<div class=\"bottom-footer-content\">

      \t\t<div class=\"social-media-bottom-footer-wrapper\">
      \t\t\t<a class=\"a-class-no-hover\" href=\"http://www.linkedin.com\" target=\"_blank\">
      \t\t\t\t<img class=\"social-media-img-bottom\" src=\"./img/icons/linkedin-logo-silhouette-64.png\">
      \t\t\t</a>
      \t\t\t<a class=\"a-class-no-hover\" href=\"http://www.google.com\" target=\"_blank\">
      \t\t\t\t<img class=\"social-media-img-bottom\" style=\"margin-right: 0;\" src=\"./img/icons/google-plus-logo-silhouette-64.png\">
      \t\t\t</a>
      \t\t\t<a class=\"a-class-no-hover\" href=\"http://www.facebook.com\" target=\"_blank\">
      \t\t\t\t<img class=\"social-media-img-bottom\" style=\"margin-left: -3px;\" src=\"./img/icons/facebook-logo-silhouette-64.png\">
      \t\t\t</a>
      \t\t\t<a class=\"a-class-no-hover\" href=\"http://www.instagram.com\" target=\"_blank\">
      \t\t\t\t<img class=\"social-media-img-bottom\" src=\"./img/icons/instagram-logo-silhouette-64.png\">
      \t\t\t</a>
      \t\t\t<a class=\"a-class-no-hover\" href=\"http://www.twitter.com\" target=\"_blank\">
      \t\t\t\t<img class=\"social-media-img-bottom\" src=\"./img/icons/twitter-logo-silhouette-64.png\">
      \t\t\t</a>
      \t\t</div>

      \t\t<div class=\"fine-print-bottom-footer-wrapper\">
      \t\t\t<p class=\"fine-print-link-p\">
      \t\t\t\t<a href=\"#\">
      \t\t\t\t\tTerms & Conditions 
      \t\t\t\t</a>
      \t\t\t\t| 
      \t\t\t\t<a href=\"#\">
      \t\t\t\t\tPrivacy Policy
      \t\t\t\t</a>
      \t\t\t</p>
      \t\t\t<p class=\"fine-print-link-p\">
      \t\t\t\tCopyright 2017 Brand Builders Company, LLC
      \t\t\t</p>
      \t\t</div>

      \t</div>
      </div>
    </footer>


\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html", "/var/www/html/learning-php/first-slim-app-tut/templates/index.html");
    }
}
