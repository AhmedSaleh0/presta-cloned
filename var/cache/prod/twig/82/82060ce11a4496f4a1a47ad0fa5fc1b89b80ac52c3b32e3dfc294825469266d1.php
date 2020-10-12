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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Employee/Blocks/showcase_card.html.twig */
class __TwigTemplate_7f4bbbf9b7180621c1ae60a208e04404547f2d0c70db0f44e281648683691365 extends \Twig\Template
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
        if ( !($context["isShowcaseCardClosed"] ?? null)) {
            // line 27
            echo "  <div id=\"employeesShowcaseCard\" class=\"showcase-card card\">
    <div class=\"helper-card__left helper-card__team shape-one\">
      <img src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/scss/img/helper-card/team@3x.png"), "html", null, true);
            echo "\" class=\"img-fluid\">
    </div>
    <div class=\"helper-card__right\">
      <h2>";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Manage your team", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</h2>
      <p>";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create profiles for your employees with specific rights. SuperAdmin can access the entire store while other people can only be dedicated to the catalog or orders pages.", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</p>
      <a class=\"btn btn-outline-secondary\" href=\"";
            // line 34
            echo twig_escape_filter($this->env, ($context["helperCardDocumentationLink"] ?? null), "html", null, true);
            echo "\" target=\"_blank\">";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Learn more", [], "Admin.Actions"), "html", null, true);
            echo "
      </a>
    </div>
    <i class=\"showcase-card__close material-icons js-remove-helper-block\"
       data-card-name=\"";
            // line 39
            echo twig_escape_filter($this->env, ($context["showcaseCardName"] ?? null), "html", null, true);
            echo "\"
       data-close-url=\"";
            // line 40
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_close_showcase_card");
            echo "\"
    >
      close
    </i>
  </div>";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/Blocks/showcase_card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 40,  60 => 39,  53 => 35,  50 => 34,  46 => 33,  42 => 32,  36 => 29,  32 => 27,  30 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/Blocks/showcase_card.html.twig", "/opt/bitnami/apache/htdocs/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Employee/Blocks/showcase_card.html.twig");
    }
}
