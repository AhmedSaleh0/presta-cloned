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

/* @PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig */
class __TwigTemplate_9c3ec3e4d5b2651bf7b5803d12d82ecf936b228bda5c11c2c63f596205ed63a9 extends \Twig\Template
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
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", 26);
        // line 27
        echo "
<div class=\"card-group\">";
        // line 29
        $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", 29, "2043152324")->display($context);
        // line 51
        $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", 51, "1025679614")->display($context);
        // line 124
        $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", 124, "1256458589")->display($context);
        // line 153
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 153,  39 => 124,  37 => 51,  35 => 29,  32 => 27,  30 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", "/opt/bitnami/apache/htdocs/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig");
    }
}


/* @PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig */
class __TwigTemplate_9c3ec3e4d5b2651bf7b5803d12d82ecf936b228bda5c11c2c63f596205ed63a9___2043152324 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 29
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", 29);
        $this->blocks = [
            'card_title' => [$this, 'block_card_title'],
            'card_content' => [$this, 'block_card_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 30
    public function block_card_title($context, array $blocks = [])
    {
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["shopLogosForm"] ?? null), "shop_logos", []), "header_logo_is_restricted_to_shop", []), 'widget');
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Header logo", [], "Admin.Design.Feature"), "html", null, true);
    }

    // line 33
    public function block_card_content($context, array $blocks = [])
    {
        // line 34
        echo "      <p class=\"logo-card-description\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Will appear on your main page. Recommended size for the default theme: height %height% and width %width%.", ["%height%" => "40px", "%width%" => "200px"], "Admin.Design.Help"), "html", null, true);
        echo "
      </p>

      <div class=\"text-center logo-image-container\">
        <img
          class=\"header-logo\"
          src=\"";
        // line 41
        echo twig_escape_filter($this->env, ($context["headerLogoPath"] ?? null), "html", null, true);
        echo "\"
          alt=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Header logo", [], "Admin.Design.Feature"), "html", null, true);
        echo "\"
          title=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Header logo", [], "Admin.Design.Feature"), "html", null, true);
        echo "\"
        >
      </div>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "form_group_row", [0 => $this->getAttribute($this->getAttribute(($context["shopLogosForm"] ?? null), "shop_logos", []), "header_logo", [])], "method"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 47,  131 => 43,  127 => 42,  123 => 41,  114 => 35,  112 => 34,  109 => 33,  104 => 31,  101 => 30,  83 => 29,  41 => 153,  39 => 124,  37 => 51,  35 => 29,  32 => 27,  30 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", "/opt/bitnami/apache/htdocs/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig");
    }
}


/* @PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig */
class __TwigTemplate_9c3ec3e4d5b2651bf7b5803d12d82ecf936b228bda5c11c2c63f596205ed63a9___1025679614 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 51
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", 51);
        $this->blocks = [
            'card_title' => [$this, 'block_card_title'],
            'card_content' => [$this, 'block_card_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 52
    public function block_card_title($context, array $blocks = [])
    {
        // line 53
        echo "      <ul class=\"nav nav-pills\" role=\"tablist\">
        <li class=\"nav-item\">";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["shopLogosForm"] ?? null), "shop_logos", []), "mail_logo_is_restricted_to_shop", []), 'widget');
        echo "
          <a class=\"nav-link active show d-inline-block\"
             id=\"mail-tab\"
             data-toggle=\"tab\"
             href=\"#email-configuration\"
             role=\"tab\"
             aria-controls=\"home\"
             aria-expanded=\"true\"
             aria-selected=\"true\"
          >";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mail logo", [], "Admin.Design.Feature"), "html", null, true);
        echo "
          </a>
        </li>
        <li class=\"nav-item\">";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["shopLogosForm"] ?? null), "shop_logos", []), "invoice_logo_is_restricted_to_shop", []), 'widget');
        echo "
          <a class=\"nav-link d-inline-block\"
             id=\"invoice-tab\"
             data-toggle=\"tab\"
             href=\"#invoice-configuration\"
             role=\"tab\"
             aria-controls=\"home\"
             aria-expanded=\"true\"
             aria-selected=\"true\"
          >";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invoice logo", [], "Admin.Design.Feature"), "html", null, true);
        echo "
          </a>
        </li>
      </ul>";
    }

    // line 84
    public function block_card_content($context, array $blocks = [])
    {
        // line 85
        echo "      <div class=\"tab-content\">
        <div class=\"tab-pane active show\" id=\"email-configuration\" role=\"tabpanel\" aria-labelledby=\"logo-tab\">
          <p class=\"logo-card-description description-in-tab\">";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Will appear on email headers. If undefined, the header logo will be used.", [], "Admin.Design.Help"), "html", null, true);
        echo "
          </p>

          <div class=\"text-center logo-image-container\">
            <img
              class=\"email-logo\"
              src=\"";
        // line 94
        echo twig_escape_filter($this->env, ($context["mailLogoPath"] ?? null), "html", null, true);
        echo "\"
              alt=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mail logo", [], "Admin.Design.Feature"), "html", null, true);
        echo "\"
              title=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mail logo", [], "Admin.Design.Feature"), "html", null, true);
        echo "\"
            >
          </div>
          <div class=\"input-in-tab\">";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "form_group_row", [0 => $this->getAttribute($this->getAttribute(($context["shopLogosForm"] ?? null), "shop_logos", []), "mail_logo", []), 1 => [], 2 => ["help" => (((($context["headerLogoPath"] ?? null) == ($context["mailLogoPath"] ?? null))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Warning: if no email logo is available, the main logo will be used instead.", [], "Admin.Design.Notification")) : (""))]], "method"), "html", null, true);
        echo "
          </div>
        </div>
        <div class=\"tab-pane\" id=\"invoice-configuration\" role=\"tabpanel\" aria-labelledby=\"logo-tab\">
          <p class=\"logo-card-description description-in-tab\">";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Will appear on invoice headers.", [], "Admin.Design.Help"), "html", null, true);
        echo "
          </p>

          <div class=\"text-center logo-image-container\">
            <img
              class=\"invoice-logo\"
              src=\"";
        // line 111
        echo twig_escape_filter($this->env, ($context["invoiceLogoPath"] ?? null), "html", null, true);
        echo "\"
              alt=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invoice logo", [], "Admin.Design.Feature"), "html", null, true);
        echo "\"
              title=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invoice logo", [], "Admin.Design.Feature"), "html", null, true);
        echo "\"
            >
          </div>
          <div class=\"input-in-tab\">";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "form_group_row", [0 => $this->getAttribute($this->getAttribute(($context["shopLogosForm"] ?? null), "shop_logos", []), "invoice_logo", []), 1 => [], 2 => ["help" => (((($context["headerLogoPath"] ?? null) == ($context["invoiceLogoPath"] ?? null))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Warning: if no invoice logo is available, the main logo will be used instead.", [], "Admin.Design.Help")) : (""))]], "method"), "html", null, true);
        echo "
          </div>
        </div>
      </div>";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 117,  293 => 113,  289 => 112,  285 => 111,  276 => 105,  269 => 100,  263 => 96,  259 => 95,  255 => 94,  246 => 88,  242 => 85,  239 => 84,  231 => 79,  219 => 69,  213 => 65,  201 => 55,  198 => 53,  195 => 52,  177 => 51,  136 => 47,  131 => 43,  127 => 42,  123 => 41,  114 => 35,  112 => 34,  109 => 33,  104 => 31,  101 => 30,  83 => 29,  41 => 153,  39 => 124,  37 => 51,  35 => 29,  32 => 27,  30 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", "/opt/bitnami/apache/htdocs/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig");
    }
}


/* @PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig */
class __TwigTemplate_9c3ec3e4d5b2651bf7b5803d12d82ecf936b228bda5c11c2c63f596205ed63a9___1256458589 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 124
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", 124);
        $this->blocks = [
            'card_title' => [$this, 'block_card_title'],
            'card_content' => [$this, 'block_card_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 125
    public function block_card_title($context, array $blocks = [])
    {
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["shopLogosForm"] ?? null), "shop_logos", []), "favicon_is_restricted_to_shop", []), 'widget');
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Favicon", [], "Admin.Design.Feature"), "html", null, true);
    }

    // line 128
    public function block_card_content($context, array $blocks = [])
    {
        // line 129
        echo "      <p class=\"logo-card-description\">";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("It is the small icon that appears in browser tabs, next to the title.", [], "Admin.Design.Help"), "html", null, true);
        echo "
      </p>

      <div class=\"text-center logo-image-container\">
          <img
            class=\"rounded-circle img-thumbnail favicon-logo\"
            src=\"";
        // line 136
        echo twig_escape_filter($this->env, ($context["faviconPath"] ?? null), "html", null, true);
        echo "\"
            alt=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invoice logo", [], "Admin.Design.Feature"), "html", null, true);
        echo "\"
            title=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invoice logo", [], "Admin.Design.Feature"), "html", null, true);
        echo "\"
          >
      </div>

      <div class=\"form-group row\">
        <div class=\"col-sm\">";
        // line 144
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "form_widget_with_error", [0 => $this->getAttribute($this->getAttribute(($context["shopLogosForm"] ?? null), "shop_logos", []), "favicon", [])], "method"), "html", null, true);
        echo "
          <small class=\"form-text\">";
        // line 146
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Use our [1]favicon generator on PrestaShop Marketplace[/1] to boost your brand image!", ["[1]" => "<a href=\"https://addons.prestashop.com/create-favicon.php?pab=1\" target=\"_blank\">", "[/1]" => "</a>"], "Admin.Design.Help");
        echo "
          </small>
        </div>
      </div>";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  404 => 146,  400 => 144,  392 => 138,  388 => 137,  384 => 136,  375 => 130,  373 => 129,  370 => 128,  365 => 126,  362 => 125,  344 => 124,  299 => 117,  293 => 113,  289 => 112,  285 => 111,  276 => 105,  269 => 100,  263 => 96,  259 => 95,  255 => 94,  246 => 88,  242 => 85,  239 => 84,  231 => 79,  219 => 69,  213 => 65,  201 => 55,  198 => 53,  195 => 52,  177 => 51,  136 => 47,  131 => 43,  127 => 42,  123 => 41,  114 => 35,  112 => 34,  109 => 33,  104 => 31,  101 => 30,  83 => 29,  41 => 153,  39 => 124,  37 => 51,  35 => 29,  32 => 27,  30 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", "/opt/bitnami/apache/htdocs/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig");
    }
}
