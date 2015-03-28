<?php get_header(); ?>
    <div class="content">
        <!-- <h2 class="welcome-message"><?php the_title( ); ?></h2> -->

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h2 class="welcome-message"><?php the_title( ); ?></h2>
        <?php the_excerpt(); ?>
        <a class="article_link" href="<?php the_permalink(); ?>">Читать далее</a>
        <?php endwhile; ?>
        <!-- post navigation -->
        <?php else: ?>
        <!-- no posts found -->
        <?php endif; ?>


        <ul class="article">
            <li>
                <p>
                    Интересные статьи - это хорошо, но практика - лучше. Здесь вы найдёте всё для подготовки и
                    организации вашей свадьбы в Черкассах: адреса фирм, фото галереи, статьи и многое другое. Мы будем
                    очень рады, если наш сайт облегчит вам эту задачу!
                </p>
                <a href="#">Читать далее</a>
            </li>
            <li>
                <p>
                    Интересные статьи - это хорошо, но практика - лучше. Здесь вы найдёте всё для подготовки и
                    организации вашей свадьбы в Черкассах: адреса фирм, фото галереи, статьи и многое другое. Мы будем
                    очень рады, если наш сайт облегчит вам эту задачу!

                </p>
                <a href="#">Читать далее</a>
            </li>
            <li>
                <p>
                    Интересные статьи - это хорошо, но практика - лучше. Здесь вы найдёте всё для подготовки и
                    организации вашей свадьбы в Черкассах: адреса фирм, фото галереи, статьи и многое другое. Мы будем
                    очень рады, если наш сайт облегчит вам эту задачу!
                </p>
                <a href="#">Читать далее</a>
            </li>
        </ul>
        <h2 class="popular-section">Добро пожаловать на сайт Nasha-Svadba.ck.ua!</h2>

        <div class="images-wrapper">
            <ul class="images">
                <li>
                    <figure>
                        <img src="<?php bloginfo("template_url" ); ?>/img/dresses.gif" width="136" height="136" alt="Платья">
                        <figcaption>
                            <a href="#">
                                <h3>Платья</h3>
                            </a>
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src="<?php bloginfo("template_url" ); ?>/img/rings.gif" width="136" height="136" alt="Кольца">
                        <figcaption>
                            <a href="#">
                                <h3>Кольца</h3>
                            </a>
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src="<?php bloginfo("template_url" ); ?>/img/banqueting-hall.gif" width="136" height="136" alt="Банкетный зал">
                        <figcaption>
                            <a href="#">
                                <h3>Банкетный зал</h3>
                            </a>
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src="<?php bloginfo("template_url" ); ?>/img/hairstyles.gif" width="136" height="136" alt="Прически">
                        <figcaption>
                            <a href="#">
                                <h3>Прически</h3>
                            </a>
                        </figcaption>
                    </figure>
                </li>
            </ul>
        </div>
        <div class="content-wrapper">
            <div class="last-news">
                <h2>Последние новости</h2>
                <ul>
                    <li>Пушкин умер</li>
                    <li>Составляем бюджет</li>
                    <li>Обручальные кольца</li>
                    <li>Гравировка на кольцах</li>
                    <li>Новые родственники</li>
                    <li>Виктор Цой Жив</li>
                    <li>Определен новый хромосом</li>
                </ul>
                <a href="#">Читать далее</a>
            </div>
            <div class="popular-article">
                <h2>Популярные статьи</h2>
                <ul>
                    <li>Текст пригласительных</li>
                    <li>Составляем бюджет</li>
                    <li>Обручальные кольца</li>
                    <li>Гравировка на кольцах</li>
                    <li>Новые родственники</li>
                    <li>В калифорнии запретят разводы</li>
                    <li>Почему все вверх головой</li>
                </ul>
                <a href="#">Читать далее</a>
            </div>
        </div>
    </div>
  <?php  get_footer(); ?>