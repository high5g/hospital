<?php

/* High5HospitalAdminHospitalBundle:Default:homepage.html.twig */
class __TwigTemplate_f348cd931373f4c0741a3a75596456be9cdee1a5aa4dc0ea5ca37474805ce8bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("High5HospitalAdminHospitalBundle:Default:base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "High5HospitalAdminHospitalBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    Welcome ";
        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), "html", null, true);
        echo "!

    <div>
        <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("_welcome");
        echo "admin_hospital/add/patient\">Add Patient</a>
    </div>
    <div>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("_welcome");
        echo "admin_hospital/add/doctor\">Add Doctor</a>
    </div>
    <div>
        <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("_welcome");
        echo "admin_hospital/logout\">Logout</a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "High5HospitalAdminHospitalBundle:Default:homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 13,  44 => 10,  38 => 7,  31 => 4,  28 => 3,);
    }
}
