<?php
    $footer_mission = get_theme_mod('footer_mission', 'Default Title');
    $footer_couleur_arriere = get_theme_mod('footer_couleur_arriere', '#ec880d');
    ?>
<svg 
xmlns="http://www.w3.org/2000/svg" 
class="vague"
style="top:10px;"
viewBox="0 0 1440 320">
    <path 
        fill="<?= $footer_couleur_arriere ?>" 
        fill-opacity="1" 
        d="M0,128L48,154.7C96,181,192,235,288,229.3C384,224,480,160,576,154.7C672,149,768,203,864,213.3C960,224,1056,192,1152,176C1248,160,1344,160,1392,160L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
    </path>
</svg>


<footer style="background-color: <?= $footer_couleur_arriere ?> ">



    <div class="piedpage global">
        <section class="piedpage__s1">
         
                <?php wp_nav_menu(array(
                    "menu"=> "externe",
                    "container" => "nav",
                    "container_class" => "piedpage__s1__externe"
                )); ?>
    

            <div class="piedpage__s1__adresse">
                <div class="piedpage__s1__adresse__coord">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere porro veniam vitae, tempore corporis omnis nam 
                </div>
                <div class="piedpage__s1__adresse__recherche">
                    <?php get_search_form();   ?>
                </div>
            </div>
            <div class="piedpage__s1__description">
                <?php echo $footer_mission; ?>
            </div>
        </section>
        <section class="piedpage__s2"></section>
      
        


    </div>
</footer>
<?php wp_footer() ?>