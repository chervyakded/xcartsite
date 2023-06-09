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

/* C:\OpenServer\domains\xcartsite\skins\customer\layout\header\mobile_header_parts\account_menu.twig */
class __TwigTemplate_b71093283be2bf8024a328712755b6dd132fd8f05cc54ed7c971114bfff28a1c extends \XLite\Core\Templating\Twig\Template
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
<li class=\"dropdown mobile_header-account_menu\">
  <a id=\"account_menu\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
      <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" width=\"20px\" height=\"20px\" viewBox=\"230 250 20 20\" enable-background=\"new 230 250 20 20\" xml:space=\"preserve\">
        <g transform=\"translate(0.000000,500.000000) scale(0.100000,-0.100000)\">
            <path d=\"M2391.6,2479.3c-9-1.3-15.5-4.2-20.4-9c-4.5-4.5-6.6-8.6-8-15.5c-1.2-6.3-0.5-17.6,1.8-26.5c1-3.7,0.9-3.8-0.3-5.2
                c-1.5-1.7-2-3.4-1.8-6.6c0.4-5.2,2.6-9.4,5.6-10.9c1.2-0.6,1.8-1.1,1.8-1.5c0-4,5.8-15.7,8.7-17.7c0.8-0.5,0.8-0.8,0.6-8.7
                c-0.2-9.7-0.2-9.9-4.3-13.7c-3-2.8-8.7-5.7-17.5-8.9c-8.8-3.2-12.8-4.9-17-7c-9.7-4.9-15.6-10.5-18.5-17.9c-1.1-2.6-2.1-7-2.1-8.8
                v-1.1h79.8h79.8l-0.2,1.8c-1,7.9-4.5,14.4-10.6,19.8c-4.6,4-11.7,7.6-24.4,12.3c-14.6,5.5-20.3,8.8-23.1,13.5c-1,1.8-1,1.8-1.1,9.9
                l-0.2,8.1l1.5,1.6c3,3.2,6.2,9.7,7.4,15.1c0.6,2.4,0.7,2.6,2.1,3.2c2.8,1.2,4.7,4.6,5.6,9.8c0.6,3.2,0,5.8-1.7,7.7l-1.2,1.4
                l1.3,4.7c1.9,6.9,2.4,10.4,2.7,16.8c0.3,8.6-0.8,13.3-4.3,18.7c-2.6,4-7.2,6.9-12.3,8c-1.9,0.4-2.6,0.8-4.1,2.2
                c-2,1.9-4.7,3.3-8.2,4.2C2405.6,2479.8,2396.4,2480,2391.6,2479.3z\"/>
        </g>
       </svg>
  </a>
  <ul id=\"account_box\" class=\"dropdown-menu\">
    <li role=\"presentation\">
      ";
        // line 23
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "layout.responsive.account"]]), "html", null, true);
        echo "
    </li>
  </ul>
</li>";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\layout\\header\\mobile_header_parts\\account_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 23,  30 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\layout\\header\\mobile_header_parts\\account_menu.twig", "");
    }
}
