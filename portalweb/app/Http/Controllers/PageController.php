<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;
use App\Preinscripcion;
use App\Post;
use App\Foto;
use App\Slider;
use Illuminate\Support\Facades\Redirect;


class PageController extends Controller
{

    public function index()
    {
        $publicaciones = Post::orderBy('id', 'DESC')->paginate(4);
        $especialidades = Curso::where(['tipo'=>1])->get();
        $sliders = Slider::all();
        $curso = Curso::orderBy('fecha_inicio', 'DES')->take(5)->get();
        return view('index', ["post" => $publicaciones,"curso"=>$curso,'sliders'=>$sliders,'especialidades'=>$especialidades]);
    }

    public function posts($id)
    {
        $sliders = Slider::all();
        $especialidades = Curso::where(['tipo'=>1])->get();
        $post = Post::find($id);
        if (!$post) {
            abort(404);
        }
        $publicaciones = Post::orderBy('updated_at', 'DESC')->get();
        if ($publicaciones) {
            $longitud = count($publicaciones);
            $next = null;
            $previous = null;
            for ($i = 0; $i < $longitud; $i++) {
                if ($i < $longitud - 1) {
                    if ($publicaciones[$i + 1]->id == $post->id) {
                        $previous = $publicaciones[$i];
                    }
                }
                if ($i != 0) {
                    if ($publicaciones[$i - 1]->id == $post->id) {
                        $next = $publicaciones[$i];
                    }
                }
            }
            return view('posts', ["post" => $post, "next" => $next, "previous" => $previous,'sliders'=>$sliders,'especialidades'=>$especialidades]);
        } else {
            abort(404);
        }
    }

    public function courseDescription($id)
    {
        $curso = Curso::find($id);
        $especialidades = Curso::where(['tipo'=>1])->get();
        $sliders = Slider::all();
        if (!$curso) {
            abort(404);
        }
        $interes = ['Bajo', 'Medio', 'Alto'];
        return view('courseDescription', array('curso' => $curso, 'interes' => $interes,'sliders'=>$sliders,'especialidades'=>$especialidades));
    }

    public function coursesView()
    {
        $curso = Curso::orderBy('fecha_inicio', 'ASC')->where(['tipo'=>0])->paginate(4);
        $curso->setPath('cursos');
        $sliders = Slider::all();
        $especialidades = Curso::where(['tipo'=>1])->get();
        $interes = ['Bajo', 'Medio', 'Alto'];
        $cursos = Curso::all();
        return view('courses', array('curso' => $curso, 'interes' => $interes, 'cursos' => $cursos,'sliders'=>$sliders,'especialidades'=>$especialidades));
    }

    public function photosView()
    {
        $fotos = Foto::orderBy('id','DESC')->paginate(12);
        $sliders = Slider::all();
        $especialidades = Curso::where(['tipo'=>1])->get();
        $fotos->setPath('galeria');
        return view('gallery', array("fotos" => $fotos,'sliders'=>$sliders,'especialidades'=>$especialidades));
    }

    public function informationView()
    {
        $sliders = Slider::all();
        $especialidades = Curso::where(['tipo'=>1])->get();
        return view('information',array('sliders'=>$sliders,'especialidades'=>$especialidades));
    }

    public function preinscripcionView()
    {
        $interes = ['Bajo', 'Medio', 'Alto'];
        $cursos = Curso::all();
        $sliders = Slider::all();
        $especialidades = Curso::where(['tipo'=>1])->get();
        return view('preinscription', array("curso" => $cursos, "interes" => $interes,'sliders'=>$sliders,'especialidades'=>$especialidades));
    }

    public function newsView()
    {
        $sliders = Slider::all();
        $especialidades = Curso::where(['tipo'=>1])->get();
        $noticias = Post::orderBy('updated_at', 'DESC')->paginate(8);
        $noticias->setPath('/pagina/public/post');
        return view('noticias', array('noticias' => $noticias,'sliders'=>$sliders,'especialidades'=>$especialidades));
    }

    public function contactView()
    {
        $sliders = Slider::all();
        $especialidades = Curso::where(['tipo'=>1])->get();
        return View('contact',['sliders'=>$sliders,'especialidades'=>$especialidades]);
    }

    public function savePreinscription(Request $request)
    {
        $preinscripcion = new Preinscripcion;
        $preinscripcion->dni = $request->input('dni');
        $preinscripcion->nombre = $request->input('nombre');
        $preinscripcion->apellido = $request->input('apellido');
        $preinscripcion->telefono = $request->input('telefono');
        $preinscripcion->email = $request->input('email');
        $preinscripcion->curso = $request->input('curso');
        $preinscripcion->interes = $request->input('interes');
        $preinscripcion->save();
        return Redirect::to('/');
    }

}

?>
