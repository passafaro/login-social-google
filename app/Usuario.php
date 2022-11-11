<?php


    class Usuario{

        /**
         *  Inicia sessão
         */
        private function init(){
			
            return session_status() !== PHP_SESSION_ACTIVE ? session_start() : true;

        }



        /**
         * defini sessao do usuario
         */
        public function login($email, $given_name, $family_name, $picture ){
            
            self::init();
            $_SESSION["usuario"] = array(
                'email'=>$email,
                'nome'=>$given_name,
                'sobrenome'=>$family_name,
                'foto'=>$picture
            );

        }

        /**
         * Verifica status da sessao
         */
        public function verificaSessao(){

            self::init();
            return !isset($_SESSION["usuario"]) ? false : $_SESSION["usuario"];     

        }

        /**
         * Encerra sessão caso esteja aberta
         */
        public function encerrarSessao(){
            
            self::init();
            session_destroy();

        }


        



        
    }



