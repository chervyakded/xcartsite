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

/* modules/XC/CustomProductTabs/tab.twig */
class __TwigTemplate_11a8692c8c0eb81aa2862aeef6bb5d6a6b140f550878867ac237d37df0145e30 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"product-description\">";
        // line 5
        echo $this->getAttribute($this->getAttribute(($context["this"] ?? null), "tab", []), "content", []);
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "modules/XC/CustomProductTabs/tab.twig";
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
 # \"Tabs\" tab
 #}

<div class=\"product-description\">{{ this.tab.content|raw }}</div>", "modules/XC/CustomProductTabs/tab.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\modules\\XC\\CustomProductTabs\\tab.twig");
    }
}
