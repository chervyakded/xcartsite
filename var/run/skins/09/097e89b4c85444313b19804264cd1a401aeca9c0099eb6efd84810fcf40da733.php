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

/* layout/content/main.center.twig */
class __TwigTemplate_7d3f8baf48aa00edec4d95aca6a14a4fac7b5cb9f52ac4b69380669b50e1dff6 extends \XLite\Core\Templating\Twig\Template
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
<div id=\"main-wrapper\">
  ";
        // line 8
        if ($this->getAttribute(($context["this"] ?? null), "isForceChangePassword", [], "method")) {
            // line 9
            echo "  <div id=\"main\" class=\"force-change-password-section clearfix\">
      ";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Popup\\ForceChangePassword"]]), "html", null, true);
            echo "
  </div>
  ";
        } else {
            // line 13
            echo "  <div id=\"main\" class=\"clearfix\">
    <div class=\"flex-container\">
        ";
            // line 15
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "layout.main.center"]]), "html", null, true);
            echo "
    </div>
  </div>
  ";
        }
        // line 19
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "layout/content/main.center.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 19,  49 => 15,  45 => 13,  39 => 10,  36 => 9,  34 => 8,  30 => 6,);
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
 # Center zone
 #
 # @ListChild (list=\"layout.main\", weight=\"400\")
 #}

<div id=\"main-wrapper\">
  {% if this.isForceChangePassword() %}
  <div id=\"main\" class=\"force-change-password-section clearfix\">
      {{ widget('\\\\XLite\\\\View\\\\Popup\\\\ForceChangePassword') }}
  </div>
  {% else %}
  <div id=\"main\" class=\"clearfix\">
    <div class=\"flex-container\">
        {{ widget_list('layout.main.center') }}
    </div>
  </div>
  {% endif %}
</div>
", "layout/content/main.center.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\layout\\content\\main.center.twig");
    }
}
