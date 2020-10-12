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

/* @PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig */
class __TwigTemplate_587bc874d17809cac8b13e877631c9fbd079be26c9f01f7a9735d3e6c2ff0644 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'logo_card' => [$this, 'block_logo_card'],
            'card_title' => [$this, 'block_card_title'],
            'card_content' => [$this, 'block_card_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 26
        $this->displayBlock('logo_card', $context, $blocks);
    }

    public function block_logo_card($context, array $blocks = [])
    {
        // line 27
        echo "  <div class=\"card logo-card\">
    <div class=\"card-body\">
      <div class=\"logo-card-title text-left\">";
        // line 30
        $this->displayBlock('card_title', $context, $blocks);
        // line 32
        echo "      </div>";
        // line 33
        $this->displayBlock('card_content', $context, $blocks);
        // line 35
        echo "    </div>
  </div>";
    }

    // line 30
    public function block_card_title($context, array $blocks = [])
    {
    }

    // line 33
    public function block_card_content($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  59 => 33,  54 => 30,  49 => 35,  47 => 33,  45 => 32,  43 => 30,  39 => 27,  33 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig", "/opt/bitnami/apache/htdocs/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig");
    }
}
