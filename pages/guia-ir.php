<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Guia IR - Rafael Maciel</title>

        <?php require_once __DIR__ . "/../fragments/cases-includes.php"; ?>

</head>
<body>
    <?php require_once __DIR__ . "/../fragments/cases-header.php"; ?>

        <section class="container bg-white mx-1" style="padding-top: 189px; margin-bottom: 150px;">
            <div class="gilroy-regular text-grey-3">
                TAX PAYMENT GUIDE WEBSITE
            </div>
            <h2 class="big-title argent-cf-regular text-blue-9 my-1">
                Guia IR
            </h2>
            <div class="mb-2 text-center letter-045">
                Guia IR Icatu Seguros is a website that teaches more than 6.5 millions of Icatu Seguro's clients <br> how to pay their taxes.
            </div>
            <img src="/rafael-maciel/assets/images/guia-ir/guiair_hero.png" style="margin-bottom: -150px;">
        </section>

        <section class="container row space-evenly align-start">
            <div class="col-3">
                <h3 class='text-blue-9 gilroy-bold'>Challenge</h3>
                <p>To create an easy to follow payment taxes guide.</p>
            </div>
            <div class="col-3">
                <h3 class='text-blue-9 gilroy-bold'>My role</h3>
                <p>Data Audit, Persona, Stakeholder Interview, Information Architecture, User Interface, Style Guide.</p>
            </div>
        </section>

        <a name='meeting-the-user' class='map-cases-menu'>
            01 - Meeting the user
        </a>
        <section class="container bg-grid pt-1 pb-4 mt-4">
            <h2 class='text-blue-9 big-title argent-cf-bold text-center my-2'>
                01 <br>
                <small class='text-blue-9 argent-cf-bold'>Meeting the user</small>
            </h2>
            <div class="line-art"></div>
        </section>


        <section class="container bg-white pt-2 pb-4 mx-1">
            <h4 class="bordered-title">PERSONA</h4>

            <div class="container width-1080">
                <div class="col-12">
                    <h2 class='medium-title text-blue-9'>
                        Marcos
                    </h2>
                </div>

                <div class="col-12">
                    <div class="container row">
                        <div class="col-4 argent-cf-bold normal-title letter-045 text-blue-9 ">
                            "I want to fill my taxes form as fast as possible".
                        </div>
                        <div class="col-5 pl-1">
                            <span class='small-title'>ABOUT</span>
                            <p>
                                Age: 20 - 70 <br>
                                Income: More than R$ 1.903,98 / month <br>
                                Technology Proficiency: All levels. <br>
                            </p> 
                        </div>

                    </div>
                </div>

                <div class="col-12 pt-1">                    
                    <span class='small-title'>CORE NEEDS</span>
                    <div class="container row gap-md align-stretch mt-14">
                        <div class="col-3 bg-blue-9 text-white p-1">
                            I don't want to lose so much time.
                        </div>
                        <div class="col-3 bg-blue-9 text-white p-1">
                            I'm afraid to fill the taxes form with any wrong information.
                        </div>
                        <div class="col-3 bg-blue-9 text-white p-1">
                            Filling the taxes form could be easier.
                        </div>
                        <div class="col-3 bg-blue-9 text-white p-1 position-relative">
                            <img class='img-top' style="margin-top: -315px;" src="/rafael-maciel/assets/images/guia-ir/guiair_persona.png">
                            To feel confident while filling the form.
                        </div>

                    </div>
                </div>

            </div>
        </section>

        <section class='container pt-3 pb-4'> 
            <h4 class="bordered-title">USER JOURNEY MAP</h4>

            <div class="container  width-1080">
                <table class='table-1 mt-3'>
                    <thead>
                        <tr>
                            <th>FILLING THE 
                                TAXES FORM</th>
                            <th class='col-6'>1. FROM DESKTOP AND <br> FOLLOWING INSTRUCTIONS <br> FROM A BROWSER TAB </th>
                            <th class='col-6'>2. FROM DESKTOP AND <br> FOLLOWING INSTRUCTIONS FROM <br> A MOBILE PHONE OR TABLET.</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>MOOD</td>
                            <td>Bored and doubtful.</td>
                            <td>Bored and doubtful.</td>
                        </tr>
                        <tr>
                            <td>DOING</td>
                            <td>Filling the taxes form of all <br> their investments, including <br>  Icatu Seguros ones, from home <br> computer.</td>
                            <td>Filling the taxes form <br> from home computer and with <br> cellphone in hands.</td>
                        </tr>
                        <tr>
                            <td>THINKING</td>
                            <td>I just want to finish to fill my <br> taxes form as soon as possible <br> and without doing anything <br> wrong.</td>
                            <td>Following the guide from my <br> cellphone must be easy.</td>
                        </tr>
                        <tr>
                            <td>OPPORTUNITIES</td>
                            <td class='text-green'>To show custom instructions, <br> straight to the point, <br> considering the Icatu Seguros <br> investments that the user have.</td>
                            <td class='text-green'>To provide the easier experience <br> as possible to the user, <br> considering that he's with one <br> hand in the cellphone while <br> filling the taxes form at the <br> desktop computer.</td>
                        </tr>
                    </tbody>

                </table>

            </div>            
        </section>

        <section class="container py-4">
            <h4 class='bordered-title mb-3'>STAKEHOLDER MAP</h4>
            <img src="/rafael-maciel/assets/images/guia-ir/guiair_stakeholdermap.png">

            <div class="container row space-evenly align-start width-1080 mt-3">
                <div class="col-3">
                    <h3 class='text-blue-9 mb-14'>Clients</h3>
                    <p>Wants an easy and fast way to <br> fill their taxes form.</p>
                </div>
                <div class="col-3">
                    <h3 class='text-blue-9 mb-14'>Call Center</h3>
                    <p>Wants to reduce the number of <br> clients calling for instructions.</p>
                </div>
                <div class="col-3">
                    <h3 class='text-blue-9 mb-14'>Insurance Broker</h3>
                    <p>Wants to reduce the number of <br> clients asking for instructions.</p>
                </div>
            </div>
        </section>

        

        <a name='principles' class='map-cases-menu'>
            02 - Principles
        </a>
        <section class="container bg-grid pt-1 pb-4 mt-2">
            <h2 class='text-blue-9 big-title argent-cf-bold text-center my-2'>
                02 <br>
                <small class='text-blue-9 argent-cf-bold'>Principles</small>
            </h2>
            <div class="line-art"></div>
        </section>

        <section class='container bg-blue-9'>
            <div class="width-1080 py-4">
                <p>
                    <small class='text-blue-1'>VALUE PROPOSITION</small>
                    <h3 class='text-white normal-title'>Guia IR teaches Icatu Seguros clients how to fill their taxes form, in a easy, secure and fast way.</h3>                
                </p>
                <p class='mt-3'>
                    <small class='text-blue-1'>WHAT MAKES USERS LOVE IT</small>
                    <h3 class='text-white normal-title'>Because it's straight to the point and friendly.</h3>
                </p>
                <p class='mt-3'>
                    <small class='text-blue-1'>PRODUCT MAIN GOAL</small>
                    <h3 class='text-white normal-title'>To make the process of filling the taxes form of <br> Icatu Seguros investments easy and safe, for their <br> 6.5 millions clients with all level of technology <br> proficiency. </h3>
                </p>
            </div>
        </section>

        <section class="container pt-3 pb-4">
            <h4 class='bordered-title'>KPIS</h4>

            <div class="container row mt-3">
                <img src="/rafael-maciel/assets/images/guia-ir/foguete.png" >
                <h3 class='text-blue-9 gilroy-bold normal-title m-none'>
                    How to measure success?
                </h3>
            </div>
            
            <div class="container row space-center gap-lg align-stretch mt-2">
                <div class="bg-white col-3 p-1">
                    <p>Reduce calls to the call center asking for help about filling the taxes form.</p>
                </div>
                <div class="bg-white col-3 p-1">
                    <p>Save time to perform tasks (fill taxes form).</p>
                </div>
            </div>
        </section>

        <a name='site-map' class='map-cases-menu'>
            03 - Site Map
        </a>
        <section class="container bg-grid py-4">
            <h2 class='text-blue-9 big-title argent-cf-bold text-center my-2'>
                03 <br>
                <small class='text-blue-9 argent-cf-bold'>Site Map</small>
            </h2>
            <div class="line-art"></div>
        </section>

        <section class="container bg-white py-3 mx-1">
            <div class="container width-1080">
                <img src="/rafael-maciel/assets/images/guia-ir/guiair_sitemap.png" alt="">

                <div class="col-8 mt-2">
                    <p class="text-left">THREE STEP NAVIGATION</p>
                    <p>To provide the right instructions according to the investments that users have, they need to follow a  three step navigation:  </p>
                    <ol style='padding-left: 18px;'>
                        <li>Chooses the product that they have.</li>
                        <li>Check if they already have the needed documents or inform how to get them.</li>
                        <li>Chooses what kind of move they did during last year, which impacts on the instructions.</li>
                        <li>Finally access instructions.</li>
                    </ol>
                </div>
            </div>
        </section>

        <a name='user-interface' class='map-cases-menu'>
            04 - User Interface
        </a>
        <section class="container bg-grid pt-1 pb-4 mt-4">
            <h2 class='text-blue-9 big-title argent-cf-bold text-center my-2'>
                04 <br>
                <small class='text-blue-9 argent-cf-bold'>User Interface</small>
            </h2>
            <div class="line-art"></div>
        </section>

        <section class="container pt-3 pb-4">
            <h4 class='bordered-title'>MOBILE</h4>
            <p class='mt-3'>Home - Investment product selection</p>
            <div class="container gap-xl row align-center space-center">
                <img class='elevated-5' src="/rafael-maciel/assets/images/guia-ir/guiair_ui1.png" alt="">
                <img class='elevated-5' src="/rafael-maciel/assets/images/guia-ir/guiair_ui2.png" alt="">
            </div>

            <div class="container gap-xl row align-center space-center text-center mt-4">
                <div>
                    <p>User documents check</p>
                    <img class='elevated-5' src="/rafael-maciel/assets/images/guia-ir/guiair_ui3.png" alt="">
                </div>
                <div>
                    <p>Filter to give right instructions</p>
                    <img class='elevated-5' src="/rafael-maciel/assets/images/guia-ir/guiair_ui4.png" alt="">
                </div>
                <div>
                    <p>Instructions</p>
                    <img class='elevated-5' src="/rafael-maciel/assets/images/guia-ir/guiair_ui5.png" alt="">
                </div>
            </div>

        </section>


        <section class="container pt-3 pb-4">
            <h4 class='bordered-title'>DESKTOP</h4>
            
            <p class="mt-3">Home - Investment product selection</p>
            <img class='elevated-5' src="/rafael-maciel/assets/images/guia-ir/guiair_ui6.png" alt="">
            
            <div class="container gap-xl row align-start space-center text-center mt-4">
                <div>
                    <p>User documents check</p>
                    <img class='elevated-5' src="/rafael-maciel/assets/images/guia-ir/guiair_ui7.png" alt="">
                </div>
                <div>
                    <p>Filter to give right instructions</p>
                    <img class='elevated-5' src="/rafael-maciel/assets/images/guia-ir/guiair_ui8.png" alt="">
                </div>
            </div>

            <p class='mt-4'>Instructions</p>
            <img class='elevated-5' src="/rafael-maciel/assets/images/guia-ir/guiair_ui9.png" alt="">
        </section>


        <div class="container pt-3 pb-4">
            <h4 class='bordered-title'>STYLE GUIDE</h4>
        </div>

        <section  class="container pt-3 pb-4 bg-blue">
            <div class="container width-1080 row space-evenly align-start mt-3 ">
                <div class="col-3">
                    <nav class="style-guide">
                        <header class='gilroy-bold text-white'>Colors</header>
                        
                        <ul class='gilroy-medium pl-none mt-1'> 
                            <span class="text-white">interface color palette</span>
                            <img src="/rafael-maciel/assets/images/guia-ir/paleta_cores.png">
                        </ul>

                        <header class='gilroy-bold text-white'>TYPOGRAPHY</header>
                        <ul class='gilroy-medium pl-none mt-1'> 
                            <img src="/rafael-maciel/assets/images/guia-ir/fonts.png">
                        </ul>
                    </nav>
                </div>
                <div class="col-3">
                    <nav class="style-guide">
                        <header class='gilroy-bold text-white'>ELEMENTS</header>
                        
                        <ul class='gilroy-medium pl-none mt-1'> 
                            <span class="text-white">Navigation Items</span>
                            <img src="/rafael-maciel/assets/images/guia-ir/guiair_sg_botao.png">
                        </ul>
                        <ul class='gilroy-medium pl-none mt-1'> 
                            <span class="text-white">OTHER</span>
                            <img src="/rafael-maciel/assets/images/guia-ir/guiair_sg_ilustracao.png">
                        </ul>
                    </nav>
                </div>
                <div class="col-3">
                    <nav class="style-guide">
                        <header class='gilroy-bold text-white'>ICONS</header>
                        <ul class='gilroy-medium pl-none mt-1'> 
                            <img src="/rafael-maciel/assets/images/guia-ir/guiair_sg_icone.png">
                        </ul>

                    </nav>
                </div>

            </div>
        </section>

        <a name='final-words' class='map-cases-menu'>
            05 - Final Words
        </a>
        <section class="container bg-grid pt-1 pb-4 mt-2">
            <h2 class='text-blue-9 big-title argent-cf-bold text-center my-2'>
                05 <br>
                <small class='text-blue-9 argent-cf-bold'>Final Words</small>
            </h2>
            <div class="line-art"></div>
        </section>

        <section class="container mt-3 pb-4">
            <div class="container width-1080 row space-center">
                <div class="col-8">
                    The most remarkable learning with this project was that users do not always expect to be delighted by the aesthetics of the product. When the user's need is to quickly complete a certain task, which he does not like to do, the best way to satisfy him is to provide the shortest, simplest and fastest experience possible.                </div>
            </div>
        </section>

        <?php require_once __DIR__ . "/../fragments/cases-footer.php"; ?>

    </body>
</html>