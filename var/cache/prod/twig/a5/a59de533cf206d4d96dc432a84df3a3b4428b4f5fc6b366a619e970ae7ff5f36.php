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

/* @PrestaShop/Admin/Sell/Order/Invoices/Blocks/generate_by_status.html.twig */
class __TwigTemplate_88d9ed4403064d0669c4aadbf3e70f7405ff42a9a5179e0c13cf00a610b65267 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'invoices_generate_by_status' => [$this, 'block_invoices_generate_by_status'],
            '_form_generate_by_status_order_states_entry_label' => [$this, 'block__form_generate_by_status_order_states_entry_label'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 27
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Sell/Order/Invoices/Blocks/generate_by_status.html.twig", 27);
        // line 29
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["generateByStatusForm"] ?? null), [0 => $this], true);
        // line 31
        $this->displayBlock('invoices_generate_by_status', $context, $blocks);
        // line 60
        $this->displayBlock('_form_generate_by_status_order_states_entry_label', $context, $blocks);
    }

    // line 31
    public function block_invoices_generate_by_status($context, array $blocks = [])
    {
        // line 32
        echo "    <div id=\"by-status-block\" class=\"col-xl-10\">";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["generateByStatusForm"] ?? null), 'form_start', ["method" => "POST", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_order_invoices_generate_by_status")]);
        echo "
        <div class=\"card\">
            <h3 class=\"card-header\">
                <i class=\"material-icons\">schedule</i>";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("By order status", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
            </h3>
            <div class=\"card-block row\">
                <div class=\"card-text\">
                  <div class=\"form-group row\">";
        // line 41
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Order statuses", [], "Admin.Orderscustomers.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can also export orders which have not been charged yet.", [], "Admin.Orderscustomers.Help"));
        echo "
                    <div class=\"col-sm\">";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generateByStatusForm"] ?? null), "order_states", []), 'errors');
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generateByStatusForm"] ?? null), "order_states", []), 'widget');
        echo "
                    </div>
                  </div>
                </div>";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["generateByStatusForm"] ?? null), 'rest');
        echo "
            </div>
            <div class=\"card-footer\">
                <div class=\"d-flex justify-content-end\">
                    <button class=\"btn btn-primary\">";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Generate PDF file by status", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</button>
                </div>
            </div>
        </div>";
        // line 56
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["generateByStatusForm"] ?? null), 'form_end');
        echo "
    </div>";
    }

    // line 60
    public function block__form_generate_by_status_order_states_entry_label($context, array $blocks = [])
    {
        // line 62
        if ((isset($context["widget"]) || array_key_exists("widget", $context))) {
            // line 63
            if ((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) {
                // line 64
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")) . " ") . ($context["parent_label_class"] ?? null)))]);
            }
            // line 66
            echo "        <div class=\"md-checkbox\">
            <label";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 68
            echo ($context["widget"] ?? null);
            // line 69
            echo "<i class=\"md-checkbox-control\"></i>";
            // line 70
            $context["badgeType"] = (((($context["orders_count"] ?? null) > 0)) ? ("success") : ("danger"));
            // line 71
            echo "                <span class=\"badge badge-";
            echo twig_escape_filter($this->env, ($context["badgeType"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["orders_count"] ?? null), "html", null, true);
            echo "</span>
                <span>";
            // line 73
            echo (( !(($context["label"] ?? null) === false)) ? (($context["label"] ?? null)) : (""));
            // line 74
            echo "</span>
            </label>
        </div>";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Invoices/Blocks/generate_by_status.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 74,  130 => 73,  123 => 71,  121 => 70,  119 => 69,  117 => 68,  104 => 67,  101 => 66,  98 => 64,  96 => 63,  94 => 62,  91 => 60,  85 => 56,  79 => 52,  72 => 48,  66 => 44,  64 => 43,  60 => 41,  53 => 36,  47 => 33,  45 => 32,  42 => 31,  38 => 60,  36 => 31,  34 => 29,  32 => 27,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Invoices/Blocks/generate_by_status.html.twig", "/opt/bitnami/apache/htdocs/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Invoices/Blocks/generate_by_status.html.twig");
    }
}
