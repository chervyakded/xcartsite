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

/* powered_by.twig */
class __TwigTemplate_6e410bc51755d666010e0f86da631e4d61171e131196d4c89b2248a966ceaa41 extends \XLite\Core\Templating\Twig\Template
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
";
        // line 6
        echo "
<div class=\"powered-by\">
  <p class=\"copyright\">&copy; ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getCompanyYear", [], "method"), "html", null, true);
        echo " ";
        echo $this->getAttribute(($context["this"] ?? null), "getMessage", [], "method");
        echo "</p>
</div>
";
    }

    public function getTemplateName()
    {
        return "powered_by.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 8,  33 => 6,  30 => 4,);
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
 # Powered by box
 #}

{# Modification of this template or removal of the \"Powered by X-Cart\" label are forbidden for X-Cart Free Edition. #}

<div class=\"powered-by\">
  <p class=\"copyright\">&copy; {{ this.getCompanyYear() }} {{ this.getMessage()|raw }}</p>
</div>
", "powered_by.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\admin\\powered_by.twig");
    }
}
