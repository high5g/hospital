<?php

/* High5HospitalDoctorBundle:Default:homepage.html.twig */
class __TwigTemplate_bd0a8746792ab0a7e908b3622c51e10f2c9631d3c0584e00a79323ebc937c79c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("High5HospitalDoctorBundle:Default:base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "High5HospitalDoctorBundle:Default:base.html.twig";
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
    <ul>
        <li>
            <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("_welcome");
        echo "doctor/planrdv\">Plan a rendezvous</a>
        </li>
        <li>
            <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("_welcome");
        echo "doctor/view/rdvplanning\">View rendezvous planning</a>
        </li>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("_welcome");
        echo "doctor/edit/patientfile\">Edit patients files</a>
        </li>
        <li>
            <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("_welcome");
        echo "doctor/logout\">Logout</a>
        </li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "High5HospitalDoctorBundle:Default:homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 16,  50 => 13,  44 => 10,  38 => 7,  31 => 4,  28 => 3,);
    }
}
