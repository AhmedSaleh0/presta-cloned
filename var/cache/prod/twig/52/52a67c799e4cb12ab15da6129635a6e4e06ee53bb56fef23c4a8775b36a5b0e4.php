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

/* @PrestaShop/Admin/Sell/Customer/Blocks/View/carts.html.twig */
class __TwigTemplate_05f4093b629c64e06a64edc168eba403dd4600ee6ba77a735fa612a9023225c0 extends \Twig\Template
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
    <i class=\"material-icons\">shopping_cart</i>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Carts", [], "Admin.Global"), "html", null, true);
        echo "
    <span class=\"badge badge-primary rounded\">";
        // line 30
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["customerInformation"] ?? null), "cartsInformation", [])), "html", null, true);
        echo "</span>
  </h3>
  <div class=\"card-body\">";
        // line 33
        if ( !twig_test_empty($this->getAttribute(($context["customerInformation"] ?? null), "cartsInformation", []))) {
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Carrier", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th class=\"text-right\">";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions", [], "Admin.Global"), "html", null, true);
            echo "</th>
          </tr>
        </thead>
        <tbody>";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["customerInformation"] ?? null), "cartsInformation", []));
            foreach ($context['_seq'] as $context["_key"] => $context["cart"]) {
                // line 46
                $context["cartViewUrl"] = $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminCarts", true, ["id_cart" => $this->getAttribute($context["cart"], "cartId", []), "viewcart" => 1]);
                // line 47
                echo "
          <tr>
            <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"";
                // line 49
                echo twig_escape_filter($this->env, ($context["cartViewUrl"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cart"], "cartId", []), "html", null, true);
                echo "</td>
            <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"";
                // line 50
                echo twig_escape_filter($this->env, ($context["cartViewUrl"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cart"], "cartCreationDate", []), "html", null, true);
                echo "</td>
            <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"";
                // line 51
                echo twig_escape_filter($this->env, ($context["cartViewUrl"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cart"], "carrierName", []), "html", null, true);
                echo "</td>
            <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"";
                // line 52
                echo twig_escape_filter($this->env, ($context["cartViewUrl"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cart"], "cartTotal", []), "html", null, true);
                echo "</td>
            <td class=\"text-right\">
              <div class=\"btn-group-action\">
                <div class=\"btn-group\">
                  <a href=\"";
                // line 56
                echo twig_escape_filter($this->env, ($context["cartViewUrl"] ?? null), "html", null, true);
                echo "\"
                     class=\"btn tooltip-link dropdown-item\"
                     data-toggle=\"pstooltip\"
                     data-placement=\"top\"
                     data-original-title=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("View", [], "Admin.Actions"), "html", null, true);
                echo "\"
                  >
                    <i class=\"material-icons\">zoom_in</i>
                  </a>
                </div>
              </div>
            </td>
          </tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cart'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "        </tbody>
      </table>";
        } else {
            // line 72
            echo "      <p class=\"text-muted text-center mb-0\">";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No cart is available", [], "Admin.Orderscustomers.Notification"), "html", null, true);
            echo "
      </p>";
        }
        // line 76
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Customer/Blocks/View/carts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 76,  137 => 73,  135 => 72,  131 => 69,  117 => 60,  110 => 56,  101 => 52,  95 => 51,  89 => 50,  83 => 49,  79 => 47,  77 => 46,  73 => 45,  67 => 41,  63 => 40,  59 => 39,  55 => 38,  51 => 37,  46 => 34,  44 => 33,  39 => 30,  35 => 29,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Customer/Blocks/View/carts.html.twig", "/opt/bitnami/apache/htdocs/src/PrestaShopBundle/Resources/views/Admin/Sell/Customer/Blocks/View/carts.html.twig");
    }
}
