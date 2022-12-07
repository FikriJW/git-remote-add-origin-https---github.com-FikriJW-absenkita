<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            font-size: 62.5%;
        }

        body {
            font-family: "Poppins", sans-serif;
            line-height: 1.6;
            color: #fff;
            font-size: 16px;
            overflow-x: hidden;
            background-image: linear-gradient(#AE67FA, #511f86);
        }

        a {
            color: #2196f3;
            text-decoration: none;
        }

        .container {
            display: grid;
            grid-template-rows: minmax(min-content, 100vh);
            grid-template-columns: repeat(2, 50vw);
        }

        .custom-dot {
            color: #2196f3;
        }

        .signup-container,
        .signup-form {
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        .signup-container {
            width: 100vw;
            padding: 10rem 10rem;
            align-items: flex-start;
            justify-content: flex-start;

            grid-column: 1 / 2;
            grid-row: 1;
        }

        .signup-form {
            max-width: 45rem;
            width: 100%;
        }

        .text-mute {
            color: #aaa;
        }

        .heading-primary {
            font-size: 5rem;
        }

        .input-text {
            font-family: inherit;
            font-size: 1.8rem;
            padding: 3rem 5rem 1rem 2rem;
            border: none;
            border-radius: 2rem;
            background: #eee;
            font-weight: 600;
            width: 100%;
        }

        .input-text:focus {
            outline-color: #2196f3;
        }

        .btn {
            padding: 2rem 3rem;
            border: none;
            background: #2196f3;
            color: #fff;
            border-radius: 1rem;
            cursor: pointer;
            font-family: inherit;
            font-weight: 500;
            font-size: inherit;
        }

        .btn-signup {
            align-self: flex-end;
            width: 100%;
            margin-top: 2rem;
            box-shadow: 0 1rem 2rem #00000025;
        }

        .btn-signup:active {
            box-shadow: none;
        }

        .btn-signup:hover {
            background: #2180f9;
        }

        .inp {
            position: relative;
        }

        .label {
            pointer-events: none;

            position: absolute;
            top: 2rem;
            left: 2rem;
            color: #00000070;
            font-weight: 500;
            font-size: 1.8rem;

            transition: all 0.2s;
            transform-origin: left;
        }

        .input-text:not(:placeholder-shown)+.label,
        .input-text:focus+.label {
            top: 0.7rem;
            transform: scale(0.75);
        }

        .input-text:focus+.label {
            color: #2196f3;
        }

        .f-row {
            display: flex;
            gap: 2rem;
        }

        .input-icon {
            position: absolute;
            top: 2rem;
            right: 2rem;
            font-size: 2rem;
            color: #00000070;
        }

        .input-icon-password {
            cursor: pointer;
        }

        .container {
            display: flex;
        }

        .heading-secondary {
            font-size: 3rem;
        }

        .welcome-container {
            grid-column: 2 / 3;
            grid-row: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            padding: 10rem;
        }

        .lg {
            font-size: 6rem;
        }

        .welcome-container img {
            width: 150%;
        }

        @media only screen and (max-width: 70rem) {
            html {
                font-size: 54.5%;
            }
        }

        @media only screen and (max-width: 60rem) {
            .signup-container {
                padding: 5rem;
            }
        }

        @media only screen and (max-width: 40rem) {
            html {
                font-size: 48.5%;
            }

            .input-text:not(:placeholder-shown)+.label,
            .input-text:focus+.label {
                top: 0.6rem;
                transform: scale(0.75);
            }

            .label {
                font-size: 1.9rem;
            }

            .input-wrapper {
                flex-direction: column;
            }
        }

        @media only screen and (max-width: 1200px) {
            .signup-container {
                grid-column: 1 / 3;
            }

            .welcome-container {
                display: none;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <main class="signup-container">
            <p class="text-mute">Buat Akun</p>
            <h1 class="heading-primary">Buat Sebuah Akun<span class="custom-dot"></span></h1>
            <p class="text-mute">Already A Member? <a href="/login">Log in</a></p>
            <form class="signup-form">
                <div class="f-row input-wrapper">
                    <label class="inp">
                        <input type="text" class="input-text" placeholder="&nbsp;">
                        <span class="label">First name</span>
                        <span class="input-icon"><i class="fa-solid fa-address-card"></i></span>
                    </label>
                    <label class="inp">
                        <input type="text" class="input-text" placeholder="&nbsp;">
                        <span class="label">Last name</span>
                        <span class="input-icon"><i class="fa-solid fa-address-card"></i></span>
                    </label>
                </div>
                <label class="inp">
                    <input type="email" class="input-text" placeholder="&nbsp;">
                    <span class="label">Email</span>
                    <span class="input-icon"><i class="fa-solid fa-envelope"></i></span>
                </label>
                <label class="inp">
                    <input type="password" class="input-text" placeholder="&nbsp;" id="password">
                    <span class="label">Password</span>
                    <span class="input-icon input-icon-password" data-password><i class="fa-solid fa-eye"></i></span>
                </label>
                <button class="btn btn-signup">Create account</button>
            </form>
        </main>
        <div class="welcome-container">
            <h1 class="heading-secondary">Welcome to <span class="lg">ABSENKITA!</span></h1>
            <img src="img/studend1.png"
                alt="">
        </div>
    </div>

    <script>
        const eyeClick = document.querySelector("[data-password]");
        const password_elem = document.getElementById("password");

        eyeClick.onclick = () => {
            const icon = eyeClick.children[0];
            icon.classList.toggle("fa-eye-slash");
            if (password_elem.type === "password") {
                password_elem.type = "text";
            } else if (password_elem.type === "text") {
                password_elem.type = "password";
            }
        };
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
