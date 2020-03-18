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
            $this->db->query(" UPDATE mems set lang=:lang ");
            $this->db->bind(':lang',$lang);
            $this->db->execute();
       }
           $this->db->query("SELECT lang FROM mems ");
           $res=$this->db->single();

           $this->twig->addGlobal('LANG', $res->lang);
           

} // end constructor homes
    
function index($prm1='',$prm2=''){

      Echo $this->twig->render(DS.'homes'.DS.'lab'.DS.'index.twig', [
        
        'urlVar'=>[
            'prm1'=> $prm1,
            'prm2' => $prm2
            ]
      ]);
      
}

function qui_sommes_nous($prm1='',$prm2=''){

      $row=['name' => 'default class index method'];
      Echo $this->twig->render(DS.'homes'.DS.'qui_sommes_nous.twig', [
        
        'urlVar'=>[
            'prm1'=> $prm1,
            'prm2' => $prm2
            ]
      ]);
      
}

function contact($lang='',$prm2=''){
      
      $row=['name' => 'default class index method'];
      Echo $this->twig->render(DS.'homes'.DS.'contact.twig', [
        
        'urlVar'=>[
            
            'prm2' => $lang
            ]
      
      ]);
      
}


function soinsDentaires($prm1='',$prm2=''){
      
      $row=['name' => 'default class index method'];
      Echo $this->twig->render(DS.'homes'.DS.'nosTraitements'.DS.'soinsDentaires.twig', [
        
        'urlVar'=>[
            'prm1'=> $prm1,
            'prm2' => $prm2
            ]
      ]);
      
}


function greffeCheveux($prm1='',$prm2=''){
      
      $row=['name' => 'default class index method'];
      Echo $this->twig->render(DS.'homes'.DS.'nosTraitements'.DS.'greffeCheveux.twig', [
        
        'urlVar'=>[
            'prm1'=> $prm1,
            'prm2' => $prm2
            ]
      ]);
      
}


function medecineEsthetique($prm1='',$prm2=''){
      
      $row=['name' => 'default class index method'];
      Echo $this->twig->render(DS.'homes'.DS.'nosTraitements'.DS.'medecineEsthetique.twig', [
        
        'urlVar'=>[
            'prm1'=> $prm1,
            'prm2' => $prm2
            ]
      ]);
      
}


function abdominoplastie($prm1='',$prm2=''){
      
      $row=['name' => 'default class index method'];
      Echo $this->twig->render(DS.'homes'.DS.'nosTraitements'.DS.'chirurgiePlastique'.DS.'abdominoplastie.twig', [
        
        'urlVar'=>[
            'prm1'=> $prm1,
            'prm2' => $prm2
            ]
      ]);
      
}


function augmentationFesses($prm1='',$prm2=''){
      
      $row=['name' => 'default class index method'];
      Echo $this->twig->render(DS.'homes'.DS.'nosTraitements'.DS.'chirurgiePlastique'.DS.'augmentationFesses.twig', [
        
        'urlVar'=>[
            'prm1'=> $prm1,
            'prm2' => $prm2
            ]
      ]);
      
}


function augmentationImplantsMammaire($prm1='',$prm2=''){
      $row=['name' => 'default class index method'];
      Echo $this->twig->render(DS.'homes'.DS.'nosTraitements'.DS.'chirurgiePlastique'.DS.'augmentationImplantsMammaire.twig', [
        
        'urlVar'=>[
            'prm1'=> $prm1,
            'prm2' => $prm2
            ]
      ]);
      
}

function blepharoplastie($prm1='',$prm2=''){
      $row=['name' => 'default class index method'];
      Echo $this->twig->render(DS.'homes'.DS.'nosTraitements'.DS.'chirurgiePlastique'.DS.'blepharoplastie.twig', [
        
        'urlVar'=>[
            'prm1'=> $prm1,
            'prm2' => $prm2
            ]
      ]);
      
}

function genioplastie($prm1='',$prm2=''){
      $row=['name' => 'default class index method'];
      Echo $this->twig->render(DS.'homes'.DS.'nosTraitements'.DS.'chirurgiePlastique'.DS.'genioplastie.twig', [
        
        'urlVar'=>[
            'prm1'=> $prm1,
            'prm2' => $prm2
            ]
      ]);
      
}

function liftingVisage($prm1='',$prm2=''){
      $row=['name' => 'default class index method'];
      Echo $this->twig->render(DS.'homes'.DS.'nosTraitements'.DS.'chirurgiePlastique'.DS.'liftingVisage.twig', [
        
        'urlVar'=>[
            'prm1'=> $prm1,
            'prm2' => $prm2
            ]
      ]);
      
}
function lipofillingSeins($prm1='',$prm2=''){
      $row=['name' => 'default class index method'];
      Echo $this->twig->render(DS.'homes'.DS.'nosTraitements'.DS.'chirurgiePlastique'.DS.'lipofillingSeins.twig', [
        
        'urlVar'=>[
            'prm1'=> $prm1,
            'prm2' => $prm2
            ]
      ]);
      
}

function liftingSeins($prm1='',$prm2=''){
      $row=['name' => 'default class index method'];
      Echo $this->twig->render(DS.'homes'.DS.'nosTraitements'.DS.'chirurgiePlastique'.DS.'liftingSeins.twig', [
        
        'urlVar'=>[
            'prm1'=> $prm1,
            'prm2' => $prm2
            ]
      ]);
      
}

function liposuccion($prm1='',$prm2=''){
      $row=['name' => 'default class index method'];
      Echo $this->twig->render(DS.'homes'.DS.'nosTraitements'.DS.'chirurgiePlastique'.DS.'liposuccion.twig', [
        
        'urlVar'=>[
            'prm1'=> $prm1,
            'prm2' => $prm2
            ]
      ]);
      
}



function reductionMammaire($prm1='',$prm2=''){
      $row=['name' => 'default class index method'];
      Echo $this->twig->render(DS.'homes'.DS.'nosTraitements'.DS.'chirurgiePlastique'.DS.'reductionMammaire.twig', [
        
        'urlVar'=>[
            'prm1'=> $prm1,
            'prm2' => $prm2
            ]
      ]);
      
}

function rhinoplastie($prm1='',$prm2=''){
      $row=['name' => 'default class index method'];
      Echo $this->twig->render(DS.'homes'.DS.'nosTraitements'.DS.'chirurgiePlastique'.DS.'rhinoplastie.twig', [
        
        'urlVar'=>[
            'prm1'=> $prm1,
            'prm2' => $prm2
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
