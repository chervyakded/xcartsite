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

/* header/parts/meta_compat_ie.twig */
class __TwigTemplate_9b9c827b6ec53712e254f2f2c268a1ef9da6e7dd77e48297ef9effc1252081dc extends \XLite\Core\Templating\Twig\Template
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
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge\" />
";
    }

    public function getTemplateName()
    {
        return "header/parts/meta_compat_ie.twig";
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
 # @ListChild (list=\"head\", weight=\"800\")
 #}

<meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge\" />
", "header/parts/meta_compat_ie.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\header\\parts\\meta_compat_ie.twig");
    }
}
