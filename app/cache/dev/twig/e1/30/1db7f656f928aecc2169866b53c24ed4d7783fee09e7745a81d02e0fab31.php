<?php

/* SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_one.html.twig */
class __TwigTemplate_e1301db7f656f928aecc2169866b53c24ed4d7783fee09e7745a81d02e0fab31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
            // line 16
            echo "        ";
            if ((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "hasAssociationAdmin") && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "hasRoute", array(0 => "edit"), "method")) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "isGranted", array(0 => "EDIT", 1 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "method"))) {
                // line 17
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "generateObjectUrl", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name"), 1 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "parameters")), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 19
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
                echo "
        ";
            }
            // line 21
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  692 => 399,  683 => 393,  678 => 390,  676 => 385,  666 => 382,  661 => 380,  656 => 378,  652 => 376,  645 => 369,  641 => 368,  635 => 365,  631 => 364,  625 => 361,  615 => 354,  607 => 349,  597 => 342,  590 => 338,  583 => 334,  579 => 332,  577 => 329,  575 => 328,  569 => 325,  565 => 324,  555 => 317,  548 => 313,  540 => 308,  536 => 306,  529 => 299,  524 => 297,  516 => 294,  510 => 293,  504 => 292,  500 => 291,  495 => 289,  490 => 287,  486 => 286,  482 => 285,  470 => 278,  464 => 275,  459 => 273,  452 => 268,  434 => 256,  421 => 244,  417 => 243,  400 => 233,  385 => 225,  361 => 207,  344 => 193,  339 => 191,  324 => 179,  310 => 171,  302 => 168,  296 => 167,  282 => 161,  259 => 149,  244 => 140,  231 => 133,  226 => 131,  186 => 111,  152 => 92,  320 => 122,  317 => 121,  311 => 118,  288 => 107,  284 => 106,  279 => 104,  275 => 103,  256 => 96,  250 => 93,  237 => 86,  232 => 84,  222 => 81,  215 => 126,  191 => 69,  150 => 55,  20 => 11,  270 => 157,  253 => 95,  233 => 81,  212 => 74,  210 => 75,  206 => 71,  198 => 66,  192 => 64,  185 => 68,  180 => 56,  175 => 53,  172 => 51,  167 => 48,  160 => 58,  137 => 37,  100 => 36,  90 => 20,  65 => 83,  129 => 59,  84 => 16,  358 => 139,  351 => 135,  347 => 134,  343 => 132,  338 => 130,  327 => 126,  323 => 125,  319 => 124,  315 => 173,  301 => 117,  299 => 112,  293 => 109,  289 => 163,  281 => 105,  277 => 109,  271 => 108,  265 => 99,  262 => 105,  260 => 98,  257 => 103,  251 => 101,  248 => 100,  239 => 97,  228 => 83,  225 => 87,  213 => 82,  211 => 81,  202 => 68,  197 => 119,  174 => 64,  165 => 59,  134 => 56,  127 => 76,  170 => 129,  113 => 41,  118 => 80,  34 => 15,  81 => 15,  77 => 27,  53 => 23,  23 => 18,  104 => 67,  97 => 63,  153 => 56,  148 => 60,  126 => 64,  114 => 71,  110 => 40,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 263,  440 => 148,  437 => 147,  435 => 146,  430 => 255,  427 => 143,  423 => 250,  413 => 241,  409 => 132,  407 => 238,  402 => 237,  398 => 232,  393 => 230,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 217,  368 => 112,  365 => 141,  362 => 110,  360 => 109,  355 => 106,  341 => 131,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 117,  305 => 115,  298 => 91,  294 => 90,  285 => 111,  283 => 88,  278 => 160,  268 => 3,  264 => 2,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 128,  214 => 69,  177 => 54,  169 => 49,  140 => 55,  132 => 67,  128 => 49,  107 => 52,  61 => 25,  273 => 96,  269 => 100,  254 => 147,  243 => 89,  240 => 139,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 79,  219 => 84,  217 => 79,  208 => 124,  204 => 73,  179 => 107,  159 => 61,  143 => 59,  135 => 81,  119 => 43,  102 => 37,  71 => 29,  67 => 28,  63 => 15,  59 => 14,  38 => 32,  94 => 35,  89 => 35,  85 => 34,  75 => 17,  68 => 15,  56 => 40,  26 => 14,  87 => 61,  31 => 22,  201 => 72,  196 => 65,  183 => 82,  171 => 102,  166 => 100,  163 => 45,  158 => 62,  156 => 93,  151 => 63,  142 => 59,  138 => 50,  136 => 56,  121 => 75,  117 => 34,  105 => 51,  91 => 28,  62 => 82,  49 => 21,  28 => 4,  24 => 7,  25 => 12,  21 => 12,  19 => 11,  93 => 21,  88 => 60,  78 => 53,  46 => 7,  44 => 19,  27 => 13,  79 => 37,  72 => 10,  69 => 50,  47 => 21,  40 => 20,  37 => 19,  22 => 3,  246 => 99,  157 => 56,  145 => 52,  139 => 98,  131 => 48,  123 => 47,  120 => 36,  115 => 33,  111 => 30,  108 => 39,  101 => 25,  98 => 24,  96 => 31,  83 => 25,  74 => 52,  66 => 29,  55 => 79,  52 => 20,  50 => 22,  43 => 19,  41 => 18,  35 => 17,  32 => 16,  29 => 15,  209 => 82,  203 => 122,  199 => 67,  193 => 73,  189 => 61,  187 => 60,  182 => 57,  176 => 65,  173 => 65,  168 => 60,  164 => 59,  162 => 57,  154 => 40,  149 => 51,  147 => 90,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 45,  122 => 44,  116 => 45,  112 => 42,  109 => 69,  106 => 36,  103 => 50,  99 => 73,  95 => 22,  92 => 61,  86 => 17,  82 => 33,  80 => 35,  73 => 29,  64 => 28,  60 => 23,  57 => 80,  54 => 10,  51 => 38,  48 => 21,  45 => 28,  42 => 18,  39 => 17,  36 => 17,  33 => 13,  30 => 14,);
    }
}
