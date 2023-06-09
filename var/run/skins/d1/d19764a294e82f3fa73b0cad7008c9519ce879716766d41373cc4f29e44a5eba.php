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

/* modules/XC/Onboarding/wizard_steps/company_logo/body.twig */
class __TwigTemplate_29f1cef399d54c7b3d5935db27cad3d5490c5c1bcf110d43f6a384e457ed7905 extends \XLite\Core\Templating\Twig\Template
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
  <xlite-wizard-step-company-logo inline-template>
    <div class=\"step-contents\">
      <h2 class=\"heading\">";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Upload your company logo"]), "html", null, true);
        echo "</h2>
      <p class=\"text\">";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Design your online store to fit your brand"]), "html", null, true);
        echo "</p>
      ";
        // line 13
        $this->startForm("XLite\\View\\Form\\SimpleForm", ["formTarget" => "onboarding_wizard", "formAction" => "upload_company_logo", "className" => "logo-upload-form"]);        // line 14
        echo "        ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\FormField\\FileUploader\\Image", "helpMessage" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Click here to upload your logo. Recommended 221x40px (PNG, JPG or SVG)"]), "fieldOnly" => true, "fieldName" => "company_logo", "maxHeight" => "218", "maxWidth" => "398"]]), "html", null, true);
        echo "
      ";
        $this->endForm();        // line 16
        echo "      <div class=\"buttons\">
        ";
        // line 17
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Button\\Regular", "id" => "company_logo-next_button", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Skip this step"]), "style" => "regular-main-button", "attributes" => ["@click" => "skipStep", "data-dirty" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Save and go to the next step"]), "data-pristine" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Skip this step"])], "jsCode" => "null;"]]), "html", null, true);
        echo "
      </div>
    </div>
  </xlite-wizard-step-company-logo>
</div>";
    }

    public function getTemplateName()
    {
        return "modules/XC/Onboarding/wizard_steps/company_logo/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 17,  59 => 16,  54 => 14,  53 => 13,  49 => 12,  45 => 11,  38 => 7,  34 => 6,  30 => 4,);
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
 # Company logo step
 #}

<div
        class=\"onboarding-wizard-step step-{{ this.getStepIndex() }}\"
        v-show=\"isCurrentStep('{{ this.getStepIndex() }}')\"
        :transition=\"stepTransition\">
  <xlite-wizard-step-company-logo inline-template>
    <div class=\"step-contents\">
      <h2 class=\"heading\">{{ t('Upload your company logo') }}</h2>
      <p class=\"text\">{{ t('Design your online store to fit your brand') }}</p>
      {% form 'XLite\\\\View\\\\Form\\\\SimpleForm' with {formTarget: 'onboarding_wizard', formAction: 'upload_company_logo', className: \"logo-upload-form\"} %}
        {{ widget('XLite\\\\View\\\\FormField\\\\FileUploader\\\\Image', helpMessage=t(\"Click here to upload your logo. Recommended 221x40px (PNG, JPG or SVG)\"), fieldOnly=true, fieldName='company_logo', maxHeight=\"218\", maxWidth=\"398\") }}
      {% endform %}
      <div class=\"buttons\">
        {{ widget('XLite\\\\View\\\\Button\\\\Regular', id=\"company_logo-next_button\", label=t(\"Skip this step\"), style='regular-main-button', attributes={'@click': 'skipStep', 'data-dirty': t(\"Save and go to the next step\"), 'data-pristine': t('Skip this step')}, jsCode=\"null;\") }}
      </div>
    </div>
  </xlite-wizard-step-company-logo>
</div>", "modules/XC/Onboarding/wizard_steps/company_logo/body.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\admin\\modules\\XC\\Onboarding\\wizard_steps\\company_logo\\body.twig");
    }
}
