<?php

/* extension/payment/pp_express.twig */
class __TwigTemplate_4e76d327937ddf14b4392d01152f4eba7613f66f91341f88acc311c19f139535 extends Twig_Template
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
        <button type=\"submit\" form=\"form-pp-express\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a> <a href=\"";
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_search"]) ? $context["button_search"] : null);
        echo "\" class=\"btn btn-info\"><i class=\"fa fa-search\"></i></a></div>
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
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        ";
        // line 27
        if (((isset($context["retrieve_success"]) ? $context["retrieve_success"] : null) == 1)) {
            // line 28
            echo "          <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check\"></i> ";
            echo (isset($context["text_retrieve"]) ? $context["text_retrieve"] : null);
            echo "</div>
        ";
        }
        // line 30
        echo "        <form action=\"";
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-pp-express\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-api\" data-toggle=\"tab\">";
        // line 32
        echo (isset($context["tab_api"]) ? $context["tab_api"] : null);
        echo "</a></li>
            <li><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 33
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "</a></li>
            <li><a href=\"#tab-order-status\" data-toggle=\"tab\">";
        // line 34
        echo (isset($context["tab_order_status"]) ? $context["tab_order_status"] : null);
        echo "</a></li>
            <li><a href=\"#tab-checkout\" data-toggle=\"tab\">";
        // line 35
        echo (isset($context["tab_checkout"]) ? $context["tab_checkout"] : null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-api\">
              <div id=\"content-setup\">
                <a href=\"#\" id=\"show-advanced\" class=\"btn btn-sm btn-default\">";
        // line 40
        echo (isset($context["text_show_advanced"]) ? $context["text_show_advanced"] : null);
        echo "</a>
                <div class=\"row\" style=\"margin-top: 20px;\">
                  <div class=\"col-sm-3\"></div>
                  <div class=\"col-sm-2 img-rounded text-center\" style=\"border:1px solid #cecece; padding:5px; cursor: pointer;\">
                    <a id=\"configure-live-setup\" data-paypal-button=\"true\" href=\"";
        // line 44
        echo (isset($context["auth_connect_url_live"]) ? $context["auth_connect_url_live"] : null);
        echo "&displayMode=minibrowser\" target=\"PPFrame\">
                      <img src=\"https://www.paypalobjects.com/webstatic/en_US/i/buttons/PP_logo_h_200x51.png\" alt=\"PayPal - ";
        // line 45
        echo (isset($context["text_configure_sandbox"]) ? $context["text_configure_sandbox"] : null);
        echo "\" /><h3>";
        echo (isset($context["text_configure_live"]) ? $context["text_configure_live"] : null);
        echo "</h3>
                    </a>
                  </div>
                  <div class=\"col-sm-2\"></div>
                  <div class=\"col-sm-2 img-rounded text-center\" style=\"border:1px solid #cecece; padding:5px; cursor: pointer;\">
                    <a id=\"configure-sandbox-setup\" data-paypal-button=\"true\" href=\"";
        // line 50
        echo (isset($context["auth_connect_url_sandbox"]) ? $context["auth_connect_url_sandbox"] : null);
        echo "&displayMode=minibrowser\" target=\"PPFrame\">
                      <img src=\"https://www.paypalobjects.com/webstatic/en_US/i/buttons/PP_logo_h_200x51.png\" alt=\"PayPal - ";
        // line 51
        echo (isset($context["text_configure_sandbox"]) ? $context["text_configure_sandbox"] : null);
        echo "\" /><h3>";
        echo (isset($context["text_configure_sandbox"]) ? $context["text_configure_sandbox"] : null);
        echo "</h3>
                    </a>
                  </div>
                  <div class=\"col-sm-3\"></div>
                </div>
              </div>
              <div id=\"content-advanced\" style=\"display: none;\">
                <a href=\"#\" id=\"show-setup\" class=\"btn btn-sm btn-default\">";
        // line 58
        echo (isset($context["text_show_quick_setup"]) ? $context["text_show_quick_setup"] : null);
        echo "</a>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"entry-username\">";
        // line 60
        echo (isset($context["entry_username"]) ? $context["entry_username"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"payment_pp_express_username\" value=\"";
        // line 62
        echo (isset($context["payment_pp_express_username"]) ? $context["payment_pp_express_username"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_username"]) ? $context["entry_username"] : null);
        echo "\" id=\"entry-username\" class=\"form-control\" />
                    ";
        // line 63
        if ((isset($context["error_username"]) ? $context["error_username"] : null)) {
            // line 64
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_username"]) ? $context["error_username"] : null);
            echo "</div>
                    ";
        }
        // line 66
        echo "                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"entry-password\">";
        // line 69
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"payment_pp_express_password\" value=\"";
        // line 71
        echo (isset($context["payment_pp_express_password"]) ? $context["payment_pp_express_password"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "\" id=\"entry-password\" class=\"form-control\" />
                    ";
        // line 72
        if ((isset($context["error_password"]) ? $context["error_password"] : null)) {
            // line 73
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_password"]) ? $context["error_password"] : null);
            echo "</div>
                    ";
        }
        // line 75
        echo "                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"entry-signature\">";
        // line 78
        echo (isset($context["entry_signature"]) ? $context["entry_signature"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"payment_pp_express_signature\" value=\"";
        // line 80
        echo (isset($context["payment_pp_express_signature"]) ? $context["payment_pp_express_signature"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_signature"]) ? $context["entry_signature"] : null);
        echo "\" id=\"entry-signature\" class=\"form-control\" />
                    ";
        // line 81
        if ((isset($context["error_signature"]) ? $context["error_signature"] : null)) {
            // line 82
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_signature"]) ? $context["error_signature"] : null);
            echo "</div>
                    ";
        }
        // line 84
        echo "                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"entry-sandbox-username\">";
        // line 87
        echo (isset($context["entry_sandbox_username"]) ? $context["entry_sandbox_username"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"payment_pp_express_sandbox_username\" value=\"";
        // line 89
        echo (isset($context["payment_pp_express_sandbox_username"]) ? $context["payment_pp_express_sandbox_username"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_sandbox_username"]) ? $context["entry_sandbox_username"] : null);
        echo "\" id=\"entry-sandbox-username\" class=\"form-control\" />
                    ";
        // line 90
        if ((isset($context["error_sandbox_username"]) ? $context["error_sandbox_username"] : null)) {
            // line 91
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_sandbox_username"]) ? $context["error_sandbox_username"] : null);
            echo "</div>
                    ";
        }
        // line 93
        echo "                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"entry-sandbox-password\">";
        // line 96
        echo (isset($context["entry_sandbox_password"]) ? $context["entry_sandbox_password"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"payment_pp_express_sandbox_password\" value=\"";
        // line 98
        echo (isset($context["payment_pp_express_sandbox_password"]) ? $context["payment_pp_express_sandbox_password"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_sandbox_password"]) ? $context["entry_sandbox_password"] : null);
        echo "\" id=\"entry-sandbox-password\" class=\"form-control\" />
                    ";
        // line 99
        if ((isset($context["error_sandbox_password"]) ? $context["error_sandbox_password"] : null)) {
            // line 100
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_sandbox_password"]) ? $context["error_sandbox_password"] : null);
            echo "</div>
                    ";
        }
        // line 102
        echo "                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"entry-sandbox-signature\">";
        // line 105
        echo (isset($context["entry_sandbox_signature"]) ? $context["entry_sandbox_signature"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"payment_pp_express_sandbox_signature\" value=\"";
        // line 107
        echo (isset($context["payment_pp_express_sandbox_signature"]) ? $context["payment_pp_express_sandbox_signature"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_sandbox_signature"]) ? $context["entry_sandbox_signature"] : null);
        echo "\" id=\"entry-sandbox-signature\" class=\"form-control\" />
                    ";
        // line 108
        if ((isset($context["error_sandbox_signature"]) ? $context["error_sandbox_signature"] : null)) {
            // line 109
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_sandbox_signature"]) ? $context["error_sandbox_signature"] : null);
            echo "</div>
                    ";
        }
        // line 111
        echo "                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 114
        echo (isset($context["help_ipn"]) ? $context["help_ipn"] : null);
        echo "\">";
        echo (isset($context["entry_ipn"]) ? $context["entry_ipn"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\"><span class=\"input-group-addon\"><i class=\"fa fa-link\"></i></span>
                      <input type=\"text\" value=\"";
        // line 117
        echo (isset($context["ipn_url"]) ? $context["ipn_url"] : null);
        echo "\" class=\"form-control\" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-general\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 125
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_express_status\" id=\"input-status\" class=\"form-control\">
                    ";
        // line 128
        if ((isset($context["payment_pp_express_status"]) ? $context["payment_pp_express_status"] : null)) {
            // line 129
            echo "                      <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                      <option value=\"0\">";
            // line 130
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                    ";
        } else {
            // line 132
            echo "                      <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                      <option value=\"0\" selected=\"selected\">";
            // line 133
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                    ";
        }
        // line 135
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-test\">";
        // line 139
        echo (isset($context["entry_test"]) ? $context["entry_test"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_express_test\" id=\"input-test\" class=\"form-control\">
                    ";
        // line 142
        if ((isset($context["payment_pp_express_test"]) ? $context["payment_pp_express_test"] : null)) {
            // line 143
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                    <option value=\"0\">";
            // line 144
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
                    ";
        } else {
            // line 146
            echo "                    <option value=\"1\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 147
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
                    ";
        }
        // line 149
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-debug\">";
        // line 153
        echo (isset($context["entry_debug"]) ? $context["entry_debug"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_express_debug\" id=\"input-debug\" class=\"form-control\">
                    ";
        // line 156
        if ((isset($context["payment_pp_express_debug"]) ? $context["payment_pp_express_debug"] : null)) {
            // line 157
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                    <option value=\"0\">";
            // line 158
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
                    ";
        } else {
            // line 160
            echo "                    <option value=\"1\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 161
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
                    ";
        }
        // line 163
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-currency\"><span data-toggle=\"tooltip\" title=\"";
        // line 167
        echo (isset($context["help_currency"]) ? $context["help_currency"] : null);
        echo "\">";
        echo (isset($context["entry_currency"]) ? $context["entry_currency"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_express_currency\" id=\"input-currency\" class=\"form-control\">
                    ";
        // line 170
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 171
            echo "                    ";
            if (($context["currency"] == (isset($context["payment_pp_express_currency"]) ? $context["payment_pp_express_currency"] : null))) {
                // line 172
                echo "                    <option value=\"";
                echo $context["currency"];
                echo "\" selected=\"selected\">";
                echo $context["currency"];
                echo "</option>
                    ";
            } else {
                // line 174
                echo "                    <option value=\"";
                echo $context["currency"];
                echo "\">";
                echo $context["currency"];
                echo "</option>
                    ";
            }
            // line 176
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-recurring-cancel\">";
        // line 181
        echo (isset($context["entry_recurring_cancel"]) ? $context["entry_recurring_cancel"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_express_recurring_cancel\" id=\"input-recurring-cancel\" class=\"form-control\">
                    ";
        // line 184
        if ((isset($context["payment_pp_express_recurring_cancel"]) ? $context["payment_pp_express_recurring_cancel"] : null)) {
            // line 185
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                    <option value=\"0\">";
            // line 186
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                    ";
        } else {
            // line 188
            echo "                    <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 189
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                    ";
        }
        // line 191
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-transaction\">";
        // line 195
        echo (isset($context["entry_transaction"]) ? $context["entry_transaction"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_express_transaction\" id=\"input-transaction\" class=\"form-control\">
                    ";
        // line 198
        if (((isset($context["payment_pp_express_transaction"]) ? $context["payment_pp_express_transaction"] : null) == "sale")) {
            // line 199
            echo "                    <option value=\"Sale\" selected=\"selected\">";
            echo (isset($context["text_sale"]) ? $context["text_sale"] : null);
            echo "</option>
                    ";
        } else {
            // line 201
            echo "                    <option value=\"Sale\">";
            echo (isset($context["text_sale"]) ? $context["text_sale"] : null);
            echo "</option>
                    ";
        }
        // line 203
        echo "                    ";
        if (((isset($context["payment_pp_express_transaction"]) ? $context["payment_pp_express_transaction"] : null) == "Authorization")) {
            // line 204
            echo "                    <option value=\"Authorization\" selected=\"selected\">";
            echo (isset($context["text_authorization"]) ? $context["text_authorization"] : null);
            echo "</option>
                    ";
        } else {
            // line 206
            echo "                    <option value=\"Authorization\">";
            echo (isset($context["text_authorization"]) ? $context["text_authorization"] : null);
            echo "</option>
                    ";
        }
        // line 208
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-total\"><span data-toggle=\"tooltip\" title=\"";
        // line 212
        echo (isset($context["help_total"]) ? $context["help_total"] : null);
        echo "\">";
        echo (isset($context["entry_total"]) ? $context["entry_total"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"payment_pp_express_total\" value=\"";
        // line 214
        echo (isset($context["payment_pp_express_total"]) ? $context["payment_pp_express_total"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_total"]) ? $context["entry_total"] : null);
        echo "\" id=\"input-total\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-geo-zone\">";
        // line 218
        echo (isset($context["entry_geo_zone"]) ? $context["entry_geo_zone"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_express_geo_zone_id\" id=\"input-geo-zone\" class=\"form-control\">
                    <option value=\"0\">";
        // line 221
        echo (isset($context["text_all_zones"]) ? $context["text_all_zones"] : null);
        echo "</option>
                    ";
        // line 222
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["geo_zones"]) ? $context["geo_zones"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 223
            echo "                    ";
            if (($this->getAttribute($context["geo_zone"], "geo_zone_id", array()) == (isset($context["payment_pp_express_geo_zone_id"]) ? $context["payment_pp_express_geo_zone_id"] : null))) {
                // line 224
                echo "                    <option value=\"";
                echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["geo_zone"], "name", array());
                echo "</option>
                    ";
            } else {
                // line 226
                echo "                    <option value=\"";
                echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array());
                echo "\">";
                echo $this->getAttribute($context["geo_zone"], "name", array());
                echo "</option>
                    ";
            }
            // line 228
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 229
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 233
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"payment_pp_express_sort_order\" value=\"";
        // line 235
        echo (isset($context["payment_pp_express_sort_order"]) ? $context["payment_pp_express_sort_order"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-order-status\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-canceled-reversal-status\">";
        // line 241
        echo (isset($context["entry_canceled_reversal_status"]) ? $context["entry_canceled_reversal_status"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_express_canceled_reversal_status_id\" id=\"input-canceled-reversal-status\" class=\"form-control\">
                    ";
        // line 244
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 245
            echo "                    ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_pp_express_canceled_reversal_status_id"]) ? $context["payment_pp_express_canceled_reversal_status_id"] : null))) {
                // line 246
                echo "                    <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                    ";
            } else {
                // line 248
                echo "                    <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                    ";
            }
            // line 250
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 251
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-completed-status\">";
        // line 255
        echo (isset($context["entry_completed_status"]) ? $context["entry_completed_status"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_express_completed_status_id\" id=\"input-completed-status\" class=\"form-control\">
                    ";
        // line 258
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 259
            echo "                    ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_pp_express_completed_status_id"]) ? $context["payment_pp_express_completed_status_id"] : null))) {
                // line 260
                echo "                    <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                    ";
            } else {
                // line 262
                echo "                    <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                    ";
            }
            // line 264
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 265
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-denied-status\">";
        // line 269
        echo (isset($context["entry_denied_status"]) ? $context["entry_denied_status"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_express_denied_status_id\" id=\"input-denied-status\" class=\"form-control\">
                    ";
        // line 272
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 273
            echo "                    ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_pp_express_denied_status_id"]) ? $context["payment_pp_express_denied_status_id"] : null))) {
                // line 274
                echo "                    <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                    ";
            } else {
                // line 276
                echo "                    <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                    ";
            }
            // line 278
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 279
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-expired-status\">";
        // line 283
        echo (isset($context["entry_expired_status"]) ? $context["entry_expired_status"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_express_expired_status_id\" id=\"input-expired-status\" class=\"form-control\">
                    ";
        // line 286
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 287
            echo "                    ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_pp_express_expired_status_id"]) ? $context["payment_pp_express_expired_status_id"] : null))) {
                // line 288
                echo "                    <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                    ";
            } else {
                // line 290
                echo "                    <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                    ";
            }
            // line 292
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 293
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-failed-status\">";
        // line 297
        echo (isset($context["entry_failed_status"]) ? $context["entry_failed_status"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_express_failed_status_id\" id=\"input-failed-status\" class=\"form-control\">
                    ";
        // line 300
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 301
            echo "                    ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_pp_express_failed_status_id"]) ? $context["payment_pp_express_failed_status_id"] : null))) {
                // line 302
                echo "                    <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                    ";
            } else {
                // line 304
                echo "                    <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                    ";
            }
            // line 306
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 307
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-pending-status\">";
        // line 311
        echo (isset($context["entry_pending_status"]) ? $context["entry_pending_status"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_express_pending_status_id\" id=\"input-pending-status\" class=\"form-control\">
                    ";
        // line 314
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 315
            echo "                    ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_pp_express_pending_status_id"]) ? $context["payment_pp_express_pending_status_id"] : null))) {
                // line 316
                echo "                    <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                    ";
            } else {
                // line 318
                echo "                    <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                    ";
            }
            // line 320
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 321
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-processed-status\">";
        // line 325
        echo (isset($context["entry_processed_status"]) ? $context["entry_processed_status"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_express_processed_status_id\" id=\"input-processed-status\" class=\"form-control\">
                    ";
        // line 328
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 329
            echo "                    ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_pp_express_processed_status_id"]) ? $context["payment_pp_express_processed_status_id"] : null))) {
                // line 330
                echo "                    <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                    ";
            } else {
                // line 332
                echo "                    <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                    ";
            }
            // line 334
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-refunded-status\">";
        // line 339
        echo (isset($context["entry_refunded_status"]) ? $context["entry_refunded_status"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_express_refunded_status_id\" id=\"input-refunded-status\"class=\"form-control\">
                    ";
        // line 342
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 343
            echo "                    ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_pp_express_refunded_status_id"]) ? $context["payment_pp_express_refunded_status_id"] : null))) {
                // line 344
                echo "                    <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                    ";
            } else {
                // line 346
                echo "                    <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                    ";
            }
            // line 348
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 349
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-reversed-status\">";
        // line 353
        echo (isset($context["entry_reversed_status"]) ? $context["entry_reversed_status"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_express_reversed_status_id\" id=\"input-reversed-status\" class=\"form-control\">
                    ";
        // line 356
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 357
            echo "                    ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_pp_express_reversed_status_id"]) ? $context["payment_pp_express_reversed_status_id"] : null))) {
                // line 358
                echo "                    <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                    ";
            } else {
                // line 360
                echo "                    <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                    ";
            }
            // line 362
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 363
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-voided-status\">";
        // line 367
        echo (isset($context["entry_voided_status"]) ? $context["entry_voided_status"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_express_voided_status_id\" id=\"input-voided-status\" class=\"form-control\">
                    ";
        // line 370
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 371
            echo "                    ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_pp_express_voided_status_id"]) ? $context["payment_pp_express_voided_status_id"] : null))) {
                // line 372
                echo "                    <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                    ";
            } else {
                // line 374
                echo "                    <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                    ";
            }
            // line 376
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 377
        echo "                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-checkout\">
              <fieldset>
                <legend>";
        // line 383
        echo (isset($context["text_button_styling"]) ? $context["text_button_styling"] : null);
        echo "</legend>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-style-layout\">";
        // line 385
        echo (isset($context["entry_style_layout"]) ? $context["entry_style_layout"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_express_style_layout\" id=\"input-style-layout\" class=\"form-control\">
                    ";
        // line 388
        if (((isset($context["payment_pp_express_style_layout"]) ? $context["payment_pp_express_style_layout"] : null) == "horizontal")) {
            // line 389
            echo "                      <option value=\"horizontal\" selected=\"selected\">";
            echo (isset($context["text_horizontal"]) ? $context["text_horizontal"] : null);
            echo "</option>
                      <option value=\"vertical\">";
            // line 390
            echo (isset($context["text_vertical"]) ? $context["text_vertical"] : null);
            echo "</option>
                    ";
        } else {
            // line 392
            echo "                      <option value=\"horizontal\">";
            echo (isset($context["text_horizontal"]) ? $context["text_horizontal"] : null);
            echo "</option>
                      <option value=\"vertical\" selected=\"selected\">";
            // line 393
            echo (isset($context["text_vertical"]) ? $context["text_vertical"] : null);
            echo "</option>
                    ";
        }
        // line 395
        echo "                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-style-size\">";
        // line 400
        echo (isset($context["entry_style_size"]) ? $context["entry_style_size"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_express_style_size\" id=\"input-style-size\" class=\"form-control\">
                    <option value=\"medium\"";
        // line 403
        if (((isset($context["payment_pp_express_style_size"]) ? $context["payment_pp_express_style_size"] : null) == "medium")) {
            echo " selected";
        }
        echo ">";
        echo (isset($context["text_medium"]) ? $context["text_medium"] : null);
        echo "</option>
                    <option value=\"large\"";
        // line 404
        if (((isset($context["payment_pp_express_style_size"]) ? $context["payment_pp_express_style_size"] : null) == "large")) {
            echo " selected";
        }
        echo ">";
        echo (isset($context["text_large"]) ? $context["text_large"] : null);
        echo "</option>
                    <option value=\"responsive\"";
        // line 405
        if (((isset($context["payment_pp_express_style_size"]) ? $context["payment_pp_express_style_size"] : null) == "responsive")) {
            echo " selected";
        }
        echo ">";
        echo (isset($context["text_responsive"]) ? $context["text_responsive"] : null);
        echo "</option>
                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-style-shape\">";
        // line 411
        echo (isset($context["entry_style_shape"]) ? $context["entry_style_shape"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_express_style_shape\" id=\"input-style-shape\" class=\"form-control\">
                    ";
        // line 414
        if (((isset($context["payment_pp_express_style_shape"]) ? $context["payment_pp_express_style_shape"] : null) == "pill")) {
            // line 415
            echo "                      <option value=\"pill\" selected=\"selected\">";
            echo (isset($context["text_pill"]) ? $context["text_pill"] : null);
            echo "</option>
                      <option value=\"rect\">";
            // line 416
            echo (isset($context["text_rectangle"]) ? $context["text_rectangle"] : null);
            echo "</option>
                    ";
        } else {
            // line 418
            echo "                      <option value=\"pill\">";
            echo (isset($context["text_pill"]) ? $context["text_pill"] : null);
            echo "</option>
                      <option value=\"rect\" selected=\"selected\">";
            // line 419
            echo (isset($context["text_rectangle"]) ? $context["text_rectangle"] : null);
            echo "</option>
                    ";
        }
        // line 421
        echo "                  </select>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-style-color\">";
        // line 426
        echo (isset($context["entry_style_color"]) ? $context["entry_style_color"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_express_style_color\" id=\"input-style-color\" class=\"form-control\">
                    <option value=\"gold\"";
        // line 429
        if (((isset($context["payment_pp_express_style_color"]) ? $context["payment_pp_express_style_color"] : null) == "gold")) {
            echo " selected";
        }
        echo ">";
        echo (isset($context["text_gold"]) ? $context["text_gold"] : null);
        echo "</option>
                    <option value=\"blue\"";
        // line 430
        if (((isset($context["payment_pp_express_style_color"]) ? $context["payment_pp_express_style_color"] : null) == "blue")) {
            echo " selected";
        }
        echo ">";
        echo (isset($context["text_blue"]) ? $context["text_blue"] : null);
        echo "</option>
                    <option value=\"silver\"";
        // line 431
        if (((isset($context["payment_pp_express_style_color"]) ? $context["payment_pp_express_style_color"] : null) == "silver")) {
            echo " selected";
        }
        echo ">";
        echo (isset($context["text_silver"]) ? $context["text_silver"] : null);
        echo "</option>
                    <option value=\"black\"";
        // line 432
        if (((isset($context["payment_pp_express_style_color"]) ? $context["payment_pp_express_style_color"] : null) == "black")) {
            echo " selected";
        }
        echo ">";
        echo (isset($context["text_black"]) ? $context["text_black"] : null);
        echo "</option>
                  </select>
                </div>
              </div>
              </fieldset>
              <fieldset>
              <legend>";
        // line 438
        echo (isset($context["text_funding_type"]) ? $context["text_funding_type"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-payment-credit\">";
        // line 440
        echo (isset($context["entry_pp_credit"]) ? $context["entry_pp_credit"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"payment_pp_express_pp_credit\" id=\"input-payment-credit\" class=\"form-control\">
                      ";
        // line 443
        if ((isset($context["payment_pp_express_pp_credit"]) ? $context["payment_pp_express_pp_credit"] : null)) {
            // line 444
            echo "                        <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                        <option value=\"0\">";
            // line 445
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
                      ";
        } else {
            // line 447
            echo "                        <option value=\"1\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                        <option value=\"0\" selected=\"selected\">";
            // line 448
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
                      ";
        }
        // line 450
        echo "                    </select>
                    <p>";
        // line 451
        echo (isset($context["help_pp_credit"]) ? $context["help_pp_credit"] : null);
        echo "</p>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-payment-cards\">";
        // line 455
        echo (isset($context["entry_pp_cards"]) ? $context["entry_pp_cards"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"payment_pp_express_pp_cards\" id=\"input-payment-cards\" class=\"form-control\">
                      ";
        // line 458
        if ((isset($context["payment_pp_express_pp_cards"]) ? $context["payment_pp_express_pp_cards"] : null)) {
            // line 459
            echo "                        <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                        <option value=\"0\">";
            // line 460
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
                      ";
        } else {
            // line 462
            echo "                        <option value=\"1\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                        <option value=\"0\" selected=\"selected\">";
            // line 463
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
                      ";
        }
        // line 465
        echo "                    </select>
                    <p>";
        // line 466
        echo (isset($context["help_pp_cards"]) ? $context["help_pp_cards"] : null);
        echo "</p>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-payment-elv\">";
        // line 470
        echo (isset($context["entry_pp_elv"]) ? $context["entry_pp_elv"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"payment_pp_express_pp_elv\" id=\"input-payment-elv\" class=\"form-control\">
                      ";
        // line 473
        if ((isset($context["payment_pp_express_pp_elv"]) ? $context["payment_pp_express_pp_elv"] : null)) {
            // line 474
            echo "                        <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                        <option value=\"0\">";
            // line 475
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
                      ";
        } else {
            // line 477
            echo "                        <option value=\"1\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                        <option value=\"0\" selected=\"selected\">";
            // line 478
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
                      ";
        }
        // line 480
        echo "                    </select>
                    <p>";
        // line 481
        echo (isset($context["help_pp_elv"]) ? $context["help_pp_elv"] : null);
        echo "</p>
                  </div>
                </div>
              </fieldset>

              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 487
        echo (isset($context["help_logo"]) ? $context["help_logo"] : null);
        echo "\">";
        echo (isset($context["entry_logo"]) ? $context["entry_logo"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 488
        echo (isset($context["thumb"]) ? $context["thumb"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"payment_pp_express_logo\" value=\"";
        // line 489
        echo (isset($context["payment_pp_express_logo"]) ? $context["payment_pp_express_logo"] : null);
        echo "\" id=\"input-logo\" />
                </div>
              </div>
              <div class=\"form-group\">
                <div class=\"col-sm-2\"><a href=\"";
        // line 493
        echo (isset($context["button_configure"]) ? $context["button_configure"] : null);
        echo "\" target=\"_blank\" class=\"btn btn-primary pull-right\">";
        echo (isset($context["button_enable"]) ? $context["button_enable"] : null);
        echo "</a></div>
                <div class=\"col-sm-10\"><p>";
        // line 494
        echo (isset($context["text_enable_button"]) ? $context["text_enable_button"] : null);
        echo "</p></div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script type=\"text/javascript\"><!--
  \$('body').on('click', '#show-advanced', function(event) {
    event.preventDefault();
    \$('#content-setup').hide();
    \$('#content-advanced').show();
  });

  \$('body').on('click', '#show-setup', function(event) {
    event.preventDefault();
    \$('#content-setup').show();
    \$('#content-advanced').hide();
  });

  (function (d, s, id) {
    var js, ref = d.getElementsByTagName(s)[0];
    if(!d.getElementById(id)) {
      js = d.createElement(s);
      js.id = id;
      js.async = true;
      js.src = \"https://www.paypal.com/webapps/merchantboarding/js/lib/lightbox/partner.js\";
      ref.parentNode.insertBefore(js, ref);
    }
  } (document, \"script\", \"paypal-js\"));
--></script>

";
        // line 529
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "extension/payment/pp_express.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1373 => 529,  1335 => 494,  1329 => 493,  1322 => 489,  1316 => 488,  1310 => 487,  1301 => 481,  1298 => 480,  1293 => 478,  1288 => 477,  1283 => 475,  1278 => 474,  1276 => 473,  1270 => 470,  1263 => 466,  1260 => 465,  1255 => 463,  1250 => 462,  1245 => 460,  1240 => 459,  1238 => 458,  1232 => 455,  1225 => 451,  1222 => 450,  1217 => 448,  1212 => 447,  1207 => 445,  1202 => 444,  1200 => 443,  1194 => 440,  1189 => 438,  1176 => 432,  1168 => 431,  1160 => 430,  1152 => 429,  1146 => 426,  1139 => 421,  1134 => 419,  1129 => 418,  1124 => 416,  1119 => 415,  1117 => 414,  1111 => 411,  1098 => 405,  1090 => 404,  1082 => 403,  1076 => 400,  1069 => 395,  1064 => 393,  1059 => 392,  1054 => 390,  1049 => 389,  1047 => 388,  1041 => 385,  1036 => 383,  1028 => 377,  1022 => 376,  1014 => 374,  1006 => 372,  1003 => 371,  999 => 370,  993 => 367,  987 => 363,  981 => 362,  973 => 360,  965 => 358,  962 => 357,  958 => 356,  952 => 353,  946 => 349,  940 => 348,  932 => 346,  924 => 344,  921 => 343,  917 => 342,  911 => 339,  899 => 334,  891 => 332,  883 => 330,  880 => 329,  876 => 328,  870 => 325,  864 => 321,  858 => 320,  850 => 318,  842 => 316,  839 => 315,  835 => 314,  829 => 311,  823 => 307,  817 => 306,  809 => 304,  801 => 302,  798 => 301,  794 => 300,  788 => 297,  782 => 293,  776 => 292,  768 => 290,  760 => 288,  757 => 287,  753 => 286,  747 => 283,  741 => 279,  735 => 278,  727 => 276,  719 => 274,  716 => 273,  712 => 272,  706 => 269,  700 => 265,  694 => 264,  686 => 262,  678 => 260,  675 => 259,  671 => 258,  665 => 255,  659 => 251,  653 => 250,  645 => 248,  637 => 246,  634 => 245,  630 => 244,  624 => 241,  613 => 235,  608 => 233,  602 => 229,  596 => 228,  588 => 226,  580 => 224,  577 => 223,  573 => 222,  569 => 221,  563 => 218,  554 => 214,  547 => 212,  541 => 208,  535 => 206,  529 => 204,  526 => 203,  520 => 201,  514 => 199,  512 => 198,  506 => 195,  500 => 191,  495 => 189,  490 => 188,  485 => 186,  480 => 185,  478 => 184,  472 => 181,  466 => 177,  460 => 176,  452 => 174,  444 => 172,  441 => 171,  437 => 170,  429 => 167,  423 => 163,  418 => 161,  413 => 160,  408 => 158,  403 => 157,  401 => 156,  395 => 153,  389 => 149,  384 => 147,  379 => 146,  374 => 144,  369 => 143,  367 => 142,  361 => 139,  355 => 135,  350 => 133,  345 => 132,  340 => 130,  335 => 129,  333 => 128,  327 => 125,  316 => 117,  308 => 114,  303 => 111,  297 => 109,  295 => 108,  289 => 107,  284 => 105,  279 => 102,  273 => 100,  271 => 99,  265 => 98,  260 => 96,  255 => 93,  249 => 91,  247 => 90,  241 => 89,  236 => 87,  231 => 84,  225 => 82,  223 => 81,  217 => 80,  212 => 78,  207 => 75,  201 => 73,  199 => 72,  193 => 71,  188 => 69,  183 => 66,  177 => 64,  175 => 63,  169 => 62,  164 => 60,  159 => 58,  147 => 51,  143 => 50,  133 => 45,  129 => 44,  122 => 40,  114 => 35,  110 => 34,  106 => 33,  102 => 32,  96 => 30,  90 => 28,  88 => 27,  82 => 24,  78 => 22,  70 => 18,  68 => 17,  62 => 13,  51 => 11,  47 => 10,  42 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-pp-express" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a> <a href="{{ search }}" data-toggle="tooltip" title="{{ button_search }}" class="btn btn-info"><i class="fa fa-search"></i></a></div>*/
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
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         {% if retrieve_success == 1 %}*/
/*           <div class="alert alert-success alert-dismissible"><i class="fa fa-check"></i> {{ text_retrieve }}</div>*/
/*         {% endif %}*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-pp-express" class="form-horizontal">*/
/*           <ul class="nav nav-tabs">*/
/*             <li class="active"><a href="#tab-api" data-toggle="tab">{{ tab_api }}</a></li>*/
/*             <li><a href="#tab-general" data-toggle="tab">{{ tab_general }}</a></li>*/
/*             <li><a href="#tab-order-status" data-toggle="tab">{{ tab_order_status }}</a></li>*/
/*             <li><a href="#tab-checkout" data-toggle="tab">{{ tab_checkout }}</a></li>*/
/*           </ul>*/
/*           <div class="tab-content">*/
/*             <div class="tab-pane active" id="tab-api">*/
/*               <div id="content-setup">*/
/*                 <a href="#" id="show-advanced" class="btn btn-sm btn-default">{{ text_show_advanced }}</a>*/
/*                 <div class="row" style="margin-top: 20px;">*/
/*                   <div class="col-sm-3"></div>*/
/*                   <div class="col-sm-2 img-rounded text-center" style="border:1px solid #cecece; padding:5px; cursor: pointer;">*/
/*                     <a id="configure-live-setup" data-paypal-button="true" href="{{ auth_connect_url_live }}&displayMode=minibrowser" target="PPFrame">*/
/*                       <img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/PP_logo_h_200x51.png" alt="PayPal - {{ text_configure_sandbox }}" /><h3>{{ text_configure_live }}</h3>*/
/*                     </a>*/
/*                   </div>*/
/*                   <div class="col-sm-2"></div>*/
/*                   <div class="col-sm-2 img-rounded text-center" style="border:1px solid #cecece; padding:5px; cursor: pointer;">*/
/*                     <a id="configure-sandbox-setup" data-paypal-button="true" href="{{ auth_connect_url_sandbox }}&displayMode=minibrowser" target="PPFrame">*/
/*                       <img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/PP_logo_h_200x51.png" alt="PayPal - {{ text_configure_sandbox }}" /><h3>{{ text_configure_sandbox }}</h3>*/
/*                     </a>*/
/*                   </div>*/
/*                   <div class="col-sm-3"></div>*/
/*                 </div>*/
/*               </div>*/
/*               <div id="content-advanced" style="display: none;">*/
/*                 <a href="#" id="show-setup" class="btn btn-sm btn-default">{{ text_show_quick_setup }}</a>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="entry-username">{{ entry_username }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="payment_pp_express_username" value="{{ payment_pp_express_username }}" placeholder="{{ entry_username }}" id="entry-username" class="form-control" />*/
/*                     {% if error_username %}*/
/*                     <div class="text-danger">{{ error_username }}</div>*/
/*                     {% endif %}*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="entry-password">{{ entry_password }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="payment_pp_express_password" value="{{ payment_pp_express_password }}" placeholder="{{ entry_password }}" id="entry-password" class="form-control" />*/
/*                     {% if error_password %}*/
/*                     <div class="text-danger">{{ error_password }}</div>*/
/*                     {% endif %}*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="entry-signature">{{ entry_signature }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="payment_pp_express_signature" value="{{ payment_pp_express_signature }}" placeholder="{{ entry_signature }}" id="entry-signature" class="form-control" />*/
/*                     {% if error_signature %}*/
/*                     <div class="text-danger">{{ error_signature }}</div>*/
/*                     {% endif %}*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="entry-sandbox-username">{{ entry_sandbox_username }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="payment_pp_express_sandbox_username" value="{{ payment_pp_express_sandbox_username }}" placeholder="{{ entry_sandbox_username }}" id="entry-sandbox-username" class="form-control" />*/
/*                     {% if error_sandbox_username %}*/
/*                     <div class="text-danger">{{ error_sandbox_username }}</div>*/
/*                     {% endif %}*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="entry-sandbox-password">{{ entry_sandbox_password }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="payment_pp_express_sandbox_password" value="{{ payment_pp_express_sandbox_password }}" placeholder="{{ entry_sandbox_password }}" id="entry-sandbox-password" class="form-control" />*/
/*                     {% if error_sandbox_password %}*/
/*                     <div class="text-danger">{{ error_sandbox_password }}</div>*/
/*                     {% endif %}*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="entry-sandbox-signature">{{ entry_sandbox_signature }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="payment_pp_express_sandbox_signature" value="{{ payment_pp_express_sandbox_signature }}" placeholder="{{ entry_sandbox_signature }}" id="entry-sandbox-signature" class="form-control" />*/
/*                     {% if error_sandbox_signature %}*/
/*                     <div class="text-danger">{{ error_sandbox_signature }}</div>*/
/*                     {% endif %}*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_ipn }}">{{ entry_ipn }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="input-group"><span class="input-group-addon"><i class="fa fa-link"></i></span>*/
/*                       <input type="text" value="{{ ipn_url }}" class="form-control" />*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-general">*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="payment_pp_express_status" id="input-status" class="form-control">*/
/*                     {% if payment_pp_express_status %}*/
/*                       <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                       <option value="0">{{ text_disabled }}</option>*/
/*                     {% else %}*/
/*                       <option value="1">{{ text_enabled }}</option>*/
/*                       <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                     {% endif %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-test">{{ entry_test }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="payment_pp_express_test" id="input-test" class="form-control">*/
/*                     {% if payment_pp_express_test %}*/
/*                     <option value="1" selected="selected">{{ text_yes }}</option>*/
/*                     <option value="0">{{ text_no }}</option>*/
/*                     {% else %}*/
/*                     <option value="1">{{ text_yes }}</option>*/
/*                     <option value="0" selected="selected">{{ text_no }}</option>*/
/*                     {% endif %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-debug">{{ entry_debug }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="payment_pp_express_debug" id="input-debug" class="form-control">*/
/*                     {% if payment_pp_express_debug %}*/
/*                     <option value="1" selected="selected">{{ text_yes }}</option>*/
/*                     <option value="0">{{ text_no }}</option>*/
/*                     {% else %}*/
/*                     <option value="1">{{ text_yes }}</option>*/
/*                     <option value="0" selected="selected">{{ text_no }}</option>*/
/*                     {% endif %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-currency"><span data-toggle="tooltip" title="{{ help_currency }}">{{ entry_currency }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="payment_pp_express_currency" id="input-currency" class="form-control">*/
/*                     {% for currency in currencies %}*/
/*                     {% if currency == payment_pp_express_currency %}*/
/*                     <option value="{{ currency }}" selected="selected">{{ currency }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ currency }}">{{ currency }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-recurring-cancel">{{ entry_recurring_cancel }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="payment_pp_express_recurring_cancel" id="input-recurring-cancel" class="form-control">*/
/*                     {% if payment_pp_express_recurring_cancel %}*/
/*                     <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                     <option value="0">{{ text_disabled }}</option>*/
/*                     {% else %}*/
/*                     <option value="1">{{ text_enabled }}</option>*/
/*                     <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                     {% endif %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-transaction">{{ entry_transaction }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="payment_pp_express_transaction" id="input-transaction" class="form-control">*/
/*                     {% if payment_pp_express_transaction == 'sale' %}*/
/*                     <option value="Sale" selected="selected">{{ text_sale }}</option>*/
/*                     {% else %}*/
/*                     <option value="Sale">{{ text_sale }}</option>*/
/*                     {% endif %}*/
/*                     {% if payment_pp_express_transaction == 'Authorization' %}*/
/*                     <option value="Authorization" selected="selected">{{ text_authorization }}</option>*/
/*                     {% else %}*/
/*                     <option value="Authorization">{{ text_authorization }}</option>*/
/*                     {% endif %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-total"><span data-toggle="tooltip" title="{{ help_total }}">{{ entry_total }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="payment_pp_express_total" value="{{ payment_pp_express_total }}" placeholder="{{ entry_total }}" id="input-total" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-geo-zone">{{ entry_geo_zone }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="payment_pp_express_geo_zone_id" id="input-geo-zone" class="form-control">*/
/*                     <option value="0">{{ text_all_zones }}</option>*/
/*                     {% for geo_zone in geo_zones %}*/
/*                     {% if geo_zone.geo_zone_id == payment_pp_express_geo_zone_id %}*/
/*                     <option value="{{ geo_zone.geo_zone_id }}" selected="selected">{{ geo_zone.name }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ geo_zone.geo_zone_id }}">{{ geo_zone.name }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-sort-order">{{ entry_sort_order }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="payment_pp_express_sort_order" value="{{ payment_pp_express_sort_order }}" placeholder="{{ entry_sort_order }}" id="input-sort-order" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-order-status">*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-canceled-reversal-status">{{ entry_canceled_reversal_status }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="payment_pp_express_canceled_reversal_status_id" id="input-canceled-reversal-status" class="form-control">*/
/*                     {% for order_status in order_statuses %}*/
/*                     {% if order_status.order_status_id == payment_pp_express_canceled_reversal_status_id %}*/
/*                     <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-completed-status">{{ entry_completed_status }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="payment_pp_express_completed_status_id" id="input-completed-status" class="form-control">*/
/*                     {% for order_status in order_statuses %}*/
/*                     {% if order_status.order_status_id == payment_pp_express_completed_status_id %}*/
/*                     <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-denied-status">{{ entry_denied_status }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="payment_pp_express_denied_status_id" id="input-denied-status" class="form-control">*/
/*                     {% for order_status in order_statuses %}*/
/*                     {% if order_status.order_status_id == payment_pp_express_denied_status_id %}*/
/*                     <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-expired-status">{{ entry_expired_status }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="payment_pp_express_expired_status_id" id="input-expired-status" class="form-control">*/
/*                     {% for order_status in order_statuses %}*/
/*                     {% if order_status.order_status_id == payment_pp_express_expired_status_id %}*/
/*                     <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-failed-status">{{ entry_failed_status }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="payment_pp_express_failed_status_id" id="input-failed-status" class="form-control">*/
/*                     {% for order_status in order_statuses %}*/
/*                     {% if order_status.order_status_id == payment_pp_express_failed_status_id %}*/
/*                     <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-pending-status">{{ entry_pending_status }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="payment_pp_express_pending_status_id" id="input-pending-status" class="form-control">*/
/*                     {% for order_status in order_statuses %}*/
/*                     {% if order_status.order_status_id == payment_pp_express_pending_status_id %}*/
/*                     <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-processed-status">{{ entry_processed_status }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="payment_pp_express_processed_status_id" id="input-processed-status" class="form-control">*/
/*                     {% for order_status in order_statuses %}*/
/*                     {% if order_status.order_status_id == payment_pp_express_processed_status_id %}*/
/*                     <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}>*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-refunded-status">{{ entry_refunded_status }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="payment_pp_express_refunded_status_id" id="input-refunded-status"class="form-control">*/
/*                     {% for order_status in order_statuses %}*/
/*                     {% if order_status.order_status_id == payment_pp_express_refunded_status_id %}*/
/*                     <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-reversed-status">{{ entry_reversed_status }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="payment_pp_express_reversed_status_id" id="input-reversed-status" class="form-control">*/
/*                     {% for order_status in order_statuses %}*/
/*                     {% if order_status.order_status_id == payment_pp_express_reversed_status_id %}*/
/*                     <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-voided-status">{{ entry_voided_status }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="payment_pp_express_voided_status_id" id="input-voided-status" class="form-control">*/
/*                     {% for order_status in order_statuses %}*/
/*                     {% if order_status.order_status_id == payment_pp_express_voided_status_id %}*/
/*                     <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-checkout">*/
/*               <fieldset>*/
/*                 <legend>{{ text_button_styling }}</legend>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-style-layout">{{ entry_style_layout }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="payment_pp_express_style_layout" id="input-style-layout" class="form-control">*/
/*                     {% if payment_pp_express_style_layout == "horizontal" %}*/
/*                       <option value="horizontal" selected="selected">{{ text_horizontal }}</option>*/
/*                       <option value="vertical">{{ text_vertical }}</option>*/
/*                     {% else %}*/
/*                       <option value="horizontal">{{ text_horizontal }}</option>*/
/*                       <option value="vertical" selected="selected">{{ text_vertical }}</option>*/
/*                     {% endif %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-style-size">{{ entry_style_size }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="payment_pp_express_style_size" id="input-style-size" class="form-control">*/
/*                     <option value="medium"{% if payment_pp_express_style_size == "medium" %} selected{% endif %}>{{ text_medium }}</option>*/
/*                     <option value="large"{% if payment_pp_express_style_size == "large" %} selected{% endif %}>{{ text_large }}</option>*/
/*                     <option value="responsive"{% if payment_pp_express_style_size == "responsive" %} selected{% endif %}>{{ text_responsive }}</option>*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-style-shape">{{ entry_style_shape }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="payment_pp_express_style_shape" id="input-style-shape" class="form-control">*/
/*                     {% if payment_pp_express_style_shape == "pill" %}*/
/*                       <option value="pill" selected="selected">{{ text_pill }}</option>*/
/*                       <option value="rect">{{ text_rectangle }}</option>*/
/*                     {% else %}*/
/*                       <option value="pill">{{ text_pill }}</option>*/
/*                       <option value="rect" selected="selected">{{ text_rectangle }}</option>*/
/*                     {% endif %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-style-color">{{ entry_style_color }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="payment_pp_express_style_color" id="input-style-color" class="form-control">*/
/*                     <option value="gold"{% if payment_pp_express_style_color == "gold" %} selected{% endif %}>{{ text_gold }}</option>*/
/*                     <option value="blue"{% if payment_pp_express_style_color == "blue" %} selected{% endif %}>{{ text_blue }}</option>*/
/*                     <option value="silver"{% if payment_pp_express_style_color == "silver" %} selected{% endif %}>{{ text_silver }}</option>*/
/*                     <option value="black"{% if payment_pp_express_style_color == "black" %} selected{% endif %}>{{ text_black }}</option>*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*               <legend>{{ text_funding_type }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-payment-credit">{{ entry_pp_credit }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="payment_pp_express_pp_credit" id="input-payment-credit" class="form-control">*/
/*                       {% if payment_pp_express_pp_credit %}*/
/*                         <option value="1" selected="selected">{{ text_yes }}</option>*/
/*                         <option value="0">{{ text_no }}</option>*/
/*                       {% else %}*/
/*                         <option value="1">{{ text_yes }}</option>*/
/*                         <option value="0" selected="selected">{{ text_no }}</option>*/
/*                       {% endif %}*/
/*                     </select>*/
/*                     <p>{{ help_pp_credit }}</p>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-payment-cards">{{ entry_pp_cards }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="payment_pp_express_pp_cards" id="input-payment-cards" class="form-control">*/
/*                       {% if payment_pp_express_pp_cards %}*/
/*                         <option value="1" selected="selected">{{ text_yes }}</option>*/
/*                         <option value="0">{{ text_no }}</option>*/
/*                       {% else %}*/
/*                         <option value="1">{{ text_yes }}</option>*/
/*                         <option value="0" selected="selected">{{ text_no }}</option>*/
/*                       {% endif %}*/
/*                     </select>*/
/*                     <p>{{ help_pp_cards }}</p>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-payment-elv">{{ entry_pp_elv }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="payment_pp_express_pp_elv" id="input-payment-elv" class="form-control">*/
/*                       {% if payment_pp_express_pp_elv %}*/
/*                         <option value="1" selected="selected">{{ text_yes }}</option>*/
/*                         <option value="0">{{ text_no }}</option>*/
/*                       {% else %}*/
/*                         <option value="1">{{ text_yes }}</option>*/
/*                         <option value="0" selected="selected">{{ text_no }}</option>*/
/*                       {% endif %}*/
/*                     </select>*/
/*                     <p>{{ help_pp_elv }}</p>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/* */
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_logo }}">{{ entry_logo }}</span></label>*/
/*                 <div class="col-sm-10"><a href="" id="thumb-image" data-toggle="image" class="img-thumbnail"><img src="{{ thumb }}" alt="" title="" data-placeholder="{{ placeholder }}" /></a>*/
/*                   <input type="hidden" name="payment_pp_express_logo" value="{{ payment_pp_express_logo }}" id="input-logo" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <div class="col-sm-2"><a href="{{ button_configure }}" target="_blank" class="btn btn-primary pull-right">{{ button_enable }}</a></div>*/
/*                 <div class="col-sm-10"><p>{{ text_enable_button }}</p></div>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/* <script type="text/javascript"><!--*/
/*   $('body').on('click', '#show-advanced', function(event) {*/
/*     event.preventDefault();*/
/*     $('#content-setup').hide();*/
/*     $('#content-advanced').show();*/
/*   });*/
/* */
/*   $('body').on('click', '#show-setup', function(event) {*/
/*     event.preventDefault();*/
/*     $('#content-setup').show();*/
/*     $('#content-advanced').hide();*/
/*   });*/
/* */
/*   (function (d, s, id) {*/
/*     var js, ref = d.getElementsByTagName(s)[0];*/
/*     if(!d.getElementById(id)) {*/
/*       js = d.createElement(s);*/
/*       js.id = id;*/
/*       js.async = true;*/
/*       js.src = "https://www.paypal.com/webapps/merchantboarding/js/lib/lightbox/partner.js";*/
/*       ref.parentNode.insertBefore(js, ref);*/
/*     }*/
/*   } (document, "script", "paypal-js"));*/
/* --></script>*/
/* */
/* {{ footer }} */
/* */
