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

/* @PrestaShop/Admin/Sell/Customer/Blocks/View/messages.html.twig */
class __TwigTemplate_718c9623dcca3e617d676fe84423937e6fc835fe1873f498a5edffbe4a76207f extends \Twig\Template
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
    <i class=\"material-icons\">message</i>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Messages", [], "Admin.Global"), "html", null, true);
        echo "
    <span class=\"badge badge-primary rounded\">";
        // line 30
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["customerInformation"] ?? null), "messagesInformation", [])), "html", null, true);
        echo "</span>
  </h3>
  <div class=\"card-body\">";
        // line 33
        if ( !twig_test_empty($this->getAttribute(($context["customerInformation"] ?? null), "messagesInformation", []))) {
            // line 34
            echo "    <table class=\"table\">
      <thead>
        <tr>
          <th>";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status", [], "Admin.Global"), "html", null, true);
            echo "</th>
          <th>";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Message", [], "Admin.Global"), "html", null, true);
            echo "</th>
          <th>";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sent on", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</th>
        </tr>
      </thead>
      <tbody>";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["customerInformation"] ?? null), "messagesInformation", []));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 44
                echo "        <tr>
          <td>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "status", []), "html", null, true);
                echo "</td>
          <td>
            <a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminCustomerThreads", true, ["id_customer_thread" => $this->getAttribute($context["message"], "customerThreadId", []), "viewcustomer_thread" => 1]), "html", null, true);
                echo "\">";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "message", []), "html", null, true);
                echo "...
            </a>
          </td>
          <td>";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "date", []), "html", null, true);
                echo "</td>
        </tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "      </tbody>
    </table>";
        } else {
            // line 57
            echo "      <p class=\"text-muted text-center mb-0\">";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%firstname% %lastname% has never contacted you", ["%firstname%" => $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "firstName", []), "%lastname%" => $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "lastName", [])], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
      </p>";
        }
        // line 61
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Customer/Blocks/View/messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 61,  100 => 58,  98 => 57,  94 => 54,  86 => 51,  80 => 48,  77 => 47,  72 => 45,  69 => 44,  65 => 43,  59 => 39,  55 => 38,  51 => 37,  46 => 34,  44 => 33,  39 => 30,  35 => 29,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Customer/Blocks/View/messages.html.twig", "/opt/bitnami/apache/htdocs/src/PrestaShopBundle/Resources/views/Admin/Sell/Customer/Blocks/View/messages.html.twig");
    }
}
