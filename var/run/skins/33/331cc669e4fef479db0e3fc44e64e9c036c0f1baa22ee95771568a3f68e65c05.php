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

/* modules/CDev/GoSocial/button/social_button.twig */
class __TwigTemplate_b520e0513018926523d1beddc83e4a31f1d28b617bee3b95ba2453349494cd37 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"likely\"
     ";
        // line 6
        if ($this->getAttribute(($context["this"] ?? null), "getDataURL", [], "method")) {
            echo "data-url=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getDataURL", [], "method"), "html", null, true);
            echo "\"";
        }
        // line 7
        echo "     ";
        if ($this->getAttribute(($context["this"] ?? null), "getDataTitle", [], "method")) {
            echo "data-title=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getDataTitle", [], "method"), "html", null, true);
            echo "\"";
        }
        // line 8
        echo ">
  <div";
        // line 9
        echo $this->getAttribute(($context["this"] ?? null), "getButtonParamsCode", [], "method");
        echo " class=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getButtonType", [], "method"), "html", null, true);
        echo "\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getButtonLabel", [], "method"), "html", null, true);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/CDev/GoSocial/button/social_button.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 9,  47 => 8,  40 => 7,  34 => 6,  30 => 4,);
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
 # Common button
 #}

<div class=\"likely\"
     {% if this.getDataURL() %}data-url=\"{{ this.getDataURL() }}\"{% endif %}
     {% if this.getDataTitle() %}data-title=\"{{ this.getDataTitle() }}\"{% endif %}
>
  <div{{ this.getButtonParamsCode()|raw }} class=\"{{ this.getButtonType() }}\">{{ this.getButtonLabel() }}</div>
</div>
", "modules/CDev/GoSocial/button/social_button.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\modules\\CDev\\GoSocial\\button\\social_button.twig");
    }
}
