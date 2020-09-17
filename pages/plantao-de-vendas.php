<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Plantão de vendas - Rafael Maciel</title>

        <?php require_once __DIR__ . "/../fragments/cases-includes.php"; ?>

    </head>
    <body>
        <?php require_once __DIR__ . "/../fragments/cases-header.php"; ?>


        <section class="flex bg-white mx-1" style="padding-top: 189px; margin-bottom: 150px;">
            <div class="gilroy-regular text-grey-3">
                WEEKLY NEWS WEBSITE
            </div>
            <h2 class="big-title argent-cf-regular text-blue-9 my-1">
                Plantão de Vendas
            </h2>
            <div class="mb-2">
                Plantão de Vendas is a weekly news website for Embratel's sales team.
            </div>
            <img src="/rafael-maciel/assets/images/plantao-de-vendas/plantao_hero.png" style="margin-bottom: -150px;">
        </section>

        <section class="flex row space-evenly align-start">
            <div class="col-3">
                <h3 class='text-blue-9 gilroy-bold'>Challenge</h3>
                <p>To engage the sales team members with the company.</p>
            </div>
            <div class="col-3">
                <h3 class='text-blue-9 gilroy-bold'>My role</h3>
                <p>Desk Research, Persona, User Journey Map, Product Strategy, Kpi Definition, Information Architecture, User Interface, Style Guide.</p>
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

            <div class="flex width-1080 row space-between align-start pt-3">
                <div class="col-6 pr-3 pt-1">
                    <h3 class='text-blue-9 medium-title letter-045'>Desired <br> Content</h3>
                    <p>
                        The big challenge was how to engage so many different people with the website. Sales members are very different from each other, considering age, sex, culture and even practice area.
                        The answer is: they all want to improve their career and sale more.
                        So I’ve started to analyze their Linkedin profiles to find common skills and interests. The result was:
                    </p>
                    <hr>
                    <p>
                        Graduation: Administration, Marketing or Business.
                    </p>
                    <hr>
                    <p>
                        Skills: Leadership, Negotiation, Sales, Management, Pre and post-sale, general technology subjects.
                    </p>

                </div>
                <div class="col-6">
                    <img src="/rafael-maciel/assets/images/plantao-de-vendas/plantao_research1.png" alt="">
                </div>

            </div>
        </section>

        <section class="flex bg-white mx-1 pt-2 pb-4 mt-2">
            <h4 class="bordered-title">PERSONA</h4>

            <div class="flex width-1080">
                <div class="col-12">
                    <h2 class='medium-title text-blue-9'>
                        João Paulo
                        <small class='text-grey-3 small-title block gilroy-regular'>
                            SALES MANAGER
                        </small>
                    </h2>
                </div>

                <div class="col-12">
                    <div class="flex row">
                        <div class="col-4 argent-cf-bold normal-title letter-045 text-blue-9 ">
                            “If you understand how to negotiate, your life will be prosperous”.
                        </div>
                        <div class="col-5 pl-1">
                            <span class='small-title'>ABOUT</span>
                            <p>
                                Age: 35 <br>
                                Income: Medium / High <br>
                                Technology Proficiency: Medium <br>
                                Favorite Brands: Trello, Apple. <br>
                            </p> 
                        </div>

                    </div>
                </div>

                <div class="col-12 pt-1">                    
                    <span class='small-title'>CORE NEEDS</span>
                    <div class="flex row gap-md align-stretch mt-14">
                        <div class="col-3 bg-blue-9 text-white p-1">
                            I want to improve my career.
                        </div>
                        <div class="col-3 bg-blue-9 text-white p-1">
                            I have to know very well about Embratel’s products.
                        </div>
                        <div class="col-3 bg-blue-9 text-white p-1">
                            I have to increase my sales number.
                        </div>
                        <div class="col-3 bg-blue-9 text-white p-1 position-relative">
                            <img class='img-top' style="margin-top: -264px;" src="/rafael-maciel/assets/images/plantao-de-vendas/plantao_persona.png">
                            I have to feel confident about my sales techniques.
                        </div>

                    </div>
                </div>

                <div class="col-12 pt-1">                    
                    <p class='small-title'>USER PSYCHOLOGY</p>
                    <p style="font-size: 14px;">
                        MOTIVATION . BELONGING
                        <b style="font-size: 17px;" class='argent-cf-bold-italic ml-1'>“I want to be the top sales member of the company“.</b>
                    </p>
                </div>

            </div>
        </section>

        <section class='flex pt-4 pb-4 mt-2'> 
            <h4 class="bordered-title">USER JOURNEY MAP</h4>

            <div class="flex width-1080">
                <table class='table-1 mt-3'>
                    <thead>
                        <tr>
                            <th>STAGES</th>
                            <th class='col-3'>1. RECEIVING THE EMAIL WITH THE WEBSITE LINK</th>
                            <th class='col-3'>2. VISITING PLANTÃO DE VENDAS</th>
                            <th class='col-3'>3. PUTTING KNOWLEDGE INTO ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>MOOD</td>
                            <td>Concentrated</td>
                            <td>Open minded.</td>
                            <td>Open minded.</td>
                        </tr>
                        <tr>
                            <td>DOING</td>
                            <td>Working at Embratel.</td>
                            <td>Working at Embratel.</td>
                            <td>Visiting the clients.</td>
                        </tr>
                        <tr>
                            <td>THINKING</td>
                            <td>
                                <p>Am I interested in the content?</p>
                                <p>Should I take a quick look?</p>
                                <p>Is it really important for me? <br> I have a lot of work to do.</p>
                                 
                            </td>
                            <td>What will I read now, save for reading later or disconsider?</td>
                            <td>What did I learn that can be used to help me deal with my clients?</td>
                        </tr>
                        <tr>
                            <td>OPPORTUNITIES</td>
                            <td class='text-green'>To show exactly what the user will see in Plantão de Vendas and how long will take to read the articles.</td>
                            <td class='text-green'>To provide content related to the graduation and common skills based in the user research.
                                To share real examples of successful sales, recommend books, podcasts, bootcamps, courses. To make interviews with Embratel professionalsand encourage them to generate content.</td>
                            <td class='text-green'>To try to make, in every post, a paragraph with a conclusion that brings the subject close to the reality of the company.</td>
                        </tr>
                    </tbody>

                </table>

            </div>
        </section>

        <a name='principles' class='map-cases-menu'>
            02 - Principles
        </a>
        <section class="flex bg-grid pt-1 pb-4 mt-2">
            <h2 class='text-blue-9 big-title argent-cf-bold text-center my-2'>
                02 <br>
                <small class='text-blue-9 argent-cf-bold'>Principles</small>
            </h2>
            <div class="line-art"></div>
        </section>

        <section class='flex bg-blue-9 mx-1'>
            <div class="width-1080 py-4">
                <p>
                    <small class='text-blue-1'>VALUE PROPOSITION</small>
                    <h3 class='text-white normal-title'>Plantão de Vendas helps Embratel’s sales team members to improve their professional career.</h3>                
                </p>
                <p class='mt-3'>
                    <small class='text-blue-1'>WHAT MAKES USERS LOVE IT</small>
                    <h3 class='text-white normal-title'>The company selects content for them, based in skills that they need to develop to grow inside the company and in their career.</h3>
                </p>
                <p class='mt-3'>
                    <small class='text-blue-1'>PRODUCT MAIN GOAL</small>
                    <h3 class='text-white normal-title'>To create a learning culture in the company.</h3>
                </p>
            </div>
        </section>

        <section class='flex pt-2 pb-4'>
            <h4 class="bordered-title">KPIS</h4>

            <h2 class='gilroy-bold text-blue-9 normal-title my-2 flex row'>
                <img src="/rafael-maciel/assets/images/icons/measure.png">
                How to measure success?
            </h2>

            <div class="flex row align-stretch space-center">
                <div class="col-2 bg-white mr-1 p-1">
                    Increase engagement.
                    (time spent in Plantão de Vendas website).
                </div>
                <div class="col-2 bg-white p-1">
                    Increase engagement.
                    (time spent in Plantão de Vendas website).
                </div>
            </div>


        </section>

        <a name='user-interface' class='map-cases-menu'>
            03 - User Interface
        </a>
        <section class="flex bg-grid pt-1 pb-4 mt-2">
            <h2 class='text-blue-9 big-title argent-cf-bold text-center my-2'>
                03 <br>
                <small class='text-blue-9 argent-cf-bold'>User Interface</small>
            </h2>
            <div class="line-art"></div>
        </section>

        <section class='flex pt-2 pb-4'>
            <h4 class="bordered-title mb-3">HOME</h4>

            <img src="/rafael-maciel/assets/images/plantao-de-vendas/plantao_ui1.png">
        </section>

        <section class='flex pt-2 pb-4'>
            <h4 class="bordered-title mb-3">ARTICLE</h4>

            <img src="/rafael-maciel/assets/images/plantao-de-vendas/Interna.png">
        </section>

        <section class='flex pt-3 pb-4 bg-white mx-1'>
            <h4 class="bordered-title">EMAIL MARKETING</h4>

            <div class="flex row mt-3 align-start space-around">
                <div class="col-5">
                    <img src="/rafael-maciel/assets/images/plantao-de-vendas/plantao_ui3.png">
                </div>
                <div class="col-4 pt-2">
                    <p>
                        01. Email Marketing <br>
                        In every new edition, an e-mail marketing is sent to the sales team with articles headlines and reading time, thus users are stimulated to access the website even if they have just few time.  

                    </p>
                    <p>
                        02. Value Proposition <br>
                        Value proposition is the first element of the content, right after the main title. Therefore users can see what to expect.

                    </p>
                    <p>
                        03. Career Section <br>
                        The career section of the newsletter and website has a content curatorship based in user interests that were discovered at the early stage research.

                    </p>
                    <p>
                        04. UI <br>
                        Embratel is one of the biggest technology companies in Brazil. Their practice areas are Cloud Computing, IOT, Security, Hosting and Internet. The wired globe represents connectivity. There are a lot of colored strokes and glowing elements that represent lights and give a sensation of speed.

                    </p>
                </div>
            </div>

        </section>

        <section class='flex pt-3 pb-4'>
            <h4 class="bordered-title">STYLE GUIDE</h4>

            <div class="flex width-1080 row space-evenly align-start mt-3">
                <div class="col-3">
                    <nav class="style-guide">
                        <header class='gilroy-bold'>Colors</header>
                        
                        <ul class='gilroy-medium pl-none mt-1'> 
                            <span>Interface color palette</span>
                            <img src="/rafael-maciel/assets/images/plantao-de-vendas/pallet-color.png">
                        </ul>

                        <header class='gilroy-bold mt-2'>TYPOGRAPHY</header>
                        
                        <ul class='gilroy-medium pl-none mt-1'> 
                            <img src="/rafael-maciel/assets/images/plantao-de-vendas/plantao_sg_font.png">
                        </ul>
                    </nav>
                </div>
                <div class="col-3">
                    <nav class="style-guide">
                        <header class='gilroy-bold'>ELEMENTS</header>
                        
                        <ul class='gilroy-medium pl-none mt-1'> 
                            <span>Navigation Items</span>
                            <img src="/rafael-maciel/assets/images/plantao-de-vendas/navigation-items.png">
                        </ul>
                    </nav>
                </div>
                <div class="col-3">
                    <nav class="style-guide">
                        <header class='gilroy-bold'>ICONS</header>
                        
                        <ul class='gilroy-medium pl-none mt-1'> 
                            <img src="/rafael-maciel/assets/images/plantao-de-vendas/icons.png">
                        </ul>
                    </nav>
                </div>
            </div>

        </section>


        <a name='final-words' class='map-cases-menu'>
            04 - Final Words
        </a>
        <section class="flex bg-grid pt-1 pb-4 mt-2 mx-none">
            <h2 class='text-blue-9 big-title argent-cf-bold text-center my-2'>
                04 <br>
                <small class='text-blue-9 argent-cf-bold'>Final Words</small>
            </h2>
            <div class="line-art"></div>
        </section>

        <section class="flex mt-3 pb-4">
            <div class="flex width-1080 row space-center">
                <div class="col-8">
                    The interesting part of this project was that there wasn't any budget to do user research and it's something I always encourage to do, after all, I'm a user centered designer.  The challenge was that there were many types of users, considering sex, age and interests, but at the end, I could deal with it, when I found a way to discover common interests with relevance for them and for the company goals, which was looking at users Linkedin profiles and looking for patterns.
                </div>
            </div>
        </section>


        <?php require_once __DIR__ . "/../fragments/cases-footer.php"; ?>


    </body>
</html>