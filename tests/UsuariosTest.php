<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use jorge\usuarios\Usuario;
class UsuariosTest extends TestCase{
    
    /**
     * @test
     */
    public function extraerInformacionDelUsuario()
    {
        $user = new Usuario();
        $this->assertTrue(true);
    }
} 