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

/* @PrestaShop/Admin/Common/Grid/Columns/Content/badge.html.twig */
class __TwigTemplate_618ce3a8975edb1271098e0f8ef9023375a369f30f69cfa863670b83f521cb4e extends \Twig\Template
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
        echo "
<div class=\"text-right\">";
        // line 27
        if ( !twig_test_empty($this->getAttribute(($context["record"] ?? null), $this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", []), "field", []), [], "array"))) {
            // line 28
            echo "  <span class=\"badge rounded badge-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", []), "badge_type", []), "html", null, true);
            echo "\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? null), $this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", []), "field", []), [], "array"), "html", null, true);
            echo "
  </span>";
        } else {
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", []), "empty_value", []), "html", null, true);
        }
        // line 34
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Columns/Content/badge.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 34,  44 => 32,  39 => 29,  35 => 28,  33 => 27,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Columns/Content/badge.html.twig", "/opt/bitnami/apache/htdocs/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Columns/Content/badge.html.twig");
    }
}
