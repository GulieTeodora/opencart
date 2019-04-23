<?php

/* extension/module/ebay_listing.twig */
class __TwigTemplate_2bf35932e6ba7014bd0d4fb6c52cc3b4e1bca2c37ee32638f800847a341d5c47 extends Twig_Template
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
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"alert alert-info\"><i class=\"fa fa-exclamation-circle\"></i> ";
        echo (isset($context["text_about"]) ? $context["text_about"] : null);
        echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    <div class=\"alert alert-warning\"><i class=\"fa fa-exclamation-circle\"></i> ";
        // line 25
        echo (isset($context["text_register"]) ? $context["text_register"] : null);
        echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 30
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 33
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-username\">";
        // line 35
        echo (isset($context["entry_username"]) ? $context["entry_username"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"ebay_listing_username\" value=\"";
        // line 37
        echo (isset($context["ebay_listing_username"]) ? $context["ebay_listing_username"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_username"]) ? $context["entry_username"] : null);
        echo "\" id=\"input-username\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-keywords\">";
        // line 41
        echo (isset($context["entry_keywords"]) ? $context["entry_keywords"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"ebay_listing_keywords\" value=\"";
        // line 43
        echo (isset($context["ebay_listing_keywords"]) ? $context["ebay_listing_keywords"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_keywords"]) ? $context["entry_keywords"] : null);
        echo "\" id=\"input-keywords\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-description\">";
        // line 47
        echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"ebay_listing_description\" id=\"input-description\" class=\"form-control\">
                ";
        // line 50
        if ((isset($context["ebay_listing_description"]) ? $context["ebay_listing_description"] : null)) {
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
            <label class=\"col-sm-2 control-label\" for=\"input-limit\">";
        // line 61
        echo (isset($context["entry_limit"]) ? $context["entry_limit"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"ebay_listing_limit\" value=\"";
        // line 63
        echo (isset($context["ebay_listing_limit"]) ? $context["ebay_listing_limit"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_limit"]) ? $context["entry_limit"] : null);
        echo "\" id=\"input-limit\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-width\">";
        // line 67
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"ebay_listing_width\" value=\"";
        // line 69
        echo (isset($context["ebay_listing_width"]) ? $context["ebay_listing_width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-width\" class=\"form-control\" />
              ";
        // line 70
        if ((isset($context["error_width"]) ? $context["error_width"] : null)) {
            // line 71
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_width"]) ? $context["error_width"] : null);
            echo "</div>
              ";
        }
        // line 73
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-height\">";
        // line 76
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"ebay_listing_height\" value=\"";
        // line 78
        echo (isset($context["ebay_listing_height"]) ? $context["ebay_listing_height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" id=\"input-height\" class=\"form-control\" />
              ";
        // line 79
        if ((isset($context["error_height"]) ? $context["error_height"] : null)) {
            // line 80
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_height"]) ? $context["error_height"] : null);
            echo "</div>
              ";
        }
        // line 82
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-sort\">";
        // line 85
        echo (isset($context["entry_sort"]) ? $context["entry_sort"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"ebay_listing_sort\" id=\"input-sort\" class=\"form-control\">
                ";
        // line 88
        if (((isset($context["ebay_listing_sort"]) ? $context["ebay_listing_sort"] : null) == "StartTimeNewest")) {
            // line 89
            echo "                <option value=\"StartTimeNewest\" selected>";
            echo (isset($context["text_latest"]) ? $context["text_latest"] : null);
            echo "</option>
                ";
        } else {
            // line 91
            echo "                <option value=\"StartTimeNewest\">";
            echo (isset($context["text_latest"]) ? $context["text_latest"] : null);
            echo "</option>
                ";
        }
        // line 93
        echo "                ";
        if (((isset($context["ebay_listing_sort"]) ? $context["ebay_listing_sort"] : null) == "random")) {
            // line 94
            echo "                <option value=\"random\" selected>";
            echo (isset($context["text_random"]) ? $context["text_random"] : null);
            echo "</option>
                ";
        } else {
            // line 96
            echo "                <option value=\"random\">";
            echo (isset($context["text_random"]) ? $context["text_random"] : null);
            echo "</option>
                ";
        }
        // line 98
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-site\">";
        // line 102
        echo (isset($context["entry_site"]) ? $context["entry_site"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"ebay_listing_site\" id=\"input-site\" class=\"form-control\">
                ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sites"]) ? $context["sites"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["site"]) {
            // line 106
            echo "                ";
            if (($this->getAttribute($context["site"], "value", array()) == (isset($context["ebay_listing_site"]) ? $context["ebay_listing_site"] : null))) {
                // line 107
                echo "                <option value=\"";
                echo $this->getAttribute($context["site"], "value", array());
                echo "\" selected>";
                echo $this->getAttribute($context["site"], "text", array());
                echo "</option>
                ";
            } else {
                // line 109
                echo "                <option value=\"";
                echo $this->getAttribute($context["site"], "value", array());
                echo "\">";
                echo $this->getAttribute($context["site"], "text", array());
                echo "</option>
                ";
            }
            // line 111
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['site'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 116
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"ebay_listing_status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 119
        if ((isset($context["ebay_listing_status"]) ? $context["ebay_listing_status"] : null)) {
            // line 120
            echo "                <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\">";
            // line 121
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        } else {
            // line 123
            echo "                <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 124
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        }
        // line 126
        echo "              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 134
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/module/ebay_listing.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 134,  334 => 126,  329 => 124,  324 => 123,  319 => 121,  314 => 120,  312 => 119,  306 => 116,  300 => 112,  294 => 111,  286 => 109,  278 => 107,  275 => 106,  271 => 105,  265 => 102,  259 => 98,  253 => 96,  247 => 94,  244 => 93,  238 => 91,  232 => 89,  230 => 88,  224 => 85,  219 => 82,  213 => 80,  211 => 79,  205 => 78,  200 => 76,  195 => 73,  189 => 71,  187 => 70,  181 => 69,  176 => 67,  167 => 63,  162 => 61,  156 => 57,  151 => 55,  146 => 54,  141 => 52,  136 => 51,  134 => 50,  128 => 47,  119 => 43,  114 => 41,  105 => 37,  100 => 35,  95 => 33,  89 => 30,  81 => 25,  74 => 22,  66 => 18,  64 => 17,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
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
/*     {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="alert alert-info"><i class="fa fa-exclamation-circle"></i> {{ text_about }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     <div class="alert alert-warning"><i class="fa fa-exclamation-circle"></i> {{ text_register }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-module" class="form-horizontal">*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-username">{{ entry_username }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="ebay_listing_username" value="{{ ebay_listing_username }}" placeholder="{{ entry_username }}" id="input-username" class="form-control" />*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-keywords">{{ entry_keywords }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="ebay_listing_keywords" value="{{ ebay_listing_keywords }}" placeholder="{{ entry_keywords }}" id="input-keywords" class="form-control" />*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-description">{{ entry_description }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="ebay_listing_description" id="input-description" class="form-control">*/
/*                 {% if ebay_listing_description %}*/
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
/*             <label class="col-sm-2 control-label" for="input-limit">{{ entry_limit }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="ebay_listing_limit" value="{{ ebay_listing_limit }}" placeholder="{{ entry_limit }}" id="input-limit" class="form-control" />*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-width">{{ entry_width }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="ebay_listing_width" value="{{ ebay_listing_width }}" placeholder="{{ entry_width }}" id="input-width" class="form-control" />*/
/*               {% if error_width %}*/
/*               <div class="text-danger">{{ error_width }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-height">{{ entry_height }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="ebay_listing_height" value="{{ ebay_listing_height }}" placeholder="{{ entry_height }}" id="input-height" class="form-control" />*/
/*               {% if error_height %}*/
/*               <div class="text-danger">{{ error_height }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-sort">{{ entry_sort }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="ebay_listing_sort" id="input-sort" class="form-control">*/
/*                 {% if ebay_listing_sort == 'StartTimeNewest' %}*/
/*                 <option value="StartTimeNewest" selected>{{ text_latest }}</option>*/
/*                 {% else %}*/
/*                 <option value="StartTimeNewest">{{ text_latest }}</option>*/
/*                 {% endif %}*/
/*                 {% if ebay_listing_sort == 'random' %}*/
/*                 <option value="random" selected>{{ text_random }}</option>*/
/*                 {% else %}*/
/*                 <option value="random">{{ text_random }}</option>*/
/*                 {% endif %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-site">{{ entry_site }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="ebay_listing_site" id="input-site" class="form-control">*/
/*                 {% for site in sites %}*/
/*                 {% if site.value == ebay_listing_site %}*/
/*                 <option value="{{ site.value }}" selected>{{ site.text }}</option>*/
/*                 {% else %}*/
/*                 <option value="{{ site.value }}">{{ site.text }}</option>*/
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="ebay_listing_status" id="input-status" class="form-control">*/
/*                 {% if ebay_listing_status %}*/
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
