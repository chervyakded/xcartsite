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

/* modules/XC/Onboarding/form_model/type/template.twig */
class __TwigTemplate_e575de040c6f0f93fe5bb3fb89b14933f902456f49be335824bb713b22f44f50 extends \XLite\Core\Templating\Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'xc_onboarding_template_widget' => [$this, 'block_xc_onboarding_template_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $this->displayBlock('xc_onboarding_template_widget', $context, $blocks);
    }

    public function block_xc_onboarding_template_widget($context, array $blocks = [])
    {
        $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath(        // line 2
($context["template"] ?? null));        list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
        if ($templateWrapperText) {
echo $templateWrapperStart;
}

        $this->loadTemplate(($context["template"] ?? null), "modules/XC/Onboarding/form_model/type/template.twig", 2)->display($context);
        if ($templateWrapperText) {
            echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
        }
    }

    public function getTemplateName()
    {
        return "modules/XC/Onboarding/form_model/type/template.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% block xc_onboarding_template_widget -%}
  {% include template %}
{%- endblock xc_onboarding_template_widget %}
", "modules/XC/Onboarding/form_model/type/template.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\admin\\modules\\XC\\Onboarding\\form_model\\type\\template.twig");
    }
}
