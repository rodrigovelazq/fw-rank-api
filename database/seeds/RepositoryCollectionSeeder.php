<?php

use Illuminate\Database\Seeder;
use App\Repository;

class RepositoryCollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $repoList = array(
            "/spring-projects/spring-boot",
            "/facebook/react",
            "/angular/angular.js",
            "/rails/rails",
            "/angular/angular",
            "/vuejs/vue",
            "/django/django",
            "/laravel/laravel",
            "/aspnet/AspNetCore",
            "/spring-projects/spring-framework",
            "/strongloop/express",
            "/spring-projects/spring-framework",
            "/meteor/meteor",
            "/ionic-team/ionic",
            "/gin-gonic/gin",
            "/nestjs/nest",
            "/nuxt/nuxt.js",
            "/symfony/symfony",
            "/laravel/framework",
            "/vapor/vapor",
            "/kataras/iris");
        DB::table("repository")->delete();
        foreach($repoList as $value){
            Repository::create(array(
                'name' => $value,
                'available' => True
            ));
          }
    }
}
