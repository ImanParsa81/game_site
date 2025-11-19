
<?php
get_header();
?>

<div class="container">

    <div class="error-code">404</div>
    <p class="error-message">صفحه یافت نشد</p>
    <a href="<?= site_url() ?>" class="btn-back">بازگشت</a>


    <div class="floating-shapes">
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

    <div class="particles">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>


</div>

<style>



    @keyframes gradientShift {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }

    .container {
        text-align: center;
        max-width: 500px;
        width: 90%;
        position: relative;
        z-index: 2;
    }

    .floating-shapes {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
    }

    .shape {
        position: absolute;
        opacity: 0.1;
        animation: float 6s ease-in-out infinite;
    }

    .shape:nth-child(1) {
        top: 10%;
        left: 10%;
        width: 60px;
        height: 60px;
        background: #2196F3;
        border-radius: 50%;
        animation-delay: 0s;
    }

    .shape:nth-child(2) {
        top: 70%;
        right: 10%;
        width: 40px;
        height: 40px;
        background: #03A9F4;
        transform: rotate(45deg);
        animation-delay: 1s;
    }

    .shape:nth-child(3) {
        top: 30%;
        right: 20%;
        width: 30px;
        height: 30px;
        background: #00BCD4;
        border-radius: 50%;
        animation-delay: 2s;
    }

    .shape:nth-child(4) {
        bottom: 20%;
        left: 20%;
        width: 50px;
        height: 50px;
        background: #0288D1;
        clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
        animation-delay: 3s;
    }

    @keyframes float {
        0%, 100% {
            transform: translateY(0px) rotate(0deg);
        }
        50% {
            transform: translateY(-20px) rotate(180deg);
        }
    }

    .robot-container {
        margin-bottom: 30px;
        position: relative;
    }

    .robot {
        font-size: 120px;
        display: inline-block;
        animation: robotMove 3s ease-in-out infinite;
        filter: drop-shadow(0 10px 20px rgba(33, 150, 243, 0.2));
    }

    @keyframes robotMove {
        0%, 100% {
            transform: translateY(0px) rotate(0deg);
        }
        25% {
            transform: translateY(-10px) rotate(-5deg);
        }
        75% {
            transform: translateY(-5px) rotate(5deg);
        }
    }

    .error-code {
        font-size: 80px;
        font-weight: bold;
        background: linear-gradient(45deg, #2196F3, #03A9F4, #00BCD4);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 20px;
        animation: codeGlow 2s ease-in-out infinite alternate;
    }

    @keyframes codeGlow {
        from {
            filter: drop-shadow(0 0 5px rgba(33, 150, 243, 0.3));
        }
        to {
            filter: drop-shadow(0 0 15px rgba(33, 150, 243, 0.6));
        }
    }

    .error-message {
        font-size: 28px;
        color: #555;
        margin-bottom: 40px;
        font-weight: 300;
        opacity: 0;
        animation: fadeInUp 1s ease forwards 0.5s;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .btn-back {
        display: inline-block;
        padding: 15px 35px;
        background: linear-gradient(45deg, #2196F3, #03A9F4);
        color: white;
        text-decoration: none;
        border-radius: 50px;
        font-size: 18px;
        font-weight: 500;
        transition: all 0.4s ease;
        box-shadow: 0 8px 25px rgba(33, 150, 243, 0.3);
        position: relative;
        overflow: hidden;
        opacity: 0;
        animation: fadeInUp 1s ease forwards 1s;

        z-index: 15;
    }

    .btn-back::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
        transition: left 0.5s;
    }

    .btn-back:hover::before {
        left: 100%;
    }

    .btn-back:hover {
        transform: translateY(-3px) scale(1.05);
        box-shadow: 0 15px 35px rgba(33, 150, 243, 0.4);
    }

    .btn-back:active {
        transform: translateY(-1px) scale(1.02);
    }

    .particles {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 0;
    }

    .particle {
        position: absolute;
        width: 4px;
        height: 4px;
        background: #2196F3;
        border-radius: 50%;
        opacity: 0.6;
        animation: particleFloat 8s linear infinite;
    }

    .particle:nth-child(odd) {
        background: #03A9F4;
        animation-duration: 10s;
    }

    .particle:nth-child(1) { top: 20%; left: 20%; animation-delay: 0s; }
    .particle:nth-child(2) { top: 80%; left: 80%; animation-delay: 1s; }
    .particle:nth-child(3) { top: 40%; left: 60%; animation-delay: 2s; }
    .particle:nth-child(4) { top: 60%; left: 30%; animation-delay: 3s; }
    .particle:nth-child(5) { top: 10%; left: 70%; animation-delay: 4s; }

    @keyframes particleFloat {
        0% {
            transform: translateY(0px) scale(1);
            opacity: 0.6;
        }
        50% {
            transform: translateY(-30px) scale(1.2);
            opacity: 1;
        }
        100% {
            transform: translateY(0px) scale(1);
            opacity: 0.6;
        }
    }

    @media (max-width: 768px) {
        .error-code {
            font-size: 60px;
        }
        .error-message {
            font-size: 22px;
        }
        .robot {
            font-size: 80px;
        }
        .btn-back {
            padding: 12px 28px;
            font-size: 16px;
        }
    }
</style>




<?php
get_footer();
?>