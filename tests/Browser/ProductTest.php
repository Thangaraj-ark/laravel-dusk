<?php

namespace Tests\Browser;

use Faker\Factory;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ProductTest extends DuskTestCase
{

    //use DatabaseMigrations;

    /**
     * A Dusk test example.
     */

    public function testProduct(): void
    {
        $this->browse(function (Browser $browser) {

            $factory = Factory::create();
            $name = $factory->name();
            $price = $factory->numberBetween(0, 99);
            $description = $factory->name();

            //Product Create Validation
            $browser->visit('/products/create')
            ->pause(1000)
            ->click('button[type="submit"]')

            ->assertSee('The name field is required.')
            ->assertSee('The price field is required.')

            ->pause(1000)
            //Product Create
            
            ->click('#name')
            ->type('#name', $name)  

            ->click('#price')
            ->type('#price', $price)  
            
            ->click('#description')
            ->type('#description', $description)

            ->attach('input[type="file"]', public_path('/images/1724417708.png'))
            ->click('button[type="submit"]')
            ->pause(1000)
            ->assertSee('Product created successfully')

            //Index page
            ->pause(1000)
            ->visit('/products')
            ->assertSee($name)
            ->assertSee($price)
            ->assertSee($description)
            ->pause(1000)

            //View Page
            ->script('document.querySelectorAll(".btn-primary").length > 0 && document.querySelectorAll(".btn-primary")[document.querySelectorAll(".btn-primary").length - 1].click();');
            $browser->pause(2000)
            ->assertSee($name)
            ->assertSee($price)
            ->assertSee($description)
            ->pause(1000)

            //Edit Page
            ->visit('/products')
            ->script('document.querySelectorAll(".btn-success").length > 0 && document.querySelectorAll(".btn-success")[document.querySelectorAll(".btn-success").length - 1].click();');
            $browser->pause(2000)

            ->type('#price', $name)
            ->click('button[type="submit"]')
            ->assertSee('The price field must be a number.')

            ->type('#price', $price)
            ->click('button[type="submit"]')
            ->pause(1000)
            ->assertSee('Product updated successfully')
            ->pause(1000);
        });
    }
}
