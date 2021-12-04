<?php

namespace Includes;

class Validar {

    public static function validar() {
        session_start();
        if (
            isset($_SESSION['sid']) &&
            isset($_SESSION['snome']) &&
            isset($_SESSION['snivel'])
        ) {
            return json_encode([
                'msg' => 'OK',
                'dados' => [
                    'sid' => $_SESSION['sid'],
                    'snome' => $_SESSION['snome'],
                    'snivel' => $_SESSION['snivel']
                ]
            ]);
        } else {
            return json_encode(['msg' => 'Erro']);
        }
    }
}
