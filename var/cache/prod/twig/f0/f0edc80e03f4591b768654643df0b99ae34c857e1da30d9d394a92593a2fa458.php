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

/* @Product/ProductPage/Forms/form_combinations_bulk.html.twig */
class __TwigTemplate_100255432b89268d0c0a39495d0a8499f705c9e956aff36d70bc467e836feff0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "<div class=\"row\" id=\"bulk-combinations-container-fields\">";
        // line 26
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 27
            echo "    <div class=\"col-lg-4 col-md-3 col-sm-6\">
      <label class=\"form-control-label\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "quantity", []), "vars", []), "label", []), "html", null, true);
            echo "</label>";
            // line 29
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "quantity", []), 'errors');
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "quantity", []), 'widget');
            echo "
    </div>";
        }
        // line 33
        echo "
  <div class=\"col-lg-4 col-md-3 col-sm-6\">
    <label class=\"form-control-label\">";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "cost_price", []), "vars", []), "label", []), "html", null, true);
        echo "</label>";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cost_price", []), 'errors');
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cost_price", []), 'widget');
        echo "
  </div>

  <div class=\"col-lg-4 col-md-3 col-sm-6\">
    <label class=\"form-control-label\">";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "impact_on_weight", []), "vars", []), "label", []), "html", null, true);
        echo "</label>";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "impact_on_weight", []), 'errors');
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "impact_on_weight", []), 'widget');
        echo "
  </div>

  <div class=\"col-lg-4 col-md-3 col-sm-6\">
    <label class=\"form-control-label\">";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "impact_on_price_te", []), "vars", []), "label", []), "html", null, true);
        echo "</label>";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "impact_on_price_te", []), 'errors');
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "impact_on_price_te", []), 'widget');
        echo "
  </div>

  <div class=\"col-lg-4 col-md-3 col-sm-6\">
    <label class=\"form-control-label\">";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "impact_on_price_ti", []), "vars", []), "label", []), "html", null, true);
        echo "</label>";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "impact_on_price_ti", []), 'errors');
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "impact_on_price_ti", []), 'widget');
        echo "
  </div>

  <div class=\"col-lg-4 col-md-3 col-sm-6\">
    <label class=\"form-control-label\">";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "date_availability", []), "vars", []), "label", []), "html", null, true);
        echo "</label>";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "date_availability", []), 'errors');
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "date_availability", []), 'widget');
        echo "
  </div>

  <div class=\"col-lg-4 col-md-3 col-sm-6\">
    <label class=\"form-control-label\">";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "reference", []), "vars", []), "label", []), "html", null, true);
        echo "</label>";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "reference", []), 'errors');
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "reference", []), 'widget');
        echo "
  </div>

  <div class=\"col-lg-4 col-md-3 col-sm-6\">
    <label class=\"form-control-label\">";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "minimal_quantity", []), "vars", []), "label", []), "html", null, true);
        echo "</label>";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "minimal_quantity", []), 'errors');
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "minimal_quantity", []), 'widget');
        echo "
  </div>

  <div class=\"col-lg-4 col-md-3 col-sm-6\">
    <label class=\"form-control-label\">";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "low_stock_threshold", []), "vars", []), "label", []), "html", null, true);
        echo "
      <span class=\"help-box\" data-toggle=\"popover\" data-content=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can increase or decrease low stock levels in bulk. You cannot disable them in bulk: you have to do it on a per-combination basis.", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "\" ></span>
    </label>";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "low_stock_threshold", []), 'errors');
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "low_stock_threshold", []), 'widget');
        echo "
  </div>

  <div class=\"col-lg-4 col-md-3 col-sm-6 widget-checkbox-inline\">
    <div class=\"widget-checkbox-inline\">";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "low_stock_alert", []), 'errors');
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "low_stock_alert", []), 'widget');
        echo "
      <span class=\"help-box\" data-toggle=\"popover\" data-content=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The email will be sent to all the users who have the right to run the stock page. To modify the permissions, go to Advanced Parameters > Team", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "\" ></span>
    </div>
  </div>
</div>
<div class=\"row justify-content-end mt-3\">
    <button id=\"delete-combinations\" class=\"btn btn-outline-secondary mr-3\" data=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_delete_attribute", ["idProduct" => ($context["id_product"] ?? null)]), "html", null, true);
        echo "\">
      <i class=\"material-icons\">delete</i>";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete combinations", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
    </button>
    <button id=\"apply-on-combinations\" class=\"btn btn-outline-primary mr-3\">";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Apply", [], "Admin.Actions"), "html", null, true);
        echo "
    </button>";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "@Product/ProductPage/Forms/form_combinations_bulk.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 100,  175 => 98,  170 => 95,  166 => 93,  158 => 88,  154 => 87,  152 => 86,  145 => 81,  143 => 80,  139 => 78,  135 => 77,  128 => 73,  126 => 72,  123 => 71,  116 => 67,  114 => 66,  111 => 65,  104 => 61,  102 => 60,  99 => 59,  92 => 55,  90 => 54,  87 => 53,  80 => 49,  78 => 48,  75 => 47,  68 => 43,  66 => 42,  63 => 41,  56 => 37,  54 => 36,  51 => 35,  47 => 33,  42 => 30,  40 => 29,  37 => 28,  34 => 27,  32 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@Product/ProductPage/Forms/form_combinations_bulk.html.twig", "/opt/bitnami/apache/htdocs/src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/Forms/form_combinations_bulk.html.twig");
    }
}
