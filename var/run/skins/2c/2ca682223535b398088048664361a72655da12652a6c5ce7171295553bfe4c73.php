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

/* C:\OpenServer\domains\xcartsite\skins\admin\order\history\parts\event_details_action.twig */
class __TwigTemplate_8f3d01bd6e658bc351fd268e47876e183d9c5b6e91c36a205affcad29e2fc348 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "isDisplayDetails", [0 => $this->getAttribute(($context["this"] ?? null), "event", [])], "method")) {
            // line 7
            echo "  <li class=\"details\">
    <div class=\"action\">
      <i data-interval=\"0\" data-toggle=\"collapse\" id=\"event-";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "event", []), "eventId", []), "html", null, true);
            echo "-action\" data-target=\".event-";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "event", []), "eventId", []), "html", null, true);
            echo "\" class=\"fa fa-plus-square-o\"></i>
    </div>
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\xcartsite\\skins\\admin\\order\\history\\parts\\event_details_action.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 9,  32 => 7,  30 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "C:\\OpenServer\\domains\\xcartsite\\skins\\admin\\order\\history\\parts\\event_details_action.twig", "");
    }
}
