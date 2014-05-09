<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_544841275d639dbf7eba3444d4af51378b6a80caf4e92d4257082f29c8465443 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "

<div class=\"form-signin\" style=\"background-color: #fbfbfb;
                               border: 1px solid #AAA;
                               border-bottom: 1px solid #888;
                               border-radius: 3px;
                               color: black;
                               box-shadow: 0px 2px 2px #AAA;
                               max-width: 700px;
                               text-align: center;
                               align-content: center;
                               position: inherit;\">

\t<form action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
\t    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t    <div>
\t        <input type=\"submit\" width=\"150px\" class=\"btn btn-primary\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
\t    </div>
\t</form>

</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 18,  40 => 16,  34 => 15,  19 => 2,  38 => 5,  35 => 4,  29 => 3,);
    }
}
