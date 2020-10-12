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

/* @PrestaShop/Admin/Common/Grid/Actions/Row/delete_customer.html.twig */
class __TwigTemplate_00ba19fdc518ab9ccc5068a12034252fe9e82b883270b312c1e4edf43dab23d8 extends \Twig\Template
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
        $context["class"] = "btn tooltip-link js-delete-customer-row-action";
        // line 28
        if ($this->getAttribute(($context["attributes"] ?? null), "class", [], "any", true, true)) {
            // line 29
            $context["class"] = ((($context["class"] ?? null) . " ") . $this->getAttribute(($context["attributes"] ?? null), "class", []));
        }
        // line 31
        echo "
<a class=\"";
        // line 32
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo "\"
   href=\"#\"
   data-customer-id=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? null), $this->getAttribute($this->getAttribute(($context["action"] ?? null), "options", []), "customer_id_field", []), [], "array"), "html", null, true);
        echo "\"
   data-customer-delete-url=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["action"] ?? null), "options", []), "customer_delete_route", []));
        echo "\"";
        // line 36
        if ($this->getAttribute(($context["attributes"] ?? null), "tooltip_name", [])) {
            // line 37
            echo "    data-toggle=\"pstooltip\"
    data-placement=\"top\"
    data-original-title=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute(($context["action"] ?? null), "name", []), "html", null, true);
            echo "\"";
        }
        // line 41
        echo ">";
        // line 42
        if ( !twig_test_empty($this->getAttribute(($context["action"] ?? null), "icon", []))) {
            // line 43
            echo "    <i class=\"material-icons\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["action"] ?? null), "icon", []), "html", null, true);
            echo "</i>";
        }
        // line 45
        if ( !$this->getAttribute(($context["attributes"] ?? null), "tooltip_name", [])) {
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute(($context["action"] ?? null), "name", []), "html", null, true);
        }
        // line 48
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Actions/Row/delete_customer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 48,  73 => 46,  71 => 45,  66 => 43,  64 => 42,  62 => 41,  58 => 39,  54 => 37,  52 => 36,  49 => 35,  45 => 34,  40 => 32,  37 => 31,  34 => 29,  32 => 28,  30 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Actions/Row/delete_customer.html.twig", "/opt/bitnami/apache/htdocs/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Actions/Row/delete_customer.html.twig");
    }
}
