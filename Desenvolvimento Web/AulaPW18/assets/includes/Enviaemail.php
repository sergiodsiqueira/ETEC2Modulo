<?php
    namespace Includes;
	
	class Enviar_Email{
        
        public static function enviar($nome='', $email='', $assunto='', $mensagem=''){
            $remetente = $email;
            $destinatario = 'contato@local.com';
            $destinatario2 = 'admin@local.com';

            $hearders = 'MIME-Version: 1.0' . "\r\n";
            $hearders .= 'content-type: text/html; charset=iso-8859-1' . "\r\n";
            $hearders .= "From: $nome <$remetente>";
            //$hearders .= "Bcc: $destinatario2";
            
            $res = @mail($destinatario, $assunto, $mensagem, $hearders);

            return $res;

        }
    }