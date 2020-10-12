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

/* @PrestaShop/Admin/Sell/Order/Invoices/Blocks/generate_by_date.html.twig */
class __TwigTemplate_9cf0d8fe18970fece80f98c731066f638756085d49ddc9386f0c06e1bf5213b8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'invoices_generate_by_date' => [$this, 'block_invoices_generate_by_date'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 27
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Sell/Order/Invoices/Blocks/generate_by_date.html.twig", 27);
        // line 29
        $this->displayBlock('invoices_generate_by_date', $context, $blocks);
    }

    public function block_invoices_generate_by_date($context, array $blocks = [])
    {
        // line 30
        echo "  <div class=\"col-xl-10\">";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["generateByDateForm"] ?? null), 'form_start', ["method" => "POST", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_order_invoices_generate_by_date")]);
        echo "
    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">date_range</i>";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("By date", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-block row\">
        <div class=\"card-text\">
          <div class=\"form-group row\">";
        // line 39
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("From", [], "Admin.Global"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Format: 2011-12-31 (inclusive).", [], "Admin.Orderscustomers.Help"));
        echo "
            <div class=\"col-sm\">";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generateByDateForm"] ?? null), "date_from", []), 'errors');
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generateByDateForm"] ?? null), "date_from", []), 'widget');
        echo "
            </div>
          </div>
          <div class=\"form-group row\">";
        // line 46
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To", [], "Admin.Global"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Format: 2011-12-31 (inclusive).", [], "Admin.Orderscustomers.Help"));
        echo "
            <div class=\"col-sm\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generateByDateForm"] ?? null), "date_to", []), 'errors');
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generateByDateForm"] ?? null), "date_to", []), 'widget');
        echo "
            </div>
          </div>
        </div>";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["generateByDateForm"] ?? null), 'rest');
        echo "
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Generate PDF file by date", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</button>
        </div>
      </div>
    </div>";
        // line 61
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["generateByDateForm"] ?? null), 'form_end');
        echo "
  </div>";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Invoices/Blocks/generate_by_date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 61,  85 => 57,  78 => 53,  72 => 49,  70 => 48,  66 => 46,  60 => 42,  58 => 41,  54 => 39,  47 => 34,  41 => 31,  39 => 30,  33 => 29,  31 => 27,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Invoices/Blocks/generate_by_date.html.twig", "/opt/bitnami/apache/htdocs/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Invoices/Blocks/generate_by_date.html.twig");
    }
}
