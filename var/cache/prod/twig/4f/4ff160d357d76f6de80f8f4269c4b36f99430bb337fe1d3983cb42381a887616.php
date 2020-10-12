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

/* @PrestaShop/Admin/Sell/Customer/Blocks/delete_modal.html.twig */
class __TwigTemplate_4cd70d06641444b4cd1290a4b43884added4629daaa8e29be964ec6752a072ab extends \Twig\Template
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
        // line 26
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/delete_modal.html.twig", "@PrestaShop/Admin/Sell/Customer/Blocks/delete_modal.html.twig", 26, "1345785329")->display(twig_array_merge($context, ["id" => ($this->getAttribute(        // line 27
($context["grid"] ?? null), "id", []) . "_grid_delete_customers_modal"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("How do you want to delete the selected customers?", [], "Admin.Orderscustomers.Notification"), "closable" => true, "actions" => [0 => ["type" => "button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete", [], "Admin.Actions"), "class" => "btn btn-danger btn-lg js-submit-delete-customers"]]]));
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Customer/Blocks/delete_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 27,  30 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Customer/Blocks/delete_modal.html.twig", "/opt/bitnami/apache/htdocs/src/PrestaShopBundle/Resources/views/Admin/Sell/Customer/Blocks/delete_modal.html.twig");
    }
}


/* @PrestaShop/Admin/Sell/Customer/Blocks/delete_modal.html.twig */
class __TwigTemplate_4cd70d06641444b4cd1290a4b43884added4629daaa8e29be964ec6752a072ab___1345785329 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 26
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig", "@PrestaShop/Admin/Sell/Customer/Blocks/delete_modal.html.twig", 26);
        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 36
    public function block_content($context, array $blocks = [])
    {
        // line 37
        echo "    <div class=\"modal-body\">
      <p>";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("There are two ways of deleting a customer. Please choose your preferred method.", [], "Admin.Orderscustomers.Notification"), "html", null, true);
        echo "</p>";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["deleteCustomersForm"] ?? null), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_customers_index"), "method" => "post"]);
        echo "

      <div class=\"form-group mb-0\">";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["deleteCustomersForm"] ?? null), "delete_method", []), 'widget');
        echo "
      </div>

      <div class=\"d-none\">";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["deleteCustomersForm"] ?? null), "customers_to_delete", []), 'widget');
        echo "
      </div>";
        // line 50
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["deleteCustomersForm"] ?? null), 'form_end');
        echo "
    </div>";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Customer/Blocks/delete_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 50,  109 => 47,  103 => 43,  98 => 40,  95 => 38,  92 => 37,  89 => 36,  72 => 26,  31 => 27,  30 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Customer/Blocks/delete_modal.html.twig", "/opt/bitnami/apache/htdocs/src/PrestaShopBundle/Resources/views/Admin/Sell/Customer/Blocks/delete_modal.html.twig");
    }
}
