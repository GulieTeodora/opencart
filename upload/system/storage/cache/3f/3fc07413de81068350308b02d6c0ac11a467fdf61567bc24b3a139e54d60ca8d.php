<?php

/* extension/module/pp_login.twig */
class __TwigTemplate_8e5727e989c0a66ef5281c4f8fbbf86b92cd644dd487efc9749aba2be8c3195a extends Twig_Template
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
        <button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
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
  <div class=\"container-fluid\">
    ";
        // line 17
        if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "error_warning", array())) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "error_warning", array());
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"entry-client_id\">";
        // line 29
        echo (isset($context["entry_client_id"]) ? $context["entry_client_id"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"module_pp_login_client_id\" value=\"";
        // line 31
        echo (isset($context["module_pp_login_client_id"]) ? $context["module_pp_login_client_id"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_client_id"]) ? $context["entry_client_id"] : null);
        echo "\" id=\"entry-client_id\" class=\"form-control\"/>
              ";
        // line 32
        if ((isset($context["error_client_id"]) ? $context["error_client_id"] : null)) {
            // line 33
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_client_id"]) ? $context["error_client_id"] : null);
            echo "</div>
              ";
        }
        // line 35
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"entry-secret\">";
        // line 38
        echo (isset($context["entry_secret"]) ? $context["entry_secret"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"module_pp_login_secret\" value=\"";
        // line 40
        echo (isset($context["module_pp_login_secret"]) ? $context["module_pp_login_secret"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_secret"]) ? $context["entry_secret"] : null);
        echo "\" id=\"entry-secret\" class=\"form-control\"/>
              ";
        // line 41
        if ((isset($context["error_secret"]) ? $context["error_secret"] : null)) {
            // line 42
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_secret"]) ? $context["error_secret"] : null);
            echo "</div>
              ";
        }
        // line 44
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"entry-sandbox\"><span data-toggle=\"tooltip\" title=\"";
        // line 47
        echo (isset($context["help_sandbox"]) ? $context["help_sandbox"] : null);
        echo "\">";
        echo (isset($context["entry_sandbox"]) ? $context["entry_sandbox"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <select name=\"module_pp_login_sandbox\" id=\"entry-sandbox\" class=\"form-control\">
                ";
        // line 50
        if ((isset($context["module_pp_login_sandbox"]) ? $context["module_pp_login_sandbox"] : null)) {
            // line 51
            echo "                <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                <option value=\"0\">";
            // line 52
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
                ";
        } else {
            // line 54
            echo "                <option value=\"1\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 55
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
                ";
        }
        // line 57
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-loggin\"><span data-toggle=\"tooltip\" title=\"";
        // line 61
        echo (isset($context["help_debug_logging"]) ? $context["help_debug_logging"] : null);
        echo "\">";
        echo (isset($context["entry_debug"]) ? $context["entry_debug"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <select name=\"module_pp_login_debug\" id=\"input-logging\" class=\"form-control\">
                ";
        // line 64
        if ((isset($context["module_pp_login_debug"]) ? $context["module_pp_login_debug"] : null)) {
            // line 65
            echo "                <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                <option value=\"0\">";
            // line 66
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
                ";
        } else {
            // line 68
            echo "                <option value=\"1\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 69
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
                ";
        }
        // line 71
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-customer-group\"><span data-toggle=\"tooltip\" title=\"";
        // line 75
        echo (isset($context["help_customer_group"]) ? $context["help_customer_group"] : null);
        echo "\">";
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <select name=\"module_pp_login_customer_group_id\" id=\"input-customer-group\" class=\"form-control\">
                ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 79
            echo "                ";
            if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == (isset($context["module_pp_login_customer_group_id"]) ? $context["module_pp_login_customer_group_id"] : null))) {
                // line 80
                echo "                <option value=\"";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</option>
                ";
            } else {
                // line 82
                echo "                <option value=\"";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\">";
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</option>
                ";
            }
            // line 84
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-button_colour\">";
        // line 89
        echo (isset($context["entry_button"]) ? $context["entry_button"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"module_pp_login_button_colour\" id=\"input-button_colour\" class=\"form-control\">
                ";
        // line 92
        if (((isset($context["module_pp_login_button_colour"]) ? $context["module_pp_login_button_colour"] : null) == "blue")) {
            // line 93
            echo "                <option value=\"blue\" selected=\"selected\">";
            echo (isset($context["text_button_blue"]) ? $context["text_button_blue"] : null);
            echo "</option>
                <option value=\"grey\">";
            // line 94
            echo (isset($context["text_button_grey"]) ? $context["text_button_grey"] : null);
            echo "</option>
                ";
        } else {
            // line 96
            echo "                <option value=\"blue\">";
            echo (isset($context["text_button_blue"]) ? $context["text_button_blue"] : null);
            echo "</option>
                <option value=\"grey\" selected=\"selected\">";
            // line 97
            echo (isset($context["text_button_grey"]) ? $context["text_button_grey"] : null);
            echo "</option>
                ";
        }
        // line 99
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-seamless\"><span data-toggle=\"tooltip\" title=\"";
        // line 103
        echo (isset($context["help_seamless"]) ? $context["help_seamless"] : null);
        echo "\">";
        echo (isset($context["entry_seamless"]) ? $context["entry_seamless"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <select name=\"module_pp_login_seamless\" id=\"input-logging\" class=\"form-control\">
                ";
        // line 106
        if ((isset($context["module_pp_login_seamless"]) ? $context["module_pp_login_seamless"] : null)) {
            // line 107
            echo "                <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                <option value=\"0\">";
            // line 108
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
                ";
        } else {
            // line 110
            echo "                <option value=\"1\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 111
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
                ";
        }
        // line 113
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 117
        echo (isset($context["help_locale"]) ? $context["help_locale"] : null);
        echo "\">";
        echo (isset($context["entry_locale"]) ? $context["entry_locale"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 120
            echo "              <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" /></span>
                <select name=\"module_pp_login_locale[";
            // line 121
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "]\" class=\"form-control\">
                  ";
            // line 122
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) ? $context["locales"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 123
                echo "                  ";
                if (($this->getAttribute((isset($context["pp_login_locale"]) ? $context["pp_login_locale"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array") && ($this->getAttribute((isset($context["pp_login_locale"]) ? $context["pp_login_locale"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array") == $this->getAttribute($context["locale"], "value", array())))) {
                    // line 124
                    echo "                  <option value=\"";
                    echo $this->getAttribute($context["locale"], "value", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["locale"], "text", array());
                    echo "</option>
                  ";
                } else {
                    // line 126
                    echo "                  <option value=\"";
                    echo $this->getAttribute($context["locale"], "value", array());
                    echo "\">";
                    echo $this->getAttribute($context["locale"], "text", array());
                    echo "</option>
                  ";
                }
                // line 128
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            echo "                </select>
              </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 135
        echo (isset($context["help_return_url"]) ? $context["help_return_url"] : null);
        echo "\">";
        echo (isset($context["entry_return_url"]) ? $context["entry_return_url"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" readonly id=\"return-url\" value=\"";
        // line 137
        echo (isset($context["return_url"]) ? $context["return_url"] : null);
        echo "\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 141
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"module_pp_login_status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 144
        if ((isset($context["module_pp_login_status"]) ? $context["module_pp_login_status"] : null)) {
            // line 145
            echo "                <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\">";
            // line 146
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        } else {
            // line 148
            echo "                <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 149
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        }
        // line 151
        echo "              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 159
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/module/pp_login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  440 => 159,  430 => 151,  425 => 149,  420 => 148,  415 => 146,  410 => 145,  408 => 144,  402 => 141,  395 => 137,  388 => 135,  383 => 132,  375 => 129,  369 => 128,  361 => 126,  353 => 124,  350 => 123,  346 => 122,  342 => 121,  333 => 120,  329 => 119,  322 => 117,  316 => 113,  311 => 111,  306 => 110,  301 => 108,  296 => 107,  294 => 106,  286 => 103,  280 => 99,  275 => 97,  270 => 96,  265 => 94,  260 => 93,  258 => 92,  252 => 89,  246 => 85,  240 => 84,  232 => 82,  224 => 80,  221 => 79,  217 => 78,  209 => 75,  203 => 71,  198 => 69,  193 => 68,  188 => 66,  183 => 65,  181 => 64,  173 => 61,  167 => 57,  162 => 55,  157 => 54,  152 => 52,  147 => 51,  145 => 50,  137 => 47,  132 => 44,  126 => 42,  124 => 41,  118 => 40,  113 => 38,  108 => 35,  102 => 33,  100 => 32,  94 => 31,  89 => 29,  84 => 27,  78 => 24,  74 => 22,  66 => 18,  64 => 17,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-module" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     {% if error.error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error.error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ heading_title }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-module" class="form-horizontal">*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="entry-client_id">{{ entry_client_id }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="module_pp_login_client_id" value="{{ module_pp_login_client_id }}" placeholder="{{ entry_client_id }}" id="entry-client_id" class="form-control"/>*/
/*               {% if error_client_id %}*/
/*               <div class="text-danger">{{ error_client_id }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="entry-secret">{{ entry_secret }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="module_pp_login_secret" value="{{ module_pp_login_secret }}" placeholder="{{ entry_secret }}" id="entry-secret" class="form-control"/>*/
/*               {% if error_secret %}*/
/*               <div class="text-danger">{{ error_secret }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="entry-sandbox"><span data-toggle="tooltip" title="{{ help_sandbox }}">{{ entry_sandbox }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <select name="module_pp_login_sandbox" id="entry-sandbox" class="form-control">*/
/*                 {% if module_pp_login_sandbox %}*/
/*                 <option value="1" selected="selected">{{ text_yes }}</option>*/
/*                 <option value="0">{{ text_no }}</option>*/
/*                 {% else %}*/
/*                 <option value="1">{{ text_yes }}</option>*/
/*                 <option value="0" selected="selected">{{ text_no }}</option>*/
/*                 {% endif %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-loggin"><span data-toggle="tooltip" title="{{ help_debug_logging }}">{{ entry_debug }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <select name="module_pp_login_debug" id="input-logging" class="form-control">*/
/*                 {% if module_pp_login_debug %}*/
/*                 <option value="1" selected="selected">{{ text_yes }}</option>*/
/*                 <option value="0">{{ text_no }}</option>*/
/*                 {% else %}*/
/*                 <option value="1">{{ text_yes }}</option>*/
/*                 <option value="0" selected="selected">{{ text_no }}</option>*/
/*                 {% endif %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-customer-group"><span data-toggle="tooltip" title="{{ help_customer_group }}">{{ entry_customer_group }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <select name="module_pp_login_customer_group_id" id="input-customer-group" class="form-control">*/
/*                 {% for customer_group in customer_groups %}*/
/*                 {% if customer_group.customer_group_id == module_pp_login_customer_group_id %}*/
/*                 <option value="{{ customer_group.customer_group_id }}" selected="selected">{{ customer_group.name }}</option>*/
/*                 {% else %}*/
/*                 <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name }}</option>*/
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-button_colour">{{ entry_button }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="module_pp_login_button_colour" id="input-button_colour" class="form-control">*/
/*                 {% if module_pp_login_button_colour == 'blue' %}*/
/*                 <option value="blue" selected="selected">{{ text_button_blue }}</option>*/
/*                 <option value="grey">{{ text_button_grey }}</option>*/
/*                 {% else %}*/
/*                 <option value="blue">{{ text_button_blue }}</option>*/
/*                 <option value="grey" selected="selected">{{ text_button_grey }}</option>*/
/*                 {% endif %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-seamless"><span data-toggle="tooltip" title="{{ help_seamless }}">{{ entry_seamless }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <select name="module_pp_login_seamless" id="input-logging" class="form-control">*/
/*                 {% if module_pp_login_seamless %}*/
/*                 <option value="1" selected="selected">{{ text_yes }}</option>*/
/*                 <option value="0">{{ text_no }}</option>*/
/*                 {% else %}*/
/*                 <option value="1">{{ text_yes }}</option>*/
/*                 <option value="0" selected="selected">{{ text_no }}</option>*/
/*                 {% endif %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_locale }}">{{ entry_locale }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               {% for language in languages %}*/
/*               <div class="input-group"><span class="input-group-addon"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /></span>*/
/*                 <select name="module_pp_login_locale[{{ language.language_id }}]" class="form-control">*/
/*                   {% for locale in locales %}*/
/*                   {% if pp_login_locale[language.language_id] and pp_login_locale[language.language_id] == locale.value %}*/
/*                   <option value="{{ locale.value }}" selected="selected">{{ locale.text }}</option>*/
/*                   {% else %}*/
/*                   <option value="{{ locale.value }}">{{ locale.text }}</option>*/
/*                   {% endif %}*/
/*                   {% endfor %}*/
/*                 </select>*/
/*               </div>*/
/*               {% endfor %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_return_url }}">{{ entry_return_url }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" readonly id="return-url" value="{{ return_url }}" class="form-control" />*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="module_pp_login_status" id="input-status" class="form-control">*/
/*                 {% if module_pp_login_status %}*/
/*                 <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                 <option value="0">{{ text_disabled }}</option>*/
/*                 {% else %}*/
/*                 <option value="1">{{ text_enabled }}</option>*/
/*                 <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                 {% endif %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
