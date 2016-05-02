<?php

/* form_div_layout.html.twig */
class __TwigTemplate_e3e0ec4f9404bca2e1d1ac89fa624f11b47432e772c7dc583395e816e8aec30f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'range_widget' => array($this, 'block_range_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'reset_widget' => array($this, 'block_reset_widget'),
            'form_label' => array($this, 'block_form_label'),
            'button_label' => array($this, 'block_button_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'form_row' => array($this, 'block_form_row'),
            'button_row' => array($this, 'block_button_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'form' => array($this, 'block_form'),
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'form_enctype' => array($this, 'block_form_enctype'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_rest' => array($this, 'block_form_rest'),
            'form_rows' => array($this, 'block_form_rows'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'button_attributes' => array($this, 'block_button_attributes'),
            'attributes' => array($this, 'block_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8f2e9ce2b223a5286f346c4c287dd4377f0ffdf64acb9e1585b4e49768ade58 = $this->env->getExtension("native_profiler");
        $__internal_d8f2e9ce2b223a5286f346c4c287dd4377f0ffdf64acb9e1585b4e49768ade58->enter($__internal_d8f2e9ce2b223a5286f346c4c287dd4377f0ffdf64acb9e1585b4e49768ade58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 16
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 26
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 33
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 37
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 45
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 54
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 74
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 88
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 92
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 96
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 109
        $this->displayBlock('date_widget', $context, $blocks);
        // line 123
        $this->displayBlock('time_widget', $context, $blocks);
        // line 134
        $this->displayBlock('number_widget', $context, $blocks);
        // line 140
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 145
        $this->displayBlock('money_widget', $context, $blocks);
        // line 149
        $this->displayBlock('url_widget', $context, $blocks);
        // line 154
        $this->displayBlock('search_widget', $context, $blocks);
        // line 159
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 164
        $this->displayBlock('password_widget', $context, $blocks);
        // line 169
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 174
        $this->displayBlock('email_widget', $context, $blocks);
        // line 179
        $this->displayBlock('range_widget', $context, $blocks);
        // line 184
        $this->displayBlock('button_widget', $context, $blocks);
        // line 198
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 203
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 210
        $this->displayBlock('form_label', $context, $blocks);
        // line 232
        $this->displayBlock('button_label', $context, $blocks);
        // line 236
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 244
        $this->displayBlock('form_row', $context, $blocks);
        // line 252
        $this->displayBlock('button_row', $context, $blocks);
        // line 258
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 264
        $this->displayBlock('form', $context, $blocks);
        // line 270
        $this->displayBlock('form_start', $context, $blocks);
        // line 283
        $this->displayBlock('form_end', $context, $blocks);
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
        // line 337
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 351
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 365
        $this->displayBlock('attributes', $context, $blocks);
        
        $__internal_d8f2e9ce2b223a5286f346c4c287dd4377f0ffdf64acb9e1585b4e49768ade58->leave($__internal_d8f2e9ce2b223a5286f346c4c287dd4377f0ffdf64acb9e1585b4e49768ade58_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_d08b774a1016933f36644b71c7af0fe34bce38a4cb1408ede270578e3ea2c508 = $this->env->getExtension("native_profiler");
        $__internal_d08b774a1016933f36644b71c7af0fe34bce38a4cb1408ede270578e3ea2c508->enter($__internal_d08b774a1016933f36644b71c7af0fe34bce38a4cb1408ede270578e3ea2c508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        if ((isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_d08b774a1016933f36644b71c7af0fe34bce38a4cb1408ede270578e3ea2c508->leave($__internal_d08b774a1016933f36644b71c7af0fe34bce38a4cb1408ede270578e3ea2c508_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_79aced2e46bb008d5948e45178da6d85e3992ba08c35a4fedf6cc3ff4a44bf70 = $this->env->getExtension("native_profiler");
        $__internal_79aced2e46bb008d5948e45178da6d85e3992ba08c35a4fedf6cc3ff4a44bf70->enter($__internal_79aced2e46bb008d5948e45178da6d85e3992ba08c35a4fedf6cc3ff4a44bf70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 12
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 13
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>";
        
        $__internal_79aced2e46bb008d5948e45178da6d85e3992ba08c35a4fedf6cc3ff4a44bf70->leave($__internal_79aced2e46bb008d5948e45178da6d85e3992ba08c35a4fedf6cc3ff4a44bf70_prof);

    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_56a125a632a4225a0a90976bdfe59bc60d05d9123811038096a6ec9ebccfce7c = $this->env->getExtension("native_profiler");
        $__internal_56a125a632a4225a0a90976bdfe59bc60d05d9123811038096a6ec9ebccfce7c->enter($__internal_56a125a632a4225a0a90976bdfe59bc60d05d9123811038096a6ec9ebccfce7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 17
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 18
        if (twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()))) {
            // line 19
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        }
        // line 21
        $this->displayBlock("form_rows", $context, $blocks);
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        // line 23
        echo "</div>";
        
        $__internal_56a125a632a4225a0a90976bdfe59bc60d05d9123811038096a6ec9ebccfce7c->leave($__internal_56a125a632a4225a0a90976bdfe59bc60d05d9123811038096a6ec9ebccfce7c_prof);

    }

    // line 26
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_257b49d589d0f6bfe30a172e18fcd8cdab7ceea53dd3c85b30902d8f0177d001 = $this->env->getExtension("native_profiler");
        $__internal_257b49d589d0f6bfe30a172e18fcd8cdab7ceea53dd3c85b30902d8f0177d001->enter($__internal_257b49d589d0f6bfe30a172e18fcd8cdab7ceea53dd3c85b30902d8f0177d001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-prototype" => $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_257b49d589d0f6bfe30a172e18fcd8cdab7ceea53dd3c85b30902d8f0177d001->leave($__internal_257b49d589d0f6bfe30a172e18fcd8cdab7ceea53dd3c85b30902d8f0177d001_prof);

    }

    // line 33
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_d046ff1d04528339bfb138c8b0ef378e7f67132fca206f59daac454446749cc8 = $this->env->getExtension("native_profiler");
        $__internal_d046ff1d04528339bfb138c8b0ef378e7f67132fca206f59daac454446749cc8->enter($__internal_d046ff1d04528339bfb138c8b0ef378e7f67132fca206f59daac454446749cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>";
        
        $__internal_d046ff1d04528339bfb138c8b0ef378e7f67132fca206f59daac454446749cc8->leave($__internal_d046ff1d04528339bfb138c8b0ef378e7f67132fca206f59daac454446749cc8_prof);

    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_fc6e9015b96e179124ded32980f6af1ea2edd8385c8ed7496e954f77d173b475 = $this->env->getExtension("native_profiler");
        $__internal_fc6e9015b96e179124ded32980f6af1ea2edd8385c8ed7496e954f77d173b475->enter($__internal_fc6e9015b96e179124ded32980f6af1ea2edd8385c8ed7496e954f77d173b475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 38
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_fc6e9015b96e179124ded32980f6af1ea2edd8385c8ed7496e954f77d173b475->leave($__internal_fc6e9015b96e179124ded32980f6af1ea2edd8385c8ed7496e954f77d173b475_prof);

    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_a92170782f838cf1ff9fe6b49a912280ca12edb145b54f703c96fc3d67df8e64 = $this->env->getExtension("native_profiler");
        $__internal_a92170782f838cf1ff9fe6b49a912280ca12edb145b54f703c96fc3d67df8e64->enter($__internal_a92170782f838cf1ff9fe6b49a912280ca12edb145b54f703c96fc3d67df8e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 46
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 48
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
            // line 49
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</div>";
        
        $__internal_a92170782f838cf1ff9fe6b49a912280ca12edb145b54f703c96fc3d67df8e64->leave($__internal_a92170782f838cf1ff9fe6b49a912280ca12edb145b54f703c96fc3d67df8e64_prof);

    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_e58923548015613ec79f449cfb291fd36e7d0cf023e7cabeaef2b43b505ddc47 = $this->env->getExtension("native_profiler");
        $__internal_e58923548015613ec79f449cfb291fd36e7d0cf023e7cabeaef2b43b505ddc47->enter($__internal_e58923548015613ec79f449cfb291fd36e7d0cf023e7cabeaef2b43b505ddc47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 55
        if ((((((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && (null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) &&  !(isset($context["placeholder_in_choices"]) ? $context["placeholder_in_choices"] : $this->getContext($context, "placeholder_in_choices"))) &&  !(isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) && ( !$this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "size", array(), "any", true, true) || ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "size", array()) <= 1)))) {
            // line 56
            $context["required"] = false;
        }
        // line 58
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 59
        if ( !(null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) {
            // line 60
            echo "<option value=\"\"";
            if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")) != "")) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder"))) : ($this->env->getExtension('translator')->trans((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 62
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 63
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
            // line 64
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 65
            if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0) &&  !(null === (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator"))))) {
                // line 66
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 69
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
        // line 70
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 71
        echo "</select>";
        
        $__internal_e58923548015613ec79f449cfb291fd36e7d0cf023e7cabeaef2b43b505ddc47->leave($__internal_e58923548015613ec79f449cfb291fd36e7d0cf023e7cabeaef2b43b505ddc47_prof);

    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_6617d3aaa3e551c252e5dc721a96bb24d8f023aae82efd1a3949c5248d36bc40 = $this->env->getExtension("native_profiler");
        $__internal_6617d3aaa3e551c252e5dc721a96bb24d8f023aae82efd1a3949c5248d36bc40->enter($__internal_6617d3aaa3e551c252e5dc721a96bb24d8f023aae82efd1a3949c5248d36bc40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 76
            if (twig_test_iterable($context["choice"])) {
                // line 77
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain")) === false)) ? ($context["group_label"]) : ($this->env->getExtension('translator')->trans($context["group_label"], array(), (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "\">
                ";
                // line 78
                $context["options"] = $context["choice"];
                // line 79
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 80
                echo "</optgroup>";
            } else {
                // line 82
                $context["attr"] = $this->getAttribute($context["choice"], "attr", array());
                // line 83
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                echo "\" ";
                $this->displayBlock("attributes", $context, $blocks);
                if ($this->env->getExtension('form')->isSelectedChoice($context["choice"], (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain")) === false)) ? ($this->getAttribute($context["choice"], "label", array())) : ($this->env->getExtension('translator')->trans($this->getAttribute($context["choice"], "label", array()), array(), (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
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
        
        $__internal_6617d3aaa3e551c252e5dc721a96bb24d8f023aae82efd1a3949c5248d36bc40->leave($__internal_6617d3aaa3e551c252e5dc721a96bb24d8f023aae82efd1a3949c5248d36bc40_prof);

    }

    // line 88
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_d5a0bd370c5dedf8ae3d3682a27b92bf6565d2cf5dc12832786038be7075007b = $this->env->getExtension("native_profiler");
        $__internal_d5a0bd370c5dedf8ae3d3682a27b92bf6565d2cf5dc12832786038be7075007b->enter($__internal_d5a0bd370c5dedf8ae3d3682a27b92bf6565d2cf5dc12832786038be7075007b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 89
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_d5a0bd370c5dedf8ae3d3682a27b92bf6565d2cf5dc12832786038be7075007b->leave($__internal_d5a0bd370c5dedf8ae3d3682a27b92bf6565d2cf5dc12832786038be7075007b_prof);

    }

    // line 92
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_f5f385a6963dc577e46e4a473c2687fa061851f2f9632d6371202d673f9d6a9a = $this->env->getExtension("native_profiler");
        $__internal_f5f385a6963dc577e46e4a473c2687fa061851f2f9632d6371202d673f9d6a9a->enter($__internal_f5f385a6963dc577e46e4a473c2687fa061851f2f9632d6371202d673f9d6a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 93
        echo "<input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_f5f385a6963dc577e46e4a473c2687fa061851f2f9632d6371202d673f9d6a9a->leave($__internal_f5f385a6963dc577e46e4a473c2687fa061851f2f9632d6371202d673f9d6a9a_prof);

    }

    // line 96
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_560e32e4456ae88fd6d49d0b0c78ce2a94ba3baa8461a3f973cd5b6d31d86056 = $this->env->getExtension("native_profiler");
        $__internal_560e32e4456ae88fd6d49d0b0c78ce2a94ba3baa8461a3f973cd5b6d31d86056->enter($__internal_560e32e4456ae88fd6d49d0b0c78ce2a94ba3baa8461a3f973cd5b6d31d86056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 97
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 98
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 100
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 101
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 102
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 103
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget');
            // line 104
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget');
            // line 105
            echo "</div>";
        }
        
        $__internal_560e32e4456ae88fd6d49d0b0c78ce2a94ba3baa8461a3f973cd5b6d31d86056->leave($__internal_560e32e4456ae88fd6d49d0b0c78ce2a94ba3baa8461a3f973cd5b6d31d86056_prof);

    }

    // line 109
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_8a6ea1c01ca68aa1b2e4757ae0d4f97b64ef5d583adda8de8084a1d2dfabb02d = $this->env->getExtension("native_profiler");
        $__internal_8a6ea1c01ca68aa1b2e4757ae0d4f97b64ef5d583adda8de8084a1d2dfabb02d->enter($__internal_8a6ea1c01ca68aa1b2e4757ae0d4f97b64ef5d583adda8de8084a1d2dfabb02d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 110
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 111
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 113
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 114
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 115
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 116
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 117
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 119
            echo "</div>";
        }
        
        $__internal_8a6ea1c01ca68aa1b2e4757ae0d4f97b64ef5d583adda8de8084a1d2dfabb02d->leave($__internal_8a6ea1c01ca68aa1b2e4757ae0d4f97b64ef5d583adda8de8084a1d2dfabb02d_prof);

    }

    // line 123
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_5c236bf877d36abb90058abb1515017339ad4e3f23a0870fb7f624e62c10f7e4 = $this->env->getExtension("native_profiler");
        $__internal_5c236bf877d36abb90058abb1515017339ad4e3f23a0870fb7f624e62c10f7e4->enter($__internal_5c236bf877d36abb90058abb1515017339ad4e3f23a0870fb7f624e62c10f7e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 124
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 125
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 127
            $context["vars"] = ((((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 128
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 129
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            }
            // line 130
            echo "        </div>";
        }
        
        $__internal_5c236bf877d36abb90058abb1515017339ad4e3f23a0870fb7f624e62c10f7e4->leave($__internal_5c236bf877d36abb90058abb1515017339ad4e3f23a0870fb7f624e62c10f7e4_prof);

    }

    // line 134
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_35c39bed57f43ab0923ea01c78542a9a6bb62f78bc1dd9a302e3b841045896b0 = $this->env->getExtension("native_profiler");
        $__internal_35c39bed57f43ab0923ea01c78542a9a6bb62f78bc1dd9a302e3b841045896b0->enter($__internal_35c39bed57f43ab0923ea01c78542a9a6bb62f78bc1dd9a302e3b841045896b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 136
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 137
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_35c39bed57f43ab0923ea01c78542a9a6bb62f78bc1dd9a302e3b841045896b0->leave($__internal_35c39bed57f43ab0923ea01c78542a9a6bb62f78bc1dd9a302e3b841045896b0_prof);

    }

    // line 140
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_7903a8d2fc2d135e6f3de7ee8a06fb70b3983927d5d2cfbff1b529114a9d2fd1 = $this->env->getExtension("native_profiler");
        $__internal_7903a8d2fc2d135e6f3de7ee8a06fb70b3983927d5d2cfbff1b529114a9d2fd1->enter($__internal_7903a8d2fc2d135e6f3de7ee8a06fb70b3983927d5d2cfbff1b529114a9d2fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 141
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "number")) : ("number"));
        // line 142
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_7903a8d2fc2d135e6f3de7ee8a06fb70b3983927d5d2cfbff1b529114a9d2fd1->leave($__internal_7903a8d2fc2d135e6f3de7ee8a06fb70b3983927d5d2cfbff1b529114a9d2fd1_prof);

    }

    // line 145
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_4a2f8dcfc5e415edd6de44ad5976e2a78cc3287058946342ab412053a1a0daef = $this->env->getExtension("native_profiler");
        $__internal_4a2f8dcfc5e415edd6de44ad5976e2a78cc3287058946342ab412053a1a0daef->enter($__internal_4a2f8dcfc5e415edd6de44ad5976e2a78cc3287058946342ab412053a1a0daef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 146
        echo twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_4a2f8dcfc5e415edd6de44ad5976e2a78cc3287058946342ab412053a1a0daef->leave($__internal_4a2f8dcfc5e415edd6de44ad5976e2a78cc3287058946342ab412053a1a0daef_prof);

    }

    // line 149
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_a5fc3c0303d8abeceea427c6b7df72af155cbbbef0976c12093de651c86fae49 = $this->env->getExtension("native_profiler");
        $__internal_a5fc3c0303d8abeceea427c6b7df72af155cbbbef0976c12093de651c86fae49->enter($__internal_a5fc3c0303d8abeceea427c6b7df72af155cbbbef0976c12093de651c86fae49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 150
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "url")) : ("url"));
        // line 151
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_a5fc3c0303d8abeceea427c6b7df72af155cbbbef0976c12093de651c86fae49->leave($__internal_a5fc3c0303d8abeceea427c6b7df72af155cbbbef0976c12093de651c86fae49_prof);

    }

    // line 154
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_6204da7414f94a46814c3c30743f7056752bfaf4bbbb12f636032010844501ba = $this->env->getExtension("native_profiler");
        $__internal_6204da7414f94a46814c3c30743f7056752bfaf4bbbb12f636032010844501ba->enter($__internal_6204da7414f94a46814c3c30743f7056752bfaf4bbbb12f636032010844501ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 155
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "search")) : ("search"));
        // line 156
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_6204da7414f94a46814c3c30743f7056752bfaf4bbbb12f636032010844501ba->leave($__internal_6204da7414f94a46814c3c30743f7056752bfaf4bbbb12f636032010844501ba_prof);

    }

    // line 159
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_29119f80cb2d744568f027ed28d3f3c4d1676e0bfe943581af8c9cac20a3150d = $this->env->getExtension("native_profiler");
        $__internal_29119f80cb2d744568f027ed28d3f3c4d1676e0bfe943581af8c9cac20a3150d->enter($__internal_29119f80cb2d744568f027ed28d3f3c4d1676e0bfe943581af8c9cac20a3150d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 160
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 161
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_29119f80cb2d744568f027ed28d3f3c4d1676e0bfe943581af8c9cac20a3150d->leave($__internal_29119f80cb2d744568f027ed28d3f3c4d1676e0bfe943581af8c9cac20a3150d_prof);

    }

    // line 164
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_a0e6c8729f2a943efcbc04412a1c4e4ac98a758b600ece428367a4f46e3a44fc = $this->env->getExtension("native_profiler");
        $__internal_a0e6c8729f2a943efcbc04412a1c4e4ac98a758b600ece428367a4f46e3a44fc->enter($__internal_a0e6c8729f2a943efcbc04412a1c4e4ac98a758b600ece428367a4f46e3a44fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 165
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "password")) : ("password"));
        // line 166
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_a0e6c8729f2a943efcbc04412a1c4e4ac98a758b600ece428367a4f46e3a44fc->leave($__internal_a0e6c8729f2a943efcbc04412a1c4e4ac98a758b600ece428367a4f46e3a44fc_prof);

    }

    // line 169
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_6b94223ccb415ef2c56a78720a82d66dcfa956b3c31e1de32688b7a096539aba = $this->env->getExtension("native_profiler");
        $__internal_6b94223ccb415ef2c56a78720a82d66dcfa956b3c31e1de32688b7a096539aba->enter($__internal_6b94223ccb415ef2c56a78720a82d66dcfa956b3c31e1de32688b7a096539aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 170
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "hidden")) : ("hidden"));
        // line 171
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_6b94223ccb415ef2c56a78720a82d66dcfa956b3c31e1de32688b7a096539aba->leave($__internal_6b94223ccb415ef2c56a78720a82d66dcfa956b3c31e1de32688b7a096539aba_prof);

    }

    // line 174
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_0ed8c87fd529e81cc800e46faf3825305608bf770fc05985b0a455524987fc0f = $this->env->getExtension("native_profiler");
        $__internal_0ed8c87fd529e81cc800e46faf3825305608bf770fc05985b0a455524987fc0f->enter($__internal_0ed8c87fd529e81cc800e46faf3825305608bf770fc05985b0a455524987fc0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 175
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "email")) : ("email"));
        // line 176
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_0ed8c87fd529e81cc800e46faf3825305608bf770fc05985b0a455524987fc0f->leave($__internal_0ed8c87fd529e81cc800e46faf3825305608bf770fc05985b0a455524987fc0f_prof);

    }

    // line 179
    public function block_range_widget($context, array $blocks = array())
    {
        $__internal_c2d1ba53e183cf883b1d4e6a926a4a43dadfc3a8a422c5879760fe812021e228 = $this->env->getExtension("native_profiler");
        $__internal_c2d1ba53e183cf883b1d4e6a926a4a43dadfc3a8a422c5879760fe812021e228->enter($__internal_c2d1ba53e183cf883b1d4e6a926a4a43dadfc3a8a422c5879760fe812021e228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        // line 180
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "range")) : ("range"));
        // line 181
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_c2d1ba53e183cf883b1d4e6a926a4a43dadfc3a8a422c5879760fe812021e228->leave($__internal_c2d1ba53e183cf883b1d4e6a926a4a43dadfc3a8a422c5879760fe812021e228_prof);

    }

    // line 184
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_61eb56e0dc6c159b1fc3c5b85cf2114d3a080f130a37fd9368225a842fbf50bb = $this->env->getExtension("native_profiler");
        $__internal_61eb56e0dc6c159b1fc3c5b85cf2114d3a080f130a37fd9368225a842fbf50bb->enter($__internal_61eb56e0dc6c159b1fc3c5b85cf2114d3a080f130a37fd9368225a842fbf50bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 185
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 186
            if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                // line 187
                $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                 // line 188
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                 // line 189
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            } else {
                // line 192
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            }
        }
        // line 195
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "</button>";
        
        $__internal_61eb56e0dc6c159b1fc3c5b85cf2114d3a080f130a37fd9368225a842fbf50bb->leave($__internal_61eb56e0dc6c159b1fc3c5b85cf2114d3a080f130a37fd9368225a842fbf50bb_prof);

    }

    // line 198
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_d17a95ed6ef5a615a605da0cc75dbfdcabdb3e4f30720b15df3888f2d74b065d = $this->env->getExtension("native_profiler");
        $__internal_d17a95ed6ef5a615a605da0cc75dbfdcabdb3e4f30720b15df3888f2d74b065d->enter($__internal_d17a95ed6ef5a615a605da0cc75dbfdcabdb3e4f30720b15df3888f2d74b065d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 199
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "submit")) : ("submit"));
        // line 200
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_d17a95ed6ef5a615a605da0cc75dbfdcabdb3e4f30720b15df3888f2d74b065d->leave($__internal_d17a95ed6ef5a615a605da0cc75dbfdcabdb3e4f30720b15df3888f2d74b065d_prof);

    }

    // line 203
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_6b6cc09b16c1888b08247b9d4bc8a5300b5585933489a1f9693152775e4e9121 = $this->env->getExtension("native_profiler");
        $__internal_6b6cc09b16c1888b08247b9d4bc8a5300b5585933489a1f9693152775e4e9121->enter($__internal_6b6cc09b16c1888b08247b9d4bc8a5300b5585933489a1f9693152775e4e9121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 204
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "reset")) : ("reset"));
        // line 205
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_6b6cc09b16c1888b08247b9d4bc8a5300b5585933489a1f9693152775e4e9121->leave($__internal_6b6cc09b16c1888b08247b9d4bc8a5300b5585933489a1f9693152775e4e9121_prof);

    }

    // line 210
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_58df9441f5336318520f9b9fb62ecbb77bb70e9cf53e6c5ee19813feacf5e805 = $this->env->getExtension("native_profiler");
        $__internal_58df9441f5336318520f9b9fb62ecbb77bb70e9cf53e6c5ee19813feacf5e805->enter($__internal_58df9441f5336318520f9b9fb62ecbb77bb70e9cf53e6c5ee19813feacf5e805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 211
        if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 212
            if ( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
                // line 213
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            }
            // line 215
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 216
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 218
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 219
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 220
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 221
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 222
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 225
                    $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 228
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</label>";
        }
        
        $__internal_58df9441f5336318520f9b9fb62ecbb77bb70e9cf53e6c5ee19813feacf5e805->leave($__internal_58df9441f5336318520f9b9fb62ecbb77bb70e9cf53e6c5ee19813feacf5e805_prof);

    }

    // line 232
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_571c0a172704962c2de1eb9bd2626dfd10d411ceb35f8f2f91829cb12bfece31 = $this->env->getExtension("native_profiler");
        $__internal_571c0a172704962c2de1eb9bd2626dfd10d411ceb35f8f2f91829cb12bfece31->enter($__internal_571c0a172704962c2de1eb9bd2626dfd10d411ceb35f8f2f91829cb12bfece31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_571c0a172704962c2de1eb9bd2626dfd10d411ceb35f8f2f91829cb12bfece31->leave($__internal_571c0a172704962c2de1eb9bd2626dfd10d411ceb35f8f2f91829cb12bfece31_prof);

    }

    // line 236
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_eea7eedaff857904961c5190c9e40a02a9ac3fb765232305f6f452210ac0381c = $this->env->getExtension("native_profiler");
        $__internal_eea7eedaff857904961c5190c9e40a02a9ac3fb765232305f6f452210ac0381c->enter($__internal_eea7eedaff857904961c5190c9e40a02a9ac3fb765232305f6f452210ac0381c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 241
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_eea7eedaff857904961c5190c9e40a02a9ac3fb765232305f6f452210ac0381c->leave($__internal_eea7eedaff857904961c5190c9e40a02a9ac3fb765232305f6f452210ac0381c_prof);

    }

    // line 244
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_e439c3280645428b8c50402b5ffbac0826093e7e600c88087cd94f84027bf308 = $this->env->getExtension("native_profiler");
        $__internal_e439c3280645428b8c50402b5ffbac0826093e7e600c88087cd94f84027bf308->enter($__internal_e439c3280645428b8c50402b5ffbac0826093e7e600c88087cd94f84027bf308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 245
        echo "<div>";
        // line 246
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 247
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 248
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 249
        echo "</div>";
        
        $__internal_e439c3280645428b8c50402b5ffbac0826093e7e600c88087cd94f84027bf308->leave($__internal_e439c3280645428b8c50402b5ffbac0826093e7e600c88087cd94f84027bf308_prof);

    }

    // line 252
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_b4bc6bb54ec51a69b76984bd0fb3e3f45d0315c760551134b765785fb021958a = $this->env->getExtension("native_profiler");
        $__internal_b4bc6bb54ec51a69b76984bd0fb3e3f45d0315c760551134b765785fb021958a->enter($__internal_b4bc6bb54ec51a69b76984bd0fb3e3f45d0315c760551134b765785fb021958a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 253
        echo "<div>";
        // line 254
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 255
        echo "</div>";
        
        $__internal_b4bc6bb54ec51a69b76984bd0fb3e3f45d0315c760551134b765785fb021958a->leave($__internal_b4bc6bb54ec51a69b76984bd0fb3e3f45d0315c760551134b765785fb021958a_prof);

    }

    // line 258
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_54e5864a8f1471f7765cf0cc6d4adbdd3f305b3028af9198564e782d54c5560f = $this->env->getExtension("native_profiler");
        $__internal_54e5864a8f1471f7765cf0cc6d4adbdd3f305b3028af9198564e782d54c5560f->enter($__internal_54e5864a8f1471f7765cf0cc6d4adbdd3f305b3028af9198564e782d54c5560f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 259
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        
        $__internal_54e5864a8f1471f7765cf0cc6d4adbdd3f305b3028af9198564e782d54c5560f->leave($__internal_54e5864a8f1471f7765cf0cc6d4adbdd3f305b3028af9198564e782d54c5560f_prof);

    }

    // line 264
    public function block_form($context, array $blocks = array())
    {
        $__internal_05f9824560c79c05e29646ec9be24bec578ea2b3134e2135e8fd0e7347555f0f = $this->env->getExtension("native_profiler");
        $__internal_05f9824560c79c05e29646ec9be24bec578ea2b3134e2135e8fd0e7347555f0f->enter($__internal_05f9824560c79c05e29646ec9be24bec578ea2b3134e2135e8fd0e7347555f0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 265
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        // line 266
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 267
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_05f9824560c79c05e29646ec9be24bec578ea2b3134e2135e8fd0e7347555f0f->leave($__internal_05f9824560c79c05e29646ec9be24bec578ea2b3134e2135e8fd0e7347555f0f_prof);

    }

    // line 270
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_1ac23e76ac4d0771d5c36a8df65ce8bd47214ba9d39126528c399de193ea1dfc = $this->env->getExtension("native_profiler");
        $__internal_1ac23e76ac4d0771d5c36a8df65ce8bd47214ba9d39126528c399de193ea1dfc->enter($__internal_1ac23e76ac4d0771d5c36a8df65ce8bd47214ba9d39126528c399de193ea1dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 271
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")));
        // line 272
        if (twig_in_filter((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), array(0 => "GET", 1 => "POST"))) {
            // line 273
            $context["form_method"] = (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method"));
        } else {
            // line 275
            $context["form_method"] = "POST";
        }
        // line 277
        echo "<form name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method"))), "html", null, true);
        echo "\"";
        if (((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) != "")) {
            echo " action=\"";
            echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
            echo "\"";
        }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if ((isset($context["multipart"]) ? $context["multipart"] : $this->getContext($context, "multipart"))) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 278
        if (((isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method")) != (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")))) {
            // line 279
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "html", null, true);
            echo "\" />";
        }
        
        $__internal_1ac23e76ac4d0771d5c36a8df65ce8bd47214ba9d39126528c399de193ea1dfc->leave($__internal_1ac23e76ac4d0771d5c36a8df65ce8bd47214ba9d39126528c399de193ea1dfc_prof);

    }

    // line 283
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_39e4f88d98993137ef6b099746b861a6242dd7f6978910e94061a113cb4e13aa = $this->env->getExtension("native_profiler");
        $__internal_39e4f88d98993137ef6b099746b861a6242dd7f6978910e94061a113cb4e13aa->enter($__internal_39e4f88d98993137ef6b099746b861a6242dd7f6978910e94061a113cb4e13aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 284
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) ? $context["render_rest"] : $this->getContext($context, "render_rest")))) {
            // line 285
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        }
        // line 287
        echo "</form>";
        
        $__internal_39e4f88d98993137ef6b099746b861a6242dd7f6978910e94061a113cb4e13aa->leave($__internal_39e4f88d98993137ef6b099746b861a6242dd7f6978910e94061a113cb4e13aa_prof);

    }

    // line 290
    public function block_form_enctype($context, array $blocks = array())
    {
        $__internal_47090a0f5cad0da170a6257c54fff63f50390406e7315667bc7e4ef47b9ca5fa = $this->env->getExtension("native_profiler");
        $__internal_47090a0f5cad0da170a6257c54fff63f50390406e7315667bc7e4ef47b9ca5fa->enter($__internal_47090a0f5cad0da170a6257c54fff63f50390406e7315667bc7e4ef47b9ca5fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_enctype"));

        // line 291
        if ((isset($context["multipart"]) ? $context["multipart"] : $this->getContext($context, "multipart"))) {
            echo "enctype=\"multipart/form-data\"";
        }
        
        $__internal_47090a0f5cad0da170a6257c54fff63f50390406e7315667bc7e4ef47b9ca5fa->leave($__internal_47090a0f5cad0da170a6257c54fff63f50390406e7315667bc7e4ef47b9ca5fa_prof);

    }

    // line 294
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_3c0ca6d68bb94d57d9940bd2634a6f0f82344a8e74d7634e7e04d8cfdc4c7095 = $this->env->getExtension("native_profiler");
        $__internal_3c0ca6d68bb94d57d9940bd2634a6f0f82344a8e74d7634e7e04d8cfdc4c7095->enter($__internal_3c0ca6d68bb94d57d9940bd2634a6f0f82344a8e74d7634e7e04d8cfdc4c7095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 295
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 296
            echo "<ul>";
            // line 297
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 298
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 300
            echo "</ul>";
        }
        
        $__internal_3c0ca6d68bb94d57d9940bd2634a6f0f82344a8e74d7634e7e04d8cfdc4c7095->leave($__internal_3c0ca6d68bb94d57d9940bd2634a6f0f82344a8e74d7634e7e04d8cfdc4c7095_prof);

    }

    // line 304
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_c4d3b6978503caf7558455e87040ec4b432e6774eaa94a7ea6ceb58bb701a4f3 = $this->env->getExtension("native_profiler");
        $__internal_c4d3b6978503caf7558455e87040ec4b432e6774eaa94a7ea6ceb58bb701a4f3->enter($__internal_c4d3b6978503caf7558455e87040ec4b432e6774eaa94a7ea6ceb58bb701a4f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 305
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 306
            if ( !$this->getAttribute($context["child"], "rendered", array())) {
                // line 307
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_c4d3b6978503caf7558455e87040ec4b432e6774eaa94a7ea6ceb58bb701a4f3->leave($__internal_c4d3b6978503caf7558455e87040ec4b432e6774eaa94a7ea6ceb58bb701a4f3_prof);

    }

    // line 314
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_b496f3827ddb3c203e189ec5318cff32c2608353e7c1f0869e374aa0cadc61cb = $this->env->getExtension("native_profiler");
        $__internal_b496f3827ddb3c203e189ec5318cff32c2608353e7c1f0869e374aa0cadc61cb->enter($__internal_b496f3827ddb3c203e189ec5318cff32c2608353e7c1f0869e374aa0cadc61cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 315
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 316
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_b496f3827ddb3c203e189ec5318cff32c2608353e7c1f0869e374aa0cadc61cb->leave($__internal_b496f3827ddb3c203e189ec5318cff32c2608353e7c1f0869e374aa0cadc61cb_prof);

    }

    // line 320
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_d786e55ef4ed50ba249e08d95c16c790d684fb18669d6f407f18b58dfff94025 = $this->env->getExtension("native_profiler");
        $__internal_d786e55ef4ed50ba249e08d95c16c790d684fb18669d6f407f18b58dfff94025->enter($__internal_d786e55ef4ed50ba249e08d95c16c790d684fb18669d6f407f18b58dfff94025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 321
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        // line 322
        if ((isset($context["read_only"]) ? $context["read_only"] : $this->getContext($context, "read_only"))) {
            echo " readonly=\"readonly\"";
        }
        // line 323
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 324
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            echo " required=\"required\"";
        }
        // line 325
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            if (("readonly" != $context["attrname"])) {
                // line 326
                echo " ";
                // line 327
                if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                    // line 328
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
                    echo "\"";
                } elseif ((                // line 329
$context["attrvalue"] === true)) {
                    // line 330
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "\"";
                } elseif ( !(                // line 331
$context["attrvalue"] === false)) {
                    // line 332
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\"";
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_d786e55ef4ed50ba249e08d95c16c790d684fb18669d6f407f18b58dfff94025->leave($__internal_d786e55ef4ed50ba249e08d95c16c790d684fb18669d6f407f18b58dfff94025_prof);

    }

    // line 337
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_eae9277ff798a4518341250c1a713de0f04e9a0c38388eaa07c9c46a15dae226 = $this->env->getExtension("native_profiler");
        $__internal_eae9277ff798a4518341250c1a713de0f04e9a0c38388eaa07c9c46a15dae226->enter($__internal_eae9277ff798a4518341250c1a713de0f04e9a0c38388eaa07c9c46a15dae226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 338
        if ( !twig_test_empty((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\"";
        }
        // line 339
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 340
            echo " ";
            // line 341
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 342
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 343
$context["attrvalue"] === true)) {
                // line 344
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 345
$context["attrvalue"] === false)) {
                // line 346
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_eae9277ff798a4518341250c1a713de0f04e9a0c38388eaa07c9c46a15dae226->leave($__internal_eae9277ff798a4518341250c1a713de0f04e9a0c38388eaa07c9c46a15dae226_prof);

    }

    // line 351
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_7048eb8371fc92ca0cf37e9c9a71833badf7ad4a39fa59f18031658db8ae1b68 = $this->env->getExtension("native_profiler");
        $__internal_7048eb8371fc92ca0cf37e9c9a71833badf7ad4a39fa59f18031658db8ae1b68->enter($__internal_7048eb8371fc92ca0cf37e9c9a71833badf7ad4a39fa59f18031658db8ae1b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 352
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 353
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 354
            echo " ";
            // line 355
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 356
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 357
$context["attrvalue"] === true)) {
                // line 358
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 359
$context["attrvalue"] === false)) {
                // line 360
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_7048eb8371fc92ca0cf37e9c9a71833badf7ad4a39fa59f18031658db8ae1b68->leave($__internal_7048eb8371fc92ca0cf37e9c9a71833badf7ad4a39fa59f18031658db8ae1b68_prof);

    }

    // line 365
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_e30fde05184ce9e1ab6f6550e1fa80eb45c45e538ef37cf0797c22bd68ea3b1e = $this->env->getExtension("native_profiler");
        $__internal_e30fde05184ce9e1ab6f6550e1fa80eb45c45e538ef37cf0797c22bd68ea3b1e->enter($__internal_e30fde05184ce9e1ab6f6550e1fa80eb45c45e538ef37cf0797c22bd68ea3b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        // line 366
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 367
            echo " ";
            // line 368
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 369
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 370
$context["attrvalue"] === true)) {
                // line 371
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 372
$context["attrvalue"] === false)) {
                // line 373
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_e30fde05184ce9e1ab6f6550e1fa80eb45c45e538ef37cf0797c22bd68ea3b1e->leave($__internal_e30fde05184ce9e1ab6f6550e1fa80eb45c45e538ef37cf0797c22bd68ea3b1e_prof);

    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1290 => 373,  1288 => 372,  1283 => 371,  1281 => 370,  1276 => 369,  1274 => 368,  1272 => 367,  1268 => 366,  1262 => 365,  1247 => 360,  1245 => 359,  1240 => 358,  1238 => 357,  1233 => 356,  1231 => 355,  1229 => 354,  1225 => 353,  1216 => 352,  1210 => 351,  1195 => 346,  1193 => 345,  1188 => 344,  1186 => 343,  1181 => 342,  1179 => 341,  1177 => 340,  1173 => 339,  1167 => 338,  1161 => 337,  1145 => 332,  1143 => 331,  1138 => 330,  1136 => 329,  1131 => 328,  1129 => 327,  1127 => 326,  1122 => 325,  1118 => 324,  1114 => 323,  1110 => 322,  1104 => 321,  1098 => 320,  1087 => 316,  1083 => 315,  1077 => 314,  1065 => 307,  1063 => 306,  1059 => 305,  1053 => 304,  1045 => 300,  1037 => 298,  1033 => 297,  1031 => 296,  1029 => 295,  1023 => 294,  1014 => 291,  1008 => 290,  1001 => 287,  998 => 285,  996 => 284,  990 => 283,  980 => 279,  978 => 278,  951 => 277,  948 => 275,  945 => 273,  943 => 272,  941 => 271,  935 => 270,  928 => 267,  926 => 266,  924 => 265,  918 => 264,  911 => 259,  905 => 258,  898 => 255,  896 => 254,  894 => 253,  888 => 252,  881 => 249,  879 => 248,  877 => 247,  875 => 246,  873 => 245,  867 => 244,  860 => 241,  854 => 236,  843 => 232,  820 => 228,  816 => 225,  813 => 222,  812 => 221,  811 => 220,  809 => 219,  807 => 218,  804 => 216,  802 => 215,  799 => 213,  797 => 212,  795 => 211,  789 => 210,  782 => 205,  780 => 204,  774 => 203,  767 => 200,  765 => 199,  759 => 198,  746 => 195,  742 => 192,  739 => 189,  738 => 188,  737 => 187,  735 => 186,  733 => 185,  727 => 184,  720 => 181,  718 => 180,  712 => 179,  705 => 176,  703 => 175,  697 => 174,  690 => 171,  688 => 170,  682 => 169,  675 => 166,  673 => 165,  667 => 164,  659 => 161,  657 => 160,  651 => 159,  644 => 156,  642 => 155,  636 => 154,  629 => 151,  627 => 150,  621 => 149,  614 => 146,  608 => 145,  601 => 142,  599 => 141,  593 => 140,  586 => 137,  584 => 136,  578 => 134,  570 => 130,  560 => 129,  555 => 128,  553 => 127,  550 => 125,  548 => 124,  542 => 123,  534 => 119,  532 => 117,  531 => 116,  530 => 115,  529 => 114,  525 => 113,  522 => 111,  520 => 110,  514 => 109,  506 => 105,  504 => 104,  502 => 103,  500 => 102,  498 => 101,  494 => 100,  491 => 98,  489 => 97,  483 => 96,  466 => 93,  460 => 92,  443 => 89,  437 => 88,  408 => 83,  406 => 82,  403 => 80,  401 => 79,  399 => 78,  394 => 77,  392 => 76,  375 => 75,  369 => 74,  362 => 71,  360 => 70,  358 => 69,  352 => 66,  350 => 65,  348 => 64,  346 => 63,  344 => 62,  335 => 60,  333 => 59,  326 => 58,  323 => 56,  321 => 55,  315 => 54,  308 => 51,  302 => 49,  300 => 48,  296 => 47,  292 => 46,  286 => 45,  278 => 41,  275 => 39,  273 => 38,  267 => 37,  256 => 34,  250 => 33,  243 => 30,  240 => 28,  238 => 27,  232 => 26,  225 => 23,  223 => 22,  221 => 21,  218 => 19,  216 => 18,  212 => 17,  206 => 16,  189 => 13,  187 => 12,  181 => 11,  173 => 7,  170 => 5,  168 => 4,  162 => 3,  155 => 365,  153 => 351,  151 => 337,  149 => 320,  147 => 314,  144 => 311,  142 => 304,  140 => 294,  138 => 290,  136 => 283,  134 => 270,  132 => 264,  130 => 258,  128 => 252,  126 => 244,  124 => 236,  122 => 232,  120 => 210,  118 => 203,  116 => 198,  114 => 184,  112 => 179,  110 => 174,  108 => 169,  106 => 164,  104 => 159,  102 => 154,  100 => 149,  98 => 145,  96 => 140,  94 => 134,  92 => 123,  90 => 109,  88 => 96,  86 => 92,  84 => 88,  82 => 74,  80 => 54,  78 => 45,  76 => 37,  74 => 33,  72 => 26,  70 => 16,  68 => 11,  66 => 3,);
    }
}
/* {# Widgets #}*/
/* */
/* {%- block form_widget -%}*/
/*     {% if compound %}*/
/*         {{- block('form_widget_compound') -}}*/
/*     {% else %}*/
/*         {{- block('form_widget_simple') -}}*/
/*     {% endif %}*/
/* {%- endblock form_widget -%}*/
/* */
/* {%- block form_widget_simple -%}*/
/*     {%- set type = type|default('text') -%}*/
/*     <input type="{{ type }}" {{ block('widget_attributes') }} {% if value is not empty %}value="{{ value }}" {% endif %}/>*/
/* {%- endblock form_widget_simple -%}*/
/* */
/* {%- block form_widget_compound -%}*/
/*     <div {{ block('widget_container_attributes') }}>*/
/*         {%- if form.parent is empty -%}*/
/*             {{ form_errors(form) }}*/
/*         {%- endif -%}*/
/*         {{- block('form_rows') -}}*/
/*         {{- form_rest(form) -}}*/
/*     </div>*/
/* {%- endblock form_widget_compound -%}*/
/* */
/* {%- block collection_widget -%}*/
/*     {% if prototype is defined %}*/
/*         {%- set attr = attr|merge({'data-prototype': form_row(prototype) }) -%}*/
/*     {% endif %}*/
/*     {{- block('form_widget') -}}*/
/* {%- endblock collection_widget -%}*/
/* */
/* {%- block textarea_widget -%}*/
/*     <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>*/
/* {%- endblock textarea_widget -%}*/
/* */
/* {%- block choice_widget -%}*/
/*     {% if expanded %}*/
/*         {{- block('choice_widget_expanded') -}}*/
/*     {% else %}*/
/*         {{- block('choice_widget_collapsed') -}}*/
/*     {% endif %}*/
/* {%- endblock choice_widget -%}*/
/* */
/* {%- block choice_widget_expanded -%}*/
/*     <div {{ block('widget_container_attributes') }}>*/
/*     {%- for child in form %}*/
/*         {{- form_widget(child) -}}*/
/*         {{- form_label(child, null, {translation_domain: choice_translation_domain}) -}}*/
/*     {% endfor -%}*/
/*     </div>*/
/* {%- endblock choice_widget_expanded -%}*/
/* */
/* {%- block choice_widget_collapsed -%}*/
/*     {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}*/
/*         {% set required = false %}*/
/*     {%- endif -%}*/
/*     <select {{ block('widget_attributes') }}{% if multiple %} multiple="multiple"{% endif %}>*/
/*         {%- if placeholder is not none -%}*/
/*             <option value=""{% if required and value is empty %} selected="selected"{% endif %}>{{ placeholder != '' ? (translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain)) }}</option>*/
/*         {%- endif -%}*/
/*         {%- if preferred_choices|length > 0 -%}*/
/*             {% set options = preferred_choices %}*/
/*             {{- block('choice_widget_options') -}}*/
/*             {%- if choices|length > 0 and separator is not none -%}*/
/*                 <option disabled="disabled">{{ separator }}</option>*/
/*             {%- endif -%}*/
/*         {%- endif -%}*/
/*         {%- set options = choices -%}*/
/*         {{- block('choice_widget_options') -}}*/
/*     </select>*/
/* {%- endblock choice_widget_collapsed -%}*/
/* */
/* {%- block choice_widget_options -%}*/
/*     {% for group_label, choice in options %}*/
/*         {%- if choice is iterable -%}*/
/*             <optgroup label="{{ choice_translation_domain is same as(false) ? group_label : group_label|trans({}, choice_translation_domain) }}">*/
/*                 {% set options = choice %}*/
/*                 {{- block('choice_widget_options') -}}*/
/*             </optgroup>*/
/*         {%- else -%}*/
/*             {% set attr = choice.attr %}*/
/*             <option value="{{ choice.value }}" {{ block('attributes') }}{% if choice is selectedchoice(value) %} selected="selected"{% endif %}>{{ choice_translation_domain is same as(false) ? choice.label : choice.label|trans({}, choice_translation_domain) }}</option>*/
/*         {%- endif -%}*/
/*     {% endfor %}*/
/* {%- endblock choice_widget_options -%}*/
/* */
/* {%- block checkbox_widget -%}*/
/*     <input type="checkbox" {{ block('widget_attributes') }}{% if value is defined %} value="{{ value }}"{% endif %}{% if checked %} checked="checked"{% endif %} />*/
/* {%- endblock checkbox_widget -%}*/
/* */
/* {%- block radio_widget -%}*/
/*     <input type="radio" {{ block('widget_attributes') }}{% if value is defined %} value="{{ value }}"{% endif %}{% if checked %} checked="checked"{% endif %} />*/
/* {%- endblock radio_widget -%}*/
/* */
/* {%- block datetime_widget -%}*/
/*     {% if widget == 'single_text' %}*/
/*         {{- block('form_widget_simple') -}}*/
/*     {%- else -%}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {{- form_errors(form.date) -}}*/
/*             {{- form_errors(form.time) -}}*/
/*             {{- form_widget(form.date) -}}*/
/*             {{- form_widget(form.time) -}}*/
/*         </div>*/
/*     {%- endif -%}*/
/* {%- endblock datetime_widget -%}*/
/* */
/* {%- block date_widget -%}*/
/*     {%- if widget == 'single_text' -%}*/
/*         {{ block('form_widget_simple') }}*/
/*     {%- else -%}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {{- date_pattern|replace({*/
/*                 '{{ year }}':  form_widget(form.year),*/
/*                 '{{ month }}': form_widget(form.month),*/
/*                 '{{ day }}':   form_widget(form.day),*/
/*             })|raw -}}*/
/*         </div>*/
/*     {%- endif -%}*/
/* {%- endblock date_widget -%}*/
/* */
/* {%- block time_widget -%}*/
/*     {%- if widget == 'single_text' -%}*/
/*         {{ block('form_widget_simple') }}*/
/*     {%- else -%}*/
/*         {%- set vars = widget == 'text' ? { 'attr': { 'size': 1 }} : {} -%}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {{ form_widget(form.hour, vars) }}{% if with_minutes %}:{{ form_widget(form.minute, vars) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second, vars) }}{% endif %}*/
/*         </div>*/
/*     {%- endif -%}*/
/* {%- endblock time_widget -%}*/
/* */
/* {%- block number_widget -%}*/
/*     {# type="number" doesn't work with floats #}*/
/*     {%- set type = type|default('text') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock number_widget -%}*/
/* */
/* {%- block integer_widget -%}*/
/*     {%- set type = type|default('number') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock integer_widget -%}*/
/* */
/* {%- block money_widget -%}*/
/*     {{ money_pattern|replace({ '{{ widget }}': block('form_widget_simple') })|raw }}*/
/* {%- endblock money_widget -%}*/
/* */
/* {%- block url_widget -%}*/
/*     {%- set type = type|default('url') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock url_widget -%}*/
/* */
/* {%- block search_widget -%}*/
/*     {%- set type = type|default('search') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock search_widget -%}*/
/* */
/* {%- block percent_widget -%}*/
/*     {%- set type = type|default('text') -%}*/
/*     {{ block('form_widget_simple') }} %*/
/* {%- endblock percent_widget -%}*/
/* */
/* {%- block password_widget -%}*/
/*     {%- set type = type|default('password') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock password_widget -%}*/
/* */
/* {%- block hidden_widget -%}*/
/*     {%- set type = type|default('hidden') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock hidden_widget -%}*/
/* */
/* {%- block email_widget -%}*/
/*     {%- set type = type|default('email') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock email_widget -%}*/
/* */
/* {%- block range_widget -%}*/
/*     {% set type = type|default('range') %}*/
/*     {{- block('form_widget_simple') -}}*/
/* {%- endblock range_widget %}*/
/* */
/* {%- block button_widget -%}*/
/*     {%- if label is empty -%}*/
/*         {%- if label_format is not empty -%}*/
/*             {% set label = label_format|replace({*/
/*                 '%name%': name,*/
/*                 '%id%': id,*/
/*             }) %}*/
/*         {%- else -%}*/
/*             {% set label = name|humanize %}*/
/*         {%- endif -%}*/
/*     {%- endif -%}*/
/*     <button type="{{ type|default('button') }}" {{ block('button_attributes') }}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</button>*/
/* {%- endblock button_widget -%}*/
/* */
/* {%- block submit_widget -%}*/
/*     {%- set type = type|default('submit') -%}*/
/*     {{ block('button_widget') }}*/
/* {%- endblock submit_widget -%}*/
/* */
/* {%- block reset_widget -%}*/
/*     {%- set type = type|default('reset') -%}*/
/*     {{ block('button_widget') }}*/
/* {%- endblock reset_widget -%}*/
/* */
/* {# Labels #}*/
/* */
/* {%- block form_label -%}*/
/*     {% if label is not same as(false) -%}*/
/*         {% if not compound -%}*/
/*             {% set label_attr = label_attr|merge({'for': id}) %}*/
/*         {%- endif -%}*/
/*         {% if required -%}*/
/*             {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}*/
/*         {%- endif -%}*/
/*         {% if label is empty -%}*/
/*             {%- if label_format is not empty -%}*/
/*                 {% set label = label_format|replace({*/
/*                     '%name%': name,*/
/*                     '%id%': id,*/
/*                 }) %}*/
/*             {%- else -%}*/
/*                 {% set label = name|humanize %}*/
/*             {%- endif -%}*/
/*         {%- endif -%}*/
/*         <label{% for attrname, attrvalue in label_attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</label>*/
/*     {%- endif -%}*/
/* {%- endblock form_label -%}*/
/* */
/* {%- block button_label -%}{%- endblock -%}*/
/* */
/* {# Rows #}*/
/* */
/* {%- block repeated_row -%}*/
/*     {#*/
/*     No need to render the errors here, as all errors are mapped*/
/*     to the first child (see RepeatedTypeValidatorExtension).*/
/*     #}*/
/*     {{- block('form_rows') -}}*/
/* {%- endblock repeated_row -%}*/
/* */
/* {%- block form_row -%}*/
/*     <div>*/
/*         {{- form_label(form) -}}*/
/*         {{- form_errors(form) -}}*/
/*         {{- form_widget(form) -}}*/
/*     </div>*/
/* {%- endblock form_row -%}*/
/* */
/* {%- block button_row -%}*/
/*     <div>*/
/*         {{- form_widget(form) -}}*/
/*     </div>*/
/* {%- endblock button_row -%}*/
/* */
/* {%- block hidden_row -%}*/
/*     {{ form_widget(form) }}*/
/* {%- endblock hidden_row -%}*/
/* */
/* {# Misc #}*/
/* */
/* {%- block form -%}*/
/*     {{ form_start(form) }}*/
/*         {{- form_widget(form) -}}*/
/*     {{ form_end(form) }}*/
/* {%- endblock form -%}*/
/* */
/* {%- block form_start -%}*/
/*     {% set method = method|upper %}*/
/*     {%- if method in ["GET", "POST"] -%}*/
/*         {% set form_method = method %}*/
/*     {%- else -%}*/
/*         {% set form_method = "POST" %}*/
/*     {%- endif -%}*/
/*     <form name="{{ name }}" method="{{ form_method|lower }}"{% if action != '' %} action="{{ action }}"{% endif %}{% for attrname, attrvalue in attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}{% if multipart %} enctype="multipart/form-data"{% endif %}>*/
/*     {%- if form_method != method -%}*/
/*         <input type="hidden" name="_method" value="{{ method }}" />*/
/*     {%- endif -%}*/
/* {%- endblock form_start -%}*/
/* */
/* {%- block form_end -%}*/
/*     {%- if not render_rest is defined or render_rest -%}*/
/*         {{ form_rest(form) }}*/
/*     {%- endif -%}*/
/*     </form>*/
/* {%- endblock form_end -%}*/
/* */
/* {%- block form_enctype -%}*/
/*     {% if multipart %}enctype="multipart/form-data"{% endif %}*/
/* {%- endblock form_enctype -%}*/
/* */
/* {%- block form_errors -%}*/
/*     {%- if errors|length > 0 -%}*/
/*     <ul>*/
/*         {%- for error in errors -%}*/
/*             <li>{{ error.message }}</li>*/
/*         {%- endfor -%}*/
/*     </ul>*/
/*     {%- endif -%}*/
/* {%- endblock form_errors -%}*/
/* */
/* {%- block form_rest -%}*/
/*     {% for child in form -%}*/
/*         {% if not child.rendered %}*/
/*             {{- form_row(child) -}}*/
/*         {% endif %}*/
/*     {%- endfor %}*/
/* {% endblock form_rest %}*/
/* */
/* {# Support #}*/
/* */
/* {%- block form_rows -%}*/
/*     {% for child in form %}*/
/*         {{- form_row(child) -}}*/
/*     {% endfor %}*/
/* {%- endblock form_rows -%}*/
/* */
/* {%- block widget_attributes -%}*/
/*     id="{{ id }}" name="{{ full_name }}"*/
/*     {%- if read_only %} readonly="readonly"{% endif -%}*/
/*     {%- if disabled %} disabled="disabled"{% endif -%}*/
/*     {%- if required %} required="required"{% endif -%}*/
/*     {%- for attrname, attrvalue in attr if 'readonly' != attrname -%}*/
/*         {{- " " -}}*/
/*         {%- if attrname in ['placeholder', 'title'] -%}*/
/*             {{- attrname }}="{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}"*/
/*         {%- elseif attrvalue is same as(true) -%}*/
/*             {{- attrname }}="{{ attrname }}"*/
/*         {%- elseif attrvalue is not same as(false) -%}*/
/*             {{- attrname }}="{{ attrvalue }}"*/
/*         {%- endif -%}*/
/*     {%- endfor -%}*/
/* {%- endblock widget_attributes -%}*/
/* */
/* {%- block widget_container_attributes -%}*/
/*     {%- if id is not empty %}id="{{ id }}"{% endif -%}*/
/*     {%- for attrname, attrvalue in attr -%}*/
/*         {{- " " -}}*/
/*         {%- if attrname in ['placeholder', 'title'] -%}*/
/*             {{- attrname }}="{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}"*/
/*         {%- elseif attrvalue is same as(true) -%}*/
/*             {{- attrname }}="{{ attrname }}"*/
/*         {%- elseif attrvalue is not same as(false) -%}*/
/*             {{- attrname }}="{{ attrvalue }}"*/
/*         {%- endif -%}*/
/*     {%- endfor -%}*/
/* {%- endblock widget_container_attributes -%}*/
/* */
/* {%- block button_attributes -%}*/
/*     id="{{ id }}" name="{{ full_name }}"{% if disabled %} disabled="disabled"{% endif -%}*/
/*     {%- for attrname, attrvalue in attr -%}*/
/*         {{- " " -}}*/
/*         {%- if attrname in ['placeholder', 'title'] -%}*/
/*             {{- attrname }}="{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}"*/
/*         {%- elseif attrvalue is same as(true) -%}*/
/*             {{- attrname }}="{{ attrname }}"*/
/*         {%- elseif attrvalue is not same as(false) -%}*/
/*             {{- attrname }}="{{ attrvalue }}"*/
/*         {%- endif -%}*/
/*     {%- endfor -%}*/
/* {%- endblock button_attributes -%}*/
/* */
/* {% block attributes -%}*/
/*     {%- for attrname, attrvalue in attr -%}*/
/*         {{- " " -}}*/
/*         {%- if attrname in ['placeholder', 'title'] -%}*/
/*             {{- attrname }}="{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}"*/
/*         {%- elseif attrvalue is same as(true) -%}*/
/*             {{- attrname }}="{{ attrname }}"*/
/*         {%- elseif attrvalue is not same as(false) -%}*/
/*             {{- attrname }}="{{ attrvalue }}"*/
/*         {%- endif -%}*/
/*     {%- endfor -%}*/
/* {%- endblock attributes -%}*/
/* */
