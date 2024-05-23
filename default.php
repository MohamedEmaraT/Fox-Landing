<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./page.css">
    <link rel="shortcut icon" href="./O.png" type="image/x-icon">
    <title>FoxNewTab</title>
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <img src="./img/o.ico" alt="Extension Logo">
                <h1>FoxNewTab</h1>
            </div>
            <div class="download-btn" id="click">
                <img src="./img/menu-burger.png" alt="">
                <ul id="drop">
                    <li><a href="/" target="_blank">Download</a></li>
                    <li><a href="Fox Landing/AboutUs.html" target="_blank">About Us</a></li>
                    <li><a href="Fox Landing/terms-of-service/" target="_blank">Terms of Service</a></li>
                    <li><a href="Fox Landing/privacy-policy/" target="_blank">Privacy Policy</a></li>
                    <li><a href="Fox Landing/faq/" target="_blank">FAQ</a></li>
                </ul>
            </div>
        </nav>
        <div class="hero">
            <div class="drop">
                <h1><span>Improve your search </span><br> with FoxNewTab browsers <br>extension</h1>
                <form onsubmit="openLink(event)">
                    <div class="opt">
                        <strong>
                            <p id="selected">Select Engine</p>
                        </strong>   
                        <ul id="linkSelect">
                            <li><a id="search_Google" href="https://www.google.com/search?q=">Google</a></li>
                            <li><a id="search_Yahoo" href="https://www.yahoo.com/search?q=">Yahoo</a></li>
                            <li><a id="search_Bing" href="https://www.bing.com/search?q=">Bing</a></li>
                            <li><a id="search_ask" href="https://www.ask.com/web?q=">Ask</a></li>
                            <li><a id="search_Fox" href="https://cse.google.com/cse.js?cx=01cc40cfca13b4128&q=">Fox</a></li>
                        </ul>
                    </div>
                    <input type="search" name="Search" id="search" placeholder="search - Fox">
                    <input type="submit" value="search">
                </form>
                <button class="add"> <img src="./img/chrome.png" alt=""> Add FoxNewTab To Get Started</button>
            </div>
            <div class="svg">
                <img src="./img/illustration.svg" alt="">
            </div>
        </div>
    </header>
    <section class="SL">
        <p>Search through the web with this search engines</p>
        <div>
            <span><small>Google</small><img src="./img/google.png" alt=""></span>
            <span><small>Yahoo</small><img src="./img/yahoo.png" alt=""></span>
            <span><small>Bing</small><img src="./img/bing.png" alt=""></span>
            <span><small>Ask</small><img src="./img/ask.png" alt=""></span>
            <span><small>Fox</small><img src="./img/OBlack.png" alt=""></span>
        </div>
    </section>
     <main>
        <div class="search-engines">
            <a href="https://www.google.com" target="_blank">
                <img src="./img/google (2).png" alt="Google Logo">
                <div>
                    <h1>Google</h1>
                    <p>Unmatched Accuracy and Speed: Google delivers precise and rapid search results, making it the go-to search engine for users worldwide.</p>
                </div>
                <button>Google</button>
            </a>
            <a href="https://www.bing.com" target="_blank">
                <img src="./img/bing (1).png" alt="Bing Logo">
                <div>
                    <h1>Bing</h1>
                    <p>Visual Search Excellence: Bing excels in visual searches, offering rich image and video search results</p>
                </div>
                <button>Bing</button>
            </a>
            <a href="https://www.yahoo.com" target="_blank">
                <img src="./img/yahoo (1).png" alt="Yahoo Logo">
                <div>
                    <h1>Yahoo</h1>
                    <p>Rich Content Integration: Yahoo combines search with news, finance, sports, and entertainment, providing a holistic user experience.</p>
                </div>
                <button>Yahoo</button>
            </a>
            <a href="https://www.ask.com/" target="_blank">
                <img src="./img/ask1.png" alt="Ask Logo">
                <div>
                    <h1>Ask</h1>
                    <p>Question and Answer Focus: Ask specializes in answering user queries, making it ideal for finding specific information quickly.

</p>
                </div>
                <button>Ask</button>
            </a>

             <a href="https://cse.google.com/cse?cx=01cc40cfca13b4128" target="_blank">
                <img src="./img/OBlack.png" alt="fox Logo">
                <div>
                    <h1>Fox</h1>
                    <p>Tailored Search Experience: Designed to meet specific user needs with customizable search options</p>
                </div>
                <button>Fox</button>
            </a>
        </div>
    </main> 
    <section class="why">
        <div>
            <h1>Why FoxNewTab?</h1>
        </div>
        <div>
            <div>
                <div>
                    <h1>Save Time</h1>
                    <p>Multi-search engine in one interface make it easy and save your time</p>
                </div>
                <img height="55%" src="./img/save_time.png" alt="" srcset="">
            </div>
            <div>
                <div>
                    <h1>Pin Default</h1>
                    <p>Keep your favorite search as default</p>
                </div>
                <img src="./img/Background.png" alt="" srcset="">
            </div>
            <div>
                <div>
                    <h1>Your privacy</h1>
                    <p>your data and information will not be touch</p>
                </div>
                <img src="./img/private.png" alt="" srcset="">
            </div>
        </div>
    </section>

    <section id="about" class="about section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-12">
                <div class="about-img">
                    <img style="width: 400px;" src="./img/Security.jpg" alt="" class="img-fluid lazyload">
                </div>
            </div>
            <div class="col-lg-8 col-md-12 ps-lg-5 mt-md-5">
                <div class="about-text">
                    <h2>Security is our top priority</h2>
                    <p>Web security has always been a paramount concern since the inception
                         of the internet. At Super Search, ensuring the security of our extension is not merely a feature, but a fundamental value ingrained in everything we do</p>
                    <!-- <a href="#" class="btn btn-warning">Learn More</a> -->
                </div>
            </div>
        </div>
    </div>

</section>

    <section id="contact" class="contact">
    <h1>Contact Us</h1>
    <br>
    <p>We'd love to hear from you! Please fill out the form below and we will get in touch with you shortly.</p>
    <br>
    <br>
    <form action="mailto:your-email@example.com" method="post" enctype="text/plain">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message</label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <input type="submit" value="Send">
    </form>
</section>




    <!-- <script src="./page.js"></script> -->
    <script src="./script.js"></script>
</body>

</html>