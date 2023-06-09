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

/* C:\OpenServer\domains\xcartsite\skins\customer\layout\header\mobile_header_parts\language_menu.twig */
class __TwigTemplate_3b7bab4e26efcfacd021b9cf8651984856d75900b27fe9aa58b27ffdee47f392 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "isNeedLanguageDropDown", [], "method")) {
            // line 8
            echo "  <li class=\"dropdown mobile_header-language_menu\">
    <a id=\"language_menu\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
        <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" width=\"20px\" height=\"20px\" viewBox=\"-8 12 20 20\" enable-background=\"new -8 12 20 20\" xml:space=\"preserve\">
            <path display=\"none\" fill=\"none\" d=\"M-8,12h20v20H-8V12z\"/>
            <path d=\"M2,13.7c-4.6,0-8.3,3.7-8.3,8.3s3.7,8.3,8.3,8.3c4.6,0,8.3-3.7,8.3-8.3S6.6,13.7,2,13.7z M7.8,18.7H5.3c-0.3-1-0.6-2-1.2-3
C5.7,16.2,7,17.3,7.8,18.7z M2,15.4c0.7,1,1.2,2.1,1.6,3.3H0.4C0.8,17.5,1.3,16.4,2,15.4z M-4.4,23.7c-0.1-0.5-0.2-1.1-0.2-1.7
s0.1-1.1,0.2-1.7h2.8c-0.1,0.5-0.1,1.1-0.1,1.7s0,1.1,0.1,1.7H-4.4z M-3.8,25.3h2.5c0.3,1,0.6,2,1.2,3C-1.7,27.8-3,26.7-3.8,25.3z
 M-1.3,18.7h-2.5c0.8-1.4,2.1-2.4,3.6-3C-0.7,16.6-1,17.6-1.3,18.7z M2,28.6c-0.7-1-1.2-2.1-1.6-3.3h3.2C3.2,26.5,2.7,27.6,2,28.6z
 M4,23.7H0C0,23.1-0.1,22.6-0.1,22S0,20.9,0,20.3H4C4,20.9,4.1,21.4,4.1,22S4,23.1,4,23.7z M4.2,28.3c0.5-0.9,0.9-1.9,1.2-3h2.5
C7,26.7,5.7,27.8,4.2,28.3z M5.6,23.7c0.1-0.5,0.1-1.1,0.1-1.7s0-1.1-0.1-1.7h2.8c0.1,0.5,0.2,1.1,0.2,1.7s-0.1,1.1-0.2,1.7H5.6z\"/>
         </svg>
    </a>
    <ul id=\"language_box\" class=\"dropdown-menu\">
      <li role=\"presentation\">
          <ul class=\"language_list\">
              ";
            // line 23
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "header.language.menu"]]), "html", null, true);
            echo "
          </ul>
      </li>
    </ul>
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\layout\\header\\mobile_header_parts\\language_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 23,  35 => 8,  33 => 7,  30 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\layout\\header\\mobile_header_parts\\language_menu.twig", "");
    }
}
