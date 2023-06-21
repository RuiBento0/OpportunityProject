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
class __TwigTemplate_c84c47294c4abb14c8fde099fa0527d38fcac20062c2313c1ba377c4dfc98143 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

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

            <link href=\"/css/datatables.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"/plugins/metric/dist/assets/plugins/dragula/dragula.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"/plugins/metric/dist/assets/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" />
      
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
  
  <a href=\"/login\" class=\"w3-bar-item w3-button w3-padding-large\">
    <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/language/login.png"), "html", null, true);
        echo "\" alt=\"\" width= \"50px;\" height= \"auto;\">
    <p>";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("LOGIN", [], "messages");
        echo "</p>
  </a>
  <a href=\"#\" class=\"w3-bar-item w3-button w3-padding-large\">
    <i class=\"fa fa-home w3-xxlarge\"></i>
    <p>";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("HOME", [], "messages");
        echo "</p>
  </a>
  <a href=\"#about\" class=\"w3-bar-item w3-button w3-padding-large \">
    <i class=\"fa fa-user w3-xxlarge\"></i>
    <p>";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ABOUT", [], "messages");
        echo "</p>
  </a>
  <a href=\"#photos\" class=\"w3-bar-item w3-button w3-padding-large\">
    <i class=\"fa fa-eye w3-xxlarge\"></i>
    <p>";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("PHOTOS", [], "messages");
        echo "</p>
  </a>
  <a href=\"#contact\" class=\"w3-bar-item w3-button w3-padding-large\">
    <i class=\"fa fa-envelope w3-xxlarge\"></i>
    <p>";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("CONTACT", [], "messages");
        echo "</p>
  </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class=\"w3-top w3-hide-large w3-hide-medium\" id=\"myNavbar\">
  <div class=\"w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small\">
    <a href=\"/login\" class=\"w3-bar-item w3-button\" style=\"width:25% !important\">";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("LOGIN", [], "messages");
        echo "</a>
    <a href=\"#\" class=\"w3-bar-item w3-button\" style=\"width:25% !important\">";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("HOME", [], "messages");
        echo "</a>
    <a href=\"#about\" class=\"w3-bar-item w3-button\" style=\"width:25% !important\">";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ABOUT", [], "messages");
        echo "</a>
    <a href=\"#photos\" class=\"w3-bar-item w3-button\" style=\"width:25% !important\">";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("PHOTOS", [], "messages");
        echo "</a>
    <a href=\"#contact\" class=\"w3-bar-item w3-button\" style=\"width:25% !important\">";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("CONTACT", [], "messages");
        echo "</a>
  </div>
</div>

<!-- Page Content -->
<div class=\"w3-padding-large\" id=\"main\" style=\"background-color: white\">

    <div class=\"top-bar\">
  <!-- Conteúdo da top bar -->
  <div class=\"dropdown\">
    <a role=\"button\" id=\"languageDropdown\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
      <img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/language/traducao.png"), "html", null, true);
        echo "\" style=\"width:24px\">
    </a>
    <div class=\"dropdown-menu\" aria-labelledby=\"languageDropdown\">
      <a class=\"dropdown-item\" href=\"/business/lang/en\">
        <img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/language/en.jpg"), "html", null, true);
        echo "\" alt=\"\">
        ";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("English", [], "messages");
        // line 79
        echo "      </a>
      <a class=\"dropdown-item\" href=\"/business/lang/pt\">
        <img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/language/pt.png"), "html", null, true);
        echo "\" alt=\"\">
        ";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Portuguese", [], "messages");
        // line 83
        echo "      </a>
    </div>
  </div>
</div>
  <!-- Header/Home -->
  <header class=\"w3-container w3-padding-32 w3-center\" id=\"home\" style=\"background-color: white\">
    <h1 class=\"w3-jumbo\" style=\"color:black\"> Business.</h1>
  </header>
  <!-- About Section -->
  <div class=\"w3-content w3-justify w3-text-grey w3-padding-64\" id=\"about\">
    <h2 class=\"w3-text-grey mb-0\">";
        // line 93
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Company", [], "messages");
        echo "</h2>
    <hr style=\"width: 200px; border-color: #608E34; background-color: #608E34;\" class=\"w3-opacity\">
    <p>";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("We are a company specializing in the provision of services associated with energy, telecommunications, Contact-Center, business management.Additionally, we have a proprietary platform in Software as a Service format aimed at business management, Contact-Center and marketing.", [], "messages");
        echo "</p>
  </div>
  
  <!-- Portfolio Section -->
  <div class=\"w3-content w3-justify w3-text-grey w3-padding-64\" id=\"photos\">
    <h2 class=\"w3-text-grey  mb-0\">";
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Photos", [], "messages");
        echo "</h2>
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
    <h2 class=\"w3-text-grey  mb-0\">";
        // line 124
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Contact Us", [], "messages");
        echo "</h2>
    <hr style=\"width: 200px; border-color: #608E34; background-color: #608E34;\" class=\"w3-opacity\">

    <div class=\"w3-section\">
      <p><i class=\"fa fa-map-marker fa-fw w3-text-grey w3-xxlarge w3-margin-right\"></i> Trofa, Portugal</p>
      <p><i class=\"fa fa-phone fa-fw w3-text-grey w3-xxlarge w3-margin-right\"></i>";
        // line 129
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Phone", [], "messages");
        echo ": 220 934 494</p>
      <p><i class=\"fa fa-envelope fa-fw w3-text-grey w3-xxlarge w3-margin-right\"> </i>";
        // line 130
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email", [], "messages");
        echo ": Business@mail.com</p>
    </div><br>
  </div>

<!-- END PAGE CONTENT -->
</div>

</body>

<style>

.top-bar {
    background-color: #f2f2f2;
    padding: 10px;
    display: flex;
    align-items: center;
  }

  .top-bar .dropdown {
    margin-left: auto; /* Alinha o dropdown à direita da top bar */
  }

  .top-bar .dropdown-menu {
    min-width: 160px;
    padding: 8px;
    background-color: #ffffff;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
  }

  .top-bar .dropdown-menu a {
    display: flex;
    align-items: center;
    color: #000000;
    text-decoration: none;
    padding: 4px 8px;
  }

  .top-bar .dropdown-menu a:hover {
    background-color: #f1f1f1;
  }

  .top-bar img {
    width: 24px;
  }

.dropdown-menu img {
  width: 24px; /* Defina o valor desejado para a largura das imagens */
}


h2 {
  font-size: 24px; /* Defina o valor desejado para o tamanho da fonte */
  color: #888888; /* Defina a cor cinza desejada */
}


p {
  font-size: 16px; /* Defina o valor desejado para o tamanho da fonte */
}


.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1;
  display: none;
  min-width: 160px;
  padding: 8px;
  background-color: #ffffff;
  box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
}

.dropdown-menu a {
  display: flex;
  align-items: center;
  color: #000000;
  text-decoration: none;
  padding: 4px 8px;
}

.dropdown-menu a:hover {
  background-color: #f1f1f1;
}

.dropdown .nav-icon img {
  width: 24px;
}

.dropdown .thumb-xxs {
  width: 24px;
  height: 24px;
  border-radius: 50%;
  margin-right: 8px;
}


</style>

        <script src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/datatables.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/googleapis.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/metric/dist/assets/js/app.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/metric/dist/assets/plugins/select/selectr.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/metric/dist/assets/plugins/huebee/huebee.pkgd.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/metric/dist/assets/plugins/datepicker/datepicker-full.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/metric/dist/assets/plugins/moment/moment.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/metric/dist/assets/plugins/imask/imask.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/metric/dist/assets/pages/forms-advanced.js"), "html", null, true);
        echo "\"></script>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "main/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  376 => 242,  372 => 241,  368 => 240,  364 => 239,  360 => 238,  356 => 237,  352 => 236,  348 => 235,  344 => 234,  237 => 130,  233 => 129,  225 => 124,  198 => 100,  190 => 95,  185 => 93,  173 => 83,  171 => 82,  167 => 81,  163 => 79,  161 => 78,  157 => 77,  150 => 73,  136 => 62,  132 => 61,  128 => 60,  124 => 59,  120 => 58,  110 => 51,  103 => 47,  96 => 43,  89 => 39,  82 => 35,  78 => 34,  43 => 1,);
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

            <link href=\"/css/datatables.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"/plugins/metric/dist/assets/plugins/dragula/dragula.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"/plugins/metric/dist/assets/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" />
      
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
  
  <a href=\"/login\" class=\"w3-bar-item w3-button w3-padding-large\">
    <img src=\"{{ asset('img/language/login.png') }}\" alt=\"\" width= \"50px;\" height= \"auto;\">
    <p>{% trans %}LOGIN{% endtrans %}</p>
  </a>
  <a href=\"#\" class=\"w3-bar-item w3-button w3-padding-large\">
    <i class=\"fa fa-home w3-xxlarge\"></i>
    <p>{% trans %}HOME{% endtrans %}</p>
  </a>
  <a href=\"#about\" class=\"w3-bar-item w3-button w3-padding-large \">
    <i class=\"fa fa-user w3-xxlarge\"></i>
    <p>{% trans %}ABOUT{% endtrans %}</p>
  </a>
  <a href=\"#photos\" class=\"w3-bar-item w3-button w3-padding-large\">
    <i class=\"fa fa-eye w3-xxlarge\"></i>
    <p>{% trans %}PHOTOS{% endtrans %}</p>
  </a>
  <a href=\"#contact\" class=\"w3-bar-item w3-button w3-padding-large\">
    <i class=\"fa fa-envelope w3-xxlarge\"></i>
    <p>{% trans %}CONTACT{% endtrans %}</p>
  </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class=\"w3-top w3-hide-large w3-hide-medium\" id=\"myNavbar\">
  <div class=\"w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small\">
    <a href=\"/login\" class=\"w3-bar-item w3-button\" style=\"width:25% !important\">{% trans %}LOGIN{% endtrans %}</a>
    <a href=\"#\" class=\"w3-bar-item w3-button\" style=\"width:25% !important\">{% trans %}HOME{% endtrans %}</a>
    <a href=\"#about\" class=\"w3-bar-item w3-button\" style=\"width:25% !important\">{% trans %}ABOUT{% endtrans %}</a>
    <a href=\"#photos\" class=\"w3-bar-item w3-button\" style=\"width:25% !important\">{% trans %}PHOTOS{% endtrans %}</a>
    <a href=\"#contact\" class=\"w3-bar-item w3-button\" style=\"width:25% !important\">{% trans %}CONTACT{% endtrans %}</a>
  </div>
</div>

<!-- Page Content -->
<div class=\"w3-padding-large\" id=\"main\" style=\"background-color: white\">

    <div class=\"top-bar\">
  <!-- Conteúdo da top bar -->
  <div class=\"dropdown\">
    <a role=\"button\" id=\"languageDropdown\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
      <img src=\"{{ asset('img/language/traducao.png') }}\" style=\"width:24px\">
    </a>
    <div class=\"dropdown-menu\" aria-labelledby=\"languageDropdown\">
      <a class=\"dropdown-item\" href=\"/business/lang/en\">
        <img src=\"{{ asset('img/language/en.jpg') }}\" alt=\"\">
        {% trans %}English{% endtrans %}
      </a>
      <a class=\"dropdown-item\" href=\"/business/lang/pt\">
        <img src=\"{{ asset('img/language/pt.png') }}\" alt=\"\">
        {% trans %}Portuguese{% endtrans %}
      </a>
    </div>
  </div>
</div>
  <!-- Header/Home -->
  <header class=\"w3-container w3-padding-32 w3-center\" id=\"home\" style=\"background-color: white\">
    <h1 class=\"w3-jumbo\" style=\"color:black\"> Business.</h1>
  </header>
  <!-- About Section -->
  <div class=\"w3-content w3-justify w3-text-grey w3-padding-64\" id=\"about\">
    <h2 class=\"w3-text-grey mb-0\">{% trans %}Company{% endtrans %}</h2>
    <hr style=\"width: 200px; border-color: #608E34; background-color: #608E34;\" class=\"w3-opacity\">
    <p>{% trans %}We are a company specializing in the provision of services associated with energy, telecommunications, Contact-Center, business management.Additionally, we have a proprietary platform in Software as a Service format aimed at business management, Contact-Center and marketing.{% endtrans %}</p>
  </div>
  
  <!-- Portfolio Section -->
  <div class=\"w3-content w3-justify w3-text-grey w3-padding-64\" id=\"photos\">
    <h2 class=\"w3-text-grey  mb-0\">{% trans %}Photos{% endtrans %}</h2>
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
    <h2 class=\"w3-text-grey  mb-0\">{% trans %}Contact Us{% endtrans %}</h2>
    <hr style=\"width: 200px; border-color: #608E34; background-color: #608E34;\" class=\"w3-opacity\">

    <div class=\"w3-section\">
      <p><i class=\"fa fa-map-marker fa-fw w3-text-grey w3-xxlarge w3-margin-right\"></i> Trofa, Portugal</p>
      <p><i class=\"fa fa-phone fa-fw w3-text-grey w3-xxlarge w3-margin-right\"></i>{% trans %} Phone{% endtrans %}: 220 934 494</p>
      <p><i class=\"fa fa-envelope fa-fw w3-text-grey w3-xxlarge w3-margin-right\"> </i>{% trans %} Email{% endtrans %}: Business@mail.com</p>
    </div><br>
  </div>

<!-- END PAGE CONTENT -->
</div>

</body>

<style>

.top-bar {
    background-color: #f2f2f2;
    padding: 10px;
    display: flex;
    align-items: center;
  }

  .top-bar .dropdown {
    margin-left: auto; /* Alinha o dropdown à direita da top bar */
  }

  .top-bar .dropdown-menu {
    min-width: 160px;
    padding: 8px;
    background-color: #ffffff;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
  }

  .top-bar .dropdown-menu a {
    display: flex;
    align-items: center;
    color: #000000;
    text-decoration: none;
    padding: 4px 8px;
  }

  .top-bar .dropdown-menu a:hover {
    background-color: #f1f1f1;
  }

  .top-bar img {
    width: 24px;
  }

.dropdown-menu img {
  width: 24px; /* Defina o valor desejado para a largura das imagens */
}


h2 {
  font-size: 24px; /* Defina o valor desejado para o tamanho da fonte */
  color: #888888; /* Defina a cor cinza desejada */
}


p {
  font-size: 16px; /* Defina o valor desejado para o tamanho da fonte */
}


.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1;
  display: none;
  min-width: 160px;
  padding: 8px;
  background-color: #ffffff;
  box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
}

.dropdown-menu a {
  display: flex;
  align-items: center;
  color: #000000;
  text-decoration: none;
  padding: 4px 8px;
}

.dropdown-menu a:hover {
  background-color: #f1f1f1;
}

.dropdown .nav-icon img {
  width: 24px;
}

.dropdown .thumb-xxs {
  width: 24px;
  height: 24px;
  border-radius: 50%;
  margin-right: 8px;
}


</style>

        <script src=\"{{ asset('js/datatables.js') }}\"></script>
        <script src=\"{{ asset('js/googleapis.js') }}\"></script>
        <script src=\"{{ asset('plugins/metric/dist/assets/js/app.js') }}\"></script>
        <script src=\"{{ asset('plugins/metric/dist/assets/plugins/select/selectr.min.js') }}\"></script>
        <script src=\"{{ asset('plugins/metric/dist/assets/plugins/huebee/huebee.pkgd.min.js') }}\"></script>
        <script src=\"{{ asset('plugins/metric/dist/assets/plugins/datepicker/datepicker-full.min.js') }}\"></script>
        <script src=\"{{ asset('plugins/metric/dist/assets/plugins/moment/moment.js') }}\"></script>
        <script src=\"{{ asset('plugins/metric/dist/assets/plugins/imask/imask.js') }}\"></script>
        <script src=\"{{ asset('plugins/metric/dist/assets/pages/forms-advanced.js') }}\"></script>
</html>", "main/index.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\main\\index.html.twig");
    }
}
