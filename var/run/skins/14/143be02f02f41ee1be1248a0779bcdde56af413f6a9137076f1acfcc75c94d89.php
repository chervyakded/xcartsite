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

/* product/search/simple-search-parts/input.twig */
class __TwigTemplate_ab58d58ddd61592fcd4cd6d4915ce8c7a3406c4cf1273989493810bd3c7e3f19 extends \XLite\Core\Templating\Twig\Template
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
        // line 6
        echo "
";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\FormField\\Input\\Text\\SearchBox", "fieldName" => "substring", "fieldOnly" => "true"]]), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "product/search/simple-search-parts/input.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  30 => 6,);
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
 # Main element (input)
 #
 # @ListChild (list=\"product.simple-search-form.simple-box.elements\", weight=\"10\")
 #}

{{ widget('\\\\XLite\\\\View\\\\FormField\\\\Input\\\\Text\\\\SearchBox', fieldName='substring', fieldOnly='true') }}
", "product/search/simple-search-parts/input.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\product\\search\\simple-search-parts\\input.twig");
    }
}
