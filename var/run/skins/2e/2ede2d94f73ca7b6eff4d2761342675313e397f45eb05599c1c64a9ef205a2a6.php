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

/* header/parts/parts.css/css_resource.twig */
class __TwigTemplate_eb806fa555edc2759f50719dd1a96dfc4fc085a8f9c7b990518cdedbe9577853 extends \XLite\Core\Templating\Twig\Template
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
        // line 5
        if ($this->getAttribute(($context["this"] ?? null), "async", [])) {
            // line 6
            echo "  <link href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "url", []), "html", null, true);
            echo "\"
        rel=\"preload\"
        as=\"style\" onload='this.onload=null;this.rel=\"stylesheet\"'
        type=\"text/css\"
        media=\"";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "media", []), "html", null, true);
            echo "\" />
";
        } else {
            // line 12
            echo "  <link href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "url", []), "html", null, true);
            echo "\"
        rel=\"stylesheet\"
        type=\"text/css\"
        media=\"";
            // line 15
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "media", []), "html", null, true);
            echo "\" />
";
        }
    }

    public function getTemplateName()
    {
        return "header/parts/parts.css/css_resource.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 15,  48 => 12,  43 => 10,  35 => 6,  33 => 5,  30 => 4,);
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
 # CSS resource
 #}

{% if this.async %}
  <link href=\"{{ this.url }}\"
        rel=\"preload\"
        as=\"style\" onload='this.onload=null;this.rel=\"stylesheet\"'
        type=\"text/css\"
        media=\"{{ this.media }}\" />
{% else %}
  <link href=\"{{ this.url }}\"
        rel=\"stylesheet\"
        type=\"text/css\"
        media=\"{{ this.media }}\" />
{% endif %}
", "header/parts/parts.css/css_resource.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\header\\parts\\parts.css\\css_resource.twig");
    }
}
