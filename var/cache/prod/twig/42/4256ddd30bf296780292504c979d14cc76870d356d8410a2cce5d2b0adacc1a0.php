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

/* @PrestaShop/Admin/Improve/International/Localization/Blocks/advanced_configuration.html.twig */
class __TwigTemplate_9b64d9ed41d0c4cdf59e4a396cdb9811402c13af2e6592f889972665ba0eca37 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'localization_advanced_configuration' => [$this, 'block_localization_advanced_configuration'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 27
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Improve/International/Localization/Blocks/advanced_configuration.html.twig", 27);
        // line 29
        $this->displayBlock('localization_advanced_configuration', $context, $blocks);
    }

    public function block_localization_advanced_configuration($context, array $blocks = [])
    {
        // line 30
        echo "  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">settings</i>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Advanced", [], "Admin.Global"), "html", null, true);
        echo "
    </h3>

    <div class=\"card-block row\">
      <div class=\"card-text\">
        <div class=\"form-group row\">";
        // line 38
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Language identifier", [], "Admin.International.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The ISO 639-1 identifier for the language of the country where your web server is located (en, fr, sp, ru, pl, nl, etc.).", [], "Admin.International.Help"));
        echo "
          <div class=\"col-sm\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["advancedForm"] ?? null), "language_identifier", []), 'errors');
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["advancedForm"] ?? null), "language_identifier", []), 'widget');
        echo "
          </div>
        </div>

        <div class=\"form-group row\">";
        // line 46
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Country identifier", [], "Admin.International.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The ISO 3166-1 alpha-2 identifier for the country/region where your web server is located, in lowercase (us, gb, fr, sp, ru, pl, nl, etc.).", [], "Admin.International.Help"));
        echo "
          <div class=\"col-sm\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["advancedForm"] ?? null), "country_identifier", []), 'errors');
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["advancedForm"] ?? null), "country_identifier", []), 'widget');
        echo "
          </div>
        </div>
      </div>
    </div>

    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\">";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
      </div>
    </div>
  </div>";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/International/Localization/Blocks/advanced_configuration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 57,  70 => 49,  68 => 48,  64 => 46,  57 => 41,  55 => 40,  51 => 38,  43 => 32,  39 => 30,  33 => 29,  31 => 27,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/International/Localization/Blocks/advanced_configuration.html.twig", "/opt/bitnami/apache/htdocs/src/PrestaShopBundle/Resources/views/Admin/Improve/International/Localization/Blocks/advanced_configuration.html.twig");
    }
}
