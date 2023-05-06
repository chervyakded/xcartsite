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

/* header/parts/meta_viewport.twig */
class __TwigTemplate_0ca01a30e0b050d0434140bdcb4fa11a86f0921e4b5de3865d7620fb70017e6d extends \XLite\Core\Templating\Twig\Template
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
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
";
    }

    public function getTemplateName()
    {
        return "header/parts/meta_viewport.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,);
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
 # Head list children
 #
 # @ListChild (list=\"head\", weight=\"650\")
 #}

<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
", "header/parts/meta_viewport.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\header\\parts\\meta_viewport.twig");
    }
}
