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

/* @PrestaShop/Admin/Sell/Customer/Blocks/View/personal_information.html.twig */
class __TwigTemplate_b0637d076fe5e93012ce55c24b2f43444aeb93bb7a28289c0f5fb8d54e0e1cd5 extends \Twig\Template
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
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">person</i>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "firstName", []), "html", null, true);
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "lastName", []), "html", null, true);
        // line 31
        echo twig_escape_filter($this->env, sprintf("[%06d]", $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "customerId", []), "value", [])), "html", null, true);
        echo "
    -
    <a href=\"mailto:";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "email", []), "html", null, true);
        echo "\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "email", []), "html", null, true);
        echo "
    </a>

    <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminCustomers", true, ["id_customer" => $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "customerId", []), "value", []), "updatecustomer" => 1, "back" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "uri", [])]), "html", null, true);
        echo "\"
       class=\"tooltip-link float-right\"
       data-toggle=\"pstooltip\"
       title=\"\"
       data-placement=\"top\"
       data-original-title=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit", [], "Admin.Actions"), "html", null, true);
        echo "\"
    >
      <i class=\"material-icons\">edit</i>
    </a>
  </h3>
  <div class=\"card-body\">
    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Social Title", [], "Admin.Global"), "html", null, true);
        echo "
      </div>
      <div class=\"col-8\">";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "socialTitle", []), "html", null, true);
        echo "
      </div>
    </div>

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Age", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
      </div>
      <div class=\"col-8\">";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "birthday", []), "html", null, true);
        echo "
      </div>
    </div>

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Registration Date", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
      </div>
      <div class=\"col-8\">";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "registrationDate", []), "html", null, true);
        echo "
      </div>
    </div>

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Last Visit", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
      </div>
      <div class=\"col-8\">";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "lastVisitDate", []), "html", null, true);
        echo "
      </div>
    </div>";
        // line 84
        if ($this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "rankBySales", [])) {
            // line 85
            echo "      <div class=\"row mb-1\">
        <div class=\"col-4 text-right\">";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Best Customer Rank", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
        </div>
        <div class=\"col-8\">";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "rankBySales", []), "html", null, true);
            echo "
        </div>
      </div>";
        }
        // line 95
        if (($context["isMultistoreEnabled"] ?? null)) {
            // line 96
            echo "      <div class=\"row mb-1\">
        <div class=\"col-4 text-right\">";
            // line 98
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shop", [], "Admin.Global"), "html", null, true);
            echo "
        </div>
        <div class=\"col-8\">";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "shopName", []), "html", null, true);
            echo "
        </div>
      </div>";
        }
        // line 105
        echo "
    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Language", [], "Admin.Global"), "html", null, true);
        echo "
      </div>
      <div class=\"col-8\">";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "languageName", []), "html", null, true);
        echo "
      </div>
    </div>

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Registrations", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
      </div>
      <div class=\"col-8\">";
        // line 120
        $context["isNewsletterSubscribed"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "subscriptions", []), "newsletterSubscribed", []);
        // line 121
        $context["isPartnerOffersSubscribed"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "subscriptions", []), "partnerOffersSubscribed", []);
        // line 122
        echo "
        <span class=\"badge badge-";
        // line 123
        if (($context["isNewsletterSubscribed"] ?? null)) {
            echo "success";
        } else {
            echo "danger";
        }
        echo " rounded pt-0 pb-0\">
          <i class=\"material-icons\">";
        // line 124
        if (($context["isNewsletterSubscribed"] ?? null)) {
            echo "check";
        } else {
            echo "cancel";
        }
        echo "</i>";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Newsletter", [], "Admin.Global"), "html", null, true);
        echo "
        </span>

        <span class=\"badge badge-";
        // line 128
        if (($context["isPartnerOffersSubscribed"] ?? null)) {
            echo "success";
        } else {
            echo "danger";
        }
        echo " rounded pt-0 pb-0\">
          <i class=\"material-icons\">";
        // line 129
        if (($context["isPartnerOffersSubscribed"] ?? null)) {
            echo "check";
        } else {
            echo "cancel";
        }
        echo "</i>";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Partner offers", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
        </span>
      </div>
    </div>

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Latest Update", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
      </div>
      <div class=\"col-8\">";
        // line 140
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "lastUpdateDate", []), "html", null, true);
        echo "
      </div>
    </div>

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status", [], "Admin.Global"), "html", null, true);
        echo "
      </div>
      <div class=\"col-8\">";
        // line 149
        $context["isCustomerActive"] = $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "active", []);
        // line 150
        echo "
        <span class=\"badge badge-";
        // line 151
        if (($context["isCustomerActive"] ?? null)) {
            echo "success";
        } else {
            echo "danger";
        }
        echo " rounded pt-0 pb-0\">";
        // line 152
        if (($context["isCustomerActive"] ?? null)) {
            // line 153
            echo "            <i class=\"material-icons\">check</i>";
            // line 154
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Active", [], "Admin.Global"), "html", null, true);
        } else {
            // line 156
            echo "            <i class=\"material-icons\">cancel</i>";
            // line 157
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Inactive", [], "Admin.Global"), "html", null, true);
        }
        // line 159
        echo "        </span>
      </div>
    </div>";
        // line 163
        if ($this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "guest", [])) {
            // line 164
            echo "      <div class=\"row mb-1\">
        <div class=\"col-4 text-right\">";
            // line 166
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This customer is registered as a Guest.", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
        </div>
        <div class=\"col-8\">";
            // line 169
            if ($this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "generalInformation", []), "customerBySameEmailExists", [])) {
                // line 170
                echo "            <p>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("A registered customer account using the defined email address already exists. ", [], "Admin.Orderscustomers.Notification"), "html", null, true);
                echo "</p>";
            } else {
                // line 172
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["transferGuestAccountForm"] ?? null), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_customers_transform_guest_to_customer", ["customerId" => $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "customerId", []), "value", [])])]);
                echo "
              <button class=\"btn btn-primary btn-sm\">";
                // line 174
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Transform to a customer account", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "
              </button>

              <p class=\"small-text\">";
                // line 177
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This feature generates a random password before sending an email to your customer.", [], "Admin.Orderscustomers.Help"), "html", null, true);
                echo "</p>";
                // line 178
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["transferGuestAccountForm"] ?? null), 'form_end');
            }
            // line 180
            echo "        </div>
      </div>";
        }
        // line 183
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Customer/Blocks/View/personal_information.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 183,  305 => 180,  302 => 178,  299 => 177,  293 => 174,  289 => 172,  284 => 170,  282 => 169,  277 => 166,  274 => 164,  272 => 163,  268 => 159,  265 => 157,  263 => 156,  260 => 154,  258 => 153,  256 => 152,  249 => 151,  246 => 150,  244 => 149,  239 => 146,  231 => 140,  226 => 137,  217 => 130,  210 => 129,  202 => 128,  196 => 125,  189 => 124,  181 => 123,  178 => 122,  176 => 121,  174 => 120,  169 => 117,  161 => 111,  156 => 108,  152 => 105,  146 => 101,  141 => 98,  138 => 96,  136 => 95,  130 => 90,  125 => 87,  122 => 85,  120 => 84,  115 => 80,  110 => 77,  102 => 71,  97 => 68,  89 => 62,  84 => 59,  76 => 53,  71 => 50,  61 => 42,  53 => 37,  47 => 34,  44 => 33,  39 => 31,  37 => 30,  35 => 29,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Customer/Blocks/View/personal_information.html.twig", "/opt/bitnami/apache/htdocs/src/PrestaShopBundle/Resources/views/Admin/Sell/Customer/Blocks/View/personal_information.html.twig");
    }
}
