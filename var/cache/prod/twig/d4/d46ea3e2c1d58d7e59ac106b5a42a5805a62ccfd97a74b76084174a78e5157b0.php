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

/* @PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_catalog_card.html.twig */
class __TwigTemplate_d19eb5258a2b15535076d7858636f860dbda6797bc504e23c7c08c49e253a860 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 26
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card_container.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_catalog_card.html.twig", 26);
        $this->blocks = [
            'content' => [$this, 'block_content'],
            'image' => [$this, 'block_image'],
            'description' => [$this, 'block_description'],
            'button_container' => [$this, 'block_button_container'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card_container.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        // line 29
        echo "  <div class=\"card theme-card theme-catalog-card\">

    <div class=\"text-center catalog-image\">";
        // line 32
        $this->displayBlock('image', $context, $blocks);
        // line 34
        echo "    </div>

    <div class=\"text-center catalog-description\">";
        // line 37
        $this->displayBlock('description', $context, $blocks);
        // line 39
        echo "    </div>

    <div class=\"actions-container active\">";
        // line 42
        $this->displayBlock('button_container', $context, $blocks);
        // line 44
        echo "    </div>
  </div>";
    }

    // line 32
    public function block_image($context, array $blocks = [])
    {
    }

    // line 37
    public function block_description($context, array $blocks = [])
    {
    }

    // line 42
    public function block_button_container($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_catalog_card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 42,  73 => 37,  68 => 32,  63 => 44,  61 => 42,  57 => 39,  55 => 37,  51 => 34,  49 => 32,  45 => 29,  42 => 28,  22 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_catalog_card.html.twig", "/opt/bitnami/apache/htdocs/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Theme/Blocks/Partials/theme_catalog_card.html.twig");
    }
}
