<?php

/* SonataAdminBundle:CRUD:list_choice.html.twig */
class __TwigTemplate_74b83bf7b5b295e3105d235ea04153b5cf0aed662d80903460f40fed0f9b60e7 extends Twig_Template
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
        ob_start();
        // line 16
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "choices", array(), "any", true, true)) {
            // line 17
            echo "        ";
            if ((($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "multiple", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "multiple") == true)) && twig_test_iterable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                // line 18
                echo "
            ";
                // line 19
                $context["result"] = "";
                // line 20
                echo "            ";
                $context["delimiter"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "delimiter", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "delimiter"), ", ")) : (", "));
                // line 21
                echo "
            ";
                // line 22
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
                foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
                    // line 23
                    echo "                ";
                    if ((!twig_test_empty((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result"))))) {
                        // line 24
                        echo "                    ";
                        $context["result"] = ((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")) . (isset($context["delimiter"]) ? $context["delimiter"] : $this->getContext($context, "delimiter")));
                        // line 25
                        echo "                ";
                    }
                    // line 26
                    echo "
                ";
                    // line 27
                    if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "choices", array(), "any", false, true), (isset($context["val"]) ? $context["val"] : $this->getContext($context, "val")), array(), "array", true, true)) {
                        // line 28
                        echo "                    ";
                        if ((!$this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true))) {
                            // line 29
                            echo "                        ";
                            $context["result"] = ((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")) . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "choices"), (isset($context["val"]) ? $context["val"] : $this->getContext($context, "val")), array(), "array"));
                            // line 30
                            echo "                    ";
                        } else {
                            // line 31
                            echo "                        ";
                            $context["result"] = ((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")) . $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "choices"), (isset($context["val"]) ? $context["val"] : $this->getContext($context, "val")), array(), "array"), array(), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "catalogue")));
                            // line 32
                            echo "                    ";
                        }
                        // line 33
                        echo "                ";
                    } else {
                        // line 34
                        echo "                    ";
                        $context["result"] = ((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")) . (isset($context["val"]) ? $context["val"] : $this->getContext($context, "val")));
                        // line 35
                        echo "                ";
                    }
                    // line 36
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "
            ";
                // line 38
                $context["value"] = (isset($context["result"]) ? $context["result"] : $this->getContext($context, "result"));
                // line 39
                echo "
        ";
            } elseif (twig_in_filter((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), twig_get_array_keys_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "choices")))) {
                // line 41
                echo "            ";
                if ((!$this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true))) {
                    // line 42
                    echo "                ";
                    $context["value"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "choices"), (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), array(), "array");
                    // line 43
                    echo "            ";
                } else {
                    // line 44
                    echo "                ";
                    $context["value"] = $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "choices"), (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), array(), "array"), array(), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "catalogue"));
                    // line 45
                    echo "            ";
                }
                // line 46
                echo "        ";
            }
            // line 47
            echo "    ";
        }
        // line 48
        echo "
    ";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_choice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 103,  300 => 93,  190 => 49,  12 => 36,  620 => 223,  612 => 220,  601 => 216,  599 => 215,  594 => 212,  585 => 209,  580 => 207,  574 => 205,  559 => 201,  545 => 198,  532 => 192,  526 => 190,  514 => 167,  497 => 156,  485 => 124,  463 => 117,  455 => 115,  415 => 127,  412 => 126,  406 => 111,  340 => 136,  333 => 132,  326 => 129,  318 => 86,  307 => 82,  287 => 89,  261 => 73,  178 => 46,  786 => 238,  777 => 234,  775 => 233,  771 => 231,  768 => 230,  750 => 227,  747 => 226,  744 => 225,  742 => 224,  737 => 222,  725 => 220,  722 => 219,  719 => 218,  711 => 213,  708 => 212,  691 => 210,  674 => 209,  669 => 207,  664 => 206,  648 => 198,  646 => 197,  624 => 224,  603 => 192,  595 => 190,  592 => 189,  589 => 188,  586 => 187,  584 => 186,  581 => 185,  572 => 204,  568 => 178,  566 => 203,  563 => 202,  561 => 175,  558 => 174,  554 => 153,  542 => 149,  539 => 148,  523 => 189,  521 => 166,  518 => 180,  507 => 165,  481 => 155,  476 => 147,  447 => 113,  441 => 136,  425 => 132,  422 => 131,  419 => 130,  416 => 129,  410 => 113,  404 => 90,  401 => 89,  382 => 115,  376 => 153,  369 => 148,  359 => 144,  356 => 105,  353 => 103,  329 => 130,  306 => 95,  303 => 94,  291 => 84,  286 => 82,  280 => 87,  267 => 74,  195 => 54,  321 => 100,  295 => 142,  274 => 135,  272 => 134,  242 => 113,  236 => 109,  216 => 100,  70 => 27,  1414 => 421,  1408 => 419,  1402 => 417,  1400 => 416,  1398 => 415,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1339 => 396,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  780 => 235,  772 => 172,  769 => 171,  767 => 170,  764 => 169,  756 => 229,  753 => 228,  751 => 163,  749 => 162,  746 => 161,  739 => 156,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 149,  707 => 148,  699 => 142,  697 => 141,  696 => 140,  695 => 139,  694 => 138,  689 => 137,  680 => 134,  675 => 132,  662 => 125,  658 => 204,  654 => 123,  649 => 122,  643 => 120,  640 => 119,  638 => 118,  619 => 113,  617 => 112,  614 => 111,  598 => 191,  596 => 106,  593 => 105,  576 => 101,  564 => 99,  557 => 96,  550 => 94,  547 => 93,  527 => 91,  515 => 85,  512 => 162,  509 => 161,  503 => 81,  501 => 163,  493 => 155,  478 => 154,  467 => 146,  456 => 140,  450 => 114,  442 => 62,  433 => 60,  428 => 133,  426 => 58,  405 => 49,  390 => 43,  377 => 37,  371 => 35,  366 => 110,  363 => 109,  350 => 26,  335 => 133,  332 => 97,  316 => 16,  290 => 90,  276 => 395,  266 => 366,  263 => 365,  245 => 66,  207 => 58,  194 => 52,  76 => 35,  200 => 73,  58 => 25,  551 => 199,  546 => 182,  543 => 181,  541 => 180,  537 => 178,  531 => 175,  525 => 172,  520 => 170,  513 => 168,  511 => 166,  506 => 166,  502 => 164,  499 => 163,  496 => 79,  489 => 157,  483 => 156,  479 => 153,  475 => 152,  462 => 143,  448 => 139,  443 => 137,  424 => 91,  414 => 52,  408 => 50,  403 => 48,  399 => 116,  391 => 163,  388 => 117,  386 => 111,  375 => 106,  372 => 105,  354 => 142,  348 => 101,  346 => 100,  342 => 23,  325 => 94,  313 => 84,  308 => 89,  292 => 91,  255 => 71,  184 => 48,  155 => 53,  146 => 181,  124 => 47,  188 => 83,  181 => 232,  161 => 202,  692 => 399,  683 => 135,  678 => 133,  676 => 385,  666 => 126,  661 => 205,  656 => 378,  652 => 200,  645 => 369,  641 => 196,  635 => 226,  631 => 364,  625 => 361,  615 => 354,  607 => 218,  597 => 342,  590 => 338,  583 => 334,  579 => 332,  577 => 206,  575 => 328,  569 => 325,  565 => 324,  555 => 200,  548 => 151,  540 => 308,  536 => 194,  529 => 191,  524 => 90,  516 => 169,  510 => 293,  504 => 164,  500 => 291,  495 => 289,  490 => 154,  486 => 286,  482 => 285,  470 => 121,  464 => 71,  459 => 116,  452 => 268,  434 => 256,  421 => 90,  417 => 243,  400 => 47,  385 => 159,  361 => 207,  344 => 24,  339 => 191,  324 => 179,  310 => 83,  302 => 79,  296 => 82,  282 => 161,  259 => 149,  244 => 140,  231 => 69,  226 => 131,  186 => 51,  152 => 36,  320 => 87,  317 => 121,  311 => 14,  288 => 4,  284 => 76,  279 => 104,  275 => 86,  256 => 79,  250 => 69,  237 => 71,  232 => 84,  222 => 66,  215 => 280,  191 => 246,  150 => 34,  20 => 11,  270 => 84,  253 => 78,  233 => 304,  212 => 60,  210 => 59,  206 => 57,  198 => 55,  192 => 53,  185 => 86,  180 => 49,  175 => 45,  172 => 46,  167 => 48,  160 => 40,  137 => 29,  100 => 57,  90 => 36,  65 => 29,  129 => 49,  84 => 34,  358 => 139,  351 => 141,  347 => 140,  343 => 132,  338 => 99,  327 => 102,  323 => 88,  319 => 92,  315 => 98,  301 => 144,  299 => 86,  293 => 6,  289 => 83,  281 => 75,  277 => 136,  271 => 374,  265 => 130,  262 => 81,  260 => 72,  257 => 103,  251 => 101,  248 => 116,  239 => 64,  228 => 68,  225 => 67,  213 => 82,  211 => 81,  202 => 55,  197 => 90,  174 => 217,  165 => 77,  134 => 28,  127 => 52,  170 => 79,  113 => 39,  118 => 29,  34 => 17,  81 => 33,  77 => 30,  53 => 18,  23 => 12,  104 => 34,  97 => 56,  153 => 72,  148 => 64,  126 => 48,  114 => 44,  110 => 63,  480 => 75,  474 => 122,  469 => 158,  461 => 70,  457 => 153,  453 => 139,  444 => 263,  440 => 148,  437 => 135,  435 => 146,  430 => 134,  427 => 129,  423 => 57,  413 => 128,  409 => 132,  407 => 126,  402 => 237,  398 => 88,  393 => 168,  387 => 122,  384 => 121,  381 => 157,  379 => 154,  374 => 112,  368 => 34,  365 => 141,  362 => 110,  360 => 109,  355 => 27,  341 => 131,  337 => 22,  322 => 101,  314 => 99,  312 => 97,  309 => 148,  305 => 87,  298 => 91,  294 => 85,  285 => 3,  283 => 138,  278 => 410,  268 => 373,  264 => 82,  258 => 72,  252 => 68,  247 => 75,  241 => 77,  229 => 73,  220 => 65,  214 => 63,  177 => 49,  169 => 44,  140 => 51,  132 => 57,  128 => 47,  107 => 48,  61 => 26,  273 => 85,  269 => 133,  254 => 147,  243 => 73,  240 => 72,  238 => 312,  235 => 63,  230 => 62,  227 => 301,  224 => 61,  221 => 67,  219 => 101,  217 => 64,  208 => 57,  204 => 57,  179 => 224,  159 => 39,  143 => 38,  135 => 35,  119 => 108,  102 => 60,  71 => 23,  67 => 29,  63 => 31,  59 => 13,  38 => 5,  94 => 30,  89 => 42,  85 => 32,  75 => 31,  68 => 22,  56 => 24,  26 => 14,  87 => 35,  31 => 16,  201 => 56,  196 => 65,  183 => 50,  171 => 44,  166 => 42,  163 => 40,  158 => 75,  156 => 38,  151 => 188,  142 => 30,  138 => 36,  136 => 60,  121 => 52,  117 => 45,  105 => 41,  91 => 37,  62 => 14,  49 => 22,  28 => 14,  24 => 13,  25 => 13,  21 => 11,  19 => 11,  93 => 35,  88 => 60,  78 => 32,  46 => 8,  44 => 19,  27 => 14,  79 => 32,  72 => 30,  69 => 29,  47 => 20,  40 => 19,  37 => 18,  22 => 12,  246 => 67,  157 => 56,  145 => 53,  139 => 51,  131 => 48,  123 => 47,  120 => 46,  115 => 28,  111 => 43,  108 => 42,  101 => 39,  98 => 31,  96 => 37,  83 => 32,  74 => 29,  66 => 28,  55 => 24,  52 => 23,  50 => 21,  43 => 19,  41 => 6,  35 => 16,  32 => 15,  29 => 15,  209 => 58,  203 => 93,  199 => 265,  193 => 50,  189 => 52,  187 => 87,  182 => 85,  176 => 82,  173 => 46,  168 => 43,  164 => 41,  162 => 41,  154 => 189,  149 => 35,  147 => 69,  144 => 26,  141 => 37,  133 => 49,  130 => 33,  125 => 46,  122 => 45,  116 => 107,  112 => 105,  109 => 43,  106 => 104,  103 => 38,  99 => 38,  95 => 28,  92 => 43,  86 => 28,  82 => 38,  80 => 31,  73 => 34,  64 => 27,  60 => 18,  57 => 23,  54 => 16,  51 => 23,  48 => 22,  45 => 21,  42 => 20,  39 => 17,  36 => 4,  33 => 17,  30 => 2,);
    }
}
