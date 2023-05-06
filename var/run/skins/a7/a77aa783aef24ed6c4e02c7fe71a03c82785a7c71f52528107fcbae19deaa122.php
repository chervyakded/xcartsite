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

/* modules/CDev/GoogleAnalytics/ga_actions.twig */
class __TwigTemplate_c676b88f92d8affddb8470de37228d51f585ae0eaf96f10a2bdab58301e25435 extends \XLite\Core\Templating\Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getActions", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["actionData"]) {
            // line 6
            echo "  ";
            if (twig_length_filter($this->env, $context["actionData"])) {
                // line 7
                echo "    <script data-ga-ec-action=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["actionData"], "html", null, true);
                echo "\"></script>
  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actionData'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "modules/CDev/GoogleAnalytics/ga_actions.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 7,  37 => 6,  33 => 5,  30 => 4,);
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
 # GA Actions registration (Universal Analytics)
 #}

{% for actionData in this.getActions() %}
  {% if actionData|length %}
    <script data-ga-ec-action=\"{{ actionData }}\"></script>
  {% endif %}
{% endfor %}
", "modules/CDev/GoogleAnalytics/ga_actions.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\common\\modules\\CDev\\GoogleAnalytics\\ga_actions.twig");
    }
}
