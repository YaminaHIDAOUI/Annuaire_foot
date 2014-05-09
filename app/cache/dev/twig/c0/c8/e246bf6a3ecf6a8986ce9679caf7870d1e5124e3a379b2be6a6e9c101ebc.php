<?php

/* AcmeDemoBundle:Secured:helloadmin.html.twig */
class __TwigTemplate_c0c8e246bf6a3ecf6a8986ce9679caf7870d1e5124e3a379b2be6a6e9c101ebc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle:Secured:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 9
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("Hello " . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1 class=\"title\">Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo " secured for Admins only!</h1>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:helloadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  949 => 270,  946 => 269,  942 => 302,  938 => 300,  932 => 297,  929 => 296,  927 => 295,  921 => 292,  913 => 291,  910 => 290,  908 => 289,  905 => 288,  899 => 286,  888 => 282,  886 => 281,  883 => 280,  877 => 278,  875 => 277,  872 => 276,  866 => 274,  864 => 273,  861 => 272,  859 => 269,  856 => 268,  853 => 267,  836 => 253,  824 => 246,  818 => 244,  816 => 243,  806 => 238,  803 => 237,  795 => 234,  792 => 233,  787 => 262,  784 => 233,  781 => 232,  776 => 303,  774 => 267,  761 => 230,  745 => 218,  734 => 214,  728 => 213,  716 => 211,  713 => 210,  709 => 209,  702 => 208,  693 => 206,  690 => 205,  687 => 204,  682 => 203,  673 => 199,  665 => 196,  663 => 195,  660 => 194,  657 => 193,  650 => 192,  647 => 191,  644 => 190,  632 => 187,  629 => 186,  626 => 184,  616 => 182,  610 => 181,  600 => 178,  588 => 175,  570 => 164,  522 => 156,  471 => 129,  468 => 128,  460 => 123,  454 => 121,  451 => 120,  418 => 112,  373 => 102,  370 => 101,  304 => 81,  330 => 103,  300 => 93,  190 => 49,  12 => 36,  620 => 223,  612 => 220,  601 => 216,  599 => 215,  594 => 176,  585 => 209,  580 => 207,  574 => 205,  559 => 201,  545 => 198,  532 => 192,  526 => 190,  514 => 167,  497 => 156,  485 => 124,  463 => 117,  455 => 115,  415 => 127,  412 => 126,  406 => 111,  340 => 91,  333 => 132,  326 => 86,  318 => 86,  307 => 82,  287 => 89,  261 => 50,  178 => 46,  786 => 238,  777 => 234,  775 => 233,  771 => 231,  768 => 230,  750 => 227,  747 => 226,  744 => 225,  742 => 224,  737 => 222,  725 => 220,  722 => 219,  719 => 218,  711 => 213,  708 => 212,  691 => 210,  674 => 209,  669 => 198,  664 => 206,  648 => 198,  646 => 197,  624 => 224,  603 => 179,  595 => 190,  592 => 189,  589 => 188,  586 => 187,  584 => 173,  581 => 185,  572 => 204,  568 => 178,  566 => 203,  563 => 202,  561 => 161,  558 => 160,  554 => 224,  542 => 149,  539 => 148,  523 => 189,  521 => 166,  518 => 180,  507 => 156,  481 => 155,  476 => 147,  447 => 113,  441 => 136,  425 => 132,  422 => 131,  419 => 130,  416 => 129,  410 => 110,  404 => 90,  401 => 89,  382 => 115,  376 => 103,  369 => 148,  359 => 144,  356 => 126,  353 => 103,  329 => 130,  306 => 95,  303 => 94,  291 => 80,  286 => 82,  280 => 87,  267 => 74,  195 => 54,  321 => 100,  295 => 142,  274 => 53,  272 => 134,  242 => 113,  236 => 42,  216 => 35,  70 => 29,  1414 => 421,  1408 => 419,  1402 => 417,  1400 => 416,  1398 => 415,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1339 => 396,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 271,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 285,  894 => 284,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 261,  846 => 205,  844 => 258,  841 => 203,  833 => 199,  830 => 249,  828 => 248,  825 => 196,  817 => 192,  814 => 191,  812 => 241,  809 => 189,  801 => 236,  798 => 235,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  780 => 235,  772 => 172,  769 => 264,  767 => 232,  764 => 231,  756 => 222,  753 => 221,  751 => 163,  749 => 220,  746 => 161,  739 => 217,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 149,  707 => 148,  699 => 142,  697 => 141,  696 => 207,  695 => 139,  694 => 138,  689 => 137,  680 => 202,  675 => 132,  662 => 125,  658 => 204,  654 => 123,  649 => 122,  643 => 120,  640 => 119,  638 => 118,  619 => 183,  617 => 112,  614 => 111,  598 => 191,  596 => 106,  593 => 105,  576 => 101,  564 => 162,  557 => 96,  550 => 94,  547 => 93,  527 => 91,  515 => 305,  512 => 162,  509 => 228,  503 => 81,  501 => 154,  493 => 143,  478 => 154,  467 => 146,  456 => 140,  450 => 114,  442 => 62,  433 => 60,  428 => 116,  426 => 58,  405 => 108,  390 => 43,  377 => 37,  371 => 35,  366 => 150,  363 => 109,  350 => 26,  335 => 133,  332 => 88,  316 => 16,  290 => 90,  276 => 395,  266 => 366,  263 => 365,  245 => 66,  207 => 33,  194 => 66,  76 => 28,  200 => 54,  58 => 17,  551 => 221,  546 => 175,  543 => 174,  541 => 180,  537 => 159,  531 => 225,  525 => 157,  520 => 170,  513 => 230,  511 => 166,  506 => 166,  502 => 164,  499 => 163,  496 => 79,  489 => 157,  483 => 156,  479 => 135,  475 => 152,  462 => 143,  448 => 119,  443 => 137,  424 => 114,  414 => 52,  408 => 109,  403 => 48,  399 => 116,  391 => 163,  388 => 117,  386 => 111,  375 => 106,  372 => 105,  354 => 101,  348 => 101,  346 => 100,  342 => 23,  325 => 94,  313 => 84,  308 => 89,  292 => 91,  255 => 71,  184 => 48,  155 => 73,  146 => 34,  124 => 25,  188 => 48,  181 => 232,  161 => 75,  692 => 399,  683 => 135,  678 => 133,  676 => 385,  666 => 126,  661 => 205,  656 => 378,  652 => 200,  645 => 369,  641 => 189,  635 => 188,  631 => 364,  625 => 361,  615 => 354,  607 => 180,  597 => 177,  590 => 338,  583 => 334,  579 => 332,  577 => 206,  575 => 328,  569 => 325,  565 => 324,  555 => 200,  548 => 176,  540 => 160,  536 => 194,  529 => 159,  524 => 90,  516 => 169,  510 => 293,  504 => 155,  500 => 291,  495 => 289,  490 => 142,  486 => 286,  482 => 136,  470 => 121,  464 => 125,  459 => 116,  452 => 268,  434 => 118,  421 => 90,  417 => 243,  400 => 47,  385 => 159,  361 => 207,  344 => 24,  339 => 191,  324 => 179,  310 => 83,  302 => 79,  296 => 151,  282 => 161,  259 => 149,  244 => 43,  231 => 69,  226 => 131,  186 => 47,  152 => 62,  320 => 84,  317 => 121,  311 => 83,  288 => 79,  284 => 76,  279 => 77,  275 => 86,  256 => 79,  250 => 44,  237 => 71,  232 => 84,  222 => 66,  215 => 280,  191 => 26,  150 => 35,  20 => 1,  270 => 84,  253 => 78,  233 => 304,  212 => 60,  210 => 59,  206 => 57,  198 => 55,  192 => 53,  185 => 61,  180 => 49,  175 => 74,  172 => 46,  167 => 56,  160 => 38,  137 => 29,  100 => 40,  90 => 32,  65 => 29,  129 => 44,  84 => 29,  358 => 139,  351 => 141,  347 => 140,  343 => 92,  338 => 99,  327 => 102,  323 => 85,  319 => 92,  315 => 98,  301 => 80,  299 => 86,  293 => 90,  289 => 83,  281 => 75,  277 => 136,  271 => 374,  265 => 51,  262 => 81,  260 => 72,  257 => 103,  251 => 101,  248 => 116,  239 => 64,  228 => 41,  225 => 67,  213 => 82,  211 => 81,  202 => 55,  197 => 30,  174 => 42,  165 => 77,  134 => 55,  127 => 60,  170 => 79,  113 => 40,  118 => 46,  34 => 15,  81 => 31,  77 => 29,  53 => 10,  23 => 13,  104 => 18,  97 => 41,  153 => 72,  148 => 49,  126 => 55,  114 => 44,  110 => 22,  480 => 75,  474 => 122,  469 => 158,  461 => 70,  457 => 153,  453 => 139,  444 => 263,  440 => 148,  437 => 135,  435 => 146,  430 => 134,  427 => 129,  423 => 57,  413 => 128,  409 => 132,  407 => 126,  402 => 107,  398 => 88,  393 => 168,  387 => 122,  384 => 106,  381 => 105,  379 => 104,  374 => 112,  368 => 34,  365 => 141,  362 => 148,  360 => 128,  355 => 27,  341 => 131,  337 => 90,  322 => 101,  314 => 99,  312 => 97,  309 => 82,  305 => 87,  298 => 91,  294 => 85,  285 => 78,  283 => 138,  278 => 410,  268 => 373,  264 => 82,  258 => 72,  252 => 68,  247 => 75,  241 => 77,  229 => 73,  220 => 65,  214 => 63,  177 => 43,  169 => 78,  140 => 51,  132 => 28,  128 => 47,  107 => 37,  61 => 12,  273 => 85,  269 => 133,  254 => 46,  243 => 73,  240 => 72,  238 => 312,  235 => 63,  230 => 62,  227 => 301,  224 => 39,  221 => 38,  219 => 101,  217 => 56,  208 => 57,  204 => 57,  179 => 44,  159 => 39,  143 => 33,  135 => 62,  119 => 108,  102 => 17,  71 => 32,  67 => 31,  63 => 19,  59 => 13,  38 => 6,  94 => 34,  89 => 33,  85 => 32,  75 => 34,  68 => 31,  56 => 11,  26 => 9,  87 => 14,  31 => 3,  201 => 56,  196 => 52,  183 => 46,  171 => 57,  166 => 42,  163 => 40,  158 => 79,  156 => 64,  151 => 188,  142 => 30,  138 => 49,  136 => 58,  121 => 24,  117 => 19,  105 => 18,  91 => 38,  62 => 24,  49 => 13,  28 => 14,  24 => 11,  25 => 35,  21 => 11,  19 => 2,  93 => 17,  88 => 31,  78 => 26,  46 => 19,  44 => 16,  27 => 12,  79 => 35,  72 => 31,  69 => 32,  47 => 8,  40 => 6,  37 => 5,  22 => 7,  246 => 67,  157 => 51,  145 => 60,  139 => 63,  131 => 61,  123 => 59,  120 => 20,  115 => 45,  111 => 43,  108 => 19,  101 => 43,  98 => 39,  96 => 18,  83 => 32,  74 => 27,  66 => 30,  55 => 22,  52 => 14,  50 => 20,  43 => 11,  41 => 10,  35 => 5,  32 => 4,  29 => 3,  209 => 58,  203 => 55,  199 => 265,  193 => 51,  189 => 63,  187 => 87,  182 => 23,  176 => 58,  173 => 46,  168 => 41,  164 => 55,  162 => 54,  154 => 36,  149 => 62,  147 => 52,  144 => 48,  141 => 58,  133 => 46,  130 => 57,  125 => 46,  122 => 45,  116 => 41,  112 => 105,  109 => 46,  106 => 45,  103 => 41,  99 => 41,  95 => 19,  92 => 38,  86 => 33,  82 => 28,  80 => 30,  73 => 16,  64 => 13,  60 => 26,  57 => 12,  54 => 19,  51 => 21,  48 => 9,  45 => 8,  42 => 7,  39 => 16,  36 => 5,  33 => 4,  30 => 3,);
    }
}
