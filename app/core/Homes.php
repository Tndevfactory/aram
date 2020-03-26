<?php

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

class Homes extends Router {

function __construct(){

      $this->db= new Database;
      $this->helpers= new Helpers;
      $this->loader = new FilesystemLoader(APPROOT.DS.'app'.DS.'views'.DS);
      $this->twig = new Environment($this->loader,[
        
        'debug' => true,
        'cache' =>  APPROOT.DS.'app'.DS.'tmp_cache'
          
        ]);
        
        $this->twig->addGlobal('URLROOT', URLROOT);
        $this->twig->addGlobal('APPROOT', APPROOT);
        $this->twig->addGlobal('SITENAME', SITENAME);
        $this->twig->addGlobal('DS', DS); 

      //   $current_url=implode( "/", $this->getUrl());
      //   $this->twig->addGlobal('current_url', $current_url);


        $lang=isset($this->getUrl()[2])? $this->getUrl()[2] : '';

        if(!empty($lang)){
            
            if( $lang == 'fr' || $lang == 'gr' || $lang == 'ar' || $lang == 'en' ){
                  
                  $this->db->query(" UPDATE mems set lang=:lang ");
                  $this->db->bind(':lang',$lang);
                  $this->db->execute();

            }
            
       }
           $this->db->query("SELECT lang FROM mems ");
           $res=$this->db->single();

           $this->twig->addGlobal('LANG', $res->lang);
           

} // end constructor homes
    
function index($prm1='',$prm2=''){

      Echo $this->twig->render(DS.'homes'.DS.'index.twig', [
        
        'urlVar'=>[
            'prm1'=> $prm1,
            'prm2' => $prm2
            ]
      ]);
      
}



// besoins ///////////////////////////////////////////////////////////////////////////////

function besoinsVisage($prm1='',$prm2=''){

      switch ($prm1) {

            case "ridesfr":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'fr'.DS.'visage'.DS.'rides.twig', []);
                break;
            case "paupiereTombantefr":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'fr'.DS.'visage'.DS.'paupiereTombante.twig', []);
                break;
            case "complexeNezfr":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'fr'.DS.'visage'.DS.'complexeNez.twig', []);
                break;
            case "mentonfr":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'fr'.DS.'visage'.DS.'menton.twig', []);
                break;

            
            case "ridesen":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'en'.DS.'visage'.DS.'rides.twig', []);
                break;
            case "paupiereTombanteen":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'en'.DS.'visage'.DS.'paupiereTombante.twig', []);
                break;
            case "complexeNezen":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'en'.DS.'visage'.DS.'complexeNez.twig', []);
                break;
            case "mentonen":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'en'.DS.'visage'.DS.'menton.twig', []);
                break;

            
            case "ridesgr":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'gr'.DS.'visage'.DS.'rides.twig', []);
                break;
            case "paupiereTombantegr":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'gr'.DS.'visage'.DS.'paupiereTombante.twig', []);
                break;
            case "complexeNezgr":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'gr'.DS.'visage'.DS.'complexeNez.twig', []);
                break;
            case "mentongr":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'gr'.DS.'visage'.DS.'menton.twig', []);
                break;

            
            case "ridesar":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'ar'.DS.'visage'.DS.'rides.twig', []);
                break;
            case "paupiereTombantear":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'ar'.DS.'visage'.DS.'paupiereTombante.twig', []);
                break;
            case "complexeNezar":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'ar'.DS.'visage'.DS.'complexeNez.twig', []);
                break;
            case "mentonar":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'ar'.DS.'visage'.DS.'menton.twig', []);
                break;

            default:
                    Echo $this->twig->render(DS.'homes'.DS.'index.twig', []);
        }

}

function besoinsPoitrine($prm1='',$prm2=''){

      switch ($prm1) {

            case "seinsTombantsfr":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'fr'.DS.'poitrine'.DS.'seinsTombants.twig', []);
                break;
            case "hypotrophieMammairefr":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'fr'.DS.'poitrine'.DS.'hypotrophieMammaire.twig', []);
                break;
            case "hypertrophieMammairefr":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'fr'.DS.'poitrine'.DS.'hypertrophieMammaire.twig', []);
                break;
           
            case "seinsTombantsen":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'en'.DS.'poitrine'.DS.'seinsTombants.twig', []);
                break;
            case "hypotrophieMammaireen":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'en'.DS.'poitrine'.DS.'hypotrophieMammaire.twig', []);
                break;
            case "hypertrophieMammaireen":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'en'.DS.'poitrine'.DS.'hypertrophieMammaire.twig', []);
                break;
           
            case "seinsTombantsgr":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'gr'.DS.'poitrine'.DS.'seinsTombants.twig', []);
                break;
            case "hypotrophieMammairegr":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'gr'.DS.'poitrine'.DS.'hypotrophieMammaire.twig', []);
                break;
            case "hypertrophieMammairegr":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'gr'.DS.'poitrine'.DS.'hypertrophieMammaire.twig', []);
                break;
           
            case "seinsTombantsar":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'ar'.DS.'poitrine'.DS.'seinsTombants.twig', []);
                break;
            case "hypotrophieMammairear":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'ar'.DS.'poitrine'.DS.'hypotrophieMammaire.twig', []);
                break;
            case "hypertrophieMammairear":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'ar'.DS.'poitrine'.DS.'hypertrophieMammaire.twig', []);
                break;
           

            default:
                    Echo $this->twig->render(DS.'homes'.DS.'index.twig', []);
        }

}


function besoinsCorps($prm1='',$prm2=''){

      switch ($prm1) {

            case "graisseEnTropfr":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'fr'.DS.'corps'.DS.'graisseEnTrop.twig', []);
                break;
            case "relachementPeauVentrefr":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'fr'.DS.'corps'.DS.'relachementPeauVentre.twig', []);
                break;
            case "fessesPlatesfr":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'fr'.DS.'corps'.DS.'fessesPlates.twig', []);
                break;
           
            case "graisseEnTropen":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'en'.DS.'corps'.DS.'graisseEnTrop.twig', []);
                break;
            case "relachementPeauVentreen":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'en'.DS.'corps'.DS.'relachementPeauVentre.twig', []);
                break;
            case "fessesPlatesen":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'en'.DS.'corps'.DS.'fessesPlates.twig', []);
                break;
           
            case "graisseEnTropgr":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'gr'.DS.'corps'.DS.'graisseEnTrop.twig', []);
                break;
            case "relachementPeauVentregr":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'gr'.DS.'corps'.DS.'relachementPeauVentretwig', []);
                break;
            case "fessesPlatesgr":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'gr'.DS.'corps'.DS.'fessesPlates.twig', []);
                break;
           
            case "graisseEnTropar":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'ar'.DS.'corps'.DS.'graisseEnTrop.twig', []);
                break;
            case "relachementPeauVentrear":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'ar'.DS.'corps'.DS.'hypotrophieMammairetwig', []);
                break;
            case "fessesPlatesar":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'ar'.DS.'corps'.DS.'fessesPlate.twig', []);
                break;
           

            default:
                    Echo $this->twig->render(DS.'homes'.DS.'index.twig', []);
        }

}

function besoinsCheuveux($prm1='',$prm2=''){

      switch ($prm1) {

            case "chuteDeCheuveuxfr":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'fr'.DS.'cheuveux'.DS.'chuteDeCheuveux.twig', []);
                break;
            case "trousBarbefr":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'fr'.DS.'cheuveux'.DS.'trousBarbe.twig', []);
                break;
            case "alopecieSourcilsfr":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'fr'.DS.'cheuveux'.DS.'alopecieSourcils.twig', []);
                break;
           
            case "chuteDeCheuveuxen":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'en'.DS.'cheuveux'.DS.'chuteDeCheuveux.twig', []);
                break;
            case "trousBarbeen":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'en'.DS.'cheuveux'.DS.'trousBarbe.twig', []);
                break;
            case "alopecieSourcilsen":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'en'.DS.'cheuveux'.DS.'alopecieSourcils.twig', []);
                break;
           
            case "chuteDeCheuveuxgr":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'gr'.DS.'cheuveux'.DS.'chuteDeCheuveux.twig', []);
                break;
            case "trousBarbegr":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'gr'.DS.'cheuveux'.DS.'trousBarbe.twig', []);
                break;
            case "alopecieSourcilsgr":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'gr'.DS.'cheuveux'.DS.'alopecieSourcils.twig', []);
                break;
           
            case "chuteDeCheuveuxar":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'ar'.DS.'cheuveux'.DS.'chuteDeCheuveux.twig', []);
                break;
            case "trousBarbear":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'ar'.DS.'cheuveux'.DS.'trousBarbe.twig', []);
                break;
            case "alopecieSourcilsar":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'ar'.DS.'cheuveux'.DS.'alopecieSourcils.twig', []);
                break;

            default:
                    Echo $this->twig->render(DS.'homes'.DS.'index.twig', []);
        }

}

function besoinsDents($prm1='',$prm2=''){

      switch ($prm1) {

            case "dentsManquantesfr":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'fr'.DS.'dents'.DS.'dentsManquantes.twig', []);
                break;
            case "dentsEbrecheesfr":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'fr'.DS.'dents'.DS.'dentsEbrechees.twig', []);
                break;
            case "dentsJauniesfr":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'fr'.DS.'dents'.DS.'dentsJaunies.twig', []);
                break;

            case "dentsManquantesen":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'en'.DS.'dents'.DS.'dentsManquantes.twig', []);
                break;
            case "dentsEbrecheesen":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'en'.DS.'dents'.DS.'dentsEbrechees.twig', []);
                break;
            case "dentsJauniesen":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'en'.DS.'dents'.DS.'dentsJaunies.twig', []);
                break;
           
            case "dentsManquantesgr":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'gr'.DS.'dents'.DS.'dentsManquantes.twig', []);
                break;
            case "dentsEbrecheesgr":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'gr'.DS.'dents'.DS.'dentsEbrechees.twig', []);
                break;
            case "dentsJauniesgr":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'gr'.DS.'dents'.DS.'dentsJaunies.twig', []);
                break;
          
            case "dentsManquantesar":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'ar'.DS.'dents'.DS.'dentsManquantes.twig', []);
                break;
            case "dentsEbrecheesar":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'ar'.DS.'dents'.DS.'dentsEbrechees.twig', []);
                break;
            case "dentsJauniesar":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'ar'.DS.'dents'.DS.'dentsJaunies.twig', []);
                break;
           
          
            default:
                    Echo $this->twig->render(DS.'homes'.DS.'index.twig', []);
        }

}


function besoinsFertilite($prm1='',$prm2=''){

      switch ($prm1) {

            case "grossessefr":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'fr'.DS.'fertilite'.DS.'grossesse.twig', []);
                break;
            case "grossesseen":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'en'.DS.'fertilite'.DS.'grossesse.twig', []);
                break;
            case "grossessegr":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'gr'.DS.'fertilite'.DS.'grossesse.twig', []);
                break;
            case "grossessear":
                  Echo $this->twig->render(DS.'homes'.DS.'besoins'.DS.'ar'.DS.'fertilite'.DS.'grossesse.twig', []);
                break;
          
            default:
                    Echo $this->twig->render(DS.'homes'.DS.'index.twig', []);
        }

}




//solution//////////////////////////////////////////////////////////////////////////////////////////
//solution//////////////////////////////////////////////////////////////////////////////////////////
//solution//////////////////////////////////////////////////////////////////////////////////////////

function solutionsVisage($prm1='',$prm2=''){

      switch ($prm1) {

            
            case "liftingVisagefr":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'fr'.DS.'visage'.DS.'liftingVisage.twig', []);
                break;
            case "blepharoplastiefr":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'fr'.DS.'visage'.DS.'blepharoplastie.twig', []);
                break;
            case "rhinoplastiefr":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'fr'.DS.'visage'.DS.'rhinoplastie.twig', []);
                break;
            case "genioplastiefr":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'fr'.DS.'visage'.DS.'genioplastie.twig', []);
                break;
            
            case "liftingVisageen":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'en'.DS.'visage'.DS.'liftingVisage.twig', []);
                break;
            case "blepharoplastieen":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'en'.DS.'visage'.DS.'blepharoplastie.twig', []);
                break;
            case "rhinoplastieen":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'en'.DS.'visage'.DS.'rhinoplastie.twig', []);
                break;
            case "genioplastieen":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'en'.DS.'visage'.DS.'genioplastie.twig', []);
                break;
            
            case "liftingVisagegr":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'gr'.DS.'visage'.DS.'liftingVisage.twig', []);
                break;
            case "blepharoplastiegr":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'gr'.DS.'visage'.DS.'blepharoplastie.twig', []);
                break;
            case "rhinoplastiegr":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'gr'.DS.'visage'.DS.'rhinoplastie.twig', []);
                break;
            case "genioplastiegr":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'gr'.DS.'visage'.DS.'genioplastie.twig', []);
                break;
            
            case "liftingVisagear":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'ar'.DS.'visage'.DS.'liftingVisage.twig', []);
                break;
            case "blepharoplastiear":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'ar'.DS.'visage'.DS.'blepharoplastie.twig', []);
                break;
            case "rhinoplastiear":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'ar'.DS.'visage'.DS.'rhinoplastie.twig', []);
                break;
            case "genioplastiear":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'ar'.DS.'visage'.DS.'genioplastie.twig', []);
                break;


            default:
            Echo $this->twig->render(DS.'homes'.DS.'index.twig', []);
            
      }
}


function solutionsSeins($prm1='',$prm2=''){

      switch ($prm1) {

            
            case "liftingSeinsfr":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'fr'.DS.'seins'.DS.'liftingSeins.twig', []);
                break;
            case "prothesesMammairesfr":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'fr'.DS.'seins'.DS.'prothesesMammaires.twig', []);
                break;
            case "lipofillingMammairefr":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'fr'.DS.'seins'.DS.'lipofillingMammaire.twig', []);
                break;
            case "reductionMammairefr":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'fr'.DS.'seins'.DS.'reductionMammaire.twig', []);
                break;
          

            case "liftingSeinsen":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'en'.DS.'seins'.DS.'liftingSeins.twig', []);
                break;
            case "prothesesMammairesen":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'en'.DS.'seins'.DS.'prothesesMammaires.twig', []);
                break;
            case "lipofillingMammaireen":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'en'.DS.'seins'.DS.'lipofillingMammaire.twig', []);
                break;
            case "reductionMammaireen":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'en'.DS.'seins'.DS.'reductionMammaire.twig', []);
                break;
          

            case "liftingSeinsgr":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'gr'.DS.'seins'.DS.'liftingSeins.twig', []);
                break;
            case "prothesesMammairesgr":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'gr'.DS.'seins'.DS.'prothesesMammaires.twig', []);
                break;
            case "lipofillingMammairegr":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'gr'.DS.'seins'.DS.'lipofillingMammaire.twig', []);
                break;
            case "reductionMammairegr":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'gr'.DS.'seins'.DS.'reductionMammaire.twig', []);
                break;
          

            case "liftingSeinsar":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'ar'.DS.'seins'.DS.'liftingSeins.twig', []);
                break;
            case "prothesesMammairesar":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'ar'.DS.'seins'.DS.'prothesesMammaires.twig', []);
                break;
            case "lipofillingMammairear":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'ar'.DS.'seins'.DS.'lipofillingMammaire.twig', []);
                break;
            case "reductionMammairear":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'ar'.DS.'seins'.DS.'reductionMammaire.twig', []);
                break;
          

            default:
                    Echo $this->twig->render(DS.'homes'.DS.'index.twig', []);
        }

}

function solutionsSilhouette($prm1='',$prm2=''){

      switch ($prm1) {

            
            case "liposuccionfr":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'fr'.DS.'silhouette'.DS.'liposuccion.twig', []);
                break;
            case "abdominoplastiefr":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'fr'.DS.'silhouette'.DS.'abdominoplastie.twig', []);
                break;
            case "augmentationFessesfr":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'fr'.DS.'silhouette'.DS.'augmentationFesses.twig', []);
                break;
            case "liftingBrasfr":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'fr'.DS.'silhouette'.DS.'liftingBras.twig', []);
                break;
            case "liftingCuissesfr":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'fr'.DS.'silhouette'.DS.'liftingCuisses.twig', []);
                break;
          
            
            case "liposuccionen":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'en'.DS.'silhouette'.DS.'liposuccion.twig', []);
                break;
            case "abdominoplastieen":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'en'.DS.'silhouette'.DS.'abdominoplastie.twig', []);
                break;
            case "augmentationFessesen":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'en'.DS.'silhouette'.DS.'augmentationFesses.twig', []);
                break;

                case "liftingBrasen":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'en'.DS.'silhouette'.DS.'liftingBras.twig', []);
                break;
            case "liftingCuissesen":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'en'.DS.'silhouette'.DS.'liftingCuisses.twig', []);
                break;

            
            case "liposucciongr":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'gr'.DS.'silhouette'.DS.'liposuccion.twig', []);
                break;
            case "abdominoplastiegr":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'gr'.DS.'silhouette'.DS.'abdominoplastie.twig', []);
                break;
            case "augmentationFessesgr":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'gr'.DS.'silhouette'.DS.'augmentationFesses.twig', []);
                break;
           case "liftingBrasgr":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'gr'.DS.'silhouette'.DS.'liftingBras.twig', []);
                break;
            case "liftingCuissesgr":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'gr'.DS.'silhouette'.DS.'liftingCuisses.twig', []);
                break;


            
            case "liposuccionar":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'ar'.DS.'silhouette'.DS.'liposuccion.twig', []);
                break;
            case "abdominoplastiear":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'ar'.DS.'silhouette'.DS.'abdominoplastie.twig', []);
                break;
            case "augmentationFessesar":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'ar'.DS.'silhouette'.DS.'augmentationFesses.twig', []);
                break;

                case "liftingBrasar":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'ar'.DS.'silhouette'.DS.'liftingBras.twig', []);
                break;
            case "liftingCuissesar":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'ar'.DS.'silhouette'.DS.'liftingCuisses.twig', []);
                break;

            default:
                    Echo $this->twig->render(DS.'homes'.DS.'index.twig', []);
        }

}

function solutionsGreffeCapillaire($prm1='',$prm2=''){

      switch ($prm1) {

            
            case "greffeCheveuxfr":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'fr'.DS.'greffeCapillaire'.DS.'greffeCheveux.twig', []);
                break;
            case "greffeBarbefr":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'fr'.DS.'greffeCapillaire'.DS.'greffeBarbe.twig', []);
                break;
            case "greffeSourcilsfr":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'fr'.DS.'greffeCapillaire'.DS.'greffeSourcils.twig', []);
                break;
          
            
            
            case "greffeCheveuxen":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'en'.DS.'greffeCapillaire'.DS.'greffeCheveux.twig', []);
                break;
            case "greffeBarbeen":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'en'.DS.'greffeCapillaire'.DS.'greffeBarbe.twig', []);
                break;
            case "greffeSourcilsen":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'en'.DS.'greffeCapillaire'.DS.'greffeSourcils.twig', []);
                break;
          
            
            
            case "greffeCheveuxgr":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'gr'.DS.'greffeCapillaire'.DS.'greffeCheveux.twig', []);
                break;
            case "greffeBarbegr":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'gr'.DS.'greffeCapillaire'.DS.'greffeBarbe.twig', []);
                break;
            case "greffeSourcilsgr":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'gr'.DS.'greffeCapillaire'.DS.'greffeSourcils.twig', []);
                break;
          
            
            
            case "greffeCheveuxar":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'ar'.DS.'greffeCapillaire'.DS.'greffeCheveux.twig', []);
                break;
            case "greffeBarbear":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'ar'.DS.'greffeCapillaire'.DS.'greffeBarbe.twig', []);
                break;
            case "greffeSourcilsar":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'ar'.DS.'greffeCapillaire'.DS.'greffeSourcils.twig', []);
                break;
          
            

            default:
                    Echo $this->twig->render(DS.'homes'.DS.'index.twig', []);
        }

}

function solutionsSoinsDentaires($prm1='',$prm2=''){

      switch ($prm1) {

            
            case "implantsDentairesfr":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'fr'.DS.'soinsDentaires'.DS.'implantsDentaires.twig', []);
                break;
            case "facettesDentairesfr":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'fr'.DS.'soinsDentaires'.DS.'facettesDentaires.twig', []);
                break;
            case "blanchimentDentairefr":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'fr'.DS.'soinsDentaires'.DS.'blanchimentDentaire.twig', []);
                break;
          
            
            
            case "implantsDentairesen":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'en'.DS.'soinsDentaires'.DS.'implantsDentaires.twig', []);
                break;
            case "facettesDentairesen":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'en'.DS.'soinsDentaires'.DS.'facettesDentaires.twig', []);
                break;
            case "blanchimentDentaireen":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'en'.DS.'soinsDentaires'.DS.'blanchimentDentaire.twig', []);
                break;
          
            
            
            case "implantsDentairesgr":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'gr'.DS.'soinsDentaires'.DS.'implantsDentaires.twig', []);
                break;
            case "facettesDentairesgr":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'gr'.DS.'soinsDentaires'.DS.'facettesDentaires.twig', []);
                break;
            case "blanchimentDentairegr":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'gr'.DS.'soinsDentaires'.DS.'blanchimentDentaire.twig', []);
                break;
          
            
            
            case "implantsDentairesar":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'ar'.DS.'soinsDentaires'.DS.'implantsDentaires.twig', []);
                break;
            case "facettesDentairesar":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'ar'.DS.'soinsDentaires'.DS.'facettesDentaires.twig', []);
                break;
            case "blanchimentDentairear":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'ar'.DS.'soinsDentaires'.DS.'blanchimentDentaire.twig', []);
                break;

            default:
                    Echo $this->twig->render(DS.'homes'.DS.'index.twig', []);
        }

}
function solutionsFiv($prm1='',$prm2=''){

      switch ($prm1) {

            
            case "fecondationInVitrofr":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'fr'.DS.'fiv'.DS.'fecondationInVitro.twig', []);
                break;
           
            case "fecondationInVitroen":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'en'.DS.'fiv'.DS.'fecondationInVitro.twig', []);
                break;
            
            case "fecondationInVitrogr":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'gr'.DS.'fiv'.DS.'fecondationInVitro.twig', []);
                break;
            
            case "fecondationInVitroar":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'ar'.DS.'fiv'.DS.'fecondationInVitro.twig', []);
                break;
            
            default:
                    Echo $this->twig->render(DS.'homes'.DS.'index.twig', []);
        }

}


function solutionsMedEsthetique($prm1='',$prm2=''){

      switch ($prm1) {

            
            case "medecineEsthetiquefr":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'fr'.DS.'fiv'.DS.'medecineEsthetique.twig', []);
                break;
           
            case "medecineEsthetiqueen":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'en'.DS.'fiv'.DS.'medecineEsthetique.twig', []);
                break;
            
            case "medecineEsthetiquegr":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'gr'.DS.'fiv'.DS.'medecineEsthetique.twig', []);
                break;
            
            case "medecineEsthetiquear":
                  Echo $this->twig->render(DS.'homes'.DS.'solutions'.DS.'ar'.DS.'fiv'.DS.'medecineEsthetique.twig', []);
                break;
            
            default:
                    Echo $this->twig->render(DS.'homes'.DS.'index.twig', []);
        }

}




function contact($lang='',$prm2=''){
      
      $row=['name' => 'default class index method'];
      Echo $this->twig->render(DS.'homes'.DS.'contact.twig', [
        
        'urlVar'=>[
            
            'prm2' => $lang
            ]
      
      ]);
      
}





public function newsletter(){
       
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
      
                  $_POST =filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                  $data =[
                                    
                        'name'=> trim($_POST['name']),
                        'email'=> trim($_POST['email']),
                        'name_err'=> null,
                        'email_err'=> null
                  ];
       
                  if(empty($data['name'])){$data['name_err']='veuillez entrer votre nom svp';}
                 
                  if(empty($data['email'])){$data['email_err']='veuillez entrez votre email svp';}

                  if(!empty($data['name_err']) || !empty($data['email_err']) ){
                  
                        Echo $this->twig->render('/homes/index.twig', [
                               'data' => $data
                        ]);
                  
                  }else{
                              // insert into database 
                        $this->db->query(" INSERT INTO lead (name, email)  VALUES (:name,:email)  ");
              
                        $this->db->bind(':name',$data['name']);
                        $this->db->bind(':email',$data['email']);
                                    
                        if($this->db->execute()){

                              $data['email_err']= '';
                              $data['name_err']='';

                              // $this->flash('register_success','you are registred and you can login ');
                        
                              Echo $this->twig->render('/homes/index.twig', [
                                    'register_success' => 'Bienvenue à Health Experts, votre demande d\'adhesion est enregistrée  '
                              ]);

                              // $this->redirect('homes');

                              ///////// acces zoho crm /////// 
                              ///////// zoho crm /////// 




                       
                        
                        }else{
                              Echo "database non available or something went wrong ";
                        
                              
                        }

                  }
       }
    

}

// json api zone

public function searchForm(){

      if($_SERVER['REQUEST_METHOD'] == 'POST'){
      
            $_POST =filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $search_field='%'.trim($_POST['q']).'%';
            $this->db->query("SELECT * FROM pages WHERE keyword like '{$search_field}' ORDER BY created DESC");
            $row=$this->db->resultSet();

            if(count($row)){
                  $myJSON = json_encode($row);
            }else{
                  $myJSON = json_encode(0);
            }
           
            echo $myJSON;
       } 
}




  }  // end class homes
