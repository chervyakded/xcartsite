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

/* pager/body.twig */
class __TwigTemplate_3c62841540d6f4754a274ab2244d03c9e1205ebf41835748b8a6c3cf58ca7f1c extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "isPagesListVisible", [], "method")) {
            // line 5
            echo "  <ul class=\"pagination grid-list\">
    ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getPages", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 7
                echo "      <li class=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["page"], "classes", []), "html", null, true);
                echo "\">
        ";
                // line 8
                if ($this->getAttribute($context["page"], "href", [])) {
                    // line 9
                    echo "          <a href=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["page"], "href", []), "html", null, true);
                    echo "\" class=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["page"], "page", []), "html", null, true);
                    echo "\" title=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), [$this->getAttribute($context["page"], "title", [])]), "html", null, true);
                    echo "\">";
                    echo call_user_func_array($this->env->getFunction('t')->getCallable(), [$this->getAttribute($context["page"], "text", [])]);
                    echo "</a>
        ";
                }
                // line 11
                echo "        ";
                if ( !$this->getAttribute($context["page"], "href", [])) {
                    // line 12
                    echo "          <span class=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["page"], "page", []), "html", null, true);
                    echo "\" title=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), [$this->getAttribute($context["page"], "title", [])]), "html", null, true);
                    echo "\">";
                    echo call_user_func_array($this->env->getFunction('t')->getCallable(), [$this->getAttribute($context["page"], "text", [])]);
                    echo "</span>
        ";
                }
                // line 14
                echo "      </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "  </ul>
";
        }
        // line 18
        echo "
";
        // line 19
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "itemsTotal", "type" => "inherited"]]), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "pager/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 19,  82 => 18,  78 => 16,  71 => 14,  61 => 12,  58 => 11,  46 => 9,  44 => 8,  39 => 7,  35 => 6,  32 => 5,  30 => 4,);
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
 # Pager
 #}
{% if this.isPagesListVisible() %}
  <ul class=\"pagination grid-list\">
    {% for page in this.getPages() %}
      <li class=\"{{ page.classes }}\">
        {% if page.href %}
          <a href=\"{{ page.href }}\" class=\"{{ page.page }}\" title=\"{{ t(page.title) }}\">{{ t(page.text)|raw }}</a>
        {% endif %}
        {% if not page.href %}
          <span class=\"{{ page.page }}\" title=\"{{ t(page.title) }}\">{{ t(page.text)|raw }}</span>
        {% endif %}
      </li>
    {% endfor %}
  </ul>
{% endif %}

{{ widget_list('itemsTotal', type='inherited') }}
", "pager/body.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\pager\\body.twig");
    }
}
