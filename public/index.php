<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>СтройМосКомплекс - Главная</title>
    <meta name='description'
        content='Строительство, проектирование и дизайн под ключ в Москве и области. Профессиональные услуги промышленного альпинизма. Гарантия качества и соблюдение сроков.'>
    <link rel='stylesheet' href='../css/main.css'>
    <link rel='shortcut icon' href='../src/svg/favicon.svg' type='image/x-icon'>
</head>

<body>
    <?php require_once '../includes/components/header.php'; ?>
    <main>
        <div class='slider-wrapper container'>
            <button id='prev' class='slider__button'>
                <svg class='slider__arrow' width='26' height='41' viewBox='0 0 26 41' fill='none'
                    xmlns='http://www.w3.org/2000/svg'>
                    <path
                        d='M10.8678 21.9125C10.0866 21.1315 10.0866 19.865 10.8677 19.0839L24.5853 5.36631C25.3665 4.58507 25.3663 3.31835 24.5848 2.53738L22.6874 0.641375C21.9064 -0.139158 20.6405 -0.138986 19.8596 0.641763L1.41443 19.0841C0.63328 19.8651 0.633232 21.1315 1.41432 21.9126L19.8586 40.3569C20.6399 41.1381 21.9066 41.1379 22.6875 40.3564L24.5866 38.4559C25.3673 37.6748 25.367 36.4087 24.586 35.6279L10.8678 21.9125Z'
                        fill='#FDFDFD' />
                </svg>
            </button>
            <div class='slider' id='slider'>
                <div class='slide'>
                    <p>Услуги промышленного альпинизма</p>
                    <img class='slider__image' src='../src/img/slider1.png' alt='Изображение слайдера' />
                    <?php $link = 'prom-alpinizm.php';
                    require '../includes/components/link_button.php'; ?>
                </div>
                <div class='slide'>
                    <p>Профессиональные строительные и отделочные работы</p>
                    <img class='slider__image' src='../src/img/slider2.png' alt='Изображение слайдера' />
                    <?php $link = 'katalog.php';
                    require '../includes/components/link_button.php'; ?>
                </div>
                <div class='slide'>
                    <p>Дизайн и проектирование</p>
                    <img class='slider__image' src='../src/img/slider3.png' alt='Изображение слайдера' />
                    <?php $link = 'dizayn.php';
                    require '../includes/components/link_button.php'; ?>
                </div>
            </div>
            <button id='next' class='slider__button'>
                <svg class='slider__arrow' width='26' height='41' viewBox='0 0 26 41' fill='none'
                    xmlns='http://www.w3.org/2000/svg'>
                    <path
                        d='M15.1322 21.9125C15.9134 21.1315 15.9134 19.865 15.1323 19.0839L1.41471 5.36631C0.633471 4.58507 0.633694 3.31835 1.41521 2.53738L3.31256 0.641375C4.09365 -0.139158 5.35951 -0.138986 6.14038 0.641763L24.5856 19.0841C25.3667 19.8651 25.3668 21.1315 24.5857 21.9126L6.14138 40.3569C5.36013 41.1381 4.09342 41.1379 3.31245 40.3564L1.41336 38.4559C0.632724 37.6748 0.633011 36.4087 1.414 35.6279L15.1322 21.9125Z'
                        fill='#FDFDFD' />
                </svg>
            </button>
            <div class='slider__dots'></div>
        </div>
    </main>
    <?php require_once '../includes/components/footer.php'; ?>
    <script src='main.js'></script>
</body>

</html>