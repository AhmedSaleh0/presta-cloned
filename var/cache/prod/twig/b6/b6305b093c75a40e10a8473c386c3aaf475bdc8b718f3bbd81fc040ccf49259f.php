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

/* @Modules/ps_mbo/views/templates/admin/controllers/module_catalog/recommended-modules.html.twig */
class __TwigTemplate_1294a04e18c95b0103d7abcffb93eb7a7a4022f2b65c87fb494c75cb24f54192 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return $this->loadTemplate((($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "isxmlhttprequest", [])) ? ("@Modules/ps_mbo/views/templates/admin/layout-ajax.html.twig") : ("@PrestaShop/Admin/layout.html.twig")), "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/recommended-modules.html.twig", 20);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_content($context, array $blocks = [])
    {
        // line 23
        if (( !twig_test_empty(($context["recommendedModulesNotInstalled"] ?? null)) ||  !twig_test_empty(($context["recommendedModulesInstalled"] ?? null)))) {
            // line 24
            echo "  <ul class=\"nav nav-tabs\" role=\"tablist\">";
            // line 25
            if ( !twig_test_empty(($context["recommendedModulesNotInstalled"] ?? null))) {
                // line 26
                echo "      <li class=\"nav-item active\">
        <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#tab_modules_list_not_installed\" role=\"tab\">";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Not Installed", []), "html", null, true);
                echo "
        </a>
      </li>";
            }
            // line 32
            if ( !twig_test_empty(($context["recommendedModulesInstalled"] ?? null))) {
                // line 33
                echo "      <li class=\"nav-item";
                if (twig_test_empty(($context["recommendedModulesNotInstalled"] ?? null))) {
                    echo " active";
                }
                echo "\">
        <a class=\"nav-link";
                // line 34
                if (twig_test_empty(($context["recommendedModulesNotInstalled"] ?? null))) {
                    echo " active";
                }
                echo "\" data-toggle=\"tab\" href=\"#tab_modules_list_installed\" role=\"tab\">";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Installed", []), "html", null, true);
                echo "
        </a>
      </li>";
            }
            // line 39
            echo "  </ul>
  <div id=\"modules_list_container_content\" class=\"tab-content\">";
            // line 41
            if ( !twig_test_empty(($context["recommendedModulesNotInstalled"] ?? null))) {
                // line 42
                echo "      <div class=\"tab-pane active\" id=\"tab_modules_list_not_installed\" role=\"tabpanel\">
        <table class=\"table\">";
                // line 44
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["recommendedModulesNotInstalled"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["recommendedModuleNotInstalled"]) {
                    // line 45
                    echo twig_include($this->env, $context, "@PrestaShop/Admin/Module/Includes/tab-module-line.html.twig", ["module" => $context["recommendedModuleNotInstalled"]]);
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recommendedModuleNotInstalled'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "        </table>
      </div>";
            }
            // line 50
            if ( !twig_test_empty(($context["recommendedModulesInstalled"] ?? null))) {
                // line 51
                echo "      <div class=\"tab-pane";
                if (twig_test_empty(($context["recommendedModulesNotInstalled"] ?? null))) {
                    echo "active";
                }
                echo "\" id=\"tab_modules_list_installed\" role=\"tabpanel\">
        <table class=\"table\">";
                // line 53
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["recommendedModulesInstalled"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["recommendedModuleInstalled"]) {
                    // line 54
                    echo twig_include($this->env, $context, "@PrestaShop/Admin/Module/Includes/tab-module-line.html.twig", ["module" => $context["recommendedModuleInstalled"]]);
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recommendedModuleInstalled'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                echo "        </table>
      </div>";
            }
            // line 59
            echo "  </div>";
        }
        // line 61
        echo "
  <div class=\"alert alert-addons row-margin-top\" role=\"alert\">
    <p class=\"alert-text\">
      <a href=\"https://addons.prestashop.com/?utm_source=back-office&amp;utm_medium=dispatch&amp;utm_campaign=back-office-";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "locale", []), "html", null, true);
        echo "&amp;utm_content=download";
        if ((isset($context["adminListFromSource"]) || array_key_exists("adminListFromSource", $context))) {
            echo "&amp;utm_term=";
            echo twig_escape_filter($this->env, ($context["adminListFromSource"] ?? null), "html", null, true);
        }
        echo "\" onclick=\"return !window.open(this.href);\">";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("More modules on addons.prestashop.com", []), "html", null, true);
        echo "
      </a>
    </p>
  </div>";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/recommended-modules.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 65,  171 => 64,  166 => 61,  163 => 59,  159 => 56,  145 => 54,  128 => 53,  121 => 51,  119 => 50,  115 => 47,  101 => 45,  84 => 44,  81 => 42,  79 => 41,  76 => 39,  70 => 35,  65 => 34,  58 => 33,  56 => 32,  50 => 28,  47 => 26,  45 => 25,  43 => 24,  41 => 23,  38 => 22,  29 => 20,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/recommended-modules.html.twig", "/opt/bitnami/apache/htdocs/modules/ps_mbo/views/templates/admin/controllers/module_catalog/recommended-modules.html.twig");
    }
}
