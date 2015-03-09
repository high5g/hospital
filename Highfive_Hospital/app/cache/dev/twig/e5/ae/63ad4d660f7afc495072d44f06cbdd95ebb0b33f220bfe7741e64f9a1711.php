<?php

/* High5HospitalDoctorBundle:Default:plan.rdv.html.twig */
class __TwigTemplate_e5ae63ad4d660f7afc495072d44f06cbdd95ebb0b33f220bfe7741e64f9a1711 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("High5HospitalDoctorBundle:Default:base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
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
        echo "    Plan your rendezvous:
";
        // line 6
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "        <div class=\"container center-block\">
            ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["rdv_form"]) ? $context["rdv_form"] : $this->getContext($context, "rdv_form")), 'form_start');
        echo "
            ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["rdv_form"]) ? $context["rdv_form"] : $this->getContext($context, "rdv_form")), 'widget');
        echo "
            ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["rdv_form"]) ? $context["rdv_form"] : $this->getContext($context, "rdv_form")), 'form_end');
        echo "
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "High5HospitalDoctorBundle:Default:plan.rdv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 10,  49 => 9,  45 => 8,  42 => 7,  35 => 6,  32 => 4,  29 => 3,);
    }
}
