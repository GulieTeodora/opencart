<?php

/* extension/payment/amazon_login_pay.twig */
class __TwigTemplate_7c810840e017279a18e05eb02a486edfd49b29e2cb8bdebfe839dc89de407c28 extends Twig_Template
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
\t<div class=\"container-fluid\">
\t  <div class=\"pull-right\">
\t\t<button type=\"submit\" form=\"form-payment\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
\t\t<a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
\t  <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>      <ul class=\"breadcrumb\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 10
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
        // line 12
        echo "      </ul>
\t</div>
  </div>
  <div class=\"container-fluid\">
\t";
        // line 16
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 17
            echo "\t\t<div class=\"alert alert-danger alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
\t\t</div>
\t";
        }
        // line 20
        echo "\t<div class=\"alert alert-";
        echo (((isset($context["has_ssl"]) ? $context["has_ssl"] : null)) ? ("info") : ("danger"));
        echo "\">
\t\t<i class=\"fa fa-exclamation-circle\"></i> ";
        // line 21
        echo (isset($context["text_info_ssl"]) ? $context["text_info_ssl"] : null);
        echo "
\t</div>
\t<div class=\"alert alert-info\">
\t  <form method=\"POST\" target=\"_blank\" action=\"";
        // line 24
        echo (isset($context["registration_url"]) ? $context["registration_url"] : null);
        echo "\" class=\"form-horizontal\" id=\"registration-form\">
\t\t<input type=\"hidden\" value=\"";
        // line 25
        echo (isset($context["locale"]) ? $context["locale"] : null);
        echo "\" name=\"locale\">
\t\t<input type=\"hidden\" value=\"";
        // line 26
        echo (isset($context["sp_id"]) ? $context["sp_id"] : null);
        echo "\" name=\"spId\">
\t\t<input type=\"hidden\" value=\"";
        // line 27
        echo (isset($context["unique_id"]) ? $context["unique_id"] : null);
        echo "\" name=\"uniqueId\">
\t\t<input type=\"hidden\" value=\"";
        // line 28
        echo (isset($context["allowed_login_domain"]) ? $context["allowed_login_domain"] : null);
        echo "\" name=\"allowedLoginDomains[]\">
\t\t";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["login_redirect_urls"]) ? $context["login_redirect_urls"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["login_redirect_url"]) {
            // line 30
            echo "\t\t\t<input type=\"hidden\" value=\"";
            echo $context["login_redirect_url"];
            echo "\" name=\"loginRedirectURLs[]\">
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['login_redirect_url'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t\t<input type=\"hidden\" value=\"";
        echo (isset($context["store_name"]) ? $context["store_name"] : null);
        echo "\" name=\"storeDescription\">
\t\t<input type=\"hidden\" value=\"";
        // line 33
        echo (isset($context["simple_path_language"]) ? $context["simple_path_language"] : null);
        echo "\" name=\"language\">
\t\t<input type=\"hidden\" value=\"";
        // line 34
        echo (isset($context["ipn_url"]) ? $context["ipn_url"] : null);
        echo "\" name=\"sandboxMerchantIPNURL\">
\t\t<input type=\"hidden\" value=\"";
        // line 35
        echo (isset($context["ipn_url"]) ? $context["ipn_url"] : null);
        echo "\" name=\"productionMerchantIPNURL\">
\t\t<input type=\"hidden\" value=\"POST\" name=\"returnMethod\">
\t\t<button type=\"button\" class=\"btn btn-link\" id=\"sign-up\">";
        // line 37
        echo (isset($context["text_amazon_signup"]) ? $context["text_amazon_signup"] : null);
        echo "</button>
\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t  </form>
\t  <div id=\"container-credentials\">
\t\t<div class=\"col-sm-5\">
\t\t  <textarea class=\"form-control\" id=\"input-credentials\" placeholder=\"";
        // line 42
        echo (isset($context["text_credentials"]) ? $context["text_credentials"] : null);
        echo "\" rows=\"7\" name=\"credentials\"></textarea>
\t\t</div>
\t\t<div class=\"col-sm-5\">
\t\t  <button id=\"button-credentials\" class=\"btn btn-primary\" type=\"button\" >";
        // line 45
        echo (isset($context["text_validate_credentials"]) ? $context["text_validate_credentials"] : null);
        echo "</button>
\t\t</div>
\t  </div>
\t</div>
\t<div class=\"panel panel-default\">
\t  <div class=\"panel-heading\">
\t\t<h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 51
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
\t  </div>
\t  <div class=\"panel-body\">
\t\t<form action=\"";
        // line 54
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-payment\" class=\"form-horizontal\">
\t\t  <div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"amazon-login-pay-payment-region\">";
        // line 56
        echo (isset($context["entry_payment_region"]) ? $context["entry_payment_region"] : null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t  <select name=\"payment_amazon_login_pay_payment_region\" id=\"amazon-login-pay-payment_region\" class=\"form-control\">
\t\t\t\t";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["payment_regions"]) ? $context["payment_regions"] : null));
        foreach ($context['_seq'] as $context["payment_region_code"] => $context["payment_region_name"]) {
            // line 60
            echo "\t\t\t\t\t";
            if (($context["payment_region_code"] == (isset($context["payment_amazon_login_pay_payment_region"]) ? $context["payment_amazon_login_pay_payment_region"] : null))) {
                // line 61
                echo "\t\t\t\t\t\t<option value=\"";
                echo $context["payment_region_code"];
                echo "\" selected=\"selected\">";
                echo $context["payment_region_name"];
                echo "</option>
\t\t\t\t\t";
            } else {
                // line 63
                echo "\t\t\t\t\t\t<option value=\"";
                echo $context["payment_region_code"];
                echo "\">";
                echo $context["payment_region_name"];
                echo "</option>
\t\t\t\t\t";
            }
            // line 65
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['payment_region_code'], $context['payment_region_name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "\t\t\t  </select>
\t\t\t</div>
\t\t  </div>
\t\t  <div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"amazon-login-pay-language\">";
        // line 70
        echo (isset($context["entry_language"]) ? $context["entry_language"] : null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t  <select name=\"payment_amazon_login_pay_language\" id=\"amazon-login-pay-language\" class=\"form-control\">
\t\t\t\t";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["language_code"] => $context["language_name"]) {
            // line 74
            echo "\t\t\t\t\t";
            if (($context["language_code"] == (isset($context["payment_amazon_login_pay_language"]) ? $context["payment_amazon_login_pay_language"] : null))) {
                // line 75
                echo "\t\t\t\t\t\t<option value=\"";
                echo $context["language_code"];
                echo "\" selected=\"selected\">";
                echo $context["language_name"];
                echo "</option>
\t\t\t\t\t";
            } else {
                // line 77
                echo "\t\t\t\t\t\t<option value=\"";
                echo $context["language_code"];
                echo "\">";
                echo $context["language_name"];
                echo "</option>
\t\t\t\t\t";
            }
            // line 79
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['language_code'], $context['language_name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "\t\t\t  </select>
\t\t\t  ";
        // line 81
        if ((isset($context["error_curreny"]) ? $context["error_curreny"] : null)) {
            // line 82
            echo "\t\t\t\t  <div class=\"text-danger\">";
            echo (isset($context["error_curreny"]) ? $context["error_curreny"] : null);
            echo "</div>
\t\t\t  ";
        }
        // line 84
        echo "\t\t\t</div>
\t\t  </div>
\t\t  <div class=\"form-group required\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"amazon-login-pay-merchant-id\">";
        // line 87
        echo (isset($context["entry_merchant_id"]) ? $context["entry_merchant_id"] : null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t  <input type=\"text\" name=\"payment_amazon_login_pay_merchant_id\" value=\"";
        // line 89
        echo (isset($context["payment_amazon_login_pay_merchant_id"]) ? $context["payment_amazon_login_pay_merchant_id"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_merchant_id"]) ? $context["entry_merchant_id"] : null);
        echo "\" id=\"amazon-login-pay-merchant-id\" class=\"form-control\" />
\t\t\t  ";
        // line 90
        if ((isset($context["error_merchant_id"]) ? $context["error_merchant_id"] : null)) {
            // line 91
            echo "\t\t\t\t  <div class=\"text-danger\">";
            echo (isset($context["error_merchant_id"]) ? $context["error_merchant_id"] : null);
            echo "</div>
\t\t\t  ";
        }
        // line 93
        echo "\t\t\t</div>
\t\t  </div>
\t\t  <div class=\"form-group required\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"amazon-login-pay-access-key\">";
        // line 96
        echo (isset($context["entry_access_key"]) ? $context["entry_access_key"] : null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t  <input type=\"text\" name=\"payment_amazon_login_pay_access_key\" value=\"";
        // line 98
        echo (isset($context["payment_amazon_login_pay_access_key"]) ? $context["payment_amazon_login_pay_access_key"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_access_key"]) ? $context["entry_access_key"] : null);
        echo "\" id=\"amazon-login-pay-access-key\" class=\"form-control\" />
\t\t\t  ";
        // line 99
        if ((isset($context["error_access_key"]) ? $context["error_access_key"] : null)) {
            // line 100
            echo "\t\t\t\t  <div class=\"text-danger\">";
            echo (isset($context["error_access_key"]) ? $context["error_access_key"] : null);
            echo "</div>
\t\t\t  ";
        }
        // line 102
        echo "\t\t\t</div>
\t\t  </div>
\t\t  <div class=\"form-group required\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"amazon-login-pay-access-secret\">";
        // line 105
        echo (isset($context["entry_access_secret"]) ? $context["entry_access_secret"] : null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t  <input type=\"text\" name=\"payment_amazon_login_pay_access_secret\" value=\"";
        // line 107
        echo (isset($context["payment_amazon_login_pay_access_secret"]) ? $context["payment_amazon_login_pay_access_secret"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_access_secret"]) ? $context["entry_access_secret"] : null);
        echo "\" id=\"amazon-login-pay-access-secret\" class=\"form-control\" />
\t\t\t  ";
        // line 108
        if ((isset($context["error_access_secret"]) ? $context["error_access_secret"] : null)) {
            // line 109
            echo "\t\t\t\t  <div class=\"text-danger\">";
            echo (isset($context["error_access_secret"]) ? $context["error_access_secret"] : null);
            echo "</div>
\t\t\t  ";
        }
        // line 111
        echo "\t\t\t</div>
\t\t  </div>
\t\t  <div class=\"form-group required\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"amazon-login-pay-client-id\">";
        // line 114
        echo (isset($context["entry_client_id"]) ? $context["entry_client_id"] : null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t  <input type=\"text\" name=\"payment_amazon_login_pay_client_id\" value=\"";
        // line 116
        echo (isset($context["payment_amazon_login_pay_client_id"]) ? $context["payment_amazon_login_pay_client_id"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_client_id"]) ? $context["entry_client_id"] : null);
        echo "\" id=\"amazon-login-pay-client-id\" class=\"form-control\" />
\t\t\t  ";
        // line 117
        if ((isset($context["error_client_id"]) ? $context["error_client_id"] : null)) {
            // line 118
            echo "\t\t\t\t  <div class=\"text-danger\">";
            echo (isset($context["error_client_id"]) ? $context["error_client_id"] : null);
            echo "</div>
\t\t\t ";
        }
        // line 120
        echo "\t\t\t</div>
\t\t  </div>
\t\t  <div class=\"form-group required\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"amazon-login-pay-client-secret\">";
        // line 123
        echo (isset($context["entry_client_secret"]) ? $context["entry_client_secret"] : null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t  <input type=\"text\" name=\"payment_amazon_login_pay_client_secret\" value=\"";
        // line 125
        echo (isset($context["payment_amazon_login_pay_client_secret"]) ? $context["payment_amazon_login_pay_client_secret"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_client_secret"]) ? $context["entry_client_secret"] : null);
        echo "\" id=\"amazon-login-pay-client-secret\" class=\"form-control\" />
\t\t\t  ";
        // line 126
        if ((isset($context["error_client_secret"]) ? $context["error_client_secret"] : null)) {
            // line 127
            echo "\t\t\t\t  <div class=\"text-danger\">";
            echo (isset($context["error_client_secret"]) ? $context["error_client_secret"] : null);
            echo "</div>
\t\t\t  ";
        }
        // line 129
        echo "\t\t\t</div>
\t\t  </div>
\t\t  <div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-ipn-token\"><span data-toggle=\"tooltip\" title=\"";
        // line 132
        echo (isset($context["help_ipn_token"]) ? $context["help_ipn_token"] : null);
        echo "\">";
        echo (isset($context["entry_ipn_token"]) ? $context["entry_ipn_token"] : null);
        echo "</span></label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t  <input type=\"text\" name=\"payment_amazon_login_pay_ipn_token\" value=\"";
        // line 134
        echo (isset($context["payment_amazon_login_pay_ipn_token"]) ? $context["payment_amazon_login_pay_ipn_token"] : null);
        echo "\" id=\"input-ipn-token\" class=\"form-control\" />
\t\t\t</div>
\t\t  </div>
\t\t  <div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-ipn-url\">";
        // line 138
        echo (isset($context["entry_ipn_url"]) ? $context["entry_ipn_url"] : null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t  <div class=\"input-group\"><span class=\"input-group-addon\"><i class=\"fa fa-link\"></i></span>
\t\t\t\t<input type=\"text\" readonly value=\"";
        // line 141
        echo (isset($context["ipn_url"]) ? $context["ipn_url"] : null);
        echo "\" id=\"input-ipn-url\" class=\"form-control\" />
\t\t\t  </div>
\t\t\t</div>
\t\t  </div>
\t\t  <div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"amazon-login-pay-test\">";
        // line 146
        echo (isset($context["entry_login_pay_test"]) ? $context["entry_login_pay_test"] : null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t  <select name=\"payment_amazon_login_pay_test\" id=\"amazon-login-pay-test\" class=\"form-control\">
\t\t\t\t";
        // line 149
        if (((isset($context["payment_amazon_login_pay_test"]) ? $context["payment_amazon_login_pay_test"] : null) == "sandbox")) {
            // line 150
            echo "\t\t\t\t\t<option value=\"sandbox\" selected=\"selected\">";
            echo (isset($context["text_sandbox"]) ? $context["text_sandbox"] : null);
            echo "</option>
\t\t\t\t";
        } else {
            // line 152
            echo "\t\t\t\t\t<option value=\"sandbox\">";
            echo (isset($context["text_sandbox"]) ? $context["text_sandbox"] : null);
            echo "</option>
\t\t\t\t";
        }
        // line 154
        echo "\t\t\t\t";
        if (((isset($context["payment_amazon_login_pay_test"]) ? $context["payment_amazon_login_pay_test"] : null) == "live")) {
            // line 155
            echo "\t\t\t\t\t<option value=\"live\" selected=\"selected\">";
            echo (isset($context["text_live"]) ? $context["text_live"] : null);
            echo "</option>
\t\t\t\t";
        } else {
            // line 157
            echo "\t\t\t\t\t<option value=\"live\">";
            echo (isset($context["text_live"]) ? $context["text_live"] : null);
            echo "</option>
\t\t\t\t";
        }
        // line 159
        echo "\t\t\t  </select>
\t\t\t</div>
\t\t  </div>
\t\t  <div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"amazon-login-pay-mode\"><span data-toggle=\"tooltip\" title=\"";
        // line 163
        echo (isset($context["help_pay_mode"]) ? $context["help_pay_mode"] : null);
        echo "\">";
        echo (isset($context["entry_login_pay_mode"]) ? $context["entry_login_pay_mode"] : null);
        echo "</span></label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t  <select name=\"payment_amazon_login_pay_mode\" id=\"amazon-login-pay-mode\" class=\"form-control\">
\t\t\t\t";
        // line 166
        if (((isset($context["payment_amazon_login_pay_mode"]) ? $context["payment_amazon_login_pay_mode"] : null) == "payment")) {
            // line 167
            echo "\t\t\t\t\t<option value=\"payment\" selected=\"selected\">";
            echo (isset($context["text_payment"]) ? $context["text_payment"] : null);
            echo "</option>
\t\t\t\t";
        } else {
            // line 169
            echo "\t\t\t\t\t<option value=\"payment\">";
            echo (isset($context["text_payment"]) ? $context["text_payment"] : null);
            echo "</option>
\t\t\t\t";
        }
        // line 171
        echo "\t\t\t\t";
        if (((isset($context["payment_amazon_login_pay_mode"]) ? $context["payment_amazon_login_pay_mode"] : null) == "auth")) {
            // line 172
            echo "\t\t\t\t\t<option value=\"auth\" selected=\"selected\">";
            echo (isset($context["text_auth"]) ? $context["text_auth"] : null);
            echo "</option>
\t\t\t\t";
        } else {
            // line 174
            echo "\t\t\t\t\t<option value=\"auth\">";
            echo (isset($context["text_auth"]) ? $context["text_auth"] : null);
            echo "</option>
\t\t\t\t";
        }
        // line 176
        echo "\t\t\t  </select>
\t\t\t</div>
\t\t  </div>
\t\t  <div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"amazon-login-pay-checkout\"><span data-toggle=\"tooltip\" title=\"";
        // line 180
        echo (isset($context["help_checkout"]) ? $context["help_checkout"] : null);
        echo "\">";
        echo (isset($context["entry_checkout"]) ? $context["entry_checkout"] : null);
        echo "</span></label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t  <select name=\"payment_amazon_login_pay_checkout\" id=\"amazon-login-checkout-mode\" class=\"form-control\">
\t\t\t\t";
        // line 183
        if (((isset($context["payment_amazon_login_pay_checkout"]) ? $context["payment_amazon_login_pay_checkout"] : null) == "account")) {
            // line 184
            echo "\t\t\t\t\t<option value=\"account\" selected=\"selected\">";
            echo (isset($context["text_account"]) ? $context["text_account"] : null);
            echo "</option>
\t\t\t\t";
        } else {
            // line 186
            echo "\t\t\t\t\t<option value=\"account\">";
            echo (isset($context["text_account"]) ? $context["text_account"] : null);
            echo "</option>
\t\t\t\t";
        }
        // line 188
        echo "\t\t\t\t";
        if (((isset($context["payment_amazon_login_pay_checkout"]) ? $context["payment_amazon_login_pay_checkout"] : null) == "guest")) {
            // line 189
            echo "\t\t\t\t\t<option value=\"guest\" selected=\"selected\">";
            echo (isset($context["text_guest"]) ? $context["text_guest"] : null);
            echo "</option>
\t\t\t\t";
        } else {
            // line 191
            echo "\t\t\t\t\t<option value=\"guest\">";
            echo (isset($context["text_guest"]) ? $context["text_guest"] : null);
            echo "</option>
\t\t\t\t";
        }
        // line 193
        echo "\t\t\t  </select>
\t\t\t</div>
\t\t  </div>
\t\t  <div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"amazon-login-pay-capture-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 197
        echo (isset($context["help_capture_status"]) ? $context["help_capture_status"] : null);
        echo "\">";
        echo (isset($context["entry_capture_status"]) ? $context["entry_capture_status"] : null);
        echo "</span></label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t  <select name=\"payment_amazon_login_pay_capture_status\" id=\"amazon-login-pay-capturet-status\" class=\"form-control\">
\t\t\t\t<option value=\"\">";
        // line 200
        echo (isset($context["text_no_capture"]) ? $context["text_no_capture"] : null);
        echo "</option>
\t\t\t\t";
        // line 201
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 202
            echo "\t\t\t\t\t";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_amazon_login_pay_capture_status"]) ? $context["payment_amazon_login_pay_capture_status"] : null))) {
                // line 203
                echo "\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
\t\t\t\t\t";
            } else {
                // line 205
                echo "\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
\t\t\t\t\t";
            }
            // line 207
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 208
        echo "\t\t\t  </select>
\t\t\t</div>
\t\t  </div>
\t\t  <div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"amazon-login-pay-pending-status\">";
        // line 212
        echo (isset($context["entry_pending_status"]) ? $context["entry_pending_status"] : null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t  <select name=\"payment_amazon_login_pay_pending_status\" id=\"amazon-login-pay-pendingt-status\" class=\"form-control\">
\t\t\t\t";
        // line 215
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 216
            echo "\t\t\t\t\t";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_amazon_login_pay_pending_status"]) ? $context["payment_amazon_login_pay_pending_status"] : null))) {
                // line 217
                echo "\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
\t\t\t\t\t";
            } else {
                // line 219
                echo "\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
\t\t\t\t\t";
            }
            // line 221
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 222
        echo "\t\t\t  </select>
\t\t\t</div>
\t\t  </div>
\t\t  <div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"amazon-login-pay-minimum-total\"><span data-toggle=\"tooltip\" title=\"";
        // line 226
        echo (isset($context["help_minimum_total"]) ? $context["help_minimum_total"] : null);
        echo "\">";
        echo (isset($context["text_minimum_total"]) ? $context["text_minimum_total"] : null);
        echo "</span></label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t  <input type=\"text\" name=\"payment_amazon_login_pay_minimum_total\" value=\"";
        // line 228
        echo (isset($context["payment_amazon_login_pay_minimum_total"]) ? $context["payment_amazon_login_pay_minimum_total"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["text_minimum_total"]) ? $context["text_minimum_total"] : null);
        echo "\" id=\"amazon-login-pay-minimum-total\" class=\"form-control\" />
\t\t\t  ";
        // line 229
        if ((isset($context["error_minimum_total"]) ? $context["error_minimum_total"] : null)) {
            // line 230
            echo "\t\t\t\t  <div class=\"text-danger\">";
            echo (isset($context["error_minimum_total"]) ? $context["error_minimum_total"] : null);
            echo "</div>
\t\t\t  ";
        }
        // line 232
        echo "\t\t\t</div>
\t\t  </div>
\t\t  <div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"amazon-login-pay-geo-zone\">";
        // line 235
        echo (isset($context["text_geo_zone"]) ? $context["text_geo_zone"] : null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t  <select name=\"payment_amazon_login_pay_geo_zone\" id=\"amazon-login-pay-geo-zone\" class=\"form-control\">
\t\t\t\t";
        // line 238
        if (((isset($context["payment_amazon_login_pay_geo_zone"]) ? $context["payment_amazon_login_pay_geo_zone"] : null) == 0)) {
            // line 239
            echo "\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            echo (isset($context["text_all_geo_zones"]) ? $context["text_all_geo_zones"] : null);
            echo "</option>
\t\t\t\t";
        } else {
            // line 241
            echo "\t\t\t\t\t<option value=\"0\">";
            echo (isset($context["text_all_geo_zones"]) ? $context["text_all_geo_zones"] : null);
            echo "</option>
\t\t\t\t";
        }
        // line 243
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["geo_zones"]) ? $context["geo_zones"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 244
            echo "\t\t\t\t\t";
            if (((isset($context["payment_amazon_login_pay_geo_zone"]) ? $context["payment_amazon_login_pay_geo_zone"] : null) == $this->getAttribute($context["geo_zone"], "geo_zone_id", array()))) {
                // line 245
                echo "\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["geo_zone"], "name", array());
                echo "</option>
\t\t\t\t\t";
            } else {
                // line 247
                echo "\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array());
                echo "\">";
                echo $this->getAttribute($context["geo_zone"], "name", array());
                echo "</option>
\t\t\t\t\t";
            }
            // line 249
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 250
        echo "\t\t\t  </select>
\t\t\t</div>
\t\t  </div>
\t\t  <div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"amazon-login-pay-input-debug\"><span data-toggle=\"tooltip\" title=\"";
        // line 254
        echo (isset($context["help_debug"]) ? $context["help_debug"] : null);
        echo "\">";
        echo (isset($context["entry_debug"]) ? $context["entry_debug"] : null);
        echo "</span></label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t  <select name=\"payment_amazon_login_pay_debug\" id=\"amazon-login-pay-input-debug\" class=\"form-control\">
\t\t\t\t";
        // line 257
        if ((isset($context["payment_amazon_login_pay_debug"]) ? $context["payment_amazon_login_pay_debug"] : null)) {
            // line 258
            echo "\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t<option value=\"0\">";
            // line 259
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t";
        } else {
            // line 261
            echo "\t\t\t\t\t<option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 262
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t";
        }
        // line 264
        echo "\t\t\t  </select>
\t\t\t</div>
\t\t  </div>
\t\t  <div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"amazon-login-pay-sort-order\">";
        // line 268
        echo (isset($context["text_sort_order"]) ? $context["text_sort_order"] : null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t  <input type=\"text\" name=\"payment_amazon_login_pay_sort_order\" value=\"";
        // line 270
        echo (isset($context["payment_amazon_login_pay_sort_order"]) ? $context["payment_amazon_login_pay_sort_order"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["text_sort_order"]) ? $context["text_sort_order"] : null);
        echo "\" id=\"amazon-login-pay-sort-order\" class=\"form-control\" />
\t\t\t</div>
\t\t  </div>
\t\t  <div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"amazon-login-pay-status\">";
        // line 274
        echo (isset($context["text_status"]) ? $context["text_status"] : null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t  <select name=\"payment_amazon_login_pay_status\" id=\"amazon-login-pay-status\" class=\"form-control\">
\t\t\t\t";
        // line 277
        if (((isset($context["payment_amazon_login_pay_status"]) ? $context["payment_amazon_login_pay_status"] : null) == 1)) {
            // line 278
            echo "\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t";
        } else {
            // line 280
            echo "\t\t\t\t\t<option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t";
        }
        // line 282
        echo "\t\t\t\t";
        if (((isset($context["payment_amazon_login_pay_status"]) ? $context["payment_amazon_login_pay_status"] : null) == 0)) {
            // line 283
            echo "\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t";
        } else {
            // line 285
            echo "\t\t\t\t\t<option value=\"0\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t";
        }
        // line 287
        echo "\t\t\t  </select>
\t\t\t</div>
\t\t  </div>
\t\t  <div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"amazon-login-pay-declined_codes\"><span data-toggle=\"tooltip\" title=\"";
        // line 291
        echo (isset($context["help_declined_codes"]) ? $context["help_declined_codes"] : null);
        echo "\">";
        echo (isset($context["text_declined_codes"]) ? $context["text_declined_codes"] : null);
        echo "</span></label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t  <select name=\"payment_amazon_login_pay_declined_code\" id=\"amazon-login-pay-declined_code\" class=\"form-control\">
\t\t\t\t<option value=\"\">";
        // line 294
        echo (isset($context["text_amazon_no_declined"]) ? $context["text_amazon_no_declined"] : null);
        echo "</option>
\t\t\t\t";
        // line 295
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["declined_codes"]) ? $context["declined_codes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["declined_code"]) {
            // line 296
            echo "\t\t\t\t\t";
            if (((isset($context["payment_amazon_login_pay_declined_code"]) ? $context["payment_amazon_login_pay_declined_code"] : null) == $context["declined_code"])) {
                // line 297
                echo "\t\t\t\t\t\t<option value=\"";
                echo $context["declined_code"];
                echo "\" selected=\"selected\">";
                echo $context["declined_code"];
                echo "</option>
\t\t\t\t\t";
            } else {
                // line 299
                echo "\t\t\t\t\t\t<option value=\"";
                echo $context["declined_code"];
                echo "\">";
                echo $context["declined_code"];
                echo "</option>
\t\t\t\t\t";
            }
            // line 301
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['declined_code'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 302
        echo "\t\t\t  </select>
\t\t\t</div>
\t\t  </div>
\t\t</form>
\t  </div>
\t</div>
  </div>
  <script type=\"text/javascript\">
      \$('#button-credentials').on('click', function () {
        var json = \$('#input-credentials').val();
        try {
          var credentials = \$.parseJSON(\$('#input-credentials').val());
          \$('#amazon-login-pay-merchant-id').val(credentials['merchant_id']);
          \$('#amazon-login-pay-access-key').val(credentials['access_key']);
          \$('#amazon-login-pay-access-secret').val(credentials['secret_key']);
          \$('#amazon-login-pay-client-id').val(credentials['client_id']);
          \$('#amazon-login-pay-client-secret').val(credentials['client_secret']);
          \$('<input>').attr({
            type: 'hidden',
            value: 'true',
            name: 'language_reload'
          }).appendTo('#form-amazon-login-pay');
          \$('.pull-right > .btn-primary').click();
        } catch (e) {
          \$('.container-fluid:eq(1)').prepend('<div class=\"alert alert-danger alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button><i class=\"fa fa-exclamation-circle\"></i> ";
        // line 326
        echo (isset($context["error_credentials"]) ? $context["error_credentials"] : null);
        echo "</div>')
        }
      });
      //</script>
  <script type=\"text/javascript\">
      \$('input[name=\\'payment_amazon_login_pay_ipn_token\\']').change(function () {
        var base = '";
        // line 332
        echo (isset($context["https_catalog"]) ? $context["https_catalog"] : null);
        echo "index.php?route=extension/payment/amazon_login_pay/ipn&token=';
        var allowedLength = 150 - base.length;
        var newVal = \$(this).val().substr(0, allowedLength);
        \$(this).val(newVal);
        \$('#input-ipn-url').val(base + newVal);
      });
      //</script>
  <script type=\"text/javascript\">
      \$('#amazon-login-pay-payment_region').on('change', function () {
        switch (\$(this).val()) {
          case 'EUR':
            \$('#amazon-login-pay-language').html('<option selected value=\"de-DE\">German</option>');
            break;
          case 'GBP':
            \$('#amazon-login-pay-language').html('<option selected value=\"en-GB\">English</option>');
            break;
          case 'USD':
            \$('#amazon-login-pay-language').html('<option selected value=\"en-US\">American English</option>');
            break;
        }
        \$('<input>').attr({
          type: 'hidden',
          value: 'true',
          name: 'language_reload'
        }).appendTo('#form-amazon-login-pay');
        \$(\"#form-amazon-login-pay\").submit();
      });
      //</script>
  <script type=\"text/javascript\">
      \$('#amazon-login-pay-language').on('change', function () {
        var language = \$(this).val();
        var mod_lang = language.replace(\"-\", \"_\");
        \$('input[name=\"language\"]').val(mod_lang);
      });
      //</script>
  <script type=\"text/javascript\">
      \$('#sign-up').on('click', function () {
        \$(\"#registration-form\").submit();
        \$(\"#container-credentials\").show();
      });
      //</script>
</div>
";
        // line 374
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/payment/amazon_login_pay.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  917 => 374,  872 => 332,  863 => 326,  837 => 302,  831 => 301,  823 => 299,  815 => 297,  812 => 296,  808 => 295,  804 => 294,  796 => 291,  790 => 287,  784 => 285,  778 => 283,  775 => 282,  769 => 280,  763 => 278,  761 => 277,  755 => 274,  746 => 270,  741 => 268,  735 => 264,  730 => 262,  725 => 261,  720 => 259,  715 => 258,  713 => 257,  705 => 254,  699 => 250,  693 => 249,  685 => 247,  677 => 245,  674 => 244,  669 => 243,  663 => 241,  657 => 239,  655 => 238,  649 => 235,  644 => 232,  638 => 230,  636 => 229,  630 => 228,  623 => 226,  617 => 222,  611 => 221,  603 => 219,  595 => 217,  592 => 216,  588 => 215,  582 => 212,  576 => 208,  570 => 207,  562 => 205,  554 => 203,  551 => 202,  547 => 201,  543 => 200,  535 => 197,  529 => 193,  523 => 191,  517 => 189,  514 => 188,  508 => 186,  502 => 184,  500 => 183,  492 => 180,  486 => 176,  480 => 174,  474 => 172,  471 => 171,  465 => 169,  459 => 167,  457 => 166,  449 => 163,  443 => 159,  437 => 157,  431 => 155,  428 => 154,  422 => 152,  416 => 150,  414 => 149,  408 => 146,  400 => 141,  394 => 138,  387 => 134,  380 => 132,  375 => 129,  369 => 127,  367 => 126,  361 => 125,  356 => 123,  351 => 120,  345 => 118,  343 => 117,  337 => 116,  332 => 114,  327 => 111,  321 => 109,  319 => 108,  313 => 107,  308 => 105,  303 => 102,  297 => 100,  295 => 99,  289 => 98,  284 => 96,  279 => 93,  273 => 91,  271 => 90,  265 => 89,  260 => 87,  255 => 84,  249 => 82,  247 => 81,  244 => 80,  238 => 79,  230 => 77,  222 => 75,  219 => 74,  215 => 73,  209 => 70,  203 => 66,  197 => 65,  189 => 63,  181 => 61,  178 => 60,  174 => 59,  168 => 56,  163 => 54,  157 => 51,  148 => 45,  142 => 42,  134 => 37,  129 => 35,  125 => 34,  121 => 33,  116 => 32,  107 => 30,  103 => 29,  99 => 28,  95 => 27,  91 => 26,  87 => 25,  83 => 24,  77 => 21,  72 => 20,  65 => 17,  63 => 16,  57 => 12,  46 => 10,  42 => 9,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/* 	<div class="container-fluid">*/
/* 	  <div class="pull-right">*/
/* 		<button type="submit" form="form-payment" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/* 		<a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/* 	  <h1>{{ heading_title }}</h1>      <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/* 	</div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/* 	{% if error_warning %}*/
/* 		<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/* 		</div>*/
/* 	{% endif %}*/
/* 	<div class="alert alert-{{ has_ssl ? 'info' : 'danger' }}">*/
/* 		<i class="fa fa-exclamation-circle"></i> {{ text_info_ssl }}*/
/* 	</div>*/
/* 	<div class="alert alert-info">*/
/* 	  <form method="POST" target="_blank" action="{{ registration_url }}" class="form-horizontal" id="registration-form">*/
/* 		<input type="hidden" value="{{ locale }}" name="locale">*/
/* 		<input type="hidden" value="{{ sp_id }}" name="spId">*/
/* 		<input type="hidden" value="{{ unique_id }}" name="uniqueId">*/
/* 		<input type="hidden" value="{{ allowed_login_domain }}" name="allowedLoginDomains[]">*/
/* 		{% for login_redirect_url in login_redirect_urls %}*/
/* 			<input type="hidden" value="{{ login_redirect_url }}" name="loginRedirectURLs[]">*/
/* 		{% endfor %}*/
/* 		<input type="hidden" value="{{ store_name }}" name="storeDescription">*/
/* 		<input type="hidden" value="{{ simple_path_language }}" name="language">*/
/* 		<input type="hidden" value="{{ ipn_url }}" name="sandboxMerchantIPNURL">*/
/* 		<input type="hidden" value="{{ ipn_url }}" name="productionMerchantIPNURL">*/
/* 		<input type="hidden" value="POST" name="returnMethod">*/
/* 		<button type="button" class="btn btn-link" id="sign-up">{{ text_amazon_signup }}</button>*/
/* 		<button type="button" class="close" data-dismiss="alert">&times;</button>*/
/* 	  </form>*/
/* 	  <div id="container-credentials">*/
/* 		<div class="col-sm-5">*/
/* 		  <textarea class="form-control" id="input-credentials" placeholder="{{ text_credentials }}" rows="7" name="credentials"></textarea>*/
/* 		</div>*/
/* 		<div class="col-sm-5">*/
/* 		  <button id="button-credentials" class="btn btn-primary" type="button" >{{ text_validate_credentials }}</button>*/
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* 	<div class="panel panel-default">*/
/* 	  <div class="panel-heading">*/
/* 		<h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3>*/
/* 	  </div>*/
/* 	  <div class="panel-body">*/
/* 		<form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-payment" class="form-horizontal">*/
/* 		  <div class="form-group">*/
/* 			<label class="col-sm-2 control-label" for="amazon-login-pay-payment-region">{{ entry_payment_region }}</label>*/
/* 			<div class="col-sm-10">*/
/* 			  <select name="payment_amazon_login_pay_payment_region" id="amazon-login-pay-payment_region" class="form-control">*/
/* 				{% for payment_region_code, payment_region_name in payment_regions %}*/
/* 					{% if payment_region_code == payment_amazon_login_pay_payment_region %}*/
/* 						<option value="{{ payment_region_code }}" selected="selected">{{ payment_region_name }}</option>*/
/* 					{% else %}*/
/* 						<option value="{{ payment_region_code }}">{{ payment_region_name }}</option>*/
/* 					{% endif %}*/
/* 				{% endfor %}*/
/* 			  </select>*/
/* 			</div>*/
/* 		  </div>*/
/* 		  <div class="form-group">*/
/* 			<label class="col-sm-2 control-label" for="amazon-login-pay-language">{{ entry_language }}</label>*/
/* 			<div class="col-sm-10">*/
/* 			  <select name="payment_amazon_login_pay_language" id="amazon-login-pay-language" class="form-control">*/
/* 				{% for language_code, language_name in languages %}*/
/* 					{% if language_code == payment_amazon_login_pay_language %}*/
/* 						<option value="{{ language_code }}" selected="selected">{{ language_name }}</option>*/
/* 					{% else %}*/
/* 						<option value="{{ language_code }}">{{ language_name }}</option>*/
/* 					{% endif %}*/
/* 				{% endfor %}*/
/* 			  </select>*/
/* 			  {% if error_curreny %}*/
/* 				  <div class="text-danger">{{ error_curreny }}</div>*/
/* 			  {% endif %}*/
/* 			</div>*/
/* 		  </div>*/
/* 		  <div class="form-group required">*/
/* 			<label class="col-sm-2 control-label" for="amazon-login-pay-merchant-id">{{ entry_merchant_id }}</label>*/
/* 			<div class="col-sm-10">*/
/* 			  <input type="text" name="payment_amazon_login_pay_merchant_id" value="{{ payment_amazon_login_pay_merchant_id }}" placeholder="{{ entry_merchant_id }}" id="amazon-login-pay-merchant-id" class="form-control" />*/
/* 			  {% if error_merchant_id %}*/
/* 				  <div class="text-danger">{{ error_merchant_id }}</div>*/
/* 			  {% endif %}*/
/* 			</div>*/
/* 		  </div>*/
/* 		  <div class="form-group required">*/
/* 			<label class="col-sm-2 control-label" for="amazon-login-pay-access-key">{{ entry_access_key }}</label>*/
/* 			<div class="col-sm-10">*/
/* 			  <input type="text" name="payment_amazon_login_pay_access_key" value="{{ payment_amazon_login_pay_access_key }}" placeholder="{{ entry_access_key }}" id="amazon-login-pay-access-key" class="form-control" />*/
/* 			  {% if error_access_key %}*/
/* 				  <div class="text-danger">{{ error_access_key }}</div>*/
/* 			  {% endif %}*/
/* 			</div>*/
/* 		  </div>*/
/* 		  <div class="form-group required">*/
/* 			<label class="col-sm-2 control-label" for="amazon-login-pay-access-secret">{{ entry_access_secret }}</label>*/
/* 			<div class="col-sm-10">*/
/* 			  <input type="text" name="payment_amazon_login_pay_access_secret" value="{{ payment_amazon_login_pay_access_secret }}" placeholder="{{ entry_access_secret }}" id="amazon-login-pay-access-secret" class="form-control" />*/
/* 			  {% if error_access_secret %}*/
/* 				  <div class="text-danger">{{ error_access_secret }}</div>*/
/* 			  {% endif %}*/
/* 			</div>*/
/* 		  </div>*/
/* 		  <div class="form-group required">*/
/* 			<label class="col-sm-2 control-label" for="amazon-login-pay-client-id">{{ entry_client_id }}</label>*/
/* 			<div class="col-sm-10">*/
/* 			  <input type="text" name="payment_amazon_login_pay_client_id" value="{{ payment_amazon_login_pay_client_id }}" placeholder="{{ entry_client_id }}" id="amazon-login-pay-client-id" class="form-control" />*/
/* 			  {% if error_client_id %}*/
/* 				  <div class="text-danger">{{ error_client_id }}</div>*/
/* 			 {% endif %}*/
/* 			</div>*/
/* 		  </div>*/
/* 		  <div class="form-group required">*/
/* 			<label class="col-sm-2 control-label" for="amazon-login-pay-client-secret">{{ entry_client_secret }}</label>*/
/* 			<div class="col-sm-10">*/
/* 			  <input type="text" name="payment_amazon_login_pay_client_secret" value="{{ payment_amazon_login_pay_client_secret }}" placeholder="{{ entry_client_secret }}" id="amazon-login-pay-client-secret" class="form-control" />*/
/* 			  {% if error_client_secret %}*/
/* 				  <div class="text-danger">{{ error_client_secret }}</div>*/
/* 			  {% endif %}*/
/* 			</div>*/
/* 		  </div>*/
/* 		  <div class="form-group">*/
/* 			<label class="col-sm-2 control-label" for="input-ipn-token"><span data-toggle="tooltip" title="{{ help_ipn_token }}">{{ entry_ipn_token }}</span></label>*/
/* 			<div class="col-sm-10">*/
/* 			  <input type="text" name="payment_amazon_login_pay_ipn_token" value="{{ payment_amazon_login_pay_ipn_token }}" id="input-ipn-token" class="form-control" />*/
/* 			</div>*/
/* 		  </div>*/
/* 		  <div class="form-group">*/
/* 			<label class="col-sm-2 control-label" for="input-ipn-url">{{ entry_ipn_url }}</label>*/
/* 			<div class="col-sm-10">*/
/* 			  <div class="input-group"><span class="input-group-addon"><i class="fa fa-link"></i></span>*/
/* 				<input type="text" readonly value="{{ ipn_url }}" id="input-ipn-url" class="form-control" />*/
/* 			  </div>*/
/* 			</div>*/
/* 		  </div>*/
/* 		  <div class="form-group">*/
/* 			<label class="col-sm-2 control-label" for="amazon-login-pay-test">{{ entry_login_pay_test }}</label>*/
/* 			<div class="col-sm-10">*/
/* 			  <select name="payment_amazon_login_pay_test" id="amazon-login-pay-test" class="form-control">*/
/* 				{% if payment_amazon_login_pay_test == 'sandbox' %}*/
/* 					<option value="sandbox" selected="selected">{{ text_sandbox }}</option>*/
/* 				{% else %}*/
/* 					<option value="sandbox">{{ text_sandbox }}</option>*/
/* 				{% endif %}*/
/* 				{% if payment_amazon_login_pay_test == 'live' %}*/
/* 					<option value="live" selected="selected">{{ text_live }}</option>*/
/* 				{% else %}*/
/* 					<option value="live">{{ text_live }}</option>*/
/* 				{% endif %}*/
/* 			  </select>*/
/* 			</div>*/
/* 		  </div>*/
/* 		  <div class="form-group">*/
/* 			<label class="col-sm-2 control-label" for="amazon-login-pay-mode"><span data-toggle="tooltip" title="{{ help_pay_mode }}">{{ entry_login_pay_mode }}</span></label>*/
/* 			<div class="col-sm-10">*/
/* 			  <select name="payment_amazon_login_pay_mode" id="amazon-login-pay-mode" class="form-control">*/
/* 				{% if payment_amazon_login_pay_mode == 'payment' %}*/
/* 					<option value="payment" selected="selected">{{ text_payment }}</option>*/
/* 				{% else %}*/
/* 					<option value="payment">{{ text_payment }}</option>*/
/* 				{% endif %}*/
/* 				{% if payment_amazon_login_pay_mode == 'auth' %}*/
/* 					<option value="auth" selected="selected">{{ text_auth }}</option>*/
/* 				{% else %}*/
/* 					<option value="auth">{{ text_auth }}</option>*/
/* 				{% endif %}*/
/* 			  </select>*/
/* 			</div>*/
/* 		  </div>*/
/* 		  <div class="form-group">*/
/* 			<label class="col-sm-2 control-label" for="amazon-login-pay-checkout"><span data-toggle="tooltip" title="{{ help_checkout }}">{{ entry_checkout }}</span></label>*/
/* 			<div class="col-sm-10">*/
/* 			  <select name="payment_amazon_login_pay_checkout" id="amazon-login-checkout-mode" class="form-control">*/
/* 				{% if payment_amazon_login_pay_checkout == 'account' %}*/
/* 					<option value="account" selected="selected">{{ text_account }}</option>*/
/* 				{% else %}*/
/* 					<option value="account">{{ text_account }}</option>*/
/* 				{% endif %}*/
/* 				{% if payment_amazon_login_pay_checkout == 'guest' %}*/
/* 					<option value="guest" selected="selected">{{ text_guest }}</option>*/
/* 				{% else %}*/
/* 					<option value="guest">{{ text_guest }}</option>*/
/* 				{% endif %}*/
/* 			  </select>*/
/* 			</div>*/
/* 		  </div>*/
/* 		  <div class="form-group">*/
/* 			<label class="col-sm-2 control-label" for="amazon-login-pay-capture-status"><span data-toggle="tooltip" title="{{ help_capture_status }}">{{ entry_capture_status }}</span></label>*/
/* 			<div class="col-sm-10">*/
/* 			  <select name="payment_amazon_login_pay_capture_status" id="amazon-login-pay-capturet-status" class="form-control">*/
/* 				<option value="">{{ text_no_capture }}</option>*/
/* 				{% for order_status in order_statuses %}*/
/* 					{% if order_status.order_status_id == payment_amazon_login_pay_capture_status %}*/
/* 						<option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/* 					{% else %}*/
/* 						<option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/* 					{% endif %}*/
/* 				{% endfor %}*/
/* 			  </select>*/
/* 			</div>*/
/* 		  </div>*/
/* 		  <div class="form-group">*/
/* 			<label class="col-sm-2 control-label" for="amazon-login-pay-pending-status">{{ entry_pending_status }}</label>*/
/* 			<div class="col-sm-10">*/
/* 			  <select name="payment_amazon_login_pay_pending_status" id="amazon-login-pay-pendingt-status" class="form-control">*/
/* 				{% for order_status in order_statuses %}*/
/* 					{% if order_status.order_status_id == payment_amazon_login_pay_pending_status %}*/
/* 						<option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/* 					{% else %}*/
/* 						<option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/* 					{% endif %}*/
/* 				{% endfor %}*/
/* 			  </select>*/
/* 			</div>*/
/* 		  </div>*/
/* 		  <div class="form-group">*/
/* 			<label class="col-sm-2 control-label" for="amazon-login-pay-minimum-total"><span data-toggle="tooltip" title="{{ help_minimum_total }}">{{ text_minimum_total }}</span></label>*/
/* 			<div class="col-sm-10">*/
/* 			  <input type="text" name="payment_amazon_login_pay_minimum_total" value="{{ payment_amazon_login_pay_minimum_total }}" placeholder="{{ text_minimum_total }}" id="amazon-login-pay-minimum-total" class="form-control" />*/
/* 			  {% if error_minimum_total %}*/
/* 				  <div class="text-danger">{{ error_minimum_total }}</div>*/
/* 			  {% endif %}*/
/* 			</div>*/
/* 		  </div>*/
/* 		  <div class="form-group">*/
/* 			<label class="col-sm-2 control-label" for="amazon-login-pay-geo-zone">{{ text_geo_zone }}</label>*/
/* 			<div class="col-sm-10">*/
/* 			  <select name="payment_amazon_login_pay_geo_zone" id="amazon-login-pay-geo-zone" class="form-control">*/
/* 				{% if payment_amazon_login_pay_geo_zone == 0 %}*/
/* 					<option value="0" selected="selected">{{ text_all_geo_zones }}</option>*/
/* 				{% else %}*/
/* 					<option value="0">{{ text_all_geo_zones }}</option>*/
/* 				{% endif %}*/
/* 				{% for geo_zone in geo_zones %}*/
/* 					{% if payment_amazon_login_pay_geo_zone == geo_zone.geo_zone_id %}*/
/* 						<option value="{{ geo_zone.geo_zone_id }}" selected="selected">{{ geo_zone.name }}</option>*/
/* 					{% else %}*/
/* 						<option value="{{ geo_zone.geo_zone_id }}">{{ geo_zone.name }}</option>*/
/* 					{% endif %}*/
/* 				{% endfor %}*/
/* 			  </select>*/
/* 			</div>*/
/* 		  </div>*/
/* 		  <div class="form-group">*/
/* 			<label class="col-sm-2 control-label" for="amazon-login-pay-input-debug"><span data-toggle="tooltip" title="{{ help_debug }}">{{ entry_debug }}</span></label>*/
/* 			<div class="col-sm-10">*/
/* 			  <select name="payment_amazon_login_pay_debug" id="amazon-login-pay-input-debug" class="form-control">*/
/* 				{% if payment_amazon_login_pay_debug %}*/
/* 					<option value="1" selected="selected">{{ text_enabled }}</option>*/
/* 					<option value="0">{{ text_disabled }}</option>*/
/* 				{% else %}*/
/* 					<option value="1">{{ text_enabled }}</option>*/
/* 					<option value="0" selected="selected">{{ text_disabled }}</option>*/
/* 				{% endif %}*/
/* 			  </select>*/
/* 			</div>*/
/* 		  </div>*/
/* 		  <div class="form-group">*/
/* 			<label class="col-sm-2 control-label" for="amazon-login-pay-sort-order">{{ text_sort_order }}</label>*/
/* 			<div class="col-sm-10">*/
/* 			  <input type="text" name="payment_amazon_login_pay_sort_order" value="{{ payment_amazon_login_pay_sort_order }}" placeholder="{{ text_sort_order }}" id="amazon-login-pay-sort-order" class="form-control" />*/
/* 			</div>*/
/* 		  </div>*/
/* 		  <div class="form-group">*/
/* 			<label class="col-sm-2 control-label" for="amazon-login-pay-status">{{ text_status }}</label>*/
/* 			<div class="col-sm-10">*/
/* 			  <select name="payment_amazon_login_pay_status" id="amazon-login-pay-status" class="form-control">*/
/* 				{% if payment_amazon_login_pay_status == 1 %}*/
/* 					<option value="1" selected="selected">{{ text_enabled }}</option>*/
/* 				{% else %}*/
/* 					<option value="1">{{ text_enabled }}</option>*/
/* 				{% endif %}*/
/* 				{% if payment_amazon_login_pay_status == 0 %}*/
/* 					<option value="0" selected="selected">{{ text_disabled }}</option>*/
/* 				{% else %}*/
/* 					<option value="0">{{ text_disabled }}</option>*/
/* 				{% endif %}*/
/* 			  </select>*/
/* 			</div>*/
/* 		  </div>*/
/* 		  <div class="form-group">*/
/* 			<label class="col-sm-2 control-label" for="amazon-login-pay-declined_codes"><span data-toggle="tooltip" title="{{ help_declined_codes }}">{{ text_declined_codes }}</span></label>*/
/* 			<div class="col-sm-10">*/
/* 			  <select name="payment_amazon_login_pay_declined_code" id="amazon-login-pay-declined_code" class="form-control">*/
/* 				<option value="">{{ text_amazon_no_declined }}</option>*/
/* 				{% for declined_code in declined_codes %}*/
/* 					{% if payment_amazon_login_pay_declined_code == declined_code %}*/
/* 						<option value="{{ declined_code }}" selected="selected">{{ declined_code }}</option>*/
/* 					{% else %}*/
/* 						<option value="{{ declined_code }}">{{ declined_code }}</option>*/
/* 					{% endif %}*/
/* 				{% endfor %}*/
/* 			  </select>*/
/* 			</div>*/
/* 		  </div>*/
/* 		</form>*/
/* 	  </div>*/
/* 	</div>*/
/*   </div>*/
/*   <script type="text/javascript">*/
/*       $('#button-credentials').on('click', function () {*/
/*         var json = $('#input-credentials').val();*/
/*         try {*/
/*           var credentials = $.parseJSON($('#input-credentials').val());*/
/*           $('#amazon-login-pay-merchant-id').val(credentials['merchant_id']);*/
/*           $('#amazon-login-pay-access-key').val(credentials['access_key']);*/
/*           $('#amazon-login-pay-access-secret').val(credentials['secret_key']);*/
/*           $('#amazon-login-pay-client-id').val(credentials['client_id']);*/
/*           $('#amazon-login-pay-client-secret').val(credentials['client_secret']);*/
/*           $('<input>').attr({*/
/*             type: 'hidden',*/
/*             value: 'true',*/
/*             name: 'language_reload'*/
/*           }).appendTo('#form-amazon-login-pay');*/
/*           $('.pull-right > .btn-primary').click();*/
/*         } catch (e) {*/
/*           $('.container-fluid:eq(1)').prepend('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button><i class="fa fa-exclamation-circle"></i> {{ error_credentials }}</div>')*/
/*         }*/
/*       });*/
/*       //</script>*/
/*   <script type="text/javascript">*/
/*       $('input[name=\'payment_amazon_login_pay_ipn_token\']').change(function () {*/
/*         var base = '{{ https_catalog }}index.php?route=extension/payment/amazon_login_pay/ipn&token=';*/
/*         var allowedLength = 150 - base.length;*/
/*         var newVal = $(this).val().substr(0, allowedLength);*/
/*         $(this).val(newVal);*/
/*         $('#input-ipn-url').val(base + newVal);*/
/*       });*/
/*       //</script>*/
/*   <script type="text/javascript">*/
/*       $('#amazon-login-pay-payment_region').on('change', function () {*/
/*         switch ($(this).val()) {*/
/*           case 'EUR':*/
/*             $('#amazon-login-pay-language').html('<option selected value="de-DE">German</option>');*/
/*             break;*/
/*           case 'GBP':*/
/*             $('#amazon-login-pay-language').html('<option selected value="en-GB">English</option>');*/
/*             break;*/
/*           case 'USD':*/
/*             $('#amazon-login-pay-language').html('<option selected value="en-US">American English</option>');*/
/*             break;*/
/*         }*/
/*         $('<input>').attr({*/
/*           type: 'hidden',*/
/*           value: 'true',*/
/*           name: 'language_reload'*/
/*         }).appendTo('#form-amazon-login-pay');*/
/*         $("#form-amazon-login-pay").submit();*/
/*       });*/
/*       //</script>*/
/*   <script type="text/javascript">*/
/*       $('#amazon-login-pay-language').on('change', function () {*/
/*         var language = $(this).val();*/
/*         var mod_lang = language.replace("-", "_");*/
/*         $('input[name="language"]').val(mod_lang);*/
/*       });*/
/*       //</script>*/
/*   <script type="text/javascript">*/
/*       $('#sign-up').on('click', function () {*/
/*         $("#registration-form").submit();*/
/*         $("#container-credentials").show();*/
/*       });*/
/*       //</script>*/
/* </div>*/
/* {{ footer }}*/
/* */
