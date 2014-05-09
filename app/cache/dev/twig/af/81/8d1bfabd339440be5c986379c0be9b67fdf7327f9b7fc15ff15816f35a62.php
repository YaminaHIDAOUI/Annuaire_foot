<?php

/* AnnuaireUserBundle::hello.html.twig */
class __TwigTemplate_af818d1bfabd339440be5c986379c0be9b67fdf7327f9b7fc15ff15816f35a62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"container\" align=\"center\">
\t<h2>hello ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
        echo "</h2>
\t<br/>
\t<a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">
                ";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
        echo "
    </a>
     <!-- Button trigger modal -->
<input type=\"button\" class=\"btn btn-primary btn-lg\" data-toggle=\"modal\" href=\"#myModal\" value=\"Lancer le demo\">
</input>

<!-- Modal -->
<div class=\"modal fade hide\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">Modal title</h4>
      </div>
      <div class=\"modal-body\">
        ...
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
        <button type=\"button\" class=\"btn btn-primary\">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "AnnuaireUserBundle::hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  39 => 7,  34 => 5,  31 => 4,  28 => 3,);
    }
}
