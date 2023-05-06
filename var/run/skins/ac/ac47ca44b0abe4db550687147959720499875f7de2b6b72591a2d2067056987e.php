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

/* modules/XC/Onboarding/online_widgets/xpayments.twig */
class __TwigTemplate_140e5dc2f3507911030c2859ad7ccc0b84c7b571d372e337185e8e7ebd872183 extends \XLite\Core\Templating\Twig\Template
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
<xlite-onboarding-xpayments-card inline-template>
    <div class=\"online online-xpayments\" :class=\"classes\">

        <div class=\"image\">
            <img src=\"";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["modules/XPay/XPaymentsCloud/method_icon.png"]), "html", null, true);
        echo "\" alt=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["X-Payments Cloud connector"]), "html", null, true);
        echo "\" title=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["X-Payments Cloud connector"]), "html", null, true);
        echo "\" />
        </div>

        <div class=\"note\">
            ";
        // line 13
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Process and store credit cards right on your website, accept recurring payments and reorders."]), "html", null, true);
        echo "
        </div>

        ";
        // line 16
        if ($this->getAttribute(($context["this"] ?? null), "isConfigured", [], "method")) {
            // line 17
            echo "            <div class=\"switcher";
            if ($this->getAttribute(($context["this"] ?? null), "isMethodEnabled", [], "method")) {
                echo " enabled";
            }
            echo "\">
                <span class=\"inactive\">";
            // line 18
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["checkbox.onoff.off"]), "html", null, true);
            echo "</span>
                <a href=\"#\" @click.prevent=\"switchPaypalMethod(";
            // line 19
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getMethodId", [], "method"), "html", null, true);
            echo ", \$event)\">
                    <div>
                        <span class=\"fa fa-check\"></span>
                    </div>
                </a>
                <span class=\"active\">";
            // line 24
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["checkbox.onoff.on"]), "html", null, true);
            echo "</span>
            </div>
        ";
        } else {
            // line 27
            echo "            <div class=\"button\">
                ";
            // line 28
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Button\\Link", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Launch"]), "location" => $this->getAttribute(($context["this"] ?? null), "getMethodSettingsUrl", [], "method"), "blank" => 1]]), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 31
        echo "    </div>
</xlite-onboarding-xpayments-card>";
    }

    public function getTemplateName()
    {
        return "modules/XC/Onboarding/online_widgets/xpayments.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 31,  84 => 28,  81 => 27,  75 => 24,  67 => 19,  63 => 18,  56 => 17,  54 => 16,  48 => 13,  37 => 9,  30 => 4,);
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

<xlite-onboarding-xpayments-card inline-template>
    <div class=\"online online-xpayments\" :class=\"classes\">

        <div class=\"image\">
            <img src=\"{{ asset('modules/XPay/XPaymentsCloud/method_icon.png') }}\" alt=\"{{ t('X-Payments Cloud connector') }}\" title=\"{{ t('X-Payments Cloud connector') }}\" />
        </div>

        <div class=\"note\">
            {{ t('Process and store credit cards right on your website, accept recurring payments and reorders.') }}
        </div>

        {% if this.isConfigured() %}
            <div class=\"switcher{% if this.isMethodEnabled() %} enabled{% endif %}\">
                <span class=\"inactive\">{{ t('checkbox.onoff.off') }}</span>
                <a href=\"#\" @click.prevent=\"switchPaypalMethod({{ this.getMethodId() }}, \$event)\">
                    <div>
                        <span class=\"fa fa-check\"></span>
                    </div>
                </a>
                <span class=\"active\">{{ t('checkbox.onoff.on') }}</span>
            </div>
        {% else %}
            <div class=\"button\">
                {{ widget('\\\\XLite\\\\View\\\\Button\\\\Link', label=t('Launch'), location=this.getMethodSettingsUrl(), blank=1) }}
            </div>
        {% endif %}
    </div>
</xlite-onboarding-xpayments-card>", "modules/XC/Onboarding/online_widgets/xpayments.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\admin\\modules\\XC\\Onboarding\\online_widgets\\xpayments.twig");
    }
}
