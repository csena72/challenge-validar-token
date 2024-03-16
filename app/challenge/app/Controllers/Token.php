<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Token extends Controller
{
    public function reverse()
    {
        // Obtener el token enviado por la solicitud AJAX
        $token = $this->request->getPost('token');

        // Verificar el formato del token
        if ($this->isValidToken($token)) {

            // Revertir el orden de las letras del token sin afectar los símbolos
            $reversedToken = $this->reverseLetters($token);

            // Devolver el token revertido como respuesta
            return $this->response->setJSON(['reversedToken' => $reversedToken]);
        } else {
            // Devolver un mensaje de error como respuesta
            return $this->response->setJSON(['error' => 'El token ingresado no cumple con el formato requerido.']);
        }
    }

    // Función para verificar el formato del token
    private function isValidToken($token)
    {
        return preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[*\-!])[a-zA-Z0-9*!\-]{6,8}$/', $token);
    }

    // Función para revertir el orden de las letras en el token
    private function reverseLetters($token)
    {
        $letters = preg_replace('/[*\-!]/', '', $token); // Eliminar los símbolos del token
        $reversedLetters = strrev($letters); // Revertir el orden de las letras
        $reversedToken = '';

        // Reensamblar el token con las letras revertidas y los símbolos en su lugar original
        for ($i = 0, $j = 0; $i < strlen($token); $i++) {
            if (preg_match('/[*\-!]/', $token[$i])) {
                // Si el carácter es un símbolo, agregarlo al token revertido
                $reversedToken .= $token[$i];
            } else {
                // Si el carácter es una letra, agregar la letra revertida al token
                $reversedToken .= $reversedLetters[$j];
                $j++;
            }
        }

        return $reversedToken;
    }
}