<?php

/**
 * Template Name: Home page
 * Template Post Type: post, page
 */

get_header(); ?>
<!-- blood status -->
<div class="container container_white">
    <p class="container__name text_center">Потребность крови и ее компонентов</p>
    <div class="blood-status">
        <div class="blood-status__indicator">
            <div class="indicator__label">0-</div>
            <div class="indicator__scale">
                <div class="indicator__scale indicator__scale_progress" style="height: 80%;"></div>
            </div>
        </div>
        <div class="blood-status__indicator">
            <div class="indicator__label">0+</div>
            <div class="indicator__scale">
                <div class="indicator__scale indicator__scale_progress" style="height: 80%;"></div>
            </div>
        </div>
        <div class="blood-status__indicator">
            <div class="indicator__label">A-</div>
            <div class="indicator__scale">
                <div class="indicator__scale indicator__scale_progress" style="height: 80%;"></div>
            </div>
        </div>
        <div class="blood-status__indicator">
            <div class="indicator__label">A+</div>
            <div class="indicator__scale">
                <div class="indicator__scale indicator__scale_progress" style="height: 80%;"></div>
            </div>
        </div>
        <div class="blood-status__indicator">
            <div class="indicator__label">B-</div>
            <div class="indicator__scale">
                <div class="indicator__scale indicator__scale_progress" style="height: 80%;"></div>
            </div>
        </div>
        <div class="blood-status__indicator">
            <div class="indicator__label">B+</div>
            <div class="indicator__scale">
                <div class="indicator__scale indicator__scale_progress" style="height: 80%;"></div>
            </div>
        </div>
        <div class="blood-status__indicator">
            <div class="indicator__label">AB-</div>
            <div class="indicator__scale">
                <div class="indicator__scale indicator__scale_progress" style="height: 80%;"></div>
            </div>
        </div>
        <div class="blood-status__indicator">
            <div class="indicator__label">AB+</div>
            <div class="indicator__scale">
                <div class="indicator__scale indicator__scale_progress" style="height: 80%;"></div>
            </div>
        </div>
    </div>
    <p>* - зеленый - высокая потребность в донорах, желтый - небольшая потребность в донорах , красный - потребность в
        донорах отсутствует
    </p>
</div>
<!-- donor fast guide-->
<div class="container">
    <div class="general-information">
        <img width="50%" src="<?php echo get_template_directory_uri(); ?>/images/Wood.png" alt="wood with hands"/>
        <div class="general-information__text">
            <p class="general-information__title">Уважаемые доноры!!!</p>
            <p class="message">Предварительная запись на донацию крови проводится ежедневно при личном обращении,
                записаться можно:</p>
            <ul>
                <li>В регистратуре с 8:00 до 16:00 (ул. Кабяка 22)</li>
                <li>По телефону: 8(0232)53-98-32, 8(0232)53-98-14</li>
                <li>
                    Через электронную форму связи производится предварительная запись на
                    сдачу крови, только на БЕЗВОЗМЕЗДНОЙ ОСНОВЕ
                </li>
            </ul>
            <p class="message">Прием доноров на безвозмездную донацию крови:</p>
            <ul>
                <li>Осуществляется с 8:00 до 14:00 ежедневно весь 2022 год.</li>
                <li>При себе иметь паспорт и необходимые медицинские документы.</li>
            </ul>
            <p class="message">Необходимые справки:</p>
            <ul>
                <li>
                    Форма справки "О среднедневном заработке" (для выплат компенсаций).
                    Можно скачать тут
                </li>
                <li>Перечень других справок, доступны в разделе Донорам</li>
            </ul>
            <p>График работы кассы: с 8:00 до 16:00; обед с 12:00 до 12:30</p>
        </div>
    </div>
</div>
<!--youtube integration-->
<div class="container container_white">
    <div class="youtube-box">
        <iframe
                width="90%"
                height="90%"
                src="https://www.youtube.com/embed/DVsoJkwLH68"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowFullScreen
        ></iframe>
    </div>
</div>
<!--fast news container-->
<div class="container">
    <p class="container__name text_center">Последние новости</p>
    <div class="news-box">
        <?php
        $args_for_get_posts = array( 'numberposts' => 6);
        foreach (get_posts($args_for_get_posts) as $post){?>
        <div class="news-tile">
            <p class="news-tile__title"><?php echo the_title() ?></p>
            <p class="news-tile__description">
	            <?php echo the_excerpt() ?>
            </p>
            <a href="<?php echo the_permalink() ?>" class="news-tile__link">Перейти</a>
        </div>
        <?php } ?>
    </div>
</div>
<!--statistics for donors-->
<div class="container container_white">
    <div class="graph-box" id="costume-chart"></div>
    <div class="number-of-people">
        <div class="number-of-people__counter" id="counter-1">
            <div class="counter__information">
                <p class="counter__text">цельной крови</p>
                <p class="counter__value">+21</p>
            </div>
            <div class="counter__plank"></div>
            <div class="counter__information">
                <p class="counter__text">всего</p>
                <p class="counter__value">321</p>
            </div>
        </div>
        <div class="number-of-people__counter" id="counter-2">
            <div class="counter__information">
                <p class="counter__text">плазма крови</p>
                <p class="counter__value">+54</p>
            </div>
            <div class="counter__plank"></div>
            <div class="counter__information">
                <p class="counter__text">всего</p>
                <p class="counter__value">423</p>
            </div>
        </div>
        <div class="number-of-people__counter" id="counter-3">
            <div class="counter__information">
                <p class="counter__text">тромбоцитов</p>
                <p class="counter__value">+4</p>
            </div>
            <div class="counter__plank"></div>
            <div class="counter__information">
                <p class="counter__text">всего</p>
                <p class="counter__value">23</p>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/js/blood_status_change.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/lib/liteChart.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/config/config-graph.js"></script>

<?php get_footer(); ?>
