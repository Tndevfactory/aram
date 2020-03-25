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

/* /homes/data/index/fr/searchForm.twig */
class __TwigTemplate_9357aa279da346ffd802790d883fa7971fa286475d77025bb616e639b06a7798 extends Template
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
        echo "<!-- search form-->

<style>

#searchBar .search {
  width:100%;
  position: static;
  display: flex;
}

#searchBar .searchTerm {
  width: 100%;
  border: 3px solid #010203;
  border-right: none;
  padding: 5px;
  height: 56px;
  border-radius: 5px 0 0 5px;
  outline: none;
  color: #010203;
}

#searchBar .searchTerm:focus{
  color: #010203;
}

#searchBar .searchButton {
  width: 60px;
  height: 56px;
  border: 1px solid #010203;
  background: #010203;
  text-align: center;
  color: #E1AD21;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  font-size: 20px;
}

#searchBar .searchButton i{
  color: #E1AD21;
}

</style>

<section id=\"searchBar\" class=\"my-5 py-5 py-lg-0\">
  <div class=\"row\">
    <div class=\"container \">
        <div id=\"sss\" class=\"col-12 py-5 col-xl-9\" >
            <div class=\"search\">
                <input id=\"ent\" type=\"text\" class=\"searchTerm\" 
                placeholder=\"Recherche rapide...\">
                <button type=\"submit\" id=\"searchBut\" class=\"searchButton\">
                  <i class=\"fa fa-search\"></i>
                </button>
            </div>
        </div> 
    </div> 
  </div> 


  <div id=\"docker\" class=\"container py-3\" >  <div>
   

</section>

";
        // line 65
        $this->displayBlock('script', $context, $blocks);
    }

    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 66
        echo "  <script>
      \$(\"#searchBut\").click(function(e) {
         
          var url='http://localhost/ARAM/homes/searchForm';
          var el = \$(\"#ent\").val();
          var response = \$('#docker');
          console.log(el);
          console.log(typeof el);
          if(el!==''){
              \$.ajax({

                type: 'POST',
                url: url, 
                data: {
                  q: el
                },
                dataType: 'json',
                success: function(data) {

                  if (data == 0){
                        
                      var nothing=`
                      <div id=\"res\" 
                      class=\" orange-text pl-4 ml-xl-3  pt-3 font-weight-bold\">
                         <span > Desolé on n'as pas trouvé d'élements dans nos bases </span> 
                       </div>`;

                      response.html(nothing);
                
                  }else {
                      response.empty();
                        \$.each(data, function(index, obj) {
                            var result=`<div id=\"res\"  
                            class=\" blue-text pl-4 ml-xl-3 pt-3\" >
                                            <span class=\"  blue-text font-weight-bold mr-0\">\${index}:</span><a href=\"\${'http://localhost/ARAM/homes/'+obj.methodPageName}\" class=\" blue-text pl-2 font-weight-bold\">https://aram-clinic.com/\${obj.methodPageName}</a><br>
                                              <span class=\" font-small black-text pl-5\">Description:\${obj.description}</span><br>
                                        </div>`;
                            response.append(result);  
                        });

                  }
                },
                error: function(data) {
                  response.html(\"ajax post failure\");
                }

              });

          }else{
                  var nodata=`
                  <div id=\"res\"
                  class=\" orange-text pl-4 ml-xl-3 pt-3 font-weight-bold\">
                      <span > Merci d'inserer des élements de recherche </span>
                   </div>`;

                response.html(nodata);
          }
      }); 

        searchbarre=document.getElementById(\"sss\")

        window.addEventListener('resize', function(event){
         
          var w = parseFloat(window.innerWidth);
            if(w > 1190 && w < 1800 ){
             
              searchbarre.style.width = 62 + '%';

            }else{

              searchbarre.style.width = 100 + '%';
          
            }

        });
  </script>
";
    }

    public function getTemplateName()
    {
        return "/homes/data/index/fr/searchForm.twig";
    }

    public function getDebugInfo()
    {
        return array (  111 => 66,  104 => 65,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- search form-->

<style>

#searchBar .search {
  width:100%;
  position: static;
  display: flex;
}

#searchBar .searchTerm {
  width: 100%;
  border: 3px solid #010203;
  border-right: none;
  padding: 5px;
  height: 56px;
  border-radius: 5px 0 0 5px;
  outline: none;
  color: #010203;
}

#searchBar .searchTerm:focus{
  color: #010203;
}

#searchBar .searchButton {
  width: 60px;
  height: 56px;
  border: 1px solid #010203;
  background: #010203;
  text-align: center;
  color: #E1AD21;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  font-size: 20px;
}

#searchBar .searchButton i{
  color: #E1AD21;
}

</style>

<section id=\"searchBar\" class=\"my-5 py-5 py-lg-0\">
  <div class=\"row\">
    <div class=\"container \">
        <div id=\"sss\" class=\"col-12 py-5 col-xl-9\" >
            <div class=\"search\">
                <input id=\"ent\" type=\"text\" class=\"searchTerm\" 
                placeholder=\"Recherche rapide...\">
                <button type=\"submit\" id=\"searchBut\" class=\"searchButton\">
                  <i class=\"fa fa-search\"></i>
                </button>
            </div>
        </div> 
    </div> 
  </div> 


  <div id=\"docker\" class=\"container py-3\" >  <div>
   

</section>

{% block script %}
  <script>
      \$(\"#searchBut\").click(function(e) {
         
          var url='http://localhost/ARAM/homes/searchForm';
          var el = \$(\"#ent\").val();
          var response = \$('#docker');
          console.log(el);
          console.log(typeof el);
          if(el!==''){
              \$.ajax({

                type: 'POST',
                url: url, 
                data: {
                  q: el
                },
                dataType: 'json',
                success: function(data) {

                  if (data == 0){
                        
                      var nothing=`
                      <div id=\"res\" 
                      class=\" orange-text pl-4 ml-xl-3  pt-3 font-weight-bold\">
                         <span > Desolé on n'as pas trouvé d'élements dans nos bases </span> 
                       </div>`;

                      response.html(nothing);
                
                  }else {
                      response.empty();
                        \$.each(data, function(index, obj) {
                            var result=`<div id=\"res\"  
                            class=\" blue-text pl-4 ml-xl-3 pt-3\" >
                                            <span class=\"  blue-text font-weight-bold mr-0\">\${index}:</span><a href=\"\${'http://localhost/ARAM/homes/'+obj.methodPageName}\" class=\" blue-text pl-2 font-weight-bold\">https://aram-clinic.com/\${obj.methodPageName}</a><br>
                                              <span class=\" font-small black-text pl-5\">Description:\${obj.description}</span><br>
                                        </div>`;
                            response.append(result);  
                        });

                  }
                },
                error: function(data) {
                  response.html(\"ajax post failure\");
                }

              });

          }else{
                  var nodata=`
                  <div id=\"res\"
                  class=\" orange-text pl-4 ml-xl-3 pt-3 font-weight-bold\">
                      <span > Merci d'inserer des élements de recherche </span>
                   </div>`;

                response.html(nodata);
          }
      }); 

        searchbarre=document.getElementById(\"sss\")

        window.addEventListener('resize', function(event){
         
          var w = parseFloat(window.innerWidth);
            if(w > 1190 && w < 1800 ){
             
              searchbarre.style.width = 62 + '%';

            }else{

              searchbarre.style.width = 100 + '%';
          
            }

        });
  </script>
{% endblock  %}
", "/homes/data/index/fr/searchForm.twig", "/var/www/tndevfactory/public_html/ARAM/app/views/homes/data/index/fr/searchForm.twig");
    }
}
