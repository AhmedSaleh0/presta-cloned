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

/* @PrestaShop/Admin/Improve/International/Localization/Blocks/configuration.html.twig */
class __TwigTemplate_7e909ca9aec29944a617aee4343c37c8d7af2f03e49494b86e356cb67428d80b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'localization_configuration' => [$this, 'block_localization_configuration'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 27
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Improve/International/Localization/Blocks/configuration.html.twig", 27);
        // line 29
        $this->displayBlock('localization_configuration', $context, $blocks);
    }

    public function block_localization_configuration($context, array $blocks = [])
    {
        // line 30
        echo "  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">settings</i>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Configuration", [], "Admin.Global"), "html", null, true);
        echo "
    </h3>

    <div class=\"card-block row\">
      <div class=\"card-text\">
        <div class=\"form-group row\">";
        // line 38
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Default language", [], "Admin.International.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The default language used in your shop.", [], "Admin.International.Help"));
        echo "
          <div class=\"col-sm\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["configurationForm"] ?? null), "default_language", []), 'errors');
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["configurationForm"] ?? null), "default_language", []), 'widget', ["attr" => ["data-minimumResultsForSearch" => "7", "data-toggle" => "select2"]]);
        echo "
          </div>
        </div>

        <div class=\"form-group row\">
          <label class=\"form-control-label\">";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Set language from browser", [], "Admin.International.Feature"), "html", null, true);
        echo "
          </label>
          <div class=\"col-sm\">";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["configurationForm"] ?? null), "detect_language_from_browser", []), 'errors');
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["configurationForm"] ?? null), "detect_language_from_browser", []), 'widget');
        echo "
            <small class=\"form-text\">";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Set browser language as default language", [], "Admin.International.Help"), "html", null, true);
        echo "</small>
          </div>
        </div>

        <div class=\"form-group row\">";
        // line 57
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Default country", [], "Admin.International.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The default country used in your shop.", [], "Admin.International.Help"));
        echo "
          <div class=\"col-sm\">";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["configurationForm"] ?? null), "default_country", []), 'errors');
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["configurationForm"] ?? null), "default_country", []), 'widget', ["attr" => ["data-minimumResultsForSearch" => "7", "data-toggle" => "select2"]]);
        echo "
          </div>
        </div>

        <div class=\"form-group row\">
          <label class=\"form-control-label\">";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Set default country from browser language", [], "Admin.International.Feature"), "html", null, true);
        echo "
          </label>
          <div class=\"col-sm\">";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["configurationForm"] ?? null), "detect_country_from_browser", []), 'errors');
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["configurationForm"] ?? null), "detect_country_from_browser", []), 'widget');
        echo "
            <small class=\"form-text\">";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Set country corresponding to browser language", [], "Admin.International.Help"), "html", null, true);
        echo "</small>
          </div>
        </div>

        <div class=\"form-group row js-default-currency-block\">";
        // line 76
        $context["currencyChangeWarningMessage"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Before changing the default currency, we strongly recommend that you enable maintenance mode. Indeed, any change on the default currency requires a manual adjustment of the price of each product and its combinations.", [], "Admin.International.Notification");
        // line 78
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Default currency", [], "Admin.International.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The default currency used in your shop.", [], "Admin.International.Help"));
        echo "
          <div class=\"col-sm\">";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["configurationForm"] ?? null), "default_currency", []), 'errors');
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["configurationForm"] ?? null), "default_currency", []), 'widget', ["attr" => ["data-warning-message" => ($context["currencyChangeWarningMessage"] ?? null), "data-minimumResultsForSearch" => "7", "data-toggle" => "select2"]]);
        echo "
          </div>
        </div>

        <div class=\"form-group row\">
          <label class=\"form-control-label\">";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Time zone", [], "Admin.International.Feature"), "html", null, true);
        echo "
          </label>
          <div class=\"col-sm\">";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["configurationForm"] ?? null), "timezone", []), 'errors');
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["configurationForm"] ?? null), "timezone", []), 'widget', ["attr" => ["data-minimumResultsForSearch" => "7", "data-toggle" => "select2"]]);
        echo "
          </div>
        </div>
      </div>
    </div>

    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\">";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
      </div>
    </div>
  </div>";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/International/Localization/Blocks/configuration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 99,  138 => 91,  136 => 90,  131 => 87,  123 => 81,  121 => 80,  117 => 78,  115 => 76,  108 => 71,  104 => 70,  102 => 69,  97 => 66,  89 => 60,  87 => 59,  83 => 57,  76 => 52,  72 => 51,  70 => 50,  65 => 47,  57 => 41,  55 => 40,  51 => 38,  43 => 32,  39 => 30,  33 => 29,  31 => 27,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/International/Localization/Blocks/configuration.html.twig", "/opt/bitnami/apache/htdocs/src/PrestaShopBundle/Resources/views/Admin/Improve/International/Localization/Blocks/configuration.html.twig");
    }
}
