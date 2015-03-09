<?php

/* High5HospitalAdminBundle:Default:error.html.twig */
class __TwigTemplate_9296e5ae2b1b3eb7fb0bf04bc2692fa889dc54a4fa755abc3afcb227d6eefada extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h1 style=\"color: red\">Error 404</h1>
";
        // line 2
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "High5HospitalAdminBundle:Default:error.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  23 => 2,  20 => 1,);
    }
}
