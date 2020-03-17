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
class __TwigTemplate_2c1acbbde90b7d28207ab2200d107193399f7eae7bdc180012f820aaaa5c4dcb extends Template
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


#messengerButton {
  
  position: fixed;
  bottom: 23px;
  right: 28px;

  border-radius:50%;
  width:60px;
  height:60px;
  z-index: 999;
  background-color:white;

  display: flex;
  justify-content: center;
  align-items: center;
  border:1px solid #0C3537;

}
#messengerButton i{
  
  text-align:center;
  color:#00A3FF;
  font-size:40px;
   
}

.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9999;
}

.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}


.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}


.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}


.form-container .btn {
 
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  
}


</style>


<button id=\"messengerButton\" onclick=\"openForm()\">
<i class=\"fab fa-facebook-messenger \"></i>
</button>

<div class=\"chat-popup\" id=\"myForm\">
  
  <form action=\"#\" class=\"form-container\">
    <h3>Chat</h1>

    <label for=\"msg\"><b>Message</b></label>
   
    <textarea placeholder=\"Type message..\" name=\"msg\" required></textarea>

    <button id=\"sendButton\" type=\"submit\" style=\"background-color:#0C3537\" class=\"btn  white-text\">Send <i class=\"far fa-paper-plane\"></i></button>

    <button id=\"closeButton\" type=\"button\" class=\"btn black white-text cancel\" onclick=\"closeForm()\">Close 
    <i class=\"pl-1 far fa-window-close fa-1x\"></i>
    </button>

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


#messengerButton {
  
  position: fixed;
  bottom: 23px;
  right: 28px;

  border-radius:50%;
  width:60px;
  height:60px;
  z-index: 999;
  background-color:white;

  display: flex;
  justify-content: center;
  align-items: center;
  border:1px solid #0C3537;

}
#messengerButton i{
  
  text-align:center;
  color:#00A3FF;
  font-size:40px;
   
}

.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9999;
}

.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}


.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}


.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}


.form-container .btn {
 
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  
}


</style>


<button id=\"messengerButton\" onclick=\"openForm()\">
<i class=\"fab fa-facebook-messenger \"></i>
</button>

<div class=\"chat-popup\" id=\"myForm\">
  
  <form action=\"#\" class=\"form-container\">
    <h3>Chat</h1>

    <label for=\"msg\"><b>Message</b></label>
   
    <textarea placeholder=\"Type message..\" name=\"msg\" required></textarea>

    <button id=\"sendButton\" type=\"submit\" style=\"background-color:#0C3537\" class=\"btn  white-text\">Send <i class=\"far fa-paper-plane\"></i></button>

    <button id=\"closeButton\" type=\"button\" class=\"btn black white-text cancel\" onclick=\"closeForm()\">Close 
    <i class=\"pl-1 far fa-window-close fa-1x\"></i>
    </button>

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


 ", "/inc/chatPopUp.html.twig", "C:\\xampp\\htdocs\\ARAM\\app\\views\\inc\\chatPopUp.html.twig");
    }
}
