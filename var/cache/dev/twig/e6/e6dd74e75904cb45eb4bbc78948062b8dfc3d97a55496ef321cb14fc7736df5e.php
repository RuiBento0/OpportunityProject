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

/* uploads/accounts.html.twig */
class __TwigTemplate_189684863da0a1624da4de21b757d539837bed29e8aebecf9759c858ee6b5053 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "uploads/accounts.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
";
        // line 2
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
\t\t\t<h3 class=\"dynamic-message\">Insert your accounts excel </h3>
\t\t\t<label class=\"label\"><span class=\"browse-files\"> <input type=\"file\" id=\"fileupload\" name=\"fileupload\" class=\"default-file-input\"/> <span class=\"browse-files-text\">browse file</span> <span>from device</span> </span> </label>
\t\t</div>
\t\t<span class=\"cannot-upload-message\"> <span class=\"material-icons-outlined\">error</span> Please select a file first <span class=\"material-icons-outlined cancel-alert-button\">cancel</span> </span>
    <span class=\"can-upload-xlsx\"> <span class=\"material-icons-outlined\">error</span> Only Excel files (.xlsx) are allowed <span class=\"material-icons-outlined cancel-alert-button2\">cancel</span> </span>
\t\t<div class=\"file-block\">
  \t\t\t<div class=\"file-info\">
  \t\t\t  <span class=\"material-icons-outlined file-icon\">description</span>
  \t\t\t  <span class=\"file-name\">
  \t\t\t    <span id=\"selected-file-name\"></span> <!-- Adicione essa linha -->
  \t\t\t  </span>
  \t\t\t  | <span class=\"file-size\"> </span>
  \t\t</div>
  <span class=\"material-icons remove-file-icon\">delete</span>
  <div class=\"progress-bar\"> </div>
</div>
\t\t<a type=\"button\" class=\"normal-button\" href=\"/excel/import/accounts/template\"> Download Template </a>
\t\t<button type=\"button\" class=\"upload-button\"> Import </button><br>
        <button type=\"button\" class=\"normal-button\" onclick=\"window.history.back()\"> Back </button>
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

async function uploadFile(file) {
    let formData = new FormData();        
    formData.append(\"file\", file);
    await fetch('/excel/import/accounts', {
      method: \"POST\", 
      body: formData
    });    
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
\tlet isFileUploaded = fileInput.value;
\tif(isFileUploaded != '') {
\t\tif (fileFlag == 0) {
      uploadFile(file2);
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
\t\tdocument.querySelector(\".label\").innerHTML = `Insert your accounts excel <span class=\"browse-files\"> <input type=\"file\" class=\"default-file-input\" style=\"\"/> <span class=\"browse-files-text\" style=\"top: -23px; left: -20px;\"> browse file</span> </span>`;
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
\tdragDropText.innerHTML = 'Insert your accounts excel';
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
\t  font-family: 'Montserrat', sans-serif;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #608E34;
\t  overflow: hidden;
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
    background-color: #f7fff7;
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

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "          
    <link href=\"https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined\" rel=\"stylesheet\">
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "uploads/accounts.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  424 => 4,  63 => 7,  61 => 4,  58 => 3,  45 => 2,  42 => 1,);
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
\t\t\t<h3 class=\"dynamic-message\">Insert your accounts excel </h3>
\t\t\t<label class=\"label\"><span class=\"browse-files\"> <input type=\"file\" id=\"fileupload\" name=\"fileupload\" class=\"default-file-input\"/> <span class=\"browse-files-text\">browse file</span> <span>from device</span> </span> </label>
\t\t</div>
\t\t<span class=\"cannot-upload-message\"> <span class=\"material-icons-outlined\">error</span> Please select a file first <span class=\"material-icons-outlined cancel-alert-button\">cancel</span> </span>
    <span class=\"can-upload-xlsx\"> <span class=\"material-icons-outlined\">error</span> Only Excel files (.xlsx) are allowed <span class=\"material-icons-outlined cancel-alert-button2\">cancel</span> </span>
\t\t<div class=\"file-block\">
  \t\t\t<div class=\"file-info\">
  \t\t\t  <span class=\"material-icons-outlined file-icon\">description</span>
  \t\t\t  <span class=\"file-name\">
  \t\t\t    <span id=\"selected-file-name\"></span> <!-- Adicione essa linha -->
  \t\t\t  </span>
  \t\t\t  | <span class=\"file-size\"> </span>
  \t\t</div>
  <span class=\"material-icons remove-file-icon\">delete</span>
  <div class=\"progress-bar\"> </div>
</div>
\t\t<a type=\"button\" class=\"normal-button\" href=\"/excel/import/accounts/template\"> Download Template </a>
\t\t<button type=\"button\" class=\"upload-button\"> Import </button><br>
        <button type=\"button\" class=\"normal-button\" onclick=\"window.history.back()\"> Back </button>
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

async function uploadFile(file) {
    let formData = new FormData();        
    formData.append(\"file\", file);
    await fetch('/excel/import/accounts', {
      method: \"POST\", 
      body: formData
    });    
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
\tlet isFileUploaded = fileInput.value;
\tif(isFileUploaded != '') {
\t\tif (fileFlag == 0) {
      uploadFile(file2);
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
\t\tdocument.querySelector(\".label\").innerHTML = `Insert your accounts excel <span class=\"browse-files\"> <input type=\"file\" class=\"default-file-input\" style=\"\"/> <span class=\"browse-files-text\" style=\"top: -23px; left: -20px;\"> browse file</span> </span>`;
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
\tdragDropText.innerHTML = 'Insert your accounts excel';
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
\t  font-family: 'Montserrat', sans-serif;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #608E34;
\t  overflow: hidden;
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
    background-color: #f7fff7;
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
{% endblock %}", "uploads/accounts.html.twig", "C:\\Users\\RuiMiguelCarvalhoBen\\Documents\\symfony-cli\\my_project\\templates\\uploads\\accounts.html.twig");
    }
}
