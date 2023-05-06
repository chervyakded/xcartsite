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

/* modules/CDev/GoogleAnalytics/ga_tag.twig */
class __TwigTemplate_9cd0273b09934014d0f02a224adec56c2f8f315bdf27c3af17c6cce987796710 extends \XLite\Core\Templating\Twig\Template
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
        echo $this->getAttribute(($context["this"] ?? null), "displayTag", [], "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "modules/CDev/GoogleAnalytics/ga_tag.twig";
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
        return new Source("{{ this.displayTag()|raw }}
", "modules/CDev/GoogleAnalytics/ga_tag.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\common\\modules\\CDev\\GoogleAnalytics\\ga_tag.twig");
    }
}
