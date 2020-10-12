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

/* @PrestaShop/Admin/Improve/Design/Theme/Blocks/layouts_configuration.html.twig */
class __TwigTemplate_36bf3c1b3a96550dc0827adfb7df579eba7a73e1ebab4da0e8a2b1c9a9207ee2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'layouts_configuration' => [$this, 'block_layouts_configuration'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 26
        $this->displayBlock('layouts_configuration', $context, $blocks);
    }

    public function block_layouts_configuration($context, array $blocks = [])
    {
        // line 27
        echo "  <div class=\"col-12 layout-configuration\">
    <div class=\"inner-content\">
      <div class=\"float-left\">
        <div class=\"d-inline-block layout-logo\">
          <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/scss/img/pages/themes/icon_layouts.png"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Configure your page layouts", [], "Admin.Design.Feature"), "html", null, true);
        echo "\">
        </div>
        <div class=\"d-inline-block\">
          <span class=\"title\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Configure your page layouts", [], "Admin.Design.Feature"), "html", null, true);
        echo "</span>
          <p class=\"mb-0 description\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Each page can use a different layout, choose it among the layouts bundled in your theme.", [], "Admin.Design.Feature"), "html", null, true);
        echo "</p>
        </div>
      </div>
      <div class=\"float-right\">
        <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_theme_customize_layouts");
        echo "\"
           class=\"btn btn-tertiary choose-layouts-button\"
        >";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose layouts", [], "Admin.Design.Feature"), "html", null, true);
        echo "
        </a>";
        // line 45
        if (($context["isDevModeOn"] ?? null)) {
            // line 46
            echo "          <button class=\"btn btn-tertiary-outline js-reset-theme-layouts-btn\"
                  type=\"button\"
                  data-submit-url=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_themes_reset_layouts", ["themeName" => $this->getAttribute(($context["currentlyUsedTheme"] ?? null), "name", [])]), "html", null, true);
            echo "\"
                  data-csrf-token=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("reset-theme-layouts"), "html", null, true);
            echo "\"
          >
            <i class=\"material-icons\">settings_backup_restore</i>";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reset to defaults", [], "Admin.Design.Feature"), "html", null, true);
            echo "
          </button>";
        }
        // line 55
        echo "      </div>
      <div class=\"clearfix\"></div>
    </div>
  </div>";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/layouts_configuration.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 55,  86 => 52,  81 => 49,  77 => 48,  73 => 46,  71 => 45,  67 => 42,  62 => 39,  55 => 35,  51 => 34,  43 => 31,  37 => 27,  31 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/layouts_configuration.html.twig", "/opt/bitnami/apache/htdocs/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Theme/Blocks/layouts_configuration.html.twig");
    }
}
