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

/* @PrestaShop/Admin/Improve/Payment/PaymentMethods/Blocks/payment_modules_list.html.twig */
class __TwigTemplate_0899ba8a25a906c4d634c21fdb46892ddb20770221e89ebc317393186d6174ac extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'payment_methods_module_list' => [$this, 'block_payment_methods_module_list'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 27
        $this->displayBlock('payment_methods_module_list', $context, $blocks);
    }

    public function block_payment_methods_module_list($context, array $blocks = [])
    {
        // line 28
        if ((twig_length_filter($this->env, ($context["paymentModules"] ?? null)) > 0)) {
            // line 29
            echo "  <div class=\"module-item-list\">";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["paymentModules"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 31
                echo "    <div class=\"row module-item-wrapper-list border-bottom mb-sm-3\">
      <div class=\"col-12 col-sm-2 col-md-1 col-lg-1\">
        <div class=\"module-logo-thumb-list text-center\">
          <img src=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "img", []), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "displayName", []), "html", null, true);
                echo "\"/>
        </div>
      </div>
      <div class=\"col-12 col-sm-6 col-md-8 col-lg-9 pl-0\">
        <p class=\"mb-0\">";
                // line 39
                echo $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "displayName", []);
                echo "
          <span class=\"text-muted\">";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("v%version% - by %author%", ["%version%" => $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "version", []), "%author%" => $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "author", [])], "Admin.Modules.Feature"), "html", null, true);
                echo "
          </span>
        </p>
        <p class=\"text-muted\">";
                // line 45
                echo $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "description", []);
                echo "
        </p>
      </div>";
                // line 48
                if ($this->getAttribute($this->getAttribute($context["module"], "attributes", []), "is_configurable", [])) {
                    // line 49
                    echo "      <div class=\"col-12 col-sm-4 col-md-3 col-lg-2 mb-3\">
        <div class=\"text-center\">
          <a href=\"";
                    // line 51
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_module_configure_action", ["module_name" => $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "name", [])]), "html", null, true);
                    echo "\"
             class=\"btn btn-primary-reverse btn-outline-primary light-button\"
          >";
                    // line 54
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Configure", [], "Admin.Global"), "html", null, true);
                    echo "
          </a>
        </div>
      </div>";
                }
                // line 59
                echo "    </div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "  </div>";
        } else {
            // line 63
            echo "    <div class=\"alert alert-warning\" role=\"alert\">
      <p class=\"alert-text\">";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("It seems there are no recommended payment solutions for your country.", [], "Admin.Payment.Notification"), "html", null, true);
            echo " <br>
        <a class=\"_blank\" href=\"https://www.prestashop.com/en/contact-us\">";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Do you think there should be one? Let us know!", [], "Admin.Shipping.Feature"), "html", null, true);
            echo "</a>
      </p>
    </div>";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Payment/PaymentMethods/Blocks/payment_modules_list.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  108 => 66,  104 => 65,  101 => 63,  98 => 61,  92 => 59,  85 => 54,  80 => 51,  76 => 49,  74 => 48,  69 => 45,  63 => 41,  59 => 39,  50 => 34,  45 => 31,  41 => 30,  39 => 29,  37 => 28,  31 => 27,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Payment/PaymentMethods/Blocks/payment_modules_list.html.twig", "/opt/bitnami/apache/htdocs/src/PrestaShopBundle/Resources/views/Admin/Improve/Payment/PaymentMethods/Blocks/payment_modules_list.html.twig");
    }
}
