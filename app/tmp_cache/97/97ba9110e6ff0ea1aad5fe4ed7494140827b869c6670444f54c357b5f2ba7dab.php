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

/* /inc/social.html.twig */
class __TwigTemplate_54c5355baab40b97de67160a75254a0e4c7b8fa1d69e914e591e1aebe30ef9e9 extends Template
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
#SocialShare a.btn{
  margin:0px;
}

#SocialShare ul , #SocialShare ul  {
margin:0px;
padding:0px;
position:absolute;
top:660px;
z-index:999;

}


 </style>


";
        // line 26
        echo "
";
        // line 30
        echo "
 <section id=\"SocialShare\">
   
          <ul class=\"list-unstyled\">
          <li class=\"da-share-html da-fb\"> </li>
          <li class=\"da-share-html da-tw\"> </li>
          <li class=\"da-share-html da-pi\"> </li>
          <li class=\"da-share-html da-gp\"> </li>
          </ul>

      

 </section>

 <script>

 jQuery(function (\$) {

    // FUCKING AWESOME CODE

    window.da_share = {
        fb: function (url) {
            if (event) event.preventDefault();
            url = url || window.location.href;
            var link = 'https://www.facebook.com/share.php?u=';
            link += encodeURI(url);
            da_share.popup(encodeURI(link));
        },
        vk: function (url, title, description, image) {
            if (event) event.preventDefault();
            url = url || window.location.href;
            var link = 'https://vk.com/share.php?url=' + encodeURI(url);
            if (title) link += '&title=' + title;
            if (description) link += '&description=' + description;
            if (image) link += '&image=' + image;
            da_share.popup(encodeURI(link));
        },
        tw: function (url, text, hashtags, via) {
            if (event) event.preventDefault();
            url = url || window.location.href;
            var link = 'https://twitter.com/intent/tweet?url=';
            link += encodeURI(url);
            if (text) link += '&text=' + text;
            if (hashtags) link += '&hashtags=' + hashtags;
            if (via) link += '&via=' + via;
            da_share.popup(encodeURI(link));
        },
        ok: function (url, title, image) {
            if (event) event.preventDefault();
            url = url || window.location.href;
            var link = 'https://connect.ok.ru/offer?url=' + encodeURI(url);
            if (title) link += '&title=' + title;
            if (image) link += '&imageUrl=' + image;
            da_share.popup(encodeURI(link));
        },
        gp: function (url) {
            if (event) event.preventDefault();
            url = url || window.location.href;
            var link = 'https://plus.google.com/share?url=' + encodeURI(url);
            da_share.popup(encodeURI(link));
        },
        pi: function (url, description, image) {
            if (event) event.preventDefault();
            url = url || window.location.href;
            var link = 'https://www.pinterest.com/pin/create/button/?url=' + encodeURI(url);
            if (description) link += '&description=' + description;
            if (image) link += '&media=' + image;
            da_share.popup(encodeURI(link));
        },
        popup: function(link) {
            //console.log({'link': link});
            window.open(link,'_blank','toolbar=0,status=0,width=626,height=436');
        }
    };

    // STUPID HTML TEMPLATE

    var da_share_elements = \$('.da-share-html');

    da_share_elements.each(function(index){

        var da_share_html = \"<div class='btn-group'>\";

        if ( da_share_elements.eq(index).hasClass('da-fb') ) {
            da_share_html += \"<a class='btn btn-lg px-2 text-white' style='border-radius:0px;background:#3b5998;' onclick='da_share.fb()'><i class='fab fa-facebook-square fa-fw fa-lg '></i></a>\";
        }
        if ( da_share_elements.eq(index).hasClass('da-vk') ) {
            da_share_html += \"<a class='btn btn-lg px-2 text-white' style='border-radius:0px;background:#0976b4' onclick='da_share.vk()'><i class='fab fa-lg fa-vk fa-fw '></i></a>\";
        }
        if ( da_share_elements.eq(index).hasClass('da-tw') ) {
            da_share_html += \"<a class='btn btn-lg px-2 text-white' style='border-radius:0px;background:#55acee' onclick='da_share.tw()'><i class='fab fa-twitter fa-fw fa-lg '></i></a>\";
        }
        if ( da_share_elements.eq(index).hasClass('da-ok') ) {
            da_share_html += \"<a class='btn btn-lg px-2 text-white' style='border-radius:0px;background:#ed812b' onclick='da_share.ok()'><i class='fab fa-odnoklassniki fa-fw fa-lg '></i></a>\";
        }
        if ( da_share_elements.eq(index).hasClass('da-pi') ) {
            da_share_html += \"<a class='btn btn-lg px-2 text-white' style='border-radius:0px;background:#E60019' onclick='da_share.pi()'><i class='fab fa-fw fa-lg fa-pinterest '></i></a>\";
        }
        if ( da_share_elements.eq(index).hasClass('da-gp') ) {
            da_share_html += \"<a class='btn btn-lg px-2 text-white' style='border-radius:0px;background:#cc2127' onclick='da_share.gp()'><i class='fab fa-fw fa-lg fa-google-plus-square '></i></a>\";
        }

        da_share_html += \"</div>\";

        da_share_elements.eq(index).html(da_share_html);

    });

});

 </script>

";
    }

    public function getTemplateName()
    {
        return "/inc/social.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  60 => 30,  57 => 26,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
#SocialShare a.btn{
  margin:0px;
}

#SocialShare ul , #SocialShare ul  {
margin:0px;
padding:0px;
position:absolute;
top:660px;
z-index:999;

}


 </style>


{# da-share-html: Required
da-fb: Facebook
da-vk: VK
da-tw: Twitter
da-ok: OK.Ru
da-gp: Google Plus
da-pi: Pinterest #}

{# <a href=\"#\" onclick=\"da_share.fb();\">Share on Facebook</a> 
<a href=\"#\" onclick=\"da_share.tw();\">Tweat This</a> 
<a href=\"#\" onclick=\"da_share.gp();\">Share on Google Plus</a> #}

 <section id=\"SocialShare\">
   
          <ul class=\"list-unstyled\">
          <li class=\"da-share-html da-fb\"> </li>
          <li class=\"da-share-html da-tw\"> </li>
          <li class=\"da-share-html da-pi\"> </li>
          <li class=\"da-share-html da-gp\"> </li>
          </ul>

      

 </section>

 <script>

 jQuery(function (\$) {

    // FUCKING AWESOME CODE

    window.da_share = {
        fb: function (url) {
            if (event) event.preventDefault();
            url = url || window.location.href;
            var link = 'https://www.facebook.com/share.php?u=';
            link += encodeURI(url);
            da_share.popup(encodeURI(link));
        },
        vk: function (url, title, description, image) {
            if (event) event.preventDefault();
            url = url || window.location.href;
            var link = 'https://vk.com/share.php?url=' + encodeURI(url);
            if (title) link += '&title=' + title;
            if (description) link += '&description=' + description;
            if (image) link += '&image=' + image;
            da_share.popup(encodeURI(link));
        },
        tw: function (url, text, hashtags, via) {
            if (event) event.preventDefault();
            url = url || window.location.href;
            var link = 'https://twitter.com/intent/tweet?url=';
            link += encodeURI(url);
            if (text) link += '&text=' + text;
            if (hashtags) link += '&hashtags=' + hashtags;
            if (via) link += '&via=' + via;
            da_share.popup(encodeURI(link));
        },
        ok: function (url, title, image) {
            if (event) event.preventDefault();
            url = url || window.location.href;
            var link = 'https://connect.ok.ru/offer?url=' + encodeURI(url);
            if (title) link += '&title=' + title;
            if (image) link += '&imageUrl=' + image;
            da_share.popup(encodeURI(link));
        },
        gp: function (url) {
            if (event) event.preventDefault();
            url = url || window.location.href;
            var link = 'https://plus.google.com/share?url=' + encodeURI(url);
            da_share.popup(encodeURI(link));
        },
        pi: function (url, description, image) {
            if (event) event.preventDefault();
            url = url || window.location.href;
            var link = 'https://www.pinterest.com/pin/create/button/?url=' + encodeURI(url);
            if (description) link += '&description=' + description;
            if (image) link += '&media=' + image;
            da_share.popup(encodeURI(link));
        },
        popup: function(link) {
            //console.log({'link': link});
            window.open(link,'_blank','toolbar=0,status=0,width=626,height=436');
        }
    };

    // STUPID HTML TEMPLATE

    var da_share_elements = \$('.da-share-html');

    da_share_elements.each(function(index){

        var da_share_html = \"<div class='btn-group'>\";

        if ( da_share_elements.eq(index).hasClass('da-fb') ) {
            da_share_html += \"<a class='btn btn-lg px-2 text-white' style='border-radius:0px;background:#3b5998;' onclick='da_share.fb()'><i class='fab fa-facebook-square fa-fw fa-lg '></i></a>\";
        }
        if ( da_share_elements.eq(index).hasClass('da-vk') ) {
            da_share_html += \"<a class='btn btn-lg px-2 text-white' style='border-radius:0px;background:#0976b4' onclick='da_share.vk()'><i class='fab fa-lg fa-vk fa-fw '></i></a>\";
        }
        if ( da_share_elements.eq(index).hasClass('da-tw') ) {
            da_share_html += \"<a class='btn btn-lg px-2 text-white' style='border-radius:0px;background:#55acee' onclick='da_share.tw()'><i class='fab fa-twitter fa-fw fa-lg '></i></a>\";
        }
        if ( da_share_elements.eq(index).hasClass('da-ok') ) {
            da_share_html += \"<a class='btn btn-lg px-2 text-white' style='border-radius:0px;background:#ed812b' onclick='da_share.ok()'><i class='fab fa-odnoklassniki fa-fw fa-lg '></i></a>\";
        }
        if ( da_share_elements.eq(index).hasClass('da-pi') ) {
            da_share_html += \"<a class='btn btn-lg px-2 text-white' style='border-radius:0px;background:#E60019' onclick='da_share.pi()'><i class='fab fa-fw fa-lg fa-pinterest '></i></a>\";
        }
        if ( da_share_elements.eq(index).hasClass('da-gp') ) {
            da_share_html += \"<a class='btn btn-lg px-2 text-white' style='border-radius:0px;background:#cc2127' onclick='da_share.gp()'><i class='fab fa-fw fa-lg fa-google-plus-square '></i></a>\";
        }

        da_share_html += \"</div>\";

        da_share_elements.eq(index).html(da_share_html);

    });

});

 </script>

", "/inc/social.html.twig", "C:\\xampp\\htdocs\\ARAM\\app\\views\\inc\\social.html.twig");
    }
}
