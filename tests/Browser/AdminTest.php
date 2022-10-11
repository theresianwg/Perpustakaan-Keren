<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AdminTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testListofBooks()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
            ->type('email', "jessika66@example.net")
            ->type('password', "password")
            ->press('LOGIN')
            ->assertSee('List of Books');
        });
    }

    public function testRejectBooksLoan()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/borrowed/book')
            ->press('Reject')
            ->assertSee('List of Borrowers');
        });
    }

    public function testListCategories()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/category')
            ->assertSee('List of Categories');
        });
    }

    public function testApproveStudents()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/student')
            ->press('Approve')
            ->assertSee('List of Students');
        });
    }
}
