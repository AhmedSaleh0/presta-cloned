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

/* @PrestaShop/Admin/Product/ProductPage/product.html.twig */
class __TwigTemplate_b50118d2032c8c4692f730b9bb71baec3939a462aa6daca3f93df7af83b12113 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Product/ProductPage/product.html.twig", 25);
        $this->blocks = [
            'content' => [$this, 'block_content'],
            'product_header' => [$this, 'block_product_header'],
            'product_tabs_container' => [$this, 'block_product_tabs_container'],
            'product_panel_essentials' => [$this, 'block_product_panel_essentials'],
            'product_panel_combinations' => [$this, 'block_product_panel_combinations'],
            'product_panel_shipping' => [$this, 'block_product_panel_shipping'],
            'product_panel_pricing' => [$this, 'block_product_panel_pricing'],
            'product_panel_seo' => [$this, 'block_product_panel_seo'],
            'product_panel_options' => [$this, 'block_product_panel_options'],
            'product_panel_modules' => [$this, 'block_product_panel_modules'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 331
        $context["js_translatable"] = twig_array_merge(["Are you sure to disable variations ? they will all be deleted" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This will delete all the combinations. Do you wish to proceed?", [], "Admin.Catalog.Notification")],         // line 333
($context["js_translatable"] ?? null));
        // line 335
        $context["js_translatable"] = twig_array_merge(["Form update success" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Settings updated.", [], "Admin.Notifications.Success"), "Form update errors" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Unable to update settings.", [], "Admin.Notifications.Error"), "Delete" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete", [], "Admin.Actions"), "ToLargeFile" => twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The file is too large. Maximum size allowed is: [1]. The file you are trying to upload is [2].", [], "Admin.Notifications.Error"), ["[1]" => "{{maxFilesize}}", "[2]" => "{{filesize}}"]), "Drop images here" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Drop images here", [], "Admin.Catalog.Feature"), "or select files" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("or select files", [], "Admin.Catalog.Feature"), "files recommandations" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Recommended size 800 x 800px for default theme.", [], "Admin.Catalog.Feature"), "files recommandations2" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("JPG, GIF or PNG format.", [], "Admin.Catalog.Feature"), "Cover" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cover", [], "Admin.Catalog.Feature"), "Are you sure to delete this?" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Are you sure to delete this?", [], "Admin.Notifications.Warning"), "This will delete the specific price. Do you wish to proceed?" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This will delete the specific price. Do you wish to proceed?", [], "Admin.Catalog.Notification"), "Quantities" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantities", [], "Admin.Catalog.Feature"), "Combinations" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Combinations", [], "Admin.Catalog.Feature"), "Virtual product" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Virtual product", [], "Admin.Catalog.Feature"), "tax incl." => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("tax incl.", [], "Admin.Catalog.Feature"), "tax excl." => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("tax excl.", [], "Admin.Catalog.Feature"), "You can't create pack product with variations. Are you sure to disable variations ? they will all be deleted." => (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("A pack of products can't have combinations.", [], "Admin.Catalog.Notification") . " ") . $this->getAttribute(        // line 352
($context["js_translatable"] ?? null), "Are you sure to disable variations ? they will all be deleted", [], "array")), "You can't create virtual product with variations. Are you sure to disable variations ? they will all be deleted." => (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("A virtual product can't have combinations.", [], "Admin.Catalog.Notification") . " ") . $this->getAttribute(        // line 353
($context["js_translatable"] ?? null), "Are you sure to disable variations ? they will all be deleted", [], "array"))],         // line 354
($context["js_translatable"] ?? null));
        // line 25
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_content($context, array $blocks = [])
    {
        // line 28
        echo "
  <form name=\"form\" id=\"form\" method=\"post\" class=\"form-horizontal product-page row justify-content-md-center\" novalidate=\"novalidate\">";
        // line 31
        if ( !($context["editable"] ?? null)) {
            echo " <fieldset disabled id=\"field-disabled\">";
        }
        // line 33
        $this->displayBlock('product_header', $context, $blocks);
        // line 44
        echo "
    <div class=\"col-md-10\">
      <div id=\"form_bubbling_errors\">";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
      </div>
    </div>

    <div id=\"form-loading\" class=\"col-xxl-10\">";
        // line 53
        $this->displayBlock('product_tabs_container', $context, $blocks);
        // line 56
        echo "      <div id=\"form_content\" class=\"tab-content\">";
        // line 59
        $this->displayBlock('product_panel_essentials', $context, $blocks);
        // line 82
        $this->displayBlock('product_panel_combinations', $context, $blocks);
        // line 106
        $this->displayBlock('product_panel_shipping', $context, $blocks);
        // line 127
        $this->displayBlock('product_panel_pricing', $context, $blocks);
        // line 136
        $this->displayBlock('product_panel_seo', $context, $blocks);
        // line 144
        $this->displayBlock('product_panel_options', $context, $blocks);
        // line 152
        $this->displayBlock('product_panel_modules', $context, $blocks);
        // line 248
        echo "      </div>";
        // line 250
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "id_product", []), 'widget');
        // line 251
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "_token", []), 'widget');
        echo "

    </div>";
        // line 255
        echo twig_include($this->env, $context, "@Product/ProductPage/Blocks/footer.html.twig", ["preview_link" =>         // line 256
($context["preview_link"] ?? null), "preview_link_deactivate" =>         // line 257
($context["preview_link_deactivate"] ?? null), "is_shop_context" =>         // line 258
($context["is_shop_context"] ?? null), "editable" =>         // line 259
($context["editable"] ?? null), "is_active" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 260
($context["form"] ?? null), "step1", []), "vars", []), "value", []), "active", []), "productId" =>         // line 261
($context["id_product"] ?? null)]);
        // line 263
        if ( !($context["editable"] ?? null)) {
            echo " </fieldset>";
        }
        // line 264
        echo "  </form>";
        // line 267
        $this->loadTemplate("@PrestaShop/Admin/Product/ProductPage/product.html.twig", "@PrestaShop/Admin/Product/ProductPage/product.html.twig", 267, "1432631765")->display(twig_array_merge($context, ["id" => "confirmation_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Warning", [], "Admin.Notifications.Warning"), "closable" => false, "actions" => [0 => ["type" => "button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No", [], "Admin.Global"), "class" => "btn btn-outline-secondary btn-lg cancel"], 1 => ["type" => "button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Yes", [], "Admin.Global"), "class" => "btn btn-primary btn-lg continue"]]]));
    }

    // line 33
    public function block_product_header($context, array $blocks = [])
    {
        // line 34
        echo twig_include($this->env, $context, "@Product/ProductPage/Blocks/header.html.twig", ["formName" => $this->getAttribute($this->getAttribute(        // line 35
($context["form"] ?? null), "step1", []), "name", []), "formType" => $this->getAttribute($this->getAttribute(        // line 36
($context["form"] ?? null), "step1", []), "type_product", []), "is_multishop_context" =>         // line 37
($context["is_multishop_context"] ?? null), "languages" =>         // line 38
($context["languages"] ?? null), "help_link" =>         // line 39
($context["help_link"] ?? null), "stats_link" =>         // line 40
($context["stats_link"] ?? null)]);
    }

    // line 53
    public function block_product_tabs_container($context, array $blocks = [])
    {
        // line 54
        echo twig_include($this->env, $context, "@Product/ProductPage/Blocks/tabs.html.twig");
    }

    // line 59
    public function block_product_panel_essentials($context, array $blocks = [])
    {
        // line 60
        $context["formQuantityShortcut"] = (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step1", [], "any", false, true), "qty_0_shortcut", [], "any", true, true)) ? ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step1", []), "qty_0_shortcut", [])) : (null));
        // line 61
        echo twig_include($this->env, $context, "@Product/ProductPage/Panels/essentials.html.twig", ["formPackItems" => $this->getAttribute($this->getAttribute(        // line 62
($context["form"] ?? null), "step1", []), "inputPackItems", []), "productId" =>         // line 63
($context["id_product"] ?? null), "images" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 64
($context["form"] ?? null), "step1", []), "vars", []), "value", []), "images", []), "formShortDescription" => $this->getAttribute($this->getAttribute(        // line 65
($context["form"] ?? null), "step1", []), "description_short", []), "formDescription" => $this->getAttribute($this->getAttribute(        // line 66
($context["form"] ?? null), "step1", []), "description", []), "formFeatures" => $this->getAttribute($this->getAttribute(        // line 67
($context["form"] ?? null), "step1", []), "features", []), "formManufacturer" => $this->getAttribute($this->getAttribute(        // line 68
($context["form"] ?? null), "step1", []), "id_manufacturer", []), "formRelatedProducts" => $this->getAttribute($this->getAttribute(        // line 69
($context["form"] ?? null), "step1", []), "related_products", []), "is_combination_active" =>         // line 70
($context["is_combination_active"] ?? null), "has_combinations" =>         // line 71
($context["has_combinations"] ?? null), "formReference" => $this->getAttribute($this->getAttribute(        // line 72
($context["form"] ?? null), "step6", []), "reference", []), "formQuantityShortcut" =>         // line 73
($context["formQuantityShortcut"] ?? null), "formPriceShortcut" => $this->getAttribute($this->getAttribute(        // line 74
($context["form"] ?? null), "step1", []), "price_shortcut", []), "formPriceShortcutTTC" => $this->getAttribute($this->getAttribute(        // line 75
($context["form"] ?? null), "step1", []), "price_ttc_shortcut", []), "formCategories" => $this->getAttribute(        // line 76
($context["form"] ?? null), "step1", [])]);
    }

    // line 82
    public function block_product_panel_combinations($context, array $blocks = [])
    {
        // line 83
        $context["formStockQuantity"] = (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step3", [], "any", false, true), "qty_0", [], "any", true, true)) ? ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step3", []), "qty_0", [])) : (null));
        // line 84
        echo twig_include($this->env, $context, "@Product/ProductPage/Panels/combinations.html.twig", ["formDependsOnStocks" => $this->getAttribute($this->getAttribute(        // line 85
($context["form"] ?? null), "step3", []), "depends_on_stock", []), "productId" =>         // line 86
($context["id_product"] ?? null), "formStockQuantity" =>         // line 87
($context["formStockQuantity"] ?? null), "formStockMinimalQuantity" => $this->getAttribute($this->getAttribute(        // line 88
($context["form"] ?? null), "step3", []), "minimal_quantity", []), "formLowStockThreshold" => $this->getAttribute($this->getAttribute(        // line 89
($context["form"] ?? null), "step3", []), "low_stock_threshold", []), "formLocation" => $this->getAttribute($this->getAttribute(        // line 90
($context["form"] ?? null), "step3", []), "location", []), "formLowStockAlert" => $this->getAttribute($this->getAttribute(        // line 91
($context["form"] ?? null), "step3", []), "low_stock_alert", []), "formVirtualProduct" => $this->getAttribute($this->getAttribute(        // line 92
($context["form"] ?? null), "step3", []), "virtual_product", []), "asm_globally_activated" =>         // line 93
($context["asm_globally_activated"] ?? null), "formType" => $this->getAttribute($this->getAttribute(        // line 94
($context["form"] ?? null), "step1", []), "type_product", []), "formAdvancedStockManagement" => $this->getAttribute($this->getAttribute(        // line 95
($context["form"] ?? null), "step3", []), "advanced_stock_management", []), "formPackStockType" => $this->getAttribute($this->getAttribute(        // line 96
($context["form"] ?? null), "step3", []), "pack_stock_type", []), "formStep3" => $this->getAttribute(        // line 97
($context["form"] ?? null), "step3", []), "formCombinations" =>         // line 98
($context["formCombinations"] ?? null), "has_combinations" =>         // line 99
($context["has_combinations"] ?? null), "max_upload_size" =>         // line 100
($context["max_upload_size"] ?? null)]);
    }

    // line 106
    public function block_product_panel_shipping($context, array $blocks = [])
    {
        // line 107
        echo "          <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step4\">
            <div class=\"row\">
              <div class=\"col-md-12\">
                <div class=\"container-fluid\">
                  <div class=\"row\">";
        // line 112
        echo twig_include($this->env, $context, "@Product/ProductPage/Forms/form_shipping.html.twig", ["form" => $this->getAttribute(        // line 113
($context["form"] ?? null), "step4", []), "asm_globally_activated" =>         // line 114
($context["asm_globally_activated"] ?? null), "isNotVirtual" => ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 115
($context["form"] ?? null), "step1", []), "type_product", []), "vars", []), "value", []) != "2"), "isChecked" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 116
($context["form"] ?? null), "step3", []), "advanced_stock_management", []), "vars", []), "checked", []), "warehouses" =>         // line 117
($context["warehouses"] ?? null)]);
        // line 118
        echo "
                  </div>
                </div>
              </div>
            </div>
          </div>";
    }

    // line 127
    public function block_product_panel_pricing($context, array $blocks = [])
    {
        // line 128
        echo twig_include($this->env, $context, "@Product/ProductPage/Panels/pricing.html.twig", ["pricingForm" => $this->getAttribute(        // line 129
($context["form"] ?? null), "step2", []), "is_multishop_context" =>         // line 130
($context["is_multishop_context"] ?? null), "productId" =>         // line 131
($context["id_product"] ?? null)]);
    }

    // line 136
    public function block_product_panel_seo($context, array $blocks = [])
    {
        // line 137
        echo twig_include($this->env, $context, "@Product/ProductPage/Panels/seo.html.twig", ["seoForm" => $this->getAttribute(        // line 138
($context["form"] ?? null), "step5", []), "productId" =>         // line 139
($context["id_product"] ?? null)]);
    }

    // line 144
    public function block_product_panel_options($context, array $blocks = [])
    {
        // line 145
        echo twig_include($this->env, $context, "@Product/ProductPage/Panels/options.html.twig", ["optionsForm" => $this->getAttribute(        // line 146
($context["form"] ?? null), "step6", []), "productId" =>         // line 147
($context["id_product"] ?? null)]);
    }

    // line 152
    public function block_product_panel_modules($context, array $blocks = [])
    {
        // line 153
        if (($this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->hookCount("displayAdminProductsExtra") > 0)) {
            // line 154
            echo "            <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"hooks\">
              <div class=\"row\">
                <div class=\"col-md-12\">
                  <div class=\"container-fluid\">
                    <div class=\"row\">";
            // line 161
            echo "                      <div class=\"col-md-12\">";
            // line 162
            $context["hooks"] = $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHooksArray("displayAdminProductsExtra", ["id_product" => ($context["id_product"] ?? null)]);
            // line 163
            echo "
                        <div class=\"row module-selection\" style=\"display: none;\">
                          <div class=\"col-md-12 col-lg-7\">";
            // line 166
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["hooks"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 167
                echo "                              <div class=\"module-render-container module-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "name", []), "html", null, true);
                echo "\">
                                <div>
                                  <img class=\"top-logo\" src=\"";
                // line 169
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "img", []), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "displayName", []), "html", null, true);
                echo "\">
                                  <h2 class=\"text-ellipsis module-name-grid\">";
                // line 171
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "displayName", []), "html", null, true);
                echo "
                                  </h2>
                                  <div class=\"text-ellipsis small-text module-version\">";
                // line 174
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "version", []), "html", null, true);
                echo " by";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "author", []), "html", null, true);
                echo "
                                  </div>
                                </div>
                                <div class=\"small no-padding\">";
                // line 178
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "description", []), "html", null, true);
                echo "
                                </div>
                              </div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 182
            echo "                          </div>
                          <div class=\"col-md-12 col-lg-5\">
                            <h2>";
            // line 184
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Module to configure", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "</h2>
                            <select class=\"modules-list-select\" data-toggle=\"select2\">";
            // line 186
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["hooks"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 187
                echo "                                <option value=\"module-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "name", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "displayName", []), "html", null, true);
                echo "</option>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 189
            echo "                            </select>
                          </div>
                        </div>

                        <div class=\"module-render-container all-modules\">
                          <p>
                            <h2>";
            // line 195
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose a module to configure", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "</h2>";
            // line 196
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("These modules are relative to the product page of your shop.", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "<br />";
            // line 197
            echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To manage all your modules go to the [1]Installed module page[/1]", [], "Admin.Catalog.Feature"), ["[1]" => (("<a href=\"" . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_module_manage")) . "\">"), "[/1]" => "</a>"]);
            echo "
                          </p>
                          <div class=\"row\">";
            // line 200
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["hooks"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 201
                echo "                              <div class=\"col-md-12 col-lg-6 col-xl-4\">
                                <div class=\"module-item-wrapper-grid\">
                                  <div class=\"module-item-heading-grid\">
                                    <img class=\"module-logo-thumb-grid\" src=\"";
                // line 204
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "img", []), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "displayName", []), "html", null, true);
                echo "\">
                                    <h3 class=\"text-ellipsis module-name-grid\">";
                // line 206
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "displayName", []), "html", null, true);
                echo "
                                    </h3>
                                    <div class=\"text-ellipsis small-text module-version-author-grid\">";
                // line 209
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "version", []), "html", null, true);
                echo " by";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "author", []), "html", null, true);
                echo "
                                    </div>
                                  </div>
                                  <div class=\"module-quick-description-grid small no-padding\">";
                // line 213
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "description", []), "html", null, true);
                echo "
                                  </div>
                                  <div class=\"module-container\">
                                    <div class=\"module-quick-action-grid clearfix\">
                                      <button class=\"modules-list-button btn btn-outline-primary pull-xs-right\" data-target=\"module-";
                // line 217
                echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "id", []), "html", null, true);
                echo "\">";
                // line 218
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Configure", [], "Admin.Actions"), "html", null, true);
                echo "
                                      </button>
                                    </div>
                                  </div>
                                </div>
                              </div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 225
            echo "                          </div>
                        </div>";
            // line 228
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["hooks"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 229
                echo "                          <div
                            id=\"module_";
                // line 230
                echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "id", []), "html", null, true);
                echo "\"
                            class=\"module-render-container module-";
                // line 231
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "name", []), "html", null, true);
                echo "\"
                            style=\"display: none;\"
                          >
                            <div>";
                // line 235
                echo $this->getAttribute($context["module"], "content", []);
                echo "
                            </div>
                          </div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 239
            echo "                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>";
        }
    }

    // line 291
    public function block_javascripts($context, array $blocks = [])
    {
        // line 292
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/product/form.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/catalog_product.bundle.js"), "html", null, true);
        echo "\"></script>

  <script src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/product/product-manufacturer.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/product/product-related.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/product/product-category-tags.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/product/default-category.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/product/product-combinations.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/category-tree.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/module/module_card.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/modal-confirmation.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/product_page.bundle.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../js/tiny_mce/tiny_mce.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../js/admin/tinymce.inc.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../js/admin/tinymce_loader.js"), "html", null, true);
        echo "\"></script>

  <script>
      \$(function() {
        var editable = '";
        // line 312
        echo twig_escape_filter($this->env, ($context["editable"] ?? null), "html", null, true);
        echo "';

        if (editable !== '1'){
          \$('#field-disabled').find(\"select\").each(function() {
            \$(this).removeClass('select2-hidden-accessible');
          });
          \$('#field-disabled').find(\"span.select2\").each(function() {
            \$(this).hide();
          });
          \$('#field-disabled').find(\"a.pstaggerClosingCross\").each(function() {
            \$(this).attr(\"disabled\", \"disabled\").on(\"click\", function() {
              return false;
            });
          });
        }
      });
  </script>";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/ProductPage/product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  504 => 312,  497 => 308,  493 => 307,  489 => 306,  485 => 305,  481 => 304,  477 => 303,  473 => 302,  469 => 301,  465 => 300,  461 => 299,  457 => 298,  453 => 297,  448 => 295,  444 => 294,  439 => 292,  436 => 291,  425 => 239,  416 => 235,  410 => 231,  406 => 230,  403 => 229,  399 => 228,  396 => 225,  384 => 218,  381 => 217,  374 => 213,  366 => 209,  361 => 206,  355 => 204,  350 => 201,  346 => 200,  341 => 197,  338 => 196,  335 => 195,  327 => 189,  317 => 187,  313 => 186,  309 => 184,  305 => 182,  296 => 178,  288 => 174,  283 => 171,  277 => 169,  271 => 167,  267 => 166,  263 => 163,  261 => 162,  259 => 161,  253 => 154,  251 => 153,  248 => 152,  244 => 147,  243 => 146,  242 => 145,  239 => 144,  235 => 139,  234 => 138,  233 => 137,  230 => 136,  226 => 131,  225 => 130,  224 => 129,  223 => 128,  220 => 127,  211 => 118,  209 => 117,  208 => 116,  207 => 115,  206 => 114,  205 => 113,  204 => 112,  198 => 107,  195 => 106,  191 => 100,  190 => 99,  189 => 98,  188 => 97,  187 => 96,  186 => 95,  185 => 94,  184 => 93,  183 => 92,  182 => 91,  181 => 90,  180 => 89,  179 => 88,  178 => 87,  177 => 86,  176 => 85,  175 => 84,  173 => 83,  170 => 82,  166 => 76,  165 => 75,  164 => 74,  163 => 73,  162 => 72,  161 => 71,  160 => 70,  159 => 69,  158 => 68,  157 => 67,  156 => 66,  155 => 65,  154 => 64,  153 => 63,  152 => 62,  151 => 61,  149 => 60,  146 => 59,  142 => 54,  139 => 53,  135 => 40,  134 => 39,  133 => 38,  132 => 37,  131 => 36,  130 => 35,  129 => 34,  126 => 33,  122 => 267,  120 => 264,  116 => 263,  114 => 261,  113 => 260,  112 => 259,  111 => 258,  110 => 257,  109 => 256,  108 => 255,  103 => 251,  101 => 250,  99 => 248,  97 => 152,  95 => 144,  93 => 136,  91 => 127,  89 => 106,  87 => 82,  85 => 59,  83 => 56,  81 => 53,  74 => 47,  70 => 44,  68 => 33,  64 => 31,  61 => 28,  58 => 27,  54 => 25,  52 => 354,  51 => 353,  50 => 352,  49 => 335,  47 => 333,  46 => 331,  22 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Product/ProductPage/product.html.twig", "/opt/bitnami/apache/htdocs/src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/product.html.twig");
    }
}


/* @PrestaShop/Admin/Product/ProductPage/product.html.twig */
class __TwigTemplate_b50118d2032c8c4692f730b9bb71baec3939a462aa6daca3f93df7af83b12113___1432631765 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 267
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig", "@PrestaShop/Admin/Product/ProductPage/product.html.twig", 267);
        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 284
    public function block_content($context, array $blocks = [])
    {
        // line 285
        echo "      <div class=\"modal-body\"></div>";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/ProductPage/product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  582 => 285,  579 => 284,  562 => 267,  504 => 312,  497 => 308,  493 => 307,  489 => 306,  485 => 305,  481 => 304,  477 => 303,  473 => 302,  469 => 301,  465 => 300,  461 => 299,  457 => 298,  453 => 297,  448 => 295,  444 => 294,  439 => 292,  436 => 291,  425 => 239,  416 => 235,  410 => 231,  406 => 230,  403 => 229,  399 => 228,  396 => 225,  384 => 218,  381 => 217,  374 => 213,  366 => 209,  361 => 206,  355 => 204,  350 => 201,  346 => 200,  341 => 197,  338 => 196,  335 => 195,  327 => 189,  317 => 187,  313 => 186,  309 => 184,  305 => 182,  296 => 178,  288 => 174,  283 => 171,  277 => 169,  271 => 167,  267 => 166,  263 => 163,  261 => 162,  259 => 161,  253 => 154,  251 => 153,  248 => 152,  244 => 147,  243 => 146,  242 => 145,  239 => 144,  235 => 139,  234 => 138,  233 => 137,  230 => 136,  226 => 131,  225 => 130,  224 => 129,  223 => 128,  220 => 127,  211 => 118,  209 => 117,  208 => 116,  207 => 115,  206 => 114,  205 => 113,  204 => 112,  198 => 107,  195 => 106,  191 => 100,  190 => 99,  189 => 98,  188 => 97,  187 => 96,  186 => 95,  185 => 94,  184 => 93,  183 => 92,  182 => 91,  181 => 90,  180 => 89,  179 => 88,  178 => 87,  177 => 86,  176 => 85,  175 => 84,  173 => 83,  170 => 82,  166 => 76,  165 => 75,  164 => 74,  163 => 73,  162 => 72,  161 => 71,  160 => 70,  159 => 69,  158 => 68,  157 => 67,  156 => 66,  155 => 65,  154 => 64,  153 => 63,  152 => 62,  151 => 61,  149 => 60,  146 => 59,  142 => 54,  139 => 53,  135 => 40,  134 => 39,  133 => 38,  132 => 37,  131 => 36,  130 => 35,  129 => 34,  126 => 33,  122 => 267,  120 => 264,  116 => 263,  114 => 261,  113 => 260,  112 => 259,  111 => 258,  110 => 257,  109 => 256,  108 => 255,  103 => 251,  101 => 250,  99 => 248,  97 => 152,  95 => 144,  93 => 136,  91 => 127,  89 => 106,  87 => 82,  85 => 59,  83 => 56,  81 => 53,  74 => 47,  70 => 44,  68 => 33,  64 => 31,  61 => 28,  58 => 27,  54 => 25,  52 => 354,  51 => 353,  50 => 352,  49 => 335,  47 => 333,  46 => 331,  22 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Product/ProductPage/product.html.twig", "/opt/bitnami/apache/htdocs/src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/product.html.twig");
    }
}
