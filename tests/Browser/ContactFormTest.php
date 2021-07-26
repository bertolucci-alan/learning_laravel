<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ContactFomrTest extends DuskTestCase
{
    /**
     * @test
     *
     * @return void
     */
    public function visitContactPage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/contato')
                ->assertSee('Nome completo');
        });
    }
    public function testIfInputsIsset()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/contato')
                ->assertSee('Nome complet')
                ->assertSee('Email')
                ->assertSee('Mensagem');
        });
    }
    public function testContactFormIsWorking()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/contato')
                ->type('name', 'Alan')
                ->type('email', 'alan@gmail.com')
                ->type('message', 'olá Alan, enviando email teste')
                ->press('sendEmail')
                ->assertPathIs('/contato')
                ->assertSee('E-mail enviado com sucesso!');
        });
    }
    public function testVerificationInputs()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/contato')
                ->press('sendEmail')
                ->assertSee('obrigatório!');
        });
    }
}