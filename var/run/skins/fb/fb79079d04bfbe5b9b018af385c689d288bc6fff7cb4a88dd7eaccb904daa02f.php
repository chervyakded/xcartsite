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

/* modules/XC/Onboarding/wizard_steps/add_product/body.twig */
class __TwigTemplate_b5adef043f908ad842b2aa2cf55fa0622c244a6d3a25c3d9ec62c83d7aceab9e extends \XLite\Core\Templating\Twig\Template
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
<div
  class=\"onboarding-wizard-step step-";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getStepIndex", [], "method"), "html", null, true);
        echo "\"
  v-show=\"isCurrentStep('";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getStepIndex", [], "method"), "html", null, true);
        echo "')\"
  :transition=\"stepTransition\">
  <xlite-wizard-step-add-product inline-template skip-step=\"company_logo\">
    <div class=\"step-contents\">
      <h2 class=\"heading\">";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["onboarding.add_product.heading"]), "html", null, true);
        echo "</h2>
      <div class=\"add-product-form\">
        ";
        // line 13
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\Module\\XC\\Onboarding\\View\\FormModel\\Product\\Simplified"]]), "html", null, true);
        echo "
      </div>
    </div>
  </xlite-wizard-step-add-product>
</div>";
    }

    public function getTemplateName()
    {
        return "modules/XC/Onboarding/wizard_steps/add_product/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 13,  45 => 11,  38 => 7,  34 => 6,  30 => 4,);
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
 # Add product step
 #}

<div
  class=\"onboarding-wizard-step step-{{ this.getStepIndex() }}\"
  v-show=\"isCurrentStep('{{ this.getStepIndex() }}')\"
  :transition=\"stepTransition\">
  <xlite-wizard-step-add-product inline-template skip-step=\"company_logo\">
    <div class=\"step-contents\">
      <h2 class=\"heading\">{{ t('onboarding.add_product.heading') }}</h2>
      <div class=\"add-product-form\">
        {{ widget('XLite\\\\Module\\\\XC\\\\Onboarding\\\\View\\\\FormModel\\\\Product\\\\Simplified') }}
      </div>
    </div>
  </xlite-wizard-step-add-product>
</div>", "modules/XC/Onboarding/wizard_steps/add_product/body.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\admin\\modules\\XC\\Onboarding\\wizard_steps\\add_product\\body.twig");
    }
}
