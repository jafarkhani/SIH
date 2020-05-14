<?php

/* setting/setting.twig */
class __TwigTemplate_eae2fcfcf4b4279a0336341f276c80bdc804cdbf066b09fbe240e94431f210a5 extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" id=\"button-save\" form=\"form-setting\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" disabled=\"disabled\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\"> ";
        // line 16
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 17
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 21
        echo "    ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 22
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 26
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 28
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 31
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-setting\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 33
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "</a></li>
            <li><a href=\"#tab-store\" data-toggle=\"tab\">";
        // line 34
        echo (isset($context["tab_store"]) ? $context["tab_store"] : null);
        echo "</a></li>
            <li><a href=\"#tab-local\" data-toggle=\"tab\">";
        // line 35
        echo (isset($context["tab_local"]) ? $context["tab_local"] : null);
        echo "</a></li>
            <li><a href=\"#tab-option\" data-toggle=\"tab\">";
        // line 36
        echo (isset($context["tab_option"]) ? $context["tab_option"] : null);
        echo "</a></li>
            <li><a href=\"#tab-image\" data-toggle=\"tab\">";
        // line 37
        echo (isset($context["tab_image"]) ? $context["tab_image"] : null);
        echo "</a></li>
            <li><a href=\"#tab-mail\" data-toggle=\"tab\">";
        // line 38
        echo (isset($context["tab_mail"]) ? $context["tab_mail"] : null);
        echo "</a></li>
            <li><a href=\"#tab-server\" data-toggle=\"tab\">";
        // line 39
        echo (isset($context["tab_server"]) ? $context["tab_server"] : null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-title\">";
        // line 44
        echo (isset($context["entry_meta_title"]) ? $context["entry_meta_title"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_meta_title\" value=\"";
        // line 46
        echo (isset($context["config_meta_title"]) ? $context["config_meta_title"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_meta_title"]) ? $context["entry_meta_title"] : null);
        echo "\" id=\"input-meta-title\" class=\"form-control\" />
                  ";
        // line 47
        if ((isset($context["error_meta_title"]) ? $context["error_meta_title"] : null)) {
            // line 48
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_meta_title"]) ? $context["error_meta_title"] : null);
            echo "</div>
                  ";
        }
        // line 49
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-description\">";
        // line 52
        echo (isset($context["entry_meta_description"]) ? $context["entry_meta_description"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_description\" rows=\"5\" placeholder=\"";
        // line 54
        echo (isset($context["entry_meta_description"]) ? $context["entry_meta_description"] : null);
        echo "\" id=\"input-meta-description\" class=\"form-control\">";
        echo (isset($context["config_meta_description"]) ? $context["config_meta_description"] : null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword\">";
        // line 58
        echo (isset($context["entry_meta_keyword"]) ? $context["entry_meta_keyword"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_keyword\" rows=\"5\" placeholder=\"";
        // line 60
        echo (isset($context["entry_meta_keyword"]) ? $context["entry_meta_keyword"] : null);
        echo "\" id=\"input-meta-keyword\" class=\"form-control\">";
        echo (isset($context["config_meta_keyword"]) ? $context["config_meta_keyword"] : null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-theme\">";
        // line 64
        echo (isset($context["entry_theme"]) ? $context["entry_theme"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_theme\" id=\"input-theme\" class=\"form-control\">
                    
                    ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["themes"]) ? $context["themes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 69
            echo "                    ";
            if (($this->getAttribute($context["theme"], "value", array()) == (isset($context["config_theme"]) ? $context["config_theme"] : null))) {
                // line 70
                echo "                    
                    <option value=\"";
                // line 71
                echo $this->getAttribute($context["theme"], "value", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["theme"], "text", array());
                echo "</option>
                    
                    ";
            } else {
                // line 74
                echo "                    
                    <option value=\"";
                // line 75
                echo $this->getAttribute($context["theme"], "value", array());
                echo "\">";
                echo $this->getAttribute($context["theme"], "text", array());
                echo "</option>
                    
                    ";
            }
            // line 78
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "                  
                  </select>
                  <br />
                  <img src=\"\" alt=\"\" id=\"theme\" class=\"img-thumbnail\" /></div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-layout\">";
        // line 85
        echo (isset($context["entry_layout"]) ? $context["entry_layout"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_layout_id\" id=\"input-layout\" class=\"form-control\">
                    
                    ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["layouts"]) ? $context["layouts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
            // line 90
            echo "                    ";
            if (($this->getAttribute($context["layout"], "layout_id", array()) == (isset($context["config_layout_id"]) ? $context["config_layout_id"] : null))) {
                // line 91
                echo "                    
                    <option value=\"";
                // line 92
                echo $this->getAttribute($context["layout"], "layout_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["layout"], "name", array());
                echo "</option>
                    
                    ";
            } else {
                // line 95
                echo "                    
                    <option value=\"";
                // line 96
                echo $this->getAttribute($context["layout"], "layout_id", array());
                echo "\">";
                echo $this->getAttribute($context["layout"], "name", array());
                echo "</option>
                    
                    ";
            }
            // line 99
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "                  
                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-store\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 107
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_name\" value=\"";
        // line 109
        echo (isset($context["config_name"]) ? $context["config_name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                  ";
        // line 110
        if ((isset($context["error_name"]) ? $context["error_name"] : null)) {
            // line 111
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_name"]) ? $context["error_name"] : null);
            echo "</div>
                  ";
        }
        // line 112
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-owner\">";
        // line 115
        echo (isset($context["entry_owner"]) ? $context["entry_owner"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_owner\" value=\"";
        // line 117
        echo (isset($context["config_owner"]) ? $context["config_owner"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_owner"]) ? $context["entry_owner"] : null);
        echo "\" id=\"input-owner\" class=\"form-control\" />
                  ";
        // line 118
        if ((isset($context["error_owner"]) ? $context["error_owner"] : null)) {
            // line 119
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_owner"]) ? $context["error_owner"] : null);
            echo "</div>
                  ";
        }
        // line 120
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-address\">";
        // line 123
        echo (isset($context["entry_address"]) ? $context["entry_address"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_address\" placeholder=\"";
        // line 125
        echo (isset($context["entry_address"]) ? $context["entry_address"] : null);
        echo "\" rows=\"5\" id=\"input-address\" class=\"form-control\">";
        echo (isset($context["config_address"]) ? $context["config_address"] : null);
        echo "</textarea>
                  ";
        // line 126
        if ((isset($context["error_address"]) ? $context["error_address"] : null)) {
            // line 127
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_address"]) ? $context["error_address"] : null);
            echo "</div>
                  ";
        }
        // line 128
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-geocode\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 131
        echo (isset($context["help_geocode"]) ? $context["help_geocode"] : null);
        echo "\">";
        echo (isset($context["entry_geocode"]) ? $context["entry_geocode"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_geocode\" value=\"";
        // line 133
        echo (isset($context["config_geocode"]) ? $context["config_geocode"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_geocode"]) ? $context["entry_geocode"] : null);
        echo "\" id=\"input-geocode\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 137
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_email\" value=\"";
        // line 139
        echo (isset($context["config_email"]) ? $context["config_email"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\" id=\"input-email\" class=\"form-control\" />
                  ";
        // line 140
        if ((isset($context["error_email"]) ? $context["error_email"] : null)) {
            // line 141
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_email"]) ? $context["error_email"] : null);
            echo "</div>
                  ";
        }
        // line 142
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 145
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_telephone\" value=\"";
        // line 147
        echo (isset($context["config_telephone"]) ? $context["config_telephone"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "\" id=\"input-telephone\" class=\"form-control\" />
                  ";
        // line 148
        if ((isset($context["error_telephone"]) ? $context["error_telephone"] : null)) {
            // line 149
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_telephone"]) ? $context["error_telephone"] : null);
            echo "</div>
                  ";
        }
        // line 150
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-fax\">";
        // line 153
        echo (isset($context["entry_fax"]) ? $context["entry_fax"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_fax\" value=\"";
        // line 155
        echo (isset($context["config_fax"]) ? $context["config_fax"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_fax"]) ? $context["entry_fax"] : null);
        echo "\" id=\"input-fax\" class=\"form-control\" />
                </div>
              </div>              
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-image\">";
        // line 159
        echo (isset($context["entry_image"]) ? $context["entry_image"] : null);
        echo "</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 160
        echo (isset($context["thumb"]) ? $context["thumb"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_image\" value=\"";
        // line 161
        echo (isset($context["config_image"]) ? $context["config_image"] : null);
        echo "\" id=\"input-image\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-open\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 165
        echo (isset($context["help_open"]) ? $context["help_open"] : null);
        echo "\">";
        echo (isset($context["entry_open"]) ? $context["entry_open"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_open\" rows=\"5\" placeholder=\"";
        // line 167
        echo (isset($context["entry_open"]) ? $context["entry_open"] : null);
        echo "\" id=\"input-open\" class=\"form-control\">";
        echo (isset($context["config_open"]) ? $context["config_open"] : null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-comment\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 171
        echo (isset($context["help_comment"]) ? $context["help_comment"] : null);
        echo "\">";
        echo (isset($context["entry_comment"]) ? $context["entry_comment"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_comment\" rows=\"5\" placeholder=\"";
        // line 173
        echo (isset($context["entry_comment"]) ? $context["entry_comment"] : null);
        echo "\" id=\"input-comment\" class=\"form-control\">";
        echo (isset($context["config_comment"]) ? $context["config_comment"] : null);
        echo "</textarea>
                </div>
              </div>
              ";
        // line 176
        if ((isset($context["locations"]) ? $context["locations"] : null)) {
            // line 177
            echo "              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
            // line 178
            echo (isset($context["help_location"]) ? $context["help_location"] : null);
            echo "\">";
            echo (isset($context["entry_location"]) ? $context["entry_location"] : null);
            echo "</span></label>
                <div class=\"col-sm-10\"> ";
            // line 179
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["locations"]) ? $context["locations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 180
                echo "                  <div class=\"checkbox\">
                    <label> ";
                // line 181
                if (twig_in_filter($this->getAttribute($context["location"], "location_id", array()), (isset($context["config_location"]) ? $context["config_location"] : null))) {
                    // line 182
                    echo "                      <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    echo $this->getAttribute($context["location"], "location_id", array());
                    echo "\" checked=\"checked\" />
                      ";
                    // line 183
                    echo $this->getAttribute($context["location"], "name", array());
                    echo "
                      ";
                } else {
                    // line 185
                    echo "                      <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    echo $this->getAttribute($context["location"], "location_id", array());
                    echo "\" />
                      ";
                    // line 186
                    echo $this->getAttribute($context["location"], "name", array());
                    echo "
                      ";
                }
                // line 187
                echo " </label>
                  </div>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 189
            echo " </div>
              </div>
              ";
        }
        // line 191
        echo " </div>
            <div class=\"tab-pane\" id=\"tab-local\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-country\">";
        // line 194
        echo (isset($context["entry_country"]) ? $context["entry_country"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_country_id\" id=\"input-country\" class=\"form-control\">
                    
                    ";
        // line 198
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 199
            echo "                    ";
            if (($this->getAttribute($context["country"], "country_id", array()) == (isset($context["config_country_id"]) ? $context["config_country_id"] : null))) {
                // line 200
                echo "                    
                    <option value=\"";
                // line 201
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>
                    
                    ";
            } else {
                // line 204
                echo "                    
                    <option value=\"";
                // line 205
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>
                    
                    ";
            }
            // line 208
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 209
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-zone\">";
        // line 214
        echo (isset($context["entry_zone"]) ? $context["entry_zone"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_zone_id\" id=\"input-zone\" class=\"form-control\">
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-language\">";
        // line 221
        echo (isset($context["entry_language"]) ? $context["entry_language"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_language\" id=\"input-language\" class=\"form-control\">
                    
                    ";
        // line 225
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 226
            echo "                    ";
            if (($this->getAttribute($context["language"], "code", array()) == (isset($context["config_language"]) ? $context["config_language"] : null))) {
                // line 227
                echo "                    
                    <option value=\"";
                // line 228
                echo $this->getAttribute($context["language"], "code", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</option>
                    
                    ";
            } else {
                // line 231
                echo "                    
                    <option value=\"";
                // line 232
                echo $this->getAttribute($context["language"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</option>
                    
                    ";
            }
            // line 235
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 236
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-admin-language\">";
        // line 241
        echo (isset($context["entry_admin_language"]) ? $context["entry_admin_language"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_admin_language\" id=\"input-admin-language\" class=\"form-control\">
                    
                    ";
        // line 245
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 246
            echo "                    ";
            if (($this->getAttribute($context["language"], "code", array()) == (isset($context["config_admin_language"]) ? $context["config_admin_language"] : null))) {
                // line 247
                echo "                    
                    <option value=\"";
                // line 248
                echo $this->getAttribute($context["language"], "code", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</option>
                    
                    ";
            } else {
                // line 251
                echo "                    
                    <option value=\"";
                // line 252
                echo $this->getAttribute($context["language"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</option>
                    
                    ";
            }
            // line 255
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 256
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-currency\"><span data-toggle=\"tooltip\" title=\"";
        // line 261
        echo (isset($context["help_currency"]) ? $context["help_currency"] : null);
        echo "\">";
        echo (isset($context["entry_currency"]) ? $context["entry_currency"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"config_currency\" id=\"input-currency\" class=\"form-control\">
                    
                    ";
        // line 265
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 266
            echo "                    ";
            if (($this->getAttribute($context["currency"], "code", array()) == (isset($context["config_currency"]) ? $context["config_currency"] : null))) {
                // line 267
                echo "                    
                    <option value=\"";
                // line 268
                echo $this->getAttribute($context["currency"], "code", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["currency"], "title", array());
                echo "</option>
                    
                    ";
            } else {
                // line 271
                echo "                    
                    <option value=\"";
                // line 272
                echo $this->getAttribute($context["currency"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["currency"], "title", array());
                echo "</option>
                    
                    ";
            }
            // line 275
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 276
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 281
        echo (isset($context["help_currency_auto"]) ? $context["help_currency_auto"] : null);
        echo "\">";
        echo (isset($context["entry_currency_auto"]) ? $context["entry_currency_auto"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\"> ";
        // line 283
        if ((isset($context["config_currency_auto"]) ? $context["config_currency_auto"] : null)) {
            // line 284
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"1\" checked=\"checked\" />
                    ";
            // line 285
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                    ";
        } else {
            // line 287
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"1\" />
                    ";
            // line 288
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                    ";
        }
        // line 289
        echo " </label>
                  <label class=\"radio-inline\"> ";
        // line 290
        if ( !(isset($context["config_currency_auto"]) ? $context["config_currency_auto"] : null)) {
            // line 291
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"0\" checked=\"checked\" />
                    ";
            // line 292
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                    ";
        } else {
            // line 294
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"0\" />
                    ";
            // line 295
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                    ";
        }
        // line 296
        echo " </label>
                </div>
              </div>

<!--*****************Start khorshidi Date********************-->
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-khorshididate-format\"><span data-toggle=\"tooltip\" title=\"";
        // line 302
        echo (isset($context["help_khorshididate_format"]) ? $context["help_khorshididate_format"] : null);
        echo "\">";
        echo (isset($context["entry_khorshididate_format"]) ? $context["entry_khorshididate_format"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"config_khorshididate_format\" id=\"input-khorshididate-format\" class=\"form-control\">
\t\t\t\t\t";
        // line 305
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["khorshididate_formats"]) ? $context["khorshididate_formats"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
            // line 306
            echo "\t\t\t\t\t";
            if (($this->getAttribute($context["format"], "code", array()) == (isset($context["config_khorshididate_format"]) ? $context["config_khorshididate_format"] : null))) {
                // line 307
                echo "                    <option value=\"";
                echo $this->getAttribute($context["format"], "code", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["format"], "title", array());
                echo "</option>
                    ";
            } else {
                // line 309
                echo "                    <option value=\"";
                echo $this->getAttribute($context["format"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["format"], "title", array());
                echo "</option>
\t\t\t\t\t";
            }
            // line 311
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['format'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 312
        echo "                  </select>
                </div>
              </div>
<!--*****************Ends khorshidi Date********************-->
\t\t\t
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-length-class\">";
        // line 318
        echo (isset($context["entry_length_class"]) ? $context["entry_length_class"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_length_class_id\" id=\"input-length-class\" class=\"form-control\">
                    
                    ";
        // line 322
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["length_classes"]) ? $context["length_classes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 323
            echo "                    ";
            if (($this->getAttribute($context["length_class"], "length_class_id", array()) == (isset($context["config_length_class_id"]) ? $context["config_length_class_id"] : null))) {
                // line 324
                echo "                    
                    <option value=\"";
                // line 325
                echo $this->getAttribute($context["length_class"], "length_class_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["length_class"], "title", array());
                echo "</option>
                    
                    ";
            } else {
                // line 328
                echo "                    
                    <option value=\"";
                // line 329
                echo $this->getAttribute($context["length_class"], "length_class_id", array());
                echo "\">";
                echo $this->getAttribute($context["length_class"], "title", array());
                echo "</option>
                    
                    ";
            }
            // line 332
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 333
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight-class\">";
        // line 338
        echo (isset($context["entry_weight_class"]) ? $context["entry_weight_class"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_weight_class_id\" id=\"input-weight-class\" class=\"form-control\">
                    
                    ";
        // line 342
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["weight_classes"]) ? $context["weight_classes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 343
            echo "                    ";
            if (($this->getAttribute($context["weight_class"], "weight_class_id", array()) == (isset($context["config_weight_class_id"]) ? $context["config_weight_class_id"] : null))) {
                // line 344
                echo "                    
                    <option value=\"";
                // line 345
                echo $this->getAttribute($context["weight_class"], "weight_class_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["weight_class"], "title", array());
                echo "</option>
                    
                    ";
            } else {
                // line 348
                echo "                    
                    <option value=\"";
                // line 349
                echo $this->getAttribute($context["weight_class"], "weight_class_id", array());
                echo "\">";
                echo $this->getAttribute($context["weight_class"], "title", array());
                echo "</option>
                    
                    ";
            }
            // line 352
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 353
        echo "                  
                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-option\">
              <fieldset>
                <legend>";
        // line 360
        echo (isset($context["text_product"]) ? $context["text_product"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 362
        echo (isset($context["help_product_count"]) ? $context["help_product_count"] : null);
        echo "\">";
        echo (isset($context["entry_product_count"]) ? $context["entry_product_count"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 364
        if ((isset($context["config_product_count"]) ? $context["config_product_count"] : null)) {
            // line 365
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"1\" checked=\"checked\" />
                      ";
            // line 366
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 368
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"1\" />
                      ";
            // line 369
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 370
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 371
        if ( !(isset($context["config_product_count"]) ? $context["config_product_count"] : null)) {
            // line 372
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"0\" checked=\"checked\" />
                      ";
            // line 373
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 375
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"0\" />
                      ";
            // line 376
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 377
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-admin-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 381
        echo (isset($context["help_limit_admin"]) ? $context["help_limit_admin"] : null);
        echo "\">";
        echo (isset($context["entry_limit_admin"]) ? $context["entry_limit_admin"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_limit_admin\" value=\"";
        // line 383
        echo (isset($context["config_limit_admin"]) ? $context["config_limit_admin"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_limit_admin"]) ? $context["entry_limit_admin"] : null);
        echo "\" id=\"input-admin-limit\" class=\"form-control\" />
                    ";
        // line 384
        if ((isset($context["error_limit_admin"]) ? $context["error_limit_admin"] : null)) {
            // line 385
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_limit_admin"]) ? $context["error_limit_admin"] : null);
            echo "</div>
                    ";
        }
        // line 386
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 390
        echo (isset($context["text_review"]) ? $context["text_review"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 392
        echo (isset($context["help_review"]) ? $context["help_review"] : null);
        echo "\">";
        echo (isset($context["entry_review"]) ? $context["entry_review"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 394
        if ((isset($context["config_review_status"]) ? $context["config_review_status"] : null)) {
            // line 395
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"1\" checked=\"checked\" />
                      ";
            // line 396
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 398
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"1\" />
                      ";
            // line 399
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 400
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 401
        if ( !(isset($context["config_review_status"]) ? $context["config_review_status"] : null)) {
            // line 402
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"0\" checked=\"checked\" />
                      ";
            // line 403
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 405
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"0\" />
                      ";
            // line 406
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 407
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 411
        echo (isset($context["help_review_guest"]) ? $context["help_review_guest"] : null);
        echo "\">";
        echo (isset($context["entry_review_guest"]) ? $context["entry_review_guest"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 413
        if ((isset($context["config_review_guest"]) ? $context["config_review_guest"] : null)) {
            // line 414
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"1\" checked=\"checked\" />
                      ";
            // line 415
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 417
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"1\" />
                      ";
            // line 418
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 419
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 420
        if ( !(isset($context["config_review_guest"]) ? $context["config_review_guest"] : null)) {
            // line 421
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"0\" checked=\"checked\" />
                      ";
            // line 422
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 424
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"0\" />
                      ";
            // line 425
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 426
        echo " </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 431
        echo (isset($context["text_voucher"]) ? $context["text_voucher"] : null);
        echo "</legend>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-min\"><span data-toggle=\"tooltip\" title=\"";
        // line 433
        echo (isset($context["help_voucher_min"]) ? $context["help_voucher_min"] : null);
        echo "\">";
        echo (isset($context["entry_voucher_min"]) ? $context["entry_voucher_min"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_min\" value=\"";
        // line 435
        echo (isset($context["config_voucher_min"]) ? $context["config_voucher_min"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_voucher_min"]) ? $context["entry_voucher_min"] : null);
        echo "\" id=\"input-voucher-min\" class=\"form-control\" />
                    ";
        // line 436
        if ((isset($context["error_voucher_min"]) ? $context["error_voucher_min"] : null)) {
            // line 437
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_voucher_min"]) ? $context["error_voucher_min"] : null);
            echo "</div>
                    ";
        }
        // line 438
        echo " </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-max\"><span data-toggle=\"tooltip\" title=\"";
        // line 441
        echo (isset($context["help_voucher_max"]) ? $context["help_voucher_max"] : null);
        echo "\">";
        echo (isset($context["entry_voucher_max"]) ? $context["entry_voucher_max"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_max\" value=\"";
        // line 443
        echo (isset($context["config_voucher_max"]) ? $context["config_voucher_max"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_voucher_max"]) ? $context["entry_voucher_max"] : null);
        echo "\" id=\"input-voucher-max\" class=\"form-control\" />
                    ";
        // line 444
        if ((isset($context["error_voucher_max"]) ? $context["error_voucher_max"] : null)) {
            // line 445
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_voucher_max"]) ? $context["error_voucher_max"] : null);
            echo "</div>
                    ";
        }
        // line 446
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 450
        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 452
        echo (isset($context["entry_tax"]) ? $context["entry_tax"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 454
        if ((isset($context["config_tax"]) ? $context["config_tax"] : null)) {
            // line 455
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"1\" checked=\"checked\" />
                      ";
            // line 456
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 458
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"1\" />
                      ";
            // line 459
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 460
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 461
        if ( !(isset($context["config_tax"]) ? $context["config_tax"] : null)) {
            // line 462
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"0\" checked=\"checked\" />
                      ";
            // line 463
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 465
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"0\" />
                      ";
            // line 466
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 467
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-default\"><span data-toggle=\"tooltip\" title=\"";
        // line 471
        echo (isset($context["help_tax_default"]) ? $context["help_tax_default"] : null);
        echo "\">";
        echo (isset($context["entry_tax_default"]) ? $context["entry_tax_default"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_default\" id=\"input-tax-default\" class=\"form-control\">
                      <option value=\"\">";
        // line 474
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                      
                      ";
        // line 476
        if (((isset($context["config_tax_default"]) ? $context["config_tax_default"] : null) == "shipping")) {
            // line 477
            echo "                      
                      <option value=\"shipping\" selected=\"selected\">";
            // line 478
            echo (isset($context["text_shipping"]) ? $context["text_shipping"] : null);
            echo "</option>
                      
                      ";
        } else {
            // line 481
            echo "                      
                      <option value=\"shipping\">";
            // line 482
            echo (isset($context["text_shipping"]) ? $context["text_shipping"] : null);
            echo "</option>
                      
                      ";
        }
        // line 485
        echo "                      ";
        if (((isset($context["config_tax_default"]) ? $context["config_tax_default"] : null) == "payment")) {
            // line 486
            echo "                      
                      <option value=\"payment\" selected=\"selected\">";
            // line 487
            echo (isset($context["text_payment"]) ? $context["text_payment"] : null);
            echo "</option>
                      
                      ";
        } else {
            // line 490
            echo "                      
                      <option value=\"payment\">";
            // line 491
            echo (isset($context["text_payment"]) ? $context["text_payment"] : null);
            echo "</option>
                      
                      ";
        }
        // line 494
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-customer\"><span data-toggle=\"tooltip\" title=\"";
        // line 499
        echo (isset($context["help_tax_customer"]) ? $context["help_tax_customer"] : null);
        echo "\">";
        echo (isset($context["entry_tax_customer"]) ? $context["entry_tax_customer"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_customer\" id=\"input-tax-customer\" class=\"form-control\">
                      <option value=\"\">";
        // line 502
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                      
                      ";
        // line 504
        if (((isset($context["config_tax_customer"]) ? $context["config_tax_customer"] : null) == "shipping")) {
            // line 505
            echo "                      
                      <option value=\"shipping\" selected=\"selected\">";
            // line 506
            echo (isset($context["text_shipping"]) ? $context["text_shipping"] : null);
            echo "</option>
                      
                      ";
        } else {
            // line 509
            echo "                      
                      <option value=\"shipping\">";
            // line 510
            echo (isset($context["text_shipping"]) ? $context["text_shipping"] : null);
            echo "</option>
                      
                      ";
        }
        // line 513
        echo "                      ";
        if (((isset($context["config_tax_customer"]) ? $context["config_tax_customer"] : null) == "payment")) {
            // line 514
            echo "                      
                      <option value=\"payment\" selected=\"selected\">";
            // line 515
            echo (isset($context["text_payment"]) ? $context["text_payment"] : null);
            echo "</option>
                      
                      ";
        } else {
            // line 518
            echo "                      
                      <option value=\"payment\">";
            // line 519
            echo (isset($context["text_payment"]) ? $context["text_payment"] : null);
            echo "</option>
                      
                      ";
        }
        // line 522
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 528
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 530
        echo (isset($context["help_customer_online"]) ? $context["help_customer_online"] : null);
        echo "\">";
        echo (isset($context["entry_customer_online"]) ? $context["entry_customer_online"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 532
        if ((isset($context["config_customer_online"]) ? $context["config_customer_online"] : null)) {
            // line 533
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"1\" checked=\"checked\" />
                      ";
            // line 534
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 536
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"1\" />
                      ";
            // line 537
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 538
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 539
        if ( !(isset($context["config_customer_online"]) ? $context["config_customer_online"] : null)) {
            // line 540
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"0\" checked=\"checked\" />
                      ";
            // line 541
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 543
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"0\" />
                      ";
            // line 544
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 545
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 549
        echo (isset($context["help_customer_activity"]) ? $context["help_customer_activity"] : null);
        echo "\">";
        echo (isset($context["entry_customer_activity"]) ? $context["entry_customer_activity"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 551
        if ((isset($context["config_customer_activity"]) ? $context["config_customer_activity"] : null)) {
            // line 552
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" checked=\"checked\" />
                      ";
            // line 553
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 555
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" />
                      ";
            // line 556
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 557
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 558
        if ( !(isset($context["config_customer_activity"]) ? $context["config_customer_activity"] : null)) {
            // line 559
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" checked=\"checked\" />
                      ";
            // line 560
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 562
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" />
                      ";
            // line 563
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 564
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 568
        echo (isset($context["entry_customer_search"]) ? $context["entry_customer_search"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 570
        if ((isset($context["config_customer_search"]) ? $context["config_customer_search"] : null)) {
            // line 571
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"1\" checked=\"checked\" />
                      ";
            // line 572
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 574
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"1\" />
                      ";
            // line 575
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 576
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 577
        if ( !(isset($context["config_customer_search"]) ? $context["config_customer_search"] : null)) {
            // line 578
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"0\" checked=\"checked\" />
                      ";
            // line 579
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 581
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"0\" />
                      ";
            // line 582
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 583
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-customer-group\"><span data-toggle=\"tooltip\" title=\"";
        // line 587
        echo (isset($context["help_customer_group"]) ? $context["help_customer_group"] : null);
        echo "\">";
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_customer_group_id\" id=\"input-customer-group\" class=\"form-control\">
                      
                      ";
        // line 591
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 592
            echo "                      ";
            if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == (isset($context["config_customer_group_id"]) ? $context["config_customer_group_id"] : null))) {
                // line 593
                echo "                      
                      <option value=\"";
                // line 594
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</option>
                      
                      ";
            } else {
                // line 597
                echo "                      
                      <option value=\"";
                // line 598
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\">";
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</option>
                      
                      ";
            }
            // line 601
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 602
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 607
        echo (isset($context["help_customer_group_display"]) ? $context["help_customer_group_display"] : null);
        echo "\">";
        echo (isset($context["entry_customer_group_display"]) ? $context["entry_customer_group_display"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\"> ";
        // line 608
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 609
            echo "                    <div class=\"checkbox\">
                      <label> ";
            // line 610
            if (twig_in_filter($this->getAttribute($context["customer_group"], "customer_group_id", array()), (isset($context["config_customer_group_display"]) ? $context["config_customer_group_display"] : null))) {
                // line 611
                echo "                        <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" checked=\"checked\" />
                        ";
                // line 612
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "
                        ";
            } else {
                // line 614
                echo "                        <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" />
                        ";
                // line 615
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "
                        ";
            }
            // line 616
            echo " </label>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 619
        echo "                    ";
        if ((isset($context["error_customer_group_display"]) ? $context["error_customer_group_display"] : null)) {
            // line 620
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_customer_group_display"]) ? $context["error_customer_group_display"] : null);
            echo "</div>
                    ";
        }
        // line 621
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 624
        echo (isset($context["help_customer_price"]) ? $context["help_customer_price"] : null);
        echo "\">";
        echo (isset($context["entry_customer_price"]) ? $context["entry_customer_price"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 626
        if ((isset($context["config_customer_price"]) ? $context["config_customer_price"] : null)) {
            // line 627
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"1\" checked=\"checked\" />
                      ";
            // line 628
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 630
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"1\" />
                      ";
            // line 631
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 632
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 633
        if ( !(isset($context["config_customer_price"]) ? $context["config_customer_price"] : null)) {
            // line 634
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"0\" checked=\"checked\" />
                      ";
            // line 635
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 637
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"0\" />
                      ";
            // line 638
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 639
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-login-attempts\"><span data-toggle=\"tooltip\" title=\"";
        // line 643
        echo (isset($context["help_login_attempts"]) ? $context["help_login_attempts"] : null);
        echo "\">";
        echo (isset($context["entry_login_attempts"]) ? $context["entry_login_attempts"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_login_attempts\" value=\"";
        // line 645
        echo (isset($context["config_login_attempts"]) ? $context["config_login_attempts"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_login_attempts"]) ? $context["entry_login_attempts"] : null);
        echo "\" id=\"input-login-attempts\" class=\"form-control\" />
                    ";
        // line 646
        if ((isset($context["error_login_attempts"]) ? $context["error_login_attempts"] : null)) {
            // line 647
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_login_attempts"]) ? $context["error_login_attempts"] : null);
            echo "</div>
                    ";
        }
        // line 648
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-account\"><span data-toggle=\"tooltip\" title=\"";
        // line 651
        echo (isset($context["help_account"]) ? $context["help_account"] : null);
        echo "\">";
        echo (isset($context["entry_account"]) ? $context["entry_account"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_account_id\" id=\"input-account\" class=\"form-control\">
                      <option value=\"0\">";
        // line 654
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                      
                      ";
        // line 656
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 657
            echo "                      ";
            if (($this->getAttribute($context["information"], "information_id", array()) == (isset($context["config_account_id"]) ? $context["config_account_id"] : null))) {
                // line 658
                echo "                      
                      <option value=\"";
                // line 659
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>
                      
                      ";
            } else {
                // line 662
                echo "                      
                      <option value=\"";
                // line 663
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>
                      
                      ";
            }
            // line 666
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 667
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 673
        echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-invoice-prefix\"><span data-toggle=\"tooltip\" title=\"";
        // line 675
        echo (isset($context["help_invoice_prefix"]) ? $context["help_invoice_prefix"] : null);
        echo "\">";
        echo (isset($context["entry_invoice_prefix"]) ? $context["entry_invoice_prefix"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_invoice_prefix\" value=\"";
        // line 677
        echo (isset($context["config_invoice_prefix"]) ? $context["config_invoice_prefix"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_invoice_prefix"]) ? $context["entry_invoice_prefix"] : null);
        echo "\" id=\"input-invoice-prefix\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 681
        echo (isset($context["help_cart_weight"]) ? $context["help_cart_weight"] : null);
        echo "\">";
        echo (isset($context["entry_cart_weight"]) ? $context["entry_cart_weight"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 683
        if ((isset($context["config_cart_weight"]) ? $context["config_cart_weight"] : null)) {
            // line 684
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" checked=\"checked\" />
                      ";
            // line 685
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 687
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" />
                      ";
            // line 688
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 689
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 690
        if ( !(isset($context["config_cart_weight"]) ? $context["config_cart_weight"] : null)) {
            // line 691
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" checked=\"checked\" />
                      ";
            // line 692
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 694
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" />
                      ";
            // line 695
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 696
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 700
        echo (isset($context["help_checkout_guest"]) ? $context["help_checkout_guest"] : null);
        echo "\">";
        echo (isset($context["entry_checkout_guest"]) ? $context["entry_checkout_guest"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 702
        if ((isset($context["config_checkout_guest"]) ? $context["config_checkout_guest"] : null)) {
            // line 703
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" checked=\"checked\" />
                      ";
            // line 704
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 706
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" />
                      ";
            // line 707
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 708
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 709
        if ( !(isset($context["config_checkout_guest"]) ? $context["config_checkout_guest"] : null)) {
            // line 710
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" checked=\"checked\" />
                      ";
            // line 711
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 713
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" />
                      ";
            // line 714
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 715
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-checkout\"><span data-toggle=\"tooltip\" title=\"";
        // line 719
        echo (isset($context["help_checkout"]) ? $context["help_checkout"] : null);
        echo "\">";
        echo (isset($context["entry_checkout"]) ? $context["entry_checkout"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_checkout_id\" id=\"input-checkout\" class=\"form-control\">
                      <option value=\"0\">";
        // line 722
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                      
                      ";
        // line 724
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 725
            echo "                      ";
            if (($this->getAttribute($context["information"], "information_id", array()) == (isset($context["config_checkout_id"]) ? $context["config_checkout_id"] : null))) {
                // line 726
                echo "                      
                      <option value=\"";
                // line 727
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>
                      
                      ";
            } else {
                // line 730
                echo "                      
                      <option value=\"";
                // line 731
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>
                      
                      ";
            }
            // line 734
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 735
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-order-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 740
        echo (isset($context["help_order_status"]) ? $context["help_order_status"] : null);
        echo "\">";
        echo (isset($context["entry_order_status"]) ? $context["entry_order_status"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_order_status_id\" id=\"input-order-status\" class=\"form-control\">
                      
                      ";
        // line 744
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 745
            echo "                      ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["config_order_status_id"]) ? $context["config_order_status_id"] : null))) {
                // line 746
                echo "                      
                      <option value=\"";
                // line 747
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                      
                      ";
            } else {
                // line 750
                echo "                      
                      <option value=\"";
                // line 751
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                      
                      ";
            }
            // line 754
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 755
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-process-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 760
        echo (isset($context["help_processing_status"]) ? $context["help_processing_status"] : null);
        echo "\">";
        echo (isset($context["entry_processing_status"]) ? $context["entry_processing_status"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 762
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 763
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 764
            if (twig_in_filter($this->getAttribute($context["order_status"], "order_status_id", array()), (isset($context["config_processing_status"]) ? $context["config_processing_status"] : null))) {
                // line 765
                echo "                          <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" checked=\"checked\" />
                          ";
                // line 766
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "
                          ";
            } else {
                // line 768
                echo "                          <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" />
                          ";
                // line 769
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "
                          ";
            }
            // line 770
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 772
        echo " </div>
                    ";
        // line 773
        if ((isset($context["error_processing_status"]) ? $context["error_processing_status"] : null)) {
            // line 774
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_processing_status"]) ? $context["error_processing_status"] : null);
            echo "</div>
                    ";
        }
        // line 775
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-complete-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 778
        echo (isset($context["help_complete_status"]) ? $context["help_complete_status"] : null);
        echo "\">";
        echo (isset($context["entry_complete_status"]) ? $context["entry_complete_status"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 780
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 781
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 782
            if (twig_in_filter($this->getAttribute($context["order_status"], "order_status_id", array()), (isset($context["config_complete_status"]) ? $context["config_complete_status"] : null))) {
                // line 783
                echo "                          <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" checked=\"checked\" />
                          ";
                // line 784
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "
                          ";
            } else {
                // line 786
                echo "                          <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" />
                          ";
                // line 787
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "
                          ";
            }
            // line 788
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 790
        echo " </div>
                    ";
        // line 791
        if ((isset($context["error_complete_status"]) ? $context["error_complete_status"] : null)) {
            // line 792
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_complete_status"]) ? $context["error_complete_status"] : null);
            echo "</div>
                    ";
        }
        // line 793
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-fraud-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 796
        echo (isset($context["help_fraud_status"]) ? $context["help_fraud_status"] : null);
        echo "\">";
        echo (isset($context["entry_fraud_status"]) ? $context["entry_fraud_status"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_fraud_status_id\" id=\"input-fraud-status\" class=\"form-control\">
                      
                      ";
        // line 800
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 801
            echo "                      ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["config_fraud_status_id"]) ? $context["config_fraud_status_id"] : null))) {
                // line 802
                echo "                      
                      <option value=\"";
                // line 803
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                      
                      ";
            } else {
                // line 806
                echo "                      
                      <option value=\"";
                // line 807
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                      
                      ";
            }
            // line 810
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 811
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-api\"><span data-toggle=\"tooltip\" title=\"";
        // line 816
        echo (isset($context["help_api"]) ? $context["help_api"] : null);
        echo "\">";
        echo (isset($context["entry_api"]) ? $context["entry_api"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_api_id\" id=\"input-api\" class=\"form-control\">
                      <option value=\"0\">";
        // line 819
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                      
                      ";
        // line 821
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["apis"]) ? $context["apis"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["api"]) {
            // line 822
            echo "                      ";
            if (($this->getAttribute($context["api"], "api_id", array()) == (isset($context["config_api_id"]) ? $context["config_api_id"] : null))) {
                // line 823
                echo "                      
                      <option value=\"";
                // line 824
                echo $this->getAttribute($context["api"], "api_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["api"], "username", array());
                echo "</option>
                      
                      ";
            } else {
                // line 827
                echo "                      
                      <option value=\"";
                // line 828
                echo $this->getAttribute($context["api"], "api_id", array());
                echo "\">";
                echo $this->getAttribute($context["api"], "username", array());
                echo "</option>
                      
                      ";
            }
            // line 831
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['api'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 832
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 838
        echo (isset($context["text_stock"]) ? $context["text_stock"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 840
        echo (isset($context["help_stock_display"]) ? $context["help_stock_display"] : null);
        echo "\">";
        echo (isset($context["entry_stock_display"]) ? $context["entry_stock_display"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 842
        if ((isset($context["config_stock_display"]) ? $context["config_stock_display"] : null)) {
            // line 843
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"1\" checked=\"checked\" />
                      ";
            // line 844
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 846
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"1\" />
                      ";
            // line 847
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 848
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 849
        if ( !(isset($context["config_stock_display"]) ? $context["config_stock_display"] : null)) {
            // line 850
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"0\" checked=\"checked\" />
                      ";
            // line 851
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 853
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"0\" />
                      ";
            // line 854
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 855
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 859
        echo (isset($context["help_stock_warning"]) ? $context["help_stock_warning"] : null);
        echo "\">";
        echo (isset($context["entry_stock_warning"]) ? $context["entry_stock_warning"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 861
        if ((isset($context["config_stock_warning"]) ? $context["config_stock_warning"] : null)) {
            // line 862
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" checked=\"checked\" />
                      ";
            // line 863
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 865
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" />
                      ";
            // line 866
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 867
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 868
        if ( !(isset($context["config_stock_warning"]) ? $context["config_stock_warning"] : null)) {
            // line 869
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" checked=\"checked\" />
                      ";
            // line 870
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 872
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" />
                      ";
            // line 873
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 874
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 878
        echo (isset($context["help_stock_checkout"]) ? $context["help_stock_checkout"] : null);
        echo "\">";
        echo (isset($context["entry_stock_checkout"]) ? $context["entry_stock_checkout"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 880
        if ((isset($context["config_stock_checkout"]) ? $context["config_stock_checkout"] : null)) {
            // line 881
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" checked=\"checked\" />
                      ";
            // line 882
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 884
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" />
                      ";
            // line 885
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 886
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 887
        if ( !(isset($context["config_stock_checkout"]) ? $context["config_stock_checkout"] : null)) {
            // line 888
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" checked=\"checked\" />
                      ";
            // line 889
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 891
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" />
                      ";
            // line 892
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 893
        echo " </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 898
        echo (isset($context["text_affiliate"]) ? $context["text_affiliate"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-group\">";
        // line 900
        echo (isset($context["entry_affiliate_group"]) ? $context["entry_affiliate_group"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_group_id\" id=\"input-affiliate-group\" class=\"form-control\">
                      
                      ";
        // line 904
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 905
            echo "                      ";
            if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == (isset($context["config_affiliate_group_id"]) ? $context["config_affiliate_group_id"] : null))) {
                // line 906
                echo "                      
                      <option value=\"";
                // line 907
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</option>
                      
                      ";
            } else {
                // line 910
                echo "                      
                      <option value=\"";
                // line 911
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\">";
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</option>
                      
                      ";
            }
            // line 914
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 915
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 920
        echo (isset($context["help_affiliate_approval"]) ? $context["help_affiliate_approval"] : null);
        echo "\">";
        echo (isset($context["entry_affiliate_approval"]) ? $context["entry_affiliate_approval"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 922
        if ((isset($context["config_affiliate_approval"]) ? $context["config_affiliate_approval"] : null)) {
            // line 923
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" checked=\"checked\" />
                      ";
            // line 924
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 926
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" />
                      ";
            // line 927
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 928
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 929
        if ( !(isset($context["config_affiliate_approval"]) ? $context["config_affiliate_approval"] : null)) {
            // line 930
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" checked=\"checked\" />
                      ";
            // line 931
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 933
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" />
                      ";
            // line 934
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 935
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 939
        echo (isset($context["help_affiliate_auto"]) ? $context["help_affiliate_auto"] : null);
        echo "\">";
        echo (isset($context["entry_affiliate_auto"]) ? $context["entry_affiliate_auto"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 941
        if ((isset($context["config_affiliate_auto"]) ? $context["config_affiliate_auto"] : null)) {
            // line 942
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" checked=\"checked\" />
                      ";
            // line 943
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 945
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" />
                      ";
            // line 946
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 947
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 948
        if ( !(isset($context["config_affiliate_auto"]) ? $context["config_affiliate_auto"] : null)) {
            // line 949
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" checked=\"checked\" />
                      ";
            // line 950
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 952
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" />
                      ";
            // line 953
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 954
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-commission\"><span data-toggle=\"tooltip\" title=\"";
        // line 958
        echo (isset($context["help_affiliate_commission"]) ? $context["help_affiliate_commission"] : null);
        echo "\">";
        echo (isset($context["entry_affiliate_commission"]) ? $context["entry_affiliate_commission"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_affiliate_commission\" value=\"";
        // line 960
        echo (isset($context["config_affiliate_commission"]) ? $context["config_affiliate_commission"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_affiliate_commission"]) ? $context["entry_affiliate_commission"] : null);
        echo "\" id=\"input-affiliate-commission\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate\"><span data-toggle=\"tooltip\" title=\"";
        // line 964
        echo (isset($context["help_affiliate"]) ? $context["help_affiliate"] : null);
        echo "\">";
        echo (isset($context["entry_affiliate"]) ? $context["entry_affiliate"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_id\" id=\"input-affiliate\" class=\"form-control\">
                      <option value=\"0\">";
        // line 967
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                      
                      ";
        // line 969
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 970
            echo "                      ";
            if (($this->getAttribute($context["information"], "information_id", array()) == (isset($context["config_affiliate_id"]) ? $context["config_affiliate_id"] : null))) {
                // line 971
                echo "                      
                      <option value=\"";
                // line 972
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>
                      
                      ";
            } else {
                // line 975
                echo "                      
                      <option value=\"";
                // line 976
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>
                      
                      ";
            }
            // line 979
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 980
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 986
        echo (isset($context["text_return"]) ? $context["text_return"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-return\"><span data-toggle=\"tooltip\" title=\"";
        // line 988
        echo (isset($context["help_return"]) ? $context["help_return"] : null);
        echo "\">";
        echo (isset($context["entry_return"]) ? $context["entry_return"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_id\" id=\"input-return\" class=\"form-control\">
                      <option value=\"0\">";
        // line 991
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                      
                      ";
        // line 993
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 994
            echo "                      ";
            if (($this->getAttribute($context["information"], "information_id", array()) == (isset($context["config_return_id"]) ? $context["config_return_id"] : null))) {
                // line 995
                echo "                      
                      <option value=\"";
                // line 996
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>
                      
                      ";
            } else {
                // line 999
                echo "                      
                      <option value=\"";
                // line 1000
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>
                      
                      ";
            }
            // line 1003
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1004
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-return-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 1009
        echo (isset($context["help_return_status"]) ? $context["help_return_status"] : null);
        echo "\">";
        echo (isset($context["entry_return_status"]) ? $context["entry_return_status"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_status_id\" id=\"input-return-status\" class=\"form-control\">
                      
                      ";
        // line 1013
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["return_statuses"]) ? $context["return_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_status"]) {
            // line 1014
            echo "                      ";
            if (($this->getAttribute($context["return_status"], "return_status_id", array()) == (isset($context["config_return_status_id"]) ? $context["config_return_status_id"] : null))) {
                // line 1015
                echo "                      
                      <option value=\"";
                // line 1016
                echo $this->getAttribute($context["return_status"], "return_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["return_status"], "name", array());
                echo "</option>
                      
                      ";
            } else {
                // line 1019
                echo "                      
                      <option value=\"";
                // line 1020
                echo $this->getAttribute($context["return_status"], "return_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["return_status"], "name", array());
                echo "</option>
                      
                      ";
            }
            // line 1023
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1024
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1030
        echo (isset($context["text_captcha"]) ? $context["text_captcha"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1032
        echo (isset($context["help_captcha"]) ? $context["help_captcha"] : null);
        echo "\">";
        echo (isset($context["entry_captcha"]) ? $context["entry_captcha"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_captcha\" id=\"input-captcha\" class=\"form-control\">
                      <option value=\"\">";
        // line 1035
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                      
                      ";
        // line 1037
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["captchas"]) ? $context["captchas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha"]) {
            // line 1038
            echo "                      ";
            if (($this->getAttribute($context["captcha"], "value", array()) == (isset($context["config_captcha"]) ? $context["config_captcha"] : null))) {
                // line 1039
                echo "                      
                      <option value=\"";
                // line 1040
                echo $this->getAttribute($context["captcha"], "value", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["captcha"], "text", array());
                echo "</option>
                      
                      ";
            } else {
                // line 1043
                echo "                      
                      <option value=\"";
                // line 1044
                echo $this->getAttribute($context["captcha"], "value", array());
                echo "\">";
                echo $this->getAttribute($context["captcha"], "text", array());
                echo "</option>
                      
                      ";
            }
            // line 1047
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1048
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1053
        echo (isset($context["entry_captcha_page"]) ? $context["entry_captcha_page"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 1055
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["captcha_pages"]) ? $context["captcha_pages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha_page"]) {
            // line 1056
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 1057
            if (twig_in_filter($this->getAttribute($context["captcha_page"], "value", array()), (isset($context["config_captcha_page"]) ? $context["config_captcha_page"] : null))) {
                // line 1058
                echo "                          <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                echo $this->getAttribute($context["captcha_page"], "value", array());
                echo "\" checked=\"checked\" />
                          ";
                // line 1059
                echo $this->getAttribute($context["captcha_page"], "text", array());
                echo "
                          ";
            } else {
                // line 1061
                echo "                          <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                echo $this->getAttribute($context["captcha_page"], "value", array());
                echo "\" />
                          ";
                // line 1062
                echo $this->getAttribute($context["captcha_page"], "text", array());
                echo "
                          ";
            }
            // line 1063
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1065
        echo " </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-image\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-logo\">";
        // line 1072
        echo (isset($context["entry_logo"]) ? $context["entry_logo"] : null);
        echo "</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-logo\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1073
        echo (isset($context["logo"]) ? $context["logo"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_logo\" value=\"";
        // line 1074
        echo (isset($context["config_logo"]) ? $context["config_logo"] : null);
        echo "\" id=\"input-logo\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-icon\"><span data-toggle=\"tooltip\" title=\"";
        // line 1078
        echo (isset($context["help_icon"]) ? $context["help_icon"] : null);
        echo "\">";
        echo (isset($context["entry_icon"]) ? $context["entry_icon"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-icon\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1079
        echo (isset($context["icon"]) ? $context["icon"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_icon\" value=\"";
        // line 1080
        echo (isset($context["config_icon"]) ? $context["config_icon"] : null);
        echo "\" id=\"input-icon\" />
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-mail\">
              <fieldset>
                <legend>";
        // line 1086
        echo (isset($context["text_general"]) ? $context["text_general"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-engine\"><span data-toggle=\"tooltip\" title=\"";
        // line 1088
        echo (isset($context["help_mail_engine"]) ? $context["help_mail_engine"] : null);
        echo "\">";
        echo (isset($context["entry_mail_engine"]) ? $context["entry_mail_engine"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_mail_engine\" id=\"input-mail-engine\" class=\"form-control\">
                      
                      ";
        // line 1092
        if (((isset($context["config_mail_engine"]) ? $context["config_mail_engine"] : null) == "mail")) {
            // line 1093
            echo "                      
                      <option value=\"mail\" selected=\"selected\">";
            // line 1094
            echo (isset($context["text_mail"]) ? $context["text_mail"] : null);
            echo "</option>
                      
                      ";
        } else {
            // line 1097
            echo "                      
                      <option value=\"mail\">";
            // line 1098
            echo (isset($context["text_mail"]) ? $context["text_mail"] : null);
            echo "</option>
                      
                      ";
        }
        // line 1101
        echo "                      ";
        if (((isset($context["config_mail_engine"]) ? $context["config_mail_engine"] : null) == "smtp")) {
            // line 1102
            echo "                      
                      <option value=\"smtp\" selected=\"selected\">";
            // line 1103
            echo (isset($context["text_smtp"]) ? $context["text_smtp"] : null);
            echo "</option>
                      
                      ";
        } else {
            // line 1106
            echo "                      
                      <option value=\"smtp\">";
            // line 1107
            echo (isset($context["text_smtp"]) ? $context["text_smtp"] : null);
            echo "</option>
                      
                      ";
        }
        // line 1110
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-parameter\"><span data-toggle=\"tooltip\" title=\"";
        // line 1115
        echo (isset($context["help_mail_parameter"]) ? $context["help_mail_parameter"] : null);
        echo "\">";
        echo (isset($context["entry_mail_parameter"]) ? $context["entry_mail_parameter"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_parameter\" value=\"";
        // line 1117
        echo (isset($context["config_mail_parameter"]) ? $context["config_mail_parameter"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_mail_parameter"]) ? $context["entry_mail_parameter"] : null);
        echo "\" id=\"input-mail-parameter\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-hostname\"><span data-toggle=\"tooltip\" title=\"";
        // line 1121
        echo (isset($context["help_mail_smtp_hostname"]) ? $context["help_mail_smtp_hostname"] : null);
        echo "\">";
        echo (isset($context["entry_mail_smtp_hostname"]) ? $context["entry_mail_smtp_hostname"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_hostname\" value=\"";
        // line 1123
        echo (isset($context["config_mail_smtp_hostname"]) ? $context["config_mail_smtp_hostname"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_mail_smtp_hostname"]) ? $context["entry_mail_smtp_hostname"] : null);
        echo "\" id=\"input-mail-smtp-hostname\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-username\">";
        // line 1127
        echo (isset($context["entry_mail_smtp_username"]) ? $context["entry_mail_smtp_username"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_username\" value=\"";
        // line 1129
        echo (isset($context["config_mail_smtp_username"]) ? $context["config_mail_smtp_username"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_mail_smtp_username"]) ? $context["entry_mail_smtp_username"] : null);
        echo "\" id=\"input-mail-smtp-username\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-password\"><span data-toggle=\"tooltip\" title=\"";
        // line 1133
        echo (isset($context["help_mail_smtp_password"]) ? $context["help_mail_smtp_password"] : null);
        echo "\">";
        echo (isset($context["entry_mail_smtp_password"]) ? $context["entry_mail_smtp_password"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_password\" value=\"";
        // line 1135
        echo (isset($context["config_mail_smtp_password"]) ? $context["config_mail_smtp_password"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_mail_smtp_password"]) ? $context["entry_mail_smtp_password"] : null);
        echo "\" id=\"input-mail-smtp-password\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-port\">";
        // line 1139
        echo (isset($context["entry_mail_smtp_port"]) ? $context["entry_mail_smtp_port"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_port\" value=\"";
        // line 1141
        echo (isset($context["config_mail_smtp_port"]) ? $context["config_mail_smtp_port"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_mail_smtp_port"]) ? $context["entry_mail_smtp_port"] : null);
        echo "\" id=\"input-mail-smtp-port\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-timeout\">";
        // line 1145
        echo (isset($context["entry_mail_smtp_timeout"]) ? $context["entry_mail_smtp_timeout"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_timeout\" value=\"";
        // line 1147
        echo (isset($context["config_mail_smtp_timeout"]) ? $context["config_mail_smtp_timeout"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_mail_smtp_timeout"]) ? $context["entry_mail_smtp_timeout"] : null);
        echo "\" id=\"input-mail-smtp-timeout\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1152
        echo (isset($context["text_mail_alert"]) ? $context["text_mail_alert"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1154
        echo (isset($context["help_mail_alert"]) ? $context["help_mail_alert"] : null);
        echo "\">";
        echo (isset($context["entry_mail_alert"]) ? $context["entry_mail_alert"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 1156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mail_alerts"]) ? $context["mail_alerts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["mail_alert"]) {
            // line 1157
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 1158
            if (twig_in_filter($this->getAttribute($context["mail_alert"], "value", array()), (isset($context["config_mail_alert"]) ? $context["config_mail_alert"] : null))) {
                // line 1159
                echo "                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                echo $this->getAttribute($context["mail_alert"], "value", array());
                echo "\" checked=\"checked\" />
                          ";
                // line 1160
                echo $this->getAttribute($context["mail_alert"], "text", array());
                echo "
                          ";
            } else {
                // line 1162
                echo "                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                echo $this->getAttribute($context["mail_alert"], "value", array());
                echo "\" />
                          ";
                // line 1163
                echo $this->getAttribute($context["mail_alert"], "text", array());
                echo "
                          ";
            }
            // line 1164
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail_alert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1166
        echo " </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-alert-email\"><span data-toggle=\"tooltip\" title=\"";
        // line 1170
        echo (isset($context["help_mail_alert_email"]) ? $context["help_mail_alert_email"] : null);
        echo "\">";
        echo (isset($context["entry_mail_alert_email"]) ? $context["entry_mail_alert_email"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_mail_alert_email\" rows=\"5\" placeholder=\"";
        // line 1172
        echo (isset($context["entry_mail_alert_email"]) ? $context["entry_mail_alert_email"] : null);
        echo "\" id=\"input-alert-email\" class=\"form-control\">";
        echo (isset($context["config_mail_alert_email"]) ? $context["config_mail_alert_email"] : null);
        echo "</textarea>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-server\">
              <fieldset>
                <legend>";
        // line 1179
        echo (isset($context["text_general"]) ? $context["text_general"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1181
        echo (isset($context["help_maintenance"]) ? $context["help_maintenance"] : null);
        echo "\">";
        echo (isset($context["entry_maintenance"]) ? $context["entry_maintenance"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1183
        if ((isset($context["config_maintenance"]) ? $context["config_maintenance"] : null)) {
            // line 1184
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1185
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 1187
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"1\" />
                      ";
            // line 1188
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 1189
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1190
        if ( !(isset($context["config_maintenance"]) ? $context["config_maintenance"] : null)) {
            // line 1191
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1192
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 1194
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"0\" />
                      ";
            // line 1195
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 1196
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1200
        echo (isset($context["help_seo_url"]) ? $context["help_seo_url"] : null);
        echo "\">";
        echo (isset($context["entry_seo_url"]) ? $context["entry_seo_url"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1202
        if ((isset($context["config_seo_url"]) ? $context["config_seo_url"] : null)) {
            // line 1203
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1204
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 1206
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"1\" />
                      ";
            // line 1207
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 1208
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1209
        if ( !(isset($context["config_seo_url"]) ? $context["config_seo_url"] : null)) {
            // line 1210
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1211
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 1213
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"0\" />
                      ";
            // line 1214
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 1215
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-robots\"><span data-toggle=\"tooltip\" title=\"";
        // line 1219
        echo (isset($context["help_robots"]) ? $context["help_robots"] : null);
        echo "\">";
        echo (isset($context["entry_robots"]) ? $context["entry_robots"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_robots\" rows=\"5\" placeholder=\"";
        // line 1221
        echo (isset($context["entry_robots"]) ? $context["entry_robots"] : null);
        echo "\" id=\"input-robots\" class=\"form-control\">";
        echo (isset($context["config_robots"]) ? $context["config_robots"] : null);
        echo "</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-compression\"><span data-toggle=\"tooltip\" title=\"";
        // line 1225
        echo (isset($context["help_compression"]) ? $context["help_compression"] : null);
        echo "\">";
        echo (isset($context["entry_compression"]) ? $context["entry_compression"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_compression\" value=\"";
        // line 1227
        echo (isset($context["config_compression"]) ? $context["config_compression"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_compression"]) ? $context["entry_compression"] : null);
        echo "\" id=\"input-compression\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1232
        echo (isset($context["text_security"]) ? $context["text_security"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1234
        echo (isset($context["help_secure"]) ? $context["help_secure"] : null);
        echo "\">";
        echo (isset($context["entry_secure"]) ? $context["entry_secure"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1236
        if ((isset($context["config_secure"]) ? $context["config_secure"] : null)) {
            // line 1237
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1238
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 1240
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"1\" />
                      ";
            // line 1241
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 1242
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1243
        if ( !(isset($context["config_secure"]) ? $context["config_secure"] : null)) {
            // line 1244
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1245
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 1247
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"0\" />
                      ";
            // line 1248
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 1249
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1253
        echo (isset($context["help_password"]) ? $context["help_password"] : null);
        echo "\">";
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1255
        if ((isset($context["config_password"]) ? $context["config_password"] : null)) {
            // line 1256
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1257
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 1259
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"1\" />
                      ";
            // line 1260
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 1261
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1262
        if ( !(isset($context["config_password"]) ? $context["config_password"] : null)) {
            // line 1263
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1264
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 1266
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"0\" />
                      ";
            // line 1267
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 1268
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1272
        echo (isset($context["help_shared"]) ? $context["help_shared"] : null);
        echo "\">";
        echo (isset($context["entry_shared"]) ? $context["entry_shared"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1274
        if ((isset($context["config_shared"]) ? $context["config_shared"] : null)) {
            // line 1275
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1276
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 1278
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"1\" />
                      ";
            // line 1279
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 1280
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1281
        if ( !(isset($context["config_shared"]) ? $context["config_shared"] : null)) {
            // line 1282
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1283
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 1285
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"0\" />
                      ";
            // line 1286
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 1287
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-encryption\"><span data-toggle=\"tooltip\" title=\"";
        // line 1291
        echo (isset($context["help_encryption"]) ? $context["help_encryption"] : null);
        echo "\">";
        echo (isset($context["entry_encryption"]) ? $context["entry_encryption"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_encryption\" rows=\"5\" placeholder=\"";
        // line 1293
        echo (isset($context["entry_encryption"]) ? $context["entry_encryption"] : null);
        echo "\" id=\"input-encryption\" class=\"form-control\">";
        echo (isset($context["config_encryption"]) ? $context["config_encryption"] : null);
        echo "</textarea>
                    ";
        // line 1294
        if ((isset($context["error_encryption"]) ? $context["error_encryption"] : null)) {
            // line 1295
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_encryption"]) ? $context["error_encryption"] : null);
            echo "</div>
                    ";
        }
        // line 1296
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1300
        echo (isset($context["text_upload"]) ? $context["text_upload"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-max-size\"><span data-toggle=\"tooltip\" title=\"";
        // line 1302
        echo (isset($context["help_file_max_size"]) ? $context["help_file_max_size"] : null);
        echo "\">";
        echo (isset($context["entry_file_max_size"]) ? $context["entry_file_max_size"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_file_max_size\" value=\"";
        // line 1304
        echo (isset($context["config_file_max_size"]) ? $context["config_file_max_size"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_file_max_size"]) ? $context["entry_file_max_size"] : null);
        echo "\" id=\"input-file-max-size\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-ext-allowed\"><span data-toggle=\"tooltip\" title=\"";
        // line 1308
        echo (isset($context["help_file_ext_allowed"]) ? $context["help_file_ext_allowed"] : null);
        echo "\">";
        echo (isset($context["entry_file_ext_allowed"]) ? $context["entry_file_ext_allowed"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_ext_allowed\" rows=\"5\" placeholder=\"";
        // line 1310
        echo (isset($context["entry_file_ext_allowed"]) ? $context["entry_file_ext_allowed"] : null);
        echo "\" id=\"input-file-ext-allowed\" class=\"form-control\">";
        echo (isset($context["config_file_ext_allowed"]) ? $context["config_file_ext_allowed"] : null);
        echo "</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-mime-allowed\"><span data-toggle=\"tooltip\" title=\"";
        // line 1314
        echo (isset($context["help_file_mime_allowed"]) ? $context["help_file_mime_allowed"] : null);
        echo "\">";
        echo (isset($context["entry_file_mime_allowed"]) ? $context["entry_file_mime_allowed"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_mime_allowed\" rows=\"5\" placeholder=\"";
        // line 1316
        echo (isset($context["entry_file_mime_allowed"]) ? $context["entry_file_mime_allowed"] : null);
        echo "\" id=\"input-file-mime-allowed\" class=\"form-control\">";
        echo (isset($context["config_file_mime_allowed"]) ? $context["config_file_mime_allowed"] : null);
        echo "</textarea>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1321
        echo (isset($context["text_error"]) ? $context["text_error"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1323
        echo (isset($context["entry_error_display"]) ? $context["entry_error_display"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1325
        if ((isset($context["config_error_display"]) ? $context["config_error_display"] : null)) {
            // line 1326
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1327
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 1329
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"1\" />
                      ";
            // line 1330
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 1331
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1332
        if ( !(isset($context["config_error_display"]) ? $context["config_error_display"] : null)) {
            // line 1333
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1334
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 1336
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"0\" />
                      ";
            // line 1337
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 1338
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1342
        echo (isset($context["entry_error_log"]) ? $context["entry_error_log"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1344
        if ((isset($context["config_error_log"]) ? $context["config_error_log"] : null)) {
            // line 1345
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1346
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 1348
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"1\" />
                      ";
            // line 1349
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 1350
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1351
        if ( !(isset($context["config_error_log"]) ? $context["config_error_log"] : null)) {
            // line 1352
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1353
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 1355
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"0\" />
                      ";
            // line 1356
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 1357
        echo "</label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-error-filename\">";
        // line 1361
        echo (isset($context["entry_error_filename"]) ? $context["entry_error_filename"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_error_filename\" value=\"";
        // line 1363
        echo (isset($context["config_error_filename"]) ? $context["config_error_filename"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_error_filename"]) ? $context["entry_error_filename"] : null);
        echo "\" id=\"input-error-filename\" class=\"form-control\" />
                    ";
        // line 1364
        if ((isset($context["error_log"]) ? $context["error_log"] : null)) {
            // line 1365
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_log"]) ? $context["error_log"] : null);
            echo "</div>
                    ";
        }
        // line 1366
        echo " </div>
                </div>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('select[name=\\'config_theme\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=setting/setting/theme&user_token=";
        // line 1378
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&theme=' + this.value,
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$('#theme').attr('src', html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_theme\\']').trigger('change');
//--></script> 
  <script type=\"text/javascript\"><!--
\$('select[name=\\'config_country_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=localisation/country/country&user_token=";
        // line 1400
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&country_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\thtml = '<option value=\"\">";
        // line 1409
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
          \t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 1415
        echo (isset($context["config_zone_id"]) ? $context["config_zone_id"] : null);
        echo "') {
            \t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 1422
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>';
\t\t\t}

\t\t\t\$('select[name=\\'config_zone_id\\']').html(html);
\t\t\t
\t\t\t\$('#button-save').prop('disabled', false);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_country_id\\']').trigger('change');
//--></script></div>
";
        // line 1437
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "setting/setting.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3712 => 1437,  3694 => 1422,  3684 => 1415,  3675 => 1409,  3663 => 1400,  3638 => 1378,  3624 => 1366,  3618 => 1365,  3616 => 1364,  3610 => 1363,  3605 => 1361,  3599 => 1357,  3594 => 1356,  3591 => 1355,  3586 => 1353,  3583 => 1352,  3581 => 1351,  3578 => 1350,  3573 => 1349,  3570 => 1348,  3565 => 1346,  3562 => 1345,  3560 => 1344,  3555 => 1342,  3549 => 1338,  3544 => 1337,  3541 => 1336,  3536 => 1334,  3533 => 1333,  3531 => 1332,  3528 => 1331,  3523 => 1330,  3520 => 1329,  3515 => 1327,  3512 => 1326,  3510 => 1325,  3505 => 1323,  3500 => 1321,  3490 => 1316,  3483 => 1314,  3474 => 1310,  3467 => 1308,  3458 => 1304,  3451 => 1302,  3446 => 1300,  3440 => 1296,  3434 => 1295,  3432 => 1294,  3426 => 1293,  3419 => 1291,  3413 => 1287,  3408 => 1286,  3405 => 1285,  3400 => 1283,  3397 => 1282,  3395 => 1281,  3392 => 1280,  3387 => 1279,  3384 => 1278,  3379 => 1276,  3376 => 1275,  3374 => 1274,  3367 => 1272,  3361 => 1268,  3356 => 1267,  3353 => 1266,  3348 => 1264,  3345 => 1263,  3343 => 1262,  3340 => 1261,  3335 => 1260,  3332 => 1259,  3327 => 1257,  3324 => 1256,  3322 => 1255,  3315 => 1253,  3309 => 1249,  3304 => 1248,  3301 => 1247,  3296 => 1245,  3293 => 1244,  3291 => 1243,  3288 => 1242,  3283 => 1241,  3280 => 1240,  3275 => 1238,  3272 => 1237,  3270 => 1236,  3263 => 1234,  3258 => 1232,  3248 => 1227,  3241 => 1225,  3232 => 1221,  3225 => 1219,  3219 => 1215,  3214 => 1214,  3211 => 1213,  3206 => 1211,  3203 => 1210,  3201 => 1209,  3198 => 1208,  3193 => 1207,  3190 => 1206,  3185 => 1204,  3182 => 1203,  3180 => 1202,  3173 => 1200,  3167 => 1196,  3162 => 1195,  3159 => 1194,  3154 => 1192,  3151 => 1191,  3149 => 1190,  3146 => 1189,  3141 => 1188,  3138 => 1187,  3133 => 1185,  3130 => 1184,  3128 => 1183,  3121 => 1181,  3116 => 1179,  3104 => 1172,  3097 => 1170,  3091 => 1166,  3083 => 1164,  3078 => 1163,  3073 => 1162,  3068 => 1160,  3063 => 1159,  3061 => 1158,  3058 => 1157,  3054 => 1156,  3047 => 1154,  3042 => 1152,  3032 => 1147,  3027 => 1145,  3018 => 1141,  3013 => 1139,  3004 => 1135,  2997 => 1133,  2988 => 1129,  2983 => 1127,  2974 => 1123,  2967 => 1121,  2958 => 1117,  2951 => 1115,  2944 => 1110,  2938 => 1107,  2935 => 1106,  2929 => 1103,  2926 => 1102,  2923 => 1101,  2917 => 1098,  2914 => 1097,  2908 => 1094,  2905 => 1093,  2903 => 1092,  2894 => 1088,  2889 => 1086,  2880 => 1080,  2874 => 1079,  2868 => 1078,  2861 => 1074,  2855 => 1073,  2851 => 1072,  2842 => 1065,  2834 => 1063,  2829 => 1062,  2824 => 1061,  2819 => 1059,  2814 => 1058,  2812 => 1057,  2809 => 1056,  2805 => 1055,  2800 => 1053,  2793 => 1048,  2787 => 1047,  2779 => 1044,  2776 => 1043,  2768 => 1040,  2765 => 1039,  2762 => 1038,  2758 => 1037,  2753 => 1035,  2745 => 1032,  2740 => 1030,  2732 => 1024,  2726 => 1023,  2718 => 1020,  2715 => 1019,  2707 => 1016,  2704 => 1015,  2701 => 1014,  2697 => 1013,  2688 => 1009,  2681 => 1004,  2675 => 1003,  2667 => 1000,  2664 => 999,  2656 => 996,  2653 => 995,  2650 => 994,  2646 => 993,  2641 => 991,  2633 => 988,  2628 => 986,  2620 => 980,  2614 => 979,  2606 => 976,  2603 => 975,  2595 => 972,  2592 => 971,  2589 => 970,  2585 => 969,  2580 => 967,  2572 => 964,  2563 => 960,  2556 => 958,  2550 => 954,  2545 => 953,  2542 => 952,  2537 => 950,  2534 => 949,  2532 => 948,  2529 => 947,  2524 => 946,  2521 => 945,  2516 => 943,  2513 => 942,  2511 => 941,  2504 => 939,  2498 => 935,  2493 => 934,  2490 => 933,  2485 => 931,  2482 => 930,  2480 => 929,  2477 => 928,  2472 => 927,  2469 => 926,  2464 => 924,  2461 => 923,  2459 => 922,  2452 => 920,  2445 => 915,  2439 => 914,  2431 => 911,  2428 => 910,  2420 => 907,  2417 => 906,  2414 => 905,  2410 => 904,  2403 => 900,  2398 => 898,  2391 => 893,  2386 => 892,  2383 => 891,  2378 => 889,  2375 => 888,  2373 => 887,  2370 => 886,  2365 => 885,  2362 => 884,  2357 => 882,  2354 => 881,  2352 => 880,  2345 => 878,  2339 => 874,  2334 => 873,  2331 => 872,  2326 => 870,  2323 => 869,  2321 => 868,  2318 => 867,  2313 => 866,  2310 => 865,  2305 => 863,  2302 => 862,  2300 => 861,  2293 => 859,  2287 => 855,  2282 => 854,  2279 => 853,  2274 => 851,  2271 => 850,  2269 => 849,  2266 => 848,  2261 => 847,  2258 => 846,  2253 => 844,  2250 => 843,  2248 => 842,  2241 => 840,  2236 => 838,  2228 => 832,  2222 => 831,  2214 => 828,  2211 => 827,  2203 => 824,  2200 => 823,  2197 => 822,  2193 => 821,  2188 => 819,  2180 => 816,  2173 => 811,  2167 => 810,  2159 => 807,  2156 => 806,  2148 => 803,  2145 => 802,  2142 => 801,  2138 => 800,  2129 => 796,  2124 => 793,  2118 => 792,  2116 => 791,  2113 => 790,  2105 => 788,  2100 => 787,  2095 => 786,  2090 => 784,  2085 => 783,  2083 => 782,  2080 => 781,  2076 => 780,  2069 => 778,  2064 => 775,  2058 => 774,  2056 => 773,  2053 => 772,  2045 => 770,  2040 => 769,  2035 => 768,  2030 => 766,  2025 => 765,  2023 => 764,  2020 => 763,  2016 => 762,  2009 => 760,  2002 => 755,  1996 => 754,  1988 => 751,  1985 => 750,  1977 => 747,  1974 => 746,  1971 => 745,  1967 => 744,  1958 => 740,  1951 => 735,  1945 => 734,  1937 => 731,  1934 => 730,  1926 => 727,  1923 => 726,  1920 => 725,  1916 => 724,  1911 => 722,  1903 => 719,  1897 => 715,  1892 => 714,  1889 => 713,  1884 => 711,  1881 => 710,  1879 => 709,  1876 => 708,  1871 => 707,  1868 => 706,  1863 => 704,  1860 => 703,  1858 => 702,  1851 => 700,  1845 => 696,  1840 => 695,  1837 => 694,  1832 => 692,  1829 => 691,  1827 => 690,  1824 => 689,  1819 => 688,  1816 => 687,  1811 => 685,  1808 => 684,  1806 => 683,  1799 => 681,  1790 => 677,  1783 => 675,  1778 => 673,  1770 => 667,  1764 => 666,  1756 => 663,  1753 => 662,  1745 => 659,  1742 => 658,  1739 => 657,  1735 => 656,  1730 => 654,  1722 => 651,  1717 => 648,  1711 => 647,  1709 => 646,  1703 => 645,  1696 => 643,  1690 => 639,  1685 => 638,  1682 => 637,  1677 => 635,  1674 => 634,  1672 => 633,  1669 => 632,  1664 => 631,  1661 => 630,  1656 => 628,  1653 => 627,  1651 => 626,  1644 => 624,  1639 => 621,  1633 => 620,  1630 => 619,  1622 => 616,  1617 => 615,  1612 => 614,  1607 => 612,  1602 => 611,  1600 => 610,  1597 => 609,  1593 => 608,  1587 => 607,  1580 => 602,  1574 => 601,  1566 => 598,  1563 => 597,  1555 => 594,  1552 => 593,  1549 => 592,  1545 => 591,  1536 => 587,  1530 => 583,  1525 => 582,  1522 => 581,  1517 => 579,  1514 => 578,  1512 => 577,  1509 => 576,  1504 => 575,  1501 => 574,  1496 => 572,  1493 => 571,  1491 => 570,  1486 => 568,  1480 => 564,  1475 => 563,  1472 => 562,  1467 => 560,  1464 => 559,  1462 => 558,  1459 => 557,  1454 => 556,  1451 => 555,  1446 => 553,  1443 => 552,  1441 => 551,  1434 => 549,  1428 => 545,  1423 => 544,  1420 => 543,  1415 => 541,  1412 => 540,  1410 => 539,  1407 => 538,  1402 => 537,  1399 => 536,  1394 => 534,  1391 => 533,  1389 => 532,  1382 => 530,  1377 => 528,  1369 => 522,  1363 => 519,  1360 => 518,  1354 => 515,  1351 => 514,  1348 => 513,  1342 => 510,  1339 => 509,  1333 => 506,  1330 => 505,  1328 => 504,  1323 => 502,  1315 => 499,  1308 => 494,  1302 => 491,  1299 => 490,  1293 => 487,  1290 => 486,  1287 => 485,  1281 => 482,  1278 => 481,  1272 => 478,  1269 => 477,  1267 => 476,  1262 => 474,  1254 => 471,  1248 => 467,  1243 => 466,  1240 => 465,  1235 => 463,  1232 => 462,  1230 => 461,  1227 => 460,  1222 => 459,  1219 => 458,  1214 => 456,  1211 => 455,  1209 => 454,  1204 => 452,  1199 => 450,  1193 => 446,  1187 => 445,  1185 => 444,  1179 => 443,  1172 => 441,  1167 => 438,  1161 => 437,  1159 => 436,  1153 => 435,  1146 => 433,  1141 => 431,  1134 => 426,  1129 => 425,  1126 => 424,  1121 => 422,  1118 => 421,  1116 => 420,  1113 => 419,  1108 => 418,  1105 => 417,  1100 => 415,  1097 => 414,  1095 => 413,  1088 => 411,  1082 => 407,  1077 => 406,  1074 => 405,  1069 => 403,  1066 => 402,  1064 => 401,  1061 => 400,  1056 => 399,  1053 => 398,  1048 => 396,  1045 => 395,  1043 => 394,  1036 => 392,  1031 => 390,  1025 => 386,  1019 => 385,  1017 => 384,  1011 => 383,  1004 => 381,  998 => 377,  993 => 376,  990 => 375,  985 => 373,  982 => 372,  980 => 371,  977 => 370,  972 => 369,  969 => 368,  964 => 366,  961 => 365,  959 => 364,  952 => 362,  947 => 360,  938 => 353,  932 => 352,  924 => 349,  921 => 348,  913 => 345,  910 => 344,  907 => 343,  903 => 342,  896 => 338,  889 => 333,  883 => 332,  875 => 329,  872 => 328,  864 => 325,  861 => 324,  858 => 323,  854 => 322,  847 => 318,  839 => 312,  833 => 311,  825 => 309,  817 => 307,  814 => 306,  810 => 305,  802 => 302,  794 => 296,  789 => 295,  786 => 294,  781 => 292,  778 => 291,  776 => 290,  773 => 289,  768 => 288,  765 => 287,  760 => 285,  757 => 284,  755 => 283,  748 => 281,  741 => 276,  735 => 275,  727 => 272,  724 => 271,  716 => 268,  713 => 267,  710 => 266,  706 => 265,  697 => 261,  690 => 256,  684 => 255,  676 => 252,  673 => 251,  665 => 248,  662 => 247,  659 => 246,  655 => 245,  648 => 241,  641 => 236,  635 => 235,  627 => 232,  624 => 231,  616 => 228,  613 => 227,  610 => 226,  606 => 225,  599 => 221,  589 => 214,  582 => 209,  576 => 208,  568 => 205,  565 => 204,  557 => 201,  554 => 200,  551 => 199,  547 => 198,  540 => 194,  535 => 191,  530 => 189,  522 => 187,  517 => 186,  512 => 185,  507 => 183,  502 => 182,  500 => 181,  497 => 180,  493 => 179,  487 => 178,  484 => 177,  482 => 176,  474 => 173,  467 => 171,  458 => 167,  451 => 165,  444 => 161,  438 => 160,  434 => 159,  425 => 155,  420 => 153,  415 => 150,  409 => 149,  407 => 148,  401 => 147,  396 => 145,  391 => 142,  385 => 141,  383 => 140,  377 => 139,  372 => 137,  363 => 133,  356 => 131,  351 => 128,  345 => 127,  343 => 126,  337 => 125,  332 => 123,  327 => 120,  321 => 119,  319 => 118,  313 => 117,  308 => 115,  303 => 112,  297 => 111,  295 => 110,  289 => 109,  284 => 107,  275 => 100,  269 => 99,  261 => 96,  258 => 95,  250 => 92,  247 => 91,  244 => 90,  240 => 89,  233 => 85,  225 => 79,  219 => 78,  211 => 75,  208 => 74,  200 => 71,  197 => 70,  194 => 69,  190 => 68,  183 => 64,  174 => 60,  169 => 58,  160 => 54,  155 => 52,  150 => 49,  144 => 48,  142 => 47,  136 => 46,  131 => 44,  123 => 39,  119 => 38,  115 => 37,  111 => 36,  107 => 35,  103 => 34,  99 => 33,  94 => 31,  88 => 28,  84 => 26,  76 => 22,  73 => 21,  65 => 17,  63 => 16,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" id="button-save" form="form-setting" data-toggle="tooltip" title="{{ button_save }}" disabled="disabled" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid"> {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     {% if success %}*/
/*     <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-setting" class="form-horizontal">*/
/*           <ul class="nav nav-tabs">*/
/*             <li class="active"><a href="#tab-general" data-toggle="tab">{{ tab_general }}</a></li>*/
/*             <li><a href="#tab-store" data-toggle="tab">{{ tab_store }}</a></li>*/
/*             <li><a href="#tab-local" data-toggle="tab">{{ tab_local }}</a></li>*/
/*             <li><a href="#tab-option" data-toggle="tab">{{ tab_option }}</a></li>*/
/*             <li><a href="#tab-image" data-toggle="tab">{{ tab_image }}</a></li>*/
/*             <li><a href="#tab-mail" data-toggle="tab">{{ tab_mail }}</a></li>*/
/*             <li><a href="#tab-server" data-toggle="tab">{{ tab_server }}</a></li>*/
/*           </ul>*/
/*           <div class="tab-content">*/
/*             <div class="tab-pane active" id="tab-general">*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-meta-title">{{ entry_meta_title }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_meta_title" value="{{ config_meta_title }}" placeholder="{{ entry_meta_title }}" id="input-meta-title" class="form-control" />*/
/*                   {% if error_meta_title %}*/
/*                   <div class="text-danger">{{ error_meta_title }}</div>*/
/*                   {% endif %} </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-meta-description">{{ entry_meta_description }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <textarea name="config_meta_description" rows="5" placeholder="{{ entry_meta_description }}" id="input-meta-description" class="form-control">{{ config_meta_description }}</textarea>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-meta-keyword">{{ entry_meta_keyword }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <textarea name="config_meta_keyword" rows="5" placeholder="{{ entry_meta_keyword }}" id="input-meta-keyword" class="form-control">{{ config_meta_keyword }}</textarea>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-theme">{{ entry_theme }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_theme" id="input-theme" class="form-control">*/
/*                     */
/*                     {% for theme in themes %}*/
/*                     {% if theme.value == config_theme %}*/
/*                     */
/*                     <option value="{{ theme.value }}" selected="selected">{{ theme.text }}</option>*/
/*                     */
/*                     {% else %}*/
/*                     */
/*                     <option value="{{ theme.value }}">{{ theme.text }}</option>*/
/*                     */
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   */
/*                   </select>*/
/*                   <br />*/
/*                   <img src="" alt="" id="theme" class="img-thumbnail" /></div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-layout">{{ entry_layout }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_layout_id" id="input-layout" class="form-control">*/
/*                     */
/*                     {% for layout in layouts %}*/
/*                     {% if layout.layout_id == config_layout_id %}*/
/*                     */
/*                     <option value="{{ layout.layout_id }}" selected="selected">{{ layout.name }}</option>*/
/*                     */
/*                     {% else %}*/
/*                     */
/*                     <option value="{{ layout.layout_id }}">{{ layout.name }}</option>*/
/*                     */
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-store">*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-name">{{ entry_name }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_name" value="{{ config_name }}" placeholder="{{ entry_name }}" id="input-name" class="form-control" />*/
/*                   {% if error_name %}*/
/*                   <div class="text-danger">{{ error_name }}</div>*/
/*                   {% endif %} </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-owner">{{ entry_owner }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_owner" value="{{ config_owner }}" placeholder="{{ entry_owner }}" id="input-owner" class="form-control" />*/
/*                   {% if error_owner %}*/
/*                   <div class="text-danger">{{ error_owner }}</div>*/
/*                   {% endif %} </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-address">{{ entry_address }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <textarea name="config_address" placeholder="{{ entry_address }}" rows="5" id="input-address" class="form-control">{{ config_address }}</textarea>*/
/*                   {% if error_address %}*/
/*                   <div class="text-danger">{{ error_address }}</div>*/
/*                   {% endif %} </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-geocode"><span data-toggle="tooltip" data-container="#tab-general" title="{{ help_geocode }}">{{ entry_geocode }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_geocode" value="{{ config_geocode }}" placeholder="{{ entry_geocode }}" id="input-geocode" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-email">{{ entry_email }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_email" value="{{ config_email }}" placeholder="{{ entry_email }}" id="input-email" class="form-control" />*/
/*                   {% if error_email %}*/
/*                   <div class="text-danger">{{ error_email }}</div>*/
/*                   {% endif %} </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-telephone">{{ entry_telephone }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_telephone" value="{{ config_telephone }}" placeholder="{{ entry_telephone }}" id="input-telephone" class="form-control" />*/
/*                   {% if error_telephone %}*/
/*                   <div class="text-danger">{{ error_telephone }}</div>*/
/*                   {% endif %} </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-fax">{{ entry_fax }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_fax" value="{{ config_fax }}" placeholder="{{ entry_fax }}" id="input-fax" class="form-control" />*/
/*                 </div>*/
/*               </div>              */
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-image">{{ entry_image }}</label>*/
/*                 <div class="col-sm-10"><a href="" id="thumb-image" data-toggle="image" class="img-thumbnail"><img src="{{ thumb }}" alt="" title="" data-placeholder="{{ placeholder }}" /></a>*/
/*                   <input type="hidden" name="config_image" value="{{ config_image }}" id="input-image" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-open"><span data-toggle="tooltip" data-container="#tab-general" title="{{ help_open }}">{{ entry_open }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <textarea name="config_open" rows="5" placeholder="{{ entry_open }}" id="input-open" class="form-control">{{ config_open }}</textarea>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-comment"><span data-toggle="tooltip" data-container="#tab-general" title="{{ help_comment }}">{{ entry_comment }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <textarea name="config_comment" rows="5" placeholder="{{ entry_comment }}" id="input-comment" class="form-control">{{ config_comment }}</textarea>*/
/*                 </div>*/
/*               </div>*/
/*               {% if locations %}*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label"><span data-toggle="tooltip" data-container="#tab-general" title="{{ help_location }}">{{ entry_location }}</span></label>*/
/*                 <div class="col-sm-10"> {% for location in locations %}*/
/*                   <div class="checkbox">*/
/*                     <label> {% if location.location_id in config_location %}*/
/*                       <input type="checkbox" name="config_location[]" value="{{ location.location_id }}" checked="checked" />*/
/*                       {{ location.name }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="config_location[]" value="{{ location.location_id }}" />*/
/*                       {{ location.name }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                   {% endfor %} </div>*/
/*               </div>*/
/*               {% endif %} </div>*/
/*             <div class="tab-pane" id="tab-local">*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-country">{{ entry_country }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_country_id" id="input-country" class="form-control">*/
/*                     */
/*                     {% for country in countries %}*/
/*                     {% if country.country_id == config_country_id %}*/
/*                     */
/*                     <option value="{{ country.country_id }}" selected="selected">{{ country.name }}</option>*/
/*                     */
/*                     {% else %}*/
/*                     */
/*                     <option value="{{ country.country_id }}">{{ country.name }}</option>*/
/*                     */
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-zone">{{ entry_zone }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_zone_id" id="input-zone" class="form-control">*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-language">{{ entry_language }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_language" id="input-language" class="form-control">*/
/*                     */
/*                     {% for language in languages %}*/
/*                     {% if language.code == config_language %}*/
/*                     */
/*                     <option value="{{ language.code }}" selected="selected">{{ language.name }}</option>*/
/*                     */
/*                     {% else %}*/
/*                     */
/*                     <option value="{{ language.code }}">{{ language.name }}</option>*/
/*                     */
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-admin-language">{{ entry_admin_language }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_admin_language" id="input-admin-language" class="form-control">*/
/*                     */
/*                     {% for language in languages %}*/
/*                     {% if language.code == config_admin_language %}*/
/*                     */
/*                     <option value="{{ language.code }}" selected="selected">{{ language.name }}</option>*/
/*                     */
/*                     {% else %}*/
/*                     */
/*                     <option value="{{ language.code }}">{{ language.name }}</option>*/
/*                     */
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-currency"><span data-toggle="tooltip" title="{{ help_currency }}">{{ entry_currency }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_currency" id="input-currency" class="form-control">*/
/*                     */
/*                     {% for currency in currencies %}*/
/*                     {% if currency.code == config_currency %}*/
/*                     */
/*                     <option value="{{ currency.code }}" selected="selected">{{ currency.title }}</option>*/
/*                     */
/*                     {% else %}*/
/*                     */
/*                     <option value="{{ currency.code }}">{{ currency.title }}</option>*/
/*                     */
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_currency_auto }}">{{ entry_currency_auto }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <label class="radio-inline"> {% if config_currency_auto %}*/
/*                     <input type="radio" name="config_currency_auto" value="1" checked="checked" />*/
/*                     {{ text_yes }}*/
/*                     {% else %}*/
/*                     <input type="radio" name="config_currency_auto" value="1" />*/
/*                     {{ text_yes }}*/
/*                     {% endif %} </label>*/
/*                   <label class="radio-inline"> {% if not config_currency_auto %}*/
/*                     <input type="radio" name="config_currency_auto" value="0" checked="checked" />*/
/*                     {{ text_no }}*/
/*                     {% else %}*/
/*                     <input type="radio" name="config_currency_auto" value="0" />*/
/*                     {{ text_no }}*/
/*                     {% endif %} </label>*/
/*                 </div>*/
/*               </div>*/
/* */
/* <!--*****************Start khorshidi Date********************-->*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-khorshididate-format"><span data-toggle="tooltip" title="{{ help_khorshididate_format }}">{{ entry_khorshididate_format }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_khorshididate_format" id="input-khorshididate-format" class="form-control">*/
/* 					{% for format in khorshididate_formats %}*/
/* 					{% if format.code == config_khorshididate_format %}*/
/*                     <option value="{{ format.code }}" selected="selected">{{ format.title }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ format.code }}">{{ format.title }}</option>*/
/* 					{% endif %}*/
/* 					{% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/* <!--*****************Ends khorshidi Date********************-->*/
/* 			*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-length-class">{{ entry_length_class }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_length_class_id" id="input-length-class" class="form-control">*/
/*                     */
/*                     {% for length_class in length_classes %}*/
/*                     {% if length_class.length_class_id == config_length_class_id %}*/
/*                     */
/*                     <option value="{{ length_class.length_class_id }}" selected="selected">{{ length_class.title }}</option>*/
/*                     */
/*                     {% else %}*/
/*                     */
/*                     <option value="{{ length_class.length_class_id }}">{{ length_class.title }}</option>*/
/*                     */
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-weight-class">{{ entry_weight_class }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_weight_class_id" id="input-weight-class" class="form-control">*/
/*                     */
/*                     {% for weight_class in weight_classes %}*/
/*                     {% if weight_class.weight_class_id == config_weight_class_id %}*/
/*                     */
/*                     <option value="{{ weight_class.weight_class_id }}" selected="selected">{{ weight_class.title }}</option>*/
/*                     */
/*                     {% else %}*/
/*                     */
/*                     <option value="{{ weight_class.weight_class_id }}">{{ weight_class.title }}</option>*/
/*                     */
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-option">*/
/*               <fieldset>*/
/*                 <legend>{{ text_product }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_product_count }}">{{ entry_product_count }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_product_count %}*/
/*                       <input type="radio" name="config_product_count" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_product_count" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_product_count %}*/
/*                       <input type="radio" name="config_product_count" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_product_count" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group required">*/
/*                   <label class="col-sm-2 control-label" for="input-admin-limit"><span data-toggle="tooltip" title="{{ help_limit_admin }}">{{ entry_limit_admin }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_limit_admin" value="{{ config_limit_admin }}" placeholder="{{ entry_limit_admin }}" id="input-admin-limit" class="form-control" />*/
/*                     {% if error_limit_admin %}*/
/*                     <div class="text-danger">{{ error_limit_admin }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_review }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_review }}">{{ entry_review }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_review_status %}*/
/*                       <input type="radio" name="config_review_status" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_review_status" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_review_status %}*/
/*                       <input type="radio" name="config_review_status" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_review_status" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_review_guest }}">{{ entry_review_guest }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_review_guest %}*/
/*                       <input type="radio" name="config_review_guest" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_review_guest" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_review_guest %}*/
/*                       <input type="radio" name="config_review_guest" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_review_guest" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_voucher }}</legend>*/
/*                 <div class="form-group required">*/
/*                   <label class="col-sm-2 control-label" for="input-voucher-min"><span data-toggle="tooltip" title="{{ help_voucher_min }}">{{ entry_voucher_min }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_voucher_min" value="{{ config_voucher_min }}" placeholder="{{ entry_voucher_min }}" id="input-voucher-min" class="form-control" />*/
/*                     {% if error_voucher_min %}*/
/*                     <div class="text-danger">{{ error_voucher_min }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*                 <div class="form-group required">*/
/*                   <label class="col-sm-2 control-label" for="input-voucher-max"><span data-toggle="tooltip" title="{{ help_voucher_max }}">{{ entry_voucher_max }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_voucher_max" value="{{ config_voucher_max }}" placeholder="{{ entry_voucher_max }}" id="input-voucher-max" class="form-control" />*/
/*                     {% if error_voucher_max %}*/
/*                     <div class="text-danger">{{ error_voucher_max }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_tax }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label">{{ entry_tax }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_tax %}*/
/*                       <input type="radio" name="config_tax" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_tax" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_tax %}*/
/*                       <input type="radio" name="config_tax" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_tax" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-tax-default"><span data-toggle="tooltip" title="{{ help_tax_default }}">{{ entry_tax_default }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_tax_default" id="input-tax-default" class="form-control">*/
/*                       <option value="">{{ text_none }}</option>*/
/*                       */
/*                       {% if config_tax_default == 'shipping' %}*/
/*                       */
/*                       <option value="shipping" selected="selected">{{ text_shipping }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="shipping">{{ text_shipping }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% if config_tax_default == 'payment' %}*/
/*                       */
/*                       <option value="payment" selected="selected">{{ text_payment }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="payment">{{ text_payment }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-tax-customer"><span data-toggle="tooltip" title="{{ help_tax_customer }}">{{ entry_tax_customer }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_tax_customer" id="input-tax-customer" class="form-control">*/
/*                       <option value="">{{ text_none }}</option>*/
/*                       */
/*                       {% if config_tax_customer == 'shipping' %}*/
/*                       */
/*                       <option value="shipping" selected="selected">{{ text_shipping }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="shipping">{{ text_shipping }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% if config_tax_customer == 'payment' %}*/
/*                       */
/*                       <option value="payment" selected="selected">{{ text_payment }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="payment">{{ text_payment }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_account }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_customer_online }}">{{ entry_customer_online }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_customer_online %}*/
/*                       <input type="radio" name="config_customer_online" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_customer_online" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_customer_online %}*/
/*                       <input type="radio" name="config_customer_online" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_customer_online" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_customer_activity }}">{{ entry_customer_activity }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_customer_activity %}*/
/*                       <input type="radio" name="config_customer_activity" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_customer_activity" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_customer_activity %}*/
/*                       <input type="radio" name="config_customer_activity" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_customer_activity" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label">{{ entry_customer_search }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_customer_search %}*/
/*                       <input type="radio" name="config_customer_search" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_customer_search" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_customer_search %}*/
/*                       <input type="radio" name="config_customer_search" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_customer_search" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-customer-group"><span data-toggle="tooltip" title="{{ help_customer_group }}">{{ entry_customer_group }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_customer_group_id" id="input-customer-group" class="form-control">*/
/*                       */
/*                       {% for customer_group in customer_groups %}*/
/*                       {% if customer_group.customer_group_id == config_customer_group_id %}*/
/*                       */
/*                       <option value="{{ customer_group.customer_group_id }}" selected="selected">{{ customer_group.name }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_customer_group_display }}">{{ entry_customer_group_display }}</span></label>*/
/*                   <div class="col-sm-10"> {% for customer_group in customer_groups %}*/
/*                     <div class="checkbox">*/
/*                       <label> {% if customer_group.customer_group_id in config_customer_group_display %}*/
/*                         <input type="checkbox" name="config_customer_group_display[]" value="{{ customer_group.customer_group_id }}" checked="checked" />*/
/*                         {{ customer_group.name }}*/
/*                         {% else %}*/
/*                         <input type="checkbox" name="config_customer_group_display[]" value="{{ customer_group.customer_group_id }}" />*/
/*                         {{ customer_group.name }}*/
/*                         {% endif %} </label>*/
/*                     </div>*/
/*                     {% endfor %}*/
/*                     {% if error_customer_group_display %}*/
/*                     <div class="text-danger">{{ error_customer_group_display }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_customer_price }}">{{ entry_customer_price }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_customer_price %}*/
/*                       <input type="radio" name="config_customer_price" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_customer_price" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_customer_price %}*/
/*                       <input type="radio" name="config_customer_price" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_customer_price" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-login-attempts"><span data-toggle="tooltip" title="{{ help_login_attempts }}">{{ entry_login_attempts }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_login_attempts" value="{{ config_login_attempts }}" placeholder="{{ entry_login_attempts }}" id="input-login-attempts" class="form-control" />*/
/*                     {% if error_login_attempts %}*/
/*                     <div class="text-danger">{{ error_login_attempts }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-account"><span data-toggle="tooltip" title="{{ help_account }}">{{ entry_account }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_account_id" id="input-account" class="form-control">*/
/*                       <option value="0">{{ text_none }}</option>*/
/*                       */
/*                       {% for information in informations %}*/
/*                       {% if information.information_id == config_account_id %}*/
/*                       */
/*                       <option value="{{ information.information_id }}" selected="selected">{{ information.title }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="{{ information.information_id }}">{{ information.title }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_checkout }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-invoice-prefix"><span data-toggle="tooltip" title="{{ help_invoice_prefix }}">{{ entry_invoice_prefix }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_invoice_prefix" value="{{ config_invoice_prefix }}" placeholder="{{ entry_invoice_prefix }}" id="input-invoice-prefix" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_cart_weight }}">{{ entry_cart_weight }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_cart_weight %}*/
/*                       <input type="radio" name="config_cart_weight" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_cart_weight" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_cart_weight %}*/
/*                       <input type="radio" name="config_cart_weight" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_cart_weight" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_checkout_guest }}">{{ entry_checkout_guest }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_checkout_guest %}*/
/*                       <input type="radio" name="config_checkout_guest" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_checkout_guest" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_checkout_guest %}*/
/*                       <input type="radio" name="config_checkout_guest" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_checkout_guest" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-checkout"><span data-toggle="tooltip" title="{{ help_checkout }}">{{ entry_checkout }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_checkout_id" id="input-checkout" class="form-control">*/
/*                       <option value="0">{{ text_none }}</option>*/
/*                       */
/*                       {% for information in informations %}*/
/*                       {% if information.information_id == config_checkout_id %}*/
/*                       */
/*                       <option value="{{ information.information_id }}" selected="selected">{{ information.title }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="{{ information.information_id }}">{{ information.title }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-order-status"><span data-toggle="tooltip" title="{{ help_order_status }}">{{ entry_order_status }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_order_status_id" id="input-order-status" class="form-control">*/
/*                       */
/*                       {% for order_status in order_statuses %}*/
/*                       {% if order_status.order_status_id == config_order_status_id %}*/
/*                       */
/*                       <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-process-status"><span data-toggle="tooltip" title="{{ help_processing_status }}">{{ entry_processing_status }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="well well-sm" style="height: 150px; overflow: auto;"> {% for order_status in order_statuses %}*/
/*                       <div class="checkbox">*/
/*                         <label> {% if order_status.order_status_id in config_processing_status %}*/
/*                           <input type="checkbox" name="config_processing_status[]" value="{{ order_status.order_status_id }}" checked="checked" />*/
/*                           {{ order_status.name }}*/
/*                           {% else %}*/
/*                           <input type="checkbox" name="config_processing_status[]" value="{{ order_status.order_status_id }}" />*/
/*                           {{ order_status.name }}*/
/*                           {% endif %} </label>*/
/*                       </div>*/
/*                       {% endfor %} </div>*/
/*                     {% if error_processing_status %}*/
/*                     <div class="text-danger">{{ error_processing_status }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-complete-status"><span data-toggle="tooltip" title="{{ help_complete_status }}">{{ entry_complete_status }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="well well-sm" style="height: 150px; overflow: auto;"> {% for order_status in order_statuses %}*/
/*                       <div class="checkbox">*/
/*                         <label> {% if order_status.order_status_id in config_complete_status %}*/
/*                           <input type="checkbox" name="config_complete_status[]" value="{{ order_status.order_status_id }}" checked="checked" />*/
/*                           {{ order_status.name }}*/
/*                           {% else %}*/
/*                           <input type="checkbox" name="config_complete_status[]" value="{{ order_status.order_status_id }}" />*/
/*                           {{ order_status.name }}*/
/*                           {% endif %} </label>*/
/*                       </div>*/
/*                       {% endfor %} </div>*/
/*                     {% if error_complete_status %}*/
/*                     <div class="text-danger">{{ error_complete_status }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-fraud-status"><span data-toggle="tooltip" title="{{ help_fraud_status }}">{{ entry_fraud_status }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_fraud_status_id" id="input-fraud-status" class="form-control">*/
/*                       */
/*                       {% for order_status in order_statuses %}*/
/*                       {% if order_status.order_status_id == config_fraud_status_id %}*/
/*                       */
/*                       <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-api"><span data-toggle="tooltip" title="{{ help_api }}">{{ entry_api }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_api_id" id="input-api" class="form-control">*/
/*                       <option value="0">{{ text_none }}</option>*/
/*                       */
/*                       {% for api in apis %}*/
/*                       {% if api.api_id == config_api_id %}*/
/*                       */
/*                       <option value="{{ api.api_id }}" selected="selected">{{ api.username }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="{{ api.api_id }}">{{ api.username }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_stock }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_stock_display }}">{{ entry_stock_display }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_stock_display %}*/
/*                       <input type="radio" name="config_stock_display" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_stock_display" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_stock_display %}*/
/*                       <input type="radio" name="config_stock_display" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_stock_display" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_stock_warning }}">{{ entry_stock_warning }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_stock_warning %}*/
/*                       <input type="radio" name="config_stock_warning" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_stock_warning" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_stock_warning %}*/
/*                       <input type="radio" name="config_stock_warning" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_stock_warning" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_stock_checkout }}">{{ entry_stock_checkout }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_stock_checkout %}*/
/*                       <input type="radio" name="config_stock_checkout" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_stock_checkout" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_stock_checkout %}*/
/*                       <input type="radio" name="config_stock_checkout" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_stock_checkout" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_affiliate }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-affiliate-group">{{ entry_affiliate_group }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_affiliate_group_id" id="input-affiliate-group" class="form-control">*/
/*                       */
/*                       {% for customer_group in customer_groups %}*/
/*                       {% if customer_group.customer_group_id == config_affiliate_group_id %}*/
/*                       */
/*                       <option value="{{ customer_group.customer_group_id }}" selected="selected">{{ customer_group.name }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_affiliate_approval }}">{{ entry_affiliate_approval }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_affiliate_approval %}*/
/*                       <input type="radio" name="config_affiliate_approval" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_affiliate_approval" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_affiliate_approval %}*/
/*                       <input type="radio" name="config_affiliate_approval" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_affiliate_approval" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_affiliate_auto }}">{{ entry_affiliate_auto }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_affiliate_auto %}*/
/*                       <input type="radio" name="config_affiliate_auto" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_affiliate_auto" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_affiliate_auto %}*/
/*                       <input type="radio" name="config_affiliate_auto" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_affiliate_auto" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-affiliate-commission"><span data-toggle="tooltip" title="{{ help_affiliate_commission }}">{{ entry_affiliate_commission }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_affiliate_commission" value="{{ config_affiliate_commission }}" placeholder="{{ entry_affiliate_commission }}" id="input-affiliate-commission" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-affiliate"><span data-toggle="tooltip" title="{{ help_affiliate }}">{{ entry_affiliate }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_affiliate_id" id="input-affiliate" class="form-control">*/
/*                       <option value="0">{{ text_none }}</option>*/
/*                       */
/*                       {% for information in informations %}*/
/*                       {% if information.information_id == config_affiliate_id %}*/
/*                       */
/*                       <option value="{{ information.information_id }}" selected="selected">{{ information.title }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="{{ information.information_id }}">{{ information.title }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_return }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-return"><span data-toggle="tooltip" title="{{ help_return }}">{{ entry_return }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_return_id" id="input-return" class="form-control">*/
/*                       <option value="0">{{ text_none }}</option>*/
/*                       */
/*                       {% for information in informations %}*/
/*                       {% if information.information_id == config_return_id %}*/
/*                       */
/*                       <option value="{{ information.information_id }}" selected="selected">{{ information.title }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="{{ information.information_id }}">{{ information.title }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-return-status"><span data-toggle="tooltip" title="{{ help_return_status }}">{{ entry_return_status }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_return_status_id" id="input-return-status" class="form-control">*/
/*                       */
/*                       {% for return_status in return_statuses %}*/
/*                       {% if return_status.return_status_id == config_return_status_id %}*/
/*                       */
/*                       <option value="{{ return_status.return_status_id }}" selected="selected">{{ return_status.name }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="{{ return_status.return_status_id }}">{{ return_status.name }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_captcha }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_captcha }}">{{ entry_captcha }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_captcha" id="input-captcha" class="form-control">*/
/*                       <option value="">{{ text_none }}</option>*/
/*                       */
/*                       {% for captcha in captchas %}*/
/*                       {% if captcha.value == config_captcha %}*/
/*                       */
/*                       <option value="{{ captcha.value }}" selected="selected">{{ captcha.text }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="{{ captcha.value }}">{{ captcha.text }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label">{{ entry_captcha_page }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="well well-sm" style="height: 150px; overflow: auto;"> {% for captcha_page in captcha_pages %}*/
/*                       <div class="checkbox">*/
/*                         <label> {% if captcha_page.value in config_captcha_page %}*/
/*                           <input type="checkbox" name="config_captcha_page[]" value="{{ captcha_page.value }}" checked="checked" />*/
/*                           {{ captcha_page.text }}*/
/*                           {% else %}*/
/*                           <input type="checkbox" name="config_captcha_page[]" value="{{ captcha_page.value }}" />*/
/*                           {{ captcha_page.text }}*/
/*                           {% endif %} </label>*/
/*                       </div>*/
/*                       {% endfor %} </div>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-image">*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-logo">{{ entry_logo }}</label>*/
/*                 <div class="col-sm-10"><a href="" id="thumb-logo" data-toggle="image" class="img-thumbnail"><img src="{{ logo }}" alt="" title="" data-placeholder="{{ placeholder }}" /></a>*/
/*                   <input type="hidden" name="config_logo" value="{{ config_logo }}" id="input-logo" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-icon"><span data-toggle="tooltip" title="{{ help_icon }}">{{ entry_icon }}</span></label>*/
/*                 <div class="col-sm-10"><a href="" id="thumb-icon" data-toggle="image" class="img-thumbnail"><img src="{{ icon }}" alt="" title="" data-placeholder="{{ placeholder }}" /></a>*/
/*                   <input type="hidden" name="config_icon" value="{{ config_icon }}" id="input-icon" />*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-mail">*/
/*               <fieldset>*/
/*                 <legend>{{ text_general }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-mail-engine"><span data-toggle="tooltip" title="{{ help_mail_engine }}">{{ entry_mail_engine }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_mail_engine" id="input-mail-engine" class="form-control">*/
/*                       */
/*                       {% if config_mail_engine == 'mail' %}*/
/*                       */
/*                       <option value="mail" selected="selected">{{ text_mail }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="mail">{{ text_mail }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% if config_mail_engine == 'smtp' %}*/
/*                       */
/*                       <option value="smtp" selected="selected">{{ text_smtp }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="smtp">{{ text_smtp }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-mail-parameter"><span data-toggle="tooltip" title="{{ help_mail_parameter }}">{{ entry_mail_parameter }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_mail_parameter" value="{{ config_mail_parameter }}" placeholder="{{ entry_mail_parameter }}" id="input-mail-parameter" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-mail-smtp-hostname"><span data-toggle="tooltip" title="{{ help_mail_smtp_hostname }}">{{ entry_mail_smtp_hostname }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_mail_smtp_hostname" value="{{ config_mail_smtp_hostname }}" placeholder="{{ entry_mail_smtp_hostname }}" id="input-mail-smtp-hostname" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-mail-smtp-username">{{ entry_mail_smtp_username }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_mail_smtp_username" value="{{ config_mail_smtp_username }}" placeholder="{{ entry_mail_smtp_username }}" id="input-mail-smtp-username" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-mail-smtp-password"><span data-toggle="tooltip" title="{{ help_mail_smtp_password }}">{{ entry_mail_smtp_password }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_mail_smtp_password" value="{{ config_mail_smtp_password }}" placeholder="{{ entry_mail_smtp_password }}" id="input-mail-smtp-password" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-mail-smtp-port">{{ entry_mail_smtp_port }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_mail_smtp_port" value="{{ config_mail_smtp_port }}" placeholder="{{ entry_mail_smtp_port }}" id="input-mail-smtp-port" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-mail-smtp-timeout">{{ entry_mail_smtp_timeout }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_mail_smtp_timeout" value="{{ config_mail_smtp_timeout }}" placeholder="{{ entry_mail_smtp_timeout }}" id="input-mail-smtp-timeout" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_mail_alert }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_mail_alert }}">{{ entry_mail_alert }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="well well-sm" style="height: 150px; overflow: auto;"> {% for mail_alert in mail_alerts %}*/
/*                       <div class="checkbox">*/
/*                         <label> {% if mail_alert.value in config_mail_alert %}*/
/*                           <input type="checkbox" name="config_mail_alert[]" value="{{ mail_alert.value }}" checked="checked" />*/
/*                           {{ mail_alert.text }}*/
/*                           {% else %}*/
/*                           <input type="checkbox" name="config_mail_alert[]" value="{{ mail_alert.value }}" />*/
/*                           {{ mail_alert.text }}*/
/*                           {% endif %} </label>*/
/*                       </div>*/
/*                       {% endfor %} </div>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-mail-alert-email"><span data-toggle="tooltip" title="{{ help_mail_alert_email }}">{{ entry_mail_alert_email }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <textarea name="config_mail_alert_email" rows="5" placeholder="{{ entry_mail_alert_email }}" id="input-alert-email" class="form-control">{{ config_mail_alert_email }}</textarea>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-server">*/
/*               <fieldset>*/
/*                 <legend>{{ text_general }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_maintenance }}">{{ entry_maintenance }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_maintenance %}*/
/*                       <input type="radio" name="config_maintenance" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_maintenance" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_maintenance %}*/
/*                       <input type="radio" name="config_maintenance" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_maintenance" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_seo_url }}">{{ entry_seo_url }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_seo_url %}*/
/*                       <input type="radio" name="config_seo_url" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_seo_url" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_seo_url %}*/
/*                       <input type="radio" name="config_seo_url" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_seo_url" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-robots"><span data-toggle="tooltip" title="{{ help_robots }}">{{ entry_robots }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <textarea name="config_robots" rows="5" placeholder="{{ entry_robots }}" id="input-robots" class="form-control">{{ config_robots }}</textarea>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-compression"><span data-toggle="tooltip" title="{{ help_compression }}">{{ entry_compression }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_compression" value="{{ config_compression }}" placeholder="{{ entry_compression }}" id="input-compression" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_security }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_secure }}">{{ entry_secure }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_secure %}*/
/*                       <input type="radio" name="config_secure" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_secure" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_secure %}*/
/*                       <input type="radio" name="config_secure" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_secure" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_password }}">{{ entry_password }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_password %}*/
/*                       <input type="radio" name="config_password" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_password" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_password %}*/
/*                       <input type="radio" name="config_password" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_password" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_shared }}">{{ entry_shared }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_shared %}*/
/*                       <input type="radio" name="config_shared" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_shared" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_shared %}*/
/*                       <input type="radio" name="config_shared" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_shared" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-encryption"><span data-toggle="tooltip" title="{{ help_encryption }}">{{ entry_encryption }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <textarea name="config_encryption" rows="5" placeholder="{{ entry_encryption }}" id="input-encryption" class="form-control">{{ config_encryption }}</textarea>*/
/*                     {% if error_encryption %}*/
/*                     <div class="text-danger">{{ error_encryption }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_upload }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-file-max-size"><span data-toggle="tooltip" title="{{ help_file_max_size }}">{{ entry_file_max_size }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_file_max_size" value="{{ config_file_max_size }}" placeholder="{{ entry_file_max_size }}" id="input-file-max-size" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-file-ext-allowed"><span data-toggle="tooltip" title="{{ help_file_ext_allowed }}">{{ entry_file_ext_allowed }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <textarea name="config_file_ext_allowed" rows="5" placeholder="{{ entry_file_ext_allowed }}" id="input-file-ext-allowed" class="form-control">{{ config_file_ext_allowed }}</textarea>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-file-mime-allowed"><span data-toggle="tooltip" title="{{ help_file_mime_allowed }}">{{ entry_file_mime_allowed }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <textarea name="config_file_mime_allowed" rows="5" placeholder="{{ entry_file_mime_allowed }}" id="input-file-mime-allowed" class="form-control">{{ config_file_mime_allowed }}</textarea>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_error }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label">{{ entry_error_display }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_error_display %}*/
/*                       <input type="radio" name="config_error_display" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_error_display" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_error_display %}*/
/*                       <input type="radio" name="config_error_display" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_error_display" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label">{{ entry_error_log }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_error_log %}*/
/*                       <input type="radio" name="config_error_log" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_error_log" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_error_log %}*/
/*                       <input type="radio" name="config_error_log" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_error_log" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %}</label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group required">*/
/*                   <label class="col-sm-2 control-label" for="input-error-filename">{{ entry_error_filename }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_error_filename" value="{{ config_error_filename }}" placeholder="{{ entry_error_filename }}" id="input-error-filename" class="form-control" />*/
/*                     {% if error_log %}*/
/*                     <div class="text-danger">{{ error_log }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <script type="text/javascript"><!--*/
/* $('select[name=\'config_theme\']').on('change', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=setting/setting/theme&user_token={{ user_token }}&theme=' + this.value,*/
/* 		dataType: 'html',*/
/* 		beforeSend: function() {*/
/* 			$('select[name=\'config_theme\']').prop('disabled', true);*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('select[name=\'config_theme\']').prop('disabled', false);*/
/* 		},*/
/* 		success: function(html) {*/
/* 			$('#theme').attr('src', html);*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('select[name=\'config_theme\']').trigger('change');*/
/* //--></script> */
/*   <script type="text/javascript"><!--*/
/* $('select[name=\'config_country_id\']').on('change', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=localisation/country/country&user_token={{ user_token }}&country_id=' + this.value,*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('select[name=\'config_country_id\']').prop('disabled', true);*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('select[name=\'config_country_id\']').prop('disabled', false);*/
/* 		},*/
/* 		success: function(json) {*/
/* 			html = '<option value="">{{ text_select }}</option>';*/
/* */
/* 			if (json['zone'] && json['zone'] != '') {*/
/* 				for (i = 0; i < json['zone'].length; i++) {*/
/*           			html += '<option value="' + json['zone'][i]['zone_id'] + '"';*/
/* */
/* 					if (json['zone'][i]['zone_id'] == '{{ config_zone_id }}') {*/
/*             			html += ' selected="selected"';*/
/* 					}*/
/* */
/* 					html += '>' + json['zone'][i]['name'] + '</option>';*/
/* 				}*/
/* 			} else {*/
/* 				html += '<option value="0" selected="selected">{{ text_none }}</option>';*/
/* 			}*/
/* */
/* 			$('select[name=\'config_zone_id\']').html(html);*/
/* 			*/
/* 			$('#button-save').prop('disabled', false);*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('select[name=\'config_country_id\']').trigger('change');*/
/* //--></script></div>*/
/* {{ footer }} */
