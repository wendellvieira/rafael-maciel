<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Luxury Cars - Rafael Maciel</title>

        <?php require_once __DIR__ . "/../fragments/cases-includes.php"; ?>

    </head>
    <body>
        <?php require_once __DIR__ . "/../fragments/cases-header.php"; ?>

        <section class="flex bg-white mx-1" style="padding-top: 189px; margin-bottom: 150px;">
            <div class="gilroy-regular text-grey-3">
                ONLINE LUXURY CAR RENTING SERVICE
            </div>
            <h2 class="big-title argent-cf-regular text-blue-9 my-1">
                Luxury Cars
            </h2>
            <div class="mb-2 text-center">
                Luxury cars is an online service that offers the best cars for renting.             
            </div>
            <img src="/rafael-maciel/assets/images/luxury-cars/luxurycars_hero.png" style="margin-bottom: -150px;">
        </section>

        <section class="flex row space-evenly align-start">
            <div class="col-3">
                <h3 class='text-blue-9 gilroy-bold'>Challenge</h3>
                <p>To create strategy and prototype of a car rental service website. <br>
                    This project was done during the Aela’s Master of Interface Design bootcamp.</p>
            </div>
            <div class="col-3">
                <h3 class='text-blue-9 gilroy-bold'>My role</h3>
                <p>Service Design, User Research (Survey, Exploratory Research, Stakeholder Interviews), Persona, User Journey Map, Product Strategy, Information Architecture, User Interface, Style Guide.</p>
            </div>
        </section>

        <a name='meeting-the-user' class='map-cases-menu'>
            01 - Meeting the user
        </a>
        <section class="flex bg-grid pt-1 pb-4 mt-4">
            <h2 class='text-blue-9 big-title argent-cf-bold text-center my-2'>
                01 <br>
                <small class='text-blue-9 argent-cf-bold'>Meeting the user</small>
            </h2>
            <div class="line-art"></div>
        </section>
        <section class="flex bg-white pt-2 pb-4 mx-1">
            <h4 class="bordered-title">PERSONA</h4>

            <div class="flex container">
                <div class="col-12">
                    <h2 class='medium-title text-blue-9'>
                        Christopher
                        <small class='text-grey-3 small-title block gilroy-regular'>
                            ENTERPREUNER
                        </small>
                    </h2>
                </div>

                <div class="col-12">
                    <div class="flex row">
                        <div class="col-4 argent-cf-bold normal-title letter-045 text-blue-9 ">
                            "I just want to live my dreams".
                        </div>
                        <div class="col-5 pl-1">
                            <span class='small-title'>ABOUT</span>
                            <p>
                                Age: 35 <br>
                                Income: Very high <br>
                                Technology Proficiency: High <br>
                                Favorite Brands: Rolex, Riva, Gucci. <br>
                            </p> 
                        </div>

                    </div>
                </div>

                <div class="col-12 pt-1">                    
                    <span class='small-title'>CORE NEEDS</span>
                    <div class="flex row gap-md align-stretch mt-14">
                        <div class="col-3 bg-blue-9 text-white p-1">
                            I want the specific car that I rented. Same model, color etc.
                        </div>
                        <div class="col-3 bg-blue-9 text-white p-1">
                            I can't lose my time renting the car or getting it.
                        </div>
                        <div class="col-3 bg-blue-9 text-white p-1">
                            I must be protected for car collision, robbery or other extra costs.
                        </div>
                        <div class="col-3 bg-blue-9 text-white p-1 position-relative">
                            <img class='img-top' style="margin-top: -347px;" src="/rafael-maciel/assets/images/luxury-cars/persona.png">
                            I could receive the car at the place and time that I want.
                        </div>

                    </div>
                </div>

                <div class="col-12 pt-1">                    
                    <p class='small-title'>USER PSYCHOLOGY</p>
                    <p style="font-size: 14px;">
                        MOTIVATION . BELONGING
                        <b style="font-size: 17px;" class='argent-cf-bold-italic ml-1'>“I have the privillege to drive the best cars of the world."</b>
                    </p>
                </div>

            </div>
        </section>

        <section class='flex pt-4 pb-4 mt-2'> 
            <h4 class="bordered-title mb-2">USER JOURNEY MAP</h4>

            <div class="flex container">
                <img class="align-end table-car" src="/rafael-maciel/assets/images/luxury-cars/table-car.png">
                <table class='table-1'>
                    <thead>
                        <tr>
                            <th>STAGES</th>
                            <th class='col-3'>1. SCHEDULLING A VACATION OR A BUSINESS TRIP</th>
                            <th class='col-3'>2. RENTING THE CAR</th>
                            <th class='col-3'>3. GETTING THE CAR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>MOOD</td>
                            <td>Excited.</td>
                            <td>Worried and with doubts.</td>
                            <td>Very excited.</td>
                        </tr>
                        <tr>
                            <td>DOING</td>
                            <td>Accessing the website from 
                                google, any advertisement or 
                                friend indication.</td>
                            <td>At home or at the office, in a 
                                computer or mobile device.</td>
                            <td>Receiving at the chosen place.</td>
                        </tr>
                        <tr>
                            <td>THINKING</td>
                            <td>
                                
                                <p>I want to have the greatest 
                                    vacation ever.
                                    </p>
                                <p>I will go to the meeting with 
                                    perfect clothes and an 
                                    impressive car.
                                    </p>
                                <p>I will search for the best deal 
                                    to rent the car.
                                    </p>
                                 
                            </td>
                            <td>
                                <p>I would like to rent the specific car that I choose. Same model and colour, not a similar car.</p>
                                <p>If I crash the car, would I have to pay a high cost to fix it?</p>
                                <p>Could they deliver the car at 
                                    the place and time that I 
                                    want?</p>
                            </td>
                            <td><p>Is the car exact the same that 
                                I rented?</p>
                            <p>I don't want to lose time 
                                getting the car.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>OPPORTUNITIES</td>
                            <td class='text-green'>Make marketing campaigns 
                                envolving real stories of great 
                                vacation or business trips.
                                </td>
                            <td class='text-green'>
                                Rent the specific car that the 
                                user choose (To make it 
                                happen, the cancelation will 
                                not be posible. Users answered 
                                that this is aceptable, 
                                because they are used to it 
                                when they're booking hotels).
                                <br> <br>
                                Include the taxes covering full 
                                protection.
                                <br> <br>
                                Offer a customized delivery 
                                option (discrete; romantic with chocolates for a dating couple; car brand fan - with souvenirs of the car brand).
                                <br>
                                
                            <td class='text-green'>
                                Customize anything that is 
                                posible with a message: Name 
                                of the driver, welcome aboard. 
                                It'd be nice to customize the 
                                start of the car media player. 
                                Because it's related to 
                                technology.
                                <br> <br>
                                Use QR codes to read vouchers or anything else to 
                                avoid losing time when getting the car.

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <section class='flex pt-4 pb-4 mt-2 bg-white mx-1'> 
            <h4 class="bordered-title">STAKEHOLDER KEYS</h4>

            <div class="flex row gap-xl container align-start space-center">
                <div class="col-5">
                    <table class='table-1 mt-3'>
                        <thead>
                            <tr>
                                <th class="fixed-height col-4 text-left">
                                    <div class="normal-title text-white">Car Brands</div>
                                    Luxury clients are their public target. Therefore Luxury Cars could work like a car test drive, considering that the user is able to pay a high cost to rent a car.
                                </th>
                             </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="fixed-height text-green text-left bg-grey-0">
                                    <p class='gilroy-bold'>OPPORTUNITY</p>
                                    Make a partnership for buying new cars or getting them fixed in exchange for promoting their brand experience.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-5">
                    <table class='table-1 mt-3'>
                        <thead>
                            <tr>
                                <th class="fixed-height col-4 text-left">
                                    <div class="normal-title text-white">Car Insurance Companies</div>
                                    They want that Luxury Cars increase the number of cars protected by them.
                                </th>
                             </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="fixed-height text-green text-left bg-grey-0">
                                    <p class='gilroy-bold'>OPPORTUNITY</p>
                                    It's possible to deal good prices based in new car acquisitions. 
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

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
            <div class="container py-4 col-8">
                <p>
                    <small class='text-blue-1'>VALUE PROPOSITION</small>
                    <h3 class='text-white normal-title'>Luxury Cars offers the experience of going <br> anywhere with the best cars in the world.</h3>                
                </p>
                <p class='mt-3'>
                    <small class='text-blue-1'>WHAT MAKES USERS LOVE IT</small>
                    <h3 class='text-white normal-title'>Luxury Car is the partner of the best vacations of <br> users lives and it provides a delightful way to visit <br> cities. </h3>
                </p>
                <p class='mt-3'>
                    <small class='text-blue-1'>PRODUCT MAIN GOAL</small>
                    <h3 class='text-white normal-title'>To make users happy, safe and let them feel like <br> they're driving their own car of their dreams. </h3>
                </p>
            </div>
        </section>

        <section class="bg-grey-1 mx-1 flex pt-2 pb-4">
            <h4 class="bordered-title">KPIS</h4>

            <h2 class="gilroy-bold text-blue-9 normal-title my-2 flex row">
                <img src="/rafael-maciel/assets/images/icons/measure.png">
                How to measure success?
            </h2>

            <div class="flex row gap-xl align-stretch space-center">
                <div class="col-4 bg-white p-1">
                    <p>Increase number of car <br> rentals.</p>
                </div>
                <div class="col-4 bg-white p-1">
                    <p>Increase conversion rate.</p>
                </div>
                <div class="col-4 bg-white p-1">
                    <p>Reduce drop-out rate in the rental process.</p>
                </div>
            </div>
        </section>

      
        <a name='site-map' class='map-cases-menu'>
            03 - Site Map
        </a>
        <section class="flex bg-grid pt-1 pb-4 mt-4">
            <h2 class='text-blue-9 big-title argent-cf-bold text-center my-2'>
                03 <br>
                <small class='text-blue-9 argent-cf-bold'>Site Map</small>
            </h2>
            <div class="line-art"></div>
        </section>

        <section class="bg-white mx-1 flex pt-3 pb-4">
            <img class='container mt-4' src="/rafael-maciel/assets/images/luxury-cars/luxurycars_sitemap1.png">
            <hr class='container my-4'>  
            <div class="flex container gap-xl row space-evenly align-start">
                <div class="col-6">
                    <img src="/rafael-maciel/assets/images/luxury-cars/luxurycars_sitemap2.png" >
                </div>
                <div class="col-3 pt-2">
                    <p class='mt-none gilroy-bold'>
                        MARKETING STRATEGY   
                    </p>
                    <p>
                        All car pages will appear in search engine results. Considering this scenario, the user will start the flow at the car page and will fill the form to know if the car is available at the desired location, date and time. 
                    </p>
                    <p>
                        If it's not, the website will show the car selection page saying that the car is not available for now, but with a new list with a similar model in the first place. For example: if you check if a Porsche Carrera is available, and it's not, the website will show other Porsche models first and then will show cars in the same category, in this example, Sport Cars.    
                    </p>

                </div>

            </div>
        </section>

        <a name='user-interface' class='map-cases-menu'>
            04 - User Interface
        </a>
        <section class="flex bg-grid pt-1 pb-4 mt-4">
            <h2 class='text-blue-9 big-title argent-cf-bold text-center my-2'>
                04 <br>
                <small class='text-blue-9 argent-cf-bold'>User Interface</small>
            </h2>
            <div class="line-art"></div>
        </section>
        <section class="flex pt-3 pb-4">
            <h4 class='bordered-title mb-3'>HOME</h4>
            <img src="/rafael-maciel/assets/images/luxury-cars/luxurycars_ui1.png">
        </section>
        <section class="flex pt-3 pb-4">
            <h4 class='bordered-title mb-3'>CAR SELECTION</h4>
            <img src="/rafael-maciel/assets/images/luxury-cars/luxurycars_ui2.png">
        </section>
        <section class="flex pt-3 pb-4">
            <h4 class='bordered-title mb-3'>CAR PAGE</h4>
            <img src="/rafael-maciel/assets/images/luxury-cars/luxurycars_ui3.png">
        </section>
        <section class="flex pt-3 pb-4">
            <h4 class='bordered-title mb-3'>CHEKOUT</h4>
            <img src="/rafael-maciel/assets/images/luxury-cars/luxurycars_ui4_01.png">
        </section>
        <section class="flex bg-white pt-3 mx-1 pb-4">
                
                <h4 class='bordered-title mb-3'>IA AND STRATEGY</h4>
                
                <div class="flex container row space-evenly align-start mt-3">
                    <div class="col-4">
                        <img src="/rafael-maciel/assets/images/luxury-cars/luxurycars_ui5.png" >
                    </div>
                    <div class="col-3 pt-1">
                        <p>
                            <div class="gilroy-semibold-italic">01. Key navigation path </div>
                            The key navigation path, (location/date form), 
                            which is also the primary navigation, is the first 
                            element seen in the page, after the brand, and it 
                            has loud colors.
                        </p>
                        <p>
                            <div class="gilroy-semibold-italic">02. Value proposition is highlighted and it's in the fold. </div>
                            "Go everywhere with the best cars in the world".
                        </p>
                        <p>
                            <div class="gilroy-semibold-italic">03. Secondary navigation </div>
                            Login, signup and My reservations were placed 
                            where users are used to see in websites.
                        </p>
                        <p>
                            <div class="gilroy-semibold-italic">04. Secondary content  </div>
                            It was applied with quiet colors and smaller 
                            elements to highlight the form and value 
                            proposition. 
                        </p>
    
                    </div>
    
                </div>
                <div class="flex container row space-evenly align-start mt-3">
                    <div class="col-4">
                        <img src="/rafael-maciel/assets/images/luxury-cars/luxurycars_ui6.png" >
                    </div>
                    <div class="col-3 pt-1">
                        <p>
                            <div class="gilroy-semibold-italic">05. In car selection page the form becomes secondary navigation </div>
                            To eliminate distractions and highlight the call to 
                            actions (green button - car choice).
                        </p>
                        <p>
                            <div class="gilroy-semibold-italic">06. A little bit of delight </div>
                            A silhouette of the city chosen by the user is 
                            presented. The idea is to have illustrations for 
                            well known cities and apply a neutral city 
                            silhouette if the respective illustration isn't 
                            available.
                        </p>
                        <p>
                            <div class="gilroy-semibold-italic">07. Car images </div>
                            To focus on the product, car images are big and 
                            placed in first field. After all, there aren't any 
                            arguments more powerful then these beautiful 
                            machines.
                        </p>
                    </div>
    
                </div>
                <div class="flex container row space-evenly align-start mt-3">
                    <div class="col-4">
                        <img src="/rafael-maciel/assets/images/luxury-cars/luxurycars_ui7.png" >
                    </div>
                    <div class="col-3 pt-1">
                        <p>
                            <div class="gilroy-semibold-italic">08. Why was the dark UI chosen? </div>
                            Besides the color palette reflecting luxury and a 
                            premium mood, it makes possible to apply lights 
                            and shadows to highlight the product.
                        </p>
                    </div>
    
                </div>
                
        </section>
        <section class="flex pt-3 pb-2">
            <h4 class='bordered-title'>STYLE GUIDE</h4>
        </section>
        <section style="background-color: #171F29;" class="flex pt-3 pb-4 mx-1">
            
            <div class="flex container row space-evenly align-start mt-3">
                <div class="col-3">
                    <nav class="style-guide">
                        <header class='gilroy-bold text-white'>Colors</header>
                        
                        <ul class='gilroy-medium pl-none mt-1'> 
                            <span class="text-white">interface color palette</span>
                            <img src="/rafael-maciel/assets/images/luxury-cars/luxurycars_sg_colors.png">
                        </ul>
                        <ul class='gilroy-medium pl-none mt-1'> 
                            <span class="text-white">TYPOGRAPHY</span>
                            <img src="/rafael-maciel/assets/images/luxury-cars/luxurycars_sg_font.png">
                        </ul>
                        <ul class='gilroy-medium pl-none mt-1'> 
                            <span class="text-white">OTHER</span>
                            <img src="/rafael-maciel/assets/images/luxury-cars/luxurycars_sg_car.png">
                            <img class="mt-1" src="/rafael-maciel/assets/images/luxury-cars/luxurycars_sg_luxuryclubbrand.png">
                        </ul>
                        
                    </nav>
                </div>
                <div class="col-3">
                    <nav class="style-guide">
                        <header class='gilroy-bold text-white text-white'>ELEMENTS</header>
                        
                        <ul class='gilroy-medium pl-none mt-1'> 
                            <span class="text-white">Form Items</span>
                            <img src="/rafael-maciel/assets/images/luxury-cars/luxurycars_sg_date1.png">
                        </ul>
                        <ul class='gilroy-medium pl-none mt-1'> 
                            <img src="/rafael-maciel/assets/images/luxury-cars/luxurycars_sg_date2.png">

                        </ul>
                        <ul class='gilroy-medium pl-none mt-1'> 
                            <img src="/rafael-maciel/assets/images/luxury-cars/luxurycars_sg_selection.png">

                        </ul>
                        <ul class='gilroy-medium pl-none mt-1'> 
                            <span class="text-white">Navigation Items</span>
                            <img src="/rafael-maciel/assets/images/luxury-cars/nav-items.png">
                        </ul>
                        <ul class='gilroy-medium pl-none mt-1'> 
                            <img src="/rafael-maciel/assets/images/luxury-cars/luxurycars_sg_searchbar.png">
                        </ul>
                        <ul class='gilroy-medium pl-none mt-1'> 
                            <img src="/rafael-maciel/assets/images/luxury-cars/luxurycars_sg_pagination.png">
                        </ul>
                    </nav>
                </div>
                <div class="col-3">
                    <nav class="style-guide">
                        <header class='gilroy-bold text-white'>ICONS</header>
                        
                        <ul class='gilroy-medium pl-none mt-1'> 
                            <img src="/rafael-maciel/assets/images/luxury-cars/icones.png">
                        </ul>
                        

                    </nav>
                </div>

            </div>

        </section>

        <a name='final-words' class='map-cases-menu'>
            05 - Final Words
        </a>
        <section class="flex bg-grid pt-1 pb-4 mt-2">
            <h2 class='text-blue-9 big-title argent-cf-bold text-center my-2'>
                05 <br>
                <small class='text-blue-9 argent-cf-bold'>Final Words</small>
            </h2>
            <div class="line-art"></div>
        </section>

        <section class="flex mt-3 pb-4">
            <div class="flex container row space-center">
                <div class="col-8">
                    One of the first insights that I had in the start of this project was that those are the most beautiful cars, 
                    just like pieces of art. So, why not make an almost invisible product? The cars talk for themselves. And 
                    it was a great idea, the visual design was highly rated by users. <br>
                    <br>
                    After this project, I learned a mindset to always keep the experience as simple as possible. The 
                    complexity has to run from behind, not being visible to the users. I've readed a lot about this advice 
                    and it was a great learning putting it into practice.
                </div>
        </section>


        <?php require_once __DIR__ . "/../fragments/cases-footer.php"; ?>
    </body>
</html>