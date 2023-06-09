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

/* C:\OpenServer\domains\xcartsite\skins\admin\browse_server\parts\items.twig */
class __TwigTemplate_7a5b0b9d49df1a7a92a3c0231192d35256ff8ff23a3be69b6e0c36dc308b4d4c extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"browse-selector\">
  <ul class=\"file-system-entries\">
    <li class=\"file-system-entry up-level\">
      ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "displayCommentedData", [0 => $this->getAttribute(($context["this"] ?? null), "getCatalogInfo", [], "method")], "method"), "html", null, true);
        echo "
      <a class=\"type-catalog up-level\"><img src=\"";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["images/spacer.gif"]), "html", null, true);
        echo "\" alt=\"\" />[...]</a>
    </li>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getFSEntries", [], "method"));
        foreach ($context['_seq'] as $context["idx"] => $context["entry"]) {
            // line 13
            echo "      <li class=\"fs-entry\">
        ";
            // line 14
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "browseServer.item", "entry" => $context["entry"]]]), "html", null, true);
            echo "
      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['idx'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    ";
        if ($this->getAttribute(($context["this"] ?? null), "isEmptyCatalog", [], "method")) {
            // line 18
            echo "      <li class=\"empty-catalog\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Directory is empty"]), "html", null, true);
            echo "</li>
    ";
        }
        // line 20
        echo "  </ul>
</div>


";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\xcartsite\\skins\\admin\\browse_server\\parts\\items.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 20,  63 => 18,  60 => 17,  51 => 14,  48 => 13,  44 => 12,  39 => 10,  35 => 9,  30 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "C:\\OpenServer\\domains\\xcartsite\\skins\\admin\\browse_server\\parts\\items.twig", "");
    }
}
