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

/* E:\openserver\domains\auto/themes/auto/pages/service1.htm */
class __TwigTemplate_7b95bfd9d0df8c895831f20adbd02afdfd287c0409ca8fc811e290c9432cdc5e extends \Twig\Template
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
        $tags = array("component" => 65, "partial" => 276);
        $filters = array("page" => 98);
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
        echo "<div style=\"height: 150vh;\" class=\"navContainer md:w-1/2 w-full flex-col flex-wrap h-screen justify-center items-center bg-black text-white w-25 p-3 z-10 absolute left-0 top-0 hidden \">
    <div  class=\"text-5xl absolute top-0 right-0 mr-6 cursor-pointer\"><span onclick=\"closeNav()\"> x </span></div>
    <ul class=\"text-white mt-6 inline-block items-center cursor-pointer  text-2xl\">
      <span class=\"border-b-2  hover:border-orange-500\">  Услуги </span> <span onclick=\"openSubMenu()\" class=\"plus text-4xl ml-4 hover:text-blue-500\">+</span>
        <span onclick=\"closeSubMenu()\" class=\"minus hidden text-4xl ml-4 hover:text-blue-500\">-</span>
        <div class=\"navMenu hidden pl-8\">
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Автомобильная помощь</li></a>
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Вскрытие авто</li></a>
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Вскрытие багажника</li></a>
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Прикурить аккумулятор</li></a>
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Замена АКБ</li></a>
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Автоэлектрик с выездом</li></a>
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Автомеханик с выездом</li></a>
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Вытащить машину</li></a>
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Ремонт, замена и подкачка колёс</li></a>
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Диагностика автомобиля</li></a>
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Ремонт и отключение сигнализации</li></a>
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Подвоз топлива</li></a>
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Запуск двигателя</li></a>
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Буксировка автомобиля</li></a>
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Разблокировка АКПП</li></a>
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Вскрытие багажника</li></a>
    </div>
    </ul>
    <a href=\"./price.html\">
        <ul class=\"mt-6 text-2xl hover:text-orange-500\">Цена</ul>
    </a>
    <a href=\"./review.html\">
        <ul class=\"mt-6 text-2xl hover:text-orange-500\">Отзывы</ul>
    </a>
    <a href=\"./contact.html\">
        <ul class=\"mt-6 text-2xl hover:text-orange-500\">Контакты</ul>
    </a>
</div>
<!-- Fixed contact logos -->
<div class=\" w-32 z-40 fixed flex justify-between bottom-0 left-0 \" style=\" margin-left: 20px; margin-bottom: 20px;\">
    <div>
    <a class=\"cursor-pointer\" href=\"#\"><img src=\"https://auto-help-spb.ru/images/section-messangers/whatsapp.png\" alt=\"\"></a>
    </div>
    <div>
    <a class=\"cursor-pointer\" href=\"#\"><img src=\"https://auto-help-spb.ru/images/section-messangers/telegram.png\" alt=\"\"></a>
    </div><div>
    <a class=\"cursor-pointer\" href=\"#\"><img src=\"https://auto-help-spb.ru/images/section-messangers/viber.png\" alt=\"\"></a>
    </div>
</div>
<!-- Fixed contact logos -->
<!-- main page -->
<div>
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
        <h2 class=\"text-center font-semibold text-3xl lg:text-4xl text-gray-800\">
            Заказать звонок
        </h2>
        ";
        // line 65
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("formSubscribe"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 66
        echo "    </div>
</div>
</div>
    <div>
        <div class=\"flex text-white items-center justify-evenly\">
            <div class=\"cursor-pointer w-1/2 md:w-48 \"><a href=\"./index.html\"><img src=\"data:image/png;base64,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\" alt=\"\"></div>
            </a>
                <div class='hidden lg:flex w-96'>
                <i class=\"fas fa-map-marker-alt pr-2\"></i>
                <p>Работаем по Москву</p>
            </div>
            <div class='flex hidden lg:flex w-96'>
                <i class=\"fas fa-clock pr-2\"></i>
                <p>Работаем 24 часа</p>
            </div>
            <div class='flex w-96'>
                <i class=\"fas fa-phone-alt pr-2\"></i>
                <div class=\"flex-col text-xs md:text-base\">
                <a class=\"hover:text-blue-500\" href=\"tel:+79067031111\">+7 (906)703-11-11</a>
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
                                <a href=\"";
        // line 98
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("service1");
        echo "\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/avtohelp.png\" alt=\"\" class=\"w-10\">
                                    </i>Автомобильная помощь</a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                    <a href=\"";
        // line 104
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("service1");
        echo "\" class=\" flex items-center text-black hover:text-orange-500\">
                                     <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/autopsy-car.png\" alt alt=\"\" class=\"w-10\">
                                    </i>Вскрытие авто</a>
                            </li>
                             <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"";
        // line 110
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("service2");
        echo "\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/opening-hood.png\" alt alt=\"\" class=\"w-10\">
                                    </i>Вскрытие капота</a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"";
        // line 116
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("service3");
        echo "\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/opening-trunk.png\" alt alt=\"\" class=\"w-10\">
                                    </i>Вскрытие багажника</a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                    <a href=\"";
        // line 122
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("service4");
        echo "\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/menu-1.svg\" alt=\"\" class=\"w-10\">
                                    </i>Прикурить аккумулятор</a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"";
        // line 128
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("service5");
        echo "\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/menu-11.svg \" alt alt=\"\" class=\"w-10\">
                                    </i>Замена АКБ</a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5 avto\">
                                <a href=\"";
        // line 134
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("service6");
        echo "\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/menu-4.svg \" alt=\"\" class=\"w-10\">
                                    </i>Автоэлектрик с <br> выездом</a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"";
        // line 140
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("service7");
        echo "\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/car-mechanic-with-departure.png \" alt=\"\" class=\"w-10\">
                                    </i>Автомеханик с выездом</a>
                            </li>
                            <!-- <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"#\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/menu-5.svg\" alt=\"\" class=\"w-10\">
                                    </i>Вытащить машину</a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5 mr-15\">
                                <a href=\"#\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\" https://auto-help-spb.ru/images/menu-10.svg\" alt alt=\"\" class=\"w-10\">
                                    </i>Ремонт, замена и <br> подкачка колёс</a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"#\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/vehicle-diagnostics.png\"  alt=\"\" class=\"w-10\">
                                     </i>Диагностика <br> автомобиля</a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"#\" class=\" flex items-center text-black hover:text-orange-500\">
                                        <i class=\"mr-2\">
                                            <img src=\"https://auto-help-spb.ru/images/alarm-repair-and-deactivation.png \" alt=\"\" class=\"w-10\">
                                        </i>Ремонт и отключение <br> сигнализации</a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"#\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/menu-2.svg\" alt=\"\" class=\"w-10\">
                                    </i>Подвоз топлива
                                </a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"#\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/engine-start.png\" alt=\"\" class=\"w-10\">
                                    </i>Запуск двигателя
                                </a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"#\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/menu-7.svg \" alt=\"\" class=\"w-10\">
                                    </i>Буксировка автомобиля
                                </a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"#\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/menu-8.svg\" alt=\"\" class=\"w-10\">
                                    </i>Разблокировка АКПП
                                </a>
                            </li> -->
                         </ul>
                    </div>
           
                    </li>
                            </li> 
                <li class=\"hidden lg:flex hover:text-orange-600 w-1/6 ml-10\"><a href=\"";
        // line 202
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("prices");
        echo "\"> ЦЕНЫ </a></li>
                <li class=\"hidden lg:flex hover:text-orange-600 w-1/6\"><a href=\"";
        // line 203
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("reviews");
        echo "\"> ОТЗЫВЫ </a></li>
                <li class=\"hidden lg:flex hover:text-orange-600 w-1/6\"><a href=\"";
        // line 204
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\"> КОНТАКТЫ </a></li>
                <li onclick=\"orderCallBtn()\" class=\"border-2 text-center border-white w-6/12 sm:w-1/3 lg:w-1/6 py-3 hover:bg-blue-700 hover:border-blue-700
                transition duration-500\">Заказать звонок</li>      
            </ul>  
        </div>
</header>
<div class=\"header font-bold lg:text-5xl md:text-3xl text-xl mt-16 mx-6 md:mx-24\">
<h1 class=\"text-white\">АВТОМОБИЛЬНАЯ ПОМОЩЬ НА ДОРОГЕ В МОСКВЕ</h1>
<h1 class=\"text-white\"> ОТ <span class=\"text-orange-600\"> 500 РУБЛЕЙ </span></h1>
</div>
<ul class=\"text-sm md:text-lg lg:xl flex-col items-center justify-evenly text-white mt-10 mx-6 md:mx-24\">
    <li><i class=\"fas fa-angle-double-right pr-4 text-orange-600 mt-4\"></i>Возникла непредвиденная ситуация с авто?</li>
    <li><i class=\"fas fa-angle-double-right pr-4 text-orange-600 mt-4\"></i>Нужно срочно ехать?</li>
    <li><i class=\"fas fa-angle-double-right pr-4 text-orange-600 mt-4\"></i>Предлагаем любую автопомощь!</li>
    <li><i class=\"fas fa-angle-double-right pr-4 text-orange-600 mt-4\"></i>Приезжаем на место от 15 минут</li>
    <li><i class=\"fas fa-angle-double-right pr-4 text-orange-600 mt-4\"></i>Работаем без посредников</li>
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
<div class=\"w-4/5 m-auto flex justify-center text-center flex-wrap items-center\">
    ";
        // line 276
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home/aboutus"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 277
        echo "</div>
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
    <p class=\"\">Как часто бывает, автомобиль ломается в самый неподходящий момент. Не каждый может починить машину самостоятельно, качественно и быстро. Не всегда под рукой окажутся инструменты или запчасти, требуемые для устранения неполадок. Специалисты компании «Автопомощь» в Спб могут исправить большинство поломок на месте.</p>
    <br>
    <p class=\"\">Мы оказываем широкий спектр ремонтных услуг круглосуточно, имеет фиксированные цены, опытных и быстро реагирующих мастеров. Стоимость работы ниже рыночных на 10-20 %. Современные способы связи, с помощью которых можно четко определить объем работы, сокращают время ожидания. В отдельных случаях применяется эвакуация машины до места назначения.</p>
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
        ";
        // line 369
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("prices/price1"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 370
        echo "    </div>
    
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
        // line 394
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home/work"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 395
        echo "</div>
</div>
</div>
<div class=\" bg-gray-100 py-12\">
<div class=\"flex-col flex-wrap mx-4 md:mx-16 lg:mx-24\">
    <h1 class=\"title text-center font-extrabold text-xl md:text-2xl lg:text-4xl py-6\">
        Профессиональная автопомощь на дороге
    </h1>
    <div class=\"flex-row flex-wrap \">
        <div class=\"flex-col font-thin px-2  w-full\">
        <p> 
            Поломка транспортного средства влечет серьезные последствия и
            для устранения не стоит пренебрегать помощью автомастера.
        </p><br>
        <p>
            В работе должны быть четко выполнены мельчайшие детали, чтобы исключить повторные 
            случаи. Ведь не всегда
            пользователь может сразу определить возникшую проблему.
        </p> <br>
        </div>
        <div class=\"flex-col font-thin px-2  w-full\">
        <p>
            Небольшие поломки часто скрывают серьезные нарушения в работе автомобиля, 
            которые определит только профессионал.
            Не стоит рисковать, вызов мастера – наилучшее решение для автолюбителя.
        </p><br>
        <p>
            Звоните нам прямо сейчас +7 (906)703-11-11. Мастера во всех районах!
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
            ";
        // line 434
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home/service"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 435
        echo "        </div>
    
  
   
</div>
</div>
</div>
<div class=\"flex items-center justify-center\">
<img src=\"https://auto-help-spb.ru/images/form-bg.jpg\" class=\"absolute w-full\" alt=\"\">
<div style=\"z-index: 3;\" class=\"bg-white  lg:my-10  lg:w-11/12 text-center py-8\">
    <h1 class=\"mt-6 mb-4 font-extrabold text-2xl\">Оставьте заявку</h1>
    <p class=\"pb-4\">Можем предложить специальные условия именно для вас!</p>
    <form action=\"\" class=\"flex lg:full  flex-wrap justify-evenly items-center\">
        <input class=\"bg-gray-300 p-2 pr-16 ml-4 outline-none m-4 lg:w-1/4\" type=\"text\" placeholder=\"Ваше имя\">
        <input class=\"bg-gray-300 p-2 pr-16 ml-4 outline-none m-4 lg:w-1/4\" type=\"tel\" placeholder=\"Ваш телефон*\">
        <div class=\"flex flex-wrap items-center justify-center lg:w-1/4\">
        <input class=\"w-9/12 sm:w-full bg-blue-700 text-white hover:bg-blue-900 p-2 lg:mt-5 px-6 outline-none\" type=\"submit\" value=\"Узнать стоимость\">
        <input class=\"hidden\" type=\"file\" id=\"file\">
        <label class=\"w-9/12 sm:w-full cursor-pointer mt-4 lg:mt-0\" for=\"file\"><i class=\"fas fa-paperclip mr-2\"></i>Прикрепить фото</label>
        </div>
    </form>
</div>
</div>
<!-- Служба техпомощи компании section start -->
<div class=\" bg-gray-100\">
<div class=\"flex-col mx-4 md:mx-8 lg:mx-12 py-8 flex-wrap\">
    <h1 class=\"text-center font-extrabold text-lg sm:text-2xl lg:text-4xl py-12\">
        Служба техпомощи компании
    </h1>
    <div class=\"flex mx-4 flex-wrap justify-center\">
        <div class=\"flex-col font-thin text-sm md:text-lg\">
        <p> 
            Специалисты компании имеют многолетний опыт в техническом обслуживании автомобилей различных марок и моделей.
             Они качественно выполняют следующие работы:
        </p><br>
        <ul class=\"pl-4\">
            <li class=\"list-disc\"> Вскрытие багажника, капота или автомобиля;</li>
            <li class=\"list-disc\">Запуск или замену аккумулятора;</li>
            <li class=\"list-disc\">Устраняют поломки электроники или механические повреждения;</li>
            <li class=\"list-disc\">Устраняют поломки электроники или механические повреждения;</li>
            <li class=\"list-disc\">Услуги шиномонтажа (замена, ремонт или подкачка колес);</li>
            <li class=\"list-disc\">Налаживание работы сигнализации, противоугонных систем;</li>
            <li class=\"list-disc\">Запуск двигателя;</li>
            <li class=\"list-disc\">Определение поломки на месте с последующим ее устранением;</li>
            <li class=\"list-disc\">Проблемы с АКПП.</li>
        </ul>
        <br>
        <p>В компанию можно обратиться, если закончилось топливо или требуется вытащить автомобиль из ямы или кювета,
             требуется транспортировка транспортного средства, при невозможности техпомощи на дороге.</p>
             <h1 class=\"text-center font-extrabold text-lg sm:text-2xl lg:text-4xl py-12\">
                Способы связи
            </h1>
            <p>Чтобы получить быструю помощь на дорогах Спб и области, нужно связаться с диспетчером по телефонам 
                (позвонить или запросить обратный звонок),
                 обратиться в мессенджер или оставить заявку на </p>
        </div>
        <div class=\"flex-col font-thin\">
        <p>
            сайте. Для скорого решения проблемы и определения стоимости работ следует приложить фото поломки.
        </p><br>
        <p>
            Для клиентов доступны WhatsApp, Viber, Telegram, VK. Автомастер озвучит фиксированную цену работы,
             при спорных вопросах стоимость определяется на месте мастером.
        </p><br>
        <p>В компании всегда найдется выгодное предложение для клиентов, ни одно обращение не останется без внимания.</p>
        <h1 class=\"text-center font-extrabold text-lg sm:text-2xl lg:text-4xl py-12\">
            Время важно!
        </h1>
        <p>Непредсказуемые проблемы в работе автомобиля заставляют изменить планы. 
            Чтобы исключить возможные неудобства, диспетчер подбирает и отправляет на вызов мастера, ближайшего к месту поломки.
             Грамотные и отлаженные действия сотрудников в кратчайшие сроки устранят поломку.</p><br>
             <p>В компании работают мастера со стажем более 15 лет, знающие и легко разбирающиеся в современных, классических или эксклюзивных моделях автомобилей любых марок. 
                 Они качественно и быстро окажут техпомощь на дорогах Спб.</p>
                 <br>
                 <p>Перечень предложенных услуг выполняют непосредственно сотрудники, что значительно сокращает время ожидания результата.</p>
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
<div class=\"flex-col bg-gray-300\">
<h1 class=\"text-center font-extrabold text-4xl  py-12\">Связаться с нами</h1>
<div class=\"flex justify-evenly items-center flex-wrap mx-4 md:mx-12 lg:mx-24 py-12\">
    <div class=\"mapouter flex justify-center items-center\"><div style=\"width: 90vw;\" class=\"gmap_canvas\"><iframe width=\"500\" height=\"500\" id=\"gmap_canvas\" src=\"https://maps.google.com/maps?q=moscow&t=&z=13&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe><a href=\"https://putlocker-is.org\"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:500px;}</style><a href=\"https://www.embedgooglemap.net\">adding google maps to website</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:500px;}</style></div></div>
    <div class=\"w-96 lg:w-1/2 flex-col bg-white justify-between items-center text-center py-10 my-10\">
        <h1 class=\"font-extrabold text-2xl\">Оставьте заявку</h1>
        <p>Можем предложить специальные условия именно для вас!</p>
        <form action=\"\" class=\"flex-col\">
            <input class=\"bg-gray-300 w-96 md:w-1/2 mt-4 p-2\" type=\"text\" placeholder=\"Ваше имя\" required />
            <input class=\"bg-gray-300 w-96 md:w-1/2 mt-4 p-2\" type=\"tel\" placeholder=\"Ваш телефон*\" required />
            <textarea class=\"bg-gray-300 w-96 md:w-1/2 mt-4 p-2\" cols=\"30\" rows=\"10\" placeholder=\"Комментарий\"></textarea>
            <div class=\"flex text-center justify-center items-center cursor-pointer\">
            <input class=\"hidden\" type=\"file\" id=\"upload\">
            <label class=\"cursor-pointer\" for=\"upload\"><i class=\"fas fa-paperclip mr-2 cursor-pointer\"></i>Прикрепить фото</label>
            </div>
            <input class=\"cursor-pointer w-96 md:w-1/2 bg-blue-700 text-white mt-2 hover:bg-blue-900 p-2 lg:mt-5 px-6 outline-none\" type=\"submit\" value=\"Узнать стоимость\">  
            </div>
        </form>
    </div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "E:\\openserver\\domains\\auto/themes/auto/pages/service1.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  554 => 435,  550 => 434,  509 => 395,  505 => 394,  479 => 370,  475 => 369,  381 => 277,  377 => 276,  302 => 204,  298 => 203,  294 => 202,  229 => 140,  220 => 134,  211 => 128,  202 => 122,  193 => 116,  184 => 110,  175 => 104,  166 => 98,  132 => 66,  128 => 65,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div style=\"height: 150vh;\" class=\"navContainer md:w-1/2 w-full flex-col flex-wrap h-screen justify-center items-center bg-black text-white w-25 p-3 z-10 absolute left-0 top-0 hidden \">
    <div  class=\"text-5xl absolute top-0 right-0 mr-6 cursor-pointer\"><span onclick=\"closeNav()\"> x </span></div>
    <ul class=\"text-white mt-6 inline-block items-center cursor-pointer  text-2xl\">
      <span class=\"border-b-2  hover:border-orange-500\">  Услуги </span> <span onclick=\"openSubMenu()\" class=\"plus text-4xl ml-4 hover:text-blue-500\">+</span>
        <span onclick=\"closeSubMenu()\" class=\"minus hidden text-4xl ml-4 hover:text-blue-500\">-</span>
        <div class=\"navMenu hidden pl-8\">
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Автомобильная помощь</li></a>
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Вскрытие авто</li></a>
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Вскрытие багажника</li></a>
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Прикурить аккумулятор</li></a>
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Замена АКБ</li></a>
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Автоэлектрик с выездом</li></a>
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Автомеханик с выездом</li></a>
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Вытащить машину</li></a>
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Ремонт, замена и подкачка колёс</li></a>
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Диагностика автомобиля</li></a>
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Ремонт и отключение сигнализации</li></a>
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Подвоз топлива</li></a>
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Запуск двигателя</li></a>
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Буксировка автомобиля</li></a>
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Разблокировка АКПП</li></a>
        <a class=\"text-lg text-gray-200 hover:text-orange-500\" href=\"#\"><li>Вскрытие багажника</li></a>
    </div>
    </ul>
    <a href=\"./price.html\">
        <ul class=\"mt-6 text-2xl hover:text-orange-500\">Цена</ul>
    </a>
    <a href=\"./review.html\">
        <ul class=\"mt-6 text-2xl hover:text-orange-500\">Отзывы</ul>
    </a>
    <a href=\"./contact.html\">
        <ul class=\"mt-6 text-2xl hover:text-orange-500\">Контакты</ul>
    </a>
</div>
<!-- Fixed contact logos -->
<div class=\" w-32 z-40 fixed flex justify-between bottom-0 left-0 \" style=\" margin-left: 20px; margin-bottom: 20px;\">
    <div>
    <a class=\"cursor-pointer\" href=\"#\"><img src=\"https://auto-help-spb.ru/images/section-messangers/whatsapp.png\" alt=\"\"></a>
    </div>
    <div>
    <a class=\"cursor-pointer\" href=\"#\"><img src=\"https://auto-help-spb.ru/images/section-messangers/telegram.png\" alt=\"\"></a>
    </div><div>
    <a class=\"cursor-pointer\" href=\"#\"><img src=\"https://auto-help-spb.ru/images/section-messangers/viber.png\" alt=\"\"></a>
    </div>
</div>
<!-- Fixed contact logos -->
<!-- main page -->
<div>
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
        <h2 class=\"text-center font-semibold text-3xl lg:text-4xl text-gray-800\">
            Заказать звонок
        </h2>
        {% component 'formSubscribe' %}
    </div>
</div>
</div>
    <div>
        <div class=\"flex text-white items-center justify-evenly\">
            <div class=\"cursor-pointer w-1/2 md:w-48 \"><a href=\"./index.html\"><img src=\"data:image/png;base64,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\" alt=\"\"></div>
            </a>
                <div class='hidden lg:flex w-96'>
                <i class=\"fas fa-map-marker-alt pr-2\"></i>
                <p>Работаем по Москву</p>
            </div>
            <div class='flex hidden lg:flex w-96'>
                <i class=\"fas fa-clock pr-2\"></i>
                <p>Работаем 24 часа</p>
            </div>
            <div class='flex w-96'>
                <i class=\"fas fa-phone-alt pr-2\"></i>
                <div class=\"flex-col text-xs md:text-base\">
                <a class=\"hover:text-blue-500\" href=\"tel:+79067031111\">+7 (906)703-11-11</a>
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
                                <a href=\"{{ 'service1'|page }}\" class=\" flex items-center text-black hover:text-orange-500\">
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
                            <!-- <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"#\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/menu-5.svg\" alt=\"\" class=\"w-10\">
                                    </i>Вытащить машину</a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5 mr-15\">
                                <a href=\"#\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\" https://auto-help-spb.ru/images/menu-10.svg\" alt alt=\"\" class=\"w-10\">
                                    </i>Ремонт, замена и <br> подкачка колёс</a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"#\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/vehicle-diagnostics.png\"  alt=\"\" class=\"w-10\">
                                     </i>Диагностика <br> автомобиля</a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"#\" class=\" flex items-center text-black hover:text-orange-500\">
                                        <i class=\"mr-2\">
                                            <img src=\"https://auto-help-spb.ru/images/alarm-repair-and-deactivation.png \" alt=\"\" class=\"w-10\">
                                        </i>Ремонт и отключение <br> сигнализации</a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"#\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/menu-2.svg\" alt=\"\" class=\"w-10\">
                                    </i>Подвоз топлива
                                </a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"#\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/engine-start.png\" alt=\"\" class=\"w-10\">
                                    </i>Запуск двигателя
                                </a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"#\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/menu-7.svg \" alt=\"\" class=\"w-10\">
                                    </i>Буксировка автомобиля
                                </a>
                            </li>
                            <li class=\" relative flex m-2 w-1/5\">
                                <a href=\"#\" class=\" flex items-center text-black hover:text-orange-500\">
                                    <i class=\"mr-2\">
                                        <img src=\"https://auto-help-spb.ru/images/menu-8.svg\" alt=\"\" class=\"w-10\">
                                    </i>Разблокировка АКПП
                                </a>
                            </li> -->
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
<h1 class=\"text-white\">АВТОМОБИЛЬНАЯ ПОМОЩЬ НА ДОРОГЕ В МОСКВЕ</h1>
<h1 class=\"text-white\"> ОТ <span class=\"text-orange-600\"> 500 РУБЛЕЙ </span></h1>
</div>
<ul class=\"text-sm md:text-lg lg:xl flex-col items-center justify-evenly text-white mt-10 mx-6 md:mx-24\">
    <li><i class=\"fas fa-angle-double-right pr-4 text-orange-600 mt-4\"></i>Возникла непредвиденная ситуация с авто?</li>
    <li><i class=\"fas fa-angle-double-right pr-4 text-orange-600 mt-4\"></i>Нужно срочно ехать?</li>
    <li><i class=\"fas fa-angle-double-right pr-4 text-orange-600 mt-4\"></i>Предлагаем любую автопомощь!</li>
    <li><i class=\"fas fa-angle-double-right pr-4 text-orange-600 mt-4\"></i>Приезжаем на место от 15 минут</li>
    <li><i class=\"fas fa-angle-double-right pr-4 text-orange-600 mt-4\"></i>Работаем без посредников</li>
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
<div class=\"w-4/5 m-auto flex justify-center text-center flex-wrap items-center\">
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
    <p class=\"\">Как часто бывает, автомобиль ломается в самый неподходящий момент. Не каждый может починить машину самостоятельно, качественно и быстро. Не всегда под рукой окажутся инструменты или запчасти, требуемые для устранения неполадок. Специалисты компании «Автопомощь» в Спб могут исправить большинство поломок на месте.</p>
    <br>
    <p class=\"\">Мы оказываем широкий спектр ремонтных услуг круглосуточно, имеет фиксированные цены, опытных и быстро реагирующих мастеров. Стоимость работы ниже рыночных на 10-20 %. Современные способы связи, с помощью которых можно четко определить объем работы, сокращают время ожидания. В отдельных случаях применяется эвакуация машины до места назначения.</p>
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
        {% partial 'prices/price1' %}
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
        Профессиональная автопомощь на дороге
    </h1>
    <div class=\"flex-row flex-wrap \">
        <div class=\"flex-col font-thin px-2  w-full\">
        <p> 
            Поломка транспортного средства влечет серьезные последствия и
            для устранения не стоит пренебрегать помощью автомастера.
        </p><br>
        <p>
            В работе должны быть четко выполнены мельчайшие детали, чтобы исключить повторные 
            случаи. Ведь не всегда
            пользователь может сразу определить возникшую проблему.
        </p> <br>
        </div>
        <div class=\"flex-col font-thin px-2  w-full\">
        <p>
            Небольшие поломки часто скрывают серьезные нарушения в работе автомобиля, 
            которые определит только профессионал.
            Не стоит рисковать, вызов мастера – наилучшее решение для автолюбителя.
        </p><br>
        <p>
            Звоните нам прямо сейчас +7 (906)703-11-11. Мастера во всех районах!
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
<div class=\"flex items-center justify-center\">
<img src=\"https://auto-help-spb.ru/images/form-bg.jpg\" class=\"absolute w-full\" alt=\"\">
<div style=\"z-index: 3;\" class=\"bg-white  lg:my-10  lg:w-11/12 text-center py-8\">
    <h1 class=\"mt-6 mb-4 font-extrabold text-2xl\">Оставьте заявку</h1>
    <p class=\"pb-4\">Можем предложить специальные условия именно для вас!</p>
    <form action=\"\" class=\"flex lg:full  flex-wrap justify-evenly items-center\">
        <input class=\"bg-gray-300 p-2 pr-16 ml-4 outline-none m-4 lg:w-1/4\" type=\"text\" placeholder=\"Ваше имя\">
        <input class=\"bg-gray-300 p-2 pr-16 ml-4 outline-none m-4 lg:w-1/4\" type=\"tel\" placeholder=\"Ваш телефон*\">
        <div class=\"flex flex-wrap items-center justify-center lg:w-1/4\">
        <input class=\"w-9/12 sm:w-full bg-blue-700 text-white hover:bg-blue-900 p-2 lg:mt-5 px-6 outline-none\" type=\"submit\" value=\"Узнать стоимость\">
        <input class=\"hidden\" type=\"file\" id=\"file\">
        <label class=\"w-9/12 sm:w-full cursor-pointer mt-4 lg:mt-0\" for=\"file\"><i class=\"fas fa-paperclip mr-2\"></i>Прикрепить фото</label>
        </div>
    </form>
</div>
</div>
<!-- Служба техпомощи компании section start -->
<div class=\" bg-gray-100\">
<div class=\"flex-col mx-4 md:mx-8 lg:mx-12 py-8 flex-wrap\">
    <h1 class=\"text-center font-extrabold text-lg sm:text-2xl lg:text-4xl py-12\">
        Служба техпомощи компании
    </h1>
    <div class=\"flex mx-4 flex-wrap justify-center\">
        <div class=\"flex-col font-thin text-sm md:text-lg\">
        <p> 
            Специалисты компании имеют многолетний опыт в техническом обслуживании автомобилей различных марок и моделей.
             Они качественно выполняют следующие работы:
        </p><br>
        <ul class=\"pl-4\">
            <li class=\"list-disc\"> Вскрытие багажника, капота или автомобиля;</li>
            <li class=\"list-disc\">Запуск или замену аккумулятора;</li>
            <li class=\"list-disc\">Устраняют поломки электроники или механические повреждения;</li>
            <li class=\"list-disc\">Устраняют поломки электроники или механические повреждения;</li>
            <li class=\"list-disc\">Услуги шиномонтажа (замена, ремонт или подкачка колес);</li>
            <li class=\"list-disc\">Налаживание работы сигнализации, противоугонных систем;</li>
            <li class=\"list-disc\">Запуск двигателя;</li>
            <li class=\"list-disc\">Определение поломки на месте с последующим ее устранением;</li>
            <li class=\"list-disc\">Проблемы с АКПП.</li>
        </ul>
        <br>
        <p>В компанию можно обратиться, если закончилось топливо или требуется вытащить автомобиль из ямы или кювета,
             требуется транспортировка транспортного средства, при невозможности техпомощи на дороге.</p>
             <h1 class=\"text-center font-extrabold text-lg sm:text-2xl lg:text-4xl py-12\">
                Способы связи
            </h1>
            <p>Чтобы получить быструю помощь на дорогах Спб и области, нужно связаться с диспетчером по телефонам 
                (позвонить или запросить обратный звонок),
                 обратиться в мессенджер или оставить заявку на </p>
        </div>
        <div class=\"flex-col font-thin\">
        <p>
            сайте. Для скорого решения проблемы и определения стоимости работ следует приложить фото поломки.
        </p><br>
        <p>
            Для клиентов доступны WhatsApp, Viber, Telegram, VK. Автомастер озвучит фиксированную цену работы,
             при спорных вопросах стоимость определяется на месте мастером.
        </p><br>
        <p>В компании всегда найдется выгодное предложение для клиентов, ни одно обращение не останется без внимания.</p>
        <h1 class=\"text-center font-extrabold text-lg sm:text-2xl lg:text-4xl py-12\">
            Время важно!
        </h1>
        <p>Непредсказуемые проблемы в работе автомобиля заставляют изменить планы. 
            Чтобы исключить возможные неудобства, диспетчер подбирает и отправляет на вызов мастера, ближайшего к месту поломки.
             Грамотные и отлаженные действия сотрудников в кратчайшие сроки устранят поломку.</p><br>
             <p>В компании работают мастера со стажем более 15 лет, знающие и легко разбирающиеся в современных, классических или эксклюзивных моделях автомобилей любых марок. 
                 Они качественно и быстро окажут техпомощь на дорогах Спб.</p>
                 <br>
                 <p>Перечень предложенных услуг выполняют непосредственно сотрудники, что значительно сокращает время ожидания результата.</p>
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
<div class=\"flex-col bg-gray-300\">
<h1 class=\"text-center font-extrabold text-4xl  py-12\">Связаться с нами</h1>
<div class=\"flex justify-evenly items-center flex-wrap mx-4 md:mx-12 lg:mx-24 py-12\">
    <div class=\"mapouter flex justify-center items-center\"><div style=\"width: 90vw;\" class=\"gmap_canvas\"><iframe width=\"500\" height=\"500\" id=\"gmap_canvas\" src=\"https://maps.google.com/maps?q=moscow&t=&z=13&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe><a href=\"https://putlocker-is.org\"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:500px;}</style><a href=\"https://www.embedgooglemap.net\">adding google maps to website</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:500px;}</style></div></div>
    <div class=\"w-96 lg:w-1/2 flex-col bg-white justify-between items-center text-center py-10 my-10\">
        <h1 class=\"font-extrabold text-2xl\">Оставьте заявку</h1>
        <p>Можем предложить специальные условия именно для вас!</p>
        <form action=\"\" class=\"flex-col\">
            <input class=\"bg-gray-300 w-96 md:w-1/2 mt-4 p-2\" type=\"text\" placeholder=\"Ваше имя\" required />
            <input class=\"bg-gray-300 w-96 md:w-1/2 mt-4 p-2\" type=\"tel\" placeholder=\"Ваш телефон*\" required />
            <textarea class=\"bg-gray-300 w-96 md:w-1/2 mt-4 p-2\" cols=\"30\" rows=\"10\" placeholder=\"Комментарий\"></textarea>
            <div class=\"flex text-center justify-center items-center cursor-pointer\">
            <input class=\"hidden\" type=\"file\" id=\"upload\">
            <label class=\"cursor-pointer\" for=\"upload\"><i class=\"fas fa-paperclip mr-2 cursor-pointer\"></i>Прикрепить фото</label>
            </div>
            <input class=\"cursor-pointer w-96 md:w-1/2 bg-blue-700 text-white mt-2 hover:bg-blue-900 p-2 lg:mt-5 px-6 outline-none\" type=\"submit\" value=\"Узнать стоимость\">  
            </div>
        </form>
    </div>
</div>
</div>", "E:\\openserver\\domains\\auto/themes/auto/pages/service1.htm", "");
    }
}
