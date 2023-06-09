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

/* top_links/version_notes/parts/core.twig */
class __TwigTemplate_17c16fe70ca4282dc9028e244bc056cd2f4aa1afa3b68cfd0afdaeaee6bb4886 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"version\">
  ";
        // line 5
        if ((twig_length_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getEditionName", [], "method")) > 18)) {
            // line 6
            echo "    <div class=\"large\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getEditionName", [], "method"), "html", null, true);
            echo "&nbsp;";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getCurrentCoreVersion", [], "method"), "html", null, true);
            echo "</div>
  ";
        } else {
            // line 8
            echo "    <div>";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getEditionName", [], "method"), "html", null, true);
            echo "</div><div>";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getCurrentCoreVersion", [], "method"), "html", null, true);
            echo "</div>
  ";
        }
        // line 10
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "top_links/version_notes/parts/core.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  43 => 8,  35 => 6,  33 => 5,  30 => 4,);
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
 # \"Core version\" info
 #}
<div class=\"version\">
  {% if this.getEditionName()|length > 18 %}
    <div class=\"large\">{{ this.getEditionName() }}&nbsp;{{ this.getCurrentCoreVersion() }}</div>
  {% else %}
    <div>{{ this.getEditionName() }}</div><div>{{ this.getCurrentCoreVersion() }}</div>
  {% endif %}
</div>
", "top_links/version_notes/parts/core.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\admin\\top_links\\version_notes\\parts\\core.twig");
    }
}
