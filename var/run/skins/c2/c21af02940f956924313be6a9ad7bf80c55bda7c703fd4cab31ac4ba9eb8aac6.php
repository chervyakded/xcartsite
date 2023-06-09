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

/* modules/XC/Onboarding/wizard_steps/intro/body.twig */
class __TwigTemplate_65589c240c4129781670092e9ab4f9e8076f283aa04a5871943bfe98c6f6bab1 extends \XLite\Core\Templating\Twig\Template
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
  <div class=\"step-contents\">
    <div class=\"bottom-sticky\" v-if=\"isCurrentStep('";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getStepIndex", [], "method"), "html", null, true);
        echo "')\" transition=\"fade-in-out\">
      ";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Button\\Regular", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["onboarding.intro.next_button"]), "style" => "regular-main-button", "attributes" => ["@click" => "goToNextStep"], "jsCode" => "null;"]]), "html", null, true);
        echo "
      <div class=\"additional-buttons\">
        ";
        // line 13
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Button\\SimpleLink", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["onboarding.intro.later_button"]), "attributes" => ["@click" => "hideWizard"], "jsCode" => "null;"]]), "html", null, true);
        echo "
        ";
        // line 14
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Button\\SimpleLink", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["onboarding.intro.disable_button"]), "attributes" => ["@click" => "disableWizard"], "jsCode" => "null;"]]), "html", null, true);
        echo "
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "modules/XC/Onboarding/wizard_steps/intro/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 14,  53 => 13,  48 => 11,  44 => 10,  38 => 7,  34 => 6,  30 => 4,);
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
 # Intro step
 #}

<div
  class=\"onboarding-wizard-step step-{{ this.getStepIndex() }}\"
  v-show=\"isCurrentStep('{{ this.getStepIndex() }}')\"
  :transition=\"stepTransition\">
  <div class=\"step-contents\">
    <div class=\"bottom-sticky\" v-if=\"isCurrentStep('{{ this.getStepIndex() }}')\" transition=\"fade-in-out\">
      {{ widget('XLite\\\\View\\\\Button\\\\Regular', label=t(\"onboarding.intro.next_button\"), style='regular-main-button', attributes={'@click': 'goToNextStep'}, jsCode=\"null;\") }}
      <div class=\"additional-buttons\">
        {{ widget('XLite\\\\View\\\\Button\\\\SimpleLink', label=t(\"onboarding.intro.later_button\"), attributes={'@click': 'hideWizard'}, jsCode=\"null;\") }}
        {{ widget('XLite\\\\View\\\\Button\\\\SimpleLink', label=t(\"onboarding.intro.disable_button\"), attributes={'@click': 'disableWizard'}, jsCode=\"null;\") }}
      </div>
    </div>
  </div>
</div>", "modules/XC/Onboarding/wizard_steps/intro/body.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\admin\\modules\\XC\\Onboarding\\wizard_steps\\intro\\body.twig");
    }
}
