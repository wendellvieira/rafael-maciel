<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>University of Virginia - Rafael Maciel</title>

        <?php require_once __DIR__ . "/../fragments/cases-includes.php"; ?>

    </head>
    <body>
        <?php require_once __DIR__ . "/../fragments/cases-header.php"; ?>

        <section class="flex bg-white mx-1" style="padding-top: 189px; margin-bottom: 150px;">
            <div class="gilroy-regular text-grey-3">
                LIBRARY WEBSITE
            </div>
            <h2 class="big-title argent-cf-regular text-blue-9 my-1">
                University of Virginia 
            </h2>
            <div class="mb-2">
                Redesign of the University of Virginia library website
            </div>
            <img src="/rafael-maciel/assets/images/university-of-virginia/uvl_hero.png" style="margin-bottom: -150px;">
        </section>

        <section class="flex row space-evenly align-start">
            <div class="col-3">
                <h3 class='text-blue-9 gilroy-bold'>Challenge</h3>
                <p>Website redesign. <br>
                    This project was done during the Aela’s Master of Interface Design bootcamp.</p>
            </div>
            <div class="col-3">
                <h3 class='text-blue-9 gilroy-bold'>My role</h3>
                <p>User Research (Survey), Persona, 
                    Old Website Analysis, Information Architecture, User Interface, Style Guide.</p>
            </div>
        </section>


        <section class='bg-grey-1 mt-4 mx-1 flex pt-2 pb-4'>
            <h4 class="bordered-title">KPIS</h4>

            <h2 class='gilroy-bold text-blue-9 normal-title my-2 flex row'>
                <img src="/rafael-maciel/assets/images/icons/measure.png">
                How to measure success?
            </h2>

            <div class="flex row align-stretch space-center">
                <div class="col-3 bg-white mr-1 p-1">
                    Increase engagement. 
                    (time spent in the library website).
                </div>
                <div class="col-3 bg-white p-1">
                    Increase rate of return.
                </div>
            </div>
        </section>

        <a name='meeting-the-user' class='map-cases-menu'>
            01 - Meeting the user
        </a>
        <section class="flex bg-grid pt-1 pb-4 mt-2">
            <h2 class='text-blue-9 big-title argent-cf-bold text-center my-2'>
                01 <br>
                <small class='text-blue-9 argent-cf-bold'>Meeting the user</small>
            </h2>
            <div class="line-art"></div>
        </section>

        

        <section class="flex pt-2 pb-4">
            <h4 class="bordered-title">EARLY STAGE RESEARCH</h4>

            <div class="flex container row space-evenly align-start gap-md pt-3" >        
                <div class="col-2" style='padding-top: 15%;'>
                    <h2 class='gilroy-regular text-blue-9 normal-title'>
                        User<br>
                        Needs
                    </h2>
                </div>
                <div class="col-8">
                    <img class='col-12' src="/rafael-maciel/assets/images/university-of-virginia/Grafico.png">
                </div>
                <div class="col-2 text-center" style='padding-top: 15%;'>
                    <img src="/rafael-maciel/assets/images/university-of-virginia/survey_monkey_brand.png"><br/>
                    <span class='small-title'>Survey Monkey</span>
                </div>
            </div>

            <div class="grid container col-gap-lg row-gap-xl small-title text-blue-9 mt-14">
                <div class="col-3 text-normal border-top-green">
                    To access the library archive (books, academic works etc.)
                </div>
                <div class="col-3 text-normal border-top-green">
                    To reserve books.
                </div>
                <div class="col-3 text-normal border-top-yellow">
                    To book a study room at the library.
                </div>
                <div class="col-3 text-normal border-top-yellow">
                    To check the latest news and events.
                </div>
                <div class="col-3 text-disabled text-normal border-top-gray">
                    To send files for printing.
                </div>
                <div class="col-3 text-disabled text-normal border-top-gray">
                    To organize study groups.
                </div>
                <div class="col-3 text-disabled text-normal border-top-gray">
                    To look for job opportunities.
                </div>
            </div>

        </section>

        <section class="flex mx-1 bg-white pt-2 pb-4 mt-2">
            <h4 class="bordered-title">PERSONA</h4>

            <div class="flex container ">
                <div class="col-12">
                    <h2 class='medium-title text-blue-9'>
                        Simon
                        <small class='text-grey-3 small-title block gilroy-regular'>
                            COLLEGE STUDENT
                        </small>
                    </h2>
                </div>

                <div class="col-12">
                    <div class="flex row">
                        <div class="col-4 argent-cf-regular normal-title letter-045 text-blue-9 ">
                            “College is definitely the most important stage of my life”.
                        </div>
                        <div class="col-5 pl-1">
                            <span class='small-title'>ABOUT</span>
                            <p>
                                Age: 21 <br>
                                Income: Low <br>
                                Technology Proficiency: High <br>
                                Favorite Brands: Apple, Google, Spotify. <br>
                            </p> 
                        </div>

                    </div>
                </div>

                <div class="col-12 pt-1">                    
                    <span class='small-title'>CORE NEEDS</span>
                    <div class="flex row gap-md align-stretch mt-14">
                        <div class="col-3 bg-blue-9 text-white p-1">
                            To make an online research in library archives.
                        </div>
                        <div class="col-3 bg-blue-9 text-white p-1">
                            To find out about study groups and meet ups.
                        </div>
                        <div class="col-3 bg-blue-9 text-white p-1">
                            To book a study room at the library.
                        </div>
                        <div class="col-3 bg-blue-9 text-white p-1 position-relative">
                            <img class='img-top' style="margin-top: -351px;" src="/rafael-maciel/assets/images/university-of-virginia/uvl_persona.png">
                            To borrow and reserve books.
                        </div>

                    </div>
                </div>

                <div class="col-12 pt-1">                    
                    <p class='small-title'>USER PSYCHOLOGY</p>
                    <p style="font-size: 14px;">
                        MOTIVATION . BELONGING
                        <b style="font-size: 17px;" class='argent-cf-bold-italic ml-1'>“I’m a student engaged with college, following the news, events etc.“.</b>
                    </p>
                </div>

            </div>
        </section>

        <a name='old-website-analysis' class='map-cases-menu'>
            02 - Old Website Analysis
        </a>
        <section class="flex bg-grid pt-1 pb-4 mt-2">
            <h2 class='text-blue-9 big-title argent-cf-bold text-center my-2'>
                02 <br>
                <small class='text-blue-9 argent-cf-bold'>Old Website Analysis</small>
            </h2>
            <div class="line-art"></div>
        </section>
        
        <section class="flex pt-2 pb-4 bg-white mx-1">
            <h4 class="bordered-title">ISSUES</h4>

            <div class="flex container row space-between align-start pt-3">
                <div class="col-6 pl-2 pr-3">
                    <span class='small-title'>ZOOM <img src="/rafael-maciel/assets/images/university-of-virginia/zoom.png" alt=""></span>
                    <img src="/rafael-maciel/assets/images/university-of-virginia/uvl_wireframe.png" class='mt-1'>
                </div>
                <div class="col-6 px-3 pt-1">
                    <p>
                        01. Contrast and Hierarchy <br>
                        It’s not defined. It has a ton of information with same weight and in a tight space.
                    </p>
                    <p>
                        02. Navigation <br>
                        The primary menu (About the Library, Research etc.) has items that users don’t think are useful.
                    </p>    
                    <p>
                        03. Missing Information <br>
                        Some useful information, like operating hours, is missing, or not easy to find, like phone, email, and chat.
                    </p>    
                </div>
            </div>
        </section>

        
        <a name='user-interface' class='map-cases-menu'>
            03 - User Interface
        </a>
        <section class="flex bg-grid pt-1 pb-4">
            <h2 class='text-blue-9 big-title argent-cf-bold text-center my-2'>
                03 <br>
                <small class='text-blue-9 argent-cf-bold'>User Interface</small>
            </h2>
            <div class="line-art"></div>
        </section>

        <section class="flex pt-2 pb-4 mt-2">
            <h4 class="bordered-title">HOME</h4>
            <div class="flex pt-3">
                <img src="/rafael-maciel/assets/images/university-of-virginia/Exercicio3_Nivel1_UVL09.png">
            </div>
        </section>

        <section class="flex pt-2 pb-4 mt-2">
            <h4 class="bordered-title">EXPANDED MENU</h4>
            <div class="flex pt-3">
                <img src="/rafael-maciel/assets/images/university-of-virginia/Home_Menu_Expandido.png">
            </div>
        </section>

        <section class="flex pt-2 pb-4 mt-2">
            <h4 class="bordered-title">EXPANDED SEARCH</h4>
            <div class="flex pt-3">
                <img src="/rafael-maciel/assets/images/university-of-virginia/Home_Busca_Expandida–2.png">
            </div>
        </section>
        
        <section class="flex bg-white pt-2 pb-4">
            <h4 class="bordered-title">IMPROVENT</h4>

            <div class="flex container row space-between align-start pt-3">
                <div class="col-6">
                    <img src="/rafael-maciel/assets/images/university-of-virginia/Grupo-de-máscara-3.png" alt="">
                </div>
                <div class="col-6 px-3 pt-1">
                    <p>
                        01. Navigation<br>
                        Navigation was structured by the Search as a primary navigation, where users are encouraged to access all the library content (books, academic works, articles, etc.) and a hamburger menu as a secondary navigation, with access to all other library services. They’re both fixed in the website, so the user can reach them anytime and anywhere.

                    </p>
                    <p>
                        02. Information Box <br>
                        Operating hours, phone and address are the most required information for new students or those who don’t visit the library so much. It’s one of the main reasons to access the website. Everyday students, at least, want to know if the library is open or not. That’s why it’s a primary information in the website cover.
                    </p>
                    <p>
                        03. News <br>
                        The next content is News & Events. Even if many students are not quite interested in this information, it says that the website is being updated frequently.
                    </p>
                    <p>
                        04. Colors and UI Delight <br>
                        Instead of explaining the use of the brand colors, contrasts and hierarchy, I’d love to say that adding some colors inspired by the beautiful exterior of the library in the color palette was a delightful part of the UI. By the way, it was something that came in my mind from the beggining of the project, to try to transpose the library building in the UI.
                     </p>
                </div>
            </div>
        </section>

        <section class='flex pt-3 pb-4'>
            <h4 class="bordered-title">STYLE GUIDE</h4>

            <div class="flex container row space-evenly align-start pt-3">
                <div class="col-3">
                    <nav class="style-guide">
                        <header class='gilroy-bold'>Colors</header>
                        
                        <ul class='gilroy-medium pl-none mt-1'> 
                            <span>Interface color palette</span>
                            <img src="/rafael-maciel/assets/images/university-of-virginia/paleta_de_cores.png">
                        </ul>

                        <header class='gilroy-bold mt-2'>TYPOGRAPHY</header>
                        
                        <ul class='gilroy-medium pl-none mt-1'> 
                            <img src="/rafael-maciel/assets/images/university-of-virginia/fontes.png">
                        </ul>
                    </nav>
                </div>
                <div class="col-3">
                    <nav class="style-guide">
                        <header class='gilroy-bold'>ELEMENTS</header>
                        
                        <ul class='gilroy-medium pl-none mt-1'> 
                            <span>Primary button</span>
                            <img src="/rafael-maciel/assets/images/university-of-virginia/uvl_sg_primarybutton.png">
                        </ul>

                        <ul class='gilroy-medium pl-none mt-1'> 
                            <span>Secondary button</span>
                            <img src="/rafael-maciel/assets/images/university-of-virginia/secondary_buttons.png">
                        </ul>

                        <ul class='gilroy-medium pl-none mt-1'> 
                            <span>Form field</span>
                            <img src="/rafael-maciel/assets/images/university-of-virginia/uvl_sg_formfield.png">
                        </ul>

                        <ul class='gilroy-medium pl-none mt-1'> 
                            <span>Form button</span>
                            <img src="/rafael-maciel/assets/images/university-of-virginia/uvl_sg_formbutton.png">
                        </ul>
                        
                        <ul class='gilroy-medium pl-none mt-1'> 
                            <span>Image with subtitle</span>
                            <img src="/rafael-maciel/assets/images/university-of-virginia/uvl_sg_imgwithsub.png">
                        </ul>
                    </nav>
                </div>
                <div class="col-3">
                    <nav class="style-guide">
                        <header class='gilroy-bold'>ICONS</header>
                        
                        <ul class='gilroy-medium pl-none mt-1'> 
                            <img src="/rafael-maciel/assets/images/university-of-virginia/icons.png">
                        </ul>
                    </nav>
                </div>
            </div>

        </section>
        

        <a name='final-words' class='map-cases-menu'>
            04 - Final Words
        </a>
        <section class="flex bg-grid pt-1 pb-4 mt-2">
            <h2 class='text-blue-9 big-title argent-cf-bold text-center my-2'>
                04 <br>
                <small class='text-blue-9 argent-cf-bold'>Final Words</small>
            </h2>
            <div class="line-art"></div>
        </section>

        <section class="flex mt-3 pb-4">
            <div class="flex container row space-center">
                <div class="col-8">
                    One of the most interesting topics about this project was to give a big highlight to the search field. The basic users needs were simple, to know operating hours, to book a room and many more. However, encourage users to access the entire collection from the search field is something that can help their studies, researches and their own projects and it's something that goes deeper in their lives.
                </div>
            </div>
        </section>

        <?php require_once __DIR__ . "/../fragments/cases-footer.php"; ?>


    </body>
</html>