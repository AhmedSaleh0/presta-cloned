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

/* @PrestaShop/Admin/Sell/Customer/Blocks/View/discounts.html.twig */
class __TwigTemplate_1c2ea0e891ce7529bb5d97cdfcb21a0d96b83b68e826d5c93e2bf60e12b34638 extends \Twig\Template
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
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">loyalty</i>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Vouchers", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
    <span class=\"badge badge-primary rounded\">";
        // line 30
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["customerInformation"] ?? null), "discountsInformation", [])), "html", null, true);
        echo "</span>
  </h3>
  <div class=\"card-body\">";
        // line 33
        if ( !twig_test_empty($this->getAttribute(($context["customerInformation"] ?? null), "discountsInformation", []))) {
            // line 34
            echo "      <table class=\"table\">
        <thead>
          <tr>
            <th>";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ID", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Code", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Qty available", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</th>
            <th class=\"text-right\">";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions", [], "Admin.Global"), "html", null, true);
            echo "</th>
          </tr>
        </thead>
        <tbody>";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["customerInformation"] ?? null), "discountsInformation", []));
            foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                // line 47
                $context["discountEditUrl"] = $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminCartRules", true, ["id_cart_rule" => $this->getAttribute($context["discount"], "discountId", []), "addcart_rule" => 1, "back" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "uri", [])]);
                // line 48
                echo "
          <tr>
            <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"";
                // line 50
                echo twig_escape_filter($this->env, ($context["discountEditUrl"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["discount"], "discountId", []), "html", null, true);
                echo "</td>
            <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"";
                // line 51
                echo twig_escape_filter($this->env, ($context["discountEditUrl"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["discount"], "code", []), "html", null, true);
                echo "</td>
            <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"";
                // line 52
                echo twig_escape_filter($this->env, ($context["discountEditUrl"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["discount"], "name", []), "html", null, true);
                echo "</td>
            <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"";
                // line 53
                echo twig_escape_filter($this->env, ($context["discountEditUrl"] ?? null), "html", null, true);
                echo "\">";
                // line 54
                if ($this->getAttribute($context["discount"], "active", [])) {
                    // line 55
                    echo "                <i class=\"material-icons text-success\">
                  check
                </i>";
                } else {
                    // line 59
                    echo "                <i class=\"material-icons text-danger\">
                  clear
                </i>";
                }
                // line 63
                echo "            </td>
            <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"";
                // line 64
                echo twig_escape_filter($this->env, ($context["discountEditUrl"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["discount"], "availableQuantity", []), "html", null, true);
                echo "</td>
            <td class=\"text-right\">
              <div class=\"btn-group-action\">
                <div class=\"btn-group\">
                  <a href=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminCartRules", true, ["id_cart_rule" => $this->getAttribute($context["discount"], "discountId", []), "addcart_rule" => 1, "back" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "uri", [])]), "html", null, true);
                echo "\"
                     class=\"btn tooltip-link dropdown-item\"
                     data-toggle=\"pstooltip\"
                     data-placement=\"top\"
                     data-original-title=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit", [], "Admin.Actions"), "html", null, true);
                echo "\"
                  >
                    <i class=\"material-icons\">edit</i>
                  </a>

                  <a class=\"btn btn-link dropdown-toggle dropdown-toggle-dots dropdown-toggle-split\"
                     data-toggle=\"dropdown\"
                     aria-haspopup=\"true\"
                     aria-expanded=\"false\"
                  ></a>

                  <div class=\"dropdown-menu dropdown-menu-right\">
                    <a class=\"btn tooltip-link dropdown-item\"
                       href=\"";
                // line 85
                echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminCartRules", true, ["id_cart_rule" => $this->getAttribute($context["discount"], "discountId", []), "deletecart_rule" => 1, "back" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "uri", [])]), "html", null, true);
                echo "\"
                    >
                      <i class=\"material-icons\">delete</i>";
                // line 88
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete", [], "Admin.Actions"), "html", null, true);
                echo "
                    </a>
                  </div>
                </div>
              </div>
            </td>
          </tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "        </tbody>
      </table>";
        } else {
            // line 99
            echo "      <p class=\"text-muted text-center mb-0\">";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%firstname% %lastname% has no discount vouchers", ["%firstname%" => $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "firstName", []), "%lastname%" => $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "lastName", [])], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
      </p>";
        }
        // line 103
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Customer/Blocks/View/discounts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 103,  179 => 100,  177 => 99,  173 => 96,  160 => 88,  155 => 85,  139 => 72,  132 => 68,  123 => 64,  120 => 63,  115 => 59,  110 => 55,  108 => 54,  105 => 53,  99 => 52,  93 => 51,  87 => 50,  83 => 48,  81 => 47,  77 => 46,  71 => 42,  67 => 41,  63 => 40,  59 => 39,  55 => 38,  51 => 37,  46 => 34,  44 => 33,  39 => 30,  35 => 29,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Customer/Blocks/View/discounts.html.twig", "/opt/bitnami/apache/htdocs/src/PrestaShopBundle/Resources/views/Admin/Sell/Customer/Blocks/View/discounts.html.twig");
    }
}
