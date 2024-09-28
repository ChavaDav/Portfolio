<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LibroController extends Controller
{
    function libroMain() : string {
        $url = url()->current();
        Session::put("hosturl",$url);
        Session::put("n",0);
        
        Session::put("fun","pasarPagina");
        Session::put("titulo","Capítulo 1: El Descubrimiento");
        Session::put("contenido","En un pequeño pueblo costero llamado Arrecife Azul, la joven exploradora Marina descubre un antiguo mapa en el desván de su abuelo. El mapa parece indicar la ubicación de un tesoro perdido en las profundidades del océano. Con la ayuda de su fiel compañero, un delfín llamado Onda, Marina decide emprender una emocionante aventura en busca del tesoro.");
        
     
     return view('cuerpo').view('head');  
    }
    function cambioTitulo() : string {
       
        Session::put("titulo","Capítulo 2: Los Misterios del Abismo");
        Session::forget('final');
        Session::put("contenido","Tras descubrir el mapa en el desván de su abuelo, Marina y Onda se sumergen en un mundo de misterios y peligros desconocidos. Su determinación los lleva más allá de las olas del océano, hacia un reino submarino lleno de secretos ocultos y criaturas extraordinarias. El rumor del tesoro perdido se extiende por los confines del mar, atrayendo la atención de otros buscadores de fortuna. En su travesía, Marina y Onda se encuentran con una sociedad submarina antigua, cuyos habitantes guardan conocimientos ancestrales y un profundo respeto por el océano, ahora deben decidir si quedarse en la ciudad o seguir buscando en las profundidades.");
        return view('cuerpo').view('head');  
    }
    function segundaparteA() : string {
        Session::forget('final');
        Session::put("titulo","Capítulo 3: El Enigma de la Ciudad Sumergida");
        Session::put("contenido","Marina y Onda se sumergen en las profundidades del océano y descubren las ruinas de una antigua ciudad sumergida. Las calles empedradas están cubiertas de algas y corales, y los edificios antiguos se alzan como testigos silenciosos del pasado. Mientras exploran los restos de la ciudad, Marina encuentra inscripciones en piedra que parecen formar un enigma indecipherable. Cada pista los lleva a través de laberintos submarinos y cámaras secretas, donde enfrentan trampas ingeniosas dejadas por los antiguos habitantes para proteger sus tesoros más preciados. La tensión aumenta a medida que Marina y Onda se acercan a la respuesta final. ¿Qué secreto oculta la ciudad sumergida? ¿Podrán descifrar el enigma antes de que sea demasiado tarde y los peligros del abismo los atrapen para siempre?.");
        return view('cuerpo').view('head');  
    }
    function segundaparteB() : string {
        Session::forget('final');
        Session::put("titulo","Capítulo 3: La Amenaza de las Profundidades");
        Session::put("contenido","Mientras exploran las profundidades del océano en busca del tesoro perdido, Marina y Onda se enfrentan a una oscura amenaza que acecha en las sombras. Criaturas marinas de pesadilla emergen de las grietas más profundas, acechando a los intrusos con ojos brillantes y afilados dientes. Los peligros del abismo son numerosos: corrientes traicioneras arrastran a los aventureros hacia abajo, mientras que criaturas gigantescas acechan en las profundidades, listas para devorar a cualquier intruso que se atreva a perturbar su dominio. Con valentía y astucia, Marina y Onda enfrentan cada desafío, luchando por sobrevivir en un mundo donde la luz apenas alcanza y los peligros son constantes. ¿Podrán superar la amenaza de las profundidades y alcanzar el tesoro perdido antes de que sea demasiado tarde?.");
        return view('cuerpo').view('head');  
    }
    function finalA() : string {
       
        Session::put("titulo","Capítulo Final: El Descubrimiento Revelado");

            Session::put("contenido","Después de enfrentar desafíos increíbles en su búsqueda del tesoro perdido, Marina y Onda llegan al corazón de la ciudad sumergida. Allí, en un lugar sagrado oculto dentro de las ruinas, encuentran una antigua cámara adornada con símbolos enigmáticos y tesoros olvidados por el tiempo. En la cámara, descubren un cofre adornado con gemas centelleantes y envuelto en misterio. Con manos temblorosas, Marina y Onda abren el cofre y contemplan maravillados su contenido: no oro ni joyas, sino pergaminos antiguos que narran la historia perdida de la ciudad y sus habitantes. A través de las escrituras, Marina y Onda aprenden que el verdadero tesoro no reside en riquezas materiales, sino en el conocimiento y la sabiduría compartida por generaciones pasadas. La ciudad sumergida era un faro de sabiduría y comprensión, cuyos secretos estaban ");
        
        Session::put("final","destinados a iluminar el mundo una vez más. Con humildad y gratitud, Marina y Onda aceptan su descubrimiento y se comprometen a preservar la historia y el legado de la ciudad sumergida. Con el corazón lleno de asombro y gratitud, emprenden el viaje de regreso a Arrecife Azul, llevando consigo la verdad y la belleza que encontraron en las profundidades del océano. Al llegar a su hogar, comparten su historia con los habitantes de Arrecife Azul, inspirando a otros a buscar la verdad y el significado en los lugares más inesperados. Aunque su aventura ha llegado a su fin, el espíritu de descubrimiento y la amistad duradera de Marina y Onda perdurarán para siempre en las olas del tiempo.");
        return view('cuerpo').view('head');  
    }
    function finalB() : string {
       
        Session::put("titulo","Capítulo Final: El Descubrimiento Revelado");

        Session::put("contenido","Después de enfrentar desafíos increíbles en su búsqueda del tesoro perdido, emergen de las profundidades. Allí, en un lugar sagrado oculto dentro de las ruinas, encuentran una antigua cámara adornada con símbolos enigmáticos y tesoros olvidados por el tiempo. En la cámara, descubren un cofre adornado con gemas centelleantes y envuelto en misterio. Con manos temblorosas, Marina y Onda abren el cofre y contemplan maravillados su contenido: no oro ni joyas, sino pergaminos antiguos que narran la historia perdida de la ciudad y sus habitantes. A través de las escrituras, Marina y Onda aprenden que el verdadero tesoro no reside en riquezas materiales, sino en el conocimiento y la sabiduría compartida por generaciones pasadas. La ciudad sumergida era un faro de sabiduría y comprensión, cuyos secretos estaban ");
        
        Session::put("final","destinados a iluminar el mundo una vez más. Con humildad y gratitud, Marina y Onda aceptan su descubrimiento y se comprometen a preservar la historia y el legado de la ciudad sumergida. Con el corazón lleno de asombro y gratitud, emprenden el viaje de regreso a Arrecife Azul, llevando consigo la verdad y la belleza que encontraron en las profundidades del océano. Al llegar a su hogar, comparten su historia con los habitantes de Arrecife Azul, inspirando a otros a buscar la verdad y el significado en los lugares más inesperados. Aunque su aventura ha llegado a su fin, el espíritu de descubrimiento y la amistad duradera de Marina y Onda perdurarán para siempre en las olas del tiempo.");
        return view('cuerpo').view('head');  
    }
    
    
}
