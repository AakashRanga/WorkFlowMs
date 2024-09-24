
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <title>Parallax depth cards</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Playfair+Display:700|Raleway:500,700');

        body {
            margin: 40px 0;
            font-family: "Raleway";
            font-size: 14px;
            font-weight: 500;
     
            -webkit-font-smoothing: antialiased;
        }

        .title {
            font-family: "Raleway";
            font-size: 24px;
            font-weight: 700;
            color: #5D4037;
            text-align: center;
        }

        p {
            line-height: 1.5em;
        }

        h1+p,
        p+p {
            margin-top: 10px;
        }

        .container {
            padding: 40px 80px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .card-wrap {
            margin: 10px;
            transform: perspective(800px);
            transform-style: preserve-3d;
            cursor: pointer;
        }

        .card-wrap:hover .card-info {
            transform: translateY(0);
        }

        .card-wrap:hover .card-info p {
            opacity: 1;
        }

        .card-wrap:hover .card-info,
        .card-wrap:hover .card-info p {
            transition: 0.6s cubic-bezier(0.23, 1, 0.32, 1);
        }

        .card-wrap:hover .card-info:after {
            transition: 5s cubic-bezier(0.23, 1, 0.32, 1);
            opacity: 1;
            transform: translateY(0);
        }

        .card-wrap:hover .card-bg {
            transition: 0.6s cubic-bezier(0.23, 1, 0.32, 1), opacity 5s cubic-bezier(0.23, 1, 0.32, 1);
            opacity: 0.8;
        }

        .card-wrap:hover .card {
            transition: 0.6s cubic-bezier(0.23, 1, 0.32, 1), box-shadow 2s cubic-bezier(0.23, 1, 0.32, 1);
            box-shadow: rgba(255, 255, 255, 0.2) 0 0 40px 5px, white 0 0 0 1px, rgba(0, 0, 0, 0.66) 0 30px 60px 0, inset #333 0 0 0 5px, inset white 0 0 0 6px;
        }

        .card {
            position: relative;
            flex: 0 0 240px;
            width: 240px;
            height: 320px;
            background-color: #333;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.66) 0 30px 60px 0, inset #333 0 0 0 5px, inset rgba(255, 255, 255, 0.5) 0 0 0 6px;
            transition: 1s cubic-bezier(0.445, 0.05, 0.55, 0.95);
        }

        .card-bg {
            opacity: 0.5;
            position: absolute;
            top: -20px;
            left: -20px;
            width: 100%;
            height: 100%;
            padding: 20px;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            transition: 1s cubic-bezier(0.445, 0.05, 0.55, 0.95), opacity 5s 1s cubic-bezier(0.445, 0.05, 0.55, 0.95);
            pointer-events: none;
        }

        .card-info {
            padding: 20px;
            position: absolute;
            bottom: 0;
            color: #fff;
            transform: translateY(40%);
            transition: 0.6s 1.6s cubic-bezier(0.215, 0.61, 0.355, 1);
        }

        .card-info p {
            opacity: 0;
            text-shadow: black 0 2px 3px;
            transition: 0.6s 1.6s cubic-bezier(0.215, 0.61, 0.355, 1);
        }

        .card-info * {
            position: relative;
            z-index: 1;
        }

        .card-info:after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            z-index: 0;
            width: 100%;
            height: 100%;
            background-image: linear-gradient(to bottom, transparent 0%, rgba(0, 0, 0, 0.6) 100%);
            background-blend-mode: overlay;
            opacity: 0;
            transform: translateY(100%);
            transition: 5s 1s cubic-bezier(0.445, 0.05, 0.55, 0.95);
        }

        .card-info h1 {
            font-family: "Playfair Display";
            font-size: 36px;
            font-weight: 700;
            text-shadow: rgba(0, 0, 0, 0.5) 0 10px 10px;
        }
    </style>
</head>

<body>
    <h1 class="title">Brands</h1>

    <div id="app" class="container">
        <card data-image="../img/img1.png">
            <h1 slot="header">Canyons</h1>
            <p slot="content">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </p>
        </card>
        <card data-image="../img/img2.png">
            <h1 slot="header">Beaches</h1>
            <p slot="content">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </p>
        </card>
        <card data-image="../img/img3.png">
            <h1 slot="header">Trees</h1>
            <p slot="content">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </p>
        </card>
        <card data-image="../img/img4.png">
            <h1 slot="header">Lakes</h1>
            <p slot="content">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </p>
        </card>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.1/vue.min.js"></script>
    <script>
        Vue.config.devtools = true;

        Vue.component('card', {
            template: `
                <div class="card-wrap"
                @mousemove="handleMouseMove"
                @mouseenter="handleMouseEnter"
                @mouseleave="handleMouseLeave"
                ref="card">
                <div class="card"
                    :style="cardStyle">
                    <div class="card-bg" :style="[cardBgTransform, cardBgImage]"></div>
                    <div class="card-info">
                    <slot name="header"></slot>
                    <slot name="content"></slot>
                    </div>
                </div>
                </div>`,
            mounted() {
                this.width = this.$refs.card.offsetWidth;
                this.height = this.$refs.card.offsetHeight;
            },
            props: ['dataImage'],
            data: () => ({
                width: 0,
                height: 0,
                mouseX: 0,
                mouseY: 0,
                mouseLeaveDelay: null
            }),

            computed: {
                mousePX() {
                    return this.mouseX / this.width;
                },
                mousePY() {
                    return this.mouseY / this.height;
                },
                cardStyle() {
                    const rX = this.mousePX * 30;
                    const rY = this.mousePY * -30;
                    return {
                        transform: `rotateY(${rX}deg) rotateX(${rY}deg)`
                    };

                },
                cardBgTransform() {
                    const tX = this.mousePX * -40;
                    const tY = this.mousePY * -40;
                    return {
                        transform: `translateX(${tX}px) translateY(${tY}px)`
                    };

                },
                cardBgImage() {
                    return {
                        backgroundImage: `url(${this.dataImage})`
                    };

                }
            },

            methods: {
                handleMouseMove(e) {
                    this.mouseX = e.pageX - this.$refs.card.offsetLeft - this.width / 2;
                    this.mouseY = e.pageY - this.$refs.card.offsetTop - this.height / 2;
                },
                handleMouseEnter() {
                    clearTimeout(this.mouseLeaveDelay);
                },
                handleMouseLeave() {
                    this.mouseLeaveDelay = setTimeout(() => {
                        this.mouseX = 0;
                        this.mouseY = 0;
                    }, 1000);
                }
            }
        });



        const app = new Vue({
            el: '#app'
        });
    </script>
</body>

</html>