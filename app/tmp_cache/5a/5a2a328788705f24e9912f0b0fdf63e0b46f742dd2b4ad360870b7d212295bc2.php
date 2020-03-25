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

/* /homes/data/index/ar/photoGallerySectionBeforeAfter.twig */
class __TwigTemplate_1289b6a097e94a480df22a649844a90effeac31de12fa7d96a3bd2861a851d60 extends Template
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
        echo "<!-- PHOTO GALLERY BEFORE AFTER-->

  <style>

.ba-slider {
  position: relative;
  overflow: hidden;
}
.ba-slider img {
  width: 100%;
  display: block;
}
.resize {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 50%;
  overflow: hidden;
}
.handle {
  /* Thin line seperator */
  position: absolute;
  left: 50%;
  top: 0;
  bottom: 0;
  width: 4px;
  margin-left: -2px;
  background: rgba(0, 0, 0, 0.5);
  cursor: ew-resize;
}
.handle:after {
  /* Big orange knob  */
  position: absolute;
  top: 50%;
  width: 50px;
  height: 50px;
  margin: -32px 0 0 -32px;
  content: '\\21d4';
  color: #E1AD21;
  font-weight: bold;
  font-size: 26px;
  text-align: center;
  line-height: 45px;
  background: #000;
  /* @orange */
  border: 1px solid #E1AD21;
  /* darken(@orange, 5%) */
  border-radius: 50%;
  transition: all 0.3s ease;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3), inset 0 2px 0 rgba(255, 255, 255, 0.5), inset 0 60px 50px -30px #000;
  /* lighten(@orange, 20%)*/
}
.draggable:after {
  width: 48px;
  height: 48px;
  margin: -24px 0 0 -24px;
  line-height: 48px;
  font-size: 30px;
}


</style>
  
  
  
  
  <section id=\"galleryBeforeAfter\" class=\"py-5\">
   
       <div class=\"container\">
          <h1 class=\"text-center\">PHOTOS AVANT APRES </h1>
           <p class=\"text-center\">Voyez les résultats</p>

          <div class=\"row mb-2\">

                <div class=\"col-lg-4 mb-2\" data-aos=\"zoom-in-right\" >
                    <div class=\"ba-slider\">
                        <img src=\"https://source.unsplash.com/random/1800x1800\" alt=\"\">       
                        <div class=\"resize\">
                          <img src=\"https://source.unsplash.com/random/1800x1801\" alt=\"\">
                        </div>
                        <span class=\"handle\"></span>
                    </div>
                </div>
                

                <div class=\"col-lg-4 mb-2\" data-aos=\"zoom-in\">
                    <div class=\"ba-slider\">
                        <img src=\"https://source.unsplash.com/random/1800x1803\" alt=\"\">       
                        <div class=\"resize\">
                          <img src=\"https://source.unsplash.com/random/1800x1804\" alt=\"\">
                        </div>
                        <span class=\"handle\"></span>
                    </div>
                </div>

                <div class=\"col-lg-4\" data-aos=\"zoom-in-left\">
                    <div class=\"ba-slider\">
                        <img src=\"https://source.unsplash.com/random/1800x1802\" alt=\"\">       
                        <div class=\"resize\">
                          <img src=\"https://source.unsplash.com/random/1800x1805\" alt=\"\">
                        </div>
                        <span class=\"handle\"></span>
                    </div>
                </div>

          </div>
          <div class=\"row\">

                <div class=\"col-lg-4 mb-2\" data-aos=\"zoom-in-right\">
                    <div class=\"ba-slider\">
                        <img src=\"https://source.unsplash.com/random/1800x1800\" alt=\"\">       
                        <div class=\"resize\">
                          <img src=\"https://source.unsplash.com/random/1800x1801\" alt=\"\">
                        </div>
                        <span class=\"handle\"></span>
                    </div>
                </div>
                

                <div class=\"col-lg-4 mb-2\" data-aos=\"zoom\">
                    <div class=\"ba-slider\">
                        <img src=\"https://source.unsplash.com/random/1800x1803\" alt=\"\">       
                        <div class=\"resize\">
                          <img src=\"https://source.unsplash.com/random/1800x1804\" alt=\"\">
                        </div>
                        <span class=\"handle\"></span>
                    </div>
                </div>

                <div class=\"col-lg-4\" data-aos=\"zoom-in-left\">
                    <div class=\"ba-slider\">
                        <img src=\"https://source.unsplash.com/random/1800x1802\" alt=\"\">       
                        <div class=\"resize\">
                          <img src=\"https://source.unsplash.com/random/1800x1805\" alt=\"\">
                        </div>
                        <span class=\"handle\"></span>
                    </div>
                </div>

          </div>
      </div>

  </section>

  ";
        // line 146
        $this->displayBlock('script', $context, $blocks);
    }

    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 147
        echo "  <script>
     // Call & init
\$(document).ready(function(){
  \$('.ba-slider').each(function(){
    var cur = \$(this);
    // Adjust the slider
    var width = cur.width()+'px';
    cur.find('.resize img').css('width', width);
    // Bind dragging events
    drags(cur.find('.handle'), cur.find('.resize'), cur);
  });
});

// Update sliders on resize. 
// Because we all do this: i.imgur.com/YkbaV.gif
\$(window).resize(function(){
  \$('.ba-slider').each(function(){
    var cur = \$(this);
    var width = cur.width()+'px';
    cur.find('.resize img').css('width', width);
  });
});

function drags(dragElement, resizeElement, container) {
\t
  // Initialize the dragging event on mousedown.
  dragElement.on('mousedown touchstart', function(e) {
    
    dragElement.addClass('draggable');
    resizeElement.addClass('resizable');
    
    // Check if it's a mouse or touch event and pass along the correct value
    var startX = (e.pageX) ? e.pageX : e.originalEvent.touches[0].pageX;
    
    // Get the initial position
    var dragWidth = dragElement.outerWidth(),
        posX = dragElement.offset().left + dragWidth - startX,
        containerOffset = container.offset().left,
        containerWidth = container.outerWidth();
 
    // Set limits
    minLeft = containerOffset + 10;
    maxLeft = containerOffset + containerWidth - dragWidth - 10;
    
    // Calculate the dragging distance on mousemove.
    dragElement.parents().on(\"mousemove touchmove\", function(e) {
    \t
      // Check if it's a mouse or touch event and pass along the correct value
      var moveX = (e.pageX) ? e.pageX : e.originalEvent.touches[0].pageX;
      
      leftValue = moveX + posX - dragWidth;
      
      // Prevent going off limits
      if ( leftValue < minLeft) {
        leftValue = minLeft;
      } else if (leftValue > maxLeft) {
        leftValue = maxLeft;
      }
      
      // Translate the handle's left value to masked divs width.
      widthValue = (leftValue + dragWidth/2 - containerOffset)*100/containerWidth+'%';
\t\t\t
      // Set the new values for the slider and the handle. 
      // Bind mouseup events to stop dragging.
      \$('.draggable').css('left', widthValue).on('mouseup touchend touchcancel', function () {
        \$(this).removeClass('draggable');
        resizeElement.removeClass('resizable');
      });
      \$('.resizable').css('width', widthValue);
    }).on('mouseup touchend touchcancel', function(){
      dragElement.removeClass('draggable');
      resizeElement.removeClass('resizable');
    });
    e.preventDefault();
  }).on('mouseup touchend touchcancel', function(e){
    dragElement.removeClass('draggable');
    resizeElement.removeClass('resizable');
  });
}

  </script>
";
    }

    public function getTemplateName()
    {
        return "/homes/data/index/ar/photoGallerySectionBeforeAfter.twig";
    }

    public function getDebugInfo()
    {
        return array (  192 => 147,  185 => 146,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- PHOTO GALLERY BEFORE AFTER-->

  <style>

.ba-slider {
  position: relative;
  overflow: hidden;
}
.ba-slider img {
  width: 100%;
  display: block;
}
.resize {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 50%;
  overflow: hidden;
}
.handle {
  /* Thin line seperator */
  position: absolute;
  left: 50%;
  top: 0;
  bottom: 0;
  width: 4px;
  margin-left: -2px;
  background: rgba(0, 0, 0, 0.5);
  cursor: ew-resize;
}
.handle:after {
  /* Big orange knob  */
  position: absolute;
  top: 50%;
  width: 50px;
  height: 50px;
  margin: -32px 0 0 -32px;
  content: '\\21d4';
  color: #E1AD21;
  font-weight: bold;
  font-size: 26px;
  text-align: center;
  line-height: 45px;
  background: #000;
  /* @orange */
  border: 1px solid #E1AD21;
  /* darken(@orange, 5%) */
  border-radius: 50%;
  transition: all 0.3s ease;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3), inset 0 2px 0 rgba(255, 255, 255, 0.5), inset 0 60px 50px -30px #000;
  /* lighten(@orange, 20%)*/
}
.draggable:after {
  width: 48px;
  height: 48px;
  margin: -24px 0 0 -24px;
  line-height: 48px;
  font-size: 30px;
}


</style>
  
  
  
  
  <section id=\"galleryBeforeAfter\" class=\"py-5\">
   
       <div class=\"container\">
          <h1 class=\"text-center\">PHOTOS AVANT APRES </h1>
           <p class=\"text-center\">Voyez les résultats</p>

          <div class=\"row mb-2\">

                <div class=\"col-lg-4 mb-2\" data-aos=\"zoom-in-right\" >
                    <div class=\"ba-slider\">
                        <img src=\"https://source.unsplash.com/random/1800x1800\" alt=\"\">       
                        <div class=\"resize\">
                          <img src=\"https://source.unsplash.com/random/1800x1801\" alt=\"\">
                        </div>
                        <span class=\"handle\"></span>
                    </div>
                </div>
                

                <div class=\"col-lg-4 mb-2\" data-aos=\"zoom-in\">
                    <div class=\"ba-slider\">
                        <img src=\"https://source.unsplash.com/random/1800x1803\" alt=\"\">       
                        <div class=\"resize\">
                          <img src=\"https://source.unsplash.com/random/1800x1804\" alt=\"\">
                        </div>
                        <span class=\"handle\"></span>
                    </div>
                </div>

                <div class=\"col-lg-4\" data-aos=\"zoom-in-left\">
                    <div class=\"ba-slider\">
                        <img src=\"https://source.unsplash.com/random/1800x1802\" alt=\"\">       
                        <div class=\"resize\">
                          <img src=\"https://source.unsplash.com/random/1800x1805\" alt=\"\">
                        </div>
                        <span class=\"handle\"></span>
                    </div>
                </div>

          </div>
          <div class=\"row\">

                <div class=\"col-lg-4 mb-2\" data-aos=\"zoom-in-right\">
                    <div class=\"ba-slider\">
                        <img src=\"https://source.unsplash.com/random/1800x1800\" alt=\"\">       
                        <div class=\"resize\">
                          <img src=\"https://source.unsplash.com/random/1800x1801\" alt=\"\">
                        </div>
                        <span class=\"handle\"></span>
                    </div>
                </div>
                

                <div class=\"col-lg-4 mb-2\" data-aos=\"zoom\">
                    <div class=\"ba-slider\">
                        <img src=\"https://source.unsplash.com/random/1800x1803\" alt=\"\">       
                        <div class=\"resize\">
                          <img src=\"https://source.unsplash.com/random/1800x1804\" alt=\"\">
                        </div>
                        <span class=\"handle\"></span>
                    </div>
                </div>

                <div class=\"col-lg-4\" data-aos=\"zoom-in-left\">
                    <div class=\"ba-slider\">
                        <img src=\"https://source.unsplash.com/random/1800x1802\" alt=\"\">       
                        <div class=\"resize\">
                          <img src=\"https://source.unsplash.com/random/1800x1805\" alt=\"\">
                        </div>
                        <span class=\"handle\"></span>
                    </div>
                </div>

          </div>
      </div>

  </section>

  {% block script %}
  <script>
     // Call & init
\$(document).ready(function(){
  \$('.ba-slider').each(function(){
    var cur = \$(this);
    // Adjust the slider
    var width = cur.width()+'px';
    cur.find('.resize img').css('width', width);
    // Bind dragging events
    drags(cur.find('.handle'), cur.find('.resize'), cur);
  });
});

// Update sliders on resize. 
// Because we all do this: i.imgur.com/YkbaV.gif
\$(window).resize(function(){
  \$('.ba-slider').each(function(){
    var cur = \$(this);
    var width = cur.width()+'px';
    cur.find('.resize img').css('width', width);
  });
});

function drags(dragElement, resizeElement, container) {
\t
  // Initialize the dragging event on mousedown.
  dragElement.on('mousedown touchstart', function(e) {
    
    dragElement.addClass('draggable');
    resizeElement.addClass('resizable');
    
    // Check if it's a mouse or touch event and pass along the correct value
    var startX = (e.pageX) ? e.pageX : e.originalEvent.touches[0].pageX;
    
    // Get the initial position
    var dragWidth = dragElement.outerWidth(),
        posX = dragElement.offset().left + dragWidth - startX,
        containerOffset = container.offset().left,
        containerWidth = container.outerWidth();
 
    // Set limits
    minLeft = containerOffset + 10;
    maxLeft = containerOffset + containerWidth - dragWidth - 10;
    
    // Calculate the dragging distance on mousemove.
    dragElement.parents().on(\"mousemove touchmove\", function(e) {
    \t
      // Check if it's a mouse or touch event and pass along the correct value
      var moveX = (e.pageX) ? e.pageX : e.originalEvent.touches[0].pageX;
      
      leftValue = moveX + posX - dragWidth;
      
      // Prevent going off limits
      if ( leftValue < minLeft) {
        leftValue = minLeft;
      } else if (leftValue > maxLeft) {
        leftValue = maxLeft;
      }
      
      // Translate the handle's left value to masked divs width.
      widthValue = (leftValue + dragWidth/2 - containerOffset)*100/containerWidth+'%';
\t\t\t
      // Set the new values for the slider and the handle. 
      // Bind mouseup events to stop dragging.
      \$('.draggable').css('left', widthValue).on('mouseup touchend touchcancel', function () {
        \$(this).removeClass('draggable');
        resizeElement.removeClass('resizable');
      });
      \$('.resizable').css('width', widthValue);
    }).on('mouseup touchend touchcancel', function(){
      dragElement.removeClass('draggable');
      resizeElement.removeClass('resizable');
    });
    e.preventDefault();
  }).on('mouseup touchend touchcancel', function(e){
    dragElement.removeClass('draggable');
    resizeElement.removeClass('resizable');
  });
}

  </script>
{% endblock  %}
", "/homes/data/index/ar/photoGallerySectionBeforeAfter.twig", "/var/www/tndevfactory/public_html/ARAM/app/views/homes/data/index/ar/photoGallerySectionBeforeAfter.twig");
    }
}
