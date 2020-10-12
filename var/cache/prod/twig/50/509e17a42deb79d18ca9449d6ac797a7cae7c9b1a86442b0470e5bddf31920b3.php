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

/* @Product/ProductPage/Forms/form_specific_price.html.twig */
class __TwigTemplate_03613ed04b4d67507af4e34459c856962912b69ac866af1daed550a18ca71e77 extends \Twig\Template
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
        if ( !(isset($context["is_modal"]) || array_key_exists("is_modal", $context))) {
            // line 26
            $context["is_modal"] = false;
        }
        // line 29
        if ((($context["is_modal"] ?? null) == false)) {
            // line 30
            $context["column_default_md_3"] = "col-md-3";
            // line 31
            $context["column_default_md_2"] = "col-md-2";
            // line 32
            $context["column_default_xl_2"] = "col-xl-2";
        } else {
            // line 34
            $context["column_default_md_3"] = "col-md-9";
            // line 35
            $context["column_default_md_2"] = "col-md-4";
            // line 36
            $context["column_default_xl_2"] = "col-xl-4";
        }
        // line 38
        echo "
<div class=\"card card-block\">
  <h4><b>";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Specific price conditions", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</b></h4>";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 43
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "sp_id_shop", [], "any", false, true), "vars", [], "any", false, true), "choices", [], "any", true, true)) {
            // line 44
            echo "  <div class=\"row\">
    <div class=\"col-md-4\">
      <fieldset class=\"form-group\">
        <label>";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shop", [], "Admin.Global"), "html", null, true);
            echo "</label>";
            // line 48
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sp_id_shop", []), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sp_id_shop", []), 'widget');
            echo "
      </fieldset>
    </div>
  </div>";
        } else {
            // line 54
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sp_id_shop", []), 'widget');
        }
        // line 56
        echo "
  <div class=\"row\">
    <div class=\"";
        // line 58
        echo twig_escape_filter($this->env, ($context["column_default_md_3"] ?? null), "html", null, true);
        echo "\">
      <fieldset class=\"form-group\">
        <label>";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("For", [], "Admin.Global"), "html", null, true);
        echo "</label>";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sp_id_currency", []), 'errors');
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sp_id_currency", []), 'widget');
        echo "
      </fieldset>
    </div>
    <div class=\"";
        // line 65
        echo twig_escape_filter($this->env, ($context["column_default_md_3"] ?? null), "html", null, true);
        echo "\">
      <fieldset class=\"form-group\">
        <label>&nbsp;</label>";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sp_id_country", []), 'errors');
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sp_id_country", []), 'widget');
        echo "
      </fieldset>
    </div>
    <div class=\"";
        // line 72
        echo twig_escape_filter($this->env, ($context["column_default_md_3"] ?? null), "html", null, true);
        echo "\">
      <fieldset class=\"form-group\">
        <label>&nbsp;</label>";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sp_id_group", []), 'errors');
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sp_id_group", []), 'widget');
        echo "
      </fieldset>
    </div>
    <div class=\"col-md-6\">
      <fieldset class=\"form-group\">
        <label>";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Customer", [], "Admin.Global"), "html", null, true);
        echo "</label>";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sp_id_customer", []), 'errors');
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sp_id_customer", []), 'widget');
        echo "
      </fieldset>
    </div>
  </div>
  <div class=\"row\">
    <div id=\"specific-price-combination-selector\" class=\"col-md-6";
        // line 88
        echo ((($context["has_combinations"] ?? null)) ? ("") : ("hide"));
        echo "\">
      <fieldset class=\"form-group\">
        <label>";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "sp_id_product_attribute", []), "vars", []), "label", []), "html", null, true);
        echo "</label>";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sp_id_product_attribute", []), 'errors');
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sp_id_product_attribute", []), 'widget');
        echo "
      </fieldset>
    </div>
    <div class=\"clearfix\"></div>
    <div class=\"";
        // line 96
        echo twig_escape_filter($this->env, ($context["column_default_md_3"] ?? null), "html", null, true);
        echo "\">
      <fieldset class=\"form-group\">
        <label>";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "sp_from", []), "vars", []), "label", []), "html", null, true);
        echo "</label>";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sp_from", []), 'errors');
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sp_from", []), 'widget');
        echo "
      </fieldset>
    </div>
    <div class=\"";
        // line 103
        echo twig_escape_filter($this->env, ($context["column_default_md_3"] ?? null), "html", null, true);
        echo "\">
      <fieldset class=\"form-group\">
        <label>";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("to", [], "Admin.Global");
        echo "</label>";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sp_to", []), 'errors');
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sp_to", []), 'widget');
        echo "
      </fieldset>
    </div>";
        // line 110
        if ((($context["is_modal"] ?? null) == true)) {
            // line 111
            echo "  </div>
  <div class=\"row\">";
        }
        // line 114
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, ($context["column_default_md_2"] ?? null), "html", null, true);
        echo "\">
      <fieldset class=\"form-group\">
        <label>";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "sp_from_quantity", []), "vars", []), "label", []), "html", null, true);
        echo "</label>";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sp_from_quantity", []), 'errors');
        echo "
        <div class=\"input-group\">";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sp_from_quantity", []), 'widget');
        echo "
          <div class=\"input-group-append\">
            <span class=\"input-group-text\">";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Unit(s)", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</span>
          </div>
        </div>
      </fieldset>
    </div>
  </div>
  <br>

  <h4><b>";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Impact on price", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</b></h4>
  <div class=\"row\">
    <div class=\"";
        // line 131
        echo twig_escape_filter($this->env, ($context["column_default_md_3"] ?? null), "html", null, true);
        echo "\">
      <fieldset class=\"form-group\">
        <label>";
        // line 133
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "sp_price", []), "vars", []), "label", []), "html", null, true);
        echo "</label>";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sp_price", []), 'errors');
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sp_price", []), 'widget');
        echo "
      </fieldset>
    </div>
    <div class=\"";
        // line 138
        echo twig_escape_filter($this->env, ($context["column_default_md_3"] ?? null), "html", null, true);
        echo "\">
      <fieldset class=\"form-group\">
        <label>&nbsp;</label>";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "leave_bprice", []), 'errors');
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "leave_bprice", []), 'widget');
        echo "
      </fieldset>
    </div>
  </div>
  <div class=\"row\">
    <div class=\"";
        // line 147
        echo twig_escape_filter($this->env, ($context["column_default_xl_2"] ?? null), "html", null, true);
        echo " col-lg-3\">
      <fieldset class=\"form-group\">
        <label>";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Apply a discount of", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sp_reduction", []), 'errors');
        // line 151
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sp_reduction", []), 'widget');
        echo "
      </fieldset>
    </div>
    <div class=\"";
        // line 154
        echo twig_escape_filter($this->env, ($context["column_default_xl_2"] ?? null), "html", null, true);
        echo " col-lg-3\">
      <fieldset class=\"form-group\">
        <label>&nbsp;</label>";
        // line 157
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sp_reduction_type", []), 'errors');
        // line 158
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sp_reduction_type", []), 'widget');
        echo "
      </fieldset>
    </div>
    <div class=\"";
        // line 161
        echo twig_escape_filter($this->env, ($context["column_default_xl_2"] ?? null), "html", null, true);
        echo " col-lg-3\">
      <fieldset class=\"form-group\">
        <label>&nbsp;</label>";
        // line 164
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sp_reduction_tax", []), 'errors');
        // line 165
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sp_reduction_tax", []), 'widget');
        echo "
      </fieldset>
    </div>
  </div>
  <div class=\"col-md-12 text-sm-right\">";
        // line 170
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cancel", []), 'widget');
        // line 171
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "save", []), 'widget');
        echo "
  </div>
  <div class=\"clearfix\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Product/ProductPage/Forms/form_specific_price.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 171,  305 => 170,  298 => 165,  296 => 164,  291 => 161,  285 => 158,  283 => 157,  278 => 154,  272 => 151,  270 => 150,  267 => 149,  262 => 147,  254 => 142,  252 => 141,  247 => 138,  241 => 135,  239 => 134,  236 => 133,  231 => 131,  226 => 129,  215 => 121,  210 => 119,  206 => 117,  203 => 116,  197 => 114,  193 => 111,  191 => 110,  186 => 107,  184 => 106,  181 => 105,  176 => 103,  170 => 100,  168 => 99,  165 => 98,  160 => 96,  153 => 92,  151 => 91,  148 => 90,  143 => 88,  135 => 83,  133 => 82,  130 => 81,  122 => 76,  120 => 75,  115 => 72,  109 => 69,  107 => 68,  102 => 65,  96 => 62,  94 => 61,  91 => 60,  86 => 58,  82 => 56,  79 => 54,  72 => 49,  70 => 48,  67 => 47,  62 => 44,  60 => 43,  58 => 41,  55 => 40,  51 => 38,  48 => 36,  46 => 35,  44 => 34,  41 => 32,  39 => 31,  37 => 30,  35 => 29,  32 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@Product/ProductPage/Forms/form_specific_price.html.twig", "/opt/bitnami/apache/htdocs/src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/Forms/form_specific_price.html.twig");
    }
}
