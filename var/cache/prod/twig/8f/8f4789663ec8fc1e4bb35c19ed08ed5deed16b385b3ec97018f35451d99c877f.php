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

/* @PrestaShop/Admin/Improve/Design/Theme/index.html.twig */
class __TwigTemplate_7c3787568b03beaefcd317a36126c62b5d80d352ab848b77de3d99b40a9be461 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 26
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 26);
        $this->blocks = [
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 28
        $context["layoutTitle"] = (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Theme & Logo", [], "Admin.Navigation.Menu") . " > ") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Theme", [], "Admin.Design.Feature"));
        // line 29
        $context["layoutHeaderToolbarBtn"] = ["add" => ["href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_themes_import"), "desc" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add new theme", [], "Admin.Design.Feature"), "icon" => "add"], "export" => ["href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_themes_export_current"), "desc" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Export current theme", [], "Admin.Design.Feature"), "icon" => "cloud_download"]];
        // line 26
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 42
    public function block_content($context, array $blocks = [])
    {
        // line 43
        echo "  <div id=\"themes-logo-page\">
    <div class=\"row\">
      <div class=\"col\">";
        // line 47
        if ( !($context["isSingleShopContext"] ?? null)) {
            // line 48
            echo "          <div class=\"alert alert-info\">
            <p class=\"alert-text\">";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You must select a shop from the above list if you wish to choose a theme.", [], "Admin.Design.Help"), "html", null, true);
            echo "
            </p>
          </div>";
        }
        // line 55
        if (($context["isInstalledRtlLanguage"] ?? null)) {
            // line 56
            $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/rtl_configuration.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 56)->display($context);
        }
        // line 59
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->getAttribute(($context["shopLogosForm"] ?? null), "shop_logos", []), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_themes_upload_logos")]);
        // line 60
        if ((( !($context["isInstalledRtlLanguage"] ?? null) && ($context["isSingleShopContext"] ?? null)) && ($context["isMultiShopFeatureUsed"] ?? null))) {
            // line 61
            $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/multishop_switch.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 61)->display($context);
        }
        // line 63
        echo "          <div class=\"card\">
            <div class=\"card-header\">";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Logo", [], "Admin.Global"), "html", null, true);
        echo "
            </div>
            <div class=\"card-body logo-configuration-card-body\">";
        // line 68
        $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 68)->display($context);
        // line 69
        echo "            </div>
            <div class=\"card-footer\">
              <button class=\"btn btn-primary float-right\">";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
              </button>
              <div class=\"clearfix\">&nbsp;</div>
            </div>
          </div>";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["shopLogosForm"] ?? null), "shop_logos", []), 'rest');
        // line 78
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->getAttribute(($context["shopLogosForm"] ?? null), "shop_logos", []), 'form_end');
        echo "

        <div class=\"card\">
          <div class=\"card-header\">";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("My theme for %name% shop", ["%name%" => ($context["shopName"] ?? null)], "Admin.Design.Feature"), "html", null, true);
        echo "
          </div>
          <div class=\"card-body row\">";
        // line 86
        $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 86, "1999114240")->display(twig_array_merge($context, ["themeName" => $this->getAttribute(        // line 87
($context["currentlyUsedTheme"] ?? null), "name", []), "themeVersion" => $this->getAttribute(        // line 88
($context["currentlyUsedTheme"] ?? null), "get", [0 => "version"], "method"), "themeAuthor" => $this->getAttribute(        // line 89
($context["currentlyUsedTheme"] ?? null), "get", [0 => "author.name"], "method"), "isActive" => true]));
        // line 103
        if ( !twig_test_empty(($context["notUsedThemes"] ?? null))) {
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["notUsedThemes"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
                // line 105
                $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 105, "484828747")->display(twig_array_merge($context, ["themeName" => $this->getAttribute(                // line 106
$context["theme"], "name", []), "themeVersion" => $this->getAttribute(                // line 107
$context["theme"], "get", [0 => "version"], "method"), "themeAuthor" => $this->getAttribute(                // line 108
$context["theme"], "get", [0 => "author.name"], "method"), "isActive" => false]));
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 136
            $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/use_theme_modal.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 136)->display($context);
            // line 137
            $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/delete_theme_modal.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 137)->display($context);
        }
        // line 140
        $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 140, "1032016132")->display($context);
        // line 157
        $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/layouts_configuration.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 157)->display($context);
        // line 158
        echo "          </div>
        </div>
      </div>
    </div>
  </div>";
    }

    // line 165
    public function block_javascripts($context, array $blocks = [])
    {
        // line 166
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/themes.bundle.js"), "html", null, true);
        echo "\"></script>";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 168,  170 => 166,  167 => 165,  159 => 158,  157 => 157,  155 => 140,  152 => 137,  150 => 136,  136 => 108,  135 => 107,  134 => 106,  133 => 105,  116 => 104,  114 => 103,  112 => 89,  111 => 88,  110 => 87,  109 => 86,  104 => 82,  98 => 78,  96 => 77,  89 => 72,  85 => 69,  83 => 68,  78 => 65,  75 => 63,  72 => 61,  70 => 60,  68 => 59,  65 => 56,  63 => 55,  57 => 50,  54 => 48,  52 => 47,  48 => 43,  45 => 42,  41 => 26,  39 => 29,  37 => 28,  22 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", "/opt/bitnami/apache/htdocs/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Theme/index.html.twig");
    }
}


/* @PrestaShop/Admin/Improve/Design/Theme/index.html.twig */
class __TwigTemplate_7c3787568b03beaefcd317a36126c62b5d80d352ab848b77de3d99b40a9be461___1999114240 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 86
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 86);
        $this->blocks = [
            'image' => [$this, 'block_image'],
            'button_container' => [$this, 'block_button_container'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 92
    public function block_image($context, array $blocks = [])
    {
        // line 93
        echo "                <img src=\"";
        echo twig_escape_filter($this->env, ($context["baseShopUrl"] ?? null), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentlyUsedTheme"] ?? null), "get", [0 => "preview"], "method"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentlyUsedTheme"] ?? null), "name", []), "html", null, true);
        echo "\">";
    }

    // line 95
    public function block_button_container($context, array $blocks = [])
    {
        // line 96
        echo "                <button class=\"btn action-button\">
                  <i class=\"material-icons icon-current-theme\">done</i>";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("My current theme", [], "Admin.Design.Feature"), "html", null, true);
        echo "
                </button>";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 98,  250 => 96,  247 => 95,  238 => 93,  235 => 92,  217 => 86,  175 => 168,  170 => 166,  167 => 165,  159 => 158,  157 => 157,  155 => 140,  152 => 137,  150 => 136,  136 => 108,  135 => 107,  134 => 106,  133 => 105,  116 => 104,  114 => 103,  112 => 89,  111 => 88,  110 => 87,  109 => 86,  104 => 82,  98 => 78,  96 => 77,  89 => 72,  85 => 69,  83 => 68,  78 => 65,  75 => 63,  72 => 61,  70 => 60,  68 => 59,  65 => 56,  63 => 55,  57 => 50,  54 => 48,  52 => 47,  48 => 43,  45 => 42,  41 => 26,  39 => 29,  37 => 28,  22 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", "/opt/bitnami/apache/htdocs/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Theme/index.html.twig");
    }
}


/* @PrestaShop/Admin/Improve/Design/Theme/index.html.twig */
class __TwigTemplate_7c3787568b03beaefcd317a36126c62b5d80d352ab848b77de3d99b40a9be461___484828747 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 105
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 105);
        $this->blocks = [
            'image' => [$this, 'block_image'],
            'button_container' => [$this, 'block_button_container'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 111
    public function block_image($context, array $blocks = [])
    {
        // line 112
        echo "                    <img src=\"";
        echo twig_escape_filter($this->env, ($context["baseShopUrl"] ?? null), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "get", [0 => "preview"], "method"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "name", []), "html", null, true);
        echo "\">";
    }

    // line 114
    public function block_button_container($context, array $blocks = [])
    {
        // line 115
        echo "                    <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_themes_enable", ["themeName" => $this->getAttribute(($context["theme"] ?? null), "name", [])]), "html", null, true);
        echo "\" method=\"post\" class=\"d-inline\">
                      <input type=\"hidden\" name=\"token\" value=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("enable-theme"), "html", null, true);
        echo "\" />
                      <button type=\"button\" class=\"btn action-button js-display-use-theme-modal\"";
        // line 117
        echo (( !($context["isSingleShopContext"] ?? null)) ? ("disabled") : (""));
        echo ">
                        <i class=\"material-icons\">
                          present_to_all
                        </i>
                        <span>";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Use this theme", [], "Admin.Design.Feature"), "html", null, true);
        echo "</span>
                      </button>
                    </form>
                    <form action=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_themes_delete", ["themeName" => $this->getAttribute(($context["theme"] ?? null), "name", [])]), "html", null, true);
        echo "\" method=\"post\" class=\"d-inline\">
                      <input type=\"hidden\" name=\"token\" value=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete-theme"), "html", null, true);
        echo "\" />
                      <button type=\"button\" class=\"btn delete-button js-display-delete-theme-modal\">
                        <i class=\"material-icons\">
                          delete
                        </i>
                      </button>
                    </form>";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 125,  351 => 124,  345 => 121,  338 => 117,  334 => 116,  329 => 115,  326 => 114,  317 => 112,  314 => 111,  296 => 105,  253 => 98,  250 => 96,  247 => 95,  238 => 93,  235 => 92,  217 => 86,  175 => 168,  170 => 166,  167 => 165,  159 => 158,  157 => 157,  155 => 140,  152 => 137,  150 => 136,  136 => 108,  135 => 107,  134 => 106,  133 => 105,  116 => 104,  114 => 103,  112 => 89,  111 => 88,  110 => 87,  109 => 86,  104 => 82,  98 => 78,  96 => 77,  89 => 72,  85 => 69,  83 => 68,  78 => 65,  75 => 63,  72 => 61,  70 => 60,  68 => 59,  65 => 56,  63 => 55,  57 => 50,  54 => 48,  52 => 47,  48 => 43,  45 => 42,  41 => 26,  39 => 29,  37 => 28,  22 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", "/opt/bitnami/apache/htdocs/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Theme/index.html.twig");
    }
}


/* @PrestaShop/Admin/Improve/Design/Theme/index.html.twig */
class __TwigTemplate_7c3787568b03beaefcd317a36126c62b5d80d352ab848b77de3d99b40a9be461___1032016132 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 140
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_catalog_card.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 140);
        $this->blocks = [
            'image' => [$this, 'block_image'],
            'description' => [$this, 'block_description'],
            'button_container' => [$this, 'block_button_container'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_catalog_card.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 141
    public function block_image($context, array $blocks = [])
    {
        // line 142
        echo "                <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/scss/img/pages/themes/icon_themes.png"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Visit the theme catalog", [], "Admin.Design.Feature"), "html", null, true);
        echo "\">";
    }

    // line 145
    public function block_description($context, array $blocks = [])
    {
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Explore more than a thousand themes", [], "Admin.Design.Feature"), "html", null, true);
    }

    // line 149
    public function block_button_container($context, array $blocks = [])
    {
        // line 150
        echo "                <a class=\"btn btn-primary\" href=\"";
        echo twig_escape_filter($this->env, ($context["themeCatalogUrl"] ?? null), "html", null, true);
        echo "\" target=\"_blank\">";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Visit the theme catalog", [], "Admin.Design.Feature"), "html", null, true);
        echo "
                </a>";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  447 => 151,  443 => 150,  440 => 149,  436 => 146,  433 => 145,  425 => 142,  422 => 141,  403 => 140,  355 => 125,  351 => 124,  345 => 121,  338 => 117,  334 => 116,  329 => 115,  326 => 114,  317 => 112,  314 => 111,  296 => 105,  253 => 98,  250 => 96,  247 => 95,  238 => 93,  235 => 92,  217 => 86,  175 => 168,  170 => 166,  167 => 165,  159 => 158,  157 => 157,  155 => 140,  152 => 137,  150 => 136,  136 => 108,  135 => 107,  134 => 106,  133 => 105,  116 => 104,  114 => 103,  112 => 89,  111 => 88,  110 => 87,  109 => 86,  104 => 82,  98 => 78,  96 => 77,  89 => 72,  85 => 69,  83 => 68,  78 => 65,  75 => 63,  72 => 61,  70 => 60,  68 => 59,  65 => 56,  63 => 55,  57 => 50,  54 => 48,  52 => 47,  48 => 43,  45 => 42,  41 => 26,  39 => 29,  37 => 28,  22 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", "/opt/bitnami/apache/htdocs/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Theme/index.html.twig");
    }
}
