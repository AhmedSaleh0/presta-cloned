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

/* @PrestaShop/Admin/Improve/International/Localization/Blocks/local_units.html.twig */
class __TwigTemplate_3aeed66e6a6868d2af5ce17ba3efbe6ceaeea61bb2ddc24e658bbafa0588e030 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'localization_local_units' => [$this, 'block_localization_local_units'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 27
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Improve/International/Localization/Blocks/local_units.html.twig", 27);
        // line 29
        $this->displayBlock('localization_local_units', $context, $blocks);
    }

    public function block_localization_local_units($context, array $blocks = [])
    {
        // line 30
        echo "  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">language</i>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Local units", [], "Admin.International.Feature"), "html", null, true);
        echo "
    </h3>

    <div class=\"card-block row\">
      <div class=\"card-text\">
        <div class=\"form-group row\">";
        // line 38
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Weight unit", [], "Admin.International.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The default weight unit for your shop (e.g. \"kg\" for kilograms, \"lbs\" for pound-mass, etc.).", [], "Admin.International.Help"));
        echo "
          <div class=\"col-sm\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["localUnitsForm"] ?? null), "weight_unit", []), 'errors');
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["localUnitsForm"] ?? null), "weight_unit", []), 'widget');
        echo "
          </div>
        </div>

        <div class=\"form-group row\">";
        // line 46
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Distance unit", [], "Admin.International.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The default distance unit for your shop (e.g. \"km\" for kilometer, \"mi\" for mile, etc.).", [], "Admin.International.Help"));
        echo "
          <div class=\"col-sm\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["localUnitsForm"] ?? null), "distance_unit", []), 'errors');
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["localUnitsForm"] ?? null), "distance_unit", []), 'widget');
        echo "
          </div>
        </div>

        <div class=\"form-group row\">";
        // line 54
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Volume unit", [], "Admin.International.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The default volume unit for your shop (e.g. \"L\" for liter, \"gal\" for gallon, etc.).", [], "Admin.International.Help"));
        echo "
          <div class=\"col-sm\">";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["localUnitsForm"] ?? null), "volume_unit", []), 'errors');
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["localUnitsForm"] ?? null), "volume_unit", []), 'widget');
        echo "
          </div>
        </div>

        <div class=\"form-group row\">";
        // line 62
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Dimension unit", [], "Admin.International.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The default dimension unit for your shop (e.g. \"cm\" for centimeter, \"in\" for inch, etc.).", [], "Admin.International.Help"));
        echo "
          <div class=\"col-sm\">";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["localUnitsForm"] ?? null), "dimension_unit", []), 'errors');
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["localUnitsForm"] ?? null), "dimension_unit", []), 'widget');
        echo "
          </div>
        </div>
      </div>
    </div>

    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\">";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
      </div>
    </div>
  </div>";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/International/Localization/Blocks/local_units.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 73,  96 => 65,  94 => 64,  90 => 62,  83 => 57,  81 => 56,  77 => 54,  70 => 49,  68 => 48,  64 => 46,  57 => 41,  55 => 40,  51 => 38,  43 => 32,  39 => 30,  33 => 29,  31 => 27,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/International/Localization/Blocks/local_units.html.twig", "/opt/bitnami/apache/htdocs/src/PrestaShopBundle/Resources/views/Admin/Improve/International/Localization/Blocks/local_units.html.twig");
    }
}
