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

/* modules/XC/Onboarding/wizard/header.twig */
class __TwigTemplate_2dde56d597920824577c67ba0a247494f83aead7e6455daaad93332a80f4c3d9 extends \XLite\Core\Templating\Twig\Template
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
  class=\"onboarding-wizard-header\">
  <div class=\"intro-text\" v-if=\"isCurrentStep('intro')\" transition=\"fade-in-out\">
    <h2 class=\"heading text-capitalize\">";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["onboarding.intro.heading"]), "html", null, true);
        echo "</h2>
    <p class=\"text\">";
        // line 9
        echo $this->getAttribute(($context["this"] ?? null), "getIntroText", [], "method");
        echo "</p>
  </div>
  ";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => $this->getAttribute(($context["this"] ?? null), "getWizardProgressClass", [], "method")]]), "html", null, true);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "modules/XC/Onboarding/wizard/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 11,  40 => 9,  36 => 8,  30 => 4,);
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
 # @ListChild(list=\"onboarding-wizard.header\", weight=\"100\")
 #}

<div
  class=\"onboarding-wizard-header\">
  <div class=\"intro-text\" v-if=\"isCurrentStep('intro')\" transition=\"fade-in-out\">
    <h2 class=\"heading text-capitalize\">{{ t('onboarding.intro.heading') }}</h2>
    <p class=\"text\">{{ this.getIntroText()|raw }}</p>
  </div>
  {{ widget(this.getWizardProgressClass()) }}
</div>", "modules/XC/Onboarding/wizard/header.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\admin\\modules\\XC\\Onboarding\\wizard\\header.twig");
    }
}
