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

/* /inc/rightSidedNav.twig */
class __TwigTemplate_4cd4c29d20c1a0de9758d4ee5f69d9ebf20d84479db443a35ee50e45978d2726 extends Template
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
body {
  font-family: \"Lato\", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  right: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div id=\"mySidenav\" class=\"sidenav\">
  <a href=\"javascript:void(0)\" class=\"closebtn\" onclick=\"closeNav()\">&times;</a>
  <a href=\"#\">About</a>
  <a href=\"#\">Services</a>
  <a href=\"#\">Clients</a>
  <a href=\"#\">Contact</a>
</div>

<h2>Right-sided Navigation</h2>
<p>Click on the element below to open the right-sided navigation menu.</p>
<span style=\"font-size:30px;cursor:pointer\" onclick=\"openNav()\">&#9776; open</span>

<script>
function openNav() {
  document.getElementById(\"mySidenav\").style.width = \"250px\";
}

function closeNav() {
  document.getElementById(\"mySidenav\").style.width = \"0\";
}
</script>";
    }

    public function getTemplateName()
    {
        return "/inc/rightSidedNav.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
body {
  font-family: \"Lato\", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  right: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div id=\"mySidenav\" class=\"sidenav\">
  <a href=\"javascript:void(0)\" class=\"closebtn\" onclick=\"closeNav()\">&times;</a>
  <a href=\"#\">About</a>
  <a href=\"#\">Services</a>
  <a href=\"#\">Clients</a>
  <a href=\"#\">Contact</a>
</div>

<h2>Right-sided Navigation</h2>
<p>Click on the element below to open the right-sided navigation menu.</p>
<span style=\"font-size:30px;cursor:pointer\" onclick=\"openNav()\">&#9776; open</span>

<script>
function openNav() {
  document.getElementById(\"mySidenav\").style.width = \"250px\";
}

function closeNav() {
  document.getElementById(\"mySidenav\").style.width = \"0\";
}
</script>", "/inc/rightSidedNav.twig", "/var/www/tndevfactory/public_html/www.aram-clinic.com/app/views/inc/rightSidedNav.twig");
    }
}
