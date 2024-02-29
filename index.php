<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jQuery Practice</title>
    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="jquery.min.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>
    <script src="/jquery-3.7.1.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <style>
        section {
            height: 100vh;
            padding: 10px 100px;
            /* position: relative;
               background-color: #e5e5f7;
               opacity: 0.8;
               background-image:  linear-gradient(#444cf7 1px, transparent 1px), linear-gradient(to right, #444cf7 1px, #e5e5f7 1px);
               background-size: 20px 20px; */
        }


        .card-image img {
            position: relative;
            width: 100%;
            height: auto;
            overflow: hidden;
            box-sizing: border-box;
            object-position: center;
            object-fit: cover;



        }

        .card-func {
            position: relative;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
        }

        .date {
            font-weight: 400;
            padding: 15px 0px;
        }

        p,
        h3 {
            padding: 10px 0px;
        }

        img {
            /* display: block; */
            overflow: hidden;
        }

        .card {
            background: rgba(159, 237, 62, 0.35);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.15);
            backdrop-filter: blur(1.5px);
            -webkit-backdrop-filter: blur(1px);
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.18);
            position: relative;
            overflow: hidden;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
            transition: background-color 0.3s, transform 0.3s, box-shadow 0.3s, border-bottom 0.3s;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);

        }

        .card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.3);
            border-bottom: 5px solid #11591c;
        }

        .card:hover::after {
            border-bottom: 5px solid #11591c;
        }

        .circle {
            width: 90px;
            height: 90px;
            border-radius: 100%;
            background-color: #198754;
            position: absolute;
            bottom: 200px;
            right: -15px;
            aspect-ratio: 1 / 1;
        }

        ul {
            gap: 10px;
        }

        ul li {
            list-style: none;
            text-decoration: none;
            column-gap: 10px;
        }

        svg {
            color: #198754;
        }

        @media screen and (max-width: 768px) {
            section {
                padding: 10px;

            }

            .card {
                row-gap: 10px;
            }

        }

        @media screen and (max-width: 1024px) {
            section {
                padding: 0px 20px;

            }
        }
    </style>
</head>

<body>
    <section>
        <div class="container">
            <div class="row flex-lg-row">
                <div class="d-flex justify-content-center align-items-center m-2 py-4">
                    <button type="button" class="btn btn-success" role="button" data-bs-toggle="button" aria-pressed="true">Click to see latest posts</button>
                </div>
            </div>
        </div>
        <div class="container swiper" id="blogs">
            <div class="swiper wrapper row rol-cols-3 flex-lg-row g-3 owl-carousel owl-theme">
                <div class="swiper-slide col-md-4 item">

                    <div class="card" id="card1">
                        <div class="card-image thumbnail">

                            <?php echo "<img src=\"still-life-business-roles-with-various-mechanism-pieces.jpg\"/>"; ?>
                            <div class="circle d-flex align-items-center justify-center">
                                <div class="p-3" style="position: absolute; right: 5px;">
                                    <p class="text-lead text-white text-center" style="margin: 0 auto;">Demo Text</p>
                                </div>
                            </div>
                        </div>

                        <div class="card-body shadow-sm">
                            <div>
                                <span class="date"><?php
                                                    date_default_timezone_set("Asia/Calcutta");
                                                    echo "Posted on " . date("d-M-Y"); ?></span>
                            </div>
                            <div class="card-title">
                                <h3>This is a demo article heading</h3>
                            </div>
                            <div class="card-text">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem harum assumenda sequi illum perspiciatis?
                            </div>
                            <div class="card-func d-flex justify-content-space-between">
                                <button class="btn btn-small border-success my-2 btn-success text-white ">
                                    Read More
                                </button>
                                <div class="nav d-flex flex-lg-row align-items-center justify-content-center" style="column-gap: 15px;">
                                    <svg width="20px" height="20px" style="color: #198754;" viewBox="-0.5 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.47 4.13998C12.74 4.35998 12.28 5.96 12.09 7.91C6.77997 7.91 2 13.4802 2 20.0802C4.19 14.0802 8.99995 12.45 12.14 12.45C12.34 14.21 12.79 15.6202 13.47 15.8202C15.57 16.4302 22 12.4401 22 9.98006C22 7.52006 15.57 3.52998 13.47 4.13998Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <ul class="nav d-flex flex-lg-row align-items-center justify-content-end g-5">
                                        <li>
                                            <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 18C15.3137 18 18 15.3137 18 12C18 8.68629 15.3137 6 12 6C8.68629 6 6 8.68629 6 12C6 15.3137 8.68629 18 12 18ZM12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16Z" fill="#0F0F0F" />
                                                <path d="M18 5C17.4477 5 17 5.44772 17 6C17 6.55228 17.4477 7 18 7C18.5523 7 19 6.55228 19 6C19 5.44772 18.5523 5 18 5Z" fill="#0F0F0F" />
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.65396 4.27606C1 5.55953 1 7.23969 1 10.6V13.4C1 16.7603 1 18.4405 1.65396 19.7239C2.2292 20.8529 3.14708 21.7708 4.27606 22.346C5.55953 23 7.23969 23 10.6 23H13.4C16.7603 23 18.4405 23 19.7239 22.346C20.8529 21.7708 21.7708 20.8529 22.346 19.7239C23 18.4405 23 16.7603 23 13.4V10.6C23 7.23969 23 5.55953 22.346 4.27606C21.7708 3.14708 20.8529 2.2292 19.7239 1.65396C18.4405 1 16.7603 1 13.4 1H10.6C7.23969 1 5.55953 1 4.27606 1.65396C3.14708 2.2292 2.2292 3.14708 1.65396 4.27606ZM13.4 3H10.6C8.88684 3 7.72225 3.00156 6.82208 3.0751C5.94524 3.14674 5.49684 3.27659 5.18404 3.43597C4.43139 3.81947 3.81947 4.43139 3.43597 5.18404C3.27659 5.49684 3.14674 5.94524 3.0751 6.82208C3.00156 7.72225 3 8.88684 3 10.6V13.4C3 15.1132 3.00156 16.2777 3.0751 17.1779C3.14674 18.0548 3.27659 18.5032 3.43597 18.816C3.81947 19.5686 4.43139 20.1805 5.18404 20.564C5.49684 20.7234 5.94524 20.8533 6.82208 20.9249C7.72225 20.9984 8.88684 21 10.6 21H13.4C15.1132 21 16.2777 20.9984 17.1779 20.9249C18.0548 20.8533 18.5032 20.7234 18.816 20.564C19.5686 20.1805 20.1805 19.5686 20.564 18.816C20.7234 18.5032 20.8533 18.0548 20.9249 17.1779C20.9984 16.2777 21 15.1132 21 13.4V10.6C21 8.88684 20.9984 7.72225 20.9249 6.82208C20.8533 5.94524 20.7234 5.49684 20.564 5.18404C20.1805 4.43139 19.5686 3.81947 18.816 3.43597C18.5032 3.27659 18.0548 3.14674 17.1779 3.0751C16.2777 3.00156 15.1132 3 13.4 3Z" fill="#0F0F0F" />
                                            </svg>
                                        </li>
                                        <li>
                                            <svg width="25px" height="25px" viewBox="0 -2 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

                                                <title>twitter [#154]</title>
                                                <desc>Created with Sketch.</desc>
                                                <defs>

                                                </defs>
                                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g id="Dribbble-Light-Preview" transform="translate(-60.000000, -7521.000000)" fill="#000000">
                                                        <g id="icons" transform="translate(56.000000, 160.000000)">
                                                            <path d="M10.29,7377 C17.837,7377 21.965,7370.84365 21.965,7365.50546 C21.965,7365.33021 21.965,7365.15595 21.953,7364.98267 C22.756,7364.41163 23.449,7363.70276 24,7362.8915 C23.252,7363.21837 22.457,7363.433 21.644,7363.52751 C22.5,7363.02244 23.141,7362.2289 23.448,7361.2926 C22.642,7361.76321 21.761,7362.095 20.842,7362.27321 C19.288,7360.64674 16.689,7360.56798 15.036,7362.09796 C13.971,7363.08447 13.518,7364.55538 13.849,7365.95835 C10.55,7365.79492 7.476,7364.261 5.392,7361.73762 C4.303,7363.58363 4.86,7365.94457 6.663,7367.12996 C6.01,7367.11125 5.371,7366.93797 4.8,7366.62489 L4.8,7366.67608 C4.801,7368.5989 6.178,7370.2549 8.092,7370.63591 C7.488,7370.79836 6.854,7370.82199 6.24,7370.70483 C6.777,7372.35099 8.318,7373.47829 10.073,7373.51078 C8.62,7374.63513 6.825,7375.24554 4.977,7375.24358 C4.651,7375.24259 4.325,7375.22388 4,7375.18549 C5.877,7376.37088 8.06,7377 10.29,7376.99705" id="twitter-[#154]">

                                                            </path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </li>
                                        <li>
                                            <svg fill="#000000" height="25px" width="25px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-143 145 512 512" xml:space="preserve">
                                                <path d="M329,145h-432c-22.1,0-40,17.9-40,40v432c0,22.1,17.9,40,40,40h432c22.1,0,40-17.9,40-40V185C369,162.9,351.1,145,329,145z
                                                            M169.5,357.6l-2.9,38.3h-39.3v133H77.7v-133H51.2v-38.3h26.5v-25.7c0-11.3,0.3-28.8,8.5-39.7c8.7-11.5,20.6-19.3,41.1-19.3
                                                            c33.4,0,47.4,4.8,47.4,4.8l-6.6,39.2c0,0-11-3.2-21.3-3.2c-10.3,0-19.5,3.7-19.5,14v29.9H169.5z" />
                                            </svg>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class=" swiper-slide col-md-4 item">

                    <div class="card" id="card2">
                        <div class="card-image">
                            <?php
                            echo "<img src=\"cascade-boat-clean-china-natural-rural.jpg\" alt=\"image\"/>";
                            ?>
                            <div class="circle d-flex align-items-center justify-center">
                                <div class="p-3" style="position: absolute; right: 5px;">
                                    <p class="text-lead text-white text-center" style="margin: 0 auto;">Demo Text</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">

                            <div>
                                <span class="date">
                                    <?php
                                    date_default_timezone_set("Asia/Calcutta");
                                    echo "Posted on " . date("d-M-Y");
                                    ?>
                                </span>
                            </div>
                            <div class="card-title">
                                <h3>This is a demo article heading</h3>
                            </div>
                            <div class="card-text">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem harum assumenda sequi illum perspiciatis?
                            </div>
                            <div class="card-func d-flex justify-content-space-between">
                                <button class="btn btn-small border-success my-2 btn-success text-white ">
                                    Read More
                                </button>
                                <div class="nav d-flex flex-lg-row align-items-center justify-content-center" style="column-gap: 15px;">
                                    <svg width="20px" height="20px" viewBox="-0.5 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.47 4.13998C12.74 4.35998 12.28 5.96 12.09 7.91C6.77997 7.91 2 13.4802 2 20.0802C4.19 14.0802 8.99995 12.45 12.14 12.45C12.34 14.21 12.79 15.6202 13.47 15.8202C15.57 16.4302 22 12.4401 22 9.98006C22 7.52006 15.57 3.52998 13.47 4.13998Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <ul class="nav d-flex flex-lg-row align-items-center justify-content-end g-5">
                                        <li>
                                            <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 18C15.3137 18 18 15.3137 18 12C18 8.68629 15.3137 6 12 6C8.68629 6 6 8.68629 6 12C6 15.3137 8.68629 18 12 18ZM12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16Z" fill="#0F0F0F" />
                                                <path d="M18 5C17.4477 5 17 5.44772 17 6C17 6.55228 17.4477 7 18 7C18.5523 7 19 6.55228 19 6C19 5.44772 18.5523 5 18 5Z" fill="#0F0F0F" />
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.65396 4.27606C1 5.55953 1 7.23969 1 10.6V13.4C1 16.7603 1 18.4405 1.65396 19.7239C2.2292 20.8529 3.14708 21.7708 4.27606 22.346C5.55953 23 7.23969 23 10.6 23H13.4C16.7603 23 18.4405 23 19.7239 22.346C20.8529 21.7708 21.7708 20.8529 22.346 19.7239C23 18.4405 23 16.7603 23 13.4V10.6C23 7.23969 23 5.55953 22.346 4.27606C21.7708 3.14708 20.8529 2.2292 19.7239 1.65396C18.4405 1 16.7603 1 13.4 1H10.6C7.23969 1 5.55953 1 4.27606 1.65396C3.14708 2.2292 2.2292 3.14708 1.65396 4.27606ZM13.4 3H10.6C8.88684 3 7.72225 3.00156 6.82208 3.0751C5.94524 3.14674 5.49684 3.27659 5.18404 3.43597C4.43139 3.81947 3.81947 4.43139 3.43597 5.18404C3.27659 5.49684 3.14674 5.94524 3.0751 6.82208C3.00156 7.72225 3 8.88684 3 10.6V13.4C3 15.1132 3.00156 16.2777 3.0751 17.1779C3.14674 18.0548 3.27659 18.5032 3.43597 18.816C3.81947 19.5686 4.43139 20.1805 5.18404 20.564C5.49684 20.7234 5.94524 20.8533 6.82208 20.9249C7.72225 20.9984 8.88684 21 10.6 21H13.4C15.1132 21 16.2777 20.9984 17.1779 20.9249C18.0548 20.8533 18.5032 20.7234 18.816 20.564C19.5686 20.1805 20.1805 19.5686 20.564 18.816C20.7234 18.5032 20.8533 18.0548 20.9249 17.1779C20.9984 16.2777 21 15.1132 21 13.4V10.6C21 8.88684 20.9984 7.72225 20.9249 6.82208C20.8533 5.94524 20.7234 5.49684 20.564 5.18404C20.1805 4.43139 19.5686 3.81947 18.816 3.43597C18.5032 3.27659 18.0548 3.14674 17.1779 3.0751C16.2777 3.00156 15.1132 3 13.4 3Z" fill="#0F0F0F" />
                                            </svg>
                                        </li>
                                        <li>
                                            <svg width="25px" height="25px" viewBox="0 -2 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

                                                <title>twitter [#154]</title>
                                                <desc>Created with Sketch.</desc>
                                                <defs>

                                                </defs>
                                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g id="Dribbble-Light-Preview" transform="translate(-60.000000, -7521.000000)" fill="#000000">
                                                        <g id="icons" transform="translate(56.000000, 160.000000)">
                                                            <path d="M10.29,7377 C17.837,7377 21.965,7370.84365 21.965,7365.50546 C21.965,7365.33021 21.965,7365.15595 21.953,7364.98267 C22.756,7364.41163 23.449,7363.70276 24,7362.8915 C23.252,7363.21837 22.457,7363.433 21.644,7363.52751 C22.5,7363.02244 23.141,7362.2289 23.448,7361.2926 C22.642,7361.76321 21.761,7362.095 20.842,7362.27321 C19.288,7360.64674 16.689,7360.56798 15.036,7362.09796 C13.971,7363.08447 13.518,7364.55538 13.849,7365.95835 C10.55,7365.79492 7.476,7364.261 5.392,7361.73762 C4.303,7363.58363 4.86,7365.94457 6.663,7367.12996 C6.01,7367.11125 5.371,7366.93797 4.8,7366.62489 L4.8,7366.67608 C4.801,7368.5989 6.178,7370.2549 8.092,7370.63591 C7.488,7370.79836 6.854,7370.82199 6.24,7370.70483 C6.777,7372.35099 8.318,7373.47829 10.073,7373.51078 C8.62,7374.63513 6.825,7375.24554 4.977,7375.24358 C4.651,7375.24259 4.325,7375.22388 4,7375.18549 C5.877,7376.37088 8.06,7377 10.29,7376.99705" id="twitter-[#154]">

                                                            </path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </li>
                                        <li>
                                            <svg fill="#000000" height="25px" width="25px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-143 145 512 512" xml:space="preserve">
                                                <path d="M329,145h-432c-22.1,0-40,17.9-40,40v432c0,22.1,17.9,40,40,40h432c22.1,0,40-17.9,40-40V185C369,162.9,351.1,145,329,145z
                                                            M169.5,357.6l-2.9,38.3h-39.3v133H77.7v-133H51.2v-38.3h26.5v-25.7c0-11.3,0.3-28.8,8.5-39.7c8.7-11.5,20.6-19.3,41.1-19.3
                                                            c33.4,0,47.4,4.8,47.4,4.8l-6.6,39.2c0,0-11-3.2-21.3-3.2c-10.3,0-19.5,3.7-19.5,14v29.9H169.5z" />
                                            </svg>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="swiper-slide col-md-4 item">

                    <div class="card" id="card3">
                        <div class="card-image">
                            <?php echo "<img src=\"10207836.jpg\">"; ?>
                            <div class="circle d-flex align-items-center justify-center">
                                <div class="p-3" style="position: absolute; right: 5px;">
                                    <p class="text-lead text-white text-center" style="margin: 0 auto;">Demo Text</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">

                            <div>
                                <span class="date"><?php
                                                    date_default_timezone_set("Asia/Calcutta");
                                                    echo "Posted on " . date("d-M-Y");
                                                    ?>
                                </span>
                            </div>
                            <div class="card-title">
                                <h3>This is a demo article heading</h3>
                            </div>
                            <div class="card-text">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem harum assumenda sequi illum perspiciatis?
                            </div>
                            <div class="card-func d-flex justify-content-space-between">
                                <button class="btn btn-success text-white btn btn-small border-success my-2" role="button" data-bs-toggle="button">
                                    Read More
                                </button>
                                <div class="nav d-flex flex-lg-row align-items-center justify-content-center" style="column-gap: 15px;">
                                    <svg width="20px" height="20px" viewBox="-0.5 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.47 4.13998C12.74 4.35998 12.28 5.96 12.09 7.91C6.77997 7.91 2 13.4802 2 20.0802C4.19 14.0802 8.99995 12.45 12.14 12.45C12.34 14.21 12.79 15.6202 13.47 15.8202C15.57 16.4302 22 12.4401 22 9.98006C22 7.52006 15.57 3.52998 13.47 4.13998Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <ul class="nav d-flex flex-lg-row align-items-center justify-content-end g-5">
                                        <li>
                                            <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 18C15.3137 18 18 15.3137 18 12C18 8.68629 15.3137 6 12 6C8.68629 6 6 8.68629 6 12C6 15.3137 8.68629 18 12 18ZM12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16Z" fill="#0F0F0F" />
                                                <path d="M18 5C17.4477 5 17 5.44772 17 6C17 6.55228 17.4477 7 18 7C18.5523 7 19 6.55228 19 6C19 5.44772 18.5523 5 18 5Z" fill="#0F0F0F" />
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.65396 4.27606C1 5.55953 1 7.23969 1 10.6V13.4C1 16.7603 1 18.4405 1.65396 19.7239C2.2292 20.8529 3.14708 21.7708 4.27606 22.346C5.55953 23 7.23969 23 10.6 23H13.4C16.7603 23 18.4405 23 19.7239 22.346C20.8529 21.7708 21.7708 20.8529 22.346 19.7239C23 18.4405 23 16.7603 23 13.4V10.6C23 7.23969 23 5.55953 22.346 4.27606C21.7708 3.14708 20.8529 2.2292 19.7239 1.65396C18.4405 1 16.7603 1 13.4 1H10.6C7.23969 1 5.55953 1 4.27606 1.65396C3.14708 2.2292 2.2292 3.14708 1.65396 4.27606ZM13.4 3H10.6C8.88684 3 7.72225 3.00156 6.82208 3.0751C5.94524 3.14674 5.49684 3.27659 5.18404 3.43597C4.43139 3.81947 3.81947 4.43139 3.43597 5.18404C3.27659 5.49684 3.14674 5.94524 3.0751 6.82208C3.00156 7.72225 3 8.88684 3 10.6V13.4C3 15.1132 3.00156 16.2777 3.0751 17.1779C3.14674 18.0548 3.27659 18.5032 3.43597 18.816C3.81947 19.5686 4.43139 20.1805 5.18404 20.564C5.49684 20.7234 5.94524 20.8533 6.82208 20.9249C7.72225 20.9984 8.88684 21 10.6 21H13.4C15.1132 21 16.2777 20.9984 17.1779 20.9249C18.0548 20.8533 18.5032 20.7234 18.816 20.564C19.5686 20.1805 20.1805 19.5686 20.564 18.816C20.7234 18.5032 20.8533 18.0548 20.9249 17.1779C20.9984 16.2777 21 15.1132 21 13.4V10.6C21 8.88684 20.9984 7.72225 20.9249 6.82208C20.8533 5.94524 20.7234 5.49684 20.564 5.18404C20.1805 4.43139 19.5686 3.81947 18.816 3.43597C18.5032 3.27659 18.0548 3.14674 17.1779 3.0751C16.2777 3.00156 15.1132 3 13.4 3Z" fill="#0F0F0F" />
                                            </svg>
                                        </li>
                                        <li>
                                            <svg width="25px" height="25px" viewBox="0 -2 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

                                                <title>twitter [#154]</title>
                                                <desc>Created with Sketch.</desc>
                                                <defs>

                                                </defs>
                                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g id="Dribbble-Light-Preview" transform="translate(-60.000000, -7521.000000)" fill="#000000">
                                                        <g id="icons" transform="translate(56.000000, 160.000000)">
                                                            <path d="M10.29,7377 C17.837,7377 21.965,7370.84365 21.965,7365.50546 C21.965,7365.33021 21.965,7365.15595 21.953,7364.98267 C22.756,7364.41163 23.449,7363.70276 24,7362.8915 C23.252,7363.21837 22.457,7363.433 21.644,7363.52751 C22.5,7363.02244 23.141,7362.2289 23.448,7361.2926 C22.642,7361.76321 21.761,7362.095 20.842,7362.27321 C19.288,7360.64674 16.689,7360.56798 15.036,7362.09796 C13.971,7363.08447 13.518,7364.55538 13.849,7365.95835 C10.55,7365.79492 7.476,7364.261 5.392,7361.73762 C4.303,7363.58363 4.86,7365.94457 6.663,7367.12996 C6.01,7367.11125 5.371,7366.93797 4.8,7366.62489 L4.8,7366.67608 C4.801,7368.5989 6.178,7370.2549 8.092,7370.63591 C7.488,7370.79836 6.854,7370.82199 6.24,7370.70483 C6.777,7372.35099 8.318,7373.47829 10.073,7373.51078 C8.62,7374.63513 6.825,7375.24554 4.977,7375.24358 C4.651,7375.24259 4.325,7375.22388 4,7375.18549 C5.877,7376.37088 8.06,7377 10.29,7376.99705" id="twitter-[#154]">

                                                            </path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </li>
                                        <li>
                                            <svg fill="#000000" height="25px" width="25px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-143 145 512 512" xml:space="preserve">
                                                <path d="M329,145h-432c-22.1,0-40,17.9-40,40v432c0,22.1,17.9,40,40,40h432c22.1,0,40-17.9,40-40V185C369,162.9,351.1,145,329,145z
                                                            M169.5,357.6l-2.9,38.3h-39.3v133H77.7v-133H51.2v-38.3h26.5v-25.7c0-11.3,0.3-28.8,8.5-39.7c8.7-11.5,20.6-19.3,41.1-19.3
                                                            c33.4,0,47.4,4.8,47.4,4.8l-6.6,39.2c0,0-11-3.2-21.3-3.2c-10.3,0-19.5,3.7-19.5,14v29.9H169.5z" />
                                            </svg>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- <nav aria-label="...">
                    <ul class="pagination pagination-sm">
                    <li class="page-item active" aria-current="page">
                         <span class="page-link">1</span>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    </ul>
                    </nav> -->
            </div>
    </section>
    <script>
        $(document).ready(function() {
            $("body").ready(function() {
                    // $("#card1").fadeDown(600);
                    // $("#card2").fadeUp(700);
                    // $("#card3").fadeDown(800)
                    $("button").click(function() {
                        // $("#blogs").fadeToggle(1000),
                        // $("#card1").fadeToggle(600),
                        // $("#card2").fadeToggle(700),
                        // $("#card3").fadeToggle(800)
                        $("#card1").slideToggle(600),
                            $("#card2").slideToggle(700),
                            $("#card3").slideToggle(800)
                    });
                }),
                $(".owl-carousel").owlCarousel({
                    loop: true,
                    margin: 10,
                    nav: true,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 3
                        },
                        1000: {
                            items: 5
                        }
                    }
                })


        });
    </script>
    <script src="jquery.min.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>
    <script src="/jquery-3.7.1.js"></script>
</body>

</html>