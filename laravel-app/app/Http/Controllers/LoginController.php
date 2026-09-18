<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class LoginController extends Controller
{
    public function index()
    {
        return view ('welcome');
    }
 
    public function prueba()
    {
        $n1 = 5;
        $n2 = 10;
 
        $resultado = $this -> suma ($n1,$n2);
 
        //echo "Prueba desde el Controlador LoginController";
        //echo "<br>";
        //echo "La suma de $n1 + $n2 es: " . $this->suma($n1, $n2);
        return view('prueba', compact('resultado', 'n1', 'n2'));
    }
 
    function sumar(Request $request, $n1, $n2)
        {  
            //dd($request);
            //$n1 = $request->n1;
            //$n2 = $request->n2;
            $resultado = $this -> suma ($n1,$n2);
 
            //echo "Prueba desde el Controlador LoginController";
            //echo "<br>";
            //echo "La suma de $n1 + $n2 es: " . $this->suma($n1, $n2);
            return view('operaciones.sumar', compact('resultado', 'n1', 'n2'));
        }
 
    public function suma($n1, $n2)
    {
        $resultado = $n1 + $n2;
        return $resultado;
    }

    function multiplicar(Request $request, $n1, $n2)
    {  
        //dd($request);
        //$n1 = $request->n1;
        //$n2 = $request->n2;
        $resultado = $this -> multiplicacion ($n1,$n2);

        //echo "Prueba desde el Controlador LoginController";
        //echo "<br>";
        //echo "La suma de $n1 + $n2 es: " . $this->suma($n1, $n2);
        return view('operaciones.multiplicar', compact('resultado', 'n1', 'n2'));
    }
    function multiplicacion($n1, $n2)
    {
        $resultado = $n1 * $n2;
        return $resultado;
    }
    function dividir(Request $request, $n1, $n2)
    {  
        //dd($request);
        //$n1 = $request->n1;
        //$n2 = $request->n2;
        $resultado = $this -> division ($n1,$n2);

        //echo "Prueba desde el Controlador LoginController";
        //echo "<br>";
        //echo "La suma de $n1 + $n2 es: " . $this->suma($n1, $n2);
        return view('operaciones.dividir', compact('resultado', 'n1', 'n2'));
    }
    function division($n1, $n2)
    {
        $resultado = $n1 / $n2;
        return $resultado;
    }
    public function ope(){
        return view('operaciones.operaciones');
    }
   function operacion(Request $request)
  
    {  
        dd($request);
        //$n1 = $request->n1;
        //$n2 = $request->n2;
        switch ($operacion) {
            case 'sumar':
                $resultado = $this -> suma ($n1,$n2);
                break;
            case 'multiplicar':
                $resultado = $this -> multiplicacion ($n1,$n2);
                break;
            case 'dividir':
                if ($n1 != 0 && $n2 != 0) {
                    $resultado = $this -> division ($n1,$n2);
                } else {
                    return "No se puede dividir por cero";
                }
                break;
            case 'restar':
                $resultado = $n1 - $n2;
                break;
            default:
                return "Operación no válida";
        }
        return view('operaciones.operaciones', compact('resultado', 'n1', 'n2', 'operacion'));
    }
}
 
 
 