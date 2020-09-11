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

            ["name"=>"Gastronomía","description"=>"Sumérgete en un viaje culinario mientras conoces la región y cultura gastronómica local.","tag_thumbnail"=>"GASTRONOMIA.png"], 
            ["name"=>"Naturaleza","description"=>"Vive un momento al lado de la flora y fauna local","tag_thumbnail"=>"NATURALEZA.png"], 
            ["name"=>"Extremo","description"=>"Atrévete a romper tus límites con actividades al aire libre o en la ciudad.","tag_thumbnail"=>"EXTREMO.png"], 
            ["name"=>"Aventura","description"=>"Desafía tus habilidades en entornos naturales o urbanos","tag_thumbnail"=>"AVENTURA.png"], 
            ["name"=>"Reuniones/Social","description"=>"Conoce gente local y como fluyen con su cultura","tag_thumbnail"=>"REUNIONES.png"], 
            ["name"=>"Lujo","description"=>"Vive experiencias exclusivas","tag_thumbnail"=>"LUJO.png"], 
            ["name"=>"Tanatoturismo","description"=>"Adéntrate en sitios misteriosos envueltos por su valor histórico","tag_thumbnail"=>"TANATOTURISMO.png"], 
            ["name"=>"Ecoturismo","description"=>"Descubre la magia de la naturaleza a través de actividades amigables con el medio ambiente.","tag_thumbnail"=>"ECOTURISMO.png"], 
            ["name"=>"Salud y bienestar","description"=>"Relaja tu cuerpo y alma con actividades para la salud  física y espiritual.","tag_thumbnail"=>"SALUD-BIENESTAR.png"]

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
