<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @FOSMessage/layout.html.twig */
class __TwigTemplate_b1e7ba3434938097f6c7ccbe87c803135182971a1f12223ede014bbca29d12a3 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'megamenu' => [$this, 'block_megamenu'],
            'daschboard' => [$this, 'block_daschboard'],
            'Client' => [$this, 'block_Client'],
            'produit' => [$this, 'block_produit'],
            'fournisseur' => [$this, 'block_fournisseur'],
            'famille' => [$this, 'block_famille'],
            'content' => [$this, 'block_content'],
            'fos_content' => [$this, 'block_fos_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "GincidentBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("GincidentBundle::layout.html.twig", "@FOSMessage/layout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "               <title>message</title>
";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "        <meta charset=\"utf-8\" />       
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\" />
        <meta content=\"Preview page of Metronic Admin Theme #1 for statistics, charts, recent events and reports\" name=\"description\" />
        <meta content=\"\" name=\"author\" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/simple-line-icons/simple-line-icons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/morris/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/fullcalendar/fullcalendar.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/jqvmap/jqvmap/jqvmap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/css/components-rounded.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"style_components\" type=\"text/css\" />
        <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/css/plugins.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/layouts/layout/css/layout.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/layouts/layout/css/themes/darkblue.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" id=\"style_color\" />
        <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/layouts/layout/css/custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END THEME LAYOUT STYLES -->
        <style type=\"text/css\">>
               .mail-box {
    border-collapse: collapse;
    border-spacing: 0;
    display: table;
    table-layout: fixed;
    width: 100%;
}
.mail-box aside {
    display: table-cell;
    float: none;
    height: 100%;
    padding: 0;
    vertical-align: top;
}
.mail-box .sm-side {
    background: none repeat scroll 0 0 #e5e8ef;
    border-radius: 4px 0 0 4px;
    width: 25%;
}
.mail-box .lg-side {
    background: none repeat scroll 0 0 #fff;
    border-radius: 0 4px 4px 0;
    width: 75%;
}
.mail-box .sm-side .user-head {
    background: none repeat scroll 0 0 #00a8b3;
    border-radius: 4px 0 0;
    color: #fff;
    min-height: 80px;
    padding: 42px;
}
.user-head .inbox-avatar {
    float: left;
    width: 65px;
}
.user-head .inbox-avatar img {
    border-radius: 4px;
}
.user-head .user-name {
    display: inline-block;
    margin: 0 0 0 10px;
}
.user-head .user-name h5 {
    font-size: 14px;
    font-weight: 300;
    margin-bottom: 0;
    margin-top: 15px;
}
.user-head .user-name h5 a {
    color: #fff;
}
.user-head .user-name span a {
    color: #87e2e7;
    font-size: 12px;
}
a.mail-dropdown {
    background: none repeat scroll 0 0 #80d3d9;
    border-radius: 2px;
    color: #01a7b3;
    font-size: 10px;
    margin-top: 20px;
    padding: 3px 5px;
}
.inbox-body {
    padding: 30px;
}
.btn-compose {
    background: none repeat scroll 0 0 #ff6c60;
    color: #fff;
    padding: 12px 0;
    text-align: center;
    width: 100%;
}
.btn-compose:hover {
    background: none repeat scroll 0 0 #f5675c;
    color: #fff;
}
ul.inbox-nav {
    display: inline-block;
    margin: 0;
    padding: 0;
    width: 100%;
}
.inbox-divider {
    border-bottom: 1px solid #d5d8df;
}
ul.inbox-nav li {
    display: inline-block;
    line-height: 45px;
    width: 100%;
}
ul.inbox-nav li a {
    color: #6a6a6a;
    display: inline-block;
    line-height: 45px;
    padding: 0 20px;
    width: 100%;
}
ul.inbox-nav li a:hover, ul.inbox-nav li.active a, ul.inbox-nav li a:focus {
    background: none repeat scroll 0 0 #d5d7de;
    color: #6a6a6a;
}
ul.inbox-nav li a i {
    color: #6a6a6a;
    font-size: 16px;
    padding-right: 10px;
}
ul.inbox-nav li a span.label {
    margin-top: 13px;
}
ul.labels-info li h4 {
    color: #5c5c5e;
    font-size: 13px;
    padding-left: 15px;
    padding-right: 15px;
    padding-top: 5px;
    text-transform: uppercase;
}
ul.labels-info li {
    margin: 0;
}
ul.labels-info li a {
    border-radius: 0;
    color: #6a6a6a;
}
ul.labels-info li a:hover, ul.labels-info li a:focus {
    background: none repeat scroll 0 0 #d5d7de;
    color: #6a6a6a;
}
ul.labels-info li a i {
    padding-right: 10px;
}
.nav.nav-pills.nav-stacked.labels-info p {
    color: #9d9f9e;
    font-size: 11px;
    margin-bottom: 0;
    padding: 0 22px;
}
.inbox-head {
    background: none repeat scroll 0 0 #41cac0;
    border-radius: 0 4px 0 0;
    color: #fff;
    min-height: 80px;
    padding: 49px;
}
.inbox-head h3 {
    display: inline-block;
    font-weight: 300;
    margin: 0;
    padding-top: 6px;
}
.inbox-head .sr-input {
    border: medium none;
    border-radius: 4px 0 0 4px;
    box-shadow: none;
    color: #8a8a8a;
    float: left;
    height: 40px;
    padding: 0 10px;
}
.inbox-head .sr-btn {
    background: none repeat scroll 0 0 #00a6b2;
    border: medium none;
    border-radius: 0 4px 4px 0;
    color: #fff;
    height: 40px;
    padding: 0 20px;
}
.table-inbox {
    border: 1px solid #d3d3d3;
    margin-bottom: 0;
}
.table-inbox tr td {
    padding: 12px !important;
}
.table-inbox tr td:hover {
    cursor: pointer;
}
.table-inbox tr td .fa-star.inbox-started, .table-inbox tr td .fa-star:hover {
    color: #f78a09;
}
.table-inbox tr td .fa-star {
    color: #d5d5d5;
}
.table-inbox tr.unread td {
    background: none repeat scroll 0 0 #f7f7f7;
    font-weight: 600;
}
ul.inbox-pagination {
    float: right;
}
ul.inbox-pagination li {
    float: left;
}
.mail-option {
    display: inline-block;
    margin-bottom: 10px;
    width: 100%;
}
.mail-option .chk-all, .mail-option .btn-group {
    margin-right: 5px;
}
.mail-option .chk-all, .mail-option .btn-group a.btn {
    background: none repeat scroll 0 0 #fcfcfc;
    border: 1px solid #e7e7e7;
    border-radius: 3px !important;
    color: #afafaf;
    display: inline-block;
    padding: 5px 10px;
}
.inbox-pagination a.np-btn {
    background: none repeat scroll 0 0 #fcfcfc;
    border: 1px solid #e7e7e7;
    border-radius: 3px !important;
    color: #afafaf;
    display: inline-block;
    padding: 5px 15px;
}
.mail-option .chk-all input[type=\"checkbox\"] {
    margin-top: 0;
}
.mail-option .btn-group a.all {
    border: medium none;
    padding: 0;
}
.inbox-pagination a.np-btn {
    margin-left: 5px;
}
.inbox-pagination li span {
    display: inline-block;
    margin-right: 5px;
    margin-top: 7px;
}
.fileinput-button {
    background: none repeat scroll 0 0 #eeeeee;
    border: 1px solid #e6e6e6;
}
.inbox-body .modal .modal-body input, .inbox-body .modal .modal-body textarea {
    border: 1px solid #e6e6e6;
    box-shadow: none;
}
.btn-send, .btn-send:hover {
    background: none repeat scroll 0 0 #00a8b3;
    color: #fff;
}
.btn-send:hover {
    background: none repeat scroll 0 0 #009da7;
}
.modal-header h4.modal-title {
    font-family: \"Open Sans\",sans-serif;
    font-weight: 300;
}
.modal-body label {
    font-family: \"Open Sans\",sans-serif;
    font-weight: 400;
}
.heading-inbox h4 {
    border-bottom: 1px solid #ddd;
    color: #444;
    font-size: 18px;
    margin-top: 20px;
    padding-bottom: 10px;
}
.sender-info {
    margin-bottom: 20px;
}
.sender-info img {
    height: 30px;
    width: 30px;
}
.sender-dropdown {
    background: none repeat scroll 0 0 #eaeaea;
    color: #777;
    font-size: 10px;
    padding: 0 3px;
}
.view-mail a {
    color: #ff6c60;
}
.attachment-mail {
    margin-top: 30px;
}
.attachment-mail ul {
    display: inline-block;
    margin-bottom: 30px;
    width: 100%;
}
.attachment-mail ul li {
    float: left;
    margin-bottom: 10px;
    margin-right: 10px;
    width: 150px;
}
.attachment-mail ul li img {
    width: 100%;
}
.attachment-mail ul li span {
    float: right;
}
.attachment-mail .file-name {
    float: left;
}
.attachment-mail .links {
    display: inline-block;
    width: 100%;
}

.fileinput-button {
    float: left;
    margin-right: 4px;
    overflow: hidden;
    position: relative;
}
.fileinput-button input {
    cursor: pointer;
    direction: ltr;
    font-size: 23px;
    margin: 0;
    opacity: 0;
    position: absolute;
    right: 0;
    top: 0;
    transform: translate(-300px, 0px) scale(4);
}
.fileupload-buttonbar .btn, .fileupload-buttonbar .toggle {
    margin-bottom: 5px;
}
.files .progress {
    width: 200px;
}
.fileupload-processing .fileupload-loading {
    display: block;
}
* html .fileinput-button {
    line-height: 24px;
    margin: 1px -3px 0 0;
}
* + html .fileinput-button {
    margin: 1px 0 0;
    padding: 2px 15px;
}
@media (max-width: 767px) {
.files .btn span {
    display: none;
}
.files .preview * {
    width: 40px;
}
.files .name * {
    display: inline-block;
    width: 80px;
    word-wrap: break-word;
}
.files .progress {
    width: 20px;
}
.files .delete {
    width: 60px;
}
}
ul {
    list-style-type: none;
    padding: 0px;
    }</style>
        <link rel=\"shortcut icon\" href=\"favicon.ico\" />
    ";
    }

    // line 402
    public function block_megamenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 403
        echo "              ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 404
            echo "                <div class=\"hor-menu   hidden-sm hidden-xs\">
                        <ul class=\"nav navbar-nav\">                 
                            <li class=\"classic-menu-dropdown \" aria-haspopup=\"true\">
                                <a href=\"";
            // line 407
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gincident_admin_daschboard");
            echo "\"> Admin Menu
                                    <span class=\"selected\"> </span>
                                </a>
                            </li>
                            <li class=\"classic-menu-dropdown \" aria-haspopup=\"true\">
                                <a href=\"";
            // line 412
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gincident_admin_userliste");
            echo "\"> Utilisateur
                                    <span class=\"selected\"> </span>
                                </a>
                            </li>
                        
                       
                                
                             <li class=\"classic-menu-dropdown \" aria-haspopup=\"true\">
                                <a href=\"";
            // line 420
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gincident_admin_statistique");
            echo "\"> statistique
                                    <span class=\"selected\"> </span>
                                </a>
                            </li>
                                <li class=\"classic-menu-dropdown \" aria-haspopup=\"true\">


           <form id=\"sidebar-search\" action=\"https://www.bing.com/search?scope=web\" method=\"get\" target=\"_self\" data-bing-action-uri=\"https://www.bing.com/search?scope=web\" data-form-code=\"EDGSPH\">
           <input type=\"text\"class=\"from-control\" name=\"q\" placeholder=\"search...\" id=\"q\" accesskey=\"S\" style=\"width: 300px;margin-top:14px;padding-bottom:4px;background-color: #003333;color: white\" aria-label=\"Rechercher&nbsp;:\" type=\"search\" maxlength=\"250\" value=\"\" data-m='{\"i\":3,\"p\":2,\"n\":\"searchinput\",\"y\":9,\"o\":1}' data-id=\"3\" autocomplete=\"off\">
           <button  class=\"btn  btn-success\" id=\"sb_form_go\" data-m='{\"i\":4,\"p\":2,\"n\":\"search_websearch\",\"y\":9,\"o\":2}' data-id=\"4\"><i class=\"fa fa-search\"></i></button>
           </form>
           </li>
                        </ul>
                    </div> 
                                                                      ";
        } else {
            // line 435
            echo "           <div class=\"hor-menu   hidden-sm hidden-xs\">
           <ul class=\"nav navbar-nav\"> 
           <li class=\"classic-menu-dropdown \" aria-haspopup=\"true\">


           <form id=\"sidebar-search\" action=\"https://www.bing.com/search?scope=web\" method=\"get\" target=\"_self\" data-bing-action-uri=\"https://www.bing.com/search?scope=web\" data-form-code=\"EDGSPH\">
           <input type=\"text\"class=\"from-control\" name=\"q\" placeholder=\"search...\" id=\"q\" accesskey=\"S\" style=\"width: 300px;margin-top:14px;padding-bottom:4px;background-color: #003333;color: white\" aria-label=\"Rechercher&nbsp;:\" type=\"search\" maxlength=\"250\" value=\"\" data-m='{\"i\":3,\"p\":2,\"n\":\"searchinput\",\"y\":9,\"o\":1}' data-id=\"3\" autocomplete=\"off\">
           <button  class=\"btn  btn-success\" id=\"sb_form_go\" data-m='{\"i\":4,\"p\":2,\"n\":\"search_websearch\",\"y\":9,\"o\":2}' data-id=\"4\"><i class=\"fa fa-search\"></i></button>
           </form>
           </li>

 
           </ul> </div>
                  ";
        }
        // line 449
        echo "          ";
    }

    // line 450
    public function block_daschboard($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 451
        echo "           <li class=\"nav-item\">
                                <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                    <i class=\"icon-home\"></i>
                                    <span class=\"title\">Acceuil</span>
                                    <span class=\"selected\"></span>
                                    <span class=\"arrow open\"></span>
                                </a>
                                <ul class=\"sub-menu\">
                                    <li class=\"nav-item start open\">
                                        <a href=\"";
        // line 460
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gincident_homepage");
        echo "\" class=\"nav-link \">
                                            <i class=\"icon-bar-chart\"></i>
                                            <span class=\"title\">Dashboard</span>
                                            <span class=\"selected\"></span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item start \">
                                        <a href=\"#\" class=\"nav-link \">
                                            <i class=\"icon-bulb\"></i>
                                            <span class=\"title\">Notification</span>
                                            <span class=\"badge badge-success\">22</span>
                                        </a>
                                    </li>
                                   
                                </ul>
                            </li> 
            
            
            
        ";
    }

    // line 481
    public function block_Client($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 482
        echo "              <li class=\"nav-item\">
                                <a href=\"";
        // line 483
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gincident_admin_client");
        echo "\" class=\"nav-link\">
                                    <i class=\"icon-briefcase\"></i>
                                    <span class=\"title\">Gestion des Client</span>
                                    <span class=\"selected\"></span>
                                    <span class=\"arrow\"></span>
                                </a>
                              
               </li>
          ";
    }

    // line 492
    public function block_produit($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 493
        echo "              <li class=\"nav-item\">
                                <a href=\"";
        // line 494
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gincident_admin_ticket");
        echo "\" class=\"nav-link\">
                                    <i class=\"icon-briefcase\"></i>
                                    <span class=\"title\">Gestion des produit</span>
                                    <span class=\"selected\"></span>
                                    <span class=\"arrow\"></span>
                                </a>
                              
               </li>
          ";
    }

    // line 504
    public function block_fournisseur($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 505
        echo "                   <li class=\"nav-item \">
                            <a href=\"";
        // line 506
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gincident_admin_fournisseur_affiche");
        echo "\" class=\"nav-link\">
                                    <i class=\"icon-briefcase\"></i>
                                    <span class=\"title\">Gestion des fournisseurs</span>
                                    <span class=\"selected\"></span>
                                    <span class=\"arrow\"></span>
                                </a>
                              
               </li>
          ";
    }

    // line 516
    public function block_famille($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 517
        echo "                   <li class=\"nav-item \">
                                <a href=\"";
        // line 518
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gincident_admin_incident");
        echo "\" class=\"nav-link\">
                                    <i class=\"icon-briefcase\"></i>
                                    <span class=\"title\"> Gestion des famille</span>
                                    <span class=\"selected\"></span>
                                    <span class=\"arrow\"></span>
                                </a>
                              
               </li>
          ";
    }

    // line 528
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "  

<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
 <div class=\"mail-box\">
                  <aside class=\"sm-side\">
                      <div class=\"user-head\">
                          <a class=\"inbox-avatar\" href=\"javascript:;\">
                              <img  width=\"30px\" hieght=\"30px\" src=\"";
        // line 535
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/img/experts/"), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 535), "photoname", [], "any", false, false, false, 535), "html", null, true);
        echo "\">
                          </a>
                          <div class=\"user-name\">
                              <h5><a href=\"#\">";
        // line 538
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 538), "username", [], "any", false, false, false, 538), "html", null, true);
        echo "</a></h5>
                              <span><a href=\"#\">";
        // line 539
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 539), "email", [], "any", false, false, false, 539), "html", null, true);
        echo "</a></span><br>
                          </div>
                          
                      </div>
                          
                          <br> 
                     <ul class=\"inbox-nav inbox-divider\">
                          <li class=\"active\">
                              <a href=\"";
        // line 547
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("fos_message_inbox");
        echo "\"><i class=\"fa fa-envelope\"></i> Boite de Message <span class=\"label label-danger pull-right\">";
        echo twig_escape_filter($this->env, $this->extensions['FOS\MessageBundle\Twig\Extension\MessageExtension']->getNbUnread(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 547), "id", [], "any", false, false, false, 547)), "html", null, true);
        echo "</span></a>

                          </li>
                              
                               
                              
             <br>   
            <li class=\"active\">
                              <a href=\"";
        // line 555
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("fos_message_thread_new");
        echo "\"><i class=\"icon-envelope-open\"></i>composer un message</a>

                          </li>
                          
                               <li class=\"active\">
                              <a href=\"";
        // line 560
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("fos_message_sent");
        echo "\"><i class=\"fa fa-envelope-o\"></i>message envoyer</a>

                          </li>
                             <li class=\"active\">
                              <a href=\"";
        // line 564
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("fos_message_deleted");
        echo "\"><i class=\"fa fa-trash-o\"></i>message supprimer</a>

                          </li>
                        
                                                   
                              
                              
                          

                         
                         
                         
                     </ul> 
                       
              
                              
                              
                              
                              
                              
                              
                              
                    
                      


                  </aside>
                
                       <aside class=\"lg-side\">
                      <div class=\"inbox-head\">
                          <h3>Inbox</h3>
                          <form action=\"#\" class=\"pull-right position\" method=\"post\">
                              <div class=\"input-append\">
                                  <input type=\"text\" class=\"sr-input\" placeholder=\"Search Mail\">
                                  <button class=\"btn sr-btn\" type=\"submit\"><i class=\"fa fa-search\"></i></button>
                              </div>
                          </form>
                      </div>

                      ";
        // line 603
        $this->displayBlock('fos_content', $context, $blocks);
        // line 606
        echo "                        

                      ";
    }

    // line 603
    public function block_fos_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 604
        echo "                          
                          ";
    }

    // line 610
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 611
        echo "       
        <script src=\"";
        // line 612
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 613
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/js.cookie.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 614
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 615
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/jquery.blockui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 616
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src=\"";
        // line 619
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/scripts/datatable.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 620
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/datatables/datatables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 621
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 622
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src=\"";
        // line 625
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/scripts/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src=\"";
        // line 628
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pages/scripts/table-datatables-buttons.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src=\"";
        // line 631
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/layouts/layout/scripts/layout.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 632
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/layouts/layout/scripts/demo.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 633
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/layouts/global/scripts/quick-sidebar.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 634
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/layouts/global/scripts/quick-nav.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        <script>
            \$(document).ready(function()
            {
                \$('#clickmewow').click(function()
                {
                    \$('#radio1003').attr('checked', 'checked');
                });
            })
        </script>       
  
                   
                   
                   
                   ";
    }

    public function getTemplateName()
    {
        return "@FOSMessage/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  885 => 634,  881 => 633,  877 => 632,  873 => 631,  867 => 628,  861 => 625,  855 => 622,  851 => 621,  847 => 620,  843 => 619,  837 => 616,  833 => 615,  829 => 614,  825 => 613,  821 => 612,  818 => 611,  814 => 610,  809 => 604,  805 => 603,  799 => 606,  797 => 603,  755 => 564,  748 => 560,  740 => 555,  727 => 547,  716 => 539,  712 => 538,  705 => 535,  693 => 528,  680 => 518,  677 => 517,  673 => 516,  660 => 506,  657 => 505,  653 => 504,  640 => 494,  637 => 493,  633 => 492,  620 => 483,  617 => 482,  613 => 481,  589 => 460,  578 => 451,  574 => 450,  570 => 449,  554 => 435,  536 => 420,  525 => 412,  517 => 407,  512 => 404,  509 => 403,  505 => 402,  132 => 32,  128 => 31,  124 => 30,  118 => 27,  114 => 26,  108 => 23,  104 => 22,  100 => 21,  96 => 20,  90 => 17,  86 => 16,  82 => 15,  78 => 14,  69 => 7,  65 => 6,  60 => 4,  56 => 3,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@FOSMessage/layout.html.twig", "C:\\wamp64\\www\\kc_prod\\vendor\\friendsofsymfony\\message-bundle\\Resources\\views\\layout.html.twig");
    }
}
