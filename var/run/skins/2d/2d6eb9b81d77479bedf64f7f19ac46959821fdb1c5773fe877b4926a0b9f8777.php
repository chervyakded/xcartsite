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

/* main.twig */
class __TwigTemplate_e75e09f8b944daefd5c3f794b4761e95bc21baf72d23d81d4fb7e3b2b9a7b017 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "isDeveloperMode", [], "method")) {
            // line 6
            echo "  <div id=\"profiler-messages\"></div>
";
        }
        // line 8
        echo "
";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "layout.slidebar"]]), "html", null, true);
        echo "


<div id=\"page-wrapper\">
  <div id=\"page\" class=\"";
        // line 13
        if ($this->getAttribute(($context["this"] ?? null), "isForceChangePassword", [], "method")) {
            echo "force-change-password-page";
        }
        echo "\">
    ";
        // line 14
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "layout.main"]]), "html", null, true);
        echo "
  </div>
  ";
        // line 16
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "layout.footer"]]), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 16,  55 => 14,  49 => 13,  42 => 9,  39 => 8,  35 => 6,  33 => 5,  30 => 4,);
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
 # Layout
 #}

{% if this.isDeveloperMode() %}
  <div id=\"profiler-messages\"></div>
{% endif %}

{{ widget_list('layout.slidebar') }}


<div id=\"page-wrapper\">
  <div id=\"page\" class=\"{% if this.isForceChangePassword() %}force-change-password-page{% endif %}\">
    {{ widget_list('layout.main') }}
  </div>
  {{ widget_list('layout.footer') }}
</div>
", "main.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\main.twig");
    }
}
