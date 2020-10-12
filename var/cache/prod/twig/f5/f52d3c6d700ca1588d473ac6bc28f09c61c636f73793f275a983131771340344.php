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

/* @Product/ProductPage/Panels/combinations.html.twig */
class __TwigTemplate_3878ced8d1e29aca76f29f88c0e1db6b0b50af5690adba1d54d2191107981d45 extends \Twig\Template
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
        echo "<div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step3\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"container-fluid\">
        <div class=\"row\">

          <div class=\"col-md-12\">

            <div id=\"quantities\" style=\"";
        // line 33
        if ((($context["has_combinations"] ?? null) || ($this->getAttribute($this->getAttribute(($context["formDependsOnStocks"] ?? null), "vars", []), "value", []) != "0"))) {
            echo "display: none;";
        }
        echo "\">
              <h2>";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantities", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>
              <fieldset class=\"form-group\">
                <div class=\"row\">";
        // line 37
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 38
            echo "                    <div class=\"col-md-4\">
                      <label class=\"form-control-label\">";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["formStockQuantity"] ?? null), "vars", []), "label", []), "html", null, true);
            echo "</label>";
            // line 40
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formStockQuantity"] ?? null), 'errors');
            // line 41
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formStockQuantity"] ?? null), 'widget');
            echo "
                    </div>";
        }
        // line 44
        echo "                  <div class=\"col-md-4\">
                    <label class=\"form-control-label\">";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["formStockMinimalQuantity"] ?? null), "vars", []), "label", []), "html", null, true);
        echo "</label>
                    <span class=\"help-box\" data-toggle=\"popover\"
                          data-content=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The minimum quantity required to buy this product (set to 1 to disable this feature). E.g.: if set to 3, customers will be able to purchase the product only if they take at least 3 in quantity.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formStockMinimalQuantity"] ?? null), 'errors');
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formStockMinimalQuantity"] ?? null), 'widget');
        echo "
                  </div>
                </div>
              </fieldset>

              <h2>";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Stock", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>
              <fieldset class=\"form-group\">
                <div class=\"row\">
                  <div class=\"col-md-4\">
                    <label class=\"form-control-label\">";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["formLocation"] ?? null), "vars", []), "label", []), "html", null, true);
        echo "</label>";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formLocation"] ?? null), 'errors');
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formLocation"] ?? null), 'widget');
        echo "
                  </div>
                </div>
                <div class=\"row\">
                  <div class=\"col-md-4\">
                    <label class=\"form-control-label\">";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["formLowStockThreshold"] ?? null), "vars", []), "label", []), "html", null, true);
        echo "</label>";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formLowStockThreshold"] ?? null), 'errors');
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formLowStockThreshold"] ?? null), 'widget');
        echo "
                  </div>
                  <div class=\"col-md-8\">
                    <label class=\"form-control-label\">&nbsp;</label>
                    <div class=\"widget-checkbox-inline\">";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formLowStockAlert"] ?? null), 'errors');
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formLowStockAlert"] ?? null), 'widget');
        echo "
                      <span class=\"help-box\" data-toggle=\"popover\" data-html=\"true\" data-content=\"";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The email will be sent to all the users who have the right to run the stock page. To modify the permissions, go to [1]Advanced Parameters > Team[/1]", ["[1]" => (("<a href=&quot;" . $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminEmployees")) . "&quot;>"), "[/1]" => "</a>"], "Admin.Catalog.Help");
        echo "\" ></span>
                    </div>
                  </div>
                </div>
              </fieldset>
            </div>

            <div id=\"virtual_product\" data-action=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_virtual_save_action", ["idProduct" => ($context["productId"] ?? null)]), "html", null, true);
        echo "\" data-action-remove=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_virtual_remove_action", ["idProduct" => ($context["productId"] ?? null)]), "html", null, true);
        echo "\">

              <div class=\"row\">
                <div class=\"col-md-4\">
                  <h2>";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["formVirtualProduct"] ?? null), "vars", []), "label", []), "html", null, true);
        echo "</h2>
                </div>
                <div class=\"col-md-8\">
                  <fieldset class=\"form-group\">";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formVirtualProduct"] ?? null), "is_virtual_file", []), 'widget');
        echo "
                  </fieldset>
                </div>
              </div>

              <div id=\"virtual_product_content\" class=\"row col-md-8\">";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formVirtualProduct"] ?? null), 'errors');
        echo "
                <div class=\"col-md-12\">
                  <fieldset class=\"form-group\">
                    <label class=\"form-control-label\">";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["formVirtualProduct"] ?? null), "file", []), "vars", []), "label", []), "html", null, true);
        echo "</label>
                    <span class=\"help-box\" data-toggle=\"popover\"
                          data-content=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Upload a file from your computer (%maxUploadSize% max.)", ["%maxUploadSize%" => ($context["max_upload_size"] ?? null)], "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                    <div id=\"form_step3_virtual_product_file_input\" class=\"";
        // line 101
        echo (($this->getAttribute($this->getAttribute($this->getAttribute(($context["formVirtualProduct"] ?? null), "vars", [], "any", false, true), "value", [], "any", false, true), "filename", [], "any", true, true)) ? ("hide") : ("show"));
        echo "\">";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formVirtualProduct"] ?? null), "file", []), 'widget');
        echo "
                    </div>
                    <div id=\"form_step3_virtual_product_file_details\" class=\"";
        // line 104
        echo (($this->getAttribute($this->getAttribute($this->getAttribute(($context["formVirtualProduct"] ?? null), "vars", [], "any", false, true), "value", [], "any", false, true), "filename", [], "any", true, true)) ? ("show") : ("hide"));
        echo "\">
                      <a href=\"";
        // line 105
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["formVirtualProduct"] ?? null), "vars", [], "any", false, true), "value", [], "any", false, true), "file_download_link", [], "any", true, true)) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["formVirtualProduct"] ?? null), "vars", []), "value", []), "file_download_link", [])) : ("")), "html", null, true);
        echo "\" class=\"btn btn-default btn-sm download\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Download file", [], "Admin.Actions"), "html", null, true);
        echo "</a>
                      <a href=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_virtual_remove_file_action", ["idProduct" => ($context["productId"] ?? null)]), "html", null, true);
        echo "\" class=\"btn btn-danger btn-sm delete\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete this file", [], "Admin.Actions"), "html", null, true);
        echo "</a>
                    </div>
                  </fieldset>
                </div>
                <div class=\"col-md-6\">
                  <fieldset class=\"form-group\">
                    <label class=\"form-control-label\">";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["formVirtualProduct"] ?? null), "name", []), "vars", []), "label", []), "html", null, true);
        echo "</label>
                    <span class=\"help-box\" data-toggle=\"popover\"
                          data-content=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The full filename with its extension (e.g. Book.pdf)", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formVirtualProduct"] ?? null), "name", []), 'errors');
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formVirtualProduct"] ?? null), "name", []), 'widget');
        echo "
                  </fieldset>
                </div>
                <div class=\"col-md-6\">
                  <fieldset class=\"form-group\">
                    <label class=\"form-control-label\">";
        // line 121
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["formVirtualProduct"] ?? null), "nb_downloadable", []), "vars", []), "label", []), "html", null, true);
        echo "</label>
                    <span class=\"help-box\" data-toggle=\"popover\"
                          data-content=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Number of downloads allowed per customer. Set to 0 for unlimited downloads.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formVirtualProduct"] ?? null), "nb_downloadable", []), 'errors');
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formVirtualProduct"] ?? null), "nb_downloadable", []), 'widget');
        echo "
                  </fieldset>
                </div>
                <div class=\"col-md-6\">
                  <fieldset class=\"form-group\">
                    <label class=\"form-control-label\">";
        // line 130
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["formVirtualProduct"] ?? null), "expiration_date", []), "vars", []), "label", []), "html", null, true);
        echo "</label>
                    <span class=\"help-box\" data-toggle=\"popover\"
                          data-content=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If set, the file will not be downloadable after this date. Leave blank if you do not wish to attach an expiration date.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formVirtualProduct"] ?? null), "expiration_date", []), 'errors');
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formVirtualProduct"] ?? null), "expiration_date", []), 'widget');
        echo "
                  </fieldset>
                </div>
                <div class=\"col-md-6\">
                  <fieldset class=\"form-group\">
                    <label class=\"form-control-label\">";
        // line 139
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["formVirtualProduct"] ?? null), "nb_days", []), "vars", []), "label", []), "html", null, true);
        echo "</label>
                    <span class=\"help-box\" data-toggle=\"popover\"
                          data-content=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Number of days this file can be accessed by customers. Set to zero for unlimited access.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>";
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formVirtualProduct"] ?? null), "nb_days", []), 'errors');
        // line 143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formVirtualProduct"] ?? null), "nb_days", []), 'widget');
        echo "
                  </fieldset>
                </div>
                <div class=\"col-md-12\">";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formVirtualProduct"] ?? null), "save", []), 'widget');
        echo "
                </div>
              </div>
            </div>";
        // line 152
        if ((($context["asm_globally_activated"] ?? null) && ($this->getAttribute($this->getAttribute(($context["formType"] ?? null), "vars", []), "value", []) != "2"))) {
            // line 153
            echo "              <div class=\"form-group\" id=\"asm_quantity_management\">
                <label class=\"col-sm-2 control-label\" for=\"form_step3_advanced_stock_management\"></label>
                <div class=\"col-sm-10\">";
            // line 156
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formAdvancedStockManagement"] ?? null), 'errors');
            // line 157
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formAdvancedStockManagement"] ?? null), 'widget');
            // line 158
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step1", []), "type_product", []), "vars", []), "value", []) == "1")) {
                // line 159
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("When enabling advanced stock management for a pack, please make sure it is also enabled for its product(s) – if you choose to decrement product quantities.", [], "Admin.Catalog.Notification"), "html", null, true);
            }
            // line 161
            echo "                </div>
              </div>
              <div class=\"form-group\" id=\"depends_on_stock_div\" style=\"";
            // line 163
            if ( !$this->getAttribute($this->getAttribute(($context["formAdvancedStockManagement"] ?? null), "vars", []), "checked", [])) {
                echo "display: none;";
            }
            echo "\">
                <label class=\"col-sm-2 control-label\" for=\"form_step3_depends_on_stock\"></label>
                <div class=\"col-sm-10\">";
            // line 166
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formDependsOnStocks"] ?? null), 'errors');
            // line 167
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formDependsOnStocks"] ?? null), 'widget');
            echo "
                </div>
              </div>";
        }
        // line 171
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 172
            echo "              <div id=\"pack_stock_type\">
                <h2>";
            // line 173
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["formPackStockType"] ?? null), "vars", []), "label", []), "html", null, true);
            echo "</h2>
                <div class=\"row col-md-4\">
                  <fieldset class=\"form-group\">";
            // line 176
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formPackStockType"] ?? null), 'errors');
            // line 177
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formPackStockType"] ?? null), 'widget');
            echo "
                  </fieldset>
                </div>
              </div>";
        }
        // line 182
        echo twig_include($this->env, $context, "@Product/ProductPage/Forms/form_combinations.html.twig", ["form" => ($context["formStep3"] ?? null), "form_combination_bulk" => ($context["formCombinations"] ?? null)]);
        // line 184
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminProductsQuantitiesStepBottom", ["id_product" => ($context["productId"] ?? null)]);
        echo "

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Product/ProductPage/Panels/combinations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 184,  331 => 182,  324 => 177,  322 => 176,  317 => 173,  314 => 172,  312 => 171,  306 => 167,  304 => 166,  297 => 163,  293 => 161,  290 => 159,  288 => 158,  286 => 157,  284 => 156,  280 => 153,  278 => 152,  272 => 147,  266 => 143,  264 => 142,  261 => 141,  256 => 139,  248 => 134,  246 => 133,  243 => 132,  238 => 130,  230 => 125,  228 => 124,  225 => 123,  220 => 121,  212 => 116,  210 => 115,  207 => 114,  202 => 112,  191 => 106,  185 => 105,  181 => 104,  176 => 102,  173 => 101,  169 => 100,  164 => 98,  158 => 95,  150 => 89,  144 => 85,  135 => 81,  125 => 74,  121 => 73,  119 => 72,  112 => 67,  110 => 66,  107 => 65,  99 => 60,  97 => 59,  94 => 58,  87 => 54,  79 => 49,  77 => 48,  74 => 47,  69 => 45,  66 => 44,  61 => 41,  59 => 40,  56 => 39,  53 => 38,  51 => 37,  46 => 34,  40 => 33,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@Product/ProductPage/Panels/combinations.html.twig", "/opt/bitnami/apache/htdocs/src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/Panels/combinations.html.twig");
    }
}
