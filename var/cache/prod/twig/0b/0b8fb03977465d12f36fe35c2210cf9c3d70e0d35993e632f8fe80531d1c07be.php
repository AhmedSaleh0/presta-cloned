<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PrestaShop/Admin/Configure/AdvancedParameters/Employee/Blocks/form.html.twig */
class __TwigTemplate_3ea3e2a289d2e21a4c40b30c006ae4b4a52cef5b66cefd8658f2982c90874366 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'employee_addons_connect' => [$this, 'block_employee_addons_connect'],
            'employee_form' => [$this, 'block_employee_form'],
            'employee_form_rest' => [$this, 'block_employee_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 26
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/Blocks/form.html.twig", 26);
        // line 29
        $this->displayBlock('employee_addons_connect', $context, $blocks);
        // line 33
        $this->displayBlock('employee_form', $context, $blocks);
    }

    // line 29
    public function block_employee_addons_connect($context, array $blocks = [])
    {
        // line 30
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/modal_addons_connect.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/Blocks/form.html.twig", 30)->display(twig_array_merge($context, ["level" => ($context["level"] ?? null), "errorMessage" => ($context["errorMessage"] ?? null)]));
    }

    // line 33
    public function block_employee_form($context, array $blocks = [])
    {
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["employeeForm"] ?? null), 'form_start');
        echo "
  <div class=\"card\">
    <h3 class=\"card-header\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Employees", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
    </h3>
    <div class=\"card-block row\">
      <div class=\"card-text\">";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["employeeForm"] ?? null), 'errors');
        // line 43
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["employeeForm"] ?? null), "firstname", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("First name", [], "Admin.Global")]);
        // line 47
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["employeeForm"] ?? null), "lastname", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Last name", [], "Admin.Global")]);
        // line 49
        echo "

        <div class=\"form-group row\">
          <label class=\"form-control-label\"></label>
          <div class=\"col-sm\">
            <a href=\"https://www.prestashop.com/forums/\" target=\"_blank\">
              <img class=\"img-thumbnail clickable-avatar\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, ($context["avatarUrl"] ?? null), "html", null, true);
        echo "\" alt=\"\">
            </a>
          </div>
        </div>

        <div class=\"form-group row\">
          <label class=\"form-control-label\"></label>
          <div class=\"col-sm\">
            <div class=\"alert alert-info\" role=\"alert\">
              <p class=\"alert-text\">";
        // line 65
        echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your avatar in PrestaShop 1.7.x is your profile picture on %url%. To change your avatar, log in to PrestaShop.com with your email %email% and follow the on-screen instructions.", [], "Admin.Advparameters.Help"), ["%url%" => "<a href=\"https://www.prestashop.com/forums/\" class=\"alert-link\" target=\"_blank\">PrestaShop.com</a>", "%email%" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 68
($context["employeeForm"] ?? null), "email", []), "vars", []), "value", [])]);
        // line 70
        echo "
              </p>
            </div>
          </div>
        </div>";
        // line 76
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["employeeForm"] ?? null), "email", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email address", [], "Admin.Global")]);
        // line 80
        $context["passwordHelpMessage"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Password should be at least %num% characters long.", ["%num%" => 8], "Admin.Advparameters.Help");
        // line 82
        if (($context["isRestrictedAccess"] ?? null)) {
            // line 83
            $context["oldPasswordVars"] = twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute(($context["employeeForm"] ?? null), "change_password", []), "old_password", []), "vars", []), (((isset($context["old_password"]) || array_key_exists("old_password", $context))) ? (_twig_default_filter(($context["old_password"] ?? null), [])) : ([])));
            // line 84
            $context["newPasswordFirstVars"] = twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["employeeForm"] ?? null), "change_password", []), "new_password", []), "children", []), "first", []), "vars", []), (($this->getAttribute(($context["new_password"] ?? null), "first_options", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["new_password"] ?? null), "first_options", []), [])) : ([])));
            // line 85
            $context["newPasswordSecondVars"] = twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["employeeForm"] ?? null), "change_password", []), "new_password", []), "children", []), "second", []), "vars", []), (($this->getAttribute(($context["new_password"] ?? null), "second_options", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["new_password"] ?? null), "second_options", []), [])) : ([])));
            // line 86
            echo "
            <div class=\"form-group row\">
              <label class=\"form-control-label\">";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Password", [], "Admin.Global"), "html", null, true);
            echo "
              </label>
              <div class=\"col-sm\">";
            // line 93
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["employeeForm"] ?? null), "change_password", []), "change_password_button", []), 'widget', ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Change password...", [], "messages"), "attr" => ["class" => "btn-outline-secondary js-change-password"]]);
            // line 98
            echo "

                <div class=\"card card-body js-change-password-block d-none\">";
            // line 102
            echo $context["ps"]->getform_group_row($this->getAttribute($this->getAttribute(($context["employeeForm"] ?? null), "change_password", []), "old_password", []), ($context["oldPasswordVars"] ?? null), ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Current password", [], "messages"), "required" => true]);
            // line 108
            echo "                  <div class=\"form-group row\">";
            // line 109
            echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("New password", [], "messages"), ($context["passwordHelpMessage"] ?? null), "", $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["employeeForm"] ?? null), "change_password", []), "new_password", []), "children", []), "first", []), "vars", []), "id", []), true);
            echo "
                    <div class=\"col-sm\">";
            // line 111
            echo $context["ps"]->getform_widget_with_error($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["employeeForm"] ?? null), "change_password", []), "new_password", []), "children", []), "first", []), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["employeeForm"] ?? null), "change_password", []), "new_password", []), "children", []), "first", []), "vars", []));
            echo "
                    </div>
                  </div>";
            // line 117
            echo $context["ps"]->getform_group_row($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["employeeForm"] ?? null), "change_password", []), "new_password", []), "children", []), "second", []), ($context["newPasswordSecondVars"] ?? null), ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Confirm password", [], "messages"), "help" => "", "required" => true]);
            // line 121
            echo "

                  <div class=\"form-group row\">
                    <label class=\"form-control-label\"></label>
                    <div class=\"col-sm\">";
            // line 126
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["employeeForm"] ?? null), "change_password", []), "generated_password", []), 'widget');
            echo "
                    </div>
                    <div class=\"col-sm\">";
            // line 129
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["employeeForm"] ?? null), "change_password", []), "generate_password_button", []), 'widget', ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Generate password", [], "messages"), "attr" => ["class" => "btn-outline-secondary"]]);
            // line 134
            echo "
                    </div>
                  </div>";
            // line 138
            echo $context["ps"]->getform_group_row($this->getAttribute($this->getAttribute(($context["employeeForm"] ?? null), "change_password", []), "cancel_button", []), ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "attr" => ["class" => "btn-outline-secondary js-change-password-cancel"]]);
            // line 146
            echo "                  <div class=\"js-password-strength-feedback d-none\">
                    <span class=\"strength-low\">";
            // line 147
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invalid", [], "messages"), "html", null, true);
            echo "</span>
                    <span class=\"strength-medium\">";
            // line 148
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Okay", [], "messages"), "html", null, true);
            echo "</span>
                    <span class=\"strength-high\">";
            // line 149
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Good", [], "messages"), "html", null, true);
            echo "</span>
                    <span class=\"strength-extreme\">";
            // line 150
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Fabulous", [], "messages"), "html", null, true);
            echo "</span>
                  </div>
                </div>
              </div>
            </div>";
        } else {
            // line 156
            echo $context["ps"]->getform_group_row($this->getAttribute(($context["employeeForm"] ?? null), "password", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Password", [], "Admin.Global"), "help" =>             // line 158
($context["passwordHelpMessage"] ?? null)]);
        }
        // line 162
        if ((($context["isRestrictedAccess"] ?? null) && ($context["showAddonsConnectButton"] ?? null))) {
            // line 163
            echo "          <div class=\"form-group row\">
            <label class=\"form-control-label\">
              PrestaShop Addons
            </label>
            <div class=\"col-sm\">";
            // line 168
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["employeeForm"] ?? null), "prestashop_addons", []), "vars", []), "is_addons_connected", [])) {
                // line 169
                echo "                <p>
                  <i class=\"material-icons\">account_circle</i>";
                // line 171
                echo twig_escape_filter($this->env, twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You are currently connected as %username%", [], "Admin.Advparameters.Feature"), ["%username%" => $this->getAttribute($this->getAttribute($this->getAttribute(                // line 173
($context["employeeForm"] ?? null), "prestashop_addons", []), "vars", []), "addons_username", [])]), "html", null, true);
                // line 174
                echo "
                </p>";
            }
            // line 177
            echo "
              <div>";
            // line 179
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["employeeForm"] ?? null), "prestashop_addons", []), "vars", []), "is_addons_connected", [])) {
                // line 180
                list($context["label"], $context["target"]) =                 [$this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sign out from PrestaShop Addons", [], "Admin.Advparameters.Feature"), "#module-modal-addons-logout"];
            } else {
                // line 185
                list($context["label"], $context["target"]) =                 [$this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sign in", [], "Admin.Advparameters.Feature"), "#module-modal-addons-connect"];
            }
            // line 191
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["employeeForm"] ?? null), "prestashop_addons", []), 'widget', ["attr" => ["class" => "btn-outline-secondary", "data-toggle" => "modal", "data-target" =>             // line 195
($context["target"] ?? null)], "label" =>             // line 197
($context["label"] ?? null)]);
            // line 198
            echo "
              </div>
            </div>
          </div>";
        }
        // line 204
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["employeeForm"] ?? null), "optin", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Subscribe to PrestaShop newsletter", [], "Admin.Advparameters.Feature"), "help" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("PrestaShop can provide you with guidance on a regular basis by sending you tips on how to optimize the management of your store which will help you grow your business. If you do not wish to receive these tips, you can disable this option.", [], "Admin.Advparameters.Help")]);
        // line 209
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["employeeForm"] ?? null), "default_page", []), ["attr" => ["data-minimumResultsForSearch" => "7", "data-toggle" => "select2"]], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Default page", [], "Admin.Advparameters.Feature"), "help" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This page will be displayed just after login.", [], "Admin.Advparameters.Help")]);
        // line 214
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["employeeForm"] ?? null), "language", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Language", [], "Admin.Global")]);
        // line 218
        if ( !($context["isRestrictedAccess"] ?? null)) {
            // line 219
            echo $context["ps"]->getform_group_row($this->getAttribute(($context["employeeForm"] ?? null), "active", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Active", [], "Admin.Global"), "help" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Allow or disallow this employee to log in to the Admin panel.", [], "Admin.Advparameters.Help")]);
            // line 224
            echo $context["ps"]->getform_group_row($this->getAttribute(($context["employeeForm"] ?? null), "profile", []), ["attr" => ["data-admin-profile" =>             // line 226
($context["superAdminProfileId"] ?? null), "data-get-tabs-url" =>             // line 227
($context["getTabsUrl"] ?? null)]], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Permission profile", [], "Admin.Advparameters.Feature")]);
            // line 233
            if ($this->getAttribute(($context["employeeForm"] ?? null), "shop_association", [], "any", true, true)) {
                // line 234
                echo $context["ps"]->getform_group_row($this->getAttribute(($context["employeeForm"] ?? null), "shop_association", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shop association", [], "Admin.Global"), "help" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select the shops the employee is allowed to access.", [], "Admin.Advparameters.Help")]);
            }
        }
        // line 241
        $this->displayBlock('employee_form_rest', $context, $blocks);
        // line 244
        echo "      </div>
    </div>
    <div class=\"card-footer\">
      <a href=\"";
        // line 247
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_employees_index");
        echo "\" class=\"btn btn-outline-secondary\">";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
      </a>
      <button class=\"btn btn-primary float-right\">";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
      </button>
    </div>
  </div>";
        // line 255
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["employeeForm"] ?? null), 'form_end');
    }

    // line 241
    public function block_employee_form_rest($context, array $blocks = [])
    {
        // line 242
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["employeeForm"] ?? null), 'rest');
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/Blocks/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 242,  271 => 241,  267 => 255,  261 => 251,  256 => 248,  253 => 247,  248 => 244,  246 => 241,  242 => 234,  240 => 233,  238 => 227,  237 => 226,  236 => 224,  234 => 219,  232 => 218,  230 => 214,  228 => 209,  226 => 204,  220 => 198,  218 => 197,  217 => 195,  216 => 191,  213 => 185,  210 => 180,  208 => 179,  205 => 177,  201 => 174,  199 => 173,  198 => 171,  195 => 169,  193 => 168,  187 => 163,  185 => 162,  182 => 158,  181 => 156,  173 => 150,  169 => 149,  165 => 148,  161 => 147,  158 => 146,  156 => 138,  152 => 134,  150 => 129,  145 => 126,  139 => 121,  137 => 117,  132 => 111,  128 => 109,  126 => 108,  124 => 102,  120 => 98,  118 => 93,  113 => 89,  109 => 86,  107 => 85,  105 => 84,  103 => 83,  101 => 82,  99 => 80,  97 => 76,  91 => 70,  89 => 68,  88 => 65,  76 => 55,  68 => 49,  66 => 47,  64 => 43,  62 => 41,  56 => 37,  51 => 34,  48 => 33,  44 => 30,  41 => 29,  37 => 33,  35 => 29,  33 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/Blocks/form.html.twig", "/opt/bitnami/apache/htdocs/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Employee/Blocks/form.html.twig");
    }
}
