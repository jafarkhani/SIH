<?php

/* common/header.twig */
class __TwigTemplate_137f571bba2006fa6da08d83d325e12cfa1bff8af2ab5099b54b7718918f653f extends Twig_Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\">
<head>
<meta charset=\"UTF-8\" />
<title>";
        // line 5
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
<base href=\"";
        // line 6
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\" />
<script type=\"text/javascript\" src=\"view/javascript/jquery/jquery-2.1.1.min.js\"></script>
";
        // line 8
        if (((isset($context["direction"]) ? $context["direction"] : null) == "rtl")) {
            // line 9
            echo "<link href=\"view/javascript/bootstrap/css/bootstrap-rtl.css\" rel=\"stylesheet\" media=\"screen\" />
";
        } else {
            // line 11
            echo "<link href=\"view/javascript/bootstrap/css/bootstrap.css\" rel=\"stylesheet\" media=\"screen\" />
";
        }
        // line 13
        echo "<script src=\"view/javascript/bootstrap/js/bootstrap.js\" type=\"text/javascript\"></script>
";
        // line 14
        if (((isset($context["direction"]) ? $context["direction"] : null) == "rtl")) {
            // line 15
            echo "<link href=\"view/javascript/font-awesome/css/font-awesome-rtl.min.css\" type=\"text/css\" rel=\"stylesheet\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"view/stylesheet/stylesheet-rtl.css\" />
";
        } else {
            // line 18
            echo "<link href=\"view/javascript/font-awesome/css/font-awesome.min.css\" type=\"text/css\" rel=\"stylesheet\" />
<link href=\"//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700\" rel=\"stylesheet\" type=\"text/css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"view/stylesheet/stylesheet.css\" />
";
        }
        // line 22
        echo "</head>
<body>";
    }

    public function getTemplateName()
    {
        return "common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 22,  59 => 18,  54 => 15,  52 => 14,  49 => 13,  45 => 11,  41 => 9,  39 => 8,  34 => 6,  30 => 5,  22 => 2,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html dir="{{ direction }}" lang="{{ lang }}">*/
/* <head>*/
/* <meta charset="UTF-8" />*/
/* <title>{{ title }}</title>*/
/* <base href="{{ base }}" />*/
/* <script type="text/javascript" src="view/javascript/jquery/jquery-2.1.1.min.js"></script>*/
/* {% if direction == 'rtl' %}*/
/* <link href="view/javascript/bootstrap/css/bootstrap-rtl.css" rel="stylesheet" media="screen" />*/
/* {% else %}*/
/* <link href="view/javascript/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen" />*/
/* {% endif %}*/
/* <script src="view/javascript/bootstrap/js/bootstrap.js" type="text/javascript"></script>*/
/* {% if direction == 'rtl' %}*/
/* <link href="view/javascript/font-awesome/css/font-awesome-rtl.min.css" type="text/css" rel="stylesheet" />*/
/* <link rel="stylesheet" type="text/css" href="view/stylesheet/stylesheet-rtl.css" />*/
/* {% else %}*/
/* <link href="view/javascript/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet" />*/
/* <link href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css" />*/
/* <link rel="stylesheet" type="text/css" href="view/stylesheet/stylesheet.css" />*/
/* {% endif %}*/
/* </head>*/
/* <body>*/
