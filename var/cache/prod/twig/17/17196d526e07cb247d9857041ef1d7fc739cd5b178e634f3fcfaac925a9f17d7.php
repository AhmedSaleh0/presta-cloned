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

/* @PrestaShop/Admin/Sell/Customer/Blocks/View/orders.html.twig */
class __TwigTemplate_983f8c28845aa8ef6a58997ccae20f1a052b7de3faea699d6703fac20b6c6b2b extends \Twig\Template
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
        $context["validOrdersCount"] = twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "ordersInformation", []), "validOrders", []));
        // line 27
        $context["invalidOrdersCount"] = twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "ordersInformation", []), "invalidOrders", []));
        // line 28
        $context["ordersCount"] = (($context["validOrdersCount"] ?? null) + ($context["invalidOrdersCount"] ?? null));
        // line 29
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">shopping_basket</i>";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Orders", [], "Admin.Global"), "html", null, true);
        echo "
    <span class=\"badge badge-primary rounded\">";
        // line 34
        echo twig_escape_filter($this->env, ($context["ordersCount"] ?? null), "html", null, true);
        echo "</span>
  </h3>
  <div class=\"card-body\">";
        // line 37
        if ((($context["ordersCount"] ?? null) > 0)) {
            // line 38
            echo "      <div class=\"card\">
        <div class=\"card-body\">
          <div class=\"row\">
            <div class=\"col\">";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Valid orders:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
              <span class=\"badge badge-success rounded\">";
            // line 43
            echo twig_escape_filter($this->env, ($context["validOrdersCount"] ?? null), "html", null, true);
            echo "</span>";
            // line 44
            $context["totalAmount"] = (("<span id=\"total-order-amount\">" . $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "ordersInformation", []), "totalSpent", [])) . "</span>");
            // line 45
            echo sprintf($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("for a total amount of %s", [], "Admin.Orderscustomers.Feature"), ($context["totalAmount"] ?? null));
            echo "
            </div>
            <div class=\"col\">";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invalid orders:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
              <span class=\"badge badge-danger rounded\">";
            // line 49
            echo twig_escape_filter($this->env, ($context["invalidOrdersCount"] ?? null), "html", null, true);
            echo "</span>
            </div>
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col\">";
            // line 57
            if (($context["validOrdersCount"] ?? null)) {
                // line 58
                echo "            <table class=\"table\">
              <thead>
              <tr>
                <th>";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ID", [], "Admin.Global"), "html", null, true);
                echo "</th>
                <th>";
                // line 62
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date", [], "Admin.Global"), "html", null, true);
                echo "</th>
                <th>";
                // line 63
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Payment", [], "Admin.Global"), "html", null, true);
                echo "</th>
                <th>";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status", [], "Admin.Global"), "html", null, true);
                echo "</th>
                <th>";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Products", [], "Admin.Global"), "html", null, true);
                echo "</th>
                <th>";
                // line 66
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total spent", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "</th>
                <th class=\"text-right\">";
                // line 67
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions", [], "Admin.Global"), "html", null, true);
                echo "</th>
              </tr>
              </thead>
              <tbody>";
                // line 71
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "ordersInformation", []), "validOrders", []));
                foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                    // line 72
                    $context["orderViewUrl"] = $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminOrders", true, ["id_order" => $this->getAttribute($context["order"], "orderId", []), "vieworder" => 1]);
                    // line 73
                    echo "
                <tr>
                  <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"";
                    // line 75
                    echo twig_escape_filter($this->env, ($context["orderViewUrl"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "orderId", []), "html", null, true);
                    echo "</td>
                  <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"";
                    // line 76
                    echo twig_escape_filter($this->env, ($context["orderViewUrl"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "orderPlacedDate", []), "html", null, true);
                    echo "</td>
                  <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"";
                    // line 77
                    echo twig_escape_filter($this->env, ($context["orderViewUrl"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "paymentMethodName", []), "html", null, true);
                    echo "</td>
                  <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"";
                    // line 78
                    echo twig_escape_filter($this->env, ($context["orderViewUrl"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "orderStatus", []), "html", null, true);
                    echo "</td>
                  <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"";
                    // line 79
                    echo twig_escape_filter($this->env, ($context["orderViewUrl"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "orderProductsCount", []), "html", null, true);
                    echo "</td>
                  <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"";
                    // line 80
                    echo twig_escape_filter($this->env, ($context["orderViewUrl"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "totalPaid", []), "html", null, true);
                    echo "</td>
                  <td class=\"text-right\">
                    <div class=\"btn-group-action\">
                      <div class=\"btn-group\">
                        <a href=\"";
                    // line 84
                    echo twig_escape_filter($this->env, ($context["orderViewUrl"] ?? null), "html", null, true);
                    echo "\"
                           class=\"btn tooltip-link dropdown-item\"
                           data-toggle=\"pstooltip\"
                           data-placement=\"top\"
                           data-original-title=\"";
                    // line 88
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 97
                echo "              </tbody>
            </table>";
            }
            // line 100
            echo "        </div>
      </div>

      <div class=\"row\">
        <div class=\"col\">";
            // line 105
            if (($context["invalidOrdersCount"] ?? null)) {
                // line 106
                echo "            <table class=\"table\">
              <thead>
                <tr>
                  <th>";
                // line 109
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ID", [], "Admin.Global"), "html", null, true);
                echo "</th>
                  <th>";
                // line 110
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date", [], "Admin.Global"), "html", null, true);
                echo "</th>
                  <th>";
                // line 111
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Payment", [], "Admin.Global"), "html", null, true);
                echo "</th>
                  <th>";
                // line 112
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status", [], "Admin.Global"), "html", null, true);
                echo "</th>
                  <th>";
                // line 113
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Products", [], "Admin.Global"), "html", null, true);
                echo "</th>
                  <th>";
                // line 114
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total spent", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "</th>
                  <th class=\"text-right\">";
                // line 115
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions", [], "Admin.Global"), "html", null, true);
                echo "</th>
                </tr>
              </thead>
              <tbody>";
                // line 119
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "ordersInformation", []), "invalidOrders", []));
                foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                    // line 120
                    $context["orderViewUrl"] = $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminOrders", true, ["id_order" => $this->getAttribute($context["order"], "orderId", []), "vieworder" => 1]);
                    // line 121
                    echo "
                <tr>
                  <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"";
                    // line 123
                    echo twig_escape_filter($this->env, ($context["orderViewUrl"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "orderId", []), "html", null, true);
                    echo "</td>
                  <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"";
                    // line 124
                    echo twig_escape_filter($this->env, ($context["orderViewUrl"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "orderPlacedDate", []), "html", null, true);
                    echo "</td>
                  <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"";
                    // line 125
                    echo twig_escape_filter($this->env, ($context["orderViewUrl"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "paymentMethodName", []), "html", null, true);
                    echo "</td>
                  <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"";
                    // line 126
                    echo twig_escape_filter($this->env, ($context["orderViewUrl"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "orderStatus", []), "html", null, true);
                    echo "</td>
                  <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"";
                    // line 127
                    echo twig_escape_filter($this->env, ($context["orderViewUrl"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "orderProductsCount", []), "html", null, true);
                    echo "</td>
                  <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"";
                    // line 128
                    echo twig_escape_filter($this->env, ($context["orderViewUrl"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "totalPaid", []), "html", null, true);
                    echo "</td>
                  <td class=\"text-right\">
                    <div class=\"btn-group-action\">
                      <div class=\"btn-group\">
                        <a href=\"";
                    // line 132
                    echo twig_escape_filter($this->env, ($context["orderViewUrl"] ?? null), "html", null, true);
                    echo "\"
                           class=\"btn tooltip-link dropdown-item\"
                           data-toggle=\"pstooltip\"
                           data-placement=\"top\"
                           data-original-title=\"";
                    // line 136
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 145
                echo "              </tbody>
            </table>";
            }
            // line 148
            echo "        </div>
      </div>";
        } else {
            // line 151
            echo "      <p class=\"text-muted text-center\">";
            // line 152
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%firstname% %lastname% has not placed any orders yet", ["%firstname%" => $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "firstName", []), "%lastname%" => $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "lastName", [])], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
      </p>";
        }
        // line 155
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Customer/Blocks/View/orders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 155,  319 => 152,  317 => 151,  313 => 148,  309 => 145,  295 => 136,  288 => 132,  279 => 128,  273 => 127,  267 => 126,  261 => 125,  255 => 124,  249 => 123,  245 => 121,  243 => 120,  239 => 119,  233 => 115,  229 => 114,  225 => 113,  221 => 112,  217 => 111,  213 => 110,  209 => 109,  204 => 106,  202 => 105,  196 => 100,  192 => 97,  178 => 88,  171 => 84,  162 => 80,  156 => 79,  150 => 78,  144 => 77,  138 => 76,  132 => 75,  128 => 73,  126 => 72,  122 => 71,  116 => 67,  112 => 66,  108 => 65,  104 => 64,  100 => 63,  96 => 62,  92 => 61,  87 => 58,  85 => 57,  75 => 49,  71 => 48,  66 => 45,  64 => 44,  61 => 43,  57 => 42,  52 => 38,  50 => 37,  45 => 34,  41 => 33,  36 => 29,  34 => 28,  32 => 27,  30 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Customer/Blocks/View/orders.html.twig", "/opt/bitnami/apache/htdocs/src/PrestaShopBundle/Resources/views/Admin/Sell/Customer/Blocks/View/orders.html.twig");
    }
}
