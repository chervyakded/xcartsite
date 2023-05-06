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

/* modules/QSL/Banner\body.twig */
class __TwigTemplate_c25b390bf4f389c5055dd8f65365331d861cea188eb5d1cb13affc2f3e1d9c39 extends \XLite\Core\Templating\Twig\Template
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
<div
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getBannerInfo", [], "method"));
        foreach ($context['_seq'] as $context["k"] => $context["val"]) {
            // line 7
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["val"], "html", null, true);
            echo "\"
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo ">
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getBannerData", [], "method"));
        foreach ($context['_seq'] as $context["i"] => $context["item"]) {
            // line 11
            echo "        <div class=\"banner_item\">
            ";
            // line 12
            if (($this->getAttribute($context["item"], "getEventCell", [], "method") == "I")) {
                // line 13
                echo "                ";
                if ((($this->getAttribute($context["item"], "maintext", []) || $this->getAttribute($context["item"], "addtext", [])) || $this->getAttribute($context["item"], "getActionButton", [], "method"))) {
                    // line 14
                    echo "                    <div class=\"backgroundImage\">
                        ";
                    // line 15
                    if (($this->getAttribute($context["item"], "link", []) &&  !$this->getAttribute($context["item"], "getActionButton", [], "method"))) {
                        echo "<a href=\"";
                        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", []), "html", null, true);
                        echo "\" title=\"";
                        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "image", []), "alt", []), "html", null, true);
                        echo "\">";
                    } else {
                        echo "<div class=\"bs-fix-div\">";
                    }
                    // line 16
                    echo "                        ";
                    if ($this->getAttribute($context["item"], "getImage", [], "method")) {
                        // line 17
                        echo "                            ";
                        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Image", "image" => $this->getAttribute($context["item"], "getImage", [], "method"), "id" => ("banner_image_" . $this->getAttribute($context["item"], "id", [])), "alt" => $this->getAttribute($this->getAttribute($context["item"], "image", []), "alt", []), "centerImage" => "1"]]), "html", null, true);
                        echo "
                        ";
                    }
                    // line 19
                    echo "                        <div class=\"textContainer\">
                            ";
                    // line 20
                    if (($this->getAttribute($context["item"], "maintext", []) != "")) {
                        // line 21
                        echo "                                <div class=\"mainText\"";
                        if (($this->getAttribute($context["item"], "maintext_color", []) != "")) {
                            echo " style=\"color: #";
                            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["item"], "maintext_color", []), "html", null, true);
                            echo ";\"";
                        }
                        echo ">
                                    ";
                        // line 22
                        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["item"], "maintext", []), "html", null, true);
                        echo "
                                </div>
                            ";
                    }
                    // line 25
                    echo "                            ";
                    if (($this->getAttribute($context["item"], "addtext", []) != "")) {
                        // line 26
                        echo "                                <div class=\"addText\"";
                        if (($this->getAttribute($context["item"], "addtext_color", []) != "")) {
                            echo " style=\"color: #";
                            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["item"], "addtext_color", []), "html", null, true);
                            echo ";\"";
                        }
                        echo ">
                                    ";
                        // line 27
                        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["item"], "addtext", []), "html", null, true);
                        echo "
                                </div>
                            ";
                    }
                    // line 30
                    echo "                            ";
                    if ($this->getAttribute($context["item"], "getActionButton", [], "method")) {
                        // line 31
                        echo "                                <div class=\"action-button\">
                                    ";
                        // line 32
                        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Button\\Link", "location" => $this->getAttribute($context["item"], "getActionButtonLink", [], "method"), "label" => $this->getAttribute($context["item"], "getActionButton", [], "method"), "style" => "btn regular-button regular-main-button submit"]]), "html", null, true);
                        echo "
                                </div>
                            ";
                    }
                    // line 35
                    echo "                        </div>
                        ";
                    // line 36
                    if (($this->getAttribute($context["item"], "link", []) &&  !$this->getAttribute($context["item"], "getActionButton", [], "method"))) {
                        echo "</a>";
                    } else {
                        echo "</div>";
                    }
                    // line 37
                    echo "                    </div>
                ";
                } else {
                    // line 39
                    echo "                    ";
                    if ($this->getAttribute($context["item"], "link", [])) {
                        echo "<a href=\"";
                        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", []), "html", null, true);
                        echo "\" title=\"";
                        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "image", []), "alt", []), "html", null, true);
                        echo "\">";
                    } else {
                        echo "<span>";
                    }
                    // line 40
                    echo "
                    ";
                    // line 41
                    if ($this->getAttribute($context["item"], "getImage", [], "method")) {
                        // line 42
                        echo "                        ";
                        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Image", "image" => $this->getAttribute($context["item"], "getImage", [], "method"), "id" => ("banner_image_" . $this->getAttribute($context["item"], "id", [])), "alt" => $this->getAttribute($this->getAttribute($context["item"], "image", []), "alt", []), "centerImage" => "1"]]), "html", null, true);
                        echo "
                    ";
                    }
                    // line 44
                    echo "                    ";
                    if ($this->getAttribute($context["item"], "link", [])) {
                        echo "</a>";
                    } else {
                        echo "</span>";
                    }
                    // line 45
                    echo "                ";
                }
                // line 46
                echo "
            ";
            } else {
                // line 48
                echo "                <div id=\"content_";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["item"], "getContentId", [], "method"), "html", null, true);
                echo "\" class=\"banner_content fr-view\">";
                echo $this->getAttribute($context["item"], "getContent", [], "method");
                echo "</div>
            ";
            }
            // line 50
            echo "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "</div>
";
        // line 53
        if ($this->getAttribute(($context["this"] ?? null), "isMoreThanOneBanner", [], "method")) {
            // line 54
            echo "    ";
            if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "banner", []), "getArrows", [], "method")) {
                // line 55
                echo "        <a class=\"prev_arrow fa fa-angle-left\" id=\"banner_prev";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "banner", []), "getId", [], "method"), "html", null, true);
                echo "\" href=\"#\"></a>
        <a class=\"next_arrow fa fa-angle-right\" id=\"banner_next";
                // line 56
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "banner", []), "getId", [], "method"), "html", null, true);
                echo "\" href=\"#\"></a>
    ";
            }
            // line 58
            echo "    ";
            if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "banner", []), "getNavigation", [], "method")) {
                // line 59
                echo "        <div class=\"banner-system-navigation\" id=\"navigation_";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "banner", []), "getId", [], "method"), "html", null, true);
                echo "\"></div>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "modules/QSL/Banner\\body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 59,  217 => 58,  212 => 56,  207 => 55,  204 => 54,  202 => 53,  199 => 52,  192 => 50,  184 => 48,  180 => 46,  177 => 45,  170 => 44,  164 => 42,  162 => 41,  159 => 40,  148 => 39,  144 => 37,  138 => 36,  135 => 35,  129 => 32,  126 => 31,  123 => 30,  117 => 27,  108 => 26,  105 => 25,  99 => 22,  90 => 21,  88 => 20,  85 => 19,  79 => 17,  76 => 16,  66 => 15,  63 => 14,  60 => 13,  58 => 12,  55 => 11,  51 => 10,  48 => 9,  38 => 7,  34 => 6,  30 => 4,);
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
# Banner box XLite\\Module\\QSL\\Banner\\View\\Customer\\BannerBox
#}

<div
{% for k, val in this.getBannerInfo() %}
{{ k }}=\"{{ val }}\"
{% endfor %}
>
    {% for i, item in this.getBannerData() %}
        <div class=\"banner_item\">
            {% if item.getEventCell() == 'I' %}
                {% if item.maintext or item.addtext or item.getActionButton() %}
                    <div class=\"backgroundImage\">
                        {% if item.link and not item.getActionButton() %}<a href=\"{{ item.link }}\" title=\"{{ item.image.alt }}\">{% else %}<div class=\"bs-fix-div\">{% endif %}
                        {% if item.getImage() %}
                            {{ widget('\\\\XLite\\\\View\\\\Image', image=item.getImage(), id='banner_image_' ~ item.id, alt=item.image.alt, centerImage='1') }}
                        {% endif %}
                        <div class=\"textContainer\">
                            {% if item.maintext != ''%}
                                <div class=\"mainText\"{% if item.maintext_color != '' %} style=\"color: #{{ item.maintext_color }};\"{% endif %}>
                                    {{ item.maintext }}
                                </div>
                            {% endif %}
                            {% if item.addtext != ''%}
                                <div class=\"addText\"{% if item.addtext_color != '' %} style=\"color: #{{ item.addtext_color }};\"{% endif %}>
                                    {{ item.addtext }}
                                </div>
                            {% endif %}
                            {% if item.getActionButton() %}
                                <div class=\"action-button\">
                                    {{ widget('XLite\\\\View\\\\Button\\\\Link', location=item.getActionButtonLink(), label=item.getActionButton(), style=\"btn regular-button regular-main-button submit\") }}
                                </div>
                            {% endif %}
                        </div>
                        {% if item.link and not item.getActionButton() %}</a>{% else %}</div>{% endif %}
                    </div>
                {% else %}
                    {% if item.link %}<a href=\"{{ item.link }}\" title=\"{{ item.image.alt }}\">{% else %}<span>{% endif %}

                    {% if item.getImage() %}
                        {{ widget('\\\\XLite\\\\View\\\\Image', image=item.getImage(), id='banner_image_' ~ item.id, alt=item.image.alt, centerImage='1') }}
                    {% endif %}
                    {% if item.link %}</a>{% else %}</span>{% endif %}
                {% endif %}

            {% else %}
                <div id=\"content_{{ item.getContentId() }}\" class=\"banner_content fr-view\">{{ item.getContent()|raw }}</div>
            {% endif %}
        </div>
    {% endfor %}
</div>
{% if this.isMoreThanOneBanner() %}
    {% if this.banner.getArrows() %}
        <a class=\"prev_arrow fa fa-angle-left\" id=\"banner_prev{{ this.banner.getId() }}\" href=\"#\"></a>
        <a class=\"next_arrow fa fa-angle-right\" id=\"banner_next{{ this.banner.getId() }}\" href=\"#\"></a>
    {% endif %}
    {% if this.banner.getNavigation() %}
        <div class=\"banner-system-navigation\" id=\"navigation_{{ this.banner.getId() }}\"></div>
    {% endif %}
{% endif %}
", "modules/QSL/Banner\\body.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\customer\\modules\\QSL\\Banner\\body.twig");
    }
}
