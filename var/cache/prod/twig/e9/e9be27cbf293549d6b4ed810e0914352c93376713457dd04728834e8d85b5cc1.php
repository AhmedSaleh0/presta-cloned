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

/* @PrestaShop/Admin/Common/Kpi/kpi_row.html.twig */
class __TwigTemplate_dbe4bacbb0d4917ca67347d18d22650d0105886cde87ac14240475115e01a309 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'kpi_row' => [$this, 'block_kpi_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 26
        $this->displayBlock('kpi_row', $context, $blocks);
    }

    public function block_kpi_row($context, array $blocks = [])
    {
        // line 27
        echo "    <div class=\"container-fluid\">
        <div class=\"kpi-container\">";
        // line 29
        if ($this->getAttribute(($context["kpiRow"] ?? null), "allowRefresh", [])) {
            // line 30
            echo "                <div class=\"kpi-refresh\">
                    <button class=\"refresh-kpis btn btn-primary\" type=\"button\">
                        <i class=\"material-icons\">refresh</i>
                    </button>
                </div>";
        }
        // line 36
        echo "
            <div class=\"row\">";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["kpiRow"] ?? null), "kpis", []));
        foreach ($context['_seq'] as $context["_key"] => $context["kpi"]) {
            // line 39
            echo "                    <div class=\"col\">";
            // line 40
            echo $context["kpi"];
            echo "
                    </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['kpi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "            </div>
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Kpi/kpi_row.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 43,  58 => 40,  56 => 39,  52 => 38,  49 => 36,  42 => 30,  40 => 29,  37 => 27,  31 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/Kpi/kpi_row.html.twig", "/opt/bitnami/apache/htdocs/src/PrestaShopBundle/Resources/views/Admin/Common/Kpi/kpi_row.html.twig");
    }
}
