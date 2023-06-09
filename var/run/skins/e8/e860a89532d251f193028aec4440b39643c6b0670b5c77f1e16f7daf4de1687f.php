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

/* layout/content/main.center.left.twig */
class __TwigTemplate_88e8d4641ee2ae47d893e42a87b82bf47454bbdbb0b394dc41715788be1200f7 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "layout", []), "isSidebarFirstVisible", [], "method")) {
            // line 8
            echo "  <div id=\"sidebar-first\" class=\"column sidebar\">
    <div class=\"section\">
      ";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Layout\\Customer\\SidebarFirst", "group" => "sidebar"]]), "html", null, true);
            echo "
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "layout/content/main.center.left.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 10,  35 => 8,  33 => 7,  30 => 6,);
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
 # Left sidebar
 #
 # @ListChild (list=\"layout.main.center\", weight=\"100\")
 #}

{% if this.layout.isSidebarFirstVisible() %}
  <div id=\"sidebar-first\" class=\"column sidebar\">
    <div class=\"section\">
      {{ widget('XLite\\\\View\\\\Layout\\\\Customer\\\\SidebarFirst', group='sidebar') }}
    </div>
  </div>
{% endif %}
", "layout/content/main.center.left.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\layout\\content\\main.center.left.twig");
    }
}
