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

/* file_uploader/parts/menu.view.twig */
class __TwigTemplate_c701289fe2430228a60d356b1ba768579df0cb7c1fe8ef48afdffa39962be871 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "hasView", [], "method")) {
            // line 8
            echo "  <li role=\"presentation\">
    <a role=\"menuitem\" tabindex=\"-1\" href=\"";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getLink", [], "method"), "html", null, true);
            echo "\" target=\"_blank\">
      <i class=\"button-icon svg\">";
            // line 10
            echo call_user_func_array($this->env->getFunction('svg')->getCallable(), [$this->env, $context, "images/icons/pic.svg", "common"]);
            echo "</i>
      <span>";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["View image"]), "html", null, true);
            echo "</span>
    </a>
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "file_uploader/parts/menu.view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 11,  42 => 10,  38 => 9,  35 => 8,  33 => 7,  30 => 6,);
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
 # @ListChild (list=\"file-uploader.menu\", weight=\"20\")
 #}

{% if this.hasView() %}
  <li role=\"presentation\">
    <a role=\"menuitem\" tabindex=\"-1\" href=\"{{ this.getLink() }}\" target=\"_blank\">
      <i class=\"button-icon svg\">{{ svg('images/icons/pic.svg', 'common')|raw }}</i>
      <span>{{ t('View image') }}</span>
    </a>
  </li>
{% endif %}
", "file_uploader/parts/menu.view.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\common\\file_uploader\\parts\\menu.view.twig");
    }
}
