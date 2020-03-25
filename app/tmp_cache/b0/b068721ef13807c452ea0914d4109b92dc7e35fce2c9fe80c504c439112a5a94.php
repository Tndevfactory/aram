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

/* /inc/chatPopUp.html.twig */
class __TwigTemplate_6b5b601e748a014327fe9b0e84e87b3cf9279037262d60bce1bba478e2cdffb2 extends Template
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
        // line 1
        echo "<style>

/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  /*background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;*/
  position: fixed;
  bottom: 23px;
  right: 28px;
  border-radius:50%;
  z-index: 999;
   /* z-index:9999; #}
 width: 280px;*/
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9999;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>


<button class=\"open-button btn orange \" onclick=\"openForm()\">
<i class=\"far fa-comments fa-2x\">...</i></button>

<div class=\"chat-popup\" id=\"myForm\">
  <form action=\"#\" class=\"form-container\">
    <h3>Chat</h1>

    <label for=\"msg\"><b>Message</b></label>
    <textarea placeholder=\"Type message..\" name=\"msg\" required></textarea>

    <button type=\"submit\" class=\"btn amber white-text\">Send <i class=\"far fa-paper-plane\"></i></button>
    <button type=\"button\" class=\"btn black white-text cancel\" onclick=\"closeForm()\">Close <i class=\"pl-1 far fa-window-close fa-1x\"></i></button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById(\"myForm\").style.display = \"block\";
}

function closeForm() {
  document.getElementById(\"myForm\").style.display = \"none\";
}
</script>


 ";
    }

    public function getTemplateName()
    {
        return "/inc/chatPopUp.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>

/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  /*background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;*/
  position: fixed;
  bottom: 23px;
  right: 28px;
  border-radius:50%;
  z-index: 999;
   /* z-index:9999; #}
 width: 280px;*/
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9999;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>


<button class=\"open-button btn orange \" onclick=\"openForm()\">
<i class=\"far fa-comments fa-2x\">...</i></button>

<div class=\"chat-popup\" id=\"myForm\">
  <form action=\"#\" class=\"form-container\">
    <h3>Chat</h1>

    <label for=\"msg\"><b>Message</b></label>
    <textarea placeholder=\"Type message..\" name=\"msg\" required></textarea>

    <button type=\"submit\" class=\"btn amber white-text\">Send <i class=\"far fa-paper-plane\"></i></button>
    <button type=\"button\" class=\"btn black white-text cancel\" onclick=\"closeForm()\">Close <i class=\"pl-1 far fa-window-close fa-1x\"></i></button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById(\"myForm\").style.display = \"block\";
}

function closeForm() {
  document.getElementById(\"myForm\").style.display = \"none\";
}
</script>


 ", "/inc/chatPopUp.html.twig", "C:\\xampp\\htdocs\\www.aram-clinic.com\\app\\views\\inc\\chatPopUp.html.twig");
    }
}
