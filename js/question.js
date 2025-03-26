const questions = document.querySelectorAll('.question');
const closedPath = "M25 0.143982C38.8075 0.143982 50 11.3365 50 25.144C50 38.9515 38.8075 50.144 25 50.144C11.1925 50.144 0 38.9515 0 25.144C0 11.3365 11.1925 0.143982 25 0.143982ZM25 35.144C24.337 35.144 23.7011 35.4074 23.2322 35.8762C22.7634 36.3451 22.5 36.9809 22.5 37.644C22.5 38.307 22.7634 38.9429 23.2322 39.4118C23.7011 39.8806 24.337 40.144 25 40.144C25.663 40.144 26.2989 39.8806 26.7678 39.4118C27.2366 38.9429 27.5 38.307 27.5 37.644C27.5 36.9809 27.2366 36.3451 26.7678 35.8762C26.2989 35.4074 25.663 35.144 25 35.144ZM25 11.394C22.5965 11.394 20.2914 12.3488 18.5918 14.0483C16.8923 15.7479 15.9375 18.053 15.9375 20.4565C15.9375 21.1195 16.2009 21.7554 16.6697 22.2242C17.1386 22.6931 17.7745 22.9565 18.4375 22.9565C19.1005 22.9565 19.7364 22.6931 20.2053 22.2242C20.6741 21.7554 20.9375 21.1195 20.9375 20.4565C20.9383 19.7191 21.1399 18.9958 21.5205 18.3642C21.9011 17.7326 22.4464 17.2165 23.098 16.8713C23.7496 16.526 24.4829 16.3647 25.2192 16.4045C25.9556 16.4443 26.6672 16.6837 27.2778 17.0972C27.8884 17.5106 28.3749 18.0825 28.6852 18.7514C28.9956 19.4203 29.118 20.1611 29.0393 20.8943C28.9607 21.6275 28.6839 22.3255 28.2388 22.9134C27.7937 23.5013 27.1969 23.9569 26.5125 24.2315C24.8225 24.9065 22.5 26.6365 22.5 29.519V30.144C22.5 30.807 22.7634 31.4429 23.2322 31.9117C23.7011 32.3806 24.337 32.644 25 32.644C25.663 32.644 26.2989 32.3806 26.7678 31.9117C27.2366 31.4429 27.5 30.807 27.5 30.144C27.5 29.534 27.625 29.229 28.1525 28.969L28.37 28.869C30.322 28.0837 31.9401 26.6439 32.9468 24.7963C33.9536 22.9487 34.2862 20.8084 33.8878 18.7424C33.4894 16.6764 32.3847 14.8134 30.7631 13.4727C29.1415 12.1319 27.1041 11.397 25 11.394Z";
const openedPath = "M50 25.144C50 11.337 38.808 0.144 25 0.144C11.192 0.144 0 11.337 0 25.144C0 38.952 11.192 50.144 25 50.144C38.808 50.144 50 38.952 50 25.144Z M25.022 33.144C25.5 33.144 25.959 32.952 26.297 32.61L36.494 22.283C36.822 21.938 37.004 21.477 37 20.999C36.996 20.52 36.806 20.062 36.472 19.724C36.138 19.385 35.686 19.193 35.213 19.189C34.74 19.185 34.285 19.369 33.945 19.701L25.022 28.738L16.099 19.701C15.933 19.527 15.734 19.388 15.514 19.292C15.294 19.197 15.058 19.146 14.818 19.144C14.579 19.142 14.342 19.188 14.12 19.28C13.899 19.372 13.697 19.507 13.528 19.679C13.359 19.85 13.225 20.054 13.134 20.278C13.044 20.503 12.998 20.743 13 20.985C13.002 21.228 13.052 21.467 13.146 21.69C13.241 21.913 13.378 22.114 13.55 22.283L23.748 32.61C24.086 32.952 24.544 33.144 25.022 33.144Z";

questions.forEach((question) => {
    question.addEventListener('click', () => {
        const answer = question.parentNode.querySelector('.answer');
        const questionIcon = question.parentNode.querySelector('.question-icon path');

        if (answer.classList.contains('opened')) {
            answer.classList.remove('opened')
            questionIcon.setAttribute('d', closedPath);
        } else {
            answer.classList.add('opened');
            questionIcon.setAttribute('d', openedPath);
        }

    });
});