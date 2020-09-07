<?php

use Illuminate\Database\Seeder;
use App\Tag;
class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tags = array(

            ["name"=>"Gastronomía","description"=>"Sumérgete en un viaje culinario mientras conoces la región y cultura gastronómica local.","tag_thumbnail"=>"gastronomia.jpg"], 
            ["name"=>"Naturaleza","description"=>"Vive un momento al lado de la flora y fauna local","tag_thumbnail"=>"naturelaza.jpg"], 
            ["name"=>"Extremo","description"=>"Atrévete a romper tus límites con actividades al aire libre o en la ciudad.","tag_thumbnail"=>"extremo.jpg"], 
            ["name"=>"Aventura","description"=>"Desafía tus habilidades en entornos naturales o urbanos","tag_thumbnail"=>"aventura.jpg"], 
            ["name"=>"Reuniones/Social","description"=>"Conoce gente local y como fluyen con su cultura","tag_thumbnail"=>"reuniones.jpg"], 
            ["name"=>"Lujo","description"=>"Vive experiencias exclusivas","tag_thumbnail"=>"lujo.jpg"], 
            ["name"=>"Tanatoturismo","description"=>"Adéntrate en sitios misteriosos envueltos por su valor histórico","tag_thumbnail"=>"tanatoturismo.jpg"], 
            ["name"=>"Ecoturismo","description"=>"Descubre la magia de la naturaleza a través de actividades amigables con el medio ambiente.","tag_thumbnail"=>"ecoturismo.jpg"], 
            ["name"=>"Salud y bienestar","description"=>"Relaja tu cuerpo y alma con actividades para la salud  física y espiritual.","tag_thumbnail"=>"salud-bienestar.jpg"]

        );

                    
            foreach( $tags  as $tag ){

                Tag::create([
                    'name' => $tag["name"],
                    'description' => $tag["description"],
                    'tag_thumbnail'=>$tag["tag_thumbnail"]

                ]);
            }
     

    }
}
