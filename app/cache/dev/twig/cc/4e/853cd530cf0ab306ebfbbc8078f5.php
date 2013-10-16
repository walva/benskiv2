<?php

/* BenskiCatalogueBundle:SejourAppartement:layout.html.twig */
class __TwigTemplate_cc4e853cd530cf0ab306ebfbbc8078f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BenskiCatalogueBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'bundle_body' => array($this, 'block_bundle_body'),
            'left_menu' => array($this, 'block_left_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BenskiCatalogueBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        // line 8
        echo "<h1>Sejour</h1>
";
    }

    // line 12
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 13
        $this->displayParentBlock("breadcrumb", $context, $blocks);
        echo "
<li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("sejour");
        echo "\">Sejour</a> <span class=\"divider\">/</span></li>

";
    }

    // line 18
    public function block_bundle_body($context, array $blocks = array())
    {
        // line 19
        echo "Attention, ce bloc est a définir

";
    }

    // line 23
    public function block_left_menu($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "BenskiCatalogueBundle:SejourAppartement:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 114,  228 => 101,  225 => 100,  222 => 99,  195 => 87,  192 => 86,  188 => 85,  181 => 81,  137 => 64,  124 => 51,  160 => 78,  150 => 74,  114 => 44,  127 => 62,  97 => 34,  84 => 35,  110 => 41,  153 => 74,  146 => 73,  113 => 53,  129 => 52,  65 => 23,  104 => 38,  270 => 126,  265 => 124,  261 => 112,  251 => 105,  245 => 113,  242 => 96,  233 => 105,  226 => 100,  218 => 92,  216 => 91,  213 => 90,  210 => 89,  205 => 113,  202 => 111,  200 => 89,  197 => 88,  190 => 69,  180 => 50,  148 => 67,  134 => 124,  77 => 29,  58 => 20,  53 => 13,  118 => 60,  100 => 37,  81 => 34,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 125,  264 => 84,  258 => 111,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 92,  177 => 80,  169 => 60,  140 => 68,  132 => 51,  128 => 49,  107 => 51,  61 => 17,  273 => 127,  269 => 94,  254 => 106,  243 => 88,  240 => 86,  238 => 85,  235 => 105,  230 => 82,  227 => 81,  224 => 96,  221 => 77,  219 => 76,  217 => 75,  208 => 91,  204 => 72,  179 => 69,  159 => 61,  143 => 69,  135 => 70,  119 => 48,  102 => 46,  71 => 26,  67 => 19,  63 => 24,  59 => 21,  38 => 8,  94 => 34,  89 => 39,  85 => 36,  75 => 27,  68 => 28,  56 => 19,  87 => 30,  21 => 2,  26 => 6,  93 => 33,  88 => 38,  78 => 34,  46 => 14,  27 => 4,  44 => 9,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 48,  166 => 71,  163 => 62,  158 => 70,  156 => 66,  151 => 68,  142 => 72,  138 => 71,  136 => 57,  121 => 61,  117 => 54,  105 => 42,  91 => 37,  62 => 22,  49 => 15,  24 => 4,  25 => 3,  19 => 1,  79 => 28,  72 => 27,  69 => 27,  47 => 9,  40 => 10,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 69,  123 => 51,  120 => 58,  115 => 59,  111 => 58,  108 => 79,  101 => 39,  98 => 49,  96 => 68,  83 => 29,  74 => 30,  66 => 25,  55 => 21,  52 => 16,  50 => 12,  43 => 10,  41 => 9,  35 => 4,  32 => 3,  29 => 3,  209 => 82,  203 => 78,  199 => 88,  193 => 73,  189 => 71,  187 => 68,  182 => 66,  176 => 49,  173 => 79,  168 => 47,  164 => 59,  162 => 71,  154 => 18,  149 => 51,  147 => 58,  144 => 49,  141 => 65,  133 => 63,  130 => 41,  125 => 44,  122 => 47,  116 => 41,  112 => 43,  109 => 42,  106 => 54,  103 => 77,  99 => 46,  95 => 38,  92 => 21,  86 => 28,  82 => 35,  80 => 33,  73 => 23,  64 => 18,  60 => 22,  57 => 14,  54 => 22,  51 => 16,  48 => 14,  45 => 8,  42 => 7,  39 => 9,  36 => 6,  33 => 5,  30 => 4,);
    }
}
