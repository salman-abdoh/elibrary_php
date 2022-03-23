
<!DOCTYPE html>

<html>

<head>
    <title>ELibrary</title>
    <meta charset="UTF-8">
    <meta name="keywords" content="book,book, book, book">
    <meta name="author" content="salman">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   
    <link  href="../app/assets/css/style.css" rel="stylesheet">

    <script src="../app/assets/javascript/app.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
</head>

<body>
    <div id="myModal" class="modal">
        <div class="modal-content">
            <h2>تسجيل الدخول</h2>

            <div class="form">
                <form action="index.html">

                    <input type="email" id="email" name="email" placeholder="البريد الالكتروني او رقم الجوال" required>

                    <br>
                    <input type="password" id="pass" name="pass" placeholder="كلمة السر" required>

                    <br>
                    <input type="submit" value="تسجيل الدخول">

                    <br><br>
                    <label>ليس لديك حساب؟</label><br>
                    <button id="creat_ac" class="creat_ac" value=" انشا حساب">انشاء حساب</button>
                </form>
                <span class="close">&times;</span>
            </div>
        </div>
    </div>

    <div id="modlesign" class="modal2">
        <span onclick="document.getElementById('modlesign').style.display='none'" class="close"
            title="Close Modal">&times;</span>
        <form class="modal-content2">
            <div class="container">
                <h1>انشا حساب</h1>
                <hr>
                <input type="text" placeholder="رقم الجوال" name="email" required>
                <p>سوف نرسل لك رمز التحقق عن طريق رساله نصيه.</p>
                <hr>
                <button type="submit">ارسال رمز التحقق</button>
                <input type="text" placeholder="الاسم الاول" name="email" required>
                <input type="text" placeholder="اسم العائلة" name="email" required>
                <input type="email" placeholder="البريد الالكتروني" name="email" required>



                <input type="email" placeholder="تاكيد البريد الالكنروني" name="psw-repeat" required>
                <input type="password" placeholder="كلمة السر" name="psw" required>
                <label>
                    <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px">اوافق علي الشروط
                    والاحكام
                </label>
                <label>
                    <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> التسجيل
                    للانضمام للنشره البريديه
                </label>



                <div class="clearfix">

                    <button class="signupbtn">انشا حساب</button><br>
                    هل لديك حساب؟
                    <button id="sigbtn" class="sigbtn">تسجيل الدخول </button>
                </div>
            </div>
        </form>
    </div>
    <button id="toggl" onclick="toog()" class="signup " style="float: right;">
        <i class="fa fa-bars"></i>
    </button>
    <header id="head" class="top_header">
        <ul>
            <button class="signup" id="lang" onclick="langChange()">
                <li><i class="fas fa-user"></i>English</li>
            </button>
            <li>YERاليمن <i class="fab fa-tiktok"></i></li>
            <li>سياسة الخصوصيه <i class="fas fa-map-marker"></i></li>
            <li>المساعده <i class="far fa-question-circle"></i></li>
            <li>اتصل ينا <i class="fab fa-google-plus-g"></i></li>
            <li>من نحن <i class="fas fa-taxi"></i></li>
            <li>الرئسية <i class="fas fa-star"></i></li>
            <button id="mybtn" class="signup">
                <li class="last" style="border: none;">ادخل حسابك اوسجل الان<i class="fas fa-user"></i></li>
            </button>

        </ul>

    </header>

    <div class="contianer">
        <nav>
            <div class="backage" id="back"><span id="count">0</span><a href="checkout.html"><i style="color: #435370;" class="fas fa-shopping-cart"></i></a></div>

            <div class="searth"><input type="text" id="search" onkeyup="filter()" placeholder="البحث"></div>

            <div class="logo"><img src="../app/assets/image/logo.png"></div>
        </nav>
        <section class="sliders">
            <!--     <div class="container">
        <div class="slider">
            <img src="../app/assets/image/category.png">
        </div>
        <div class="slider">
            <img src="../app/assets/image/category2.png">
        </div>
        <div class="slider">
            <img src="../app/assets/image/category.png">
        </div> <div style="text-align: center;">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div></div>
        <div style="text-align: center;">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
    </div>-->
            <!--    <div class="slider">
                <div class="../app/assets/images">
                    <input type="radio" name="slid" id="img1" checked>
                    <input type="radio" name="slid" id="img2">
                    <input type="radio" name="slid" id="img3">
                    <input type="radio" name="slid" id="img4">


                    <img src="../app/assets/image/category2.png" class="img1" alt="../app/assets/image1">
                    <img src="../app/assets/image/category.png" class="img2" alt="../app/assets/image2">
                    <img src="../app/assets/image/category2.png" class="img3" alt="../app/assets/image3">
                    <img src="../app/assets/image/category.png" class="img4" alt="../app/assets/image4">



                </div>

                <div class="dots ">
                    <label for="img1"></label>
                    <label for="img2"></label>
                    <label for="img3"></label>
                    <label for="img4"></label>
                </div>
                    <div class="counter ">
                        <div class="timeover" >الوقت المتبقى للعروض</div><br>
                        <div class="alltime">
                        <div class="time"  id="days"></div>
                        <div class="time" id="hours"></div>
                        <div class="time" id="minutes"></div>
                        <div class="time" id="seconds"></div>
                    </div>
                    </div></div>-->
            <div class="slideshow-container">

                <!-- Full-width ../app/assets/images with number and caption text -->
                <div class="mySlides fade first">

                    <img src="../public/../app/assets/image/category2.png" style="width:100%; ">

                </div>

                <div class="mySlides fade">

                    <img src="../app/assets/image/category.png" style="width: 100vw;
                          height: 277px">

                </div>

                <div class="mySlides fade">

                    <img src="../app/assets/image/category2.png" style="width:100%">

                </div>

                <div class="mySlides fade">

                    <img src="../app/assets/image/category.png" style="width: 100vw;
                            height: 277px">

                </div>


                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>

            <!-- The dots/circles -->
            <div class="dotdiv">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
            </div>
            <div class="counter ">
                <div class="timeover">الوقت المتبقى للعروض</div><br>
                <div class="alltime">
                    <div class="time" id="days"></div>
                    <div class="time" id="hours"></div>
                    <div class="time" id="minutes"></div>
                    <div class="time" id="seconds"></div>
                </div>
            </div>


        </section>
        <section class="depart">
            <h1>تصفح حسب القسم</h1>
            <div class="dept dept1" style="color: hsl(10deg 42% 26%);"><i class="fas fa-shopping-cart"></i>
                <h2>دين</h2>
            </div>
            <div class="dept dept2" style="color: hsl(23deg 92% 56%);"><i class="fas fa-shopping-cart"></i>
                <h2>تاريخ</h2>
            </div>
            <div class="dept dept3" style="color: hsl(257deg 20% 51%);"><i class="fas fa-shopping-cart"></i>
                <h2>روايات</h2>
            </div>
            <div class="dept dept4" style="color: hsl(333deg 60% 50%);"><i class="fas fa-shopping-cart"></i>
                <h2>سياسة</h2>
            </div>
            <div class="dept dept5" style="color: hsl(198deg 75% 42%);"><i class="fas fa-shopping-cart"></i>
                <h2>اقتصاد</h2>
            </div>
            <div class="dept dept6" style="color: hsl(91deg 62% 44%);"><i class="fas fa-shopping-cart"></i>
                <h2>طبخ</h2>
            </div>
            <div class="dept dept7" style="color: hsl(341deg 90% 35%);"><i class="fas fa-shopping-cart"></i>
                <h2>تربية</h2>
            </div>
        </section>
        <section class="departimags">

            <div class="dept"><img src="../assets/../app/assets/image/1111.png" alt=""></div>
            <div class="dept"><img src="../app/assets/image/12121.png" alt></div>

        </section>

        <section class="books" id="books">
            <h1>العروض الحاليه</h1>
           
          
           <?php foreach($data as $user){?>
            <div class="bookstype" id="bookt">
                <button class="btn_img"><a href="detail.html"><img src="../app/assets/image/3.png"></a></button>
                <h2 id="bookname">كتاب الكتروني</h2>
                <h1><?php echo $user -> name; ?></h1>
                <h2 class="cost"><?php echo $user -> price; ?> <br><span><?php echo $user -> descr; ?> </span></h2>
                <div class="fass">
                    <i class="fas fa-star"></i>
                    <button class="btn_cart" onclick="add()"> <i class="fas fa-shopping-cart"></i></i></button>
                    <i class="fas fa-exchange-alt"></i>
                </div>
            </div><br>
            <?php }
              ?>
           

        </section>
        <footer>
            <div class="footer_up">
                <div>
                    <h2>عن جرير</h2>
                    <h3>من نحن</h3>
                    <h3>الحوكمه</h3>
                    <h3>علاقة المستثمرين والتقارير</h3>
                    <h3>الاستدامة</h3>
                    <h3>الاخبار</h3>
                    <h3>فرص العمل</h3>
                </div>
                <div>
                    <h2> روابط سريعة </h2>
                    <h3> قارى جرير</h3>
                    <h3>الحوكمه</h3>
                    <h3>شركاء برامج الكافاة</h3>
                    <h3>خدمات شركات الاتصالات</h3>
                </div>
                <div>
                    <h2>خدمات جرير </h2>
                    <h3>خدمة تقسيط المشتريات</h3>
                    <h3>خدمات مابعد البيع</h3>
                    <h3>خدمات الحماية الشاملة</h3>
                    <h3>خدمات اجهزة ابل</h3>
                    <h3>بطاقة خصم جرير</h3>
                    <h3> بطاقة جرير للهديا</h3>
                </div>
                <div>
                    <h2>خدمة العملاء</h2>
                    <h3>مبيعات الشركات</h3>
                    <h3>الاسئلة المتكررة</h3>
                    <h3>دليل التسوق والمطبوعات</h3>
                    <h3>مواقع العرض</h3>
                    <h3>سياسة الضمان</h3>
                    <h3>سياسة الاسترجاع والاستبدال</h3>
                    <h3>اتصل بنا</h3>
                    <h3>920000089</h3>
                </div>
                <div class="callus">
                    <h2>انضم الي نشراتنا البريديه</h2>
                    <form class="form_footer_up">
                        <input type="email" required placeholder="ادخل البريد الالكتروني"><br>
                        <button type="button">اشتراك</button>
                    </form>
                </div>
                <div class="last_footer_up">
                    <h2>تواصل معنا</h2>
                    <ul>
                        <li><i class="fab fa-tiktok"></i></li>
                        <li><i class="fab fa-snapchat"></i></li>
                        <li><i class="fab fa-whatsapp"></i></li>
                        <li><i class="fab fa-instagram"></i></li>
                        <li><i class="fab fa-youtube"></i></li>
                        <li><i class="fab fa-twitter"></i></li>
                        <li><i class="fab fa-facebook"></i></li>
                    </ul>
                </div>
            </div>
            <div class="footer_down">
                <div class="copywrite">
                    <h6>سياسة | الخصوصيه</h6>
                    <h6> س.ت1010032246.اونلاين س.ت 1010654213&copy;جميع الحقوق محفوظة لمكتبة جرير </h6>
                </div>
                <div class="cash">
                    <img src="../app/assets/image/category.png">
                </div>
            </div>
        </footer>

    </div>
    <script>
        // Get the modal
        var modal = document.getElementById("myModal");
        var modal2 = document.getElementById("modlesign");

        // Get the button that opens the modal
        var btn = document.getElementById("mybtn");
        var btn2 = document.getElementById("creat_ac");
        var btn3 = document.getElementById("sigbtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function () {
            modal.style.display = "block";
        }

        btn2.onclick = function () {
            modlesign.style.display = "block";
        }
        btn3.onclick = function () {
            modlesign.style.display = "none";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        window.onclick = function (event) {
            if (event.target == modal2) {
                modal2.style.display = "none";
            }
        }
        /*search filter*/
        function filter() {
            var fvalue, inputt, bookt, b, i, books;
            inputt = document.getElementById("search");
            fvalue = document.getElementById("search").value.toUpperCase();
            bookt = document.getElementById("bookt");
            books = document.getElementById("books");
            b = books.getElementsByClassName('bookstype');
            for (i = 0; i < b.length; i++) {
                var a = b[i].getElementsByTagName('h5')[i];
                if (a.textContent.toUpperCase().indexOf(fvalue) > -1) {
                    bookt.style.display = "block"
                } else {
                    bookt.style.display = "none"
                }
            }
        }

        /*******count*/
        var cookicount = 0;
        function add() {
            cookicount = cookicount + 1;
            document.getElementById("count").innerHTML = cookicount;

        }


    </script>
</body>

</html>