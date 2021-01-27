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

/* E:\openserver\domains\auto/themes/auto/pages/home.htm */
class __TwigTemplate_b619619f43acc9e530a220d780b2704acde1203f1aa0c1f36aa20de02710277e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("component" => 22, "partial" => 235);
        $filters = array("page" => 57);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component', 'partial'],
                ['page'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div>
    <img style=\"height: 220vh; filter: brightness(30%);   z-index: -2;\" class=\"absolute bg-auto bg-cover bg-contain\" src=\"https://auto-help-spb.ru/images/top/index.jpg\" alt=\"\">
     <div>  
 <header class=\"pt-2\">
     <!-- Root element for center items -->
 <div class=\"orderCallForm flex flex-col opacity-60 bg-gray-900 h-full fixed w-full z-10 hidden\">
 <!-- Auth Card Container -->
     <div class=\"grid place-items-center mx-2 my-20 sm:my-auto\">
         <!-- Auth Card -->
         <div class=\"w-11/12 p-12 sm:w-8/12 md:w-6/12 lg:w-5/12 2xl:w-4/12 
             px-6 py-10 sm:px-10 sm:py-6 
             bg-white  rounded-lg shadow-md lg:shadow-lg\">
             <i onclick=\"closeNav()\" style=\" font-size: 24px;\" class=\"fas fa-times cursor-pointer \"></i>
             <!-- Card Title -->
             <div class=\"flex-col text-xs md:text-base  mt-2\">
                <a class=\"hover:text-blue-500\" href=\"tel:+79067031111\">+7 (906)703-11-11</a>
            </div>
            <hr class=\"border-b-1 mb-1 border-blue-700 w-48 mt-1\">
             <h2 class=\"text-center font-semibold text-3xl lg:text-4xl text-gray-800\">  
                 Заказать звонок
             </h2>
                ";
        // line 22
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("formSubscribe"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 23
        echo "         </div>
     </div>
 </div>
     <div>
         <div class=\"flex text-white items-center justify-evenly\">
             <div class=\"cursor-pointer w-1/2 md:w-48 \">
                 <a href=\"./index.html\"><img src=\"data:image/png;base64,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\" alt=\"\"></div>
             </a>
                 <div class='hidden lg:flex w-96'>
                 <i class=\"fas fa-map-marker-alt pr-2\"></i>
                 ";
        // line 33
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "home/head1.htm"        ;
        $context['__cms_component_params']['fixture'] = "p"        ;
        $context['__cms_component_params']['tools'] = "bold,italic"        ;
        $context['__cms_component_params']['class'] = ""        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 34
        echo "             </div>
             <div class='flex hidden lg:flex w-96'>
                 <i class=\"fas fa-clock pr-2\"></i>
                 ";
        // line 37
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "home/head2.htm"        ;
        $context['__cms_component_params']['fixture'] = "p"        ;
        $context['__cms_component_params']['tools'] = "bold,italic"        ;
        $context['__cms_component_params']['class'] = ""        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 38
        echo "             </div>
             <div class='flex w-96'>
                 <i class=\"fas fa-phone-alt pr-2\"></i>
                 <div class=\"flex-col text-xs md:text-base\">
                 <!-- <a class=\"hover:text-blue-500\" href=\"tel:+79067031111\">+7 (906)703-11-11</a> -->
                 ";
        // line 43
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "home/head3.htm"        ;
        $context['__cms_component_params']['fixture'] = "a"        ;
        $context['__cms_component_params']['tools'] = "bold,italic"        ;
        $context['__cms_component_params']['class'] = "hover:text-blue-500"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 44
        echo "                 </div>
             </div>
         </div>
         <div class=\"  text-white cursor-pointer\">
             <ul class=\"flex p-4 items-center justify-evenly\">
                 <li onclick=\"navOpen()\" class=\"flex visible lg:hidden\"><i class=\"fas fa-bars text-orange-600 text-5xl\"></i></li>
                 <li class=\"flex uppercase items-center\">
                     <li  class=\"relative uppercase nav-menu  flex hidden text-center justify-evenly lg:flex p-6 hover:bg-gray-600 w-1/6\">
                     Услуги
                     <img src=\"https://auto-help-spb.ru/images/menu-arrow.svg\" alt=\"\">
                     <div style=\"width: 90vw; top: 70px;\" class=\"nav-submenu z-10  p-6 bg-gray-100 hidden absolute left-0\">
                         <ul class=\" flex flex-wrap items-center justify-evenly\">
                            <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"";
        // line 57
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/avtohelp.png\" alt=\"\" class=\"w-10\">
                                    </i>Автомобильная помощь</a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                    <a href=\"";
        // line 63
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("service1");
        echo "\" class=\" flex items-center text-black hover:text-orange-500\">
                                     <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/autopsy-car.png\" alt alt=\"\" class=\"w-10\">
                                    </i>Вскрытие авто</a>
                            </li>
                             <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"";
        // line 69
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("service2");
        echo "\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/opening-hood.png\" alt alt=\"\" class=\"w-10\">
                                    </i>Вскрытие капота</a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"";
        // line 75
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("service3");
        echo "\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/opening-trunk.png\" alt alt=\"\" class=\"w-10\">
                                    </i>Вскрытие багажника</a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                    <a href=\"";
        // line 81
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("service4");
        echo "\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/menu-1.svg\" alt=\"\" class=\"w-10\">
                                    </i>Прикурить аккумулятор</a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"";
        // line 87
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("service5");
        echo "\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/menu-11.svg \" alt alt=\"\" class=\"w-10\">
                                    </i>Замена АКБ</a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5 avto\">
                                <a href=\"";
        // line 93
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("service6");
        echo "\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/menu-4.svg \" alt=\"\" class=\"w-10\">
                                    </i>Автоэлектрик с <br> выездом</a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"";
        // line 99
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("service7");
        echo "\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/car-mechanic-with-departure.png \" alt=\"\" class=\"w-10\">
                                    </i>Автомеханик с выездом</a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"";
        // line 105
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("service8");
        echo "\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/menu-5.svg\" alt=\"\" class=\"w-10\">
                                    </i>Вытащить машину</a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5 mr-15\">
                                <a href=\"";
        // line 111
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("service9");
        echo "\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\" https://auto-help-spb.ru/images/menu-10.svg\" alt alt=\"\" class=\"w-10\">
                                    </i>Ремонт, замена и <br> подкачка колёс</a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"";
        // line 117
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("service10");
        echo "\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/vehicle-diagnostics.png\"  alt=\"\" class=\"w-10\">
                                     </i>Диагностика <br> автомобиля</a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"";
        // line 123
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("service11");
        echo "\" class=\" flex items-center text-black hover:text-orange-500\">
                                        <i class=\"mr-2\">
                                            <img src=\"https://auto-help-spb.ru/images/alarm-repair-and-deactivation.png \" alt=\"\" class=\"w-10\">
                                        </i>Ремонт и отключение <br> сигнализации</a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"";
        // line 129
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("service12");
        echo "\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/menu-2.svg\" alt=\"\" class=\"w-10\">
                                    </i>Подвоз топлива
                                </a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"";
        // line 136
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("service13");
        echo "\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/engine-start.png\" alt=\"\" class=\"w-10\">
                                    </i>Запуск двигателя
                                </a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"";
        // line 143
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("service14");
        echo "\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/menu-7.svg \" alt=\"\" class=\"w-10\">
                                    </i>Буксировка автомобиля
                                </a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"";
        // line 150
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("service15");
        echo "\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/menu-8.svg\" alt=\"\" class=\"w-10\">
                                    </i>Разблокировка АКПП
                                </a>
                            </li>
                         </ul>
                         </div>
            
                     </li>
                             </li> 
                 <li class=\"hidden lg:flex hover:text-orange-600 w-1/6 ml-10\"><a href=\"";
        // line 161
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("prices");
        echo "\"> ЦЕНЫ </a></li>
                 <li class=\"hidden lg:flex hover:text-orange-600 w-1/6\"><a href=\"";
        // line 162
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("reviews");
        echo "\"> ОТЗЫВЫ </a></li>
                 <li class=\"hidden lg:flex hover:text-orange-600 w-1/6\"><a href=\"";
        // line 163
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\"> КОНТАКТЫ </a></li>
                 <li onclick=\"orderCallBtn()\" class=\"border-2 text-center border-white w-6/12 sm:w-1/3 lg:w-1/6 py-3 hover:bg-blue-700 hover:border-blue-700
                 transition duration-500\">Заказать звонок</li>      
             </ul>  
         </div>
 </header>
 <div class=\"header font-bold lg:text-5xl md:text-3xl text-xl mt-16 mx-6 md:mx-24\">
 ";
        // line 170
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "home/title.htm"        ;
        $context['__cms_component_params']['fixture'] = "h1"        ;
        $context['__cms_component_params']['tools'] = "bold,italic"        ;
        $context['__cms_component_params']['class'] = "text-white"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 171
        echo " <h1 class=\"text-white\"> ОТ ";
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "home/price.htm"        ;
        $context['__cms_component_params']['fixture'] = "span"        ;
        $context['__cms_component_params']['tools'] = "bold,italic"        ;
        $context['__cms_component_params']['class'] = "text-orange-600"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "</h1>
 </div>
 <ul class=\"text-sm md:text-lg lg:xl flex-col items-center justify-evenly text-white mt-10 mx-6 md:mx-24\">
     <li><i class=\"fas fa-angle-double-right pr-4 text-orange-600 mt-4\"></i>";
        // line 174
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "home/list1.htm"        ;
        $context['__cms_component_params']['tools'] = "bold,italic"        ;
        $context['__cms_component_params']['class'] = ""        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "</li>
     <li><i class=\"fas fa-angle-double-right pr-4 text-orange-600 mt-4\"></i>";
        // line 175
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "home/list2.htm"        ;
        $context['__cms_component_params']['tools'] = "bold,italic"        ;
        $context['__cms_component_params']['class'] = ""        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "</li>
     <li><i class=\"fas fa-angle-double-right pr-4 text-orange-600 mt-4\"></i>";
        // line 176
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "home/list3.htm"        ;
        $context['__cms_component_params']['tools'] = "bold,italic"        ;
        $context['__cms_component_params']['class'] = ""        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "</li>
     <li><i class=\"fas fa-angle-double-right pr-4 text-orange-600 mt-4\"></i>";
        // line 177
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "home/list4.htm"        ;
        $context['__cms_component_params']['tools'] = "bold,italic"        ;
        $context['__cms_component_params']['class'] = ""        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "</li>
     <li><i class=\"fas fa-angle-double-right pr-4 text-orange-600 mt-4\"></i>";
        // line 178
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "home/list5.htm"        ;
        $context['__cms_component_params']['tools'] = "bold,italic"        ;
        $context['__cms_component_params']['class'] = ""        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "</li>
     <button onclick=\"callMasterBtn()\" style=\"font-size: 16px;font-weight: 700;\" class=\"outline-none mt-16 mb-8 py-4 px-8 bg-blue-600 hover:bg-blue-700  transition duration-200\">Вызват мастера
     </button>  
       <!-- Root element for center items -->
<div class=\"callMasterForm flex flex-col opacity-60 top-0 left-0 bg-gray-900 h-full fixed w-full z-10 hidden\">
 <!-- Auth Card Container -->
 <div class=\"grid place-items-center mx-2 my-20 sm:my-auto\">
     <!-- Auth Card -->
     <div class=\"w-11/12 p-12 sm:w-8/12 md:w-6/12 lg:w-5/12 2xl:w-4/12 
         px-6 py-10 sm:px-10 sm:py-6 
         bg-white  rounded-lg shadow-md lg:shadow-lg\">
         <i onclick=\"closeNav()\" style=\" font-size: 24px;\" class=\"fas fa-times cursor-pointer text-black\"></i>
         <!-- Card Title -->
         <h2 class=\"text-center font-semibold text-3xl lg:text-4xl text-gray-800\">
             Вызвать мастера
         </h2>
         <form class=\"mt-10\" method=\"POST\">
             <!-- Name Input -->
             <input  type=\"text\" placeholder=\"Ваше имя\"
                 class=\"block w-full py-3 px-1 mt-2 
                 text-gray-800 appearance-none 
                 bg-gray-200 pl-6
                 focus:text-gray-500 focus:outline-none focus:border-gray-200\"
                 required />
             <!-- Number Input -->
             <input  type=\"tel\" placeholder=\"Ваш телефон*\" 
                 class=\"block w-full py-3 px-1 mt-6 mb-4
                 text-gray-800 appearance-none 
                 bg-gray-200 pl-6
                 focus:text-gray-500 focus:outline-none focus:border-gray-200\"
                 required />
             <!-- Text Input -->
            
             <input placeholder=\"Ваше сообщение\"
                 class=\"block w-full py-3 pb-16 px-1 mt-2 
                 text-gray-800 appearance-none 
                 bg-gray-200 pl-6
                 focus:text-gray-500 focus:outline-none focus:border-gray-200\"
                 required />
               
             <!-- Submit Buttton -->
             <button type=\"submit\"
                 class=\"w-full py-3 mt-10 bg-blue-600 rounded-sm
                 font-medium text-white uppercase
                 focus:outline-none hover:bg-gray-700 hover:shadow-none\">
                 Отправить
             </button>
         </form>
     </div>
 </div>
</div>
 </ul>  
</div>
 </div>
 </div>
 <div class=\"h-full w-full bg-white\">
<div class=\"m-auto flex flex-wrap justify-center text-center items-center\">
    ";
        // line 235
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home/aboutus"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 236
        echo " </div>
 <div class=\"pb-16 h-full flex-col bg-blue-700 justify-between items-center mt-10\">
     <div>
     <h1 class=\"text-white text-center text-4xl font-black py-8\">Отправляйте фото в мессенджер</h1>
     <div class=\" flex justify-evenly items-center text-center font-black flex-wrap\">
        <a class=\"w-48 mt-4 bg-white py-4 ml-4 rounded-lg hover:text-blue-700 transition duration-200\" href=\"#\"> <div style=\"display: flex; justify-content: center\" class=\"flex-col items-center justify-center\">
             <img class=\"h-16\" src=\"https://auto-help-spb.ru/images/section-messangers/whatsapp.png\" alt=\"\">
             <p class=\"text-sm mt-2\">Whats App</p>
         </div></a>
        <a class=\" w-48 mt-4 bg-white py-4 ml-4 rounded-lg hover:text-blue-700 transition duration-200\" href=\"#\"> <div style=\"display: flex; justify-content: center\" class=\"flex-col items-center justify-center\">
             <img class=\"h-16\" src=\"https://auto-help-spb.ru/images/section-messangers/viber.png\" alt=\"\">
             <p class=\"text-sm mt-2\">Viber</p>
         </div></a>
        <a class=\"w-48 mt-4 bg-white py-4 ml-4 rounded-lg hover:text-blue-700 transition duration-200\" href=\"#\"> <div style=\"display: flex; justify-content: center\" class=\"flex-col items-center justify-center\">
             <img class=\"h-16\" src=\"https://auto-help-spb.ru/images/section-messangers/telegram.png\" alt=\"\">
             <p class=\"text-sm mt-2\">Telegram</p>
         </div></a>
        <a class=\"w-48 mt-4 bg-white py-4 ml-4 rounded-lg hover:text-blue-700 transition duration-200\" href=\"#\"> <div style=\"display: flex; justify-content: center\" class=\"flex-col items-center justify-center\">
             <img class=\"h-16\" src=\"https://auto-help-spb.ru/images/section-messangers/vk.png\" alt=\"\">
             <p class=\"text-sm mt-2\">VK</p>
         </div></a>
     </div>
     <div class=\"mx-10 md:mx-16 lg:mx-32 flex-col justify-between\"> 
     <p class=\"text-white text-2xl font-thin mt-6\">Пришлите фото в мессенжер и получите быстрый расчет стоимости!</p>
     <p class=\"text-white text-2xl font-thin mt-6\">Или оставтьте заявку на сайте</p>
     <button onclick=\"orderCallBtn()\" class=\"border-2 border-white py-3 px-6 mt-4 text-white text-base font-bold mt-8 hover:bg-white hover:text-blue-700\">Оставить заявку</button>
     </div>
</div>
 </div>
<div class=\" mx-4 lg:mx-16 bg-white py-16\">
    <div class=\"flex items-center flex-wrap\">
        <div class=\"md:w-1/2 w-full\">
     ";
        // line 268
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "home/text1.htm"        ;
        $context['__cms_component_params']['fixture'] = "p"        ;
        $context['__cms_component_params']['tools'] = "bold,italic"        ;
        $context['__cms_component_params']['class'] = ""        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 269
        echo "     <br>
     ";
        // line 270
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "home/text2.htm"        ;
        $context['__cms_component_params']['fixture'] = "p"        ;
        $context['__cms_component_params']['tools'] = "bold,italic"        ;
        $context['__cms_component_params']['class'] = ""        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 271
        echo "     </div>
     <img class=\"mt-6 md:w-1/2 w-full\" src=\"https://auto-help-spb.ru/assets/cache_image/images/one/index_585x361_721.jpg\" alt=\"\">   
 </div>
 </div>
<!-- service container -->
       <!-- Root element for center items -->
<div class=\"orderForm flex flex-col opacity-60 top-0 left-0 bg-gray-900 h-full fixed w-full z-10 hidden\">
 <!-- Auth Card Container -->
 <div class=\"grid place-items-center mx-2 my-20 sm:my-auto\">
     <!-- Auth Card -->
     <div class=\"w-11/12 p-12 sm:w-8/12 md:w-6/12 lg:w-5/12 2xl:w-4/12 
         px-6 py-10 sm:px-10 sm:py-6 
         bg-white  rounded-lg shadow-md lg:shadow-lg\">
         <i onclick=\"closeNav()\" style=\" font-size: 24px;\" class=\"fas fa-times cursor-pointer text-black\"></i>
         <!-- Card Title -->
         <h2 class=\"text-center font-semibold text-3xl lg:text-4xl text-gray-800\">
             Заказать
         </h2>
         <form class=\"mt-10\" method=\"POST\">
             <!-- Name Input -->
             <input  type=\"text\" placeholder=\"Ваше имя\"
                 class=\"block w-full py-3 px-1 mt-2 
                 text-gray-800 appearance-none 
                 bg-gray-200 pl-6
                 focus:text-gray-500 focus:outline-none focus:border-gray-200\"
                 required />
             <!-- Number Input -->
             <input  type=\"tel\" placeholder=\"Ваш телефон*\" 
                 class=\"block w-full py-3 px-1 mt-6 mb-4
                 text-gray-800 appearance-none 
                 bg-gray-200 pl-6
                 focus:text-gray-500 focus:outline-none focus:border-gray-200\"
                 required />
             <!-- Text Input -->
            
             <input placeholder=\"Ваше сообщение\"
                 class=\"block w-full py-3 pb-16 px-1 mt-2 
                 text-gray-800 appearance-none 
                 bg-gray-200 pl-6
                 focus:text-gray-500 focus:outline-none focus:border-gray-200\"
                 required />
               
             <!-- Submit Buttton -->
             <button type=\"submit\"
                 class=\"w-full py-3 mt-10 bg-blue-600 rounded-sm
                 font-medium text-white uppercase
                 focus:outline-none hover:bg-gray-700 hover:shadow-none\">
                 Отправить
             </button>
         </form>
     </div>
 </div>
</div>
<div>
     <h1 class=\"text-center text-4xl pt-8\">Цены на работы</h1>
     <div class=\"flex flex-wrap  my-10  justify-evenly\">
     <div class=\" flex-wrap lg:w-3/5 w-full flex-col justify-center items-center mx-4 lg:mx-0 font-thin\">
         
        ";
        // line 329
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home/price"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 330
        echo "     </div>
     
         <div class=\" flex-col bg-blue-600 p-4 text-white py-10 mx-4 lg:mx-0  lg:w-48 w-full\">
             <p>
                 Цена озвученная диспетчером, не увеличится на месте работ.
             </p><br>
             <p> При невозможности точно описать проблему диспетчеру, стоимость
                 работ определяет мастер.
             </p><br>
             <p>
             Стоимость зависит от сложности и условий 
             проведения работ.
             Вы заплатите на 10-20% меньше средней цены по рынку.
             </p>
         </div>
         
     </div>
</div>
<!-- service container -->
 <!-- contact container -->
<div class=\"bg-blue-600 text-center py-16\">
 <div class=\" mx-8\">
     <h1 class=\"py-8 text-4xl text-center text-white font-extrabold\">Как мы работаем</h1>
     <div class=\"flex flex-wrap justify-evenly\">
        ";
        // line 354
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home/work"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 355
        echo "     </div>
 </div>
</div>
<div class=\" bg-gray-100 py-12\">
 <div class=\"flex-col flex-wrap mx-4 md:mx-16 lg:mx-24\">
     <h1 class=\"title text-center font-extrabold text-xl md:text-2xl lg:text-4xl py-6\">
        ";
        // line 361
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "home/title2.htm"        ;
        $context['__cms_component_params']['fixture'] = "h1"        ;
        $context['__cms_component_params']['tools'] = "bold,italic"        ;
        $context['__cms_component_params']['class'] = "title text-center font-extrabold text-xl md:text-2xl lg:text-4xl py-6"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 362
        echo "     </h1>
     <div class=\"flex-row flex-wrap \">
         <div class=\"flex-col font-thin px-2  w-full\">
            ";
        // line 365
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "home/text4.htm"        ;
        $context['__cms_component_params']['fixture'] = "p"        ;
        $context['__cms_component_params']['tools'] = "bold,italic"        ;
        $context['__cms_component_params']['class'] = ""        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 366
        echo "         </div>
         <br>
         <div class=\"flex-col font-thin px-2  w-full\">
            ";
        // line 369
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "home/text5.htm"        ;
        $context['__cms_component_params']['fixture'] = "p"        ;
        $context['__cms_component_params']['tools'] = "bold,italic"        ;
        $context['__cms_component_params']['class'] = ""        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 370
        echo "         </p>
         </div>
     </div>
 </div>
</div>

<div class=\"bg-white py-12\">
 <div class=\"flex-col\">
     <h1 class=\"font-extrabold text-4xl text-center py-6\">Наши услуги</h1>
     <div class=\"flex text-center justify-center items-center flex-wrap\">
        <div class=\"owl-carousel owl-theme\">
            ";
        // line 381
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home/service"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 382
        echo "        </div>
     
   
    
 </div>
 </div>
</div>
<!-- Служба техпомощи компании section start -->
<div class=\" bg-gray-100\">
 <div class=\"flex-col mx-4 md:mx-8 lg:mx-12 py-8 \">
        ";
        // line 392
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "home/title3.htm"        ;
        $context['__cms_component_params']['fixture'] = "h1"        ;
        $context['__cms_component_params']['tools'] = "bold,italic"        ;
        $context['__cms_component_params']['class'] = "text-center font-extrabold text-lg sm:text-2xl lg:text-4xl py-12"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 393
        echo "     <div class=\"flex mx-4 flex-wrap justify-center\">
         <div class=\"flex  flex-wrap font-thin text-sm md:text-lg\">
            ";
        // line 395
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "home/text3.htm"        ;
        $context['__cms_component_params']['fixture'] = "p"        ;
        $context['__cms_component_params']['tools'] = "bold,italic"        ;
        $context['__cms_component_params']['class'] = ""        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 396
        echo "         <br>
         <!-- ";
        // line 397
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "home/list6.htm"        ;
        $context['__cms_component_params']['fixture'] = "ul"        ;
        $context['__cms_component_params']['tools'] = "bold,italic,ordered-list"        ;
        $context['__cms_component_params']['class'] = ""        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo " -->
         <ul class=\"pl-4\">
             ";
        // line 399
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "home/list6.htm"        ;
        $context['__cms_component_params']['fixture'] = ""        ;
        $context['__cms_component_params']['tools'] = "bold,italic,ordered-list"        ;
        $context['__cms_component_params']['class'] = "list-disc"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 400
        echo "
         </ul>
         <br>
         ";
        // line 403
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "home/text6.htm"        ;
        $context['__cms_component_params']['fixture'] = "p"        ;
        $context['__cms_component_params']['tools'] = "bold,italic"        ;
        $context['__cms_component_params']['class'] = ""        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 404
        echo "                ";
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "home/title4.htm"        ;
        $context['__cms_component_params']['fixture'] = "h1"        ;
        $context['__cms_component_params']['tools'] = "bold,italic"        ;
        $context['__cms_component_params']['class'] = "text-center font-extrabold text-lg sm:text-2xl lg:text-4xl py-12 m-auto"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 405
        echo "                ";
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "home/text7.htm"        ;
        $context['__cms_component_params']['fixture'] = "p"        ;
        $context['__cms_component_params']['tools'] = "bold,italic"        ;
        $context['__cms_component_params']['class'] = ""        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 406
        echo "                ";
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "home/title4.htm"        ;
        $context['__cms_component_params']['fixture'] = "h1"        ;
        $context['__cms_component_params']['tools'] = "bold,italic"        ;
        $context['__cms_component_params']['class'] = "text-center font-extrabold text-lg sm:text-2xl lg:text-4xl py-12 m-auto"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 407
        echo "                ";
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "home/text8.htm"        ;
        $context['__cms_component_params']['fixture'] = "p"        ;
        $context['__cms_component_params']['tools'] = "bold,italic"        ;
        $context['__cms_component_params']['class'] = ""        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 408
        echo "
         </div>
     </div>
 </div>
</div>
<!-- Служба техпомощи компании section end -->
<!-- Наши работы section start -->
<div class=\" bg-white-100 mx-4 lg:mx-24 md:mx-12 \">
 <h1 class=\"text-center font-extrabold text-4xl py-12\">
     Наши работы
 </h1>
  <div class=\"flex-col\">
     <div class=\"flex md:grid grid-cols-4 grid-rows-2 gap-8 flex-col flex-wrap py-8\" >
         <div class=\"my-2 md:my-0 col-span-2 cursor-pointer\"><img class=\"object-cover w-full h-full \" src=\"https://auto-help-spb.ru/images/gallery/19/1.jpg\" alt=\"\"></div>
         <div class=\"my-2 md:my-0 cursor-pointer\"><img class=\"object-cover w-full h-full \" src=\"https://auto-help-spb.ru/images/gallery/19/2.jpg\" alt=\"\"></div>
         <div class=\"my-2 md:my-0 row-span-2 cursor-pointer\"><img class=\"object-cover w-full h-full \" src=\"https://auto-help-spb.ru/images/gallery/19/6.jpg\" alt=\"\"></div>
         <div class=\"my-2 md:my-0  cursor-pointer\"><img class=\"object-cover w-full h-full \" src=\"https://auto-help-spb.ru/images/gallery/19/3.jpg\" alt=\"\"></div>
         <div class=\"my-2 md:my-0  cursor-pointer\"><img class=\"object-cover w-full h-full \" src=\"https://auto-help-spb.ru/images/gallery/19/4.jpg\" alt=\"\"></div>
         <div class=\"my-2 md:my-0  cursor-pointer\"><img class=\"object-cover w-full h-full \" src=\"https://auto-help-spb.ru/images/gallery/19/5.jpg\" alt=\"\"></div>
     </div>
  </div>
</div>
<!-- Наши работы section end -->
<!-- <div class=\"flex-col bg-gray-300\">
 <h1 class=\"text-center font-extrabold text-4xl  py-12\">Связаться с нами</h1>
 <div class=\"flex justify-evenly items-center flex-wrap mx-4 md:mx-12 lg:mx-24 py-12\">
    <div class=\"mapouter\"><div class=\"gmap_canvas\"><iframe width=\"800\" height=\"500\" id=\"gmap_canvas\" src=\"https://maps.google.com/maps?q=moscow&t=&z=13&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe><a href=\"https://www.whatismyip-address.com\"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:800px;}</style><a href=\"https://www.embedgooglemap.net\">full width google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:800px;}</style></div></div>
 </div>
</div> -->";
    }

    public function getTemplateName()
    {
        return "E:\\openserver\\domains\\auto/themes/auto/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  757 => 408,  748 => 407,  739 => 406,  730 => 405,  721 => 404,  713 => 403,  708 => 400,  700 => 399,  689 => 397,  686 => 396,  678 => 395,  674 => 393,  666 => 392,  654 => 382,  650 => 381,  637 => 370,  629 => 369,  624 => 366,  616 => 365,  611 => 362,  603 => 361,  595 => 355,  591 => 354,  565 => 330,  561 => 329,  501 => 271,  493 => 270,  490 => 269,  482 => 268,  448 => 236,  444 => 235,  379 => 178,  370 => 177,  361 => 176,  352 => 175,  343 => 174,  330 => 171,  322 => 170,  312 => 163,  308 => 162,  304 => 161,  290 => 150,  280 => 143,  270 => 136,  260 => 129,  251 => 123,  242 => 117,  233 => 111,  224 => 105,  215 => 99,  206 => 93,  197 => 87,  188 => 81,  179 => 75,  170 => 69,  161 => 63,  152 => 57,  137 => 44,  129 => 43,  122 => 38,  114 => 37,  109 => 34,  101 => 33,  89 => 23,  85 => 22,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div>
    <img style=\"height: 220vh; filter: brightness(30%);   z-index: -2;\" class=\"absolute bg-auto bg-cover bg-contain\" src=\"https://auto-help-spb.ru/images/top/index.jpg\" alt=\"\">
     <div>  
 <header class=\"pt-2\">
     <!-- Root element for center items -->
 <div class=\"orderCallForm flex flex-col opacity-60 bg-gray-900 h-full fixed w-full z-10 hidden\">
 <!-- Auth Card Container -->
     <div class=\"grid place-items-center mx-2 my-20 sm:my-auto\">
         <!-- Auth Card -->
         <div class=\"w-11/12 p-12 sm:w-8/12 md:w-6/12 lg:w-5/12 2xl:w-4/12 
             px-6 py-10 sm:px-10 sm:py-6 
             bg-white  rounded-lg shadow-md lg:shadow-lg\">
             <i onclick=\"closeNav()\" style=\" font-size: 24px;\" class=\"fas fa-times cursor-pointer \"></i>
             <!-- Card Title -->
             <div class=\"flex-col text-xs md:text-base  mt-2\">
                <a class=\"hover:text-blue-500\" href=\"tel:+79067031111\">+7 (906)703-11-11</a>
            </div>
            <hr class=\"border-b-1 mb-1 border-blue-700 w-48 mt-1\">
             <h2 class=\"text-center font-semibold text-3xl lg:text-4xl text-gray-800\">  
                 Заказать звонок
             </h2>
                {% component 'formSubscribe' %}
         </div>
     </div>
 </div>
     <div>
         <div class=\"flex text-white items-center justify-evenly\">
             <div class=\"cursor-pointer w-1/2 md:w-48 \">
                 <a href=\"./index.html\"><img src=\"data:image/png;base64,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\" alt=\"\"></div>
             </a>
                 <div class='hidden lg:flex w-96'>
                 <i class=\"fas fa-map-marker-alt pr-2\"></i>
                 {% component 'contenteditor' file=\"home/head1.htm\" fixture=\"p\" tools=\"bold,italic\" class=\"\" %}
             </div>
             <div class='flex hidden lg:flex w-96'>
                 <i class=\"fas fa-clock pr-2\"></i>
                 {% component 'contenteditor' file=\"home/head2.htm\" fixture=\"p\" tools=\"bold,italic\" class=\"\" %}
             </div>
             <div class='flex w-96'>
                 <i class=\"fas fa-phone-alt pr-2\"></i>
                 <div class=\"flex-col text-xs md:text-base\">
                 <!-- <a class=\"hover:text-blue-500\" href=\"tel:+79067031111\">+7 (906)703-11-11</a> -->
                 {% component 'contenteditor' file=\"home/head3.htm\" fixture=\"a\" tools=\"bold,italic\" class=\"hover:text-blue-500\" %}
                 </div>
             </div>
         </div>
         <div class=\"  text-white cursor-pointer\">
             <ul class=\"flex p-4 items-center justify-evenly\">
                 <li onclick=\"navOpen()\" class=\"flex visible lg:hidden\"><i class=\"fas fa-bars text-orange-600 text-5xl\"></i></li>
                 <li class=\"flex uppercase items-center\">
                     <li  class=\"relative uppercase nav-menu  flex hidden text-center justify-evenly lg:flex p-6 hover:bg-gray-600 w-1/6\">
                     Услуги
                     <img src=\"https://auto-help-spb.ru/images/menu-arrow.svg\" alt=\"\">
                     <div style=\"width: 90vw; top: 70px;\" class=\"nav-submenu z-10  p-6 bg-gray-100 hidden absolute left-0\">
                         <ul class=\" flex flex-wrap items-center justify-evenly\">
                            <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"{{ 'home'|page }}\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/avtohelp.png\" alt=\"\" class=\"w-10\">
                                    </i>Автомобильная помощь</a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                    <a href=\"{{ 'service1'|page }}\" class=\" flex items-center text-black hover:text-orange-500\">
                                     <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/autopsy-car.png\" alt alt=\"\" class=\"w-10\">
                                    </i>Вскрытие авто</a>
                            </li>
                             <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"{{ 'service2'|page }}\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/opening-hood.png\" alt alt=\"\" class=\"w-10\">
                                    </i>Вскрытие капота</a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"{{ 'service3'|page }}\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/opening-trunk.png\" alt alt=\"\" class=\"w-10\">
                                    </i>Вскрытие багажника</a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                    <a href=\"{{ 'service4'|page }}\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/menu-1.svg\" alt=\"\" class=\"w-10\">
                                    </i>Прикурить аккумулятор</a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"{{ 'service5'|page }}\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/menu-11.svg \" alt alt=\"\" class=\"w-10\">
                                    </i>Замена АКБ</a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5 avto\">
                                <a href=\"{{ 'service6'|page }}\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/menu-4.svg \" alt=\"\" class=\"w-10\">
                                    </i>Автоэлектрик с <br> выездом</a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"{{ 'service7'|page }}\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/car-mechanic-with-departure.png \" alt=\"\" class=\"w-10\">
                                    </i>Автомеханик с выездом</a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"{{ 'service8'|page }}\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/menu-5.svg\" alt=\"\" class=\"w-10\">
                                    </i>Вытащить машину</a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5 mr-15\">
                                <a href=\"{{ 'service9'|page }}\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\" https://auto-help-spb.ru/images/menu-10.svg\" alt alt=\"\" class=\"w-10\">
                                    </i>Ремонт, замена и <br> подкачка колёс</a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"{{ 'service10'|page }}\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/vehicle-diagnostics.png\"  alt=\"\" class=\"w-10\">
                                     </i>Диагностика <br> автомобиля</a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"{{ 'service11'|page }}\" class=\" flex items-center text-black hover:text-orange-500\">
                                        <i class=\"mr-2\">
                                            <img src=\"https://auto-help-spb.ru/images/alarm-repair-and-deactivation.png \" alt=\"\" class=\"w-10\">
                                        </i>Ремонт и отключение <br> сигнализации</a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"{{ 'service12'|page }}\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/menu-2.svg\" alt=\"\" class=\"w-10\">
                                    </i>Подвоз топлива
                                </a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"{{ 'service13'|page }}\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/engine-start.png\" alt=\"\" class=\"w-10\">
                                    </i>Запуск двигателя
                                </a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"{{ 'service14'|page }}\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/menu-7.svg \" alt=\"\" class=\"w-10\">
                                    </i>Буксировка автомобиля
                                </a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"{{ 'service15'|page }}\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/menu-8.svg\" alt=\"\" class=\"w-10\">
                                    </i>Разблокировка АКПП
                                </a>
                            </li>
                         </ul>
                         </div>
            
                     </li>
                             </li> 
                 <li class=\"hidden lg:flex hover:text-orange-600 w-1/6 ml-10\"><a href=\"{{ 'prices'|page }}\"> ЦЕНЫ </a></li>
                 <li class=\"hidden lg:flex hover:text-orange-600 w-1/6\"><a href=\"{{ 'reviews'|page }}\"> ОТЗЫВЫ </a></li>
                 <li class=\"hidden lg:flex hover:text-orange-600 w-1/6\"><a href=\"{{ 'contact'|page }}\"> КОНТАКТЫ </a></li>
                 <li onclick=\"orderCallBtn()\" class=\"border-2 text-center border-white w-6/12 sm:w-1/3 lg:w-1/6 py-3 hover:bg-blue-700 hover:border-blue-700
                 transition duration-500\">Заказать звонок</li>      
             </ul>  
         </div>
 </header>
 <div class=\"header font-bold lg:text-5xl md:text-3xl text-xl mt-16 mx-6 md:mx-24\">
 {% component 'contenteditor' file=\"home/title.htm\" fixture=\"h1\" tools=\"bold,italic\" class=\"text-white\" %}
 <h1 class=\"text-white\"> ОТ {% component 'contenteditor' file=\"home/price.htm\" fixture=\"span\" tools=\"bold,italic\" class=\"text-orange-600\" %}</h1>
 </div>
 <ul class=\"text-sm md:text-lg lg:xl flex-col items-center justify-evenly text-white mt-10 mx-6 md:mx-24\">
     <li><i class=\"fas fa-angle-double-right pr-4 text-orange-600 mt-4\"></i>{% component 'contenteditor' file=\"home/list1.htm\"  tools=\"bold,italic\" class=\"\" %}</li>
     <li><i class=\"fas fa-angle-double-right pr-4 text-orange-600 mt-4\"></i>{% component 'contenteditor' file=\"home/list2.htm\"  tools=\"bold,italic\" class=\"\" %}</li>
     <li><i class=\"fas fa-angle-double-right pr-4 text-orange-600 mt-4\"></i>{% component 'contenteditor' file=\"home/list3.htm\"  tools=\"bold,italic\" class=\"\" %}</li>
     <li><i class=\"fas fa-angle-double-right pr-4 text-orange-600 mt-4\"></i>{% component 'contenteditor' file=\"home/list4.htm\"  tools=\"bold,italic\" class=\"\" %}</li>
     <li><i class=\"fas fa-angle-double-right pr-4 text-orange-600 mt-4\"></i>{% component 'contenteditor' file=\"home/list5.htm\"  tools=\"bold,italic\" class=\"\" %}</li>
     <button onclick=\"callMasterBtn()\" style=\"font-size: 16px;font-weight: 700;\" class=\"outline-none mt-16 mb-8 py-4 px-8 bg-blue-600 hover:bg-blue-700  transition duration-200\">Вызват мастера
     </button>  
       <!-- Root element for center items -->
<div class=\"callMasterForm flex flex-col opacity-60 top-0 left-0 bg-gray-900 h-full fixed w-full z-10 hidden\">
 <!-- Auth Card Container -->
 <div class=\"grid place-items-center mx-2 my-20 sm:my-auto\">
     <!-- Auth Card -->
     <div class=\"w-11/12 p-12 sm:w-8/12 md:w-6/12 lg:w-5/12 2xl:w-4/12 
         px-6 py-10 sm:px-10 sm:py-6 
         bg-white  rounded-lg shadow-md lg:shadow-lg\">
         <i onclick=\"closeNav()\" style=\" font-size: 24px;\" class=\"fas fa-times cursor-pointer text-black\"></i>
         <!-- Card Title -->
         <h2 class=\"text-center font-semibold text-3xl lg:text-4xl text-gray-800\">
             Вызвать мастера
         </h2>
         <form class=\"mt-10\" method=\"POST\">
             <!-- Name Input -->
             <input  type=\"text\" placeholder=\"Ваше имя\"
                 class=\"block w-full py-3 px-1 mt-2 
                 text-gray-800 appearance-none 
                 bg-gray-200 pl-6
                 focus:text-gray-500 focus:outline-none focus:border-gray-200\"
                 required />
             <!-- Number Input -->
             <input  type=\"tel\" placeholder=\"Ваш телефон*\" 
                 class=\"block w-full py-3 px-1 mt-6 mb-4
                 text-gray-800 appearance-none 
                 bg-gray-200 pl-6
                 focus:text-gray-500 focus:outline-none focus:border-gray-200\"
                 required />
             <!-- Text Input -->
            
             <input placeholder=\"Ваше сообщение\"
                 class=\"block w-full py-3 pb-16 px-1 mt-2 
                 text-gray-800 appearance-none 
                 bg-gray-200 pl-6
                 focus:text-gray-500 focus:outline-none focus:border-gray-200\"
                 required />
               
             <!-- Submit Buttton -->
             <button type=\"submit\"
                 class=\"w-full py-3 mt-10 bg-blue-600 rounded-sm
                 font-medium text-white uppercase
                 focus:outline-none hover:bg-gray-700 hover:shadow-none\">
                 Отправить
             </button>
         </form>
     </div>
 </div>
</div>
 </ul>  
</div>
 </div>
 </div>
 <div class=\"h-full w-full bg-white\">
<div class=\"m-auto flex flex-wrap justify-center text-center items-center\">
    {% partial 'home/aboutus' %}
 </div>
 <div class=\"pb-16 h-full flex-col bg-blue-700 justify-between items-center mt-10\">
     <div>
     <h1 class=\"text-white text-center text-4xl font-black py-8\">Отправляйте фото в мессенджер</h1>
     <div class=\" flex justify-evenly items-center text-center font-black flex-wrap\">
        <a class=\"w-48 mt-4 bg-white py-4 ml-4 rounded-lg hover:text-blue-700 transition duration-200\" href=\"#\"> <div style=\"display: flex; justify-content: center\" class=\"flex-col items-center justify-center\">
             <img class=\"h-16\" src=\"https://auto-help-spb.ru/images/section-messangers/whatsapp.png\" alt=\"\">
             <p class=\"text-sm mt-2\">Whats App</p>
         </div></a>
        <a class=\" w-48 mt-4 bg-white py-4 ml-4 rounded-lg hover:text-blue-700 transition duration-200\" href=\"#\"> <div style=\"display: flex; justify-content: center\" class=\"flex-col items-center justify-center\">
             <img class=\"h-16\" src=\"https://auto-help-spb.ru/images/section-messangers/viber.png\" alt=\"\">
             <p class=\"text-sm mt-2\">Viber</p>
         </div></a>
        <a class=\"w-48 mt-4 bg-white py-4 ml-4 rounded-lg hover:text-blue-700 transition duration-200\" href=\"#\"> <div style=\"display: flex; justify-content: center\" class=\"flex-col items-center justify-center\">
             <img class=\"h-16\" src=\"https://auto-help-spb.ru/images/section-messangers/telegram.png\" alt=\"\">
             <p class=\"text-sm mt-2\">Telegram</p>
         </div></a>
        <a class=\"w-48 mt-4 bg-white py-4 ml-4 rounded-lg hover:text-blue-700 transition duration-200\" href=\"#\"> <div style=\"display: flex; justify-content: center\" class=\"flex-col items-center justify-center\">
             <img class=\"h-16\" src=\"https://auto-help-spb.ru/images/section-messangers/vk.png\" alt=\"\">
             <p class=\"text-sm mt-2\">VK</p>
         </div></a>
     </div>
     <div class=\"mx-10 md:mx-16 lg:mx-32 flex-col justify-between\"> 
     <p class=\"text-white text-2xl font-thin mt-6\">Пришлите фото в мессенжер и получите быстрый расчет стоимости!</p>
     <p class=\"text-white text-2xl font-thin mt-6\">Или оставтьте заявку на сайте</p>
     <button onclick=\"orderCallBtn()\" class=\"border-2 border-white py-3 px-6 mt-4 text-white text-base font-bold mt-8 hover:bg-white hover:text-blue-700\">Оставить заявку</button>
     </div>
</div>
 </div>
<div class=\" mx-4 lg:mx-16 bg-white py-16\">
    <div class=\"flex items-center flex-wrap\">
        <div class=\"md:w-1/2 w-full\">
     {% component 'contenteditor' file=\"home/text1.htm\" fixture=\"p\" tools=\"bold,italic\" class=\"\" %}
     <br>
     {% component 'contenteditor' file=\"home/text2.htm\" fixture=\"p\" tools=\"bold,italic\" class=\"\" %}
     </div>
     <img class=\"mt-6 md:w-1/2 w-full\" src=\"https://auto-help-spb.ru/assets/cache_image/images/one/index_585x361_721.jpg\" alt=\"\">   
 </div>
 </div>
<!-- service container -->
       <!-- Root element for center items -->
<div class=\"orderForm flex flex-col opacity-60 top-0 left-0 bg-gray-900 h-full fixed w-full z-10 hidden\">
 <!-- Auth Card Container -->
 <div class=\"grid place-items-center mx-2 my-20 sm:my-auto\">
     <!-- Auth Card -->
     <div class=\"w-11/12 p-12 sm:w-8/12 md:w-6/12 lg:w-5/12 2xl:w-4/12 
         px-6 py-10 sm:px-10 sm:py-6 
         bg-white  rounded-lg shadow-md lg:shadow-lg\">
         <i onclick=\"closeNav()\" style=\" font-size: 24px;\" class=\"fas fa-times cursor-pointer text-black\"></i>
         <!-- Card Title -->
         <h2 class=\"text-center font-semibold text-3xl lg:text-4xl text-gray-800\">
             Заказать
         </h2>
         <form class=\"mt-10\" method=\"POST\">
             <!-- Name Input -->
             <input  type=\"text\" placeholder=\"Ваше имя\"
                 class=\"block w-full py-3 px-1 mt-2 
                 text-gray-800 appearance-none 
                 bg-gray-200 pl-6
                 focus:text-gray-500 focus:outline-none focus:border-gray-200\"
                 required />
             <!-- Number Input -->
             <input  type=\"tel\" placeholder=\"Ваш телефон*\" 
                 class=\"block w-full py-3 px-1 mt-6 mb-4
                 text-gray-800 appearance-none 
                 bg-gray-200 pl-6
                 focus:text-gray-500 focus:outline-none focus:border-gray-200\"
                 required />
             <!-- Text Input -->
            
             <input placeholder=\"Ваше сообщение\"
                 class=\"block w-full py-3 pb-16 px-1 mt-2 
                 text-gray-800 appearance-none 
                 bg-gray-200 pl-6
                 focus:text-gray-500 focus:outline-none focus:border-gray-200\"
                 required />
               
             <!-- Submit Buttton -->
             <button type=\"submit\"
                 class=\"w-full py-3 mt-10 bg-blue-600 rounded-sm
                 font-medium text-white uppercase
                 focus:outline-none hover:bg-gray-700 hover:shadow-none\">
                 Отправить
             </button>
         </form>
     </div>
 </div>
</div>
<div>
     <h1 class=\"text-center text-4xl pt-8\">Цены на работы</h1>
     <div class=\"flex flex-wrap  my-10  justify-evenly\">
     <div class=\" flex-wrap lg:w-3/5 w-full flex-col justify-center items-center mx-4 lg:mx-0 font-thin\">
         
        {% partial 'home/price' %}
     </div>
     
         <div class=\" flex-col bg-blue-600 p-4 text-white py-10 mx-4 lg:mx-0  lg:w-48 w-full\">
             <p>
                 Цена озвученная диспетчером, не увеличится на месте работ.
             </p><br>
             <p> При невозможности точно описать проблему диспетчеру, стоимость
                 работ определяет мастер.
             </p><br>
             <p>
             Стоимость зависит от сложности и условий 
             проведения работ.
             Вы заплатите на 10-20% меньше средней цены по рынку.
             </p>
         </div>
         
     </div>
</div>
<!-- service container -->
 <!-- contact container -->
<div class=\"bg-blue-600 text-center py-16\">
 <div class=\" mx-8\">
     <h1 class=\"py-8 text-4xl text-center text-white font-extrabold\">Как мы работаем</h1>
     <div class=\"flex flex-wrap justify-evenly\">
        {% partial 'home/work' %}
     </div>
 </div>
</div>
<div class=\" bg-gray-100 py-12\">
 <div class=\"flex-col flex-wrap mx-4 md:mx-16 lg:mx-24\">
     <h1 class=\"title text-center font-extrabold text-xl md:text-2xl lg:text-4xl py-6\">
        {% component 'contenteditor' file=\"home/title2.htm\" fixture=\"h1\" tools=\"bold,italic\" class=\"title text-center font-extrabold text-xl md:text-2xl lg:text-4xl py-6\" %}
     </h1>
     <div class=\"flex-row flex-wrap \">
         <div class=\"flex-col font-thin px-2  w-full\">
            {% component 'contenteditor' file=\"home/text4.htm\" fixture=\"p\" tools=\"bold,italic\" class=\"\" %}
         </div>
         <br>
         <div class=\"flex-col font-thin px-2  w-full\">
            {% component 'contenteditor' file=\"home/text5.htm\" fixture=\"p\" tools=\"bold,italic\" class=\"\" %}
         </p>
         </div>
     </div>
 </div>
</div>

<div class=\"bg-white py-12\">
 <div class=\"flex-col\">
     <h1 class=\"font-extrabold text-4xl text-center py-6\">Наши услуги</h1>
     <div class=\"flex text-center justify-center items-center flex-wrap\">
        <div class=\"owl-carousel owl-theme\">
            {% partial 'home/service' %}
        </div>
     
   
    
 </div>
 </div>
</div>
<!-- Служба техпомощи компании section start -->
<div class=\" bg-gray-100\">
 <div class=\"flex-col mx-4 md:mx-8 lg:mx-12 py-8 \">
        {% component 'contenteditor' file=\"home/title3.htm\" fixture=\"h1\" tools=\"bold,italic\" class=\"text-center font-extrabold text-lg sm:text-2xl lg:text-4xl py-12\" %}
     <div class=\"flex mx-4 flex-wrap justify-center\">
         <div class=\"flex  flex-wrap font-thin text-sm md:text-lg\">
            {% component 'contenteditor' file=\"home/text3.htm\" fixture=\"p\" tools=\"bold,italic\" class=\"\" %}
         <br>
         <!-- {% component 'contenteditor' file=\"home/list6.htm\" fixture=\"ul\" tools=\"bold,italic,ordered-list\" class=\"\" %} -->
         <ul class=\"pl-4\">
             {% component 'contenteditor' file=\"home/list6.htm\" fixture=\"\" tools=\"bold,italic,ordered-list\" class=\"list-disc\" %}

         </ul>
         <br>
         {% component 'contenteditor' file=\"home/text6.htm\" fixture=\"p\" tools=\"bold,italic\" class=\"\" %}
                {% component 'contenteditor' file=\"home/title4.htm\" fixture=\"h1\" tools=\"bold,italic\" class=\"text-center font-extrabold text-lg sm:text-2xl lg:text-4xl py-12 m-auto\" %}
                {% component 'contenteditor' file=\"home/text7.htm\" fixture=\"p\" tools=\"bold,italic\" class=\"\" %}
                {% component 'contenteditor' file=\"home/title4.htm\" fixture=\"h1\" tools=\"bold,italic\" class=\"text-center font-extrabold text-lg sm:text-2xl lg:text-4xl py-12 m-auto\" %}
                {% component 'contenteditor' file=\"home/text8.htm\" fixture=\"p\" tools=\"bold,italic\" class=\"\" %}

         </div>
     </div>
 </div>
</div>
<!-- Служба техпомощи компании section end -->
<!-- Наши работы section start -->
<div class=\" bg-white-100 mx-4 lg:mx-24 md:mx-12 \">
 <h1 class=\"text-center font-extrabold text-4xl py-12\">
     Наши работы
 </h1>
  <div class=\"flex-col\">
     <div class=\"flex md:grid grid-cols-4 grid-rows-2 gap-8 flex-col flex-wrap py-8\" >
         <div class=\"my-2 md:my-0 col-span-2 cursor-pointer\"><img class=\"object-cover w-full h-full \" src=\"https://auto-help-spb.ru/images/gallery/19/1.jpg\" alt=\"\"></div>
         <div class=\"my-2 md:my-0 cursor-pointer\"><img class=\"object-cover w-full h-full \" src=\"https://auto-help-spb.ru/images/gallery/19/2.jpg\" alt=\"\"></div>
         <div class=\"my-2 md:my-0 row-span-2 cursor-pointer\"><img class=\"object-cover w-full h-full \" src=\"https://auto-help-spb.ru/images/gallery/19/6.jpg\" alt=\"\"></div>
         <div class=\"my-2 md:my-0  cursor-pointer\"><img class=\"object-cover w-full h-full \" src=\"https://auto-help-spb.ru/images/gallery/19/3.jpg\" alt=\"\"></div>
         <div class=\"my-2 md:my-0  cursor-pointer\"><img class=\"object-cover w-full h-full \" src=\"https://auto-help-spb.ru/images/gallery/19/4.jpg\" alt=\"\"></div>
         <div class=\"my-2 md:my-0  cursor-pointer\"><img class=\"object-cover w-full h-full \" src=\"https://auto-help-spb.ru/images/gallery/19/5.jpg\" alt=\"\"></div>
     </div>
  </div>
</div>
<!-- Наши работы section end -->
<!-- <div class=\"flex-col bg-gray-300\">
 <h1 class=\"text-center font-extrabold text-4xl  py-12\">Связаться с нами</h1>
 <div class=\"flex justify-evenly items-center flex-wrap mx-4 md:mx-12 lg:mx-24 py-12\">
    <div class=\"mapouter\"><div class=\"gmap_canvas\"><iframe width=\"800\" height=\"500\" id=\"gmap_canvas\" src=\"https://maps.google.com/maps?q=moscow&t=&z=13&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe><a href=\"https://www.whatismyip-address.com\"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:800px;}</style><a href=\"https://www.embedgooglemap.net\">full width google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:800px;}</style></div></div>
 </div>
</div> -->", "E:\\openserver\\domains\\auto/themes/auto/pages/home.htm", "");
    }
}
