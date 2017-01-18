<?php

namespace App\Http\Controllers;

use App\Inmueble;
use App\Imagen;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;


class InmuebleController extends Controller
{
    public function Deshabilitar(Request $request)
    {
        $inmueble = Inmueble::Find($request->get('id'));
        $inmueble->estado = (int)0;

        try {
            if ($inmueble->save()) {

                return response()->json(array(
                    'resultado' => 1,
                    'mensaje' => 'Se eliminó la propiedad correctamente',
                ));
            } else {
                return response()->json(array(
                    'resultado' => 0,
                    'mensaje' => 'Se encontraron problemas al eliminar la propiedad',
                ));
            }
        } catch (Exception $e) {
            return response()->json(array(
                'resultado' => -1,
                'mensaje' => 'Grave error: ' . $e,
            ));
        }

    }

    public function Actualizar(Request $request)
    {
        if (!$request->get('nombre')) {
            return response()->json(array(
                'resultado' => 0,
                'mensaje' => 'Debe ingresar el campo nombre para continuar',
            ));
        }

        if (!$request->get('contacto')) {
            return response()->json(array(
                'resultado' => 0,
                'mensaje' => 'Debe ingresar el campo contacto para continuar',
            ));
        }

        if (!$request->get('valor')) {
            return response()->json(array(
                'resultado' => 0,
                'mensaje' => 'Debe ingresar el campo valor para continuar',
            ));
        }

        if (!$request->get('direccion')) {
            return response()->json(array(
                'resultado' => 0,
                'mensaje' => 'Debe ingresar el campo direccion para continuar',
            ));
        }

        if (!$request->get('estado')) {
            return response()->json(array(
                'resultado' => 0,
                'mensaje' => 'Debe ingresar el campo estado para continuar',
            ));
        }

        if (!$request->get('descripcion')) {
            return response()->json(array(
                'resultado' => 0,
                'mensaje' => 'Debe ingresar el campo descripcion para continuar',
            ));
        }

        $inmueble = Inmueble::Find($request->get('id'));
        $inmueble->id_estado_inmueble = $request->get('estado');
        $inmueble->nombre = trim($request->get('nombre'));
        $inmueble->contacto = $request->get('contacto');
        $inmueble->valor = $request->get('valor');
        $inmueble->direccion = $request->get('direccion');
        $inmueble->descripcion = $request->get('descripcion');

        try {
            if ($inmueble->save()) {
                return response()->json(array(
                    'resultado' => 1,
                    'mensaje' => 'Se actualizó la propiedad correctamente',
                ));
            } else {
                return response()->json(array(
                    'resultado' => 0,
                    'mensaje' => 'Se encontraron problemas al actualiar la propiedad',
                ));
            }
        } catch (Exception $e) {
            return response()->json(array(
                'resultado' => -1,
                'mensaje' => 'Grave error: ' . $e,
            ));
        }

    }

    public function Guardar(Request $request)
    {
        if (!$request->get('nombre')) {
            return response()->json(array(
                'resultado' => 0,
                'mensaje' => 'Debe ingresar el campo nombre para continuar',
            ));
        }

        if (!$request->get('contacto')) {
            return response()->json(array(
                'resultado' => 0,
                'mensaje' => 'Debe ingresar el campo contacto para continuar',
            ));
        }

        if (!$request->get('valor')) {
            return response()->json(array(
                'resultado' => 0,
                'mensaje' => 'Debe ingresar el campo valor para continuar',
            ));
        }

        if (!$request->get('direccion')) {
            return response()->json(array(
                'resultado' => 0,
                'mensaje' => 'Debe ingresar el campo direccion para continuar',
            ));
        }

        if (!$request->get('estado')) {
            return response()->json(array(
                'resultado' => 0,
                'mensaje' => 'Debe ingresar el campo estado para continuar',
            ));
        }

        if (!$request->get('descripcion')) {
            return response()->json(array(
                'resultado' => 0,
                'mensaje' => 'Debe ingresar el campo descripcion para continuar',
            ));
        }

        $inmueble = new Inmueble;
        $inmueble->id_estado_inmueble = $request->get('estado');
        $inmueble->nombre = trim($request->get('nombre'));
        $inmueble->contacto = $request->get('contacto');
        $inmueble->valor = $request->get('valor');
        $inmueble->direccion = $request->get('direccion');
        $inmueble->descripcion = $request->get('descripcion');

        try {
            if ($inmueble->save()) {
                return response()->json(array(
                    'resultado' => 1,
                    'mensaje' => 'Se creó el usuario correctamente',
                ));
            } else {
                return response()->json(array(
                    'resultado' => 0,
                    'mensaje' => 'Se encontraron problemas al crear el usuario',
                ));
            }
        } catch (Exception $e) {
            return response()->json(array(
                'resultado' => -1,
                'mensaje' => 'Grave error: ' . $e,
            ));
        }
    }

    public function ConsultarId(Request $request)
    {
        try {
            $usuario = Inmueble::where('id','=',$request->get('id'))->get();

            if ($usuario) {
                return response()->json(array(
                    'resultado' => 1,
                    'mensaje' => 'Se econtraron datos',
                    'json' => $usuario
                ));
            } else {
                return response()->json(array(
                    'resultado' => 0,
                    'mensaje' => 'No se encontraron resultados para la consulta',
                ));
            }
        } catch (Exception $e) {
            return response()->json(array(
                'resultado' => -1,
                'mensaje' => 'Grave error: ' . $e,
            ));
        }
    }

    public function Consultar(Request $request)
    {
        $currentPage = $request->get('pagina');

        // Fuerza a estar en la pagina
        Paginator::currentPageResolver(function() use ($currentPage) {
            return $currentPage;
        });

        try {

            if ($request->get('buscar')) {
                $inmueble = Inmueble::select('inmueble.*','estado_inmueble.nombre as estado_inmueble')
                                    ->join('estado_inmueble','inmueble.id_estado_inmueble','=','estado_inmueble.id')
                                    ->whereRaw("(inmueble.nombre like '%".$request->get('buscar')."%'
                                                 OR inmueble.valor like '%".$request->get('buscar')."%'
                                                 OR inmueble.contacto like '%".$request->get('buscar')."%')")
                                    ->where('inmueble.estado', '=', '1')
                                    ->orderBy('inmueble.nombre', 'ASC')
                                    ->paginate($request->get('tamanhioPagina'));
            }
            else {

                $inmueble = Inmueble::select('inmueble.*','estado_inmueble.nombre as estado_inmueble')
                                    ->join('estado_inmueble','inmueble.id_estado_inmueble','=','estado_inmueble.id')
                                    ->where('inmueble.estado', '=', '1')
                                    ->orderBy('inmueble.nombre', 'ASC')
                                    ->paginate($request->get('tamanhioPagina'));
            }


            if (count($inmueble)) {
                return response()->json(array(
                    'resultado' => 1,
                    'mensaje'   => 'Se econtraron datos',
                    'json'      => $inmueble
                ));
            }
            else {
                return response()->json(array(
                    'resultado' => 0,
                    'mensaje'   => 'No se encontraron resultados para la consulta',
                ));
            }
        }
        catch (Exception $e) {
            return response()->json(array(
                'resultado' => -2,
                'mensaje'   => 'Grave error: ' . $e,
            ));
        }
    }

    public function Buscador(Request $request)
    {
        $where = '';
        $orderBy1 = '';
        $orderBy2 = '';
        $condicion = ' ';

        if ($request->get('descripcion')) {

            $where .= "$condicion inmueble.nombre LIKE '%" . $request->get('descripcion') . "%'";
            $condicion = ' AND ';
        }

        if ($request->get('estado')) {

            $where .= "$condicion inmueble.estado_inmueble LIKE '%" . $request->get('estado') . "%'";
            $condicion = ' AND ';
        }

        if ($request->get('valor')) {

            $arregloValor = explode($request->get('valor'),';');

            $where .= " $condicion inmueble.valor >= " . $arregloValor[0];

            if ($arregloValor[1] != 'adelante') {

                $where .= " $condicion inmueble.valor <= " . $arregloValor[0];
            }
        }

        $currentPage = $request->get('pagina');

        // Fuerza a estar en la pagina
        Paginator::currentPageResolver(function() use ($currentPage) {
            return $currentPage;
        });

        try {

            $orderBy1 = !$where ? 'inmueble.nombre' : 'inmueble.id';
            $orderBy2 = !$where ? 'ASC' : 'DESC';
            $where    = !$where ? 'inmueble.estado = 1' : 'AND inmueble.estado = 1';

            $inmueble = Inmueble::select('inmueble.*','estado_inmueble.nombre as estado_inmueble')
                ->join('estado_inmueble','inmueble.id_estado_inmueble','=','estado_inmueble.id')
                ->whereRaw($where)
                ->orderBy($orderBy1, $orderBy2)
                ->paginate($request->get('tamanhioPagina'));


            if (count($inmueble)) {

                // Busqueda de imagenes
                $arreglo = array();

                foreach ($inmueble as $listado) {

                    try {
                        $imagen = Imagen::where('id_inmueble', '=', $listado->id)->orderBy('id_inmueble', 'ASC')->get();

                        foreach ($imagen as $listadoImagen) {
                            $arreglo[$listado->id][] = $listadoImagen->ruta;

                        }
                    }
                    catch (Exception $e) {
                        null;
                    }
                }
                // Fin de busqueda de imagen

                return array(
                    'resultado' => 1,
                    'mensaje'   => 'Se econtraron datos',
                    'datos'      => $inmueble->toArray(),
                    'imagenes'  => $arreglo
                );
            }
            else {
                return array(
                    'resultado' => 0,
                    'mensaje'   => 'No se encontraron resultados para la consulta',
                );
            }
        }
        catch (Exception $e) {
            return array(
                'resultado' => -2,
                'mensaje'   => 'Grave error: ' . $e,
            );
        }
    }
}
