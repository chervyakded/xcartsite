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

/* modules/XC/Onboarding/form_model/product/other_options.twig */
class __TwigTemplate_f7d366728ee8bf8ff3fef023dfc988ce6c333f0e4fba8c6d1bdb5ad0b81cede6 extends \XLite\Core\Templating\Twig\Template
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
        // line 1
        echo "<a class=\"options-link\" href=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getOtherOptionsUrl", [], "method"), "html", null, true);
        echo "\" :href=\"optionsUrl\" v-on:click=\"cacheProductData()\"><span>";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Add other options"]), "html", null, true);
        echo "</span></a>&nbsp;";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["(like categories, weight, description, color)"]), "html", null, true);
    }

    public function getTemplateName()
    {
        return "modules/XC/Onboarding/form_model/product/other_options.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<a class=\"options-link\" href=\"{{ this.getOtherOptionsUrl() }}\" :href=\"optionsUrl\" v-on:click=\"cacheProductData()\"><span>{{ t('Add other options') }}</span></a>&nbsp;{{ t('(like categories, weight, description, color)') }}", "modules/XC/Onboarding/form_model/product/other_options.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\admin\\modules\\XC\\Onboarding\\form_model\\product\\other_options.twig");
    }
}
