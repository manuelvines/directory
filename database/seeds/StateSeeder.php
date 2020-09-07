<?php

use Illuminate\Database\Seeder;
use App\State;
class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        
           $countries = array(
                ["name"=>"México","id"=>1], 
                ["name"=>"Alemania","id"=>2],
                ["name"=>"Brazil","id"=>3],
                ["name"=>"Canada","id"=>4],
                ["name"=>"Colombia","id"=>5],
                ["name"=>"España","id"=>6],
                ["name"=>"Estados Unidos","id"=>7],
                ["name"=>"Francia","id"=>8]    
            );
            
    $states = array(
                    /**n+1 problem */
                    [null],
                    /***México*/ 
                    ["CDMX", "Aguascalientes"," Baja California"," Baja California Sur",
                    "Campeche","Coahuila de Zaragoza","Colima","Chiapas","Chihuahua","Durango",
                    "Guanajuato","Guerrero","Hidalgo","Jalisco","México","Michoacán de Ocampo","Morelos",
                    "Nayarit","Nuevo León","Oaxaca","Puebla","Querétaro","Quintana Roo","San Luis Potosí",
                    "Sinaloa","Sonora","Tabasco","Tamaulipas","Tlaxcala","Veracruz de Ignacio de la Llave",
                    "Yucatán","Zacatecas"],
                    /**Alemania */
                    ["Baden-Wurtemberg","Baviera","Berlín","Brandeburgo","Ciudad libre hanseática de Bremen",
                     "Ciudad libre y hanseática de Hamburgo","Hesse","Mecklemburgo-Pomerania Occidental",
                     "Baja Sajonia","Renania del Norte-Westfalia","Renania-Palatinado","Sarre","Sajonia",
                     "Sajonia-Anhalt","Schleswig-Holstein","Turingia","República Federal de Alemania"],
                    /**Brasil*/
                    ["Acre","Alagoas","Amapá","Amazonas","Bahia","Ceará","Distrito Federal","Espírito Santo","Goiás",
                    "Maranhão","Mato Grosso","Mato Grosso do Sul","Minas Gerais","Pará","Paraíba","Paraná","Pernambuco",
                    "Piauí","Rio de Janeiro","Rio Grande do Norte","Rio Grande do Sul","Rondônia",
                    "Roraima","Santa Catarina","São Paulo","Sergipe","Tocantins"],
                     /**Canada */
                     ["Ontario","Quebec","Nueva Escocia","Nuevo Brunswick","Manitoba",
                        "Territorios del Noroeste","Columbia Británica","Isla del Príncipe Eduardo",
                        "Yukón","Saskatchewan","Alberta","Terranova y Labrador","Nunavut"],
                     /**Colombia*/
                     ["Amazonas","Antioquia","Arauca","Atlántico","Bogotá","Bolívar","Boyacá",
                        "Caldas","Caquetá","Casanare","Cauca","Cesar","Chocó","Córdoba","Cundinamarca",
                        "Guainía","Guaviare","Huila","La Guajira","Magdalena","Meta","Nariño",
                        "Norte de Santander","Putumayo","Quindío","Risaralda","San Andrés y Providencia",
                        "Santander","Sucre","Tolima","Valle del Cauca","Vaupés"],
                    /**España*/
                    [
                        "Álava","Albacete","Alicante","Almería","Asturias","Ávila","Barcelona",
                        "Burgos","Cáceres","Cádiz","Cantabria","Castellón","Ciudad Real","Córdoba",
                        "La Coruña","Cuenca","Gerona","Granada","Guadalajara","Guipúzcoa","Huelva",
                        "Huesca","Baleares","Jaén","León","Lérida","Lugo","Madrid","Málaga",
                        "Murcia","Navarra","Orense","Palencia","Las Palmas","Pontevedra","La Rioja",
                        "Salamanca","Segovia","Sevilla","Soria","Tarragona","Santa Cruz de Tenerife","Teruel",
                        "Toledo","Valencia","Valladolid","Vizcaya","Zamora","Zaragoza",

                    ],
                    /**Estados Unidos*/
                    ["Alabama","Alaska","Arizona","Arkansas","California","Carolina del Norte",
                        "Carolina del Sur","Colorado","Connecticut","Dakota del Norte","Dakota del Sur",
                        "Delaware","Florida","Georgia","Hawái","Idaho","Illinois","Indiana",
                        "Iowa","Kansas","Kentucky","Luisiana","Maine","Maryland","Massachusetts",
                        "Míchigan","Minesota","Misisipi","Misuri","Montana","Nebraska","Nevada",
                        "Nueva Jersey","Nueva York","Nuevo Hampshire","Nuevo México","Ohio",
                        "Oklahoma","Oregón","Pensilvania","Rhode Island","Tennessee","Texas",
                        "Utah","Vermont","Virginia","Virginia Occidental","Washington","Wisconsin",
                        "Wyoming"],
                    /**Francia */
                    ["Gran Este","Nueva Aquitania","Auvernia-Ródano-Alpes","Borgoña-Franco Condado",
                        "Bretaña","Centro-Valle de Loira","Córcega","Isla de Francia",
                        "Occitania","Alta Francia","Normandía","País del Loira","Provenza-Alpes-Costa Azul"
                    ]

                    );



                foreach($countries as $country){

                    
                        foreach($states[$country["id"]] as $state ){
                         State::create([
                                'name' => $state,
                                'country_id' => $country["id"]
                            ]);
                        }
                }


                
    }
}
