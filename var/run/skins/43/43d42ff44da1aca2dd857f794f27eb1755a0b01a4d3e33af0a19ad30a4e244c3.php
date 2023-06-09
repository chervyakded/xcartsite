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

/* modules/XC/Onboarding/wizard/close_button.twig */
class __TwigTemplate_617a766a2077eddfecc75a46f8541d26f4cae0a76add14cfe51b4126b5f0ea82 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"close-button\" @click=\"hideWizard\" title=\"";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Close wizard"]), "html", null, true);
        echo "\"></div>";
    }

    public function getTemplateName()
    {
        return "modules/XC/Onboarding/wizard/close_button.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 5,  30 => 4,);
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
 # @ListChild(list=\"onboarding-wizard.header\", weight=\"50\")
 #}

<div class=\"close-button\" @click=\"hideWizard\" title=\"{{ t('Close wizard') }}\"></div>", "modules/XC/Onboarding/wizard/close_button.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\admin\\modules\\XC\\Onboarding\\wizard\\close_button.twig");
    }
}
