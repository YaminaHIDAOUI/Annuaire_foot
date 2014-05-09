<?php

/* SonataDoctrineORMAdminBundle:CRUD:show_orm_one_to_many.html.twig */
class __TwigTemplate_b39634c8d22902b031718e5f8f3361ff46179fa9c95a1401b4ee4be7cd78abf7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig");

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    <ul class=\"sonata-ba-show-one-to-many\">
    ";
        // line 16
        if ((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "hasassociationadmin") && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "isGranted", array(0 => "EDIT"), "method")) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "hasRoute", array(0 => "edit"), "method"))) {
            // line 17
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 18
                echo "            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "generateObjectUrl", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name"), 1 => (isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "parameters")), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "    ";
        } else {
            // line 21
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 22
                echo "            <li>";
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "    ";
        }
        // line 25
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:show_orm_one_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 23,  551 => 184,  546 => 182,  543 => 181,  541 => 180,  537 => 178,  531 => 175,  525 => 172,  520 => 170,  513 => 168,  511 => 167,  506 => 166,  502 => 164,  499 => 163,  496 => 161,  489 => 157,  483 => 154,  479 => 153,  475 => 152,  462 => 146,  448 => 139,  443 => 137,  424 => 128,  414 => 122,  408 => 119,  403 => 117,  399 => 116,  391 => 113,  388 => 112,  386 => 111,  375 => 106,  372 => 105,  354 => 102,  348 => 100,  346 => 99,  342 => 97,  325 => 93,  313 => 90,  308 => 88,  292 => 81,  255 => 74,  184 => 64,  155 => 53,  146 => 49,  124 => 31,  188 => 84,  181 => 80,  161 => 71,  692 => 399,  683 => 393,  678 => 390,  676 => 385,  666 => 382,  661 => 380,  656 => 378,  652 => 376,  645 => 369,  641 => 368,  635 => 365,  631 => 364,  625 => 361,  615 => 354,  607 => 349,  597 => 342,  590 => 338,  583 => 334,  579 => 332,  577 => 329,  575 => 328,  569 => 325,  565 => 324,  555 => 317,  548 => 183,  540 => 308,  536 => 306,  529 => 299,  524 => 297,  516 => 169,  510 => 293,  504 => 292,  500 => 291,  495 => 289,  490 => 287,  486 => 286,  482 => 285,  470 => 278,  464 => 275,  459 => 273,  452 => 268,  434 => 256,  421 => 126,  417 => 243,  400 => 233,  385 => 225,  361 => 207,  344 => 193,  339 => 191,  324 => 179,  310 => 89,  302 => 84,  296 => 82,  282 => 161,  259 => 149,  244 => 140,  231 => 133,  226 => 131,  186 => 83,  152 => 92,  320 => 122,  317 => 121,  311 => 118,  288 => 107,  284 => 106,  279 => 104,  275 => 103,  256 => 96,  250 => 93,  237 => 70,  232 => 84,  222 => 81,  215 => 126,  191 => 69,  150 => 55,  20 => 11,  270 => 157,  253 => 95,  233 => 81,  212 => 74,  210 => 75,  206 => 71,  198 => 66,  192 => 86,  185 => 68,  180 => 62,  175 => 77,  172 => 51,  167 => 48,  160 => 58,  137 => 46,  100 => 36,  90 => 20,  65 => 30,  129 => 59,  84 => 39,  358 => 139,  351 => 135,  347 => 134,  343 => 132,  338 => 130,  327 => 126,  323 => 125,  319 => 92,  315 => 173,  301 => 117,  299 => 83,  293 => 109,  289 => 163,  281 => 105,  277 => 78,  271 => 108,  265 => 99,  262 => 105,  260 => 77,  257 => 103,  251 => 101,  248 => 100,  239 => 97,  228 => 68,  225 => 87,  213 => 82,  211 => 81,  202 => 68,  197 => 119,  174 => 60,  165 => 59,  134 => 45,  127 => 32,  170 => 129,  113 => 41,  118 => 80,  34 => 16,  81 => 25,  77 => 27,  53 => 23,  23 => 18,  104 => 67,  97 => 63,  153 => 56,  148 => 64,  126 => 42,  114 => 71,  110 => 48,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 263,  440 => 148,  437 => 134,  435 => 146,  430 => 130,  427 => 129,  423 => 250,  413 => 241,  409 => 132,  407 => 238,  402 => 237,  398 => 232,  393 => 114,  387 => 122,  384 => 121,  381 => 108,  379 => 119,  374 => 217,  368 => 103,  365 => 141,  362 => 110,  360 => 109,  355 => 106,  341 => 131,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 117,  305 => 87,  298 => 91,  294 => 90,  285 => 111,  283 => 88,  278 => 160,  268 => 3,  264 => 2,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 128,  214 => 69,  177 => 61,  169 => 57,  140 => 55,  132 => 44,  128 => 49,  107 => 52,  61 => 25,  273 => 96,  269 => 100,  254 => 147,  243 => 89,  240 => 139,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 67,  219 => 84,  217 => 79,  208 => 124,  204 => 66,  179 => 107,  159 => 70,  143 => 48,  135 => 35,  119 => 28,  102 => 38,  71 => 29,  67 => 27,  63 => 24,  59 => 23,  38 => 32,  94 => 35,  89 => 40,  85 => 34,  75 => 28,  68 => 31,  56 => 40,  26 => 13,  87 => 33,  31 => 15,  201 => 65,  196 => 65,  183 => 82,  171 => 102,  166 => 100,  163 => 45,  158 => 62,  156 => 93,  151 => 63,  142 => 61,  138 => 36,  136 => 56,  121 => 53,  117 => 34,  105 => 27,  91 => 28,  62 => 29,  49 => 20,  28 => 14,  24 => 12,  25 => 12,  21 => 11,  19 => 11,  93 => 34,  88 => 60,  78 => 29,  46 => 7,  44 => 19,  27 => 13,  79 => 37,  72 => 25,  69 => 24,  47 => 19,  40 => 13,  37 => 17,  22 => 12,  246 => 99,  157 => 56,  145 => 52,  139 => 98,  131 => 48,  123 => 47,  120 => 36,  115 => 50,  111 => 30,  108 => 39,  101 => 25,  98 => 37,  96 => 31,  83 => 25,  74 => 34,  66 => 25,  55 => 21,  52 => 20,  50 => 20,  43 => 18,  41 => 18,  35 => 16,  32 => 16,  29 => 15,  209 => 82,  203 => 122,  199 => 67,  193 => 73,  189 => 61,  187 => 60,  182 => 57,  176 => 65,  173 => 65,  168 => 60,  164 => 72,  162 => 55,  154 => 67,  149 => 50,  147 => 90,  144 => 49,  141 => 48,  133 => 55,  130 => 57,  125 => 45,  122 => 44,  116 => 45,  112 => 42,  109 => 40,  106 => 36,  103 => 46,  99 => 26,  95 => 43,  92 => 61,  86 => 17,  82 => 33,  80 => 35,  73 => 29,  64 => 23,  60 => 22,  57 => 20,  54 => 18,  51 => 21,  48 => 21,  45 => 19,  42 => 18,  39 => 17,  36 => 17,  33 => 13,  30 => 15,);
    }
}
