<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* main/index.html.twig */
class __TwigTemplate_413abab2bff8d732d7ef982c44a34486f92f276a150ffef76eacf9b8c89a53e0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>

<html>
<head>
<title>Business</title>
<meta charset=\"UTF-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<link rel=\"stylesheet\" href=\"https://www.w3schools.com/w3css/4/w3.css\">
<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Montserrat\">
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: \"Montserrat\", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #608E34;}
/* Add a left margin to the \"page content\" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from \"page content\" on small screens */

</style>
</head>
<body class=\"w3-black\">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class=\"w3-sidebar w3-bar-block w3-small w3-hide-small w3-center\">
  <!-- Avatar image in top left corner -->
  
  <a href=\"#\" class=\"w3-bar-item w3-button w3-padding-large\">
    <i class=\"fa fa-home w3-xxlarge\"></i>
    <p>HOME</p>
  </a>
  <a href=\"#about\" class=\"w3-bar-item w3-button w3-padding-large \">
    <i class=\"fa fa-user w3-xxlarge\"></i>
    <p>ABOUT</p>
  </a>
  <a href=\"#photos\" class=\"w3-bar-item w3-button w3-padding-large\">
    <i class=\"fa fa-eye w3-xxlarge\"></i>
    <p>PHOTOS</p>
  </a>
  <a href=\"#contact\" class=\"w3-bar-item w3-button w3-padding-large\">
    <i class=\"fa fa-envelope w3-xxlarge\"></i>
    <p>CONTACT</p>
  </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class=\"w3-top w3-hide-large w3-hide-medium\" id=\"myNavbar\">
  <div class=\"w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small\">
    <a href=\"#\" class=\"w3-bar-item w3-button\" style=\"width:25% !important\">HOME</a>
    <a href=\"#about\" class=\"w3-bar-item w3-button\" style=\"width:25% !important\">ABOUT</a>
    <a href=\"#photos\" class=\"w3-bar-item w3-button\" style=\"width:25% !important\">PHOTOS</a>
    <a href=\"#contact\" class=\"w3-bar-item w3-button\" style=\"width:25% !important\">CONTACT</a>
  </div>
</div>

<!-- Page Content -->
<div class=\"w3-padding-large\" id=\"main\" style=\"background-color: white\">
  <!-- Header/Home -->
  <header class=\"w3-container w3-padding-32 w3-center\" id=\"home\" style=\"background-color: white\">
    <h1 class=\"w3-jumbo\" style=\"color:black\"> Business.</h1>
  </header>

    <a href=\"/login\" style=\"margin-left:21%; border-color: #608E34; background-color: #608E34;\" class=\"w3-button w3-justify  w3-padding-large\" type=\"submit\"> Login </a>

  <!-- About Section -->
  <div class=\"w3-content w3-justify w3-text-grey w3-padding-64\" id=\"about\">
    <h2 class=\"text-muted  mb-0\">Company</h2>
    <hr style=\"width: 200px; border-color: #608E34; background-color: #608E34;\" class=\"w3-opacity\">
    <p>We are a company specializing in the provision of services associated with energy, telecommunications, Contact-Center, business management.Additionally, we have a proprietary platform in Software as a Service format aimed at business management, Contact-Center and marketing.We are official Iberdrola partners with customer support stores in the main cities and partners of the main telecommunications operators.</p>
  </div>
  
  <!-- Portfolio Section -->
  <div class=\"w3-content w3-justify w3-text-grey w3-padding-64\" id=\"photos\">
    <h2 class=\"text-muted  mb-0\">My Photos</h2>
    <hr style=\"width: 200px; border-color: #608E34; background-color: #608E34;\" class=\"w3-opacity\">

    <!-- Grid for photos -->
    <div class=\"w3-row-padding\" style=\"margin:0 -16px\">
      <div class=\"w3-half\">
        <img src=\"/img/sss.jpg\" style=\"width:100%\">
        <img src=\"/img/sss.jpg\" style=\"width:100%\">
        <img src=\"/img/sss.jpg\" style=\"width:100%\">
      </div>

      <div class=\"w3-half\">
        <img src=\"/img/sss.jpg\" style=\"width:100%\">
        <img src=\"/img/sss.jpg\" style=\"width:100%\">
        <img src=\"/img/sss.jpg\" style=\"width:100%\">
        
      </div>
    <!-- End photo grid -->
    </div>
  <!-- End Portfolio Section -->
  </div>

  <!-- Contact Section -->
  <div class=\"w3-content w3-justify w3-text-grey w3-padding-64\" id=\"contact\">
    <h2 class=\"text-muted  mb-0\">Contact Us</h2>
    <hr style=\"width: 200px; border-color: #608E34; background-color: #608E34;\" class=\"w3-opacity\">

    <div class=\"w3-section\">
      <p><i class=\"fa fa-map-marker fa-fw w3-text-grey w3-xxlarge w3-margin-right\"></i> Trofa, Portugal</p>
      <p><i class=\"fa fa-phone fa-fw w3-text-grey w3-xxlarge w3-margin-right\"></i> Phone: 220 934 494/</p>
      <p><i class=\"fa fa-envelope fa-fw w3-text-grey w3-xxlarge w3-margin-right\"> </i> Email: Business@mail.com</p>
    </div><br>
  </div>

<!-- END PAGE CONTENT -->
</div>

</body>
</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "main/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>

<html>
<head>
<title>Business</title>
<meta charset=\"UTF-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<link rel=\"stylesheet\" href=\"https://www.w3schools.com/w3css/4/w3.css\">
<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Montserrat\">
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: \"Montserrat\", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #608E34;}
/* Add a left margin to the \"page content\" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from \"page content\" on small screens */

</style>
</head>
<body class=\"w3-black\">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class=\"w3-sidebar w3-bar-block w3-small w3-hide-small w3-center\">
  <!-- Avatar image in top left corner -->
  
  <a href=\"#\" class=\"w3-bar-item w3-button w3-padding-large\">
    <i class=\"fa fa-home w3-xxlarge\"></i>
    <p>HOME</p>
  </a>
  <a href=\"#about\" class=\"w3-bar-item w3-button w3-padding-large \">
    <i class=\"fa fa-user w3-xxlarge\"></i>
    <p>ABOUT</p>
  </a>
  <a href=\"#photos\" class=\"w3-bar-item w3-button w3-padding-large\">
    <i class=\"fa fa-eye w3-xxlarge\"></i>
    <p>PHOTOS</p>
  </a>
  <a href=\"#contact\" class=\"w3-bar-item w3-button w3-padding-large\">
    <i class=\"fa fa-envelope w3-xxlarge\"></i>
    <p>CONTACT</p>
  </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class=\"w3-top w3-hide-large w3-hide-medium\" id=\"myNavbar\">
  <div class=\"w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small\">
    <a href=\"#\" class=\"w3-bar-item w3-button\" style=\"width:25% !important\">HOME</a>
    <a href=\"#about\" class=\"w3-bar-item w3-button\" style=\"width:25% !important\">ABOUT</a>
    <a href=\"#photos\" class=\"w3-bar-item w3-button\" style=\"width:25% !important\">PHOTOS</a>
    <a href=\"#contact\" class=\"w3-bar-item w3-button\" style=\"width:25% !important\">CONTACT</a>
  </div>
</div>

<!-- Page Content -->
<div class=\"w3-padding-large\" id=\"main\" style=\"background-color: white\">
  <!-- Header/Home -->
  <header class=\"w3-container w3-padding-32 w3-center\" id=\"home\" style=\"background-color: white\">
    <h1 class=\"w3-jumbo\" style=\"color:black\"> Business.</h1>
  </header>

    <a href=\"/login\" style=\"margin-left:21%; border-color: #608E34; background-color: #608E34;\" class=\"w3-button w3-justify  w3-padding-large\" type=\"submit\"> Login </a>

  <!-- About Section -->
  <div class=\"w3-content w3-justify w3-text-grey w3-padding-64\" id=\"about\">
    <h2 class=\"text-muted  mb-0\">Company</h2>
    <hr style=\"width: 200px; border-color: #608E34; background-color: #608E34;\" class=\"w3-opacity\">
    <p>We are a company specializing in the provision of services associated with energy, telecommunications, Contact-Center, business management.Additionally, we have a proprietary platform in Software as a Service format aimed at business management, Contact-Center and marketing.We are official Iberdrola partners with customer support stores in the main cities and partners of the main telecommunications operators.</p>
  </div>
  
  <!-- Portfolio Section -->
  <div class=\"w3-content w3-justify w3-text-grey w3-padding-64\" id=\"photos\">
    <h2 class=\"text-muted  mb-0\">My Photos</h2>
    <hr style=\"width: 200px; border-color: #608E34; background-color: #608E34;\" class=\"w3-opacity\">

    <!-- Grid for photos -->
    <div class=\"w3-row-padding\" style=\"margin:0 -16px\">
      <div class=\"w3-half\">
        <img src=\"/img/sss.jpg\" style=\"width:100%\">
        <img src=\"/img/sss.jpg\" style=\"width:100%\">
        <img src=\"/img/sss.jpg\" style=\"width:100%\">
      </div>

      <div class=\"w3-half\">
        <img src=\"/img/sss.jpg\" style=\"width:100%\">
        <img src=\"/img/sss.jpg\" style=\"width:100%\">
        <img src=\"/img/sss.jpg\" style=\"width:100%\">
        
      </div>
    <!-- End photo grid -->
    </div>
  <!-- End Portfolio Section -->
  </div>

  <!-- Contact Section -->
  <div class=\"w3-content w3-justify w3-text-grey w3-padding-64\" id=\"contact\">
    <h2 class=\"text-muted  mb-0\">Contact Us</h2>
    <hr style=\"width: 200px; border-color: #608E34; background-color: #608E34;\" class=\"w3-opacity\">

    <div class=\"w3-section\">
      <p><i class=\"fa fa-map-marker fa-fw w3-text-grey w3-xxlarge w3-margin-right\"></i> Trofa, Portugal</p>
      <p><i class=\"fa fa-phone fa-fw w3-text-grey w3-xxlarge w3-margin-right\"></i> Phone: 220 934 494/</p>
      <p><i class=\"fa fa-envelope fa-fw w3-text-grey w3-xxlarge w3-margin-right\"> </i> Email: Business@mail.com</p>
    </div><br>
  </div>

<!-- END PAGE CONTENT -->
</div>

</body>
</html>", "main/index.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\main\\index.html.twig");
    }
}
