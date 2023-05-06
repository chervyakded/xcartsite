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

/* twig_form/form_div_layout.html.twig */
class __TwigTemplate_0e80fc5a48467fa951d8db08e045ff1174ebf7ecbad8fed774bcef816783ff63 extends \XLite\Core\Templating\Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'form_widget' => [$this, 'block_form_widget'],
            'form_widget_simple' => [$this, 'block_form_widget_simple'],
            'form_widget_compound' => [$this, 'block_form_widget_compound'],
            'collection_widget' => [$this, 'block_collection_widget'],
            'textarea_widget' => [$this, 'block_textarea_widget'],
            'choice_widget' => [$this, 'block_choice_widget'],
            'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
            'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
            'choice_widget_options' => [$this, 'block_choice_widget_options'],
            'checkbox_widget' => [$this, 'block_checkbox_widget'],
            'radio_widget' => [$this, 'block_radio_widget'],
            'datetime_widget' => [$this, 'block_datetime_widget'],
            'date_widget' => [$this, 'block_date_widget'],
            'time_widget' => [$this, 'block_time_widget'],
            'number_widget' => [$this, 'block_number_widget'],
            'integer_widget' => [$this, 'block_integer_widget'],
            'money_widget' => [$this, 'block_money_widget'],
            'url_widget' => [$this, 'block_url_widget'],
            'search_widget' => [$this, 'block_search_widget'],
            'percent_widget' => [$this, 'block_percent_widget'],
            'password_widget' => [$this, 'block_password_widget'],
            'hidden_widget' => [$this, 'block_hidden_widget'],
            'email_widget' => [$this, 'block_email_widget'],
            'range_widget' => [$this, 'block_range_widget'],
            'button_widget' => [$this, 'block_button_widget'],
            'submit_widget' => [$this, 'block_submit_widget'],
            'reset_widget' => [$this, 'block_reset_widget'],
            'form_label' => [$this, 'block_form_label'],
            'button_label' => [$this, 'block_button_label'],
            'repeated_row' => [$this, 'block_repeated_row'],
            'form_row' => [$this, 'block_form_row'],
            'button_row' => [$this, 'block_button_row'],
            'hidden_row' => [$this, 'block_hidden_row'],
            'form' => [$this, 'block_form'],
            'form_start' => [$this, 'block_form_start'],
            'form_enctype' => [$this, 'block_form_enctype'],
            'form_errors' => [$this, 'block_form_errors'],
            'form_rest' => [$this, 'block_form_rest'],
            'form_rows' => [$this, 'block_form_rows'],
            'widget_attributes' => [$this, 'block_widget_attributes'],
            'widget_container_attributes' => [$this, 'block_widget_container_attributes'],
            'button_attributes' => [$this, 'block_button_attributes'],
            'attributes' => [$this, 'block_attributes'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 16
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 24
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 31
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 35
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 43
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 52
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 72
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 86
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 90
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 94
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 107
        $this->displayBlock('date_widget', $context, $blocks);
        // line 121
        $this->displayBlock('time_widget', $context, $blocks);
        // line 132
        $this->displayBlock('number_widget', $context, $blocks);
        // line 138
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 143
        $this->displayBlock('money_widget', $context, $blocks);
        // line 147
        $this->displayBlock('url_widget', $context, $blocks);
        // line 152
        $this->displayBlock('search_widget', $context, $blocks);
        // line 157
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 162
        $this->displayBlock('password_widget', $context, $blocks);
        // line 167
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 172
        $this->displayBlock('email_widget', $context, $blocks);
        // line 177
        $this->displayBlock('range_widget', $context, $blocks);
        // line 182
        $this->displayBlock('button_widget', $context, $blocks);
        // line 196
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 201
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 208
        $this->displayBlock('form_label', $context, $blocks);
        // line 230
        $this->displayBlock('button_label', $context, $blocks);
        // line 234
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 242
        $this->displayBlock('form_row', $context, $blocks);
        // line 250
        $this->displayBlock('button_row', $context, $blocks);
        // line 256
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 262
        $this->displayBlock('form', $context, $blocks);
        // line 268
        $this->displayBlock('form_start', $context, $blocks);
        // line 290
        $this->displayBlock('form_enctype', $context, $blocks);
        // line 294
        $this->displayBlock('form_errors', $context, $blocks);
        // line 304
        $this->displayBlock('form_rest', $context, $blocks);
        // line 311
        echo "
";
        // line 314
        $this->displayBlock('form_rows', $context, $blocks);
        // line 320
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 336
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 350
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 364
        $this->displayBlock('attributes', $context, $blocks);
    }

    // line 3
    public function block_form_widget($context, array $blocks = [])
    {
        // line 4
        if (($context["compound"] ?? null)) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = [])
    {
        // line 12
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "text")) : ("text"));
        // line 13
        echo "<input type=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty(($context["value"] ?? null))) {
            echo "value=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
        }
        echo "/>";
    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = [])
    {
        // line 17
        if (twig_test_empty($this->getAttribute(($context["form"] ?? null), "parent", []))) {
            // line 18
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        }
        // line 20
        $this->displayBlock("form_rows", $context, $blocks);
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
    }

    // line 24
    public function block_collection_widget($context, array $blocks = [])
    {
        // line 25
        if ((isset($context["prototype"]) || array_key_exists("prototype", $context))) {
            // line 26
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["prototype"] ?? null), 'row')]);
        }
        // line 28
        $this->displayBlock("form_widget", $context, $blocks);
    }

    // line 31
    public function block_textarea_widget($context, array $blocks = [])
    {
        // line 32
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "</textarea>";
    }

    // line 35
    public function block_choice_widget($context, array $blocks = [])
    {
        // line 36
        if (($context["expanded"] ?? null)) {
            // line 37
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 39
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
    }

    // line 43
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        // line 44
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 46
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            // line 47
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', ["translation_domain" => ($context["choice_translation_domain"] ?? null)]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "</div>";
    }

    // line 52
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        // line 53
        if (((((($context["required"] ?? null) && (null === ($context["placeholder"] ?? null))) &&  !($context["placeholder_in_choices"] ?? null)) &&  !($context["multiple"] ?? null)) && ( !$this->getAttribute(($context["attr"] ?? null), "size", [], "any", true, true) || ($this->getAttribute(($context["attr"] ?? null), "size", []) <= 1)))) {
            // line 54
            $context["required"] = false;
        }
        // line 56
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? null)) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 57
        if ( !(null === ($context["placeholder"] ?? null))) {
            // line 58
            echo "<option value=\"\"";
            if ((($context["required"] ?? null) && twig_test_empty(($context["value"] ?? null)))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            (((($context["placeholder"] ?? null) != "")) ? (print (XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (((($context["translation_domain"] ?? null) === false)) ? (($context["placeholder"] ?? null)) : (($context["placeholder"] ?? null))), "html", null, true))) : (print ("")));
            echo "</option>";
        }
        // line 60
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? null)) > 0)) {
            // line 61
            $context["options"] = ($context["preferred_choices"] ?? null);
            // line 62
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 63
            if (((twig_length_filter($this->env, ($context["choices"] ?? null)) > 0) &&  !(null === ($context["separator"] ?? null)))) {
                // line 64
                echo "<option disabled=\"disabled\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["separator"] ?? null), "html", null, true);
                echo "</option>";
            }
        }
        // line 67
        $context["options"] = ($context["choices"] ?? null);
        // line 68
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 69
        echo "</select>";
    }

    // line 72
    public function block_choice_widget_options($context, array $blocks = [])
    {
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 74
            if (twig_test_iterable($context["choice"])) {
                // line 75
                echo "<optgroup label=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (((($context["choice_translation_domain"] ?? null) === false)) ? ($context["group_label"]) : ($context["group_label"])), "html", null, true);
                echo "\">
                ";
                // line 76
                $context["options"] = $context["choice"];
                // line 77
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 78
                echo "</optgroup>";
            } else {
                // line 80
                $context["attr"] = $this->getAttribute($context["choice"], "attr", []);
                // line 81
                echo "            <option value=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", []), "html", null, true);
                echo "\" ";
                $this->displayBlock("attributes", $context, $blocks);
                if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], ($context["value"] ?? null))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (((($context["choice_translation_domain"] ?? null) === false)) ? ($this->getAttribute($context["choice"], "label", [])) : ($this->getAttribute($context["choice"], "label", []))), "html", null, true);
                echo "</option>";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 86
    public function block_checkbox_widget($context, array $blocks = [])
    {
        // line 87
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["value"]) || array_key_exists("value", $context))) {
            echo " value=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " class=\"form-control\" />";
    }

    // line 90
    public function block_radio_widget($context, array $blocks = [])
    {
        // line 91
        echo "<input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["value"]) || array_key_exists("value", $context))) {
            echo " value=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " class=\"form-control\" />";
    }

    // line 94
    public function block_datetime_widget($context, array $blocks = [])
    {
        // line 95
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 96
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 98
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 99
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "date", []), 'errors');
            // line 100
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "time", []), 'errors');
            // line 101
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "date", []), 'widget');
            // line 102
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "time", []), 'widget');
            // line 103
            echo "</div>";
        }
    }

    // line 107
    public function block_date_widget($context, array $blocks = [])
    {
        // line 108
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 109
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 111
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 112
            echo twig_replace_filter(($context["date_pattern"] ?? null), ["{{ year }}" =>             // line 113
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "year", []), 'widget'), "{{ month }}" =>             // line 114
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "month", []), 'widget'), "{{ day }}" =>             // line 115
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "day", []), 'widget')]);
            // line 117
            echo "</div>";
        }
    }

    // line 121
    public function block_time_widget($context, array $blocks = [])
    {
        // line 122
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 123
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 125
            $context["vars"] = (((($context["widget"] ?? null) == "text")) ? (["attr" => ["size" => 1]]) : ([]));
            // line 126
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 127
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "hour", []), 'widget', ($context["vars"] ?? null));
            if (($context["with_minutes"] ?? null)) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "minute", []), 'widget', ($context["vars"] ?? null));
            }
            if (($context["with_seconds"] ?? null)) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "second", []), 'widget', ($context["vars"] ?? null));
            }
            // line 128
            echo "        </div>";
        }
    }

    // line 132
    public function block_number_widget($context, array $blocks = [])
    {
        // line 134
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "text")) : ("text"));
        // line 135
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 138
    public function block_integer_widget($context, array $blocks = [])
    {
        // line 139
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "number")) : ("number"));
        // line 140
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 143
    public function block_money_widget($context, array $blocks = [])
    {
        // line 144
        echo twig_replace_filter(($context["money_pattern"] ?? null), ["{{ widget }}" =>         $this->renderBlock("form_widget_simple", $context, $blocks)]);
    }

    // line 147
    public function block_url_widget($context, array $blocks = [])
    {
        // line 148
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "url")) : ("url"));
        // line 149
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 152
    public function block_search_widget($context, array $blocks = [])
    {
        // line 153
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "search")) : ("search"));
        // line 154
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 157
    public function block_percent_widget($context, array $blocks = [])
    {
        // line 158
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "text")) : ("text"));
        // line 159
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
    }

    // line 162
    public function block_password_widget($context, array $blocks = [])
    {
        // line 163
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "password")) : ("password"));
        // line 164
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 167
    public function block_hidden_widget($context, array $blocks = [])
    {
        // line 168
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "hidden")) : ("hidden"));
        // line 169
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 172
    public function block_email_widget($context, array $blocks = [])
    {
        // line 173
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "email")) : ("email"));
        // line 174
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 177
    public function block_range_widget($context, array $blocks = [])
    {
        // line 178
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "range")) : ("range"));
        // line 179
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 182
    public function block_button_widget($context, array $blocks = [])
    {
        // line 183
        if (twig_test_empty(($context["label"] ?? null))) {
            // line 184
            if ( !twig_test_empty(($context["label_format"] ?? null))) {
                // line 185
                $context["label"] = twig_replace_filter(($context["label_format"] ?? null), ["%name%" =>                 // line 186
($context["name"] ?? null), "%id%" =>                 // line 187
($context["id"] ?? null)]);
            } else {
                // line 190
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
            }
        }
        // line 193
        echo "<button type=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : (($context["label"] ?? null))), "html", null, true);
        echo "</button>";
    }

    // line 196
    public function block_submit_widget($context, array $blocks = [])
    {
        // line 197
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "submit")) : ("submit"));
        // line 198
        $this->displayBlock("button_widget", $context, $blocks);
    }

    // line 201
    public function block_reset_widget($context, array $blocks = [])
    {
        // line 202
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "reset")) : ("reset"));
        // line 203
        $this->displayBlock("button_widget", $context, $blocks);
    }

    // line 208
    public function block_form_label($context, array $blocks = [])
    {
        // line 209
        if ( !(($context["label"] ?? null) === false)) {
            // line 210
            if ( !($context["compound"] ?? null)) {
                // line 211
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null)]);
            }
            // line 213
            if (($context["required"] ?? null)) {
                // line 214
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")) . " required"))]);
            }
            // line 216
            if (twig_test_empty(($context["label"] ?? null))) {
                // line 217
                if ( !twig_test_empty(($context["label_format"] ?? null))) {
                    // line 218
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? null), ["%name%" =>                     // line 219
($context["name"] ?? null), "%id%" =>                     // line 220
($context["id"] ?? null)]);
                } else {
                    // line 223
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                }
            }
            // line 226
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : (($context["label"] ?? null))), "html", null, true);
            echo "</label>";
        }
    }

    // line 230
    public function block_button_label($context, array $blocks = [])
    {
    }

    // line 234
    public function block_repeated_row($context, array $blocks = [])
    {
        // line 239
        $this->displayBlock("form_rows", $context, $blocks);
    }

    // line 242
    public function block_form_row($context, array $blocks = [])
    {
        // line 243
        echo "<div>";
        // line 244
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 245
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 246
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 247
        echo "</div>";
    }

    // line 250
    public function block_button_row($context, array $blocks = [])
    {
        // line 251
        echo "<div>";
        // line 252
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 253
        echo "</div>";
    }

    // line 256
    public function block_hidden_row($context, array $blocks = [])
    {
        // line 257
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
    }

    // line 262
    public function block_form($context, array $blocks = [])
    {
        // line 263
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        // line 264
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 265
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
    }

    // line 268
    public function block_form_start($context, array $blocks = [])
    {
        // line 269
        $context["method"] = twig_upper_filter($this->env, ($context["method"] ?? null));
        // line 270
        if (twig_in_filter(($context["method"] ?? null), [0 => "GET", 1 => "POST"])) {
            // line 271
            $context["form_method"] = ($context["method"] ?? null);
        } else {
            // line 273
            $context["form_method"] = "POST";
        }
        // line 275
        echo "<form name=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\" method=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["form_method"] ?? null)), "html", null, true);
        echo "\"";
        if ((($context["action"] ?? null) != "")) {
            echo " action=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["action"] ?? null), "html", null, true);
            echo "\"";
        }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if (($context["multipart"] ?? null)) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 276
        if ((($context["form_method"] ?? null) != ($context["method"] ?? null))) {
            // line 277
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["method"] ?? null), "html", null, true);
            echo "\" />";
        }
    }

    // line 290
    public function block_form_enctype($context, array $blocks = [])
    {
        // line 291
        if (($context["multipart"] ?? null)) {
            echo "enctype=\"multipart/form-data\"";
        }
    }

    // line 294
    public function block_form_errors($context, array $blocks = [])
    {
        // line 295
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 296
            echo "<ul>";
            // line 297
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 298
                echo "<li>";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", []), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 300
            echo "</ul>";
        }
    }

    // line 304
    public function block_form_rest($context, array $blocks = [])
    {
        // line 305
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 306
            if ( !$this->getAttribute($context["child"], "rendered", [])) {
                // line 307
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 314
    public function block_form_rows($context, array $blocks = [])
    {
        // line 315
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 316
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 320
    public function block_widget_attributes($context, array $blocks = [])
    {
        // line 321
        echo "id=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" name=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "\"";
        // line 322
        if (($context["disabled"] ?? null)) {
            echo " disabled=\"disabled\"";
        }
        // line 323
        if (($context["required"] ?? null)) {
            echo " required=\"required\"";
        }
        // line 324
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 325
            echo " ";
            // line 326
            if (twig_in_filter($context["attrname"], [0 => "placeholder", 1 => "title"])) {
                // line 327
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (((($context["translation_domain"] ?? null) === false)) ? ($context["attrvalue"]) : ($context["attrvalue"])), "html", null, true);
                echo "\"";
            } elseif ((            // line 328
$context["attrvalue"] === true)) {
                // line 329
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 330
$context["attrvalue"] === false)) {
                // line 331
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 336
    public function block_widget_container_attributes($context, array $blocks = [])
    {
        // line 337
        if ( !twig_test_empty(($context["id"] ?? null))) {
            echo "id=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\"";
        }
        // line 338
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 339
            echo " ";
            // line 340
            if (twig_in_filter($context["attrname"], [0 => "placeholder", 1 => "title"])) {
                // line 341
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (((($context["translation_domain"] ?? null) === false)) ? ($context["attrvalue"]) : ($context["attrvalue"])), "html", null, true);
                echo "\"";
            } elseif ((            // line 342
$context["attrvalue"] === true)) {
                // line 343
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 344
$context["attrvalue"] === false)) {
                // line 345
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 350
    public function block_button_attributes($context, array $blocks = [])
    {
        // line 351
        echo "id=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" name=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "\"";
        if (($context["disabled"] ?? null)) {
            echo " disabled=\"disabled\"";
        }
        // line 352
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 353
            echo " ";
            // line 354
            if (twig_in_filter($context["attrname"], [0 => "placeholder", 1 => "title"])) {
                // line 355
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (((($context["translation_domain"] ?? null) === false)) ? ($context["attrvalue"]) : ($context["attrvalue"])), "html", null, true);
                echo "\"";
            } elseif ((            // line 356
$context["attrvalue"] === true)) {
                // line 357
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 358
$context["attrvalue"] === false)) {
                // line 359
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 364
    public function block_attributes($context, array $blocks = [])
    {
        // line 365
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 366
            echo " ";
            // line 367
            if (twig_in_filter($context["attrname"], [0 => "placeholder", 1 => "title"])) {
                // line 368
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (((($context["translation_domain"] ?? null) === false)) ? ($context["attrvalue"]) : ($context["attrvalue"])), "html", null, true);
                echo "\"";
            } elseif ((            // line 369
$context["attrvalue"] === true)) {
                // line 370
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 371
$context["attrvalue"] === false)) {
                // line 372
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "twig_form/form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1007 => 372,  1005 => 371,  1000 => 370,  998 => 369,  993 => 368,  991 => 367,  989 => 366,  985 => 365,  982 => 364,  970 => 359,  968 => 358,  963 => 357,  961 => 356,  956 => 355,  954 => 354,  952 => 353,  948 => 352,  939 => 351,  936 => 350,  924 => 345,  922 => 344,  917 => 343,  915 => 342,  910 => 341,  908 => 340,  906 => 339,  902 => 338,  896 => 337,  893 => 336,  881 => 331,  879 => 330,  874 => 329,  872 => 328,  867 => 327,  865 => 326,  863 => 325,  859 => 324,  855 => 323,  851 => 322,  845 => 321,  842 => 320,  834 => 316,  830 => 315,  827 => 314,  818 => 307,  816 => 306,  812 => 305,  809 => 304,  804 => 300,  796 => 298,  792 => 297,  790 => 296,  788 => 295,  785 => 294,  779 => 291,  776 => 290,  769 => 277,  767 => 276,  740 => 275,  737 => 273,  734 => 271,  732 => 270,  730 => 269,  727 => 268,  723 => 265,  721 => 264,  719 => 263,  716 => 262,  712 => 257,  709 => 256,  705 => 253,  703 => 252,  701 => 251,  698 => 250,  694 => 247,  692 => 246,  690 => 245,  688 => 244,  686 => 243,  683 => 242,  679 => 239,  676 => 234,  671 => 230,  651 => 226,  647 => 223,  644 => 220,  643 => 219,  642 => 218,  640 => 217,  638 => 216,  635 => 214,  633 => 213,  630 => 211,  628 => 210,  626 => 209,  623 => 208,  619 => 203,  617 => 202,  614 => 201,  610 => 198,  608 => 197,  605 => 196,  595 => 193,  591 => 190,  588 => 187,  587 => 186,  586 => 185,  584 => 184,  582 => 183,  579 => 182,  575 => 179,  573 => 178,  570 => 177,  566 => 174,  564 => 173,  561 => 172,  557 => 169,  555 => 168,  552 => 167,  548 => 164,  546 => 163,  543 => 162,  538 => 159,  536 => 158,  533 => 157,  529 => 154,  527 => 153,  524 => 152,  520 => 149,  518 => 148,  515 => 147,  511 => 144,  508 => 143,  504 => 140,  502 => 139,  499 => 138,  495 => 135,  493 => 134,  490 => 132,  485 => 128,  475 => 127,  470 => 126,  468 => 125,  465 => 123,  463 => 122,  460 => 121,  455 => 117,  453 => 115,  452 => 114,  451 => 113,  450 => 112,  446 => 111,  443 => 109,  441 => 108,  438 => 107,  433 => 103,  431 => 102,  429 => 101,  427 => 100,  425 => 99,  421 => 98,  418 => 96,  416 => 95,  413 => 94,  399 => 91,  396 => 90,  382 => 87,  379 => 86,  353 => 81,  351 => 80,  348 => 78,  346 => 77,  344 => 76,  339 => 75,  337 => 74,  320 => 73,  317 => 72,  313 => 69,  311 => 68,  309 => 67,  303 => 64,  301 => 63,  299 => 62,  297 => 61,  295 => 60,  286 => 58,  284 => 57,  277 => 56,  274 => 54,  272 => 53,  269 => 52,  265 => 49,  259 => 47,  257 => 46,  253 => 45,  249 => 44,  246 => 43,  241 => 39,  238 => 37,  236 => 36,  233 => 35,  225 => 32,  222 => 31,  218 => 28,  215 => 26,  213 => 25,  210 => 24,  206 => 21,  204 => 20,  201 => 18,  199 => 17,  196 => 16,  182 => 13,  180 => 12,  177 => 11,  172 => 7,  169 => 5,  167 => 4,  164 => 3,  160 => 364,  158 => 350,  156 => 336,  154 => 320,  152 => 314,  149 => 311,  147 => 304,  145 => 294,  143 => 290,  141 => 268,  139 => 262,  137 => 256,  135 => 250,  133 => 242,  131 => 234,  129 => 230,  127 => 208,  125 => 201,  123 => 196,  121 => 182,  119 => 177,  117 => 172,  115 => 167,  113 => 162,  111 => 157,  109 => 152,  107 => 147,  105 => 143,  103 => 138,  101 => 132,  99 => 121,  97 => 107,  95 => 94,  93 => 90,  91 => 86,  89 => 72,  87 => 52,  85 => 43,  83 => 35,  81 => 31,  79 => 24,  77 => 16,  75 => 11,  73 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# Widgets #}

{%- block form_widget -%}
    {% if compound %}
        {{- block('form_widget_compound') -}}
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock form_widget -%}

{%- block form_widget_simple -%}
    {%- set type = type|default('text') -%}
    <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
{%- endblock form_widget_simple -%}

{%- block form_widget_compound -%}
    {%- if form.parent is empty -%}
        {{ form_errors(form) }}
    {%- endif -%}
    {{- block('form_rows') -}}
    {{- form_rest(form) -}}
{%- endblock form_widget_compound -%}

{%- block collection_widget -%}
    {% if prototype is defined %}
        {%- set attr = attr|merge({'data-prototype': form_row(prototype) }) -%}
    {% endif %}
    {{- block('form_widget') -}}
{%- endblock collection_widget -%}

{%- block textarea_widget -%}
    <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>
{%- endblock textarea_widget -%}

{%- block choice_widget -%}
    {% if expanded %}
        {{- block('choice_widget_expanded') -}}
    {% else %}
        {{- block('choice_widget_collapsed') -}}
    {% endif %}
{%- endblock choice_widget -%}

{%- block choice_widget_expanded -%}
    <div {{ block('widget_container_attributes') }}>
    {%- for child in form %}
        {{- form_widget(child) -}}
        {{- form_label(child, null, {translation_domain: choice_translation_domain}) -}}
    {% endfor -%}
    </div>
{%- endblock choice_widget_expanded -%}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
        {%- if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ placeholder != '' ? (translation_domain is same as(false) ? placeholder : placeholder) }}</option>
        {%- endif -%}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {%- if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif -%}
        {%- endif -%}
        {%- set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed -%}

{%- block choice_widget_options -%}
    {% for group_label, choice in options %}
        {%- if choice is iterable -%}
            <optgroup label=\"{{ choice_translation_domain is same as(false) ? group_label : group_label }}\">
                {% set options = choice %}
                {{- block('choice_widget_options') -}}
            </optgroup>
        {%- else -%}
            {% set attr = choice.attr %}
            <option value=\"{{ choice.value }}\" {{ block('attributes') }}{% if choice is selectedchoice(value) %} selected=\"selected\"{% endif %}>{{ choice_translation_domain is same as(false) ? choice.label : choice.label }}</option>
        {%- endif -%}
    {% endfor %}
{%- endblock choice_widget_options -%}

{%- block checkbox_widget -%}
    <input type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} class=\"form-control\" />
{%- endblock checkbox_widget -%}

{%- block radio_widget -%}
    <input type=\"radio\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} class=\"form-control\" />
{%- endblock radio_widget -%}

{%- block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date) -}}
            {{- form_widget(form.time) -}}
        </div>
    {%- endif -%}
{%- endblock datetime_widget -%}

{%- block date_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- date_pattern|replace({
                '{{ year }}':  form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}':   form_widget(form.day),
            })|raw -}}
        </div>
    {%- endif -%}
{%- endblock date_widget -%}

{%- block time_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        {%- set vars = widget == 'text' ? { 'attr': { 'size': 1 }} : {} -%}
        <div {{ block('widget_container_attributes') }}>
            {{ form_widget(form.hour, vars) }}{% if with_minutes %}:{{ form_widget(form.minute, vars) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second, vars) }}{% endif %}
        </div>
    {%- endif -%}
{%- endblock time_widget -%}

{%- block number_widget -%}
    {# type=\"number\" doesn't work with floats #}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }}
{%- endblock number_widget -%}

{%- block integer_widget -%}
    {%- set type = type|default('number') -%}
    {{ block('form_widget_simple') }}
{%- endblock integer_widget -%}

{%- block money_widget -%}
    {{ money_pattern|replace({ '{{ widget }}': block('form_widget_simple') })|raw }}
{%- endblock money_widget -%}

{%- block url_widget -%}
    {%- set type = type|default('url') -%}
    {{ block('form_widget_simple') }}
{%- endblock url_widget -%}

{%- block search_widget -%}
    {%- set type = type|default('search') -%}
    {{ block('form_widget_simple') }}
{%- endblock search_widget -%}

{%- block percent_widget -%}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }} %
{%- endblock percent_widget -%}

{%- block password_widget -%}
    {%- set type = type|default('password') -%}
    {{ block('form_widget_simple') }}
{%- endblock password_widget -%}

{%- block hidden_widget -%}
    {%- set type = type|default('hidden') -%}
    {{ block('form_widget_simple') }}
{%- endblock hidden_widget -%}

{%- block email_widget -%}
    {%- set type = type|default('email') -%}
    {{ block('form_widget_simple') }}
{%- endblock email_widget -%}

{%- block range_widget -%}
    {% set type = type|default('range') %}
    {{- block('form_widget_simple') -}}
{%- endblock range_widget %}

{%- block button_widget -%}
    {%- if label is empty -%}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {%- endif -%}
    <button type=\"{{ type|default('button') }}\" {{ block('button_attributes') }}>{{ translation_domain is same as(false) ? label : label }}</button>
{%- endblock button_widget -%}

{%- block submit_widget -%}
    {%- set type = type|default('submit') -%}
    {{ block('button_widget') }}
{%- endblock submit_widget -%}

{%- block reset_widget -%}
    {%- set type = type|default('reset') -%}
    {{ block('button_widget') }}
{%- endblock reset_widget -%}

{# Labels #}

{%- block form_label -%}
    {% if label is not same as(false) -%}
        {% if not compound -%}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>{{ translation_domain is same as(false) ? label : label }}</label>
    {%- endif -%}
{%- endblock form_label -%}

{%- block button_label -%}{%- endblock -%}

{# Rows #}

{%- block repeated_row -%}
    {#
    No need to render the errors here, as all errors are mapped
    to the first child (see RepeatedTypeValidatorExtension).
    #}
    {{- block('form_rows') -}}
{%- endblock repeated_row -%}

{%- block form_row -%}
    <div>
        {{- form_label(form) -}}
        {{- form_errors(form) -}}
        {{- form_widget(form) -}}
    </div>
{%- endblock form_row -%}

{%- block button_row -%}
    <div>
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row -%}

{%- block hidden_row -%}
    {{ form_widget(form) }}
{%- endblock hidden_row -%}

{# Misc #}

{%- block form -%}
    {{ form_start(form) }}
        {{- form_widget(form) -}}
    {{ form_end(form) }}
{%- endblock form -%}

{%- block form_start -%}
    {% set method = method|upper %}
    {%- if method in [\"GET\", \"POST\"] -%}
        {% set form_method = method %}
    {%- else -%}
        {% set form_method = \"POST\" %}
    {%- endif -%}
    <form name=\"{{ name }}\" method=\"{{ form_method|lower }}\"{% if action != '' %} action=\"{{ action }}\"{% endif %}{% for attrname, attrvalue in attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}{% if multipart %} enctype=\"multipart/form-data\"{% endif %}>
    {%- if form_method != method -%}
        <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
    {%- endif -%}
{%- endblock form_start -%}

{#
{%- block form_end -%}
    {%- if not render_rest is defined or render_rest -%}
        {{ form_rest(form) }}
    {%- endif -%}
    </form>
{%- endblock form_end -%}
#}

{%- block form_enctype -%}
    {% if multipart %}enctype=\"multipart/form-data\"{% endif %}
{%- endblock form_enctype -%}

{%- block form_errors -%}
    {%- if errors|length > 0 -%}
    <ul>
        {%- for error in errors -%}
            <li>{{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {%- endif -%}
{%- endblock form_errors -%}

{%- block form_rest -%}
    {% for child in form -%}
        {% if not child.rendered %}
            {{- form_row(child) -}}
        {% endif %}
    {%- endfor %}
{% endblock form_rest %}

{# Support #}

{%- block form_rows -%}
    {% for child in form %}
        {{- form_row(child) -}}
    {% endfor %}
{%- endblock form_rows -%}

{%- block widget_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"
    {%- if disabled %} disabled=\"disabled\"{% endif -%}
    {%- if required %} required=\"required\"{% endif -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock widget_attributes -%}

{%- block widget_container_attributes -%}
    {%- if id is not empty %}id=\"{{ id }}\"{% endif -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock widget_container_attributes -%}

{%- block button_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"{% if disabled %} disabled=\"disabled\"{% endif -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock button_attributes -%}

{% block attributes -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock attributes -%}
", "twig_form/form_div_layout.html.twig", "C:\\OpenServer\\domains\\xcartsite\\skins\\admin\\twig_form\\form_div_layout.html.twig");
    }
}
