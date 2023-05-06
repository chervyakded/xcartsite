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

/* file_uploader/parts/menu.delete.twig */
class __TwigTemplate_84903ae47cd7e37428da206f288b891dfcea8640da4b909417e9bc84a7c4ee1d extends \XLite\Core\Templating\Twig\Template
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
        if (($this->getAttribute(($context["this"] ?? null), "hasFile", [], "method") && $this->getAttribute(($context["this"] ?? null), "isRemovable", [], "method"))) {
            // line 8
            echo "  <li role=\"presentation\">
    <a role=\"menuitem\" tabindex=\"-1\" href=\"#\" class=\"delete\" @click.prevent=\"toggleDelete\">
      <i class=\"button-icon fa fa-trash-o\"></i>
      <span>";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Delete"]), "html", null, true);
            echo "</span>
    </a>
  </li>
  <li role=\"presentation\" class=\"undelete\">
    <a role=\"menuitem\" tabindex=\"-1\" href=\"#\" class=\"delete\" @click.prevent=\"toggleDelete\">
      <div class=\"diagonal\"></div>
      <i class=\"button-icon fa fa-trash-o\"></i>
      <span>";
            // line 18
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Undelete"]), "html", null, true);
            echo "</span>
    </a>
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "file_uploader/parts/menu.delete.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 18,  40 => 11,  35 => 8,  33 => 7,  30 => 6,);
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
 # @ListChild (list=\"file-uploader.menu\", weight=\"100\")
 #}

{% if this.hasFile() and this.isRemovable() %}
  <li role=\"presentation\">
    <a role=\"menuitem\" tabindex=\"-1\" href=\"#\" class=\"delete\" @click.prevent=\"toggleDelete\">
      <i class=\"button-icon fa fa-trash-o\"></i>
      <span>{{ t('Delete') }}</span>
    </a>
  </li>
  <li role=\"presentation\" class=\"undelete\">
    <a role=\"menuitem\" tabindex=\"-1\" href=\"#\" class=\"delete\" @click.prevent=\"toggleDelete\">
      <div class=\"diagonal\"></div>
      <i class=\"button-icon fa fa-trash-o\"></i>
      <span>{{ t('Undelete') }}</span>
    </a>
  </li>
{% endif %}
", "file_uploader/parts/menu.delete.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\common\\file_uploader\\parts\\menu.delete.twig");
    }
}
