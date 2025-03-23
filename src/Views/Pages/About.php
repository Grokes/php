<?php
require_once ROOT . "/src/Abstracts/BasePage.php";
class About extends BasePage
{
    public function RenderContent()
    {
        echo <<<HTML
            <section id="about" style="color: #d3d3d3;">
            <h1>О нас</h1>
            <p>Добро пожаловать!</p>
            <p>
                Я — опытный PHP-разработчик, специализирующийся на создании качественных, безопасных и масштабируемых
                веб-приложений.
                Уже несколько лет я помогаю бизнесам и частным клиентам превращать их идеи в работающие цифровые решения.
            </p>
            <p>
                Моя цель — сделать сложные задачи простыми. От разработки удобных пользовательских интерфейсов до
                проектирования надёжной серверной части —
                я внимательно отношусь к каждой детали.
            </p>

            <h2>Чем я занимаюсь:</h2>
            <ul>
                <li>Разработка веб-сайтов и приложений на PHP с использованием современных фреймворков, таких как Laravel и
                    Symfony.</li>
                <li>Интеграция API и разработка собственных RESTful-решений.</li>
                <li>Оптимизация производительности и безопасности веб-проектов.</li>
                <li>Поддержка и доработка существующих проектов.</li>
            </ul>

            <h2>Почему выбирают меня:</h2>
            <ul>
                <li>Индивидуальный подход к каждому проекту.</li>
                <li>Соблюдение сроков и качественная документация.</li>
                <li>Умение работать с популярными технологиями: MySQL, PostgreSQL, JavaScript, HTML/CSS и другими.</li>
            </ul>

            <p>
                Если вам нужен надёжный разработчик, который поможет вам реализовать идею в цифровом формате, — свяжитесь со
                мной!
                Вместе мы создадим что-то особенное.
            </p>
        </section>
        HTML;
    }
}
?>

<?php
$Page = new About;
$Page->RenderPage();
?>