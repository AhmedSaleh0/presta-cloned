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

/* @PrestaShop/Admin/Module/alerts.html.twig */
class __TwigTemplate_5aedaf94d2080f9759e0c14d1c4a3c8db0e6b7f01957ffd3e450efbde6a48cf9 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Module/common.html.twig", "@PrestaShop/Admin/Module/alerts.html.twig", 25);
        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/Module/common.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_content($context, array $blocks = [])
    {
        // line 29
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/modal_addons_connect.html.twig", "@PrestaShop/Admin/Module/alerts.html.twig", 29)->display(twig_array_merge($context, ["level" => ($context["level"] ?? null), "errorMessage" => ($context["errorMessage"] ?? null)]));
        // line 31
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/modal_confirm_prestatrust.html.twig", "@PrestaShop/Admin/Module/alerts.html.twig", 31)->display($context);
        // line 33
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/modal_import.html.twig", "@PrestaShop/Admin/Module/alerts.html.twig", 33)->display(twig_array_merge($context, ["level" => ($context["level"] ?? null), "errorMessage" => ($context["errorMessage"] ?? null)]));
        // line 35
        echo "  <div class=\"row justify-content-center\">
    <div class=\"col-lg-10\">
      <div id=\"module-short-list-configure\" class=\"module-short-list\">
        <span class=\"module-search-result-title module-search-result-wording\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%nbModules% modules to configure", ["%nbModules%" => twig_length_filter($this->env, ($context["modules"] ?? null))], "Admin.Modules.Feature"), "html", null, true);
        echo "</span>
        <span class=\"help-box\" data-toggle=\"popover\"
          data-title=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Modules to configure", [], "Admin.Modules.Feature"), "html", null, true);
        echo "\"
          data-content=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("These modules require your attention: you need to take some action to ensure they are fully operational.", [], "Admin.Modules.Help"), "html", null, true);
        echo "\">
        </span>
      </div>";
        // line 44
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/grid_notification_configure.html.twig", "@PrestaShop/Admin/Module/alerts.html.twig", 44)->display(twig_array_merge($context, ["modules" => ($context["modules"] ?? null), "display_type" => "list", "id" => "notification", "category" => "notification"]));
        // line 45
        echo "    </div>
  </div>";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/alerts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 45,  67 => 44,  62 => 41,  58 => 40,  53 => 38,  48 => 35,  46 => 33,  44 => 31,  42 => 29,  39 => 27,  22 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Module/alerts.html.twig", "/opt/bitnami/apache/htdocs/src/PrestaShopBundle/Resources/views/Admin/Module/alerts.html.twig");
    }
}
