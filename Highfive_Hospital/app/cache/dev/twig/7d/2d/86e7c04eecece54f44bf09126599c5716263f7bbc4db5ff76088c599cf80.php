<?php

/* High5HospitalPatientBundle:Default:homepage.html.twig */
class __TwigTemplate_7d2d86e7c04eecece54f44bf09126599c5716263f7bbc4db5ff76088c599cf80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("High5HospitalPatientBundle:Default:base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "High5HospitalPatientBundle:Default:base.html.twig";
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

    <ul class=\"modal-body\">
        <li>
            <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("_welcome");
        echo "patient/list/doctors\">List available doctors</a>
        </li>
        <li>
            <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("_welcome");
        echo "patient/view/medicalfile\">View medical file</a>
        </li>
        <li>
            <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("_welcome");
        echo "patient/create/rdv\">Make an appointment with a doctor</a>
        </li>
        <li>
            <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("_welcome");
        echo "patient/logout\">Logout</a>
        </li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "High5HospitalPatientBundle:Default:homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 17,  51 => 14,  45 => 11,  39 => 8,  31 => 4,  28 => 3,);
    }
}
