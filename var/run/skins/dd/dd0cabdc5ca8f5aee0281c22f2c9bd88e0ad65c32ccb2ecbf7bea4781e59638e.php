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

/* layout/content/category_banner.twig */
class __TwigTemplate_56a536be4680c2332b5800098c143a95653e956982129ff61f4c48e14a9af4cc extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"category-banner\">
    <div class=\"category-banner_image-wrapper\">
        <div class=\"additional-wrapper\">
            ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Image", "lazyLoad" => true, "image" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "category", []), "banner", []), "centerImage" => "1", "alt" => (($this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "category", []), "banner", []), "alt", [])) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "category", []), "banner", []), "alt", [])) : ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "category", []), "name", [])))]]), "html", null, true);
        echo "
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "layout/content/category_banner.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 7,  30 => 4,);
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
 # Category banner
 #}
<div class=\"category-banner\">
    <div class=\"category-banner_image-wrapper\">
        <div class=\"additional-wrapper\">
            {{ widget('\\\\XLite\\\\View\\\\Image', lazyLoad=true, image=this.category.banner, centerImage='1', alt=this.category.banner.alt ?: this.category.name) }}
        </div>
    </div>
</div>
", "layout/content/category_banner.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\layout\\content\\category_banner.twig");
    }
}
