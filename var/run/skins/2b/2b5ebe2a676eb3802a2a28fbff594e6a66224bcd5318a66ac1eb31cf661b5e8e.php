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

/* modules/QSL/FlyoutCategoriesMenu/parts/category.link.twig */
class __TwigTemplate_c13e527d621e13a19c0f3e430872b93046c4a45c0e8561b0ea1dbe685f625492 extends \XLite\Core\Templating\Twig\Template
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
        echo "<a href=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "_category", []), "link", []), "html", null, true);
        echo "\" ";
        echo $this->getAttribute(($context["this"] ?? null), "displayLinkClass", [0 => ($context["idx"] ?? null), 1 => $this->getAttribute(($context["loop"] ?? null), "length", []), 2 => $this->getAttribute(($context["this"] ?? null), "_category", [])], "method");
        echo " title=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "_category", []), "name", []), "html", null, true);
        echo "\">
  <span class=\"category-label\">";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "_category", []), "name", []), "html", null, true);
        if ($this->getAttribute(($context["this"] ?? null), "isShowProductNum", [], "method")) {
            echo " (";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "_category", []), "productsCount", []), "html", null, true);
            echo ")";
        }
        echo "</span>
  ";
        // line 6
        if ($this->getAttribute(($context["this"] ?? null), "isShowTriangle", [])) {
            // line 7
            echo "    <span class=\"icon-triangle\"></span>
  ";
        }
        // line 9
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "modules/QSL/FlyoutCategoriesMenu/parts/category.link.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 9,  50 => 7,  48 => 6,  39 => 5,  30 => 4,);
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
 # Category link
 #}
<a href=\"{{ this._category.link }}\" {{ this.displayLinkClass(idx, loop.length, this._category)|raw }} title=\"{{ this._category.name }}\">
  <span class=\"category-label\">{{ this._category.name }}{% if this.isShowProductNum() %} ({{ this._category.productsCount }}){% endif %}</span>
  {% if this.isShowTriangle %}
    <span class=\"icon-triangle\"></span>
  {% endif %}
</a>
", "modules/QSL/FlyoutCategoriesMenu/parts/category.link.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\modules\\QSL\\FlyoutCategoriesMenu\\parts\\category.link.twig");
    }
}
