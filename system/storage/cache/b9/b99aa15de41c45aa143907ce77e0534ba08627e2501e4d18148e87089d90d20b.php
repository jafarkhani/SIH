<?php

/* common/basic.twig */
class __TwigTemplate_6f48e94a584ed9710387ecf0674057f61b7550feadfd9fa4f7faa9b17dc99082 extends Twig_Template
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
        echo "<div class=\"form-group\">
  <label for=\"input-captcha\">";
        // line 2
        echo (isset($context["entry_captcha"]) ? $context["entry_captcha"] : null);
        echo "</label>
  <div class=\"input-group\"><span class=\"input-group-addon\"><i class=\"fa fa-question\"></i></span>
    <input type=\"text\" name=\"captcha\" placeholder=\"";
        // line 4
        echo (isset($context["entry_captcha"]) ? $context["entry_captcha"] : null);
        echo "\" id=\"input-captcha\" class=\"form-control\" />
    <div class=\"pull-left\">
\t\t<img src=\"";
        // line 6
        echo (isset($context["shop_root"]) ? $context["shop_root"] : null);
        echo "index.php?route=extension/captcha/basic/captcha\" alt=\"\" />
\t\t";
        // line 7
        if ((isset($context["error_captcha"]) ? $context["error_captcha"] : null)) {
            echo "</div><div class=\"pull-right\">
\t\t<div class=\"text-danger\" style=\"padding:10px 0 0 0;\">";
            // line 8
            echo (isset($context["error_captcha"]) ? $context["error_captcha"] : null);
            echo "</div>
\t\t";
        }
        // line 10
        echo "    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "common/basic.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 10,  40 => 8,  36 => 7,  32 => 6,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <div class="form-group">*/
/*   <label for="input-captcha">{{ entry_captcha }}</label>*/
/*   <div class="input-group"><span class="input-group-addon"><i class="fa fa-question"></i></span>*/
/*     <input type="text" name="captcha" placeholder="{{ entry_captcha }}" id="input-captcha" class="form-control" />*/
/*     <div class="pull-left">*/
/* 		<img src="{{ shop_root }}index.php?route=extension/captcha/basic/captcha" alt="" />*/
/* 		{% if error_captcha %}</div><div class="pull-right">*/
/* 		<div class="text-danger" style="padding:10px 0 0 0;">{{ error_captcha }}</div>*/
/* 		{% endif %}*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
