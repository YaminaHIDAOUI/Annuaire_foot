<?php

/* SonataAdminBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_99a34e0b86ac22caa2f2510033e121616c8a559f9003a79941b061b50a75808b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_label' => array($this, 'block_form_label'),
            'widget_container_attributes_choice_widget' => array($this, 'block_widget_container_attributes_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'form_row' => array($this, 'block_form_row'),
            'label' => array($this, 'block_label'),
            'collection_widget_row' => array($this, 'block_collection_widget_row'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'sonata_type_immutable_array_widget' => array($this, 'block_sonata_type_immutable_array_widget'),
            'sonata_type_immutable_array_widget_row' => array($this, 'block_sonata_type_immutable_array_widget_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 12
        $this->displayBlock('form_label', $context, $blocks);
        // line 60
        echo "
";
        // line 61
        $this->displayBlock('widget_container_attributes_choice_widget', $context, $blocks);
        // line 68
        echo "
";
        // line 69
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 81
        echo "
";
        // line 82
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 122
        echo "
";
        // line 123
        $this->displayBlock('form_row', $context, $blocks);
        // line 173
        echo "
";
        // line 174
        $this->displayBlock('collection_widget_row', $context, $blocks);
        // line 184
        echo "
";
        // line 185
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 203
        echo "
";
        // line 204
        $this->displayBlock('sonata_type_immutable_array_widget', $context, $blocks);
        // line 217
        echo "
";
        // line 218
        $this->displayBlock('sonata_type_immutable_array_widget_row', $context, $blocks);
    }

    // line 12
    public function block_form_label($context, array $blocks = array())
    {
        // line 13
        ob_start();
        // line 14
        echo "
    ";
        // line 15
        $context["label_class"] = "";
        // line 16
        echo "    ";
        if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin") && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "getConfigurationPool", array(), "method"), "getOption", array(0 => "form_type"), "method") == "horizontal"))) {
            // line 17
            echo "        ";
            $context["label_class"] = "control-label col-sm-3";
            // line 18
            echo "    ";
        } else {
            // line 19
            echo "        ";
            $context["label_class"] = "control-label";
            // line 20
            echo "    ";
        }
        // line 21
        echo "
    ";
        // line 23
        echo "    ";
        if ((!((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false))) {
            // line 24
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class"), "")) : ("")) . (isset($context["label_class"]) ? $context["label_class"] : $this->getContext($context, "label_class")))));
            // line 25
            echo "
        ";
            // line 26
            if ((!(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")))) {
                // line 27
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                // line 28
                echo "        ";
            }
            // line 29
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 30
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class"), "")) : ("")) . " required"))));
                // line 31
                echo "        ";
            }
            // line 32
            echo "
        ";
            // line 33
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 34
                echo "            ";
                $context["label"] = call_user_func_array($this->env->getFilter('humanize')->getCallable(), array((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))));
                // line 35
                echo "        ";
            }
            // line 36
            echo "
        ";
            // line 37
            if (((array_key_exists("in_list_checkbox", $context) && (isset($context["in_list_checkbox"]) ? $context["in_list_checkbox"] : $this->getContext($context, "in_list_checkbox"))) && array_key_exists("widget", $context))) {
                // line 38
                echo "            <label";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")), "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">
                ";
                // line 39
                echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
                echo "
                <span>
                    ";
                // line 41
                if ((!$this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"))) {
                    // line 42
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                } else {
                    // line 44
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "translationDomain")), "html", null, true);
                }
                // line 46
                echo "                </span>
            </label>
        ";
            } else {
                // line 49
                echo "            <label";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")), "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">
                ";
                // line 50
                if ((!$this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"))) {
                    // line 51
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                } else {
                    // line 53
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "trans", array(0 => (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), 1 => array(), 2 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "translationDomain")), "method"), "html", null, true);
                    echo "
                ";
                }
                // line 55
                echo "            </label>
        ";
            }
            // line 57
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 61
    public function block_widget_container_attributes_choice_widget($context, array $blocks = array())
    {
        // line 62
        echo "    ";
        ob_start();
        // line 63
        echo "        id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\"
        ";
        // line 64
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
            echo "=\"";
            if (((isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")) == "class")) {
                echo "list-unstyled ";
            }
            echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")), "html", null, true);
            echo "\" ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "        ";
        if (!twig_in_filter("class", (isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")))) {
            echo "class=\"list-unstyled\"";
        }
        // line 66
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 69
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 70
        ob_start();
        // line 71
        echo "    <ul ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 72
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 73
            echo "            <li>
                ";
            // line 74
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
            echo " ";
            // line 75
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'label');
            echo "
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "    </ul>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 82
    public function block_choice_widget($context, array $blocks = array())
    {
        // line 83
        ob_start();
        // line 84
        echo "    ";
        if ((isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
            // line 85
            echo "        <ul ";
            $this->displayBlock("widget_container_attributes_choice_widget", $context, $blocks);
            echo ">
        ";
            // line 86
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 87
                echo "            <li>
                ";
                // line 88
                ob_start();
                // line 89
                echo "                    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
                echo " ";
                // line 90
                echo "                ";
                $context["form_widget_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 91
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'label', array("in_list_checkbox" => true, "widget" => (isset($context["form_widget_content"]) ? $context["form_widget_content"] : $this->getContext($context, "form_widget_content"))) + (twig_test_empty($_label_ = (($this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "vars", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "vars", array(), "any", false, true), "label"), null)) : (null))) ? array() : array("label" => $_label_)));
                echo "
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "        </ul>
    ";
        } else {
            // line 96
            echo "    ";
            if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin") && (!$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "getConfigurationPool", array(), "method"), "getOption", array(0 => "use_select2"), "method")))) {
                // line 97
                echo "        ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " form-control")));
                // line 98
                echo "    ";
            }
            // line 99
            echo "    <select ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
                echo " multiple=\"multiple\"";
            }
            echo ">
        ";
            // line 100
            if ((!(null === (isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value"))))) {
                // line 101
                echo "            <option value=\"\">
                ";
                // line 102
                if ((!$this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"))) {
                    // line 103
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                } else {
                    // line 105
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")), array(), $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "translationDomain")), "html", null, true);
                }
                // line 107
                echo "            </option>
        ";
            }
            // line 109
            echo "        ";
            if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
                // line 110
                echo "            ";
                $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
                // line 111
                echo "            ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
            ";
                // line 112
                if ((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0)) {
                    // line 113
                    echo "                <option disabled=\"disabled\">";
                    echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                    echo "</option>
            ";
                }
                // line 115
                echo "        ";
            }
            // line 116
            echo "        ";
            $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
            // line 117
            echo "        ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
    </select>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 123
    public function block_form_row($context, array $blocks = array())
    {
        // line 124
        echo "    ";
        $context["label_class"] = "";
        // line 125
        echo "    ";
        $context["div_class"] = "";
        // line 126
        echo "    ";
        if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin") && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "getConfigurationPool", array(), "method"), "getOption", array(0 => "form_type"), "method") == "horizontal"))) {
            // line 127
            echo "        ";
            $context["label_class"] = "control-label col-sm-3";
            // line 128
            echo "        ";
            $context["div_class"] = "col-sm-9 col-md-9";
            // line 129
            echo "    ";
        } else {
            // line 130
            echo "        ";
            $context["label_class"] = "control-label";
            // line 131
            echo "    ";
        }
        // line 132
        echo "
    ";
        // line 133
        if ((((!array_key_exists("sonata_admin", $context)) || (!(isset($context["sonata_admin_enabled"]) ? $context["sonata_admin_enabled"] : $this->getContext($context, "sonata_admin_enabled")))) || (!$this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description")))) {
            // line 134
            echo "        <div class=\"form-group ";
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
                echo " has-error";
            }
            echo "\">
            ";
            // line 135
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
            echo "
            <div class=\"";
            // line 136
            if (((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
                echo "sonata-collection-row-without-label";
            }
            echo "\">
                ";
            // line 137
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
            echo " ";
            // line 138
            echo "                ";
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
                // line 139
                echo "                    <div class=\"help-block sonata-ba-field-error-messages\">
                        ";
                // line 140
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
                echo "
                    </div>
                ";
            }
            // line 143
            echo "            </div>
        </div>
    ";
        } else {
            // line 146
            echo "        <div class=\"form-group";
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
                echo " has-error";
            }
            echo "\" id=\"sonata-ba-field-container-";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\">
            ";
            // line 147
            $this->displayBlock('label', $context, $blocks);
            // line 154
            echo "
            ";
            // line 155
            $context["has_label"] = ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true) || (!((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)));
            // line 156
            echo "            <div class=\"";
            echo twig_escape_filter($this->env, (isset($context["div_class"]) ? $context["div_class"] : $this->getContext($context, "div_class")), "html", null, true);
            echo " sonata-ba-field sonata-ba-field-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit"), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "inline"), "html", null, true);
            echo " ";
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
                echo "sonata-ba-field-error";
            }
            echo " ";
            if ((!(isset($context["has_label"]) ? $context["has_label"] : $this->getContext($context, "has_label")))) {
                echo "sonata-collection-row-without-label";
            }
            echo "\">

                ";
            // line 158
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
            echo " ";
            // line 159
            echo "
                ";
            // line 160
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
                // line 161
                echo "                    <div class=\"help-block sonata-ba-field-error-messages\">
                        ";
                // line 162
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
                echo "
                    </div>
                ";
            }
            // line 165
            echo "
                ";
            // line 166
            if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "help")) {
                // line 167
                echo "                    <span class=\"help-block sonata-ba-field-help\">";
                echo $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "trans", array(0 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "help"), 1 => array(), 2 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "translationDomain")), "method");
                echo "</span>
                ";
            }
            // line 169
            echo "            </div>
        </div>
    ";
        }
    }

    // line 147
    public function block_label($context, array $blocks = array())
    {
        // line 148
        echo "                ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 149
            echo "                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("attr" => array("class" => (isset($context["label_class"]) ? $context["label_class"] : $this->getContext($context, "label_class")))) + (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "options"), "name")) ? array() : array("label" => $_label_)));
            echo "
                ";
        } else {
            // line 151
            echo "                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("attr" => array("class" => (isset($context["label_class"]) ? $context["label_class"] : $this->getContext($context, "label_class")))) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
            echo "
                ";
        }
        // line 153
        echo "            ";
    }

    // line 174
    public function block_collection_widget_row($context, array $blocks = array())
    {
        // line 175
        ob_start();
        // line 176
        echo "    <div class=\"sonata-collection-row\">
        ";
        // line 177
        if ((isset($context["allow_delete"]) ? $context["allow_delete"] : $this->getContext($context, "allow_delete"))) {
            // line 178
            echo "            <a href=\"#\" class=\"btn sonata-collection-delete\"><i class=\"fa fa-minus-circle\"></i></a>
        ";
        }
        // line 180
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'row');
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 185
    public function block_collection_widget($context, array $blocks = array())
    {
        // line 186
        ob_start();
        // line 187
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 188
            echo "        ";
            $context["child"] = (isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype"));
            // line 189
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-prototype" => $this->renderBlock("collection_widget_row", $context, $blocks), "data-prototype-name" => $this->getAttribute($this->getAttribute((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), "vars"), "name"), "class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : (""))));
            // line 190
            echo "    ";
        }
        // line 191
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 192
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        ";
        // line 193
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 194
            echo "            ";
            $this->displayBlock("collection_widget_row", $context, $blocks);
            echo "
        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 196
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        ";
        // line 197
        if ((isset($context["allow_add"]) ? $context["allow_add"] : $this->getContext($context, "allow_add"))) {
            // line 198
            echo "            <div><a href=\"#\" class=\"btn sonata-collection-add\"><i class=\"fa fa-plus-circle\"></i></a></div>
        ";
        }
        // line 200
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 204
    public function block_sonata_type_immutable_array_widget($context, array $blocks = array())
    {
        // line 205
        echo "    ";
        ob_start();
        // line 206
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 207
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

            ";
        // line 209
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
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
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            // line 210
            echo "                ";
            $this->displayBlock("sonata_type_immutable_array_widget_row", $context, $blocks);
            echo "
            ";
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 212
        echo "
            ";
        // line 213
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 218
    public function block_sonata_type_immutable_array_widget_row($context, array $blocks = array())
    {
        // line 219
        echo "    ";
        ob_start();
        // line 220
        echo "        <div class=\"form-group";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            echo " error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
        echo "\">

            ";
        // line 222
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'label');
        echo "

            ";
        // line 224
        $context["div_class"] = "";
        // line 225
        echo "            ";
        if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin") && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "getConfigurationPool", array(), "method"), "getOption", array(0 => "form_type"), "method") == "horizontal"))) {
            // line 226
            echo "                ";
            $context["div_class"] = "col-sm-9 col-md-9";
            // line 227
            echo "            ";
        }
        // line 228
        echo "
            <div class=\"";
        // line 229
        echo twig_escape_filter($this->env, (isset($context["div_class"]) ? $context["div_class"] : $this->getContext($context, "div_class")), "html", null, true);
        echo " sonata-ba-field sonata-ba-field-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "inline"), "html", null, true);
        echo " ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
                ";
        // line 230
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
        echo " ";
        // line 231
        echo "            </div>

            ";
        // line 233
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 234
            echo "                <div class=\"help-block sonata-ba-field-error-messages\">
                    ";
            // line 235
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'errors');
            echo "
                </div>
            ";
        }
        // line 238
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Form:form_admin_fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  786 => 238,  777 => 234,  775 => 233,  771 => 231,  768 => 230,  750 => 227,  747 => 226,  744 => 225,  742 => 224,  737 => 222,  725 => 220,  722 => 219,  719 => 218,  711 => 213,  708 => 212,  691 => 210,  674 => 209,  669 => 207,  664 => 206,  648 => 198,  646 => 197,  624 => 194,  603 => 192,  595 => 190,  592 => 189,  589 => 188,  586 => 187,  584 => 186,  581 => 185,  572 => 180,  568 => 178,  566 => 177,  563 => 176,  561 => 175,  558 => 174,  554 => 153,  542 => 149,  539 => 148,  523 => 167,  521 => 166,  518 => 165,  507 => 160,  481 => 155,  476 => 147,  447 => 137,  441 => 136,  425 => 132,  422 => 131,  419 => 130,  416 => 129,  410 => 127,  404 => 125,  401 => 124,  382 => 115,  376 => 113,  369 => 111,  359 => 107,  356 => 105,  353 => 103,  329 => 96,  306 => 88,  303 => 87,  291 => 84,  286 => 82,  280 => 78,  267 => 74,  195 => 51,  321 => 152,  295 => 142,  274 => 135,  272 => 134,  242 => 113,  236 => 109,  216 => 100,  70 => 33,  1414 => 421,  1408 => 419,  1402 => 417,  1400 => 416,  1398 => 415,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1339 => 396,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  780 => 235,  772 => 172,  769 => 171,  767 => 170,  764 => 169,  756 => 229,  753 => 228,  751 => 163,  749 => 162,  746 => 161,  739 => 156,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 149,  707 => 148,  699 => 142,  697 => 141,  696 => 140,  695 => 139,  694 => 138,  689 => 137,  680 => 134,  675 => 132,  662 => 125,  658 => 204,  654 => 123,  649 => 122,  643 => 120,  640 => 119,  638 => 118,  619 => 113,  617 => 112,  614 => 111,  598 => 191,  596 => 106,  593 => 105,  576 => 101,  564 => 99,  557 => 96,  550 => 94,  547 => 93,  527 => 91,  515 => 85,  512 => 162,  509 => 161,  503 => 81,  501 => 158,  493 => 78,  478 => 154,  467 => 146,  456 => 140,  450 => 138,  442 => 62,  433 => 60,  428 => 133,  426 => 58,  405 => 49,  390 => 43,  377 => 37,  371 => 35,  366 => 110,  363 => 109,  350 => 26,  335 => 98,  332 => 97,  316 => 16,  290 => 5,  276 => 395,  266 => 366,  263 => 365,  245 => 66,  207 => 269,  194 => 248,  76 => 13,  200 => 73,  58 => 28,  551 => 184,  546 => 182,  543 => 181,  541 => 180,  537 => 178,  531 => 175,  525 => 172,  520 => 170,  513 => 168,  511 => 167,  506 => 166,  502 => 164,  499 => 163,  496 => 79,  489 => 157,  483 => 156,  479 => 153,  475 => 152,  462 => 143,  448 => 139,  443 => 137,  424 => 128,  414 => 52,  408 => 50,  403 => 48,  399 => 116,  391 => 113,  388 => 117,  386 => 111,  375 => 106,  372 => 105,  354 => 102,  348 => 101,  346 => 100,  342 => 23,  325 => 94,  313 => 15,  308 => 89,  292 => 81,  255 => 71,  184 => 233,  155 => 53,  146 => 181,  124 => 31,  188 => 83,  181 => 232,  161 => 202,  692 => 399,  683 => 135,  678 => 133,  676 => 385,  666 => 126,  661 => 205,  656 => 378,  652 => 200,  645 => 369,  641 => 196,  635 => 117,  631 => 364,  625 => 361,  615 => 354,  607 => 193,  597 => 342,  590 => 338,  583 => 334,  579 => 332,  577 => 329,  575 => 328,  569 => 325,  565 => 324,  555 => 95,  548 => 151,  540 => 308,  536 => 147,  529 => 169,  524 => 90,  516 => 169,  510 => 293,  504 => 159,  500 => 291,  495 => 289,  490 => 77,  486 => 286,  482 => 285,  470 => 73,  464 => 71,  459 => 69,  452 => 268,  434 => 256,  421 => 126,  417 => 243,  400 => 47,  385 => 116,  361 => 207,  344 => 24,  339 => 191,  324 => 179,  310 => 89,  302 => 84,  296 => 82,  282 => 161,  259 => 149,  244 => 140,  231 => 133,  226 => 131,  186 => 239,  152 => 92,  320 => 122,  317 => 121,  311 => 14,  288 => 4,  284 => 106,  279 => 104,  275 => 103,  256 => 96,  250 => 69,  237 => 70,  232 => 84,  222 => 297,  215 => 280,  191 => 246,  150 => 65,  20 => 11,  270 => 75,  253 => 70,  233 => 304,  212 => 279,  210 => 270,  206 => 71,  198 => 53,  192 => 88,  185 => 86,  180 => 66,  175 => 77,  172 => 46,  167 => 48,  160 => 76,  137 => 46,  100 => 42,  90 => 20,  65 => 30,  129 => 148,  84 => 41,  358 => 139,  351 => 102,  347 => 134,  343 => 132,  338 => 99,  327 => 154,  323 => 125,  319 => 92,  315 => 91,  301 => 144,  299 => 86,  293 => 6,  289 => 83,  281 => 411,  277 => 136,  271 => 374,  265 => 130,  262 => 105,  260 => 72,  257 => 103,  251 => 101,  248 => 116,  239 => 97,  228 => 68,  225 => 64,  213 => 82,  211 => 81,  202 => 266,  197 => 90,  174 => 217,  165 => 77,  134 => 161,  127 => 32,  170 => 79,  113 => 41,  118 => 29,  34 => 61,  81 => 15,  77 => 35,  53 => 23,  23 => 18,  104 => 24,  97 => 63,  153 => 72,  148 => 64,  126 => 147,  114 => 111,  110 => 26,  480 => 75,  474 => 161,  469 => 158,  461 => 70,  457 => 153,  453 => 139,  444 => 263,  440 => 148,  437 => 135,  435 => 146,  430 => 134,  427 => 129,  423 => 57,  413 => 128,  409 => 132,  407 => 126,  402 => 237,  398 => 123,  393 => 114,  387 => 122,  384 => 121,  381 => 108,  379 => 119,  374 => 112,  368 => 34,  365 => 141,  362 => 110,  360 => 109,  355 => 27,  341 => 131,  337 => 22,  322 => 101,  314 => 99,  312 => 90,  309 => 148,  305 => 87,  298 => 91,  294 => 85,  285 => 3,  283 => 138,  278 => 410,  268 => 373,  264 => 73,  258 => 354,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 63,  214 => 61,  177 => 49,  169 => 44,  140 => 52,  132 => 34,  128 => 58,  107 => 25,  61 => 203,  273 => 394,  269 => 133,  254 => 147,  243 => 327,  240 => 65,  238 => 312,  235 => 311,  230 => 106,  227 => 301,  224 => 103,  221 => 67,  219 => 101,  217 => 62,  208 => 57,  204 => 55,  179 => 224,  159 => 39,  143 => 38,  135 => 35,  119 => 117,  102 => 74,  71 => 19,  67 => 32,  63 => 24,  59 => 185,  38 => 17,  94 => 57,  89 => 18,  85 => 34,  75 => 39,  68 => 31,  56 => 184,  26 => 14,  87 => 65,  31 => 60,  201 => 65,  196 => 65,  183 => 82,  171 => 216,  166 => 42,  163 => 45,  158 => 75,  156 => 195,  151 => 188,  142 => 61,  138 => 36,  136 => 60,  121 => 30,  117 => 51,  105 => 27,  91 => 56,  62 => 29,  49 => 123,  28 => 14,  24 => 13,  25 => 12,  21 => 11,  19 => 11,  93 => 34,  88 => 60,  78 => 14,  46 => 122,  44 => 82,  27 => 13,  79 => 32,  72 => 37,  69 => 218,  47 => 19,  40 => 18,  37 => 17,  22 => 12,  246 => 99,  157 => 57,  145 => 52,  139 => 169,  131 => 160,  123 => 57,  120 => 56,  115 => 28,  111 => 110,  108 => 48,  101 => 23,  98 => 21,  96 => 67,  83 => 16,  74 => 20,  66 => 217,  55 => 21,  52 => 17,  50 => 20,  43 => 20,  41 => 81,  35 => 16,  32 => 18,  29 => 12,  209 => 96,  203 => 93,  199 => 265,  193 => 50,  189 => 240,  187 => 87,  182 => 85,  176 => 82,  173 => 65,  168 => 62,  164 => 41,  162 => 60,  154 => 189,  149 => 182,  147 => 69,  144 => 68,  141 => 37,  133 => 55,  130 => 33,  125 => 46,  122 => 44,  116 => 116,  112 => 27,  109 => 105,  106 => 104,  103 => 43,  99 => 68,  95 => 20,  92 => 19,  86 => 17,  82 => 33,  80 => 41,  73 => 12,  64 => 204,  60 => 22,  57 => 20,  54 => 174,  51 => 173,  48 => 24,  45 => 23,  42 => 18,  39 => 69,  36 => 68,  33 => 13,  30 => 15,);
    }
}
