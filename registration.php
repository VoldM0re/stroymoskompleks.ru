<!DOCTYPE html>
<html lang='ru'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>СтройМосКомплекс - Регистрация</title>
    <meta name='description' content='Регистрация на сайте СтройМосКомплекс'>
    <meta name='robots' content='noindex, nofollow'>
    <link rel='stylesheet' href='/css/pages/registration.css'>
    <link rel='shortcut icon' href='/assets/svg/favicon.svg' type='image/x-icon'>
</head>

<body>
    <?php require_once 'includes/components/header.php'; ?>

    <main>
        <section class='sign-wrapper container'>
            <h2>Регистрация</h2>
            <form class='sign__form' action='includes/actions/register.inc.php' method='post'>
                <div class='sign__inputs'>
                    <div class='sign__inputs-textfields'>

                        <div class='sign__textfield-block'>
                            <div class="sign__textfield-text">
                                <svg class='sign__textfield-icon' viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7 7.64398C8.93375 7.64398 10.5 6.07773 10.5 4.14398C10.5 2.21023 8.93375 0.643982 7 0.643982C5.06625 0.643982 3.5 2.21023 3.5 4.14398C3.5 6.07773 5.06625 7.64398 7 7.64398ZM7 9.39398C4.66375 9.39398 0 10.5665 0 12.894V13.769C0 14.2502 0.39375 14.644 0.875 14.644H13.125C13.6062 14.644 14 14.2502 14 13.769V12.894C14 10.5665 9.33625 9.39398 7 9.39398Z"
                                        fill="currentColor" />
                                </svg>
                                <span>Ваше имя</span>
                            </div>
                            <input class='sign__textfield' type='text' name='name' placeholder='Иван' required>
                        </div>

                        <div class='sign__textfield-block'>
                            <div class="sign__textfield-text">
                                <svg class='sign__textfield-icon' viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7 7.64398C8.93375 7.64398 10.5 6.07773 10.5 4.14398C10.5 2.21023 8.93375 0.643982 7 0.643982C5.06625 0.643982 3.5 2.21023 3.5 4.14398C3.5 6.07773 5.06625 7.64398 7 7.64398ZM7 9.39398C4.66375 9.39398 0 10.5665 0 12.894V13.769C0 14.2502 0.39375 14.644 0.875 14.644H13.125C13.6062 14.644 14 14.2502 14 13.769V12.894C14 10.5665 9.33625 9.39398 7 9.39398Z"
                                        fill="currentColor" />
                                </svg>
                                <span>Ваша фамилия</span>
                            </div>
                            <input class='sign__textfield' type='text' name='last_name' placeholder='Иванов' required>
                        </div>

                        <div class='sign__textfield-block'>
                            <div class="sign__textfield-text">
                                <svg class='sign__textfield-icon' viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6.41385 0.446387C5.51597 0.446348 4.63011 0.652865 3.82481 1.04996C3.01951 1.44706 2.31635 2.02409 1.76974 2.73642C1.22313 3.44875 0.847718 4.27727 0.672542 5.1579C0.497367 6.03853 0.527126 6.94766 0.759518 7.81494C0.99191 8.68223 1.42071 9.48443 2.01273 10.1595C2.60476 10.8345 3.34414 11.3644 4.17369 11.7079C5.00323 12.0515 5.9007 12.1997 6.79666 12.1409C7.69262 12.0821 8.56305 11.8181 9.34061 11.3691C9.41057 11.3325 9.4724 11.2821 9.52238 11.221C9.57236 11.1599 9.60947 11.0893 9.63146 11.0135C9.65346 10.9377 9.65989 10.8582 9.65037 10.7798C9.64085 10.7015 9.61558 10.6258 9.57607 10.5575C9.53656 10.4891 9.48364 10.4295 9.42048 10.3821C9.35732 10.3347 9.28523 10.3006 9.20855 10.2819C9.13187 10.2631 9.05219 10.26 8.97429 10.2728C8.89639 10.2856 8.82189 10.3141 8.75526 10.3564C7.86256 10.8718 6.82474 11.0783 5.80275 10.9438C4.78076 10.8092 3.83171 10.3413 3.10278 9.61241C2.37385 8.88357 1.90577 7.93457 1.77114 6.91259C1.6365 5.89062 1.84284 4.85277 2.35814 3.96001C2.87344 3.06725 3.66892 2.36946 4.6212 1.97486C5.57349 1.58025 6.62936 1.51088 7.62509 1.7775C8.62082 2.04413 9.50075 2.63185 10.1284 3.44952C10.7561 4.26719 11.0964 5.26911 11.0967 6.29992V6.73893C11.0967 7.01061 10.9888 7.27117 10.7966 7.46327C10.6045 7.65538 10.344 7.7633 10.0723 7.7633C9.80063 7.7633 9.54008 7.65538 9.34797 7.46327C9.15586 7.27117 9.04794 7.01061 9.04794 6.73893V4.25118C9.04794 4.09594 8.98627 3.94705 8.87649 3.83728C8.76672 3.7275 8.61783 3.66583 8.46258 3.66583C8.32646 3.6628 8.19354 3.70732 8.0867 3.79172C7.97986 3.87612 7.90579 3.99513 7.87723 4.12826C7.44695 3.83065 6.93701 3.66951 6.41385 3.66583C5.97317 3.66056 5.53822 3.76594 5.14883 3.97232C4.75943 4.1787 4.42804 4.47948 4.185 4.84711C3.94197 5.21475 3.79506 5.63748 3.75773 6.0766C3.7204 6.51573 3.79384 6.9572 3.97133 7.36058C4.14882 7.76396 4.42468 8.11637 4.77365 8.38552C5.12262 8.65467 5.53354 8.83196 5.96878 8.90115C6.40402 8.97034 6.84966 8.92923 7.2649 8.78157C7.68013 8.63391 8.05168 8.38443 8.34551 8.05598C8.62364 8.41616 9.00709 8.68071 9.44255 8.81285C9.878 8.945 10.3438 8.93816 10.7752 8.79329C11.2066 8.64842 11.5821 8.37272 11.8495 8.00454C12.117 7.63635 12.263 7.19398 12.2674 6.73893V6.29992C12.2674 5.53122 12.116 4.77005 11.8218 4.05987C11.5276 3.34969 11.0965 2.7044 10.5529 2.16085C10.0094 1.6173 9.36408 1.18613 8.6539 0.891961C7.94372 0.597793 7.18255 0.446387 6.41385 0.446387ZM6.41385 7.7633C6.12442 7.7633 5.84149 7.67748 5.60084 7.51668C5.36018 7.35588 5.17262 7.12733 5.06186 6.85993C4.9511 6.59253 4.92212 6.2983 4.97858 6.01443C5.03505 5.73056 5.17442 5.46981 5.37908 5.26515C5.58374 5.06049 5.84449 4.92112 6.12836 4.86465C6.41222 4.80819 6.70646 4.83717 6.97386 4.94793C7.24126 5.05869 7.46981 5.24625 7.63061 5.48691C7.79141 5.72756 7.87723 6.01049 7.87723 6.29992C7.87723 6.68803 7.72305 7.06025 7.44862 7.33469C7.17418 7.60912 6.80196 7.7633 6.41385 7.7633Z"
                                        fill="currentColor" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M3.90643 0.918714C4.73186 0.511689 5.63986 0.300008 6.56019 0.300049C7.3481 0.300049 8.1283 0.45524 8.85624 0.756762C9.58418 1.05828 10.2456 1.50023 10.8027 2.05737C11.3599 2.61451 11.8018 3.27593 12.1033 4.00387C12.4049 4.73181 12.5601 5.512 12.5601 6.29992V6.73893L12.5601 6.74034C12.5554 7.22579 12.3996 7.69774 12.1143 8.09054C11.829 8.48333 11.4283 8.77746 10.9681 8.93201C10.5079 9.08657 10.011 9.09386 9.54639 8.95289C9.13612 8.82839 8.76913 8.59372 8.48458 8.2759C8.195 8.56251 7.84544 8.78248 7.46027 8.91945C7.02196 9.07531 6.55156 9.11871 6.09214 9.04567C5.63272 8.97264 5.19897 8.7855 4.83061 8.5014C4.46226 8.21729 4.17107 7.84531 3.98372 7.41952C3.79637 6.99372 3.71885 6.52773 3.75825 6.06421C3.79766 5.60069 3.95273 5.15447 4.20927 4.76641C4.4658 4.37835 4.81561 4.06086 5.22663 3.84302C5.63756 3.62523 6.09654 3.514 6.56158 3.5195C7.05174 3.52301 7.53089 3.65739 7.95006 3.90716C7.99722 3.81858 8.06245 3.74 8.14233 3.67689C8.27545 3.57173 8.44096 3.5161 8.61055 3.51949C8.61109 3.5195 8.61164 3.51952 8.61218 3.51953L8.60892 3.66583V3.51949C8.60947 3.51949 8.61001 3.51949 8.61055 3.51949C8.80402 3.51992 8.98947 3.59696 9.12631 3.7338C9.26353 3.87102 9.34061 4.05713 9.34061 4.25118V6.73893C9.34061 6.9718 9.43312 7.19513 9.59778 7.3598C9.76245 7.52446 9.98578 7.61696 10.2186 7.61696C10.4515 7.61696 10.6748 7.52446 10.8395 7.3598C11.0042 7.19513 11.0967 6.9718 11.0967 6.73893V6.29992C11.0964 5.30134 10.7667 4.33073 10.1587 3.53863C9.55062 2.74651 8.69819 2.17716 7.73358 1.91886C6.76897 1.66057 5.74609 1.72777 4.82356 2.11005C3.90103 2.49232 3.13042 3.16831 2.63122 4.03317C2.13202 4.89803 1.93213 5.90344 2.06256 6.89348C2.19299 7.88352 2.64643 8.80286 3.35259 9.50893C4.05874 10.215 4.97813 10.6683 5.96818 10.7987C6.95727 10.9289 7.96166 10.7294 8.8259 10.2311C8.82496 10.2317 8.82403 10.2323 8.82309 10.2329L8.9016 10.3564L8.82843 10.2297C8.82759 10.2302 8.82674 10.2307 8.8259 10.2311C8.90846 10.1792 9.00059 10.1443 9.09687 10.1284C9.19425 10.1124 9.29386 10.1162 9.38971 10.1397C9.48555 10.1632 9.57566 10.2058 9.65461 10.265C9.73356 10.3242 9.79972 10.3988 9.8491 10.4842C9.89849 10.5697 9.93008 10.6642 9.94198 10.7622C9.95388 10.8601 9.94584 10.9595 9.91834 11.0543C9.89085 11.149 9.84447 11.2373 9.78199 11.3137C9.72018 11.3892 9.64389 11.4516 9.55761 11.4973C9.55845 11.4968 9.55929 11.4963 9.56013 11.4958L9.48695 11.3691L9.55478 11.4987C9.55573 11.4983 9.55667 11.4978 9.55761 11.4973C8.76124 11.9566 7.86996 12.2268 6.95257 12.2869C6.03422 12.3472 5.11431 12.1953 4.26403 11.8431C3.41374 11.491 2.65587 10.9479 2.04905 10.256C1.44222 9.56405 1.00271 8.74179 0.764505 7.85282C0.526303 6.96385 0.495799 6.032 0.675354 5.12935C0.85491 4.22671 1.23971 3.37747 1.79999 2.64733C2.36026 1.9172 3.081 1.32574 3.90643 0.918714ZM6.56018 0.592725C5.68474 0.592687 4.82103 0.794041 4.03587 1.18121C3.2507 1.56838 2.56512 2.13099 2.03218 2.82551C1.49923 3.52003 1.1332 4.32784 0.962407 5.18645C0.791611 6.04507 0.820626 6.93146 1.04721 7.77707C1.27379 8.62267 1.69187 9.40482 2.26909 10.063C2.84632 10.7212 3.56722 11.2377 4.37602 11.5727C5.18483 11.9077 6.05986 12.0522 6.93342 11.9949C7.80698 11.9376 8.65565 11.6801 9.41378 11.2423L9.41906 11.2393C9.47153 11.2119 9.51796 11.1742 9.55544 11.1284C9.59293 11.0825 9.62076 11.0296 9.63726 10.9727C9.65375 10.9159 9.65858 10.8562 9.65144 10.7975C9.6443 10.7387 9.62534 10.682 9.59571 10.6307C9.56608 10.5794 9.52639 10.5347 9.47902 10.4992C9.43165 10.4637 9.37758 10.4381 9.32007 10.424C9.26256 10.4099 9.2028 10.4076 9.14438 10.4172C9.08595 10.4268 9.03007 10.4481 8.98011 10.4799L8.97484 10.4833C8.05423 11.0148 6.98392 11.2276 5.92999 11.0888C4.87606 10.9501 3.89735 10.4675 3.14564 9.7159C2.39393 8.96427 1.91123 7.98562 1.77239 6.93171C1.63355 5.87779 1.84633 4.80752 2.37774 3.88686C2.90914 2.9662 3.72948 2.2466 4.71152 1.83966C5.69356 1.43273 6.78244 1.36119 7.80928 1.63615C8.83612 1.9111 9.74355 2.51719 10.3908 3.36041C11.0381 4.20363 11.3891 5.23687 11.3894 6.29989V6.73893C11.3894 7.04942 11.266 7.3472 11.0465 7.56675C10.8269 7.7863 10.5291 7.90964 10.2186 7.90964C9.90815 7.90964 9.61038 7.7863 9.39083 7.56675C9.17128 7.3472 9.04794 7.04942 9.04794 6.73893V4.25118C9.04794 4.13475 9.00169 4.02308 8.91935 3.94075C8.83702 3.85842 8.72536 3.81217 8.60892 3.81217H8.60567C8.50358 3.8099 8.40389 3.84325 8.32376 3.90655C8.24363 3.96985 8.18807 4.05911 8.16665 4.15895L8.12066 4.37334L7.94033 4.24861C7.53421 3.96773 7.05293 3.81564 6.55916 3.81216L6.55844 3.81216C6.14224 3.80718 5.73146 3.90671 5.36369 4.10162C4.99593 4.29653 4.68295 4.5806 4.45342 4.92781C4.22388 5.27502 4.08513 5.67428 4.04988 6.089C4.01462 6.50373 4.08398 6.92067 4.25161 7.30164C4.41924 7.68262 4.67978 8.01545 5.00936 8.26964C5.33894 8.52384 5.72703 8.69128 6.13809 8.75663C6.54915 8.82198 6.97004 8.78315 7.36221 8.64369C7.75437 8.50424 8.10528 8.26862 8.38279 7.95841L8.50012 7.82725L8.60768 7.96654C8.86721 8.30264 9.22503 8.54951 9.63138 8.67282C10.0377 8.79613 10.4724 8.78975 10.8749 8.65456C11.2775 8.51938 11.6279 8.26211 11.8775 7.91853C12.1269 7.57515 12.2632 7.1626 12.2674 6.73822V6.29992C12.2674 5.55044 12.1198 4.8083 11.8329 4.11587C11.5461 3.42344 11.1257 2.79429 10.5958 2.26432C10.0658 1.73436 9.43666 1.31397 8.74424 1.02716C8.05181 0.740346 7.30967 0.592725 6.56018 0.592725ZM7.0642 5.08313C6.82354 4.98344 6.55873 4.95736 6.30324 5.00818C6.04776 5.059 5.81309 5.18444 5.6289 5.36863C5.4447 5.55282 5.31927 5.78749 5.26845 6.04298C5.21763 6.29846 5.24371 6.56327 5.3434 6.80393C5.44308 7.04459 5.61189 7.25028 5.82848 7.395C6.04506 7.53972 6.2997 7.61696 6.56019 7.61696C6.90949 7.61696 7.24448 7.4782 7.49148 7.23121C7.73847 6.98422 7.87723 6.64922 7.87723 6.29992C7.87723 6.03943 7.79999 5.7848 7.65527 5.56821C7.51055 5.35162 7.30486 5.18281 7.0642 5.08313ZM6.24615 4.72113C6.5584 4.65902 6.88206 4.69089 7.1762 4.81273C7.47034 4.93457 7.72174 5.14089 7.89862 5.40561C8.0755 5.67032 8.16991 5.98155 8.16991 6.29992C8.16991 6.72684 8.00031 7.13628 7.69843 7.43816C7.39655 7.74005 6.98711 7.90964 6.56019 7.90964C6.24181 7.90964 5.93059 7.81523 5.66587 7.63835C5.40116 7.46147 5.19483 7.21007 5.073 6.91593C4.95116 6.62179 4.91928 6.29813 4.9814 5.98588C5.04351 5.67362 5.19682 5.3868 5.42194 5.16167C5.64707 4.93655 5.93389 4.78324 6.24615 4.72113Z"
                                        fill="currentColor" />
                                </svg>
                                <span>Логин (Почта)</span>
                            </div>
                            <input class='sign__textfield' type='email' name='email' placeholder='example@mail.ru' required>
                        </div>

                        <div class='sign__textfield-block'>
                            <div class="sign__textfield-text">
                                <svg class='sign__textfield-icon' viewBox="0 0 11 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.36006 5.17998V3.97998C8.36006 2.29998 7.04006 0.97998 5.36006 0.97998C3.68006 0.97998 2.36006 2.29998 2.36006 3.97998V5.17998C1.34006 5.17998 0.560059 5.95998 0.560059 6.97998V11.18C0.560059 12.2 1.34006 12.98 2.36006 12.98H8.36006C9.38006 12.98 10.1601 12.2 10.1601 11.18V6.97998C10.1601 5.95998 9.38006 5.17998 8.36006 5.17998ZM3.56006 3.97998C3.56006 2.95998 4.34006 2.17998 5.36006 2.17998C6.38006 2.17998 7.16006 2.95998 7.16006 3.97998V5.17998H3.56006V3.97998Z"
                                        fill="currentColor" />
                                </svg>
                                <span>Придумайте пароль</span>
                            </div>
                            <input class='sign__textfield' type='password' name='pwd' placeholder='Пароль' required>
                        </div>

                        <div class='sign__textfield-block'>
                            <div class="sign__textfield-text">
                                <svg class='sign__textfield-icon' viewBox="0 0 11 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.36006 5.17998V3.97998C8.36006 2.29998 7.04006 0.97998 5.36006 0.97998C3.68006 0.97998 2.36006 2.29998 2.36006 3.97998V5.17998C1.34006 5.17998 0.560059 5.95998 0.560059 6.97998V11.18C0.560059 12.2 1.34006 12.98 2.36006 12.98H8.36006C9.38006 12.98 10.1601 12.2 10.1601 11.18V6.97998C10.1601 5.95998 9.38006 5.17998 8.36006 5.17998ZM3.56006 3.97998C3.56006 2.95998 4.34006 2.17998 5.36006 2.17998C6.38006 2.17998 7.16006 2.95998 7.16006 3.97998V5.17998H3.56006V3.97998Z"
                                        fill="currentColor" />
                                </svg>
                                <span>Повторите пароль</span>
                            </div>
                            <input class='sign__textfield' type='password' name='pwdVerify' placeholder='Пароль ещё раз' required>
                        </div>
                    </div>

                    <?php $actbtn_text = 'Зарегистрироваться';
                    $color = 'o';
                    require_once 'includes/components/action_button.php' ?>

                </div>

                <p class='sign_other-text'>
                    Уже зарегистрированы?<br>
                    <a class='sign_other-link' href='login.php'>Войти в аккаунт</a>
                </p>

            </form>
        </section>
    </main>

    <?php require_once 'includes/components/footer.php'; ?>
</body>

</html>