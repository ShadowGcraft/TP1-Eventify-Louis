<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTestError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* event/index.html.twig */
class __TwigTemplate_568e9f5c48cbb84575d1a83b990d58a5 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Les événements";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <h1 class=\"mb-4\">Les événements</h1>

    ";
        // line 9
        yield "    <form method=\"get\" class=\"row g-2 mb-4\">
        <div class=\"col-auto\">
            <input type=\"text\" name=\"q\" value=\"";
        // line 11
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 11, $this->source); })()), "html", null, true);
        yield "\" class=\"form-control\" placeholder=\"Rechercher un titre\">
        </div>
        <div class=\"col-auto\">
            <button class=\"btn btn-primary\">Rechercher</button>
            <a href=\"";
        // line 15
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_index");
        yield "\" class=\"btn btn-outline-secondary\">Réinitialiser</a>
        </div>
    </form>

    <div class=\"row\">
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 20, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 21
            yield "            <div class=\"col-md-4 mb-4\">
                <div class=\"card h-100\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
            // line 24
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "title", [], "any", false, false, false, 24), "html", null, true);
            yield "</h5>
                        <p class=\"text-muted mb-2\">
                            ";
            // line 26
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventDate", [], "any", false, false, false, 26), "d/m/Y à H:i"), "html", null, true);
            yield " — ";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "location", [], "any", false, false, false, 26), "html", null, true);
            yield "
                        </p>
                        ";
            // line 28
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "capacity", [], "any", false, false, false, 28) > 0)) {
                // line 29
                yield "                            <span class=\"badge bg-success\">";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "capacity", [], "any", false, false, false, 29), "html", null, true);
                yield " place(s)</span>
                        ";
            } else {
                // line 31
                yield "                            <span class=\"badge bg-danger\">Complet</span>
                        ";
            }
            // line 33
            yield "                    </div>
                    <div class=\"card-footer bg-white\">
                        <a href=\"";
            // line 35
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-primary\">Voir</a>
                        <a href=\"";
            // line 36
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-secondary\">Modifier</a>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 40
        if (!$context['_iterated']) {
            // line 41
            yield "            <p>Aucun événement trouvé.</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 43
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "event/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  170 => 43,  162 => 41,  160 => 40,  151 => 36,  147 => 35,  143 => 33,  139 => 31,  133 => 29,  131 => 28,  124 => 26,  119 => 24,  114 => 21,  109 => 20,  101 => 15,  94 => 11,  90 => 9,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27base.html.twig\x27 %}

{% block title %}Les événements{% endblock %}

{% block body %}
    <h1 class=\"mb-4\">Les événements</h1>

    {# GET et non POST : la recherche reste dans l\x27URL, donc partageable #}
    <form method=\"get\" class=\"row g-2 mb-4\">
        <div class=\"col-auto\">
            <input type=\"text\" name=\"q\" value=\"{{ q }}\" class=\"form-control\" placeholder=\"Rechercher un titre\">
        </div>
        <div class=\"col-auto\">
            <button class=\"btn btn-primary\">Rechercher</button>
            <a href=\"{{ path(\x27app_event_index\x27) }}\" class=\"btn btn-outline-secondary\">Réinitialiser</a>
        </div>
    </form>

    <div class=\"row\">
        {% for event in events %}
            <div class=\"col-md-4 mb-4\">
                <div class=\"card h-100\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{{ event.title }}</h5>
                        <p class=\"text-muted mb-2\">
                            {{ event.eventDate|date(\x27d/m/Y à H:i\x27) }} — {{ event.location }}
                        </p>
                        {% if event.capacity > 0 %}
                            <span class=\"badge bg-success\">{{ event.capacity }} place(s)</span>
                        {% else %}
                            <span class=\"badge bg-danger\">Complet</span>
                        {% endif %}
                    </div>
                    <div class=\"card-footer bg-white\">
                        <a href=\"{{ path(\x27app_event_show\x27, {id: event.id}) }}\" class=\"btn btn-sm btn-primary\">Voir</a>
                        <a href=\"{{ path(\x27app_event_edit\x27, {id: event.id}) }}\" class=\"btn btn-sm btn-outline-secondary\">Modifier</a>
                    </div>
                </div>
            </div>
        {% else %}
            <p>Aucun événement trouvé.</p>
        {% endfor %}
    </div>
{% endblock %}
", "event/index.html.twig", "/Users/louisherzog/Documents/GitHub/MesEtudes/BTS SIO/1 - Bloc 2/Sio2/TP Symphony/eventify/templates/event/index.html.twig");
    }
}
