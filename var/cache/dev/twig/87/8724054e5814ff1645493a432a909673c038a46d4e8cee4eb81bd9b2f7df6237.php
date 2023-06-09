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

/* import/contacts.html.twig */
class __TwigTemplate_6a67ea91a2378e6d8618bb398e3cb7d0e7c096b849ffe15af9a761e37fd71100 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "import/contacts.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "import/contacts.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
";
        // line 2
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
\t";
        // line 4
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "<form id=\"form\" class=\"form-container\" enctype='multipart/form-data'>
<title> Business </title>
\t<div class=\"upload-files-container\">
\t\t<div class=\"drag-file-area\">
\t\t\t<span class=\"material-icons-outlined upload-icon\"> file_upload </span>
\t\t\t<h3 class=\"dynamic-message\">";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Insert your contacts excel", [], "messages");
        echo "</h3>
\t\t\t<label class=\"label\"><span class=\"browse-files\"> <input type=\"file\" id=\"fileupload\" name=\"fileupload\" class=\"default-file-input\"/> <span class=\"browse-files-text\">";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("browse file", [], "messages");
        echo "</span> <span>";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("from device", [], "messages");
        echo "</span> </span> </label>
\t\t</div>
\t\t<span class=\"cannot-upload-message\"> <span class=\"material-icons-outlined\">";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("error", [], "messages");
        echo "</span>";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Please select a file first", [], "messages");
        echo "<span class=\"material-icons-outlined cancel-alert-button\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("cancel", [], "messages");
        echo "</span> </span>
    <span class=\"can-upload-xlsx\"> <span class=\"material-icons-outlined\">";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("error", [], "messages");
        echo "</span>";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Only Excel files (.xlsx) are allowed", [], "messages");
        echo "<span class=\"material-icons-outlined cancel-alert-button2\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("cancel", [], "messages");
        echo "</span> </span>
\t\t<div class=\"file-block\">
  \t\t\t<div class=\"file-info\">
  \t\t\t  <span class=\"material-icons-outlined file-icon\">";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("description", [], "messages");
        echo "</span>
  \t\t\t  <span class=\"file-name\">
  \t\t\t    <span id=\"selected-file-name\"></span> <!-- Adicione essa linha -->
  \t\t\t  </span>
  \t\t\t  | <span class=\"file-size\"> </span>
  \t\t</div>
  <span class=\"material-icons remove-file-icon\">";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete", [], "messages");
        echo "</span>
  <div class=\"progress-bar\"> </div>
</div>
\t\t<a type=\"button\" class=\"normal-button\" href=\"/excel/import/contacts/template\">";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Download Template", [], "messages");
        echo "</a>
\t\t<button type=\"button\" class=\"upload-button\"> Import </button><br>
        <button type=\"button\" class=\"normal-button\" onclick=\"window.history.back()\">";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Back", [], "messages");
        echo "</button>
\t</div>
</form>

<script>
var isAdvancedUpload = function() {
  var div = document.createElement('div');
  return (('draggable' in div) || ('ondragstart' in div && 'ondrop' in div)) && 'FormData' in window && 'FileReader' in window;
}();



let draggableFileArea = document.querySelector(\".drag-file-area\");
let browseFileText = document.querySelector(\".browse-files\");
let uploadIcon = document.querySelector(\".upload-icon\");
let dragDropText = document.querySelector(\".dynamic-message\");
let fileInput = document.querySelector(\".default-file-input\");
fileInput.value='';
let cannotUploadMessage = document.querySelector(\".cannot-upload-message\");
let canUploadXlsx = document.querySelector(\".can-upload-xlsx\");
let cancelAlertButton = document.querySelector(\".cancel-alert-button\");
let cancelAlertButton2 = document.querySelector(\".cancel-alert-button2\");
let uploadedFile = document.querySelector(\".file-block\");
let fileName = document.querySelector(\".file-name\");
let fileSize = document.querySelector(\".file-size\");
let progressBar = document.querySelector(\".progress-bar\");
let removeFileButton = document.querySelector(\".remove-file-icon\");
let uploadButton = document.querySelector(\".upload-button\");
let fileFlag = 0;
let file2 = '';

async function uploadFile(file,iduser) {
    let formData = new FormData();  
    formData.append(\"iduser\", iduser);      
    formData.append(\"file\", file);
    let ajaxResp =  await fetch('/excel/import/contacts', {
      method: \"POST\", 
      body: formData
    });  
    console.log(ajaxResp); // logs \"standalone\" from API  
}

fileInput.addEventListener(\"click\", () => {
\tfileInput.value = '';
\tconsole.log(fileInput.value);
});

fileInput.addEventListener(\"change\", e => {
  fileInput = document.querySelector(\".default-file-input\");
  const allowedExtensions = [\".xlsx\", \".xls\"];
  const file = fileInput.files[0];
  file2 = file;
  if (!file) {
    
    document.getElementById(\"selected-file-name\").textContent = \"\";
    return;
  }
  const fileName = file.name;
  const fileExtension = fileName.substring(fileName.lastIndexOf(\".\")).toLowerCase();
  if (!allowedExtensions.includes(fileExtension)) {
    canUploadXlsx.style.cssText = \"display: flex; animation: fadeIn linear 1.5s;\";
    fileInput.value = \"\";
    return;
  }
  uploadIcon.innerHTML = \"check_circle\";
  dragDropText.innerHTML = \"File selected successfully!\";
  document.querySelector(\".label\").innerHTML = ``;
  uploadButton.innerHTML = `Import`;
  document.getElementById(\"selected-file-name\").textContent = fileName;
  fileSize.innerHTML = (file.size / 1024).toFixed(1) + \" KB\";
  uploadedFile.style.cssText = \"display: flex;\";
  progressBar.style.width = 0;
  fileFlag = 0;
});

uploadButton.addEventListener(\"click\", () => {
  let isFileUploaded = '';
\tisFileUploaded = fileInput.value;
\tif(isFileUploaded != '') {
\t\tif (fileFlag == 0) {
      uploadFile(file2,";
        // line 110
        echo twig_escape_filter($this->env, (isset($context["iduser"]) || array_key_exists("iduser", $context) ? $context["iduser"] : (function () { throw new RuntimeError('Variable "iduser" does not exist.', 110, $this->source); })()), "html", null, true);
        echo ");
    \t\tfileFlag = 1;
    \t\tvar width = 0;
    \t\tvar id = setInterval(frame, 50);
    \t\tfunction frame() {
      \t\t\tif (width >= 390) {
        \t\t\tclearInterval(id);
              
    \t\t\t\t\tuploadButton.innerHTML = `<span class=\"material-icons-outlined upload-button-icon\"> check_circle </span> Imported`;
      \t\t\t} else {
        \t\t\twidth += 5;
        \t\t\tprogressBar.style.width = width + \"px\";
      \t\t\t}
    \t\t}
  \t\t}
\t} else {
\t\tcannotUploadMessage.style.cssText = \"display: flex; animation: fadeIn linear 1.5s;\";
\t}
});

cancelAlertButton.addEventListener(\"click\", () => {
\tcannotUploadMessage.style.cssText = \"display: none;\";
});

cancelAlertButton2.addEventListener(\"click\", () => {
\tcanUploadXlsx.style.cssText = \"display: none;\";
});

if(isAdvancedUpload) {
\t[\"drag\", \"dragstart\", \"dragend\", \"dragover\", \"dragenter\", \"dragleave\", \"drop\"].forEach( evt => 
\t\tdraggableFileArea.addEventListener(evt, e => {
\t\t\te.preventDefault();
\t\t\te.stopPropagation();
\t\t})
\t);

\t[\"dragover\", \"dragenter\"].forEach( evt => {
\t\tdraggableFileArea.addEventListener(evt, e => {
\t\t\te.preventDefault();
\t\t\te.stopPropagation();
\t\t\tuploadIcon.innerHTML = 'file_download';
\t\t\tdragDropText.innerHTML = 'Drop your file here!';
\t\t});
\t});

\tdraggableFileArea.addEventListener(\"drop\", e => {
\t\tuploadIcon.innerHTML = 'check_circle';
\t\tdragDropText.innerHTML = 'File Dropped Successfully!';
\t\tdocument.querySelector(\".label\").innerHTML = `Insert your contacts excel <span class=\"browse-files\"> <input type=\"file\" class=\"default-file-input\" style=\"\"/> <span class=\"browse-files-text\" style=\"top: -23px; left: -20px;\"> browse file</span> </span>`;
\t\tuploadButton.innerHTML = `Import`;
\t\t
\t\tlet files = e.dataTransfer.files;
\t\tfileInput.files = files;
\t\tconsole.log(files[0].name + \" \" + files[0].size);
\t\tconsole.log(document.querySelector(\".default-file-input\").value);
\t\tfileName.innerHTML = files[0].name;
\t\tfileSize.innerHTML = (files[0].size/1024).toFixed(1) + \" KB\";
\t\tuploadedFile.style.cssText = \"display: flex;\";
\t\tprogressBar.style.width = 0;
\t\tfileFlag = 0;
\t});
}

removeFileButton.addEventListener(\"click\", () => {

  location.reload(); 
  
\t/*uploadedFile.style.cssText = \"display: none;\";
\tfileInput.value = '';
\tuploadIcon.innerHTML = 'file_upload';
\tdragDropText.innerHTML = 'Insert your contacts excel';
\tdocument.querySelector(\".label\").innerHTML = ` <span class=\"browse-files\"> <input type=\"file\" id=\"fileupload\" name=\"fileupload\" class=\"default-file-input\" /> <span class=\"browse-files-text\">browse file</span> <span>from device</span> </span>`;
\tuploadButton.innerHTML = `Import`;*/
});
</script>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
   body {
      margin: 0;
      padding: 0;
      display: flex;
\t    font-family: 'Montserrat', sans-serif;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #608E34;
\t    overflow: hidden;
    }

    .form-container {
      width: 420px;
      height: 100%;
      background-color: #608E34;
      padding: 30px 60px;
      border-radius: 40px;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
    }

  .upload-files-container {
    background-color: #f7fff7;
    width: 420px;
    padding: 30px 60px;
    border-radius: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 10px 20px, rgba(0, 0, 0, 0.28) 0px 6px 6px;
  }
  .drag-file-area {
    border: 2px dashed #608E34;
    border-radius: 40px;
    margin: 10px 0 15px;
    padding: 30px 50px;
    width: 350px;
    text-align: center;
  }
  .drag-file-area .upload-icon {
    font-size: 50px;
  }
  .drag-file-area h3 {
    font-size: 26px;
    margin: 15px 0;
  }
  .drag-file-area label {
    font-size: 19px;
  }
  .drag-file-area label .browse-files-text {
    color: #608E34;
    font-weight: bolder;
    cursor: pointer;
  }
  .browse-files span {
    position: relative;
    top: -25px;
  }
  .default-file-input {
    opacity: 0;
  }
  .cannot-upload-message {
    background-color: #ffc6c4;
    font-size: 17px;
    display: flex;
    align-items: center;
    margin: 5px 0;
    padding: 5px 10px 5px 30px;
    border-radius: 5px;
    color: #BB0000;
    display: none;
  }
  @keyframes fadeIn {
    0% {opacity: 0;}
    100% {opacity: 1;}
  }
  .cannot-upload-message span, .upload-button-icon {
    padding-right: 10px;
  }
  .cannot-upload-message span:last-child {
    padding-left: 20px;
    cursor: pointer;
  }
  .can-upload-xlsx {
    background-color: #ffc6c4;
    font-size: 17px;
    display: flex;
    align-items: center;
    margin: 5px 0;
    padding: 5px 10px 5px 30px;
    border-radius: 5px;
    color: #BB0000;
    display: none;
  }
  @keyframes fadeIn {
    0% {opacity: 0;}
    100% {opacity: 1;}
  }
  .can-upload-xlsx span, .upload-button-icon {
    padding-right: 10px;
  }
  .can-upload-xlsx span:last-child {
    padding-left: 20px;
    cursor: pointer;
  }
  .file-block {
    color: #f7fff7;
    background-color: #608E34;
      transition: all 1s;
    width: 390px;
    position: relative;
    display: none;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    margin: 10px 0 15px;
    padding: 10px 20px;
    border-radius: 25px;
    cursor: pointer;
  }
  .file-info {
    display: flex;
    align-items: center;
    font-size: 15px;
  }
  .file-icon {
    margin-right: 10px;
  }
  .file-name, .file-size {
    padding: 0 3px;
  }
  .remove-file-icon {
    cursor: pointer;
  }
  .progress-bar {
    display: flex;
    position: absolute;
    bottom: 0;
    left: 4.5%;
    width: 0;
    height: 5px;
    border-radius: 25px;
    background-color: #006400;
  }
  .upload-button {
    font-family: 'Montserrat';
    background-color: #608E34;
    color: #f7fff7;
    display: flex;
    align-items: center;
    font-size: 18px;
    border: none;
    border-radius: 20px;
    margin: 10px;
    padding: 7.5px 50px;
    cursor: pointer;
  }

  .normal-button {
    font-family: 'Montserrat';
    background-color: #608E34;
    color: #f7fff7;
    display: flex;
    align-items: center;
    font-size: 18px;
    border: none;
    border-radius: 20px;
    margin: 10px;
    padding: 7.5px 50px;
    cursor: pointer;
    text-decoration: none;
  }



</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "          
    <link href=\"https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined\" rel=\"stylesheet\">
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "import/contacts.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  480 => 4,  211 => 110,  128 => 30,  123 => 28,  117 => 25,  108 => 19,  98 => 16,  90 => 15,  83 => 13,  79 => 12,  72 => 7,  70 => 4,  67 => 3,  48 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
{% block body %}

\t{% block stylesheets %}          
    <link href=\"https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined\" rel=\"stylesheet\">
  {% endblock %}
<form id=\"form\" class=\"form-container\" enctype='multipart/form-data'>
<title> Business </title>
\t<div class=\"upload-files-container\">
\t\t<div class=\"drag-file-area\">
\t\t\t<span class=\"material-icons-outlined upload-icon\"> file_upload </span>
\t\t\t<h3 class=\"dynamic-message\">{% trans %}Insert your contacts excel {% endtrans %}</h3>
\t\t\t<label class=\"label\"><span class=\"browse-files\"> <input type=\"file\" id=\"fileupload\" name=\"fileupload\" class=\"default-file-input\"/> <span class=\"browse-files-text\">{% trans %}browse file{% endtrans %}</span> <span>{% trans %}from device{% endtrans %}</span> </span> </label>
\t\t</div>
\t\t<span class=\"cannot-upload-message\"> <span class=\"material-icons-outlined\">{% trans %}error{% endtrans %}</span>{% trans %} Please select a file first {% endtrans %}<span class=\"material-icons-outlined cancel-alert-button\">{% trans %}cancel{% endtrans %}</span> </span>
    <span class=\"can-upload-xlsx\"> <span class=\"material-icons-outlined\">{% trans %}error{% endtrans %}</span>{% trans %} Only Excel files (.xlsx) are allowed {% endtrans %}<span class=\"material-icons-outlined cancel-alert-button2\">{% trans %}cancel{% endtrans %}</span> </span>
\t\t<div class=\"file-block\">
  \t\t\t<div class=\"file-info\">
  \t\t\t  <span class=\"material-icons-outlined file-icon\">{% trans %}description{% endtrans %}</span>
  \t\t\t  <span class=\"file-name\">
  \t\t\t    <span id=\"selected-file-name\"></span> <!-- Adicione essa linha -->
  \t\t\t  </span>
  \t\t\t  | <span class=\"file-size\"> </span>
  \t\t</div>
  <span class=\"material-icons remove-file-icon\">{% trans %}delete{% endtrans %}</span>
  <div class=\"progress-bar\"> </div>
</div>
\t\t<a type=\"button\" class=\"normal-button\" href=\"/excel/import/contacts/template\">{% trans %} Download Template {% endtrans %}</a>
\t\t<button type=\"button\" class=\"upload-button\"> Import </button><br>
        <button type=\"button\" class=\"normal-button\" onclick=\"window.history.back()\">{% trans %} Back {% endtrans %}</button>
\t</div>
</form>

<script>
var isAdvancedUpload = function() {
  var div = document.createElement('div');
  return (('draggable' in div) || ('ondragstart' in div && 'ondrop' in div)) && 'FormData' in window && 'FileReader' in window;
}();



let draggableFileArea = document.querySelector(\".drag-file-area\");
let browseFileText = document.querySelector(\".browse-files\");
let uploadIcon = document.querySelector(\".upload-icon\");
let dragDropText = document.querySelector(\".dynamic-message\");
let fileInput = document.querySelector(\".default-file-input\");
fileInput.value='';
let cannotUploadMessage = document.querySelector(\".cannot-upload-message\");
let canUploadXlsx = document.querySelector(\".can-upload-xlsx\");
let cancelAlertButton = document.querySelector(\".cancel-alert-button\");
let cancelAlertButton2 = document.querySelector(\".cancel-alert-button2\");
let uploadedFile = document.querySelector(\".file-block\");
let fileName = document.querySelector(\".file-name\");
let fileSize = document.querySelector(\".file-size\");
let progressBar = document.querySelector(\".progress-bar\");
let removeFileButton = document.querySelector(\".remove-file-icon\");
let uploadButton = document.querySelector(\".upload-button\");
let fileFlag = 0;
let file2 = '';

async function uploadFile(file,iduser) {
    let formData = new FormData();  
    formData.append(\"iduser\", iduser);      
    formData.append(\"file\", file);
    let ajaxResp =  await fetch('/excel/import/contacts', {
      method: \"POST\", 
      body: formData
    });  
    console.log(ajaxResp); // logs \"standalone\" from API  
}

fileInput.addEventListener(\"click\", () => {
\tfileInput.value = '';
\tconsole.log(fileInput.value);
});

fileInput.addEventListener(\"change\", e => {
  fileInput = document.querySelector(\".default-file-input\");
  const allowedExtensions = [\".xlsx\", \".xls\"];
  const file = fileInput.files[0];
  file2 = file;
  if (!file) {
    
    document.getElementById(\"selected-file-name\").textContent = \"\";
    return;
  }
  const fileName = file.name;
  const fileExtension = fileName.substring(fileName.lastIndexOf(\".\")).toLowerCase();
  if (!allowedExtensions.includes(fileExtension)) {
    canUploadXlsx.style.cssText = \"display: flex; animation: fadeIn linear 1.5s;\";
    fileInput.value = \"\";
    return;
  }
  uploadIcon.innerHTML = \"check_circle\";
  dragDropText.innerHTML = \"File selected successfully!\";
  document.querySelector(\".label\").innerHTML = ``;
  uploadButton.innerHTML = `Import`;
  document.getElementById(\"selected-file-name\").textContent = fileName;
  fileSize.innerHTML = (file.size / 1024).toFixed(1) + \" KB\";
  uploadedFile.style.cssText = \"display: flex;\";
  progressBar.style.width = 0;
  fileFlag = 0;
});

uploadButton.addEventListener(\"click\", () => {
  let isFileUploaded = '';
\tisFileUploaded = fileInput.value;
\tif(isFileUploaded != '') {
\t\tif (fileFlag == 0) {
      uploadFile(file2,{{ iduser }});
    \t\tfileFlag = 1;
    \t\tvar width = 0;
    \t\tvar id = setInterval(frame, 50);
    \t\tfunction frame() {
      \t\t\tif (width >= 390) {
        \t\t\tclearInterval(id);
              
    \t\t\t\t\tuploadButton.innerHTML = `<span class=\"material-icons-outlined upload-button-icon\"> check_circle </span> Imported`;
      \t\t\t} else {
        \t\t\twidth += 5;
        \t\t\tprogressBar.style.width = width + \"px\";
      \t\t\t}
    \t\t}
  \t\t}
\t} else {
\t\tcannotUploadMessage.style.cssText = \"display: flex; animation: fadeIn linear 1.5s;\";
\t}
});

cancelAlertButton.addEventListener(\"click\", () => {
\tcannotUploadMessage.style.cssText = \"display: none;\";
});

cancelAlertButton2.addEventListener(\"click\", () => {
\tcanUploadXlsx.style.cssText = \"display: none;\";
});

if(isAdvancedUpload) {
\t[\"drag\", \"dragstart\", \"dragend\", \"dragover\", \"dragenter\", \"dragleave\", \"drop\"].forEach( evt => 
\t\tdraggableFileArea.addEventListener(evt, e => {
\t\t\te.preventDefault();
\t\t\te.stopPropagation();
\t\t})
\t);

\t[\"dragover\", \"dragenter\"].forEach( evt => {
\t\tdraggableFileArea.addEventListener(evt, e => {
\t\t\te.preventDefault();
\t\t\te.stopPropagation();
\t\t\tuploadIcon.innerHTML = 'file_download';
\t\t\tdragDropText.innerHTML = 'Drop your file here!';
\t\t});
\t});

\tdraggableFileArea.addEventListener(\"drop\", e => {
\t\tuploadIcon.innerHTML = 'check_circle';
\t\tdragDropText.innerHTML = 'File Dropped Successfully!';
\t\tdocument.querySelector(\".label\").innerHTML = `Insert your contacts excel <span class=\"browse-files\"> <input type=\"file\" class=\"default-file-input\" style=\"\"/> <span class=\"browse-files-text\" style=\"top: -23px; left: -20px;\"> browse file</span> </span>`;
\t\tuploadButton.innerHTML = `Import`;
\t\t
\t\tlet files = e.dataTransfer.files;
\t\tfileInput.files = files;
\t\tconsole.log(files[0].name + \" \" + files[0].size);
\t\tconsole.log(document.querySelector(\".default-file-input\").value);
\t\tfileName.innerHTML = files[0].name;
\t\tfileSize.innerHTML = (files[0].size/1024).toFixed(1) + \" KB\";
\t\tuploadedFile.style.cssText = \"display: flex;\";
\t\tprogressBar.style.width = 0;
\t\tfileFlag = 0;
\t});
}

removeFileButton.addEventListener(\"click\", () => {

  location.reload(); 
  
\t/*uploadedFile.style.cssText = \"display: none;\";
\tfileInput.value = '';
\tuploadIcon.innerHTML = 'file_upload';
\tdragDropText.innerHTML = 'Insert your contacts excel';
\tdocument.querySelector(\".label\").innerHTML = ` <span class=\"browse-files\"> <input type=\"file\" id=\"fileupload\" name=\"fileupload\" class=\"default-file-input\" /> <span class=\"browse-files-text\">browse file</span> <span>from device</span> </span>`;
\tuploadButton.innerHTML = `Import`;*/
});
</script>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
   body {
      margin: 0;
      padding: 0;
      display: flex;
\t    font-family: 'Montserrat', sans-serif;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #608E34;
\t    overflow: hidden;
    }

    .form-container {
      width: 420px;
      height: 100%;
      background-color: #608E34;
      padding: 30px 60px;
      border-radius: 40px;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
    }

  .upload-files-container {
    background-color: #f7fff7;
    width: 420px;
    padding: 30px 60px;
    border-radius: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 10px 20px, rgba(0, 0, 0, 0.28) 0px 6px 6px;
  }
  .drag-file-area {
    border: 2px dashed #608E34;
    border-radius: 40px;
    margin: 10px 0 15px;
    padding: 30px 50px;
    width: 350px;
    text-align: center;
  }
  .drag-file-area .upload-icon {
    font-size: 50px;
  }
  .drag-file-area h3 {
    font-size: 26px;
    margin: 15px 0;
  }
  .drag-file-area label {
    font-size: 19px;
  }
  .drag-file-area label .browse-files-text {
    color: #608E34;
    font-weight: bolder;
    cursor: pointer;
  }
  .browse-files span {
    position: relative;
    top: -25px;
  }
  .default-file-input {
    opacity: 0;
  }
  .cannot-upload-message {
    background-color: #ffc6c4;
    font-size: 17px;
    display: flex;
    align-items: center;
    margin: 5px 0;
    padding: 5px 10px 5px 30px;
    border-radius: 5px;
    color: #BB0000;
    display: none;
  }
  @keyframes fadeIn {
    0% {opacity: 0;}
    100% {opacity: 1;}
  }
  .cannot-upload-message span, .upload-button-icon {
    padding-right: 10px;
  }
  .cannot-upload-message span:last-child {
    padding-left: 20px;
    cursor: pointer;
  }
  .can-upload-xlsx {
    background-color: #ffc6c4;
    font-size: 17px;
    display: flex;
    align-items: center;
    margin: 5px 0;
    padding: 5px 10px 5px 30px;
    border-radius: 5px;
    color: #BB0000;
    display: none;
  }
  @keyframes fadeIn {
    0% {opacity: 0;}
    100% {opacity: 1;}
  }
  .can-upload-xlsx span, .upload-button-icon {
    padding-right: 10px;
  }
  .can-upload-xlsx span:last-child {
    padding-left: 20px;
    cursor: pointer;
  }
  .file-block {
    color: #f7fff7;
    background-color: #608E34;
      transition: all 1s;
    width: 390px;
    position: relative;
    display: none;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    margin: 10px 0 15px;
    padding: 10px 20px;
    border-radius: 25px;
    cursor: pointer;
  }
  .file-info {
    display: flex;
    align-items: center;
    font-size: 15px;
  }
  .file-icon {
    margin-right: 10px;
  }
  .file-name, .file-size {
    padding: 0 3px;
  }
  .remove-file-icon {
    cursor: pointer;
  }
  .progress-bar {
    display: flex;
    position: absolute;
    bottom: 0;
    left: 4.5%;
    width: 0;
    height: 5px;
    border-radius: 25px;
    background-color: #006400;
  }
  .upload-button {
    font-family: 'Montserrat';
    background-color: #608E34;
    color: #f7fff7;
    display: flex;
    align-items: center;
    font-size: 18px;
    border: none;
    border-radius: 20px;
    margin: 10px;
    padding: 7.5px 50px;
    cursor: pointer;
  }

  .normal-button {
    font-family: 'Montserrat';
    background-color: #608E34;
    color: #f7fff7;
    display: flex;
    align-items: center;
    font-size: 18px;
    border: none;
    border-radius: 20px;
    margin: 10px;
    padding: 7.5px 50px;
    cursor: pointer;
    text-decoration: none;
  }



</style>
{% endblock %}", "import/contacts.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\import\\contacts.html.twig");
    }
}
