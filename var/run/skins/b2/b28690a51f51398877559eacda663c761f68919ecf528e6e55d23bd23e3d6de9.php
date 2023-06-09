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

/* modules/Amazon/PayWithAmazon/onboarding/body.twig */
class __TwigTemplate_f6c63b267a1104f4470d7b98115b86ca7c1f613128cf74c1d8011be4f58949f2 extends \XLite\Core\Templating\Twig\Template
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
        // line 4
        echo "
<xlite-onboarding-amazon-pay inline-template>
  <div class=\"online online-amazon\" :class=\"classes\">

    <div class=\"image\">
      <img src=\"";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["modules/Amazon/PayWithAmazon/onboarding/logo.png"]), "html", null, true);
        echo "\" alt=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Pay with Amazon"]), "html", null, true);
        echo "\"
           title=\"";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Pay with Amazon"]), "html", null, true);
        echo "\"/>
    </div>

    <div class=\"note\">
      ";
        // line 14
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Make Amazon’s customers your customers with Amazon Pay."]), "html", null, true);
        echo "
    </div>

    ";
        // line 17
        if ($this->getAttribute(($context["this"] ?? null), "isAmazonConfigured", [], "method")) {
            // line 18
            echo "      <div class=\"switcher";
            if ($this->getAttribute(($context["this"] ?? null), "isAmazonMethodEnabled", [], "method")) {
                echo " enabled";
            }
            echo "\">
        <span class=\"inactive\">";
            // line 19
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["checkbox.onoff.off"]), "html", null, true);
            echo "</span>
        <a href=\"#\" @click.prevent=\"switchAmazonMethod(";
            // line 20
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getMethodId", [], "method"), "html", null, true);
            echo ", \$event)\">
          <div>
            <span class=\"fa fa-check\"></span>
          </div>
        </a>
        <span class=\"active\">";
            // line 25
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["checkbox.onoff.on"]), "html", null, true);
            echo "</span>
      </div>
    ";
        } else {
            // line 28
            echo "      <div class=\"button\">
        <button @click.prevent=\"addMethod(";
            // line 29
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getMethodId", [], "method"), "html", null, true);
            echo ",'";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getMethodSettingsUrl", [], "method"), "html", null, true);
            echo "')\"
                class=\"btn  regular-button\">
          ";
            // line 31
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["Launch"]);
            echo "
        </button>
      </div>
    ";
        }
        // line 35
        echo "  </div>
</xlite-onboarding-amazon-pay>";
    }

    public function getTemplateName()
    {
        return "modules/Amazon/PayWithAmazon/onboarding/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 35,  93 => 31,  86 => 29,  83 => 28,  77 => 25,  69 => 20,  65 => 19,  58 => 18,  56 => 17,  50 => 14,  43 => 10,  37 => 9,  30 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{##
 # Onboarding wizard online payment method block
 #}

<xlite-onboarding-amazon-pay inline-template>
  <div class=\"online online-amazon\" :class=\"classes\">

    <div class=\"image\">
      <img src=\"{{ asset('modules/Amazon/PayWithAmazon/onboarding/logo.png') }}\" alt=\"{{ t('Pay with Amazon') }}\"
           title=\"{{ t('Pay with Amazon') }}\"/>
    </div>

    <div class=\"note\">
      {{ t('Make Amazon’s customers your customers with Amazon Pay.') }}
    </div>

    {% if this.isAmazonConfigured() %}
      <div class=\"switcher{% if this.isAmazonMethodEnabled() %} enabled{% endif %}\">
        <span class=\"inactive\">{{ t('checkbox.onoff.off') }}</span>
        <a href=\"#\" @click.prevent=\"switchAmazonMethod({{ this.getMethodId() }}, \$event)\">
          <div>
            <span class=\"fa fa-check\"></span>
          </div>
        </a>
        <span class=\"active\">{{ t('checkbox.onoff.on') }}</span>
      </div>
    {% else %}
      <div class=\"button\">
        <button @click.prevent=\"addMethod({{ this.getMethodId() }},'{{ this.getMethodSettingsUrl() }}')\"
                class=\"btn  regular-button\">
          {{ t('Launch')|raw }}
        </button>
      </div>
    {% endif %}
  </div>
</xlite-onboarding-amazon-pay>", "modules/Amazon/PayWithAmazon/onboarding/body.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\admin\\modules\\Amazon\\PayWithAmazon\\onboarding\\body.twig");
    }
}
