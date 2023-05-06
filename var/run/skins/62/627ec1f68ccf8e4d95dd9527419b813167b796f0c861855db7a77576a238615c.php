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

/* trial_notice_v2/activate_key.twig */
class __TwigTemplate_1ba2cc5fa4c5c8f404627979c5cddafc210f49b764f865774d0c8fc48d423922 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"activate-key-form\">
  ";
        // line 5
        $this->startForm("XLite\\View\\Form\\Module\\ActivateKey", ["formAction" => "register_key"]);        // line 6
        echo "    <div class=\"addon-key\"><input type=\"text\" name=\"key\" value=\"\" placeholder=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Enter your license key"]), "html", null, true);
        echo "\" class=\"form-control\"/></div>
    ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Button\\Submit", 1 => ["button-size" => "btn-default", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Register"]), "attributes" => ["data-segment-click" => "Register"]]]]), "html", null, true);
        echo "

    ";
        // line 9
        if ($this->getAttribute(($context["this"] ?? null), "isTrialPeriodExpired", [], "method")) {
            // line 10
            echo "    <div class=\"text or\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["or"]), "html", null, true);
            echo "</div>
    ";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Button\\Regular", "label" => "Contact X-Cart", "style" => "purchase-license regular-main-button", "jsCode" => (("window.open('" . $this->getAttribute(($context["this"] ?? null), "getPurchaseURL", [], "method")) . "', '_blank');"), "attributes" => ["data-segment-click" => "Contact X-Cart"]]]), "html", null, true);
            echo "
    ";
        }
        // line 13
        echo "  ";
        $this->endForm();        // line 14
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "trial_notice_v2/activate_key.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  56 => 13,  51 => 11,  46 => 10,  44 => 9,  39 => 7,  34 => 6,  33 => 5,  30 => 4,);
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
 # Trial notice
 #}
<div class=\"activate-key-form\">
  {% form 'XLite\\\\View\\\\Form\\\\Module\\\\ActivateKey' with {formAction: 'register_key'} %}
    <div class=\"addon-key\"><input type=\"text\" name=\"key\" value=\"\" placeholder=\"{{ t('Enter your license key') }}\" class=\"form-control\"/></div>
    {{ widget('XLite\\\\View\\\\Button\\\\Submit', {'button-size': 'btn-default', label: t('Register'), attributes: {'data-segment-click': 'Register'}}) }}

    {% if this.isTrialPeriodExpired() %}
    <div class=\"text or\">{{ t('or') }}</div>
    {{ widget('XLite\\\\View\\\\Button\\\\Regular', label='Contact X-Cart', style='purchase-license regular-main-button', jsCode='window.open(\\'' ~ this.getPurchaseURL() ~ '\\', \\'_blank\\');', attributes={'data-segment-click': 'Contact X-Cart'}) }}
    {% endif %}
  {% endform %}
</div>
", "trial_notice_v2/activate_key.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\admin\\trial_notice_v2\\activate_key.twig");
    }
}
