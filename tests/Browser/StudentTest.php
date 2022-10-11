<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class StudentTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testHomeStudent()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
            ->type('email', "dannie.wunsch@example.net")
            ->type('password', "password")
            ->press('LOGIN')
            ->assertSee('Home');
        });
    }

    public function testDetailBook()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/student/books/miss-brenda-harvey-jr')
            ->assertSee('Detail Book');
        });
    }

    public function testMyBook()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/student/my_books')
            ->assertSee('My Borrowment History');
        });
    }

    public function testReturnBook()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/student/books/prof-sid-hettinger-v')
            ->assertSee('Detail Book')
            ->press('Return Book')
            ->waitForDialog()->acceptDialog()
            ->assertSee('My Borrowment History');
        });
    }
}
