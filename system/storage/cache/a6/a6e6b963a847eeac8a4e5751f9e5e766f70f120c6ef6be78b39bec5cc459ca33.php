<?php

/* default/template/common/footer.twig */
class __TwigTemplate_6d5fa3d99a3170780f8fa65d027d713dce45b863183e49fa0d32e378014437ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<footer>
  <div class=\"container\">
    <div class=\"row\">
      ";
        // line 4
        if ((isset($context["informations"]) ? $context["informations"] : null)) {
            // line 5
            echo "      <div class=\"col-sm-3\">
        <h5>";
            // line 6
            echo (isset($context["text_information"]) ? $context["text_information"] : null);
            echo "</h5>
        <ul class=\"list-unstyled\">
         ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 9
                echo "          <li><a href=\"";
                echo $this->getAttribute($context["information"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "        </ul>
      </div>
      ";
        }
        // line 14
        echo "      <div class=\"col-sm-3\">
        <h5>";
        // line 15
        echo (isset($context["text_service"]) ? $context["text_service"] : null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 17
        echo (isset($context["contact"]) ? $context["contact"] : null);
        echo "\">";
        echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 18
        echo (isset($context["return"]) ? $context["return"] : null);
        echo "\">";
        echo (isset($context["text_return"]) ? $context["text_return"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 19
        echo (isset($context["sitemap"]) ? $context["sitemap"] : null);
        echo "\">";
        echo (isset($context["text_sitemap"]) ? $context["text_sitemap"] : null);
        echo "</a></li>
        </ul>
      </div>
      <div class=\"col-sm-3\">
        <h5>";
        // line 23
        echo (isset($context["text_extra"]) ? $context["text_extra"] : null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 25
        echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
        echo "\">";
        echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 26
        echo (isset($context["voucher"]) ? $context["voucher"] : null);
        echo "\">";
        echo (isset($context["text_voucher"]) ? $context["text_voucher"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 27
        echo (isset($context["affiliate"]) ? $context["affiliate"] : null);
        echo "\">";
        echo (isset($context["text_affiliate"]) ? $context["text_affiliate"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 28
        echo (isset($context["special"]) ? $context["special"] : null);
        echo "\">";
        echo (isset($context["text_special"]) ? $context["text_special"] : null);
        echo "</a></li>
        </ul>
      </div>
      <div class=\"col-sm-3\">
        <h5>";
        // line 32
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 34
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\">";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 35
        echo (isset($context["order"]) ? $context["order"] : null);
        echo "\">";
        echo (isset($context["text_order"]) ? $context["text_order"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 36
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\">";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 37
        echo (isset($context["newsletter"]) ? $context["newsletter"] : null);
        echo "\">";
        echo (isset($context["text_newsletter"]) ? $context["text_newsletter"] : null);
        echo "</a></li>
        </ul>
      </div>
    </div>
    <hr>
    <p id=\"powered\">";
        // line 42
        echo (isset($context["powered"]) ? $context["powered"] : null);
        echo "</p>
  </div>
</footer>
";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 46
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->

<style type=\"text/css\">
\t#ToTopHover {background: url('image/totop.png') no-repeat left -51px;cursor: pointer;width: 51px;height: 51px;display: block;overflow: hidden;float: left;opacity: 0;-moz-opacity: 0;filter: alpha(opacity=0);}
\t#ToTop {display: none;text-decoration: none;position: fixed;bottom: 20px;right: 20px;overflow: hidden;width: 51px;height: 51px;border: none;text-indent: -999px;background: url('image/totop.png') no-repeat left top;}
</style>
<script type=\"text/javascript\">
\tjQuery(document).ready(function(){\$().UItoTop({easingType:'easeOutQuint'});});
\t(function(\$){
\t\t\$.fn.UItoTop = function(options) {
\t\t\tvar defaults = {
\t\t\t\ttext: 'To Top',
\t\t\t\tmin: 200,
\t\t\t\tinDelay:600,
\t\t\t\toutDelay:400,
\t\t\t\tcontainerID: 'ToTop',
\t\t\t\tcontainerHoverID: 'ToTopHover',
\t\t\t\tscrollSpeed: 1200,
\t\t\t\teasingType: 'linear'
\t\t\t};
\t\t\tvar settings = \$.extend(defaults, options);
\t\t\tvar containerIDhash = '#' + settings.containerID;
\t\t\tvar containerHoverIDHash = '#'+settings.containerHoverID;
\t\t\t\$('body').append('<a id=\"'+settings.containerID+'\">'+settings.text+'</a>');
\t\t\t\$(containerIDhash).hide().click(function(){
\t\t\t\t\$('html, body').animate({scrollTop: 0}, settings.scrollSpeed);
\t\t\t\tevent.preventDefault();
\t\t\t})
\t\t\t.prepend('<span id=\"'+settings.containerHoverID+'\"></span>')
\t\t\t.hover(function() {
\t\t\t\t\t\$(containerHoverIDHash, this).stop().animate({
\t\t\t\t\t\t'opacity': 1
\t\t\t\t\t}, 600, 'linear');
\t\t\t\t}, function() { 
\t\t\t\t\t\$(containerHoverIDHash, this).stop().animate({
\t\t\t\t\t\t'opacity': 0
\t\t\t\t\t}, 700, 'linear');
\t\t\t\t});\t\t\t
\t\t\t\$(window).scroll(function() {
\t\t\t\tvar sd = \$(window).scrollTop();
\t\t\t\tif(typeof document.body.style.maxHeight === \"undefined\") {
\t\t\t\t\t\$(containerIDhash).css({
\t\t\t\t\t\t'position': 'absolute',
\t\t\t\t\t\t'top': \$(window).scrollTop() + \$(window).height() - 50
\t\t\t\t\t});
\t\t\t\t}
\t\t\t\tif ( sd > settings.min ) 
\t\t\t\t\t\$(containerIDhash).fadeIn(settings.inDelay);
\t\t\t\telse 
\t\t\t\t\t\$(containerIDhash).fadeOut(settings.Outdelay);
\t\t\t});
\t};
\t})(jQuery);
</script>
\t\t\t
</body></html>";
    }

    public function getTemplateName()
    {
        return "default/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 48,  158 => 46,  154 => 45,  148 => 42,  138 => 37,  132 => 36,  126 => 35,  120 => 34,  115 => 32,  106 => 28,  100 => 27,  94 => 26,  88 => 25,  83 => 23,  74 => 19,  68 => 18,  62 => 17,  57 => 15,  54 => 14,  49 => 11,  38 => 9,  34 => 8,  29 => 6,  26 => 5,  24 => 4,  19 => 1,);
    }
}
/* <footer>*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       {% if informations %}*/
/*       <div class="col-sm-3">*/
/*         <h5>{{ text_information }}</h5>*/
/*         <ul class="list-unstyled">*/
/*          {% for information in informations %}*/
/*           <li><a href="{{ information.href }}">{{ information.title }}</a></li>*/
/*           {% endfor %}*/
/*         </ul>*/
/*       </div>*/
/*       {% endif %}*/
/*       <div class="col-sm-3">*/
/*         <h5>{{ text_service }}</h5>*/
/*         <ul class="list-unstyled">*/
/*           <li><a href="{{ contact }}">{{ text_contact }}</a></li>*/
/*           <li><a href="{{ return }}">{{ text_return }}</a></li>*/
/*           <li><a href="{{ sitemap }}">{{ text_sitemap }}</a></li>*/
/*         </ul>*/
/*       </div>*/
/*       <div class="col-sm-3">*/
/*         <h5>{{ text_extra }}</h5>*/
/*         <ul class="list-unstyled">*/
/*           <li><a href="{{ manufacturer }}">{{ text_manufacturer }}</a></li>*/
/*           <li><a href="{{ voucher }}">{{ text_voucher }}</a></li>*/
/*           <li><a href="{{ affiliate }}">{{ text_affiliate }}</a></li>*/
/*           <li><a href="{{ special }}">{{ text_special }}</a></li>*/
/*         </ul>*/
/*       </div>*/
/*       <div class="col-sm-3">*/
/*         <h5>{{ text_account }}</h5>*/
/*         <ul class="list-unstyled">*/
/*           <li><a href="{{ account }}">{{ text_account }}</a></li>*/
/*           <li><a href="{{ order }}">{{ text_order }}</a></li>*/
/*           <li><a href="{{ wishlist }}">{{ text_wishlist }}</a></li>*/
/*           <li><a href="{{ newsletter }}">{{ text_newsletter }}</a></li>*/
/*         </ul>*/
/*       </div>*/
/*     </div>*/
/*     <hr>*/
/*     <p id="powered">{{ powered }}</p>*/
/*   </div>*/
/* </footer>*/
/* {% for script in scripts %}*/
/* <script src="{{ script }}" type="text/javascript"></script>*/
/* {% endfor %}*/
/* <!--*/
/* OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.*/
/* Please donate via PayPal to donate@opencart.com*/
/* //-->*/
/* */
/* <style type="text/css">*/
/* 	#ToTopHover {background: url('image/totop.png') no-repeat left -51px;cursor: pointer;width: 51px;height: 51px;display: block;overflow: hidden;float: left;opacity: 0;-moz-opacity: 0;filter: alpha(opacity=0);}*/
/* 	#ToTop {display: none;text-decoration: none;position: fixed;bottom: 20px;right: 20px;overflow: hidden;width: 51px;height: 51px;border: none;text-indent: -999px;background: url('image/totop.png') no-repeat left top;}*/
/* </style>*/
/* <script type="text/javascript">*/
/* 	jQuery(document).ready(function(){$().UItoTop({easingType:'easeOutQuint'});});*/
/* 	(function($){*/
/* 		$.fn.UItoTop = function(options) {*/
/* 			var defaults = {*/
/* 				text: 'To Top',*/
/* 				min: 200,*/
/* 				inDelay:600,*/
/* 				outDelay:400,*/
/* 				containerID: 'ToTop',*/
/* 				containerHoverID: 'ToTopHover',*/
/* 				scrollSpeed: 1200,*/
/* 				easingType: 'linear'*/
/* 			};*/
/* 			var settings = $.extend(defaults, options);*/
/* 			var containerIDhash = '#' + settings.containerID;*/
/* 			var containerHoverIDHash = '#'+settings.containerHoverID;*/
/* 			$('body').append('<a id="'+settings.containerID+'">'+settings.text+'</a>');*/
/* 			$(containerIDhash).hide().click(function(){*/
/* 				$('html, body').animate({scrollTop: 0}, settings.scrollSpeed);*/
/* 				event.preventDefault();*/
/* 			})*/
/* 			.prepend('<span id="'+settings.containerHoverID+'"></span>')*/
/* 			.hover(function() {*/
/* 					$(containerHoverIDHash, this).stop().animate({*/
/* 						'opacity': 1*/
/* 					}, 600, 'linear');*/
/* 				}, function() { */
/* 					$(containerHoverIDHash, this).stop().animate({*/
/* 						'opacity': 0*/
/* 					}, 700, 'linear');*/
/* 				});			*/
/* 			$(window).scroll(function() {*/
/* 				var sd = $(window).scrollTop();*/
/* 				if(typeof document.body.style.maxHeight === "undefined") {*/
/* 					$(containerIDhash).css({*/
/* 						'position': 'absolute',*/
/* 						'top': $(window).scrollTop() + $(window).height() - 50*/
/* 					});*/
/* 				}*/
/* 				if ( sd > settings.min ) */
/* 					$(containerIDhash).fadeIn(settings.inDelay);*/
/* 				else */
/* 					$(containerIDhash).fadeOut(settings.Outdelay);*/
/* 			});*/
/* 	};*/
/* 	})(jQuery);*/
/* </script>*/
/* 			*/
/* </body></html>*/
