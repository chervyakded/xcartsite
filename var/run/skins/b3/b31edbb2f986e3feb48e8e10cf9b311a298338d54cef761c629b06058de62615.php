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

/* modules/QSL/Banner/banner_section.twig */
class __TwigTemplate_7c64a756e52b1a4555ace5c5c105bb89854a50ffb244ea0cab0f715f1f4265f5 extends \XLite\Core\Templating\Twig\Template
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
        echo "
";
        // line 5
        if ($this->getAttribute(($context["this"] ?? null), "getBannerBoxes", [], "method")) {
            // line 6
            echo "    <div class=\"bannerBox ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "location", []), "html", null, true);
            echo "-box\">
        ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getBannerBoxes", [], "method"));
            foreach ($context['_seq'] as $context["i"] => $context["item"]) {
                // line 8
                echo "            ";
                if ($this->getAttribute(($context["this"] ?? null), "isParallaxBanner", [0 => $context["item"]], "method")) {
                    // line 9
                    echo "                <div class=\"parallax-banner-container\" style=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getBannerHeight", [0 => $context["item"]], "method"), "html", null, true);
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getBannerLineHeight", [0 => $context["item"]], "method"), "html", null, true);
                    echo "\">
                ";
                    // line 10
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\Module\\QSL\\Banner\\View\\Customer\\BannerParallax", "banner_id" => $this->getAttribute($context["item"], "id", [])]]), "html", null, true);
                    echo "
            </div>
        ";
                } else {
                    // line 13
                    echo "            <div class=\"banner_container ";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["item"], "location", []), "html", null, true);
                    // line 14
                    if ((($this->getAttribute($context["item"], "getWidth", [], "method") == 0) && ($this->getAttribute($context["item"], "getHeight", [], "method") == 0))) {
                        echo " dimensions-not-defined";
                    } elseif ((($this->getAttribute($context["item"], "getWidth", [], "method") > 0) && ($this->getAttribute($context["item"], "getHeight", [], "method") > 0))) {
                        echo " dimensions-defined";
                    }
                    // line 15
                    if (($this->getAttribute($context["item"], "getHeight", [], "method") > 0)) {
                        echo " height-defined";
                    } else {
                        echo " height-not-defined";
                    }
                    // line 16
                    if (($this->getAttribute($context["item"], "getWidth", [], "method") > 0)) {
                        echo " width-defined";
                    } else {
                        echo " width-not-defined";
                    }
                    echo "\" style=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getBannerHeight", [0 => $context["item"]], "method"), "html", null, true);
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getBannerWidth", [0 => $context["item"]], "method"), "html", null, true);
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getBannerLineHeight", [0 => $context["item"]], "method"), "html", null, true);
                    echo "\">
            ";
                    // line 17
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\Module\\QSL\\Banner\\View\\Customer\\BannerBox", "banner_id" => $this->getAttribute($context["item"], "id", [])]]), "html", null, true);
                    echo "
            </div>
        ";
                }
                // line 20
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/QSL/Banner/banner_section.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 21,  92 => 20,  86 => 17,  74 => 16,  68 => 15,  62 => 14,  59 => 13,  53 => 10,  47 => 9,  44 => 8,  40 => 7,  35 => 6,  33 => 5,  30 => 4,);
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
# Banner section XLite\\Module\\QSL\\Banner\\View\\Customer\\ABannerSection
#}

{% if this.getBannerBoxes() %}
    <div class=\"bannerBox {{ this.location }}-box\">
        {% for i, item in this.getBannerBoxes() %}
            {% if this.isParallaxBanner(item) %}
                <div class=\"parallax-banner-container\" style=\"{{ this.getBannerHeight(item) }}{{ this.getBannerLineHeight(item) }}\">
                {{ widget('\\\\XLite\\\\Module\\\\QSL\\\\Banner\\\\View\\\\Customer\\\\BannerParallax', banner_id=item.id) }}
            </div>
        {% else %}
            <div class=\"banner_container {{ item.location }}{#
                #}{% if item.getWidth() == 0 and item.getHeight() == 0 %} dimensions-not-defined{% elseif item.getWidth() > 0 and item.getHeight() > 0 %} dimensions-defined{% endif %}{#
                #}{% if item.getHeight() > 0 %} height-defined{% else %} height-not-defined{% endif %}{#
                #}{% if item.getWidth() > 0 %} width-defined{% else %} width-not-defined{% endif %}\" style=\"{{ this.getBannerHeight(item) }}{{ this.getBannerWidth(item) }}{{ this.getBannerLineHeight(item) }}\">
            {{ widget('\\\\XLite\\\\Module\\\\QSL\\\\Banner\\\\View\\\\Customer\\\\BannerBox', banner_id=item.id) }}
            </div>
        {% endif %}
        {% endfor %}
    </div>
{% endif %}
", "modules/QSL/Banner/banner_section.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\modules\\QSL\\Banner\\banner_section.twig");
    }
}
