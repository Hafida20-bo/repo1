<!DOCTYPE html>
<html>
<title>El Chifaa</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="#home" class="w3-bar-item w3-button"><b>El Chifaa</b> Clinique Medicale</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="#projects" class="w3-bar-item w3-button">Services</a>
      <a href="#about" class="w3-bar-item w3-button">About</a>
      <a href="#contact" class="w3-bar-item w3-button">Contact</a>
      <a href="{{'login'}}" class="w3-bar-item w3-button">Se Connecter</a>
    </div>
  </div>
</div>


<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
<a href="{!! URL::to('/') !!}">
<img src="{{ URL::to('/') }}/images/cc.jpg"alt="" width="1500" height="800" />
</a>
  
<div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white">
    <span class="w3-padding w3-black w3-opacity-min">
    <b>EL Chifaa</b>
    </span> 
    <span class="w3-hide-small w3-text-light-grey">Clinique Medicale</span>
    </h1>
</div>
</header>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1600px">

  <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="w3-container w3-padding-32" id="projects">
  <!-- Project Section -->
   <h1><b>Services</b></h1>
     <p>Le patient est au centre de nos préoccupations afin de 
        <br>lui fournir les soins et services souhaités en les intégrant dans sa prise en charge durant toute la période de remède et meme la consultation</p>
    <div class="w3-row-padding w3-grayscale">
        <div class="w3-container">
    <table width="100%"  >
 <tr>
 <td width="33%" >
      <a href="{!! URL::to('/') !!}">
   <img src="{{ URL::to('/') }}/images/phy.jpeg"alt="" style="width:500px;height:200px" />
 </a>
      <h3>Médecine physique</h3>
      <p class="w3-opacity">Specialité</p>
      <p>Le pole de médecine physique et réadaptation par 
    <br>sa polyvalence a pour mission de recevoir 
    <br>des patients présentant une limitation
    <br>fonctionnelle, un déconditionnement ou un handicap.</p>
      <p></p>
    </td>
 <td width="33%" >
    <a href="{!! URL::to('/') !!}">
   <img src="{{ URL::to('/') }}/images/neu.jpg"alt="" style="width:500px;height:200px" />
 </a>
      <h3>Neurologie</h3>
      <p class="w3-opacity">Specialité</p>
      <p>La Neurologie Vasculaire ou Neurovasculaire 
      <br>est la partie de la neurologie spécifiquement<br> dédiée à la prise en charge des AVC ou <br>attaques cérébrales.</p>
      <p></p>
   </td>
 <td width="33%" >
    <a href="{!! URL::to('/') !!}">
   <img src="{{ URL::to('/') }}/images/hard.jpg"alt="" style="width:500px;height:200px" />
 </a>
      
      <h3>Cardiologie</h3>
      <p class="w3-opacity">Specialité</p>
      <p>Au service de cardiologie il y a deux (02) unités, unité « hommes » et unité «femmes» de 
                           Chaque unité a :
                           
                           un bloc de consultation ,
                           unité de soins intensifs cardiologiques,
                           Unité de Tensiologie,
                           Unité de cathétérisme et stimulation cardiaque.
                     </p>
      <p></p>
   </td>
 </tr>



 <tr>
 <td width="33%" >
       <a href="{!! URL::to('/') !!}">
   <img src="{{ URL::to('/') }}/images/106083651.jpg"alt="" style="width:500px;height:200px" />
 </a>
      <h3>Radiologie</h3>
      <p class="w3-opacity">Specialité</p>
      <p class="w3-opacity"></p>
      <p>L’équipement et les compétences médicales permettant d’assurer une prise en charge optimale adaptée aux besoins de santé. Les examens d’imagerie demandés en urgence des services d’hospitalisation sont assurées 24H/24 H. </p>
     </td>
 <td width="33%" >
     <a href="{!! URL::to('/') !!}">
   <img src="{{ URL::to('/') }}/images/k.jpg"alt="" style="width:500px;height:200px" />
 </a>
      <h3>Néphrologie</h3>
      <p class="w3-opacity">Specialité</p>
      <p>Service de néphrologie, dialyse et transplantation rénale est composé de 3 unités :
                          <br>
                            Unité pour la consultation,
                            
        
                            Unité hémodialyse,
                            <br>
                            Unité de transplantation rénale</p>
      <p></p>
    </td>
 <td width="33%" > 
       <a href="{!! URL::to('/') !!}">
   <img src="{{ URL::to('/') }}/images/medical.jpg"alt="" style="width:500px;height:200px" />
 </a>
      <h3>Medecine Generale</h3>
      <p class="w3-opacity">Specialité</p>
      <p>Assurer la prise en charge<br> d'un patient en soins primaires ambulatoires y compris en post-hospitalisation ou lors <br>d'un maintien à domicile.</p>
      
   </td>
 </tr>



  </table>
  </div>
   </div>
     
    
    
 

  
   
    

  <!-- About Section -->
 
    <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="w3-container w3-padding-32" id="about">
    <h1 class="w3-border-bottom w3-border-light-grey w3-padding-16"><b>About</b></h1>
    <div class="content">
                        <h1>Clinique El Chifaa</h1>
                        <p>
                   La clinique médicale ,ci après dénommé "El Chifaa" 
                   <br>est une clinique privée à caractère spécifique .
                   <br>D'une part, les prix qu'on a demandé sont raisonnables.

                   <br>D'autre part,elle respect la sécurité des patients
                   <br> vue qu'elle se situé au centre ville .
                   On a des médecins généralistes et autres
                   <br> spécialistes sont tous compétents.

                       
                        </p>
                        <div class="text-center">
                            <a href="#" class="more-btn">Lire la suite <i class="bx bx-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
  </div>


 

  <!-- Contact Section -->
  <div class="w3-container w3-padding-32" id="contact">
    <h1 class="w3-border-bottom w3-border-light-grey w3-padding-16"><b>Contact</b></h1>
    <p>Lets get in touch and talk about your next project.</p>
    <form action="/action_page.php" target="_blank">
      <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Email" required name="Email">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Subject" required name="Subject">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Comment" required name="Comment">
      <button class="w3-button w3-black w3-section" type="submit">
        <i class="fa fa-paper-plane"></i> SEND MESSAGE
      </button>
    </form>
  </div>
   <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>ElChifaa</h3>
                    <p>
                        Belhorizon,Tlemcen,Algérie <br>
                        
                        <strong>Téléphone:</strong> +213456666<br>
                        <strong>Email:</strong> elChifaa@gmail.com<br>
                    </p>
                </div>
<!-- Image of location/map -->
<a href="{!! URL::to('/') !!}">
   <img src="{{ URL::to('/') }}/images/map.jpg"alt="" style="width:1500px;" />
 </a>
 

 <!-- End page content -->
 </div>


 <!-- Footer -->
 <footer class="w3-center w3-black w3-padding-16">
 
            <p>    &copy; Copyright <strong><span>Clinique El Chifaa</span></strong>. All Rights Reserved  </p>
             </center></p>
 </footer>
</div>
</body>
</html>
