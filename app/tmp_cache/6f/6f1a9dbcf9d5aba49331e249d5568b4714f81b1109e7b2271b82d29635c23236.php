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

/* /components/index/fr/leadFormFloatzoho.twig */
class __TwigTemplate_a8a57fbe325914646d1ac53ed9f4c4646b99d9c3721b4a6d0bfa03b54d53ac0c extends Template
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
        echo "<!-- lead_form_float zoho-->
<!-- Note :
   - You can modify the font style and form style to suit your website. 
   - Code lines with comments ���Do not remove this code���  are required for the form to work properly, make sure that you do not remove these lines of code. 
   - The Mandatory check script can modified as to suit your business needs. 
   - It is important that you test the modified form before going live.-->

<div id='crmWebToEntityForm' style='width:600px;margin:auto;'>

   <META HTTP-EQUIV ='content-type' CONTENT='text/html;charset=UTF-8'>

   <form action='https://crm.zoho.com/crm/WebToLeadForm' 
   name=WebToLeads4449320000000258133 method='POST' 
   onSubmit='javascript:document.charset=\"UTF-8\"; return checkMandatory4449320000000258133()' 
   accept-charset='UTF-8'>

      <input type='text' style='display:none;' name='xnQsjsdp' value='68a0de12d4033cc3927835b52f10e1a59b79ad88c548f28c9b16c6a1a47b6777'></input> 
      <input type='hidden' name='zc_gad' id='zc_gad' value=''></input> 
      <input type='text' style='display:none;' name='xmIwtLD' value='4dc340b1d98194b175d7d0d5593b27a5bc5eea833cf928e71810ee3dbb9d6871'></input> 
      <input type='text'  style='display:none;' name='actionType' value='TGVhZHM='></input>
      <input type='text' style='display:none;' name='returnURL' value='https://www.greffe-cheveux-istanbul.com/homes' > </input><br></br>
        <!-- Do not remove this code. -->
   
\t<style>
\t\t#crmWebToEntityForm tr , #crmWebToEntityForm td { 
\t\t\tpadding:6px;
\t\t\tborder-spacing:0px;
\t\t\tborder-width:0px;
\t\t\t}
  </style>
  

\t<table style='width:600px;background-color:#ffffff;background-color:white;color:black'>
    <tr><td colspan='2' align='left' style='color:black;font-family:Arial;font-size:14px;word-break: break-word;'><strong>leadch</strong></td></tr> <br></br>
    <tr>
      <td  style='word-break: break-word;text-align:left;font-size:12px;font-family:Arial;width:30%;'>Title</td>
      <td style='width:40%;' ><input type='text' style='width:100%;box-sizing:border-box;'  maxlength='100' name='Designation' /></td>
      <td style='width:30%;'></td>
    </tr>
    <tr>
      <td  style='word-break: break-word;text-align:left;font-size:12px;font-family:Arial;width:30%;'>Company<span style='color:red;'>*</span></td>
      <td style='width:40%;' ><input type='text' style='width:100%;box-sizing:border-box;'  maxlength='100' name='Company' /></td>
      <td style='width:30%;'></td>
    </tr>
    <tr>
      <td  style='word-break: break-word;text-align:left;font-size:12px;font-family:Arial;width:30%;'>First Name</td>
      <td style='width:40%;' ><input type='text' style='width:100%;box-sizing:border-box;'  maxlength='40' name='First Name' /></td>
      <td style='width:30%;'></td>
    </tr>
    <tr>
      <td  style='word-break: break-word;text-align:left;font-size:12px;font-family:Arial;width:30%;'>Last Name<span style='color:red;'>*</span></td>
      <td style='width:40%;' ><input type='text' style='width:100%;box-sizing:border-box;'  maxlength='80' name='Last Name' /></td>
      <td style='width:30%;'></td>
    </tr>

\t<tr>
    <td colspan='2' style='text-align:center; padding-top:15px;font-size:12px;'>
    <input style='margin-right: 5px;cursor: pointer;font-size:12px;color:#000000' id='formsubmit' type='submit' value='Submit'  ></input> 
    <input type='reset' name='reset' style='cursor: pointer;font-size:12px;color:#000000' value='Reset' ></input> </td>
  </tr>
</table>

\t<script>
 \t  var mndFileds=new Array('Company','Last Name');
 \t  var fldLangVal=new Array('Company','Last Name'); 
\t\tvar name='';
\t\tvar email='';

 \t  function checkMandatory4449320000000258133() {
    
      for(i=0;i<mndFileds.length;i++) {
\t\t  var fieldObj=document.forms['WebToLeads4449320000000258133'][mndFileds[i]];
\t\t  if(fieldObj) {
\t\t\tif (((fieldObj.value).replace(/^\\s+|\\s+\$/g, '')).length==0) {
\t\t\t if(fieldObj.type =='file')
\t\t\t\t{ 
\t\t\t\t alert('Please select a file to upload.'); 
\t\t\t\t fieldObj.focus(); 
\t\t\t\t return false;
\t\t\t\t} 
\t\t\talert(fldLangVal[i] +' cannot be empty.'); 
   \t   \t  \t  fieldObj.focus();
   \t   \t  \t  return false;
\t\t\t}  else if(fieldObj.nodeName=='SELECT') {
  \t   \t   \t if(fieldObj.options[fieldObj.selectedIndex].value=='-None-') {
\t\t\t\talert(fldLangVal[i] +' cannot be none.'); 
\t\t\t\tfieldObj.focus();
\t\t\t\treturn false;
\t\t\t   }
\t\t\t} else if(fieldObj.type =='checkbox'){
 \t \t \t if(fieldObj.checked == false){
\t\t\t\talert('Please accept  '+fldLangVal[i]);
\t\t\t\tfieldObj.focus();
\t\t\t\treturn false;
\t\t\t   } 
\t\t\t } 
\t\t\t try {
\t\t\t     if(fieldObj.name == 'Last Name') {
\t\t\t\tname = fieldObj.value;
 \t \t \t    }
\t\t\t} catch (e) {}
\t\t    }
    }
    
\t\tdocument.getElementById('formsubmit').disabled=true;
\t}
</script>
\t</form>
</div>";
    }

    public function getTemplateName()
    {
        return "/components/index/fr/leadFormFloatzoho.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- lead_form_float zoho-->
<!-- Note :
   - You can modify the font style and form style to suit your website. 
   - Code lines with comments ���Do not remove this code���  are required for the form to work properly, make sure that you do not remove these lines of code. 
   - The Mandatory check script can modified as to suit your business needs. 
   - It is important that you test the modified form before going live.-->

<div id='crmWebToEntityForm' style='width:600px;margin:auto;'>

   <META HTTP-EQUIV ='content-type' CONTENT='text/html;charset=UTF-8'>

   <form action='https://crm.zoho.com/crm/WebToLeadForm' 
   name=WebToLeads4449320000000258133 method='POST' 
   onSubmit='javascript:document.charset=\"UTF-8\"; return checkMandatory4449320000000258133()' 
   accept-charset='UTF-8'>

      <input type='text' style='display:none;' name='xnQsjsdp' value='68a0de12d4033cc3927835b52f10e1a59b79ad88c548f28c9b16c6a1a47b6777'></input> 
      <input type='hidden' name='zc_gad' id='zc_gad' value=''></input> 
      <input type='text' style='display:none;' name='xmIwtLD' value='4dc340b1d98194b175d7d0d5593b27a5bc5eea833cf928e71810ee3dbb9d6871'></input> 
      <input type='text'  style='display:none;' name='actionType' value='TGVhZHM='></input>
      <input type='text' style='display:none;' name='returnURL' value='https://www.greffe-cheveux-istanbul.com/homes' > </input><br></br>
        <!-- Do not remove this code. -->
   
\t<style>
\t\t#crmWebToEntityForm tr , #crmWebToEntityForm td { 
\t\t\tpadding:6px;
\t\t\tborder-spacing:0px;
\t\t\tborder-width:0px;
\t\t\t}
  </style>
  

\t<table style='width:600px;background-color:#ffffff;background-color:white;color:black'>
    <tr><td colspan='2' align='left' style='color:black;font-family:Arial;font-size:14px;word-break: break-word;'><strong>leadch</strong></td></tr> <br></br>
    <tr>
      <td  style='word-break: break-word;text-align:left;font-size:12px;font-family:Arial;width:30%;'>Title</td>
      <td style='width:40%;' ><input type='text' style='width:100%;box-sizing:border-box;'  maxlength='100' name='Designation' /></td>
      <td style='width:30%;'></td>
    </tr>
    <tr>
      <td  style='word-break: break-word;text-align:left;font-size:12px;font-family:Arial;width:30%;'>Company<span style='color:red;'>*</span></td>
      <td style='width:40%;' ><input type='text' style='width:100%;box-sizing:border-box;'  maxlength='100' name='Company' /></td>
      <td style='width:30%;'></td>
    </tr>
    <tr>
      <td  style='word-break: break-word;text-align:left;font-size:12px;font-family:Arial;width:30%;'>First Name</td>
      <td style='width:40%;' ><input type='text' style='width:100%;box-sizing:border-box;'  maxlength='40' name='First Name' /></td>
      <td style='width:30%;'></td>
    </tr>
    <tr>
      <td  style='word-break: break-word;text-align:left;font-size:12px;font-family:Arial;width:30%;'>Last Name<span style='color:red;'>*</span></td>
      <td style='width:40%;' ><input type='text' style='width:100%;box-sizing:border-box;'  maxlength='80' name='Last Name' /></td>
      <td style='width:30%;'></td>
    </tr>

\t<tr>
    <td colspan='2' style='text-align:center; padding-top:15px;font-size:12px;'>
    <input style='margin-right: 5px;cursor: pointer;font-size:12px;color:#000000' id='formsubmit' type='submit' value='Submit'  ></input> 
    <input type='reset' name='reset' style='cursor: pointer;font-size:12px;color:#000000' value='Reset' ></input> </td>
  </tr>
</table>

\t<script>
 \t  var mndFileds=new Array('Company','Last Name');
 \t  var fldLangVal=new Array('Company','Last Name'); 
\t\tvar name='';
\t\tvar email='';

 \t  function checkMandatory4449320000000258133() {
    
      for(i=0;i<mndFileds.length;i++) {
\t\t  var fieldObj=document.forms['WebToLeads4449320000000258133'][mndFileds[i]];
\t\t  if(fieldObj) {
\t\t\tif (((fieldObj.value).replace(/^\\s+|\\s+\$/g, '')).length==0) {
\t\t\t if(fieldObj.type =='file')
\t\t\t\t{ 
\t\t\t\t alert('Please select a file to upload.'); 
\t\t\t\t fieldObj.focus(); 
\t\t\t\t return false;
\t\t\t\t} 
\t\t\talert(fldLangVal[i] +' cannot be empty.'); 
   \t   \t  \t  fieldObj.focus();
   \t   \t  \t  return false;
\t\t\t}  else if(fieldObj.nodeName=='SELECT') {
  \t   \t   \t if(fieldObj.options[fieldObj.selectedIndex].value=='-None-') {
\t\t\t\talert(fldLangVal[i] +' cannot be none.'); 
\t\t\t\tfieldObj.focus();
\t\t\t\treturn false;
\t\t\t   }
\t\t\t} else if(fieldObj.type =='checkbox'){
 \t \t \t if(fieldObj.checked == false){
\t\t\t\talert('Please accept  '+fldLangVal[i]);
\t\t\t\tfieldObj.focus();
\t\t\t\treturn false;
\t\t\t   } 
\t\t\t } 
\t\t\t try {
\t\t\t     if(fieldObj.name == 'Last Name') {
\t\t\t\tname = fieldObj.value;
 \t \t \t    }
\t\t\t} catch (e) {}
\t\t    }
    }
    
\t\tdocument.getElementById('formsubmit').disabled=true;
\t}
</script>
\t</form>
</div>", "/components/index/fr/leadFormFloatzoho.twig", "/var/www/tndevfactory/public_html/ARAM/app/views/components/index/fr/leadFormFloatzoho.twig");
    }
}
