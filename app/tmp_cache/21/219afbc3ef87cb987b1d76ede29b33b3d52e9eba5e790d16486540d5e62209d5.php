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

/* /components/index/fr/testimonials.twig */
class __TwigTemplate_9055a4650f4eb128e8dccad8c4aaea9b587b20cff378375e90d5ed95194e1989 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'script' => [$this, 'block_script'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!-- testimonials- stars -->

<style>
";
        // line 5
        echo "figure.snip1192 {
  font-family: 'Raleway', Arial, sans-serif;
  position: relative;
  overflow: hidden;
  margin: 10px;
  min-width: 220px;
  max-width: 310px;
  width: 100%;
  color: #333;
  text-align: left;
  box-shadow: none !important;
}
figure.snip1192 * {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
figure.snip1192 img {
  max-width: 100%;
  height: 100px;
  width: 100px;
  border-radius: 50%;
  margin-bottom: 15px;
  display: inline-block;
  z-index: 1;
  position: relative;
}
figure.snip1192 blockquote {
  margin: 0;
  display: block;
  border-radius: 8px;
  position: relative;
  background-color: #fafafa;
  padding: 30px 50px 65px 50px;
  font-size: 0.8em;
  font-weight: 500;
  margin: 0 0 -50px;
  line-height: 1.6em;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
}
figure.snip1192 blockquote:before,
figure.snip1192 blockquote:after {
  font-family: 'FontAwesome';
  content: \"\\201C\";
  position: absolute;
  font-size: 50px;
  opacity: 0.3;
  font-style: normal;
}
figure.snip1192 blockquote:before {
  top: 35px;
  left: 20px;
}
figure.snip1192 blockquote:after {
  content: \"\\201D\";
  right: 20px;
  bottom: 35px;
}
figure.snip1192 .author {
  margin: 0;
  text-transform: uppercase;
  text-align: center;
  color: #ffffff;
}
figure.snip1192 .author h5 {
  opacity: 0.8;
  margin: 0;
  font-weight: 800;
}
figure.snip1192 .author h5 span {
  font-weight: 400;
  text-transform: none;
  display: block;
}


</style>

<section id=\"testimonialStars\" class=\"my-5 py-3 py-lg-0\">
  <div class=\"container\">
  <h1 class=\"text-center\">Testimonials of clients </h1>
    <div class=\" row\">

      <div class=\" col-12 col-md-4\"  data-aos=\"zoom-in-right\">

              <figure class=\"snip1192\">
            <blockquote>Calvin: Sometimes when I'm talking with others, my words can't keep up with my thoughts. I wonder why we think faster than we speak. Hobbes: Probably so we can think twice. </blockquote>
            <div class=\"author\">
              <img src=\"https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sq-sample1.jpg\" alt=\"sq-sample1\"/>
             <h5 class=\"grey-text\">Julia Marconi </h5>
                 <span>
                    <i class=\" orange-text fas fa-star\"></i>
                    <i class=\" orange-text fas fa-star\"></i>
                    <i class=\" orange-text fas fa-star\"></i>
                    <i class=\" orange-text fas fa-star\"></i>
                    <i class=\" orange-text fas fa-star\"></i>
                  </span>
            </div>
          </figure>

      </div>

      <div class=\" col-12 col-md-4\"  data-aos=\"zoom-in\">
            <figure class=\"snip1192 hover\">
              <blockquote>Thank you. before I begin, I'd like everyone to notice that my report is in a professional, clear plastic binder...When a report looks this good, you know it'll get an A. That's a tip kids. Write it down.</blockquote>
              <div class=\"author\">
                <img src=\"https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sq-sample24.jpg\" alt=\"sq-sample24\"/>
                 <h5 class=\"grey-text\">Mellisa Jaber</h5>
                 <span>
                    <i class=\" orange-text fas fa-star\"></i>
                    <i class=\" orange-text fas fa-star\"></i>
                    <i class=\" orange-text fas fa-star\"></i>
                    <i class=\" orange-text fas fa-star\"></i>
                    <i class=\" orange-text fas fa-star\"></i>
                  </span>
              </div>
            </figure>
      </div>

    <div class=\" col-12 col-md-4\"  data-aos=\"zoom-in-left\">
        <figure class=\"snip1192\">
          <blockquote>My behaviour is addictive functioning in a disease process of toxic co-dependency. I need holistic healing and wellness before I'll accept any responsibility for my actions.</blockquote>
          <div class=\"author\">
            <img src=\"https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sq-sample29.jpg\" alt=\"sq-sample29\"/>
                 <h5 class=\"grey-text\">Stephanie Ambers</h5>
                 <span>
                    <i class=\" orange-text fas fa-star\"></i>
                    <i class=\" orange-text fas fa-star\"></i>
                    <i class=\" orange-text fas fa-star\"></i>
                    <i class=\" orange-text fas fa-star\"></i>
                    <i class=\" orange-text fas fa-star\"></i>
                  </span>
          </div>
        </figure>
      </div>

    </div> 
  </div> 

</section>

";
        // line 145
        $this->displayBlock('script', $context, $blocks);
    }

    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 146
        echo "  <script>
     
  </script>
";
    }

    public function getTemplateName()
    {
        return "/components/index/fr/testimonials.twig";
    }

    public function getDebugInfo()
    {
        return array (  192 => 146,  185 => 145,  43 => 5,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- testimonials- stars -->

<style>
{# @import url(https://fonts.googleapis.com/css?family=Raleway:400,800); #}
figure.snip1192 {
  font-family: 'Raleway', Arial, sans-serif;
  position: relative;
  overflow: hidden;
  margin: 10px;
  min-width: 220px;
  max-width: 310px;
  width: 100%;
  color: #333;
  text-align: left;
  box-shadow: none !important;
}
figure.snip1192 * {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
figure.snip1192 img {
  max-width: 100%;
  height: 100px;
  width: 100px;
  border-radius: 50%;
  margin-bottom: 15px;
  display: inline-block;
  z-index: 1;
  position: relative;
}
figure.snip1192 blockquote {
  margin: 0;
  display: block;
  border-radius: 8px;
  position: relative;
  background-color: #fafafa;
  padding: 30px 50px 65px 50px;
  font-size: 0.8em;
  font-weight: 500;
  margin: 0 0 -50px;
  line-height: 1.6em;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
}
figure.snip1192 blockquote:before,
figure.snip1192 blockquote:after {
  font-family: 'FontAwesome';
  content: \"\\201C\";
  position: absolute;
  font-size: 50px;
  opacity: 0.3;
  font-style: normal;
}
figure.snip1192 blockquote:before {
  top: 35px;
  left: 20px;
}
figure.snip1192 blockquote:after {
  content: \"\\201D\";
  right: 20px;
  bottom: 35px;
}
figure.snip1192 .author {
  margin: 0;
  text-transform: uppercase;
  text-align: center;
  color: #ffffff;
}
figure.snip1192 .author h5 {
  opacity: 0.8;
  margin: 0;
  font-weight: 800;
}
figure.snip1192 .author h5 span {
  font-weight: 400;
  text-transform: none;
  display: block;
}


</style>

<section id=\"testimonialStars\" class=\"my-5 py-3 py-lg-0\">
  <div class=\"container\">
  <h1 class=\"text-center\">Testimonials of clients </h1>
    <div class=\" row\">

      <div class=\" col-12 col-md-4\"  data-aos=\"zoom-in-right\">

              <figure class=\"snip1192\">
            <blockquote>Calvin: Sometimes when I'm talking with others, my words can't keep up with my thoughts. I wonder why we think faster than we speak. Hobbes: Probably so we can think twice. </blockquote>
            <div class=\"author\">
              <img src=\"https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sq-sample1.jpg\" alt=\"sq-sample1\"/>
             <h5 class=\"grey-text\">Julia Marconi </h5>
                 <span>
                    <i class=\" orange-text fas fa-star\"></i>
                    <i class=\" orange-text fas fa-star\"></i>
                    <i class=\" orange-text fas fa-star\"></i>
                    <i class=\" orange-text fas fa-star\"></i>
                    <i class=\" orange-text fas fa-star\"></i>
                  </span>
            </div>
          </figure>

      </div>

      <div class=\" col-12 col-md-4\"  data-aos=\"zoom-in\">
            <figure class=\"snip1192 hover\">
              <blockquote>Thank you. before I begin, I'd like everyone to notice that my report is in a professional, clear plastic binder...When a report looks this good, you know it'll get an A. That's a tip kids. Write it down.</blockquote>
              <div class=\"author\">
                <img src=\"https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sq-sample24.jpg\" alt=\"sq-sample24\"/>
                 <h5 class=\"grey-text\">Mellisa Jaber</h5>
                 <span>
                    <i class=\" orange-text fas fa-star\"></i>
                    <i class=\" orange-text fas fa-star\"></i>
                    <i class=\" orange-text fas fa-star\"></i>
                    <i class=\" orange-text fas fa-star\"></i>
                    <i class=\" orange-text fas fa-star\"></i>
                  </span>
              </div>
            </figure>
      </div>

    <div class=\" col-12 col-md-4\"  data-aos=\"zoom-in-left\">
        <figure class=\"snip1192\">
          <blockquote>My behaviour is addictive functioning in a disease process of toxic co-dependency. I need holistic healing and wellness before I'll accept any responsibility for my actions.</blockquote>
          <div class=\"author\">
            <img src=\"https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sq-sample29.jpg\" alt=\"sq-sample29\"/>
                 <h5 class=\"grey-text\">Stephanie Ambers</h5>
                 <span>
                    <i class=\" orange-text fas fa-star\"></i>
                    <i class=\" orange-text fas fa-star\"></i>
                    <i class=\" orange-text fas fa-star\"></i>
                    <i class=\" orange-text fas fa-star\"></i>
                    <i class=\" orange-text fas fa-star\"></i>
                  </span>
          </div>
        </figure>
      </div>

    </div> 
  </div> 

</section>

{% block script %}
  <script>
     
  </script>
{% endblock  %}
", "/components/index/fr/testimonials.twig", "C:\\xampp\\htdocs\\ARAM\\app\\views\\components\\index\\fr\\testimonials.twig");
    }
}
