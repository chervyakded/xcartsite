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

/* file_uploader/parts/menu.message.twig */
class __TwigTemplate_f14dedeb9447ae30ac8e0b347088e7c64c3275f939fec2c28d600830b037c34d extends \XLite\Core\Templating\Twig\Template
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
<li role=\"presentation\" class=\"dropdown-header message\" v-if=\"errorMessage\">
  <i class=\"fa fa-exclamation-triangle\"></i> <span v-html=\"realErrorMessage\">";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getMessage", [], "method"), "html", null, true);
        echo "</span>
</li>
";
    }

    public function getTemplateName()
    {
        return "file_uploader/parts/menu.message.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 8,  30 => 6,);
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
 # File uploader menu
 #
 # @ListChild (list=\"file-uploader.menu\", weight=\"10\")
 #}

<li role=\"presentation\" class=\"dropdown-header message\" v-if=\"errorMessage\">
  <i class=\"fa fa-exclamation-triangle\"></i> <span v-html=\"realErrorMessage\">{{ this.getMessage() }}</span>
</li>
", "file_uploader/parts/menu.message.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\common\\file_uploader\\parts\\menu.message.twig");
    }
}
